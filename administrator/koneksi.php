<?php

	$server = "localhost"; // nama server yang aktif
	$user = "root"; // nama user aktif
	$pass = ""; // password yang dipakai
	$database = "attaqwa"; // nama database

	$konek = mysqli_connect($server,$user,$pass,$database) or die (mysqli_error());

	// echo "Koneksi OK!";