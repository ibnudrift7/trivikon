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
    <div class="picture_illustrations p_brand">
    </div>
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
            <?php for ($i=1; $i < 9; $i++) { ?>
              <div class="col-md-4 col-sm-6">
                <div class="items">
                  <div class="picture"><img src="https://dummyimage.com/387x172" alt="" class="img-responsive"></div>
                  <div class="info">
                    <h4>Grease / Lubricant</h4>
                    <p>Our scientifically manufactured product to cater to the needs of car care industries and automotive detailing enthusiast.</p>
                    <a href="<?php echo CHtml::normalizeUrl(array('/home/products')); ?>" class="views_products_c">View Products</a>
                    <div class="clear"></div>
                  </div>
                </div>
              </div>
            <?php } ?>              
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