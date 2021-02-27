<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<!-- 1, Meta Tag Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="TK ATTAQWA 35 Bekasi, RA ATTAQWA 35 Bekasi, Taman Kanak Kanak, Sekolah TK Attaqwa 35 di Bekasi, Sekolah TK di Bekasi">
	<meta name="keywords" content="Sekolah TK, Taman Kanak Kanak, TK Attaqwa 35 Bekasi, RA Attaqwa 35 Bekasi, Attaqwa 35 Bekasi">

	<!-- 2. Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="bootstrap-4/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.css">

	<title>RA Attaqwa 35 | Pendaftaran</title>
	<link rel="shortcut icon" href="assets/attaqwa.png">
</head>

<body id="my-top" style="background-color: #f8f9fa;">

	<div id="wrapper">
    <div id="header">
			<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
				<a class="navbar-brand logo my-0 mr-md-auto" href="index.php">
					<img src="assets/attaqwa.png"> RA Attaqwa 35
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link classku" href="index.php">Beranda</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle activeku" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Pendaftaran
							</a>
							<div class="dropdown-menu" style="background: #44a08d;" aria-labelledby="navbarDropdown">
								<a class="dropdown-item classku" href="persyaratan.html">Informasi Pendaftaran</a>
								<a class="dropdown-item classku" href="tata-cara-daftar.html">Tata Cara Pendaftaran</a>
								<a class="dropdown-item activeku" href="daftar.php">Daftar</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link classku" href="profil.php">Profil</a>
						</li>
						<li class="nav-item">
							<a class="nav-link classku" href="berita.php">Berita</a>
						</li>
						<li class="nav-item">
							<a class="nav-link classku" href="pengumuman.php">Pengumuman</a>
						</li>
					</ul>
				</div>
			</nav>
		</div><!-- end of header -->
		<div class="form-regist">
			<div class="container">
				<form id="w-form" action="insert-peserta-didik.php" method="post" enctype="multipart/form-data">
					<h1>Formulir Pendaftaran</h1>

					<!-- Notifikasi Gagal Upload -->
					<?php
					if (isset($_GET["status"])) {

						$st = $_GET["status"];

						switch ($st) {
							case 1:
								echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
										<strong>Gagal Upload!</strong> Silahkan pilih file terlebih dahulu.
										<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
										<span aria-hidden='true'>&times;</span>
										</button>
									</div>";
								break;
							case 2:
								echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
										<strong>Gagal Upload!</strong> File yang diperbolehkan hanya berekstensi .jpg .png .gif.
										<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
										<span aria-hidden='true'>&times;</span>
										</button>
									</div>";
								break;
							case 3:
								echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
										<strong>Gagal Upload!</strong> File melebihi batas maksimal.
										<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
										<span aria-hidden='true'>&times;</span>
										</button>
									</div>";
								break;
							default:
								echo "status tidak ada";
								break;
						}
					}
					?>

					<hr style="border: 3px solid rgb(0, 0, 0, 0.4);">
					<br>
					<!-- data siswa -->
					<div class="data-siswa">
						<h4>1. Data Siswa</h4>
						<hr style="border: 1px solid rgb(0, 0, 0, 0.3); width: 140px;">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<!-- nama lengkap -->
									<div class="form-group">
										<label>Nama Lengkap</label>
										<input type="text" name="namaku" class="form-control" placeholder="Masukkan Nama Lengkap" autofocus required>
									</div>
									<!-- nama panggilan -->
									<div class="form-group">
										<label>Nama Panggilan</label>
										<input type="text" name="pglan" class="form-control" placeholder="Masukkan Nama Panggilan" required>
									</div>
									<!-- tempat lahir -->
									<div class="form-group">
										<label>Tempat Lahir</label>
										<input type="text" name="tempatku" class="form-control"
										placeholder="Masukkan Tempat Lahir" required>
									</div>
									<!-- tanggal lahir -->
									<div class="form-group">
										<label>Tanggal Lahir</label>
										<input type="date" class="form-control" name="tanggal" required>
									</div>
									<!-- nik -->
									<div class="form-group">
										<label>NIK Siswa</label>
										<input type="text" class="form-control" name="nik" placeholder="Masukkan NIK" required>
									</div>
									<!-- jenis kelamin -->
									<div class="form-group">
										<label>Jenis Kelamin</label>
										<br>
										<div class="custom-control custom-radio custom-control-inline">
											<input id="cowo" name="jnskelamin" type="radio" class="custom-control-input" value="L">
											<label class="custom-control-label" for="cowo">Laki-laki</label>
										</div>
										<div class="custom-control custom-radio custom-control-inline">
											<input id="cewe" name="jnskelamin" type="radio" class="custom-control-input" value="P">
											<label class="custom-control-label" for="cewe">Perempuan</label>
										</div>
									</div>
									<!-- kelompok -->
									<div class="form-group">
										<label>Kelompok</label>
										<br>
										<div class="custom-control custom-radio custom-control-inline">
											<input id="a" name="kelompok" type="radio" class="custom-control-input" value="1">
											<label class="custom-control-label" for="a">Kelompok A</label>
										</div>
										<div class="custom-control custom-radio custom-control-inline">
											<input id="b" name="kelompok" type="radio" class="custom-control-input" value="2">
											<label class="custom-control-label" for="b">Kelompok B</label>
										</div>
										<div class="custom-control custom-radio custom-control-inline">
											<input id="c" name="kelompok" type="radio" class="custom-control-input" value="3">
											<label class="custom-control-label" for="c">Tanpa Kelompok</label>
										</div>
									</div>
									<!-- status siswa -->
									<div class="form-group">
										<label>Status Siswa</label>
										<br>
										<div class="st-atas">
											<div class="custom-control custom-radio custom-control-inline">
												<input id="n" name="status" type="radio" class="custom-control-input" value="1">
												<label class="custom-control-label" for="n">Naik dari Kelas/Tingkat Sebelumnya</label>
											</div>
											<div class="custom-control custom-radio custom-control-inline">
												<input id="m" name="status" type="radio" class="custom-control-input" value="2">
												<label class="custom-control-label" for="m">Mengulang Karena Tidak Naik Kelas</label>
											</div>
										</div>
										<div class="st-bawah">
											<div class="custom-control custom-radio custom-control-inline" style="margin-right: 89px !important;">
												<input id="s" name="status" type="radio" class="custom-control-input" value="3">
												<label class="custom-control-label" for="s">Siswa Baru/Pindah Masuk</label>
											</div>
											<div class="custom-control custom-radio custom-control-inline">
												<input id="d" name="status" type="radio" class="custom-control-input" value="4">
												<label class="custom-control-label" for="d">Drop Out kembali</label>
											</div>
										</div>
										
									</div>
									<!-- jumlah saudara -->
									<div class="form-row">
										<div class="form-group col-md-4">
											<label>Jumlah Saudara</label>
											<select class="form-control" name="saudara" required>
												<option selected>Pilih..</option>
												<option value="1"> < 2</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6"> > 5</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<br>
					<!-- data sekolah sebelumnya -->
					<div class="data-oldschool">
						<h4>2. Data Sekolah Sebelumnya</h4>
						<hr style="border: 1px solid rgb(0, 0, 0, 0.3); width: 300px;">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<!-- jenjang -->
									<div class="form-group">
										<label>Jenjang</label>
										<br>
										<div class="j1">
											<div class="custom-control custom-radio custom-control-inline" style="margin-right: 55px !important;">
												<input id="main" name="jenjang" type="radio" class="custom-control-input" value="1">
												<label class="custom-control-label" for="main">Kelompok Bermain</label>
											</div>
											<div class="custom-control custom-radio custom-control-inline">
												<input id="ra" name="jenjang" type="radio" class="custom-control-input" value="2">
												<label class="custom-control-label" for="ra">RA (Raudhatul Athfal)</label>
											</div>
											<div class="custom-control custom-radio custom-control-inline">
												<input id="ortu" name="jenjang" type="radio" class="custom-control-input" value="5">
												<label class="custom-control-label" for="ortu">Langsung dari Orang Tua</label>
											</div>
										</div>
										<div class="j2">
											<div class="custom-control custom-radio custom-control-inline">
												<input id="tk" name="jenjang" type="radio" class="custom-control-input" value="3">
												<label class="custom-control-label" for="tk">TK (Taman Kanak-kanak)</label>
											</div>
											<div class="custom-control custom-radio custom-control-inline">
												<input id="paud" name="jenjang" type="radio" class="custom-control-input" value="4">
												<label class="custom-control-label" for="paud">PAUD</label>
											</div>
										</div>
									</div>
									<!-- Keterangan -->
									<div class="form-group">
										<label>Keterangan</label>
										<textarea name="keterangan" class="form-control" rows="3" placeholder="Keterangan"></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<br>
					<!-- alamat siswa -->
					<h4>3. Alamat Siswa</h4>
					<hr style="border: 1px solid rgb(0, 0, 0, 0.3); width: 170px;">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Alamat</label>
									<textarea name="alamat" class="form-control" rows="3" placeholder="Alamat Lengkap" required></textarea>
								</div>
								<div class="form-row">
									<div class="form-group col-md-4">
										<label>Jarak ke Sekolah</label>
										<select class="form-control" name="jarak" required>
											<option selected>Pilih..</option>
											<option value="1"> < 1 Km</option>
											<option value="2">3-5 Km</option>
											<option value="3">5-10 Km</option>
											<option value="4"> > 10 Km</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label>Alat Transportasi</label>
									<div class="al1">
										<div class="custom-control custom-checkbox custom-control-inline">
											<input type="checkbox" class="custom-control-input" id="jln" name="alat[]" value="Jalan Kaki">
											<label class="custom-control-label" for="jln">Jalan Kaki</label>
										</div>
										<div class="custom-control custom-checkbox custom-control-inline">
											<input type="checkbox" class="custom-control-input" id="sm" name="alat[]" value="Sepeda Motor">
											<label class="custom-control-label" for="sm">Sepeda Motor</label>
										</div>
										<div class="custom-control custom-checkbox custom-control-inline">
											<input type="checkbox" class="custom-control-input" id="aj" name="alat[]" value="Antar Jemput Sekolah">
											<label class="custom-control-label" for="aj">Antar Jemput Sekolah</label>
										</div>
										<div class="custom-control custom-checkbox custom-control-inline">
											<input type="checkbox" class="custom-control-input" id="p" name="alat[]" value="Perahu">
											<label class="custom-control-label" for="p">Perahu</label>
										</div>
									</div>
									<div class="al2">
										<div class="custom-control custom-checkbox custom-control-inline" style="margin-right: 32px !important;">
											<input type="checkbox" class="custom-control-input" id="sa" name="alat[]" value="Sepeda">
											<label class="custom-control-label" for="sa">Sepeda</label>
										</div>
										<div class="custom-control custom-checkbox custom-control-inline" style="margin-right: 23px !important;">
											<input type="checkbox" class="custom-control-input" id="mp" name="alat[]" value="Mobil Pribadi">
											<label class="custom-control-label" for="mp">Mobil Pribadi</label>
										</div>
										<div class="custom-control custom-checkbox custom-control-inline" style="margin-right: 49px !important;">
											<input type="checkbox" class="custom-control-input" id="au" name="alat[]" value="Angkutan Umum">
											<label class="custom-control-label" for="au">Angkutan Umum</label>
										</div>
										<div class="custom-control custom-checkbox custom-control-inline">
											<input type="checkbox" class="custom-control-input" id="sl" name="alat[]" value="sampan/lainnya">
											<label class="custom-control-label" for="sl">Sampan/Lainnya</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<br>
					<!-- data ortu -->
					<h4>4. Data Orang Tua</h4>
					<hr style="border: 1px solid rgb(0, 0, 0, 0.3); width: 190px;">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<!-- nmr kk -->
								<div class="form-group">
									<label>No. KK</label>
									<input type="text" class="form-control" name="kaka" placeholder="Masukkan Nomor Kartu Keluarga" required>
								</div>
								<!-- nama ayah -->
								<div class="form-group">
									<label>Nama Ayah</label>
									<input type="text" class="form-control" name="ayah" placeholder="Masukkan Nama Lengkap" required>
								</div>
								<!-- nik ayah -->
								<div class="form-group">
									<label>NIK Ayah</label>
									<input type="text" class="form-control" name="nmrnik" placeholder="Masukkan Nomor Induk Keluarga" required>
								</div>
								<!-- pendidikan -->
								<div class="form-row">
									<div class="form-group col-md-4">
										<label>Pendidikan Terakhir</label>
										<select class="form-control" name="pddk" required>
											<option selected>Pilih..</option>
											<option value="1"> <= SMP</option>
											<option value="2">SMA</option>
											<option value="3">D1</option>
											<option value="4">D2</option>
											<option value="5">D3</option>
											<option value="6">D4</option>
											<option value="7">S1</option>
											<option value="8">S2</option>
											<option value="9">S3</option>
										</select>
									</div>
								</div>
								<!-- nomor telpon -->
								<div class="form-group">
									<label>Nomor Hp / Whatsapp</label>
									<input type="text" class="form-control" name="mobile" placeholder="Masukkan Nomor" required>
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<label>Unggah Foto</label>
						<input type="file" name="fileku" class="form-control-file">
					</div>
					<br>
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<button type="submit" value="Save" name="simpan" class="btn btn-primary">Submit</button>
								<button type="reset" value="Clear" name="reset" class="btn btn-danger">Reset</button>
							</div>
						</div>
					</div>
					
				</form>
			</div>
		</div>
		<section id="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="fot-map">
							<h3 >Our Address</h3>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5283549698574!2d107.01497611437992!3d-6.193797162404541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69895cc4610c71%3A0x4ceeb68462e566c4!2sTK.%20ATTAQWA%2035!5e0!3m2!1sid!2sid!4v1594342159591!5m2!1sid!2sid" width="100%" height="350px" frameborder="0" style="border:0; margin-bottom: 50px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>
					</div>
					<div class="col-md-4">
						<div class="fc-left">
							<h5>Our Contacts</h5>
							<p class="map">Alamat : Jl. Ujungharapan Kav. Daruttaqwa 6 RT.005, RW.014, Bahagia, Kec. Babelan, Bekasi, Jawa Barat 17610</p>
							<p class="map">
								Telepon : 
								<i class="fas fa-phone" style="font-size: 16px;
								color: #ffd541;"></i>
								<a class="hp" href="tel:#">+62 815-1475-1312 (Bu Nurjanah)</a>
								<br>
								<i class="fas fa-phone" style="font-size: 16px;
								color: #ffd541; margin-left: 61px;"></i>
								<a class="hp" href="tel:#">+62 815-8681-7890 (Bu Dewi)</a>
								<br>
								<br>
								Jam Operasional :
								<br>
								Hari Senin s.d. Jum'at
								<br>
								Pukul 08.00 WIB - 02.00 WIB
							</p> 
						</div>
					</div>
					<div class="col-md-2">
						<div class="fc-right">
							<h5>Follow Us</h5>
							<div class="sosmed">
								<ul>
									<li>
										<a href="#">
											<i class="fab fa-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fab fa-twitter"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fab fa-instagram"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fab fa-linkedin"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- end of footer-widget -->
		<footer id="footer-end">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="text-center">Hak Cipta &copy; 2020 | Oleh : RA Attaqwa 35 Bekasi</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<!-- 3. jQuery Library -->
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<!-- 4, popper.js -->
	<script type="text/javascript" src="js/poper.min.js"></script>
	<!-- 5. Bootstrap JS -->
	<script type="text/javascript" src="bootstrap-4/js/bootstrap.js"></script>
	<!-- skrollr js -->
	<script src="js/skrollr .js"></script>
	<script type="text/javascript">
		var s = skrollr.init();
	</script>
	<script>
		window.onscroll = function() {
			scrollFunction()
		};

		function scrollFunction() {
			if (document.body.scrollTop > 15 || document.documentElement.scrollTop > 15) {
				document.getElementById("nav-shrink").style.padding = "5px 0px";
			} else {
				document.getElementById("nav-shrink").style.padding = "15px 0px";
			}
		}
	</script>
</body>

</html>