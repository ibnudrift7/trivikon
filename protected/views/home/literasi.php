<div class="height-20"></div>
<?php foreach ($categories as $key => $value): ?>
<?php
$criteria = new CDbCriteria;
$criteria->with = array('description');
$criteria->addCondition('active = "1"');
$criteria->addCondition('type = "literasi"');
$criteria->addCondition('t.topik_id = :topik_id');
$criteria->params[':topik_id'] = $value->id;
$criteria->addCondition('description.language_id = :language_id');
$criteria->params[':language_id'] = $this->languageID;
$criteria->order = 'date_input DESC';
$dataBlog = Blog::model()->findAll($criteria);
?>
<?php if (count($dataBlog) > 0): ?>
<section class="content-3-col">
	<div class="container">
		<h2><?php echo $value->description->name ?></h2>
		<div class="row">
			<?php foreach ($dataBlog as $key => $v): ?>
			<div class="col-md-20">
				<a href="<?php echo CHtml::normalizeUrl(array('/home/literasidetail', 'id'=>$v->id)); ?>"><img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(385,250, '/images/blog/'.$v->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img-fluid"></a>
                <h3><a href="<?php echo CHtml::normalizeUrl(array('/home/literasidetail', 'id'=>$v->id)); ?>"><?php echo $v->description->title ?></a></h3>
                <div class="height-20"></div>
			</div>
			<?php endforeach ?>
		</div>
		<?php if ( ! (count($categories) - 1 == $key)): ?>
		<div class="line-grey"></div>
		<?php endif ?>
	</div>
</section>
<div class="height-30"></div>
<?php endif ?>
<?php endforeach ?>
