<?php /*
<div class="container">
    <div class="line-grey"></div>
</div>
<div class="height-20"></div>
<section class="headline">
    <div class="container">
        <div class="row">
            <div class="col-md-43">
                <img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(800,540, '/images/static/'.$this->setting['musik_hero_image'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-17">

                <p class="date margin-0"><?php echo $this->setting['musik_hero_tanggal'] ?></p>
                <p class="lokasi margin-0"><?php echo $this->setting['musik_hero_lokasi'] ?></p>

                <div class="short-line-white my-3"></div>

                <h3><?php echo $this->setting['musik_hero_title'] ?></h3>
                <?php echo $this->setting['musik_hero_content'] ?>

            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="line-grey"></div>
</div>
*/ ?>
<section class="content-3-col">
	<div class="container">
		<div class="row">
			<?php foreach ($dataBlog->getData() as $key => $value): ?>
				
			<div class="col-md-20">
				<a href="<?php echo CHtml::normalizeUrl(array('/home/musikdetail', 'id'=>$value->id)); ?>"><img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(385,250, '/images/blog/'.$value->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img-fluid"></a>
                <h3><a href="<?php echo CHtml::normalizeUrl(array('/home/musikdetail', 'id'=>$value->id)); ?>"><?php echo $value->description->title ?></a></h3>
                <p class="more"><a href="<?php echo CHtml::normalizeUrl(array('/home/musikdetail', 'id'=>$value->id)); ?>">View Profile &nbsp;&nbsp; <i class="fas fa-long-arrow-alt-right"></i></a></p>
                <div class="height-20"></div>
			</div>
			<?php endforeach ?>
		</div>
		<div class="line-grey"></div>
	</div>
</section>
<div class="height-30"></div>
<section class="countdown">
	<div class="container">
		<h3>COUNTDOWN TO FOLK MUSIC FESTIVAL 2018</h3>
		<div class="height-20"></div>
		<div class="clock-builder-output"></div>
		<style text="text/css">
			body .flip-clock-wrapper ul li a div div.inn, body .flip-clock-small-wrapper ul li a div div.inn { color: #CCCCCC; background-color: #333333; } body .flip-clock-dot, body .flip-clock-small-wrapper .flip-clock-dot { background: #323434; } body .flip-clock-wrapper .flip-clock-meridium a, body .flip-clock-small-wrapper .flip-clock-meridium a { color: #323434; }
			.flip-clock-divider .flip-clock-label{
				color: #fff;
				font-family: 'Verdana', sans-serif;
				font-size: 20px;
			}
		</style>
		<script type="text/javascript">
		$(function(){
			FlipClock.Lang.Custom = { days:'Days', hours:'Hours', minutes:'Minutes', seconds:'Seconds' };
			var opts = {
				clockFace: 'DailyCounter',
				countdown: true,
				language: 'Custom'
			};  
			var countdown = 1533229201 - ((new Date().getTime())/1000); // from: 05/17/2018 02:32 pm +0700
			countdown = Math.max(1, countdown);
			$('.clock-builder-output').FlipClock(countdown, opts);
		});
		</script>
		<!-- <img src="<?php echo $this->assetBaseurl; ?>countdown.jpg" alt="" class="img-fluid"> -->
		<div class="height-10"></div>
	</div>
</section>