<?php
$this->breadcrumbs=array(
	'Jenis Usahas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List JenisUsaha','url'=>array('index')),
	array('label'=>'Add JenisUsaha','url'=>array('create')),
);
?>

<h1>Manage Jenis Usahas</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'jenis-usaha-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nama',
		'skala_pasar',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
