<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'category_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'sub_cat1',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'sub_cat2',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'sub_cat3',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'film_grade',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'technical_data',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'film_description',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'actives',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'sortings',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
