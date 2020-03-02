<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'tb-komen-form',
    'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>false,
	),
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<?php echo $form->errorSummary($model); ?>

<div class="widget">
<h4 class="widgettitle">Data Komentar</h4>
<div class="widgetcontent">

	<div class="control-group">
		<label class="control-label">Market</label>
		<div class="controls">
			<?php 
			$gets_mark = TbMarket::model()->find('t.id = :ids', array(':ids'=> $model->market_id ));
			?>
			<input type="text" name="mark_id" readonly="readonly" value="<?php echo $gets_mark->nama ?>">
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">User Post Komentar</label>
		<div class="controls">
			<?php 
			$gets_uspost = MeMember::model()->find('t.id = :ids', array(':ids'=> $model->user_id_post ));
			?>
			<input type="text" name="mark_id" readonly="readonly" value="<?php echo $gets_uspost->first_name ?>">
			<div class="clearfix"></div>
		</div>
	</div>

	<?php // echo $form->textFieldRow($model,'market_id_member',array('class'=>'span5')); ?>

	<?php // echo $form->textFieldRow($model,'user_id_post',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model, 'post_user_nama',array('class'=>'span5', 'readonly'=> 'readonly')); ?>

	<?php echo $form->textAreaRow($model,'content',array('rows'=>6, 'cols'=>50, 'class'=>'span8', 'readonly'=>'readonly')); ?>

	<?php echo $form->textFieldRow($model,'date_input',array('class'=>'span5', 'readonly'=>'readonly')); ?>

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
