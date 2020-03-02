<?php
$this->breadcrumbs=array(
	($_GET['tipe'] == 'market')? 'Penawaran List Cari' : 'Penawaran List Jual' =>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>($_GET['tipe'] == 'market')? 'Penawaran List Cari' : 'Penawaran List Jual',
	'subtitle'=>($_GET['tipe'] == 'market')? 'Penawaran List Cari' : 'Penawaran List Jual',
);

$this->menu=array(
	array('label'=>'List Penawaran List', 'icon'=>'th-list','url'=>array('index')),
	// array('label'=>'Add Penawaran List', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Penawaran List', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>