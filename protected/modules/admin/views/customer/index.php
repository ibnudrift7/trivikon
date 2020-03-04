<?php
$this->breadcrumbs=array(
	'Member',
);

$this->pageHeader=array(
	'icon'=>'fa fa-group',
	'title'=>'Member',
	'subtitle'=>'Data Member',
);

$this->menu=array(
	array('label'=>'Add Member', 'icon'=>'th-list','url'=>array('create')),
);
?>


<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success'),
    )); ?>

<?php endif; ?>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	<div class="row-fluid">
		<div class="span3">
			<?php echo $form->textFieldRow($model,'nama_perusahaan',array('class'=>'span12','maxlength'=>200, 'placeholder'=>'Search by Perusahaan')); ?>
		</div>
		<div class="span3">
			<?php echo $form->textFieldRow($model,'email',array('class'=>'span12','maxlength'=>200, 'placeholder'=>'Search by email')); ?>
		</div>
		<div class="span3">
			<?php echo $form->textFieldRow($model,'first_name',array('class'=>'span12','maxlength'=>200, 'placeholder'=>'Search by first name')); ?>
		</div>
		<div class="span3">
			<?php echo $form->textFieldRow($model,'last_name',array('class'=>'span12','maxlength'=>200, 'placeholder'=>'Search by last name')); ?>
		</div>
	</div>

	<?php $this->widget('bootstrap.widgets.TbButton', array(
		'buttonType'=>'submit',
		'type'=>'primary',
		'label'=>'Search',
	)); ?>
	<?php $this->widget('bootstrap.widgets.TbButton', array(
		// 'buttonType'=>'button',
		'type'=>'primary',
		'label'=>'Reset',
		'url'=>Yii::app()->createUrl($this->route),
	)); ?>

<?php $this->endWidget(); ?>
<h1>Total Member: <?php echo count( MeMember::model()->findAll() ); ?></h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'cs-customer-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'enableSorting'=>false,
	'summaryText'=>false,
	'type'=>'bordered',
	'columns'=>array(
		array(
            'header' => 'No',
            'type'=>'raw',
            'value' => '$row + ($this->grid->dataProvider->pagination->currentPage
                * $this->grid->dataProvider->pagination->pageSize) + 1',
            ),
		array(
			'header'=>'Foto',
			'type'=>'raw',
			'value'=>'MeMember::model()->views_image($data->foto_diri)',
		),
		// 'first_name',
		// 'last_name',
		array(
			'header'=>'Nama Lengkap', 
			'type'=>'raw',
			'value'=>'$data->first_name." ".$data->last_name',
		),
		'jabatan',
		'nick_name',
		'hp',
		'telp_saudara',
		array(
			'header'=>'Tgl Masuk', 
			'type'=>'raw',
			'value'=>'date("Y-m-d", strtotime($data->tgl_masuk))',
		),
		// 'email',
		// 'pass',
		
		// 'group_member_id',
		// array(
		// 	'name'=>'aktif',
		// 	'filter'=>array(
		// 		'0'=>'Non Active',
		// 		'1'=>'Active',
		// 	),
		// 	'type'=>'raw',
		// 	'value'=>'($data->aktif == "1") ? "Aktif" : "Tidak Aktif"',
		// ),
		/*
		'date_join',
		'last_login',
		'data',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} &nbsp; {delete}',
		),
	),
)); ?>

<style type="text/css">
	img.img-rounded{
		border: 2px solid #ccc;
		width: 60px;
		height: 55px;
	}
</style>