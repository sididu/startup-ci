<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Surat
                <a  href="<?= base_url('admin/surats') ?>" class="btn btn-warning">Kembali ke Daftar Surat</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Perbaharui Surat
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
                            <form role="form" method="POST" action="<?=base_url('admin/surats/edit/'.$surat->id_surat)?>">
                                <div class="form-group">
                                    <label>Surat Id</label>
                                    <input class="form-control" value="<?=$surat->id_surat?>" placeholder="Auto generated" disabled="1">
                                </div>
                                <div class="form-group">
                                    <label>Judul Surat</label>
                                    <input class="form-control" value="<?=$surat->judul_surat?>" placeholder="Masukan judul surat" id="judul_surat" name="judul_surat">
                                </div>
                                <div class="form-group">
                                    <label>Nomor Surat</label>
                                    <input class="form-control" value="<?=$surat->no_surat?>" placeholder="Masukan nomor surat" id="no_surat" name="no_surat">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Surat</label>
                                    <input class="datepicker form-control" value="<?=$surat->tanggal_surat?>" placeholder="Masukan tanggal surat" id="tanggal_surat" name="tanggal_surat">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Mulai</label>
                                    <input class="datepicker form-control" value="<?=$surat->tanggal_mulai?>" placeholder="Masukan tanggal mulai" id="tanggal_mulai" name="tanggal_mulai">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Berakhir</label>
                                    <input class="datepicker form-control" value="<?=$surat->tanggal_berakhir?>" placeholder="Masukan tanggal berakhir" id="tanggal_berakhir" name="tanggal_berakhir">
                                </div>
                                <div class="form-group">
                                    <label>Ketarangan</label>
                                    <input class="form-control" value="<?=$surat->keterangan?>" placeholder="Masukan keterangan" id="keterangan" name="keterangan">
                                </div>
                                <div class="form-group">
                                    <label>ID Jaksa</label>
                                    <select class="form-control" id="id_jaksa" name="id_jaksa">
                                        <?php if (count($jaksas)): ?>
                                            <?php foreach ($jaksas as $key => $jaksa): ?>
                                                <option value="<?= $jaksa['id_jaksa'] ?>" <?= ($surat->id_jaksa == $jaksa['id_jaksa']) ? 'selected="selected"' : '' ?>> <?= $jaksa['nama'] ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>ID Subyek</label>
                                    <select class="form-control" id="id_subyek" name="id_subyek">
                                        <?php if (count($subyeks)): ?>
                                            <?php foreach ($subyeks as $key => $subyek): ?>
                                                <option value="<?= $subyek['id_subyek'] ?>" <?= ($surat->id_subyek == $subyek['id_subyek']) ? 'selected="selected"' : '' ?>> <?= $subyek['nama_terlapor'] ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>ID Obyek</label>
                                    <select class="form-control" id="id_obyek" name="id_obyek">
                                        <?php if (count($obyeks)): ?>
                                            <?php foreach ($obyeks as $key => $obyek): ?>
                                                <option value="<?= $obyek['id_obyek'] ?>" <?= ($surat->id_obyek == $obyek['id_obyek']) ? 'selected="selected"' : '' ?>> <?= $obyek['obyek_pidana'] ?></option>
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
