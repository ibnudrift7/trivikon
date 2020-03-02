<?php
$this->breadcrumbs=array(
	'Tb Event Members'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TbEventMember', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add TbEventMember', 'icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Edit TbEventMember', 'icon'=>'pencil','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete TbEventMember', 'icon'=>'trash','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View TbEventMember #<?php echo $model->id; ?></h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'admin_id',
		'nama',
		'image',
		'content',
		'tgl_event',
		'aktif',
	),
)); ?>
