<?php
   if ( !empty($_SERVER['HTTPS']) && ( 'on' == $_SERVER['HTTPS']) )
   $uri = 'https://';
  else
    $uri = 'http://';

  $uri .= $_SERVER['HTTP_HOST'];
  define ('BASE_URL', $uri.'/vandys');
  define('DS', '/');
  date_default_timezone_set('Asia/Jakarta');

  // Koneksi
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mitsubishi-vandys";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn) {
    echo "Failed to connect!";
  }
  // Akhir Koneksi