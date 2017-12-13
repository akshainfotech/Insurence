<?php include "header.php"; ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Tax        </h1>
        <ol class="breadcrumb">
          <li>
            <a href="#">
              <i class="fa fa-plus"></i> Tax</a>
          </li>

        </ol>
      </section>

      <!-- Main content -->
      <div class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="post" action="Tax.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="tax_name">Add Tax</label>
                  <input type="text" class="form-control" name="tax_name" id="tax_name" placeholder="Enter Tax">
                </div>
                
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="submit_tax">Submit</button>
              </div>
            </form>
            </div>
          </div>  
		  <div class="col-md-6">
            <div class="box box-primary">
              
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
              <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputPassword1">Tax List</label>
                    <select class="form-control select2" style="width: 100%;">
                    <?php
						include("connectdb.php");
						$sql = "select * from tax order by tax_name ASC";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) { ?>
						<option selected="selected"><?php echo $row["tax_name"]; ?> </option>
						
					<?php } }?>
                    </select>
                </div>
                
              </div>
              <!-- /.box-body -->

              
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
  
  <!------------------------------------------Add Tax--------------------------------------------->
  <?php
	include("connectdb.php");
	if(isset($_POST['submit_tax'])){
		$taxName=$_POST['tax_name'];	
		$sql = "Insert into tax (tax_name) values('".$taxName."')";
		if($conn->query($sql) === TRUE) {
			echo "<script>window.location.href='Tax.php';</script>";
		}
		$conn->close();
	}
  
  ?>
  
  
</body>

</html>