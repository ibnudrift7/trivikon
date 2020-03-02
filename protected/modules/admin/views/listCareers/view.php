<?php
$this->breadcrumbs=array(
	'List Careers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ListCareers', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add ListCareers', 'icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Edit ListCareers', 'icon'=>'pencil','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete ListCareers', 'icon'=>'trash','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View ListCareers #<?php echo $model->id; ?></h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama_perusahaan',
		'lokasi_perusahaan',
		'gaji_sekitar',
		'min_pendidikan',
		'min_pengalaman',
		'deskripsi_pekerjaan',
		'date_input',
		'status',
	),
)); ?>
