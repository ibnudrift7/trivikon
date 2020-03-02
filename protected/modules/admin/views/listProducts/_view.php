<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::encode($data->category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_cat1')); ?>:</b>
	<?php echo CHtml::encode($data->sub_cat1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_cat2')); ?>:</b>
	<?php echo CHtml::encode($data->sub_cat2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_cat3')); ?>:</b>
	<?php echo CHtml::encode($data->sub_cat3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('film_grade')); ?>:</b>
	<?php echo CHtml::encode($data->film_grade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('technical_data')); ?>:</b>
	<?php echo CHtml::encode($data->technical_data); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('film_description')); ?>:</b>
	<?php echo CHtml::encode($data->film_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actives')); ?>:</b>
	<?php echo CHtml::encode($data->actives); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sortings')); ?>:</b>
	<?php echo CHtml::encode($data->sortings); ?>
	<br />

	*/ ?>

</div>