<?php
$this->breadcrumbs=array(
	'Satuan Unit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Satuan Unit',
	'subtitle'=>'Data Satuan Unit',
);

$this->menu=array(
	array('label'=>'Add Satuan Unit', 'icon'=>'th-list','url'=>array('create')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
    )); ?>

<?php endif; ?>
<h1>Satuan Unit</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'satuan-unit-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'enableSorting'=>false,
	'summaryText'=>false,
	'type'=>'bordered',
	'columns'=>array(
		// 'id',
		'nama',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} &nbsp; {delete}',
		),
	),
)); ?>
