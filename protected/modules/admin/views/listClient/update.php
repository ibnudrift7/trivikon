<?php
$this->breadcrumbs=array(
	'List Clients'=>array('index'),
	// $model->name=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'List Client',
	'subtitle'=>'Edit List Client',
);

$this->menu=array(
	array('label'=>'List List Client', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add List Client', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View List Client', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>