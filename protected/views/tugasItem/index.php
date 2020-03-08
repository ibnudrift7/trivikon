<?php
$this->breadcrumbs=array(
	'Tugas List',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Tugas List',
	'subtitle'=>'Data Kepentingan > Kepentingan A',
);

$this->menu=array(
	array('label'=>'Add Tugas List', 'icon'=>'th-list','url'=>array('create')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>
    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
    )); ?>
<?php endif; ?>
<h1>Tugas List</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'tugas-lists-grid',
	'dataProvider'=>$model->search(),
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