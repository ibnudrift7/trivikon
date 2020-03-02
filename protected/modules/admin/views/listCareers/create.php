<?php
$this->breadcrumbs=array(
	'List Careers'=>array('index'),
	'Add',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'List Careers',
	'subtitle'=>'Add List Careers',
);

$this->menu=array(
	array('label'=>'List List Careers', 'icon'=>'th-list','url'=>array('index')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>