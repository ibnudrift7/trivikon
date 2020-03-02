<?php
$detail->data = unserialize($detail->data);
?>
<div class="hero-image" style="background-image: url('<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1600,600, '/images/blog/'.$detail->image2 , array('method' => 'adaptiveResize', 'quality' => '90')) ?>');">
	<?php echo $this->renderPartial('//layouts/_header', array()); ?>
</div>
<div class="hero-image-fullrespons d-block d-sm-none">
	<img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1600,600, '/images/blog/'.$detail->image2 , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img-fluid">
</div>
<div class="height-50"></div>
<div class="height-20"></div>
<section class="content-detail-2-col">
	<div class="container">
		<div class="row">
			<div class="col-md-20">
				<h1><?php echo $detail->description->title ?></h1>
				<div class="line-grey margin-top-10 margin-bottom-20"></div>
				<?php if ($detail->data['url_facebook'] != ''): ?>
				<a href="<?php echo $detail->data['url_facebook'] ?>" target="_blank"><img src="<?php echo Yii::app()->baseUrl ?>/asset/images/logo-facebook-2.png" alt=""></a>
				<?php endif ?>
				<?php if ($detail->data['url_instagram'] != ''): ?>
				<a href="<?php echo $detail->data['url_instagram'] ?>" target="_blank"><img src="<?php echo Yii::app()->baseUrl ?>/asset/images/logo-instagram-2.png" alt=""></a>
				<?php endif ?>
				<?php if ($detail->data['url_soundcloud'] != ''): ?>
				<a href="<?php echo $detail->data['url_soundcloud'] ?>" target="_blank"><img src="<?php echo Yii::app()->baseUrl ?>/asset/images/logo-soundcloud-2.png" alt=""></a>
				<?php endif ?>
				<?php if ($detail->data['url_youtube'] != ''): ?>
				<a href="<?php echo $detail->data['url_youtube'] ?>" target="_blank"><img src="<?php echo Yii::app()->baseUrl ?>/asset/images/logo-youtube-2.png" alt=""></a>
				<?php endif ?>
			</div>
			<div class="col-md-10">
				
			</div>
			<div class="col-md-30">
				<div class="content-text">
					<?php echo $detail->description->content ?>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="height-50"></div>
<div class="height-50"></div>
<div class="height-50"></div>
<div class="height-50"></div>
