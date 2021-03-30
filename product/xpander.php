<?php
  require_once "../config.php";  
  // require_once '../../functions.php';

  // if ( isset($_POST['btnxpander']) ) {
  //   if ( tambah($_POST) > 0) {
  //     echo "<script> window.open('../../brosur/xpander.pdf'); </script>";
  //   }    
  // }  

  $data = file_get_contents(BASE_URL.DS.'json/xpander.json');
  $xpander = json_decode($data, true);
  $spesifikasi = "MITSUBISHI XPANDER GLX MT";
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
        background: white;
        color: black;
      }      
    </style>
    <title>Mitsubishi Xpander - Promo & Simulasi Kredit Mitsubishi</title>
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
        <span class="navbar-text text-white mmc-bold">
          Vandystio Danantho
        </span>
      </div>
    </nav>  
    <!-- Akhir Navbar -->  

<!-- Main -->
<section class="main-product" id="mainProduct">
  <div class="container">
    <div class="row mb-3">
      <div class="col-lg-6 col-12">
        <h3 id="carTitle" class="car-title mmc-bold">MITSUBISHI XPANDER GLX MT</h3>
      </div>    
      <div class="col-lg-6 col-12 select-car">        
        <select class="selectpicker" id="selectTipe" data-width="auto" data-live-search="true" title="Silahkan Pilih Mobil Lain...">            
          <option value="023">MITSUBISHI XPANDER GLX MT</option>
          <option value="024">MITSUBISHI XPANDER GLS MT</option>
          <option value="062">MITSUBISHI XPANDER GLS AT</option>
          <option value="025">MITSUBISHI XPANDER EXCEED MT</option>
          <option value="026">MITSUBISHI XPANDER EXCEED AT</option>
          <option value="063">MITSUBISHI XPANDER SPORT MT</option>
          <option value="027">MITSUBISHI XPANDER SPORT AT</option>
          <option value="028">MITSUBISHI XPANDER ULTIMATE AT</option>                    
        </select>        
      </div>    
    </div>
    <div class="row justify-content-between">
      <div class="col-lg-6 pr-lg-5 scale-down">
        <div class="row">
          <div class="col-lg-12" style="border: 1px solid #aaa">
            <div class="swiper-container swiper-container-detail">            
              <div class="swiper-wrapper">
                <div class="swiper-slide">                
                  <a href="<?= BASE_URL.DS.'assets/img/xpander/1.webp'; ?>" data-lightbox="view-xpander" class="display">
                    <img src="<?= BASE_URL.DS.'assets/img/xpander/1.webp'; ?>" width="100%">
                  </a>                  
                </div>                
                <div class="swiper-slide">
                  <a href="<?= BASE_URL.DS.'assets/img/xpander/2.webp'; ?>" data-lightbox="view-xpander" class="display">
                    <img src="<?= BASE_URL.DS.'assets/img/xpander/2.webp'; ?>" width="100%">
                  </a>                  
                </div>                                         
                <div class="swiper-slide">
                  <a href="<?= BASE_URL.DS.'assets/img/xpander/3.webp'; ?>" data-lightbox="view-xpander" class="display">
                    <img src="<?= BASE_URL.DS.'assets/img/xpander/3.webp'; ?>" width="100%">
                  </a>                  
                </div>                
                <div class="swiper-slide mt-2">
                  <a href="<?= BASE_URL.DS.'assets/img/xpander/4.webp'; ?>" data-lightbox="view-xpander" class="display">
                    <img src="<?= BASE_URL.DS.'assets/img/xpander/4.webp'; ?>" width="100%">
                  </a>
                </div>  
                <div class="swiper-slide">
                  <a href="<?= BASE_URL.DS.'assets/img/xpander/5.webp'; ?>" data-lightbox="view-xpander" class="display">
                    <img src="<?= BASE_URL.DS.'assets/img/xpander/5.webp'; ?>" width="100%">
                  </a>                  
                </div>                     
                <div class="swiper-slide">
                  <a href="<?= BASE_URL.DS.'assets/img/xpander/6.webp'; ?>" data-lightbox="view-xpander" class="display">
                    <img src="<?= BASE_URL.DS.'assets/img/xpander/6.webp'; ?>" width="100%">
                  </a>                  
                </div>                     
                <div class="swiper-slide">
                  <a href="<?= BASE_URL.DS.'assets/img/xpander/7.webp'; ?>" data-lightbox="view-xpander" class="display">
                    <img src="<?= BASE_URL.DS.'assets/img/xpander/7.webp'; ?>" width="100%">
                  </a>                  
                </div>                     
                <div class="swiper-slide">
                  <a href="<?= BASE_URL.DS.'assets/img/xpander/8.webp'; ?>" data-lightbox="view-xpander" class="display">
                    <img src="<?= BASE_URL.DS.'assets/img/xpander/8.webp'; ?>" width="100%">
                  </a>                  
                </div>                     
              </div>                   
              <div class="swiper-button-next swiper-button-next-detail" style="color: black"></div>
              <div class="swiper-button-prev swiper-button-prev-detail" style="color: black"></div>
            </div>
          </div>
        </div>
        <div class="row spek-desktop">
          <div class="col-lg-12" style="border: 1px solid #aaa">
            <div class="row">
              <div class="col-lg-12 text-center background-title p-2">
                <h5 class="mt-1 mmc-medium">Spesifikasi Utama</h5>
              </div>
            </div>
            <div class="row spek-container" id="spekDesktop">
              <div class="col-lg-6 col-md-6 mt-2">
                <label>Displacement (cc) :</label>
              </div>
              <div class="col-lg-6 col-md-6 mt-2">
                <label id="spek1"><?= $xpander[$spesifikasi]['Displacement']; ?></label>
              </div>
              <div class="col-lg-6 col-md-6">
                <label>Transmission :</label>
              </div>
              <div class="col-lg-6 col-md-6">
                <label id="spek2"><?= $xpander[$spesifikasi]['Transmission']; ?></label>
              </div>
              <div class="col-lg-6 col-md-6">
                <label>Wheel & Tire :</label>
              </div>
              <div class="col-lg-6 col-md-6">
                <label id="spek3"><?= $xpander[$spesifikasi]['Wheel & Tire']; ?></label>
              </div>
              <div class="col-lg-6 col-md-6">
                <label>Dual SRS Airbags :</label>
              </div>
              <div class="col-lg-6 col-md-6">
                <label id="spek4"><?= $xpander[$spesifikasi]['Dual SRS Airbags']; ?></label>
              </div>
              <div class="col-lg-6 col-md-6">
                <label>Hill Start Assist (HSA) :</label>
              </div>
              <div class="col-lg-6 col-md-6">
                <label id="spek5"><?= $xpander[$spesifikasi]['Hill Start Assist']; ?></label>
              </div>
              <div class="col-lg-6 col-md-6">
                <label>Keyless Operation System :</label>
              </div>
              <div class="col-lg-6 col-md-6">
                <label id="spek6"><?= $xpander[$spesifikasi]['Keyless Operation System']; ?></label>
              </div>
              <div class="col-lg-6 col-md-6">
                <label>Ground Clearance (mm) :</label>
              </div>
              <div class="col-lg-6 col-md-6">
                <label id="spek7"><?= $xpander[$spesifikasi]['Ground Clearance']; ?></label>
              </div>
              <div class="col-lg-12 mb-2 mt-2">
                <a class="btn btn-danger" target="_blank" href="<?= BASE_URL.DS.'brosur/xpander.pdf'; ?>">E-Brochure</a>
              </div>
            </div>
          </div>  
        </div>
      </div>
      <div class="col-lg-6 scale-down" style="border: 1px solid #aaa">          
        <div class="row">
          <div class="col-lg-12 text-center background-title p-2">
            <h5 class="mt-1 mmc-medium">Harga Mobil</h5>
          </div>
        </div>
        <form>
          <div class="form-group row d-flex justify-content-between">
            <label for="plainTextHargaOtr" class="font-weight-bold col-lg-4 col-5 col-form-label">Harga OTR :</label>
            <div class="col-lg-8 col-7">
              <?php
                $tampil = $conn->query("SELECT MIN(harga) FROM tb_harga WHERE merek = 'XPANDER'");
                $harga = $tampil->fetch_array();                
                $harga = $harga[0];
              ?>
              <input type="text" readonly class="font-weight-bold form-control-plaintext text-right" id="plainTextHargaOtr" value="<?= "Rp " . number_format($harga, 0, ",", "."); ?>">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-12 text-right">
              <a class="btn btn-danger" href="https://wa.me/+6282370304974?text=Hai Kak Vandys, Saya ingin bertanya tentang produk Mitsubishi" target="_blank">Beli Tunai</a>
            </div>
            <div class="col-lg-12"><hr class="hr-perhitungan" style="margin-bottom: 0 !important" /></div>
            <div class="col-lg-12"> 
              <small class="text-muted">* Kredit</small>
            </div>          
          </div>
          <div class="form-group row">
            <label for="plainTextTotalUangMuka" class="col-lg-4 col-6 col-form-label">Total Uang Muka :</label>
            <div class="col-lg-8 col-6">
              <input type="text" readonly class="form-control-plaintext text-right font-weight-bold" id="plainTextTotalUangMuka" value="Rp 0">
            </div>
          </div>
          <div class="form-group row">
            <label for="plainTextCicilan" class="col-lg-4 col-5 col-form-label">Cicilan / Bulan : </label>
            <div class="col-lg-8 col-7">
              <input type="text" readonly class="form-control-plaintext text-right font-weight-bold" id="plainTextCicilan" value="Rp 0">
            </div>
          </div>    
          <div class="form-group row">
            <label for="plainTextTenor" class="col-lg-4 col-5 col-form-label">Tenor (Bulan): </label>
            <div class="col-lg-8 col-7">
              <input type="text" readonly class="form-control-plaintext text-right font-weight-bold" id="plainTextTenor" value="Rp 0">
            </div>
          </div>    
          <div class="form-group row">            
            <div class="col-lg-12"><hr class="hr-perhitungan" style="margin-bottom: 0 !important" /></div>
            <div class="col-lg-12">
              <small class="text-muted">* Simulasi Kredit</small>
            </div>
          </div>      
          <div class="form-group row">
            <label for="inputUangMuka" class="col-lg-6 col-md-6 col-12 col-form-label">Uang Muka : </label>
            <div class="col-lg-6 col-md-6 col-12 d-flex justify-content-end">
              <input type="text" class="width-100 form-control form-control-sm form-control-width" id="inputUangMuka" name="inputUangMuka" data-type="currency" placeholder="Rp 10.000.000">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputSukuBunga" class="col-lg-6 col-md-6 col-12 col-form-label">Suku Bunga (% per tahun) : </label>
            <div class="col-lg-6 col-md-6 col-12 d-flex justify-content-end">
              <input type="number" class="width-100 form-control form-control-sm form-control-width" id="inputSukuBunga" placeholder="10">
            </div>
          </div>
          <div class="form-group row">
            <label for="selectTenor" class="col-lg-6 col-md-6 col-12 col-form-label">Tenor (bulan) : </label>
            <div class="col-lg-6 col-md-6 col-12 d-flex justify-content-end">
              <select class="width-100 form-control form-control-sm form-control-width" class="selectTenor" id="selectTenor">
                <option value="12">12</option>
                <option value="24">24</option>
                <option value="36">36</option>
                <option value="48">48</option>
                <option value="60">60</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-12 text-right">
              <a class="btn btn-danger" name="buttonHitung" id="buttonHitung">Hitung</a>
            </div>
            <div class="col-lg-12 text-center perhitungan" style="display: none">
              <small class="text-danger">* Perhitungan selesai. Silahkan cek kembali harga.</small>              
            </div>
            <div class="col-lg-12"><hr class="hr-perhitungan" style="margin-bottom: 0 !important" /></div>
          </div>          
          <!-- <div class="form-group row">
            <label for="plainTextTotalCicilan" class="col-lg-4 col-form-label">Total Cicilan :</label>
            <div class="col-lg-8">
              <input type="text" readonly class="form-control-plaintext text-right" id="plainTextTotalCicilan" value="Rp 271.300.000">
            </div>
          </div> -->          
          <div class="form-group row mt-1">
            <div class="col-lg-12 text-justify">
              <small class="text-muted">* Harga On The Road Sumut per <?= date('F Y'); ?>.</small>
            </div>
            <div class="col-lg-12 text-justify">
              <small class="text-muted">* Harga dapat berubah sewaktu-waktu.</small>
            </div>
            <div class="col-lg-12 text-justify">
              <small class="text-muted">* Simulasi ini hanya sebagai asumsi belum termasuk biaya admin, asuransi dll. Untuk estimasi cicilan sesungguhnya harap konsultasi di dealer Sardana Berlian terdekat atau chat via Whatsapp pada kolom Kontak Kami dibawah ini.</small>
            </div>                      
          </div>
        </form>            
        <div class="row">
          <div class="col-lg-12 text-center p-2 background-title">
            <h5 class="mmc-medium mt-1">Kontak Kami</h5>
          </div>
        </div>
        <div class="row mt-3 mb-3">
          <div class="col-lg-12 d-flex justify-content-between">
            <span><i class="fas fa-lg fa-user"></i> Vandys</span>
            <a href="https://wa.me/+6282370304974?text=Hai Kak Vandys, Saya ingin bertanya tentang produk Mitsubishi" target="_blank" class="whatsapp-bg"><i class="fab fa-lg fa-whatsapp"></i> 0811 6541 800
            </a>
          </div>                                                  
        </div>
        <div class="row mb-3">
          <div class="col-lg-12 text-center">
            <a href="https://wa.me/+6282370304974?text=Hai Kak Vandys, Saya ingin bertanya tentang produk Mitsubishi" target="_blank" class="btn btn-danger">Chat</a>
            <a href="<?= BASE_URL.DS.'promo.php'; ?>" class="btn btn-danger">Lihat Promo</a>
          </div> 
        </div>
        <div class="row spek-mobile">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-12 text-center background-title p-2">
                <h6 class="font-weight-bold text-white mt-1">Spesifikasi Mobil</h6>
              </div>
            </div>
            <div class="row spek-container-hidden" id="spekMobile">
              <div class="col-lg-6 col-7 mt-2">
                <label>Displacement (cc) :</label>
              </div>
              <div class="col-lg-6 col-5 mt-2">
                <label id="spek1"><?= $xpander[$spesifikasi]['Displacement']; ?></label>
              </div>
              <div class="col-lg-6 col-7">
                <label>Transmission :</label>
              </div>
              <div class="col-lg-6 col-5">
                <label id="spek2"><?= $xpander[$spesifikasi]['Transmission']; ?></label>
              </div>
              <div class="col-lg-6 col-7">
                <label>Wheel & Tire :</label>
              </div>
              <div class="col-lg-6 col-5">
                <label id="spek3"><?= $xpander[$spesifikasi]['Wheel & Tire']; ?></label>
              </div>
              <div class="col-lg-6 col-7">
                <label>Dual SRS Airbags :</label>
              </div>
              <div class="col-lg-6 col-5">
                <label id="spek4"><?= $xpander[$spesifikasi]['Dual SRS Airbags']; ?></label>
              </div>
              <div class="col-lg-6 col-7">
                <label>Hill Start Assist (HSA) :</label>
              </div>
              <div class="col-lg-6 col-5">
                <label id="spek5"><?= $xpander[$spesifikasi]['Hill Start Assist']; ?></label>
              </div>
              <div class="col-lg-6 col-7">
                <label>Keyless Operation System :</label>
              </div>
              <div class="col-lg-6 col-5">
                <label id="spek6"><?= $xpander[$spesifikasi]['Keyless Operation System']; ?></label>
              </div>
              <div class="col-lg-6 col-7">
                <label>Ground Clearance (mm) :</label>
              </div>
              <div class="col-lg-6 col-5">
                <label id="spek7"><?= $xpander[$spesifikasi]['Ground Clearance']; ?></label>
              </div>
              <div class="col-lg-12 mb-2 mt-2">
                <a class="btn btn-danger" target="_blank" href="<?= BASE_URL.DS.'brosur/xpander.pdf'; ?>">E-Brochure</a>
              </div>
            </div>
          </div>  
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Akhir Main -->

<!-- Warna -->
<section class="warna-product mt-5" id="warnaProduct">
  <div class="container">   
    <div class="row"> 
      <div class="col-12 text-center mb-2">      
        <img src="<?= BASE_URL.DS.'assets/img/xpander/white-xpander.webp'; ?>" alt="Mitsubishi Sardana Xpander Medan" class="img-color img-color-xpander">
      </div>
      <div class="col-12 text-center mb-2">
        <small class="text-muted">* Khusus Xpander Ultimate AT</small>
      </div>
      <div class="col-12 text-center tombol-warna">          
        <span class="mr-3 color-black palet" data-toggle="tooltip" data-placement="bottom" title="Diamond Black Mica" style="background: #050505"></span>      
        <span class="mr-3 color-white palet" data-toggle="tooltip" data-placement="bottom" title="Quartz White Pearl" style="background: #F4F4F4"></span>       
        <span class="mr-3 color-grey palet" data-toggle="tooltip" data-placement="bottom" title="Graphite Grey Metallic" style="background: #303034"></span>       
        <span class="mr-3 color-silver palet" data-toggle="tooltip" data-placement="bottom" title="Sterling Silver Metallic" style="background: #81817F" ></span>        
        <span class="mr-3 color-red palet" data-toggle="tooltip" data-placement="bottom" title="Red Metallic" style="background: #AB0104"></span>    
        <span class="mr-3 color-bronze palet" data-toggle="tooltip" data-placement="bottom" title="Deep Bronze Metallic" style="background: #664019"></span>
      </div>
      <div class="col-12 text-center mt-3">
        <p>* Warna dan bentuk di atas dapat berbeda dengan warna dan bentuk mobil sesungguhnya. Untuk konfirmasi ketersediaan warna silahkan hubungi <a href="https://wa.me/+6282370304974?text=Hai Kak Vandys, Saya ingin bertanya tentang produk Mitsubishi" target="_blank">Whatsapp</a> kami.</p>
      </div>
    </div>
  </div>
</section>
<!-- Akhir Warna -->

<!-- Detail -->
<section class="detail-product mt-5" id="detailProduct">  
  <div class="container-fluid" style="padding-left: 0; padding-right: 0">      
    <div class="row" style="margin-right:0; margin-left:0">
      <div class="col-lg-12">          
        <ul class="nav nav-tabs nav-justified">
          <li class="nav-item">
            <a class="nav-link nav-link-exterior text-dark active" href="">Exterior</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-interior text-dark" href="">Interior</a>
          </li>                    
        </ul>
      </div>
      <div class="col-lg-12 mb-5">
        <div class="swiper-container-exterior">
          <div class="swiper-wrapper">            
            <div class="swiper-slide">              
              <a href="<?= BASE_URL.DS.'assets/img/xpander/exterior/front-rear-bumper.jpg'; ?>" data-lightbox="exterior" data-title="Front/Rear Bumper">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/exterior/front-rear-bumper.jpg'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">       
              <a href="<?= BASE_URL.DS.'assets/img/xpander/exterior/rear-camera.jpg'; ?>" data-lightbox="exterior" data-title="Rear Camera">       
                <img src="<?= BASE_URL.DS.'assets/img/xpander/exterior/rear-camera.jpg'; ?>" width="100%" >
              </a>
            </div>
            <div class="swiper-slide">    
              <a href="<?= BASE_URL.DS.'assets/img/xpander/exterior/rear-parking.jpg'; ?>" data-lightbox="exterior" data-title="Rear Parking">          
                <img src="<?= BASE_URL.DS.'assets/img/xpander/exterior/rear-parking.jpg'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">   
              <a href="<?= BASE_URL.DS.'assets/img/xpander/exterior/rear-spoiler.jpg'; ?>" data-lightbox="exterior" data-title="Rear Spoiler">           
                <img src="<?= BASE_URL.DS.'assets/img/xpander/exterior/rear-spoiler.jpg'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">   
              <a href="<?= BASE_URL.DS.'assets/img/xpander/exterior/rear-window-defogger.jpg'; ?>" data-lightbox="exterior" data-title="Rear Window Defogger">           
                <img src="<?= BASE_URL.DS.'assets/img/xpander/exterior/rear-window-defogger.jpg'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">   
              <a href="<?= BASE_URL.DS.'assets/img/xpander/exterior/shark-fin-antenna.jpg'; ?>" data-lightbox="exterior" data-title="Shark Fin Antenna">           
                <img src="<?= BASE_URL.DS.'assets/img/xpander/exterior/shark-fin-antenna.jpg'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">              
              <a href="<?= BASE_URL.DS.'assets/img/xpander/exterior/velg.jpg'; ?>" data-lightbox="exterior" data-title="Velg">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/exterior/velg.jpg'; ?>" width="100%">
              </a>
            </div>
          </div>        
        </div>
        <div class="swiper-container-interior" style="display: none">      
          <div class="swiper-wrapper">                      
            <div class="swiper-slide">              
              <a href="<?= BASE_URL.DS.'assets/img/xpander/interior/ac-double-blower.jpg'; ?>" data-lightbox="interior" data-title="Ac Double Blower">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/interior/ac-double-blower.jpg'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">       
              <a href="<?= BASE_URL.DS.'assets/img/xpander/interior/black-interior.jpg'; ?>" data-lightbox="interior" data-title="Black Interior">       
                <img src="<?= BASE_URL.DS.'assets/img/xpander/interior/black-interior.jpg'; ?>" width="100%" >
              </a>
            </div>
            <div class="swiper-slide">    
              <a href="<?= BASE_URL.DS.'assets/img/xpander/interior/bottle-holder.jpg'; ?>" data-lightbox="interior" data-title="Bottle Holder">          
                <img src="<?= BASE_URL.DS.'assets/img/xpander/interior/bottle-holder.jpg'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">   
              <a href="<?= BASE_URL.DS.'assets/img/xpander/interior/coin-box.jpg'; ?>" data-lightbox="interior" data-title="Coin Box">           
                <img src="<?= BASE_URL.DS.'assets/img/xpander/interior/coin-box.jpg'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">   
              <a href="<?= BASE_URL.DS.'assets/img/xpander/interior/cup-holder-depan.jpg'; ?>" data-lightbox="interior" data-title="Cup Holder Depan">           
                <img src="<?= BASE_URL.DS.'assets/img/xpander/interior/cup-holder-depan.jpg'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">   
              <a href="<?= BASE_URL.DS.'assets/img/xpander/interior/front-console-box.jpg'; ?>" data-lightbox="interior" data-title="Front Console Box">           
                <img src="<?= BASE_URL.DS.'assets/img/xpander/interior/front-console-box.jpg'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">              
              <a href="<?= BASE_URL.DS.'assets/img/xpander/interior/front-door-pocket.jpg'; ?>" data-lightbox="interior" data-title="Front Door Pocket">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/interior/front-door-pocket.jpg'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">              
              <a href="<?= BASE_URL.DS.'assets/img/xpander/interior/gantungan-serbaguna.jpg'; ?>" data-lightbox="interior" data-title="Gantungan Serbaguna">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/interior/gantungan-serbaguna.jpg'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">              
              <a href="<?= BASE_URL.DS.'assets/img/xpander/interior/glove-box.jpg'; ?>" data-lightbox="interior" data-title="Glove Box">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/interior/glove-box.jpg'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">              
              <a href="<?= BASE_URL.DS.'assets/img/xpander/interior/ruang-bagasi-luas.jpg'; ?>" data-lightbox="interior" data-title="Ruang Bagasi Luas">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/interior/ruang-bagasi-luas.jpg'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">              
              <a href="<?= BASE_URL.DS.'assets/img/xpander/interior/high-contrast-speedometer.jpg'; ?>" data-lightbox="interior" data-title="High Contrast Speedometer">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/interior/high-contrast-speedometer.jpg'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">              
              <a href="<?= BASE_URL.DS.'assets/img/xpander/interior/instrument-panel-lower-tray.jpg'; ?>" data-lightbox="interior" data-title="Instrument Panel Lower Tray">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/interior/instrument-panel-lower-tray.jpg'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">              
              <a href="<?= BASE_URL.DS.'assets/img/xpander/interior/instrument-panel-side.jpg'; ?>" data-lightbox="interior" data-title="Instrument Panel Side">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/interior/instrument-panel-side.jpg'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">              
              <a href="<?= BASE_URL.DS.'assets/img/xpander/interior/interior-depan.png'; ?>" data-lightbox="interior" data-title="Interior Depan">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/interior/interior-depan.png'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">              
              <a href="<?= BASE_URL.DS.'assets/img/xpander/interior/kemudahan-akses.jpg'; ?>" data-lightbox="interior" data-title="Kemudahan Akses">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/interior/kemudahan-akses.jpg'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">              
              <a href="<?= BASE_URL.DS.'assets/img/xpander/interior/ruang-kabin-senyap.jpg'; ?>" data-lightbox="interior" data-title="Ruang Kabin Senyap">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/interior/ruang-kabin-senyap.jpg'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">              
              <a href="<?= BASE_URL.DS.'assets/img/xpander/interior/tilt-telescopic-steering.jpg'; ?>" data-lightbox="interior" data-title="Tilt Telescopic Steering">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/interior/tilt-telescopic-steering.jpg'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="<?= BASE_URL.DS.'assets/img/xpander/interior/twetter.jpg'; ?>" data-lightbox="interior" data-title="Twetter">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/interior/twetter.jpg'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">              
              <a href="<?= BASE_URL.DS.'assets/img/xpander/interior/sandaran-lengan.jpg'; ?>" data-lightbox="interior" data-title="Sandaran Lengan">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/interior/sandaran-lengan.jpg'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">              
              <a href="<?= BASE_URL.DS.'assets/img/xpander/interior/ruang-penyimpanan-serbaguna.jpg'; ?>" data-lightbox="interior" data-title="Ruang Penyimpanan Serbaguna">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/interior/ruang-penyimpanan-serbaguna.jpg'; ?>" width="100%">
              </a>
            </div>
          </div>        
        </div>          
      </div>
    </div>
  </div>
</section>
<!-- Akhir Detail -->

<!-- Rekomendasi -->
<!-- <section class="rekomendasi" id="rekomendasi">
  <div class="container">    
    <div class="row">
      <div class="col-lg-12 text-center">
        <h3 style="font-family: mmc-bold">Mobil Lainnya</h3>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card mb-3" style="max-width: 540px;cursor: pointer">
          <div class="row no-gutters">
            <div class="col-md-12">
              <img src="<?= BASE_URL.DS ?>img/pajero-sport.png" class="card-img" alt="...">
            </div>
            <div class="col-md-12">
              <div class="card-body">
                <h5 class="card-title text-center">Pajero Sport Exceed A/T<span style="color: red;text-shadow: 0 0 1px rgba(0,0,0,.5);font-size: 14px"> NEW</span></h5>
                <div class="row">
                  <div class="col-md-3 col-4">Harga</div>
                  <div class="col-md-9 col-8">Rp. 532.000.000</div>
                </div>
                <div class="row">
                  <div class="col-md-3 col-4">TDP</div>
                  <div class="col-md-9 col-8">Rp. 40.000.000</div>
                </div>
                <div class="row">
                  <div class="col-md-3 col-4">Cicilan</div>
                  <div class="col-md-9 col-8">Rp. 4.000.000 / Bulan</div>
                </div>     
                <p class="card-text"><small class="text-muted"> Medan | OTR Sumatera Utara</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card mb-3" style="max-width: 540px;cursor: pointer">
          <div class="row no-gutters">
            <div class="col-md-12">
              <img src="<?= BASE_URL.DS ?>img/eclipse-cross.png" class="card-img" alt="...">
            </div>
            <div class="col-md-12">
              <div class="card-body">
                <h5 class="card-title text-center">Eclipse Cross Red Diamond</h5>
                <div class="row">
                  <div class="col-md-3 col-4">Harga</div>
                  <div class="col-md-9 col-8">Rp. 501.000.000</div>
                </div>
                <div class="row">
                  <div class="col-md-3 col-4">TDP</div>
                  <div class="col-md-9 col-8">Rp. 40.000.000</div>
                </div>
                <div class="row">
                  <div class="col-md-3 col-4">Cicilan</div>
                  <div class="col-md-9 col-8">Rp. 4.000.000 / Bulan</div>
                </div>     
                <p class="card-text"><small class="text-muted"> Medan | OTR Sumatera Utara</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card mb-3" style="max-width: 540px;cursor: pointer">
          <div class="row no-gutters">
            <div class="col-md-12">
              <img src="<?= BASE_URL.DS ?>img/xpander-cross.png" class="card-img" alt="...">
            </div>
            <div class="col-md-12">
              <div class="card-body">
                <h5 class="card-title text-center">Xpander Cross Rockford<span style="color: red;text-shadow: 0 0 1px rgba(0,0,0,.5);font-size: 14px"> NEW</span></h5>
                <div class="row">
                  <div class="col-md-3 col-4">Harga</div>
                  <div class="col-md-9 col-8">Rp. 316.000.000</div>
                </div>
                <div class="row">
                  <div class="col-md-3 col-4">TDP</div>
                  <div class="col-md-9 col-8">Rp. 40.000.000</div>
                </div>
                <div class="row">
                  <div class="col-md-3 col-4">Cicilan</div>
                  <div class="col-md-9 col-8">Rp. 4.000.000 / Bulan</div>
                </div>     
                <p class="card-text"><small class="text-muted"> Medan | OTR Sumatera Utara</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->



<?php require_once "../footer.php"; ?>
<!-- Akhir Rekomendasi -->
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
<script>  
  $(function() {    
    $('[data-toggle="tooltip"]').tooltip();
    let rpFormat = new Intl.NumberFormat('id-id', {
        style: 'currency',
        currency: 'IDR'
    });

    $('[data-toggle="tooltip"]').tooltip();
    $('.color-black').click(() => $('.img-color-xpander').attr('src', '<?= BASE_URL.DS.'assets/img/xpander/black-xpander.webp'; ?>'));
    $('.color-red').click(() => $('.img-color-xpander').attr('src', '<?= BASE_URL.DS.'assets/img/xpander/red-ultimate-xpander.webp'; ?>'));
    $('.color-silver').click(() => $('.img-color-xpander').attr('src', '<?= BASE_URL.DS.'assets/img/xpander/silver-xpander.webp'; ?>'));
    $('.color-grey').click(() => $('.img-color-xpander').attr('src', '<?= BASE_URL.DS.'assets/img/xpander/grey-xpander.webp'; ?>'));
    $('.color-white').click(() => $('.img-color-xpander').attr('src', '<?= BASE_URL.DS.'assets/img/xpander/white-xpander.webp'; ?>'));
    $('.color-bronze').click(() => $('.img-color-xpander').attr('src', '<?= BASE_URL.DS.'assets/img/xpander/bronze-xpander.webp'; ?>'));

    $('#selectTipe').change(function() {                  
      let kode = $('#selectTipe').val();
      let tipe = $('#selectTipe option:selected').text();      
      $.ajax ({
        type: "post",
        data: {kode: kode, tipe: tipe},
        url: "../json/data-xpander.php",
        success: function(data) {
          let hasil = JSON.parse(data);
          let totalCicilan = 0.2 * hasil.harga;
          let cicilanPerBulan = (hasil.harga - totalCicilan) / 60;
          let tampilTotalCicilan = rpFormat.format(totalCicilan);
          let tampilCicilanPerBulan = rpFormat.format(cicilanPerBulan);
          let hargaOtr = rpFormat.format(hasil.harga);
          $('#carTitle').html('MITSUBISHI XPANDER ' + hasil.tipe);
          $('#plainTextHargaOtr').val(hargaOtr.substring(0, hargaOtr.length - 3));

          if (window.matchMedia("(min-width: 800px)").matches) {
            $('#spekDesktop').removeClass('spek-container-hidden').addClass('spek-container');
            $('#spekMobile').removeClass('spek-container').addClass('spek-container-hidden');
          } else if (window.matchMedia("(max-width: 600px)").matches) {
            $('#spekDesktop').removeClass('spek-container').addClass('spek-container-hidden');
            $('#spekMobile').removeClass('spek-container-hidden').addClass('spek-container');
          }                    
          $('.spek-container #spek1').text(hasil.transmission);
          $('.spek-container #spek2').text(hasil.displacement);
          $('.spek-container #spek3').text(hasil.wheel);
          $('.spek-container #spek4').text(hasil.srs);
          $('.spek-container #spek5').text(hasil.hill);
          $('.spek-container #spek6').text(hasil.keyless);
          $('.spek-container #spek7').text(hasil.ground);   
          $('#plainTextTotalUangMuka').val(tampilTotalCicilan.substring(0, tampilTotalCicilan.length - 3));
          $('#plainTextCicilan').val(tampilCicilanPerBulan.substring(0, tampilCicilanPerBulan.length - 3));
          $('#plainTextTenor').val('59 Bulan');  
          $('#inputUangMuka').val('');
          $('#inputSukuBunga').val('');    
          $('.perhitungan').css('display', 'none');
        }
      });
    });

    const swiperContainerExterior = new Swiper('.swiper-container-exterior', {            
    spaceBetween: 10,
    breakpoints: {
      800: {
        slidesPerView: 3
      },
      600: {
        slidesPerView: 2
      },
      300: {
        slidesPerView: 1
      }
    }
    });

    const swiperContainerDetail = new Swiper('.swiper-container-detail', {            
      spaceBetween: 10,
      slidesPerView: 1,
      navigation: {
        nextEl: '.swiper-button-next-detail',
        prevEl: '.swiper-button-prev-detail',
      }
    });

    $('.nav-link-exterior').click(function(e) {
      $('.swiper-container-interior').css('display', 'none');            
      $('.nav-link-interior').removeClass('active');      
      $('.swiper-container-exterior').css('display', 'block');            
      $(this).addClass('active');
      e.preventDefault();
    });

    $('.nav-link-interior').click(function(e) {
      $('.swiper-container-exterior').css('display', 'none');      
      $('.nav-link-exterior').removeClass('active');      
      $('.swiper-container-interior').css('display', 'block');      
      $(this).addClass('active');
      const swiperContainerInterior = new Swiper('.swiper-container-interior', {            
        spaceBetween: 10,      
        breakpoints: {
          800: {
            slidesPerView: 3
          },
          600: {
            slidesPerView: 2
          },
          300: {
            slidesPerView: 1
          }
        }
      });
      e.preventDefault();
    });

    lightbox.option({'wrapAround': true})    

    // Hitung Langsung onload
    let hargaOtr = parseInt(
      $("#plainTextHargaOtr").val().substr(3).replace(/\./g, "")
    );
    let totalCicilan = 0.2 * hargaOtr;
    let cicilanPerBulan = (hargaOtr - totalCicilan) / 60;
    let tampilTotalCicilan = rpFormat.format(totalCicilan);
    let tampilCicilanPerBulan = rpFormat.format(cicilanPerBulan);
    $("#plainTextTotalUangMuka").val(
      tampilTotalCicilan.substring(0, tampilTotalCicilan.length - 3)
    );
    $("#plainTextCicilan").val(
      tampilCicilanPerBulan.substring(0, tampilCicilanPerBulan.length - 3)
    );
    $("#plainTextTenor").val("59 Bulan");

    $("#buttonHitung").click(function () {      
      let sukuBunga = parseFloat($("#inputSukuBunga").val());
      let tenor = parseInt($("#selectTenor option:selected").val());
      let uangMuka = parseInt(
        $("#inputUangMuka").val().substr(3).replace(/\./g, "")
      );
      let hargaOtr = parseInt(
        $("#plainTextHargaOtr").val().substr(3).replace(/\./g, "")
      );

      // Perhitungan
      let pokokCicilan = hargaOtr - uangMuka;
      let bungaCicilan = (pokokCicilan * sukuBunga) / 100;
      let totalCicilan = pokokCicilan + bungaCicilan;
      let cicilanPerBulan = totalCicilan / tenor;
      let totalUangMuka = uangMuka + cicilanPerBulan;
      // let tampilTotalCicilan = rpFormat.format(totalCicilan);
      let tampilTotalUangMuka = rpFormat.format(totalUangMuka);
      let tampilCicilanPerBulan = rpFormat.format(cicilanPerBulan);
      // $('#plainTextTotalCicilan').val(tampilTotalCicilan.substring(0, tampilTotalCicilan.length - 3));
      $("#plainTextTotalUangMuka").val(
        tampilTotalUangMuka.substring(0, tampilTotalUangMuka.length - 3)
      );
      $("#plainTextCicilan").val(
        tampilCicilanPerBulan.substring(0, tampilCicilanPerBulan.length - 3)
      );
      $("#plainTextTenor").val(tenor - 1 + " bulan");

      // Tampilkan Perhitungan Selesai
      $(".perhitungan").css("display", "block");
    });
  });
</script>
