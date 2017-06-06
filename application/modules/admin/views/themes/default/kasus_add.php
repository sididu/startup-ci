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
            <div class="box-body">
            <!-- Content -->
              <!-- /.box-header -->
                <div class="rows"> 

                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <h4>DATA PELAPOR</h4>
                    <!-- Nama Lengkap -->
                    <div class="form-group">
                      <label>Nama Lengkap</label>
                      <textarea class="form-control" rows="1" placeholder="Enter ..."></textarea>
                    </div>

                    <!-- Alamat -->
                    <div class="form-group">
                      <label>Alamat</label>
                      <textarea class="form-control" rows="1" placeholder="Enter ..."></textarea>
                    </div>
                    <!-- Kota -->
                    <div class="form-group">
                      <label>Kota</label>
                      <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                    <!-- KodePos -->
                    <div class="form-group">
                      <label>Kode Pos</label>
                      <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <h4>DATA KASUS</h4>
                    <!-- Judul Kasus -->
                    <div class="form-group">
                      <label>Judul Kasus</label>
                      <textarea class="form-control" rows="2" placeholder="Enter ..." ></textarea>
                    </div>
                    <!-- Lokasi -->
                    <div class="form-group">
                      <label>Lokasi Kejadian</label>
                      <textarea class="form-control" rows="1" placeholder="Enter ..."></textarea>
                    </div>
                    <!-- Tanggal Kejadian -->
                    <div class="form-group">
                      <label>Tanggal Kejadian</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="datepicker">
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
                      <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                      <!-- textarea -->
                    <div class="form-group">
                      <label>Lokasi Kejadian</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>

                      <!-- small box -->
                      <!-- text input -->
                    <div class="form-group">
                      <label> Lembaga</label>
                      <input type="text" class="form-control" placeholder="Enter ...">
                    </div>

                      <!-- /.box-header -->

                    <div class="form-group">
                      <label>Kategori Subyek</label>
                      <select class="form-control select2" style="width: 100%;">
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
                <a href="#" class="btn btn-warning"> CLEAR</a>
                <a href="#" class="btn btn-success"> KIRIM</a>
              </div>
            </div>
          </div>

          </section>