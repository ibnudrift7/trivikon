<section class="insidespg-cover py-5"  style="background-image: url(<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1920,804, '/images/static/'. $this->setting['products_hero_image'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>);">
    <div class="prelative container py-5">
        <div class="row py-5">
            <div class="col-md-30 py-5">
                <div class="insides_intext">
                    <h3 class="mb-3"><?php echo $this->setting['products_hero_title'] ?></h3>
                    <div class="blocks_sn_lineyellow prelatife mb-3">
                        <div class="lines-yellow"></div>
                    </div>
                    <?php echo $this->setting['products_hero_content'] ?>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="col-md-30"></div>
        </div>
    </div>
</section>

<div class="pb-5 d-none d-sm-block"></div>
<div class="pb-5 d-none d-sm-block"></div>
<div class="pb-5"></div>

<section class="productind-sec-1">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-60">
        <div class="title-section">
          <p><span><img src="<?php echo $this->assetBaseurl; ?>process-kecil.png" alt=""></span> &nbsp;PRODUCT APPLICATIONS OF pt trias sentosa Tbk</p>
        </div>
      </div>
      <!-- <div class="col-md-60 pt-3">
        <div class="content pt-2">
          <p>PT Trias Sentosa Tbk is managed by a team of dedicated individuals who possess strong business acumen and technical expertise. Having an extensive experience in the flexible packaging film industry, the management team is responsible for leading the Company to better serve customers around the world.</p>
        </div>
      </div> -->
    </div>
    <div class="row pt-4">

        <?php foreach ($categories as $key => $value): ?>
        <div class="col-md-20 pt-3">
            <div class="box-inner-prd">
                <?php 
                $an_1 = unserialize($value->product_list);
                $str1 = '';
                foreach ($an_1 as $k_val => $n_val) {
                    $str1 .= $n_val.'||';
                }
                $n_str1 = substr($str1, 0, -2);
                ?>
                <a href="<?php echo CHtml::normalizeUrl(array('/product/view', 'type'=>'application', 'category'=>$n_str1, 'name'=>strtolower($value->description->title), 'lang'=>Yii::app()->language)); ?>">
                <img class="w-100 img img-fluid" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(265,186, '/images/brand/'. $value->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="<?php echo $value->description->title ?>">
                <div class="title-prd py-2 pt-3 pb-3">
                    <h1><?php echo ucwords($value->description->title) ?></h1>
                </div>
                </a>
            </div>
        </div>
        <?php endforeach ?>

    </div>
  </div>
</section>

<div class="pb-5 d-none d-sm-block"></div>
<div class="pb-5 d-none d-sm-block"></div>
<div class="pb-5"></div>