<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header users-header">
                <h2>
                    Kasus
                    <a  href="<?= base_url('admin/kasuss/create') ?>" class="btn btn-success">Tambah</a>
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
                    Daftar Kasus
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Kasus ID</th>
                                    <th>Judul Kasus</th>
                                    <th>Terlapor</th>
                                    <!-- <th>Jabatan[subyek]</th>
                                    <th>Lembaga[subyek]</th> -->
                                    <!-- <th>Kategori Pidana[pidanas]</th> -->
                                    <!-- <th>Masalah</th>
                                    <th>Kesimpulan</th>
                                    <th>Saran</th>
                                    <th>ID Surat</th> -->
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($kasuss)): ?>
                                    <?php foreach ($kasuss as $key => $list): ?>
                                        <tr class="odd gradeX">
                                            <td><?=$list['id']?></td>
                                            <td><?=$list['judul_kasus']?></td>
                                            <td>- <?=$list['nama_terlapor']?><br>
                                                - <?=$list['jabatan_resmi']?> <br>
                                                - <?=$list['lembaga']?>

                                            </td>
                                            <!-- <td><?=$list['jabatan_resmi']?></td>
                                            <td><?=$list['lembaga']?></td> -->
                                            <!-- <td><?=$list['kasus_posisi']?></td> -->
                        
                                            <td>
                                                <a href="<?= base_url('admin/kasuss/edit/'.$list['id']) ?>" class="btn btn-info">ubah</a>  
                                                <a href="<?= base_url('admin/kasuss/delete/'.$list['id']) ?>" class="btn btn-danger">hapus</a>
                                                <a href="<?= base_url('admin/kasuss/nextstep/'.$list['id']) ?>" class="btn btn-warning">naik LID</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr class="even gradeC">
                                        <td>No data</td>
                                        <td>No data</td>
                                        <td>No data</td>
                                        <!-- <td>No data</td>
                                        <td>No data</td> -->
                                        <!-- <td>No data</td> -->
                                        
                                        <td>
                                            <a href="#" class="btn btn-info">ubah</a>  
                                            <a href="#" class="btn btn-danger">hapus</a>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th>Kasus ID</th>
                                    <th>Judul Kasus</th>
                                    <th>Terlapor</th>
                                    <!-- <th>Jabatan</th>
                                    <th>Lembaga</th> -->
                                    <!-- <th>Kategori Pidana[pidanas]</th> -->
                                    <th>Tindakan</th>
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