<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                RP-3
                <a  href="<?= base_url('admin/rp3s') ?>" class="btn btn-warning">Kembali ke daftar RP-3</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    RP-3 Baru
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" method="POST" action="<?=base_url('admin/rp3s/create')?>">
                                <!-- <div class="form-group">
                                    <label>Perkara Id Input</label>
                                    <input class="form-control" placeholder="Auto generated" disabled="1">
                                </div> -->
                                <div class="form-group">
                                    <label>Judul Kasus</label>
                                    <input class="form-control" placeholder="Enter perkara nomor surat" id="judul_kasus" name="judul_kasus">
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="panel panel-default">
                                            <div class="panel-body">Subyek
                                                <div class="form-group">
                                                    <label>Nama Terlapor</label>
                                                    <input class="form-control" placeholder="Enter nama terlpor" id="nama_terlapor" name="nama_terlapor">
                                                </div>
                                                <div class="form-group">
                                                    <label>Jabatan Resmi</label>
                                                    <input class="form-control" placeholder="Enter jabatan resmi" id="jabatan_resmi" name="jabatan_resmi">
                                                </div>
                                                <div class="form-group">
                                                    <label>Lembaga</label>
                                                    <input class="form-control" placeholder="Enter lembaga" id="lembaga" name="lembaga">
                                                </div>
                                                <div class="form-group">
                                                    <label>Pasal Disangkakan</label>
                                                    <select class="form-control" id="pasal" name="pasal">
                                                        <?php if (count($pasals)): ?>
                                                            <?php foreach ($pasals as $key => $pasal): ?>
                                                                <option value="<?= $pasal['pasal'] ?>"><?= $pasal['pasal'] ?></option>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </select>
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
                                                    <label>Ketegori Pidana</label>
                                                    <select class="form-control" id="kategori_pidana" name="kategori_pidana">
                                                        <?php if (count($pidanas)): ?>
                                                            <?php foreach ($pidanas as $key => $pidana): ?>
                                                                <option value="<?= $pidana['kategori_pidana'] ?>"><?= $pidana['kategori_pidana'] ?></option>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Obyek Pidana</label>
                                                    <input class="form-control" placeholder="Enter obyek pidana" id="obyek_pidana" name="obyek_pidana">
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
                                                    <input class="form-control" placeholder="Enter nilai kontrak" id="nilai_kontrak" name="nilai_kontrak">
                                                </div>
                                                <div class="form-group">
                                                    <label>Pemulihan Aset</label>
                                                    <input class="form-control" placeholder="Enter pemulihan aset" id="pemulihan_aset" name="pemulihan_aset">
                                                </div>
                                                <div class="form-group">
                                                    <label>Kerugian Negara</label>
                                                    <input class="form-control" placeholder="Enter kerugian negara" id="kerugian_negara" name="kerugian_negara">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tanggal Surat</label>
                                            <input class="datepicker form-control" placeholder="Enter tanggal surat" id="tanggal_surat" name="tanggal_surat">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Surat</label>
                                            <input class="form-control" placeholder="Enter nomor surat" id="no_surat" name="no_surat">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Berhenti</label>
                                            <input class="datepicker form-control" placeholder="Enter tanggal berhenti" id="tanggal_berhenti" name="tanggal_berhenti">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Jaksa</label>
                                            <select class="form-control" id="nama_jaksa" name="nama_jaksa">
                                                <?php if (count($jaksas)): ?>
                                                    <?php foreach ($jaksas as $key => $jaksa): ?>
                                                        <option value="<?= $jaksa['nama'] ?>"><?= $jaksa['nama'] ?></option>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                        <!-- <div class="form-group"> -->
                                            <!-- <input type="submit" id="addjaksa"/> -->
                                            <!-- <button type="submit" id="addjaksa" class="btn btn-primary">Add Jaksa</button> -->
                                        <!-- </div> -->
                                            <!-- <textarea class="form-control" rows="4" id="name_jaksa" name="name_jaksa"></textarea> -->
                                            <!-- <div id="nama_jaksa"></div> -->
                                    </div>
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
