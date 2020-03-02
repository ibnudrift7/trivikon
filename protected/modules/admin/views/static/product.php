<?php
$this->breadcrumbs=array(
	'setting'=>array('/admin/setting/index'),
	'Product Discount',
);

$this->pageHeader=array(
	'icon'=>'fa fa-phone',
	'title'=>'Setting',
	'subtitle'=>'Product Discount',
);
?>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'setting-form',
    // 'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>false,
	),
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<div class="row-fluid">
	<div class="span8">
		<?php if(Yii::app()->user->hasFlash('success')): ?>
		
		    <?php $this->widget('bootstrap.widgets.TbAlert', array(
		        'alerts'=>array('success'),
		    )); ?>
		
		<?php endif; ?>

		<?php Yii::import('ext.imperavi-redactor-widget.ImperaviRedactorWidget'); ?>
		<?php $this->widget('ImperaviRedactorWidget', array(
		    'selector' => '.redactor',
		    'options' => array(
		        'imageUpload'=> $this->createUrl('admin/setting/uploadimage', array('type'=>'image')),
		        'clipboardUploadUrl'=> $this->createUrl('admin/setting/uploadimage', array('type'=>'clip')),
		    ),
		    'plugins' => array(
		        'clips' => array(
		        ),
		    ),
		)); ?>
		<div class="widget">
		<h4 class="widgettitle">Section Discount All Item</h4>
		<div class="widgetcontent">
			<div class="multilang pj-form-langbar">
				<?php foreach (Language::model()->getLanguage() as $key => $value): ?>
				<a href="#" data-index="<?php echo $value->id ?>" data-abbr="<?php echo Yii::app()->baseUrl.'/asset/backend/language/'.$value->code.'.png' ?>" class="pj-form-langbar-item <?php if ($value->code==$this->setting['lang_deff']): ?>pj-form-langbar-item-active<?php endif ?>"><abbr style="background-image: url(<?php echo Yii::app()->baseUrl.'/asset/backend/language/'.$value->code.'.png' ?>);"></abbr></a>
				<?php endforeach ?>
			</div>
			<div class="divider5"></div>

				<div class="alert">
				  <button type="button" class="close" data-dismiss="alert">×</button>
				  jika <b>discount all item</b> dan <b>discount per item</b> di setting, maka akan di hanya discount per item yang di hitung
				</div>


				<?php $type = 'product_discount_from' ?>
				<?php Common::createSetting($type, 'Product Discount Dari Tanggal', 'text', 'n') ?>
				<label for="Setting_<?php echo $model[$type]['data']->name ?>" class="control-label required"><?php echo $model[$type]['data']->label ?><span class="required"></span></label>
				<?php echo CHtml::textField('Setting['.$model[$type]['data']->name.']', $model[$type]['data']->value, array('class'=>'span12 datepicker')) ?>

				<?php $type = 'product_discount_to' ?>
				<?php Common::createSetting($type, 'Product Discount Sampai Tanggal', 'text', 'n') ?>
				<label for="Setting_<?php echo $model[$type]['data']->name ?>" class="control-label required"><?php echo $model[$type]['data']->label ?><span class="required"></span></label>
				<?php echo CHtml::textField('Setting['.$model[$type]['data']->name.']', $model[$type]['data']->value, array('class'=>'span12 datepicker')) ?>

				<?php $type = 'product_discount' ?>
				<?php Common::createSetting($type, 'Product Discount (%)', 'text', 'n') ?>
				<label for="Setting_<?php echo $model[$type]['data']->name ?>" class="control-label required"><?php echo $model[$type]['data']->label ?><span class="required"></span></label>
				<?php echo CHtml::textField('Setting['.$model[$type]['data']->name.']', $model[$type]['data']->value, array('class'=>'span12')) ?>


				<div class="divider10"></div>
				<?php $this->widget('bootstrap.widgets.TbButton', array(
					'buttonType'=>'submit',
					'type'=>'primary',
					'label'=>'Save',
				)); ?>

			
		</div>
		</div>


		<div class="alert">
		  <button type="button" class="close" data-dismiss="alert">×</button>
		  <strong>Warning!</strong> Fields with <span class="required">*</span> are required.
		</div>
		<script type="text/javascript">
		jQuery('.datepicker').datepicker({
			dateFormat: "yy-mm-dd"
		});
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
	</div>
	<div class="span4">
		<div class="widget">
		<h4 class="widgettitle">Section Discount Member</h4>
		<div class="widgetcontent">
			<div class="multilang pj-form-langbar">
				<?php foreach (Language::model()->getLanguage() as $key => $value): ?>
				<a href="#" data-index="<?php echo $value->id ?>" data-abbr="<?php echo Yii::app()->baseUrl.'/asset/backend/language/'.$value->code.'.png' ?>" class="pj-form-langbar-item <?php if ($value->code==$this->setting['lang_deff']): ?>pj-form-langbar-item-active<?php endif ?>"><abbr style="background-image: url(<?php echo Yii::app()->baseUrl.'/asset/backend/language/'.$value->code.'.png' ?>);"></abbr></a>
				<?php endforeach ?>
			</div>
			<div class="divider5"></div>


				<?php $type = 'product_discount_member' ?>
				<?php Common::createSetting($type, 'Discount Member (%)', 'text', 'n') ?>
				<label for="Setting_<?php echo $model[$type]['data']->name ?>" class="control-label required"><?php echo $model[$type]['data']->label ?><span class="required"></span></label>
				<?php echo CHtml::textField('Setting['.$model[$type]['data']->name.']', $model[$type]['data']->value, array('class'=>'span12')) ?>


				<div class="divider10"></div>
				<?php $this->widget('bootstrap.widgets.TbButton', array(
					'buttonType'=>'submit',
					'type'=>'primary',
					'label'=>'Save',
				)); ?>

			
		</div>
		</div>

	</div>
</div>
<?php $this->endWidget(); ?>