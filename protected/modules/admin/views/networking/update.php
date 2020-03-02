<?php
$this->breadcrumbs=array(
	'Networking'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-bank',
	'title'=>'Networking',
	'subtitle'=>'Edit Networking',
);

$this->menu=array(
	array('label'=>'List Networking', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add Networking', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Networking', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>