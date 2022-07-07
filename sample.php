<?php 
 include_once("config.php");
 session_start();
  
 if (!isset($_SESSION['username'])) {
     header("Location: login.php");
 }

 $result = mysqli_query($conn, "SELECT * FROM booking ORDER BY id ASC");
 
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Style  -->
    <link rel="stylesheet" href="css/styles.css">
    <title>Beranda</title>
</head>

<body>
    <header>
        <h2>e-Tiket</h2>
        <nav>
            <li><a href="home.php" class="active">Beranda</a></li>
            <li><a href="tambah.php">Booking</a></li>
            <li><a href="tentang.php">Tentang</a></li>
            <li><a href="logout.php">logout</a></li>
        </nav>
    </header>

    <section class="hero">
        <div class="background-image"></div>
        <div class="hero-content-area">
            <h1>Si</h1>
            <h3>mempermudah perjalanan anda, pesan tiket kereta api sekarang juga!</h3>
        </div>
    </section>

    <section class="main">
        <h3 class="title">Ayo Booking Tiket Sekarang juga!</h3>
        <a class="btn" href="tambah.php">Booking</a><br><br>
        <hr>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>Tanggal Lahir Pasien</th>
                    <th>No Telpon</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php
            $no = 1;
            while ($user_data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . $user_data['namaPasien'] . "</td>";
                echo "<td>" . date('d-m-Y', strtotime($user_data['tglLahir'])) . "</td>";
                echo "<td>" . $user_data['noTelp'] . "</td>";
                echo "<td>" . $user_data['alamat'] . "</td>";
                echo "<td> <a class='button primary' href='edit.php?id=$user_data[id]'>Edit</a><a class='button del' href='hapus.php?id=$user_data[id]'>Hapus</a></td>";
                echo "</tr>";
            }

            ?>
        </table>

    </section>


    <footer>
        <p>&copy; 2022 Zulfiqor. All Rights Reserved</p>
    </footer>
</body>

</html>