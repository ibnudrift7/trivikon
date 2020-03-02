<?php
$this->breadcrumbs=array(
	'Email Career'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-bank',
	'title'=>'Email Career',
	'subtitle'=>'Edit Email Career',
);

$this->menu=array(
	array('label'=>'List Email Career', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add Email Career', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Email Career', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>