<?php
$this->breadcrumbs=array(
	'Report'=>array('index'),
);
$this->pageHeader=array(
	'icon'=>'fa fa-tags',
	'title'=>'Report',
	'subtitle'=>'Report Category',
); 
$bread = PrdCategory::model()->getBreadcrump($_GET['parent'], $this->languageID);
$bread = array_reverse($bread,true);
foreach ($bread as $key => $value) {
	$this->breadcrumbs[$key]=$value;
}

$this->menu=array(
	// array('label'=>'Add Report', 'icon'=>'th-list','url'=>array('create', 'parent'=>$_GET['parent']), 'visible'=>($_GET['parent'] == '' || $_GET['parent'] == 0) ? true : false),
	array('label'=>'Add Report Category', 'icon'=>'plus-sign','url'=>array('create', 'parent'=>$_GET['parent'])),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<div class="row-fluid">
	<div class="span8">
		<div class="widgetbox block-rightcontent">                        
		    <div class="headtitle">
		        <h4 class="widgettitle">Data Report</h4>
		    </div>
		    <div class="widgetcontent">
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'category-grid',
	'dataProvider'=>$model->search($this->languageID),
	'enableSorting'=>false,
	'summaryText'=>false,
	// 'filter'=>$model,
	'columns'=>array(
		// 'id',
		// 'parent_id',
		// 'slug',
		// 'image',
		// 'name',
		// array(
  //           'name'=>'image',
  //           'type'=>'raw',
  //           'filter'=>false,
  //           'value'=>"'<img src=\"'.Yii::app()->baseUrl . ImageHelper::thumb(157,157, '/images/category/'.\$data->image , array('method' => 'adaptiveResize', 'quality' => '90')).'\" />'",
  //       ),    
		array(
			'name'=>'name',
			'type'=>'raw',
			'value' => 'CHtml::link($data->name,array("/admin/pdf/index","category"=>$data->id))',
			// 'value'=>'CHtml::link($data->name,array("index","parent"=>$data->id))',
			// 'value'=>'(PrdCategory::model()->count("parent_id = :parent_id", array(":parent_id"=>$data->id)) > 0) ? CHtml::link($data->name,array("index","parent"=>$data->id)) : $data->name',
		),
		// array(
		// 	'header'=>'Action',
		// 	'type'=>'raw',
		// 	// 'value'=>'CHtml::link("<i class=\'icon-search\'></i>",array("index","parent"=>$data->id))',
		// 	// 'value'=>'($data->parent_id == "0") ? CHtml::link("<i class=\'icon-search\'></i>",array("index","parent"=>$data->id)) : ""',
		// ),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} &nbsp; {delete} &nbsp; {pdf}',
			'updateButtonUrl'=>'CHtml::normalizeUrl(array("update", "id"=>$data->id, "parent"=>"'.(($_GET['parent'] == '') ? '' : $_GET['parent']).'"))',
			'deleteButtonUrl'=>'CHtml::normalizeUrl(array("delete", "id"=>$data->id, "parent"=>"'.(($_GET['parent'] == '') ? '' : $_GET['parent']).'"))',

			'buttons'=>array(
				'pdf' => array(
				    'label'=>'<i class="fa fa-arrow-right"></i>',     // text label of the button
				    'url'=>'CHtml::normalizeUrl(array("/admin/pdf/index", "category"=>$data->id))',       // a PHP expression for generating the URL of the button
				    // 'visible'=>'($data->parent_id > 0)',
				)
			)
		),
	),
)); ?>
		    </div><!--widgetcontent-->
		</div>
	</div>
	<div class="span4">
		<?php /*
		<?php $this->renderPartial('_category', array(
			'categoryModel'=>$categoryModel,
			'categoryModelDesc'=>$categoryModelDesc,
			'nestedCategory'=>$nestedCategory,
		)) ?>
		*/ ?>
	</div>
</div>
