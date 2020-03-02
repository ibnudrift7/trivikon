<?php
$this->breadcrumbs=array(
	'Careers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Career','url'=>array('index')),
	array('label'=>'Add Career','url'=>array('create')),
);
?>

<h1>Manage Careers</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'career-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'deskripsi',
		'kualifikasi',
		'lokasi_kerja',
		'count',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
