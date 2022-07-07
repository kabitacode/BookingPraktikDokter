<?php 

include_once("config.php");

$id = $_GET['id'];

 
$result = mysqli_query($koneksi, "DELETE FROM booking WHERE id=$id"); 

echo "<script>alert('Data berhasil di hapus!');</script>";
echo("<script>window.location = 'home.php';</script>");
?>