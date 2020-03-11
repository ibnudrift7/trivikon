<?php
$this->breadcrumbs=array(
	'Tugas List',
);

$dn_kepentingan = TugasKepentingan::model()->findByPk($_GET['kepentingan_id']);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Pemberi Tugas List',
	'subtitle'=>'Tugas Anda > Subject '. $dn_kepentingan->nama_kepentingan,
);

$this->menu=array(
	array('label'=>'Back', 'icon'=>'','url'=>array('/home/subject_list', 'kepentingan_id'=> $_GET['kepentingan_id'])),
	array('label'=>'Tambah Tugas', 'icon'=>'plus-sign','url'=>array('create', 'kepentingan_id'=> $_GET['kepentingan_id'])),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>
    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
        'fade'=> false,
    )); ?>
<?php endif; ?>
<h1>Tugas List</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'tugas-lists-grid',
	'dataProvider'=>$model->search2(),
	// 'filter'=>$model,
	'enableSorting'=>false,
	'summaryText'=>false,
	'type'=>'bordered',
	'columns'=>array(
		// 'id',
		'dari',
		'kepada',
		'prioritas',
		// 'subject_kepentingan',
		// 'deskripsi',
		array(
			'header'=>'Deskripsi',
			'type'=>'raw',
			'value'=> 'substr($data->deskripsi, 0, 50)."..."',
		),
		'status',
		'status_selesai',
		// 'date_finish',
		array(
			'header'=>'Date Finish',
			'type'=>'raw',
			'value'=> 'date("d-m-Y", strtotime($data->date_finish))',
		),
		
		// array(
		// 	'header'=>'Countdown',
		// 	'type'=>'raw',
		// 	'value'=>'TugasLists::get_coundDown($data->date_finish)',
		// ),

		/*
		'date_selesai_user',
		'member_id',
		'admin_id',
		'date_input',
		'data',
		'date_start_user',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update}',
		),
	),
)); ?>


<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready( function () {
	    $('.table').DataTable();
	} );
</script>