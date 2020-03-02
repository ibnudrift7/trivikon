<?php
$this->breadcrumbs=array(
	'List Products'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ListProducts','url'=>array('index')),
	array('label'=>'Add ListProducts','url'=>array('create')),
);
?>

<h1>Manage List Products</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'list-products-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'category_id',
		'sub_cat1',
		'sub_cat2',
		'sub_cat3',
		'film_grade',
		/*
		'technical_data',
		'film_description',
		'actives',
		'sortings',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
