<?php
$this->breadcrumbs=array(
	'Tugas Kepentingan'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Tugas Kepentingan',
	'subtitle'=>'Edit Tugas Kepentingan',
);

$this->menu=array(
	array('label'=>'List Tugas Kepentingan', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add Tugas Kepentingan', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Tugas Kepentingan', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>