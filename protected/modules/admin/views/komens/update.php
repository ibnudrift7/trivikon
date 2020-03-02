<?php
$this->breadcrumbs=array(
	'Komentar'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Komentar',
	'subtitle'=>'Edit Komentar',
);

$this->menu=array(
	array('label'=>'List Komentar', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add Komentar', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Komentar', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>