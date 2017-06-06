<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Tambah Surat RP 2
                <a  href="<?= base_url('admin/kasuss') ?>" class="btn btn-warning">Kembali ke list Kasus</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Tambah Surat RP 2
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="POST" action="<?= base_url('admin/kasuss/nextstep/' . $kasus->id) ?>">
                                <!-- <div class="form-group">
                                    <label>Id Input</label>
                                    <input value="<?= $kasus->id ?>" class="form-control" placeholder="Auto generated" disabled="1">
                                </div> -->
                                <div class="form-group">
                                    <label>Judul Kasus</label>
                                    <input class="form-control" value="<?= $kasus->judul_kasus ?>" placeholder="Enter perkara nomor surat" id="judul_kasus" name="judul_kasus">
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="panel panel-default">
                                            <div class="panel-body">Subyek
                                                <div class="form-group">
                                                    <label>Nama Terlapor</label>
                                                    <input class="form-control" value="<?= $kasus->nama_terlapor ?>" placeholder="Enter nama terlpor" id="nama_terlapor" name="nama_terlapor">
                                                </div>
                                                <div class="form-group">
                                                    <label>Jabatan Resmi</label>
                                                    <input class="form-control" value="<?= $kasus->jabatan_resmi ?>" placeholder="Enter jabatan resmi" id="jabatan_resmi" name="jabatan_resmi">
                                                </div>
                                                <div class="form-group">
                                                    <label>Lembaga</label>
                                                    <input class="form-control" value="<?= $kasus->lembaga ?>" placeholder="Enter lembaga" id="lembaga" name="lembaga">
                                                </div>
                                                <!-- <div class="form-group">
                                                    <label>Status</label>
                                                    <input class="form-control" placeholder="Enter status" id="status" name="status">
                                                </div>
                                                <div class="form-group">
                                                    <label>Peran</label>
                                                    <input class="form-control" placeholder="Enter peran" id="peran" name="peran">
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6">
                                        <div class="panel panel-default">
                                            <div class="panel-body">Obyek
                                                <div class="form-group">
                                                    <label>Obyek Pidana</label>
                                                    <input class="form-control" value="<?= $kasus->obyek_pidana ?>" placeholder="Enter obyek pidana" id="obyek_pidana" name="obyek_pidana">
                                                </div>
                                                <div class="form-group">
                                                    <label>Jenis Obyek</label>
                                                    <select class="form-control" id="jenis_obyek" name="jenis_obyek">
                                                                <option value="ekonomis">Ekonomis</option>
                                                                <option value="non ekonomis">Non Ekonomis</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nilai Kontrak</label>
                                                    <input class="form-control" value="<?= $kasus->nilai_kontrak ?>" placeholder="Enter nilai kontrak" id="nilai_kontrak" name="nilai_kontrak">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tanggal Surat</label>
                                            <input class="datepicker form-control" value="<?= $kasus->nilai_kontrak ?>" placeholder="Enter tanggal surat" id="tanggal_surat" name="tanggal_surat">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Surat</label>
                                            <input class="form-control" value="<?= $kasus->no_surat ?>" placeholder="Enter nomor surat" id="no_surat" name="no_surat">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Berhenti</label>
                                            <input class="datepicker form-control" value="<?= $kasus->tanggal_berhenti ?>" placeholder="Enter tanggal berhenti" id="tanggal_berhenti" name="tanggal_berhenti">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Jaksa</label>
                                            <!-- <input class="form-control" placeholder="Enter jaksa" id="id_jaksa" name="id_jaksa"> -->
                                            <select class="form-control" id="jaksa_name" name="jaksa_name">
                                                <option value="akbar">Akbar</option>
                                                <option value="satria">Satria</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <!-- <input type="submit" id="addjaksa"/> -->
                                            <button type="submit" id="addjaksa" class="btn btn-primary">Add Jaksa</button>
                                        </div>
                                            <textarea class="form-control" rows="4" id="nama_jaksa" name="nama_jaksa"></textarea>
                                            <div id="nama_jaksa"></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Judul Kasus</label>
                                    <input value="<?= $kasus->judul_kasus ?>" class="form-control" placeholder="Enter kasus judul kasus" id="judul_kasus" name="judul_kasus">
                                </div>
                                <div class="form-group">
                                    <label>Masalah</label>
                                    <input value="<?= $kasus->masalah ?>" class="form-control" placeholder="Enter kasus masalah" id="masalah" name="masalah">
                                </div>
                                <div class="form-group">
                                    <label>Kesimpulan</label>
                                    <input value="<?= $kasus->kesimpulan ?>" class="form-control" placeholder="Enter kasus kesimpulan" id="kesimpulan" name="kesimpulan">
                                </div>
                                <div class="form-group">
                                    <label>Saran</label>
                                    <input value="<?= $kasus->saran ?>" class="form-control" placeholder="Enter kasus saran" id="saran" name="saran">
                                </div>
                                <div class="form-group">
                                    <label>Nilai Kontrak</label>
                                    <input value="<?= $kasus->nilai_kontrak ?>" class="form-control" placeholder="Enter kasus nilai kontrak" id="nilai_kontrak" name="nilai_kontrak">
                                </div>
                                <div class="form-group">
                                    <label>Subyek Hukum</label>
                                    <input value="<?= $kasus->subyek_hukum ?>" class="form-control" placeholder="Enter kasus subyek hukum" id="subyek_hukum" name="subyek_hukum">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <input value="<?= $kasus->status ?>" class="form-control" placeholder="Enter kasus status" id="status" name="status">
                                </div>
                                <div class="form-group">
                                    <label>Lembaga</label>
                                    <input value="<?= $kasus->lembaga ?>" class="form-control" placeholder="Enter kasus lembaga" id="lembaga" name="lembaga">
                                </div>
                                <div class="form-group">
                                    <label>Kerugian Negara</label>
                                    <input value="<?= $kasus->kerugian_negara ?>" class="form-control" placeholder="Enter kasus kerugian negara" id="kerugian_negara" name="kerugian_negara">
                                </div>
                                <div class="form-group">
                                    <label>Pemulihan Aset</label>
                                    <input value="<?= $kasus->pemulihan_aset ?>" class="form-control" placeholder="Enter kasus pemulihan aset" id="pemulihan_aset" name="pemulihan_aset">
                                </div>
                                <div class="form-group">
                                    <label>Nama Jaksa</label>
                                    <select class="form-control" id="brand_id" name="brand_id">
                                        <?php if (count($brands)): ?>
                                            <?php foreach ($brands as $key => $brand): ?>
                                                <option value="<?= $brand['id'] ?>" <?= ($kasus->brand_id == $brand['id']) ? 'selected="selected"' : '' ?>> <?= $brand['description'] ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Register</label>
                                    <input value="<?= $kasus->register ?>" class="form-control" placeholder="Enter kasus Register" id="register" name="register">
                                </div>
                                
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
