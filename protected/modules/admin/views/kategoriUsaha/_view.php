<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_usaha_id')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_usaha_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_usaha_nama')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_usaha_nama); ?>
	<br />


</div>