<?php

include_once("../config.php");

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $kodePasien = $_POST['kodePasien'];
    $namaPasien = $_POST['namaPasien'];
    $alamat = $_POST['alamat'];
    $noTelp = $_POST['noTelp'];
    $tglLahir = $_POST['tglLahir'];

    
    $result = mysqli_query($conn, "UPDATE pasien SET kodePasien='$kodePasien', namaPasien='$namaPasien', alamat='$alamat', noTelp='$noTelp',
    tglLahir='$tglLahir' WHERE id=$id");

    echo "<script>alert('Data berhasil di edit!');</script>";
    echo("<script>window.location = './pasien.php';</script>");
}

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM pasien WHERE id=$id");

while ($user_data = mysqli_fetch_array($result)) {
    $id = $user_data['id'];
    $kodePasien = $user_data['kodePasien'];
    $namaPasien = $user_data['namaPasien'];
    $alamat = $user_data['alamat'];
    $noTelp = $user_data['noTelp'];
    $tglLahir = $user_data['tglLahir'];
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

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./home.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">e-Dok</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="../image/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
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
                        <h1 class="h3 mb-0 text-gray-800">Tambah Data</h1>
                    </div>


                    <form id="form" action="" method="POST">
                        <div class="mb-3">
                            <label for="kodePasien" class="form-label">Kode Pasien</label>
                            <input placeholder="Kode Pasien"  class="form-control" type="text" name="kodePasien" id="kodePasien" value="<?php echo $kodePasien; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="namaPasien" class="form-label">Nama Pasien</label>
                            <input placeholder="Nama Pasien"  class="form-control" type="text" name="namaPasien" id="namaPasien" value="<?php echo $namaPasien; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="tglLahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tglLahir" id="tgllahir" value="<?php echo $tglLahir; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="noTelp" class="form-label">No Telepon</label>
                            <input placeholder="No Telepon"  class="form-control" type="text" name="noTelp" id="noTelp" value="<?php echo $noTelp; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea placeholder="Alamat" class="form-control" name="alamat" id="alamat"><?php echo $alamat; ?></textarea>
                        </div>
                            <input type="hidden" name="id" value="<?php echo $id ?>">
        <button type="submit" class="btn btn-primary" name="update" id="update" value="update">Update</button>

                    </form>


                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2021</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

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
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../js/sb-admin-2.min.js"></script>



</body>

</html>