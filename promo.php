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
        background: white;
      }      
    </style>
  </head>
  <body>    
    <!-- Header -->
    <div class="container">
      <div class="row p-2">
        <div class="col-3 col-lg-2">
          <a target="_blank" href="https://mitsubishi-motors.co.id">            
            <img src="<?= BASE_URL.DS; ?>assets/img/logo-mitsubishi-hitam.png" alt="Mitsubishi Motors" class="logo">
          </a>
        </div>
        <div class="col-6 col-lg-8 d-flex justify-content-center align-items-center">
          <label class="text-uppercase text-center d-none d-sm-block label-sardana text-black"><span class="mmc-bold">PT. Sardana IndahBerlian Motor</span> <br /> Jl. Jend Gatot Subroto No. 437 Medan</label>          
          <a href="https://mitsubishimedan-vandys.id">            
            <img src="<?= BASE_URL.DS; ?>assets/img/logo-sardana-putih.png" alt="Mitsubishi Sardana" class="w-100 d-block d-sm-none">
            <img src="<?= BASE_URL.DS; ?>assets/img/logo-sardana.png" alt="Mitsubishi Sardana" class="logo d-none d-sm-block">
          </a>
        </div>
        <div class="col-3 col-lg-2 text-right">
          <a target="_blank" href="https://ktbfuso.co.id">            
            <img src="<?= BASE_URL.DS; ?>assets/img/logo-fuso-hitam.png" alt="Mitsubishi Fuso" class="logo">
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
            <a class="nav-link text-white" href="#">Produk <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?=BASE_URL.DS.'promo.php'?>">Promo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Testimoni</a>
          </li>
        </ul>
        <span class="navbar-text text-white mmc-bold d-none d-lg-block">
          Vandystio Danantho
        </span>
      </div>
    </nav>  
    <!-- Akhir Navbar --> 

    <!-- content -->
    <?php
      $result = $conn->query("SELECT * FROM tb_promo WHERE id = (SELECT MAX(id) FROM tb_promo)");
      $row = $result->fetch_array();
    ?>
    <section class="promo" id="promo">
      <div class="container text-black">
        <div class="row justify-content-center mt-5">
          <div class="col-12 mb-3">
            <h2 class="mmc-bold text-center"><?=$row["judul"]?></h2>
          </div>
          <div class="col-12 mb-5 text-center">
            <img src="<?=BASE_URL.DS.'assets/img/promo/'.$row['img_path']?>" alt="Promo Mitsubishi">        
          </div>
          <div class="col-11 col-sm-8 mb-5">
            <?=$row["deskripsi"]?>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir content -->

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
    <!-- <script src="<?= BASE_URL.DS; ?>assets/js/script.js"></script> -->
  </body>
</html>