<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_perusahaan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_perusahaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lokasi_perusahaan')); ?>:</b>
	<?php echo CHtml::encode($data->lokasi_perusahaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gaji_sekitar')); ?>:</b>
	<?php echo CHtml::encode($data->gaji_sekitar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('min_pendidikan')); ?>:</b>
	<?php echo CHtml::encode($data->min_pendidikan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('min_pengalaman')); ?>:</b>
	<?php echo CHtml::encode($data->min_pengalaman); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deskripsi_pekerjaan')); ?>:</b>
	<?php echo CHtml::encode($data->deskripsi_pekerjaan); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('date_input')); ?>:</b>
	<?php echo CHtml::encode($data->date_input); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>

</div>