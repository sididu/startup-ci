<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Jaksa
                <a  href="<?= base_url('admin/jaksas') ?>" class="btn btn-warning">Kembali ke Daftar Jaksa</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Tambah Jaksa Baru
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
                            <form role="form" method="POST" action="<?=base_url('admin/jaksas/create')?>">
                                <div class="form-group">
                                    <label>Jaksa Id Input</label>
                                    <input class="form-control" placeholder="Auto generated" disabled="1">
                                </div>
                                <div class="form-group">
                                    <label>Nip Jaksa</label>
                                    <input class="form-control" placeholder="Masukan nip jaksa" id="nip" name="nip">
                                </div>
                                <div class="form-group">
                                    <label>Nama Jaksa</label>
                                    <input class="form-control" placeholder="Masukan nama jaksa" id="nama" name="nama">
                                </div>
                                <div class="form-group">
                                    <label>Pangkat Jaksa</label>
                                    <input class="form-control" placeholder="Masukan pangkat jaksa" id="pangkat" name="pangkat">
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
