<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'tugas-lists-form',
    'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>false,
	),
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<?php echo $form->errorSummary($model); ?>

<div class="widget">
<h4 class="widgettitle">Data Tugas Item - Pemberi</h4>
<div class="widgetcontent">

	<?php if ($model->scenario == 'update'): ?>
		<?php echo $form->textFieldRow($model,'dari', array('class'=>'span5 form-control','empty'=>'Pilih Member', 'readonly'=>'readonly')); ?>
		<?php echo $form->textFieldRow($model,'kepada', array('class'=>'span5 form-control','empty'=>'Pilih Member', 'readonly'=>'readonly')); ?>
	<?php else: ?>
		<?php 
		$models_user = MeMember::model()->findAll('t.aktif = :aktifs order by t.id DESC', array(':aktifs'=>1));
		$members_dn = CHtml::listData($models_user, 'id', 'nick_name');
		?>
		<?php echo $form->dropDownListRow($model,'dari', $members_dn, array('class'=>'span5 form-control','empty'=>'Pilih Member', 'required'=>'required')); ?>

		<?php echo $form->dropDownListRow($model,'kepada', $members_dn, array('class'=>'span5 form-control','empty'=>'Pilih Member', 'required'=>'required')); ?>
	<?php endif ?>
	
	<?php 
	$dn_priority = [
					'urgent'=> strtoupper('urgent'),
					'penting'=> strtoupper('penting'),
					'rutin'=> strtoupper('rutin'),
					];
	?>
	<?php 
	$models_kep = TugasKepentingan::model()->findAll();
	$mod_kepen_list = CHtml::listData($models_kep, 'id', 'nama_kepentingan');
	?>

	
	<?php if ($model->scenario == 'update'): ?>
		<?php echo $form->dropDownListRow($model,'prioritas', $dn_priority, array('class'=>'span5 form-control','maxlength'=>7, 'empty'=>'Pilih Prioritas', 'readonly'=>'readonly')); ?>
		<?php $subject_kep = $model->subject_kepentingan; ?>
		<?php echo $form->dropDownListRow($model,'subject_kepentingan', $mod_kepen_list, array('class'=>'span5 form-control','maxlength'=>7, 'empty'=>'Pilih Kepentingan', 'disabled'=>'disabled')); ?>
		<?php $model->subject_kepentingan = $subject_kep; ?>
		<?php echo $form->hiddenField($model,'subject_kepentingan', array('class'=>'span5')); ?>
		
	<?php else: ?>
		
		<?php echo $form->dropDownListRow($model,'prioritas', $dn_priority, array('class'=>'span5 form-control','maxlength'=>7, 'empty'=>'Pilih Prioritas',)); ?>
		<?php // echo $form->dropDownListRow($model,'subject_kepentingan', $mod_kepen_list, array('class'=>'span5 form-control','maxlength'=>7, 'empty'=>'Pilih Kepentingan')); ?>
		<?php $model->subject_kepentingan = $_GET['kepentingan_id']; ?>
		<?php echo $form->hiddenField($model,'subject_kepentingan', array('class'=>'span5')); ?>
	<?php endif ?>

	<?php if ($model->scenario == 'update'): ?>
	<?php echo $form->textAreaRow($model,'deskripsi',array('rows'=>3, 'cols'=>50, 'class'=>'span8 form-control', 'readonly'=>'readonly')); ?>
	<?php else: ?>
		<?php echo $form->textAreaRow($model,'deskripsi',array('rows'=>3, 'cols'=>50, 'class'=>'span8 form-control',)); ?>
	<?php endif ?>
	
	<?php $save_status = $model->status; ?>
	<?php echo $form->dropDownListRow($model,'status', ['belum'=>'belum', 'selesai'=>'selesai'],array('class'=>'span5 form-control', 'disabled'=>'disabled')); ?>
	<?php $model->status = $save_status; ?>
	<?php echo $form->hiddenField($model,'status', array('class'=>'span5')); ?>

	<?php // echo $form->dropDownListRow($model,'status_selesai', ['under'=>'under', 'over'=>'over'], array('class'=>'span5 form-control','maxlength'=>5)); ?>

	<?php echo $form->hiddenField($model,'member_id',array('class'=>'span5')); ?>
	
	<?php echo $form->hiddenField($model,'admin_id',array('class'=>'span5')); ?>

	<?php // echo $form->textFieldRow($model,'admin_id',array('class'=>'span5')); ?>

	<?php // echo $form->textFieldRow($model,'date_input',array('class'=>'span5')); ?>
	
	<?php if ($model->scenario == 'update'): ?>
		<?php 	
		$model->date_finish = date( 'Y-m-d', strtotime($model->date_finish) );
		?>
		<?php echo $form->textFieldRow($model, 'date_finish',array('class'=>'span5 datepicker2 form-control', 'readonly'=>'readonly')); ?>
	<?php else: ?>
		<?php echo $form->textFieldRow($model, 'date_finish',array('class'=>'span5 datepicker2 form-control')); ?>
	<?php endif; ?>

	<?php if ($model->scenario == 'update' || $model->lock_start == 1): ?>
		<?php echo $form->textFieldRow($model, 'date_start_user',array('class'=>'span5 datepicker2 form-control', 'readonly'=>'readonly')); ?>

		<?php echo $form->textFieldRow($model, 'date_selesai_user',array('class'=>'span5 datepicker2 form-control', 'readonly'=>'readonly')); ?>

		<?php echo $form->dropDownListRow($model,'flex_selesai_pelaksana', [1=>'YA', 0=>'Belum'],array('class'=>'span5 form-control', 'readonly'=> 'readonly')); ?>
		<?php echo $form->hiddenField($model,'flex_selesai_pelaksana',array('class'=>'span5')); ?>

		<?php echo $form->dropDownListRow($model,'flex_selesai_pemberi', [1=>'YA', 0=>'Belum'],array('class'=>'span5 form-control', 'empty'=> 'Pilih')); ?>
	<?php endif ?>

	<?php if ($model->scenario == 'update' && $model->lock_selesai != 1): ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Add' : 'Save',
		)); ?>
	<?php endif ?>

	<?php if ($model->scenario != 'update'): ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Add' : 'Save',
		)); ?>
	<?php endif ?>

	<?php $this->widget('bootstrap.widgets.TbButton', array(
		// 'buttonType'=>'submit',
		// 'type'=>'info',
		'url'=>CHtml::normalizeUrl(array('index', 'kepentingan_id'=> $model->subject_kepentingan)),
		'label'=>'Batal',
	)); ?>
</div>
</div>
<?php $this->endWidget(); ?>

<?php if ($model->scenario == 'update'): ?>
<div class="widget">
<h4 class="widgettitle">Komentar</h4>
<div class="widgetcontent">
	<?php 
	$mod_komentar = Komentar::model()->findAll('t.post_id = :post_id ORDER BY t.id ASC', array(':post_id'=> $model->id));
	?>
	<?php if (count($mod_komentar) > 0): ?>
		<ul class="list-unstyled comments_list">
		  
		  <?php foreach ($mod_komentar as $key => $value): ?>	  	
		  <li class="media">
		  	<?php $member_nm = MeMember::model()->findByPk($value->user_id)->nick_name ?>
		    <div class="media-body">
		      <h5 class="mt-0 mb-1"><?php echo $member_nm ?>  <small>- <?php echo $value->user_type ?></small></h5>
		      <?php echo $value->konten; ?>
		    </div>
		  </li>
		  <?php endforeach ?>

		</ul>
	<?php else: ?>
		<h6>Komentar Kosong</h6>
	<?php endif ?>
	
	<div class="py-1"></div>
	<hr>
	<div class="py-1"></div>
	<h6><b>Add Komentar</b></h6>
	<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
		'id'=>'komentar-form',
	    // 'type'=>'horizontal',
		'enableAjaxValidation'=>false,
		'clientOptions'=>array(
			'validateOnSubmit'=>false,
		),
		'htmlOptions' => array('enctype' => 'multipart/form-data'),
	)); ?>

	<?php echo $form->errorSummary($mod_komen); ?>
	<?php if(Yii::app()->user->hasFlash('success_komen')): ?>
	    <?php $this->widget('bootstrap.widgets.TbAlert', array(
	        'alerts'=>array('success_komen'),
	        'fade'=> false,
	    )); ?>
	<?php endif; ?>

	<?php $mod_komen->post_id = $model->id; ?>
	<?php echo $form->hiddenField($mod_komen,'post_id', array('class'=>'span5')); ?>

	<?php $mod_komen->user_id = $model->admin_id; ?>
	<?php echo $form->hiddenField($mod_komen,'user_id', array('class'=>'span5')); ?>

	<?php $mod_komen->user_type = 'manager'; ?>
	<?php echo $form->hiddenField($mod_komen,'user_type', array('class'=>'span5')); ?>
	
	<?php echo $form->textAreaRow($mod_komen,'konten',array('rows'=>2, 'class'=>'span8 form-control', 'required'=>'required')); ?>
	<div class="py-2"></div>

	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Save',
		)); ?>

	<?php $this->endWidget(); ?>

	<div class="clear"></div>
</div>
<?php endif ?>

<div class="alert">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Warning!</strong> Fields with <span class="required">*</span> are required.
</div>
