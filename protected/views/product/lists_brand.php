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
                    <a href="#" onclick="window.history.back();">
                        <p><span><img src="<?php echo $this->assetBaseurl; ?>arrow-back.png" alt=""></span>back</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <div class="pt-5"></div> -->
<div class="pt-5 d-none d-sm-block"></div>
<div class="pt-3 d-none d-sm-block"></div>


<section class="prdind-detail-sec-1">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-30">
                <div class="breadcumb-title">
                    <p><span><img src="<?php echo $this->assetBaseurl; ?>process-kecil.png" alt=""></span> &nbsp;<a href="#">PRODUCT BY INDUSTRY</a><span>&nbsp;&nbsp;&nbsp;<img src="<?php echo $this->assetBaseurl; ?>arrow-invest.png" alt=""></span>&nbsp;&nbsp;&nbsp;<a href="#"><?php echo strtoupper(strtolower($brand->description->title)) ?></a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-60">
                <div class="title-prd pt-5 pb-4 mb-2">
                    <h1><?php echo ucwords($brand->description->title) ?></h1>
                </div>
            </div>

            <div class="col-md-60">
                <div class="row">
                    <?php if (count($product->getData()) > 0): ?>
                    <?php foreach ($product->getData() as $key => $value): ?>
                    <div class="col-md-15">
                        <div class="box-detail">
                            <a href="<?php echo CHtml::normalizeUrl(array('/product/detail', 'id'=> $value->id )); ?>">
                                <img class="img img-fluid w-100" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(265,186, '/images/product/'. $value->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="<?php echo $value->description->name ?>" alt="">
                            </a>
                            <a href="<?php echo CHtml::normalizeUrl(array('/product/detail', 'id'=> $value->id )); ?>">
                                <h2 class="pt-2"><?php echo ucwords($value->description->name); ?></h2>
                            </a>
                        </div>
                    </div>
                    <?php endforeach ?>
                    <?php endif ?>
                </div>
                 <?php if (isset($_GET['brand'])): ?>
                <div class="clear height-30"></div>
                <div class="ns_backsprd">
                  <a href="<?php echo CHtml::normalizeUrl(array('/product/application/', 'lang'=>Yii::app()->language)); ?>" class="btn btn-link"><i class="fa fa-chevron-left"></i> Back</a>
                </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>

<div class="pb-5"></div>
<div class="pb-5 d-none d-sm-block"></div>
<div class="pb-3 d-none d-sm-block"></div>