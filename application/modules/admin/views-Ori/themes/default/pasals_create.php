<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Pasal
                <a  href="<?= base_url('admin/pasals') ?>" class="btn btn-warning">Kembali ke Daftar Pasal</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Tambah Pasal Baru
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
                            <form role="form" method="POST" action="<?=base_url('admin/pasals/create')?>">
                                <div class="form-group">
                                    <label>Pasal Id Input</label>
                                    <input class="form-control" placeholder="Auto generated" disabled="1">
                                </div>
                                <div class="form-group">
                                    <label>Pasal</label>
                                    <input class="form-control" placeholder="Masukan pasal" id="pasal" name="pasal">
                                </div>
                                <div class="form-group">
                                    <label>Ancaman Hukuman</label>
                                    <input class="form-control" placeholder="Masukan ancaman hukuman" id="ancaman_hukuman" name="ancaman_hukuman">
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
