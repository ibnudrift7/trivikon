<?php
$this->breadcrumbs=array(
	'Tb Komens'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TbKomen','url'=>array('index')),
	array('label'=>'Add TbKomen','url'=>array('create')),
);
?>

<h1>Manage Tb Komens</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'tb-komen-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'market_id',
		'market_id_member',
		'user_id_post',
		'content',
		'date_input',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
