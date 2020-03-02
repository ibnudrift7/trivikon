<section class="block_subpage_outer">

  <div class="blocks_breadcrumb">
    <div class="prelatife container">
      <ol class="breadcrumb">
      <li><a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">Home</a></li>
      <li class="active">Where to Buy</li>
    </ol>
      <div class="clear"></div>
    </div>
  </div>

  <div class="subpage_default_outer">
    <div class="picture_illustrations p_network hidden-xs" style="background-image: url('<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1586,375, '/images/static/'.$this->setting['where_buy_image'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>')">
    </div>
    <?php if ($this->setting['where_buy_image_res']): ?>
    <div class="picture_full visible-xs"><img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(774, 867, '/images/static/'.$this->setting['where_buy_image_res'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img-responsive"></div>
    <?php endif ?>
    <div class="prelatife container">
        <div class="insides text-center">
          <div class="content-text ins_con_whereBuy">
            <h1 class="title-page">WHERE TO BUY</h1>
            <div class="clear height-15"></div>

            <div class="clear height-30"></div>
            <p>
               <strong>OFFICE &amp; FACTORY</strong><br>
                                    Jl. Bangkingan 97 <br>
                                    Surabaya - East Java<br>
                                    INDONESIA<br>
                                    (<a href="https://goo.gl/maps/hdwsECTPUrw" target="_blank">Click here</a> to view at google map)<br>
            </p>
            <p>
               <strong>Telephone.</strong><br>
                                    (031) 7505 999<br>
                (031) 9902 6599
            </p>
            <p>
               <strong>Email.<br>
               </strong><a href="http://mailto:admin@gapurasurya.com">admin@gapurasurya.com</a>
            </p>
            <div class="clear"></div>
          </div>

          <div class="box_form_filter_retails text-center hide hidden">
              <p>Find Gapura Surya&rsquo;s Product near your location</p>
              <div class="b_forms">
                <form action="<?php echo CHtml::normalizeUrl(array('/home/whereto')); ?>" method="get" class="form-inline">
                  <div class="form-group">
                    <label for="provinsi">Province</label>
                    <select name="provinsi" id="provinsi" class="form-control">
                      <option value="">Select</option>
                      <?php foreach ($provinsi as $key => $value): ?>
                      <option value="<?php echo $value->provinsi ?>"><?php echo $value->provinsi ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="kota">City</label>
                    <select name="kota" id="kota" class="form-control">
                      <option value="">Select</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-default btns_submit"><i class="fa fa-search"></i> &nbsp;Find Dealer</button>
                </form>
                <div class="clear"></div>
              </div>
            <div class="clear"></div>
          </div>
          
          <div class="clear height-50 hidden hide"></div>

          <div class="height-35"></div>
<?php if (count($dataAddres) > 0): ?>
  
          <div class="content-text network_pg">
            <h1 class="title-page">GAPURA SURYA&rsquo;S PRODUCT AT</h1>
            <div class="clear height-5"></div>
            <p><strong>
              <?php if ($_GET['kota']): ?>
              <?php echo $_GET['kota'] ?>,
              <?php endif ?>
              <?php if ($_GET['provinsi']): ?>
              <?php echo $_GET['provinsi'] ?>
              <?php endif ?>
            </strong></p>

            <div class="clear height-50"></div><div class="height-5"></div>

            <div class="row">
            <?php foreach ($dataAddres as $key => $value): ?>
              
              <div class="col-md-3 col-sm-6 mb30">
                <p><strong><?php echo $value->nama ?></strong><br />
                <?php echo $value->address_1 ?><br />
                <?php if ($value->address_2 != ''): ?>
                <?php echo $value->address_2 ?><br />
                <?php endif ?>
                <?php if ($value->telp != ''): ?>
                Telephone. <?php echo $value->telp ?><br />
                <?php endif ?>
                <?php if ($value->telp != ''): ?>
                Fax. <?php echo $value->fax ?><br />
                <?php endif ?>
                <?php if ($value->email != ''): ?>
                Email. <?php echo $value->email ?></p>
                <?php endif ?>
              </div>
            <?php endforeach ?>
            </div>
            <div class="clear"></div>
          </div>

<?php endif ?>

          <div class="clear height-30"></div>
        </div>      
    </div>
    <div class="clear"></div>
  </div>
  <!-- end subpage default -->

  <?php echo $this->renderPartial('//layouts/_block_bottom_form_info', array()); ?>
</section>
<script type="text/javascript">
$('#provinsi').live('change', function() {
  $.ajax({
    type: "POST",
    url: "<?php echo CHtml::normalizeUrl(array('/home/getKota')) ?>",
    dataType: "html",
    data: { provinsi: $('#provinsi').val()}
  }).done(function( msg ) {
    $("#kota").html(msg);
  })
})
<?php if ($_GET['provinsi']): ?>
$('#provinsi').val('<?php echo $_GET['provinsi'] ?>');
  $.ajax({
    type: "POST",
    url: "<?php echo CHtml::normalizeUrl(array('/home/getKota')) ?>",
    dataType: "html",
    data: { provinsi: $('#provinsi').val()}
  }).done(function( msg ) {
    $("#kota").html(msg);
    <?php if ($_GET['kota']): ?>
    $('#kota').val('<?php echo $_GET['kota'] ?>');
    <?php endif ?>
  })
<?php endif ?>

</script>
<style type="text/css">
  .ins_con_whereBuy p strong{}
  .ins_con_whereBuy p a{
    text-decoration: none;
    color: #000; font-size: 15px;
    font-weight: 400;
  }
</style>