<?php
$this->breadcrumbs=array(
	'Tb Pengumumen'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TbPengumuman','url'=>array('index')),
	array('label'=>'Add TbPengumuman','url'=>array('create')),
);
?>

<h1>Manage Tb Pengumumen</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'tb-pengumuman-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'titles',
		'contents',
		'aktif',
		'date_input',
		'urutan',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
