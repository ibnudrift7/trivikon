<?php
$this->breadcrumbs=array(
	'Tb Event Members'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TbEventMember','url'=>array('index')),
	array('label'=>'Add TbEventMember','url'=>array('create')),
);
?>

<h1>Manage Tb Event Members</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'tb-event-member-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'admin_id',
		'nama',
		'image',
		'content',
		'tgl_event',
		/*
		'aktif',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
