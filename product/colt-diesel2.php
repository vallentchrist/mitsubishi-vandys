<?php 
  require_once "../config.php";
  function rupiah($angka)
  {
    $hasil = "Rp " . number_format($angka,0,',','.');
    return $hasil;
  }
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
    <!-- Bootstrap Select -->
    <link rel="stylesheet" href="<?= BASE_URL.DS ?>assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= BASE_URL.DS.'assets/css/lightbox.css'; ?>">      
    <script src="https://kit.fontawesome.com/00610b519d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= BASE_URL.DS; ?>assets/css/style.css" />
    <style>
      body {
        background: #dadada;
        color: black;
      }      
    </style>
    <title>Mitsubishi Colt Diesel - Promo & Simulasi Kredit Mitsubishi</title>
  </head>
  <body>
    <!-- Header -->
    <div class="container-fluid" style="background-color: #b7b3b3;">
      <div class="row p-2">
        <div class="col-3 col-lg-2">
          <a target="_blank" href="https://mitsubishi-motors.co.id">            
            <img src="<?= BASE_URL.DS; ?>assets/img/logo-mitsubishi.png" alt="Mitsubishi" class="logo">
          </a>
        </div>
        <div class="col-6 col-lg-8 d-flex justify-content-center align-items-center">
          <a href="<?= BASE_URL; ?>" class="header-alamat">
            <span class="text-uppercase text-center d-none d-sm-block label-sardana"><span class="mmc-bold">PT. Sardana IndahBerlian Motor</span> <br /> Jl. Jend Gatot Subroto No. 437 Medan</span>
          </a>
          <a href="<?= BASE_URL; ?>">
            <img src="<?= BASE_URL.DS; ?>assets/img/logo-sardana-putih.png" alt="Sardana" class="w-100 d-block d-sm-none">
            <img src="<?= BASE_URL.DS; ?>assets/img/logo-sardana.png" alt="Sardana" class="logo d-none d-sm-block">
          </a>
        </div>
        <div class="col-3 col-lg-2 text-right">
          <a target="_blank" href="https://ktbfuso.co.id">            
            <img src="<?= BASE_URL.DS; ?>assets/img/logo-fuso.png" alt="Sardana" class="logo">
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
            <a class="nav-link text-white" href="#">Promo</a>
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
    
    <section class="harga" id="harga">
      <div class="container">
        <div class="row text-center">
          <div class="col-12 mt-5">
            <h1 class="mmc-medium">Harga Colt Diesel</h1>
            <p>Lihat harga terbaru truk Colt Diesel untuk wilayah medan dan sekitarnya.</p>
          </div>          
          <div class="col-12">
            <table class="table table-striped table-bordered table-custom">
              <thead>
                <tr class="bg-warning text-white">
                  <th scope="col">Tipe</th>
                  <th scope="col">Harga</th>                  
                </tr>
              </thead>
              <tbody>
              <?php
                $result = $conn->query("SELECT * FROM tb_harga WHERE merek = 'COLT DIESEL' AND discontinue = 0 ORDER BY harga");
                while($row = $result->fetch_array()) :
              ?>
                <tr>                  
                  <td class="mmc-medium"><?=$row["tipe"]?></td>
                  <td class="mmc-medium"><?=rupiah($row["harga"])?></td>
                </tr>    
              <?php
                endwhile;
              ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <section class="video mt-5 mb-5 bg-parallax" id="video">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 text-center mt-4 text-white">
            <h1 class="mmc-medium">Video Produk</h1>
            <p>Dapatkan video menarik mengenai produk Mitsubishi Colt Diesel berikut.</p>
          </div>
          <div class="col-12 text-center mb-4">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/-ep-ag4lp2o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>                
    </section>
    <?php require_once "../footer.php"; ?>

  </body>
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
  <script src="<?= BASE_URL.DS ?>assets/js/bootstrap-select.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>    
  <script src="<?= BASE_URL.DS; ?>assets/js/lightbox.js"></script>
  <script src="<?= BASE_URL.DS; ?>assets/js/script.js"></script>
  </body>
</html>
