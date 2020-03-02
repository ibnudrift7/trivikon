<section class="block_subpage_outer">

  <div class="default_sc blocks_top_about quality-1 back-white" style="background-image: url('<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1920,800, '/images/static/'.$this->setting['warranty_hero_image'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>')">
    <div class="prelatife container">
      <div class="insides content-text">
        <div class="row">
          <div class="col-md-6">
            <div class="contents">
              <h3 class="small-title"><?php echo $this->setting['warranty_hero_title'] ?></h3>
              <h2><?php echo $this->setting['warranty_hero_subtitle'] ?></h2>
              <?php echo $this->setting['warranty_hero_content'] ?>
            </div>
          </div>
          <div class="col-md-6">
            
          </div>
        </div>

        <div class="clear"></div>
      </div>
    </div>
  </div>

  <!-- Middle warranty -->
  <div class="default_sc blocks-middles-quality">
    <div class="prelatife container">
      <div class="insides content-text">
        <div class="tops tengah">
          <h3 class="small-title"><?php echo $this->setting['warranty_title'] ?></h3>
          <h2><?php echo $this->setting['warranty_subtitle'] ?></h2>
          <?php echo $this->setting['warranty_content'] ?>
          <div class="clear"></div>
        </div>

        <div class="middles">
          <h3 class="small-title">Our Cross-functional Quality Stages</h3>
          <div class="clear"></div>
          <div class="lists-cross-quality_stages">
            <div class="row default">
              <?php for ($i=1; $i < 4 ; $i++) { ?>
              <div class="col-md-4 col-sm-4">
                <div class="items">
                  <div class="pict"><img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(374,294, '/images/static/'.$this->setting['warranty_image_'.$i] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img-responsive center-block"></div>
                  <div class="info">
                    <h5><?php echo $this->setting['warranty_title_'.$i] ?></h5>
                    <?php echo $this->setting['warranty_content_'.$i] ?>
                  </div>
                </div>
              </div>
              <?php } ?>

            </div>
          </div>
          <div class="clear"></div>
        </div>       


        <div class="clear"></div>
      </div>
    </div>
  </div>
  <!-- End Middle warranty -->

  <?php // echo $this->renderPartial('//layouts/_block_bottom_form_info', array()); ?>
</section>
