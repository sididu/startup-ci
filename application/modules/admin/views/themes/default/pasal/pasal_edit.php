      <section class="content-header">
          <h1><a href='index.php' ><img class="push-left" src="<?= base_url() ?>assets/admin/dist/img/logo-kejaksaan.png" width="75"></a>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Administartor Data</li>
            <li class="active">Pasal</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row"> 
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Ubah Pasal</h3>
                  <!-- <div class="box-tools pull-right">
                    <a href="<?= base_url() ?>admin/register/kasus" class="btn btn-warning">Back to list kasus</a>
                  </div> -->
                </div>
                <form role="form" method="POST" action="<?=base_url('admin/administrasi/pasal/edit/'.$tabel_pasal->id)?>">
                  <div class="box-body">
                      <?php if ($this->session->flashdata('message')): ?>
                          <div class="col-lg-12 col-md-12">
                              <div class="alert alert-info alert-dismissable">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                  <?=$this->session->flashdata('message')?>
                              </div>
                          </div>
                      <?php endif; ?>
                  <!-- Content -->
                    <!-- /.box-header -->
                      <div class="row"> 
                        <div class="col-lg-12 col-sm-12">
                          <h4>DATA PASAL</h4>
                          <!-- Nama Lengkap -->
                          <div class="form-group">
                            <label>Ayat</label>
                            <input type="text" value="<?=$tabel_pasal->ayat?>" class="form-control" placeholder="Enter ..." id="ayat" name="ayat"></input>
                          </div>

                          <!-- Alamat -->
                          <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" value="<?=$tabel_pasal->keterangan?>" class="form-control" placeholder="Enter ..." id="keterangan" name="keterangan"></input>
                          </div>
                          <!-- Kota -->
                          <div class="form-group">
                            <label>Jumlah Masa Hukuman</label>
                            <input type="text" value="<?=$tabel_pasal->jumlah_masa_hukuman?>" class="form-control" placeholder="Enter ..." id="jumlah_masa_hukuman" name="jumlah_masa_hukuman">
                          </div>
                        </div>
                          <!-- /.form group -->
                      </div>
                  <!-- End CONTENT -->
                
                  </div>
                  <div class="box-footer">
                    <a href="<?= base_url() ?>admin/administrasi/pasal" class="btn btn-danger"> BATAL</a>
                    <div class="box-tools pull-right">
                      <button type="reset" href="#" class="btn btn-warning"> CLEAR</button>
                      <button type="submit" href="#" class="btn btn-success"> KIRIM</button>
                    </div>
                  </div>
                </form>

              </div>

            </div>
          </div>

          </section>