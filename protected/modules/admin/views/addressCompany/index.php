<?php
$this->breadcrumbs=array(
	'Addresscompanies',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Address Company',
	'subtitle'=>'Data Address Company',
);

$this->menu=array(
	array('label'=>'Add Address Company', 'icon'=>'plus-sign','url'=>array('create')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
    )); ?>

<?php endif; ?>
<h1>Address Company</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'addresscompany-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'enableSorting'=>false,
	'summaryText'=>false,
	'type'=>'bordered',
	'columns'=>array(
		// 'id',
		'title',
		// 'address',
		// 'status',
		// 'sorting',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} &nbsp; {delete}',
		),
	),
)); ?>
