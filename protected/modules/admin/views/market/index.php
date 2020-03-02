<?php
$this->breadcrumbs=array(
	($_GET['tipe'] == 'market')? 'Cari' : 'Jual',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>($_GET['tipe'] == 'market')? 'Cari' : 'Jual',
	'subtitle'=> ($_GET['tipe'] == 'market')? 'Data Cari' : 'Data Jual',
);

$this->menu=array(
	// array('label'=>'Add Market', 'icon'=>'th-list','url'=>array('create')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
    )); ?>

<?php endif; ?>
<h1><?php echo ($_GET['tipe'] == 'market')? 'Cari' : 'Jual' ?></h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'tb-market-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'enableSorting'=>false,
	'summaryText'=>false,
	'type'=>'bordered',
	'columns'=>array(
		// 'id',
		// 'invoice_no',
		array(
            'header' => 'No',
            'type'=>'raw',
            'value' => '$row + ($this->grid->dataProvider->pagination->currentPage
                * $this->grid->dataProvider->pagination->pageSize) + 1',
            ),
		// 'kategori_id',
		array(
			'header'=>'Kategori',
			'type'=>'raw',
			'value'=>'KategoriUsaha::model()->findByPk($data->kategori_id)->nama',
		),
		// 'keyword',
		'nama_perusahaan',
		'nama',
		'nama_post',
		'harga_total',
		// 'tgl_expired',
		array(
			'header'=>'Tgl Expired',
			'type'=>'raw',
			'value'=>'date("d M Y", strtotime($data->tgl_expired))',
		),

		/*
		'tgl_input',
		'kota',
		'image',
		'deskripsi',
		'provinsi',
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
			'template'=>'{update} {arsip}',
			'buttons'=>array
					    (
					        'arsip' => array
					        (
					            'label'=>'<i class="fa fa-key">',
					            'url'=>'Yii::app()->createUrl("/admin/market/marsip", array("id"=>$data->id))',
					            'options'=> array( 'title'=> 'Arsip Data'),
					        ),
					    ),
		),
	),
)); ?>
