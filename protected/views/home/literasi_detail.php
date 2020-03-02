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
<section class="content-detail-2-col">
	<div class="container">
		<div class="row">
			<div class="col-md-25">
				<h2><?php echo $category->description->name ?></h2>
				<h1><?php echo $detail->description->title ?></h1>
				<div class="line-grey margin-top-10 margin-bottom-30"></div>
				<div class="row">
					<?php foreach ($dataProfile as $key => $value): ?>
					<div class="col-md-20 col-20 list-profile">
						<a href="<?php echo CHtml::normalizeUrl(array('/home/literasiprofile', 'id'=>$value->id)); ?>"><img class="rounded-circle img-fluid" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(115,115, '/images/blog/'.$value->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt=""></a>
						<div class="height-10"></div>
						<h3><?php echo $value->description->title ?></h3>
					</div>
					<?php endforeach ?>
				</div>
				<div class="line-grey margin-top-20 margin-bottom-15"></div>
				<div class="row">
					<div class="col-md-30">
						<h4><?php echo $detail->data['tanggal'] ?></h4>
					</div>
					<div class="col-md-30 text-right">
						<h4><?php echo $detail->data['jam'] ?></h4>
					</div>
				</div>
				<div class="line-grey margin-top-12 margin-bottom-20"></div>
			</div>
			<div class="col-md-5">
				
			</div>
			<div class="col-md-30">
				<div class="content-text">
					<div class="height-50"></div>
					<div class="height-50"></div>
					<div class="height-50"></div>
					<?php echo $detail->description->content ?>
				</div>
			</div>
		</div>
	</div>
</section>
