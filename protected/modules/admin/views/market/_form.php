<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'tb-market-form',
    'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>false,
	),
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<?php echo $form->errorSummary($model); ?>

<div class="widget">
<h4 class="widgettitle">Data <?php echo ($_GET['tipe'] == 'market')? 'Cari' : 'Jual' ?></h4>
<div class="widgetcontent">
	<?php echo $form->textFieldRow($model,'invoice_no',array('class'=>'span5','maxlength'=>225, 'readonly'=>'readonly')); ?>

	<?php // echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>225, 'readonly'=>'readonly')); ?>

	<?php // echo $form->textFieldRow($model,'kategori_id',array('class'=>'span5', 'readonly'=>'readonly')); ?>
	<div class="control-group">
		<label class="control-label">Bidang Usaha</label>
		<div class="controls">
			<?php 
			$gets_kat = KategoriUsaha::model()->find('t.id = :ids', array(':ids'=> $model->kategori_id ));
			?>
			<input type="text" name="bidang_blc" readonly="readonly" value="<?php echo $gets_kat->nama ?>">
			<div class="clearfix"></div>
		</div>
	</div>

	<?php // echo $form->textAreaRow($model,'keyword',array('rows'=>6, 'cols'=>50, 'class'=>'span8', 'readonly'=>'readonly')); ?>

	<?php echo $form->textFieldRow($model,'nama_perusahaan',array('class'=>'span5','maxlength'=>225, 'readonly'=>'readonly')); ?>

	<?php echo $form->textFieldRow($model,'telp_perusahaan',array('class'=>'span5','maxlength'=>225, 'readonly'=>'readonly')); ?>

	<?php // echo $form->textFieldRow($model,'image',array('class'=>'span5','maxlength'=>225, 'readonly'=>'readonly')); ?>

	<?php echo $form->textFieldRow($model,'nama_post',array('class'=>'span5','maxlength'=>225, 'readonly'=>'readonly')); ?>

	<?php echo $form->textAreaRow($model,'deskripsi',array('rows'=>6, 'cols'=>50, 'class'=>'span8', 'readonly'=>'readonly')); ?>

	<?php // echo $form->textFieldRow($model,'provinsi',array('class'=>'span5','maxlength'=>225, 'readonly'=>'readonly')); ?>

	<?php // echo $form->textFieldRow($model,'kota',array('class'=>'span5','maxlength'=>225, 'readonly'=>'readonly')); ?>

	<?php echo $form->textFieldRow($model,'harga_total',array('class'=>'span5', 'readonly'=>'readonly')); ?>

	<?php echo $form->textFieldRow($model,'tgl_input',array('class'=>'span5', 'readonly'=>'readonly')); ?>

	<?php echo $form->textFieldRow($model,'tgl_expired',array('class'=>'span5', 'readonly'=>'readonly')); ?>

	<div class="control-group">
		<label class="control-label">Foto</label>
		<div class="controls">
			<div class="npicts" style="max-width: 235px; border: 3px solid #ccc;">
				<img src="<?php echo $model->image ?>" alt="" class="img-responsive">
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<?php // echo $form->textAreaRow($model,'detail_info',array('rows'=>6, 'cols'=>50, 'class'=>'span8', 'readonly'=>'readonly')); ?>
	
	<div class="control-group">
		<label class="control-label">User Post Market</label>
		<div class="controls">
			<?php 
			$gets_user = MeMember::model()->find('t.id = :ids', array(':ids'=> $model->user_id_post ));
			?>
			<input type="text" name="users_blc" readonly="readonly" value="<?php echo $gets_user->first_name ?>">
			<div class="clearfix"></div>
		</div>
	</div>
	
	<?php if ($model->user_id_deal): ?>
	<div class="control-group">
		<label class="control-label">User Market Deal</label>
		<div class="controls">
			<?php 
			$gets_user = MeMember::model()->find('t.id = :ids', array(':ids'=> $model->user_id_deal ));
			?>
			<input type="text" name="users_blc" readonly="readonly" value="<?php echo $gets_user->first_name ?>">
			<div class="clearfix"></div>
		</div>
	</div>
	<?php endif ?>

	<?php // echo $form->textFieldRow($model,'user_id_post',array('class'=>'span5', 'readonly'=>'readonly')); ?>

	<?php // echo $form->textFieldRow($model,'admin_id',array('class'=>'span5', 'readonly'=>'readonly')); ?>

	<?php // echo $form->textFieldRow($model,'user_id_deal',array('class'=>'span5', 'readonly'=>'readonly')); ?>

	<?php // echo $form->textFieldRow($model,'deal',array('class'=>'span5', 'readonly'=>'readonly')); ?>

	<?php // echo $form->textFieldRow($model,'tgl_deal',array('class'=>'span5', 'readonly'=>'readonly')); ?>

	<?php // echo $form->textFieldRow($model,'aktif',array('class'=>'span5', 'readonly'=>'readonly')); ?>
	<?php 
	echo $form->dropDownListRow($model, 'hide_apk', array(
		        		'1'=>'Hide Apps',
		        		'0'=>'Show Apps',
		        	), array() );
	?>
	<!-- restore tombol hide APK -->
	
		<?php if ($model->deal != 0): ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Add' : 'Save',
		)); ?>
		<?php endif ?>

		<?php if ($model->tipe_data == 1 and $model->arsip == 0): ?>
			<?php $this->widget('bootstrap.widgets.TbButton', array(
				'url'=>CHtml::normalizeUrl(array('index', 'tipe'=>'market' )),
				'label'=>'Batal',
			)); ?>
		<?php elseif($model->tipe_data == 2 and $model->arsip == 0): ?>
			<?php $this->widget('bootstrap.widgets.TbButton', array(
				'url'=>CHtml::normalizeUrl(array('index', 'tipe'=>'promo' )),
				'label'=>'Batal',
			)); ?>
		<?php endif ?>

		<?php if ($model->tipe_data == 1 and $model->arsip == 1): ?>
			<?php $this->widget('bootstrap.widgets.TbButton', array(
				'url'=>CHtml::normalizeUrl(array('/admin/market/arsip_view', 'tipe'=>'market' )),
				'label'=>'Batal',
			)); ?>
		<?php elseif($model->tipe_data == 2 and $model->arsip == 1): ?>
			<?php $this->widget('bootstrap.widgets.TbButton', array(
				'url'=>CHtml::normalizeUrl(array('/admin/market/arsip_view', 'tipe'=>'promo' )),
				'label'=>'Batal',
			)); ?>
		<?php endif ?>

</div>
</div>

<div class="widget">
<h4 class="widgettitle">Komentar Data</h4>
<div class="widgetcontent">
	<?php
	$lists_komen = Yii::app()->db->createCommand()
	    ->select('a.*, CONCAT(b.first_name, " ", b.last_name) as nama_lengkap')
	    ->from('tb_komen a')
	    ->leftJoin('me_member b', 'a.user_id_post=b.id')
	    ->where('a.market_id = :mark_id', array( ':mark_id' => $model->id))
	    ->queryAll();
	?>

	<?php foreach ($lists_komen as $key => $value): ?>
		<div class="media">
		<div class="media-body">
		<h4 class="media-heading"><?php echo $value['nama_lengkap'] ?></h4>
		<div class="well" style="font-size: 12px; padding: 10px 15px; margin: 0px;"><p style="margin: 0px;"><?php echo $value['content'] ?></p></div>
		</div>
		</div>
	<?php endforeach ?>	
</div>

<?php if ($model->deal == 1): ?>
<div class="widget">
<h4 class="widgettitle">Detail Informasi Penawar</h4>
<div class="widgetcontent">
	<?php
	$lists_mmdeal = Yii::app()->db->createCommand()
	    ->select('a.*, CONCAT(a.first_name, " ", a.last_name) as nama_lengkap, b.nama as bidang_usaha_nama, c.nama_mitra as nama_mitra')
	    ->from('me_member a')
	    ->leftJoin('tb_kategori_usaha b', 'a.bidang_usaha=b.id')
	    ->leftJoin('tb_mitra c', 'a.mitra_id=c.id')
	    ->where('a.id = :usern_id_deal', array( ':usern_id_deal' => $model->user_id_deal))
	    ->queryRow();
	?>
		<div class="media">
			<div class="media-body">
			<h4 class="media-heading">Nama Lengkap</h4>
			<div class="well ins_cont">
				<p><?php echo $lists_mmdeal['nama_lengkap'] ?></p>
			</div>
			</div>
		</div>
		<div class="media">
			<div class="media-body">
			<h4 class="media-heading">Nama Perusahaan</h4>
			<div class="well ins_cont">
				<p><?php echo $lists_mmdeal['nama_perusahaan'] ?></p>
			</div>
			</div>
		</div>
		<div class="media">
			<div class="media-body">
			<h4 class="media-heading">Bidang Usaha</h4>
			<div class="well ins_cont">
				<p><?php echo $lists_mmdeal['bidang_usaha_nama'] ?></p>
			</div>
			</div>
		</div>
		<div class="media">
			<div class="media-body">
			<h4 class="media-heading">Alamat</h4>
			<div class="well ins_cont">
				<p><?php echo $lists_mmdeal['alamat_perusahaan'] ?></p>
			</div>
			</div>
		</div>
		<div class="media">
			<div class="media-body">
			<h4 class="media-heading">Telp</h4>
			<div class="well ins_cont">
				<p><?php echo $lists_mmdeal['hp'] ?></p>
			</div>
			</div>
		</div>
		<div class="media">
			<div class="media-body">
			<h4 class="media-heading">Komunitas</h4>
			<div class="well ins_cont">
				<p><?php echo $lists_mmdeal['nama_mitra'] ?></p>
			</div>
			</div>
		</div>
		<div class="media">
			<div class="media-body">
			<h4 class="media-heading">Sejarah Singkat</h4>
			<div class="well ins_cont">
				<p><?php echo $lists_mmdeal['sejarah_singkat'] ?></p>
			</div>
			</div>
		</div>
		<div class="media">
			<div class="media-body">
			<h4 class="media-heading">Url Facebook</h4>
			<div class="well ins_cont">
				<p><?php echo $lists_mmdeal['url_facebook'] ?></p>
			</div>
			</div>
		</div>
		<div class="media">
			<div class="media-body">
			<h4 class="media-heading">Url Instagram</h4>
			<div class="well ins_cont">
				<p><?php echo $lists_mmdeal['url_instagram'] ?></p>
			</div>
			</div>
		</div>
		
</div>
<?php endif ?>

<div class="alert">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Warning!</strong> Fields with <span class="required">*</span> are required.
</div>

<?php $this->endWidget(); ?>

<style type="text/css">
	.well.ins_cont{
		font-size: 12px; 
		padding: 10px 15px; 
		margin: 0px;
	}
	.well.ins_cont p{
		margin: 0px;
	}
</style>