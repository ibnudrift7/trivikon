<section class="cover-profil" style="background-image: url('<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1920,566, '/images/static/'. $this->setting['artikel_hero_image'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>');">
    <img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1920,566, '/images/static/'. $this->setting['artikel_hero_image'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img img-fluid d-block d-sm-none">
    <div class="prelative container">
			<div class="box">
				<h1><?php echo $this->setting['artikel_hero_title'] ?></h1>
				<?php echo $this->setting['artikel_hero_content'] ?>
			</div>
    </div>
</section>

<section class="sec-breadcrumb">
	<div class="prelative container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page"><?php echo Tt::t('front', 'ARTIKEL & BERITA'); ?></li>
			</ol>
			<div class="clear clearfix"></div>
		</nav>
	</div>
</section>

<section class="artikel-sec-2">
    <div class="prelatife container">
        <span class="leftsn_ftn defaults"><?php echo $this->setting['artikel1_intro_lefttitle'] ?></span>
        <div class="prelatife container2 d-block mx-auto">
                <div class="artikel-content-big">
                    <div class="title">
                        <h1><?php echo $this->setting['artikel1_title'] ?></h1>
                    </div>
                    <div class="big-template">
                        <?php foreach ($dataBlog->getData() as $key => $value){ ?>
                        <?php if ($key <= 0): ?>
                        <div class="row">
                            <div class="col-md-30">
                                <img class="img img-fluid w-100" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(535,322, '/images/blog/'.$value->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="">
                            </div>
                            <div class="col-md-30">
                                <div class="tanggal">
                                    <p><?php echo date('F d - Y', strtotime($value->date_input)) ?></p>
                                </div>
                                <div class="judul">
                                    <a href="<?php echo CHtml::normalizeUrl(array('/home/artikel_detail', 'id'=>$value->id, 'lang'=>Yii::app()->language)); ?>"><h1><?php echo $value->description->title ?></h1></a>
                                </div>
                                <div class="content">
                                    <p><?php echo substr(strip_tags($value->description->content), 0, 100); ?></p>
                                </div>
                                <div class="lebih">
                                    <a href="<?php echo CHtml::normalizeUrl(array('/home/artikel_detail', 'id'=>$value->id, 'lang'=>Yii::app()->language)); ?>">
                                        <p><?php echo Tt::t('front', 'Lebih Lanjut'); ?><span><img src="<?php echo $this->assetBaseurl; ?>arrow.png" alt=""></span></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php endif ?>
                        <?php } ?>  
                    </div>
                </div>
                <div class="artikel-content-small">
                    <div class="row">
                        <?php foreach ($dataBlog->getData() as $key => $value){ ?>
                            <?php if ($key > 0): ?>
                            <div class="col-lg-20 col-xl-20 col-sm-30">
                                <div class="tanggal-small">
                                    <p><?php echo date('F d - Y', strtotime($value->date_input)) ?></p>
                                </div>
                                <div class="gambar-kecil">
                                    <img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(354,212, '/images/blog/'.$value->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img img-fluid w-100">
                                </div>
                                <div class="judul-small">
                                    <a href="<?php echo CHtml::normalizeUrl(array('/home/artikel_detail', 'id'=>$value->id, 'lang'=>Yii::app()->language)); ?>"><h1><?php echo $value->description->title ?></h1></a>
                                </div>
                                <div class="content-small">
                                    <p><?php echo substr(strip_tags($value->description->content), 0, 100); ?></p>
                                </div>
                                <div class="lebih-small">
                                    <a href="<?php echo CHtml::normalizeUrl(array('/home/artikel_detail', 'id'=>$value->id, 'lang'=>Yii::app()->language)); ?>">
                                        <p><?php echo Tt::t('front', 'Lebih Lanjut'); ?><span><img src="<?php echo $this->assetBaseurl; ?>arrow.png" alt=""></span></p>
                                    </a>
                                </div>
                                <div class="clear py-3"></div>
                            </div>
                            <?php endif ?>
                        <?php } ?>  
                    </div>
                </div>
                <div class="text-center bgs_paginations">
                      <?php $this->widget('CLinkPager', array(
                          'pages' => $dataBlog->getPagination(),
                          'header' => '',
                      )) ?>
                </div>
        </div>
    </div>
</section>

<?php echo $this->renderPartial('//layouts/_bottom_ft_form', array()); ?>
