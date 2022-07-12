<!-- 
=========================
Nama : Muhamad Zulfiqor
NIM : 1120031025
Deskripsi Program : Website Booking Praktik Dokter (e-Dok) 
==========================
-->

<?php
include './config.php';

error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: ./admin/home.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "INSERT INTO users(username, password) VALUES('$username','$password')");

    echo "<script>alert('Behasil Registrasi!');</script>";
    echo ("<script>window.location = './login.php';</script>");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

</head>

<body class='login'>
    <div class="login-page">
        <div class="form">
            <form class="login-form" action="" method="POST">
                <h6>Booking Praktik Dokter (e-Dok)</h6>
                <hr>
                <h6>Registrasi</h6>
                <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
                <input type="password" placeholder="Password" name="password" value="<?php echo $password; ?>" required>
                <button name="submit">Regsitrasi</button>
                <p class="message">Sudah punya akun ? <a href="./login.php">Login Disini</a></p>
            </form>
        </div>
    </div>
</body>

</html>