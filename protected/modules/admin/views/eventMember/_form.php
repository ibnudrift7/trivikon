<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'tb-event-member-form',
    'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>false,
	),
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<?php echo $form->errorSummary($model); ?>

<div class="widget">
<h4 class="widgettitle">Data Event Member</h4>
<div class="widgetcontent">

	<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>225, 'required'=>'required')); ?>

	<?php echo $form->textAreaRow($model,'content',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'ticket_price', array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'tgl_event',array('class'=>'span5 datepicker2', 'required'=>'required')); ?>

	<?php echo $form->dropDownListRow($model, 'aktif', array(
		        		'1'=>'Aktif',
		        		'0'=>'Non Aktif',
		        	)); ?>

	<?php echo $form->fileFieldRow($model,'image',array(
				'hint'=>'<b>Note:</b> Image size is 960 x 515px. Larger image will be automatically cropped.', 'style'=>"width: 100%")); ?>
				<?php if ($model->scenario == 'update'): ?>
				<div class="control-group">
					<div class="controls">
						<img style="width: 30%;" src="<?php echo $model->image; ?>"/>
					</div>
				</div>
				<?php endif; ?>

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
