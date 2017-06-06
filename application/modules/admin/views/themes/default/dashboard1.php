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
        <div class="row">
            <div class="col-md-8">
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
                    <div class="col col-lg-12">
                        <div class="col-md-8">
                            <p class="text-center">
                              <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                            </p>

                            <div class="chart">
                              <!-- Sales Chart Canvas -->
                              <canvas id="salesChart" style="height: 180px;"></canvas>
                            </div>
                            <!-- /.chart-responsive -->
                          </div>
                          <!-- /.col -->
                          <div class="col-md-4">
                            <p class="text-center">
                              <strong>Target Perkara</strong>
                            </p>

                            <div class="progress-group">
                              <span class="progress-text">Target Perkara 1</span>
                              <span class="progress-number"><b>160</b>/200</span>

                              <div class="progress sm">
                                <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                              </div>
                            </div>
                            <!-- /.progress-group -->
                            <div class="progress-group">
                              <span class="progress-text">Target Perkara 2</span>
                              <span class="progress-number"><b>310</b>/400</span>

                              <div class="progress sm">
                                <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                              </div>
                            </div>
                            <!-- /.progress-group -->
                            <div class="progress-group">
                              <span class="progress-text">Target Perkara 3</span>
                              <span class="progress-number"><b>480</b>/800</span>

                              <div class="progress sm">
                                <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                              </div>
                            </div>
                            <!-- /.progress-group -->
                            <div class="progress-group">
                              <span class="progress-text">Target Perkara 4</span>
                              <span class="progress-number"><b>250</b>/500</span>

                              <div class="progress sm">
                                <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                              </div>
                            </div>
                            <!-- /.progress-group -->
                          </div>
                    </div>
                  </div>
                  <!-- /.row -->
                </div>
                <!-- ./box-body -->
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block border-right">
                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                        <h5 class="description-header">RP. 35,210M</h5>
                        <span class="description-text">NILAI KONTRAK</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block border-right">
                        <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                        <h5 class="description-header">RP. 40,210M</h5>
                        <span class="description-text">KERUGIAN NEGARA</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block border-right">
                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                        <h5 class="description-header">RP. 32,210M</h5>
                        <span class="description-text">PEMULIHAN ASET</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block">
                        <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                        <h5 class="description-header">1200</h5>
                        <span class="description-text">GOAL COMPLETIONS</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.box-footer -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col col-lg-4">
              <div class="info-box bg-yellow">
                <span class="info-box-icon"><i class="fa fa-money"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Uang Pengganti</span>
                  <span class="info-box-number">5,200</span>

                  <div class="progress">
                    <div class="progress-bar" style="width: 50%"></div>
                  </div>
                      <span class="progress-description">
                        50% Increase in 30 Days
                      </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
              <div class="info-box bg-green">
                <span class="info-box-icon"><i class="fa fa-bank"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Masa Tahanan</span>
                  <span class="info-box-number">92,050</span>

                  <div class="progress">
                    <div class="progress-bar" style="width: 20%"></div>
                  </div>
                      <span class="progress-description">
                        20% Increase in 30 Days
                      </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
              <div class="info-box bg-red">
                <span class="info-box-icon"><i class="fa fa-cubes"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Barang Sitaan</span>
                  <span class="info-box-number">114,381</span>

                  <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                  </div>
                      <span class="progress-description">
                        70% Increase in 30 Days
                      </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
              <div class="info-box bg-aqua">
                <span class="info-box-icon"><i class="fa fa-list"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Daftar Cekal</span>
                  <span class="info-box-number">163,921</span>

                  <div class="progress">
                    <div class="progress-bar" style="width: 40%"></div>
                  </div>
                      <span class="progress-description">
                        40% Increase in 30 Days
                      </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
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
                    <div class="col col-lg-12">
                        <?php include_once('modul/3dbubble.php'); ?>
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