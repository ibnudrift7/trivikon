<?php
$this->breadcrumbs=array(
	'Promo Members'=>array('index'),
	'Add',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Promo Member',
	'subtitle'=>'Add Promo Member',
);

$this->menu=array(
	array('label'=>'List Promo Member', 'icon'=>'th-list','url'=>array('index')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>