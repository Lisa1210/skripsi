-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 16, 2019 at 07:59 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `_www.kejaksaan-kapuas.com`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang_bukti`
--

CREATE TABLE IF NOT EXISTS `barang_bukti` (
  `id` int(11) NOT NULL,
  `No_regis` varchar(200) NOT NULL,
  `namabarangbukti` varchar(30) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `satuan` varchar(200) NOT NULL,
  `pemilik` varchar(50) NOT NULL,
  `tgl_eksekusi` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_bukti`
--

INSERT INTO `barang_bukti` (`id`, `No_regis`, `namabarangbukti`, `jumlah`, `satuan`, `pemilik`, `tgl_eksekusi`) VALUES
(1, 'BB987897798', 'Senjata Tajam', 1, 'buah', 'Agus', '2019-06-13'),
(3, 'BB587897711', 'Sabu-sabu', 2, 'Gram', 'Yanto', '2019-06-13'),
(4, 'BB587897719', 'Ganja', 10, 'Kg', 'Kristian', '2019-07-14'),
(5, 'BB887897713', 'Handphone', 18, 'Box', 'Nurdi', '2019-06-26'),
(6, 'BB587897714', 'Sepatu', 6, 'Pasang', 'Agus', '2019-06-11'),
(7, 'BB887896513', 'Senjata Tajam', 1, 'Buah', 'Yusman', '2019-05-31'),
(8, 'BB887846513', 'Sabu-sabu', 40, 'Gram', 'Yusma', '2019-07-08'),
(9, 'BB114846513', 'Sabu-sabu', 2, 'Kg', 'Bagus', '2019-05-14'),
(10, 'BB587891719', 'Senjata Tajam', 2, 'Buah', 'Anto', '2019-05-27'),
(11, 'BB114811313', 'TV', 1, 'Set', 'Budi', '2019-05-21'),
(12, 'BB587897724', 'Sabu-sabu', 13, 'Gram', 'Nurdi', '2019-06-07'),
(13, 'BB587898714', 'Senjata Tajam', 6, 'Box', 'Yanto', '2019-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `eksekusi`
--

CREATE TABLE IF NOT EXISTS `eksekusi` (
  `id` int(11) NOT NULL,
  `id_jaksa` int(11) NOT NULL,
  `id_tersangka` int(11) NOT NULL,
  `putusan` varchar(20) NOT NULL,
  `amar_putusan` varchar(20) NOT NULL,
  `masa_percobaan` varchar(20) NOT NULL,
  `pidana_badan` varchar(20) NOT NULL,
  `denda` int(20) NOT NULL,
  `biaya_perkara` int(20) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eksekusi`
--

INSERT INTO `eksekusi` (`id`, `id_jaksa`, `id_tersangka`, `putusan`, `amar_putusan`, `masa_percobaan`, `pidana_badan`, `denda`, `biaya_perkara`) VALUES
(1, 2, 4, 'Terdakwa', 'Terdakwa', '5 Tahun', 'Tidak', 10000000, 10000),
(3, 3, 8, 'Terdakwa', 'Terdakwa', '15 Tahun', 'Ya', 30000000, 1000000),
(4, 6, 11, 'Terdakwa', 'Terdakwa', '5 Tahun', 'Tidak', 10000000, 140000);

-- --------------------------------------------------------

--
-- Table structure for table `hasil_dinas`
--

CREATE TABLE IF NOT EXISTS `hasil_dinas` (
  `id` int(11) NOT NULL,
  `id_tersangka` int(11) NOT NULL,
  `hasil_dinas` varchar(50) NOT NULL,
  `setor` int(20) NOT NULL,
  `no_ssbp` int(20) NOT NULL,
  `tanggal_setor` date NOT NULL,
  `amar_putusan` varchar(20) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_dinas`
--

INSERT INTO `hasil_dinas` (`id`, `id_tersangka`, `hasil_dinas`, `setor`, `no_ssbp`, `tanggal_setor`, `amar_putusan`) VALUES
(1, 3, 'Hasil Didakwa', 10000, 987879, '2019-06-13', 'Terdakwa'),
(3, 8, 'Hasil Didakwa', 10000, 1180909, '2019-06-17', 'Terdakwa'),
(4, 6, 'Hasil Didakwa', 13000, 31314, '2019-06-24', 'Terdakwa'),
(5, 12, 'Hasil Didakwa', 10000, 987879, '2019-05-02', 'Terdakwa'),
(6, 12, 'Hasil Didakwa', 10000, 987879, '2019-07-01', 'Terdakwa');

-- --------------------------------------------------------

--
-- Table structure for table `jaksa`
--

CREATE TABLE IF NOT EXISTS `jaksa` (
  `id_jaksa` int(11) NOT NULL,
  `Nama_jaksa` varchar(50) NOT NULL,
  `NIP` varchar(20) NOT NULL,
  `Jabatan` varchar(20) NOT NULL,
  `golongan` varchar(20) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jaksa`
--

INSERT INTO `jaksa` (`id_jaksa`, `Nama_jaksa`, `NIP`, `Jabatan`, `golongan`) VALUES
(2, 'nisa munajat', '69698698689', 'Jaksa Utama', 'IV/a'),
(3, 'budi Saputra', '79879878998', 'Jaksa Madya', 'III/b'),
(4, 'Karni Budi', '78698686989', 'Jaksa Muda', 'III/c'),
(5, 'Mukhtar Cortes', '79866666988', 'Jaksa Madya', 'IV/c'),
(6, 'Helmy Anwar', '58986898888', 'Jaksa Utama', 'IV/e');

-- --------------------------------------------------------

--
-- Table structure for table `penahanan`
--

CREATE TABLE IF NOT EXISTS `penahanan` (
  `id` int(11) NOT NULL,
  `id_tersangka` int(11) NOT NULL,
  `penahanan_penyidik` varchar(20) NOT NULL,
  `penahanan_kejari` varchar(20) NOT NULL,
  `penahanan_JPU` varchar(20) NOT NULL,
  `penahanan_MH` varchar(20) NOT NULL,
  `penahanan_PN` varchar(20) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penahanan`
--

INSERT INTO `penahanan` (`id`, `id_tersangka`, `penahanan_penyidik`, `penahanan_kejari`, `penahanan_JPU`, `penahanan_MH`, `penahanan_PN`) VALUES
(1, 3, 'A', 'D', 'D', 'D', 'D'),
(3, 4, 'A', 'D', 'A', 'D', 'D'),
(4, 5, 'A', 'A', 'A', 'D', 'D'),
(5, 6, 'A', 'D', 'D', 'D', 'D'),
(6, 7, 'D', 'D', 'A', 'A', 'A'),
(7, 8, 'E', 'E', 'E', 'A', 'D'),
(8, 7, 'D', 'E', 'A', 'A', 'D'),
(9, 12, 'E', 'D', 'E', 'E', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `penuntut`
--

CREATE TABLE IF NOT EXISTS `penuntut` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `No_regis` varchar(200) NOT NULL,
  `No_tanggal` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penuntut`
--

INSERT INTO `penuntut` (`id`, `nama`, `No_regis`, `No_tanggal`) VALUES
(4, 'Nisa', '19869868698', '2019-06-17'),
(2, 'Yanto', '67887558789', '2019-06-20'),
(3, 'Agus', '69869868698', '2019-06-13'),
(5, 'Umar', '69869111698', '2019-06-17'),
(6, 'Sona', '11869868698', '2019-06-17'),
(7, 'Sabrina', '16965768698', '2019-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `pra_penuntut`
--

CREATE TABLE IF NOT EXISTS `pra_penuntut` (
  `id_pra` int(11) NOT NULL,
  `id_jaksa` int(11) NOT NULL,
  `Hasil_konsultasi` varchar(50) NOT NULL,
  `Isi_Konsultasi` varchar(50) NOT NULL,
  `P_17` varchar(20) NOT NULL,
  `P_18` varchar(30) NOT NULL,
  `isipetunjuk` varchar(30) NOT NULL,
  `P_21` varchar(30) NOT NULL,
  `P_22` varchar(30) NOT NULL,
  `Penyelesai` varchar(30) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pra_penuntut`
--

INSERT INTO `pra_penuntut` (`id_pra`, `id_jaksa`, `Hasil_konsultasi`, `Isi_Konsultasi`, `P_17`, `P_18`, `isipetunjuk`, `P_21`, `P_22`, `Penyelesai`) VALUES
(2, 3, 'Ditolak', 'Ditindak Lanjuti', 'Ya', 'Tidak', 'Ditindak Lanjuti', 'Tidak', 'Tidak', 'Budi'),
(3, 4, 'Diterima', 'Tambahan Bukti', 'Tidak', 'Tidak', 'Dilengkapi', 'Ya', 'Tidak', 'Budi'),
(4, 2, 'Ditolak', 'Ditindak Lanjuti', 'Tidak', 'Tidak', 'Ditindak Lanjuti', 'Ya', 'Tidak', 'Nisa'),
(5, 5, 'Sidang Lanjut', 'Proses Tahap Lanjut', 'Tidak', 'Tidak', 'Ditindak Lanjuti', 'Ya', 'Ya', 'Mukhtar'),
(6, 6, 'Ditolak', 'Tambahan Bukti', 'Tidak', 'Tidak', 'Ditindak Lanjuti', 'Tidak', 'Ya', 'Anwar'),
(7, 5, 'Diterima', 'Proses Tahap Lanjut', 'Tidak', 'Tidak', 'Ditindak Lanjuti', 'Ya', 'Tidak', 'Mukhtar'),
(8, 2, 'Sidang Lanjut', 'Proses Tahap Lanjut', 'Tidak', 'Ya', 'Ditindak Lanjuti', 'Tidak', 'Ya', 'Nisa');

-- --------------------------------------------------------

--
-- Table structure for table `tersangka`
--

CREATE TABLE IF NOT EXISTS `tersangka` (
  `id_tersangka` int(11) NOT NULL,
  `nama_tersangka` varchar(50) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `TTL` date NOT NULL,
  `jk` varchar(12) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `pasal_tersangka` varchar(30) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tersangka`
--

INSERT INTO `tersangka` (`id_tersangka`, `nama_tersangka`, `tempat_lahir`, `TTL`, `jk`, `agama`, `alamat`, `pekerjaan`, `status`, `pasal_tersangka`) VALUES
(3, 'Agus', 'Banjarmasin', '1999-06-13', 'Laki-Laki', 'Islam', 'Banjarbaru', 'Swasta', 'belum pernah dihukum', '21'),
(4, 'Yanto', 'Banjarbaru', '1981-06-13', 'Laki-Laki', 'Islam', 'Banjarmasin', 'Swasta', 'pernah dihukum', '22'),
(5, 'Nisa', 'Banjarmasin', '1991-08-09', 'Perempuan', 'Islam', 'Martapura', 'Swasta', 'belum pernah dihukum', '21'),
(6, 'Budi', 'Banjarmasin', '1996-06-17', 'Laki-Laki', 'Islam', 'Banjarbaru', 'PNS', 'belum pernah dihukum', '22'),
(7, 'Saidi', 'HSU', '1988-06-17', 'Laki-Laki', 'Islam', 'Banjarmasin', 'Swasta', 'pernah dihukum', '22'),
(8, 'Kristian', 'Kapuas', '1999-06-24', 'Laki-Laki', 'Kristen', 'Banjarmasin', 'Swasta', 'pernah dihukum', '21'),
(9, 'Sabrina', 'Banjarmasin', '1987-06-24', 'Perempuan', 'Islam', 'Martapura', 'PNS', 'belum pernah dihukum', '21'),
(10, 'Budi', 'Tanah Bumbu', '1989-06-17', 'Laki-Laki', 'Kristen', 'Tanah Bumbu', 'Swasta', 'pernah dihukum', '17'),
(11, 'Bagas', 'Banjarmasin', '1998-06-24', 'Laki-Laki', 'Islam', 'Banjarmasin', 'PNS', 'belum pernah dihukum', '18'),
(12, 'Yusma', 'Banjarmasin', '1994-06-24', 'Perempuan', 'Islam', 'Martapura', 'Swasta', 'belum pernah dihukum', '18'),
(13, 'Nurdi', 'Banjarmasin', '1990-06-24', 'Laki-Laki', 'Islam', 'Banjarmasin', 'Swasta', 'pernah dihukum', '22');

-- --------------------------------------------------------

--
-- Table structure for table `upaya_hukum`
--

CREATE TABLE IF NOT EXISTS `upaya_hukum` (
  `id` int(11) NOT NULL,
  `NIP` varchar(200) NOT NULL,
  `id_jaksa` int(11) NOT NULL,
  `Jabatan` varchar(20) NOT NULL,
  `golongan` varchar(20) NOT NULL,
  `id_tersangka` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upaya_hukum`
--

INSERT INTO `upaya_hukum` (`id`, `NIP`, `id_jaksa`, `Jabatan`, `golongan`, `id_tersangka`) VALUES
(1, '3131441', 2, 'Jaksa Pratama', 'III/b', 4),
(3, '1313134', 4, 'Jaksa Muda', 'IV/a', 4),
(4, '3464772', 4, 'Ajun Jaksa', 'III/a', 6),
(5, '3134516', 5, 'Jaksa Madya', 'IV/c', 8),
(6, '3777798', 5, 'Jaksa Pratama', 'III/b', 9),
(7, '9695875', 6, 'Ajun Jaksa', 'III/b', 13);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70'),
(2, 'user', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang_bukti`
--
ALTER TABLE `barang_bukti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eksekusi`
--
ALTER TABLE `eksekusi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_dinas`
--
ALTER TABLE `hasil_dinas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jaksa`
--
ALTER TABLE `jaksa`
  ADD PRIMARY KEY (`id_jaksa`);

--
-- Indexes for table `penahanan`
--
ALTER TABLE `penahanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penuntut`
--
ALTER TABLE `penuntut`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pra_penuntut`
--
ALTER TABLE `pra_penuntut`
  ADD PRIMARY KEY (`id_pra`);

--
-- Indexes for table `tersangka`
--
ALTER TABLE `tersangka`
  ADD PRIMARY KEY (`id_tersangka`);

--
-- Indexes for table `upaya_hukum`
--
ALTER TABLE `upaya_hukum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang_bukti`
--
ALTER TABLE `barang_bukti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `eksekusi`
--
ALTER TABLE `eksekusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hasil_dinas`
--
ALTER TABLE `hasil_dinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jaksa`
--
ALTER TABLE `jaksa`
  MODIFY `id_jaksa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `penahanan`
--
ALTER TABLE `penahanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `penuntut`
--
ALTER TABLE `penuntut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pra_penuntut`
--
ALTER TABLE `pra_penuntut`
  MODIFY `id_pra` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tersangka`
--
ALTER TABLE `tersangka`
  MODIFY `id_tersangka` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `upaya_hukum`
--
ALTER TABLE `upaya_hukum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
