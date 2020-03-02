<?php 
	$criteria = new CDbCriteria;
	$criteria->with = array('description');
	$criteria->addCondition('description.language_id = :language_id');
	$criteria->params[':language_id'] = 2;
	$criteria->addCondition('t.id = :id');
	$criteria->params[':id'] = $_GET['category'];
	$criteria->group = 't.id';
	$criteria->order = 't.sort ASC';
	$detailCategory = PrdCategory2::model()->find($criteria);
	$titles_subm = $detailCategory->description->name;
?>
<?php
$this->breadcrumbs=array(
	'PDF',
);

$this->pageHeader=array(
	'icon'=>'fa fa-bank',
	'title'=>'PDF',
	'subtitle'=>'Data PDF > '. $titles_subm,
);

$this->menu=array(
	array('label'=>'Add PDF', 'icon'=>'plus-sign','url'=>array('create', 'category'=>$_GET['category'])),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
    )); ?>

<?php endif; ?>
<div class="row-fluid">
	<div class="span8">
<h1>PDF</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'bank-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'enableSorting'=>false,
	'summaryText'=>false,
	'type'=>'bordered',
	'columns'=>array(
		// 'id',
		// 'ib_bank',
		'nama_en',
		'sort',
		'file',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} &nbsp; {delete}',
			'deleteButtonUrl'=>'CHtml::normalizeUrl(array("delete", "id"=>$data->id, "category"=>"'.$_GET['category'].'"))',
			'updateButtonUrl'=>'CHtml::normalizeUrl(array("update", "id"=>$data->id, "category"=>"'.$_GET['category'].'"))',
		),
	),
)); ?>
</div>
	<div class="span4">
		<?php $this->renderPartial('/setting/page_menu') ?>
	</div>
</div>