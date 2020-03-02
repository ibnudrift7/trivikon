<?php
$this->breadcrumbs=array(
	'List Clients'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ListClient','url'=>array('index')),
	array('label'=>'Add ListClient','url'=>array('create')),
);
?>

<h1>Manage List Clients</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'list-client-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'image',
		'active',
		'sorting',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
