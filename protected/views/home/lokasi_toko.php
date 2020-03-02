<section class="default_sc top_inside_pg_default">
  <div class="out_table">
    <div class="in_table">
      <div class="prelatife container">
        <h1 class="sub_titlepage">Lokasi Penjualan Kami</h1>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</section>
<section class="default_sc insides_middleDefaultpages back-white">
  <div class="prelatife container">
    <div class="clear height-50"></div><div class="height-5"></div>
    <div class="content-text text-center">
        <p>Pelanggan perabotplastik.com dapat membeli produk kami dalam jumlah bebas di alamat <br>
          agen / distributor di bawah ini</p>
        <div class="clear height-20"></div>
        
        <div class="list_locaion_defaults_d">
<?php foreach ($dataAddress as $key => $value): ?>
          <div class="items">
            <div class="titles"><?php echo $key ?></div>
            <div class="clear height-20"></div>
<?php
$count_loc = count($value);
$val = array_chunk($value, 3);
?>
          <?php foreach ($val as $data_chunk): ?>
          <div class="row">
            <?php foreach ($data_chunk as $k => $v): ?>
              <?php if ($count_loc == 1): ?>
              <div class="col-md-12 col-sm-12">
              <?php else: ?>
              <div class="col-md-4 col-sm-4">
              <?php endif ?>
                <div class="item">
                  <p><b><?php echo $v->nama ?></b> <br>
                    <?php echo $v->address_1 ?><br />
                  <?php echo $v->address_2 ?><br />
                  <?php if ($v->telp != ''): ?>
                  P. <?php echo $v->telp ?><br />
                  <?php endif ?>
                  <?php if ($v->fax != ''): ?>
                  F. <?php echo $v->fax ?> <br>
                  <?php endif ?>
                  <?php if ($v->email != ''): ?>
                  E. <?php echo $v->email ?>
                  <?php endif ?>
                  </p>
                  <div class="clear"></div>
                </div>
              </div>
            <?php endforeach ?>
          </div>
          <?php endforeach ?>
            <div class="clear"></div>
          </div>
<?php endforeach ?>

          <div class="clear"></div>
        </div>
        <!-- end list download item -->
        <div class="clear height-50"></div>

        <div class="clear height-30"></div>
      <div class="clear"></div>
    </div>

    <div class="clear"></div>
  </div>
</section>