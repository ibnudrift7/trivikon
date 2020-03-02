<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'promo-member-form',
    'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>false,
	),
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<?php echo $form->errorSummary($model); ?>

<div class="widget">
<h4 class="widgettitle">Data PromoMember</h4>
<div class="widgetcontent">

	<div class="control-group">
		<label class="control-label">User</label>
		<div class="controls">
			<?php 
			$gets_user = MeMember::model()->find('t.id = :ids', array(':ids'=> $model->user_id ));
			?>
			<input type="text" name="users_blc" readonly="readonly" value="<?php echo $gets_user->first_name ?>">
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Bidang Usaha</label>
		<div class="controls">
			<?php 
			$gets_kat = KategoriUsaha::model()->find('t.id = :ids', array(':ids'=> $model->bidang_id ));
			?>
			<input type="text" name="bidang_blc" readonly="readonly" value="<?php echo $gets_kat->nama ?>">
			<div class="clearfix"></div>
		</div>
	</div>

	<?php // echo $form->textFieldRow($model,'user_id', array('class'=>'span5', 'readonly'=> 'readonly')); ?>

	<?php // echo $form->textFieldRow($model,'bidang_id', array('class'=>'span5', 'readonly'=> 'readonly')); ?>

	<?php echo $form->textFieldRow($model,'nama', array('class'=>'span5','maxlength'=>225, 'readonly'=> 'readonly')); ?>

	<?php echo $form->textAreaRow($model,'content', array('rows'=>6, 'class'=>'span8', 'readonly'=> 'readonly')); ?>

	<?php //echo $form->textFieldRow($model,'image',array('class'=>'span5','maxlength'=>225, 'readonly'=> 'readonly')); ?>	

	<?php echo $form->textFieldRow($model,'date_input', array('class'=>'span5', 'readonly'=> 'readonly')); ?>

	<?php echo $form->textFieldRow($model,'date_berakhir', array('class'=>'span5', 'readonly'=> 'readonly')); ?>

	<?php echo $form->dropDownListRow($model, 'aktif', array(
		        		'1'=>'Di Tampilkan',
		        		'0'=>'Di Sembunyikan',
		        	)); ?>

	<div class="control-group">
		<label class="control-label">Foto Promo</label>
		<div class="controls">
			<div class="npicts" style="max-width: 235px; border: 3px solid #ccc;">
				<img src="<?php echo $model->image ?>" alt="" class="img-responsive">
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

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
