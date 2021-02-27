<?php
	include "koneksi.php";

	$nm = mysqli_real_escape_string($konek,$_POST["userku"]);
	$em = mysqli_real_escape_string($konek,$_POST["mailku"]);
	$ps = md5($_POST["passku"]);
	$kp = md5($_POST["repassku"]);

	// jika password dan konfirmasi password cocok
	if($ps == $kp){
		// maka jalankan query sql untuk insert ke database
		$sql = "INSERT INTO tbl_admin(username, email, password) VALUES ('$nm','$em','$ps')";
		$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

		//kemudian arahkan kehalaman daftar member
		header("location: register.php?status=1");
		exit();
	} else{
		//jika password dan konfirmasi password tidak cocok 
		header("location: register.php?status=0");
		exit();
	}
?>