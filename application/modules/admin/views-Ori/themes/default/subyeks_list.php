<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header users-header">
                <h2>
                    Subyek
                    <a  href="<?= base_url('admin/subyeks/create') ?>" class="btn btn-success">Tambah</a>
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
                    Daftar Subyek
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Subyek ID</th>
                                    <th>Nama Terlapor</th>
                                    <th>Lembaga</th>
                                    <th>Jabatan Resmi</th>
                                    <th>Status</th>
                                    <th>Peran</th>
                                    <th>ID Pasal</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($subyeks)): ?>
                                    <?php foreach ($subyeks as $key => $list): ?>
                                        <tr class="odd gradeX">
                                            <td><?=$list['id_subyek']?></td>
                                            <td><?=$list['nama_terlapor']?></td>
                                            <td><?=$list['lembaga']?></td>
                                            <td><?=$list['jabatan_resmi']?></td>
                                            <td><?=$list['status']?></td>
                                            <td><?=$list['peran']?></td>
                                            <td><?=$list['id_pasal']?></td>
                                            <td>
                                                <a href="<?= base_url('admin/subyeks/edit/'.$list['id_subyek']) ?>" class="btn btn-info">ubah</a>  
                                                <a href="<?= base_url('admin/subyeks/delete/'.$list['id_subyek']) ?>" class="btn btn-danger">hapus</a>
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
                                        <td>No data</td>
                                        <td>No data</td>
                                        <td>
                                            <a href="#" class="btn btn-info">ubah</a>  
                                            <a href="#" class="btn btn-danger">hapus</a>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th>Subyek ID</th>
                                    <th>Nama Terlapor</th>
                                    <th>Lembaga</th>
                                    <th>Jabatan Resmi</th>
                                    <th>Status</th>
                                    <th>Peran</th>
                                    <th>ID Pasal</th>
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