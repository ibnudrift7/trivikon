<?php
$this->breadcrumbs=array(
	'Komentar'=>array('index'),
	'Add',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Komentar',
	'subtitle'=>'Add Komentar',
);

$this->menu=array(
	array('label'=>'List Komentar', 'icon'=>'th-list','url'=>array('index')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>