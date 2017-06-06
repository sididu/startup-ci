<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Kasus
                <a  href="<?= base_url('admin/kasuss') ?>" class="btn btn-warning">Kembali ke Daftar Kasus</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Tambah Kasus Baru
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
                            <form role="form" method="POST" action="<?=base_url('admin/kasuss/create')?>">
                                <!-- <div class="form-group">
                                    <label>Kasus Id Input</label>
                                    <input class="form-control" placeholder="Auto generated" disabled="1">
                                </div> -->
                                <div class="form-group">
                                    <label>Judul Kasus</label>
                                    <input class="form-control" placeholder="Masukan judul kasus" id="judul_kasus" name="judul_kasus">
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Terlapor</label>
                                            <input class="form-control" placeholder="Masukan nama terlapor" id="judul_kasus" name="judul_kasus">
                                        </div>
                                        <div class="form-group">
                                            <label>Jabatan Resmi</label>
                                            <input class="form-control" placeholder="Masukan jabatan resmi" id="judul_kasus" name="judul_kasus">
                                        </div>
                                        <div class="form-group">
                                            <label>Lembaga</label>
                                            <input class="form-control" placeholder="Masukan lembaga" id="nama_pelapor" name="nama_pelapor">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Waktu Kejadian</label>
                                            <input class="form-control" placeholder="Masukan waktu kejadian" id="waktu_kejadian" name="waktu_kejadian">
                                        </div>
                                        <div class="form-group">
                                            <label>Lokasi Kejadian</label>
                                            <input class="form-control" placeholder="Masukan lokasi kejadian" id="lokasi_kejadian" name="lokasi_kejadian">
                                        </div>
                                        <div class="form-group">
                                            <label>Kasus Posisi</label>
                                            <input class="form-control" placeholder="Masukan kasusu posisi" id="kasusu_posisi" name="kasusu_posisi">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Masalah</label>
                                    <textarea class="form-control" rows="5" placeholder="Masukan masalah" id="masalah" name="masalah"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Kesimpulan</label>
                                    <textarea placeholder="Masukan kesimpulan" class="form-control" rows="5" id="kesimpulan" name="kesimpulan"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Saran</label>
                                    <textarea class="form-control" rows="5" placeholder="Masukan saran" id="saran" name="saran"></textarea>
                                </div>
                                <!-- <div class="form-group">
                                    <label>ID Surat</label>
                                    <select class="form-control" id="id_surat" name="id_surat">
                                        <?php if (count($surats)): ?>
                                            <?php foreach ($surats as $key => $surat): ?>
                                                <option value="<?= $surat['id_surat'] ?>"><?= $surat['judul_surat'] ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div> -->
                                <button type="submit" class="btn btn-primary">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
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
