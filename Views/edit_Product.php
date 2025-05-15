<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href ="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
  

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a style="text-decoration:none" href="index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ADMIN PANEL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a style="text-decoration:none" href="#" class="d-block">admin</a>
        </div>
    </div>

      <!-- SidebarSearch Form -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('/')?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>Customer <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Management<i class="fas fa-angle-left right"></i></p>
            </a> 
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('/add_customer');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Generate Customer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('/view_customer');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Customer</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>Vendor <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Management<i class="fas fa-angle-left right"></i></p>
            </a> 
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('/add_vendor');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Generate Vendor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('/view_vendor');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Vendor</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>Product <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Management<i class="fas fa-angle-left right"></i></p>
            </a> 
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('/add_product');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Generate Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('/view_product');?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Product</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>Inward Stock <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Management<i class="fas fa-angle-left right"></i></p>
            </a> 
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('/add_inward');?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Generate Inward</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('/view_inward');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Inward</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>Outward Stock <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Management<i class="fas fa-angle-left right"></i></p>
            </a> 
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('/add_outward');?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Generate Outward</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('/view_outward');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Outward</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('/add_performa');?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Generate Performa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('/view_performa');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Performa</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('/summary');?>" class="nav-link ">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>Stock Summary<i class="fas fa-angle-left right"></i></p>
            </a> 
            
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>REPORTS<i class="fas fa-angle-left right"></i></p>
            </a> 
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('/reportinw');?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Inward</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('/reportout');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Outward</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>

      <!-- Sidebar Menu -->
      
          
  </aside>


  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="m-0"></h2>
              </div><!-- /.col -->


    <div class="container">
        <h2 id="history">E D I T  &nbsp;P R O D U C T S</h2>
        <hr>
        <a href="<?=base_url('/view_product')?>" class="btn btn-sm btn-outline-primary offset-11">Back</a>
        <div class="container col-md-3 mt-5">
		<div class="card">
			<div class="card-body">
				<form class="form" method="post" action="<?=base_url('/update_product');?>">
					<div class="input-group mb-3">
						<input type="hidden" name="id" value="<?=$product[0]['id']?>">
					</div>
					<div class="input-group mb-3">
						<span class="input-group-text" id="inputGroup-sizing-default">Product</span>
						<input type="text" name="name" id="aname" value="<?=($product[0]['name'])?>" class="form-control">
					</div>
					<div class="input-group mb-3">
						<span class="input-group-text" id="inputGroup-sizing-default">Partcode</span>
						<input type="text" id="partcode" name="partcode" value="<?=($product[0]['partcode'])?>" class="form-control">
					</div>
					<div class="input-group mb-3">
						<span class="input-group-text" id="inputGroup-sizing-default">GST</span>
						<input type="text" name="unit" id="agst" value="<?=($product[0]['unit'])?>" class="form-control">
					</div>
					<button type="submit" id="Save" class="btn btn-success offset-5 mt-2">Update</button>
				</form>
			</div>
		</div>
	</div>
    
    </div>



    <div class="col-sm-6">
                    </div>
                </div>
            </div>
        </div>
    </div>
  
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">LORD's</a>.</strong>All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
  <aside class="control-sidebar control-sidebar-dark">

  </aside>
</div>





<script>
  const inputs = document.querySelectorAll("input");

function saveCurrent() {
  for (const el of inputs) el.oldValue = el.value;
}

function setEnabled() {
  var e = false;
  for (const el of inputs) {
    if (el.oldValue !== el.value) {
      e = true;
      break;
    }
  }
  document.querySelector("button").disabled = !e;
}

document.addEventListener("input", setEnabled);

saveCurrent();
setEnabled();
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- <script src="../../plugins/chart.js/Chart.min.js"></script>
<script src="../../plugins/sparklines/sparkline.js"></script>
<script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
<script src="../../dist/js/adminlte.js"></script>
<!--<script src="../../dist/js/demo.js"></script>-->
<!-- <script src="../../dist/js/pages/dashboard.js"></script> -->

</body>

</html>
