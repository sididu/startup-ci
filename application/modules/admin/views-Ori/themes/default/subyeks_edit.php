<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Subyek
                <a  href="<?= base_url('admin/subyeks') ?>" class="btn btn-warning">Kembali ke Daftar Subyek</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Perbaharui Subyek
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
                            <form role="form" method="POST" action="<?=base_url('admin/subyeks/edit/'.$subyek->id)?>">
                                <div class="form-group">
                                    <label>Subyek Id</label>
                                    <input class="form-control" value="<?=$subyek->id?>" placeholder="Auto generated" disabled="1">
                                </div>
                                <div class="form-group">
                                    <label>Nama Terlapor </label>
                                    <input class="form-control" value="<?=$subyek->nama_terlapor?>" placeholder="Masukan kategori subyek" id="nama_terlapor" name="nama_terlapor">
                                </div>
                                <div class="form-group">
                                    <label>Lembaga</label>
                                    <input class="form-control" value="<?=$subyek->lembaga?>" placeholder="Masukan kategori subyek" id="lembaga" name="lembaga">
                                </div>
                                <div class="form-group">
                                    <label>Jabatan Resmi</label>
                                    <input class="form-control" value="<?=$subyek->jabatan_resmi?>" placeholder="Masukan kategori subyek" id="jabatan_resmi" name="jabatan_resmi">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <input class="form-control" value="<?=$subyek->status?>" placeholder="Masukan kategori subyek" id="status" name="status">
                                </div>
                                <div class="form-group">
                                    <label>Peran</label>
                                    <input class="form-control" value="<?=$subyek->peran?>" placeholder="Masukan kategori subyek" id="peran" name="peran">
                                </div>
                                <div class="form-group">
                                    <label>Pasal ID</label>
                                    <select class="form-control" id="id_pasal" name="id_pasal">
                                        <?php if (count($pasals)): ?>
                                            <?php foreach ($pasals as $key => $pasal): ?>
                                                <option value="<?= $pasal['id'] ?>" <?= ($subyek->id_pasal == $pasal['id']) ? 'selected="selected"' : '' ?>> <?= $pasal['pasal'] ?></option>
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
