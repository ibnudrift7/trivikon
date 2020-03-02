<?php
$this->breadcrumbs=array(
	'Pengumuman'=>array('index'),
	'Add',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Pengumuman',
	'subtitle'=>'Add Pengumuman',
);

$this->menu=array(
	array('label'=>'List Pengumuman', 'icon'=>'th-list','url'=>array('index')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>