<?php
$this->breadcrumbs=array(
	'Promo Members'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PromoMember','url'=>array('index')),
	array('label'=>'Add PromoMember','url'=>array('create')),
);
?>

<h1>Manage Promo Members</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'promo-member-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'user_id',
		'bidang_id',
		'nama',
		'content',
		'image',
		/*
		'aktif',
		'date_input',
		'date_berakhir',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
