<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'tugas-lists-form',
    'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>false,
	),
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<?php echo $form->errorSummary($model); ?>

<div class="widget">
<h4 class="widgettitle">Data Tugas Item</h4>
<div class="widgetcontent">
	
	<?php 
	// $dn_username = '';
	// $model->dari = 'Aditya, Direktur';
	?>
	
	<?php if ($model->scenario == 'update'): ?>
		<?php echo $form->textFieldRow($model,'dari', array('class'=>'span5','empty'=>'Pilih Member', 'readonly'=>'readonly')); ?>
		<?php echo $form->textFieldRow($model,'kepada', array('class'=>'span5','empty'=>'Pilih Member', 'readonly'=>'readonly')); ?>
	<?php else: ?>
		<?php 
		$models_user = MeMember::model()->findAll('t.aktif = :aktifs order by t.id DESC', array(':aktifs'=>1));
		$members_dn = CHtml::listData($models_user, 'id', 'nick_name');
		?>
		<?php echo $form->dropDownListRow($model,'dari', $members_dn, array('class'=>'span5','empty'=>'Pilih Member', 'required'=>'required')); ?>

		<?php echo $form->dropDownListRow($model,'kepada', $members_dn, array('class'=>'span5','empty'=>'Pilih Member', 'required'=>'required')); ?>
	<?php endif ?>
	
	<?php 
	$dn_priority = [
					'urgent'=> strtoupper('urgent'),
					'penting'=> strtoupper('penting'),
					'rutin'=> strtoupper('rutin'),
					];
	?>
	<?php echo $form->dropDownListRow($model,'prioritas', $dn_priority, array('class'=>'span5','maxlength'=>7, 'empty'=>'Pilih Prioritas')); ?>
	
	<?php 
	$models_kep = TugasKepentingan::model()->findAll();
	$mod_kepen_list = CHtml::listData($models_kep, 'id', 'nama_kepentingan');
	?>
	<?php echo $form->dropDownListRow($model,'subject_kepentingan', $mod_kepen_list, array('class'=>'span5','maxlength'=>7, 'empty'=>'Pilih Kepentingan')); ?>

	<?php // echo $form->textFieldRow($model,'subject_kepentingan',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'deskripsi',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
	
	<?php if ($model->scenario == 'update'): ?>
		<?php echo $form->dropDownListRow($model,'status', ['belum'=>'belum', 'selesai'=>'selesai'],array('class'=>'span5','maxlength'=>7)); ?>

		<?php echo $form->dropDownListRow($model,'status_selesai', ['under'=>'under', 'over'=>'over'], array('class'=>'span5','maxlength'=>5)); ?>
	<?php else: ?>
		<?php echo $form->dropDownListRow($model,'status', ['belum'=>'belum', 'selesai'=>'selesai'],array('class'=>'span5', 'readonly'=>'readonly')); ?>

		<?php echo $form->dropDownListRow($model,'status_selesai', ['under'=>'under', 'over'=>'over'], array('class'=>'span5', 'readonly'=>'readonly')); ?>
	<?php endif ?>

	<?php echo $form->hiddenField($model,'member_id',array('class'=>'span5')); ?>
	
	<?php echo $form->hiddenField($model,'admin_id',array('class'=>'span5')); ?>

	<?php // echo $form->textFieldRow($model,'date_input',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'date_finish',array('class'=>'span5 datepicker2')); ?>

	<?php // echo $form->textAreaRow($model,'data',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

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
