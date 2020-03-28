<?php
$this->breadcrumbs=array(
	'Jabatan',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Jabatan',
	'subtitle'=>'Data Jabatan',
);

$this->menu=array(
	array('label'=>'Add Jabatan', 'icon'=>'plus-sign','url'=>array('create')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
    )); ?>

<?php endif; ?>
<h1>Jabatan</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'jabatan-grid',
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
			'template'=>'{delete}',
		),
	),
)); ?>
