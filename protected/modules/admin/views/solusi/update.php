<?php
$this->breadcrumbs=array(
	'Solusi'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-book',
	'title'=>'Solusi',
	'subtitle'=>'Data Solusi',
);

$this->menu=array(
	array('label'=>'List Solusi', 'icon'=>'th-list','url'=>array('index')),
	// array('label'=>'Add Solusi', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Solusi', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php echo $this->renderPartial('_form',array('model'=>$model, 'modelDesc'=>$modelDesc)); ?>
