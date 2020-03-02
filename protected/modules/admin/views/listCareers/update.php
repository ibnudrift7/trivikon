<?php
$this->breadcrumbs=array(
	'List Careers'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'List Careers',
	'subtitle'=>'Edit List Careers',
);

$this->menu=array(
	array('label'=>'List List Careers', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add List Careers', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View List Careers', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>