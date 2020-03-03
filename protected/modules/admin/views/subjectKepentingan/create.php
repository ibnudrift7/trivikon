<?php
$this->breadcrumbs=array(
	'Tugas Kepentingan'=>array('index'),
	'Add',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Tugas Kepentingan',
	'subtitle'=>'Add Tugas Kepentingan',
);

$this->menu=array(
	array('label'=>'List Tugas Kepentingan', 'icon'=>'th-list','url'=>array('index')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>