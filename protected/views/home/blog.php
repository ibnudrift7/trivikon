<div class="height-20"></div>
<section class="content-1-col">
	<div class="container">
		<div class="height-10"></div>
		<div class="row">
			<?php foreach ($dataBlog->getData() as $key => $value): ?>
				<?php
				$value->data = unserialize($value->data);
				?>

			<div class="col-md-60">
				<a href="<?php echo CHtml::normalizeUrl(array('/home/blogdetail', 'id'=>$value->id)); ?>"><img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(790,500, '/images/blog/'.$value->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img-fluid"></a>
                <h3><a href="<?php echo CHtml::normalizeUrl(array('/home/blogdetail', 'id'=>$value->id)); ?>"><?php echo $value->description->title ?></a></h3>
                <h4><a href="<?php echo CHtml::normalizeUrl(array('/home/blogdetail', 'id'=>$value->id)); ?>"><?php echo date('d F y',strtotime($value->date_input)) ?> - <?php echo $value->data['writer'] ?> </a></h4>
                <p><?php echo substr(strip_tags($value->description->content), 0, 400) ?>....</p>
				<div class="row">
					<div class="col-md-15">
                <p class="more">
                	<a href="<?php echo CHtml::normalizeUrl(array('/home/blogdetail', 'id'=>$value->id)); ?>">Baca Selengkapnya &nbsp;&nbsp; <i class="fas fa-long-arrow-alt-right"></i></a>
                </p>
					</div>
					<div class="col-md-45">
		                <p class="more">
		                	<span class="hashtag"><?php echo $value->data['tag'] ?></span>
		                </p>
					</div>
				</div>
                <div class="height-50"></div>
			</div>
			<?php endforeach ?>
		</div>
	</div>
</section>
