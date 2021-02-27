<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Forgot Password</title>

  <!-- Custom fonts for this template-->
  <link href="my-theme/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="my-theme/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Reset Password</div>
      <div class="card-body">
        <div class="text-center mb-4">
          <h4>Forgot your password?</h4>
          <hr>
          <p>Enter your email address and we will send you instructions on how to reset your password.</p>
        </div>
        <form>
          <!-- Menampilkan status daftar -->
          <?php
            if(isset($_GET["status"])){
              $st = $_GET["status"];

              switch ($st) {
                case 0:
                  echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                          <strong>Gagal daftar!</strong> Email tidak cocok.
                          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                          </button>
                        </div>";
                  break;
                case 1:
                  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                          <strong>Berhasil daftar!</strong> Email cocok.
                          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                          </button>
                        </div>";
                  break;
                default:
                  echo "Status tidak ada!";
                  break;
              }
            }
          ?>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Enter email address" required="required" autofocus="autofocus" name="mailku">
              <label for="inputEmail">Enter email address</label>
            </div>
          </div>
          <button class="btn btn-primary btn-block" href="login.php">Reset Password</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
          <a class="d-block small" href="login.php">Login Page</a>
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
