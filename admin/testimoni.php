<?php
  session_start();
  require_once "../config.php";  
  date_default_timezone_set('Asia/Jakarta');
  if ($_SESSION["login"])
  {
    
  }
  else
  {
    header("Location: login.php");
  }

  if (isset($_POST["logout"]))
  {
    session_unset();
    session_destroy();
    session_abort();
    header("Location: login.php");
  }

  if (isset($_POST["upload"]))
  {
    $created = date("Y-m-d H:i:s");
    $caption = $_POST["inputCaption"];    
    $namafile = $_FILES["inpFile"]["name"];
    $ukuranfile = $_FILES["inpFile"]["size"];
    $error = $_FILES["inpFile"]["error"];
    $tmpfile = $_FILES["inpFile"]["tmp_name"];
    $ekstensiGambarValid = ["jpg", "jpeg", "png"];
    $ekstensiGambar = explode(".", $namafile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    $namafilebaru = uniqid();
    $namafilebaru .= ".";
    $namafilebaru .= $ekstensiGambar;

    // Cek tidak ada gambar yang diupload
    if ($error === 4)
    {
      echo "<script>alert('Pilih gambar terlebih dahulu.');</script>";      
    }
    // Cek apakah gambar yang diupload
    else if (!in_array($ekstensiGambar, $ekstensiGambarValid))
    {
      echo "<script>alert('Yang anda upload bukan gambar.');</script>";
    }
    // Cek apakah ukurannya terlalu besar
    else if ($ukuranfile > 2048000)
    {
      echo "<script>alert('Ukuran gambar terlalu besar. Mohon kompress dibawah 2 MB.');</script>";
    }
    else
    {
      if ($caption != "")
      {
        move_uploaded_file($tmpfile, "../assets/img/testimoni/$namafilebaru");
        $result = mysqli_query($conn, "INSERT INTO tb_testimoni (tgl_buat, nama, caption) VALUES ('$created', '$namafilebaru', '$caption')");
        if ($result)
        {
          echo "<script>alert('Data berhasil ditambahkan');</script>";
        }
        else
        {
          echo "<script>alert('Data gagal ditambahkan. Silahkan input ulang');</script>";
        }
      }
      else
      {
        echo "<script>alert('Data belum diisi. Silahkan input ulang');</script>";
      }
    }    
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hi, Vandys</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Style sendiri -->
    <link href="css/style.css" rel="stylesheet">
    <style>
      .image-preview {
        width: 300px;
        min-height: 100px;
        border: 2px solid #ddd;
        margin-top: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: mmc-medium;
        color: #ccc;
      }  

      .image-preview__image {
        display: none;
        width: 100%;
      }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Hi, Vandys</div>
            </a>            

            <!-- Nav Item - Promo -->
            <li class="nav-item">
              <a class="nav-link" href="promo.php">
                <i class="fas fa-fw fa-gift"></i>
                <span>Promo</span></a
              >
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Testimoni -->
            <li class="nav-item active">
              <a class="nav-link" href="testimoni.php">
                <i class="fas fa-fw fa-camera"></i>
                <span>Testimoni</span></a
              >
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">           
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
      

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">        
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Vandys</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>                               
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 font-weight-bold">UPLOAD TESTIMONI</h1>
                    <form class="form-mitsubishi p-3" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="inputCaption">Caption</label>
                        <input type="text" class="form-control" name="inputCaption" id="inputCaption" aria-describedby="emailHelp">                      
                      </div>
                      <div class="form-group">
                        <label for="inpFile">Foto</label>
                        <input type="file" name="inpFile" id="inpFile">
                        <div class="image-preview" id="imagePreview">
                          <img src="" alt="Image Preview" class="image-preview__image">
                          <span class="image-preview__default-text">Image Preview</span>
                        </div>
                      </div>                    
                      <button type="submit" class="btn btn-primary" name="upload">Upload</button>
                    </form>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Java 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div
      class="modal fade"
      id="logoutModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button
              class="close"
              type="button"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <form method="post">
              <button
                class="btn btn-secondary"
                type="button"
                data-dismiss="modal"
              >
                Cancel
              </button>
              <button class="btn btn-primary" name="logout">Logout</a>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script>
      const inpFile = document.getElementById('inpFile');
      const previewContainer = document.getElementById('imagePreview');
      const previewImage = previewContainer.querySelector(".image-preview__image");
      const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");

      inpFile.addEventListener("change", function() {        
        const file = this.files[0];        
        if (file) 
        {
          const reader = new FileReader();

          previewDefaultText.style.display = "none";
          previewImage.style.display = "block";

          reader.addEventListener("load", function() {
            previewImage.setAttribute("src", this.result);
          })

          reader.readAsDataURL(file);
          console.log('exist');
        }    
        else
        {
          previewDefaultText.style.display = null;
          previewImage.style.display = null;
          previewImage.setAttribute("src", "");
        }
      })
    </script>
</body>

</html>