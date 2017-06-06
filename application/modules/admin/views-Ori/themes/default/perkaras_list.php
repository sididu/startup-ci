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
                                    <th>Surat Perintah</th>
                                    <th>Kasus</th>
                                    <th>Nilai</th>
                                    <th>Jaksa</th>
                                    <th>Registrasi</th>
                                    <th>Action</th>

                                    <!-- <th>QoH</th>
                                    <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($surats)): ?>
                                    <?php foreach ($surats as $key => $list): ?>
                                        <tr class="odd gradeX">
                                            <td><?=$list['id_surat']?></td>
                                            <td> - <?=$list['no_surat']?><br>
                                                 - <?=$list['tanggal_surat']?><br>
                                                 - <?=$list['tanggal_mulai']?><br>
                                                 - <?=$list['tanggal_berakhir']?>
                                            </td>
                                            <td>- Judul Kasus <br>
                                                - Terlapor <br>
                                                - Lembaga
                                            </td>
                                            <td>- Nilai Kontrak <br>
                                                - Kerugian Negara <br>
                                                - Pemulihan Aset
                                            </td>
                                            <td>- Nama Jaksa</td>
                                            <td>- RP-2 <br>
                                                - RP-3Mum <br>
                                                - RP-3Sus
                                            </td>
                                            
                                            <td>
                                                <a href="<?= base_url('admin/perkara/edit/'.$list['id_surat']) ?>" class="btn btn-info"><i class=" fa fa-pencil-square-o fa-lg"></i></a>  
                                                <a href="<?= base_url('admin/perkara/delete/'.$list['id_surat']) ?>" class="btn btn-danger"><i class=" fa fa-trash-o fa-lg"></i></a>
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
                                    <th>Surat Perintah</th>
                                    <th>Kasus</th>
                                    <th>Nilai</th>
                                    <th>Jaksa</th>
                                    <th>Registrasi</th>
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