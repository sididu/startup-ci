<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Obyek
                <a  href="<?= base_url('admin/obyeks') ?>" class="btn btn-warning">Kembali ke Daftar Obyek</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Perbaharui Obyek
                </div>
                <div class="panel-body">
                    <div class="row">
                        <?php if ($this->session->flashdata('message')): ?>
                        <div class="col-lg-12 col-md-12">
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?=$this->session->flashdata('message')?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="col-lg-6">
                            <form role="form" method="POST" action="<?=base_url('admin/obyeks/edit/'.$obyek->id)?>">
                                <div class="form-group">
                                    <label>Obyek Id</label>
                                    <input class="form-control" value="<?=$obyek->id?>" placeholder="Auto generated" disabled="1">
                                </div>
                                <div class="form-group">
                                    <label>Obyek Pidana</label>
                                    <input class="form-control" value="<?=$obyek->obyek_pidana?>" placeholder="Masukan obyek pidana" id="obyek_pidana" name="obyek_pidana">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Obyek</label>
                                    <input class="form-control" value="<?=$obyek->jenis_obyek?>" placeholder="Masukan jenis obyek" id="jenis_obyek" name="jenis_obyek">
                                </div>
                                <div class="form-group">
                                    <label>Nilai Kontrak</label>
                                    <input class="form-control" value="<?=$obyek->nilai_kontrak?>" placeholder="Masukan nilai kontrak" id="nilai_kontrak" name="nilai_kontrak">
                                </div>
                                <div class="form-group">
                                    <label>Kerugian Negara</label>
                                    <input class="form-control" value="<?=$obyek->kerugian_negara?>" placeholder="Masukan kerugian negara" id="kerugian_negara" name="kerugian_negara">
                                </div>
                                <div class="form-group">
                                    <label>Pemulihan Aset</label>
                                    <input class="form-control" value="<?=$obyek->pemulihan_aset?>" placeholder="Masukan pemulihan aset" id="pemulihan_aset" name="pemulihan_aset">
                                </div>
                                <div class="form-group">
                                    <label>ID Kategori Pidana</label>
                                    <select class="form-control" id="id_kategori_pidana" name="id_kategori_pidana">
                                        <?php if (count($pidanas)): ?>
                                            <?php foreach ($pidanas as $key => $pidana): ?>
                                                <option value="<?= $pidana['id'] ?>" <?= ($obyek->id_kategori_pidana == $pidana['kategori_pidana']) ? 'selected="selected"' : '' ?>> <?= $pidana['id'] ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit Button</button>
                            </form>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
