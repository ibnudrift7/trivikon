<?php
$this->breadcrumbs=array(
	'Tb Mitras'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Komunitas',
	'subtitle'=>'Edit Komunitas',
);

$this->menu=array(
	array('label'=>'List Komunitas', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add Komunitas', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Komunitas', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>