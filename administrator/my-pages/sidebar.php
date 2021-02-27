<!-- Sidebar -->
<ul class="sidebar navbar-nav">
  <li class="nav-item active">
    <a class="nav-link" href="index.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-list"></i>
      <span>Data Siswa</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <h6 class="dropdown-header">Pilih Menu :</h6>
      <a class="dropdown-item" href="index.php?ldata">Lihat Data Siswa</a>
      <!-- <h6 class="dropdown-header">Agama :</h6>
      <a class="dropdown-item" href="index.php?kode=1">Islam</a>
      <a class="dropdown-item" href="index.php?kode=2">Kristen</a>
      <a class="dropdown-item" href="index.php?kode=3">Katolik</a>
      <a class="dropdown-item" href="index.php?kode=4">Hindu</a>
      <a class="dropdown-item" href="index.php?kode=5">Budha</a> -->
    </div>
  </li>
  
  <?php
    if($_SESSION["tiket_level"] == "Administrator"){?>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Berita</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Pilih Menu :</h6>
            <a class="dropdown-item" href="index.php?tartikel">Tambah Berita</a>
            <a class="dropdown-item" href="index.php?lartikel">Lihat Berita</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="far fa-fw fa-newspaper"></i>
            <span>Pengumuman</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Pilih Menu :</h6>
            <a class="dropdown-item" href="index.php?tinfo">Tambah Pengumuman</a>
            <a class="dropdown-item" href="index.php?linfo">Lihat Pengumuman</a>
          </div>
        </li>
    
    <?php }
  ?>
  

  <li class="nav-item">
    <a class="nav-link" href="../index.php" target="_blank">
      <i class="fas fa-fw fa-location-arrow"></i>
      <span>Lihat</span>
    </a>
  </li>
</ul>