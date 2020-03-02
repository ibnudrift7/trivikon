<?php
$this->breadcrumbs=array(
	'Kategori Usahas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List KategoriUsaha','url'=>array('index')),
	array('label'=>'Add KategoriUsaha','url'=>array('create')),
);
?>

<h1>Manage Kategori Usahas</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'kategori-usaha-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nama',
		'jenis_usaha_id',
		'jenis_usaha_nama',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
