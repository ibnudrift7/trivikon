<?php
$this->breadcrumbs=array(
	'Literasi Profile'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-book',
	'title'=>'Literasi Profile',
	'subtitle'=>'Data Literasi Profile',
);

$this->menu=array(
	array('label'=>'List Literasi Profile', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add Literasi Profile', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Literasi Profile', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<div class="row-fluid">
	<div class="span8">
		<h1>Edit Literasi Profile</h1>
		<?php echo $this->renderPartial('_form',array('model'=>$model, 'modelDesc'=>$modelDesc)); ?>
	</div>
	<div class="span4">
		<?php //$this->renderPartial('/setting/page_menu') ?>
	</div>
</div>
