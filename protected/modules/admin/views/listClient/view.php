<?php
$this->breadcrumbs=array(
	'List Clients'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ListClient', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add ListClient', 'icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Edit ListClient', 'icon'=>'pencil','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete ListClient', 'icon'=>'trash','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View ListClient #<?php echo $model->id; ?></h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'image',
		'active',
		'sorting',
	),
)); ?>
