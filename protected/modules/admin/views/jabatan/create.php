<?php
$this->breadcrumbs=array(
	'Jabatans'=>array('index'),
	'Add',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Jabatan',
	'subtitle'=>'Add Jabatan',
);

$this->menu=array(
	array('label'=>'List Jabatan', 'icon'=>'th-list','url'=>array('index')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>