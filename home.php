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
            <li><a href="./home.php" class="active">Beranda</a></li>
            <li><a href="./cek-booking.php">Cek Booking</a></li>

            <!-- <?php
            session_start();
            if (isset($_SESSION['username'])) {
                echo '<li><a href="./logout.php">Logout</a></li>';
            } else {
                echo '<li><a href="./login.php">Login</a></li>';
            }   
            ?>  -->
            
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
        <h3 class="title">Info Sehat!</h3>
        <hr>
</section>

    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-4 mb-5">
                <div class="card">
                    <img class="card-img-top"
                    src="image/logo-1.jpg"
                        alt="Bologna">
                    <div class="card-body">
                        <h4 class="card-title">Manfaat Kerokan dalam Mengatasi Masuk Angin</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Kerokan merupakan salah satu jenis pengobatan alternatif yang sudah dilakukan sejak dulu. Di Indonesia, kerokan... </p>
                        <a href="#" class="card-link">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card">
                    <img class="card-img-top"
                    src="image/logo-2.jpg"
                        alt="Bologna">
                    <div class="card-body">
                        <h4 class="card-title">Beragam Cara Mengatasi Gatal-Gatal pada Kulit</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Gatal-gatal pada kulit adalah kondisi yang umum terjadi, terutama pada lansia. Cara mengatasi gatal-gatal pada...</p>
                        <a href="#" class="card-link">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card">
                    <img class="card-img-top"
                        src="image/logo-3.jpg"
                        alt="Bologna">
                    <div class="card-body">
                        <h4 class="card-title">Beragam Cara Mengatasi Sakit Kepala</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Hampir semua orang pernah merasakan sakit kepala. Cara mengatasi sakit kepala bisa dilakukan sendiri di...</p>
                        <a href="#" class="card-link">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card">
                    <img class="card-img-top"
                        src="image/logo-3.jpg"
                        alt="Bologna">
                    <div class="card-body">
                        <h4 class="card-title">Beragam Cara Mengatasi Sakit Kepala</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Hampir semua orang pernah merasakan sakit kepala. Cara mengatasi sakit kepala bisa dilakukan sendiri di...</p>
                        <a href="#" class="card-link">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card">
                    <img class="card-img-top"
                    src="image/logo-1.jpg"
                        alt="Bologna">
                    <div class="card-body">
                        <h4 class="card-title">Manfaat Kerokan dalam Mengatasi Masuk Angin</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Kerokan merupakan salah satu jenis pengobatan alternatif yang sudah dilakukan sejak dulu. Di Indonesia, kerokan... </p>
                        <a href="#" class="card-link">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <p>&copy; 2022 Zulfiqor. All Rights Reserved</p>
    </footer>

    <script src="js/bootstrap/bootstrap.min.js"></script>
</body>

</html>