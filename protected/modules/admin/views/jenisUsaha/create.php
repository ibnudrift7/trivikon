<?php
$this->breadcrumbs=array(
	'Jenis Usahas'=>array('index'),
	'Add',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'JenisUsaha',
	'subtitle'=>'Add JenisUsaha',
);

$this->menu=array(
	array('label'=>'List JenisUsaha', 'icon'=>'th-list','url'=>array('index')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>