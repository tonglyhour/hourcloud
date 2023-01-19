<?php
@session_start();
$file_access = true;
include '../conn.php';
include 'session.php';
include '../constants.php';
if (@$_GET['page'] == 'print' && isset($_GET['print'])) printClearance($_GET['print']);
$fullname =  getIndividualName($_SESSION['user_id'], $conn);
if (isset($_GET['error'])) {
    echo "<script>alert('Payment could not be initialized! Network Error!'); window.location = 'individual.php?page=reg';</script>";
    exit;
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php echo SITE_NAME, ' - Passenger\'s Account' ?> </title>
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <script src="../js/alpine.js"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar  navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="navbar-nav">
                    <a class="nav-link" href="#"><?php echo SITE_NAME ?></a>

                </li>
            </ul>


            <!-- Right navbar links -->

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-success elevation-4">
            <!-- Brand Logo -->
            <a href="individual.php" class="brand-link">

                <span class="brand-text font-weight-light"><?php echo date("D d, M y"); ?></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php
                                    echo getImage($_SESSION['user_id'], $conn);
                                    ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $fullname; ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <a href="individual.php" class="nav-link <?php echo (@$_GET['page'] == '') ? 'active' : '';?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Home
                                </p>
                            </a>

                        </li>
                        

                        <li class="nav-item">
                            <a href="individual.php?page=reg" class="nav-link <?php echo (@$_GET['page'] == 'reg') ? 'active' : '';?>">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>New Booking</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="individual.php?page=paid" class="nav-link <?php echo (@$_GET['page'] == 'paid') ? 'active' : '';?>">
                                <i class="fa fa-book nav-icon"></i>
                                <p>View Bookings</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="individual.php?page=feedback" class="nav-link <?php echo (@$_GET['page'] == 'feedback') ? 'active' : '';?>">
                                <i class="fa fa-mail-bulk nav-icon"></i>
                                <p>Feedback</p>
                            </a>
                        </li>

                        <li>
                        <li class="nav-item">
                            <a href="individual.php?page=logout" class="nav-link">
                                <i class="nav-icon fas fa-power-off"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"> Passenger's Dashboard</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <?php

            if (!isset($_GET['page']))
                include 'individual/index.php';
            elseif ($_GET['page'] == 'reg')
                include 'individual/reg.php';
            elseif ($_GET['page'] == 'pay')
                include 'individual/make_payment.php';
            elseif ($_GET['page'] == 'paid')
                include 'individual/paid.php';
            elseif ($_GET['page'] == 'upload')
                include 'individual/upload.php';
            elseif ($_GET['page'] == 'status')
                include 'individual/status.php';
            elseif ($_GET['page'] == 'logout') {
                @session_destroy();
                echo "<script>alert('You are being logged out'); window.location='../';</script>";
                exit;
            } elseif ($_GET['page'] == 'print') {
                printClearance($user_id);
                include 'individual/status.php';
            } else {
                //Feedback
                include 'individual/feedback.php';
            }
            //TODO:
            ?>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                <?php echo SITE_NAME; ?>
            </div>
            <!-- Default to the left -->
            <strong><?php echo date("Y"); ?> - All Rights Reserved</strong>
        </footer>
    </div>
    <!-- ./wrapper -->

    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/demo.js"></script>
    <script src="dist/js/pages/dashboard3.js"></script>

    <script>
    $(function() {
        $("#example1").DataTable();
    });
    </script>
</body>

</html>