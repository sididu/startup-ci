      <section class="content-header">
          <h1><a href='index.php' ><img class="push-left" src="<?= base_url() ?>assets/admin/dist/img/logo-kejaksaan.png" width="75"></a>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Register</li>
            <li class="active">Register Perkara Penyidikan Umum</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">PERKARA PENYIDIKAN UMUM</h3>
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
                      <h4>DATA KASUS</h4>
                      <!-- Judul Kasus -->
                      <div class="form-group">
                        <label>Judul Kasus</label>
                        <textarea class="form-control" rows="2" placeholder="Enter ..." disabled="disabled"></textarea>
                      </div>
                      <!-- Surat Perintah -->
                      <div class="form-group">
                        <label>Judul Surat</label>
                        <select class="form-control" >
                          <option selected="selected">Judul Surat</option>
                          option disabled="disabled">SURAT PERINTAH PENYELIDIKAN</option>
                          <option disabled="disabled">SURAT PERINTAH PENYIDIKAN UMUM</option>
                         <!--< <option>SURAT PENETAPAN TERSANGKA</option>-->
                          <option disabled="disabled">SURAT PERINTAH PENYIDIKAN KHUSUS</option>
                          <option disabled="disabled">SURAT PERINTAH PENGHENTIAN PERKARA</option>
                          <<!--option>SURAT PERINTAH PENAHANAN</option>-->
                          <!--<option disabled="disabled">SURAT PERINTAH GELEDAH / SITA</option>
                          <option>BERITA ACARA</option>-->
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
                      <!-- /.form group -->
                       <!-- Lokasi -->
                      <div class="form-group">
                        <label>Lokasi Kejadian</label>
                        <textarea class="form-control" rows="1" placeholder="Enter ..." disabled="disabled"></textarea>
                      </div>
                      <!-- Tanggal Kejadian -->
                      <div class="form-group">
                        <label>Tanggal Kejadian</label>
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control pull-right" id="datepicker" disabled="disabled">
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <h4>DATA KASUS</h4>
                      <div class="form-group">
                        <label>Kasus Posisi / Telaahan Masalah</label>
                        <form>
                          <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <!-- Kesimpulan -->
                      <div class="form-group">
                        <label>Kesimpulan</label>
                        <textarea class="form-control" rows="5" placeholder="Enter ..."></textarea>
                      </div> 
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                     <!-- Saran -->
                      <div class="form-group">
                        <label>Saran</label>
                        <textarea class="form-control" rows="5" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                  </div>
                  <hr>
              <!-- End CONTENT -->
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <h4>DATA Subyek</h4>
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

                    <div class="col-lg-4 col-md-4 col-sm-12">
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

                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <h4>DATA OBYEK</h4>
                      <div class="form-group">
                        <label>Benda Sitaan</label>
                        <input type="Nilai" class="form-control" placeholder=" ">
                        </div>
                      <!-- Nilai Anggaran / Kontrak -->
                      <div class="form-group">
                        <label>Nilai Anggara / Kontrak</label>
                        <input type="INT" class="form-control" placeholder=" ">
                      </div>

                      <!-- Kerugian Negarak -->
                      <div class="form-group">
                        <label>Kerugian Negara</label>
                        <input type="INT" class="form-control" placeholder=" ">
                      </div>
                      <!-- Pemulihan Aset -->
                      <div class="form-group">
                        <label>Pemulihan Aset</label>
                        <input type="INT" class="form-control" placeholder=" ">
                      </div>

                      <h4>DATA JAKSA</h4>
                      <div class="form-group">
                        <label>Jaksa Koordinator</label>
                        <select class="form-control select2" >
                          <option selected="selected">Riki Indera</option>
                          <option>Akbar Permana</option>
                          <option>Ade Pudjasari</option>
                          <option>Tonny Soerojo</option>
                          <option>Anastasia</option>
                          <option>John Laksmana</option>
                          <option>Shannine Davita</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Jaksa Anggota</label>
                        <select class="form-control select2" multiple="multiple" data-placeholder="Pilih anggota...">
                          <option>Akbar Permana</option>
                          <option>Ade Pudjasari</option>
                          <option>Tonny Soerojo</option>
                          <option>Anastasia</option>
                          <option>John Laksmana</option>
                          <option>Akbar Permana</option>
                          <option>Ade Pudjasari</option>
                          <option>Tonny Soerojo</option>
                          <option>Anastasia</option>
                          <option>John Laksmana</option>
                          <option>Shannine Davita</option>
                          <option>Shannine Davita</option>
                        </select>
                      </div>
                    </div>
                  </div>
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