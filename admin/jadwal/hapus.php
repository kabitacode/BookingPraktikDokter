<?php 

include_once("../../config.php");

$id = $_GET['id'];

 
$result = mysqli_query($conn, "DELETE FROM jadwal WHERE id=$id"); 

echo "<script>alert('Data berhasil di hapus!');</script>";
echo("<script>window.location = './jadwal.php';</script>");
?>