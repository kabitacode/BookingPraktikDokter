<?php 
 include_once("./config.php");
 session_start();
  
  if (!isset($_SESSION['username'])) {
      header("Location: login.php");
    }

 $result = mysqli_query($conn, 'SELECT booking.id, pasien.namaPasien, jadwal.tglJadwal FROM booking join pasien on booking.id_pasien = pasien.id join jadwal on booking.id_jadwal = jadwal.id WHERE booking.id_pasien = "'.$_SESSION['username'].'" ORDER BY booking.id ASC');
 
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
            <li><a href="./profile.php" class="active">Profile</a></li>

            <?php
            if (isset($_SESSION['username'])) {
                echo '<li><a href="./logout.php">Logout</a></li>';
            } else {
                echo '<li><a href="./login.php">Login</a></li>';
            }   
            ?> 
            
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
        <h3 class="title">Info Profile!</h3>
        <hr>
</section>

<div class="container table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th> 
                                    <th scope="col">Tanggal Jadwal </th>
                                    <th scope="col">Nama Pasien</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
            $no = 1;
            while ($user_data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . date('d-m-Y', strtotime($user_data['tglJadwal'])) . "</td>";
                echo "<td>" . $user_data['namaPasien'] . "</td>";
                echo "<td> <a class='btn btn-primary mr-2' href='../admin/booking/edit.php?id=$user_data[id]'><i class='fas fa-edit fa-sm text-white'></i> Edit</a><a class='btn btn-danger' href='../admin/booking/hapus.php?id=$user_data[id]'><i class='fas fa-trash fa-sm text-white mr-1'></i>Hapus</a></td>";
                echo "</tr>";
            }

            ?>
                            </tbody>
                        </table>
                    </div>
                </div>


    <footer>
        <p>&copy; 2022 Zulfiqor. All Rights Reserved</p>
    </footer>

    <script src="js/bootstrap/bootstrap.min.js"></script>
</body>

</html>