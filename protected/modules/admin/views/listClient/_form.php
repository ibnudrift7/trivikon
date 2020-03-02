<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'list-client-form',
    'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>false,
	),
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<?php echo $form->errorSummary($model); ?>

<div class="widget">
<h4 class="widgettitle">Data ListClient</h4>
<div class="widgetcontent">


	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->fileFieldRow($model,'image',array(
	'hint'=>'<b>Note:</b> Image size is max Height 126px. Larger image will be automatically cropped.', 'style'=>"width: 100%")); ?>
	<?php if ($model->scenario == 'update'): ?>
	<img style="width: 100%;" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(175,126, '/images/'.$model->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>"/>
	<?php endif; ?>

	<?php echo $form->dropDownListRow($model, 'active', array(
        		'1'=>'Di Tampilkan',
        		'0'=>'Di Sembunyikan',
        	)); ?>

	<?php echo $form->textFieldRow($model,'sorting',array('class'=>'span5')); ?>

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
