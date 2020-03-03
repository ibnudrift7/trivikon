<?php
$this->breadcrumbs=array(
	'Tugas Kepentingans'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TugasKepentingan','url'=>array('index')),
	array('label'=>'Add TugasKepentingan','url'=>array('create')),
);
?>

<h1>Manage Tugas Kepentingans</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'tugas-kepentingan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'kepentingan',
		'nama_kepentingan',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
