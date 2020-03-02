
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

<div class="pt-5"></div>
<div class="pt-5 d-none d-sm-block"></div>

<section class="breadcumb2">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-30">
        <?php if (isset($_GET['type']) && $_GET['type'] == 'application'): ?>
        <div class="breadcumb-title">
            <p><span><img src="<?php echo $this->assetBaseurl; ?>process-kecil.png" alt=""></span> &nbsp;
              <a href="<?php echo CHtml::normalizeUrl(array('/product/view', 'category'=> intval($_GET['category']), 'lang'=>Yii::app()->language )); ?>"><?php echo ucwords($_GET['name']) ?> APPLICATION</a>
            </p>
        </div>
        <?php else: ?>
        <div class="breadcumb-title">
            <p><span><img src="<?php echo $this->assetBaseurl; ?>process-kecil.png" alt=""></span> &nbsp;
              <a href="#" style="cursor: default;"><?php echo ViewCategory::model()->getSubName($_GET['category']) ?></a>
              <span>&nbsp;&nbsp;&nbsp;<img src="<?php echo $this->assetBaseurl; ?>arrow-invest.png" alt=""></span>
              &nbsp;&nbsp;&nbsp;
              <a  href="#" style="cursor: default;"><?php echo ViewCategory::model()->getSubName($_GET['cat1']) ?></a>
              <span>&nbsp;&nbsp;&nbsp;<img src="<?php echo $this->assetBaseurl; ?>arrow-invest.png" alt=""></span>
              &nbsp;&nbsp;&nbsp;
              <a  href="#" style="cursor: default;"><?php echo ViewCategory::model()->getSubName($_GET['cat2']) ?></a>
              <!-- <span>&nbsp;&nbsp;&nbsp;<img src="<?php echo $this->assetBaseurl; ?>arrow-invest.png" alt=""></span>
              &nbsp;&nbsp;&nbsp;
              <a href="" onclick="javascript: return false;"><?php echo $data->description->name ?></a> --></p>
        </div>
        <?php endif ?>
      </div>
    </div>
  </div>
</section>

<section class="prd-sec-1">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-52 pt-4">
        <?php if (isset($_GET['cat2'])): ?>
        <div class="title py-3">
          <h2><?php echo ViewCategory::model()->getSubName($_GET['cat2']); ?> <?php echo ViewCategory::model()->getSubName($_GET['cat3']); ?></h2>
        </div>
        <?php endif ?>
        <!-- <div class="content">
          <?php // echo $data->description->desc ?>
        </div> -->
      </div>
      <!-- <div class="col-md-52">
        <div class="image-prd pt-3">
          <img class="w-100 img img-fluid" src="<?php echo Yii::app()->baseUrl; ?>/images/product/<?php echo $data->image ?>" alt="">
        </div>
      </div> -->
      <div class="col-md-60 pt-4 mt-3">
        <div class="row">
          <div class="col-md-60">
            <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Film Type</th>
                  <th scope="col">Target Market</th>
                  <th scope="col">Transparent/ Metallised/ Opaque</th>
                  <th scope="col">Coated/Uncoated</th>
                  <th scope="col">Film Grade</th>
                  <th scope="col">Technical Datasheet</th>
                  <th scope="col">Film Description</th>
                </tr>
              </thead>
              <tbody>
                <?php if (count($data) > 0): ?>
                  <?php foreach ($data as $key => $value): ?>
                  <tr>
                    <td class="text-left"><?php echo ViewCategory::model()->getSubName($value->category_id) ?></td>
                    <td class="text-left"><?php echo ViewCategory::model()->getSubName($value->sub_cat1) ?></td>
                    <td class="text-left"><?php echo ViewCategory::model()->getSubName($value->sub_cat2) ?></td>
                    <td class="text-left"><?php echo ViewCategory::model()->getSubName($value->sub_cat3) ?></td>
                    <td class="text-left"><?php echo $value->film_grade ?></td>
                    <td class="text-left"><?php echo $value->technical_data ?></td>
                    <td class="text-left"><?php echo $value->film_description ?></td>
                  </tr>
                  <?php endforeach ?>
                <?php endif ?>

              </tbody>
            </table>
            </div>
            <hr class="product-detail">
            <div class="bawah-tabel">
              <div class="title">
                <p>Would like to ask for more about this product?</p>
              </div>
              <div class="subtitle">
                <p>Please leave your details at the fields below, our sales representatives will shortly respond to you.</p>
              </div>
            </div>
            <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                          'type'=>'',
                          'enableAjaxValidation'=>false,
                          'clientOptions'=>array(
                              'validateOnSubmit'=>false,
                          ),
                          'htmlOptions' => array(
                              'enctype' => 'multipart/form-data',
                          ),
                      )); ?>
           <?php echo $form->errorSummary($model, '', '', array('class'=>'alert alert-danger')); ?>
            <?php if(Yii::app()->user->hasFlash('success')): ?>
                <?php $this->widget('bootstrap.widgets.TbAlert', array(
                    'alerts'=>array('success'),
                )); ?>
            <?php endif; ?>
            <div class="row default">
              <div class="col-md-18 col-sm-18">
                <div class="form-group">
                    <?php echo $form->textField($model, 'name', array('class'=>'form-control', 'placeholder'=>'Name')); ?>
                </div>
              </div>
              <div class="col-md-18 col-sm-18">
                <div class="form-group">
                    <?php echo $form->textField($model, 'company', array('class'=>'form-control', 'placeholder'=>'Company')); ?>
                </div>
              </div>
            </div>

            <div class="row default">
              <div class="col-md-18 col-sm-18">
                <div class="form-group">
                    <?php echo $form->textField($model, 'email', array('class'=>'form-control', 'placeholder'=>'Email')); ?>
                </div>
              </div>
              <div class="col-md-18 col-sm-18">
                <div class="form-group">
                  <?php echo $form->textField($model, 'phone', array('class'=>'form-control', 'placeholder'=>'Telephone')); ?>
                </div>
              </div>
              <div class="col-md-18 col-sm-18">
                  <button>Submit Inquiry <span><img src="<?php echo $this->assetBaseurl; ?>arrow-new.png" alt=""></span></button>
              </div>
            </div>
            <?php $this->endWidget(); ?>

            <hr class="product-detail">

            <div class="row">
              <div class="col-md-30">
                <div class="button-back-after text-left">
                  <a href="<?php echo CHtml::normalizeUrl(array('/product/index', 'lang'=>Yii::app()->language )); ?>"> <span class="pr-3"><img src="<?php echo $this->assetBaseurl; ?>back_prd.png" alt="" alt=""></span> Back to product category index</a>
                </div>
              </div>
              <div class="col-md-30">
                <div class="py-2 d-block d-sm-none"></div>

                <div class="button-back-after text-right d-none d-sm-block">
                  <a href="<?php echo CHtml::normalizeUrl(array('/product/application')); ?>">View OTHER product by industry application <span class="pl-3"><img src="<?php echo $this->assetBaseurl; ?>after-prd.png" alt="" alt=""></span> </a>
                </div>
                <div class="button-back-after text-right d-block d-sm-none">
                  <a href="<?php echo CHtml::normalizeUrl(array('/product/application')); ?>"><span class="pr-3"><img src="<?php echo $this->assetBaseurl; ?>back_prd.png" alt="" alt=""></span> View OTHER product by industry application</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<div class="pb-5"></div>
<div class="pb-5"></div>
<div class="pb-5"></div>

