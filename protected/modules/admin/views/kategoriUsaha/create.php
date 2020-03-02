<?php
$this->breadcrumbs=array(
	'Kategori Usaha'=>array('index'),
	'Add',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Kategori Usaha',
	'subtitle'=>'Add Kategori Usaha',
);

$this->menu=array(
	array('label'=>'List Kategori Usaha', 'icon'=>'th-list','url'=>array('index')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>