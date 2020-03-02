<?php
$this->breadcrumbs=array(
	'Kategori Usahas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List KategoriUsaha', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add KategoriUsaha', 'icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Edit KategoriUsaha', 'icon'=>'pencil','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete KategoriUsaha', 'icon'=>'trash','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View KategoriUsaha #<?php echo $model->id; ?></h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		'jenis_usaha_id',
		'jenis_usaha_nama',
	),
)); ?>
