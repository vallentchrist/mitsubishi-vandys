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

    <!-- Google Search Console -->
    <meta name="google-site-verification" content="fvNZOv4Grsg_Mui4HHEs4CvNSmF1iWSCwZ1qTRg-J_I" />
    <!-- Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R0DN5V1XZD"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-R0DN5V1XZD');
    </script>

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
  </head>
  <body>    
    <!-- Header -->
    <div class="container">
      <div class="row p-2">
        <div class="col-3 col-lg-2">
          <a target="_blank" href="https://mitsubishi-motors.co.id">            
            <img src="<?= BASE_URL.DS; ?>assets/img/logo-mitsubishi.png" alt="Mitsubishi" class="logo">
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
            <img src="<?= BASE_URL.DS; ?>assets/img/logo-fuso.png" alt="Sardana" class="logo">
          </a>
        </div>
      </div>
    </div>
    <!-- Akhir Header -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-navbar">
      <a class="navbar-brand text-success mmc-bold" target="_blank" href="https://wa.me/+6282370304974?text=Hai Kak Vandys, Saya ingin bertanya tentang produk Mitsubishi.">
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
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background: black; padding: 0">
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'product/pajero-sport.php'?>">PAJERO SPORT <img src="<?=BASE_URL.DS.'assets/img/thumbs/pajero-sport-thumb.png'?>" alt="Mitsubishi Pajero Sport" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'product/xpander.php'?>">XPANDER <img src="<?=BASE_URL.DS.'assets/img/thumbs/xpander-thumb.png'?>" alt="Mitsubishi Xpander" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'product/xpander-cross.php'?>">XPANDER CROSS <img src="<?=BASE_URL.DS.'assets/img/thumbs/xpander-cross-thumb.png'?>" alt="Mitsubishi Xpander Cross" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'product/eclipse-cross.php'?>">ECLIPSE CROSS <img src="<?=BASE_URL.DS.'assets/img/thumbs/eclipse-cross-thumb.png'?>" alt="Mitsubishi Eclipse Cross" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'product/triton.php'?>">TRITON <img src="<?=BASE_URL.DS.'assets/img/thumbs/triton-thumb.png'?>" alt="Mitsubishi Triton" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'product/l300.php'?>">L300 <img src="<?=BASE_URL.DS.'assets/img/thumbs/l300-thumb.png'?>" alt="Mitsubishi L300" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'product/colt-diesel.php'?>">COLT DIESEL <img src="<?=BASE_URL.DS.'assets/img/thumbs/colt-diesel-thumb.png'?>" alt="Mitsubishi Colt Diesel" class="img-dropdown"></a>
                <a class="dropdown-item dropdown-hover text-white mmc-bold" href="<?=BASE_URL.DS.'product/fuso.php'?>">FUSO <img src="<?=BASE_URL.DS.'assets/img/thumbs/fuso-thumb.png'?>" alt="Mitsubishi Fuso" class="img-dropdown"></a>
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

    <!-- Profile -->
    <div class="container-100 outer-container-profile">
      <div class="row ml-0 mr-0 align-items-center">
        <div class="col-12 col-lg-6 text-center">
          <img class="bg-profile" src="<?= BASE_URL.DS.'assets/img/bg-foto.png'; ?>" alt="Mitsubishi Vandys">
        </div>
        <div class="col-12 col-lg-6 container-profile">        
          <h1 class="mmc-bold">Vandystio Danantho</h1>
          <h5 class="mmc-bold">Counter Sales</h5>
          <p class="mt-2 p-profile">Percayakan urusan mobil Mitsubishi anda bersama kami. Vandys – Counter Sales dari Mitsubishi Sardana Medan Siap melayani anda dan memberikan penawaran spesial yang terbaik bagi anda. Pertanyaan seputar Spesifikasi , Simulasi Kredit, Info Stok, Promo Terbaru, Booking Service, Test Drive dan Pemesanan Silahkan menghubungi kami disini.
          <div class="mb-5">
            <a target="_blank" href="https://wa.me/+6282370304974?text=Hai, Kak Vandys. Saya ingin bertanya tentang produk Mitsubishi" class="btn btn-danger">Hubungi Saya!</a>
          </div>
        </div>
      </div>      
    </div>
    <!-- Akhir Profile -->

    <!-- Testimoni -->    
    <div class="container-fluid">
      <div class="swiper-container swiper-container-testimoni mt-2">
        <div class="swiper-wrapper">
          <?php
            $result = $conn->query("SELECT * FROM tb_testimoni ORDER BY id DESC");
            while ($row = $result->fetch_array()) :
          ?>
          <div class="swiper-slide swiper-slide-testimoni">
            <a href="<?=BASE_URL.DS.'assets/img/testimoni/'.$row['nama']?>" data-lightbox="galeri" data-title="<?=$row['caption']?>">
              <img src="<?=BASE_URL.DS.'assets/img/testimoni/'.$row['nama']?>" alt="<?=$row['caption']?>" class="w-100">
            </a>
          </div>        
          <?php
            endwhile;
          ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <!-- <div class="container-fluid mt-5">    
      <div class="row">
        <div class="col-6 col-sm-3 col-lg-2 text-center">
          <a target="_blank" href="https://wa.me/+6282370304974?text=Hai, Kak Vandys. Saya ingin bertanya tentang produk Mitsubishi" class="btn btn-danger"><i class="fab fa-lg fa-whatsapp"></i> Hubungi Kami</a>                    
        </div>        
        <div class="col-sm-6 col-lg-8 text-center d-none d-sm-block">
          <hr style="height: 2px;background-color: red;border: none;">
        </div>
        <div class="col-6 col-sm-3 col-lg-2 text-center">
          <a href="<?=BASE_URL.DS.'testimoni.php'?>" class="btn btn-danger"><i class="far fa-images"></i> Ke Galeri</a>
        </div>
      </div>
    </div> -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,96L26.7,101.3C53.3,107,107,117,160,144C213.3,171,267,213,320,202.7C373.3,192,427,128,480,117.3C533.3,107,587,149,640,186.7C693.3,224,747,256,800,256C853.3,256,907,224,960,186.7C1013.3,149,1067,107,1120,90.7C1173.3,75,1227,85,1280,90.7C1333.3,96,1387,96,1413,96L1440,96L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>
    <!-- Akhir Testimoni -->

    <!-- Promo -->
    
    <!-- Akhir Promo -->

    <!-- Product -->
    <section class="product" id="product">
      <div class="container-100 p-4">
        <h2 class="mmc-bold text-center mb-5 produk text-uppercase">Produk Mitsubishi</h2>
        <div class="swiper-container swiper-container-product text-dark">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="display-grid">
                <div class="card n1 bg-xpander">
                  <img src="<?= BASE_URL.DS.'assets/img/xpander/white-xpander.webp'; ?>" class="card-img-top" alt="Mitsubishi Xpander" id="img-xpander">
                  <hr class="line">
                  <div class="card-body">
                    <h3 class="card-title text-uppercase text-center mmc-bold text-black">Xpander</h3>
                    <!-- <p class="card-text text-center">
                      <span class="color-black palet" data-toggle="tooltip" data-placement="bottom" title="Diamond Black Mica" id="black-xpander"></span>      
                      <span class="color-white palet" data-toggle="tooltip" data-placement="bottom" title="Quartz White Pearl" id="white-xpander"></span>
                      <span class="color-grey palet" data-toggle="tooltip" data-placement="bottom" title="Graphite Grey Metallic" id="grey-xpander"></span>
                      <span class="color-silver palet" data-toggle="tooltip" data-placement="bottom" title="Sterling Silver Metallic" id="silver-xpander"></span>
                      <span class="color-red palet" data-toggle="tooltip" data-placement="bottom" title="Red Metallic" id="red-xpander"></span>    
                      <span class="color-bronze palet" data-toggle="tooltip" data-placement="bottom" title="Deep Bronze Metallic" id="bronze-xpander"></span>
                    </p> -->
                    <div class="container-100 d-flex justify-content-between">
                      <span>Harga OTR Mulai</span>
                      <?php
                        $harga = mysqli_query($conn, "SELECT MIN(harga) FROM tb_harga WHERE merek = 'XPANDER' AND discontinue = 0");
                        $harga = mysqli_fetch_array($harga);
                        $harga = $harga[0];
                      ?>
                      <span class="mmc-bold">Rp <?= number_format($harga, 0, ",", "."); ?></span>
                    </div>
                    <div class="container-100 mt-3 d-flex justify-content-between">
                      <a href="<?= BASE_URL.DS.'product/xpander.php'; ?>" class="btn btn-dark btn-product">Detail</a>
                      <a href="https://wa.me/+6282370304974?text=Halo Kak Vandys, Saya ingin bertanya tentang Xpander." class="btn btn-success d-none d-sm-block" target="_blank"><i class="fa fa-lg fa-whatsapp"></i> 0823 7030 4974</a>
                      <a href="https://wa.me/+6282370304974?text=Halo Kak Vandys, Saya ingin bertanya tentang Xpander." class="btn btn-success d-block d-sm-none" target="_blank"><i class="fa fa-lg fa-whatsapp"></i></a>
                    </div>
                  </div>
                  <!-- <button class="simulasi">Simulasi Kredit</button>                  
                  <div class="panel">
                    <div class="row">
                      <div class="col-12">
                        <small class="text-muted">* Harga OTR Varian Xpander GLX MT</small>
                      </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                      <div class="col-6 mmc-bold">
                        Harga OTR
                      </div>  
                      <div class="col-6">
                        <input type="text" readonly class="mmc-bold form-control-plaintext text-right" id="plainTextHargaOtr" value="Rp <?= number_format($harga, 0, ",", "."); ?>">
                      </div>                        
                    </div>
                    <hr class="line" />
                    <form>
                      <div class="form-group row">
                        <label for="inputUangMuka" class="col-sm-6 col-form-label">Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control text-right text-black" id="inputUangMuka" name="inputUangMuka" value="" data-type="currency" placeholder="Rp 10.000.000">
                        </div>
                      </div>            
                      <div class="form-group row">
                        <label for="inputSukuBunga" class="col-sm-6 col-form-label">Suku Bunga (% per tahun)</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control text-right text-black" id="inputSukuBunga" placeholder="10">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="selectTenor" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <select class="form-control form-control-sm form-control-width text-right text-black" id="selectTenor">
                            <option value="12">12</option>
                            <option value="24">24</option>
                            <option value="36">36</option>
                            <option value="48">48</option>
                            <option value="60">60</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <a id="hitungXpander" class="col-12 btn btn-outline-dark" role="button">Hitung</a>
                      </div>
                      <div class="form-group row">
                        <div class="col-lg-12 text-right">
                          <a class="btn btn-danger" name="buttonHitung" id="buttonHitung">Hitung</a>
                        </div>
                        <div class="col-lg-12 text-center perhitungan" style="display: none">
                          <small class="text-success">* Perhitungan selesai. Silahkan cek kembali harga.</small>              
                        </div>
                        <div class="col-lg-12 text-center perhitungan-salah" style="display: none">
                          <small class="text-danger">* Uang DP minimum Rp 20 juta. Silahkan hitung kembali.</small>              
                        </div>
                        <div class="col-lg-12"><hr class="hr-perhitungan" style="margin-bottom: 0 !important" /></div>
                      </div>
                    </form>
                    <form>
                      <div class="form-group row">
                        <label for="plainTextTotalUangMuka" class="col-sm-6 col-form-label">Total Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" readonly class="form-control-plaintext text-right text-black" id="plainTextTotalUangMuka" value="Rp -">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="plainTextCicilan" class="col-sm-6 col-form-label">Cicilan / Bulan</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right text-black" id="plainTextCicilan" value="Rp -">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="plainTextTenor" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right text-black" id="plainTextTenor" value="-">
                        </div>
                      </div>
                    </form>
                  </div> -->
                </div>
                <div class="card n2 bg-xpander-cross">
                  <img src="<?= BASE_URL.DS.'assets/img/cross/xpander-cross-white.webp'; ?>" class="card-img-top" alt="Mitsubishi Xpander" id="img-xpander-cross">
                  <hr class="line">
                  <div class="card-body">
                    <h3 class="card-title text-uppercase text-center mmc-bold text-black">Xpander Cross</h3>
                    <div class="container-100 d-flex justify-content-between">
                    <span>Harga OTR Mulai</span>
                      <?php
                        $harga = mysqli_query($conn, "SELECT MIN(harga) FROM tb_harga WHERE merek = 'XPANDER CROSS' AND discontinue = 0");
                        $harga = mysqli_fetch_array($harga);
                        $harga = $harga[0];
                      ?>
                      <span class="mmc-bold">Rp <?= number_format($harga, 0, ",", "."); ?></span>
                    </div>
                    <div class="container-100 mt-3 d-flex justify-content-between">
                      <a href="<?= BASE_URL.DS.'product/xpander-cross.php'; ?>" class="btn btn-dark btn-product">Detail</a>
                      <a href="https://wa.me/+6282370304974?text=Halo Kak Vandys, Saya ingin bertanya tentang Xpander Cross." class="btn btn-success d-none d-sm-block" target="_blank"><i class="fa fa-lg fa-whatsapp"></i> 0823 7030 4974</a>
                      <a href="https://wa.me/+6282370304974?text=Halo Kak Vandys, Saya ingin bertanya tentang Xpander Cross." class="btn btn-success d-block d-sm-none" target="_blank"><i class="fa fa-lg fa-whatsapp"></i></a>
                    </div>
                  </div>                  
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="display-grid">
                <div class="card n1 bg-pajero-sport">
                  <img src="<?= BASE_URL.DS.'assets/img/pajero/pajero-sport-grey.webp'; ?>" class="card-img-top" alt="Mitsubishi Pajero Sport" id="img-pajero">
                  <hr class="line">
                  <div class="card-body">
                    <h3 class="card-title text-uppercase text-center mmc-bold text-black">Pajero Sport</h3>
                    <div class="container-100 d-flex justify-content-between">
                    <span>Harga OTR Mulai</span>
                      <?php
                        $harga = mysqli_query($conn, "SELECT MIN(harga) FROM tb_harga WHERE merek = 'PAJERO SPORT' AND discontinue = 0");
                        $harga = mysqli_fetch_array($harga);
                        $harga = $harga[0];
                      ?>
                      <span class="mmc-bold">Rp <?= number_format($harga, 0, ",", "."); ?></span>
                    </div>
                    <div class="container-100 mt-3 d-flex justify-content-between">
                      <a href="<?= BASE_URL.DS.'product/pajero-sport.php'; ?>" class="btn btn-dark btn-product">Detail</a>
                      <a href="https://wa.me/+6282370304974?text=Halo Kak Vandys, Saya ingin bertanya tentang Pajero Sport." class="btn btn-success d-none d-sm-block" target="_blank"><i class="fa fa-lg fa-whatsapp"></i> 0823 7030 4974</a>
                      <a href="https://wa.me/+6282370304974?text=Halo Kak Vandys, Saya ingin bertanya tentang Pajero Sport." class="btn btn-success d-block d-sm-none" target="_blank"><i class="fa fa-lg fa-whatsapp"></i></a>
                    </div>
                  </div>                  
                </div>
                <div class="card n2 bg-eclipse-cross">
                  <img src="<?= BASE_URL.DS.'assets/img/eclipse/eclipse-cross-red.webp'; ?>" class="card-img-top" alt="Eclipse Cross" id="img-eclipse-cross">
                  <hr class="line">
                  <div class="card-body">
                    <h3 class="card-title text-uppercase text-center mmc-bold text-black">Eclipse Cross</h3>
                    <div class="container-100 d-flex justify-content-between">
                    <span>Harga OTR Mulai</span>
                      <?php
                        $harga = mysqli_query($conn, "SELECT MIN(harga) FROM tb_harga WHERE merek = 'ECLIPSE CROSS' AND discontinue = 0");
                        $harga = mysqli_fetch_array($harga);
                        $harga = $harga[0];
                      ?>
                      <span class="mmc-bold">Rp <?= number_format($harga, 0, ",", "."); ?></span>
                    </div>
                    <div class="container-100 mt-3 d-flex justify-content-between">
                      <a href="<?= BASE_URL.DS.'product/eclipse-cross.php'; ?>" class="btn btn-dark btn-product">Detail</a>
                      <a href="https://wa.me/+6282370304974?text=Halo Kak Vandys, Saya ingin bertanya tentang Eclipse Cross." class="btn btn-success d-none d-sm-block" target="_blank"><i class="fa fa-lg fa-whatsapp"></i> 0823 7030 4974</a>
                      <a href="https://wa.me/+6282370304974?text=Halo Kak Vandys, Saya ingin bertanya tentang Eclipse Cross." class="btn btn-success d-block d-sm-none" target="_blank"><i class="fa fa-lg fa-whatsapp"></i></a>
                    </div>
                  </div>                  
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="display-grid">
                <div class="card n1 bg-triton">
                  <img src="<?= BASE_URL.DS.'assets/img/triton/triton-black.webp'; ?>" class="card-img-top" alt="Mitsubishi triton" id="img-triton">
                  <hr class="line">
                  <div class="card-body">
                    <h3 class="card-title text-uppercase text-center mmc-bold text-black">TRITON</h3>
                    <div class="container-100 d-flex justify-content-between">
                    <span>Harga OTR Mulai</span>
                      <?php
                        $harga = mysqli_query($conn, "SELECT MIN(harga) FROM tb_harga WHERE merek = 'TRITON' AND discontinue = 0");
                        $harga = mysqli_fetch_array($harga);
                        $harga = $harga[0];
                      ?>
                      <span class="mmc-bold">Rp <?= number_format($harga, 0, ",", "."); ?></span>
                    </div>
                    <div class="container-100 mt-3 d-flex justify-content-between">
                      <a href="<?= BASE_URL.DS.'product/triton.php'; ?>" class="btn btn-dark btn-product">Detail</a>
                      <a href="https://wa.me/+6282370304974?text=Halo Kak Vandys, Saya ingin bertanya tentang Triton." class="btn btn-success d-none d-sm-block" target="_blank"><i class="fa fa-lg fa-whatsapp"></i> 0823 7030 4974</a>
                      <a href="https://wa.me/+6282370304974?text=Halo Kak Vandys, Saya ingin bertanya tentang Triton." class="btn btn-success d-block d-sm-none" target="_blank"><i class="fa fa-lg fa-whatsapp"></i></a>
                    </div>
                  </div>                  
                </div>
                <div class="card n2 bg-l300">
                  <img src="<?= BASE_URL.DS.'assets/img/l300/1.webp'; ?>" class="card-img-top" alt="L300">
                  <hr class="line">
                  <div class="card-body">
                    <h3 class="card-title text-uppercase text-center mmc-bold text-black">L300</h3>
                    <div class="container-100 d-flex justify-content-between">
                    <span>Harga OTR Mulai</span>
                      <?php
                        $harga = mysqli_query($conn, "SELECT MIN(harga) FROM tb_harga WHERE merek = 'L300' AND discontinue = 0");
                        $harga = mysqli_fetch_array($harga);
                        $harga = $harga[0];
                      ?>
                      <span class="mmc-bold">Rp <?= number_format($harga, 0, ",", "."); ?></span>
                    </div>
                    <div class="container-100 mt-3 d-flex justify-content-between">
                      <a href="<?= BASE_URL.DS.'product/l300.php'; ?>" class="btn btn-dark btn-product">Detail</a>
                      <a href="https://wa.me/+6282370304974?text=Halo Kak Vandys, Saya ingin bertanya tentang L300." class="btn btn-success d-none d-sm-block" target="_blank"><i class="fa fa-lg fa-whatsapp"></i> 0823 7030 4974</a>
                      <a href="https://wa.me/+6282370304974?text=Halo Kak Vandys, Saya ingin bertanya tentang L300." class="btn btn-success d-block d-sm-none" target="_blank"><i class="fa fa-lg fa-whatsapp"></i></a>
                    </div>
                  </div>                  
                </div>
              </div>
            </div>
            <div class="swiper-slide">              
            <div class="display-grid">
                <div class="card n1 bg-colt-diesel">
                  <img src="<?= BASE_URL.DS.'assets/img/colt-diesel/1.webp'; ?>" class="card-img-top" alt="Mitsubishi Colt Diesel" id="img-colt-diesel">
                  <hr class="line">
                  <div class="card-body">
                    <h3 class="card-title text-uppercase text-center mmc-bold text-black">COLT DIESEL</h3>
                    <div class="container-100 d-flex justify-content-between">
                    <span>Harga OTR Mulai</span>
                      <?php
                        $harga = mysqli_query($conn, "SELECT MIN(harga) FROM tb_harga WHERE merek = 'COLT DIESEL' AND discontinue = 0");
                        $harga = mysqli_fetch_array($harga);
                        $harga = $harga[0];
                      ?>
                      <span class="mmc-bold">Rp <?= number_format($harga, 0, ",", "."); ?></span>
                    </div>
                    <div class="container-100 mt-3 d-flex justify-content-between">
                      <a href="<?= BASE_URL.DS.'product/colt-diesel.php'; ?>" class="btn btn-dark btn-product">Detail</a>
                      <a href="https://wa.me/+6282370304974?text=Halo Kak Vandys, Saya ingin bertanya tentang Colt Diesel." class="btn btn-success d-none d-sm-block" target="_blank"><i class="fa fa-lg fa-whatsapp"></i> 0823 7030 4974</a>
                      <a href="https://wa.me/+6282370304974?text=Halo Kak Vandys, Saya ingin bertanya tentang Colt Diesel." class="btn btn-success d-block d-sm-none" target="_blank"><i class="fa fa-lg fa-whatsapp"></i></a>
                    </div>
                  </div>                  
                </div>
                <div class="card n2 bg-eclipse-cross">
                  <img src="<?= BASE_URL.DS.'assets/img/colt-diesel/2.webp'; ?>" class="card-img-top" alt="L300">
                  <hr class="line">
                  <div class="card-body">
                    <h3 class="card-title text-uppercase text-center mmc-bold text-black">FUSO</h3>
                    <div class="container-100 d-flex justify-content-between">
                    <span>Harga OTR Mulai</span>
                      <?php
                        $harga = mysqli_query($conn, "SELECT MIN(harga) FROM tb_harga WHERE merek = 'FUSO' AND discontinue = 0");
                        $harga = mysqli_fetch_array($harga);
                        $harga = $harga[0];
                      ?>
                      <span class="mmc-bold">Rp <?= number_format($harga, 0, ",", "."); ?></span>
                    </div>
                    <div class="container-100 mt-3 d-flex justify-content-between">
                      <a href="<?= BASE_URL.DS.'product/fuso.php'; ?>" class="btn btn-dark btn-product">Detail</a>
                      <a href="https://wa.me/+6282370304974?text=Halo Kak Vandys, Saya ingin bertanya tentang Fuso." class="btn btn-success d-none d-sm-block" target="_blank"><i class="fa fa-lg fa-whatsapp"></i> 0823 7030 4974</a>
                      <a href="https://wa.me/+6282370304974?text=Halo Kak Vandys, Saya ingin bertanya tentang Fuso." class="btn btn-success d-block d-sm-none" target="_blank"><i class="fa fa-lg fa-whatsapp"></i></a>
                    </div>
                  </div>                  
                </div>
              </div>
            </div>
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- Akhir Product -->

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
