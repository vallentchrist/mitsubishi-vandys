<?php
require_once '../koneksi.php';

$res = [];
if ( isset($_REQUEST['kode']) ) {
   $kode = $_REQUEST['kode'];    
   $tipe = $_POST['tipe'];
   $sql = "SELECT kode, merek, tipe, harga FROM hargamobil WHERE kode = '$kode'";
   $result = $conn->query($sql);
   while ( $row = $result->fetch_assoc()) {
      $res['kode'] = $row['kode'];
      $res['merek'] = $row['merek'];
      $res['tipe'] = $row['tipe'];
      $res['harga'] = $row['harga'];
   }

   $data = file_get_contents('pajero-sport.json');
   $spesifikasi = json_decode($data, true);
   $res['transmission'] = $spesifikasi[$tipe]['Transmission'];
   $res['displacement'] = $spesifikasi[$tipe]['Displacement (cc)'];
   $res['wheel'] = $spesifikasi[$tipe]['Wheel & Tire'];
   $res['hill'] = $spesifikasi[$tipe]['Hill Start Assist'];   
   $res['ground'] = $spesifikasi[$tipe]['Ground Clearance'];   
   $res['blind'] = $spesifikasi[$tipe]['Blind Spot Warning'];
   $res['srs'] = $spesifikasi[$tipe]['SRS Airbag'];
}
else {
    $res['transmission'] = '';
    $res['displacement'] = '';
    $res['wheel'] = '';    
    $res['hill'] = '';    
    $res['ground'] = '';
    $res['kode'] = '';
    $res['merek'] = '';
    $res['tipe'] = '';
    $res['harga'] = ''; 
    $res['blind'] = '';
    $res['srs'] = '';
}


echo json_encode($res);
$conn->close();
