<?php
  session_start();
  require_once "../config.php";
  // require_once '../../functions.php';

  // if ( isset($_POST['btnxpander']) ) {
  //   if ( tambah($_POST) > 0) {
  //     echo "<script> window.open('../../brosur/xpander.pdf'); </script>";
  //   }    
  // }  

  $data = file_get_contents(BASE_URL.DS.'json/xpander.json');
  $xpander = json_decode($data, true);
  $spesifikasi = 'MITSUBISHI ' .$_SESSION['category']. ' ' .$_SESSION['title'];
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
    <title>Mitsubishi Xpander - Promo & Simulasi Kredit Mitsubishi</title>
  </head>
  <body style="background: white; color: black">   
<?php readfile("../header.php"); ?>

<!-- Main -->
<section class="mainProduct" id="mainProduct">
  <div class="container">
    <div class="row mb-3">
      <div class="col-lg-6 col-12">
        <h3 id="carTitle" class="mmc-bold">MITSUBISHI XPANDER GLX MT</h3>
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
            <div class="swiper-container-main">            
              <div class="swiper-wrapper">
                <div class="swiper-slide">                
                  <a href="<?= BASE_URL.DS.'assets/img/xpander/1.png'; ?>" data-lightbox="view-xpander" class="display">
                    <img src="<?= BASE_URL.DS.'assets/img/xpander/1.png'; ?>" width="100%">
                  </a>                  
                </div>                
                <div class="swiper-slide">
                  <a href="<?= BASE_URL.DS.'assets/img/xpander/2.png'; ?>" data-lightbox="view-xpander" class="display">
                    <img src="<?= BASE_URL.DS.'assets/img/xpander/2.png'; ?>" width="100%">
                  </a>                  
                </div>                                         
                <div class="swiper-slide">
                  <a href="<?= BASE_URL.DS.'assets/img/xpander/3.png'; ?>" data-lightbox="view-xpander" class="display">
                    <img src="<?= BASE_URL.DS.'assets/img/xpander/3.png'; ?>" width="100%">
                  </a>                  
                </div>                
                <div class="swiper-slide mt-2">
                  <a href="<?= BASE_URL.DS.'assets/img/xpander/4.png'; ?>" data-lightbox="view-xpander" class="display">
                    <img src="<?= BASE_URL.DS.'assets/img/xpander/4.png'; ?>" width="100%">
                  </a>     
                </div>  
                <div class="swiper-slide">
                  <a href="<?= BASE_URL.DS.'assets/img/xpander/5.png'; ?>" data-lightbox="view-xpander" class="display">
                    <img src="<?= BASE_URL.DS.'assets/img/xpander/5.png'; ?>" width="100%">
                  </a>                  
                </div>                     
                <div class="swiper-slide">
                  <a href="<?= BASE_URL.DS.'assets/img/xpander/6.png'; ?>" data-lightbox="view-xpander" class="display">
                    <img src="<?= BASE_URL.DS.'assets/img/xpander/6.png'; ?>" width="100%">
                  </a>                  
                </div>                     
                <div class="swiper-slide">
                  <a href="<?= BASE_URL.DS.'assets/img/xpander/7.png'; ?>" data-lightbox="view-xpander" class="display">
                    <img src="<?= BASE_URL.DS.'assets/img/xpander/7.png'; ?>" width="100%">
                  </a>                  
                </div>                     
                <div class="swiper-slide">
                  <a href="<?= BASE_URL.DS.'assets/img/xpander/8.png'; ?>" data-lightbox="view-xpander" class="display">
                    <img src="<?= BASE_URL.DS.'assets/img/xpander/8.png'; ?>" width="100%">
                  </a>                  
                </div>                     
              </div>                   
              <div class="swiper-button-next" style="color: black"></div>
              <div class="swiper-button-prev" style="color: black"></div>
            </div>
          </div>
        </div>
        <div class="row spek-desktop">
          <div class="col-lg-12" style="border: 1px solid #aaa">
            <div class="row">
              <div class="col-lg-12 text-center background-title p-2">
                <h6 class="font-weight-bold text-white mt-1">Spesifikasi Utama</h6>
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
                <a class="btn button-red" data-toggle="modal" data-target="#<?= $_SESSION['varian']; ?>">E-Brochure</a>                
              </div>
            </div>
          </div>  
        </div>
      </div>
      <?php require_once '../../hargamobil.php'; ?>
    </div>
  </div>
</section>
<!-- Akhir Main -->

<!-- Warna -->
<section class="warnaProduct mt-5" id="warnaProduct">
  <div class="container">   
    <div class="row"> 
      <div class="col-12 text-center mb-5">
      <?php if ($_SESSION['category'] == 'XPANDER BLACK EDITION') : ?>
        <img src="<?= BASE_URL.DS.'assets/img/xpander/car/xpander-black-edition.png'; ?>" alt="Mitsubishi Sardana Xpander Black Edition Medan" class="img-color img-color-xpander-black-edition">
      <?php else : ?>
        <img src="<?= BASE_URL.DS.'assets/img/xpander/car/xpander-white.png'; ?>" alt="Mitsubishi Sardana Xpander Medan" class="img-color img-color-xpander">        
      <?php endif; ?>
      </div>
      <div class="col-12 text-center tombol-warna"> 
        <?php if ($_SESSION['category'] == 'XPANDER' || $_SESSION['category'] == 'XPANDER BLACK EDITION' ) : ?>           
          <span class="mr-3 color-black palet" data-toggle="tooltip" data-placement="bottom" title="Diamond Black Mica" style="background: #050505"></span>      
          <span class="mr-3 color-white palet" data-toggle="tooltip" data-placement="bottom" title="Quartz White Pearl" style="background: #F4F4F4"></span>
        <?php endif; ?>
        <?php if ($_SESSION['kode'] == '024' || $_SESSION['kode'] == '062' || $_SESSION['kode'] == '025' || $_SESSION['kode'] == '026' || $_SESSION['kode'] == '063' || $_SESSION['kode'] == '027' || $_SESSION['kode'] == '028') : ?>
        <span class="mr-3 color-grey palet" data-toggle="tooltip" data-placement="bottom" title="Graphite Grey Metallic" style="background: #303034"></span>
        <?php endif; ?>
        <?php if ($_SESSION['kode'] == '063' || $_SESSION['kode'] == '027' || $_SESSION['kode'] == '028') : ?>
          <span class="mr-3 color-silver palet" data-toggle="tooltip" data-placement="bottom" title="Sterling Silver Metallic" style="background: #81817F" ></span>        
          <span class="mr-3 color-red palet" data-toggle="tooltip" data-placement="bottom" title="Red Metallic" style="background: #AB0104"></span>    
          <span class="mr-3 color-bronze palet" data-toggle="tooltip" data-placement="bottom" title="Deep Bronze Metallic" style="background: #664019"></span>      
        <?php endif;?>
      </div>
      <div class="col-12 text-center mt-3">
        <p>* Warna dan bentuk di atas dapat berbeda dengan warna dan bentuk mobil sesungguhnya. Untuk konfirmasi ketersediaan warna silahkan hubungi <a href="https://wa.me/+628116541800?text=Halo Mitsubishi Sardana." target="_blank">Whatsapp</a> kami.</p>
      </div>
    </div>
  </div>
</section>
<!-- Akhir Warna -->

<!-- Detail -->
<section class="detailProduct mt-5" id="detailProduct">  
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
        <div class="swiper-container-exterior swiper-container-exterior-xpander">
        <?php if ($_SESSION['category'] == 'XPANDER BLACK EDITION') : ?>
          <div class="swiper-wrapper">
            <div class="swiper-slide">              
              <a href="<?= BASE_URL.DS.'assets/img/xpander/exterior/black-edition/back-moulding.jpg'; ?>" data-lightbox="exterior" data-title="Rear Under Garnish">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/exterior/black-edition/back-moulding.jpg'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">       
              <a href="<?= BASE_URL.DS.'assets/img/xpander/exterior/black-edition/black-beltline.jpg'; ?>" data-lightbox="exterior" data-title="Black Beltline & Quarter Moulding">       
                <img src="<?= BASE_URL.DS.'assets/img/xpander/exterior/black-edition/black-beltline.jpg'; ?>" width="100%" >
              </a>
            </div>
            <div class="swiper-slide">    
              <a href="<?= BASE_URL.DS.'assets/img/xpander/exterior/black-edition/black-mirror.jpg'; ?>" data-lightbox="exterior" data-title="Black Door Mirror">          
                <img src="<?= BASE_URL.DS.'assets/img/xpander/exterior/black-edition/black-mirror.jpg'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">   
              <a href="<?= BASE_URL.DS.'assets/img/xpander/exterior/black-edition/emblem.jpg'; ?>" data-lightbox="exterior" data-title="Special Emblem">           
                <img src="<?= BASE_URL.DS.'assets/img/xpander/exterior/black-edition/emblem.jpg'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">   
              <a href="<?= BASE_URL.DS.'assets/img/xpander/exterior/black-edition/front-corner-extension.jpg'; ?>" data-lightbox="exterior" data-title="Front Corner Extension">           
                <img src="<?= BASE_URL.DS.'assets/img/xpander/exterior/black-edition/front-corner-extension.jpg'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">   
              <a href="<?= BASE_URL.DS.'assets/img/xpander/exterior/black-edition/side-under-garnish.jpg'; ?>" data-lightbox="exterior" data-title="Side Under Garnish">           
                <img src="<?= BASE_URL.DS.'assets/img/xpander/exterior/black-edition/side-under-garnish.jpg'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">              
              <a href="<?= BASE_URL.DS.'assets/img/xpander/exterior/black-edition/velg.jpg'; ?>" data-lightbox="exterior" data-title="Black Paint Alloy Wheel">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/exterior/black-edition/velg.jpg'; ?>" width="100%">
              </a>
            </div>
          </div>
        <?php else : ?>
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
        <?php endif; ?>
        </div>
        <div class="swiper-container-interior" style="display: none">
        <?php if ($_SESSION['category'] == 'XPANDER BLACK EDITION') : ?>
          <div class="swiper-wrapper">
            <div class="swiper-slide">              
              <a href="<?= BASE_URL.DS.'assets/img/xpander/interior/black-edition/head-unit.jpg'; ?>" data-lightbox="interior" data-title="7 Inch Audio Head Unit with Smartphone Connectivity">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/interior/black-edition/head-unit.jpg'; ?>" width="100%">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="<?= BASE_URL.DS.'assets/img/xpander/interior/black-edition/special-seat.jpg'; ?>" data-lightbox="interior" data-title="Special Seat Cover with Red Lining">       
                <img src="<?= BASE_URL.DS.'assets/img/xpander/interior/black-edition/special-seat.jpg'; ?>" width="100%" >
              </a>
            </div>
            <div class="swiper-slide">              
              <a href="<?= BASE_URL.DS.'assets/img/xpander/interior/ac-double-blower.jpg'; ?>" data-lightbox="interior" data-title="Ac Double Blower">
                <img src="<?= BASE_URL.DS.'assets/img/xpander/interior/ac-double-blower.jpg'; ?>" width="100%">
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
        <?php else : ?>
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
        <?php endif; ?>
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
<!-- Akhir Rekomendasi -->

<?php 
  require_once '../../sosialmedia.php';
  require_once '../../brosur.php';
  require_once '../../footer.php'; 
?>

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
  $(function() {    
    $('[data-toggle="tooltip"]').tooltip();
    let rpFormat = new Intl.NumberFormat('id-id', {
        style: 'currency',
        currency: 'IDR'
    });    

    function setWarna() {
      $('[data-toggle="tooltip"]').tooltip();
      $('.color-black').click(() => $('.img-color-xpander').attr('src', 'http://mitsubishimedan.sardanagroup.co.id/assets/img/xpander/car/xpander-black.png'));
      $('.color-red').click(() => $('.img-color-xpander').attr('src', 'http://mitsubishimedan.sardanagroup.co.id/assets/img/xpander/car/xpander-red.png'));
      $('.color-silver').click(() => $('.img-color-xpander').attr('src', 'http://mitsubishimedan.sardanagroup.co.id/assets/img/xpander/car/xpander-silver.png'));
      $('.color-grey').click(() => $('.img-color-xpander').attr('src', 'http://mitsubishimedan.sardanagroup.co.id/assets/img/xpander/car/xpander-grey.png'));
      $('.color-white').click(() => $('.img-color-xpander').attr('src', 'http://mitsubishimedan.sardanagroup.co.id/assets/img/xpander/car/xpander-white.png'));
      $('.color-bronze').click(() => $('.img-color-xpander').attr('src', 'http://mitsubishimedan.sardanagroup.co.id/assets/img/xpander/car/xpander-bronze.png'));      
    }

    $('#selectTipe').change(function() {                  
      let kode = $('#selectTipe').val();
      let tipe = $('#selectTipe option:selected').text();      
      $.ajax ({
        type: "post",
        data: {kode: kode, tipe: tipe},
        url: "../../json/data-xpander.php",
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

          if (hasil.kode == '023') {
            $('.color-white').css('display', 'inline-block');
            $('.color-black').css('display', 'inline-block');
            $('.color-grey').css('display', 'none');
            $('.color-red').css('display', 'none');
            $('.color-bronze').css('display', 'none');
            $('.color-silver').css('display', 'none'); 
            $('.img-color-xpander').attr('src', 'http://mitsubishimedan.sardanagroup.co.id/assets/img/xpander/car/xpander-black.png');            
          }
          if (hasil.kode == '024' || hasil.kode == '062' || hasil.kode == '025' || hasil.kode == '026') {
            $('.color-white').css('display', 'inline-block');
            $('.color-black').css('display', 'inline-block');
            $('.color-grey').css('display', 'none');
            $('.color-red').css('display', 'none');
            $('.color-bronze').css('display', 'none');
            $('.color-silver').css('display', 'none');            

            const tambahTombolWarna = document.querySelector('.warnaProduct .row .tombol-warna');
            const spanGrey = document.createElement('span');    
            spanGrey.setAttribute('data-toggle', 'tooltip');
            spanGrey.setAttribute('data-placement', 'bottom');
            spanGrey.setAttribute('title', 'Graphite Grey Metallic');
            spanGrey.classList.add('grey', 'color-grey', 'palet');            
            tambahTombolWarna.appendChild(spanGrey);    
            $('.img-color-xpander').attr('src', 'http://mitsubishimedan.sardanagroup.co.id/assets/img/xpander/car/xpander-black.png');            
          }
          if (hasil.kode == '063' || hasil.kode == '027' || hasil.kode == '028') {
            $('.color-white').css('display', 'inline-block');
            $('.color-black').css('display', 'inline-block');
            $('.color-grey').css('display', 'none');            
            $('.color-red').css('display', 'none');
            $('.color-bronze').css('display', 'none');
            $('.color-silver').css('display', 'none');
            $('.grey').css('display', 'none');
            $('.red').css('display', 'none');
            $('.silver').css('display', 'none');
            $('.bronze').css('display', 'none');

            const tambahTombolWarna = document.querySelector('.warnaProduct .row .tombol-warna');

            const spanGrey = document.createElement('span');    
            spanGrey.setAttribute('data-toggle', 'tooltip');
            spanGrey.setAttribute('data-placement', 'bottom');
            spanGrey.setAttribute('title', 'Graphite Grey Metallic');
            spanGrey.classList.add('grey', 'color-grey', 'mr-3', 'palet');            
            tambahTombolWarna.appendChild(spanGrey);          
            const spanSilver = document.createElement('span');    
            spanSilver.setAttribute('data-toggle', 'tooltip');
            spanSilver.setAttribute('data-placement', 'bottom');
            spanSilver.setAttribute('title', 'Sterling Silver Metallic');
            spanSilver.classList.add('silver', 'color-silver', 'mr-3', 'palet');            
            tambahTombolWarna.appendChild(spanSilver);  
            const spanRed = document.createElement('span');    
            spanRed.setAttribute('data-toggle', 'tooltip');
            spanRed.setAttribute('data-placement', 'bottom');
            spanRed.setAttribute('title', 'Red Metallic');
            spanRed.classList.add('red', 'color-red', 'mr-3', 'palet');            
            tambahTombolWarna.appendChild(spanRed);  
            const spanBronze = document.createElement('span');    
            spanBronze.setAttribute('data-toggle', 'tooltip');
            spanBronze.setAttribute('data-placement', 'bottom');
            spanBronze.setAttribute('title', 'Deep Bronze Metallic');
            spanBronze.classList.add('bronze', 'color-bronze', 'mr-3', 'palet');            
            tambahTombolWarna.appendChild(spanBronze);
            $('.img-color-xpander').attr('src', 'http://mitsubishimedan.sardanagroup.co.id/assets/img/xpander/car/xpander-black.png');          
          }         

          setWarna();
        }
      });
    });           

    setWarna();
    setHiddenNavbar();
  });
</script>
