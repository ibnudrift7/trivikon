<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'market_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'user_post_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'user_tawar_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'deal',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tgl_input',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
