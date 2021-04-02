<?php
require_once '../config.php';

$res = [];
if ( isset($_REQUEST['kode']) ) {
   $kode = $_REQUEST['kode'];
   $tipe = $_REQUEST['tipe'];   
   $sql = "SELECT kode, merek, tipe, harga FROM tb_harga WHERE kode = '$kode'";
   $result = $conn->query($sql);
   while ( $row = $result->fetch_assoc()) {
      $res['kode'] = $row['kode'];
      $res['merek'] = $row['merek'];
      $res['tipe'] = $row['tipe'];
      $res['harga'] = $row['harga'];
   }

   $data = file_get_contents('triton.json');
   $spesifikasi = json_decode($data, true);
   $res['transmission'] = $spesifikasi[$tipe]['Transmission'];
   $res['displacement'] = $spesifikasi[$tipe]['Displacement (cc)'];
   $res['wheel'] = $spesifikasi[$tipe]['Wheel & Tire'];
   $res['srs'] = $spesifikasi[$tipe]['Dual SRS Airbags'];
   $res['hill'] = $spesifikasi[$tipe]['Hill Start Assist'];
   $res['keyless'] = $spesifikasi[$tipe]['Keyless Operation System'];
   $res['ground'] = $spesifikasi[$tipe]['Ground Clearance'];   
}
else {
    $res['transmission'] = '';
    $res['displacement'] = '';
    $res['wheel'] = '';
    $res['srs'] = '';
    $res['hill'] = '';
    $res['keyless'] = '';
    $res['ground'] = '';
    $res['kode'] = '';
    $res['merek'] = '';
    $res['tipe'] = '';
    $res['harga'] = ''; 
}


echo json_encode($res);
$conn->close();
