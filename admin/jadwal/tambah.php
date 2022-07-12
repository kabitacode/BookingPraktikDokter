<!-- 
=========================
Nama : Muhamad Zulfiqor
NIM : 1120031025
Deskripsi Program : Website Booking Praktik Dokter (e-Dok) 
==========================
-->

<?php 
 include_once("../../config.php");

 session_start();
  
 if (!isset($_SESSION['username'])) {
     header("Location: ../../../../login.php");
}

 $result = mysqli_query($conn, "SELECT * FROM jadwal ORDER BY id ASC");
 
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Style -->
    <link href="../../css/admin.min.css" rel="stylesheet">
    <link href="../../css/styles.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../home.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-stethoscope"></i>
                </div>
                <div class="sidebar-brand-text mx-3">e-Dok</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="../home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Booking</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../pasien/pasien.php">
                    <i class="fas fa-fw fa-user-circle"></i>
                    <span>Pasien</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="./jadwal.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Jadwal</span></a>
            </li>

            <!-- Divider -->
            <!-- <hr class="sidebar-divider d-none d-md-block"> -->
        </ul>
        <!-- End of Sidebar -->




        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username'] ?></span>
                                <img class="img-profile rounded-circle" src="../../image/logo-profile.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-5">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Data Jadwal</h1>
                    </div>


                    <form id="form" action="" method="POST">
                        <div class="mb-3">
                            <label for="tglPraktik" class="form-label">Tanggal Praktik</label>
                            <input type="date" class="form-control" name="tglPraktik" id="tglPraktik">
                        </div>
                        <div class="mb-3">
                            <label for="jam" class="form-label">Jam</label>
                            <input placeholder="Jam" class="form-control" type="time" name="jam" id="jam">
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input placeholder="Harga" class="form-control" type="number" name="harga" id="harga">
                        </div>


                        <button name="submit" class="btn btn-primary" type="submit" name="submit"
                            id="submit">Submit</button>
                    </form>

                    <?php
        if (isset($_POST['submit'])) {
            $tglPraktik = $_POST['tglPraktik'];
            $jam = $_POST['jam'];
            $harga = $_POST['harga'];

            include_once("../../config.php");

            $result = mysqli_query($conn, "INSERT INTO jadwal(tglPraktik,jam, harga) VALUES('$tglPraktik','$jam', '$harga')");

            echo "<script>alert('Behasil menambahkan data jadwal!');</script>";
            echo ("<script>window.location = './jadwal.php';</script>");
        }
        ?>

                </div>
                <!-- End of Main Content -->
            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Apakah anda yakin ingin keluar dari website ini ?</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                        <a class="btn btn-primary" href="../../logout.php">Keluar</a>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="../../vendor/jquery/jquery.min.js"></script>
            <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Script -->
            <script src="../../js/admin.min.js"></script>



</body>

</html>