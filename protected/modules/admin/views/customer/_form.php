<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'cs-customer-form',
    // 'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>false,
	),
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>
<?php echo $form->errorSummary($model); ?>
<div class="row-fluid">
	<div class="span8">
		<div class="widget">
		<h4 class="widgettitle">Data Member</h4>
		<div class="widgetcontent">
			<div class="row-fluid">
				<div class="span4">
					<?php echo $form->textFieldRow($model,'first_name',array('class'=>'span12','maxlength'=>100)); ?>
					<?php echo $form->textFieldRow($model,'last_name',array('class'=>'span12','maxlength'=>100)); ?>
					<?php echo $form->textFieldRow($model,'hp',array('class'=>'span12','maxlength'=>20)); ?>
					<?php echo $form->textFieldRow($model,'nick_name',array('class'=>'span12','maxlength'=>20)); ?>
				</div>
				<div class="span4">
					<?php echo $form->textFieldRow($model,'address',array('class'=>'span12')); ?>
					
					<?php if ($model->scenario == 'update'): ?>
						<?php 
						$data_prov = TbProvinsi::model()->find('provinsi = :provs', array(':provs'=> $model->province));
						$models_kota = TbKota::model()->findAll('provinsi_id = :prov_id', array(':prov_id'=> $data_prov->id ));
						$nkotas = array();
						foreach ($models_kota as $key => $value) {
							$nkotas[$value->nama] = $value->nama;
						}
						?>
						<?php echo $form->dropDownListRow($model,'city', $nkotas, array('class'=>'span12 pilih_kota', 'empty'=> '-- Pilih --')); ?>
					<?php else: ?>
					<?php echo $form->dropDownListRow($model,'city', array(), array('class'=>'span12 pilih_kota', 'empty'=> '-- Pilih --')); ?>	
					<?php endif ?>
					

					<?php echo $form->textFieldRow($model,'telp_saudara',array('class'=>'span12')); ?>
				</div>
				<div class="span4">
					<?php 
					$provinsi = TbProvinsi::model()->findAll();
					foreach ($provinsi as $key => $value) {
						$nods_provinc[$value->provinsi] = $value->provinsi;
					}
					?>
					<?php echo $form->dropDownListRow($model,'province', $nods_provinc, array('class'=>'span12 pilih_provinsi', 'empty'=> '-- Pilih --')); ?>

					<?php echo $form->textFieldRow($model,'postcode', array('class'=>'span12')); ?>
					<?php 
					$datan_jabatan = [
										'pengawas'=>'Pengawas',
										'direktur'=>'Direktur',
										'pelaksana'=>'Pelaksana',
									 ];
					?>
					<?php echo $form->dropDownListRow($model,'jabatan', $datan_jabatan,array('class'=>'span12', 'empty'=>'Pilih jabatan')); ?>
				</div>
			</div>
			<div class="divider10"></div>
			<hr>
			<div class="divider10"></div>
			<div class="row-fluid">
				<div class="span4">
					<?php echo $form->dropDownListRow($model, 'jenis_kelamin', array(
		        		'1'=>'Pria',
		        		'2'=>'Wanita',
		        	)); ?>
					<?php 
					// $models = KategoriUsaha::model()->findAll(); 
					// $data_bid = CHtml::listData($models, 'id', 'nama');    
					// echo $form->dropDownListRow($model, 'bidang_usaha', $data_bid, array('empty'=> '-- Choose --')); 
					?>
					<?php 
					// $models2 = TbMitra::model()->findAll(); 
					// $data_mit = CHtml::listData($models2, 'id', 'nama_mitra');    
					// echo $form->dropDownListRow($model, 'mitra_id', $data_mit, array('empty'=> '-- Choose --')); 
					?>
					<?php // echo $form->textFieldRow($model,'tgl_join', array('class'=>'span12 datepicker2')); ?>
					<?php echo $form->textFieldRow($model,'nama_perusahaan',array('class'=>'span12')); ?>
				</div>
				<div class="span4">
					<?php echo $form->textFieldRow($model,'no_ktp',array('class'=>'span12')); ?>
					<?php echo $form->textAreaRow($model,'alamat_perusahaan',array('class'=>'span12')); ?>
				</div>
				<div class="span4">
		        	<?php echo $form->textFieldRow($model,'tanggal_lahir',array('class'=>'span12 datepicker')); ?>
					<?php // echo $form->textAreaRow($model,'sejarah_singkat',array('class'=>'span12')); ?>
					<?php // echo $form->textFieldRow($model,'referal',array('class'=>'span12')); ?>
					<?php echo $form->textFieldRow($model,'no_ktp', array('class'=>'span12')); ?>
				</div>
			</div>

			<div class="divider10"></div>
			<hr>
			<div class="divider10"></div>
			<div class="row-fluid">
				<div class="span4">
					<?php echo $form->fileFieldRow($model,'foto_diri',array(
					'hint'=>'<b>Note:</b> Image size is 450 x 450px.', 'style'=>"width: 100%")); ?>
					<?php if ($model->scenario == 'update'): ?>
					<img style="width: 110px;" src="<?php echo Yii::app()->baseUrl . '/images/customer/'.$model->foto_diri; ?>"/>
					<?php endif; ?>
					<div class="clearfix"></div>
					<?php // echo $form->checkBoxRow($model,'del_fotodiri'); ?>
				</div>
				<div class="span4">
					<?php echo $form->fileFieldRow($model,'foto_usaha',array(
					'hint'=>'<b>Note:</b> Image size is 450 x 450px.', 'style'=>"width: 100%")); ?>
					<?php if ($model->scenario == 'update'): ?>
					<img style="width: 110px;" src="<?php echo Yii::app()->baseUrl . '/images/customer/'.$model->foto_usaha; ?>"/>
					<?php endif; ?>
					<div class="clearfix"></div>
					<?php echo $form->checkBoxRow($model,'del_fotoperusahaan'); ?>
				</div>
				<div class="span4">
					<?php /*echo $form->fileFieldRow($model,'foto_logo',array(
					'hint'=>'<b>Note:</b> Image size is 600 x 600px.', 'style'=>"width: 100%")); ?>
					<?php if ($model->scenario == 'update'): ?>
					<img style="width: 25%;" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(600,600, '/images/customer/'.$model->foto_logo , array('method' => 'adaptiveResize', 'quality' => '90')) ?>"/>
					<?php endif;*/ ?>
				</div>
			</div>

		</div>
		</div>

		<div class="alert">
		  <button type="button" class="close" data-dismiss="alert">×</button>
		  <strong>Warning!</strong> Fields with <span class="required">*</span> are required.
		</div>
		
	</div>
	<div class="span4">
		<div class="widgetbox block-rightcontent">                        
		    <div class="headtitle">
		        <h4 class="widgettitle">Action</h4>
		    </div>
		    <div class="widgetcontent">
				<?php $this->widget('bootstrap.widgets.TbButton', array(
					'buttonType'=>'submit',
					'type'=>'primary',
					'label'=>$model->isNewRecord ? 'Simpan dan Tambahkan' : 'Simpan',
					'htmlOptions'=>array('class'=>'btn-large'),
				)); ?>
				<?php $this->widget('bootstrap.widgets.TbButton', array(
					// 'buttonType'=>'submit',
					// 'type'=>'info',
					'url'=>CHtml::normalizeUrl(array('index')),
					'label'=>'Batal',
					'htmlOptions'=>array('class'=>'btn-large'),
				)); ?>
		    </div>
		</div>
		<div class="divider15"></div>
		<div class="widget">
		<h4 class="widgettitle">Data Login</h4>
		<div class="widgetcontent">
			<?php echo $form->textFieldRow($model,'email',array('class'=>'span12','maxlength'=>200)); ?>
			
			<?php echo $form->textFieldRow($model,'username',array('class'=>'span12','maxlength'=>200,'required'=>'required')); ?>

			<?php echo $form->passwordFieldRow($model,'pass',array('class'=>'span12','maxlength'=>100)); ?>

			<?php echo $form->passwordFieldRow($model,'pass2',array('class'=>'span12','maxlength'=>100)); ?>

        	<?php echo $form->dropDownListRow($model, 'aktif', array(
        		'1'=>'Aktif',
        		'0'=>'Tidak Aktif',
        	), array('class'=>'span12')); ?>

        	<?php // echo $form->textFieldRow($model,'gp_point',array('class'=>'span12','maxlength'=>5,'required'=>'required')); ?>

            <div class="divider5"></div>
			<div class="alert">
			  <button type="button" class="close" data-dismiss="alert">×</button>
			  Kosongkan password jika tidak ingin di ganti
			</div>

		</div>
		</div>
	</div>
</div>


<?php $this->endWidget(); ?>
<script type="text/javascript">
	jQuery(function($){

		$( ".pilih_provinsi" ).change(function() {
			var sn_id = $(this).val();
			var urls_get = "<?php echo CHtml::normalizeUrl(array('/admin/customer/getcity')) ?>?provinsi="+ sn_id;
			$.get(urls_get , function(message){
				$('.pilih_kota').empty()
				$('.pilih_kota').html(message);
			    console.log(message);
			  });

			return false;
		});

	});
</script>
<style type="text/css">
	.radio, .checkbox{
		padding-left: 0;
	}
</style>