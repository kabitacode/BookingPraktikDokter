<?php 
 include_once("./config.php");
//  session_start();
  
//   if (!isset($_SESSION['username'])) {
//       header("Location: login.php");
//     }

//  $result = mysqli_query($conn, 'SELECT booking.id, pasien.namaPasien, jadwal.tglPraktik FROM booking join pasien on booking.id_pasien = pasien.id join jadwal on booking.id_jadwal = jadwal.id WHERE booking.id_pasien = "'.$_SESSION['username'].'" ORDER BY booking.id ASC');
 
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Online Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Fonts  -->
    <link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Style  -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <title>Beranda</title>
</head>

<body>
    <header>
        <h2>e-Dok</h2>
        <nav>
            <li><a href="./home.php">Beranda</a></li>
            <li><a href="./cek-booking.php" class="active">Cek Booking</a></li>

        </nav>
    </header>

    <section class="hero">
        <div class="background-image"></div>
        <div class="hero-content-area">
            <h1>e-Dok</h1>
            <h3>Mempermudah booking praktik dokter anda, ayo booking sekarang juga!</h3>
        </div>
    </section>

    <section class="main">
        <h3 class="title">Info Booking!</h3>
        <hr>
    </section>

    <div class="container-fluid pb-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-2"></div>
            <div class="col-4">
                <div>
                    <input type="text" class="form-control" id="cariBooking" placeholder="Cari Booking ...">
                </div>
            </div>
            <div class="col-4">
                <button name="submit" class="btn btn-primary col-4" type="submit" name="submit" id="submit"> <i
                        class="fas fa-search mr-5"></i> Cari</button>
            </div>
        </div>
    </div>


    <footer>
        <p>&copy; 2022 Zulfiqor. All Rights Reserved</p>
    </footer>

    <script src="js/bootstrap/bootstrap.min.js"></script>
</body>

</html>