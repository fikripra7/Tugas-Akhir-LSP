<?php
	
	// sertakan file koneksi.php
	// dengan fungsi include
	include "../koneksi.php";

	date_default_timezone_set("UTC"); 
	date_default_timezone_set("Asia/Jakarta"); 
	$jd = mysqli_real_escape_string($konek, $_POST["judulku"]);
	$sk = $_POST["singkat"];
	$dt = $_POST["detail"];
	$tg = date('Y-m-d H:i:s');

	// PROSES UPLOAD FILE
	$nm_file = $_FILES["fileku"]["name"]; // nama file yang diupload
	$temp_file = $_FILES["fileku"]["tmp_name"]; // nama file sementara
	$uk_file = $_FILES["fileku"]["size"]; //ukuran file
	$jn_file = $_FILES["fileku"]["type"]; // tipe file yang akan diupload

	// tentukan lokasi tempat menyimpan file hasil upload
	$dir = "hasil-upload/$nm_file";

	// Parameter Upload
  // status 1
  if (strlen($nm_file) < 1) {
    header("location: ../index.php?tinfo&status=1");
    exit();
  }

  // status 2
  $kumpulan_file = array("image/png", "image/gif", "image/jpg", "image/jpeg");
  if (!in_array($jn_file, $kumpulan_file)) {
    header("location: ../index.php?tinfo&status=2");
    exit();
  }

  // status 3
  $ukuran_maks = 500000; // 500kb
  if ($uk_file > $ukuran_maks) {
    header("location: ../index.php?tinfo&status=3");
    exit();
  }

	// pindahkan file dari folder sementara (xampp/tmp) ke lokasi tujuan
	move_uploaded_file($temp_file, $dir);

	$sql = "INSERT INTO tbl_info(judul,desk_singkat,detail,waktu,foto) VALUES('$jd','$sk','$dt','$tg','$nm_file')";
	$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

	// redirect page versi HTML
	if($query){
		echo "<script type='text/javascript'>alert('Data berhasil diinsert!')</script><meta http-equiv='refresh' content='1; url=../index.php?linfo'>";
	}