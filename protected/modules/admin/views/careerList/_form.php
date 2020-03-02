<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'career-form',
    // 'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>false,
	),
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<?php echo $form->errorSummary($model); ?>
<?php if(Yii::app()->user->hasFlash('success')): ?>
<?php $this->widget('bootstrap.widgets.TbAlert', array(
    'alerts'=>array('success'),
)); ?>
<?php endif; ?>
<?php Yii::import('ext.imperavi-redactor-widget.ImperaviRedactorWidget'); ?>
<?php $this->widget('ImperaviRedactorWidget', array(
    'selector' => '.redactor',
    'options' => array(
        'imageUpload'=> $this->createUrl('/admin/setting/imgUpload', array('type'=>'image')),
        'clipboardUploadUrl'=> $this->createUrl('/admin/setting/imgUpload', array('type'=>'clip')),
    ),
    'plugins' => array(
        'clips' => array(
        ),
    ),
)); ?>
<div class="widget">
<h4 class="widgettitle">Data Career</h4>
<div class="widgetcontent">
	<div class="row-fluid">
		<div class="span6">
			<?php echo $form->textFieldRow($model,'title',array('class'=>'span11','maxlength'=>225)); ?>
		</div>
		<div class="span6">
			<?php echo $form->textFieldRow($model,'lokasi_kerja',array('class'=>'span11','maxlength'=>225)); ?>
		</div>
	</div>

	<?php echo $form->textAreaRow($model,'deskripsi',array('rows'=>6, 'cols'=>50, 'class'=>'span5 redactor')); ?>

	<div class="divider15"></div>
	
	<?php echo $form->textAreaRow($model,'kualifikasi',array('rows'=>6, 'cols'=>50, 'class'=>'span5 redactor')); ?>
	<div class="divider15"></div>

	<?php // echo $form->textFieldRow($model,'count',array('class'=>'span5')); ?>

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
<script type="text/javascript">
if (typeof RedactorPlugins === 'undefined') var RedactorPlugins = {};

RedactorPlugins.advanced = {
    init: function()
    {
        alert(1);
    }
}
jQuery(function( $ ) {
	$('.multilang').multiLang({
	});
})

</script>