<section class="middle-content inside-page page-solutions">
	<div class="tops-content illustration-featured prelatife" style="background-image: url('<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1900,550, '/images/static/'.$this->setting['solution_hero_image'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>')">
		<div class="prelatife container">
			<div class="texts">
				<h4><?php echo $this->setting['solution_hero_title'] ?></h4>
				<h2><?php echo $this->setting['solution_hero_subtitle'] ?></h2>
				<?php echo $this->setting['solution_hero_content'] ?>

				<div class="clear"></div>
			</div>
		</div>
	</div>

	<div class="inners-content middle">
		<div class="prelatife container">
			<div class="sub-title-default">
				<h2><?php echo $this->setting['solution_title'] ?></h2>
			</div>

			<div class="lists-default-solutions-datas">
				<div class="row default">
					<?php foreach ($dataBrand as $key => $value): ?>
					<div class="col-md-4 col-sm-6">
						<div class="items">
							<div class="picture"><img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(365,300, '/images/brand/'.$value->image , array('method' => 'resize', 'quality' => '90')) ?>" alt="" class="img-responsive center-block"></div>
							<div class="info">
								<h5 class="title"><?php echo $value->description->title ?></h5>
								<p><?php echo $value->description->content ?></p>
								<a href="<?php echo CHtml::normalizeUrl(array('/home/products', 'solution'=>$value->id)); ?>" class="btn btn-default btns-def-yellow">Lebih Lanjut</a>
								<div class="clear clearfix"></div>
							</div>
						</div>
					</div>
					<?php endforeach ?>
				</div>
			</div>

			<div class="clear"></div>
		</div>
		
		<div class="clear clearfix"></div>
	</div>
</section>