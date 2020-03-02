<?php
$this->breadcrumbs=array(
	'Tb Mitras'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TbMitra','url'=>array('index')),
	array('label'=>'Add TbMitra','url'=>array('create')),
);
?>

<h1>Manage Tb Mitras</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'tb-mitra-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nama_mitra',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
