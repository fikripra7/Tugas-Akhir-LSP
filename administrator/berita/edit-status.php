<h3>Form Edit Status Terbit</h3>

<?php
	include "koneksi.php";

	$ids = $_GET["status_id"];

	$sql = "SELECT * FROM tbl_berita WHERE id_berita='$ids'";
	$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

	$data = mysqli_fetch_array($query);

?>

<form action="berita/update-status.php" method="post">
	<div class="form-group">
		<input type="hidden" name="idku" value="<?php echo $data["id_berita"];?>">
		<label>Status Terbit</label>
		<select class="form-control" name="sts">
			<option value="">PILIH</option>
			<option value="T"<?php if($data["status"] == "T") echo "selected"; ?>>Belum Terbit</option>
			<option value="Y"<?php if($data["status"] == "Y") echo "selected"; ?>>Sudah Terbit</option>
		</select>
	</div>
	<div class="form-group">
		<input type="submit" value="Simpan" name="save" class="btn btn-primary">
	</div>
</form>