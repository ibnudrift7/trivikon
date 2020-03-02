<?php
$this->breadcrumbs=array(
	'Industry Application'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-tags',
	'title'=>'Industry Application',
	'subtitle'=>'Data Industry Application',
);

$this->menu=array(
	array('label'=>'List Industry Application', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add Industry Application', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Industry Application', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php echo $this->renderPartial('_form',array('model'=>$model, 'modelDesc'=>$modelDesc)); ?>
