<?php
$this->breadcrumbs=array(
	'List Products'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ListProducts', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add ListProducts', 'icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Edit ListProducts', 'icon'=>'pencil','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete ListProducts', 'icon'=>'trash','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View ListProducts #<?php echo $model->id; ?></h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'category_id',
		'sub_cat1',
		'sub_cat2',
		'sub_cat3',
		'film_grade',
		'technical_data',
		'film_description',
		'actives',
		'sortings',
	),
)); ?>
