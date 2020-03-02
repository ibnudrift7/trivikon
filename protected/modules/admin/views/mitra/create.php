<?php
$this->breadcrumbs=array(
	'Komunitas'=>array('index'),
	'Add',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Komunitas',
	'subtitle'=>'Add Komunitas',
);

$this->menu=array(
	array('label'=>'List Komunitas', 'icon'=>'th-list','url'=>array('index')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>