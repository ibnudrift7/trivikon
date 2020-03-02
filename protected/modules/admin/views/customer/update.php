<?php
$this->breadcrumbs=array(
	'Member'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-group',
	'title'=>'Member',
	'subtitle'=>'Edit Member',
);

$this->menu=array(
	array('label'=>'List Member', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add Member', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Member', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php echo $this->renderPartial('_form',array('model'=>$model, 'provinsi'=> $provinsi)); ?>