<?php
$this->breadcrumbs=array(
	'Industry Application'=>array('index'),
	'Add',
);

$this->pageHeader=array(
	'icon'=>'fa fa-tags',
	'title'=>'Industry Application',
	'subtitle'=>'Data Industry Application',
);

$this->menu=array(
	array('label'=>'List Industry Application', 'icon'=>'th-list','url'=>array('index')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php echo $this->renderPartial('_form', array('model'=>$model, 'modelDesc'=>$modelDesc)); ?>
