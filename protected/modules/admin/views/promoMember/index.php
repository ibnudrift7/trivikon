<?php
$this->breadcrumbs=array(
	'Promo Members',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Promo Member',
	'subtitle'=>'Data Promo Member',
);

$this->menu=array(
	// array('label'=>'Add Promo Member', 'icon'=>'th-list','url'=>array('create')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
    )); ?>

<?php endif; ?>
<h1>Promo Member</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'promo-member-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'enableSorting'=>false,
	'summaryText'=>false,
	'type'=>'bordered',
	'columns'=>array(
		// 'id',
		'user_id',
		// 'bidang_id',
		'nama',
		'content',
		/*
		'image',
		'aktif',
		'date_input',
		'date_berakhir',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} &nbsp; {delete}',
		),
	),
)); ?>
