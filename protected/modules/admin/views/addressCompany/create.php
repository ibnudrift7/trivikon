<?php
$this->breadcrumbs=array(
	'Addresscompanies'=>array('index'),
	'Add',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Address Company',
	'subtitle'=>'Add Address Company',
);

$this->menu=array(
	array('label'=>'List Address Company', 'icon'=>'th-list','url'=>array('index')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>