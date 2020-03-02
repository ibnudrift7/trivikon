<?php
$this->breadcrumbs=array(
	'Careers',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Career',
	'subtitle'=>'Data Career',
);

$this->menu=array(
	array('label'=>'Add Career', 'icon'=>'plus-sign','url'=>array('create')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
    )); ?>

<?php endif; ?>
<h1>Career</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'career-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'enableSorting'=>false,
	'summaryText'=>false,
	'type'=>'bordered',
	'columns'=>array(
		// 'id',
		'title',
		// 'deskripsi',
		// 'kualifikasi',
		'lokasi_kerja',
		// 'count',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} &nbsp; {delete}',
		),
	),
)); ?>
