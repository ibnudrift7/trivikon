<?php
$this->breadcrumbs=array(
	'Networking',
);

$this->pageHeader=array(
	'icon'=>'fa fa-bank',
	'title'=>'Networking',
	'subtitle'=>'Data Networking',
);

$this->menu=array(
	array('label'=>'Add Networking', 'icon'=>'plus-sign','url'=>array('create')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
    )); ?>

<?php endif; ?>
<div class="row-fluid">
	<div class="span8">
<h1>Networking</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'bank-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'enableSorting'=>false,
	'summaryText'=>false,
	'type'=>'bordered',
	'columns'=>array(
		// 'id',
		array(
	        'name'=>'image',
	        'type'=>'html',
	        'value'=>'CHtml::image(Yii::app()->baseUrl.ImageHelper::thumb(100,100, "/images/networking/".$data->image , array("method" => "resize", "quality" => "90")),"",array())',
	    ),
		'url',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} &nbsp; {delete}',
		),
	),
)); ?>
</div>
	<div class="span4">
		<?php $this->renderPartial('/setting/page_menu') ?>
	</div>
</div>