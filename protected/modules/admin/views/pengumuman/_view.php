<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titles')); ?>:</b>
	<?php echo CHtml::encode($data->titles); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contents')); ?>:</b>
	<?php echo CHtml::encode($data->contents); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aktif')); ?>:</b>
	<?php echo CHtml::encode($data->aktif); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_input')); ?>:</b>
	<?php echo CHtml::encode($data->date_input); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('urutan')); ?>:</b>
	<?php echo CHtml::encode($data->urutan); ?>
	<br />


</div>