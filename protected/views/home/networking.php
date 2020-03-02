<div class="height-20"></div>
<section class="content-5-col">
	<div class="container width-690">
		<div class="row">
			<?php foreach ($dataNetworking as $key => $value): ?>
			<div class="col-md-12">
				<a href="<?php echo $value->url ?>" target="_blank">
					<img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(100,100, '/images/networking/'.$value->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img-fluid">
				</a>
				<div class="height-30"></div>
			</div>
			<?php endforeach ?>
		</div>
	</div>
</section>
<div class="height-30"></div>
