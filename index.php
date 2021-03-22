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
          <label class="text-uppercase text-center d-none d-sm-block"><span class="mmc-bold">PT. Sardana IndahBerlian Motor</span> <br /> Jl. Jend Gatot Subroto No. 437 Medan</label>          
          <a href="https://mitsusbishimedan-vandys.id">
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
      <a class="navbar-brand text-success" target="_blank" href="https://wa.me/+6282370304974?text=Saya ingin bertanya tentang produk Mitsubishi">
        <i class="fab fa-lg fa-whatsapp"></i> 0823 7030 4974
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Produk <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Promo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Testimoni</a>
          </li>
        </ul>
        <span class="navbar-text">
          Vandystio Danantho
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
        <h1 class="mmc-bold">Vandystio Danantho</h1>
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
    <section class="product" id="product">
      <div class="container-100 mt-5 p-4">
        <h1 class="mmc-bold text-center mb-3">Produk Mitsubishi</h1>
        <div class="swiper-container swiper-container-product text-dark">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="display-grid">
                <div class="card n1 bg-xpander">
                  <img src="<?= BASE_URL.DS.'assets/img/xpander/xpander-white.webp'; ?>" class="card-img-top" alt="Mitsubishi Xpander" id="img-xpander">
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
                      <span>Rp <?= number_format($harga, 0, ",", "."); ?></span>
                    </div>
                    <div class="container-100 mt-3 d-flex justify-content-between">
                      <a href="#" class="btn btn-dark btn-product">Detail</a>
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
                        <a id="buttonHitung" class="col-12 btn btn-outline-dark" role="button">Hitung</a>
                      </div>
                    </form>
                    <form>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Total Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" readonly class="form-control-plaintext text-right text-black" id="plainTextTotalUangMuka" value="Rp -">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Cicilan / Bulan</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right text-black" id="plainTextCicilan" value="Rp -">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Tenor (bulan)</label>
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
                      <span>Rp <?= number_format($harga, 0, ",", "."); ?></span>
                    </div>
                    <div class="container-100 mt-3 d-flex justify-content-between">
                      <a href="#" class="btn btn-dark btn-product">Detail</a>
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
                      <div class="col-6 text-right mmc-bold">
                        Rp <?= number_format($harga, 0, ",", "."); ?>
                      </div>                        
                    </div>
                    <hr class="line" />
                    <form>
                      <div class="form-group row">
                        <label for="inputUangMuka" class="col-sm-6 col-form-label">Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control text-right" id="inputUangMuka" name="inputUangMuka" value="" data-type="currency" placeholder="Rp 10.000.000">
                        </div>
                      </div>            
                      <div class="form-group row">
                        <label for="inputSukuBunga" class="col-sm-6 col-form-label">Suku Bunga (% per tahun)</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control text-right" id="inputSukuBunga" placeholder="10">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="selectTenor" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <select class="form-control form-control-sm form-control-width text-right" class="selectTenor" id="selectTenor">
                            <option value="12">12</option>
                            <option value="24">24</option>
                            <option value="36">36</option>
                            <option value="48">48</option>
                            <option value="60">60</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <a id="buttonHitung" class="col-12 btn btn-outline-dark" role="button">Hitung</a>
                      </div>
                    </form>
                    <form>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Total Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" readonly class="form-control-plaintext text-right" id="plainTextTotalUangMuka" value="Rp 0">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Cicilan / Bulan</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right" id="plainTextCicilan" value="Rp 0">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right" id="plainTextTenor" value="0">
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
                      <span>Rp <?= number_format($harga, 0, ",", "."); ?></span>
                    </div>
                    <div class="container-100 mt-3 d-flex justify-content-between">
                      <a href="#" class="btn btn-dark btn-product">Detail</a>
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
                      <div class="col-6 text-right mmc-bold">
                        Rp <?= number_format($harga, 0, ",", "."); ?>
                      </div>                        
                    </div>
                    <hr class="line" />
                    <form>
                      <div class="form-group row">
                        <label for="inputUangMuka" class="col-sm-6 col-form-label">Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control text-right" id="inputUangMuka" name="inputUangMuka" value="" data-type="currency" placeholder="Rp 10.000.000">
                        </div>
                      </div>            
                      <div class="form-group row">
                        <label for="inputSukuBunga" class="col-sm-6 col-form-label">Suku Bunga (% per tahun)</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control text-right" id="inputSukuBunga" placeholder="10">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="selectTenor" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <select class="form-control form-control-sm form-control-width text-right" class="selectTenor" id="selectTenor">
                            <option value="12">12</option>
                            <option value="24">24</option>
                            <option value="36">36</option>
                            <option value="48">48</option>
                            <option value="60">60</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <a id="buttonHitung" class="col-12 btn btn-outline-dark" role="button">Hitung</a>
                      </div>
                    </form>
                    <form>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Total Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" readonly class="form-control-plaintext text-right" id="plainTextTotalUangMuka" value="Rp 0">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Cicilan / Bulan</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right" id="plainTextCicilan" value="Rp 0">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right" id="plainTextTenor" value="0">
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
                      <span>Rp <?= number_format($harga, 0, ",", "."); ?></span>
                    </div>
                    <div class="container-100 mt-3 d-flex justify-content-between">
                      <a href="#" class="btn btn-dark btn-product">Detail</a>
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
                      <div class="col-6 text-right mmc-bold">
                        Rp <?= number_format($harga, 0, ",", "."); ?>
                      </div>                        
                    </div>
                    <hr class="line" />
                    <form>
                      <div class="form-group row">
                        <label for="inputUangMuka" class="col-sm-6 col-form-label">Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control text-right" id="inputUangMuka" name="inputUangMuka" value="" data-type="currency" placeholder="Rp 10.000.000">
                        </div>
                      </div>            
                      <div class="form-group row">
                        <label for="inputSukuBunga" class="col-sm-6 col-form-label">Suku Bunga (% per tahun)</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control text-right" id="inputSukuBunga" placeholder="10">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="selectTenor" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <select class="form-control form-control-sm form-control-width text-right" class="selectTenor" id="selectTenor">
                            <option value="12">12</option>
                            <option value="24">24</option>
                            <option value="36">36</option>
                            <option value="48">48</option>
                            <option value="60">60</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <a id="buttonHitung" class="col-12 btn btn-outline-dark" role="button">Hitung</a>
                      </div>
                    </form>
                    <form>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Total Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" readonly class="form-control-plaintext text-right" id="plainTextTotalUangMuka" value="Rp 0">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Cicilan / Bulan</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right" id="plainTextCicilan" value="Rp 0">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right" id="plainTextTenor" value="0">
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
                      <span>Rp <?= number_format($harga, 0, ",", "."); ?></span>
                    </div>
                    <div class="container-100 mt-3 d-flex justify-content-between">
                      <a href="#" class="btn btn-dark btn-product">Detail</a>
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
                      <div class="col-6 text-right mmc-bold">
                        Rp <?= number_format($harga, 0, ",", "."); ?>
                      </div>                        
                    </div>
                    <hr class="line" />
                    <form>
                      <div class="form-group row">
                        <label for="inputUangMuka" class="col-sm-6 col-form-label">Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control text-right" id="inputUangMuka" name="inputUangMuka" value="" data-type="currency" placeholder="Rp 10.000.000">
                        </div>
                      </div>            
                      <div class="form-group row">
                        <label for="inputSukuBunga" class="col-sm-6 col-form-label">Suku Bunga (% per tahun)</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control text-right" id="inputSukuBunga" placeholder="10">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="selectTenor" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <select class="form-control form-control-sm form-control-width text-right" class="selectTenor" id="selectTenor">
                            <option value="12">12</option>
                            <option value="24">24</option>
                            <option value="36">36</option>
                            <option value="48">48</option>
                            <option value="60">60</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <a id="buttonHitung" class="col-12 btn btn-outline-dark" role="button">Hitung</a>
                      </div>
                    </form>
                    <form>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Total Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" readonly class="form-control-plaintext text-right" id="plainTextTotalUangMuka" value="Rp 0">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Cicilan / Bulan</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right" id="plainTextCicilan" value="Rp 0">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right" id="plainTextTenor" value="0">
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
                    <div class="container-100 d-flex justify-content-between">
                    <span>Harga OTR Mulai</span>
                      <?php
                        $harga = mysqli_query($conn, "SELECT MIN(harga) FROM tb_harga WHERE merek = 'L300'");
                        $harga = mysqli_fetch_array($harga);
                        $harga = $harga[0];
                      ?>
                      <span>Rp <?= number_format($harga, 0, ",", "."); ?></span>
                    </div>
                    <div class="container-100 mt-3 d-flex justify-content-between">
                      <a href="#" class="btn btn-dark btn-product">Detail</a>
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
                      <div class="col-6 text-right mmc-bold">
                        Rp <?= number_format($harga, 0, ",", "."); ?>
                      </div>                        
                    </div>
                    <hr class="line" />
                    <form>
                      <div class="form-group row">
                        <label for="inputUangMuka" class="col-sm-6 col-form-label">Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control text-right" id="inputUangMuka" name="inputUangMuka" value="" data-type="currency" placeholder="Rp 10.000.000">
                        </div>
                      </div>            
                      <div class="form-group row">
                        <label for="inputSukuBunga" class="col-sm-6 col-form-label">Suku Bunga (% per tahun)</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control text-right" id="inputSukuBunga" placeholder="10">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="selectTenor" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <select class="form-control form-control-sm form-control-width text-right" class="selectTenor" id="selectTenor">
                            <option value="12">12</option>
                            <option value="24">24</option>
                            <option value="36">36</option>
                            <option value="48">48</option>
                            <option value="60">60</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <a id="buttonHitung" class="col-12 btn btn-outline-dark" role="button">Hitung</a>
                      </div>
                    </form>
                    <form>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Total Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" readonly class="form-control-plaintext text-right" id="plainTextTotalUangMuka" value="Rp 0">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Cicilan / Bulan</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right" id="plainTextCicilan" value="Rp 0">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right" id="plainTextTenor" value="0">
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
                  <img src="<?= BASE_URL.DS.'assets/img/triton/triton-black.webp'; ?>" class="card-img-top" alt="Mitsubishi triton" id="img-triton">
                  <hr class="line">
                  <div class="card-body">
                    <h3 class="card-title text-uppercase text-center mmc-bold text-black">COLT DIESEL</h3>
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
                        $harga = mysqli_query($conn, "SELECT MIN(harga) FROM tb_harga WHERE merek = 'COLT DIESEL' AND discontinue = 0");
                        $harga = mysqli_fetch_array($harga);
                        $harga = $harga[0];
                      ?>
                      <span>Rp <?= number_format($harga, 0, ",", "."); ?></span>
                    </div>
                    <div class="container-100 mt-3 d-flex justify-content-between">
                      <a href="#" class="btn btn-dark btn-product">Detail</a>
                      <a href="https://wa.me/+6282370304974?text=Saya ingin bertanya tentang produk Triton" class="btn btn-dark btn-product" target="_blank">Hubungi Kami</a>
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
                      <div class="col-6 text-right mmc-bold">
                        Rp <?= number_format($harga, 0, ",", "."); ?>
                      </div>                        
                    </div>
                    <hr class="line" />
                    <form>
                      <div class="form-group row">
                        <label for="inputUangMuka" class="col-sm-6 col-form-label">Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control text-right" id="inputUangMuka" name="inputUangMuka" value="" data-type="currency" placeholder="Rp 10.000.000">
                        </div>
                      </div>            
                      <div class="form-group row">
                        <label for="inputSukuBunga" class="col-sm-6 col-form-label">Suku Bunga (% per tahun)</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control text-right" id="inputSukuBunga" placeholder="10">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="selectTenor" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <select class="form-control form-control-sm form-control-width text-right" class="selectTenor" id="selectTenor">
                            <option value="12">12</option>
                            <option value="24">24</option>
                            <option value="36">36</option>
                            <option value="48">48</option>
                            <option value="60">60</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <a id="buttonHitung" class="col-12 btn btn-outline-dark" role="button">Hitung</a>
                      </div>
                    </form>
                    <form>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Total Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" readonly class="form-control-plaintext text-right" id="plainTextTotalUangMuka" value="Rp 0">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Cicilan / Bulan</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right" id="plainTextCicilan" value="Rp 0">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right" id="plainTextTenor" value="0">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="card n2 bg-l300">
                  <img src="<?= BASE_URL.DS.'assets/img/l300/1.webp'; ?>" class="card-img-top" alt="L300">
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
                      <span>Rp <?= number_format($harga, 0, ",", "."); ?></span>
                    </div>g
                    <div class="container-100 mt-3 d-flex justify-content-between">
                      <a href="#" class="btn btn-dark btn-product">Detail</a>
                      <a href="https://wa.me/+6282370304974?text=Saya ingin bertanya tentang produk L300" class="btn btn-dark btn-product" target="_blank">Hubungi Kami</a>
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
                      <div class="col-6 text-right mmc-bold">
                        Rp <?= number_format($harga, 0, ",", "."); ?>
                      </div>                        
                    </div>
                    <hr class="line" />
                    <form>
                      <div class="form-group row">
                        <label for="inputUangMuka" class="col-sm-6 col-form-label">Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control text-right" id="inputUangMuka" name="inputUangMuka" value="" data-type="currency" placeholder="Rp 10.000.000">
                        </div>
                      </div>            
                      <div class="form-group row">
                        <label for="inputSukuBunga" class="col-sm-6 col-form-label">Suku Bunga (% per tahun)</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control text-right" id="inputSukuBunga" placeholder="10">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="selectTenor" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <select class="form-control form-control-sm form-control-width text-right" class="selectTenor" id="selectTenor">
                            <option value="12">12</option>
                            <option value="24">24</option>
                            <option value="36">36</option>
                            <option value="48">48</option>
                            <option value="60">60</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <a id="buttonHitung" class="col-12 btn btn-outline-dark" role="button">Hitung</a>
                      </div>
                    </form>
                    <form>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Total Uang Muka</label>
                        <div class="col-sm-6">
                        <input type="text" readonly class="form-control-plaintext text-right" id="plainTextTotalUangMuka" value="Rp 0">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Cicilan / Bulan</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right" id="plainTextCicilan" value="Rp 0">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                        <div class="col-sm-6">
                          <input type="text" readonly class="form-control-plaintext text-right" id="plainTextTenor" value="0">
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
    <script>    
    </script>
  </body>
</html>
