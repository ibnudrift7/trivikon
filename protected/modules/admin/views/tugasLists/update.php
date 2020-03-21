<?php
$this->breadcrumbs=array(
	'Tugas Item'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Tugas Item',
	'subtitle'=>'Edit Tugas Item',
);

$this->menu=array(
	array('label'=>'List Tugas Item', 'icon'=>'th-list','url'=>array('index', 'subject'=> $model->subject_kepentingan)),
	array('label'=>'Add Tugas Item', 'icon'=>'plus-sign','url'=>array('create', 'subject'=> $model->subject_kepentingan)),
	// array('label'=>'View Tugas Item', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>