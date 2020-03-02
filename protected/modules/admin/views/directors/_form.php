<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'directors-form',
    'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>false,
	),
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<?php echo $form->errorSummary($model); ?>

<div class="widget">
<h4 class="widgettitle">Data Directors</h4>
<div class="widgetcontent">


	<?php echo $form->dropDownListRow($model, 'category', array(
        		'1'=>'Commisioner',
        		'2'=>'Directors',
        	)); ?>

	<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'jabatan_id',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'jabatan_en',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->fileFieldRow($model,'images',array('class'=>'span5','maxlength'=>225, 'hint'=> '*) size must be: 264px X 336px')); ?>
	
	<?php if ($model->scenario == 'update'): ?>
	<div class="control-group">
		<div class="controls">
		<img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(150,150, '/images/'.$model->images , array('method' => 'adaptiveResize', 'quality' => '90')) ?>"/>
		</div>
	</div>
	<?php endif; ?>

	<?php echo $form->dropDownListRow($model, 'status', array(
        		'1'=>'Di Tampilkan',
        		'0'=>'Di Sembunyikan',
        	)); ?>

	<?php // echo $form->textFieldRow($model,'sorting',array('class'=>'span1')); ?>

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
