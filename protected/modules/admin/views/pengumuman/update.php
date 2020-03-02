<?php
$this->breadcrumbs=array(
	'Pengumuman'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Pengumuman',
	'subtitle'=>'Edit Pengumuman',
);

$this->menu=array(
	array('label'=>'List Pengumuman', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add Pengumuman', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Pengumuman', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>