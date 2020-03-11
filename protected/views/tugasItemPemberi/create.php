<?php
$this->breadcrumbs=array(
	'Tugas List'=>array('index'),
	'Add',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Tugas List',
	'subtitle'=>'Add Tugas List',
);

$this->menu=array(
	array('label'=>'List Tugas List', 'icon'=>'th-list','url'=>array('index', 'kepentingan_id'=> $_GET['kepentingan_id'])),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>