      <section class="content-header">
          <h1><a href='index.php' ><img class="push-left" src="<?= base_url() ?>assets/admin/dist/img/logo-kejaksaan.png" width="75"></a>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Laporan Kasus Baru</h3>
              <!-- <div class="box-tools pull-right">
                <a href="<?= base_url() ?>admin/register/kasus" class="btn btn-warning">Back to list kasus</a>
              </div> -->
            </div>
            <form role="form" method="POST" action="<?=base_url('admin/register/kasus/create')?>">
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
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <h4>DATA PELAPOR</h4>
                      <!-- Nama Lengkap -->
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="Enter ..." id="nama_lengkap" name="nama_lengkap"></input>
                      </div>

                      <!-- Alamat -->
                      <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" rows="2" placeholder="Enter ..." id="alamat" name="alamat"></textarea>
                      </div>
                      <!-- Kota -->
                      <div class="form-group">
                        <label>Kota</label>
                        <input type="text" class="form-control" placeholder="Enter ..." id="kota" name="kota">
                      </div>
                      <!-- KodePos -->
                      <div class="form-group">
                        <label>Kode Pos</label>
                        <input type="text" class="form-control" placeholder="Enter ..." id="kodepos" name="kodepos">
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <h4>DATA KASUS</h4>
                      <!-- Judul Kasus -->
                      <div class="form-group">
                        <label>Judul Kasus</label>
                        <textarea class="form-control" rows="2" placeholder="Enter ..." id="judul_kasus" name="judul_kasus"></textarea>
                      </div>
                      <!-- Lokasi -->
                      <div class="form-group">
                        <label>Lokasi Kejadian</label>
                        <textarea class="form-control" rows="1" placeholder="Enter ..." id="lokasi_kejadian" name="lokasi_kejadian"></textarea>
                      </div>
                      <!-- Tanggal Kejadian -->
                      <div class="form-group">
                        <label>Tanggal Kejadian</label>
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control pull-right" id="datepicker" id="tanggal_kejadian" name="tanggal_kejadian">
                        </div>
                        <!-- /.input group -->
                      </div>
                    </div>
                      <!-- /.form group -->

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <!-- text input -->
                      <h4>DATA SUBYEK</h4>
                      <div class="form-group">
                        <label>Terlapor</label>
                        <input type="text" class="form-control" placeholder="Enter ..." id="nama_terlapor" name="nama_terlapor">
                      </div>
                        <!-- textarea -->
                      <div class="form-group">
                        <label>Lokasi Kejadian</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." id="lokasi_kejadian-subyek" name="lokasi_kejadian-subyek"></textarea>
                      </div>

                        <!-- small box -->
                        <!-- text input -->
                      <div class="form-group">
                        <label> Lembaga</label>
                        <input type="text" class="form-control" placeholder="Enter ..." id="lembaga" name="lembaga">
                      </div>

                        <!-- /.box-header -->

                      <div class="form-group">
                        <label>Kategori Subyek</label>
                        <select class="form-control select2" style="width: 100%;" id="kategori_subyek" name="kategori_subyek">
                          <option selected="selected">SWASTA</option>
                          <option>PNS</option>
                          <option>Hakim</option>
                          <option>Pengacara</option>
                          <option>Jaksa</option>
                          <option>Gubernur</option>
                          <option>Walikota</option>
                        </select>
                      </div>
                        <!-- ./col -->
                    </div>
                  </div>
              <!-- End CONTENT -->
            
              </div>
              <div class="box-footer">
                <a href="<?= base_url() ?>admin/register/kasus" class="btn btn-danger"> BATAL</a>
                <div class="box-tools pull-right">
                  <button type="reset" href="#" class="btn btn-warning"> CLEAR</button>
                  <button type="submit" href="#" class="btn btn-success"> KIRIM</button>
                </div>
              </div>
            </form>

          </div>

          </section>