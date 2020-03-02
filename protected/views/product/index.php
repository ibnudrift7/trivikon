<?php
/*<section class="insidespg-cover py-5"  style="background-image: url(<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1920,804, '/images/static/'. $this->setting['products_hero_image'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>);">
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
*/ ?>

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

<div class="pb-5 d-none d-sm-block"></div>
<div class="pb-5"></div>

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
      <?php /*foreach ($categories as $key => $value): ?>
      <div class="col-md-30">
        <div class="title-films">
          <p><?php echo ucwords($value->description->name) ?></p>
        </div>
        <div class="subtitle-film">
          <p><?php echo ($value->description->desc); ?></p>
        </div>
        <div class="product-var pt-3">
          <p>Product Variants:</p>
        </div>
        <?php 
        $criteria=new CDbCriteria;
        $criteria->with = array('description', 'category', 'categories', 'alternateImage');
        $criteria->order = 't.date ASC';
        $criteria->addCondition('status = "1"');
        $criteria->addCondition('description.language_id = :language_id');
        $criteria->params[':language_id'] = $this->languageID;
        $criteria->addCondition('t.category_id = :category_id');
        $criteria->params[':category_id'] = $value->id;

        $model_prd = PrdProduct::model()->findAll($criteria);
        ?>
        <div class="row">
          <?php foreach ($model_prd as $key => $values): ?>
          <div class="col-md-30 pt-2">
            <div class="box-inner-prd">
              <a href="<?php echo CHtml::normalizeUrl(array('/product/detail', 'id'=> $values->id)); ?>">
              <img class="w-100" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(265,186, '/images/product/'. $values->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="">
              <div class="title-prd py-2">
                <h1><?php echo $values->description->name ?></h1>
              </div>
              </a>
            </div>
          </div>
          <?php endforeach ?>
        </div>

      </div>
      <?php endforeach*/ ?>

      <?php 
      $criteria=new CDbCriteria;
      $criteria->with = array('description');
      $criteria->addCondition('description.language_id = :language_id');
      $criteria->params[':language_id'] = $this->languageID;
      $criteria->addCondition('t.parent_id = 0');
      $criteria->order = 't.sort ASC';
      $list_categorys = PrdCategory::model()->findAll($criteria);
      ?>
      <?php foreach ($list_categorys as $key => $value): ?>
      <div class="col-md-20">
        <div class="content-prod">
          <div class="title pb-2">
            <a href="#" style="cursor: default;"><p><?php echo $value->description->name ?></p></a>
          </div>
          <div class="image pb-1"><img class="w-100 img img-fluid" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(383,268, '/images/category/'. $value->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt=""></div>
            <?php /*<div class="view_subdata pt-3">
              <?php 
              $ins_data = ListProducts::model()->Getsubdata($value->id);
              ?>
              <ul class="list-unstyled">
                <?php foreach ($ins_data as $key1 => $value1): ?>
                <li class="views_c1 view">
                  <?php 
                  $ins_data2 = ListProducts::model()->Getsubdata($value1->id);
                  ?>
                  <a href="#" onclick="return false;"><?php echo $value1->description->name ?> <i class="fa fa-plus"></i></a>
                  <?php if( count($ins_data2) >  0 ): ?>
                  <ul class="dropdown-menu">
                    <?php foreach ($ins_data2 as $key2 => $value2): ?>
                      <li>
                        <a href="<?php echo CHtml::normalizeUrl(array('/product/view', 'category'=>$value->id, 'cat1'=> $value1->id, 'cat2'=> $value2->id)); ?>"><?php echo $value2->description->name ?></a>
                        <?php 
                        $ins_data3 = ListProducts::model()->Getsubdata($value2->id);
                        ?>
                        <?php if( count($ins_data3) >  0 ): ?>
                        <ul class="dropdown-menu">
                          <?php foreach ($ins_data3 as $key3 => $value3): ?>
                            <li>
                              <a href="<?php echo CHtml::normalizeUrl(array('/product/view', 'category'=>$value->id, 'cat1'=> $value1->id, 'cat2'=> $value2->id, 'cat3'=> $value3->id)); ?>"><?php echo $value3->description->name ?></a>
                            </li>
                          <?php endforeach ?>
                        </ul>
                        <?php endif ?>
                      </li>
                    <?php endforeach ?>
                  </ul>
                  <?php endif ?>
                  </li>
                <?php endforeach ?>
              </ul>
              <div class="clear"></div>
            </div>*/ ?>

            <div class="view_subdata pt-3">
              <?php 
              $ins_data = ListProducts::model()->Getsubdata($value->id);
              ?>
              <ul class="nav flex-column flex-nowrap">
                <?php foreach ($ins_data as $key1 => $value1): ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#submenu<?php echo $key.'_'.$key1 ?>" data-toggle="collapse" data-target="#submenu<?php echo $key.'_'.$key1 ?>"><?php echo $value1->description->name ?></a>
                    <?php 
                    $ins_data2 = ListProducts::model()->Getsubdata($value1->id);
                    ?>
                    <?php if (count($ins_data2) > 0): ?>
                    <div class="collapse" id="submenu<?php echo $key.'_'.$key1 ?>" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">    
                          <?php foreach ($ins_data2 as $key2 => $value2): ?>
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#submenut1<?php echo $key.'_'.$key1.'_'.$key2 ?>" data-toggle="collapse" data-target="#submenut1<?php echo $key.'_'.$key1.'_'.$key2 ?>"><?php echo $value2->description->name ?></a>
                                <?php 
                                $ins_data3 = ListProducts::model()->Getsubdata($value2->id);
                                ?>
                                <?php if (count($ins_data3) > 0): ?>
                                <div class="collapse" id="submenut1<?php echo $key.'_'.$key1.'_'.$key2 ?>" aria-expanded="false">
                                  <?php foreach ($ins_data3 as $key3 => $value3): ?>
                                    <ul class="flex-column nav pl-4">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/product/view', 'category'=>$value->id, 'cat1'=> $value1->id, 'cat2'=> $value2->id, 'cat3'=> $value3->id)); ?>"><?php echo $value3->description->name ?></a>
                                        </li>
                                    </ul>
                                  <?php endforeach ?>
                                </div>
                                <?php endif ?>
                            </li>
                          <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif ?>
                </li>
                <?php endforeach; ?>
            </ul>
            </div>
        </div>
      </div>
      <?php endforeach ?>
    </div>

    <!-- <div class="clear clearfix"></div>
    <div class="py-4"></div>
    <div class="clear clearfix"></div>

    <div class="row">
      <div class="col-md-20">
        <?php // echo ViewCategory::model()->getViewdropdown() ?>
      </div>
      <div class="col-md-40">
        &nbsp;
      </div>
    </div> -->

  </div>
</section>

<div class="pb-5 d-none d-sm-block"></div>
<div class="pb-5"></div>

<script type="text/javascript">
  $(document).ready(function(){
    
    $('ul li.views_c1').on('click', function(){
      
      $('ul li.views_c1').find('ul.dropdown-menu').css('display', 'none');
      $('ul li.views_c1').find('i.fa').removeClass('fa-minus').addClass('fa-plus');
      $('ul li.views_c1').removeClass('addviewn').addClass('view');

      if ($(this).hasClass('view')){
        
        $(this).find('ul.dropdown-menu').css('display', 'block');
        $(this).removeClass('view').addClass('addviewn');
        $(this).find('i.fa').removeClass('fa-plus').addClass('fa-minus');

      } else {
        $(this).find('ul.dropdown-menu').css('display', 'none');
        $(this).find('i.fa').removeClass('fa-minus').addClass('fa-plus');
        $(this).removeClass('addviewn').addClass('view');
      }

      // return false;
    });

  });
</script>









<!-- 

<div class="container">
      <ul class="nav flex-column flex-nowrap">
          <li class="nav-item"><a class="nav-link" href="#">PET</a></li>
          <li class="nav-item">
              <a class="nav-link collapsed" href="#submenu1" data-toggle="collapse" data-target="#submenu1">OPP</a>
              <div class="collapse" id="submenu1" aria-expanded="false">
                  <ul class="flex-column pl-2 nav">                            
                      <li class="nav-item">
                          <a class="nav-link collapsed" href="#submenu1sub1" data-toggle="collapse" data-target="#submenu1sub1">Packaging</a>
                          <div class="collapse" id="submenu1sub1" aria-expanded="false">
                              <ul class="flex-column nav pl-4">
                                  <li class="nav-item">
                                      <a class="nav-link collapsed py-1" href="#submenu1sub2" data-toggle="collapse" data-target="#submenu1sub2">Transparent</a>
                                      <div class="collapse" id="submenu1sub2" aria-expanded="false">
                                          <ul class="flex-column nav pl-4">
                                              <li class="nav-item">
                                                  <a class="nav-link py-0" href="#">Coated</a>
                                                  <a class="nav-link py-0" href="#">Uncoated</a>
                                              </li>
                                          </ul>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                      </li>
                  </ul>
              </div>
          </li>
      </ul>
</div>



 -->




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