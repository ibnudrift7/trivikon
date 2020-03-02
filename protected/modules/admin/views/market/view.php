<?php
$this->breadcrumbs=array(
	'Tb Markets'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TbMarket', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add TbMarket', 'icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Edit TbMarket', 'icon'=>'pencil','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete TbMarket', 'icon'=>'trash','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View TbMarket #<?php echo $model->id; ?></h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'invoice_no',
		'nama',
		'kategori_id',
		'keyword',
		'nama_perusahaan',
		'image',
		'nama_post',
		'deskripsi',
		'provinsi',
		'kota',
		'harga_total',
		'tgl_input',
		'tgl_expired',
		'foto',
		'detail_info',
		'user_id_post',
		'admin_id',
		'user_id_deal',
		'deal',
		'tgl_deal',
		'aktif',
	),
)); ?>
