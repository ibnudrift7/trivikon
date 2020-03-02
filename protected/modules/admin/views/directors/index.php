<?php
$this->breadcrumbs=array(
	'Directors',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Directors',
	'subtitle'=>'Data Directors',
);

$this->menu=array(
	array('label'=>'Add Directors', 'icon'=>'plus-sign','url'=>array('create')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
    )); ?>

<?php endif; ?>
<h1>Directors</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'directors-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'enableSorting'=>false,
	'summaryText'=>false,
	'type'=>'bordered',
	'columns'=>array(
		// 'id',
		'nama',
		// 'category',
		array(
			'header' => 'Category',
			'type'=> 'raw',
			'value' => '($data->category == "1")? "Commisioner": "Directors"'
		),
		// 'jabatan_id',
		// 'jabatan_en',
		// 'images',
		/*
		'sorting',
		'status',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} &nbsp; {delete}',
		),
	),
)); ?>
