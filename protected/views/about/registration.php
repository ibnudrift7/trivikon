<section class="top-page-default pg-about">
  <!-- <div class="container"> -->
    <div class="inners_content">
      <p>About STPCICIP</p>
      <div class="clear height-10"></div><div class="height-3"></div>
      <h3>Registration on New Members</h3>
    </div>
  <!-- </div> -->
</section>

<section class="block-details-default details-content">
    <div class="container">
        <div class="breadcrumbs-block">
            <div class="row">
                <div class="col-md-40">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/about/index')); ?>">About STPCICP</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Registration on New Members</li>
                      </ol>
                    </nav>
                </div>
                <div class="col-md-20">
                    <a href="#" class="text-right backs_t_page d-block">Go to previous page</a>
                </div>
            </div>
        </div>
        <div class="clear height-50"></div>
        <div class="clear height-50"></div>
        <div class="clear height-15"></div>

        <div class="inner-content d-block mx-auto content-text2 mw585 box-block-registrations">
                <form method="post" action="#">
                  <div class="form-group">
                    <label for="Inputname">NAME</label>
                    <div class="in_input"><input type="text" class="form-control" id="Inputname" ></div>
                  </div>
                  <div class="form-group">
                    <label for="birth_2">DATE OF BIRTH</label>
                    <div class="in_input"><input type="text" class="form-control" id="birth_2" ></div>
                  </div>
                  <div class="form-group">
                    <label for="input_3">NATIONALITY</label>
                    <div class="in_input"><input type="text" class="form-control" id="input_3"  ></div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">PHONE</label>
                    <div class="in_input"><input type="text" class="form-control" id="exampleInputEmail1"  ></div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">EMAIL</label>
                    <div class="in_input"><input type="email" class="form-control" id="exampleInputEmail1"  ></div>
                  </div>
                  <div class="text-right float-right">
                  <button type="submit" class="btn btn-primary"></button>
                  </div>
              </form>
            <div class="clear"></div>
        </div>

        <div class="clear height-50"></div>
        <div class="clear height-50"></div>
    </div>

    <div class="blocks_blue_bottom">
        <div class="container text-center">
            <a href="#">More About STPCICIP</a>
            <div class="clear"></div>
        </div>
    </div>
</section>

<section class="content-2-col blocks-home sub-content-1">
    <div class="container width_less">

        <div class="lists-blocks-next-organize">
            <div class="row">
                <div class="col-md-20">
                    <div class="items text-center">
                        <h5 class="sub-title">History of STPCICP</h5>
                        <div class="pictures"><img src="<?php echo $this->assetBaseurl ?>p-about-sub-1.jpg" alt="" class="img-fluid"></div>
                        <div class="info">
                            <p>How the St. Peter Canisius International Catholic Parish started.</p>
                            <a href="#" class="btn btn-danger">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-20">
                    <div class="items text-center">
                        <h5 class="sub-title">Our Vision and Mission </h5>
                        <div class="pictures"><img src="<?php echo $this->assetBaseurl ?>p-about-sub-2.jpg" alt="" class="img-fluid"></div>
                        <div class="info">
                            <p>What is our objective, hopes and perspectives.</p>
                            <a href="#" class="btn btn-danger">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-20">
                    <div class="items text-center">
                        <h5 class="sub-title">Registration on New Members</h5>
                        <div class="pictures"><img src="<?php echo $this->assetBaseurl ?>p-about-sub-3.jpg" alt="" class="img-fluid"></div>
                        <div class="info">
                            <p>Come and join St. Peter Canisius International Catholic Parish.</p>
                            <a href="#" class="btn btn-danger">READ MORE</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="clear"></div>
    </div>
</section>

<section class="content-3-col blocks-pages sub-content-2">
    <div class="container">
        <h3 class="text-center">What’s Inside Our Church</h3>
        <div class="lists-blocks-next-about mt-65">
            <div class="row">
                <?php 
                $list_about = [1=>'Community Life', 'Prayer Group', 'Adult Bible Study', 'Fellowships', 'Community Service', 'Liturgy Services'];
                ?>
                <?php foreach ($list_about as $key => $value): ?>
                <div class="col-md-20 col-30">
                    <div class="items">
                        <div class="picturesn">
                                <img src="<?php echo $this->assetBaseurl ?>sn-thumb-pictures-about-<?php echo $key; ?>.jpg" alt="" class="img-fluid">
                            <div class="info">
                                <a href="<?php echo CHtml::normalizeUrl(array('/about/detail', 'pagename'=>$value)); ?>">
                                <div class="table-out">
                                    <div class="table-in">
                                    <h5><?php echo $value ?></h5>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
            <div class="clear clearfix"></div>
        </div>

        <div class="clear"></div>
    </div>
</section>