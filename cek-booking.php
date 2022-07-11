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
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/bootstrap/bootstrap.min.css">
    <title>Cek Booking</title>
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

    <div class="container-fluid pb-5 container-table">
        <div class="row justify-content-center align-items-center">
            <div class="col-2"></div>
            <div class="col-4">
                <div>
                    <input type="text" class="form-control" id="cariBooking" placeholder="Cari Booking ..." />
                </div>
            </div>
            <div class="col-4">
                <button name="submit" class="btn btn-primary col-4" type="submit" name="submit" id="submit"> <i
                        class="fas fa-search mr-5"></i> Cari</button>
            </div>
        </div>

        <div id="showAlert" class="mt-5 d-flex justify-content-center align-items-center"></div>
      
        <table id="table" class='d-none'>
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Pasien</th>
                    <th scope="col">Nama Pasien</th>
                    <th scope="col">Jam</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Tanggal Praktik</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
  
    <footer>
        <p>&copy; 2022 Zulfiqor. All Rights Reserved</p>
    </footer>

    <script src="./vendor/jquery/jquery.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./js/bootstrap/bootstrap.min.js"></script>
 
  	<script>
      function cari_data(data) {
        $.ajax({
          url: './cariData.php?data=' + data,
          method: 'GET',
          dataType: 'JSON',
          success: function(res) {
            if(res.status) {
            	$('#table tbody').html(res.content);
            	$('#table').show();
            	$('#table').addClass('table-row');
            	$('#table').removeClass('d-none');
            	$('#showAlert').hide();
                $('#showAlert').removeClass('d-flex')
            } else {
            	$('#showAlert').html(res.content);
                $('#table').hide();
                $('#table').removeClass('table-row');
                $('#showAlert').show();
                $('#showAlert').addClass('d-flex')
            }
          }
        })
      }
  		$(document).ready(function() {
        $('#submit').on('click', function(e) {
          e.preventDefault();
          cari_data($('#cariBooking').val());
        })
      })
  	</script>
</body>

</html>