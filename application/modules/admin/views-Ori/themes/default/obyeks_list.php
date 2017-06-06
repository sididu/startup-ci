<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header users-header">
                <h2>
                    Obyek
                    <a  href="<?= base_url('admin/obyeks/create') ?>" class="btn btn-success">Tambah</a>
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
                    Daftar Obyek
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Obyek ID</th>
                                    <th>Obyek Pidana</th>
                                    <th>Jenis Obyek</th>
                                    <th>Nilai Kontrak</th>
                                    <th>Kerugian Negara</th>
                                    <th>Pemulihan Aset</th>
                                    <th>ID Kategori Pidana</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($obyeks)): ?>
                                    <?php foreach ($obyeks as $key => $list): ?>
                                        <tr class="odd gradeX">
                                            <td><?=$list['id']?></td>
                                            <td><?=$list['obyek_pidana']?></td>
                                            <td><?=$list['jenis_obyek']?></td>
                                            <td><?=$list['nilai_kontrak']?></td>
                                            <td><?=$list['kerugian_negara']?></td>
                                            <td><?=$list['pemulihan_aset']?></td>
                                            <td><?=$list['id_kategori_pidana']?></td>
                                            <td>
                                                <a href="<?= base_url('admin/obyeks/edit/'.$list['id']) ?>" class="btn btn-info">ubah</a>  
                                                <a href="<?= base_url('admin/obyeks/delete/'.$list['id']) ?>" class="btn btn-danger">hapus</a>
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
                                    <th>Obyek ID</th>
                                    <th>Obyek Pidana</th>
                                    <th>Jenis Obyek</th>
                                    <th>Nilai Kontrak</th>
                                    <th>Kerugian Negara</th>
                                    <th>Pemulihan Aset</th>
                                    <th>ID Kategori Pidana</th>
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