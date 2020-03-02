<?php 
	$criteria = new CDbCriteria;
	$criteria->with = array('description');
	$criteria->addCondition('description.language_id = :language_id');
	$criteria->params[':language_id'] = 2;
	$criteria->addCondition('t.id = :id');
	$criteria->params[':id'] = $_GET['category'];
	$criteria->group = 't.id';
	$criteria->order = 't.sort ASC';
	$detailCategory = PrdCategory2::model()->find($criteria);
	$titles_subm = $detailCategory->description->name;
?>
<?php
$this->breadcrumbs=array(
	'PDF'=>array('index', 'category'=>$_GET['category']),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-bank',
	'title'=>'PDF',
	'subtitle'=>'Edit PDF > '. $titles_subm,
);

$this->menu=array(
	array('label'=>'List PDF', 'icon'=>'th-list','url'=>array('index', 'category'=>$_GET['category'])),
	array('label'=>'Add PDF', 'icon'=>'plus-sign','url'=>array('create', 'category'=>$_GET['category'])),
	// array('label'=>'View PDF', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>