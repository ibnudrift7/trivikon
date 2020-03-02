<?php
$this->breadcrumbs=array(
	'Penawaran Lists'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PenawaranList','url'=>array('index')),
	array('label'=>'Add PenawaranList','url'=>array('create')),
);
?>

<h1>Manage Penawaran Lists</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'penawaran-list-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'market_id',
		'user_post_id',
		'user_tawar_id',
		'nama',
		'deal',
		/*
		'tgl_input',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
