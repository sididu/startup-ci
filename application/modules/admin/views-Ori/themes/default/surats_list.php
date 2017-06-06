<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header users-header">
                <h2>
                    Surat
                    <a  href="<?= base_url('admin/surats/create') ?>" class="btn btn-success">Tambah</a>
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
                    Daftar Surat
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Surat ID</th>
                                    <th>Judul Surat</th>
                                    <th>Nomor Surat</th>
                                    <th>Tanggal Surat</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Berakhir</th>
                                    <th>Keterangan</th>
                                    <th>ID Jaksa</th>
                                    <th>ID Subyek</th>
                                    <th>ID surat</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($surats)): ?>
                                    <?php foreach ($surats as $key => $list): ?>
                                        <tr class="odd gradeX">
                                            <td><?=$list['id_surat']?></td>
                                            <td><?=$list['judul_surat']?></td>
                                            <td><?=$list['no_surat']?></td>
                                            <td><?=$list['tanggal_surat']?></td>
                                            <td><?=$list['tanggal_mulai']?></td>
                                            <td><?=$list['tanggal_berakhir']?></td>
                                            <td><?=$list['keterangan']?></td>
                                            <td><?=$list['id_jaksa']?></td>
                                            <td><?=$list['id_subyek']?></td>
                                            <td><?=$list['id_obyek']?></td>
                                            <td>
                                                <a href="<?= base_url('admin/surats/edit/'.$list['id_surat']) ?>" class="btn btn-info"><i class=" fa fa-pencil-square-o fa-lg"></i></a>  
                                                <a href="<?= base_url('admin/surats/delete/'.$list['id_surat']) ?>" class="btn btn-danger"><i class=" fa fa-trash-o fa-lg"></i></a>
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
                                    <th>Surat ID</th>
                                    <th>Judul Surat</th>
                                    <th>Nomor Surat</th>
                                    <th>Tanggal Surat</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Berakhir</th>
                                    <th>Keterangan</th>
                                    <th>ID Jaksa</th>
                                    <th>ID Subyek</th>
                                    <th>ID surat</th>
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