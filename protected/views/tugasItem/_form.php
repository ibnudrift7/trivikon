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
<h4 class="widgettitle">Data Tugas Item</h4>
<div class="widgetcontent">

	<?php if ($model->scenario == 'update'): ?>
		<?php echo $form->textFieldRow($model,'dari', array('class'=>'span5 form-control','empty'=>'Pilih Member', 'readonly'=>'readonly')); ?>
		<?php echo $form->textFieldRow($model,'kepada', array('class'=>'span5 form-control','empty'=>'Pilih Member', 'readonly'=>'readonly')); ?>
	<?php else: ?>
		<?php 
		$models_user = MeMember::model()->findAll('t.aktif = :aktifs order by t.id DESC', array(':aktifs'=>1));
		$members_dn = CHtml::listData($models_user, 'id', 'nick_name');
		?>
		<?php echo $form->dropDownListRow($model,'dari', $members_dn, array('class'=>'span5','empty'=>'Pilih Member', 'required'=>'required')); ?>

		<?php echo $form->dropDownListRow($model,'kepada', $members_dn, array('class'=>'span5','empty'=>'Pilih Member', 'required'=>'required')); ?>
	<?php endif ?>
	
	<?php 
	$dn_priority = [
					'urgent'=> strtoupper('urgent'),
					'penting'=> strtoupper('penting'),
					'rutin'=> strtoupper('rutin'),
					];
	?>
	<?php echo $form->dropDownListRow($model,'prioritas', $dn_priority, array('class'=>'span5 form-control','maxlength'=>7, 'empty'=>'Pilih Prioritas', 'readonly'=>'readonly')); ?>
	
	<?php 
	$models_kep = TugasKepentingan::model()->findAll();
	$mod_kepen_list = CHtml::listData($models_kep, 'id', 'nama_kepentingan');
	?>
	<?php $subject_kep = $model->subject_kepentingan; ?>
	<?php echo $form->dropDownListRow($model,'subject_kepentingan', $mod_kepen_list, array('class'=>'span5 form-control','maxlength'=>7, 'empty'=>'Pilih Kepentingan', 'disabled'=>'disabled')); ?>
	<?php $model->subject_kepentingan = $subject_kep; ?>
	<?php echo $form->hiddenField($model,'subject_kepentingan', array('class'=>'span5')); ?>
	
	<?php // echo $form->textFieldRow($model,'subject_kepentingan',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'deskripsi',array('rows'=>3, 'cols'=>50, 'class'=>'span8 form-control', 'readonly'=>'readonly')); ?>
	
	<?php $save_status = $model->status; ?>
	<?php echo $form->dropDownListRow($model,'status', ['belum'=>'belum', 'selesai'=>'selesai'],array('class'=>'span5 form-control', 'disabled'=>'disabled')); ?>
	<?php $model->status = $save_status; ?>
	<?php echo $form->hiddenField($model,'status', array('class'=>'span5')); ?>

	<?php // echo $form->dropDownListRow($model,'status_selesai', ['under'=>'under', 'over'=>'over'], array('class'=>'span5 form-control','maxlength'=>5)); ?>

	<?php echo $form->hiddenField($model,'member_id',array('class'=>'span5')); ?>
	
	<?php echo $form->hiddenField($model,'admin_id',array('class'=>'span5')); ?>

	<?php // echo $form->textFieldRow($model,'admin_id',array('class'=>'span5')); ?>

	<?php // echo $form->textFieldRow($model,'date_input',array('class'=>'span5')); ?>
	
	<?php 
	$model->date_finish = date( 'Y-m-d', strtotime($model->date_finish) );
	?>
	<?php echo $form->textFieldRow($model, 'date_finish',array('class'=>'span5 datepicker2 form-control', 'readonly'=>'readonly')); ?>

	<?php if ($model->scenario == 'update' && $model->lock_start == 0): ?>
		<?php // echo $form->dropDownListRow($model,'start_project', [1=>'YA', 0=>'Belum'],array('class'=>'span5 form-control', 'empty'=> 'Pilih')); ?>
		<div class="control-group ">
		    <label class="control-label" for="TugasLists_start_project">Start Project</label>
		    <div class="controls">
		    	<button type="button" class="btn btn-success" id="trigger_btn" data-id="1">START</button>
		        <?php echo $form->hiddenField($model,'start_project', array('class'=>'span5')); ?>
		    </div>
		</div>
	<?php endif ?>

	<?php if ($model->scenario == 'update' && $model->lock_start == 1): ?>
		<?php // echo $form->dropDownListRow($model,'flex_selesai_pelaksana', [1=>'YA', 0=>'Belum'],array('class'=>'span5 form-control', 'empty'=> 'Pilih')); ?>
		<div class="control-group ">
		    <label class="control-label" for="TugasLists_flex_selesai_pelaksana">Start Project</label>
		    <div class="controls">
		    	<?php if (intval($model->flex_selesai_pelaksana) == 1): ?>
		    	<button type="button" class="btn btn-primary" id="trigger_btn2" data-id="1">SELESAI</button>	
		    	<?php else: ?>
		    	<button type="button" class="btn btn-success" id="trigger_btn2" data-id="1">SELESAI</button>
		    	<?php endif ?>
		        <?php echo $form->hiddenField($model,'flex_selesai_pelaksana', array('class'=>'span5')); ?>
		    </div>
		</div>
	<?php endif ?>
	
	<?php if ($model->scenario == 'update' && $model->lock_selesai == 0): ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Add' : 'Save',
		)); ?>
	<?php endif; ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			// 'buttonType'=>'submit',
			// 'type'=>'info',
			'url'=>CHtml::normalizeUrl(array('index', 'kepentingan_id'=> $model->subject_kepentingan)),
			'label'=>'Batal',
		)); ?>
</div>
</div>
<?php $this->endWidget(); ?>


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

	<?php $mod_komen->user_id = $model->member_id; ?>
	<?php echo $form->hiddenField($mod_komen,'user_id', array('class'=>'span5')); ?>

	<?php $mod_komen->user_type = 'pelaksana'; ?>
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

<div class="alert">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Warning!</strong> Fields with <span class="required">*</span> are required.
</div>

<script type="text/javascript">
	$(function(){
		
		$('button#trigger_btn.btn').on('click', function(){
			if ($(this).hasClass('check')) {
				$(this).removeClass('check')
				$(this).removeClass('btn-primary').addClass('btn-success');
				$('#TugasLists_start_project').val(0);
			}else{
				$(this).removeClass('btn-success').addClass('btn-primary');
				$(this).addClass('check');
				$('#TugasLists_start_project').val(1);
			}
			return;
		});

		$('button#trigger_btn2.btn').on('click', function(){
			if ($(this).hasClass('check')) {
				$(this).removeClass('check')
				$(this).removeClass('btn-primary').addClass('btn-success');
				$('#TugasLists_flex_selesai_pelaksana').val(0);
			}else{
				$(this).removeClass('btn-success').addClass('btn-primary');
				$(this).addClass('check');
				$('#TugasLists_flex_selesai_pelaksana').val(1);
			}
			return;
		});

	});
</script>