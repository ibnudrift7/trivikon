<?php
$this->breadcrumbs=array(
	'Tugas Lists'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TugasLists', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add TugasLists', 'icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Edit TugasLists', 'icon'=>'pencil','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete TugasLists', 'icon'=>'trash','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View TugasLists #<?php echo $model->id; ?></h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'dari',
		'kepada',
		'prioritas',
		'subject_kepentingan',
		'deskripsi',
		'status',
		'status_selesai',
		'member_id',
		'admin_id',
		'date_input',
		'date_finish',
		'data',
	),
)); ?>
