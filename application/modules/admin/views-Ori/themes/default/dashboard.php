    <section class="content-header">
      <h1><img class="push-left" src="<?= base_url() ?>assets/admin/dist/img/logo-kejaksaan.png" width="75">
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php include_once('modul/data_perkara.php'); ?>
        
        
        <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Monthly Recap Report</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <div class="btn-group">
                      <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-wrench"></i></button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> -->
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col col-lg-6">
                        <?php include_once('modul/3dbubble.php'); ?>
                    </div>

                    <div class="col col-lg-6">
                        <?php include_once('modul/nilai_kontrak.php'); ?>
                    </div>
                  </div>
                  <!-- /.row -->
                </div>
                <!-- ./box-body -->
                <div class="box-footer">
                  <div class="row">
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.box-footer -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Monthly Recap Report</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <div class="btn-group">
                      <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-wrench"></i></button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> -->
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <!-- Content -->
                    <div class="col col-lg-6">
                        <div id="3dpiedonut" style="height: 100%"></div>
                    </div>
                    <div class="col col-lg-6">
                        <?php include_once('modul/3dscatter.php'); ?>
                    </div>

                  </div>
                  <!-- /.row -->
                </div>
                <!-- ./box-body -->
                <div class="box-footer">
                  <div class="row">
                    <!-- Content -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.box-footer -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->