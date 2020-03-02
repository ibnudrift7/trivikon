<section class="top-page-default insides_pg pg-sacrament defaults_bigstatic">
  <!-- <div class="container"> -->
    <div class="inners_content">
      <h3>Sacraments</h3>
      <p>St. Peter Canisius International Catholic Parish</p>
    </div>
  <!-- </div> -->
</section>

<section class="content-2-col sub-content-1 block-page-sacraments-content">
    <div class="container">
        <div class="content-text2 inners-cont d-block mx-auto">
            <?php echo $this->setting['sacraments_hero_content']; ?>
        </div>
        
        <div class="clear"></div>
    </div>
</section>



<section class="content-3-col blocks-pages sub-content-2">
    <div class="container2">
        <div class="clear height-10"></div>
        <h3 class="text-center">Our Sacraments</h3>

        <div class="lists-blocks-next-about mt-65 lists-thumb-sacraments mx-auto">
                <?php 
                $list_about = [
                             1=>['page'=> 'baptism', 'title'=>'BAPTISM'],
                                ['page'=> 'confirmation', 'title'=>'CONFIRMATION'],
                                ['page'=> 'eucharist', 'title'=>'EUCHARISt'],
                                ['page'=> 'marriage', 'title'=>'MARRIAGE'],
                                ['page'=> 'anointing', 'title'=>'ANOINTING OF THE SICK'],
                                ['page'=> 'penance', 'title'=>'PENANCE / RECONCILIATION'],
                                ['page'=> 'funerals', 'title'=>'FUNERALS'],
                            ];
                ?>
                <?php foreach ($list_about as $key => $value): ?>
                    <div class="items">
                        <div class="picturesn">
                                <img src="<?php echo $this->assetBaseurl ?>sn-thumb-pict-sacraments-<?php echo $key ?>.jpg" alt="" class="img-fluid">
                            <?php 
                            $stn_name = str_replace('/', '-', $value['title']);
                            ?>
                            <div class="info">
                                <a href="<?php echo CHtml::normalizeUrl(array('/sacrament/detail', 'page'=>$value['page'], 'pagename'=>strtolower($stn_name) )); ?>">
                                <div class="table-out">
                                    <div class="table-in">
                                    <h5><?php echo $value['title'] ?></h5>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                <?php endforeach ?>
            <div class="clear clearfix"></div>
        </div>

        <div class="clear"></div>
    </div>
</section>