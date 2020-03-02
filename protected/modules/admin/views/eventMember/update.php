<?php
$this->breadcrumbs=array(
	'Event Member'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Event Member',
	'subtitle'=>'Edit Event Member',
);

$this->menu=array(
	array('label'=>'List Event Member', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add Event Member', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Event Member', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>