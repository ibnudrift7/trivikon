<?php
$this->breadcrumbs=array(
	'Addresscompanies'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Addresscompany','url'=>array('index')),
	array('label'=>'Add Addresscompany','url'=>array('create')),
);
?>

<h1>Manage Addresscompanies</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'addresscompany-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'address',
		'status',
		'sorting',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
