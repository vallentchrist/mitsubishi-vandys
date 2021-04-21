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
        <div class="col-6 col-lg-8 d-flex justify-content-center align-items-center">
          <label class="text-uppercase text-center d-none d-sm-block label-sardana"><span class="mmc-bold">PT. Sardana IndahBerlian Motor</span> <br /> Jl. Jend Gatot Subroto No. 437 Medan</label>          
          <a href="https://mitsubishimedan-vandys.id">            
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
            <a class="nav-link text-white" href="<?=BASE_URL.DS.'promo.php'?>">Promo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?=BASE_URL.DS.'testimoni.php'?>">Testimoni</a>
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
              <img src="<?=BASE_URL.DS.'assets/img/testimoni/'.$row['nama']?>" alt="Vandystio Danantho" class="w-100">
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
    <div class="container-fluid mt-5">    
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
    </div>
    <!-- Akhir Testimoni -->

    <!-- Product -->
    <section class="product" id="product">
      <div class="container-100 mt-5 p-4">
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
                    <p class="card-text text-center">
                      <span class="color-black palet" data-toggle="tooltip" data-placement="bottom" title="Diamond Black Mica" id="black-xpander"></span>      
                      <span class="color-white palet" data-toggle="tooltip" data-placement="bottom" title="Quartz White Pearl" id="white-xpander"></span>
                      <span class="color-grey palet" data-toggle="tooltip" data-placement="bottom" title="Graphite Grey Metallic" id="grey-xpander"></span>
                      <span class="color-silver palet" data-toggle="tooltip" data-placement="bottom" title="Sterling Silver Metallic" id="silver-xpander"></span>
                      <span class="color-red palet" data-toggle="tooltip" data-placement="bottom" title="Red Metallic" id="red-xpander"></span>    
                      <span class="color-bronze palet" data-toggle="tooltip" data-placement="bottom" title="Deep Bronze Metallic" id="bronze-xpander"></span>
                    </p>
                    <div class="container-100 d-flex justify-content-between">
                      <span>Harga OTR Mulai</span>
                      <?php
                        $harga = mysqli_query($conn, "SELECT MIN(harga) FROM tb_harga WHERE merek = 'XPANDER'");
                        $harga = mysqli_fetch_array($harga);
                        $harga = $harga[0];
                      ?>
                      <span class="mmc-bold">Rp <?= number_format($harga, 0, ",", "."); ?></span>
                    </div>
                    <div class="container-100 mt-3 d-flex justify-content-between">
                      <a href="<?= BASE_URL.DS.'product/xpander.php'; ?>" class="btn btn-dark btn-product">Detail</a>
                      <a href="https://wa.me/+6282370304974?text=Saya ingin bertanya tentang produk Xpander" class="btn btn-dark btn-product" target="_blank">Hubungi Kami</a>
                    </div>
                  </div>
                  <button class="simulasi">Simulasi Kredit</button>                  
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
                  </div>
                </div>
                <div class="card n2 bg-xpander-cross">
                  <img src="<?= BASE_URL.DS.'assets/img/cross/xpander-cross-white.webp'; ?>" class="card-img-top" alt="Mitsubishi Xpander" id="img-xpander-cross">
                  <hr class="line">
                  <div class="card-body">
                    <h3 class="card-title text-uppercase text-center mmc-bold text-black">Xpander Cross</h3>                    
                    <p class="card-text text-center">
                      <span class="color-black palet" data-toggle="tooltip" data-placement="bottom" title="Diamond Black Mica" id="black-xpander-cross"></span>      
                      <span class="color-white palet" data-toggle="tooltip" data-placement="bottom" title="Quartz White Pearl" id="white-xpander-cross"></span>
                      <span class="color-grey palet" data-toggle="tooltip" data-placement="bottom" title="Graphite Grey Metallic" id="grey-xpander-cross"></span>
                      <span class="color-silver palet" data-toggle="tooltip" data-placement="bottom" title="Sterling Silver Metallic" id="silver-xpander-cross"></span>
                      <span class="color-orange palet" data-toggle="tooltip" data-placement="bottom" title="Orange Metallic" id="orange-xpander-cross"></span>    
                    </p>
                    <div class="container-100 d-flex justify-content-between">
                    <span>Harga OTR Mulai</span>
                      <?php
                        $harga = mysqli_query($conn, "SELECT MIN(harga) FROM tb_harga WHERE merek = 'XPANDER CROSS'");
                        $harga = mysqli_fetch_array($harga);
                        $harga = $harga[0];
                      ?>
                      <span class="mmc-bold">Rp <?= number_format($harga, 0, ",", "."); ?></span>
                    </div>
                    <div class="container-100 mt-3 d-flex justify-content-between">
                      <a href="<?= BASE_URL.DS.'product/xpander-cross.php'; ?>" class="btn btn-dark btn-product">Detail</a>
                      <a href="https://wa.me/+6282370304974?text=Saya ingin bertanya tentang produk Xpander Cross" class="btn btn-dark btn-product" target="_blank">Hubungi Kami</a>
                    </div>
                  </div>
                  <button class="simulasi">Simulasi Kredit</button>                  
                  <div class="panel">
                    <div class="row">
                      <div class="col-12">
                        <small class="text-muted">* Harga OTR Varian Xpander Cross MT</small>
                      </div>
                    </div>
                    <div class="row mt-3 mb-3">
                      <div class="col-6 mmc-bold">
                        Harga OTR
                      </div>  
                      <div class="col-6">
                        <input type="text" readonly class="mmc-bold form-control-plaintext text-right" id="plainTextHargaOtrXpanderCross" value="Rp <?= number_format($harga, 0, ",", "."); ?>">
                      </div>                        
                    </div>
                    <hr class="line" />
                    <form>
                      <div class="form-group row">
                        <label for="inputUangMuka" class="col-sm-6 col-form-label">Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control text-right" id="inputUangMukaXpanderCross" name="inputUangMuka" value="" data-type="currency" placeholder="Rp 10.000.000">
                        </div>
                      </div>            
                      <div class="form-group row">
                        <label for="inputSukuBunga" class="col-sm-6 col-form-label">Suku Bunga (% per tahun)</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control text-right" id="inputSukuBungaXpanderCross" placeholder="10">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="selectTenor" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <select class="form-control form-control-sm form-control-width text-right" class="selectTenor" id="selectTenorXpanderCross">
                            <option value="12">12</option>
                            <option value="24">24</option>
                            <option value="36">36</option>
                            <option value="48">48</option>
                            <option value="60">60</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <a id="hitungXpanderCross" class="col-12 btn btn-outline-dark" role="button">Hitung</a>
                      </div>
                    </form>
                    <form>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Total Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" readonly class="form-control-plaintext text-right" id="plainTextTotalUangMukaXpanderCross" value="Rp 0">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Cicilan / Bulan</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right" id="plainTextCicilanXpanderCross" value="Rp 0">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right" id="plainTextTenorXpanderCross" value="0">
                        </div>
                      </div>
                    </form>
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
                    <p class="card-text text-center">
                      <span class="color-black palet" data-toggle="tooltip" data-placement="bottom" title="Diamond Black Mica" id="black-pajero"></span>      
                      <span class="color-white palet" data-toggle="tooltip" data-placement="bottom" title="Quartz White Pearl" id="white-pajero"></span>
                      <span class="color-grey palet" data-toggle="tooltip" data-placement="bottom" title="Graphite Grey Metallic" id="grey-pajero"></span>
                      <span class="color-silver palet" data-toggle="tooltip" data-placement="bottom" title="Sterling Silver Metallic" id="silver-pajero"></span>   
                      <span class="color-bronze palet" data-toggle="tooltip" data-placement="bottom" title="Deep Bronze Metallic" id="bronze-pajero"></span>
                    </p>
                    <div class="container-100 d-flex justify-content-between">
                    <span>Harga OTR Mulai</span>
                      <?php
                        $harga = mysqli_query($conn, "SELECT MIN(harga) FROM tb_harga WHERE merek = 'PAJERO SPORT'");
                        $harga = mysqli_fetch_array($harga);
                        $harga = $harga[0];
                      ?>
                      <span class="mmc-bold">Rp <?= number_format($harga, 0, ",", "."); ?></span>
                    </div>
                    <div class="container-100 mt-3 d-flex justify-content-between">
                      <a href="<?= BASE_URL.DS.'product/pajero-sport.php'; ?>" class="btn btn-dark btn-product">Detail</a>
                      <a href="https://wa.me/+6282370304974?text=Saya ingin bertanya tentang produk Pajero Sport" class="btn btn-dark btn-product" target="_blank">Hubungi Kami</a>
                    </div>
                  </div>
                  <button class="simulasi">Simulasi Kredit</button>                  
                  <div class="panel">
                    <div class="row">
                      <div class="col-12">
                        <small class="text-muted">* Harga OTR Varian New Pajero Sport Exceed 4x2MT</small>
                      </div>
                    </div>
                    <div class="row mt-3 mb-3">
                      <div class="col-6 mmc-bold">
                        Harga OTR
                      </div>  
                      <div class="col-6">
                        <input type="text" readonly class="mmc-bold form-control-plaintext text-right" id="plainTextHargaOtrPajero" value="Rp <?= number_format($harga, 0, ",", "."); ?>">
                      </div>                        
                    </div>
                    <hr class="line" />
                    <form>
                      <div class="form-group row">
                        <label for="inputUangMuka" class="col-sm-6 col-form-label">Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control text-right" id="inputUangMukaPajero" name="inputUangMuka" value="" data-type="currency" placeholder="Rp 10.000.000">
                        </div>
                      </div>            
                      <div class="form-group row">
                        <label for="inputSukuBunga" class="col-sm-6 col-form-label">Suku Bunga (% per tahun)</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control text-right" id="inputSukuBungaPajero" placeholder="10">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="selectTenor" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <select class="form-control form-control-sm form-control-width text-right" class="selectTenor" id="selectTenorPajero">
                            <option value="12">12</option>
                            <option value="24">24</option>
                            <option value="36">36</option>
                            <option value="48">48</option>
                            <option value="60">60</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <a id="hitungPajeroSport" class="col-12 btn btn-outline-dark" role="button">Hitung</a>
                      </div>
                    </form>
                    <form>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Total Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" readonly class="form-control-plaintext text-right" id="plainTextTotalUangMukaPajero" value="Rp 0">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Cicilan / Bulan</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right" id="plainTextCicilanPajero" value="Rp 0">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right" id="plainTextTenorPajero" value="0">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="card n2 bg-eclipse-cross">
                  <img src="<?= BASE_URL.DS.'assets/img/eclipse/eclipse-cross-red.webp'; ?>" class="card-img-top" alt="Eclipse Cross" id="img-eclipse-cross">
                  <hr class="line">
                  <div class="card-body">
                    <h3 class="card-title text-uppercase text-center mmc-bold text-black">Eclipse Cross</h3>
                    <p class="card-text text-center">
                      <span class="color-black palet" data-toggle="tooltip" data-placement="bottom" title="Diamond Black Mica" id="black-eclipse-cross"></span>      
                      <span class="color-white palet" data-toggle="tooltip" data-placement="bottom" title="Quartz White Pearl" id="white-eclipse-cross"></span>
                      <span class="color-red palet" data-toggle="tooltip" data-placement="bottom" title="Red Diamond" id="red-eclipse-cross"></span>    
                    </p>
                    <div class="container-100 d-flex justify-content-between">
                    <span>Harga OTR Mulai</span>
                      <?php
                        $harga = mysqli_query($conn, "SELECT MIN(harga) FROM tb_harga WHERE merek = 'ECLIPSE CROSS'");
                        $harga = mysqli_fetch_array($harga);
                        $harga = $harga[0];
                      ?>
                      <span class="mmc-bold">Rp <?= number_format($harga, 0, ",", "."); ?></span>
                    </div>
                    <div class="container-100 mt-3 d-flex justify-content-between">
                      <a href="<?= BASE_URL.DS.'product/eclipse-cross.php'; ?>" class="btn btn-dark btn-product">Detail</a>
                      <a href="https://wa.me/+6282370304974?text=Saya ingin bertanya tentang produk Eclipse Cross" class="btn btn-dark btn-product" target="_blank">Hubungi Kami</a>
                    </div>
                  </div>
                  <button class="simulasi">Simulasi Kredit</button>                  
                  <div class="panel">
                    <div class="row">
                      <div class="col-12">
                        <small class="text-muted">* Harga OTR Varian Eclipse Cross Black</small>
                      </div>
                    </div>
                    <div class="row mt-3 mb-3">
                      <div class="col-6 mmc-bold">
                        Harga OTR
                      </div>  
                      <div class="col-6">
                        <input type="text" readonly class="mmc-bold form-control-plaintext text-right" id="plainTextHargaOtrEclipse" value="Rp <?= number_format($harga, 0, ",", "."); ?>">
                      </div>                        
                    </div>
                    <hr class="line" />
                    <form>
                      <div class="form-group row">
                        <label for="inputUangMuka" class="col-sm-6 col-form-label">Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control text-right" id="inputUangMukaEclipse" name="inputUangMuka" value="" data-type="currency" placeholder="Rp 10.000.000">
                        </div>
                      </div>            
                      <div class="form-group row">
                        <label for="inputSukuBungaEclipse" class="col-sm-6 col-form-label">Suku Bunga (% per tahun)</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control text-right" id="inputSukuBungaEclipse" placeholder="10">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="selectTenor" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <select class="form-control form-control-sm form-control-width text-right" class="selectTenor" id="selectTenorEclipse">
                            <option value="12">12</option>
                            <option value="24">24</option>
                            <option value="36">36</option>
                            <option value="48">48</option>
                            <option value="60">60</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <a id="hitungEclipse" class="col-12 btn btn-outline-dark" role="button">Hitung</a>
                      </div>
                    </form>
                    <form>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Total Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" readonly class="form-control-plaintext text-right" id="plainTextTotalUangMukaEclipse" value="Rp 0">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Cicilan / Bulan</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right" id="plainTextCicilanEclipse" value="Rp 0">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right" id="plainTextTenorEclipse" value="0">
                        </div>
                      </div>
                    </form>
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
                    <p class="card-text text-center">
                      <span class="color-black palet" data-toggle="tooltip" data-placement="bottom" title="Diamond Black Mica" id="black-triton"></span>      
                      <span class="color-white palet" data-toggle="tooltip" data-placement="bottom" title="Quartz White Pearl" id="white-triton"></span>
                      <span class="color-grey palet" data-toggle="tooltip" data-placement="bottom" title="Graphite Grey Metallic" id="grey-triton"></span>
                      <span class="color-silver palet" data-toggle="tooltip" data-placement="bottom" title="Sterling Silver Metallic" id="silver-triton"></span>
                      <span class="color-red palet" data-toggle="tooltip" data-placement="bottom" title="Red Metallic" id="red-triton"></span>    
                      <span class="color-white-diamond palet" data-toggle="tooltip" data-placement="bottom" title="White Diamond Metallic" id="white-diamond-triton"></span>
                    </p>
                    <div class="container-100 d-flex justify-content-between">
                    <span>Harga OTR Mulai</span>
                      <?php
                        $harga = mysqli_query($conn, "SELECT MIN(harga) FROM tb_harga WHERE merek = 'TRITON'");
                        $harga = mysqli_fetch_array($harga);
                        $harga = $harga[0];
                      ?>
                      <span class="mmc-bold">Rp <?= number_format($harga, 0, ",", "."); ?></span>
                    </div>
                    <div class="container-100 mt-3 d-flex justify-content-between">
                      <a href="<?= BASE_URL.DS.'product/triton.php'; ?>" class="btn btn-dark btn-product">Detail</a>
                      <a href="https://wa.me/+6282370304974?text=Saya ingin bertanya tentang produk Triton" class="btn btn-dark btn-product" target="_blank">Hubungi Kami</a>
                    </div>
                  </div>
                  <button class="simulasi">Simulasi Kredit</button>                  
                  <div class="panel">
                    <div class="row">
                      <div class="col-12">
                        <small class="text-muted">* Harga OTR Varian Triton GLX MT 4x2 Single Cabin</small>
                      </div>
                    </div>
                    <div class="row mt-3 mb-3">
                      <div class="col-6 mmc-bold">
                        Harga OTR
                      </div>  
                      <div class="col-6">
                        <input type="text" readonly class="mmc-bold form-control-plaintext text-right" id="plainTextHargaOtrTriton" value="Rp <?= number_format($harga, 0, ",", "."); ?>">
                      </div>                        
                    </div>
                    <hr class="line" />
                    <form>
                      <div class="form-group row">
                        <label for="inputUangMuka" class="col-sm-6 col-form-label">Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control text-right" id="inputUangMukaTriton" name="inputUangMuka" value="" data-type="currency" placeholder="Rp 10.000.000">
                        </div>
                      </div>            
                      <div class="form-group row">
                        <label for="inputSukuBunga" class="col-sm-6 col-form-label">Suku Bunga (% per tahun)</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control text-right" id="inputSukuBungaTriton" placeholder="10">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="selectTenor" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <select class="form-control form-control-sm form-control-width text-right" class="selectTenor" id="selectTenorTriton">
                            <option value="12">12</option>
                            <option value="24">24</option>
                            <option value="36">36</option>
                            <option value="48">48</option>
                            <option value="60">60</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <a id="hitungTriton" class="col-12 btn btn-outline-dark" role="button">Hitung</a>
                      </div>
                    </form>
                    <form>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Total Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" readonly class="form-control-plaintext text-right" id="plainTextTotalUangMukaTriton" value="Rp 0">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Cicilan / Bulan</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right" id="plainTextCicilanTriton" value="Rp 0">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right" id="plainTextTenorTriton" value="0">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="card n2 bg-l300">
                  <img src="<?= BASE_URL.DS.'assets/img/l300/1.webp'; ?>" class="card-img-top" alt="L300">
                  <hr class="line">
                  <div class="card-body">
                    <h3 class="card-title text-uppercase text-center mmc-bold text-black">L300</h3>
                    <p class="card-text text-center">
                      <span class="color-black palet" data-toggle="tooltip" data-placement="bottom" title="Black" id="black-l300"></span>
                    </p>  
                    <div class="container-100 d-flex justify-content-between">
                    <span>Harga OTR Mulai</span>
                      <?php
                        $harga = mysqli_query($conn, "SELECT MIN(harga) FROM tb_harga WHERE merek = 'L300'");
                        $harga = mysqli_fetch_array($harga);
                        $harga = $harga[0];
                      ?>
                      <span class="mmc-bold">Rp <?= number_format($harga, 0, ",", "."); ?></span>
                    </div>
                    <div class="container-100 mt-3 d-flex justify-content-between">
                      <a href="<?= BASE_URL.DS.'product/l300.php'; ?>" class="btn btn-dark btn-product">Detail</a>
                      <a href="https://wa.me/+6282370304974?text=Saya ingin bertanya tentang produk L300" class="btn btn-dark btn-product" target="_blank">Hubungi Kami</a>
                    </div>
                  </div>
                  <button class="simulasi">Simulasi Kredit</button>                  
                  <div class="panel">
                    <div class="row">
                      <div class="col-12">
                        <small class="text-muted">* Harga OTR Varian L300 Pick Up Standard</small>
                      </div>
                    </div>
                    <div class="row mt-3 mb-3">
                      <div class="col-6 mmc-bold">
                        Harga OTR
                      </div>  
                      <div class="col-6">
                        <input type="text" readonly class="mmc-bold form-control-plaintext text-right" id="plainTextHargaOtrL300" value="Rp <?= number_format($harga, 0, ",", "."); ?>">
                      </div>                        
                    </div>
                    <hr class="line" />
                    <form>
                      <div class="form-group row">
                        <label for="inputUangMuka" class="col-sm-6 col-form-label">Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control text-right" id="inputUangMukaL300" name="inputUangMuka" value="" data-type="currency" placeholder="Rp 10.000.000">
                        </div>
                      </div>            
                      <div class="form-group row">
                        <label for="inputSukuBunga" class="col-sm-6 col-form-label">Suku Bunga (% per tahun)</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control text-right" id="inputSukuBungaL300" placeholder="10">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="selectTenor" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <select class="form-control form-control-sm form-control-width text-right" class="selectTenor" id="selectTenorL300">
                            <option value="12">12</option>
                            <option value="24">24</option>
                            <option value="36">36</option>
                            <option value="48">48</option>
                            <option value="60">60</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <a id="hitungL300" class="col-12 btn btn-outline-dark" role="button">Hitung</a>
                      </div>
                    </form>
                    <form>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Total Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" readonly class="form-control-plaintext text-right" id="plainTextTotalUangMukaL300" value="Rp 0">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Cicilan / Bulan</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right" id="plainTextCicilanL300" value="Rp 0">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right" id="plainTextTenorL300" value="0">
                        </div>
                      </div>
                    </form>
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
                    <p class="card-text text-center">
                      <span class="color-yellow palet" data-toggle="tooltip" data-placement="bottom" title="Yellow" id="yellow-colt-diesel"></span>
                    </p>  
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
                      <a href="https://wa.me/+6282370304974?text=Saya ingin bertanya tentang produk Colt Diesel" class="btn btn-dark btn-product" target="_blank">Hubungi Kami</a>
                    </div>
                  </div>
                  <button class="simulasi">Simulasi Kredit</button>                  
                  <div class="panel">
                    <div class="row">
                      <div class="col-12">
                        <small class="text-muted">* Harga OTR Varian Colt Diesel FE 71 PS</small>
                      </div>
                    </div>
                    <div class="row mt-3 mb-3">
                      <div class="col-6 mmc-bold">
                        Harga OTR
                      </div>  
                      <div class="col-6">
                        <input type="text" readonly class="mmc-bold form-control-plaintext text-right" id="plainTextHargaOtrColt" value="Rp <?= number_format($harga, 0, ",", "."); ?>">
                      </div>                        
                    </div>
                    <hr class="line" />
                    <form>
                      <div class="form-group row">
                        <label for="inputUangMuka" class="col-sm-6 col-form-label">Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control text-right" id="inputUangMukaColt" name="inputUangMuka" value="" data-type="currency" placeholder="Rp 10.000.000">
                        </div>
                      </div>            
                      <div class="form-group row">
                        <label for="inputSukuBunga" class="col-sm-6 col-form-label">Suku Bunga (% per tahun)</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control text-right" id="inputSukuBungaColt" placeholder="10">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="selectTenor" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <select class="form-control form-control-sm form-control-width text-right" class="selectTenor" id="selectTenorColt">
                            <option value="12">12</option>
                            <option value="24">24</option>
                            <option value="36">36</option>
                            <option value="48">48</option>
                            <option value="60">60</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <a id="hitungColt" class="col-12 btn btn-outline-dark" role="button">Hitung</a>
                      </div>
                    </form>
                    <form>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Total Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" readonly class="form-control-plaintext text-right" id="plainTextTotalUangMukaColt" value="Rp 0">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Cicilan / Bulan</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right" id="plainTextCicilanColt" value="Rp 0">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right" id="plainTextTenorColt" value="0">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="card n2 bg-eclipse-cross">
                  <img src="<?= BASE_URL.DS.'assets/img/colt-diesel/2.webp'; ?>" class="card-img-top" alt="L300">
                  <hr class="line">
                  <div class="card-body">
                    <h3 class="card-title text-uppercase text-center mmc-bold text-black">FUSO</h3>
                    <p class="card-text text-center">
                      <span class="color-orange palet" data-toggle="tooltip" data-placement="bottom" title="Orange" id="orange-fuso"></span>
                    </p>  
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
                      <a href="https://wa.me/+6282370304974?text=Saya ingin bertanya tentang produk Fuso" class="btn btn-dark btn-product" target="_blank">Hubungi Kami</a>
                    </div>
                  </div>
                  <button class="simulasi">Simulasi Kredit</button>                  
                  <div class="panel">
                    <div class="row">
                      <div class="col-12">
                        <small class="text-muted">* Harga OTR Varian Fuso FM517HS 4x2</small>
                      </div>
                    </div>
                    <div class="row mt-3 mb-3">
                      <div class="col-6 mmc-bold">
                        Harga OTR
                      </div>  
                      <div class="col-6">
                        <input type="text" readonly class="mmc-bold form-control-plaintext text-right" id="plainTextHargaOtrFuso" value="Rp <?= number_format($harga, 0, ",", "."); ?>">
                      </div>                        
                    </div>
                    <hr class="line" />
                    <form>
                      <div class="form-group row">
                        <label for="inputUangMuka" class="col-sm-6 col-form-label">Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control text-right" id="inputUangMukaFuso" name="inputUangMuka" value="" data-type="currency" placeholder="Rp 10.000.000">
                        </div>
                      </div>            
                      <div class="form-group row">
                        <label for="inputSukuBunga" class="col-sm-6 col-form-label">Suku Bunga (% per tahun)</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control text-right text-black" id="inputSukuBungaFuso" placeholder="10">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="selectTenor" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <select class="form-control form-control-sm form-control-width text-right text-black" class="selectTenor" id="selectTenorFuso">
                            <option value="12">12</option>
                            <option value="24">24</option>
                            <option value="36">36</option>
                            <option value="48">48</option>
                            <option value="60">60</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <a id="hitungFuso" class="col-12 btn btn-outline-dark" role="button">Hitung</a>
                      </div>
                    </form>
                    <form>
                      <div class="form-group row">
                        <label for="plainTextTotalUangMuka" class="col-sm-6 col-form-label">Total Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" readonly class="form-control-plaintext text-right text-black" id="plainTextTotalUangMukaFuso" value="Rp -">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="plainTextCicilan" class="col-sm-6 col-form-label">Cicilan / Bulan</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right text-black" id="plainTextCicilanFuso" value="Rp 0">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="plainTextTenor" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right text-black" id="plainTextTenorFuso" value="0">
                        </div>
                      </div>
                    </form>
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
