<?php
$this->breadcrumbs=array(
	'Tugas Lists'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TugasLists','url'=>array('index')),
	array('label'=>'Add TugasLists','url'=>array('create')),
);
?>

<h1>Manage Tugas Lists</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'tugas-lists-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'dari',
		'kepada',
		'prioritas',
		'subject_kepentingan',
		'deskripsi',
		/*
		'status',
		'status_selesai',
		'member_id',
		'admin_id',
		'date_input',
		'date_finish',
		'data',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
