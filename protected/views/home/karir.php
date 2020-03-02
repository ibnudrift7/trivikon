<section class="cover-profil" style="background-image: url('<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1920,566, '/images/static/'. $this->setting['career_hero_image'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>');">
    <img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1920,566, '/images/static/'. $this->setting['career_hero_image'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img img-fluid d-block d-sm-none">
    <div class="prelative container">
            <div class="box">
            <h1><?php echo $this->setting['career_hero_title'] ?></h1>
            <?php echo $this->setting['career_hero_content'] ?>
    </div>
</section>

<section class="sec-breadcrumb">
	<div class="prelative container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Karir</li>
			</ol>
			<div class="clear clearfix"></div>
		</nav>
	</div>
</section>

<section class="karir-sec-1">
    <div class="prelatife container my-5">
        <!-- <span><?php echo $this->setting['career1_intro_lefttitle'] ?></span> -->
        <span class="leftsn_ftn defaults insides_p"><?php echo $this->setting['career1_intro_lefttitle'] ?></span>
        <div class="prelatife container2 mx-auto inners_content prelatife">
            <div class="inner-text">
                <h3><?php echo $this->setting['career1_intro_subtitle'] ?></h3>
                <p class="email"><a href="mailto:<?php echo $this->setting['career1_email'] ?>"><?php echo $this->setting['career1_email'] ?></a></p><br>
                <p class="content"><?php echo $this->setting['career1_contact'] ?>
                </p>
                <div class="clear clearfix"></div>
            </div>
        </div>
    </div>
</section>

<section class="karir-sec-2">
    <div class="prelative container mx-auto">

        <div class="prelatife container2 mx-auto">
            <div class="inners_content">
                <h2 class="mt-0 mb-4 pb-3"><?php echo Tt::t('front', 'Posisi Tersedia'); ?></h2>
                <div class="lines-grey"></div>
                <div class="my-5"></div>

                <!-- start lists career -->
                <div class="list-widget-careers block-widget text-left pb-5">
                    <?php foreach ($list_karir as $key => $value): ?>
                    <div class="items">
                        <div class="tops">
                            <h3><?php echo $value->title ?></h3>
                        </div>
                        <div class="row default">
                            <div class="col-md-20 col-sm-20">
                                <h5><?php echo Tt::t('front', 'deskripsi pekerjaan'); ?></h5>
                                <?php echo $value->deskripsi ?>
                            </div>
                            <div class="col-md-20 col-sm-20">
                                <h5><?php echo Tt::t('front', 'kualifikasi'); ?></h5>
                                <?php echo $value->kualifikasi ?>
                            </div>
                            <div class="col-md-20 col-sm-20">
                                <h5><?php echo Tt::t('front', 'lokasi bekerja'); ?></h5>
                                <p><?php echo $value->lokasi_kerja ?></p>
                                <div class="clear height-50"></div>
                                <a href="#" data-id="collapseExample" data-minusl="50" class="btn btn-sents-cv toScroll"><?php echo Tt::t('front', 'KIRIM LAMARAN'); ?></a>
                            </div>
                        </div>
                    </div>
                    <!-- end items -->
                    <?php endforeach; ?>
                </div>
                <!-- end lists career -->
            </div>
        </div>
    </div>
</section>

<section class="default_sc hubungi-sec-2 prelatife abouts karirs_nform">
    <div class="prelatife container py-5">
        <span class="leftsn_ftn defaults insides_p"><?php echo Tt::t('front', 'karir'); ?> BMC Logistics</span>
        <div class="prelatife container2 d-block mx-auto my-5 py-4 pb-5 content-text2">
            <!-- <span>
                <?php echo Tt::t('front', 'karir'); ?> BMC Logistics
            </span> -->
            <h4><?php echo $this->setting['home_section3_title'] ?></h4>
            <?php echo $this->setting['home_section3_subtitle'] ?>
            <div class="pt-5"></div>
            <div class="clear"></div>
            <div class="blockns-form">
                <form method="post" action="#">
                  <div class="form-group">
                    <!-- <label for="exampleInputEmail1">Email address</label> -->
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo Tt::t('front', 'Nama'); ?>">
                    <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
                  </div>
                  <div class="form-group">
                    <!-- <label for="exampleInputEmail1">Email address</label> -->
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo Tt::t('front', 'Email'); ?>">
                    <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
                  </div>
                  <div class="form-group">
                    <!-- <label for="exampleInputEmail1">Email address</label> -->
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo Tt::t('front', 'Perusahaan'); ?>">
                    <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
                  </div>
                  <div class="form-group">
                    <!-- <label for="exampleInputEmail1">Email address</label> -->
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo Tt::t('front', 'Telepon'); ?>">
                    <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
                  </div>
                  <div class="form-group">
                    <label for="txPesan"><?php echo Tt::t('front', 'Pesan'); ?></label>
                    <textarea name="" id="" rows="1" class="form-control"></textarea>
                    <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
                  </div>


                  <button type="submit" class="btn btn-default mt-3 p-2 pl-5 pr-5"><?php echo Tt::t('front', 'Kirim Pesan'); ?></button>
                </form>
                <div class="clear"></div>
            </div>

            <div class="clear"></div>
        </div>

    </div>
</section>