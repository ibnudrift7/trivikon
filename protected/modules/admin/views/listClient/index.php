<?php
$this->breadcrumbs=array(
	'List Clients',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'List Client',
	'subtitle'=>'Data List Client',
);

$this->menu=array(
	array('label'=>'Add List Client', 'icon'=>'plus-sign','url'=>array('create')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
    )); ?>

<?php endif; ?>
<h1>List Client</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'list-client-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'enableSorting'=>false,
	'summaryText'=>false,
	'type'=>'bordered',
	'columns'=>array(
		// 'id',
		'name',
		// 'image',
		array(
			'name'=>'active',
			'filter'=>array(
				'0'=>'Non Active',
				'1'=>'Active',
			),
			'type'=>'raw',
			'value'=>'($data->active == "1") ? "Active" : "Non Active"',
		),
		// 'sorting',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} &nbsp; {delete}',
		),
	),
)); ?>
