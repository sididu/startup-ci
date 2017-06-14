      <section class="content-header">
          <h1><a href='index.php' ><img class="push-left" src="<?= base_url() ?>assets/admin/dist/img/logo-kejaksaan.png" width="75"></a>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Register</li>
            <li class="active">Register Benda Sitaan</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">REGISTER BENDA SITAAN</h3>
              <!-- <div class="box-tools pull-right">
                <a href="<?= base_url() ?>admin/register/kasus" class="btn btn-warning">Back to list kasus</a>
              </div> -->
            </div>
            <form role="form" method="POST" action="<?=base_url('admin/register/subyek/create')?>">
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
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <h4>DATA PELAPOR</h4>
                      <!-- Surat Perintah -->
                      <div class="form-group">
                        <label>Judul Surat</label>
                        <select class="form-control" >
                          <option selected="selected">Judul Surat</option>
                          <!--<option disabled="disabled">SURAT PERINTAH PENYELIDIKAN</option>
                          <option disabled="disabled">SURAT PERINTAH PENYIDIKAN UMUM</option>-->
                          <option>SURAT PENETAPAN TERSANGKA</option>
                          <!--<option disabled="disabled">SURAT PERINTAH PENYIDIKAN KHUSUS</option>
                          <option disabled="disabled">SURAT PERINTAH PENGHENTIAN PERKARA</option>-->
                          <option>SURAT PERINTAH PENAHANAN</option>
                          <!--<option disabled="disabled">SURAT PERINTAH GELEDAH / SITA</option>-->
                          <option>BERITA ACARA</option>
                        </select>
                      </div>
                      <!-- No. Surat -->
                      <div class="form-group">
                        <label>No. Surat</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                      <!-- /.form group -->
                      <!-- Tanggal Surat -->
                      <div class="form-group">
                        <label>Tanggal</label>
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control pull-right" id="datepicker">
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- Nama Lengkap -->
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                        <textarea class="form-control" rows="1" placeholder="Enter ..."></textarea>
                      </div>
                      <!-- Tempat Lahir -->
                      <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                      <!-- Tanggal Lahir -->
                      <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" placeholder="Enter ...">
                      </div>
                      <!-- Kebangsaan / Kewarganegaraan -->
                      <div class="form-group">
                        <label>Kebangsaan / Kewarganegaraan</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>

                      <!-- Tempat Tinggal -->
                      <div class="form-group">
                        <label>Tempat Tinggal</label>
                        <textarea class="form-control" rows="1" placeholder="Enter ..."></textarea>
                      </div>
                      <!-- Agama -->
                      <div class="form-group">
                        <label>Agama</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <h4>DATA PEKERJAAN</h4>
                      <!-- Jabatan Resmi -->
                      <div class="form-group">
                        <label>Jabatan Resmi</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                      <!-- Jabatan Lain -->
                      <div class="form-group">
                        <label>Jabatan Lain</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                      <!-- Institusi / Lembaga -->
                      <div class="form-group">
                        <label>Institusi / Lembaga</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                      <!-- Pendidikan -->
                      <div class="form-group">
                        <label>Pendidikan</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                 <!-- Kategori Subyek -->
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

                        <!-- Kesimpulan -->
                      <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" rows="5" placeholder="Enter ..."></textarea>
                      </div> 

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