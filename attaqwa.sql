-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Agu 2020 pada 06.48
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attaqwa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_operator` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `user_level` enum('Administrator','Member') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_operator`, `username`, `email`, `password`, `user_level`) VALUES
(2, 'admin', '', '21232f297a57a5a743894a0e4a801fc3', 'Administrator'),
(3, 'fikri', '', '5d4864249b21de08642aa6ff4178b346', 'Member'),
(4, '', 'doni@g.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Administrator'),
(5, 'dani', 'dani@g.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Administrator'),
(6, 'dodi', 'test@gmail.com', 'b59c67bf196a4758191e42f76670ceba', 'Administrator'),
(7, 'fikri', 'test@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Administrator'),
(8, 'attaqwa', 'attaqwa35@gmail.com', '0192023a7bbd73250516f069df18b500', 'Administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(5) NOT NULL,
  `judul` text NOT NULL,
  `desk_singkat` text NOT NULL,
  `detail` text NOT NULL,
  `waktu` datetime NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('T','Y') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul`, `desk_singkat`, `detail`, `waktu`, `foto`, `status`) VALUES
(12, 'svsfvvsfv', '<p>sfvsfvsvfsfvsfbsfbs</p>\r\n', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2020-06-16 00:00:00', 'hoho.jpg', 'T'),
(13, 'dbfgbszfgnfnsfg', '<p>zdfbzdbdfbzdebedb</p>\r\n', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2020-06-15 00:00:00', '6-0.jpg', 'T'),
(14, 'vdfbzdbdgb', '<p>dbzdgbzdgbnzf</p>\r\n', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2020-06-15 00:00:00', 'hoho.jpg', 'T'),
(15, 'gffgfgf', '<p>vdgbsdfbsfb</p>\r\n', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2020-06-22 00:00:00', 'logo2.png', 'T'),
(16, 'PROFIL SD PLUS ALBINA', '<p>Upaya mengaktualisasi segenap potensi bangsa melalui pendidikan adalah ......</p>\r\n', '<p>Upaya mengaktualisasi segenap potensi bangsa melalui pendidikan adalah suatu keharusan agar sumber daya manusia yang kita miliki mampu berkompetisi secara sehat dalam dunia global (advantage competitive) yang didasari atas keimanan dan ketaqwaan dalam wujud akhlaqul karimah. Sebagai khalifatullah fir ardli, manusia memiliki kewenangan untuk mengelola alam menurut petunjuk-Nya. Dalam melaksanakan kewenangan tersebut manusia dikaruniai kemampuan fisik, dan mental spiritual yang dapat dikembangkan melalui pendidikan (ilmu pengetahuan). Dan melalui ilmu pengetahuan, harkat dan martabat manusia terangkat (Q.S 58:11), terutama dalam penerapan dan pengembangan ilmu pengetahuan dan teknologi untuk menyongsong masa depan yang selalu berubah-ubah. Untuk itulah, materi kurikulum pendidikan yang dikembangkan di SD Plus ALBINA adalah kurikulum yang dirancang khusus untuk menjawab tantangan global dan perkembangan IPTEK yang sangat cepat. Muatan materi keagamaan dan budi pekerti (akhlaqul karimah) yang proporsional, diharapkan siswa memiliki adat, atau akhlak luhur yang bersumber dari Al-Qur&rsquo;an dan Sunnah Rasul dalam setiap aktivitas kesehariannya. Mudah-mudahan dengan beroperasinya SD PLUS ALBINA di lingkungan Ujung Harapan Assalam ini merupakan pilihan utama bagi masyarakat yang merindukan sekolah alternatif (unggulan) yang hadir sebagai pelayan dibidang pengembangan IPTEK dan IMTAQ dalam satu keterpaduan inter disiplin ilmu dan keserasian antara ilmu dan amal.</p>\r\n\r\n<p>Sedangkan tujuan dari pendirian sekolah ini adalah dalam upaya mendekatkan kembali anak-anak usia sekolah pada agama, maka sepatutnyalah diselenggarakan pendidikan bagi mereka melalui pemahaman Al-Qur&rsquo;an, sehingga mereka tidak mudah terpengaruh arus luar yang makin deras menerpa dan menggoyahkan sendi-sendi agama mereka. Sebagai lembaga pendidikan yang programnya mengacu pada kurikulum Pendidikan Nasional dengan mengintegrasikan pemahaman dan hafalan Al-Qur&rsquo;an, SD PLUS ALBINA memiliki tujuan sebagai berikut :</p>\r\n\r\n<p>1. Ikut serta mencerdaskan kehidupang bangsa melalui pendidikan agama pada usia dini.</p>\r\n\r\n<p>2. Membentuk pribadi-pribadi anak bangsa yang berakhlak, bermartabat, dan memiliki ilmu pengetahuan tinggi</p>\r\n\r\n<p>3. Meningkatkan kualitas dan kuantitas anak bangsa yang kreatif, inovatif, dan mandiri.</p>\r\n\r\n<p>4. Mencetak lulusan-lulusan yang hafal Al-Qur&rsquo;an dan ilmu-ilmu yang dikandungnya</p>\r\n\r\n<p>5. Melahirkannya generasi penerus yang memiliki integritas kebangsaan, berwawasan IPTEK dan IMTAQ yang dapat dibanggakan.</p>\r\n', '2018-02-09 00:00:00', 'logo2.png', 'Y'),
(17, 'hfkh', '<p>jlkhlujy</p>\r\n', '<p>khgkhgk</p>\r\n', '2020-07-21 14:47:33', 'hoho.jpg', 'Y'),
(19, 'x cxv c', '<p>cv cc cv</p>\r\n', '<p>bdfgbdfbd</p>\r\n', '2020-07-03 16:50:46', 'hoho.jpg', 'Y'),
(20, 'sssssssssss', '<p>sssssssssss</p>\r\n', '<p>sssssssssssssssss</p>\r\n', '2020-07-03 20:15:01', 'logo1.png', 'Y'),
(21, 'vzvsv', '<p>svsv</p>\r\n', '<p>svss</p>\r\n', '2020-07-13 21:50:23', 'images - Copy.jpg', 'Y'),
(24, 'sgsbgsg', '<p>sgsgsgs</p>\r\n', '<p>sgsgsgs</p>\r\n', '2020-07-13 21:55:03', '2.PNG', 'Y'),
(25, 'sfsvgsfgsf', '<p>ddgdb</p>\r\n', '<p>sfgsgsgsf</p>\r\n', '2020-07-14 08:57:15', '5.PNG', 'Y'),
(26, 'sfsfs', '<p>fssfs</p>\r\n', '<p>sfsfs</p>\r\n', '2020-07-14 08:43:34', '4.PNG', 'Y'),
(27, 'Pengambilan Rapot', '<p>fvbsfbgsfdfhb</p>\r\n', '<p>bdaghazgnbafgnzfhnfnfznf</p>\r\n', '2020-07-19 23:08:39', 'rapot1.jpg', 'Y'),
(28, 'Pengambilan Rapot', '<p>rfgveadbad khsglCIBSDV</p>\r\n', '<p>SVyglfshjfbvkjaVDFLsivuhnSdv</p>\r\n', '2020-07-21 14:52:06', 'rapot2.jpg', 'Y'),
(29, 'Classmeeting', '<p>sfsgvdbfazeb wpeiuvjn w</p>\r\n', '<p>cefavjehqn;coueqaglujivrekfnvoeufgvhjek</p>\r\n', '2020-07-21 14:50:29', 'class.jpg', 'Y'),
(30, 'sfvdfvdvfdvdvdverv', '<p>erfcervcdfve</p>\r\n', '<p>vcefveve</p>\r\n', '2020-07-21 14:49:03', '6-0.jpg', 'Y'),
(31, 'sfbzdbdzgb', '<p><strong>svdbbzdbdzbdbd</strong></p>\r\n', '<p>gdfgdfgdfgdgdgd</p>\r\n', '2020-07-22 22:27:16', 'la.png', 'T'),
(32, 'dkjfhlejfhle', '<p>mejfhefjh</p>\r\n', '<p>mehgd,ejdhe</p>\r\n', '2020-07-24 10:36:43', '6-0.jpg', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_info`
--

CREATE TABLE `tbl_info` (
  `id_info` int(5) NOT NULL,
  `judul` text NOT NULL,
  `desk_singkat` text NOT NULL,
  `detail` text NOT NULL,
  `waktu` datetime NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('T','Y') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_info`
--

INSERT INTO `tbl_info` (`id_info`, `judul`, `desk_singkat`, `detail`, `waktu`, `foto`, `status`) VALUES
(7, 'sfsfs', '<p>sfsfsfs</p>\r\n', '<p>sfsfsf</p>\r\n', '2020-07-03 20:36:18', 'logo2.png', 'Y'),
(8, 'adadadad', '<p>adadadad</p>\r\n', '<p>dadadad</p>\r\n', '2020-07-03 20:55:59', 'hoho.jpg', 'Y'),
(9, 'aaaaaaaaaaaa', '<p>aaaaaaaaaaaa</p>\r\n', '<p>aaaaaaaaaaaa</p>\r\n', '2020-07-03 20:57:22', 'logo1.png', 'Y'),
(10, 'fsfs', '<p>sfsfsf</p>\r\n', '<p>sfsfs</p>\r\n', '2020-07-14 08:44:14', '5.PNG', 'Y'),
(11, 'dfsg', '<p>sgsgsg</p>\r\n', '<p>sgsgs</p>\r\n', '2020-07-14 08:59:15', '5.PNG', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jarak`
--

CREATE TABLE `tbl_jarak` (
  `id_jarak` int(10) NOT NULL,
  `jarak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jarak`
--

INSERT INTO `tbl_jarak` (`id_jarak`, `jarak`) VALUES
(1, '< 1 Km'),
(2, '3-5 Km'),
(3, '5-10 Km'),
(4, '> 10 Km');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenjang`
--

CREATE TABLE `tbl_jenjang` (
  `id_jenjang` int(10) NOT NULL,
  `jenjang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jenjang`
--

INSERT INTO `tbl_jenjang` (`id_jenjang`, `jenjang`) VALUES
(1, 'Kelompok Bermain'),
(2, 'RA (Raudhatul Athfal)'),
(3, 'Langsung dari Orang Tua'),
(4, 'TK (Taman Kanak-kanak)'),
(5, 'PAUD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelompok`
--

CREATE TABLE `tbl_kelompok` (
  `id_kelompok` int(5) NOT NULL,
  `kelompok` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kelompok`
--

INSERT INTO `tbl_kelompok` (`id_kelompok`, `kelompok`) VALUES
(1, 'Kelompok A'),
(2, 'Kelompok B'),
(3, 'Tanpa Kelompok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pendaftaran`
--

CREATE TABLE `tbl_pendaftaran` (
  `id_siswa` int(10) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nama_panggil` varchar(100) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nik_siswa` int(20) NOT NULL,
  `jns_kelamin` enum('L','P') NOT NULL,
  `kelompok` enum('a','b','c') NOT NULL,
  `status_siswa` enum('n','m','s','d') NOT NULL,
  `jml_saudara` varchar(50) NOT NULL,
  `jenjang` enum('1','2','3','4','5') NOT NULL,
  `keterangan` text NOT NULL,
  `alamat` text NOT NULL,
  `jarak` varchar(50) NOT NULL,
  `transportasi` varchar(255) NOT NULL,
  `nmr_kk` int(20) NOT NULL,
  `ayah` varchar(50) NOT NULL,
  `nik_ayah` int(20) NOT NULL,
  `pddk` varchar(100) NOT NULL,
  `nmr_hp` int(20) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pendaftaran`
--

INSERT INTO `tbl_pendaftaran` (`id_siswa`, `nama_lengkap`, `nama_panggil`, `tempat_lahir`, `tgl_lahir`, `nik_siswa`, `jns_kelamin`, `kelompok`, `status_siswa`, `jml_saudara`, `jenjang`, `keterangan`, `alamat`, `jarak`, `transportasi`, `nmr_kk`, `ayah`, `nik_ayah`, `pddk`, `nmr_hp`, `foto`) VALUES
(38, 'zv sfb dgnfhnfdndn', '', '', '2020-06-25', 0, 'P', 'a', 'n', '', '', '', '', '', 'jalan', 0, '', 0, '', 56789, '6-0.jpg'),
(39, 'wsrgvwesgrwg', '', '', '2020-06-25', 0, 'L', 'a', 'n', '', '', '', '', '', 'jalan', 0, '', 0, '', 978675, 'logo2.png'),
(40, 'sfs', '', '', '2020-06-30', 0, 'P', 'a', 'n', '', '', '', '', '', 'jalan', 0, '', 0, '', 87564, 'GUNDAR.jfif'),
(41, 'fgsgdgd', '', '', '2020-07-08', 0, 'L', 'a', 'n', '', '', '', '', '', 'jalan', 0, '', 0, '', 2147483647, 'hoho.jpg'),
(42, 'xvxvx', '', '', '2020-07-29', 0, 'P', 'a', 'n', '', '', '', '', '', 'jalan', 0, '', 0, '', 53353535, '5105bf0f9ece4f5923490dcfe608bf20.jpg'),
(56, 'xgbdbdb', 'dbdgbdb', 'bdbdfbd', '2020-07-15', 535353, 'L', 'c', 'm', '4', '2', 'dbgdgbdb', 'dgdgdg', '3', 'SepedaMotor,AntarJemputSekolah,MobilPribadi,AngkutanUmum', 343535, 'gdgdg', 2147483647, '5', 5535353, '6-0.jpg'),
(57, 'doni', 'doni', 'bekasi', '2020-07-13', 333444242, 'L', 'b', 'n', '1', '2', 'dfgbhdghfhhf', 'bekasi', '1', 'JalanKaki,SepedaMotor,Sepeda', 35363563, 'ayah', 536363, '8', 87654, 'hoho.jpg'),
(58, 'doni', 'doni', 'bekasi', '2020-07-13', 333444242, 'L', 'b', 'n', '1', '2', 'dfgbhdghfhhf', 'bekasi', '1', 'JalanKaki,SepedaMotor,Sepeda,sampan', 35363563, 'ayah', 536363, '8', 87654, 'hoho.jpg'),
(59, 'doni', 'doni', 'bekasi', '2020-07-13', 333444242, 'L', 'b', 'n', '1', '2', 'dfgbhdghfhhf', 'bekasi', '1', 'JalanKaki,SepedaMotor,Sepeda,sampan', 35363563, 'ayah', 536363, '8', 87654, 'hoho.jpg'),
(60, 'doni', 'doni', 'bekasi', '2020-07-13', 333444242, 'L', 'b', 'n', '1', '2', 'dfgbhdghfhhf', 'bekasi', '1', 'Jalan-Kaki,Sepeda,Mobil Pribadi,sampan/lainnya', 35363563, 'ayah', 536363, '8', 87654, 'hoho.jpg'),
(61, 'doni', 'doni', 'bekasi', '2020-07-13', 333444242, 'L', 'b', 'n', '1', '2', 'dfgbhdghfhhf', 'bekasi', '1', 'Jalan-Kaki,Sepeda,Mobil Pribadi,sampan/lainnya', 35363563, 'ayah', 536363, '8', 87654, 'hoho.jpg'),
(62, 'sfsgfg', 'dfgdfgdg', 'dfgdfgd', '2020-07-14', 9876543, 'P', 'c', 'm', '3', '1', 'ggggg', 'gggg', '3', 'Jalan Kaki', 55555, 'hhhh', 5555, '7', 55555, '6-0.jpg'),
(63, 'sfsgfg', 'dfgdfgdg', 'dfgdfgd', '2020-07-14', 9876543, 'P', 'c', 'm', '3', '1', 'ggggg', 'gggg', '3', 'Jalan Kaki,Sepeda Motor,Angkutan Umum', 55555, 'hhhh', 5555, '7', 55555, '6-0.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pendidikan`
--

CREATE TABLE `tbl_pendidikan` (
  `id_pddk` int(10) NOT NULL,
  `pddk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pendidikan`
--

INSERT INTO `tbl_pendidikan` (`id_pddk`, `pddk`) VALUES
(1, '<= SMP'),
(2, 'SMA'),
(3, 'D1'),
(4, 'D2'),
(5, 'D3'),
(6, 'D4'),
(7, 'S1'),
(8, 'S2'),
(9, 'S3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_saudara`
--

CREATE TABLE `tbl_saudara` (
  `id_saudara` int(10) NOT NULL,
  `jml_saudara` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_saudara`
--

INSERT INTO `tbl_saudara` (`id_saudara`, `jml_saudara`) VALUES
(1, '< 2'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '> 5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id_status` int(10) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_status`
--

INSERT INTO `tbl_status` (`id_status`, `status`) VALUES
(1, 'Naik dari Kelas/Tingkat Sebelumnya'),
(2, 'Mengulang Karena Tidak Naik Kelas'),
(3, 'Siswa Baru/Pindah Masuk'),
(4, 'Drop Out kembali');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_operator`);

--
-- Indeks untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indeks untuk tabel `tbl_jarak`
--
ALTER TABLE `tbl_jarak`
  ADD PRIMARY KEY (`id_jarak`);

--
-- Indeks untuk tabel `tbl_jenjang`
--
ALTER TABLE `tbl_jenjang`
  ADD PRIMARY KEY (`id_jenjang`);

--
-- Indeks untuk tabel `tbl_kelompok`
--
ALTER TABLE `tbl_kelompok`
  ADD PRIMARY KEY (`id_kelompok`);

--
-- Indeks untuk tabel `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tbl_pendidikan`
--
ALTER TABLE `tbl_pendidikan`
  ADD PRIMARY KEY (`id_pddk`);

--
-- Indeks untuk tabel `tbl_saudara`
--
ALTER TABLE `tbl_saudara`
  ADD PRIMARY KEY (`id_saudara`);

--
-- Indeks untuk tabel `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_operator` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `id_info` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_jarak`
--
ALTER TABLE `tbl_jarak`
  MODIFY `id_jarak` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_jenjang`
--
ALTER TABLE `tbl_jenjang`
  MODIFY `id_jenjang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelompok`
--
ALTER TABLE `tbl_kelompok`
  MODIFY `id_kelompok` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  MODIFY `id_siswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `tbl_pendidikan`
--
ALTER TABLE `tbl_pendidikan`
  MODIFY `id_pddk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_saudara`
--
ALTER TABLE `tbl_saudara`
  MODIFY `id_saudara` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
