<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header users-header">
                <h2>
                    Pasal
                    <a  href="<?= base_url('admin/pasals/create') ?>" class="btn btn-success">Tambah</a>
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
                    Daftar Pasal
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Pasal ID</th>
                                    <th>Pasal</th>
                                    <th>Ancaman Hukuman</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($pasals)): ?>
                                    <?php foreach ($pasals as $key => $list): ?>
                                        <tr class="odd gradeX">
                                            <td><?=$list['id']?></td>
                                            <td><?=$list['pasal']?></td>
                                            <td><?=$list['ancaman_hukuman']?></td>
                                            <td>
                                                <a href="<?= base_url('admin/pasals/edit/'.$list['id']) ?>" class="btn btn-info">ubah</a>  
                                                <a href="<?= base_url('admin/pasals/delete/'.$list['id']) ?>" class="btn btn-danger">hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr class="even gradeC">
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
                                    <th>Pasal ID</th>
                                    <th>Pasal</th>
                                    <th>Keterangan</th>
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