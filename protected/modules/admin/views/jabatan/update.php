<?php
$this->breadcrumbs=array(
	'Jabatans'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Jabatan',
	'subtitle'=>'Edit Jabatan',
);

$this->menu=array(
	array('label'=>'List Jabatan', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add Jabatan', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Jabatan', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>