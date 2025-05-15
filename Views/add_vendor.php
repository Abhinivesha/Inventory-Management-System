<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">  
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
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>Vendor <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Management<i class="fas fa-angle-left right"></i></p>
            </a> 
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('/add_vendor');?>" class="nav-link active">
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
            <a href="#" class="nav-link">
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
                <a href="<?=base_url('/view_product');?>" class="nav-link">
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
        <h2 id="history">G E N E R A T E &nbsp; V E N D O R</h2>
        <hr>
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Success</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Vendor Added Successfully</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Okay</button>
      </div>
    </div>
  </div>
</div>
        <a href="<?=base_url('/view_vendor')?>" class="btn btn-sm btn-outline-primary offset-11"><i class="fa fa-eye" aria-hidden="true"></i>
Vendors</a>
        <section class="content-header">
  <div class="container-fluid">
   <div class="card card-primary">
      <div class="card-header">
         <h3 class="card-title">Add Vendor</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
         <form id="vendor" method="POST" action="<?php echo base_url('/add_ven')?>">
            <div class="row">
               <div class="col-sm-4">
                  <!-- text input -->
                  <div class="form-group">
                     <label>Enter Vendor Name</label>
                     <input type="text" name="name" class="form-control" placeholder="Enter Vendor Name" required="">
                  </div>
               </div>

               <div class="col-sm-4">
                  <div class="form-group">
                  <label>Address</label>
                     <input class="form-control" placeholder="Enter Address Line" name="address" required="">
                </div>
               </div>

               <div class="col-sm-4">
                  <div class="form-group">
                  <label>Contact Person</label>
                     <input class="form-control" placeholder="Enter Contact person details" name="contact_person" required="">
                </div>
               </div>
               
               <div class="col-sm-4">
                  <div class="form-group">
                  <label>Number</label>
                     <input class="form-control" placeholder="Enter Number" name="number" required="">
                </div>
               </div>
               
               <div class="col-sm-4">
                  <div class="form-group">
                  <label>Email</label>
                     <input type="email" class="form-control" placeholder="Enter email" name="email" required="">
                </div>
               </div>
               
               <div class="col-sm-4">
                  <div class="form-group">
                  <label>GST NO</label>
                     <input type="text" class="form-control" placeholder="Enter GST No" name="gst_no" required="">
                </div>
               </div>
            

            <div class="form-group">
                  <div class="form-group">  
                      <button type="submit" formaction="<?=base_url('/add_ven')?>" onclick="addven();" class="btn btn-outline-primary mt-4">Add Vendor</button>
                  </div>
            </div>
           </div> 
         </form>
      </div>
      <!-- /.card-body -->
   </div>
  </div>
</section>
    
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
  function addven(){
      swal({
        title: "",
        text: "Vendor Added Successfully",
        icon: "success",
      });

    }    
  </script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.js"></script>
  <script>
    // $(function () {
    //   $.validator.setDefaults({
    //     submitHandler: function () {
    //       alert( "Form successful submitted!" );
    //     }
    //   });
    //   $('#vendor').validate({
    //     rules: {
    //       name: {
    //         required: true,
    //       },
    //       address: {
    //         required: true,
    //       },
    //       contact_person: {
    //         required: true
    //       },
    //       number: {
    //         required: true
    //       },
    //       email: {
    //         required: true,
    //         email: true
    //       },
    //       gst_no: {
    //         required: true
    //       },
    //     },
    //     messages: {
    //       name: {
    //         required: "Please provide a address",
    //       },
    //       address: {
    //         required: "Please provide a address",
    //       },
    //       contact_person: {
    //         required: "Please provide a name",
    //       },
    //       number: {
    //         required: "Please provide a number",
    //       },
    //       email: {
    //         required: "Please enter a email address",
    //         email: "Please enter a valid email address"
    //       },
    //       gst_no: {
    //         required: "Please provide a gst_no",
    //       },
    //     },
    //     errorElement: 'span',
    //     errorPlacement: function (error, element) {
    //       error.addClass('invalid-feedback');
    //       element.closest('.form-group').append(error);
    //     },
    //     highlight: function (element, errorClass, validClass) {
    //       $(element).addClass('is-invalid');
    //     },
    //     unhighlight: function (element, errorClass, validClass) {
    //       $(element).removeClass('is-invalid');
    //     }
    //   });
    // });  
  </script>
</body>

</html>
