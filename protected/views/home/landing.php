<div>
<a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">
    <img src="<?php echo Yii::app()->baseUrl ?>/asset/images/logo-landing.png" class="img-fluid" alt="">
	<br><br>
    ENTER
</a>
</div>
<style type="text/css">
	img.img-fluid{
		max-width: 600px;
	}
	@media (max-width: 767px) {
		img.img-fluid{
			max-width: 100%;
		}	
	}
	div{
		padding: 0 15px;
	}
</style>