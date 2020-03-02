<?php
$this->breadcrumbs=array(
	'Promo Members'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Promo Member',
	'subtitle'=>'Edit Promo Member',
);

$this->menu=array(
	array('label'=>'List Promo Member', 'icon'=>'th-list','url'=>array('index')),
	// array('label'=>'Add Promo Member', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Promo Member', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>