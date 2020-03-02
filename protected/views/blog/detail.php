<section class="breadcumb">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-30 col-30">
        <div class="investor">
            <p>OUR NEWS</p>
        </div>
      </div>
      <div class="col-md-30 col-30">
        <div class="back float-right">
          <a href="javascript:window.history.go(-1);">
              <p><span><img src="<?php echo $this->assetBaseurl; ?>arrow-back.png" alt=""></span>back</p>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="pt-5"></div>
<div class="pt-5 d-none d-sm-block"></div>
<div class="pt-3 d-none d-sm-block"></div>

<section class="breadcumb2">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-50">
        <div class="breadcumb-title">
            <p><span><img src="<?php echo $this->assetBaseurl; ?>process-kecil.png" alt=""></span> &nbsp;<a href="#">Home</a><span>&nbsp;&nbsp;&nbsp;<img src="<?php echo $this->assetBaseurl; ?>arrow-invest.png" alt=""></span>&nbsp;&nbsp;&nbsp;<a href="#"><?php echo $detail->description->title ?></a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="prd-sec-1 pt-5">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-60">
        <div class="title py-3">
          <h2><?php echo $detail->description->title ?></h2>
        </div>
      </div>
      <div class="col-md-60">
        <div class="image-prd pt-3">
          <img class="w-100 img img-fluid" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1024,669, '/images/blog/'. $detail->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="">
        </div>
        <div class="content pt-4 content-text">
          <?php echo $detail->description->content ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="news-detail-sec-2">
  <div class="prelative container">
    <div class="title pt-3">
      <p class="pt-5">Latest News & Articles</p>
    </div>
    <div class="row ">

   <?php foreach ($dataBlog->getData() as $key => $value){ ?>
      <div class="col-md-20">
        <div class="box-news pt-5">
          <div class="tanggal">
            <p><?php echo date('d F Y', strtotime($value->date_input)) ?></p>
          </div>
          <a href="<?php echo CHtml::normalizeUrl(array('/blog/detail', 'id'=>$value->id, 'lang'=>Yii::app()->language)); ?>">
          <div class="title-news">
            <h3><?php echo $value->description->title ?></h3>
          </div>
            
          </a>
          <div class="content">
            <p><?php echo strip_tags(substr($value->description->content,0, 120)).'...' ?></p>
          </div>
        </div>
      </div>
    <?php } ?>

    </div>
  </div>
</section>

<div class="pt-5"></div>
<div class="pt-5 d-none d-sm-block"></div>
<div class="pt-3 d-none d-sm-block"></div>



<?php
/*
<section class="default_sc top_inside_pg_default">
  <div class="out_table">
    <div class="in_table">
      <div class="prelatife container">
        <h1 class="sub_titlepage">Berita & Artikel</h1>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</section>
<section class="default_sc insides_middleDefaultpages back-white">
  <div class="tops_filters_whitProduct_top">
    <div class="prelatife container">
      <div class="row default">
        <div class="col-md-12">
          <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li><a href="<?php echo CHtml::normalizeUrl(array('/blog/index')); ?>">Berita & Artikel</a></li>
              <li class="active"><?php echo $detail->description->title ?></li>
            </ol>
            <div class="clear"></div>
          </div>
          <!-- end pagination products -->
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <!-- end filter product top -->

  <div class="prelatife container">
    <div class="clear height-35"></div>
    <div class="height-5"></div>
    <div class="content-text text-center">
        
        <div class="middles text-left details_cont_news">
            <div class="prelatife blocks_title_pagearticle">
                <h1 class="title-pages title_article blacks"><?php echo $detail->description->title ?></h1>
            </div>
            <div class="clear height-5"></div>
            <span class="dates_article"><?php echo date('d F Y', strtotime($detail->date_input)) ?></span>
            <div class="clear height-25"></div>
            <div class="details_news">
                <div class="pict_full picture">
                  <img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(980,450, '/images/blog/'.$detail->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img-responsive center-block">
                </div>

                <div class="clear height-40 hidden-xs"></div>
                <div class="clear height-25 visible-xs"></div>

                <?php echo $detail->description->content ?>
              <?php 
              $baseUrl = Yii::app()->request->hostInfo . Yii::app()->request->baseUrl. $this->createUrl($this->route, $_GET);
              ?>

                <div class="clear height-10"></div>
                <div class="shares-text text-left p_shares_article">
                    <span class="inline-t">SHARE</span>&nbsp; / &nbsp;<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $baseUrl ?>">FACEBOOK</a>&nbsp; /
                    &nbsp;<a target="_blank" href="https://plus.google.com/share?url=<?php echo $baseUrl ?>">GOOGLE PLUS</a>&nbsp; /
                    &nbsp;<a target="_blank" href="https://twitter.com/home?status=<?php echo $baseUrl ?>">TWITTER</a>
                </div>
                
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <!-- end blog detail -->
        <div class="clear height-35"></div>

        <div class="blocks_cont_others_articles">
          <div class="tops">
            <h5>Artikel Lainnya</h5>
            <div class="clear"></div>
          </div>
          <div class="clear"></div>
          <div class="outers_listing_newshome defaults_t">
<?php
$criteria = new CDbCriteria;
$criteria->with = array('description');
$criteria->addCondition('active = "1"');
$criteria->addCondition('description.language_id = :language_id');
$criteria->params[':language_id'] = $this->languageID;
$criteria->order = 'date_input DESC';
$criteria->limit = 3;

$dataBlog = Blog::model()->findAll($criteria);
?>
            <div class="row default">
                <?php foreach ($dataBlog as $key => $value): ?>
                <div class="col-md-4 col-sm-4">
                    <div class="items">
                        <div class="pict"><a href="<?php echo CHtml::normalizeUrl(array('/blog/detail', 'id'=>$value->id)); ?>"><img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(313,204, '/images/blog/'.$value->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img-responsive"></a></div>
                        <div class="desc">
                            <div class="titles"><a href="<?php echo CHtml::normalizeUrl(array('/blog/detail', 'id'=>$value->id)); ?>"><?php echo $value->description->title ?></a></div>
                            <div class="clear"></div>
                            <span class="dates"><?php echo date('d F Y', strtotime($value->date_input)) ?></span>
                            <div class="clear"></div>
                            <a href="<?php echo CHtml::normalizeUrl(array('/blog/detail', 'id'=>$value->id)); ?>" class="btn btn-default btns_news_default">BACA</a>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
            <div class="clear"></div>
        </div>
        <!-- end listing news -->
        </div>

        <div class="clear height-30"></div>

      <div class="clear"></div>
    </div>
    <!-- end content berita artikel -->

    <div class="clear"></div>
  </div>
</section>
*/ ?>

