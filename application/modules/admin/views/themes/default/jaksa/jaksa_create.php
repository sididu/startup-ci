      <section class="content-header">
          <h1><a href='index.php' ><img class="push-left" src="<?= base_url() ?>assets/admin/dist/img/logo-kejaksaan.png" width="75"></a>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Administartor Data</li>
            <li class="active">Jaksa</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row"> 
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Jaksa Baru</h3>
                  <!-- <div class="box-tools pull-right">
                    <a href="<?= base_url() ?>admin/register/kasus" class="btn btn-warning">Back to list kasus</a>
                  </div> -->
                </div>
                <form role="form" method="POST" action="<?=base_url('admin/administrasi/jaksa/create')?>">
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
                          <h4>DATA JAKSA</h4>
                          <!-- Nama Lengkap -->
                          <div class="form-group">
                            <label>NIP</label>
                            <input type="text" class="form-control" placeholder="Enter ..." id="nip" name="nip"></input>
                          </div>

                          <!-- Alamat -->
                          <div class="form-group">
                            <label>Nama Jaksa</label>
                            <input type="text"  class="form-control" placeholder="Enter ..." id="nama_jaksa" name="nama_jaksa"></input>
                          </div>
                          <!-- Kota -->
                          <div class="form-group">
                            <label>Pangkat</label>
                            <input type="text" class="form-control" placeholder="Enter ..." id="pangkat" name="pangkat">
                          </div>
                        </div>
                          <!-- /.form group -->
                      </div>
                  <!-- End CONTENT -->
                
                  </div>
                  <div class="box-footer">
                    <a href="<?= base_url() ?>admin/administrasi/jaksa" class="btn btn-danger"> BATAL</a>
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