<?php
$this->breadcrumbs=array(
	'Tugas Item'=>array('index'),
	'Add',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Tugas Item',
	'subtitle'=>'Add Tugas Item',
);

$this->menu=array(
	array('label'=>'List Tugas Item', 'icon'=>'th-list','url'=>array('index', 'subject'=> $_GET['subject'])),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>