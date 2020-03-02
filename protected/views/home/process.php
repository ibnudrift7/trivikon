<section class="insidespg-cover py-5" style="background-image: url(<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1920,804, '/images/static/'. $this->setting['process1_illus'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>);">
    <div class="prelative container py-5">
        <div class="row py-5">
            <div class="col-md-30 py-5">
                <div class="insides_intext">
                    <h3 class="mb-3"><?php echo $this->setting['process1_title'] ?></h3>
                    <div class="blocks_sn_lineyellow prelatife mb-3">
                        <div class="lines-yellow"></div>
                    </div>
                    <p><?php echo $this->setting['process1_content'] ?></p>
                    <div class="clear"></div>
                </div>

            </div>
            <div class="col-md-30"></div>
        </div>
    </div>
</section>

<section class="process-sec-1">
    <div class="prelative container pt-5">
        <div class="row">
            <div class="col-md-60 pt-5">
                <div class="title mx-auto text-center">
                    <p><?php echo $this->setting['process2_title'] ?></p>
                </div>
            </div>
            <div class="col-md-60">
                <div class="subtitle mx-auto text-center pb-5">
                    <?php echo $this->setting['process2_content'] ?>
                </div>
            </div>

            <?php for($i=1;$i<=3;$i++){?>
            <div class="col-md-20 pt-3">
                <div class="box-sec-1 mx-auto text-center">
                    <img class="mx-auto text-center" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(120,120, '/images/static/'. $this->setting['process1_lc_icon_'. $i] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="">
                    <div class="title-inside mx-auto py-2">
                        <p><?php echo $this->setting['process1_lc_title_'. $i] ?></p>
                    </div>
                    <div class="content mx-auto pb-5 mb-5">
                        <p><?php echo $this->setting['process1_lc_content_'. $i] ?></p>
                    </div>
                </div>
            </div>
            <?php }?>

        </div>
    </div>
</section>

<section class="bawah-sec-1 py-5">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-60 py-1 mx-auto text-center">
                <div class="bawah-tes-sec-1">
                    <img src="<?php echo $this->assetBaseurl; ?>../../images/static/<?php echo $this->setting['home3_logosn_iso3'] ?>" alt="">
                    <div class="content-above-logo-small mx-auto">
                        <?php echo nl2br($this->setting['home3_bottom_content']) ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>


<section class="about-sec-2">
    <?php 
        $criteria = new CDbCriteria;
        $criteria->with = array('description');
        $criteria->addCondition('active = "1"');
        $criteria->addCondition('description.language_id = :language_id');
        $criteria->params[':language_id'] = $this->languageID;
        $criteria->order = 't.date_input ASC';

        $models = new CActiveDataProvider('Material', array(
            'criteria'=>$criteria,
            'pagination'=>false,
        ));
    ?>

    <?php foreach ($models->getData() as $key => $value): ?>
    <?php /*
    <div class="row no-gutters">
        <div class="col-md-30 my-auto prelatife <?php echo ( (intval($key) + 1) % 2 == 0 )? 'order-md-2':'' ;?>">
            <div class="box-content px-5 mx-5">
                <div class="inners">
                    <div class="subtitle pb-2">
                        <p><span><img src="<?php echo $this->assetBaseurl; ?>process-kecil.png" alt=""></span> &nbsp;<?php echo $value->description->title ?></p>
                    </div>
                    <div class="title pb-2">
                        <p><?php echo $value->description->subcontent ?></p>
                    </div>
                    <div class="content">
                        <?php echo $value->description->content ?>
                    </div>

                    <div class="clear clearfix"></div>
                </div>
            </div>
        </div>
        <div class="col-md-30 <?php echo ( (intval($key) + 1) % 2 == 0 )? 'order-md-1':''; ?>">
            <div class="backgorund-blue">
                <img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(959,791, '/images/material/'. $value->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img d-block w-100">
            </div>
        </div>
    </div>
    */ ?>
    <?php if ((intval($key) + 1) % 2 != 0): ?>
    <div class="row no-gutters prelatife block_d_top t1">
        <div class="col-md-60">
            <div class="outers_abs_contents_blc">
                <div class="in_table">
                    <div class="prelative container">
                        <div class="row no-gutters">
                            <div class="col-md-30">
                                <div class="box-content">
                                    <div class="inners">
                                        <div class="subtitle pb-2">
                                            <p><span><img src="<?php echo $this->assetBaseurl; ?>process-kecil.png" alt=""></span> &nbsp;<?php echo $value->description->title ?></p>
                                        </div>
                                        <div class="title pb-2">
                                            <p><?php echo $value->description->subcontent ?></p>
                                        </div>
                                        <div class="content">
                                            <?php echo $value->description->content ?>
                                        </div>

                                        <div class="clear clearfix"></div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="col-md-30"></div>
                        </div>
                        <div class="clear clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-30 order-2 order-sm-1 my-auto prelatife">
            <div class="d-block d-sm-none">
                <div class="box-content px-5 mx-5">
                    <div class="inners">
                        <div class="subtitle pb-2">
                            <p><span><img src="<?php echo $this->assetBaseurl; ?>process-kecil.png" alt=""></span> &nbsp;<?php echo $value->description->title ?></p>
                        </div>
                        <div class="title pb-2">
                            <p><?php echo $value->description->subcontent ?></p>
                        </div>
                        <div class="content">
                            <?php echo $value->description->content ?>
                        </div>

                        <div class="clear clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-30 order-1 order-sm-2">
            <div class="backgorund-blue">
                <img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(959,791, '/images/material/'. $value->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img d-block w-100">
            </div>
        </div>
    </div>
    <?php endif ?>
    <?php if ((intval($key) + 1) % 2 == 0): ?>
        <div class="row no-gutters prelatife block_d_top t2">
            <div class="col-md-60">
                <div class="outers_abs_contents_blc">
                    <div class="in_table">
                        <div class="prelative container">
                            <div class="row no-gutters">
                                <div class="col-md-30"></div>
                                <div class="col-md-30">
                                    <div class="box-content rights">
                                        <div class="inners">
                                            <div class="subtitle pb-2">
                                                <p><span><img src="<?php echo $this->assetBaseurl; ?>process-kecil.png" alt=""></span> &nbsp;<?php echo $value->description->title ?></p>
                                            </div>
                                            <div class="title pb-2">
                                                <p><?php echo $value->description->subcontent ?></p>
                                            </div>
                                            <div class="content">
                                                <?php echo $value->description->content ?>
                                            </div>

                                            <div class="clear clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="clear clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-30">
                <div class="backgorund-blue">
                    <img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(959,791, '/images/material/'. $value->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img d-block w-100">
                </div>
            </div>
            <div class="col-md-30 my-auto prelatife">
                <div class="d-block d-sm-none">
                    <div class="box-content px-5 mx-5">
                        <div class="inners">
                            <div class="subtitle pb-2">
                                <p><span><img src="<?php echo $this->assetBaseurl; ?>process-kecil.png" alt=""></span> &nbsp;<?php echo $value->description->title ?></p>
                            </div>
                            <div class="title pb-2">
                                <p><?php echo $value->description->subcontent ?></p>
                            </div>
                            <div class="content">
                                <?php echo $value->description->content ?>
                            </div>

                            <div class="clear clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>
    <?php endforeach; ?>
    
    <!-- <div class="row no-gutters">
        <div class="col-md-30 my-auto prelatife order-md-2">
            <div class="box-content px-5 mx-5">
                <div class="inners">
                    <div class="subtitle pb-2">
                        <p><span><img src="<?php echo $this->assetBaseurl; ?>process-kecil.png" alt=""></span> &nbsp;bopp & pet Film production</p>
                    </div>
                    <div class="title pb-2">
                        <p>Trias Sentosa as the largest BOPP and BOPET films manufacturer in Indonesia</p>
                    </div>
                    <div class="content">
                        <p>We are one of the biggest major manufacturer of flexible packaging film manufacturer producing BOPP & PET Film Products. PT Trias Sentosa Tbk. has a worldwide sales and distribution network, from Indonesia to Asian countries and the Middle East. </p>
                    </div>
                    <div class="clear clearfix"></div>
                </div>
            </div>
        </div>
        <div class="col-md-30 order-md-1">
            <div class="backgorund-blue">
                <img src="<?php echo $this->assetBaseurl; ?>npage-aboutban.jpg" alt="" class="img d-block w-100">
            </div>
        </div>
    </div> -->
    
</section>
<style type="text/css">
    section.process-sec-1 .prelative.container .row .subtitle p {
        font-size: 18px;
    }
</style>
<script type="text/javascript">
    $(document).ready(function(){

        var s_height = $('.block_d_top').height();
        $('.block_d_top .outers_abs_contents_blc').css('height', s_height+"px");

        // var s_height2 = $('.block_d_top.t2').height();
        // $('.block_d_top.t2 .outers_abs_contents_blc').css('height', s_height2+"px");

    });
</script>