<section class="breadcumb">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-30">
                <div class="investor">
                    <p>Investor relations</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="pt-5"></div>
<div class="pt-5 d-none d-sm-block"></div>
<div class="pt-3 d-none d-sm-block"></div>
<section class="breadcumb2">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-30">
                <div class="breadcumb-title">
                    <p><span><img src="<?php echo $this->assetBaseurl; ?>process-kecil.png" alt=""></span> &nbsp;<a href="#">INVESTOR RELATIONS</a><span>&nbsp;&nbsp;&nbsp;<img src="<?php echo $this->assetBaseurl; ?>arrow-invest.png" alt=""></span>&nbsp;&nbsp;&nbsp;<a href="#"><?php echo strtoupper($model->description->name) ?></a></p>
                </div>
            </div>
        </div>
        <div class="pt-5 d-none d-sm-block"></div>
        <div class="pt-2 d-none d-sm-block"></div>
        <div class="row">
            <div class="col-md-20">
                <div class="pilihan lefts_menu_definvestor">
                    <ul>
                        <?php foreach ($all_cat as $key => $value): ?>
                        <li class="active"><a href="<?php echo CHtml::normalizeUrl(array('/investor/index', 'category'=> $value->id)); ?>"><?php echo $value->description->name; ?></a></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-40">
                <div class="row">
                    <div class="col-md-60">
                        <div class="title">
                            <p><?php echo ucwords($model->description->name) ?></p>
                        </div>
                    </div>
                </div>

                <div class="row lists_arinvest_pdf">

                    <?php foreach ($model_pdf as $key => $value): ?>
                    <div class="col-md-30">
                        <div class="articles pt-4">
                            <div class="tanggal"><?php echo date('d F Y', strtotime($value->date_input)) ?></div>
                            <a href="#">
                                <?php if (Yii::app()->language == 'en'): ?>
                                <div class="title-article pt-3"><a download href="<?php echo Yii::app()->baseUrl.'/images/pdf/'.$value->file; ?>"><?php echo $value->nama_en ?></a></div>
                                <?php else: ?>
                                <div class="title-article pt-3"><a download href="<?php echo Yii::app()->baseUrl.'/images/pdf/'.$value->file; ?>"><?php echo $value->nama_id ?></a></div>
                                <?php endif ?>
                            </a>
                            <div class="downloads_pdf pt-3 pb-5">
                                <div class="d-inline-block align-middle pr-2">
                                    <img src="<?php echo $this->assetBaseurl ?>logo-pdf.png" alt="icon pdf" class="img img-fluid">
                                </div>
                                <div class="d-inline-block align-middle">
                                    <a download href="<?php echo Yii::app()->baseUrl.'/images/pdf/'.$value->file; ?>">Download File</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>

                </div>

            </div>
        </div>
    </div>
</section>
<div class="pb-5 d-none d-sm-block"></div>
<div class="pb-5"></div>


