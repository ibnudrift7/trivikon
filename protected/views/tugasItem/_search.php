<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'dari',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'kepada',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'prioritas',array('class'=>'span5','maxlength'=>7)); ?>

	<?php echo $form->textFieldRow($model,'subject_kepentingan',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'deskripsi',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'status',array('class'=>'span5','maxlength'=>7)); ?>

	<?php echo $form->textFieldRow($model,'status_selesai',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'member_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'admin_id',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'date_input',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'date_finish',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'data',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'date_start_user',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'date_selesai_user',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
