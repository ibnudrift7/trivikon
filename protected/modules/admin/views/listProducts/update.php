<?php
$this->breadcrumbs=array(
	'List Products'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'List Products',
	'subtitle'=>'Edit List Products',
);

$this->menu=array(
	array('label'=>'List List Products', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add List Products', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View List Products', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>