<section class="top-page-default pg-about">
  <!-- <div class="container"> -->
    <div class="inners_content">
      <p>Next Steps STPCICIP</p>
      <div class="clear height-10"></div><div class="height-3"></div>
      <h3><?php echo $_GET['pagename']; ?></h3>
    </div>
  <!-- </div> -->
</section>

<?php if ($_GET['pagename'] == 'Church'): ?>
    <section class="content-3-col blocks-pages sub-content-2">
        <div class="container">
            <div class="clear height-20"></div>
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
        <div class="lines-grey"></div>
    </section>
<?php else: ?>
<section class="block-details-default details-content">
    <div class="container">
        <div class="breadcrumbs-block">
            <div class="row">
                <div class="col-md-40">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/about/index')); ?>">Next Steps</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $_GET['pagename']; ?></li>
                      </ol>
                    </nav>
                </div>
                <div class="col-md-20">
                    <a href="<?php echo CHtml::normalizeUrl(array('/step/index')); ?>" class="text-right backs_t_page d-block">Go to previous page</a>
                </div>
            </div>
        </div>
        <div class="clear height-50"></div>
        <div class="clear height-50"></div>
        <div class="clear height-15"></div>
        <div class="inner-content d-block mx-auto content-text2">
            <?php echo $this->setting[strtolower($_GET['pagename']).'_hero_content']; ?>
            <div class="clear"></div>
        </div>
        <div class="clear height-50"></div>
        <div class="clear height-50"></div>
    </div>

    <div class="blocks_blue_bottom">
        <div class="container text-center">
            <a href="<?php echo CHtml::normalizeUrl(array('/step/index')); ?>">More on Next Steps</a>
            <div class="clear"></div>
        </div>
    </div>
</section>
<?php endif ?>

<section class="content-2-col blocks-home sub-content-1">
    <div class="container width_less">

        <div class="lists-blocks-next-organize">
            <div class="row">
                <div class="col-md-20">
                    <div class="items text-center">
                        <h5 class="sub-title">Church</h5>
                        <div class="pictures"><a href="<?php echo CHtml::normalizeUrl(array('/step/detail', 'pagename'=>'Church')); ?>"><img src="<?php echo $this->assetBaseurl ?>nx_step_gallery_1.jpg" alt="" class="img-fluid"></a></div>
                        <div class="info">
                            <p>The St. Peter Canisius International Catholic Parish (STPCICP)</p>
                            <a href="<?php echo CHtml::normalizeUrl(array('/step/detail', 'pagename'=>'Church')); ?>" class="btn btn-danger">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-20">
                    <div class="items text-center">
                        <h5 class="sub-title">Family</h5>
                        <div class="pictures"><a href="<?php echo CHtml::normalizeUrl(array('/step/detail', 'pagename'=>'Family')); ?>"><img src="<?php echo $this->assetBaseurl ?>nx_step_gallery_2.jpg" alt="" class="img-fluid"></a></div>
                        <div class="info">
                            <p>How we help families discover and pursue God's design</p>
                            <a href="<?php echo CHtml::normalizeUrl(array('/step/detail', 'pagename'=>'Family')); ?>" class="btn btn-danger">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-20">
                    <div class="items text-center">
                        <h5 class="sub-title">Youth</h5>
                        <div class="pictures"><a href="<?php echo CHtml::normalizeUrl(array('/step/detail', 'pagename'=>'Youth')); ?>"><img src="<?php echo $this->assetBaseurl ?>nx_step_gallery_3.jpg" alt="" class="img-fluid"></a></div>
                        <div class="info">
                            <p>A strong bond of God’s children. With the same spirit to serve.</p>
                            <a href="<?php echo CHtml::normalizeUrl(array('/step/detail', 'pagename'=>'Youth')); ?>" class="btn btn-danger">READ MORE</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="clear"></div>
    </div>
</section>
