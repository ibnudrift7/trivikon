
<section class="cover-profil" style="background-image: url('<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1920,566, '/images/solusi/'. $model->image2 , array('method' => 'adaptiveResize', 'quality' => '90')) ?>');">
    <img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1920,566, '/images/solusi/'. $model->image2 , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img img-fluid d-block d-sm-none">
    <div class="prelative container">
			<div class="box">
                    <?php if (Yii::app()->language == 'en'): ?>
					<p>Solution BMC Logistic</p>
                    <?php else: ?>
                    <p>Solusi BMC Logistic</p>
                    <?php endif ?>
					<h1><?php echo $model->description->title ?></h1>
			</div>
    </div>
</section>
<section class="sec-breadcrumb">
	<div class="prelative container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">Home</a></li>
				<li class="breadcrumb-item"><a href="#"><?php echo Tt::t('front', 'SOLUSI KAMI'); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><?php echo $model->description->title ?></li>
			</ol>
			<div class="clear clearfix"></div>
		</nav>
	</div>
</section>


<section class="open-sec-1">
    <div class="prelatife container">
        <span class="leftsn_ftn defaults insides_p">
        <?php if (Yii::app()->language == 'en'): ?>
        solution     
        <?php else: ?>
        solusi 
        <?php endif ?>
        BMC Logistics
        </span>
        <div class="prelatife container2 insides_content d-block mx-auto mb-5 prelatife">
            <div class="inner-content">
                    <div class="content">
                        <?php echo $model->description->subtitle ?>
                    </div>
                    <div class="row fitur">
                        <div class="col-md-30">
                            <div class="title">
                                <p>
                                    <?php echo Tt::t('front', 'Fitur utama di solusi'); ?> <?php echo $model->description->title ?> BMC Logistic
                                </p>
                            </div>
                            <?php echo $model->description->content ?>
                        </div>
                        <div class="col-md-30">
                            <div class="title">
                                <p>
                                    <?php echo Tt::t('front', 'Fasilitas utama di solusi'); ?> <?php echo $model->description->title ?> BMC Logistic
                                </p>
                            </div>
                            <?php echo $model->description->quote ?>
                        </div>
                        <div class="pdf">
                            <img src="<?php echo $this->assetBaseurl; ?>logo-pdf.png" alt="">
                            <a download href="<?php echo Yii::app()->baseUrl; ?>/images/solusi/<?php echo $model->brosur; ?>">
                            <span>Download <?php echo Tt::t('front', 'brosur solusi'); ?> <?php echo $sn_open; ?> BMC Logistic</span>
                            </a>
                        </div>
                    </div>
                </div>
            <div class="clear clearfix"></div>
        </div>
    </div>
</section>

<section class="open-sec-2">
    <div class="prelatife container">
        <span class="leftsn_ftn defaults white insides_p">
        <?php if (Yii::app()->language == 'en'): ?>
        success story     
        <?php else: ?>
        cerita sukses 
        <?php endif ?>
        BMC Logistics
        </span>
        <div class="prelatife insides_content d-block mx-auto pb-5 prelatife">
            <div class="pb-5">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-6 col-9"></div>
                    <div class="col-xl-25 col-lg-25 col-md-54 col-51">
                        <div class="d-block mx-auto content-text2">
                            <?php if (Yii::app()->language == 'id'): ?>
                            <span>
                                Pelajari Cerita Kesuksesan Solusi Ini
                            </span>
                            <p class="content">Solusi <?php echo $sn_open; ?> dari BMC Logistics telah memberikan jalan dan harapan baru bagi operasional untuk beragam jenis usaha klien kami. Silahkan jika anda ingin mendengar berbagai kisah solutif berdasar pengalaman kami, anda dapat menghubungi tim sales kami di:</p>
                            <p class="no-telp">081 650 3636 atau <a href="mailto:info@bmclogistic.co.id"> info@bmclogistic.co.id</a></p>
                            <p class="content">
                            Atau anda dapat meninggalkan data kontak di bawah ini untuk dapat kami hubungi lebih lanjut.
                            </p>
                            <?php else: ?>
                            <span>
                                Learn This Story of Solution Success
                            </span>
                            <p class="content">Solution <?php echo $sn_open; ?> from BMC Logistics has provided new avenues and hopes for operations for various types of business for our clients. Please if you want to hear various solution stories based on our experience, you can contact our sales team at:</p>
                            <p class="no-telp">081 650 3636 atau <a href="mailto:info@bmclogistic.co.id"> info@bmclogistic.co.id</a></p>
                            <p class="content">
                            Or you can leave the contact data below to contact us further.
                            </p>
                            <?php endif ?>
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
                    <div class="col-xl-30 col-lg-30">
                        <div class="img-open">
                            <!-- <img src="<?php echo $this->assetBaseurl; ?>open-sec-2-2.jpg" alt=""> -->
                            <img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(499,651, '/images/solusi/'. $model->image3 , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear clearfix"></div>
        </div>

    </div>
</section>

<section class="open-sec-3">
    <div class="prelative container">
        <div class="title">
            <?php if (Yii::app()->language == 'id'): ?>
            <h1>Lihat Solusi BMC Logistic Lainnya</h1>
            <?php else: ?>
            <h1>See Other BMC Logistics Solutions</h1>
            <?php endif ?>
        </div>
        <div class="py-3"></div>
        <div class="row">
            <?php foreach ($other as $key => $value): ?>
                <div class="col-xl-20 col-lg-20 col-md-30">
                    <div class="box">
                        <a href="<?php echo CHtml::normalizeUrl(array('/home/open', 'id'=>$value->id, 'page'=>Slug::Create($value->description->title))); ?>">
                        <img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(443,458, '/images/solusi/'. $value->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" class="img img-fluid" alt="">
                        <div class="inner-text">
                            <h1>
                                <?php echo ucwords($value->description->title); ?>
                            </h1>
                        </div>
                        </a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
