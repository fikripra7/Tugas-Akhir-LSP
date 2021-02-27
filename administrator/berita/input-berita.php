<!DOCTYPE html>
<html>
<head>
	<title>Tambah Berita</title>
</head>
<body>

	<h3>Form Input Berita</h3>

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

	<form action="berita/insert-berita.php" method="post" enctype="multipart/form-data">
	
		<div class="form-group">
			<label>Judul</label>
			<input class="form-control" type="text" name="judulku" required>
		</div>
		<div class="form-group">
			<label>Deskripsi Singkat</label>
			<textarea id="skt" class="form-control" cols="30" rows="5" name="singkat" required></textarea>
			<script type="text/javascript">
				CKEDITOR.replace("skt");
			</script>
		</div>
		<div class="form-group">
			<label>Detail</label>
			<textarea id="dtl" class="form-control" cols="30" rows="5" name="detail" required></textarea>
			<script type="text/javascript">
				CKEDITOR.replace("dtl");
			</script>
		</div>
		<div class="form-group">
			<label>Unggah Dokumen</label>
			<input type="file" name="fileku" class="form-control-file">
		</div>

		<div class="form-group">
			<input class="btn btn-primary" type="submit" value="Simpan" name="save">
			<input class="btn btn-danger" type="reset" value="Clear" name="reset">
		</div>
		
	</form>

</body>
</html>