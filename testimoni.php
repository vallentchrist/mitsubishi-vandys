<?php
  require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= BASE_URL.DS.'assets/css/lightbox.css'; ?>">      
    <script src="https://kit.fontawesome.com/00610b519d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= BASE_URL.DS; ?>assets/css/style.css" />
    <title>Vandys Mitsubishi Medan - Promo & Simulasi Kredit Mitsubishi</title>
    <style>
      body {
        background: #e6dada; /* fallback for old browsers */
        background: -webkit-linear-gradient(
          to bottom,
          #274046,
          #e6dada
        ); /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(
          to bottom,
          #274046,
          #e6dada
        ); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background-attachment: fixed;
      }
    </style>
  </head>
  <body>    
    <!-- Header -->
    <div class="container">
      <div class="row p-2">
        <div class="col-3 col-lg-2">
          <a target="_blank" href="https://mitsubishi-motors.co.id">            
            <img src="<?= BASE_URL.DS; ?>assets/img/logo-mitsubishi.png" alt="Mitsubishi Motors" class="logo">
          </a>
        </div>
        <div class="col-6 col-lg-8 d-flex justify-content-center align-items-center" onclick="window.location='https://mitsubishimedan-vandys.id/'">
          <label class="text-uppercase text-center d-none d-sm-block label-sardana text-white" style="cursor: pointer"><span class="mmc-bold">PT. Sardana IndahBerlian Motor</span> <br /> Jl. Jend Gatot Subroto No. 437 Medan</label>          
          <a href="<?=BASE_URL?>">            
            <img src="<?= BASE_URL.DS; ?>assets/img/logo-sardana-putih.png" alt="Mitsubishi Sardana" class="w-100 d-block d-sm-none">
            <img src="<?= BASE_URL.DS; ?>assets/img/logo-sardana.png" alt="Mitsubishi Sardana" class="logo d-none d-sm-block">
          </a>
        </div>
        <div class="col-3 col-lg-2 text-right">
          <a target="_blank" href="https://ktbfuso.co.id">            
            <img src="<?= BASE_URL.DS; ?>assets/img/logo-fuso.png" alt="Mitsubishi Fuso" class="logo">
          </a>
        </div>
      </div>
    </div>
    <!-- Akhir Header -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-navbar">
      <a class="navbar-brand text-success mmc-bold" target="_blank" href="https://wa.me/+6282370304974?text=Hai Kak Vandys, Saya ingin bertanya tentang produk Mitsubishi">
        <i class="fab fa-lg fa-whatsapp"></i> 0823 7030 4974
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">   
          <li class="nav-item">
            <a class="nav-link text-white text-uppercase mmc-bold" href="<?=BASE_URL.DS.'promo.php'?>">Promo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white text-uppercase mmc-bold" href="<?=BASE_URL.DS.'testimoni.php'?>">Testimoni</a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <a class="btn btn-dark dropdown-toggle dropdown-produk text-uppercase mmc-bold" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: black; border: 1px solid black">Produk</a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background: black">
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'product/xpander.php'?>">XPANDER <img src="https://sardanagroup.co.id/mitsubishi-medan/assets/img/thumbnail/xpander-thumb.jpg" alt="Mitsubishi Xpander" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'product/xpander-cross.php'?>">XPANDER CROSS <img src="https://sardanagroup.co.id/mitsubishi-medan/assets/img/thumbnail/xpander-cross-thumb.jpg" alt="Mitsubishi Xpander Cross" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'product/pajero-sport.php'?>">PAJERO SPORT <img src="https://sardanagroup.co.id/mitsubishi-medan/assets/img/thumbnail/new-pajero-sport-thumb.png" alt="Mitsubishi Pajero Sport" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'product/eclipse-cross.php'?>">ECLIPSE CROSS <img src="https://sardanagroup.co.id/mitsubishi-medan/assets/img/thumbnail/eclipse-cross-thumb.png" alt="Mitsubishi Eclipse Cross" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'product/triton.php'?>">TRITON <img src="https://sardanagroup.co.id/mitsubishi-medan/assets/img/thumbnail/triton-thumb.png" alt="Mitsubishi Triton" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'product/l300.php'?>">L300 <img src="https://sardanagroup.co.id/mitsubishi-medan/assets/img/thumbnail/l300-thumb.png" alt="Mitsubishi L300" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'product/colt-diesel.php'?>">COLT DIESEL <img src="https://sardanagroup.co.id/fuso-medan/assets/img/thumbnails/CD01.png" alt="Mitsubishi Colt Diesel" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'product/fuso.php'?>">FUSO <img src="https://sardanagroup.co.id/fuso-medan/assets/img/thumbnails/FS01.png" alt="Mitsubishi Fuso" class="img-dropdown"></a>
              </div>
            </div>
          </li>
        </ul>
        <span class="navbar-text text-white mmc-bold d-none d-lg-block">
          Vandystio Danantho
        </span>
      </div>
    </nav>  
    <!-- Akhir Navbar -->  

    <div class="container mt-5">
      <div class="row align-items-center">      
      <?php
        $result = $conn->query("SELECT * FROM tb_testimoni WHERE id = (SELECT MAX(id) FROM tb_testimoni)");
        $row = $result->fetch_array();
      ?>
        <div class="col-12 col-sm-6 mb-5">
          <img src="<?=BASE_URL.DS.'assets/img/testimoni/'.$row['nama']?>" alt="Galeri Vandys" class="w-100 img-testimoni">
        </div>
        <div class="col-12 col-sm-6 mb-5">
          <hr style="height: 2px;background-color: red;border: none;">
          <h5 class="mmc-bold"><?=$row["caption"]?></h5>          
        </div>
      </div>
      <div class="row align-items-center">
      <?php
        $result = $conn->query("SELECT * FROM tb_testimoni WHERE id = (SELECT MAX(id) - 1 FROM tb_testimoni)");
        $row = $result->fetch_array();
      ?>
        <div class="col-12 col-sm-6 mb-5 order-1 order-sm-2">
          <img src="<?=BASE_URL.DS.'assets/img/testimoni/'.$row['nama']?>" alt="Galeri Vandys" class="w-100 img-testimoni">
        </div>
        <div class="col-12 col-sm-6 mb-5 order-2 order-sm-1">
          <hr style="height: 2px;background-color: red;border: none;">
          <h5 class="mmc-bold"><?=$row["caption"]?></h5>          
        </div>
      </div>
      <div class="row align-items-center">
      <?php
        $result = $conn->query("SELECT * FROM tb_testimoni WHERE id = (SELECT MAX(id) - 2 FROM tb_testimoni)");
        $row = $result->fetch_array();
      ?>
        <div class="col-12 col-sm-6 mb-5 order-1">
          <img src="<?=BASE_URL.DS.'assets/img/testimoni/'.$row['nama']?>" alt="Galeri Vandys" class="w-100 img-testimoni">
        </div>
        <div class="col-12 col-sm-6 mb-5 order-2">
          <hr style="height: 2px;background-color: red;border: none;">
          <h5 class="mmc-bold"><?=$row["caption"]?></h5>          
        </div>
      </div>
      <div class="row align-items-center">
      <?php
        $result = $conn->query("SELECT * FROM tb_testimoni WHERE id = (SELECT MAX(id) - 3 FROM tb_testimoni)");
        $row = $result->fetch_array();
      ?>
        <div class="col-12 col-sm-6 mb-5 order-1 order-sm-2">
          <img src="<?=BASE_URL.DS.'assets/img/testimoni/'.$row['nama']?>" alt="Galeri Vandys" class="w-100 img-testimoni">
        </div>
        <div class="col-12 col-sm-6 mb-5 order-2 order-sm-1">
          <hr style="height: 2px;background-color: red;border: none;">
          <h5 class="mmc-bold"><?=$row["caption"]?></h5>          
        </div>
      </div>
      <div class="row align-items-center">
      <?php
        $result = $conn->query("SELECT * FROM tb_testimoni WHERE id = (SELECT MAX(id) - 4 FROM tb_testimoni)");
        $row = $result->fetch_array();
      ?>
        <div class="col-12 col-sm-6 mb-5 order-1">
          <img src="<?=BASE_URL.DS.'assets/img/testimoni/'.$row['nama']?>" alt="Galeri Vandys" class="w-100 img-testimoni">
        </div>
        <div class="col-12 col-sm-6 mb-5 order-2">
          <hr style="height: 2px;background-color: red;border: none;">
          <h5 class="mmc-bold"><?=$row["caption"]?></h5>          
        </div>
      </div>
      <div class="row align-items-center">
      <?php
        $result = $conn->query("SELECT * FROM tb_testimoni WHERE id = (SELECT MAX(id) - 5 FROM tb_testimoni)");
        $row = $result->fetch_array();
      ?>
        <div class="col-12 col-sm-6 mb-5 order-1 order-sm-2">
          <img src="<?=BASE_URL.DS.'assets/img/testimoni/'.$row['nama']?>" alt="Galeri Vandys" class="w-100 img-testimoni">
        </div>
        <div class="col-12 col-sm-6 mb-5 order-2 order-sm-1">
          <hr style="height: 2px;background-color: red;border: none;">
          <h5 class="mmc-bold"><?=$row["caption"]?></h5>          
        </div>
      </div>
      <div class="row align-items-center">
      <?php
        $result = $conn->query("SELECT * FROM tb_testimoni WHERE id = (SELECT MAX(id) - 6 FROM tb_testimoni)");
        $row = $result->fetch_array();
      ?>
        <div class="col-12 col-sm-6 mb-5 order-1">
          <img src="<?=BASE_URL.DS.'assets/img/testimoni/'.$row['nama']?>" alt="Galeri Vandys" class="w-100 img-testimoni">
        </div>
        <div class="col-12 col-sm-6 mb-5 order-2">
          <hr style="height: 2px;background-color: red;border: none;">
          <h5 class="mmc-bold"><?=$row["caption"]?></h5>          
        </div>
      </div>
      <div class="row align-items-center">
      <?php
        $result = $conn->query("SELECT * FROM tb_testimoni WHERE id = (SELECT MAX(id) - 7 FROM tb_testimoni)");
        $row = $result->fetch_array();
      ?>
        <div class="col-12 col-sm-6 mb-5 order-1 order-sm-2">
          <img src="<?=BASE_URL.DS.'assets/img/testimoni/'.$row['nama']?>" alt="Galeri Vandys" class="w-100 img-testimoni">
        </div>
        <div class="col-12 col-sm-6 mb-5 order-2 order-sm-1">
          <hr style="height: 2px;background-color: red;border: none;">
          <h5 class="mmc-bold"><?=$row["caption"]?></h5>          
        </div>
      </div>
      <div class="row align-items-center">
      <?php
        $result = $conn->query("SELECT * FROM tb_testimoni WHERE id = (SELECT MAX(id) - 8 FROM tb_testimoni)");
        $row = $result->fetch_array();
      ?>
        <div class="col-12 col-sm-6 mb-5 order-1">
          <img src="<?=BASE_URL.DS.'assets/img/testimoni/'.$row['nama']?>" alt="Galeri Vandys" class="w-100 img-testimoni">
        </div>
        <div class="col-12 col-sm-6 mb-5 order-2">
          <hr style="height: 2px;background-color: red;border: none;">
          <h5 class="mmc-bold"><?=$row["caption"]?></h5>          
        </div>
      </div>
      <div class="row align-items-center">
      <?php
        $result = $conn->query("SELECT * FROM tb_testimoni WHERE id = (SELECT MAX(id) - 9 FROM tb_testimoni)");
        $row = $result->fetch_array();
      ?>
        <div class="col-12 col-sm-6 mb-5 order-1 order-sm-2">
          <img src="<?=BASE_URL.DS.'assets/img/testimoni/'.$row['nama']?>" alt="Galeri Vandys" class="w-100 img-testimoni">
        </div>
        <div class="col-12 col-sm-6 mb-5 order-2 order-sm-1">
          <hr style="height: 2px;background-color: red;border: none;">
          <h5 class="mmc-bold"><?=$row["caption"]?></h5>          
        </div>
      </div>      
    </div>

    <!-- Footer -->
    <?php require_once 'footer.php'; ?>
    <!-- Akhir Footer -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
      integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>    
    <script src="<?= BASE_URL.DS; ?>assets/js/lightbox.js"></script>
    <script src="<?= BASE_URL.DS; ?>assets/js/script.js"></script>
  </body>
</html>