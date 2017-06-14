      <section class="content-header">
          <h1><a href='index.php' ><img class="push-left" src="<?= base_url() ?>assets/admin/dist/img/logo-kejaksaan.png" width="75"></a>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Administartor Data</li>
    <li class="active">Kategori Subyek</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row"> 
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Kategori Baru</h3>
                  <!-- <div class="box-tools pull-right">
                    <a href="<?= base_url() ?>admin/register/kasus" class="btn btn-warning">Back to list kasus</a>
                  </div> -->
                </div>
                <form role="form" method="POST" action="<?=base_url('admin/administrasi/kategori_subyek/create')?>">
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
                          <h4>DATA KATEGORI SUBYEK</h4>
                          <!-- Nama Lengkap -->
                          <div class="form-group">
                            <label>Kategori Subyek</label>
                            <input type="text" class="form-control" placeholder="Enter ..." id="kategori_subyek" name="kategori_subyek"></input>
                          </div>
                        </div>
                          <!-- /.form group -->
                      </div>
                  <!-- End CONTENT -->
                
                  </div>
                  <div class="box-footer">
                    <a href="<?= base_url() ?>admin/administrasi/kategori_subyek" class="btn btn-danger"> BATAL</a>
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