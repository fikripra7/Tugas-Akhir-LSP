
<h3>Daftar Pengumuman</h3>

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

        $sql = "SELECT * FROM tbl_info
                ORDER BY id_info DESC";

        $query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

        while($data = mysqli_fetch_array($query)){

          // deklarasikan
          $idb = $data["id_info"];
          $jd = $data["judul"];
          $desk = $data["desk_singkat"];
          $dt = $data["detail"];
          $wt = $data["waktu"];
          $ft = $data["foto"];
          $ids = $data["status"];

          // periksa apakah ada gambar atau tidak
          $noimg = $data["foto"] == "" ? "../assets/no-image.png" : "info/hasil-upload/$ft";


          if ($_SESSION["tiket_level"] == "Administrator") {
              echo "<tr>
                  <td>$no</td>
                  <td>$idb</td>
                  <td>$jd</td>
                  <td>$desk</td>
                  <td>$dt</td>
                  <td>$wt</td>
                  <td><img src='$noimg' width='100' height='100'></td>
                  <td><a href='index.php?status_in=$idb'>$ids</a></td>
                  <td><a href='index.php?edit_if=$idb'>Edit</a></td>
                  <td><a href=javascript:hapus('info/hapus-info.php?hapus_id=$idb')>Hapus</a></td>
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
                  <td><a href='index.php?status_in=$idb'>$ids</a></td>
              </tr>";
          }
          $no++;
        }
        ?>
    </tbody>		
  </table>
</div>
