<?php
$this->breadcrumbs=array(
	'Pengumuman',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Pengumuman',
	'subtitle'=>'Data Pengumuman',
);

$this->menu=array(
	array('label'=>'Add Pengumuman', 'icon'=>'th-list','url'=>array('create')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
    )); ?>

<?php endif; ?>
<h1>Pengumuman</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'tb-pengumuman-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'enableSorting'=>false,
	'summaryText'=>false,
	'type'=>'bordered',
	'columns'=>array(
		// 'id',
		'titles',
		// 'contents',
		// 'aktif',
		// 'date_input',
		array(
			'header'=>'Tanggal Input',
			'type'=>'raw',
			'value'=>'date("d-m-Y", strtotime($data->date_input))',
		),
		'urutan',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} &nbsp; {delete}',
		),
	),
)); ?>
