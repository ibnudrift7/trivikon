<?php
$detail->data = unserialize($detail->data);
?>
<div class="hero-image" style="background-image: url('<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1600,600, '/images/blog/'.$detail->image2 , array('method' => 'adaptiveResize', 'quality' => '90')) ?>'); ">
	<?php echo $this->renderPartial('//layouts/_header', array()); ?>
</div>
<div class="hero-image-fullrespons d-block d-sm-none">
	<img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1600,600, '/images/blog/'.$detail->image2 , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img-fluid">
</div>
<div class="height-50"></div>
<section class="content-1-col">
	<div class="container content-text2">
		<div class="row">
			<div class="col-md-60">
            <h3><?php echo $detail->description->title ?></h3>
            <h4><?php echo date('d F y',strtotime($detail->date_input)) ?> - <?php echo $detail->data['writer'] ?> </h4>
            <?php echo $detail->description->content ?>
            <div class="height-30"></div>
            <p class="more">
            	<span class="hashtag"><?php echo $detail->data['tag'] ?></span>
            </p>
			</div>
		</div>
	</div>
</section>