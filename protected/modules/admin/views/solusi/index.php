<?php
$this->breadcrumbs=array(
	'Solusi',
);

$this->pageHeader=array(
	'icon'=>'fa fa-book',
	'title'=>'Solusi',
	'subtitle'=>'Data Solusi',
);

$this->menu=array(
	// array('label'=>'Add Solusi', 'icon'=>'plus-sign','url'=>array('create')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<div class="row-fluid">
	<div class="span12">
<h1>News & Article</h1>
		<?php $this->widget('bootstrap.widgets.TbGridView',array(
			'id'=>'promotion-grid',
			'dataProvider'=>$model->search($this->languageID),
			// 'filter'=>$model,
			'enableSorting'=>false,
			'summaryText'=>false,
			'type'=>'bordered',
			'columns'=>array(
				array(
		            'name'=>'title',
		        ),    
				// array(
		  //           'name'=>'writer_name',
		  //       ),    
				// array(
				// 	'name'=>'date_input',
				// 	'filter'=>false,
				// ),
				// array(
				// 	'name'=>'date_update',
				// 	'filter'=>false,
				// ),
				array(
					'name'=>'date_input',
				),
				// array(
				// 	'name'=>'last_update_by',
				// ),
				array(
					'name'=>'active',
					'filter'=>array(
						'0'=>'Non Active',
						'1'=>'Active',
					),
					'type'=>'raw',
					'value'=>'($data->active == "1") ? "Published" : "Unpublished"',
				),
				array(
					'class'=>'bootstrap.widgets.TbButtonColumn',
					'template'=>'{update}'
					 // {delete}
				),
			),
		)); ?>
	</div>
</div>
		