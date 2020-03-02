<?php
$this->breadcrumbs=array(
	'Email Career'=>array('index'),
	'Add',
);

$this->pageHeader=array(
	'icon'=>'fa fa-bank',
	'title'=>'Email Career',
	'subtitle'=>'Add Email Career',
);

$this->menu=array(
	array('label'=>'List Email Career', 'icon'=>'th-list','url'=>array('index')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>