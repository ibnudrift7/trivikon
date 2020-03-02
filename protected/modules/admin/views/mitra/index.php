<?php
$this->breadcrumbs=array(
	'Komunitas',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Master Komunitas',
	'subtitle'=>'Data Komunitas',
);

$this->menu=array(
	array('label'=>'Add Komunitas', 'icon'=>'th-list','url'=>array('create')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
    )); ?>

<?php endif; ?>
<h1>Komunitas</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'tb-mitra-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'enableSorting'=>false,
	'summaryText'=>false,
	'type'=>'bordered',
	'columns'=>array(
		// 'id',
		'nama_mitra',
		'ketua',
		'kota',
		'tempat_pertemuan',

		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} &nbsp; {delete} &nbsp; {view_data}',
			'buttons'=>array
	        (
	            'view_data' => array
	            (
	                'label'=>'View User',
	                'url'=>'Yii::app()->createUrl("/admin/mitra/viewuser", array("id"=>$data->id))',
	            ),
	        ),

		),

	),
)); ?>
