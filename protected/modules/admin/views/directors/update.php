<?php
$this->breadcrumbs=array(
	'Directors'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Directors',
	'subtitle'=>'Edit Directors',
);

$this->menu=array(
	array('label'=>'List Directors', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add Directors', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Directors', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>