<?php 

include_once("../../config.php");

$id = $_GET['id'];

 
$result = mysqli_query($conn, "DELETE FROM pasien WHERE id=$id"); 

echo "<script>alert('Data berhasil di hapus!');</script>";
echo("<script>window.location = '../pasien/pasien.php';</script>");
?>