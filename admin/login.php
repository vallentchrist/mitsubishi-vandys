<?php
  session_start();
  require_once "../config.php";
  $username = (isset($_POST['username']) ? $_POST['username'] : '');
  $password = (isset($_POST['password']) ? $_POST['password'] : '');
  if ( isset($_POST['btnLogin']) ) {
    $result = $conn->query("SELECT * FROM tb_user WHERE username = '$username'");
    if ($result->num_rows > 0)
    {
      $row = $result->fetch_array();
      if ($password == $row["password"])
      {
        $_SESSION["login"] = true;
        header("Location: promo.php");
      }
      else
      {
        echo "<script>alert('Password Salah!')</script>";  
      }
    }
    else 
    {
      echo "<script>alert('Username tidak tersedia!')</script>";
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

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
      .container-full {
        margin-top: 50px;
        width: 40%;
      }
      
      @media (min-width: 600px) and (max-width: 800px) {
        .container-full {
          width: 80%;
          margin-top: 50%;
          transform: translateY(-50%);
        }
      }

      @media (max-width: 600px) {
        .container-full {
          width: 100%;
        }
      }
    </style>

</head>

<body class="bg-gradient-primary">

    <div class="container container-full">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">                          
                            <div class="col-lg-12">
                                <div class="p-5 inner-padding">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4 font-weight-bold">Welcome Back, Vandys ^_^</h1>
                                    </div>
                                    <form class="user" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Username" name="username" required autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block" type="submit" name="btnLogin">
                                            Login
                                        </button>
                                        <div class="form-group text-center">
                                          <a href="<?=BASE_URL?>" class="mt-3 d-inline-block">Go Home Page</a>
                                        </div>                                        
                                    </form>                                                                        
                                </div>
                            </div>
                        </div>
                    </div>
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
      const mobile = window.matchMedia("(max-width: 600px)");      
      if ( mobile.matches ) {
        $('.inner-padding').removeClass('p-5');
        $('.inner-padding').addClass('p-4');
      }
      else {
        $('.inner-padding').removeClass('p-4');
        $('.inner-padding').addClass('p-5');
      }
    </script>
</body>

</html>