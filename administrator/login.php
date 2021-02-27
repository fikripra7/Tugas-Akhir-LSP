<?php

  session_start(); // memulai sebuah sesi

  include "koneksi.php";

  // periksa apakah tombol login telah diset atau diklik
  if(isset($_POST["masuk"])){
    //kirimkan hasil inputan username dan password
    $us = $_POST["userku"]; // nama form user
    $ps = md5($_POST["passku"]); // nama form password

    // lalu cocokkan dengan username dan password yang ada
    // didatabase
    $sql = "SELECT * FROM tbl_admin WHERE username='$us' AND password='$ps' ";
    $query = mysqli_query($konek,$sql) or die (mysqli_error($konek));
    $data = mysqli_fetch_array($query);

    // periksa terlebih dahulu apakah didatabase ada data?
    // jika ada data dan cocok, maka berikan sesi
    if(mysqli_num_rows($query) > 0){
      // berikan sesi
      $_SESSION["tiket_user"] = $data["username"]; // nama kolom didatabase
      $_SESSION["tiket_pass"] = $data["password"];
      $_SESSION["tiket_level"] = $data["user_level"]; 

      // arahkan kehalaman index.php
      header("location: index.php");
    } else{
      // jika username dan password tidak cocok
      header("location: login.php?login=failed");
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

  <title>SB Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="my-theme/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="my-theme/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">

        <form action="" method="post">
          <div class="form-group">

            <!-- Memunculkan Notifikasi Gagal -->
            <?php
              if (isset($_GET["login"])) {?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Gagal Login!</strong> Silahkan Periksa Username dan Password.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

              <?php }
            ?>

            <div class="form-label-group">
              <input name="userku" type=text" id="inputuser" class="form-control" placeholder="Masukan Username" required="required" autofocus="autofocus">
              <label for="inputuser">Masukkan Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input name="passku" type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <input class="btn btn-primary btn-block" type="submit" name="masuk" value="Login">
          
        </form>

        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="my-theme/vendor/jquery/jquery.min.js"></script>
  <script src="my-theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="my-theme/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
