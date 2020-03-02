<?php
$this->breadcrumbs=array(
	'PDF'=>array('index', 'category'=>$_GET['category']),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PDF','url'=>array('index', 'category'=>$_GET['category'])),
	array('label'=>'Add PDF','url'=>array('create', 'category'=>$_GET['category'])),
);
?>

<h1>Manage PDF</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'bank-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'ib_bank',
		'nama',
		'rekening',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
