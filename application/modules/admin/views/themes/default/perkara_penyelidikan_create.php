      <section class="content-header">
          <h1><a href='index.php' ><img class="push-left" src="<?= base_url() ?>assets/admin/dist/img/logo-kejaksaan.png" width="75"></a>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Register</li>
            <li class="active">Register Perkara Penyelidikan</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">REGISTRASI PERKARA PENYELIDIKAN</h3>
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
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <H4>DATA KASUS</H4>
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Judul Kasus</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                      </div>
                    <!-- CK Editor -->
                      <div class="form-group">
                        <label>Kasus Posisi</label>
                        <form>
                          <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </form>
                      </div>


                      <!-- textarea -->
                      <div class="form-group">
                        <label>Lokasi Kejadian</label>
                        <textarea class="form-control" rows="1" placeholder="Enter ..."></textarea>
                      </div>

                      <!-- small box -->
                      <!-- Date -->
                      <div class="form-group">
                        <label>Tanggal Surat</label>
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control pull-right" id="datepicker">
                        </div>
                        <!-- /.input group -->
                      </div>

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <H4>DATA SUBYEK</H4>
                      <!-- text input -->
                      <div class="form-group">
                        <label>Terlapor</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                      <!-- small box -->
                      <!-- text input -->
                      <div class="form-group">
                        <label> Lembaga</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>

                      <div class="form-group">
                        <label>Kategori Subyek</label>
                        <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">Swasta</option>
                          <option>PNS</option>
                          <option>Hakim</option>
                          <option>Pengacara</option>
                          <option>Jaksa</option>
                          <option>Gubernur</option>
                          <option>Walikota</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <h4>DATA OBYEK</h4>
                      <div class="form-group">
                        <label>Obyek Pidana</label>
                        <input type="Nilai" class="form-control" placeholder=" ">
                      </div>

                      <div class="form-group">
                        <label>Nilai Anggaran</label>
                        <input type="Nilai" class="form-control" placeholder=" ">
                      </div>

                      <h4>DATA JAKSA</h4>
                      <div class="col-lg-6 col-md-6 col-sm-12">
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
                      </div>

                    <!-- /.col -->

                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                          <label>Jaksa Anggota</label>
                          <select class="form-control select2" multiple="multiple" data-placeholder="Pilih angg">
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