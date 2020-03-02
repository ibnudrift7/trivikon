<?php
$this->breadcrumbs=array(
	'List Careers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ListCareers','url'=>array('index')),
	array('label'=>'Add ListCareers','url'=>array('create')),
);
?>

<h1>Manage List Careers</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'list-careers-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nama_perusahaan',
		'lokasi_perusahaan',
		'gaji_sekitar',
		'min_pendidikan',
		'min_pengalaman',
		/*
		'deskripsi_pekerjaan',
		'date_input',
		'status',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
