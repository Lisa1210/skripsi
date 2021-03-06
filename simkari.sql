-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 14, 2019 at 12:25 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simkari`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang_bukti`
--

CREATE TABLE IF NOT EXISTS `barang_bukti` (
  `No_Regis` varchar(20) NOT NULL,
  `namabarangbukti` varchar(30) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `satuan` int(20) NOT NULL,
  `pemilik` varchar(50) NOT NULL,
  `tgl_eksekusi` date NOT NULL,
  PRIMARY KEY (`No_Regis`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_bukti`
--

INSERT INTO `barang_bukti` (`No_Regis`, `namabarangbukti`, `jumlah`, `satuan`, `pemilik`, `tgl_eksekusi`) VALUES
('sfs', 'fs', 0, 0, 'sfgs', '2019-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `eksekusi`
--

CREATE TABLE IF NOT EXISTS `eksekusi` (
  `id_tersangka` int(11) NOT NULL AUTO_INCREMENT,
  `Nama_jaksa` varchar(50) NOT NULL,
  `putusan` varchar(20) NOT NULL,
  `amar_putusan` varchar(20) NOT NULL,
  `masa_percobaan` varchar(20) NOT NULL,
  `pidana_badan` varchar(20) NOT NULL,
  `denda` int(20) NOT NULL,
  `biaya perkara` int(20) NOT NULL,
  PRIMARY KEY (`id_tersangka`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `eksekusi`
--

INSERT INTO `eksekusi` (`id_tersangka`, `Nama_jaksa`, `putusan`, `amar_putusan`, `masa_percobaan`, `pidana_badan`, `denda`, `biaya perkara`) VALUES
(1, 'sca', 'da', 'da', 'ad', 'asd', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hasil_dinas`
--

CREATE TABLE IF NOT EXISTS `hasil_dinas` (
  `id_tersangka` int(11) NOT NULL AUTO_INCREMENT,
  `hasil_dinas` varchar(50) NOT NULL,
  `setor` int(20) NOT NULL,
  `no_ssbp` int(20) NOT NULL,
  `tanggal_setor` date NOT NULL,
  `amar_putusan` varchar(20) NOT NULL,
  PRIMARY KEY (`id_tersangka`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hasil_dinas`
--

INSERT INTO `hasil_dinas` (`id_tersangka`, `hasil_dinas`, `setor`, `no_ssbp`, `tanggal_setor`, `amar_putusan`) VALUES
(1, 'DFA', 0, 0, '0000-00-00', 'SFD');

-- --------------------------------------------------------

--
-- Table structure for table `jaksa`
--

CREATE TABLE IF NOT EXISTS `jaksa` (
  `id_jaksa` int(11) NOT NULL,
  `Nama_jaksa` varchar(50) NOT NULL,
  `NIP` varchar(20) NOT NULL,
  `Jabatan` varchar(20) NOT NULL,
  `golongan` varchar(20) NOT NULL,
  PRIMARY KEY (`id_jaksa`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jaksa`
--

INSERT INTO `jaksa` (`id_jaksa`, `Nama_jaksa`, `NIP`, `Jabatan`, `golongan`) VALUES
(0, 'adfa', 'dfaf', 'daa', 'dfaa');

-- --------------------------------------------------------

--
-- Table structure for table `penahanan`
--

CREATE TABLE IF NOT EXISTS `penahanan` (
  `id_tersangka` int(11) NOT NULL,
  `penahanan_penyidik` varchar(20) NOT NULL,
  `penahanan_kejari` varchar(20) NOT NULL,
  `penahanan_JPU` varchar(20) NOT NULL,
  `penahanan_MH` varchar(20) NOT NULL,
  `penahanan_PN` varchar(20) NOT NULL,
  PRIMARY KEY (`id_tersangka`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penahanan`
--

INSERT INTO `penahanan` (`id_tersangka`, `penahanan_penyidik`, `penahanan_kejari`, `penahanan_JPU`, `penahanan_MH`, `penahanan_PN`) VALUES
(0, 'A', 'D', 'D', 'D', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `penuntut`
--

CREATE TABLE IF NOT EXISTS `penuntut` (
  `id_jaksa` int(11) NOT NULL,
  `Nama_jaksa` varchar(20) NOT NULL,
  `No_regis` date NOT NULL,
  `No_Tanggal Penerimaan BB` date NOT NULL,
  PRIMARY KEY (`id_jaksa`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penuntut`
--

INSERT INTO `penuntut` (`id_jaksa`, `Nama_jaksa`, `No_regis`, `No_Tanggal Penerimaan BB`) VALUES
(0, 'DFAD', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `pra penuntut`
--

CREATE TABLE IF NOT EXISTS `pra penuntut` (
  `id_jaksa` int(11) NOT NULL,
  `Hasil_konsultasi` varchar(50) NOT NULL,
  `Isi_Konsultasi` varchar(50) NOT NULL,
  `P_17` varchar(20) NOT NULL,
  `P_18` varchar(30) NOT NULL,
  `isipetunjuk` varchar(30) NOT NULL,
  `P_22` varchar(30) NOT NULL,
  `P_21` varchar(30) NOT NULL,
  `Penyelesaia` varchar(30) NOT NULL,
  PRIMARY KEY (`id_jaksa`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pra penuntut`
--

INSERT INTO `pra penuntut` (`id_jaksa`, `Hasil_konsultasi`, `Isi_Konsultasi`, `P_17`, `P_18`, `isipetunjuk`, `P_22`, `P_21`, `Penyelesaia`) VALUES
(0, 'sfg', 'fs', 'fsggg', 'fg', 'fs', 'fsg', 'fsg', 'fss');

-- --------------------------------------------------------

--
-- Table structure for table `tersangka`
--

CREATE TABLE IF NOT EXISTS `tersangka` (
  `id_tersangka` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tersangka` varchar(50) NOT NULL,
  `TTL` date NOT NULL,
  `jk` varchar(12) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `pasal_tersangka` varchar(30) NOT NULL,
  PRIMARY KEY (`id_tersangka`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tersangka`
--

INSERT INTO `tersangka` (`id_tersangka`, `nama_tersangka`, `TTL`, `jk`, `agama`, `alamat`, `pekerjaan`, `status`, `pasal_tersangka`) VALUES
(1, 'fvds', '2019-05-09', 'dsf', 'sdf', 'dfag', 'gad', 'agfa', 'fga'),
(2, 'sa', '2019-05-11', 'sadad', 'dasa', 'dsaas', 'sdada', 'dassa', 'asdadsa');

-- --------------------------------------------------------

--
-- Table structure for table `upaya_hukum`
--

CREATE TABLE IF NOT EXISTS `upaya_hukum` (
  `NIP` varchar(20) NOT NULL,
  `id_jaksa` int(11) NOT NULL,
  `Jabatan` varchar(20) NOT NULL,
  `Golongan` varchar(20) NOT NULL,
  `nama tersangka` varchar(50) NOT NULL,
  PRIMARY KEY (`NIP`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upaya_hukum`
--

INSERT INTO `upaya_hukum` (`NIP`, `id_jaksa`, `Jabatan`, `Golongan`, `nama tersangka`) VALUES
('fgs', 0, 'fs', 'gfs', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '123'),
(2, 'user', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
