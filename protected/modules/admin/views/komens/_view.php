<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('market_id')); ?>:</b>
	<?php echo CHtml::encode($data->market_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('market_id_member')); ?>:</b>
	<?php echo CHtml::encode($data->market_id_member); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id_post')); ?>:</b>
	<?php echo CHtml::encode($data->user_id_post); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_input')); ?>:</b>
	<?php echo CHtml::encode($data->date_input); ?>
	<br />


</div>