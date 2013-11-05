-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2013 at 02:00 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_spk_pkli`
--

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE IF NOT EXISTS `instansi` (
  `Id_instansi` int(11) NOT NULL,
  `Nama_instansi` varchar(1000) NOT NULL,
  `Jenis_instasni` varchar(1000) NOT NULL,
  `Lain_lain` varchar(1000) NOT NULL,
  `Alamat` text NOT NULL,
  `No_tlp` int(11) NOT NULL,
  PRIMARY KEY (`Id_instansi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `NIM` int(11) NOT NULL,
  `Nama_lengkap` varchar(1000) NOT NULL,
  `Jenis_kelamin` varchar(100) NOT NULL,
  `Tempat_lahir` varchar(100) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Nama_orangtua` varchar(100) NOT NULL,
  `Pekerjaan_orangtua` varchar(100) NOT NULL,
  `Alamat-orangtua` text NOT NULL,
  `Kota-orangtua` varchar(100) NOT NULL,
  `Profinsi-orangtua` varchar(100) NOT NULL,
  `Tahun_masuk` int(11) NOT NULL,
  `Jurusan` varchar(100) NOT NULL,
  `Pendidikan_terakhir` text NOT NULL,
  `Alamat_dmalang` text NOT NULL,
  `Alamat_asal` text NOT NULL,
  `No_tlp` int(100) NOT NULL,
  `Email` text NOT NULL,
  PRIMARY KEY (`NIM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peserta_pkli`
--

CREATE TABLE IF NOT EXISTS `peserta_pkli` (
  `Id_peserta` int(11) NOT NULL,
  `Id_program` int(11) NOT NULL,
  `NIM` int(11) NOT NULL,
  PRIMARY KEY (`Id_peserta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `program_pkli`
--

CREATE TABLE IF NOT EXISTS `program_pkli` (
  `Id_program_pkli` int(11) NOT NULL,
  `Id_instansi` int(11) NOT NULL,
  `Bidang Keahlian` varchar(100) NOT NULL,
  `Jumlah_peserta` int(11) NOT NULL,
  `Waktu_pelaksanaan` varchar(100) NOT NULL,
  PRIMARY KEY (`Id_program_pkli`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `Level` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
