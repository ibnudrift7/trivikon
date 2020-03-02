<?php
$this->breadcrumbs=array(
	'Careers'=>array('index'),
	// $model->title=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Career',
	'subtitle'=>'Edit Career',
);

$this->menu=array(
	array('label'=>'List Career', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add Career', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Career', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>