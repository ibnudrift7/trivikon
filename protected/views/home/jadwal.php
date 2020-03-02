<div class="height-20"></div>
<section class="content-1-col">
	<div class="container content-text text-center container_date">
		<?php if ($this->setting['jadwal_url'] != ''): ?>
		<a href="<?php echo $this->setting['jadwal_url'] ?>" target="_blank">
		<?php endif ?>
			<img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1150,10000, '/images/static/'.$this->setting['jadwal_image'] , array('method' => 'resize', 'quality' => '90')) ?>" alt="" class="img-fluid">
		<?php if ($this->setting['jadwal_url'] != ''): ?>
		</a>
		<?php endif ?>
	</div>
</section>
<div class="height-20"></div>