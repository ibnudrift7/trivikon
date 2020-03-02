<?php
$this->breadcrumbs=array(
	'Satuan Units'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Satuan Unit',
	'subtitle'=>'Edit Satuan Unit',
);

$this->menu=array(
	array('label'=>'List Satuan Unit', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add Satuan Unit', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Satuan Unit', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>