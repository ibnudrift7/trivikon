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

<section class="productrev-sec-1">
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
    <div class="col-md-60">
        <div class="title-films">
            <p>Barrier Films</p>
        </div>
        <div class="subtitle-film">
            <p>Extend shell life, improve performance.</p>
        </div>
        <div class="product-var pt-3">
            <p>Product Variants:</p>
        </div>
        <div class="row">
            <?php for($i=0;$i<=7;$i++){?>
                <div class="col-md-15 pt-2">
                    <div class="box-inner-prd">
                        <a href="<?php echo CHtml::normalizeUrl(array('/product/detail', 'lang'=>Yii::app()->language)); ?>">
                            <img class="w-100" src="<?php echo $this->assetBaseurl; ?>Layer-32.jpg" alt="">
                            <div class="title-prd py-2">
                            <h3>Coated BOPP</h3> 
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
  </div>
</section>

<div class="pb-5 d-none d-sm-block"></div>
<div class="pb-5 d-none d-sm-block"></div>
<div class="pb-5"></div>



<?php /*
<section class="block_subpage_outer">

  <div class="blocks_breadcrumb">
    <div class="prelatife container">
      <ol class="breadcrumb">
      <li><a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">Home</a></li>
      <li><a href="<?php echo CHtml::normalizeUrl(array('/product/productCategory')); ?>">Products</a></li>
      <?php if ($category != ''): ?>
      <li class="active"><?php echo $category->description->name ?></li>
      <?php endif ?>
    </ol>
      <div class="clear"></div>
    </div>
  </div>

  <div class="subpage_default_outer">
    <?php if ($_GET['brand']): ?>
    <div class="picture_illustrations p_brand hidden-xs" style="background-image: url('<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1586,375, '/images/static/'.$this->setting['product_landing_image'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>')">  
    <?php if ($this->setting['product_landing_image_res']): ?>
    <div class="picture_full visible-xs"><img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(774, 867, '/images/static/'.$this->setting['product_landing_image_res'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img-responsive"></div>
    <?php endif ?>
    <?php else: ?>
    <div class="picture_illustrations p_brand" style="background-image: url('<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1586,375, '/images/category/'. $category->image2 , array('method' => 'adaptiveResize', 'quality' => '90')) ?>')">  
    <?php endif ?>
    
    </div>
    <div class="prelatife container">
        <div class="insides content-text text-center">
          <h1 class="title-page">PRODUCTS</h1>
          <div class="clear height-2"></div>
          <?php if ($category != ''): ?>
              <h2 class="sub_title prd"><?php echo $category->description->name ?></h2>
          <?php endif ?>
          <?php if ($brand != ''): ?>
              <h2 class="sub_title prd"><?php echo $brand->description->title ?></h2>
          <?php endif ?>

          <div class="clear height-50"></div>

          <div class="block_in_producst_pg text-left">
            <div class="row">
              <div class="col-md-3">
                <div class="lefts_cont">
                  <h3 class="sub_title">Product Category</h3>
                  <ul class="list-unstyled parent">
                    <?php foreach ($categories as $key => $value): ?>
                    <li <?php if ($value->id == $_GET['category']): ?>class="active"<?php endif ?>>
                      <?php
                          $criteria = new CDbCriteria;
                          $criteria->with = array('description');
                          $criteria->addCondition('t.parent_id = :parent_id');
                          $criteria->params[':parent_id'] = $value->id;
                          $criteria->addCondition('description.language_id = :language_id');
                          $criteria->params[':language_id'] = $this->languageID;
                          $criteria->addCondition('t.type = :type');
                          $criteria->params[':type'] = 'category';
                          $criteria->order = 'sort ASC';
                          $categories2 = PrdCategory::model()->findAll($criteria);
                      ?>
                      <?php if (count($categories2) > 0): ?>
                      <a href="#" onclick="return false;">
                      <?php else: ?>
                      <a href="<?php echo CHtml::normalizeUrl(array('/product/index', 'category'=>$value->id)); ?>">
                      <?php endif; ?>
                        <?php echo $value->description->name ?></a>
                      <?php if (count($categories2) > 0): ?>
                      <ul class="list-unstyled dropdown-menu2">
                        <?php foreach ($categories2 as $k => $v): ?>
                        <li <?php if ($v->id == $_GET['category']): ?>class="active"<?php endif ?>><a href="<?php echo CHtml::normalizeUrl(array('/product/index', 'category'=>$v->id)); ?>"><?php echo $v->description->name ?></a>
                        <?php endforeach ?>
                      </ul>
                      <?php endif ?>
                    </li>
                    <?php endforeach ?>
                  </ul>
                  <div class="clear"></div>
                </div>
              </div>
              <div class="col-md-9">

<?php if ($product->getTotalItemCount() > 0): ?>
                <!-- start list product data -->
                <div class="list_product_data_default product_l">
                  <div class="row">
                  <?php foreach ($product->getData() as $key => $value): ?>
                  <?php
                  $dataSerialize = unserialize($value->data);
                  ?>
                    <div class="col-md-4 col-sm-6">
                      <div class="items">
                        <div class="picture"><a href="javascript:;" data-toggle="modal" data-target="#myModal-<?php echo $key ?>" class="views_products_c"><img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(289,289, '/images/product/'.$value->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img-responsive"></a></div>
                        <div class="info">
                          <h4><?php echo $value->description->name ?></h4>
                          <?php echo $value->description->desc ?>
                          <h6>PACKING SIZE AVAILABLE</h6>
                          <p><?php echo $dataSerialize['feature'] ?></p>
                          <div class="clear height-5"></div>
                          <a href="javascript:;" data-toggle="modal" data-target="#myModal-<?php echo $key ?>" class="views_products_c"><i class="fa fa-search"></i> &nbsp;Enlarge Products</a>
                          <div class="clear"></div>
                        </div>
                      </div>
                    </div>
                    <?php 
                    $s_count = ($key)+1;
                    if ( ($s_count % 3) == 0) {
                      echo "<div class='clear visible-md visible-lg'></div>";
                    }
                    if ( ($s_count % 2) == 0) {
                      echo "<div class='clear visible-sm'></div>";
                    }
                    ?>
                  <?php endforeach ?>
                  </div>
                  <div class="clear"></div>
                </div>
                <?php $this->widget('CLinkPager', array(
                    'pages' => $product->getPagination(),
                    'header'=>'',
                    'htmlOptions'=>array('class'=>'pagination'),
                    'selectedPageCssClass'=>'active',
                )) ?>
                <!-- end list product data -->
<?php else: ?>
<h2>Product not found</h2>
<?php endif ?>

              </div>
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

<?php if ($product->getTotalItemCount() > 0): ?>
<?php foreach ($product->getData() as $key => $value): ?>
<?php
$dataSerialize = unserialize($value->data);
?>
<!-- Modules Popup -->
<div class="modal fade customs_modal_popup" id="myModal-<?php echo $key ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">
          <img src="<?php // echo $this->assetBaseurl ?>lgo_header_gapuraSurya.png" alt="" class="img-responsive">
        </h4>
      </div> -->
      <div class="modal-body">
        <div class="insets_popup text-center tengah">
          <button type="button" class="btn btns_close" data-dismiss="modal" aria-label="Close">
            <i class="fa fa-close"></i>
          </button>
          <div class="clear height-15"></div>

          <!-- <img src="<?php // echo Yii::app()->baseUrl.ImageHelper::thumb(495,495, '/images/product/'.$value->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img-responsive center-block"> -->
          <div class="cars_fcs_slide">
            <div id="carousel-exN-prdFcs_<?php echo $key ?>" class="carousel slide slides_popups_mod" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel-exN-prdFcs_<?php echo $key ?>" data-slide-to="0" class="active"></li>
                <?php if (count($value->alternateImage)): ?>
                <?php foreach ($value->alternateImage as $kys => $val): ?>
                <li data-target="#carousel-exN-prdFcs_<?php echo $key ?>" data-slide-to="<?php echo $kys +1; ?>"></li> 
                <?php endforeach; ?>
                <?php endif ?>
              </ol>

              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(495,495, '/images/product/'. $value->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img-responsive center-block">
                </div>
                <?php if (count($value->alternateImage)): ?>
                  <?php foreach ($value->alternateImage as $ky => $val): ?>
                  <div class="item">
                  <img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(495,495, '/images/product/'.$val->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img-responsive center-block" >
                  </div>
                  <?php endforeach; ?>
                <?php endif ?>
              </div>
            </div>
            <div class="clear"></div>
          </div>

          <div class="clear height-25"></div>
          <div class="info">
            <p><strong><?php echo $value->description->name ?></strong><br />
            <?php echo $value->description->desc ?>

            <p><strong>PACKING SIZE AVAILABLE</strong><br />
            <?php echo $dataSerialize['feature'] ?></p>

            <?php if ($dataSerialize['button_url_1'] != '' AND $dataSerialize['button_url_2'] != ''): ?>
              <p><strong>BUY At</strong> <br>
                <?php if ($dataSerialize['button_url_1'] != ''): ?>
                <a href="<?php echo $dataSerialize['button_url_1'] ?>" class="" target="_blank"><img src="<?php echo Yii::app()->baseUrl; ?>/asset/images/backs_btn_lazada.png" alt=""><?php // echo $dataSerialize['button_label_1'] ?></a>
                <?php endif ?>&nbsp;&nbsp;&nbsp;
                <?php if ($dataSerialize['button_url_2'] != ''): ?>
                <a href="<?php echo $dataSerialize['button_url_2'] ?>" class="" target="_blank"><img src="<?php echo Yii::app()->baseUrl; ?>/asset/images/backs_btn_blibli.png" alt=""><?php // echo $dataSerialize['button_label_1'] ?></a>
                <?php endif ?>
              </p>
            <?php endif ?>
            <div class="clear height-10"></div>
            <div class="clear"></div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endforeach ?>
<?php endif ?>

<style type="text/css">
  .slides_popups_mod {}
  .slides_popups_mod ol.carousel-indicators{
    bottom: 10px;
    z-index: 10000;
    margin-left: 0px;
    width: 100%;
    left: 0px;
    text-align: center;
  }
  .slides_popups_mod ol.carousel-indicators li{
    background-color: #ccc;
    width: 12px; height: 12px;
    margin: 0 2px;
  }

  .slides_popups_mod ol.carousel-indicators li:hover,
  .slides_popups_mod ol.carousel-indicators li.active{
    background-color: green;
    width: 12px; height: 12px;
    margin: 0 2px;
  }
</style>
---------- */ ?>