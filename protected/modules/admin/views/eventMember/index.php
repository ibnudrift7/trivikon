<?php
$this->breadcrumbs=array(
	'Event Member',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Event Member',
	'subtitle'=>'Data Event Member',
);

$this->menu=array(
	array('label'=>'Add Event Member', 'icon'=>'th-list','url'=>array('create')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
    )); ?>

<?php endif; ?>
<h1>Event Member</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'tb-event-member-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'enableSorting'=>false,
	'summaryText'=>false,
	'type'=>'bordered',
	'columns'=>array(
		// 'id',
		// 'admin_id',
		'nama',
		// 'image',
		// 'content',
		array(
			'header'=>'Tanggal Event',
			'type'=>'raw',
			'value'=>'date("d M Y", strtotime($data->tgl_event))',
		),
		array(
			'header'=>'Status Aktif',
			'type'=>'raw',
			'value'=>'($data->aktif == 1)? "Aktif": "Non Aktif"',
		),
		/*
		'aktif',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} &nbsp; {delete}',
		),
	),
)); ?>
