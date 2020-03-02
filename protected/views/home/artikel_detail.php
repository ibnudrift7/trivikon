
<section class="artikel_detail-sec-1">
    <div class="prelatife container">
        <div class="row">
            <div class="col-md-7">
    
            </div>
            <div class="col-md-53">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/artikel', 'lang'=>Yii::app()->language)); ?>"><?php echo Tt::t('front', 'ARTIKEL & BERITA'); ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $detail->description->title ?></li>
                    </ol>
                    <div class="clear clearfix"></div>
                </nav>
            </div>
        </div>



        <div class="middles_content_article prelatife my-5">
                    <span class="leftsn_ftn defaults insides_p"><?php echo $this->setting['artikel1_intro_lefttitle'] ?></span>
                    <div class="container2 insides_content d-block mx-auto mt-4 mb-5 prelatife">
                        <div class="artikel-detail-container">
                            <div class="artikel-berita">
                                <p><?php echo $detail->description->title; ?></p>
                            </div>
                            <div class="row">
                                <div class="col-md-52">
                                    <div class="image">
                                        <img class="img img-fluid w-100" src="<?php echo Yii::app()->baseUrl; ?>/images/blog/<?php echo $detail->image ?>" alt="<?php echo $detail->description->title ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="content-box">
                                <div class="tanggal">
                                    <p><?php echo date('F d - Y', strtotime($detail->date_input)) ?></p>
                                </div>
                                <!-- <div class="title">
                                    <h1>Standar ISO baru memberikan tuntutan yang lebih mendalam.</h1>
                                </div> -->
                                <div class="content">
                                    <?php echo $detail->description->content; ?>
                                </div>
                            </div>
                            <div class="lebih-lanjut">
                                <a href="<?php echo CHtml::normalizeUrl(array('/home/artikel', 'lang'=>Yii::app()->language)); ?>">
                                    <p><?php echo Tt::t('front', 'Artikel & Berita Berikutnya'); ?><span><img src="<?php echo $this->assetBaseurl; ?>arrow.png" alt=""></span></p>
                                </a>
                            </div>
                        </div>
                        <!-- End lists articles -->
                        
                        <div class="clear clearfix"></div>
                    </div>
                    <div class="clear clearfix"></div>
                </div>
                <!-- end -->

    </div>
</section>

<section class="artikel_detail-sec-2 py-5">
    <div class="prelatife container">
        <div class="container2 insides_content d-block mx-auto mt-4 mb-5 prelatife">
            <h3 class="mb-5"><?php echo Tt::t('front', 'Artikel & Berita Lainnya'); ?></h3>
            <div class="artikel-content-small">
                <div class="row">
                <?php foreach ($others as $key => $value){ ?>
                    <div class="col-md-20">
                        <div class="tanggal-small">
                            <p><?php echo date('F d - Y', strtotime($value->date_input)) ?></p>
                        </div>
                        <div class="gambar-kecil">
                            <img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(354,212, '/images/blog/'.$value->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="">
                        </div>
                        <div class="judul-small">
                            <a href="<?php echo CHtml::normalizeUrl(array('/home/artikel_detail', 'id'=>$value->id, 'lang'=>Yii::app()->language)); ?>"><h1><?php echo $value->description->title ?></h1></a>
                        </div>
                        <div class="content-small">
                            <p><?php echo substr(strip_tags($value->description->content), 0, 100); ?></p>
                        </div>
                        <div class="lebih-small">
                            <a href="<?php echo CHtml::normalizeUrl(array('/home/artikel_detail', 'id'=>$value->id, 'lang'=>Yii::app()->language)); ?>">
                                <p><?php echo Tt::t('front', 'Lebih Lanjut'); ?><span><img src="<?php echo $this->assetBaseurl; ?>arrow.png" alt=""></span></p>
                            </a>
                        </div>
                    </div>
                <?php } ?>  
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <!-- end -->
    </div>
</section>  