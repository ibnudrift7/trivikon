<?php
$this->breadcrumbs=array(
	'Kategori Usaha'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Kategori Usaha',
	'subtitle'=>'Edit Kategori Usaha',
);

$this->menu=array(
	array('label'=>'List Kategori Usaha', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add Kategori Usaha', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Kategori Usaha', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>