<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Perkara
                <a  href="<?= base_url('admin/perkara') ?>" class="btn btn-warning">Go back to perkara listing</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit perkara
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="POST" action="<?= base_url('admin/perkara/edit/' . $perkara->id) ?>">
                                <div class="form-group">
                                    <label>Perkara Id Input</label>
                                    <input value="<?= $perkara->id ?>" class="form-control" placeholder="Auto generated" disabled="1">
                                </div>
                                <div class="form-group">
                                    <label>Nomor Surat</label>
                                    <input value="<?= $perkara->no_surat ?>" class="form-control" placeholder="Enter perkara nomor surat" id="no_surat" name="no_surat">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Surat</label>
                                    <input value="<?= $perkara->tgl_surat ?>" class="form-control" placeholder="Enter perkara tanggal surat" id="tgl_surat" name="tgl_surat">
                                </div>
                                <div class="form-group">
                                    <label>Judul Kasus</label>
                                    <input value="<?= $perkara->judul_kasus ?>" class="form-control" placeholder="Enter perkara judul kasus" id="judul_kasus" name="judul_kasus">
                                </div>
                                <div class="form-group">
                                    <label>Masalah</label>
                                    <input value="<?= $perkara->masalah ?>" class="form-control" placeholder="Enter perkara masalah" id="masalah" name="masalah">
                                </div>
                                <div class="form-group">
                                    <label>Kesimpulan</label>
                                    <input value="<?= $perkara->kesimpulan ?>" class="form-control" placeholder="Enter perkara kesimpulan" id="kesimpulan" name="kesimpulan">
                                </div>
                                <div class="form-group">
                                    <label>Saran</label>
                                    <input value="<?= $perkara->saran ?>" class="form-control" placeholder="Enter perkara saran" id="saran" name="saran">
                                </div>
                                <div class="form-group">
                                    <label>Nilai Kontrak</label>
                                    <input value="<?= $perkara->nilai_kontrak ?>" class="form-control" placeholder="Enter perkara nilai kontrak" id="nilai_kontrak" name="nilai_kontrak">
                                </div>
                                <div class="form-group">
                                    <label>Subyek Hukum</label>
                                    <input value="<?= $perkara->subyek_hukum ?>" class="form-control" placeholder="Enter perkara subyek hukum" id="subyek_hukum" name="subyek_hukum">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <input value="<?= $perkara->status ?>" class="form-control" placeholder="Enter perkara status" id="status" name="status">
                                </div>
                                <div class="form-group">
                                    <label>Lembaga</label>
                                    <input value="<?= $perkara->lembaga ?>" class="form-control" placeholder="Enter perkara lembaga" id="lembaga" name="lembaga">
                                </div>
                                <div class="form-group">
                                    <label>Kerugian Negara</label>
                                    <input value="<?= $perkara->kerugian_negara ?>" class="form-control" placeholder="Enter perkara kerugian negara" id="kerugian_negara" name="kerugian_negara">
                                </div>
                                <div class="form-group">
                                    <label>Pemulihan Negara</label>
                                    <input value="<?= $perkara->pemulihan ?>" class="form-control" placeholder="Enter perkara pemulihan negara" id="pemulihan_negara" name="pemulihan_negara">
                                </div>
                                <div class="form-group">
                                    <label>Nama Jaksa</label>
                                    <select class="form-control" id="brand_id" name="brand_id">
                                        <?php if (count($brands)): ?>
                                            <?php foreach ($brands as $key => $brand): ?>
                                                <option value="<?= $brand['id'] ?>" <?= ($perkara->brand_id == $brand['id']) ? 'selected="selected"' : '' ?>> <?= $brand['description'] ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Register</label>
                                    <input value="<?= $perkara->register ?>" class="form-control" placeholder="Enter product register" id="register" name="register">
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
