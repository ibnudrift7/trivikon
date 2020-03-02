<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'list-careers-form',
    'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>false,
	),
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<?php echo $form->errorSummary($model); ?>

<div class="widget">
<h4 class="widgettitle">Data ListCareers</h4>
<div class="widgetcontent">

	<?php echo $form->textFieldRow($model,'posisi',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'nama_perusahaan',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'lokasi_perusahaan',array('class'=>'span5','maxlength'=>225)); ?>
	<?php /*echo $form->dropDownListRow($model, 'lokasi_perusahaan', array(
        		'gresik'=>'Gresik',
        		'jakarta'=>'Jakarta',
        	), array('class'=> 'span5'));*/ ?>

	<?php // echo $form->textFieldRow($model,'gaji_sekitar',array('class'=>'span5','maxlength'=>225)); ?>
	<?php echo $form->dropDownListRow($model, 'gaji_sekitar', array(
        		'fresh graduate'=>'Fresh graduate',
				'staff'=>'Staff',
				'supervisor'=>'Supervisor',
				'ass manager'=>'Ass manager',
				'manager'=>'Manager',
				'senior manager'=>'Senior manager',
				'general manager'=>'General manager',
        	), array('class'=> 'span5')); ?>

	<?php // echo $form->textFieldRow($model,'min_pendidikan',array('class'=>'span5','maxlength'=>225)); ?>
	<?php echo $form->dropDownListRow($model, 'min_pendidikan', array(
        		'SMA'=>'SMA/SMU',
        		'D3/D1'=>'D3 & D1',
        		'S1'=>'S1',
        		'S2'=>'S2',
        	), array('class'=> 'span5')); ?>

	<?php // echo $form->textFieldRow($model,'min_pengalaman',array('class'=>'span5','maxlength'=>100)); ?>
	<?php echo $form->dropDownListRow($model, 'min_pengalaman', array(
        		'1th'=>'1 Tahun',
        		'2th'=>'2 Tahun',
        		'3th'=>'3 Tahun',
        		'4th'=>'4 Tahun',
        	), array('class'=> 'span5')); ?>

	<?php echo $form->textAreaRow($model,'deskripsi_pekerjaan',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php // echo $form->textFieldRow($model,'date_input',array('class'=>'span5')); ?>

	<?php echo $form->dropDownListRow($model, 'status', array(
        		'1'=>'Di Tampilkan',
        		'0'=>'Di Sembunyikan',
        	)); ?>

		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Add' : 'Save',
		)); ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			// 'buttonType'=>'submit',
			// 'type'=>'info',
			'url'=>CHtml::normalizeUrl(array('index')),
			'label'=>'Batal',
		)); ?>
</div>
</div>
<div class="alert">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Warning!</strong> Fields with <span class="required">*</span> are required.
</div>

<?php $this->endWidget(); ?>
