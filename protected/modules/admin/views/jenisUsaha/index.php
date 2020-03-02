<?php
$this->breadcrumbs=array(
	'Jenis Usahas',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'JenisUsaha',
	'subtitle'=>'Data JenisUsaha',
);

$this->menu=array(
	array('label'=>'Add JenisUsaha', 'icon'=>'th-list','url'=>array('create')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
    )); ?>

<?php endif; ?>
<h1>JenisUsaha</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'jenis-usaha-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'enableSorting'=>false,
	'summaryText'=>false,
	'type'=>'bordered',
	'columns'=>array(
		'id',
		'nama',
		'skala_pasar',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} &nbsp; {delete}',
		),
	),
)); ?>
