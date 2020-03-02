<section class="insidespg-cover py-5">
    <div class="prelative container py-5">
        <div class="row py-5">
            <div class="col-md-30 py-5">
                <div class="insides_intext">
                    <h3 class="mb-3">NEWS & ARTICLES</h3>
                    <div class="blocks_sn_lineyellow prelatife mb-3">
                        <div class="lines-yellow"></div>
                    </div>
                    <p>Know more about BOPP & PET Film
                      <br> and activities related with PT. Trias
                      <br> Sentosa, Tbk.</p>
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
    <?php for($i=0;$i<=3;$i++){?>
      <div class="col-md-30">
        <div class="box-news pt-4">
          <a href="<?php echo CHtml::normalizeUrl(array('/home/news_detail', 'lang'=>Yii::app()->language)); ?>">
            <img class="w-100" src="<?php echo $this->assetBaseurl; ?>news-img_03.jpg" alt="">
          </a>
          <div class="tanggal pt-4">
            <p>19 December 2018</p>
          </div>
          <a href="<?php echo CHtml::normalizeUrl(array('/home/news_detail', 'lang'=>Yii::app()->language)); ?>">
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
<div class="pt-3"></div>


<section class="other-news py-5">
  <div class="prelative container">
    <div class="title">
      <p>Other News & Articles</p>
    </div>
    <div class="row pb-5">
    <?php for($i=0;$i<=11;$i++){?>
      <div class="col-md-20">
        <div class="box-news pt-5">
          <!-- <img src="<?php echo $this->assetBaseurl; ?>news-img_03.jpg" alt=""> -->
          <div class="tanggal">
            <p>19 December 2018</p>
          </div>
          <a href="<?php echo CHtml::normalizeUrl(array('/home/news_detail', 'lang'=>Yii::app()->language)); ?>">
          <div class="title-news">
            <h1>Cash tender offer for Trias shares in the market</h1>
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

