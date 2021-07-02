<?php
require '../connection/connection.php';


if (!isset($_SESSION['admin']))
{
  echo "<script>alert('Anda Harus Login');</script>";
  echo "<script>location='../login.php';</script>";
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard Admin</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <!-- <i class="fas fa-laugh-wink"></i> -->
        </div>
        <div class="sidebar-brand-text mx-3">Sisfo UNM <sup>beta</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Home -->
      <li class="nav-item">
        <a class="nav-link" href="?halaman=home">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          Mahasiswa
        </div>

        <!-- Nav Item - Tambah Mahasiswa -->
        <li class="nav-item">
          <a class="nav-link" href="?halaman=tambahMhs">
            <i class="fa fa-edit"></i>
            <span>Tambah Mahasiswa</span>
          </a>
        </li>

        <!-- Nav Item - Data Mahasiswa -->
        <li class="nav-item">
          <a class="nav-link" href="?halaman=tampilMhs">
            <i class="fa fa-table"></i>
            <span>Data Mahasiswa</span>
          </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          Mata Kuliah
        </div>

        <!-- Nav Item - Tambah Mata Kuliah -->
        <li class="nav-item">
          <a class="nav-link" href="?halaman=tambahMakul">
            <i class="fa fa-edit"></i>
            <span>Tambah Mata Kuliah</span>
          </a>
        </li>

        <!-- Nav Item - Data Mata Kuliah -->
        <li class="nav-item">
          <a class="nav-link" href="?halaman=tampilMakul">
            <i class="fa fa-table"></i>
            <span>Data Mata Kuliah</span>
          </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          Nilai
        </div>

        <!-- Nav Item - Nilai -->
        <li class="nav-item">
          <a class="nav-link" href="?halaman=tambahNilai">
            <i class="fa fa-bars"></i>
            <span>Input Nilai</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Nav Item - Logout -->
          <li class="nav-item">
            <a class="nav-link" href="" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              <span>Logout</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
          </ul>
          <!-- End of Sidebar -->

          <!-- Content Wrapper -->
          <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

              <!-- Topbar -->
              <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                  <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">


                  <div class="topbar-divider d-none d-sm-block"></div>

                  <!-- Nav Item - Admin -->
                  <li>
                    <label><?php if (isset($_SESSION['admin'])) {
                      echo $_SESSION['admin'];
                    } ?></label>
                    <i class="fas fa-user"></i>
                  </li>

                </ul>

              </nav>
              <!-- End of Topbar -->

              <!-- Scroll to Top Button-->
              <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
              </a>

              <!-- Logout Modal-->
              <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                      <a class="btn btn-primary" href="logout.php">Logout</a>
                    </div>
                  </div>
                </div>
              </div>

              <?php
              error_reporting(E_ALL ^ (E_WARNING | E_NOTICE));
              switch ($_GET['halaman']) {

            //Mahasiswa
                case 'tampilMhs':
                include 'data/mahasiswa/mhs_tampil.php';
                break;
                case 'tambahMhs':
                include 'data/mahasiswa/mhs_tambah.php';
                break;
                case 'editMhs':
                include 'data/mahasiswa/mhs_edit.php';
                break;
                case 'detailMhs':
                include 'data/mahasiswa/mhs_detail.php';
                break;
                case 'hapusMhs':
                include 'data/mahasiswa/mhs_hapus.php';
                break;

            //Matakuliah
                case 'tampilMakul':
                include 'data/makul/makul_tampil.php';
                break;
                case 'tambahMakul':
                include 'data/makul/makul_tambah.php';
                break;
                case 'editMakul':
                include 'data/makul/makul_edit.php';
                break;
                case 'hapusMakul':
                include 'data/makul/makul_hapus.php';
                break;


                case 'tambahNilai':
                include 'data/nilai/nilai_tambah.php';
                break;

                default:
                include 'home.php';
                break;

              }
              ?>

              <!-- Bootstrap core JavaScript-->
              <script src="../vendor/jquery/jquery.min.js"></script>
              <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

              <!-- Core plugin JavaScript-->
              <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

              <!-- Custom scripts for all pages-->
              <script src="../js/sb-admin-2.min.js"></script>

              <!-- Page level plugins -->
              <script src="../vendor/chart.js/Chart.min.js"></script>

              <!-- Page level custom scripts -->
              <script src="../js/demo/chart-area-demo.js"></script>
              <script src="../js/demo/chart-pie-demo.js"></script>

            </body>

            </html>
