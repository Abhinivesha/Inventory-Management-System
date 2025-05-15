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
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-arrow-circle-right"></i>
                <p>Inward Stock <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Management<i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('/add_inward'); ?>" class="nav-link ">
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
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-arrow-circle-right"></i>
                <p>REPORTS<i class="fas fa-angle-left right"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('/reportinw'); ?>" class="nav-link active">
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

            <?php
            if (isset($_GET['submit'])) {
              $server = 'localhost';
              $username = 'root';
              $password = '';
              $database = 'billing';

              $conn = mysqli_connect($server, $username, $password, $database);
              if (!$conn) {
                die("Connection Failed" . mysqli_connect_error());
              } else {
                // echo "Connection Successful";
              }

              $vendor = $_GET['vendor'];
              $from = strtotime($_GET['from']);
              $to = strtotime($_GET['to']);

              // $db = \Config\Database::connect();
              // $inward = $db->table('inward');
              // $inward->where('vendor', $vendor);
              // $inward->where('po_date >=', $from);
              // $inward->where('po_date <=', $to);
              // $inw = $inward->get();
              // $result = $inw->getResultArray();
              // // print_r($result);
              // for ($i = 0; $i < count($result); $i++) {
              //   $id[] = [
              //     'id' => $result[$i]['id']
              //   ];
              // }
              // // print_r($id);
              // foreach ($id as $ids) {
              //   $data[] = $ids['id'];
              // }
              // // print_r($data);
              // $inward_items = $db->table('inward_items');
              // $items = $inward_items->whereIn('id', $data)->get();
              // $item = $items->getResultArray();
            
              // print_r($item);
            
              // $sql = "SELECT * FROM `inward` WHERE vendor $vendor";
              // $conn->query($sql);
            }
            ?>


            <div class="container">
              <h2 id="history">V E N D O R &nbsp; R E P O R T</h2>
              <hr>
              <section class="content-header">
                <div class="container-fluid">
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">GENERATE VENDOR REPORT</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <form method="GET">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Select Vendor</label>
                              <select class="form-select mb-3" name="vendor">
                                <option selected>Select Vendor</option>
                                <?php foreach ($vendors as $row): ?>
                                  <option>
                                    <?= $row ?>
                                  </option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                          </div>


                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>FROM DATE</label>
                              <input type="date" class="form-control" name="from" required="">
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>TO DATE</label>
                              <input type="date" class="form-control" name="to" required="">
                            </div>
                          </div>



                          <div class="form-group">
                            <button class="btn btn-outline-success mt-3" name="submit" type="submit">Submit</button>
                          </div>
                          <div class="form-group">
                            <!-- textarea -->

                          </div>
                        </div>
                      </form>
                    </div>

                  </div>
                </div>
              </section>

              <table class="text-justify text-center table table-bordered table-hover" id="report">
                <thead>
                  <tr>
                    <th class="table-primary">Sr.No</th>
                    <th class="table-primary">Date</th>
                    <th class="table-primary">PRODUCT</th>
                    <th class="table-primary">PART CODE</th>
                    <th class="table-primary">QUANTITY</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (empty($vendor)) { ?>
                    <!-- <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr> -->
                  <?php } else { ?>
                    <?php

                    $sql = "SELECT * FROM inward where vendor='$vendor'";
                    $result = $conn->query($sql);
                    $no = 1;
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while ($row = $result->fetch_assoc()) {
                        $po_date = strtotime($row['po_date']);
                        $id = $row['id'];
                        if ($po_date <= $to && $po_date >= $from) {
                          // $a = "SELECT * FROM inward_items where id='$id'";
                          // echo $a;
                          $sql2 = "SELECT * FROM inward_items where id='$id'";
                          $result2 = $conn->query($sql2);
                          if ($result2->num_rows > 0) {
                            // output data of each row
                            while ($row2 = $result2->fetch_assoc()) {
                              //echo $row2['product'];
                              ?>
                              <tr>
                                <td><?php echo $no;?></td>
                                <td><?= $row['po_date']?></td>
                                <td><?php echo $row2['product'];?></td>
                                <td><?php echo $row2['partcode'];?></td>
                                <td><?php echo $row2['qty']." ". $row2['unit'];?></td>
                              </tr>
                              <?php $no += 1;
                            }
                          }
                        }
                      }
                    }
                  } ?>

                </tbody>

              </table>







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





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dist/js/adminlte.js"></script>
  <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="../../plugins/jszip/jszip.min.js"></script>
  <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
  <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
  <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!--<script src="dist/js/demo.js"></script>-->
  <!-- <script src="dist/js/pages/dashboard.js"></script> -->
  <script>
    $(function () {
      $("#report").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        "buttons": ["excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#report_wrapper .col-md-6:eq(0)');
      // $('#example2').DataTable({
      //   "paging": true,
      //   "lengthChange": false,
      //   "searching": false,
      //   "ordering": true,
      //   "info": true,
      //   "autoWidth": false,
      //   "responsive": true,
      // });
    });
  </script>

</body>

</html>