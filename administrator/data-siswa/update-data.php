<?php

	include "../koneksi.php";

  //deklarasikan
  $idu = $_POST["idku"];
  $nma = ($_POST["namaku"]);
  $pgln = ($_POST["pglan"]);
  $tp = ($_POST["tempatku"]);
  $tg = ($_POST["tanggal"]);
  $nk = ($_POST["nik"]);
  $jkl = ($_POST["jnskelamin"]);
  $kl = ($_POST["kelompok"]);
  $st = ($_POST["status"]);
  $sd = ($_POST["saudara"]);
  $jj = ($_POST["jenjang"]);
  $kt = ($_POST["keterangan"]);
  $almt = ($_POST["alamat"]);
  $jrk = ($_POST["jarak"]);
  $kk = ($_POST["kaka"]);
  $ay = ($_POST["ayah"]);
  $na = ($_POST["nmrnik"]);
  $pd = ($_POST["pddk"]);
  $mb = ($_POST["mobile"]);

  // gunakan fungsi implode php untuk menyatukan string
  $tr = implode(", ", $_POST["alat"]);

	// PROSES UPLOAD FILE
  $nm_file = $_FILES["fileku"]["name"]; // nama file yang diupload
  $temp_file = $_FILES["fileku"]["tmp_name"]; // nama file sementara
  $uk_file = $_FILES["fileku"]["size"]; //ukuran file
  $jn_file = $_FILES["fileku"]["type"]; // tipe file yang akan diupload

  // tentukan lokasi tempat menyimpan file hasil upload
  $dir = "../hasil-upload/$nm_file";

  // Parameter Upload
  // status 1
  if (strlen($nm_file) < 1) {
    header("location: ../index.php?edit_id=$idu&status=1");
    exit();
  }

  // status 2
  $kumpulan_file = array("image/png", "image/gif", "image/jpg", "image/jpeg");
  if (!in_array($jn_file, $kumpulan_file)) {
    header("location: ../index.php?edit_id=$idu&status=2");
    exit();
  }

  // status 3
  $ukuran_maks = 100000; // 100kb
  if ($uk_file > $ukuran_maks) {
    header("location: ../index.php?edit_id=$idu&status=3");
    exit();
  }

	// query sql untuk melakukan rubah data
	if($nm_file == ""){

		$sql = "UPDATE tbl_pendaftaran
			SET nama_lengkap ='$nma', 
          nama_panggil ='$pgln',
          tempat_lahir = '$tp',
          tgl_lahir ='$tg',
          nik_siswa ='$nk', 
          jns_kelamin ='$jkl', 
          kelompok ='$kl',
          status_siswa ='$st',
          jml_saudara = '$sd',
          jenjang ='$jj',
          keterangan ='$kt',
          alamat = '$almt', 
          jarak ='$jrk',
          transportasi ='$tr',
          nmr_kk ='$kk',
          ayah ='$ay',
          nik_ayah ='$na',
          pddk ='$pd',
          nmr_hp ='$mb',
          foto ='$nm_file' 
			WHERE id_siswa=$idu";
	$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

	} else{
		
		// pindahkan file dari folder sementara (xampp/tmp) ke lokasi tujuan
		move_uploaded_file($temp_file, $dir);

		$sql = "UPDATE tbl_pendaftaran 
			SET nama_lengkap ='$nma', 
          nama_panggil ='$pgln',
          tempat_lahir = '$tp',
          tgl_lahir ='$tg',
          nik_siswa ='$nk', 
          jns_kelamin ='$jkl', 
          kelompok ='$kl',
          status_siswa ='$st',
          jml_saudara = '$sd',
          jenjang ='$jj',
          keterangan ='$kt',
          alamat = '$almt', 
          jarak ='$jrk',
          transportasi ='$tr',
          nmr_kk ='$kk',
          ayah ='$ay',
          nik_ayah ='$na',
          pddk ='$pd',
          nmr_hp ='$mb',
          foto ='$nm_file' 
			WHERE id_siswa=$idu";
	$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

	}

	if($query){
		echo "<script type='text/javascript'>alert('Data berhasil dirubah!')</script><meta http-equiv='refresh' content='1; url=../index.php?ldata'>";
	}


?>