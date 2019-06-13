-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 13, 2019 at 08:15 AM
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
  `satuan` int(20) NOT NULL,
  `pemilik` varchar(50) NOT NULL,
  `tgl_eksekusi` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_bukti`
--

INSERT INTO `barang_bukti` (`id`, `No_regis`, `namabarangbukti`, `jumlah`, `satuan`, `pemilik`, `tgl_eksekusi`) VALUES
(1, '7984792472 AAA', 'fs AAA', 100, 200, 'sfgs AAA', '2019-05-21'),
(3, '98698689', 'Anto', 8, 7, 'sfiufusv', '2019-06-13');

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eksekusi`
--

INSERT INTO `eksekusi` (`id`, `id_jaksa`, `id_tersangka`, `putusan`, `amar_putusan`, `masa_percobaan`, `pidana_badan`, `denda`, `biaya_perkara`) VALUES
(1, 2, 4, 'daA', 'daaa', 'adaa', 'asdaa', 100009, 50009);

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_dinas`
--

INSERT INTO `hasil_dinas` (`id`, `id_tersangka`, `hasil_dinas`, `setor`, `no_ssbp`, `tanggal_setor`, `amar_putusan`) VALUES
(1, 3, 'DFAA', 10, 2223, '2019-06-13', 'SFDA');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jaksa`
--

INSERT INTO `jaksa` (`id_jaksa`, `Nama_jaksa`, `NIP`, `Jabatan`, `golongan`) VALUES
(2, 'nisa sabyan', '69886986 9999', 'Jaksa Utama', 'IV/a'),
(3, 'budi', '798798789', 'Jaksa Madya', 'III/b');

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penahanan`
--

INSERT INTO `penahanan` (`id`, `id_tersangka`, `penahanan_penyidik`, `penahanan_kejari`, `penahanan_JPU`, `penahanan_MH`, `penahanan_PN`) VALUES
(1, 4, 'AA', 'DD', 'Dd', 'Dd', 'Dd');

-- --------------------------------------------------------

--
-- Table structure for table `penuntut`
--

CREATE TABLE IF NOT EXISTS `penuntut` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `No_regis` varchar(200) NOT NULL,
  `No_tanggal` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penuntut`
--

INSERT INTO `penuntut` (`id`, `nama`, `No_regis`, `No_tanggal`) VALUES
(2, 'Yanto', '678875587', '2019-06-20'),
(3, 'Agus', '69869868698', '2019-06-13');

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pra_penuntut`
--

INSERT INTO `pra_penuntut` (`id_pra`, `id_jaksa`, `Hasil_konsultasi`, `Isi_Konsultasi`, `P_17`, `P_18`, `isipetunjuk`, `P_21`, `P_22`, `Penyelesai`) VALUES
(2, 2, 'sfg Aaaa', 'fs 000', 'fsggg aaa', 'fg aaa', 'fs aaa', 'fsg aaa', 'fsg  aaa', 'fss aaa');

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tersangka`
--

INSERT INTO `tersangka` (`id_tersangka`, `nama_tersangka`, `tempat_lahir`, `TTL`, `jk`, `agama`, `alamat`, `pekerjaan`, `status`, `pasal_tersangka`) VALUES
(3, 'Agus', 'Banjarmasin', '2019-06-13', 'Laki-Laki', 'Islam', 'Banjarbaru', 'Swasta', 'belum pernah dihukum', '21'),
(4, 'Yanto Aja', 'Banjarbaru Selatan', '2019-06-13', 'Laki-Laki', 'Islam', 'Banjarmasin', 'Swasta', 'pernah dihukum', '212');

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upaya_hukum`
--

INSERT INTO `upaya_hukum` (`id`, `NIP`, `id_jaksa`, `Jabatan`, `golongan`, `id_tersangka`) VALUES
(1, '424692', 2, 'Ajun Jaksa', 'III/b', 4);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `eksekusi`
--
ALTER TABLE `eksekusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hasil_dinas`
--
ALTER TABLE `hasil_dinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jaksa`
--
ALTER TABLE `jaksa`
  MODIFY `id_jaksa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `penahanan`
--
ALTER TABLE `penahanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `penuntut`
--
ALTER TABLE `penuntut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pra_penuntut`
--
ALTER TABLE `pra_penuntut`
  MODIFY `id_pra` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tersangka`
--
ALTER TABLE `tersangka`
  MODIFY `id_tersangka` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `upaya_hukum`
--
ALTER TABLE `upaya_hukum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
