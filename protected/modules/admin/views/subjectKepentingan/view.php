<?php
$this->breadcrumbs=array(
	'Tugas Kepentingans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TugasKepentingan', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add TugasKepentingan', 'icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Edit TugasKepentingan', 'icon'=>'pencil','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete TugasKepentingan', 'icon'=>'trash','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View TugasKepentingan #<?php echo $model->id; ?></h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'kepentingan',
		'nama_kepentingan',
	),
)); ?>
