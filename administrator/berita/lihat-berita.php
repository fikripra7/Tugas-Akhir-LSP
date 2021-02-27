
<h3>Daftar Berita</h3>

<div class="table-responsive">
  <table id="dataTable" class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>ID</th>
        <th>Judul</th>
        <th>Deskripsi Singkat</th>
        <th>Detail</th>
        <th>Waktu</th>
        <th>Foto</th>
        <th>Status</th>

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

        $no = 1;

        $sql = "SELECT * FROM tbl_berita
                ORDER BY id_berita DESC";

        $query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

        while($data = mysqli_fetch_array($query)){

          // deklarasikan
          $idb = $data["id_berita"];
          $jd = $data["judul"];
          $desk = $data["desk_singkat"];
          $dt = $data["detail"];
          $wt = $data["waktu"];
          $ft = $data["foto"];
          $ids = $data["status"];

          // periksa apakah ada gambar atau tidak
          $noimg = $data["foto"] == "" ? "../assets/no-image.png" : "berita/hasil-upload/$ft";


          if ($_SESSION["tiket_level"] == "Administrator") {
              echo "<tr>
                  <td>$no</td>
                  <td>$idb</td>
                  <td>$jd</td>
                  <td>$desk</td>
                  <td>$dt</td>
                  <td>$wt</td>
                  <td><img src='$noimg' width='100' height='100'></td>
                  <td><a href='index.php?status_id=$idb'>$ids</a></td>
                  <td><a href='index.php?edit_ba=$idb'>Edit</a></td>
                  <td><a href=javascript:hapus('berita/hapus-berita.php?hapus_id=$idb')>Hapus</a></td>
              </tr>";
          } else {
              echo "<tr>
                  <td>$no</td>
                  <td>$idb</td>
                  <td>$jd</td>
                  <td>$desk</td>
                  <td>$dt</td>
                  <td>$wt</td>
                  <td><img src='$noimg' width='100' height='100'></td>
                  <td><a href='index.php?status_id=$idb'>$ids</a></td>
              </tr>";
          }
          $no++;
        }
        ?>
    </tbody>		
  </table>
</div>
