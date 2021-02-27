<?php

session_start();

// jika sesi login tidak dikenali atau kosong
if (empty($_SESSION["tiket_user"])) {
  // arahkan kembali login.php
  header("location: login.php");
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

  <title>Home - CMS Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="my-theme/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="my-theme/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="my-theme/css/sb-admin.css" rel="stylesheet">

  <!-- Datatables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.21/af-2.3.5/b-1.6.2/b-colvis-1.6.2/b-flash-1.6.2/b-html5-1.6.2/b-print-1.6.2/cr-1.5.2/fc-3.3.1/fh-3.1.7/kt-2.5.2/r-2.2.5/rg-1.1.2/rr-1.2.7/sc-2.0.2/sp-1.1.1/sl-1.3.1/datatables.min.css"/>
  
 

  <!-- Notifikasi Hapus -->
  <script type="text/javascript">
    function hapus(del) {
      if (confirm("Anda Yakin Hapus Data?")) {
        document.location = del;
      }
    }
  </script>

  <!-- CKEditor -->
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>

</head>

<!-- Times Latest News -->
<?php
  date_default_timezone_set("UTC"); 
  date_default_timezone_set("Asia/Jakarta"); 
  $date = date('Y-m-d H:i:s');
  $date = new DateTime($date);
  function time_elapsed_A($secs){
    $bit = array(
      'y' => $secs / 31556926 % 12,
      'w' => $secs / 604800 % 52,
      'd' => $secs / 86400 % 7,
      'h' => $secs / 3600 % 24,
      'm' => $secs / 60 % 60,
      's' => $secs % 60
      );
    
  foreach($bit as $k => $v)
      if($v > 0)$ret[] = $v . $k;
    
  return join(' ', $ret);
  }


  function time_elapsed_B($secs){
    $bit = array(
      ' hari'     => $secs / 86400 % 7,
      ' jam'      => $secs / 3600 % 24,
      ' menit'    => $secs / 60 % 60,
      ' detik'    => $secs % 60
      );
    $ret = [];
  foreach($bit as $k => $v){
      if($v > 1)$ret[] = $v . $k;
      if($v == 1)$ret[] = $v . $k;
      }
  array_splice($ret, count($ret)-1, 0);
  $ret[] = 'yang lalu.';

  return join(' ', $ret);
  }
  $nowtime = strtotime($date->format('Y-m-d H:i:s'));
?>

<body id="page-top">

  <!-- navigasi.php -->
  <?php include "my-pages/navigasi.php"; ?>

  <div id="wrapper">

    <!-- sidebar.php -->
    <?php include "my-pages/sidebar.php"; ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Dynamic Page -->
        <?php

        if (isset($_GET["ldata"])) {
          include "data-siswa/lihat-data.php";
        } elseif (isset($_GET["cari"])) {
          include "hasil-cari.php";
        } elseif (isset($_GET["kode"])) {
          include "data-siswa/filter-data.php";
        } elseif (isset($_GET["edit_id"])) {
          include "data-siswa/edit-data.php";
        } elseif (isset($_GET["tartikel"])) {
          include "berita/input-berita.php";
        } elseif (isset($_GET["lartikel"])) {
          include "berita/lihat-berita.php";
        } elseif (isset($_GET["edit_ba"])) {
          include "berita/edit-berita.php";
        } elseif (isset($_GET["status_id"])) {
          include "berita/edit-status.php";
        } elseif (isset($_GET["tinfo"])) {
          include "info/input-info.php";
        } elseif (isset($_GET["linfo"])) {
          include "info/lihat-info.php";
        } elseif (isset($_GET["edit_if"])) {
          include "info/edit-info.php";
        } elseif (isset($_GET["status_in"])) {
          include "info/edit-status.php";
        } else {
          include "my-pages/home.php";
        }

        ?>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- footer.php -->
  <?php include "my-pages/footer.php" ?>

</body>

</html>