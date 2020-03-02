<?php
$this->breadcrumbs=array(
	'Penawaran Lists'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PenawaranList', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add PenawaranList', 'icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Edit PenawaranList', 'icon'=>'pencil','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete PenawaranList', 'icon'=>'trash','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View PenawaranList #<?php echo $model->id; ?></h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'market_id',
		'user_post_id',
		'user_tawar_id',
		'nama',
		'deal',
		'tgl_input',
	),
)); ?>
