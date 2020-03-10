<section class="outer_content_inside">

  <section class="top_section mb-5 py-5">
    <div class="prelatife container">
      <div class="inside">
        <div class="row">
          <div class="col-md-6">
            <h2>BERI TUGAS</h2>
          </div>
          <div class="col-md-6">
            <nav aria-label="breadcrumb" class="nbreadcrumb text-right">
              <ol class="breadcrumb m-0 text-right">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Subject Tugas</li>
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
          <div class="col">
            <a href="<?php echo CHtml::normalizeUrl(array('/tugasItem')); ?>" class="btn btn-primary"><i class="fa fa-minus"></i> List Tugas Anda</a>
          </div>
          <div class="col">
            <div class="text-right">
              <small><a href="#" onclick="window.history.back();" class="btn btn-link btns_back"><i class="fa fa-chevron-left"></i> BACK</a></small>
            </div>
          </div>
        </div>
        <div class="py-3"></div>

        <!-- start content -->
        <div class="table-responsive">
          <table class="table table_set">
            <thead>
              <tr>
                <th>Kepentingan</th>
                <th>Nama Kepentingan</th>
                <th>Total Tugas</th>
                <th>Selesai</th>
                <th>Belum</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($model as $key => $value): ?>
              <tr>
                <td><?php echo $value['kepentingan'] ?></td>
                <td><a class="line_under" href="<?php echo CHtml::normalizeUrl(array('/home/subject_list', 'kepentingan_id'=> $value['id'])); ?>"><?php echo $value['nama_kepentingan'] ?></a></td>
                <td><?php echo $value['total_tugas'] ?></td>
                <td><?php echo $value['n_selesai'] ?></td>
                <td><?php echo $value['n_belum'] ?></td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
        <!-- end content -->

      </div>
    </div>
  </section>

  <div class="py-4"></div>

</section>


<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('.table').DataTable();
  } );
</script>