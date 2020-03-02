<?php
$this->breadcrumbs=array(
	'Event Member'=>array('index'),
	'Add',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Event Member',
	'subtitle'=>'Add Event Member',
);

$this->menu=array(
	array('label'=>'List Event Member', 'icon'=>'th-list','url'=>array('index')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>