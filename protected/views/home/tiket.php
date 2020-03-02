<div class="height-20"></div>
<section class="content-1-col">
	<div class="container content-text">
		<a href="<?php echo $this->setting['tiket_url'] ?>" target="_blank">
			<img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1150,10000, '/images/static/'.$this->setting['tiket_image'] , array('method' => 'resize', 'quality' => '90')) ?>" alt="" class="img-fluid">
		</a>
	</div>
</section>