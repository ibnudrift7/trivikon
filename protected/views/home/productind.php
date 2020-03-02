<section class="insidespg-cover py-5">
    <div class="prelative container py-5">
        <div class="row py-5">
            <div class="col-md-30 py-5">
                <div class="insides_intext">
                    <h3 class="mb-3">OUR PRODUCTS</h3>
                    <div class="blocks_sn_lineyellow prelatife mb-3">
                        <div class="lines-yellow"></div>
                    </div>
                    <p>Committed in delivering promises
                        of quality and excellent service for
                        a long run relationship,  since 1979. <br>
                        <b>We are Trias Sentosa..</b></p>
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
          <p><span><img src="<?php echo $this->assetBaseurl; ?>process-kecil.png" alt=""></span> &nbsp;PRODUCT by CATEGORY OF pt trias sentosa Tbk</p>
        </div>
      </div>
      <div class="col-md-60 pt-3">
        <div class="content pt-2">
          <p>PT Trias Sentosa Tbk is managed by a team of dedicated individuals who possess strong business acumen and technical expertise. Having an extensive experience in the flexible packaging film industry, the management team is responsible for leading the Company to better serve customers around the world.</p>
        </div>
      </div>
    </div>
    <div class="row pt-4">
        <?php for($i=0;$i<6;$i++){?>
        <div class="col-md-20 pt-3">
            <div class="box-inner-prd">
                <a href="<?php echo CHtml::normalizeUrl(array('/home/productind_detail', 'lang'=>Yii::app()->language)); ?>">
                <img class="w-100" src="<?php echo $this->assetBaseurl; ?>products--_03.jpg" alt="">
                <div class="title-prd py-2 pt-3 pb-3">
                    <h1>Bottled Beverages</h1>
                </div>
                </a>
            </div>
        </div>
        <?php } ?>
    </div>
  </div>
</section>

<div class="pb-5 d-none d-sm-block"></div>
<div class="pb-5 d-none d-sm-block"></div>
<div class="pb-5"></div>