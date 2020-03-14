<?php
$this->breadcrumbs=array(
	'Subject Kepentingan',
);

$this->pageHeader=array(
	'icon'=>'fa fa-minus',
	'title'=>'Subject Kepentingan',
	'subtitle'=>'Data Subject Kepentingan',
);

$this->menu=array(
	array('label'=>'Add Subject Kepentingan', 'icon'=>'plus-sign','url'=>array('create')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
    )); ?>

<?php endif; ?>
<h1>Subject Kepentingan</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'tugas-kepentingan-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'enableSorting'=>false,
	'summaryText'=>false,
	'type'=>'bordered',
	'columns'=>array(
		// 'id',
		'kepentingan',
		// 'nama_kepentingan',
		array(
			'header'=>'Nama Kepentingan',
			'type'=>'raw',
			// 'value'=>'TugasKepentingan::model()->button_subData($data->id)',
			'value'=>'$data->nama_kepentingan',
		),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			// 'template'=>'{update}',
			'template'=>'{update} &nbsp; {delete} &nbsp; {view_data}',
			'buttons'=>array
					    (
					        'view_data' => array
					        (
					            'label'=>'<i class="fa fa-arrow-right">',
					            'url'=>'Yii::app()->createUrl("/admin/tugasLists/index", array("subject"=>$data->id))',
					            'options'=> array( 'title'=> 'View List Data'),
					        ),
					    ),
		),
	),
)); ?>
