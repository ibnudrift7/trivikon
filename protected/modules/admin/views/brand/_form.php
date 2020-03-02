<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'brand-form',
    // 'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>false,
	),
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>
<div class="row-fluid">
	<div class="span8">
	<?php if ($model->scenario == 'update'): ?>
		<h1>Edit Industry Application</h1>
	<?php else: ?>
		<h1>Add Industry Application</h1>
	<?php endif; ?>


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

			<?php
			foreach ($modelDesc as $key => $value) {
				$lang = Language::model()->getName($key);
				?>
				<div class="pj-multilang-wrap myLanguage control-group" style="display: <?php if ($key==$this->setting['lang_deff']): ?>block<?php else: ?>none<?php endif ?>;" data-id="<?php echo $lang->id ?>">

				<?php
				echo $form->labelEx($value, '['.$lang->code.']title');
			    echo $form->textField($value,'['.$lang->code.']title',array('class'=>'span8', 'maxlength'=>100));
			    ?>
			    <span class="pj-multilang-input"><img src="<?php echo Yii::app()->baseUrl.'/asset/backend/language/'.$lang->code.'.png' ?>"></span>
			    <span class="help-inline _em_" style="display: none;">Please correct the error</span>
				</div>

				<?php /*<div class="pj-multilang-wrap myLanguage control-group" style="display: <?php if ($key==$this->setting['lang_deff']): ?>block<?php else: ?>none<?php endif ?>;" data-id="<?php echo $lang->id ?>">
				<?php
				echo $form->labelEx($value, '['.$lang->code.']content');
			    echo $form->textArea($value,'['.$lang->code.']content',array('class'=>'span10'));
			    ?>
			    <span class="pj-multilang-input"><img src="<?php echo Yii::app()->baseUrl.'/asset/backend/language/'.$lang->code.'.png' ?>"></span>
			    <span class="help-inline _em_" style="display: none;">Please correct the error</span>
				</div>
				*/ ?>
			    <?php
			}
			?>
			<div class="row-fluid">
				<div class="span6">
		        	<?php echo $form->dropDownListRow($model, 'active', array(
		        		'1'=>'Di Tampilkan',
		        		'0'=>'Di Sembunyikan',
		        	)); ?>
				</div>
				<div class="span6">
					<?php 
					if ($model->scenario == 'update') {						
						$model->product_list = unserialize($model->product_list);
					}
					$criteria=new CDbCriteria;
					$criteria->with = array('description');
					$criteria->addCondition('description.language_id = :language_id');
					$criteria->params[':language_id'] = $this->languageID;
					$criteria->addCondition('t.parent_id = 0');
					$criteria->order = 't.sort ASC';

					$alln_cat = PrdCategory::model()->findAll($criteria);
					$data_cat_parent = array();
					foreach ($alln_cat as $key => $value) {
						// $data_cat_parent[$value->id] = $value->description->name;
						$criteria1=new CDbCriteria;
						$criteria1->with = array('description');
						$criteria1->addCondition('description.language_id = :language_id');
						$criteria1->params[':language_id'] = $this->languageID;
						$criteria1->addCondition('t.parent_id = '. $value->id);
						$criteria1->order = 't.sort ASC';		
						$alln_cat2 = PrdCategory::model()->findAll($criteria1);				
						foreach ($alln_cat2 as $key2 => $value2) {
							$data_cat_parent[$value->id.'__'.$value2->id] = $value->description->name .' > '. $value2->description->name;
						}
					}
					?>
					<?php echo $form->dropDownListRow($model, 'product_list', $data_cat_parent, array('multiple'=>'multiple', 'class'=>'span12')); ?>
				</div>
			</div>
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
		    </div>
	    </div>
		<div class="divider15"></div>
		<div class="widgetbox block-rightcontent">                        
		    <div class="headtitle">
		        <h4 class="widgettitle">Gambar Utama</h4>
		    </div>
		    <div class="widgetcontent">
				<?php echo $form->fileFieldRow($model,'image',array(
				'hint'=>'<b>Note:</b> Ukuran gambar adalah 365 x 300px. Gambar yang lebih besar akan ter-crop otomatis', 'style'=>"width: 100%")); ?>
				<?php if ($model->scenario == 'update'): ?>
				<img style="width: 100%;" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(365,300, '/images/brand/'.$model->image , array('method' => 'resize', 'quality' => '90')) ?>"/>
				<?php endif; ?>
		    </div>
		</div>
		<div class="divider15"></div>
		<?php /*
		<div class="widgetbox block-rightcontent">                        
		    <div class="headtitle">
		        <h4 class="widgettitle">Gambar Logo</h4>
		    </div>
		    <div class="widgetcontent">
				<?php echo $form->fileFieldRow($model,'logo',array(
				'hint'=>'<b>Note:</b> Ukuran gambar adalah height 73px. Gambar yang lebih besar akan ter-crop otomatis', 'style'=>"width: 100%")); ?>
				<?php if ($model->scenario == 'update'): ?>
				<img style="width: 100%;" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(200,73, '/images/brand/'.$model->logo , array('method' => 'resize', 'quality' => '90')) ?>"/>
				<?php endif; ?>
		    </div>
		</div>
		<div class="divider15"></div>
		*/ ?>
    </div>

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
