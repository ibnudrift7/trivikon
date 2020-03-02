<section class="block_subpage_outer">

  <div class="blocks_breadcrumb">
    <div class="prelatife container">
      <ol class="breadcrumb">
      <li><a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">Home</a></li>
      <li class="active">Products</li>
    </ol>
      <div class="clear"></div>
    </div>
  </div>

  <div class="subpage_default_outer">
    <div class="picture_illustrations p_brand hidden-xs" style="background-image: url('<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1586,375, '/images/static/'.$this->setting['product_landing_image'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>')">
    </div>
    <?php if ($this->setting['product_landing_image_res']): ?>
    <div class="picture_full visible-xs"><img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(774, 867, '/images/static/'.$this->setting['product_landing_image_res'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img-responsive"></div>
    <?php endif ?>
    <div class="prelatife container">
        <div class="insides content-text text-center">
          <h1 class="title-page">PRODUCTS</h1>
          <div class="clear height-10"></div><div class="height-2"></div>
          <div class="maw670 tengah">
            <p>Gapura Surya has an extensive range of technologically advanced products which have been specifically targeted to meet the needs of the automotive workshop & automotive industries, feel free to browse our products.</p>
            <div class="clear"></div>
          </div>

          <div class="clear height-50"></div>

          <div class="list_product_data_default category_l">
            <div class="row">
            <?php foreach ($categories as $key => $value): ?>
              <div class="col-md-4 col-sm-6">
                <div class="items">
                  <div class="picture"><a href="<?php echo CHtml::normalizeUrl(array('/product/index', 'category'=>$value->id)); ?>" class="views_products_c"><img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(387,172, '/images/category/'.$value->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img-responsive"></a></div>
                  <div class="info">
                    <h4><?php echo $value->description->name ?></h4>
                    <p><?php echo $value->description->desc ?></p>
                    <a href="<?php echo CHtml::normalizeUrl(array('/product/index', 'category'=>$value->id)); ?>" class="views_products_c">View Products</a>
                    <div class="clear"></div>
                  </div>
                </div>
              </div>
            <?php endforeach ?>
            </div>
            <div class="clear"></div>
          </div>

          <div class="clear"></div>
        </div>      
    </div>
    <div class="clear"></div>
  </div>
  <!-- end subpage default -->

  <?php echo $this->renderPartial('//layouts/_block_bottom_form_info', array()); ?>
</section>



