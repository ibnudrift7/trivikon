<?php
$this->breadcrumbs=array(
	'Event'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-tag',
	'title'=>'Event',
	'subtitle'=>'Data Event',
);

$this->menu=array(
	array('label'=>'List Event', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add Event', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Event', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php echo $this->renderPartial('_form',array('model'=>$model, 'modelDesc'=>$modelDesc, 'modelImage'=>$modelImage)); ?>
