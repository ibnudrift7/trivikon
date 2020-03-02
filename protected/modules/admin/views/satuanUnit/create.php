<?php
$this->breadcrumbs=array(
	'Satuan Unit'=>array('index'),
	'Add',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Satuan Unit',
	'subtitle'=>'Add Satuan Unit',
);

$this->menu=array(
	array('label'=>'List Satuan Unit', 'icon'=>'th-list','url'=>array('index')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>