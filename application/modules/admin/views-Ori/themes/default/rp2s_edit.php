<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Perbaharui Data Penyelidikan
                <a  href="<?= base_url('admin/rp2s') ?>" class="btn btn-warning">Kembali ke list RP-2</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Perbaharui Data Penyelidikan
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" method="POST" action="<?= base_url('admin/rp2s/edit/'.$rp2->id) ?>">
                                <!-- <div class="form-group">
                                    <label>Id Input</label>
                                    <input value="<?= $rp2->id ?>" class="form-control" placeholder="Auto generated" disabled="1">
                                </div> -->
                                <div class="form-group">
                                    <label>Judul Kasus</label>
                                    <input class="form-control" value="<?= $rp2->judul_kasus ?>" placeholder="Enter perkara nomor surat" id="judul_kasus" name="judul_kasus">
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="panel panel-default">
                                            <div class="panel-body">Subyek
                                                <div class="form-group">
                                                    <label>Nama Terlapor</label>
                                                    <input class="form-control" value="<?= $rp2->nama_terlapor ?>" placeholder="Enter nama terlpor" id="nama_terlapor" name="nama_terlapor">
                                                </div>
                                                <div class="form-group">
                                                    <label>Jabatan Resmi</label>
                                                    <input class="form-control" value="<?= $rp2->jabatan_resmi ?>" placeholder="Enter jabatan resmi" id="jabatan_resmi" name="jabatan_resmi">
                                                </div>
                                                <div class="form-group">
                                                    <label>Lembaga</label>
                                                    <input class="form-control" value="<?= $rp2->lembaga ?>" placeholder="Enter lembaga" id="lembaga" name="lembaga">
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
                                                    <input class="form-control" value="<?= $rp2->obyek_pidana ?>" placeholder="Enter obyek pidana" id="obyek_pidana" name="obyek_pidana">
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
                                                    <input class="form-control" value="<?= $rp2->nilai_kontrak ?>" placeholder="Enter nilai kontrak" id="nilai_kontrak" name="nilai_kontrak">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tanggal Surat</label>
                                            <input class="datepicker form-control" value="<?= $rp2->tanggal_surat ?>" placeholder="Enter tanggal surat" id="tanggal_surat" name="tanggal_surat">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Surat</label>
                                            <input class="form-control" value="<?= $rp2->no_surat ?>" placeholder="Enter nomor surat" id="no_surat" name="no_surat">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Berhenti</label>
                                            <input class="datepicker form-control" value="<?= $rp2->tanggal_berhenti ?>" placeholder="Enter tanggal berhenti" id="tanggal_berhenti" name="tanggal_berhenti">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Jaksa</label>
                                            <select class="form-control" id="nama_jaksa" name="nama_jaksa">
                                                <?php if (count($jaksas)): ?>
                                                    <?php foreach ($jaksas as $key => $jaksa): ?>
                                                        <option value="<?= $jaksa['nama'] ?>" <?= ($rp2->id_jaksa == $jaksa['id']) ? 'selected="selected"' : '' ?>> <?= $jaksa['nama'] ?></option>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <!-- <input type="submit" id="addjaksa"/> -->
                                            <button type="submit" id="addjaksa" class="btn btn-primary">Add Jaksa</button>
                                        </div>
                                            <textarea class="form-control" rows="4" id="name_jaksa" name="name_jaksa"></textarea>
                                            <!-- <div id="nama_jaksa"></div> -->
                                    </div>
                                </div>

                                
                                <!-- <div class="form-group">
                                    <label>Register</label>
                                    <input value="<?= $rp2->register ?>" class="form-control" placeholder="Enter rp2 Register" id="register" name="register">
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
