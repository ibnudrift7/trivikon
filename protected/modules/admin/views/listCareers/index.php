<?php
$this->breadcrumbs=array(
	'List Careers',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'List Career',
	'subtitle'=>'Data List Career',
);

$this->menu=array(
	array('label'=>'Add List Career', 'icon'=>'plus-sign','url'=>array('create')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
    )); ?>

<?php endif; ?>
<h1>List Career</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'list-careers-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'enableSorting'=>false,
	'summaryText'=>false,
	'type'=>'bordered',
	'columns'=>array(
		// 'id',
		'posisi',
		'nama_perusahaan',
		'lokasi_perusahaan',
		'gaji_sekitar',
		'min_pendidikan',
		/*
		'min_pengalaman',
		'deskripsi_pekerjaan',
		'date_input',
		'status',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} &nbsp; {delete}',
		),
	),
)); ?>
