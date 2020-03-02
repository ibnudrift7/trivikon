<?php
$this->breadcrumbs=array(
	'Jenis Usahas'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'JenisUsaha',
	'subtitle'=>'Edit JenisUsaha',
);

$this->menu=array(
	array('label'=>'List JenisUsaha', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add JenisUsaha', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View JenisUsaha', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>