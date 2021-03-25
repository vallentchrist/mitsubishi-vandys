<?php
  if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])){
    $uri = 'https://';
  }
  else {
    $uri = 'http://';
  }

  $uri .= $_SERVER['HTTP_HOST'];
  // local
  define ('BASE_URL', $uri.'/vandys');
  // live
  // define ('BASE_URL', $uri);
  define('DS', '/');
  date_default_timezone_set('Asia/Jakarta');

  // Koneksi Live
  // $servername = "localhost";
  // $username = "mith3351_admin";
  // $password = "JackyVallent1997";
  // $dbname = "mith3351_vandys";
  // $conn = mysqli_connect($servername, $username, $password, $dbname);
  // if (!$conn) {
  //   echo "Failed to connect!";
  // }
  // Akhir Koneksi Live

  // Koneksi Local
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mitsubishi-vandys";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn) {
    echo "Failed to connect!";
  }
  // Akhir Koneksi Local