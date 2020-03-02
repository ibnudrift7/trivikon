<?php
$this->breadcrumbs=array(
	'Tb Pengumumen'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TbPengumuman', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add TbPengumuman', 'icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Edit TbPengumuman', 'icon'=>'pencil','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete TbPengumuman', 'icon'=>'trash','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View TbPengumuman #<?php echo $model->id; ?></h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'titles',
		'contents',
		'aktif',
		'date_input',
		'urutan',
	),
)); ?>
