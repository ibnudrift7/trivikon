<?php if ( isset($_GET['category']) ): ?>
<section class="breadcumb">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-30 col-30">
        <div class="investor">
            <p>OUR PRODUCTS</p>
        </div>
      </div>
      <div class="col-md-30 col-30">
        <div class="back float-right">
          <a href="<?php echo CHtml::normalizeUrl(array('/product/index', 'lang'=>Yii::app()->language)); ?>">
              <p><span><img src="<?php echo $this->assetBaseurl; ?>arrow-back.png" alt=""></span>back</p>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php else: ?>
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
<?php endif ?>

<div class="pt-5"></div>
<div class="pt-5 d-none d-sm-block"></div>
<div class="pt-3 d-none d-sm-block"></div>

<section class="product-sec-1">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-60">
        <div class="title-section">
          <p><span><img src="<?php echo $this->assetBaseurl; ?>process-kecil.png" alt=""></span> &nbsp;<?php echo $this->setting['product_ap_title'] ?></p>
        </div>
      </div>
      <div class="col-md-60 pt-3">
        <div class="content pt-2 pb-4">
          <?php echo $this->setting['product_ap_content'] ?>
        </div>
      </div>
    </div>
    <div class="row">

      <div class="col-md-60">
        <div class="title-films">
          <p><?php echo ucwords($category->description->name) ?></p>
        </div>
        <div class="py-2"></div>
        <?php /*<div class="subtitle-film">
          <p><?php echo ($category->description->desc); ?></p>
        </div>
        <div class="product-var pt-3">
          <p>Product Variants:</p>
        </div>
        */ ?>
        <?php 
        $criteria=new CDbCriteria;
        $criteria->with = array('description', 'category', 'categories', 'alternateImage');
        $criteria->order = 't.date ASC';
        $criteria->addCondition('status = "1"');
        $criteria->addCondition('description.language_id = :language_id');
        $criteria->params[':language_id'] = $this->languageID;
        $criteria->addCondition('t.category_id = :category_id');
        $criteria->params[':category_id'] = intval($_GET['category']);

        $model_prd = PrdProduct::model()->findAll($criteria);
        ?>
        <div class="row">
          <?php foreach ($model_prd as $key => $values): ?>
          <div class="col-md-15 pt-2">
            <div class="box-inner-prd">
              <a href="<?php echo CHtml::normalizeUrl(array('/product/detail','category'=>intval($_GET['category']), 'id'=> $values->id, 'lang'=>Yii::app()->language)); ?>">
              <img class="w-100" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(265,186, '/images/product/'. $values->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="">
              <div class="title-prd py-2">
                <h1><?php echo $values->description->name ?></h1>
              </div>
              </a>
            </div>
          </div>
          <?php endforeach ?>
        </div>
        <div class="clear height-30"></div>
        <div class="ns_backsprd">
          <a href="<?php echo CHtml::normalizeUrl(array('/product/index/', 'lang'=>Yii::app()->language)); ?>" class="btn btn-link"><i class="fa fa-chevron-left"></i> Back</a>
        </div>

      </div>

      <div class="clear clearfix"></div>
    </div>
  </div>
</section>

<div class="pb-5 d-none d-sm-block"></div>
<div class="pb-5 d-none d-sm-block"></div>
<div class="pb-5"></div>
