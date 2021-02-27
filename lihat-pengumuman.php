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

	<title>RA Al-Bina | Pengumuman</title>
	<link rel="shortcut icon" href="assets/attaqwa.png">
</head>
<body id="my-top">

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
							<a class="nav-link activeku" href="pengumuman.php">Pengumuman</a>
						</li>
					</ul>
				</div>
			</nav>
		</div><!-- end of header -->
			<div class="ctn-lihat">
				<div class="container">
					<div class="row">

						<!-- Blog Entries Column -->
						<div class="col-md-8">
							<br>

							<!-- Blog Post -->

							<?php
								include "administrator/koneksi.php";

								$idb = $_GET["detail_id"];

								$sql = "SELECT * FROM tbl_info
												WHERE id_info='$idb'
												ORDER BY id_info DESC";
								$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

								// lakukan looping data
								while($data = mysqli_fetch_array($query)){?>

								<div class="card mb-4">
									<img class="card-img-top" src="administrator/info/hasil-upload/<?php echo $data["foto"];?>" alt="Card image cap">
									<div class="card-body">
										<h2 class="card-title"><?php echo $data["judul"];?></h2>
										<p class="card-text"><?php echo $data["detail"];?></p>
									</div>

									<div class="card-footer text-muted">
										Posted on <?php echo $data["waktu"];?>
									</div>
								</div>

								<?php }

							?>

						</div>

						<!-- Side Widget -->
						<div class="col-md-4">
							<div class="card my-4">
								<h5 class="card-header">Arsip Artikel</h5>
								<div class="card-body">
									<div class="container">
										<div class="row">
											<ul class="list-unstyled mb-0">
												<?php
													include "administrator/koneksi.php";

													$sql = "SELECT waktu FROM tbl_info where status='Y' GROUP BY YEAR(waktu), MONTH(waktu) ORDER BY waktu DESC;";
													$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));
													while($data=mysqli_fetch_array($query)) {?>
														<li><a href="arsip-pengumuman.php?tgl=<?php echo $data['waktu']; ?>"><?php echo date('F Y',strtotime($data['waktu'])); ?></a></li>
													<?php } ?>

											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div><!-- /.row -->
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
	 
</body>
</html>