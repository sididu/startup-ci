<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Kasus
                <a  href="<?= base_url('admin/kasuss') ?>" class="btn btn-warning">Kembali ke Daftar Sasus</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Perbaharui kasus
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
                        <div class="col-lg-12">
                            <form role="form" method="POST" action="<?=base_url('admin/kasuss/edit/'.$kasus->id_kasus)?>">
                                <!-- <div class="form-group">
                                    <label>Kasus Id</label>
                                    <input class="form-control" value="<?=$kasus->id_kasus?>" placeholder="Auto generated" disabled="1">
                                </div> -->
                                <div class="form-group">
                                    <label>Judul Kasus</label>
                                    <input class="form-control" value="<?=$kasus->judul_kasus?>" placeholder="Masukan judul kasus" id="judul_kasus" name="judul_kasus">
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Terlapor</label>
                                            <input class="form-control" value="<?=$kasus->nama_terlapor?>" placeholder="Masukan nama pelapor" id="nama_terlapor" name="nama_terlapor">
                                        </div>
                                        <div class="form-group">
                                            <label>Jabatan Resmi</label>
                                            <input class="form-control" value="<?=$kasus->jabatan_resmi?>" placeholder="Masukan nama pelapor" id="jabatan_resmi" name="jabatan_resmi">
                                        </div>
                                        <div class="form-group">
                                            <label>Lembaga</label>
                                            <input class="form-control" value="<?=$kasus->lembaga?>" placeholder="Masukan nama pelapor" id="lembaga" name="lembaga">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Waktu Kejadian</label>
                                            <input class="datepicker form-control" value="<?=$kasus->waktu_kejadian?>" placeholder="Masukan waktu kejadian" id="waktu_kejadian" name="waktu_kejadian">
                                        </div>
                                        <div class="form-group">
                                            <label>Lokasi Kejadian</label>
                                            <input class="form-control" value="<?=$kasus->lokasi_kejadian?>" placeholder="Masukan lokasi kejadian" id="lokasi_kejadian" name="lokasi_kejadian">
                                        </div>
                                        <div class="form-group">
                                            <label>Kasus Posisi</label>
                                            <input class="form-control" placeholder="Masukan kasusu posisi" id="kasusu_posisi" name="kasusu_posisi">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Masalah</label>
                                    <textarea class="form-control" rows="5" value="<?=$kasus->masalah?>" placeholder="Masukan masalah" id="masalah" name="masalah"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Kesimpulan</label>
                                    <textarea placeholder="Masukan kesimpulan" value="<?=$kasus->kesimpulan?>" class="form-control" rows="5" id="kesimpulan" name="kesimpulan"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Saran</label>
                                    <textarea class="form-control" rows="5" value="<?=$kasus->saran?>" placeholder="Masukan saran" id="saran" name="saran"></textarea>
                                </div>
                                <!-- <div class="form-group">
                                    <label>ID Surat</label>
                                    <select class="form-control" id="id_surat" name="id_surat">
                                        <?php if (count($surats)): ?>
                                            <?php foreach ($surats as $key => $surat): ?>
                                                <option value="<?= $surat['id_surat'] ?>" <?= ($kasus->id_surat == $surat['id_surat']) ? 'selected="selected"' : '' ?>> <?= $surat['nama'] ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div> -->
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
