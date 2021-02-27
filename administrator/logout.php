<?php 

session_start();

$_SESSION["tiket_user"] = "";
$_SESSION["tiket_pass"] = "";

// hilangkan variabel sesi
session_unset();

// hancurkan sesi yang sedang aktif
session_destroy();

// arahkan kehalaman index.php
header("location: index.php");

?>