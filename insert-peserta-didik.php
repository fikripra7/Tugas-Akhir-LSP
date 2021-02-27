<?php
include "administrator/koneksi.php";

//deklarasikan
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
$dir = "administrator/hasil-upload/$nm_file";

// Parameter Upload
// status 1
if (strlen($nm_file) < 1) {
	header("location: daftar.php?status=1");
	exit();
}

// status 2
$kumpulan_file = array("image/png", "image/gif", "image/jpg", "image/jpeg");
if (!in_array($jn_file, $kumpulan_file)) {
	header("location: daftar.php?status=2");
	exit();
}

// status 3
$ukuran_maks = 100000; // 100kb
if ($uk_file > $ukuran_maks) {
	header("location: daftar.php?status=3");
	exit();
}

// pindahkan file dari folder sementara (xampp/tmp) ke lokasi tujuan
move_uploaded_file($temp_file, $dir);

// query sql untuk insert data ke database
$sql = "INSERT INTO tbl_pendaftaran(nama_lengkap, nama_panggil, tempat_lahir, tgl_lahir, nik_siswa, jns_kelamin, kelompok, status_siswa, jml_saudara, jenjang, keterangan, alamat, jarak, transportasi, nmr_kk, ayah, nik_ayah, pddk, nmr_hp, foto) VALUES('$nma','$pgln','$tp','$tg','$nk','$jkl','$kl','$st','$sd','$jj','$kt','$almt','$jrk','$tr','$kk','$ay','$na','$pd','$mb','$nm_file')";

// jalankan perintah query diatas dengan mysqli_query
$query = mysqli_query($konek, $sql) or die(mysqli_error($konek));

// redirect page versi HTML
if ($query) {
	echo "<script type='text/javascript'>alert('Pendaftaran berhasil!')</script><meta http-equiv='refresh' content='1; url=daftar.php'>";
}
