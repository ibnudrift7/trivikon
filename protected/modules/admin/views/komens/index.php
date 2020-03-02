<?php
$this->breadcrumbs=array(
	'Komentar',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Komentar',
	'subtitle'=>'Data Komentar',
);

$this->menu=array(
	array('label'=>'Add Komentar', 'icon'=>'th-list','url'=>array('create')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
    )); ?>

<?php endif; ?>
<h1>Komentar</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'tb-komen-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'enableSorting'=>false,
	'summaryText'=>false,
	'type'=>'bordered',
	'columns'=>array(
		'id',
		'market_id',
		'market_id_member',
		'user_id_post',
		'content',
		'date_input',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} &nbsp; {delete}',
		),
	),
)); ?>
