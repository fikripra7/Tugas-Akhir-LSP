<h3>Filter Daftar Nama</h3>
<hr>
<br>

<div class="table-responsive">
  <table id="dataTable" class="table table-bordered table-striped table-hover">
      <thead>
          <tr>
              <th>No</th>
              <th>ID</th>
              <th>Nama Lengkap</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>Alamat</th>
              <th>Jenis Kelamin</th>
              <th>Agama</th>
              <th>Kewarganegaraan</th>
              <th>Nama Ortu / Wali Murid</th>
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

          $ida = $_GET["kode"];

          $no = 1; //nomor urut

          // query sql untuk menampilkan data
          $sql = "SELECT * FROM tbl_pendaftaran 
              JOIN tbl_agama
              ON tbl_pendaftaran.agama = tbl_agama.id_agama
              WHERE agama='$ida'
              ORDER BY id_siswa DESC";
          $query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

          // lakukan perulangan data
          // dan tarik data dari database dengan
          // mysqli_fecth
          while ($data = mysqli_fetch_array($query)) {

              // deklarasikan 
              $nma = $data["nama_siswa"]; // diambil dari nama kolom database
              $ids = $data["id_siswa"];
              $jkl = $data["jns_kelamin"];
              $tu = $data["tempat_lahir"];
              $tg = $data["tgl_lahir"];
              $kt = $data["keterangan"];
              $almt = $data["alamat"];
              $kw = $data["kewarganegaraan"];
              $ot = $data["nama_ortu"];
              $nmr = $data["nmr_hp"];
              $ft = $data["foto"];

              // periksa apakah ada gambar atau tidak
              $noimg = $data["foto"] == "" ? "assets/no-image.png" : "hasil-upload/$ft";


              if ($_SESSION["tiket_level"] == "Administrator") {
                  echo "<tr>
                      <td>$no</td>
                      <td>$ids</td>
                      <td>$nma</td>
                      <td>$tu</td>
                      <td>$tg</td>
                      <td>$almt</td>
                      <td>$jkl</td>
                      <td>$kt</td>
                      <td>$kw</td>
                      <td>$ot</td>
                      <td>$nmr</td>
                      <td><img src='$noimg' width='100' height='100'></td>
                      <td><a href='index.php?edit_id=$ids'>Edit</a></td>
                      <td><a href=javascript:hapus('hapus-data.php?hapus_id=$ids')>Hapus</a></td>
                  </tr>";
              } else {
                  echo "<tr>
                      <td>$no</td>
                      <td>$ids</td>
                      <td>$nma</td>
                      <td>$tu</td>
                      <td>$tg</td>
                      <td>$almt</td>
                      <td>$jkl</td>
                      <td>$kt</td>
                      <td>$kw</td>
                      <td>$ot</td>
                      <td>$nmr</td>
                      <td><img src='$noimg' width='100' height='100'></td>
                  </tr>";
              }
              $no++;
          }
          ?>

      </tbody>
  </table>
</div>