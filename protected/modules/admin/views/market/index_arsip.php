<?php
$this->breadcrumbs=array(
	($_GET['tipe'] == 'market')? 'Cari' : 'Jual',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>($_GET['tipe'] == 'market')? 'Cari Arsip' : 'Jual Arsip',
	'subtitle'=>($_GET['tipe'] == 'market')? 'Cari Arsip' : 'Jual Arsip',
);

$this->menu=array(
	// array('label'=>'Add Market Arsip', 'icon'=>'th-list','url'=>array('create')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
    )); ?>

<?php endif; ?>
<h1><?php echo ($_GET['tipe'] == 'market')? 'Cari Arsip' : 'Promo Arsip'; ?></h1>
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
		array(
			'header'=>'Tgl Expired',
			'type'=>'raw',
			'value'=>'date("d M Y", strtotime($data->tgl_expired))',
		),

		array(
			'header'=>'Keterangan Deal',
			'type'=>'raw',
			'value'=>'($data->deal == 1)? "Deal" : "No Deal" ',
		),

		/*
		'image',
		'deskripsi',
		'provinsi',
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
		// 'hide_apk',
		array(
			'header'=>'Delete Apps',
			'type'=>'raw',
			'value'=>'($data->hide_apk == 1)? "Deleted" : "View" ',
		),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} {delete} {delete_apk}',
			'buttons'=>array
					    (
					        'delete_apk' => array
					        (
					            'label'=>'<i class="fa fa-cog">',
					            'url'=>'Yii::app()->createUrl("/admin/market/hideapk", array("id"=>$data->id))',
					            'options'=> array( 'title'=> 'Delete Apps'),
					        ),
					    ),
		),
	),
)); ?>
 <!-- {delete} -->