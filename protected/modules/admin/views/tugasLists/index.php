<?php
$this->breadcrumbs=array(
	'Tugas Item',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Tugas Item',
	'subtitle'=>'Data Tugas Item',
);

$this->menu=array(
	array('label'=>'Add Tugas Item', 'icon'=>'plus-sign','url'=>array('create')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
    )); ?>

<?php endif; ?>
<h1>Total Tugas: <?php echo count( TugasLists::model()->findAll() ); ?></h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'tugas-lists-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'enableSorting'=>false,
	'summaryText'=>false,
	'type'=>'bordered',
	'columns'=>array(
		array(
            'header' => 'No',
            'type'=>'raw',
            'value' => '$row + ($this->grid->dataProvider->pagination->currentPage
                * $this->grid->dataProvider->pagination->pageSize) + 1',
            ),
		array(
			'header'=>'Tgl Input',
			'type'=>'raw',
			'value'=>'date("d M Y", strtotime($data->date_input))',
		),
		'prioritas',
		'dari',
		'kepada',
		// 'subject_kepentingan',
		// 'deskripsi',
		array(
			'header'=> 'Deskripsi',
			'type'=> 'raw',
			'value'=> 'substr($data->deskripsi, 0, 55)."..."',
		),
		'status',
		'status_selesai',
		// 'date_input',
		// 'date_finish',
		array(
			'header'=>'Tgl Selesai',
			'type'=>'raw',
			'value'=>'date("d M Y", strtotime($data->date_finish))',
		),

		array(
			'header'=>'Countdown',
			'type'=>'raw',
			'value'=>'TugasLists::get_coundDown($data->date_finish)',
		),

		/*
		'deskripsi',
		'member_id',
		'admin_id',
		'data',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} &nbsp; {delete}',
		),
	),
)); ?>
