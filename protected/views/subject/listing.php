<section class="outer_content_inside">
  <?php 
  $dn_kepentingan = TugasKepentingan::model()->findByPk($_GET['kepentingan_id']);
  $session = new CHttpSession;
  $session->open();
  $model_user = MeMember::model()->findByPk($session['login_member']['id']);
  ?>
  <section class="top_section mb-5 py-5">
    <div class="prelatife container">
      <div class="inside">
        <div class="row">
          <div class="col-md-6">
            <h2 class="mb-0">TUGAS</h2>
            <div class="clear clearfix"></div>
            <h5>(Kepentingan > <?php echo $dn_kepentingan->nama_kepentingan ?>)</h5>
          </div>
          <div class="col-md-6">
            <nav aria-label="breadcrumb" class="nbreadcrumb text-right">
              <ol class="breadcrumb m-0 text-right">
                <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>"><i class="fa fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Tugas</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $dn_kepentingan->nama_kepentingan ?></li>
              </ol>
            </nav>
            <div class="clear clearfix"></div>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </section>

  <section class="middle-content">
    <div class="prelatife container">
      <div class="inside">
        
        <div class="row">
          <div class="col-7">
            <?php if (is_array($mod_listdata) && count($mod_listdata) > 0): ?>
            <?php /*<a href="<?php echo CHtml::normalizeUrl(array('/tugasItem/index', 'kepentingan_id'=> $_GET['kepentingan_id'] )); ?>" class="btn btn-primary"><i class="fa fa-minus"></i> List Tugas Anda</a>
            &nbsp;&nbsp;&nbsp;
            <a href="<?php echo CHtml::normalizeUrl(array('/tugasItemPemberi/index', 'kepentingan_id'=> $_GET['kepentingan_id'])); ?>" class="btn btn-primary"><i class="fa fa-minus"></i> List Tugas Pemberi</a>
            */ ?>
            <a href="<?php echo CHtml::normalizeUrl(array('tugasItemPemberi/create', 'kepentingan_id'=> $_GET['kepentingan_id'])); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> &nbsp;Tambah Tugas</a>
            <?php endif; ?>
          </div>
          <div class="col-5">
            <div class="text-right">
               <small>
                <a href="#" onclick="window.history.back();" class="btn btn-link btns_back"><i class="fa fa-chevron-left"></i> BACK</a>
                <a href="<?php echo CHtml::normalizeUrl(array('/')); ?>" class="btn btn-link btns_back"><i class="fa fa-home"></i></a>
              </small>
            </div>
          </div>
        </div>
        <div class="py-3"></div>
        <!-- start content -->
        <?php if (is_array($mod_listdata) && count($mod_listdata) > 0): ?>

        <?php if(Yii::app()->user->hasFlash('success')): ?>
            <?php $this->widget('bootstrap.widgets.TbAlert', array(
                'alerts'=>array('success'),
                'fade'=> false,
            )); ?>
        <?php endif; ?>

        <div class="table-responsive">
          <table class="table table_set">
            <thead>
              <tr>
                <th>TUGAS</th>
                <th>STATUS</th>
              </tr>
            </thead>
            <tbody>

              <?php foreach ($mod_listdata as $key => $value): ?>
              <tr>
                <td>
                  <div class="d-inline-block picture mr-2 align-top">
                    <img src="https://placehold.it/50x50" alt="" class="img img-fluid img-rounded">

                      <div class="d-inline-block ncheck_tombol" data-str="check_tombol" data-id="<?php echo $value['id'] ?>">
                        <?php if ($model_user->id == $value['admin_id'] && intval($value['lock_selesai']) == 0): ?>
                          <a href="<?php echo CHtml::normalizeUrl(array('/home/subject_update', 'data_id'=> $value['id'], 'flex_selesai_pemberi'=> 1)); ?>" class="btn btn-small btn-default">SELESAI ACC</a>
                        <?php endif ?>

                        <?php if ($model_user->id == $value['member_id']): ?>
                          <?php if (intval($value['lock_start']) == 1 && intval($value['lock_selesai']) == 0): ?>
                          <a href="<?php echo CHtml::normalizeUrl(array('/home/subject_update', 'data_id'=> $value['id'], 'flex_selesai_pelaksana'=> 1)); ?>" class="btn btn-small btn-default">SELESAI TUGAS</a>  
                          <?php endif ?>
                          <?php if (intval($value['lock_start']) == 0): ?>
                          <a href="<?php echo CHtml::normalizeUrl(array('/home/subject_update', 'data_id'=> $value['id'], 'lock_start'=> 1)); ?>" class="btn btn-small btn-default">START</a>
                          <?php endif ?>
                        <?php endif ?>

                        <?php if (intval($value['lock_selesai']) == 1): ?>
                        <div class="fold_info"><small>TUGAS DONE</small></div>
                        <?php endif ?>
                      </div>

                  </div>
                  <div class="d-inline-block align-top">
                    <?php 
                    $color_prioritas = '';
                    if ($value['prioritas'] == 'urgent') {
                      $color_prioritas = 'red';
                    }  elseif ($value['prioritas'] == 'penting') {
                      $color_prioritas = 'yellow';
                    } else {
                      $color_prioritas = 'green';
                    }
                    ?>
                    <div class="d-inline-block info_r">
                      <div class="d-inline-block">
                        <p><span class="date"><i class="fa fa-calendar"></i> <small><?php echo date("d - M - Y", strtotime($value['date_input'])); ?></small></span> | 
                          <strong class="<?php echo $color_prioritas ?>"><?php echo strtoupper($value['prioritas']) ?></strong></p>
                      </div>
                      <div class="d-inline-block px-2">|</div>
                      <div class="d-inline-block">
                        <p class="to_name"><strong><?php echo $value['dari'] ?> >> <?php echo $value['kepada'] ?></strong></p>
                      </div>
                    </div>
                    <div class="clear clearfix"></div>
                    <div class="info_tugas">
                      <p><?php echo $value['deskripsi'] ?></p>
                      <div class="views_detail">
                        <small>
                          <?php if ($value['admin_id'] == $model_user->id): ?>
                          <a href="<?php echo CHtml::normalizeUrl(array('tugasItemPemberi/update', 'id'=> $value['id'])); ?>" class=""><i class="fa fa-chevron-right"></i> &nbsp; View Data</a>
                          <?php endif ?>
                          <?php if ($value['member_id'] == $model_user->id): ?>
                           <a href="<?php echo CHtml::normalizeUrl(array('tugasItem/update', 'id'=> $value['id'])); ?>" class=""><i class="fa fa-chevron-right"></i> &nbsp; View Data</a>
                          <?php endif ?>
                        </small>
                      </div>
                    </div>
                  </div>

                </td>
                <td>
                  <div class="d-inline-block">
                    <small>
                    <?php if ($value['date_selesai_user'] == '' || $value['date_selesai_user'] == NULL): ?>
                      <span class="date dt_selesai"><i class="fa fa-calendar"></i> <?php echo date("d - M - Y", strtotime($value['date_finish'])); ?></span>
                    <?php else: ?>
                      <span class="date dt_selesai"><i class="fa fa-calendar"></i> <?php echo date("d - M - Y", strtotime($value['date_selesai_user'])); ?></span>
                    <?php endif ?>
                    </small>
                  </div>
                  <div class="d-inline-block px-2">|</div>
                  <div class="d-inline-block block_countdown">
                    <strong>
                    <?php 
                    $time1 = time();
                    $time2 = strtotime($value['date_finish']);

                    $res_22 = $time2 - $time1;
                    $juml_echo =  round($res_22 / (60 * 60 * 24));
                    ?>
                    <?php if ($res_22 < 0): ?>
                    <span><?php echo $juml_echo . ' hari'; ?></span>  
                    <?php else: ?>
                    <span class="timer_countdown" data-countdown="<?php echo date("Y/m/d", strtotime($value['date_finish'])); ?>"></span>
                    <?php endif ?>
                    </strong>
                  </div>
                  <div class="clear clearfix"></div>
                  <?php if ($value['status_selesai'] == 'over'): ?>
                  <span class="status_selesai red"><b>Status:</b> <?php echo $value['status_selesai'] ?> / <?php echo $value['status'] ?></span>  
                  <?php else: ?>
                  <span class="status_selesai green"><b>Status:</b> <?php echo $value['status_selesai'] ?> / <?php echo $value['status'] ?></span>
                  <?php endif ?>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
          
          <?php else: ?>
          <h5>Sorry, Data is Empty!</h5>
          <?php endif ?>
        <!-- end content -->

        <div class="py-3"></div>
      </div>
    </div>
  </section>

  <div class="py-4"></div>

</section>

<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(document).ready(function (){
      
      $('.table').DataTable({
        "paging": false,
        "responsive": true,
        "ordering": false
      });

  });
</script>


<script src="<?php echo Yii::app()->baseUrl; ?>/bower_components/jquery.countdown/dist/jquery.countdown.min.js"></script>
<script type="text/javascript">
    $(function(){
      $('.block_countdown span.timer_countdown').each(function() {
        
        var $this = $(this), finalDate = $(this).attr('data-countdown');
        $this.countdown(finalDate, function(event) {
          $this.html(event.strftime('%D hari %H:%M:%S'));
        });

        $(this).on('finish.countdown', function(event){
          console.log("teste");
        });

      });
    });
  </script>