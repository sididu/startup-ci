<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header users-header">
                <h2>
                    RP-2 PENYELIDIKAN <a href="#" class="btn btn-success">Cetak Laporan</a>
                    <!-- <a  href="<?= base_url('admin/rp2s/create1') ?>" class="btn btn-success">Tambah RP 2</a> -->
                </h2>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Daftar Register Perkara Penyelidikan
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Judul Kasus</th>
                                    <th>Surat</th>
                                    <th>Terlapor</th>
                                    <th>Obyek</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($rp2s)): ?>
                                    <?php foreach ($rp2s as $key => $list): ?>
                                        <tr class="odd gradeX">
                                            <td><?=$list['id']?></td>
                                            <td><?=$list['judul_kasus']?></td>
                                            <td><?=$list['no_surat']?><br>
                                                <?=$list['tanggal_surat']?><br>
                                                <?=$list['tanggal_berhenti']?><br>
                                                <?=$list['nama_jaksa']?><br>
                                            </td>
                                            <td><?=$list['nama_terlapor']?><br>
                                                <?=$list['lembaga']?><br>
                                                <?=$list['jabatan_resmi']?><br>
                                            </td>
                                            <td><?=$list['obyek_pidana']?><br>
                                                <?=$list['nilai_kontrak']?><br>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('admin/rp2s/edit/'.$list['id']) ?>" class="btn btn-info">ubah</a> 
                                                <!-- <a href="<?= base_url('admin/rp2s/delete/'.$list['id']) ?>" class="btn btn-danger">hapus</a> <br> -->
                                                <a href="#" class="btn btn-success">buat SPRINT</a> 
                                                <a href="<?= base_url('admin/rp2s/nextstep/'.$list['id']) ?>" class="btn btn-warning">naik DIK-UMUM</a>
                                                <a href="#" class="btn btn-danger">dihentikan/dialihkan</a> 
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr class="even gradeC">
                                        <td>No data</td>
                                        <td>No data</td>
                                        <td>No data</td>
                                        <td>No data</td>
                                        <td>No data</td>
                                        <td>
                                            <a href="#" class="btn btn-info">edit</a>  
                                            <a href="#" class="btn btn-danger">delete</a>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th>ID</th>
                                    <th>Judul Kasus</th>
                                    <th>Surat</th>
                                    <th>Terlapor</th>
                                    <th>Obyek</th>
                                    <th>Action</th>
                                </tr>
                            </tfooter>
                        </table>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>
</div>
<!-- /#page-wrapper -->