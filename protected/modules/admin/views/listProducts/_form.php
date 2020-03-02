<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'list-products-form',
    'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>false,
	),
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<?php echo $form->errorSummary($model); ?>
<div class="widget">
<h4 class="widgettitle">Data ListProducts</h4>
<div class="widgetcontent">
	<?php 
	$criteria=new CDbCriteria;
	$criteria->with = array('description');
	$criteria->addCondition('description.language_id = :language_id');
	$criteria->params[':language_id'] = $this->languageID;
	$criteria->addCondition('t.parent_id = 0');
	$criteria->order = 't.sort ASC';

	$alln_cat = PrdCategory::model()->findAll($criteria);
	$data_cat_parent = array();
	foreach ($alln_cat as $key => $value) {
		$data_cat_parent[$value->id] = $value->description->name;
	}
	?>
	<?php echo $form->dropDownListRow($model, 'category_id', $data_cat_parent, array('class'=>'span5', 'empty'=>'-- Pilih Category --')); ?>
	<?php if ($model->scenario == 'update'): ?>
	<?php 
	$nmaes_1 = ViewCategory::model()->getSubName($model->sub_cat1);
	?>
	<?php echo $form->dropDownListRow($model,'sub_cat1', array($model->sub_cat1=>$nmaes_1), array('class'=>'span5')); ?>
	<?php else: ?>
	<?php echo $form->dropDownListRow($model,'sub_cat1', array(), array('class'=>'span5', 'empty'=>'-- Pilih Data --')); ?>
	<?php endif ?>

	<?php if ($model->scenario == 'update'): ?>
	<?php 
	$nmaes_2 = ViewCategory::model()->getSubName($model->sub_cat2);
	?>
	<?php echo $form->dropDownListRow($model,'sub_cat2', array($model->sub_cat2=>$nmaes_2), array('class'=>'span5')); ?>
	<?php else: ?>
	<?php echo $form->dropDownListRow($model,'sub_cat2', array(), array('class'=>'span5', 'empty'=>'-- Pilih Data --')); ?>
	<?php endif ?>

	<?php if ($model->scenario == 'update'): ?>
	<?php 
	$nmaes_3 = ViewCategory::model()->getSubName($model->sub_cat3);
	?>
	<?php echo $form->dropDownListRow($model,'sub_cat3', array($model->sub_cat3=>$nmaes_3), array('class'=>'span5')); ?>
	<?php else: ?>
	<?php echo $form->dropDownListRow($model,'sub_cat3', array(), array('class'=>'span5', 'empty'=>'-- Pilih Data --')); ?>
	<?php endif ?>

	<?php echo $form->textFieldRow($model,'film_grade',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'technical_data',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->textFieldRow($model,'film_description',array('class'=>'span5','maxlength'=>225)); ?>

	<?php echo $form->dropDownListRow($model, 'actives', array(
		        		'1'=>'Di Tampilkan',
		        		'0'=>'Di Sembunyikan',
		        	), array('class'=> 'span3')); ?>

	<?php echo $form->textFieldRow($model,'sortings',array('class'=>'span2')); ?>

		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Add' : 'Save',
		)); ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			// 'buttonType'=>'submit',
			// 'type'=>'info',
			'url'=>CHtml::normalizeUrl(array('index')),
			'label'=>'Batal',
		)); ?>
</div>
</div>
<div class="alert">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Warning!</strong> Fields with <span class="required">*</span> are required.
</div>

<?php $this->endWidget(); ?>

<script>
jQuery.noConflict();
jQuery(document).ready(function($)
{
	$('select#ListProducts_category_id').change(function(){
		var s_id = $(this).val();
		$.ajax({
                url: '<?php echo CHtml::normalizeUrl(array('/admin/listProducts/getsubdata')); ?>?id='+ s_id,
                type: "GET",
                // dataType: 'json',
            })
            .done(function( msg ) {
                // console.log(msg);
                $('select#ListProducts_sub_cat1').html(msg);
                return false;
            });
	});


	$('select#ListProducts_sub_cat1').change(function(){
		var s_id = $(this).val();
		$.ajax({
                url: '<?php echo CHtml::normalizeUrl(array('/admin/listProducts/getsubdata')); ?>?id='+ s_id,
                type: "GET",
                // dataType: 'json',
            })
            .done(function( msg ) {
                $('select#ListProducts_sub_cat2').html(msg);
                return false;
                // console.log(msg);
            });
	});

	$('select#ListProducts_sub_cat2').change(function(){
		var s_id = $(this).val();
		$.ajax({
                url: '<?php echo CHtml::normalizeUrl(array('/admin/listProducts/getsubdata')); ?>?id='+ s_id,
                type: "GET",
                // dataType: 'json',
            })
            .done(function( msg ) {
                $('select#ListProducts_sub_cat3').html(msg);
                return false;
                // console.log(msg);
            });
	});

	

});
</script>