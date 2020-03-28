<?php
$this->breadcrumbs=array(
	'Jabatans'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Jabatan','url'=>array('index')),
	array('label'=>'Add Jabatan','url'=>array('create')),
);
?>

<h1>Manage Jabatans</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'jabatan-grid',
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
