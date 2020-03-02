<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'invoice_no',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'kategori_id',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'keyword',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'nama_perusahaan',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'image',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'nama_post',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textAreaRow($model,'deskripsi',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'provinsi',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'kota',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'harga_total',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tgl_input',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tgl_expired',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'foto',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textAreaRow($model,'detail_info',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'user_id_post',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'admin_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'user_id_deal',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'deal',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tgl_deal',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'aktif',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
