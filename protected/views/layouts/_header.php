<?php 
    $e_activemenu = $this->action->id;
    $controllers_ac = $this->id;
    $session=new CHttpSession;
    $session->open();
    $login_member = $session['login_member'];

    $active_menu_pg = $controllers_ac.'/'.$e_activemenu;
?>
<!-- <header class="header sticky-top <?php if ($active_menu_pg == 'home/index'): ?>homepages<?php endif ?>">
  <div class="prelative container d-none d-sm-none d-md-block d-lg-block">
  </div>
</header> -->

<header class="head <?php if ($active_menu_pg != 'home/index'): ?>insides-head<?php endif ?>">
  <div class="prelative container">
    <div class="tops_nheaders">
      <div class="row">
        <div class="col-md-20"></div>
        <div class="col-md-40">
          <!-- <div class="clear height-35"></div> -->
          <div class="d-inline-block inners_right menu-block-top text-right float-right">
            <ul class="list-inline d-inline align-bottom buat_ipad">
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>">HOME</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/contact', 'lang'=>Yii::app()->language)); ?>">CONTACT</a></li>
            </ul>
            <div class="d-inline-block align-bottom blosn-languagemenu nc2 pl-4 align-bottom">
              <ul class="list-inline">
                <?php
                $get = $_GET; $get['lang'] = 'en';
                ?>
                <li class="list-inline-item <?php if (Yii::app()->language == 'en'): ?>active<?php endif ?>"><a href="<?php echo $this->createUrl($this->route, $get) ?>" title="ENG">EN</a></li>
                <li class="list-inline-item">|</li>
                 <?php
                  $get = $_GET; $get['lang'] = 'id';
                  ?>
                <li class="list-inline-item <?php if (Yii::app()->language == 'id'): ?>active<?php endif ?>"><a href="<?php echo $this->createUrl($this->route, $get) ?>" title="Bahasa">ID</a></li>
                <!-- <span class="hanya-ipad">CUSTOMER SERVICE &nbsp;&nbsp;<i class="fa fa-phone">&nbsp;&nbsp;&nbsp;&nbsp;<a href="tel:08165502656">081 6550 2656</a></i></span> -->
                <span class="hanya-ipad">For fast feedback please contact us: &nbsp;&nbsp;<i class="fa fa-phone">&nbsp;<a href="tel:62318975825">+62 31 8975825</a></i></span>
              </ul>
            </div>
            <div class="d-inline-block align-bottom ml-4 nbcsll_backright hanya">
              <span>For fast feedback please contact us: &nbsp;&nbsp;<i class="fa fa-phone">&nbsp;<a href="tel:62318975825">+62 31 8975825</a></i></span>
            </div>
          </div>
        </div>
      </div>
      <div class="clear clearfix"></div>
    </div>
    <div class="bottoms_nheaders">
      <div class="row">
        <div class="col-md-20">
          <a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>">
            <img src="<?php echo $this->assetBaseurl; ?>lgo-headers.png" alt="" class="img img-fluid">
          </a>
        </div>
        <div class="col-md-40">
          <div class="menu-block-bottom text-right cmenubot">
            <ul class="list-inline text-right">
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/about', 'lang'=>Yii::app()->language)); ?>">ABOUT US</a></li>
              <li class="nav-item dropdown">
                <a class="dropdown-toggle views_product_drop" href="<?php echo CHtml::normalizeUrl(array('/product/index')); ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  OUR PRODUCTS
                </a>
                <?php /*<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item dropdown-content" href="<?php echo CHtml::normalizeUrl(array('/product/application', 'lang'=>Yii::app()->language)); ?>">By Industry Application</a></li>
                  <li><a class="dropdown-item dropdown-content" href="<?php echo CHtml::normalizeUrl(array('/product/index', 'lang'=>Yii::app()->language)); ?>">By Product Category</a></li>
                </ul>*/ ?>
              </li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/process', 'lang'=>Yii::app()->language)); ?>">OUR PROCESS</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/blog/index', 'lang'=>Yii::app()->language)); ?>">NEWS & ARTICLES</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/career', 'lang'=>Yii::app()->language)); ?>">CAREER</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="clear clearfix"></div>
    </div>
    <!-- End inners head -->
  </div>

  <section class="header-baru">
      <div class="prelative container">
          <div class="row">
              <div class="col-md-20">
                  <div class="box-content">
                      <div class="title">
                          <p>View Product By Category</p>
                      </div>
                      <div class="content">
                        <!-- Start view products -->
                        <?php echo $this->renderPartial('//layouts/_views_submenu_header', array()); ?>
                        <!-- End view products -->
                        <div class="clear"></div>
                      </div>
                  </div>
              </div>
              <div class="col-md-20">
                  <div class="box-content">
                      <div class="title">
                          <p>View Product By Application</p>
                      </div>
                      <div class="content">
                          <div class="view">
                              <a href="<?php echo CHtml::normalizeUrl(array('/product/index', 'lang'=>Yii::app()->language)); ?>">
                                  <p>View Product By Application</p>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-20">
                  <div class="box-content">
                      <div class="title">
                          <p>Search Product</p>
                      </div>
                      <div class="content">
                        <form action="#" method="post" onclick="">
                          <div class="row">
                              <div class="col-md-45">
                                  <input type="text">
                              </div>
                              <div class="col-md-15">
                                  <div class="search">
                                      <button>Search</button>
                                  </div>
                              </div>
                          </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
          <div class="py-4"></div>
      </div>
  </section>
</header>

<header class="header-mobile homepage_head">
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#"><img src="<?php echo $this->assetBaseurl; ?>lgo-headers.png" alt="" class="img img-fluid"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>">HOME</a></li>
      <li class="nav-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/about', 'lang'=>Yii::app()->language)); ?>">ABOUT US</a></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?php echo CHtml::normalizeUrl(array('/product/index')); ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          OUR PRODUCTS
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/productind', 'lang'=>Yii::app()->language)); ?>">By Industry Application</a></li>
          <li><a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/product', 'lang'=>Yii::app()->language)); ?>">By Product Category</a></li>
        </ul>
      </li>
      <li class="nav-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/process', 'lang'=>Yii::app()->language)); ?>">OUR PROCESS</a></li>
      <li class="nav-item"><a href="<?php echo CHtml::normalizeUrl(array('/blog/index', 'lang'=>Yii::app()->language)); ?>">NEWS & ARTICLES</a></li>
      <li class="nav-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/career', 'lang'=>Yii::app()->language)); ?>">CAREER</a></li>
      <li class="nav-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/contact', 'lang'=>Yii::app()->language)); ?>">CONTACT US</a></li>
      <li class="nav-item lasts_item">
      <?php
      $get = $_GET; $get['lang'] = 'en';
      ?>
      <a href="<?php echo $this->createUrl($this->route, $get) ?>" title="ENG">EN | </a>
      <a href="<?php echo $this->createUrl($this->route, $get) ?>" title="Bahasa">ID</a>
      </li>
    </ul>
  </div>
</nav>
</header>

<section id="myAffix" class="header-affixs affix-top">
  <div class="clear height-15"></div>
  <div class="prelative container">
    <div class="row">
      <div class="col-md-15 col-sm-15">
        <div class="lgo_web_headrs_wb">
          <a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>">
            <img src="<?php echo $this->assetBaseurl; ?>lgo-headers.png" alt="" class="img">
          </a>
        </div>
      </div>
      <div class="col-md-45 col-sm-45">
        <div class="text-right"> 
          <div class="menu-taffix">
            <ul class="list-inline d-inline">
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>">HOME</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/about', 'lang'=>Yii::app()->language)); ?>">ABOUT US</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/product/index')); ?>">OUR PRODUCT</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/process', 'lang'=>Yii::app()->language)); ?>">OUR PROCESS</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/blog/index', 'lang'=>Yii::app()->language)); ?>">NEWS & ARTICLES</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/career', 'lang'=>Yii::app()->language)); ?>">CAREER</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/contact', 'lang'=>Yii::app()->language)); ?>">CONTACT</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</section>


<script type="text/javascript">
  $(function(){

  var sn_width = $(window).width();
  if (sn_width > 1150) {

      $(window).scroll(function(){
        var sntop1 = $(window).scrollTop();

        if(sntop1 > 115){
          // console.log(sntop1);
          $('.header-affixs').removeClass('affix-top').addClass('affix');
          // $('.header-affixs').addClass('affix');
        }else{
          $('.header-affixs.affix').removeClass('affix').addClass('affix-top');
          // $('body').css('padding-top', '0px');
        }
      });

    }


    // Dropdown menu
    // $('.menu-block-bottom.cmenubot ul li.nav-item').on('click', function(){
    //   $('section.header-baru').removeClass('opened');
    //   $('section.header-baru.opened').slideUp();
    // });

    $('.menu-block-bottom.cmenubot ul li.nav-item.dropdown').on('click', function(){
      if ( $('section.header-baru').hasClass('opened') ) {
          $('section.header-baru').slideUp();
          $('section.header-baru.opened').removeClass('opened');
      }else{
        $('section.header-baru').slideDown();
        $('section.header-baru').addClass('opened');
        setTimeout(function(){ 
          $('section.header-baru').slideUp();
        }, 20000);
      }


      return false;
    });

  });
</script>

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

<script>
  // $(document).ready(function(){
  //   $("#headerproduct").css("display","none");
  // });
</script>
