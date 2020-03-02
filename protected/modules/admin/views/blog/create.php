<?php
$this->breadcrumbs=array(
	'Artikel & Berita'=>array('index'),
	'Add',
);

$this->pageHeader=array(
	'icon'=>'fa fa-book',
	'title'=>'Artikel & Berita',
	'subtitle'=>'Data Artikel & Berita',
);

$this->menu=array(
	array('label'=>'List Artikel & Berita', 'icon'=>'th-list','url'=>array('index')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<div class="row-fluid">
	<div class="span8">
		<h1>Add Event & Bulletin</h1>
		<?php echo $this->renderPartial('_form', array('model'=>$model, 'modelDesc'=>$modelDesc)); ?>
	</div>
	<div class="span4">
		<?php //$this->renderPartial('/setting/page_menu') ?>
	</div>
</div>
