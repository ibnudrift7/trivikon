<?php
$this->breadcrumbs=array(
	' Member'=>array('index'),
	'Add',
);

$this->pageHeader=array(
	'icon'=>'fa fa-group',
	'title'=>'Member',
	'subtitle'=>'Add Member',
);

$this->menu=array(
	array('label'=>'List Member', 'icon'=>'th-list','url'=>array('index')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php echo $this->renderPartial('_form', array('model'=>$model, 'provinsi'=> $provinsi)); ?>