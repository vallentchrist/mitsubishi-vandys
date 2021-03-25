<?php
require_once '../koneksi.php';

$res = [];
if ( isset($_REQUEST['kode']) ) {
   $kode = $_REQUEST['kode'];
   $tipe = $_REQUEST['tipe'];
   $sql = "SELECT kode, merek, tipe, harga FROM hargamobil WHERE kode = '$kode'";
   $result = $conn->query($sql);
   while ( $row = $result->fetch_assoc()) {
      $res['kode'] = $row['kode'];
      $res['merek'] = $row['merek'];
      $res['tipe'] = $row['tipe'];
      $res['harga'] = $row['harga'];
   }
}
else {
    $res['kode'] = '';
    $res['merek'] = '';
    $res['tipe'] = '';
    $res['harga'] = ''; 
}


echo json_encode($res);
$conn->close();
