-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 05 Nov 2013 pada 22.29
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_spk_pkli`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `instansi`
--

CREATE TABLE IF NOT EXISTS `instansi` (
  `Id_instansi` int(11) NOT NULL AUTO_INCREMENT,
  `Nama_instansi` varchar(1000) NOT NULL,
  `Jenis_instasni` varchar(1000) NOT NULL,
  `Alamat` text NOT NULL,
  `No_tlp` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`Id_instansi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `instansi`
--

INSERT INTO `instansi` (`Id_instansi`, `Nama_instansi`, `Jenis_instasni`, `Alamat`, `No_tlp`, `email`) VALUES
(11, 'UIN pasca', '1', 'Malang', '0341-2398', 'pasca@yahoo.com'),
(12, 'Gudang Garam', '2', 'Kediri', '0331-2387', 'gudang@yahoo.com'),
(13, 'Diskominfo', '3', 'Malang', '0341-2874', 'kominfo@yahoo.com'),
(14, 'Telkom', '2', 'Malang', '0341-5434', 'telkom@yahoo.com'),
(15, 'Kaskus', '2', 'Jakarta', '021-8738', 'kaskus@yahoo.com'),
(16, 'Pertokimia', '2', 'Gersik', '0651-0895', 'gersik@yahoo.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
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

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `Nama_lengkap`, `Jenis_kelamin`, `Tempat_lahir`, `Tanggal_lahir`, `Nama_orangtua`, `Pekerjaan_orangtua`, `Alamat-orangtua`, `Kota-orangtua`, `Profinsi-orangtua`, `Tahun_masuk`, `Jurusan`, `Pendidikan_terakhir`, `Alamat_dmalang`, `Alamat_asal`, `No_tlp`, `Email`) VALUES
(10650021, 'Lukman', 'laki-laki', 'Banjar', '0000-00-00', 'Budi', 'Pelut', 'Kalimantan', 'Tewe', 'Kalteng', 2010, 'informatika', 'SMA', 'merjosari', 'Kalimantan', 2147483647, 'novianto74@gmail.com'),
(10650032, 'Rizal Furon Ramadhan', 'laki-laki', 'Banjar', '0000-00-00', 'Budi', 'Pelut', 'Kalimantan', 'Tewe', 'Kalteng', 2010, 'informatika', 'SMA', 'merjosari', 'Kalimantan', 2147483647, 'novianto74@gmail.com'),
(10650054, 'Ardi Yulianto', 'laki-laki', 'Banjar', '0000-00-00', 'Budi', 'Pelut', 'Kalimantan', 'Tewe', 'Kalteng', 2010, 'informatika', 'SMA', 'merjosari', 'Kalimantan', 2147483647, 'novianto74@gmail.com'),
(10650056, 'SYAFEI KARIM', 'laki-laki', 'Banjar', '0000-00-00', 'Budi', 'Pelut', 'Kalimantan', 'Tewe', 'Kalteng', 2010, 'informatika', 'SMA', 'merjosari', 'Kalimantan', 2147483647, 'novianto74@gmail.com'),
(10650059, 'Dian Ahkam Sani', 'laki-laki', 'Banjar', '0000-00-00', 'Budi', 'Pelut', 'Kalimantan', 'Tewe', 'Kalteng', 2010, 'informatika', 'SMA', 'merjosari', 'Kalimantan', 2147483647, 'novianto74@gmail.com'),
(10650076, 'Rizky maulidyah', 'laki-laki', 'Banjar', '0000-00-00', 'Budi', 'Pelut', 'Kalimantan', 'Tewe', 'Kalteng', 2010, 'informatika', 'SMA', 'merjosari', 'Kalimantan', 2147483647, 'novianto74@gmail.com'),
(10650088, 'H.Abdul Aziz', 'laki-laki', 'Banjar', '0000-00-00', 'Budi', 'Pelut', 'Kalimantan', 'Tewe', 'Kalteng', 2010, 'informatika', 'SMA', 'merjosari', 'Kalimantan', 2147483647, 'novianto74@gmail.com'),
(10650090, 'Zaenal Abidin', 'laki-laki', 'Banjar', '0000-00-00', 'Budi', 'Pelut', 'Kalimantan', 'Tewe', 'Kalteng', 2010, 'informatika', 'SMA', 'merjosari', 'Kalimantan', 2147483647, 'novianto74@gmail.com'),
(10650098, 'Novi Anto', 'laki-laki', 'Wonogiri', '0000-00-00', 'Nyoto', 'Petani', 'Kalimantan', 'Tewe', 'Kalteng', 2010, 'informatika', 'SMA', 'merjosari', 'Kalimantan', 2147483647, 'novianto74@gmail.com'),
(10650099, 'Agus Cahyono', 'laki-laki', 'Banjar', '0000-00-00', 'Budi', 'Pelut', 'Kalimantan', 'Tewe', 'Kalteng', 2010, 'informatika', 'SMA', 'merjosari', 'Kalimantan', 2147483647, 'novianto74@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE IF NOT EXISTS `matakuliah` (
  `kode_mk` int(7) NOT NULL,
  `nama_mk` varchar(40) NOT NULL,
  `jumlah_sks` int(3) NOT NULL,
  PRIMARY KEY (`kode_mk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`kode_mk`, `nama_mk`, `jumlah_sks`) VALUES
(1, 'Dasar-dasar Pemrogramman', 3),
(2, 'Struktur Data', 3),
(3, 'PBO', 3),
(4, 'Pemrograman Web', 3),
(5, 'Rekayasa Perangkat Lunak', 2),
(6, 'Logika dan Algoritma', 2),
(7, 'Komunikasi Data', 3),
(8, 'Jaringan Komputer', 3),
(9, 'Keamanan Jaringan', 3),
(10, 'Sistem Terdistribusi', 3),
(11, 'Sistem Informasi', 2),
(12, 'Analisis da Perancangan Sistem Informasi', 2),
(13, 'Managemen Proyek Perangkat Lunak', 2),
(14, 'Desain Basis Data', 3),
(15, 'Manajemen Basis Data', 2),
(16, 'Interaksi Manusia dengan Komputer', 2),
(17, 'Grafika Komputer', 2),
(18, 'Pengolahan Suara', 3),
(19, 'Rangkaian Digital', 2),
(20, 'Organisasi Komputer', 3),
(21, 'Sistem Operasi', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `NIM` int(8) NOT NULL,
  `kode_mk` int(7) NOT NULL,
  `Nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`NIM`, `kode_mk`, `Nilai`) VALUES
(10650090, 1, 3.5),
(10650090, 2, 2.5),
(10650090, 3, 3),
(10650090, 4, 4),
(10650090, 5, 3.5),
(10650090, 6, 4),
(10650090, 7, 3),
(10650090, 8, 3.5),
(10650090, 9, 3.5),
(10650090, 10, 3.5),
(10650090, 11, 3.5),
(10650090, 12, 3.5),
(10650090, 13, 3.5),
(10650090, 14, 4),
(10650090, 15, 3.5),
(10650090, 16, 3.5),
(10650090, 17, 3.5),
(10650090, 18, 2.5),
(10650090, 19, 3),
(10650090, 20, 3),
(10650090, 21, 3),
(10650059, 1, 3.5),
(10650059, 2, 3.5),
(10650059, 3, 2.5),
(10650059, 4, 4),
(10650059, 5, 3),
(10650059, 6, 4),
(10650059, 7, 3),
(10650059, 8, 3.5),
(10650059, 9, 3.5),
(10650059, 10, 3),
(10650059, 11, 4),
(10650059, 12, 3.5),
(10650059, 13, 3),
(10650059, 14, 4),
(10650059, 15, 3.5),
(10650059, 16, 3.5),
(10650059, 17, 4),
(10650059, 18, 3),
(10650059, 19, 3.5),
(10650059, 20, 3.5),
(10650059, 21, 2.5),
(10650032, 1, 3.5),
(10650032, 2, 2.5),
(10650032, 3, 2.5),
(10650032, 4, 4),
(10650032, 5, 3.5),
(10650032, 6, 3.5),
(10650032, 7, 3.5),
(10650032, 8, 3.5),
(10650032, 9, 4),
(10650032, 10, 3.5),
(10650032, 11, 4),
(10650032, 12, 3.5),
(10650032, 13, 3),
(10650032, 14, 4),
(10650032, 15, 3),
(10650032, 16, 3.5),
(10650032, 17, 3),
(10650032, 18, 3.5),
(10650032, 19, 4),
(10650032, 20, 3.5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta_pkli`
--

CREATE TABLE IF NOT EXISTS `peserta_pkli` (
  `Id_peserta` int(11) NOT NULL,
  `Id_program` int(11) NOT NULL,
  `NIM` int(11) NOT NULL,
  PRIMARY KEY (`Id_peserta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_pkli`
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
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `Level` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `Level`, `status`) VALUES
(0, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1),
(1, '10650098', '440fd2e411f3d109aec0b326666161a7', 'mahasiwa', 1),
(2, '10650090', '2b9f66b976f57014b966752edbfa7b6c', 'mahasiswa', 1),
(10, 'aneh', 'd41d8cd98f00b204e9800998ecf8427e', 'instansi', 0),
(11, 'pasca', 'f92e65c0ea92747a7b86fd6fd6c4efcc', 'instansi', 0),
(12, 'gudang', '202446dd1d6028084426867365b0c7a1', 'instansi', 0),
(13, 'dis', '4cdf5a25d4673bfc4546ca7843071f65', 'instansi', 0),
(14, 'telkom', 'a2ed39c417316adbd5cd1d0211a5d711', 'instansi', 0),
(15, 'kaskus', 'cc689fce639ab2aa69fe308cda19b703', 'instansi', 0),
(16, 'gersik', 'ec4a2276e0caa8ca3b940df82dcb0568', 'instansi', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
