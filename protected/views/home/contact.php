<section class="insidespg-cover py-5 pg-contacts" style="background-image: url(<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1920,804, '/images/static/'. $this->setting['contact_hero_image'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>);">
    <div class="prelative container py-5">
        <div class="row py-5">
            <div class="col-md-30 py-5">
                <div class="insides_intext">
                    <h3 class="mb-3"><?php echo $this->setting['contact_hero_title'] ?></h3>
                    <div class="blocks_sn_lineyellow prelatife mb-3">
                        <div class="lines-yellow"></div>
                    </div>
                   <?php echo $this->setting['contact_hero_content'] ?>
                    <div class="clear"></div>
                </div>

            </div>
            <div class="col-md-30"></div>
        </div>
    </div>
</section>

<section class="outers-contact-block-1 py-5 pb-0">
  <div class="prelatife container pt-5 mt-5 pb-4">
    <div class="inners-default-content block-contact">
      <div class="sub-title mb-5 pb-4"><img src="<?php echo $this->assetBaseurl ?>process-kecil.png" alt="" class="img-fluid d-inline-block pr-3">INQUIRY FORM FOR PT TRIAS SENTOSA Tbk</div>
      <div class="row content-text">
        <div class="col-md-40">
          <h5 class="mb-2 pb-1"><?php echo $this->setting['contact1_title'] ?></h5>
          <?php echo $this->setting['contact1_content'] ?>
          <div class="py-2"></div>
          
          <div class="inners_form_contact">
            <div class="py-2"></div>
            <?php echo $this->renderPartial('//home/_form_contact2', array('model'=> $model)); ?>
          </div>
          <div class="clear clearfix"></div>
        </div>
        <div class="col-md-20"></div>
      </div>

      <div class="py-4"></div>
      <div class="lines-grey"></div>
      <div class="py-4 my-4"></div>
      <div class="sub-title mb-5 pb-4"><img src="<?php echo $this->assetBaseurl ?>process-kecil.png" alt="" class="img-fluid d-inline-block pr-3">CONTACT INFORMATION OF PT TRIAS SENTOSA Tbk</div>
      
      <div class="row content-text listncontacts_companyaddress">
        <?php 
        $model = Addresscompany::model()->findAll("t.status = 1 ORDER BY t.id DESC")
        ?>
        <?php foreach ($model as $key => $value): ?>
        <div class="col-md-20">
          <div class="stext">
            <h5 clss="mb-1"><b><?php echo $value->title ?></b></h5>
            <p>
              <?php echo nl2br($value->address) ?>
            </p>
            <div class="clear"></div>
          </div>
        </div>
        <?php endforeach ?>

      </div>

      <div class="clear"></div>
    </div>

    <div class="clear"></div>
  </div>
</section>