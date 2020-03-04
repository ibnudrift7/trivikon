<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dari')); ?>:</b>
	<?php echo CHtml::encode($data->dari); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kepada')); ?>:</b>
	<?php echo CHtml::encode($data->kepada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prioritas')); ?>:</b>
	<?php echo CHtml::encode($data->prioritas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject_kepentingan')); ?>:</b>
	<?php echo CHtml::encode($data->subject_kepentingan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deskripsi')); ?>:</b>
	<?php echo CHtml::encode($data->deskripsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('status_selesai')); ?>:</b>
	<?php echo CHtml::encode($data->status_selesai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('member_id')); ?>:</b>
	<?php echo CHtml::encode($data->member_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_id')); ?>:</b>
	<?php echo CHtml::encode($data->admin_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_input')); ?>:</b>
	<?php echo CHtml::encode($data->date_input); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_finish')); ?>:</b>
	<?php echo CHtml::encode($data->date_finish); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />

	*/ ?>

</div>