<?php
include_once("./config.php");

$data = $_GET['data'];
$res = mysqli_query($conn, "SELECT booking.id, pasien.namaPasien, pasien.kodePasien, jadwal.jam, jadwal.harga, jadwal.tglPraktik FROM booking join pasien on booking.id_pasien = pasien.id join jadwal on booking.id_jadwal = jadwal.id WHERE pasien.namaPasien = '".$data."' OR pasien.kodePasien = '".$data."' ");
$result['status'] = false;
$result['content'] = '';

if(mysqli_num_rows($res) > 0) {
$no = 1;
while ($user_data = mysqli_fetch_array($res)) {
  $result['status'] = true;
  $result['content'] .= "<tr>";
  $result['content'] .= "<td>" . $no++ . "</td>";
  $result['content'] .= "<td>" . $user_data['kodePasien'] . "</td>";
  $result['content'] .= "<td>" . $user_data['namaPasien'] . "</td>";
  $result['content'] .= "<td>" . $user_data['jam'] . "</td>";
  $result['content'] .= "<td>" . 'Rp .' . number_format($user_data['harga']) . "</td>";
  $result['content'] .= "<td>" . date('d-m-Y', strtotime($user_data['tglPraktik'])) . "</td>";
  $result['content'] .= "</tr>";
}  
} else {
  $result['content'] = '<div class="alert alert-danger col-4" role="alert">
Data yang anda cari tidak ada!
</div>';
}

echo json_encode($result);
?>