
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
<div class="pt-3 d-none d-sm-block"></div>

<section class="breadcumb2">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-30">
        <div class="breadcumb-title">
            <p><span><img src="<?php echo $this->assetBaseurl; ?>process-kecil.png" alt=""></span> &nbsp;<a href="<?php echo CHtml::normalizeUrl(array('/product/index', 'category'=> $data->category_id, 'lang'=>Yii::app()->language )); ?>"><?php echo $Categorys->description->name ?></a><span>&nbsp;&nbsp;&nbsp;<img src="<?php echo $this->assetBaseurl; ?>arrow-invest.png" alt=""></span>&nbsp;&nbsp;&nbsp;<a href="" onclick="javascript: return false;"><?php echo $data->description->name ?></a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="prd-sec-1">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-52 pt-4">
        <div class="title py-3">
          <h2><?php echo $data->description->name ?></h2>
        </div>
        <div class="content">
          <?php echo $data->description->desc ?>
        </div>
      </div>
      <div class="col-md-52">
        <div class="image-prd pt-3">
          <img class="w-100 img img-fluid" src="<?php echo Yii::app()->baseUrl; ?>/images/product/<?php echo $data->image ?>" alt="">
        </div>
      </div>
      <div class="col-md-52  pt-4 mt-3">
        <div class="row">
          <div class="col-md-60">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Type</th>
                  <th scope="col">Thickness (Micron)</th>
                  <!-- <th scope="col">mvtr <br> GR/M2.DAY</th>
                  <th scope="col">o2tr <br> CC/M2.DAY</th> -->
                  <th scope="col">Application</th>
                  <th scope="col">Data Sheet</th>
                </tr>
              </thead>
              <tbody>
                <?php if (count($data->tableSpecs) > 0): ?>
                  <?php foreach ($data->tableSpecs as $key => $value): ?>
                  <tr>
                    <td class="text-left"><?php echo $value->type ?></td>
                    <td class="text-left"><?php echo $value->thickness ?></td>
                    <!-- <td class="text-left"><?php echo ($value->mvtr)? $value->mvtr: '-';  ?></td>
                    <td class="text-left"><?php echo ($value->o2tr)? $value->o2tr: '-' ?></td> -->
                    <td class="text-left"><?php echo $value->key_features ?></td>
                    <td class="text-left">-</td>
                  </tr>
                  <?php endforeach ?>
                <?php endif ?>

              </tbody>
            </table>
            <hr class="product-detail">
            <div class="bawah-tabel">
              <div class="title">
                <p>Would like to ask for more about this product?</p>
              </div>
              <div class="subtitle">
                <p>Please leave your details at the fields below, our sales representatives will shortly respond to you.</p>
              </div>
            </div>
            <div class="row default">
              <div class="col-md-18 col-sm-18">
                <div class="form-group">
                    <input type="text" placeholder="Nama">
                    <?php //echo $form->textField($model, 'name', array('class'=>'form-control', 'placeholder'=>'Name')); ?>
                </div>
              </div>
              <div class="col-md-18 col-sm-18">
                
                <div class="form-group">
                    <input type="text" placeholder="Company">
                    <?php //echo $form->textField($model, 'company', array('class'=>'form-control', 'placeholder'=>'Company')); ?>
                </div>
              </div>
            </div>

            <div class="row default">
              <div class="col-md-18 col-sm-18">
                <div class="form-group">
                    <input type="text" placeholder="Email">
                    <?php //echo $form->textField($model, 'email', array('class'=>'form-control', 'placeholder'=>'Email')); ?>
                </div>
              </div>
              <div class="col-md-18 col-sm-18">
                <div class="form-group">
                  <input type="text" placeholder="Telepon">
                  <?php //echo $form->textField($model, 'phone', array('class'=>'form-control', 'placeholder'=>'Telephone')); ?>
                </div>
              </div>
              <div class="col-md-18 col-sm-18">
                <a href="<?php echo CHtml::normalizeUrl(array('/home/contact', 'lang'=>Yii::app()->language)); ?>">
                  <button>Submit Inquiry <span><img src="<?php echo $this->assetBaseurl; ?>arrow-new.png" alt=""></span></button>
                </a>
              </div>
            </div>
            <hr class="product-detail">

            <div class="row">
              <div class="col-md-30">
                <div class="button-back-after text-left">
                  <a href="<?php echo CHtml::normalizeUrl(array('/product/index', 'category'=> $data->category_id, 'lang'=>Yii::app()->language )); ?>"> <span class="pr-3"><img src="<?php echo $this->assetBaseurl; ?>back_prd.png" alt="" alt=""></span> Back to product category index</a>
                </div>
              </div>
              <div class="col-md-30">
                <div class="button-back-after text-right">
                  <a href="<?php echo CHtml::normalizeUrl(array('/product/application')); ?>">View OTHER product by industry application <span class="pl-3"><img src="<?php echo $this->assetBaseurl; ?>after-prd.png" alt="" alt=""></span> </a>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="col-md-18">
            <div class="image-kecil">
              <img class="img-fluid img" src="<?php echo Yii::app()->baseUrl; ?>/images/product/<?php echo $data->image2 ?>" alt="">
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</section>

<div class="pb-5"></div>
<div class="pb-5"></div>
<div class="pb-5"></div>

















<?php
/*
<?php
$data->data = unserialize($data->data);
?>
<div class="blocks_subpage_banner product mah152">
  <div class="container prelatife">
    <div class="clear h70"></div>
    <h3 class="sub_title_p">BUY COFFEE</h3>
    <div class="clear"></div>
    <div class="lines_browns_md tengah"></div>
    <div class="clear height-20"></div>

    <div class="clear"></div>
  </div>
</div>

<div class="clear"></div>
<div class="subpage product">

  <div class="block_product_category">
    <div class="container text-center prelatife">
      <div class="clear height-20"></div><div class="height-3"></div>
      <ul class="list-inline">
        <?php foreach ($categories as $key => $value): ?>
        <li <?php if ($_GET['category'] == $value->id): ?>class="active"<?php endif ?>><a href="<?php echo CHtml::normalizeUrl(array('/product/list', 'category'=>$value->id)); ?>"><?php echo $value->description->name ?></a></li>
        <?php endforeach ?>
      </ul>
      <div class="clear"></div>
    </div>
  </div>

  <div class="prelatife container">

    <div class="clear height-45"></div>
    <div class="back_product"><a href="#">Back</a></div>
    <div class="clear height-30"></div>

    <div class="detail_product">
        <div class="row">
          <div class="col-md-6">
            <div class="picture"><img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(600,600, '/images/product/'.$data->image , array('method' => 'resize', 'quality' => '90')) ?>" alt="" class="img-responsive"></div>
          </div>
          <div class="col-md-6">
            <div class="desc_right">
              <div class="clear h85"></div>

              <h2 class="title"><?php echo $data->description->name ?></h2>
              <?php if ($data->brand_id > 0): ?>
              <h6><span class="colors <?php echo ($data->brand_id == 1)? 'green':'' ?>"><?php if ($data->brand_id == 1): ?>SINGLE ORIGIN<?php else: ?>BLEND<?php endif ?></span></h6>
              <?php endif ?>
              <?php if ($data->description->subtitle != ''): ?>
              <span><?php echo $data->description->subtitle ?></span>
              <?php endif ?>
              <?php if ($data->data['feature'] != ''): ?>
              <div class="clear height-15"></div>
              <div class="origin">
                <small>ORIGIN</small>
                <div class="clear"></div>
                <?php echo $data->data['feature'] ?>
              </div>
              <?php endif ?>


              <div class="clear height-50"></div>
              <div class="box_order tengah">
                <?php if(Yii::app()->user->hasFlash('success')): ?>
                    <?php $this->widget('bootstrap.widgets.TbAlert', array(
                        'alerts'=>array('success'),
                    )); ?>
                <?php endif; ?>

                <?php if(Yii::app()->user->hasFlash('danger')): ?>
                    <?php $this->widget('bootstrap.widgets.TbAlert', array(
                        'alerts'=>array('danger'),
                    )); ?>
                <?php endif; ?>
                <form class="form-inline" action="<?php echo CHtml::normalizeUrl(array('addcart')); ?>" method="post">
                  <?php if (count($attributes) > 0): ?>
                    
                  <div class="row">
                    <div class="col-xs-5">
                      <div class="form-group">
                        <label for="">SIZE</label>
                        <select name="option" id="select-size" class="form-control w113">
                          <?php foreach ($attributes as $key => $value): ?>
                            <option value="<?php echo $value->id ?>"><?php echo $value->attribute ?></option>
                          <?php endforeach ?>
                        </select>
                      </div>
                    </div>
<?php
$json_array = array();
foreach ($attributes as $key => $value) {
  $json_array[$value->id] = $value->price;
}
?>
<script type="text/javascript">
  var jsonStr = '<?php echo json_encode($json_array) ?>';
  var jsonArray = JSON.parse(jsonStr);
  console.log(jsonArray);
</script>
                    <div class="col-xs-7">
                      <div class="form-group">
                        <label for="">GRIND</label>
                        <select name="optional[grind]" id="" class="form-control w236">
                            <option value="Whole beans">Whole Beans</option>
                            <option value="Espresso machine">Espresso Machine</option>
                            <option value="Filter / Drip">Filter / Drip</option>
                            <option value="Plunger">Plunger</option>
                            <option value="Chemex">Chemex</option>
                        </select>
                        <!-- <input type="text" class="form-control w236" value="<?php echo $data->data['material'] ?>"> -->
                      </div>
                    </div>
                  </div>
                  <div class="clear height-15"></div>


                  <?php endif; ?>

                  <div class="row">
                    <div class="col-xs-5">
                      <div class="form-group">
                        <label for="">QTY&nbsp;</label>
                        <input type="number" id="select-qty" name="qty" value="1" class="form-control">
                      </div>
                    </div>
                    <div class="col-xs-7 prelatife">
                      <div class="form-group">
                        <label for="">PRICE</label>
                        <input type="text" id="price-view" class="form-control wprice" value="<?php echo Cart::money($data->harga) ?>">
                      </div>
                      <input type="hidden" id="price-item" value="<?php echo $data->harga ?>">
                      <input type="hidden" name="id" value="<?php echo $data->id ?>">
                      <button type="submit" class="btn btn-default btns_def_addcart"></button>
                    </div>
                  </div>
                </form>
                <div class="clear"></div>
              </div>

              <div class="clear"></div>
            </div>
          </div>
        </div>
      
      <div class="clear height-40"></div>
      <div class="lines-grey"></div>
      <div class="clear height-45"></div>
      
      <div class="row default description">
        <div class="col-md-6">
          <h5>DESCRIPTION</h5>
          <?php echo $data->description->desc ?>
        </div>
        <div class="col-md-6">
          <h5>TASTING NOTES</h5>
          <?php echo $data->description->note ?>
        </div>
      </div>

      <div class="clear"></div>
    </div>
    <!-- end detail products -->

    <div class="clear height-25"></div>
    <div class="lines-grey"></div>
    <div class="clear height-45"></div>

    <div class="blocks_outers_products_data">
      <h5 class="sub_title text-center">YOU MIGHT ALSO LIKE</h5>
      <div class="clear height-20"></div><div class="height-5"></div><div class="height-3"></div>

<?php if ($product->getTotalItemCount() > 0): ?>
      <div class="lists_product_data">
        <div class="row">
          <?php foreach ($product->getData() as $key => $value): ?>
          <div class="col-md-3 col-sm-6">
            <div class="items">
              <div class="picts"><a href="<?php echo CHtml::normalizeUrl(array('/product/detail', 'id'=>$value->id)); ?>"><img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(300,300, '/images/product/'.$value->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img-responsive"></a></div>
              <div class="descs padding-top-15">
                <h4><a href="<?php echo CHtml::normalizeUrl(array('/product/detail', 'id'=>$value->id)); ?>"><?php echo $value->description->name ?></a></h4>
                <div class="clear"></div>
                <span class="colors <?php echo ($value->brand_id == 1)? 'green':'' ?>"><?php if ($value->brand_id == 1): ?>SINGLE ORIGIN<?php else: ?>BLEND<?php endif ?></span>
                <div class="clear"></div>
                <span class="desc_1"><?php echo $value->description->subtitle ?></span>
                <div class="clear"></div>
              </div>
            </div>
          </div>
          <?php endforeach ?>
        </div>
        <div class="clear"></div>
      </div>
<?php endif ?>

      <div class="clear height-20"></div>

      <div class="clear"></div>
    </div>

    <div class="clear"></div>
  </div>
</div>

<?php if (count($attributes) > 0): ?>
<script type="text/javascript">
$('#select-size').change(function() {
  var harga = jsonArray[$(this).val()];
  $('#price-view').val("$"+harga);
  $('#price-item').val(harga);
})
$('#select-qty').change(function() {
  var harga = jsonArray[$('#select-size').val()];
  var jmlItem =  $(this).val();
  $('#price-view').val("$"+(Math.round(harga*jmlItem*100) / 100));
})
</script>
<?php else:?>
<script type="text/javascript">
$('#select-qty').change(function() {
  var harga = $('#price-item').val();
  var jmlItem =  $(this).val();
  $('#price-view').val("$"+(Math.round(harga*jmlItem*100) / 100));
})
</script>
<?php endif;?>

*/ ?>