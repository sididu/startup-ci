<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header users-header">
                <h2>
                    Perkara
                    <a  href="<?= base_url('admin/perkara/create') ?>" class="btn btn-success">Add a new</a>
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
                    Perkara listing
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>No Surat</th>
                                    <th>Tgl Surat</th>
                                    <th>Judul</th>
                                    <th>Subyek Hukum</th>
                                    <th>Status</th>
                                    <th>Lembaga</th>
                                    <th>Nilai Kontrak</th>
                                    <th>Kerugian Negara</th>
                                    <th>Pemulihan Aset</th>
                                    <th>Jaksa</th>
                                    <th>Register</th>

                                    <!-- <th>QoH</th>
                                    <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($perkaras)): ?>
                                    <?php foreach ($perkaras as $key => $list): ?>
                                        <tr class="odd gradeX">
                                            <td><?=$list['id']?></td>
                                            <td><?=$list['no_surat']?></td>
                                            <td><?=$list['tgl_surat']?></td>
                                            <td><?=$list['judul_kasus']?></td>
                                            <td><?=$list['subyek_hukum']?></td>
                                            <td><?=$list['status']?></td>
                                            <td><?=$list['lembaga']?></td>
                                            <td><?=$list['nilai_kontrak']?></td>
                                            <td><?=$list['kerugian_negara']?></td>
                                            <td><?=$list['pemulihan_aset']?></td>
                                            <td><?=$list['brand_id']?></td>
                                            <td><?=$list['register']?></td>
                                            <td>
                                                <a href="<?= base_url('admin/perkara/edit/'.$list['id']) ?>" class="btn btn-info">edit</a>  
                                                <a href="<?= base_url('admin/perkara/delete/'.$list['id']) ?>" class="btn btn-danger">delete</a>
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
                                    <th>Name</th>
                                    <th>Model</th>
                                    <th>Tag Line</th>
                                    <th>Price</th>
                                    <th>QoH</th>
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