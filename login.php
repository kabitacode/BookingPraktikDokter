<?php
include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: ./admin/home.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result -> num_rows > 0) {
      $row =  mysqli_fetch_assoc($result);
      $_SESSION['username'] = $row['username'];

        header("Location: ./admin/home.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="login-form" action="" method="POST">
        <h6>Login</h6>
        <input type="text" placeholder="Username" name="username" value="<?php echo $_POST['username']; ?>" required>
        <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
        <button name="submit">login</button>
      <!-- <p class="message">Not registered? <a href="#">Create an account</a></p> -->
    </form>
  </div>
</div>
</body>
</html>
