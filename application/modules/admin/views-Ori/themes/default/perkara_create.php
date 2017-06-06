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
                    Create new Perkara
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="POST" action="<?=base_url('admin/perkara/create')?>">
                                <div class="form-group">
                                    <label>Perkara Id Input</label>
                                    <input class="form-control" placeholder="Auto generated" disabled="1">
                                </div>
                                <div class="form-group">
                                    <label>Nomor Surat</label>
                                    <input class="form-control" placeholder="Enter perkara nomor surat" id="no_surat" name="no_surat">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Surat</label>
                                    <input class="form-control" placeholder="Enter perkara tanggal surat" id="tgl_surat" name="tgl_surat">
                                </div>
                                <div class="form-group">
                                    <label>Judul Kasus</label>
                                    <input class="form-control" placeholder="Enter perkara judul kasus" id="judul_kasus" name="judul_kasus">
                                </div>
                                <div class="form-group">
                                    <label>Masalah</label>
                                    <input class="form-control" placeholder="Enter perkara masalah" id="masalah" name="masalah">
                                </div>
                                <div class="form-group">
                                    <label>Kesimpulan</label>
                                    <input class="form-control" placeholder="Enter perkara kesimpulan" id="kesimpulan" name="kesimpulan">
                                </div>
                                <div class="form-group">
                                    <label>Saran</label>
                                    <input class="form-control" placeholder="Enter perkara saran" id="saran" name="saran">
                                </div>
                                <div class="form-group">
                                    <label>Nilai Kontrak</label>
                                    <input class="form-control" placeholder="Enter perkara nilai kontrak" id="nilai_kontrak" name="nilai_kontrak">
                                </div>
                                <div class="form-group">
                                    <label>Subyek Hukum</label>
                                    <input class="form-control" placeholder="Enter perkara subyek hukum" id="subyek_hukum" name="subyek_hukum">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <input class="form-control" placeholder="Enter perkara status" id="status" name="status">
                                </div>
                                <div class="form-group">
                                    <label>Lembaga</label>
                                    <input class="form-control" placeholder="Enter perkara lembaga" id="lembaga" name="lembaga">
                                </div>
                                <div class="form-group">
                                    <label>Kerugian Negara</label>
                                    <input class="form-control" placeholder="Enter perkara kerugian negara" id="kerugian_negara" name="kerugian_negara">
                                </div>
                                <div class="form-group">
                                    <label>Pemulihan Negara</label>
                                    <input class="form-control" placeholder="Enter perkara pemulihan negara" id="pemulihan_negara" name="pemulihan_negara">
                                </div>
                                <!-- <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" placeholder="Enter perkara name" id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input class="form-control" placeholder="Enter perkara name" id="price" name="price">
                                </div>
                                <div class="form-group">
                                    <label>Model</label>
                                    <input class="form-control" placeholder="Enter perkara mode" id="model" name="model">
                                </div> -->
                                <div class="form-group">
                                    <label>Nama Jaksa</label>
                                    <select class="form-control" id="brand_id" name="brand_id">
                                        <?php if (count($brands)): ?>
                                            <?php foreach ($brands as $key => $brand): ?>
                                                <option value="<?= $brand['id'] ?>"><?= $brand['description'] ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Register</label>
                                    <input class="form-control" placeholder="Enter perkara register" id="register" name="register">
                                </div>
                                <!-- <div class="form-group">
                                    <label>Tag Line</label>
                                    <input class="form-control" placeholder="Enter perkara description" id="tag_line" name="tag_line">
                                </div>
                                <div class="form-group">
                                    <label>Features</label>
                                    <textarea class="form-control" rows="3" id="features" name="features"></textarea>
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
