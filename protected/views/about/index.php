<!-- <section class="top-page-default pg-about defaults_bigstatic" style="background-image: url(<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1920,869, '/images/static/'. $this->setting['about_image'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>);">
    <div class="inners_content">
      <h3>About STPCICP</h3>
      <p>St. Peter Canisius International Catholic Parish</p>
      <?php echo $this->setting['about_content']; ?>
    </div>
</section>

<section class="content-2-col blocks-home sub-content-1">
    <div class="container width_less">
        <div class="inner-about-middle content-text1 text-center">
            <?php echo $this->setting['about_content1_intro']; ?>
        </div>

        <div class="lists-blocks-next-organize mt-65">
            <div class="row">
                <?php 
                $links_arr1 = [
                            1 => ['page'=>'history', 'title'=>'History of STPCICP'],
                                 ['page'=>'visimisi', 'title'=>'Our Vision and Mission'],
                                 ['page'=>'registration']
                              ];
                ?>

                <?php for ($i=1; $i < 4; $i++) { ?>
                <div class="col-md-20">
                    <div class="items text-center">
                        <h5 class="sub-title"><?php echo $this->setting['about_content1_title_'. $i]; ?></h5>
                        <div class="pictures">
                            <?php if ($i == 3): ?>
                                <a href="<?php echo CHtml::normalizeUrl(array('/about/registration')); ?>">
                            <?php else: ?>
                            <a href="<?php echo CHtml::normalizeUrl(array('/about/detail', 'page'=>$links_arr1[$i]['page'], 'pagename'=>$links_arr1[$i]['title'] )); ?>">
                            <?php endif ?>
                            <img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(566,302, '/images/static/'. $this->setting['about_content1_image_'. $i], array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img-fluid"></a>
                        </div>
                        <div class="info">
                            <p><?php echo $this->setting['about_content1_content_'. $i]; ?></p>
                            <?php if ($i == 3): ?>
                                <a class="btn btn-danger" href="<?php echo CHtml::normalizeUrl(array('/about/registration')); ?>">
                            <?php else: ?>
                            <a class="btn btn-danger" href="<?php echo CHtml::normalizeUrl(array('/about/detail', 'page'=>$links_arr1[$i]['page'], 'pagename'=>$links_arr1[$i]['title'] )); ?>">
                            <?php endif ?>READ MORE</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

        <div class="clear"></div>
    </div>
</section>

<section class="content-3-col blocks-pages sub-content-2 hide hidden d-none">
    <div class="container">
        <h3 class="text-center"><?php echo $this->setting['about_content2_intro']; ?></h3>
        <div class="lists-blocks-next-about mt-65">
            <div class="row">
                <?php 
                // $list_about = [1=>'Community Life', 'Prayer Group', 'Adult Bible Study', 'Fellowships', 'Community Service', 'Liturgy Services'];

                $links_arr2 = [
                            1 => ['page'=>'comlife', 'title'=>'Community Life'],
                            ['page'=>'prayer', 'title'=>'Prayer Group'],
                            ['page'=>'biblestudy', 'title'=>'Adult Bible Study'],
                            ['page'=>'fellowships', 'title'=>'Fellowships'],
                            ['page'=>'comservice', 'title'=>'Community Service'],
                            ['page'=>'liturgy', 'title'=>'Liturgy Services'],
                            ];
                ?>
                <?php for ($i=1; $i < 7; $i++) { ?>
                <div class="col-md-20 col-sm-30">
                    <div class="items">
                        <div class="picturesn">
                                <img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(448,190, '/images/static/'. $this->setting['about_content2_image_'. $i] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img-fluid">
                            <div class="info">
                                <a href="<?php echo CHtml::normalizeUrl(array('/about/detail', 'page'=> $links_arr2[$i]['page'], 'pagename'=> $links_arr2[$i]['title'])); ?>">
                                <div class="table-out">
                                    <div class="table-in">
                                    <h5><?php echo $this->setting['about_content2_title_'. $i] ?></h5>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="clear clearfix"></div>
        </div>

        <div class="clear"></div>
    </div>
</section> -->
<section class="breadcumb-my-food section-1 p-whoweare">
    <div class="prelative container">
        <div class="row">
            <div class="breadcumb-title">
                <p class="pb-2">WHO WE ARE</p>
            </div>
            <hr class="breadcumb">
            <div class="content">
                <p>Mix rigor, creativity, diverse products, and passion. That’s who we are.</p>
            </div>
        </div>
        
    </div>
</section>
<section class="about section-2">
    <div class="prelative container">
        <div class="row">
            <div class="title-content">
                <p>Get to know about MyFood</p>
            </div>
            <div class="content-bold py-4">
                <p>Since established at 2009, MyFood Indonesia distributed the excellence, expertise, and quality products our customers need to develop and operate successful food operations and experiences. We’ve grown to become a nationwide spread distributor in Java - Indonesia by upholding the same business approach — being passionately committed to the people we serve. We believe in the power of good products — to bring business to people that we serve. Every product, every order and every decision we make is inspired by the people on the other side of the plate.  We care about you, we care about your customer.</p>
            </div>
            <div class="content-biasa">
                <p>
                MyFood Indonesia is innovator in food service supply chain operations, having developed nation-wide practices based on your business needs. Both our principals or our agents and distributors spend more time building their businesses, assured that their goods delivery will be on time and undamaged. Our employees take pride in building relationships and paying special attention to agents and distributors. We reward employees for good work, ensuring that we maintain a high level of employee retention, which guarantees consistent service through the food service supply chain in Indonesia - nationwide.
                </p>
            </div>
        </div>
    </div>
</section>


<section class="who section-3">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-30">
                <div class="row">
                    <div class="col-md-30">
                        <div class="img-sec-3-big">
                            <img src="<?php echo $this->assetBaseurl; ?>about-sec-3-big.jpg" alt="" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-30">
                        <div class="img-sec-3-small">
                            <img src="<?php echo $this->assetBaseurl; ?>about-sec-3-small.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-30">
                <div class="title-vision mt-100">
                    <p>Our Vision</p>
                </div>
                <div class="content">
                    <p>MyFood to be a nation-leading food and beverage distributor company offering unique, healthy and out of the ordinary products in a large scale. We build relationships with our principals, producers, agents, distributors, direct consumers to create sustainable flow of request and demand in various segments.</p>
                </div>
                <div class="title-mission">
                    <p>Our Mission</p>
                </div>
                <div class="content">
                    <p>At MyFood, Customer is King and Product is Treasure. Our mission is to offer our customers with the highest-quality food and beverage products. To do this, MyFod is guided by hard work, innovation, compassion, spirit, integrity of our people and a deep commitment to create sustainable business.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="who section-4">
    <div class="prelative container">
        <div class="title-section4">
            <p>What Sets MyFood Apart From Others</p>
        </div>
        <div class="row">
            <div class="col-md-20">
                <div class="img-section4">
                    <div class="pictures">
                        <img src="<?php echo $this->assetBaseurl ?>about---integrity.jpg" alt="" class="d-block img-fluid w-100">
                    </div>
                    <div class="title">
                        <p>Integrity</p>
                    </div>
                    <div class="content">
                        <p>The best relationships are founded on honesty, trust, and respect. We say what we will do, and then we do it.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-20">
                <div class="img-section4">
                    <div class="pictures">
                        <img src="<?php echo $this->assetBaseurl ?>about--war-mentality.jpg" alt="" class="d-block img-fluid w-100">
                    </div>
                    <div class="title">
                        <p>War Mentality</p>
                    </div>
                    <div class="content">
                        <p>We play fair, but never lose sight of the goal to win. With that in mind, we execute our plans and strategies with focus, commitment, and passion.s</p>
                    </div>
                </div>
            </div>
            <div class="col-md-20">
                <div class="img-section4">
                    <div class="pictures">
                        <img src="<?php echo $this->assetBaseurl ?>about--cutomer-is-king.jpg" alt="" class="d-block img-fluid w-100">
                    </div>
                    <div class="title">
                        <p>Customer is King</p>
                    </div>
                    <div class="content">
                        <p>Our customers come first. We’re driven to exceed their expectations by listening, leading, solving problems, and delivering what we promise.s</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-sec4">
            <p>
            “MyFood believes that strong relationships break down barriers and promote innovation and cooperation. By working as your open-minded responsive partner, we’ll bring you business excellence.”
            </p>
        </div>
    </div>
</section>
