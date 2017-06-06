<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Register Perkara
                <a  href="<?= base_url('admin/products') ?>" class="btn btn-warning">Kembali ke list perkara</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Register perkara
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="POST" action="<?= base_url('admin/products/edit/' . $product->id) ?>">
                                <div class="form-group">
                                    <label>Perkara Id Input</label>
                                    <input value="<?= $product->id ?>" class="form-control" placeholder="Auto generated" disabled="1">
                                </div>
                                <div class="form-group">
                                    <label>Nomor Surat</label>
                                    <input value="<?= $product->no_surat ?>" class="form-control" placeholder="Enter product nomor surat" id="no_surat" name="no_surat">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Surat</label>
                                    <input value="<?= $product->tgl_surat ?>" class="form-control" placeholder="Enter product tanggal surat" id="tgl_surat" name="tgl_surat">
                                </div>
                                <div class="form-group">
                                    <label>Judul Kasus</label>
                                    <input value="<?= $product->judul_kasus ?>" class="form-control" placeholder="Enter product judul kasus" id="judul_kasus" name="judul_kasus">
                                </div>
                                <div class="form-group">
                                    <label>Masalah</label>
                                    <input value="<?= $product->masalah ?>" class="form-control" placeholder="Enter product masalah" id="masalah" name="masalah">
                                </div>
                                <div class="form-group">
                                    <label>Kesimpulan</label>
                                    <input value="<?= $product->kesimpulan ?>" class="form-control" placeholder="Enter product kesimpulan" id="kesimpulan" name="kesimpulan">
                                </div>
                                <div class="form-group">
                                    <label>Saran</label>
                                    <input value="<?= $product->saran ?>" class="form-control" placeholder="Enter product saran" id="saran" name="saran">
                                </div>
                                <div class="form-group">
                                    <label>Nilai Kontrak</label>
                                    <input value="<?= $product->nilai_kontrak ?>" class="form-control" placeholder="Enter product nilai kontrak" id="nilai_kontrak" name="nilai_kontrak">
                                </div>
                                <div class="form-group">
                                    <label>Subyek Hukum</label>
                                    <input value="<?= $product->subyek_hukum ?>" class="form-control" placeholder="Enter product subyek hukum" id="subyek_hukum" name="subyek_hukum">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <input value="<?= $product->status ?>" class="form-control" placeholder="Enter product status" id="status" name="status">
                                </div>
                                <div class="form-group">
                                    <label>Lembaga</label>
                                    <input value="<?= $product->lembaga ?>" class="form-control" placeholder="Enter product lembaga" id="lembaga" name="lembaga">
                                </div>
                                <div class="form-group">
                                    <label>Kerugian Negara</label>
                                    <input value="<?= $product->kerugian_negara ?>" class="form-control" placeholder="Enter product kerugian negara" id="kerugian_negara" name="kerugian_negara">
                                </div>
                                <div class="form-group">
                                    <label>Pemulihan Aset</label>
                                    <input value="<?= $product->pemulihan_aset ?>" class="form-control" placeholder="Enter product pemulihan aset" id="pemulihan_aset" name="pemulihan_aset">
                                </div>
                                <div class="form-group">
                                    <label>Nama Jaksa</label>
                                    <select class="form-control" id="brand_id" name="brand_id">
                                        <?php if (count($brands)): ?>
                                            <?php foreach ($brands as $key => $brand): ?>
                                                <option value="<?= $brand['id'] ?>" <?= ($product->brand_id == $brand['id']) ? 'selected="selected"' : '' ?>> <?= $brand['description'] ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Register</label>
                                    <input value="<?= $product->register ?>" class="form-control" placeholder="Enter product Register" id="register" name="register">
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
