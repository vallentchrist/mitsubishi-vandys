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

   $data = file_get_contents('eclipse-cross.json');
   $spesifikasi = json_decode($data, true);
   $res['ground'] = $spesifikasi[$tipe]['Ground Clearance'];
   $res['displacement'] = $spesifikasi[$tipe]['Displacement (cc)'];
   $res['wheel'] = $spesifikasi[$tipe]['Wheel & Tire'];
   $res['cruise'] = $spesifikasi[$tipe]['Cruise Control'];   
   $res['transmission'] = $spesifikasi[$tipe]['Transmission'];   
   $res['antenna'] = $spesifikasi[$tipe]['Antenna'];
   $res['sunroof'] = $spesifikasi[$tipe]['Sunroof'];
}
else {
    $res['transmission'] = '';
    $res['displacement'] = '';
    $res['wheel'] = '';    
    $res['cruise'] = '';    
    $res['antenna'] = '';
    $res['kode'] = '';
    $res['merek'] = '';
    $res['tipe'] = '';
    $res['harga'] = ''; 
    $res['sunroof'] = '';
    $res['ground'] = '';
}


echo json_encode($res);
$conn->close();
