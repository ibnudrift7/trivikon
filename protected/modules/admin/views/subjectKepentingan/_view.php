<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kepentingan')); ?>:</b>
	<?php echo CHtml::encode($data->kepentingan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_kepentingan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_kepentingan); ?>
	<br />


</div>