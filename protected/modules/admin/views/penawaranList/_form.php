<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'penawaran-list-form',
    'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>false,
	),
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<?php echo $form->errorSummary($model); ?>

<div class="widget">
<h4 class="widgettitle">Data Penawaran List <?php echo ($_GET['tipe'] == 'market')? 'Cari' : 'Jual' ?></h4>
<div class="widgetcontent">

	<?php //echo $form->textFieldRow($model,'market_id',array('class'=>'span5', 'readonly'=>'readonly')); ?>
	<div class="control-group">
		<label class="control-label">Market Nama</label>
		<div class="controls">
			<?php 
			$gets_market = TbMarket::model()->findByPk($model->market_id)->nama_post;
			?>
			<input type="text" name="bidang_blc" readonly="readonly" value="<?php echo $gets_market ?>">
			<div class="clearfix"></div>
		</div>
	</div>

	<?php // echo $form->textFieldRow($model,'user_post_id',array('class'=>'span5', 'readonly'=>'readonly')); ?>
	<div class="control-group">
		<label class="control-label">User Post Market</label>
		<div class="controls">
			<?php 
			$gets_nmember = MeMember::model()->findByPk($model->user_post_id)->first_name;
			?>
			<input type="text" name="bidang_blc" readonly="readonly" value="<?php echo $gets_nmember ?>">
			<div class="clearfix"></div>
		</div>
	</div>

	<?php // echo $form->textFieldRow($model,'user_tawar_id',array('class'=>'span5', 'readonly'=>'readonly')); ?>

	<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>225, 'readonly'=>'readonly')); ?>

	<?php // echo $form->textFieldRow($model,'deal',array('class'=>'span5')); ?>

	<?php echo $form->dropDownListRow($model, 'deal', array('1'=>'Deal','0'=>'No Deal'), array('class'=>'span5', 'readonly'=>'readonly')); ?>

	<?php echo $form->textFieldRow($model,'tgl_input',array('class'=>'span5', 'readonly'=>'readonly')); ?>

		<?php 
		/*$this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Add' : 'Save',
		));*/ 
		?>
		<?php 
		$find_market = TbMarket::model()->findByPk($model->market_id)->tipe_data;
		?>
		
		<?php if ($find_market == 1): ?>
			<?php $this->widget('bootstrap.widgets.TbButton', array(
				// 'buttonType'=>'submit',
				// 'type'=>'info',
				'url'=>CHtml::normalizeUrl(array('index', 'tipe'=> 'market')),
				'label'=>'Batal',
			)); ?>
		<?php else: ?>
			<?php $this->widget('bootstrap.widgets.TbButton', array(
				// 'buttonType'=>'submit',
				// 'type'=>'info',
				'url'=>CHtml::normalizeUrl(array('index', 'tipe'=> 'promo')),
				'label'=>'Batal',
			)); ?>
		<?php endif ?>

</div>
</div>
<div class="alert">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Warning!</strong> Fields with <span class="required">*</span> are required.
</div>

<?php $this->endWidget(); ?>
