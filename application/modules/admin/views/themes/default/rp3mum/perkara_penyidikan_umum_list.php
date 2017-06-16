<section class="content-header">
  <h1><img class="push-left" src="<?= base_url() ?>assets/admin/dist/img/logo-kejaksaan.png" width="75">
    Dashboard
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Register</li>
    <li class="active">Perkara Penyidikan Umum</li>
  </ol>
</section>
        <!-- Main content -->
<section class="content">
  <div class="box box-default">
    <div class="box-header">
      <h3 class="box-title fc-toolbar">List Perkara Penyidikan Umum</h3>
      <div class="box-tools pull-right">
        <a href="<?= base_url() ?>admin/register/kasus" class="btn btn-app"><span class="badge bg-yellow">3</span><i class="fa fa-list-ul"></i>RP-1</a>
        <a href="<?= base_url() ?>admin/register/rp2" class="btn btn-app"><span class="badge bg-yellow">3</span><i class="fa fa-list-ul"></i>RP-2</a>
        <a href="<?= base_url() ?>admin/register/rp3mum" class="btn btn-app "><span class="badge bg-yellow">3</span><i class="fa fa-list-ul"></i>RP-3MUM</a>
        <a href="<?= base_url() ?>admin/register/rp3sus" class="btn btn-app "><span class="badge bg-yellow">3</span><i class="fa fa-list-ul"></i>RP-3SUS</a>
        <a href="#" class="btn btn-app btn-xs"><span class="badge bg-yellow">3</span><i class="fa fa-user"></i>Tahanan</a>
      </div>
    </div>
    <div class="box-body table-responsive">
      <!-- Content -->
          <table class="table table-hover">
              <tr>
                <th width="5%">ID</th>
                <th width="40%">Kasus Posisi</th>
                <th width="20%">Terlapor/Tersangka</th>
                <th width="20%">Obyek/Pidana</th>
                <th width="15%">Action</th>
              </tr>
              <tr class="accordion-toggle"  data-toggle="collapse" data-target="#collapseOne">
                <td>ID</td>
                <td>[Judul Kasus]</td>
                <td>[Lembaga]/[Jumlah Tersangka:]</td>
                <td>[Obyek] / [Aset Disita : Rp. ]</td>
                <td>
                  <div class="btn-group" role="group" aria-label="...">
                    <a href='<?= base_url('admin/register/rp3mum/edit/'.$list['id']) ?>' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a href='<?= base_url('admin/register/rp3mum/delete/'.$list['id']) ?>' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-minus-sign"></i></a>
                    <a href='<?= base_url() ?>admin/register/rp3mum/geledah' class="btn btn-default btn-sm">Geledah</a>
                    <a href='<?= base_url() ?>admin/register/rp3mum/naik_dik_sus' class="btn btn-success btn-sm">Dik-Sus</a>
                  </div>
                </td>
              </tr>
              <tr>
                <!-- <td></td> -->
                <td colspan="5">
                  <div id="collapseOne" class="collapse">
                    <table class="table table-striped" width="100%" border="0" cellspacing="5" cellpadding="5">
                      <tr>
                        <td valign="top" width="5%">
                          <a href="#">
                              <img class="media-object" src="<?= base_url() ?>assets/admin/dist/img/avatar.png" width="75px" >
                          </a>
                        </td>
                        <td valign="top" width="20%">
                          <p><span class="label label-default">PRINT-XX/F.2/Fd.1/XX/XXXX</span></p>         
                          <p>Nama: </p>
                          <p>Jabatan:</p>
                        </td>
                        <td valign="top" width="20%">
                          <!-- <div class="row"> -->
                            <!-- <div class="col-md-6"> -->
                              <p><span class="label label-default">01 JAN 2017</span></p>
                              <p>Status:</p>
                              <p>Masa Berlaku</p>
                            <!-- </div> -->
                            <!-- <div class="col-md-6">
                                  
                            </div> -->
                          <!-- </div> -->
                        </td>
                        <td valign="top" width="40%">
                          <p align="justify">Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS               <div class="btn-group pull-right" role="group" aria-label="SUBYEK">
                            <!-- </div> -->
                          </p>
                        </td>
                        <td width="15%">
                          <div class="btn-group" role="group" aria-label="...">
                            <a href='<?= base_url('admin/register/kasus/edit/'.$list['id']) ?>' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
                            <a href='<?= base_url('admin/register/kasus/delete/'.$list['id']) ?>' class="btn btn-default btn-sm">PT</a>
                            <a href='<?= base_url() ?>admin/register/rp2' class="btn btn-success btn-sm">SPP</a>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </div>
                </td>
              </tr>




<!--               <?php if (count($tabel_kasus)): ?>
                <?php foreach ($tabel_kasus as $key => $list): ?>
                    <tr>
                        <td><?=$list['id']?></td>
                        <td><?=$list['judul_kasus']?></td>
                        <td><?=$list['nama_lengkap']?></td>
                        <td><?=$list['kasus_posisi']?></td>    
                        <td>
                            <div class="btn-group" role="group" aria-label="...">
                              <a href='<?= base_url('admin/register/kasus/edit/'.$list['id']) ?>' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
                              <a href='<?= base_url('admin/register/kasus/delete/'.$list['id']) ?>' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-minus-sign"></i></a>
                              <a href='<?= base_url() ?>admin/register/rp2' class="btn btn-success btn-sm">LIDIK</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                    <tr>
                          <td>#</td>
                          <td>No data</td>
                          <td>No data</td>
                          <td>No data</td>
                          <td>
                            <div class="btn-group" role="group" aria-label="...">
                              <a href='#' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
                              <a href='#' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-minus-sign"></i></a>
                              <a href='#' class="btn btn-success btn-sm">LIDIK</a>
                            </div>
                        </td>
                      </tr>
            <?php endif; ?> -->

          </table>
      <!-- End Content -->
    </div>
  </div>
</section>