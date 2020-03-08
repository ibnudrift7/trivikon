<section class="outer_content_inside">

  <section class="top_section mb-5 py-5">
    <div class="prelatife container">
      <div class="inside">
        <div class="row">
          <div class="col-md-6">
            <h2 class="mb-0">TUGAS</h2>
            <div class="clear clearfix"></div>
            <h5>(Nama Kepentingan)</h5>
          </div>
          <div class="col-md-6">
            <nav aria-label="breadcrumb" class="nbreadcrumb text-right">
              <ol class="breadcrumb m-0 text-right">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Tugas</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nama Kepentingan</li>
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
                <th>TUGAS</th>
                <th>STATUS</th>
              </tr>
            </thead>
            <tbody>
              <?php for ($i=1; $i < 7; $i++) { ?>
              <tr>
                <td>
                  <div class="d-inline-block picture mr-2 align-top">
                    <img src="https://placehold.it/60x60" alt="" class="img img-fluid img-rounded">
                  </div>
                  <div class="d-inline-block align-top">
                    <div class="d-inline-block info_r">
                      <div class="d-inline-block">
                        <p><span class="date"><i class="fa fa-calendar"></i> 15 - 03 - 2020</span> | <strong>URGENT</strong></p>
                      </div>
                      <div class="d-inline-block px-2">|</div>
                      <div class="d-inline-block">
                        <p class="to_name"><strong>Aditya Surya >> Meti Supriyanti</strong></p>
                      </div>
                    </div>
                    <div class="clear clearfix"></div>
                    <div class="info_tugas">
                      <p>Mintakan tanda tangan serah terima komplain Citraland Renov</p>
                    </div>
                  </div>

                </td>
                <td>
                  <div class="d-inline-block">
                    <span class="date dt_selesai"><i class="fa fa-calendar"></i> 15 - 03 - 2020</span>
                  </div>
                  <div class="d-inline-block px-2">|</div>
                  <div class="d-inline-block">
                    <span class="timer_countdown">1 Days 02:30:40</span>
                  </div>
                  <div class="clear clearfix"></div>
                  <span class="status_selesai"><b>Status:</b> Under / Belum</span>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- end content -->

      </div>
    </div>
  </section>

  <div class="py-4"></div>

</section>