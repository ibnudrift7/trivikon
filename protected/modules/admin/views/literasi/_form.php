<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'blog-form',
    // 'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>false,
	),
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>
	<div class="widget">
		<!-- <h4 class="widgettitle">Data Pages</h4> -->
		<div class="widgetcontent">

			<div class="multilang pj-form-langbar">
				<?php foreach (Language::model()->getLanguage() as $key => $value): ?>
				<a href="#" data-index="<?php echo $value->id ?>" data-abbr="<?php echo Yii::app()->baseUrl.'/asset/backend/language/'.$value->code.'.png' ?>" class="pj-form-langbar-item <?php if ($value->code==$this->setting['lang_deff']): ?>pj-form-langbar-item-active<?php endif ?>"><abbr style="background-image: url(<?php echo Yii::app()->baseUrl.'/asset/backend/language/'.$value->code.'.png' ?>);"></abbr></a>
				<?php endforeach ?>
			</div>
			<div class="divider5"></div>

			<?php echo $form->errorSummary($model); ?>
			<?php echo $form->errorSummary($modelDesc, 'Please fix the following input errors:', 'Periksa di semua bahasa'); ?>
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

			<?php echo Common::createFormDatePick('Date Input', 'Date', 'date', $model->date_input) ?>

			<?php echo $form->labelEx($model, 'topik_id'); ?>
			<div class="controls">
				<select id="Literasi_topik_id" name="Literasi[topik_id]" class="input-block-level">
					<?php 
					$dataCategory = (PrdCategory::model()->categoryTree('filterliterasi', $this->languageID));
					?>
					<option value="">---- Choose Category ----</option>
					<?php echo PrdCategory::model()->createOption($dataCategory) ?>
					<?php /*
					<option value="">---- Choose Category ----</option>
					<?php foreach ($dataCategory as $key => $value): ?>
						<?php if (count($value['children']) > 0): ?>
						<optgroup label="<?php echo $value['title'] ?>">
							<?php foreach ($value['children'] as $k => $v): ?>
							<option value="<?php echo $v['id'] ?>"><?php echo $v['title'] ?></option>
							<?php endforeach ?>
						</optgroup>
						<?php else: ?>
						<option value="<?php echo $value['id'] ?>"><?php echo $value['title'] ?></option>
						<?php endif ?>
					<?php endforeach ?>
					*/ ?>
				</select>
			</div>
			<script type="text/javascript">
			$('#Literasi_topik_id').val('<?php echo $model->topik_id ?>');
			</script>
			<?php
			foreach ($modelDesc as $key => $value) {
				$lang = Language::model()->getName($key);
				?>
				<div class="pj-multilang-wrap myLanguage control-group" style="display: <?php if ($key==$this->setting['lang_deff']): ?>block<?php else: ?>none<?php endif ?>;" data-id="<?php echo $lang->id ?>">

				<?php
				echo $form->labelEx($value, '['.$lang->code.']title');
			    echo $form->textField($value,'['.$lang->code.']title',array('class'=>'span8'));
			    ?>
			    <span class="pj-multilang-input"><img src="<?php echo Yii::app()->baseUrl.'/asset/backend/language/'.$lang->code.'.png' ?>"></span>
			    <span class="help-inline _em_" style="display: none;">Please correct the error</span>
				</div>
				
				<?php /*
				<div class="pj-multilang-wrap myLanguage control-group" style="display: <?php if ($key==$this->setting['lang_deff']): ?>block<?php else: ?>none<?php endif ?>;" data-id="<?php echo $lang->id ?>">

				<?php
				echo $form->labelEx($value, '['.$lang->code.']quote');
			    echo $form->textArea($value,'['.$lang->code.']quote',array('class'=>'span11'));
			    ?>
			    <span class="pj-multilang-input"><img src="<?php echo Yii::app()->baseUrl.'/asset/backend/language/'.$lang->code.'.png' ?>"></span>
			    <span class="help-inline _em_" style="display: none;">Please correct the error</span>
				</div>
				*/ ?>

				<div class="pj-multilang-wrap myLanguage control-group" style="display: <?php if ($key==$this->setting['lang_deff']): ?>block<?php else: ?>none<?php endif ?>;" data-id="<?php echo $lang->id ?>">

				<?php
				echo $form->labelEx($value, '['.$lang->code.']content');
			    echo $form->textArea($value,'['.$lang->code.']content',array('class'=>'span5 redactor'));
			    ?>
			    <span class="pj-multilang-input"><img src="<?php echo Yii::app()->baseUrl.'/asset/backend/language/'.$lang->code.'.png' ?>"></span>
			    <span class="help-inline _em_" style="display: none;">Please correct the error</span>
				</div>
			    <?php
			}
			?>

			<div class="row-fluid">
				<div class="span6">
					<?php echo $form->textFieldRow($model,'data[tanggal]',array('class'=>'input-block-level', 'placeholder'=>'Tanggal')); ?>
				</div>
				<div class="span6">
					<?php echo $form->textFieldRow($model,'data[jam]',array('class'=>'input-block-level', 'placeholder'=>'Jam')); ?>
				</div>
			</div>
			
			<?php /*
			<div class="row-fluid">
				<div class="span6">
					<?php echo $form->textFieldRow($model,'data[url_facebook]',array('class'=>'input-block-level', 'placeholder'=>'URL Facebook')); ?>
				</div>
				<div class="span6">
					<?php echo $form->textFieldRow($model,'data[url_instagram]',array('class'=>'input-block-level', 'placeholder'=>'URL Instagram')); ?>
				</div>
			</div>

			<div class="row-fluid">
				<div class="span6">
					<?php echo $form->textFieldRow($model,'data[url_soundcloud]',array('class'=>'input-block-level', 'placeholder'=>'URL Soundcloud')); ?>
				</div>
				<div class="span6">
					<?php echo $form->textFieldRow($model,'data[url_youtube]',array('class'=>'input-block-level', 'placeholder'=>'URL Youtube')); ?>
				</div>
			</div>
			*/ ?>

			<?php echo $form->fileFieldRow($model,'image',array(
			'hint'=>'<b>Note:</b> Ukuran gambar adalah 385 x 250px. Gambar yang lebih besar akan ter-crop otomatis, tolong upload foto ukuran horizontal')); ?>
			<?php if ($model->scenario == 'update'): ?>
			<div class="control-group">
				<label class="control-label">&nbsp;</label>
				<div class="controls">
				<img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(385,250, '/images/blog/'.$model->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>"/>
				</div>
			</div>
			<?php endif; ?>

			<?php echo $form->fileFieldRow($model,'image2',array(
			'hint'=>'<b>Note:</b> Ukuran gambar adalah 1600 x 600px. Gambar yang lebih besar akan ter-crop otomatis, tolong upload foto ukuran horizontal')); ?>
			<?php if ($model->scenario == 'update'): ?>
			<div class="control-group">
				<label class="control-label">&nbsp;</label>
				<div class="controls">
				<img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1600,600, '/images/blog/'.$model->image2 , array('method' => 'adaptiveResize', 'quality' => '90')) ?>"/>
				</div>
			</div>
			<?php endif; ?>

        	<?php echo $form->dropDownListRow($model, 'active', array(
        		'1'=>'Di Tampilkan',
        		'0'=>'Di Sembunyikan',
        	)); ?>
		</div>
	<!-- span 12 -->
	</div>
		<div class="clear"></div>
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