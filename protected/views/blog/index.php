<section class="insidespg-cover py-5" style="background-image: url(<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1920,804, '/images/static/'. $this->setting['artikel_hero_image'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>);">
    <div class="prelative container py-5">
        <div class="row py-5">
            <div class="col-md-30 py-5">
                <div class="insides_intext">
                    <h3 class="mb-3"><?php echo $this->setting['artikel_hero_title'] ?></h3>
                    <div class="blocks_sn_lineyellow prelatife mb-3">
                        <div class="lines-yellow"></div>
                    </div>
                    <?php echo $this->setting['artikel_hero_content'] ?>
                    <div class="clear"></div>
                </div>

            </div>
            <div class="col-md-30"></div>
        </div>
    </div>
</section>

<section class="news">
  <div class="prelative container pt-5">
    <div class="title pt-3">
      <p class="pt-5">Latest News & Articles</p>
    </div>

    <div class="row ">
    <?php foreach ($dataBlog->getData() as $key => $value){ ?>
      <?php 
      if ($key > 3) {
        continue;
      }
      ?>
      <div class="col-md-30">
        <div class="box-news pt-4">
          <a href="<?php echo CHtml::normalizeUrl(array('/blog/detail', 'id'=>$value->id, 'lang'=>Yii::app()->language)); ?>">
            <img class="w-100" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(571,373, '/images/blog/'. $value->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="">
          </a>
          <div class="tanggal pt-4">
            <p><?php echo date('d F Y', strtotime($value->date_input)) ?></p>
          </div>
          <a href="<?php echo CHtml::normalizeUrl(array('/blog/detail', 'id'=>$value->id, 'lang'=>Yii::app()->language)); ?>">
            <div class="title-news py-2">
              <h1><?php echo $value->description->title ?></h1>
            </div>
          </a>
          <div class="content">
            <p><?php echo strip_tags(substr($value->description->content,0, 175)).'...' ?></p>
          </div>
        </div>
      </div>
    <?php } ?>
    </div>

  </div>
</section>
<div class="pt-5"></div>
<div class="pt-3"></div>


<section class="other-news py-5">
  <div class="prelative container">
    <div class="title">
      <p>Other News & Articles</p>
    </div>
    <div class="row pb-5">
    <?php foreach ($dataBlog->getData() as $key => $value){ ?>
      <?php 
      if ($key < 3) {
        continue;
      }
      ?>
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
    <div class="row">
      <div class="col-md-60">
        <div class="text-center bgs_paginations">
              <?php $this->widget('CLinkPager', array(
                  'pages' => $dataBlog->getPagination(),
                  'header' => '',
              )) ?>
        </div>
      </div>
    </div>
  </div>
</section>







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
  <div class="prelatife container">
    <div class="clear height-50"></div><div class="height-5"></div>
    <div class="content-text text-center">
      
      <div class="outers_listing_newshome defaults_t">
            <div class="row default">
                <?php foreach ($dataBlog->getData() as $key => $value): ?>
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
        <div class="clear height-10"></div>
      <div class="clear"></div>
    </div>
    <!-- end content berita artikel -->
    <div class="text-center bgs_paginations">
          <?php $this->widget('CLinkPager', array(
              'pages' => $dataBlog->getPagination(),
              'header' => '',
          )) ?>
    </div>
    <div class="clear height-20"></div>

    <div class="clear"></div>
  </div>
</section>

*/ ?>