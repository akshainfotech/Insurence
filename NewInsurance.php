<?php include "header.php"; ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          New Insurance

        </h1>
        <ol class="breadcrumb">
          <li>
            <a href="#">
              <i class="fa fa-plus"></i> New Insurance</a>
          </li>

        </ol>
      </section>

      <!-- Main content -->
      <div class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Owner Details</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Policy Number</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Policy Number">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Owner Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Owner Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Country</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">United Arab Emirates</option>
                      <option>India</option>
                      <option>USA</option>
                      <option>London</option>
                      <option>France</option>
                      <option>Italy</option>
                      <option>Pakistan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">City</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Abu Dhabi</option>
                      <option>Dubai</option>
                      <option>Sharjah</option>
                      <option>Al Ain</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Contact No</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Contact No">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Email">
                  </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                  <button type="submit" class="btn btn-default">Cancel</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Vehicle Details</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <div class="col-md-4">
                      <label for="exampleInputEmail1">Make</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">KIA</option>
                        <option>Land Rover</option>
                        <option>Suzuki</option>
                        <option>TATA</option>
                        <option>Benz</option>
                        <option>BMW</option>
                        <option>Volvo</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <label for="exampleInputEmail1">Model</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Optima</option>
                        <option>Optima Hybrid</option>
                        <option>K900</option>

                      </select>
                    </div>
                    <div class="col-md-4">
                      <label for="exampleInputEmail1">Color</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Red</option>
                        <option>Green</option>
                        <option>Black</option>

                      </select>
                    </div>

                  </div>

                  <div class="form-group" style="margin-top:25px !important;">
                    <label for="exampleInputPassword1">Chasis No / VIN No</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Chasis No / VIN No">
                  </div>
                  <div class="form-group">
                    <div class="col-md-4">
                      <label for="exampleInputPassword1">Engin CC</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Engin CC">
                    </div>
                    <div class="col-md-4">
                      <label for="exampleInputPassword1">Vehicle Reg No</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Vehicle Reg No  ">
                    </div>
                    <div class="col-md-4">
                      <label for="exampleInputPassword1">Odometer Reading</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Odometer Reading">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Date Of Purchase</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Date Of Purchase ">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Date First Registred</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Date First Registred">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Date Of Expiry (if applicable)</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Date First Registred">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Is the vehicle under any manufactures warrenty?</label>
                    <label>
                      <input type="radio" name="r3" class="flat-red" checked> Yes
                    </label>
                    <label>
                      <input type="radio" name="r3" class="flat-red"> No
                    </label>
                  </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                  <button type="submit" class="btn btn-default">Cancel</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Duration of Warrenty</h3>
              </div>
              <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">This warrenty policy will expire when whichever limit is reached first, time or kilometers  </label>
                      <div class="col-md-3">
                          <select class="form-control select2" style="width: 100%;">
                              <option selected="selected">36</option>
                              <option>48</option>
                              <option>60</option>
                              
      
                            </select>
                      </div>
                       <div class="col-md-3" style="padding-top:5px">Months Or</div>
                       <div class="col-md-4">
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="KiloMeters">

                       </div>
                    </div>
                    </div>
              </form>
            </div>  
          </div>
          <div class="col-md-6">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Vehicle eligibilty and Maximum claim liability</h3>
                </div>
                <form role="form">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">The warrenty policy commences  and expires when whichever limit is reached first see below details</label>
                       <label>The Policy Valid from _____________  or from ___________________ Km. (Which ever occurs first)</label>
                       <label>The Policy expire on _____________  or from ___________________ Km. (Which ever occurs first)</label>
                       
                      </div>
                      </div>
                </form>
              </div>  
            </div>
        </div>
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <?php include "footer.php"; ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Create the tabs -->
      <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li class="active">
          <a href="#control-sidebar-home-tab" data-toggle="tab">
            <i class="fa fa-home"></i>
          </a>
        </li>
        <li>
          <a href="#control-sidebar-settings-tab" data-toggle="tab">
            <i class="fa fa-gears"></i>
          </a>
        </li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane active" id="control-sidebar-home-tab">
          <h3 class="control-sidebar-heading">Recent Activity</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:;">
                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                  <p>Will be 23 on April 24th</p>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->

          <h3 class="control-sidebar-heading">Tasks Progress</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:;">
                <h4 class="control-sidebar-subheading">
                  Custom Template Design
                  <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
          <form method="post">
            <h3 class="control-sidebar-heading">General Settings</h3>

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Report panel usage
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Some information about this general settings option
              </p>
            </div>
            <!-- /.form-group -->
          </form>
        </div>
        <!-- /.tab-pane -->
      </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED JS SCRIPTS -->

  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="bower_components/select2/dist/js/select2.full.min.js"></script>
  <script src="plugins/iCheck/icheck.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- ChartJS -->
  <script src="bower_components/Chart.js/Chart.html"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard2.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
  <script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2();
      //iCheck for checkbox and radio inputs
      $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
      })

    });
  </script>
</body>

</html>