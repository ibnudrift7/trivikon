<?php
$this->breadcrumbs=array(
	'Tugas List'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Tugas List',
	'subtitle'=>'Edit Tugas List',
);

$this->menu=array(
	array('label'=>'List Tugas List', 'icon'=>'th-list','url'=>array('index', 'kepentingan_id'=> $model->subject_kepentingan)),
	// array('label'=>'Add Tugas List', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Tugas List', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model, 'mod_komen'=> $mod_komen)); ?>