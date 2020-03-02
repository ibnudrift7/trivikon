<?php
$this->breadcrumbs=array(
	'Promo Members'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PromoMember', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add PromoMember', 'icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Edit PromoMember', 'icon'=>'pencil','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete PromoMember', 'icon'=>'trash','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View PromoMember #<?php echo $model->id; ?></h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'bidang_id',
		'nama',
		'content',
		'image',
		'aktif',
		'date_input',
		'date_berakhir',
	),
)); ?>
