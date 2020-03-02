<div class="height-20"></div>
<section class="content-1-col">
	<div class="container content-text2">
		<div class="row">
			<div class="col-md-30">
				<img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(650,400, '/images/blog/'.$detail->image2 , array('method' => 'resize', 'quality' => '90')) ?>" alt="" class="img-fluid">
			</div>
			<div class="col-md-30">
			<h3><?php echo $detail->description->title ?></h3>
			<?php echo $detail->description->content ?>
			</div>
		</div>
	</div>
</section>