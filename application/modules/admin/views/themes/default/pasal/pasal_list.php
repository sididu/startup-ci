<section class="content-header">
  <h1><img class="push-left" src="<?= base_url() ?>assets/admin/dist/img/logo-kejaksaan.png" width="75">
    Dashboard
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Administartor Data</li>
    <li class="active">Pasal Disangkakan</li>
  </ol>
</section>
        <!-- Main content -->
<section class="content">
  <div class="box box-default">
    <div class="box-header">
      <h3 class="box-title fc-toolbar">Daftar Pasal Disangkakan</h3>
      <div class="box-tools pull-right">
        <a href="<?= base_url() ?>admin/administrasi/pasal/create" class="btn btn-app btn-xs btn-success"><i class="fa fa-plus"></i>Tambah</a>
      </div>
    </div>
    <div class="box-body table-responsive">
      <!-- Content -->
          <table class="table table-hover">
              <tr>
                <th width="5%">ID</th>
                <th width="20%">Ayat</th>
                <th width="45%">Keterangan</th>
                <th width="20%">Jumlah Masa Hukuman</th>
                <th width="10%">Action</th>
              </tr>

              <?php if (count($tabel_pasal)): ?>
                <?php foreach ($tabel_pasal as $key => $list): ?>
                    <tr>
                        <td><?=$list['id']?></td>
                        <td><?=$list['ayat']?></td>
                        <td><?=$list['keterangan']?></td>
                        <td><?=$list['jumlah_masa_hukuman']?></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="...">
                              <a href='<?= base_url('admin/administrasi/pasal/edit/'.$list['id']) ?>' class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
                              <a href='<?= base_url('admin/administrasi/pasal/delete/'.$list['id']) ?>' class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-minus-sign"></i></a>
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
                              <a href='#' class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
                              <a href='#' class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-minus-sign"></i></a>
                            </div>
                        </td>
                      </tr>
            <?php endif; ?>

          </table>
      <!-- End Content -->
    </div>
  </div>
</section>