<?php /*
<!-- <section class="slider">
    <div class="prelative container pt-5">
        <div class="row pt-5 py-5">
            <div class="col-md-30">
                <div class="title">
                    <p>WE INNOVATE AND MANUFACTURE THE BEST BOPP & PET FILM PRODUCTS</p>
                </div>
                <div class="subtitle">
                    <p>FROM OUR MARKET IN INDONESIA TO ANYWHERE IN THE WORLD</p>
                </div>
                <button>Browse Our Products <span><img src="<?php echo $this->assetBaseurl; ?>arrow-new.png" alt=""></span> </button>
            </div>
            <div class="col-md-30">

            </div>
        </div>
    </div>
</section> --> */ ?>

<section class="home-sec-1" style="background-image: url(<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1920,914, '/images/static/'. $this->setting['home1_illus'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>);">
    <div class="prelative container py-5">
        <div class="row py-5 pt-5">
            <div class="col-md-40 py-5 pt-5">
                <div class="title">
                    <p><?php echo $this->setting['home1_title'] ?></p>
                </div>
                <div class="subtitle">
                    <p><?php echo $this->setting['home1_subtitle'] ?></p>
                </div>
                <div class="content py-2 pt-4">
                    <?php echo $this->setting['home1_content'] ?>
                </div>
                <div class="tombol">
                    <a href="<?php echo $this->setting['home1_teks_url'] ?>">
                        <button><?php echo $this->setting['home1_url_toteks'] ?> <span><img src="<?php echo $this->assetBaseurl; ?>arrow-new.png" alt=""></span></button>
                    </a>
                </div>
            </div>
            <div class="col-md-20">

            </div>
        </div>
    </div>
</section>

<section class="home-sec-2" style="background-image: url(<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1920,510, '/images/static/'. $this->setting['home2_illus'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>);">
    <div class="prelative container py-5">
        <div class="row">
            <div class="col-md-30">
                
            </div>
            <div class="col-md-30 py-5">
                <div class="title text-right pt-4">
                    <p>
                    <?php echo $this->setting['home2_title'] ?>
                    </p>
                </div>
                <div class="subtitle text-right ">
                    <p>
                    <?php echo $this->setting['home2_subtitle'] ?>
                    </p>
                    <img class="pt-5" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(600,980, '/images/static/'. $this->setting['home_iconbrand'] , array('method' => 'adaptiveResize', 'quality' => '90')); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-sec-3 pt-5">
    <div class="prelative container pt-5">
        <div class="title pt-3">
            <p><?php echo $this->setting['home3_title'] ?></p>
        </div>
        <div class="row">

            <div class="col-md-40">
                <div class="box first">
                    <img class="w-100" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(778,408, '/images/static/'. $this->setting['home3_short_image_1'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="">
                    <div class="box-inside">
                        <p><?php echo $this->setting['home3_short_title_1'] ?></p>
                        <a href="<?php echo $this->setting['home3_short_links_1'] ?>">
                            <button>Find Out More <span><img src="<?php echo $this->assetBaseurl; ?>arrow-new.png" alt=""></span></button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-20">
                <div class="box">
                    <img class="w-100" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(384,408, '/images/static/'. $this->setting['home3_short_image_2'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="">
                    <div class="box-inside">
                        <p><?php echo $this->setting['home3_short_title_2'] ?></p>
                        <a href="<?php echo $this->setting['home3_short_links_2'] ?>">
                            <button>Find Out More <span><img src="<?php echo $this->assetBaseurl; ?>arrow-new.png" alt=""></span></button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-60 py-5 mx-auto text-center">
                <div class="pt-3"></div>
                <div class="pt-3"></div>
                <div class="pt-3"></div>
                <img src="<?php echo $this->assetBaseurl; ?>../../images/static/<?php echo $this->setting['home3_logosn_iso3'] ?>" alt="">
                <div class="content-above-logo-small mx-auto pt-4">
                    <?php echo nl2br($this->setting['home3_bottom_content']) ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-sec-4">
    <div class="prelative container pt-5">
        <div class="title pb-3">
            <p><?php echo $this->setting['home4_title'] ?></p>
        </div>
        <div class="row">
            <?php for ($i=1; $i < 4; $i++) { ?>
            <div class="col-md-20">
                <div class="box first">
                    <img class="w-100 img img-fluid" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(386,410, '/images/static/'. $this->setting['home4_short_image_'. $i] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="">
                    <div class="box-inside">
                        <p><?php echo $this->setting['home4_short_title_'. $i] ?></p>
                        <a href="<?php echo $this->setting['home4_short_links_'. $i] ?>">
                            <button>Find Out More <span><img src="<?php echo $this->assetBaseurl; ?>arrow-new.png" alt=""></span> </button>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>

            <!-- <div class="col-md-20">
                <div class="box first">
                    <img class="w-100" src="<?php echo $this->assetBaseurl; ?>design-trias-1-Recovered_11.png" alt="">
                    <div class="box-inside">
                        <p>Reports <br> Current & Interim</p>
                        <a href="<?php echo CHtml::normalizeUrl(array('/home/investor', 'lang'=>Yii::app()->language)); ?>">
                            <button>Find Out More <span><img src="<?php echo $this->assetBaseurl; ?>arrow-new.png" alt=""></span> </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-20">
                <div class="box">
                    <img class="w-100" src="<?php echo $this->assetBaseurl; ?>design-trias-1-Recovered_13.png" alt="">
                    <div class="box-inside">
                        <p>Press Releases</p>
                        <a href="<?php echo CHtml::normalizeUrl(array('/home/investor', 'lang'=>Yii::app()->language)); ?>">
                            <button>Find Out More <span><img src="<?php echo $this->assetBaseurl; ?>arrow-new.png" alt=""></span> </button>
                        </a>
                    </div>
                </div>
            </div>
             -->
        </div>
    </div>
</section>

<div class="pt-3"></div>
<section class="home-sec-5 pt-5">
    <div class="prelative container py-5">
        <div class="title pt-5 pb-3">
            <p>News & Articles</p>
        </div>
        <div class="row">
            <?php 
                $criteria = new CDbCriteria;
                $criteria->with = array('description');
                $criteria->addCondition('active = "1"');
                $criteria->addCondition('description.language_id = :language_id');
                $criteria->params[':language_id'] = $this->languageID;
                $criteria->order = 'date_input DESC';

                $dataBlog = new CActiveDataProvider('Blog', array(
                    'criteria'=>$criteria,
                    'pagination'=>false,
                ));
            ?>
            <?php if (  intval($dataBlog->totalItemCount) > 0 ): ?>
                <?php foreach ($dataBlog->getData() as $key => $value): ?>
                <div class="col-md-20">
                    <div class="articles">
                        <div class="tanggal"><?php echo date('d F Y', strtotime($value->date_input)) ?></div>
                        <a href="<?php echo CHtml::normalizeUrl(array('/blog/detail', 'id'=>$value->id, 'lang'=> Yii::app()->language)); ?>">
                            <div class="title-article pt-3"><?php echo $value->description->title ?></div>
                        </a>
                        <div class="content pt-3 pb-5"><?php echo strip_tags(substr($value->description->content, 0, 100)).'...' ?></div>
                    </div>
                </div>
                <?php endforeach ?>
            <?php endif ?>

            <div class="col-md-60">
                <div class="more-info text-right">
                    <a href="<?php echo CHtml::normalizeUrl(array('/blog/index')); ?>">
                        <p>More news & articles</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
