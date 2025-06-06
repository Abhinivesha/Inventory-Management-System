<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
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
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
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
              <a href="<?= base_url('/') ?>" class="nav-link">
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
                  <a href="<?= base_url('/add_customer'); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Generate Customer</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('/view_customer'); ?>" class="nav-link">
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
                  <a href="<?= base_url('/add_vendor'); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Generate Vendor</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('/view_vendor'); ?>" class="nav-link">
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
                  <a href="<?= base_url('/add_product'); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Generate Product</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('/view_product'); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Manage Product</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-arrow-circle-right"></i>
                <p>Inward Stock <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Management<i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('/add_inward'); ?>" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Generate Inward</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('/view_inward'); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Manage Inward</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-arrow-circle-right"></i>
                <p>Outward Stock <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Management<i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('/add_outward'); ?>" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Generate Outward</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('/view_outward'); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Manage Outward</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('/add_performa'); ?>" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Generate Performa</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('/view_performa'); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Manage Performa</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('/summary'); ?>" class="nav-link ">
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
                  <a href="<?= base_url('/reportinw'); ?>" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p> Inward</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('/reportout'); ?>" class="nav-link">
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
              <h2 id="history">G E N E R A T E &nbsp; I N W A R D</h2>
              <hr>
              <!-- Button trigger modal -->


              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Success</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <h4>Inward Data Added Successfully</h4>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Okay</button>
                    </div>
                  </div>
                </div>
              </div>
              <a href="<?= base_url('/view_inward') ?>" class="btn btn-outline-primary offset-11"><i class="fa fa-eye"
                  aria-hidden="true"></i> Inward</a>
              <section class="content-header">
                <div class="container-fluid">
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Add Inward Stock</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body rem-10">
                      <form method="POST" action="<?= base_url('/add_in'); ?>">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Select Vendor</label>
                              <select class="form-select mb-3" name="vendor">
                                <option selected>Select Vendor</option>
                                <?php foreach ($vendor as $row): ?>
                                  <option>
                                    <?php print_r($row['name']); ?>
                                  </option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Purchase Order Number</label>
                              <input class="form-control" placeholder="Enter Purchase Number" name="po_no" required="">
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Purchase Order Date</label>
                              <input type="date" class="form-control" placeholder="Enter Purchase Outward Number"
                                name="po_date" required="">
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Invoice Date</label>
                              <input type="date" class="form-control" placeholder="Enter Invoice Date"
                                name="invoice_date" required="">
                            </div>
                          </div>

                          <div class="form-group">




                          </div>

                          <div class="col-sm-4 mt-3">
                            <table class="text-justify text-center table table-bordered" onforminput="" id="item">
                              <thead>
                                <tr>
                                  <th class="table-primary">PRODUCT</th>
                                  <th class="table-primary">PART CODE</th>
                                  <th class="table-primary">QUANTITY</th>
                                  <th class="table-primary">RATE</th>
                                  <th class="table-primary">FREIGHT</th>
                                  <th class="table-primary">GST</th>
                                  <th class="table-primary">UNIT</th>
                                  <th class="table-primary">ACTION</th>
                                </tr>
                              </thead>
                              <tbody>
                                <!-- <?php
                                // $servername = "localhost";
                                // $username = "root";
                                // $password = "";
                                // $database = "inwardsm";
                                // $conn = new mysqli($servername, $username, $password, $database); 
                                // $fetch = $conn->prepare("SELECT * FROM products ORDER BY id DESC");
                                //       $fetch->execute();
                                //       $result = $fetch->get_result();
                                //       $cnt = 1;
                                //       print_r($result->result()); 
                                //       while($row = $result->fetch_assoc()){
                                //         $id = $row['id'];
                                //       }
                                ?> -->
                                <tr>
                                  <td>
                                    <select class="form-select pr" name='prod[]' style="width: 160px;" id="prod">
                                      <option selected>Select Products</option>
                                      <?php foreach ($products as $row) { ?>
                                        <option id="product" value="<?=($row['id']) ?>"><?php print_r($row['name']); ?>
                                        </option>
                                      <?php } ?>
                                    </select>
                                  </td>
                                  <td><input id="pc" class="pdc" style="width: 125px; height: 35px;" type='text'
                                      name='partcode[]' readonly></td>
                                  <td><input style="width: 125px; height: 35px;" type='text' name='qty[]'></td>
                                  <td><input style="width: 150px; height: 35px;" type='text' name='rate[]'></td>
                                  <td><input style="width: 150px; height: 35px;" type='text' name='freight[]'></td>
                                  <td><input style="width: 100px; height: 35px;" type='text' name='gst[]'></td>
                                  <td><input id="unit" class="un" style="width: 100px; height: 35px;" type='text'
                                      name='unit[]' readonly></td>
                                  <!-- <td>
                    <select id="unit" class="form-select" style="width: 200px;" type='text' name='unit[]' readonly>
                      <option selected>Unit</option>
                      <option>No.</option>
                      <option>Nos</option>
                      <option>Mtr</option>
                      <option>Lot</option>
                    </select>
                  </td> -->
                                  <td><button type="button" name="add_customer" class="btn btn-sm btn-outline-primary"
                                      onclick="add();"><i class="fa fa-plus" aria-hidden="true"></i></button></td>
                                </tr>
                              </tbody>

                            </table>
                          </div>
                          <div class="form-group">
                            <button class="btn btn-outline-success mt-3" type="submit">Submit</button>
                          </div>
                          <div class="form-group">
                            <!-- textarea -->

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
    function add() {
      $row = $("#item tr").length;
      $row = $row + 1;
      $("#item tr:last").after("<tr id='row" + $row + "'><td><select id='prod"+ $row +"' class='form-select pr' name='prod[]' style='width: 160px;'><option selected>Select Products</option><?php foreach ($products as $row): ?><option value='<?= $row['id'] ?>'><?php print_r($row['name']); ?></option><?php endforeach; ?></select></td><td><input id='pc" + $row + "' style='width: 125px; height: 35px;' type='text' name='partcode[]'></td><td><input style='width: 125px; height: 35px;' type='text' name='qty[]'></td><td><input style='width: 150px; height: 35px;' type='text' name='rate[]'></td><td><input style='width: 150px; height: 35px;' type='text' name='freight[]'></td><td><input style='width: 100px; height: 35px;' type='text' name='gst[]'></td><td><input id='unit" + $row + "' style='width: 100px; height: 35px;' type='text' name='unit[]'></td><td><input type='button' class='mx-2 btn btn-sm btn-outline-danger' value='Delete' onclick=del('row" + $row + "')></td></tr>");
    }

    function del() {
      // event.target will be the input element.
      var td = event.target.parentNode;
      var tr = td.parentNode; // the row to be removed
      tr.parentNode.removeChild(tr);
    }

    function addinw() {

      swal({
        title: "",
        text: "Inward Data Added Successfully!",
        icon: "success"
      });

    }
  </script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="plugins/chart.js/Chart.min.js"></script>
<script src="plugins/sparklines/sparkline.js"></script>
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
  <script src="../../dist/js/adminlte.js"></script>
  <!--<script src="dist/js/demo.js"></script>-->
  <!-- <script src="dist/js/pages/dashboard.js"></script> -->

  <!-- <script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> -->
  <script>
    $(document).on('change', ".pr", function () {
      var id = $(this).val();
      // console.log(id);
      var pid = $(this).closest("tr").find("select[name='prod[]']").attr('id');
      var pc = $(this).closest("tr").find("input[name='partcode[]']").attr('id');
      var unit = $(this).closest("tr").find("input[name='unit[]']").attr('id');
      // console.log(pid);
      // const $cell = $(this).closest('td');
      if (id) {
        $.ajax({
          type: "GET",
          url: "/product/" + id,
          dataType: 'json',
          // data: {id : id},
          success: function (data) {
            $('#' + pc).val(data.data[0].partcode);
            $('#'+ unit).val(data.data[0].unit);
            // console.log(data.data[0].partcode);
            // $("#pc").val(data.data[0].partcode);
            // $("#unit").val(data.data[0].unit);
            // $cell.find('.pdc').val(data.data[0].partcode);
            // for (let i = 3; i < 10; i++) {
            //   $("#pc"+i).val(data.data[0].partcode);
            //   $("#unit"+i).val(data.data[0].unit);
            //   console.log("#pc"+i);
            //}
            // console.log(data);
          }
          // else{
          //   $('#' + pid).html('<option>Select width</option>');
          // }
        });
      }
    });
  </script>
</body>

</html>