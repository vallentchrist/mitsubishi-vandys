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

   $data = file_get_contents('l300.json');
   $spesifikasi = json_decode($data, true);
   $res['lengthh'] = $spesifikasi[$tipe]['Overall Length'];
   $res['width'] = $spesifikasi[$tipe]['Overall Width'];
   $res['height'] = $spesifikasi[$tipe]['Overall Height'];
   $res['transmission'] = $spesifikasi[$tipe]['Transmission'];
   $res['tank'] = $spesifikasi[$tipe]['Tank Capacity'];
   $res['steering'] = $spesifikasi[$tipe]['Steering'];
   $res['ground'] = $spesifikasi[$tipe]['Ground Clearance'];   
}
else {
    $res['length'] = '';
    $res['width'] = '';
    $res['height'] = '';
    $res['transmission'] = ''; 
    $res['tank'] = ''; 
    $res['steering'] = ''; 
    $res['ground'] = ''; 
}


echo json_encode($res);
$conn->close();
