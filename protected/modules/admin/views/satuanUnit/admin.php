<?php
$this->breadcrumbs=array(
	'Satuan Units'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SatuanUnit','url'=>array('index')),
	array('label'=>'Add SatuanUnit','url'=>array('create')),
);
?>

<h1>Manage Satuan Units</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'satuan-unit-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nama',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
