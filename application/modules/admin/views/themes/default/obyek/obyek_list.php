<section class="content-header">
  <h1><img class="push-left" src="<?= base_url() ?>assets/admin/dist/img/logo-kejaksaan.png" width="75">
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
    <div class="box-header">
      <h3 class="box-title fc-toolbar">Kasus Baru</h3>
      <div class="box-tools pull-right">
        <a href="<?= base_url() ?>admin/register/kasus/create" class="btn btn-app btn-xs"><span class="badge bg-yellow">3</span><i class="fa fa-plus"></i>RP-1</a>
        <a href="#" class="btn btn-app"><span class="badge bg-yellow">3</span><i class="fa fa-list-ul"></i>RP-1</a>
        <a href="#" class="btn btn-app"><span class="badge bg-yellow">3</span><i class="fa fa-list-ul"></i>RP-2</a>
        <a href="#" class="btn btn-app "><span class="badge bg-yellow">3</span><i class="fa fa-list-ul"></i>RP-3MUM</a>
        <a href="#" class="btn btn-app "><span class="badge bg-yellow">3</span><i class="fa fa-list-ul"></i>RP-3SUS</a>
      </div>
    </div>
    <div class="box-body table-responsive">
      <!-- Content -->
          <table class="table table-hover">
              <tr>
                <th width="5%">ID</th>
                <th width="40%">Kasus Posisi</th>
                <th width="20%">Terlapor</th>
                <th width="20%">Obyek</th>
                <th width="15%">Action</th>
              </tr>

              <?php if (count($tabel_kasus)): ?>
                <?php foreach ($tabel_kasus as $key => $list): ?>
                    <tr>
                        <td><?=$list['id']?></td>
                        <td><?=$list['judul_kasus']?></td>
                        <td><?=$list['nama_lengkap']?></td>
                        <td><?=$list['kasus_posisi']?></td>
                        
                        <!-- <td><?=$list['jabatan_resmi']?></td>
                        <td><?=$list['lembaga']?></td> -->
                        <!-- <td><?=$list['kasus_posisi']?></td> -->
    
                        <td>
                            <div class="btn-group" role="group" aria-label="...">
                              <a href='#' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
                              <a href='#' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-minus-sign"></i></a>
                              <a href='adm_kasus_baru.php' class="btn btn-success btn-sm">LIDIK</a>
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
                          <!-- <td>No data</td>
                          <td>No data</td> -->
                          <!-- <td>No data</td> -->
                          
                          <td>
                            <div class="btn-group" role="group" aria-label="...">
                              <a href='#' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
                              <a href='#' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-minus-sign"></i></a>
                              <a href='adm_kasus_baru.php' class="btn btn-success btn-sm">LIDIK</a>
                            </div>
                        </td>
                      </tr>
            <?php endif; ?>

          </table>
      <!-- End Content -->
    </div>
  </div>
</section>