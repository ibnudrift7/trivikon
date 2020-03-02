<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('market_id')); ?>:</b>
	<?php echo CHtml::encode($data->market_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_post_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_post_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_tawar_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_tawar_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deal')); ?>:</b>
	<?php echo CHtml::encode($data->deal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_input')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_input); ?>
	<br />


</div>