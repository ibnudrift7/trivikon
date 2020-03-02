<?php
$this->breadcrumbs=array(
	'Kategori Usaha',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Kategori Usaha',
	'subtitle'=>'Data Kategori Usaha',
);

$this->menu=array(
	array('label'=>'Add Kategori Usaha', 'icon'=>'th-list','url'=>array('create')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
    )); ?>

<?php endif; ?>
<h1>Kategori Usaha</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'kategori-usaha-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'enableSorting'=>false,
	'summaryText'=>false,
	'type'=>'bordered',
	'columns'=>array(
		// 'id',
		'nama',
		// 'jenis_usaha_id',
		// 'jenis_usaha_nama',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} &nbsp; {delete}',
		),
	),
)); ?>
