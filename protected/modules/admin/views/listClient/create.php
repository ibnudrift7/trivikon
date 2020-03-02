<?php
$this->breadcrumbs=array(
	'List Clients'=>array('index'),
	'Add',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'List Client',
	'subtitle'=>'Add List Client',
);

$this->menu=array(
	array('label'=>'List List Client', 'icon'=>'th-list','url'=>array('index')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>