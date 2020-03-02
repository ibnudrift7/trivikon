<?php
$this->breadcrumbs=array(
	($_GET['tipe'] == 'market')? 'Cari' : 'Jual'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>($_GET['tipe'] == 'market')? 'Cari' : 'Jual',
	'subtitle'=>'Edit '. ($_GET['tipe'] == 'market')? 'Cari' : 'Jual',
);

$this->menu=array(
	array('label'=>'List '. ($_GET['tipe'] == 'market')? 'Cari' : 'Jual', 'icon'=>'th-list','url'=>array('index')),
	// array('label'=>'Add Market', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Market', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>