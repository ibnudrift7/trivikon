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
          <a href="#">
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
      <div class="col-md-30">
        <div class="breadcumb-title">
            <p><span><img src="<?php echo $this->assetBaseurl; ?>process-kecil.png" alt=""></span> &nbsp;<a href="#">Barrier Films</a><span>&nbsp;&nbsp;&nbsp;<img src="<?php echo $this->assetBaseurl; ?>arrow-invest.png" alt=""></span>&nbsp;&nbsp;&nbsp;<a href="#">Barrier Sealant</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="prd-sec-1">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-60">
        <div class="title py-3">
          <h2>Barrier Sealant</h2>
        </div>
      </div>
      <div class="col-md-60">
        <div class="image-prd pt-3">
          <img class="w-100" src="<?php echo $this->assetBaseurl; ?>prd_detail_03.jpg" alt="">
        </div>
        <div class="content pt-3">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
    <?php for($i=1;$i<=3;$i++){?>
      <div class="col-md-20">
        <div class="box-news pt-1">
          <div class="tanggal pt-1">
            <p>19 December 2018</p>
          </div>
          <a href="<?php echo CHtml::normalizeUrl(array('/home/news', 'lang'=>Yii::app()->language)); ?>">
            <img class="w-100" src="<?php echo $this->assetBaseurl; ?>news-img_03.jpg" alt="">
          </a>
          <a href="<?php echo CHtml::normalizeUrl(array('/home/news', 'lang'=>Yii::app()->language)); ?>">
            <div class="title-news py-2">
            <h1>Trias group to give back to the community as part of 2018 CSR</h1>
          </div>  
          </a>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque non gravida dolor. Fusce gravida, risus vel sodales posuere, mi metus tincidunt nisi, vitae finibus metus urna viverra turpis. </p>
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