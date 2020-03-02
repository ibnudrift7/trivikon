<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nama_perusahaan',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'lokasi_perusahaan',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'gaji_sekitar',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'min_pendidikan',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'min_pengalaman',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textAreaRow($model,'deskripsi_pekerjaan',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'date_input',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'status',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
