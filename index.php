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
    <link rel="stylesheet" href="<?= BASE_URL.DS; ?>assets/css/style.css" />
    <title>Vandys Mitsubishi Medan - Promo & Simulasi Kredit Mitsubishi</title>
  </head>
  <body>    
    <!-- Header -->
    <div class="container">
      <div class="row p-2">
        <div class="col-3 col-lg-2">
          <a href="#">
            <img src="<?= BASE_URL.DS; ?>assets/img/logo-mitsubishi.png" alt="Mitsubishi" class="logo">
          </a>
        </div>
        <div class="col-6 col-lg-8 d-flex justify-content-center align-items-center">
          <label class="text-uppercase text-center d-none d-sm-block"><span class="mmc-bold">PT. Sardana IndahBerlian Motor</span> <br /> Jl. Jend Gatot Subroto No. 437 Medan</label>          
          <a href="#">
            <img src="<?= BASE_URL.DS; ?>assets/img/logo-sardana-putih.png" alt="Sardana" class="w-100 d-block d-sm-none">
            <img src="<?= BASE_URL.DS; ?>assets/img/logo-sardana.png" alt="Sardana" class="logo d-none d-sm-block">
          </a>
        </div>
        <div class="col-3 col-lg-2 text-right">
          <a href="#">
            <img src="<?= BASE_URL.DS; ?>assets/img/logo-fuso.png" alt="Sardana" class="logo">
          </a>
        </div>
      </div>
    </div>
    <!-- Akhir Header -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
      <a class="navbar-brand" target="_blank" href="https://wa.me/+6282370304974?text=Saya ingin bertanya tentang produk Mitsubishi"> 0823-7030-4974</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
        </ul>
        <span class="navbar-text">
          Navbar text with an inline element
        </span>
      </div>
    </nav>  
    <!-- Akhir Navbar -->

    <!-- Profile -->
    <!-- <div class="container">
      <div class="row p-4 align-items-center">
        <div class="col-12 col-lg-6 text-center">
          <img class="thumb" src="<?= BASE_URL.DS; ?>/assets/img/user.png" alt="Vandystio Danantho">
        </div>
        <div class="col-12 col-lg-6 text-center">
          <h1 class="mmc-medium">Vandystio Danatho</h1>
          <label class="mmc-medium">Counter Sales</label>
          <p class="text-left">Percayakan urusan mobil Mitsubishi anda bersama kami. Vandys – Counter Sales dari Mitsubishi Sardana Medan Siap melayani anda dan memberikan penawaran spesial yang terbaik bagi anda. Pertanyaan seputar Spesifikasi , Simulasi Kredit, Info Stok, Promo Terbaru, Booking Service, Test Drive dan Pemesanan Silahkan menghubungi kami disini.</p>
        </div>
      </div>    
    </div> -->
    <!-- Akhir Profile -->

    <!-- Profile -->
    <div class="container-100" style="
    background: url(http://localhost/vandys/assets/img/banner-profile-pic.jpg);
    background-size: cover;">
      <div class="col-12 col-lg-6 text-right container-profile">
        <h1 class="mmc-bold">Vandystio Danatho</h1>
        <label class="mmc-bold">Counter Sales</label>
        <p>Percayakan urusan mobil Mitsubishi anda bersama kami. Vandys – Counter Sales dari Mitsubishi Sardana Medan Siap melayani anda dan memberikan penawaran spesial yang terbaik bagi anda. Pertanyaan seputar Spesifikasi , Simulasi Kredit, Info Stok, Promo Terbaru, Booking Service, Test Drive dan Pemesanan Silahkan menghubungi kami disini.
      </div>  
      <a target="_blank" href="https://wa.me/+6282370304974?text=Saya ingin bertanya tentang produk Mitsubishi" class="btn btn-danger" style="margin-left: 1150px;margin-bottom: 100px;">Hubungi Saya!</a>
    </div>
    <!-- Akhir Profile -->

    <!-- Testimoni -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-12">
          <h1 class="mmc-bold text-center">Testimoni</h1>
        </div>
      </div>
    </div>
    <div class="swiper-container swiper-container-testimoni">
      <div class="swiper-wrapper">
        <div class="swiper-slide swiper-slide-testimoni">
          <a href="<?= BASE_URL.DS.'assets/img/testimoni/1.jpeg'; ?>" data-lightbox="galeri" data-title="Terima Kasih Bapak atas pembelian 1 unit Mitsubishi Xpander.">
            <img src="<?= BASE_URL.DS; ?>/assets/img/testimoni/1.jpeg" alt="Vandystio Danantho" class="w-100">
          </a>
        </div>        
        <div class="swiper-slide swiper-slide-testimoni">
          <a href="<?= BASE_URL.DS.'assets/img/testimoni/3.jpeg'; ?>" data-lightbox="galeri" data-title="Terima Kasih Bapak atas pembelian 1 unit Mitsubishi Xpander.">
            <img src="<?= BASE_URL.DS; ?>/assets/img/testimoni/3.jpeg" alt="Vandystio Danantho" class="w-100">
          </a>
        </div>
        <div class="swiper-slide swiper-slide-testimoni">
          <a href="<?= BASE_URL.DS.'assets/img/testimoni/4.jpeg'; ?>" data-lightbox="galeri" data-title="Terima Kasih Bapak atas pembelian 1 unit Mitsubishi Xpander.">
            <img src="<?= BASE_URL.DS; ?>/assets/img/testimoni/4.jpeg" alt="Vandystio Danantho" class="w-100">
          </a>
        </div>        
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
    </div>
    <!-- Akhir Testimoni -->

    <!-- Product -->
    <div class="container-100 mt-5">
      <h1 class="mmc-bold text-center">Produk Mitsubishi</h1>
      <div class="swiper-container swiper-container-product text-dark">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="display-grid">
              <div class="card n1">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/xpander-white.webp'; ?>" class="card-img-top" alt="Mitsubishi Xpander">
                <div class="card-body">
                  <h5 class="card-title text-uppercase text-center mmc-medium">Xpander</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-danger">Detail</a>
                </div>
              </div>
              <div class="card n2">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/xpander-white.webp'; ?>" class="card-img-top" alt="Mitsubishi Xpander">
                <div class="card-body">
                  <h5 class="card-title text-uppercase text-center mmc-medium">Xpander</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-danger">Detail</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="display-grid">
              <div class="card n1">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/xpander-white.webp'; ?>" class="card-img-top" alt="Mitsubishi Xpander">
                <div class="card-body">
                  <h5 class="card-title text-uppercase text-center mmc-medium">Xpander</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-danger">Detail</a>
                </div>
              </div>
              <div class="card n2">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/xpander-white.webp'; ?>" class="card-img-top" alt="Mitsubishi Xpander">
                <div class="card-body">
                  <h5 class="card-title text-uppercase text-center mmc-medium">Xpander</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-danger">Detail</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="display-grid">
              <div class="card n1">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/xpander-white.webp'; ?>" class="card-img-top" alt="Mitsubishi Xpander">
                <div class="card-body">
                  <h5 class="card-title text-uppercase text-center mmc-medium">Xpander</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-danger">Detail</a>
                </div>
              </div>
              <div class="card n2">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/xpander-white.webp'; ?>" class="card-img-top" alt="Mitsubishi Xpander">
                <div class="card-body">
                  <h5 class="card-title text-uppercase text-center mmc-medium">Xpander</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-danger">Detail</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="display-grid">
              <div class="card n1">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/xpander-white.webp'; ?>" class="card-img-top" alt="Mitsubishi Xpander">
                <div class="card-body">
                  <h5 class="card-title text-uppercase text-center mmc-medium">Xpander</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-danger">Detail</a>
                </div>
              </div>
              <div class="card n2">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/xpander-white.webp'; ?>" class="card-img-top" alt="Mitsubishi Xpander">
                <div class="card-body">
                  <h5 class="card-title text-uppercase text-center mmc-medium">Xpander</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-danger">Detail</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <!-- Akhir Product -->

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
