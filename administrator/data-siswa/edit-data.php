<h3>Form Edit Data</h3>
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
$ids = $_GET["edit_id"];

// tampilkan data yang akan diedit
$sql = "SELECT * FROM tbl_pendaftaran WHERE id_siswa=$ids";
$query = mysqli_query($konek, $sql) or die(mysqli_error($konek));

// tarik data dari database 
$data = mysqli_fetch_array($query);

$tr = explode(",", $data["transportasi"]);
$ft = $data["foto"];
$noimg = $data["foto"] == "" ? "assets/no-image.png" : "hasil-upload/$ft";
?>

<form action="data-siswa/update-data.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="idku" value="<?php echo $data['id_siswa']; ?>">

  <!-- data siswa -->
  <div class="data-siswa">
    <h4>1. Data Siswa</h4>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- nama lengkap -->
          <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="namaku" class="form-control" placeholder="Masukkan Nama Lengkap" value="<?php echo $data['nama_lengkap']; ?>" autofocus required>
          </div>
          <!-- nama panggilan -->
          <div class="form-group">
            <label>Nama Panggilan</label>
            <input type="text" name="pglan" class="form-control" placeholder="Masukkan Nama Panggilan" value="<?php echo $data['nama_panggil']; ?>" required>
          </div>
          <!-- tempat lahir -->
          <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tempatku" class="form-control"
            placeholder="Masukkan Tempat Lahir" value="<?php echo $data['tempat_lahir']; ?>" required>
          </div>
          <!-- tanggal lahir -->
          <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal" value="<?php echo $data['tgl_lahir']; ?>" required>
          </div>
          <!-- nik -->
          <div class="form-group">
            <label>NIK Siswa</label>
            <input type="text" class="form-control" name="nik" placeholder="Masukkan NIK" value="<?php echo $data['nik_siswa']; ?>" required>
          </div>
          <!-- jenis kelamin -->
          <div class="form-group">
            <label>Jenis Kelamin</label>
            <br>
            <div class="custom-control custom-radio custom-control-inline">
              <input id="cowo" name="jnskelamin" type="radio" class="custom-control-input" value="L" <?php if ($data["jns_kelamin"] == "L") echo "checked"; ?> >
              <label class="custom-control-label" for="cowo">Laki-laki</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input id="cewe" name="jnskelamin" type="radio" class="custom-control-input" value="P" <?php if ($data["jns_kelamin"] == "P") echo "checked"; ?> >
              <label class="custom-control-label" for="cewe">Perempuan</label>
            </div>
          </div>
          <!-- kelompok -->
          <div class="form-group">
            <label>Kelompok</label>
            <br>
            <div class="custom-control custom-radio custom-control-inline">
              <input id="a" name="kelompok" type="radio" class="custom-control-input" value="1" <?php if ($data["kelompok"] == "a") echo "checked"; ?>>
              <label class="custom-control-label" for="a">Kelompok A</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input id="b" name="kelompok" type="radio" class="custom-control-input" value="2" <?php if ($data["kelompok"] == "b") echo "checked"; ?>>
              <label class="custom-control-label" for="b">Kelompok B</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input id="c" name="kelompok" type="radio" class="custom-control-input" value="3" <?php if ($data["kelompok"] == "c") echo "checked"; ?>>
              <label class="custom-control-label" for="c">Tanpa Kelompok</label>
            </div>
          </div>
          <!-- status siswa -->
          <div class="form-group">
            <label>Status Siswa</label>
            <br>
            <div class="st-atas">
              <div class="custom-control custom-radio custom-control-inline">
                <input id="n" name="status" type="radio" class="custom-control-input" value="1" <?php if ($data["status_siswa"] == "n") echo "checked"; ?>>
                <label class="custom-control-label" for="n">Naik dari Kelas/Tingkat Sebelumnya</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input id="m" name="status" type="radio" class="custom-control-input" value="2" <?php if ($data["status_siswa"] == "m") echo "checked"; ?>>
                <label class="custom-control-label" for="m">Mengulang Karena Tidak Naik Kelas</label>
              </div>
            </div>
            <div class="st-bawah">
              <div class="custom-control custom-radio custom-control-inline" style="margin-right: 89px !important;">
                <input id="s" name="status" type="radio" class="custom-control-input" value="3" <?php if ($data["status_siswa"] == "s") echo "checked"; ?>>
                <label class="custom-control-label" for="s">Siswa Baru/Pindah Masuk</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input id="d" name="status" type="radio" class="custom-control-input" value="4" <?php if ($data["status_siswa"] == "d") echo "checked"; ?>>
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
                <option value="1" <?php if ($data["jml_saudara"] == "1") echo "selected"; ?>> < 2</option>
                <option value="2" <?php if ($data["jml_saudara"] == "2") echo "selected"; ?>>2</option>
                <option value="3" <?php if ($data["jml_saudara"] == "3") echo "selected"; ?>>3</option>
                <option value="4" <?php if ($data["jml_saudara"] == "4") echo "selected"; ?>>4</option>
                <option value="5" <?php if ($data["jml_saudara"] == "5") echo "selected"; ?>>5</option>
                <option value="6" <?php if ($data["jml_saudara"] == "6") echo "selected"; ?>> > 5</option>
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
    <br>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- jenjang -->
          <div class="form-group">
            <label>Jenjang</label>
            <br>
            <div class="j1">
              <div class="custom-control custom-radio custom-control-inline" style="margin-right: 55px !important;">
                <input id="main" name="jenjang" type="radio" class="custom-control-input" value="1" <?php if ($data["jenjang"] == "1") echo "checked"; ?>>
                <label class="custom-control-label" for="main">Kelompok Bermain</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input id="ra" name="jenjang" type="radio" class="custom-control-input" value="2" <?php if ($data["jenjang"] == "2") echo "checked"; ?>>
                <label class="custom-control-label" for="ra">RA (Raudhatul Athfal)</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input id="ortu" name="jenjang" type="radio" class="custom-control-input" value="5" <?php if ($data["jenjang"] == "5") echo "checked"; ?>>
                <label class="custom-control-label" for="ortu">Langsung dari Orang Tua</label>
              </div>
            </div>
            <div class="j2">
              <div class="custom-control custom-radio custom-control-inline">
                <input id="tk" name="jenjang" type="radio" class="custom-control-input" value="3" <?php if ($data["jenjang"] == "3") echo "checked"; ?>>
                <label class="custom-control-label" for="tk">TK (Taman Kanak-kanak)</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input id="paud" name="jenjang" type="radio" class="custom-control-input" value="4" <?php if ($data["jenjang"] == "4") echo "checked"; ?>>
                <label class="custom-control-label" for="paud">PAUD</label>
              </div>
            </div>
          </div>
          <!-- Keterangan -->
          <div class="form-group">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control" rows="3" placeholder="Keterangan"><?php echo $data["keterangan"]; ?></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <!-- alamat siswa -->
  <h4>3. Alamat Siswa</h4>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Alamat</label>
          <textarea name="alamat" class="form-control" rows="3" placeholder="Alamat Lengkap" required><?php echo $data["alamat"]; ?></textarea>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label>Jarak ke Sekolah</label>
            <select class="form-control" name="jarak" required>
              <option selected>Pilih..</option>
              <option value="1" <?php if ($data["jarak"] == "1") echo "selected"; ?>> < 1 Km</option>
              <option value="2" <?php if ($data["jarak"] == "2") echo "selected"; ?>>3-5 Km</option>
              <option value="3" <?php if ($data["jarak"] == "3") echo "selected"; ?>>5-10 Km</option>
              <option value="4" <?php if ($data["jarak"] == "4") echo "selected"; ?>> > 10 Km</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label>Alat Transportasi</label>
          <div class="al1">
            <div class="custom-control custom-checkbox custom-control-inline">
              <input type="checkbox" class="custom-control-input" id="jln" name="alat[]" value="Jalan Kaki" <?php if(in_array("Jalan Kaki", $tr)) echo "checked" ?>>
              <label class="custom-control-label" for="jln">Jalan Kaki</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
              <input type="checkbox" class="custom-control-input" id="sm" name="alat[]" value="Sepeda Motor" <?php if(in_array("Sepeda Motor", $tr)) echo "checked" ?>>
              <label class="custom-control-label" for="sm">Sepeda Motor</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
              <input type="checkbox" class="custom-control-input" id="aj" name="alat[]" value="Antar Jemput Sekolah" <?php if(in_array("Antar Jemput Sekolah", $tr)) echo "checked" ?>>
              <label class="custom-control-label" for="aj">Antar Jemput Sekolah</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
              <input type="checkbox" class="custom-control-input" id="p" name="alat[]" value="Perahu" <?php if(in_array("Perahu", $tr)) echo "checked" ?>>
              <label class="custom-control-label" for="p">Perahu</label>
            </div>
          </div>
          <div class="al2">
            <div class="custom-control custom-checkbox custom-control-inline" style="margin-right: 32px !important;">
              <input type="checkbox" class="custom-control-input" id="sa" name="alat[]" value="Sepeda" <?php if(in_array("Sepeda", $tr)) echo "checked" ?>>
              <label class="custom-control-label" for="sa">Sepeda</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline" style="margin-right: 23px !important;">
              <input type="checkbox" class="custom-control-input" id="mp" name="alat[]" value="Mobil Pribadi" <?php if(in_array("Mobil Pribadi", $tr)) echo "checked" ?>>
              <label class="custom-control-label" for="mp">Mobil Pribadi</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline" style="margin-right: 49px !important;">
              <input type="checkbox" class="custom-control-input" id="au" name="alat[]" value="Angkutan Umum" <?php if(in_array("Angkutan Umum", $tr)) echo "checked" ?>>
              <label class="custom-control-label" for="au">Angkutan Umum</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
              <input type="checkbox" class="custom-control-input" id="sl" name="alat[]" value="sampan/lainnya" <?php if(in_array("sampan/lainnya", $tr)) echo "checked" ?>>
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
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- nmr kk -->
        <div class="form-group">
          <label>No. KK</label>
          <input type="text" class="form-control" name="kaka" placeholder="Masukkan Nomor Kartu Keluarga" value="<?php echo $data['nmr_kk']; ?>" required>
        </div>
        <!-- nama ayah -->
        <div class="form-group">
          <label>Nama Ayah</label>
          <input type="text" class="form-control" name="ayah" placeholder="Masukkan Nama Lengkap" value="<?php echo $data['ayah']; ?>" required>
        </div>
        <!-- nik ayah -->
        <div class="form-group">
          <label>NIK Ayah</label>
          <input type="text" class="form-control" name="nmrnik" placeholder="Masukkan Nomor Induk Keluarga" value="<?php echo $data['nik_ayah']; ?>" required>
        </div>
        <!-- pendidikan -->
        <div class="form-row">
          <div class="form-group col-md-4">
            <label>Pendidikan Terakhir</label>
            <select class="form-control" name="pddk" required>
              <option selected>Pilih..</option>
              <option value="1" <?php if ($data["pddk"] == "1") echo "selected"; ?>> <= SMP</option>
              <option value="2" <?php if ($data["pddk"] == "2") echo "selected"; ?>>SMA</option>
              <option value="3" <?php if ($data["pddk"] == "3") echo "selected"; ?>>D1</option>
              <option value="4" <?php if ($data["pddk"] == "4") echo "selected"; ?>>D2</option>
              <option value="5" <?php if ($data["pddk"] == "5") echo "selected"; ?>>D3</option>
              <option value="6" <?php if ($data["pddk"] == "6") echo "selected"; ?>>D4</option>
              <option value="7" <?php if ($data["pddk"] == "7") echo "selected"; ?>>S1</option>
              <option value="8" <?php if ($data["pddk"] == "8") echo "selected"; ?>>S2</option>
              <option value="9" <?php if ($data["pddk"] == "9") echo "selected"; ?>>S3</option>
            </select>
          </div>
        </div>
        <!-- nomor telpon -->
        <div class="form-group">
          <label>Nomor Hp / Whatsapp</label>
          <input type="text" class="form-control" name="mobile" placeholder="Masukkan Nomor" value="<?php echo $data['nmr_hp']; ?>"required>
        </div>
      </div>
    </div>
  </div>
  <img src="<?php echo $noimg; ?>" height="50" width="50">
  <div class="form-group">
    <label>Unggah Foto</label>
    <input type="file" name="fileku" class="form-control-file">
  </div>
  <div class="form-group">
    <input class="btn btn-primary" type="submit" value="Simpan" name="save">
  </div>
</form>