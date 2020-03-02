<?php
$this->breadcrumbs=array(
	'Directors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Directors', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add Directors', 'icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Edit Directors', 'icon'=>'pencil','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Directors', 'icon'=>'trash','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Directors #<?php echo $model->id; ?></h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'category',
		'nama',
		'jabatan_id',
		'jabatan_en',
		'images',
		'sorting',
		'status',
	),
)); ?>
