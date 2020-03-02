<?php
$session = new CHttpSession;
$session->open();
$login_admin = $session['login'];
?>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'blog-form',
    // 'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>false,
	),
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>
<div class="row-fluid">
	<div class="span8">
		<div class="widget">
			<h4 class="widgettitle">Data Solusi</h4>
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

				<div class="row-fluid hide hidden">
					<div class="span6">
						<?php /*echo $form->dropDownListRow($model, 'topik_id', array(
			        		'public events'=>'Public Events',
			        	));*/ ?>
					</div>
					<div class="span6">
						<?php // echo $form->textFieldRow($model,'data[tag]',array('class'=>'input-block-level', 'placeholder'=>'Tag')); ?>
					</div>
				</div>
				
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

					<div class="pj-multilang-wrap myLanguage control-group" style="display: <?php if ($key==$this->setting['lang_deff']): ?>block<?php else: ?>none<?php endif ?>;" data-id="<?php echo $lang->id ?>">

					<?php
					echo $form->labelEx($value, '['.$lang->code.']subtitle');
				    echo $form->textArea($value,'['.$lang->code.']subtitle',array('class'=>'span5 redactor'));
				    ?>
				    <span class="pj-multilang-input"><img src="<?php echo Yii::app()->baseUrl.'/asset/backend/language/'.$lang->code.'.png' ?>"></span>
				    <span class="help-inline _em_" style="display: none;">Please correct the error</span>
					</div>

					<div class="pj-multilang-wrap myLanguage control-group" style="display: <?php if ($key==$this->setting['lang_deff']): ?>block<?php else: ?>none<?php endif ?>;" data-id="<?php echo $lang->id ?>">

					<?php
					echo $form->labelEx($value, '['.$lang->code.']content');
				    echo $form->textArea($value,'['.$lang->code.']content',array('class'=>'span5 redactor'));
				    ?>
				    <span class="pj-multilang-input"><img src="<?php echo Yii::app()->baseUrl.'/asset/backend/language/'.$lang->code.'.png' ?>"></span>
				    <span class="help-inline _em_" style="display: none;">Please correct the error</span>
					</div>

					<div class="pj-multilang-wrap myLanguage control-group" style="display: <?php if ($key==$this->setting['lang_deff']): ?>block<?php else: ?>none<?php endif ?>;" data-id="<?php echo $lang->id ?>">
					<?php
					echo $form->labelEx($value, '['.$lang->code.']quote');
				    echo $form->textArea($value,'['.$lang->code.']quote',array('class'=>'span5 redactor'));
				    ?>
				    <span class="pj-multilang-input"><img src="<?php echo Yii::app()->baseUrl.'/asset/backend/language/'.$lang->code.'.png' ?>"></span>
				    <span class="help-inline _em_" style="display: none;">Please correct the error</span>
					</div>

				    <?php
				}
				?>			

				<?php echo $form->fileFieldRow($model,'brosur',array(
				'hint'=>'<b>Note:</b> Ukuran File tidak boleh melebihi 2MB, file type. PDF/ Doc.')); ?>
				<?php if ($model->scenario == 'update' AND $model->brosur != ''): ?>
				<div class="control-group">
					<label class="control-label">&nbsp;</label>
					<div class="controls">
						<a href="<?php echo Yii::app()->baseUrl; ?>/images/solusi/<?php echo $model->brosur ?>">Download File</a>
					</div>
				</div>
				<?php endif; ?>
				
				<?php if ($login_admin['type'] == 'root'): ?>
	        	<?php echo $form->dropDownListRow($model, 'active', array(
					'1'=>'Published',
					'0'=>'Unpublished',
	        	)); ?>
	        	<?php endif ?>
			</div>
		<!-- span 12 -->
		</div>
	</div>
	<div class="span4">
		<div class="widgetbox block-rightcontent">                        
		    <div class="headtitle">
		        <h4 class="widgettitle">Action</h4>
		    </div>
		    <div class="widgetcontent">
				<?php $this->widget('bootstrap.widgets.TbButton', array(
					'buttonType'=>'submit',
					'type'=>'primary',
					'label'=>$model->isNewRecord ? 'Simpan dan Tambahkan' : 'Simpan',
					'htmlOptions'=>array('class'=>'btn-large'),
				)); ?>
				<?php $this->widget('bootstrap.widgets.TbButton', array(
					// 'buttonType'=>'submit',
					// 'type'=>'info',
					'url'=>CHtml::normalizeUrl(array('index')),
					'label'=>'Batal',
					'htmlOptions'=>array('class'=>'btn-large'),
				)); ?>
				<?php /*<?php if ($model->scenario == 'update'): ?>
				<?php $this->widget('bootstrap.widgets.TbButton', array(
					// 'buttonType'=>'submit',
					// 'type'=>'info',
					'url'=>CHtml::normalizeUrl(array('create', 'copy'=>$model->id)),
					'label'=>'Copy',
					'htmlOptions'=>array('class'=>'btn-large'),
				)); ?>
				<?php endif ?>*/?>
		    </div>
		</div>
		<div class="divider15"></div>
		<div class="widgetbox block-rightcontent">                        
		    <div class="headtitle">
		        <h4 class="widgettitle">Gambar Utama</h4>
		    </div>
		    <div class="widgetcontent">
				<?php echo $form->fileFieldRow($model,'image',array(
				'hint'=>'<b>Note:</b> Ukuran gambar adalah 948 x 703px. Gambar yang lebih besar akan ter-crop otomatis, tolong upload foto ukuran horizontal')); ?>
				<?php if ($model->scenario == 'update'): ?>
				<div class="control-group">
					<label class="control-label">&nbsp;</label>
					<div class="controls">
					<img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(948,703, '/images/solusi/'.$model->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>"/>
					</div>
				</div>
				<?php endif; ?>
				<!-- <p><a href="<?php echo Yii::app()->baseUrl.'/images/fcs-full-image.psd' ?>">Download PSD</a> untuk template full image</p>
				<p><a href="<?php echo Yii::app()->baseUrl.'/images/fcs.psd' ?>">Download PSD</a> untuk template gambar kanan</p> -->
		    </div>
		</div>
		
		<div class="divider15"></div>
		<div class="widgetbox block-rightcontent">                        
		    <div class="headtitle">
		        <h4 class="widgettitle">Gambar Hero</h4>
		    </div>
		    <div class="widgetcontent">
				<?php echo $form->fileFieldRow($model,'image2',array(
				'hint'=>'<b>Note:</b> Ukuran gambar adalah 1920 x 566px. Gambar yang lebih besar akan ter-crop otomatis, tolong upload foto ukuran horizontal')); ?>
				<?php if ($model->scenario == 'update'): ?>
				<div class="control-group">
					<label class="control-label">&nbsp;</label>
					<div class="controls">
					<img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1920,566, '/images/solusi/'.$model->image2 , array('method' => 'adaptiveResize', 'quality' => '90')) ?>"/>
					</div>
				</div>
				<?php endif; ?>
		    </div>
		</div>

		<div class="divider15"></div>
		<div class="widgetbox block-rightcontent">                        
		    <div class="headtitle">
		        <h4 class="widgettitle">Gambar Banner Inside Bottom</h4>
		    </div>
		    <div class="widgetcontent">
				<?php echo $form->fileFieldRow($model,'image3',array(
				'hint'=>'<b>Note:</b> Ukuran gambar adalah 499 x 651px. Gambar yang lebih besar akan ter-crop otomatis, tolong upload foto ukuran horizontal')); ?>
				<?php if ($model->scenario == 'update'): ?>
				<div class="control-group">
					<label class="control-label">&nbsp;</label>
					<div class="controls">
					<img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(499,651, '/images/solusi/'.$model->image3 , array('method' => 'adaptiveResize', 'quality' => '90')) ?>"/>
					</div>
				</div>
				<?php endif; ?>
		    </div>
		</div>

	</div>
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