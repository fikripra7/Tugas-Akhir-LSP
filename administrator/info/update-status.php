<?php
	include "../koneksi.php";

	$st = $_POST["sts"];
	$idu = $_POST["idku"];
	date_default_timezone_set("UTC"); 
	date_default_timezone_set("Asia/Jakarta");
	$tg = date('Y-m-d H:i:s');

	$sql = "UPDATE tbl_info SET status='$st' WHERE id_info='$idu'";
	$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

	$sql = "UPDATE tbl_info SET waktu='$tg' WHERE id_info='$idu'";
	$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

	if($query){
		echo "<script type='text/javascript'>alert('Status berhasil dirubah!')</script><meta http-equiv='refresh' content='1; url=../index.php?linfo'>";
	}
?>