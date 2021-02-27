<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- 1, Meta Tag Responsive -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="TK ATTAQWA 35 Bekasi, RA ATTAQWA 35 Bekasi, Taman Kanak Kanak, Sekolah TK Attaqwa 35 di Bekasi, Sekolah TK di Bekasi">
		<meta name="keywords" content="Sekolah TK, Taman Kanak Kanak, TK Attaqwa 35 Bekasi, RA Attaqwa 35 Bekasi, Attaqwa 35 Bekasi">

		<!-- 2. Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="bootstrap-4/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.css">

		<title>RA Attaqwa 35 | Beranda</title>
		<link rel="shortcut icon" href="assets/attaqwa.png">
		<style>
			.navbar-expand-sm > .container, .navbar-expand-sm > .container-fluid, .navbar-expand-sm > .container-sm, .navbar-expand-sm > .container-md, .navbar-expand-sm > .container-lg, .navbar-expand-sm > .container-xl {
			padding-right: 8 !important;
			padding-left: 8 !important;
			}
		</style>
	</head>
	<body id="my-top">

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
								<a class="nav-link activeku" href="index.php">Beranda</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle classku" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Pendaftaran
								</a>
								<div class="dropdown-menu" style="background: #44a08d;" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="persyaratan.html">Informasi Pendaftaran</a>
									<a class="dropdown-item" href="tata-cara-daftar.html">Tata Cara Pendaftaran</a>
									<a class="dropdown-item" href="daftar.php">Daftar</a>
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
			<div id="ctn-jumbotron">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="assets/at2.jpg" class="d-block w-100" style="height: 550px;">
							<div class="carousel-caption d-md-block">
									<div class="jumbotron jumbotron-fluid">
										<div class="container">
											<h3 class="display-5">Selamat Datang di RA Attaqwa 35</h3>
											<hr class="my-5" style="background-color: white;">
											<p class="lead">Pembelajaran Aktif, Inovatif, Kreatif, Efektif, Menyenangkan, Gembira dan Belajar Tuntas.</p>
										</div>
									</div>	
							</div>
						</div>
						<div class="carousel-item">
							<img src="assets/at4.jpg" class="d-block w-100" style="height: 550px;">
							<div class="carousel-caption d-md-block">
								<div class="jumbotron jumbotron-fluid">
									<div class="container">
										<h4 class="display-5">Pendaftaran Online RA Attaqwa 35</h4>
										<br>
										<a class="btn btn-primary btn-lg" href="persyaratan.html" role="button">Selengkapnya</a>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<img src="assets/at1.jpg" class="d-block w-100" style="height: 550px;">
							<div class="carousel-caption d-md-block">
								<div class="jumbotron jumbotron-fluid">
									<div class="container">
										<h4 class="display-5">Staff & Guru Pengajar</h4>
										<hr class="my-5" style="background-color: white;">
										<p class="lead">Tenaga pengajar terdiri dari sosok-sosok muda yang berbakat, kompeten, handal, dan profesional.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div> <!-- end of ctn-jumbotron -->
			<div id="ctn-profile">
				<div class="container" style="padding: 50px 0px !important;">
					<div class="row">
						<div class="col-md-3">
							<div class="box">
								<div class="icon">
									<i class="fas fa-trophy"></i>
								</div>
								<h3 class="title">Prestasi</h3>
								<hr>
								<p class="caption">Setiap kegiatan dan pembelajaran yang dilaksanakan senantiasa berorientasi pada peningkatan prestasi siswa-siswi.
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box">
								<div class="icon">
									<i class="fas fa-building"></i>
								</div>
								<h3 class="title">Fasilitas</h3>
								<hr>
								<p class="caption">Fasilitas-fasilitas memadai disiapkan untuk mendukung setiap kegiatan pembelajaran dan pengembangan diri.
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box">
								<div class="icon">
									<i class="fas fa-university"></i>
								</div>
								<h3 class="title">Kurikulum</h3>
								<hr>
								<p class="caption">Kurikulum yang dipilih sangat cermat di setiap aspek pertumbuhan dan perkembangan ke arah positif.
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box">
								<div class="icon">
									<i class="fas fa-users"></i>
								</div>
								<h3 class="title">Pengajar</h3>
								<hr>
								<p class="caption">Tenaga pengajar terdiri dari sosok-sosok muda yang berbakat, kompeten, handal, dan profesional.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div><!-- end of ctn-profile -->
			<div id="ctn-para">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="w-para">
								<h3>Daftar Sekarang!</h3>
							</div>
						</div>
					</div>
				</div>
			</div><!-- end of ctn-parallax -->
			<div id="ctn-latest">
				<center>
					<div class="container blog">
						<h3 class="blog-judul">Berita Terbaru
						</h3>
						<div class="row w-blog">
							<?php
								include "administrator/koneksi.php";

								$sql = "SELECT * FROM tbl_berita 
												WHERE status='Y'
												ORDER BY waktu DESC LIMIT 3";
								$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

								while($data=mysqli_fetch_array($query)){?>

								<div class="col-md-4 box-blog" style="padding: 0 !important; margin: 0 !important;">
									<div class="box-post">
										<a href="#"><img src="administrator/berita/hasil-upload/<?php echo $data["foto"];?>"></a>
										<div class="post-desc">
											<h4>
												<a href="#"><?php echo $data["judul"]; ?></a>
											</h4>
											<span><i class="fas fa-calendar"></i>  <?php echo $data["waktu"]; ?></span>
											<span>
												<a class="cat" href="#">News</a>
											</span>
										</div>
									</div>
								</div>
								
								<?php }
							?>
						</div>
					</div>
				</center>
			</div><!-- end of ctn-latest -->
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
		
	</body>
</html>