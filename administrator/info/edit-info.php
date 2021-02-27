<h3>Form Edit Berita</h3>
<hr>
<br>

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

<?php
include "koneksi.php";

// tangkap URL dengan menggunakan $_GET
$idb = $_GET["edit_if"];

// tampilkan data yang akan diedit
$sql = "SELECT * FROM tbl_info WHERE id_info=$idb";
$query = mysqli_query($konek, $sql) or die(mysqli_error($konek));

// tarik data dari database 
$data = mysqli_fetch_array($query);

$ft = $data["foto"];
$noimg = $data["foto"] == "" ? "assets/no-image.png" : "info/hasil-upload/$ft";
?>

<form action="info/update-info.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="idku" value="<?php echo $data['id_info']; ?>">

  <div class="form-group">
    <label>Judul</label>
    <input class="form-control" type="text" name="judulku" value="<?php echo $data['judul']; ?>">
  </div>
  <div class="form-group">
    <label>Deskripsi Singkat</label>
    <textarea id="skt" class="form-control" cols="30" rows="5" name="singkat"><?php echo $data["desk_singkat"]; ?></textarea>
    <script type="text/javascript">
      CKEDITOR.replace("skt");
    </script>
  </div>
  <div class="form-group">
    <label>Detail</label>
    <textarea id="dtl" class="form-control" cols="30" rows="5" name="detail"><?php echo $data["detail"]; ?></textarea>
    <script type="text/javascript">
      CKEDITOR.replace("dtl");
    </script>
  </div>
  <img src="<?php echo $noimg; ?>" height="50" width="50">
  <div class="form-group">
    <label>Unggah Dokumen</label>
    <input type="file" name="fileku" class="form-control-file">
  </div>

  <div class="form-group">
    <input class="btn btn-primary" type="submit" value="Simpan" name="save">
  </div>
  
</form>