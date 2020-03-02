<?php
$this->breadcrumbs=array(
	'Tb Markets'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TbMarket','url'=>array('index')),
	array('label'=>'Add TbMarket','url'=>array('create')),
);
?>

<h1>Manage Tb Markets</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'tb-market-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'invoice_no',
		'nama',
		'kategori_id',
		'keyword',
		'nama_perusahaan',
		/*
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
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
