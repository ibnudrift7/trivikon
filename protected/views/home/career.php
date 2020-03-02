<section class="insidespg-cover py-5" style="background-image: url(<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1920,804, '/images/static/'. $this->setting['career_hero_image'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>);">
    <div class="prelative container py-5">
        <div class="row py-5">
            <div class="col-md-30 py-5">
                <div class="insides_intext">
                    <h3 class="mb-3"><?php echo $this->setting['career_hero_title'] ?></h3>
                    <div class="blocks_sn_lineyellow prelatife mb-3">
                        <div class="lines-yellow"></div>
                    </div>
                    <?php echo $this->setting['career_hero_content'] ?>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="col-md-30"></div>
        </div>
    </div>
</section>
<?php 
  $model = ListCareers::model()->findAll("t.status = 1");
?>
<div class="pb-5 d-none d-sm-block"></div>
<div class="pb-5 d-none d-sm-block"></div>
<div class="pb-5"></div>

<section class="career-sec-1">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-60">
        <div class="title">
          <p><span><img src="<?php echo $this->assetBaseurl; ?>process-kecil.png" alt=""></span> &nbsp;AVAILABLE POSITION AT pt trias sentosa Tbk</p>
        </div>
      </div>
      <div class="col-md-60 pos pt-5">
        <div class="title-bar pt-3">
          <div class="row">
            <div class="col-md-30 col-30">
              <div class="position-bar">
                <p>Position</p>
              </div>
            </div>
            <div class="col-md-30 col-30">
              <div class="sortir">
                <form class="form-inline float-right">
                  <div class="form-group">
                      <label class="pr-3" for="inputPassword6">Sort By</label>
                      <select id="inputState" class="form-control">
                      <option selected>Date</option>
                      </select>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr class="career">

    <?php foreach ($model as $key => $value){ ?>
      <div class="row pb-4">
        <div class="col-md-60">
          <div class="title-inside">
            <p><?php echo $value->posisi ?></p>
          </div>
        </div>
        <div class="col-md-20">
          <div class="job">
            <img src="<?php echo $this->assetBaseurl; ?>brief.png" alt="">
            <p><?php echo $value->nama_perusahaan ?></p>
          </div>
          <div class="location">
            <img src="<?php echo $this->assetBaseurl; ?>location.png" alt="">
            <p><?php echo $value->lokasi_perusahaan ?></p>
          </div>
          <div class="salary">
            <img src="<?php echo $this->assetBaseurl; ?>salary.png" alt="">
            <p><?php echo $value->gaji_sekitar ?></p>
          </div>

        </div>
        <div class="col-md-20">
          <div class="min-pend">
            <p class="title">Minimum Pendidikan</p>
            <p class="content"><?php echo $value->min_pendidikan ?></p>
          </div>
          <div class="min-pend">
            <p class="title">Minimum Pengalaman</p>
            <p class="content"><?php echo $value->min_pengalaman ?></p>
          </div>
        </div>
        <div class="col-md-20">
          <div class="deskripsi">
            <p class="title">Deskripsi Pekerjaan</p>
            <p class="content"><?php echo $value->deskripsi_pekerjaan ?></p>
            <div class="tombol">
              <button>Lamar Posisi Ini <span><img src="/trias/asset/images/arrow-new.png" alt=""></span></button>
            </div>

          </div>
        </div>
      </div>
      <hr class="career">
    <?php } ?>

  </div>
</section>

<div class="pb-5 d-none d-sm-block"></div>
<div class="pb-5 d-none d-sm-block"></div>
<div class="pb-5"></div>
