<?php
$this->breadcrumbs=array(
	'Addresscompanies'=>array('index'),
	// $model->title=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Address Company',
	'subtitle'=>'Edit Address Company',
);

$this->menu=array(
	array('label'=>'List Address Company', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add Address Company', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Address Company', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>