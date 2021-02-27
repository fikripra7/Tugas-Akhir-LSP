
<h3>Daftar Nama</h3>

<div class="table-responsive">
  <table class="table table-bordered table-striped table-hover" id="datasiswa">
  <thead>
    <tr>
      <th>No</th>
      <th>ID</th>
      <th>Nama Lengkap</th>
      <th>Nama Panggilan</th>
      <th>Tempat Lahir</th>
      <th>Tanggal Lahir</th>
      <th>NIK Siswa</th>
      <th>Jenis Kelamin</th>
      <th>Kelompok</th>
      <th>Status Siswa</th>
      <th>Jumlah Saudara</th>
      <th>Jenjang</th>
      <th>Keterangan</th>
      <th>Alamat</th>
      <th>Jarak</th>
      <th>Transportasi</th>
      <th>Nomor KK</th>
      <th>Nama Ayah</th>
      <th>NIK Ayah</th>
      <th>Pendidikan Ayah</th>
      <th>Nomor Hp</th>
      <th>Foto</th>

      <?php
      if ($_SESSION["tiket_level"] == "Administrator") {
          echo "<th>Aksi</th>";
          echo "<th>Aksi</th>";
      }
      ?>
    </tr>
  </thead>
  <tbody>
    
    <?php
      include "koneksi.php";

      $key = $_POST["cari"];

      $no = 1; //nomor urut

      // query sql untuk menampilkan data
      $sql = "SELECT tbl_pendaftaran.id_siswa, tbl_pendaftaran.nama_lengkap, tbl_pendaftaran.nama_panggil, tbl_pendaftaran.tempat_lahir, tbl_pendaftaran.tgl_lahir, tbl_pendaftaran.nik_siswa, tbl_pendaftaran.jns_kelamin, tbl_kelompok.kelompok, tbl_status.status, tbl_saudara.jml_saudara, tbl_jenjang.jenjang, tbl_pendaftaran.keterangan, tbl_pendaftaran.alamat, tbl_jarak.jarak, tbl_pendaftaran.transportasi, tbl_pendaftaran.nmr_kk, tbl_pendaftaran.ayah, tbl_pendaftaran.nik_ayah, tbl_pendidikan.pddk, tbl_pendaftaran.nmr_hp, tbl_pendaftaran.foto
              FROM tbl_pendaftaran 
              JOIN tbl_kelompok ON tbl_pendaftaran.kelompok = tbl_kelompok.id_kelompok
              JOIN tbl_status ON tbl_pendaftaran.status_siswa = tbl_status.id_status
              JOIN tbl_saudara ON tbl_pendaftaran.jml_saudara = tbl_saudara.id_saudara
              JOIN tbl_jenjang ON tbl_pendaftaran.jenjang = tbl_jenjang.id_jenjang
              JOIN tbl_jarak ON tbl_pendaftaran.jarak = tbl_jarak.id_jarak
              JOIN tbl_pendidikan ON tbl_pendaftaran.pddk = tbl_pendidikan.id_pddk
              WHERE CONCAT (nama_lengkap, nama_panggil, tempat_lahir, tgl_lahir, nik_siswa, jns_kelamin,  status_siswa, keterangan, alamat, transportasi, nmr_kk, ayah, nik_ayah, nmr_hp) LIKE '%$key%'
              ORDER BY id_siswa DESC";
      $query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

      // lakukan perulangan data
      // dan tarik data dari database dengan
      // mysqli_fecth
      while ($data = mysqli_fetch_array($query)){

        // deklarasikan  // diambil dari nama kolom database
        $ids = $data["id_siswa"];
        $nma = $data["nama_lengkap"];
        $pgln = $data["nama_panggil"];
        $tp = $data["tempat_lahir"];
        $tg = $data["tgl_lahir"];
        $nk = $data["nik_siswa"];
        $jkl = $data["jns_kelamin"];
        $kl = $data["kelompok"];
        $st = $data["status"];
        $sd = $data["jml_saudara"];
        $jj = $data["jenjang"];
        $kt = $data["keterangan"];
        $almt = $data["alamat"];
        $jrk = $data["jarak"];
        $tr = $data["transportasi"];
        $kk = $data["nmr_kk"];
        $ay = $data["ayah"];
        $na = $data["nik_ayah"];
        $pd = $data["pddk"];
        $mb = $data["nmr_hp"];
        $ft = $data["foto"];

        // periksa apakah ada gambar atau tidak
        $noimg = $data["foto"] == "" ? "assets/no-image.png" : "hasil-upload/$ft";


        if ($_SESSION["tiket_level"] == "Administrator") {
            echo "<tr>
                <td>$no</td>
                <td>$ids</td>
                <td><a href='data-siswa/cetak.php?cetak_id=$ids'>$nma</a></td>
                <td>$pgln</td>
                <td>$tp</td>
                <td>$tg</td>
                <td>$nk</td>
                <td>$jkl</td>
                <td>$kl</td>
                <td>$st</td>
                <td>$sd</td>
                <td>$jj</td>
                <td>$kt</td>
                <td>$almt</td>
                <td>$jrk</td>
                <td>$tr</td>
                <td>$kk</td>
                <td>$ay</td>
                <td>$na</td>
                <td>$pd</td>
                <td>$mb</td>
                <td><img src='$noimg' width='100' height='100'></td>
                <td><a href='index.php?edit_id=$ids'>Edit</a></td>
                <td><a href=javascript:hapus('data-siswa/hapus-data.php?hapus_id=$ids')>Hapus</a></td>
            </tr>";
        } else {
            echo "<tr>
                <td>$no</td>
                <td>$ids</td>
                <td>$nma</td>
                <td>$pgln</td>
                <td>$tp</td>
                <td>$tg</td>
                <td>$nk</td>
                <td>$jkl</td>
                <td>$kl</td>
                <td>$st</td>
                <td>$sd</td>
                <td>$jj</td>
                <td>$kt</td>
                <td>$almt</td>
                <td>$jrk</td>
                <td>$tr</td>
                <td>$kk</td>
                <td>$ay</td>
                <td>$na</td>
                <td>$pd</td>
                <td>$mb</td>
                <td><img src='$noimg' width='100' height='100'></td>
            </tr>";
          }
        $no++;
      }
    ?>

  </tbody>
  </table>
</div>
