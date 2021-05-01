<?php
  require_once '../config.php';
  function rupiah($angka)
  {
    $hasil = "Rp " . number_format($angka,0,',','.');
    return $hasil;
  }

  $tampil = $conn->query("SELECT MIN(harga) FROM tb_harga WHERE merek = 'FUSO'");
  $harga = mysqli_fetch_array($tampil);
  $hargaFull = $harga[0];
  $harga = number_format($harga[0] / 1000000, 1, ',', '.');  
  setlocale(LC_ALL, 'IND');  
  $time = strftime('%B %Y');
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
    <title>Mitsubishi FUSO - Promo & Simulasi Kredit Mitsubishi</title>
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

  <div class="container-100">
    <img src="<?= BASE_URL.DS.'assets/img/colt-diesel/banner-colt.jpg'; ?>" alt="Mitsubishi FUSO" class="w-100 d-none d-sm-block">
    <img src="<?= BASE_URL.DS.'assets/img/colt-diesel/banner-colt-mb.jpg'; ?>" alt="Mitsubishi FUSO" class="w-100 d-block d-sm-none">
  </div>

  <div class="container mt-3 mt-lg-3">
    <div class="row align-items-center">
      <div class="col-12 col-lg-4">
        <h2 class="text-uppercase mmc-bold">Varian Produk</h2>
      </div>
      <div class="col-12 col-lg-8 d-flex mt-3 mt-lg-0 menu-varian">
        <a href="javascript:void(0)" id="all"><h5 class="text-muted c c-all">ALL</h5></a>
        <a href="javascript:void(0)" id="one"><h5 class="text-muted c c-one">4X2</h5></a>
        <a href="javascript:void(0)" id="two"><h5 class="text-muted c c-two">6X2</h5></a>
        <a href="javascript:void(0)" id="three"><h5 class="text-muted c c-three">6X4</h5></a>        
      </div>
    </div>    

    <div class="container" id="kategori-fuso">
      <!-- Isi disini -->
      <div class="row text-center">
        <?php
          $result = $conn->query("SELECT * FROM tb_harga WHERE merek = 'FUSO' AND discontinue = 0");
          while ($row = $result->fetch_array())
          {
            $tipe = strtolower(str_replace(' ', '', $row["tipe"]));
            $tipe = str_replace('-', '', $tipe);
        ?>
          <div class="col-4 col-sm-3">
            <img src="<?=BASE_URL.DS?>assets/img/fuso/<?=$tipe?>.png" alt="Mitsubishi <?=$row["merek"].' '.$row["tipe"]?>" class="img-fluid" style="width: 200px">
            <p class="text-uppercase"><?=$row["tipe"]?></p>
          </div>
        <?php
          }
        ?>
      </div>
    </div>    
  </div>

  <div class="container mt-5">    
    <h2 class="text-uppercase mmc-bold text-center">Harga FUSO Medan</h2>
    <p class="text-center text-muted">Lihat harga terbaru truk FUSO untuk wilayah Medan dan sekitarnya.</p>
    <table class="table table-striped table-bordered table-width text-center">
      <thead>
        <tr class="bg-warning text-white">          
          <th scope="col">Tipe</th>
          <th scope="col">Harga OTR</th>          
        </tr>
      </thead>
      <tbody class="mmc-medium">
        <?php
          $result = $conn->query("SELECT * FROM tb_harga WHERE merek = 'FUSO' AND discontinue = 0 ORDER BY harga");
          while ($row = $result->fetch_array()) :
        ?>
        <tr>          
          <td><?= $row["tipe"]; ?></td>
          <td><?= rupiah($row["harga"]); ?></td>
        </tr>
        <?php
          endwhile;
        ?>        
      </tbody>      
    </table>
    <small class="text-muted">* Harga OTR Sumatera Utara.</small><br />
    <small class="text-muted">* Harga dapat berubah sewaktu-waktu tanpa pemberitahuan sebelumnya.</small><br />
    <small class="text-muted">* Info lebih lengkap dapat menghubungi kami disini <a href="https://wa.me/+6282370304974?text=Hai Kak Vandys, Saya ingin bertanya detail harga produk FUSO." class="text-success" target="_blank"><i class="fa fa-whatsapp"></i> 082370304974</a></small>
  </div>

  <section class="video-fuso mt-5 mb-5" id="video-fuso">
    <div class="container-100 p-4 text-center text-white">
      <h1 class="mmc-medium">Video Produk</h1>
      <p>Dapatkan video menarik mengenai produk Mitsubishi FUSO berikut.</p>        
      <iframe width="560" height="315" src="https://www.youtube.com/embed/gA3_UFHS8Jg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </section>

  <!-- Pertanyaan -->
  <div class="container mb-5">
    <button class="accordion mmc-bold">Apa Keunggulan Mitsubishi FUSO Fighter?</button>
    <div class="panel">
      <div class="container p-3">
        <p>1. Mitsubishi Fuso Fighter menenggak bahan bakar biodiesel B20, karena sudah dilengkapi dengan double filter untuk bahan bakar. Sedangkan untuk sistem pengelolaan fleet, Runner Telematics akan memudahkan konsumen mengelola armada secara real time.</p>
        <p>2. Kenyamanan superior dengan ruang dan kabin lebih luas, suspensi kursi pengemudi yang dapat disesuaikan, manuver mudah, kabin kedap suara dan getaran yang memberikan kenyamanan maksimal bagi pengemudi. Kemudian kaca depan serta lampu sudut meberikan penglihatan pengemudi lebih jelas.</p>
        <p>3. Chassis Fighter mudah disesuaikan dengan berbagai tipe karoseri. Rivet atau paku pengencang terletak di samping-samping frame chassis dengan tambahan soket atau stop kontak kelistrikan yang memberikan kemudahan pemasangan. Seperti tipe karoseri dump, box terbuka atau tertutup, flat bed, wing box, tangki, hi-blow, dan lain-lain.</p>
        <p>4. Keempat, Fighter dibekali DNA Fuso yang terbukti keandalan dan kualitasnya. Sebagian suku cadang Faighter sepadan dengan suku cadang model sebelumnya untuk memudahkan konsumen. Performa Faighter juga terbukti diterima dengan baik oleh para pengguna profesional di Jepang.</p> 
      </div>
    </div>
    <button class="accordion mmc-bold">Bagaimana Perhitungan Cicilan Mitsubishi FUSO?</button>
    <div class="panel">
      <div class="card card-body text-left">
        <div class="row align-items-center">
          <div class="col-12 text-center mt-3 mb-4">
            <h4 id="car-title" class="mmc-bold">FUSO FM 517 HS 4X2</h4>
          </div>
          <div class="col-12 col-md-6 order-2 order-sm-1">
            <div class="row">
              <div class="col-4">
                Harga OTR    
              </div>        
              <div class="col-8 text-right">
                <input type="text" readonly class="font-weight-bold form-control-plaintext text-right" id="plainTextHargaOtr" value="<?= rupiah($hargaFull); ?>">
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 order-1 order-sm-2 text-right select-picker-colt">
            <select class="selectpicker mb-4 mb-sm-0" id="selectTipe" data-width="100%" data-container="body" data-live-search="true" title="Silahkan Pilih Tipe Lain...">
            <option value="050">FM 517 HL LONG 4X2</option>
              <option value="051">FM 517 HL 4X2</option>
              <option value="052">FM 517 HS 4X2</option>
              <option value="055">FN 517 ML2 SUPER LONG 6X2</option>
              <option value="056">FN 517 ML2 6X2</option>
              <option value="058">FN 527 ML 6X4</option>
              <option value="059">FN 527 MS 6X4</option>
              <option value="070">FM 65 FS 4X2</option>
              <option value="071">FM 65 FS HI-GEAR 4X2</option>
              <option value="072">FM 65 FL HI-GEAR</option>
              <option value="073">FM 65 FL 4X2 MT</option>
              <option value="074">FN 61 FS 6X2 MT</option>
              <option value="075">FN 61 FM HD 6X2 MT</option>
              <option value="076">FN 62 F 6X4 MT</option>
              <option value="077">FN 62 F HD 6X4 MT</option>
              <option value="078">FN 62 F TH 6X4 MT</option>
              <option value="079">FM 65 FM 4X2 MT</option>
              <option value="080">FM 65 FM HI GEAR 4X2 MT</option>
              <option value="081">FM 65 FSL 4X2 MT</option>
              <option value="082">FM 65 FSL 4X2 MT</option>
              <option value="083">FN 61 FL 6X2 MT</option>
              <option value="084">FN 62 FL HD 6X4 MT</option>
              <option value="093">FN 61 FL HD 6X2 MT</option>
            </select>
          </div>                    
        </div>
        <hr />
        <div class="row mt-4">
          <div class="col-12 col-md-6">
            <form>
              <div class="form-group row">
                <label for="" class="col-sm-6 col-form-label">Uang Muka <small class="text-muted">*min 50jt</small></label>
                <div class="col-sm-6">
                <input type="text" class="form-control text-right" id="inputUangMuka" name="inputUangMuka" value="" data-type="currency" placeholder="Rp 50.000.000">
                </div>
              </div>            
              <div class="form-group row">
                <label for="" class="col-sm-6 col-form-label">Suku Bunga (% per tahun)</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control text-right" id="inputSukuBunga" placeholder="10">
                </div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                <div class="col-sm-6">
                  <select class="width-100 form-control form-control-sm form-control-width text-right" class="selectTenor" id="selectTenor">
                    <option value="12">12</option>
                    <option value="24">24</option>
                    <option value="36">36</option>
                    <option value="48">48</option>
                    <option value="60">60</option>
                  </select>
                </div>
              </div>
              <div class="form-group row justify-content-center">
                <a id="buttonHitung" class="col-sm-12 btn btn-danger" role="button">Hitung</a>
              </div>
              <div class="col-lg-12 text-center perhitungan" style="display: none">
                <small class="text-success">* Perhitungan selesai. Silahkan cek kembali harga.</small>              
              </div>
              <div class="col-lg-12 text-center perhitungan-salah" style="display: none">
                <small class="text-danger">* Uang DP minimum Rp 50 juta. Silahkan hitung kembali.</small>              
              </div>
            </form>
          </div>
          <div class="col-12 col-md-6">
            <form>
              <div class="form-group row">
                <label for="" class="col-sm-6 col-form-label">Total Uang Muka</label>
                <div class="col-sm-6">
                <input type="text" readonly class="form-control-plaintext text-right font-weight-bold" id="plainTextTotalUangMuka" value="Rp 0">
                </div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-6 col-form-label">Cicilan / Bulan</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext text-right font-weight-bold" id="plainTextCicilan" value="Rp 0">
                </div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-6 col-form-label">Tenor (bulan)</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext text-right font-weight-bold" id="plainTextTenor" value="0">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-12">
                  <small class="text-muted">* Simulasi ini hanya sebagai asumsi belum termasuk biaya admin, asuransi dll.</small><br />
                  <small class="text-muted">* Untuk estimasi cicilan sesungguhnya harap konsultasi dengan kami lewat <a href="https://wa.me/+6282370304974?text=Hai Kak Vandys, Saya ingin bertanya detail estimasi cicilan produk FUSO." class="text-success" target="_blank">chat</a> atau panggilan ke <a href="https://wa.me/+6282370304974?text=Hai Kak Vandys, Saya ingin bertanya detail estimasi cicilan produk FUSO." class="text-success" target="_blank"><i class="fa fa-whatsapp"></i> 082370304974</a></small>
                </div>                
              </div>
            </form>
          </div>
        </div>      
      </div>
    </div>
    <button class="accordion mmc-bold">Apa Saja Karoseri Yang Dimiliki Mitsubishi FUSO?</button>
    <div class="panel">      
      <div class="container p-3 text-center">
        <div class="row">
        <div class="col-4 col-sm-3">
            <img src="<?=BASE_URL.DS?>assets/img/fuso/fm65fslhigear4x2mt.png" class="img-fluid" style="width: 200px">
            <p class="text-uppercase mmc-medium">Tangki</p>
          </div>
          <div class="col-4 col-sm-3">
            <img src="<?=BASE_URL.DS?>assets/img/fuso/fm517hl4x2.png" class="img-fluid" style="width: 200px">
            <p class="text-uppercase mmc-medium">Bak Besi</p>
          </div>
          <div class="col-4 col-sm-3">
            <img src="<?=BASE_URL.DS?>assets/img/fuso/fn62fhdu.png" class="img-fluid" style="width: 200px">
            <p class="text-uppercase mmc-medium">Dump Truck</p>
          </div>
          <div class="col-4 col-sm-3">
            <img src="<?=BASE_URL.DS?>assets/img/fuso/fm65fsl4x2mt.png" class="img-fluid" style="width: 200px">
            <p class="text-uppercase mmc-medium">Wingbox</p>
          </div>
          <div class="col-4 col-sm-3">
            <img src="<?=BASE_URL.DS?>assets/img/fuso/car-carrier.png" class="img-fluid" style="width: 200px">
            <p class="text-uppercase mmc-medium">Car Carrier</p>
          </div>
          <div class="col-4 col-sm-3">
            <img src="<?=BASE_URL.DS?>assets/img/fuso/box-besi.png" class="img-fluid" style="width: 200px">
            <p class="text-uppercase mmc-medium">Box Besi</p>
          </div>
          <div class="col-4 col-sm-3">
            <img src="<?=BASE_URL.DS?>assets/img/fuso/fn61fl6x2mt.png" class="img-fluid" style="width: 200px">
            <p class="text-uppercase mmc-medium">Bak Kayu</p>
          </div>
          <div class="col-4 col-sm-3">
            <img src="<?=BASE_URL.DS?>assets/img/fuso/fn527ms6x4.png" class="img-fluid" style="width: 200px">
            <p class="text-uppercase mmc-medium">Flat Bed</p>
          </div>
          <div class="col-4 col-sm-3">
            <img src="<?=BASE_URL.DS?>assets/img/fuso/container.png" class="img-fluid" style="width: 200px">
            <p class="text-uppercase mmc-medium">Container</p>
          </div>
          <div class="col-12 mt-3">
            <p class="text-muted">Jika masih belum jelas, kami akan membantu melalui <a href="https://wa.me/+628116541800?text=[WS]Halo Sardana Berlian, Saya ingin bertanya detail karoseri Mitsubishi Fuso." class="text-success" target="_blank">chat</a> atau call ke nomor <a href="https://wa.me/+628116541800?text=[WS]Halo Sardana Berlian, Saya ingin bertanya detail karoseri Mitsubishi Fuso." class="text-success" target="_blank"><i class="fa fa-whatsapp"></i> 082370304974</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Pertanyaan -->

  <div class="container-fluid bg-red">
    <div class="row align-items-center container-tokopedia">
      <div class="col-12 col-sm-6 text-center">
        <img src="<?=BASE_URL.DS.'assets/img/bg-foto.png'?>" alt="Vandystio Danantho" class="img-vandys">
      </div>
      <div class="col-12 col-sm-6 text-white">
        <h3 class="mmc-bold hadir-toped">Sales Kami</h3>
        <p>Kami siap membantu anda mendapatkan deal terbaik untuk pembelian truk Mitsubishi pilihan anda. Silahkan hubungi kami untuk mendapatkan info lebih lengkap terkait proses pembiayaannya, simulasi kredit, info stok, Test Drive serta Pemesanan.</p>
        <small>- Vandystio Danantho <a href="https://wa.me/+6282370304974?text=Hai Kak Vandys, Saya ingin bertanya detail harga produk FUSO." class="text-white" target="_blank"><i class="fa fa-whatsapp ml-2"></i> 0823 7030 4974</a></small>
      </div>
    </div>
  </div>

  <?php    
    require_once '../footer.php';
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
  <script src="<?= BASE_URL.DS ?>assets/js/bootstrap-select.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>    
  <script src="<?= BASE_URL.DS; ?>assets/js/lightbox.js"></script>
  <script src="<?= BASE_URL.DS; ?>assets/js/script.js"></script>
  <script>
    $("#all").click(function() {
      let kategori = "all";
      $(".c").each(function() {
        $(this).removeClass("variant-active");
      })
      $(".c-all").addClass("variant-active");
      $.ajax({
        type: "post",
        url: "data-fuso.php",
        data: {kategori: kategori},
        success: function(data) {
          $("#kategori-fuso").html(data);
        },
        error: function() {
          console.log('error');
        }
      })
    })
    $("#one").click(function() {
      let kategori = "one";
      $(".c").each(function() {
        $(this).removeClass("variant-active");
      })
      $(".c-one").addClass("variant-active");
      $.ajax({
        type: "post",
        url: "data-fuso.php",
        data: {kategori: kategori},
        success: function(data) {
          $("#kategori-fuso").html(data);
        },
        error: function() {
          console.log('error');
        }
      })
    })
    $("#two").click(function() {
      let kategori = "two";
      $(".c").each(function() {
        $(this).removeClass("variant-active");
      })
      $(".c-two").addClass("variant-active");
      $.ajax({
        type: "post",
        url: "data-fuso.php",
        data: {kategori: kategori},
        success: function(data) {
          $("#kategori-fuso").html(data);
        },
        error: function() {
          console.log('error');
        }
      })
    })
    $("#three").click(function() {
      let kategori = "three";
      $(".c").each(function() {
        $(this).removeClass("variant-active");
      })
      $(".c-three").addClass("variant-active");
      $.ajax({
        type: "post",
        url: "data-fuso.php",
        data: {kategori: kategori},
        success: function(data) {
          $("#kategori-fuso").html(data);
        },
        error: function() {
          console.log('error');
        }
      })
    })    

    let rpFormat = new Intl.NumberFormat('id-id', {
      style: 'currency',
      currency: 'IDR'
    });

    $('#selectTipe').change(function() {
      let kode = $('#selectTipe').val();
      let tipe = $('#selectTipe option:selected').text();      
      $.ajax ({
        type: "post",
        data: {kode: kode, tipe: tipe},
        url: "../json/data-fuso.php",
        success: function(data) {
          let hasil = JSON.parse(data);
          let totalCicilan = 0.2 * hasil.harga;
          let cicilanPerBulan = (hasil.harga - totalCicilan) / 60;
          let tampilTotalCicilan = rpFormat.format(totalCicilan);
          let tampilCicilanPerBulan = rpFormat.format(cicilanPerBulan);
          let hargaOtr = rpFormat.format(hasil.harga);
          $('#car-title').html('FUSO ' + hasil.tipe);
          $('#plainTextHargaOtr').val(hargaOtr.substring(0, hargaOtr.length - 3));
          $('#plainTextTotalUangMuka').val('0');
          $('#plainTextCicilan').val('0');
          $('#plainTextTenor').val('0');
          $('#inputUangMuka').val('');
          $('#inputSukuBunga').val('');
          $('#selectTenor').val('12');
        }
      });
    });

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
      if (uangMuka < 50000000)
      {      
        $(".perhitungan").css("display", "none");
        $(".perhitungan-salah").css("display", "block");
      }
      else
      {
        let pokokCicilan = hargaOtr - uangMuka;
        let bungaCicilan = (pokokCicilan * sukuBunga) / 100;
        let totalCicilan = pokokCicilan + bungaCicilan;
        let cicilanPerBulan = totalCicilan / tenor;
        let totalUangMuka = uangMuka + cicilanPerBulan;
        let tampilTotalUangMuka = rpFormat.format(totalUangMuka);
        let tampilCicilanPerBulan = rpFormat.format(cicilanPerBulan);        
        $("#plainTextTotalUangMuka").val(
          tampilTotalUangMuka.substring(0, tampilTotalUangMuka.length - 3)
        );
        $("#plainTextCicilan").val(
          tampilCicilanPerBulan.substring(0, tampilCicilanPerBulan.length - 3)
        );
        $("#plainTextTenor").val(tenor - 1 + " bulan");        
        $(".perhitungan-salah").css("display", "none");
        $(".perhitungan").css("display", "block");
        }
    });    
  </script>
</body>
</html>