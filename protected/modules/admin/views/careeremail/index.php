<?php
$this->breadcrumbs=array(
	'Email Career',
);

$this->pageHeader=array(
	'icon'=>'fa fa-bank',
	'title'=>'Email Career',
	'subtitle'=>'Data Email Career',
);

$this->menu=array(
	// array('label'=>'Add Email Career', 'icon'=>'plus-sign','url'=>array('create')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
    )); ?>

<?php endif; ?>
<div class="row-fluid">
	<div class="span10">
<!-- <h1>Email Career</h1> -->
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'bank-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'enableSorting'=>false,
	'summaryText'=>false,
	'type'=>'bordered',
	'columns'=>array(
		// 'id',
		'name',
		'email',
		array(
            'name'=>'files',
            'type'=>'html',
            'value'=>'CHtml::link("Download File",Yii::app()->baseUrl."/document/".$data->files)',
        ),
		// 'fax',
		'body',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} &nbsp; {delete}',
		),
	),
)); ?>
</div>
	<div class="span2">
		<?php //$this->renderPartial('/setting/page_menu') ?>
	</div>
</div>