<?php
$this->breadcrumbs=array(
	'Penawaran List'=>array('index'),
	'Add',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Penawaran List',
	'subtitle'=>'Add Penawaran List',
);

$this->menu=array(
	array('label'=>'List Penawaran List', 'icon'=>'th-list','url'=>array('index')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>