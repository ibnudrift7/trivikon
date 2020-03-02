<?php
$this->breadcrumbs=array(
	'List Products',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'List Products',
	'subtitle'=>'Data List Products',
);

$this->menu=array(
	array('label'=>'Add List Products', 'icon'=>'plus-sign','url'=>array('create')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>
    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
    )); ?>
<?php endif; ?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	<div class="row-fluid">
		<div class="span3">
			<?php 
			$criteria=new CDbCriteria;
			$criteria->with = array('description');
			$criteria->addCondition('description.language_id = :language_id');
			$criteria->params[':language_id'] = $this->languageID;
			$criteria->addCondition('t.parent_id = 0');
			$criteria->order = 't.sort ASC';

			$alln_cat = PrdCategory::model()->findAll($criteria);
			$data_cat_parent = array();
			foreach ($alln_cat as $key => $value) {
				$data_cat_parent[$value->id] = $value->description->name;
			}
			?>
			<?php echo $form->dropDownListRow($model, 'category_id', $data_cat_parent, array('class'=>'span12','empty'=>'-- Pilih Category --')); ?>
		</div>
		<div class="span3">
			<?php echo $form->textFieldRow($model,'film_grade', array('class'=>'span12','maxlength'=>200,)); ?>
		</div>
		<div class="span3">
			<label>&nbsp;</label>
			<?php $this->widget('bootstrap.widgets.TbButton', array(
				'buttonType'=>'submit',
				'type'=>'primary',
				'label'=>'Search',
			)); ?>
			<?php $this->widget('bootstrap.widgets.TbButton', array(
				// 'buttonType'=>'button',
				'type'=>'primary',
				'label'=>'Reset',
				'url'=>Yii::app()->createUrl($this->route),
			)); ?>
		</div>
	</div>


<?php $this->endWidget(); ?>

<h1>List Products</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'list-products-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'enableSorting'=>false,
	'summaryText'=>false,
	'type'=>'bordered',
	'columns'=>array(
		// 'id',
		// 'category_id',
		// 'sub_cat1',
		// 'sub_cat2',
		// 'sub_cat3',
		// array(
  //           'name'=>'category_id',
  //           'type'=>'html',
  //           'value'=>'ViewCategory::model()->find("id2 = ". $data->category_id)->name',
  //       ),
        array(
            'name'=>'category_id',
            'type'=>'html',
            'value'=>'ViewCategory::model()->getSubName($data->category_id)',
        ),
        array(
            'name'=>'sub_cat1',
            'type'=>'html',
            'value'=>'ViewCategory::model()->getSubName($data->sub_cat1)',
        ),
        array(
            'name'=>'sub_cat2',
            'type'=>'html',
            'value'=>'ViewCategory::model()->getSubName($data->sub_cat2)',
        ),
        array(
            'name'=>'sub_cat3',
            'type'=>'html',
            'value'=>'ViewCategory::model()->getSubName($data->sub_cat3)',
        ),
		'film_grade',
		/*
		'technical_data',
		'film_description',
		'actives',
		'sortings',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} &nbsp; {delete}',
		),
	),
)); ?>
