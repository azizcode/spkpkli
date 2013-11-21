-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 22 Nov 2013 pada 00.49
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
-- Struktur dari tabel `bidang_keahlian`
--

CREATE TABLE IF NOT EXISTS `bidang_keahlian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NIM` int(11) NOT NULL,
  `bidang_keahlian` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `bidang_keahlian`
--

INSERT INTO `bidang_keahlian` (`id`, `NIM`, `bidang_keahlian`) VALUES
(15, 10650098, '1;2'),
(16, 10650090, '1;2');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data untuk tabel `instansi`
--

INSERT INTO `instansi` (`Id_instansi`, `Nama_instansi`, `Jenis_instasni`, `Alamat`, `No_tlp`, `email`) VALUES
(11, 'UIN pasca', '1', 'Malang', '0341-2398', 'pasca@yahoo.com'),
(12, 'Gudang Garam', '2', 'Kediri', '0331-2387', 'gudang@yahoo.com'),
(13, 'Diskominfo', '3', 'Malang', '0341-2874', 'kominfo@yahoo.com'),
(14, 'Telkom', '2', 'Malang', '0341-5434', 'telkom@yahoo.com'),
(15, 'Kaskus', '2', 'Jakarta', '021-8738', 'kaskus@yahoo.com'),
(16, 'Pertokimia', '2', 'Gersik', '0651-0895', 'gersik@yahoo.com'),
(24, 'pt.bentoel', '2', 'Malang', '0341-74446754', 'bentoel@gmail.com'),
(25, 'google', '2', 'jakarta', '021-65498', 'google@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
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
  PRIMARY KEY (`id_mahasiswa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `NIM`, `Nama_lengkap`, `Jenis_kelamin`, `Tempat_lahir`, `Tanggal_lahir`, `Nama_orangtua`, `Pekerjaan_orangtua`, `Alamat-orangtua`, `Kota-orangtua`, `Profinsi-orangtua`, `Tahun_masuk`, `Jurusan`, `Pendidikan_terakhir`, `Alamat_dmalang`, `Alamat_asal`, `No_tlp`, `Email`) VALUES
(8, 10650090, 'Zaenal Abidin', 'laki-laki', 'Jember', '1990-11-04', 'Abidin', 'Guru', 'Jember', 'Jember', 'Jatim', 2010, 'informatika', 'SMA', 'Metro', 'Jember', 8765432, 'Zaenal@gmail.com'),
(9, 10650098, 'Novi Anto', 'laki-laki', 'Wonogiri', '1992-11-11', 'Nyoto', 'Petani', 'Kalimantan', 'Tewe', 'Kalteng', 2010, 'informatika', 'SMA', 'merjosari', 'Kalimantan', 2147483647, 'novianto74@gmail.com'),
(17, 10650021, 'Lukman', 'laki-laki', 'Madura', '1993-02-02', 'Anjas', 'Bupati', 'Madura', 'Madura', 'Jawa Timur', 2010, 'informatika', 'SMA', 'sawojajar', 'Madura', 98564309, 'lukmananjas@gmail.com'),
(18, 10650032, 'Rizal Furon Ramadhan', 'laki-laki', 'Bali', '1993-09-02', 'Furqon', 'Dosen', 'Bali', 'Bali', 'Bali', 2010, 'informatika', 'SMA', 'Sumber sari', 'Bali', 98742898, 'Furqon@gmail.com'),
(19, 10650054, 'Ardi Yulianto', 'laki-laki', 'Lumajang', '1992-08-05', 'yulianto', 'Programmer', 'Lumajang', 'Lumajang', 'Jawa Timur', 2010, 'informatika', 'SMA', 'Metro', 'Lumajang', 87321465, 'ardiyulianto@gmail.com'),
(20, 10650056, 'Syfei Karim', 'laki-laki', 'Samarinda', '1992-02-04', 'Karim', 'Dosen', 'Kalimantan', 'Samarinda', 'Kaltim', 2010, 'informatika', 'SMA', 'merjosari', 'Kalimantan', 76239067, 'syfeikarim@gmail.com'),
(21, 10650059, 'Dian Ahkam Sani', 'laki-laki', 'Bali', '1992-09-02', 'Ahkam', 'Seniman', 'Bali', 'Bali', 'Bali', 2010, 'informatika', 'MAN', 'merjosari', 'BALI', 9878435, 'dianahkam@gmail.com'),
(22, 10650076, 'Rizky maulidyah', 'Perempuan', 'Lamongan', '1994-01-01', 'Rizky', 'Pengusaha', 'Lamongan', 'Lamongan', 'Jawa Timur', 2010, 'informatika', 'MAN', 'Sumbersari', 'lamongan', 76543987, 'maulidya@gmail.com'),
(23, 10650088, 'H.Abdul Aziz', 'laki-laki', 'Banjar', '1992-09-09', 'AZIZ', 'Programmer', 'Kalimantan', 'Banjar', 'Kalsel', 2010, 'informatika', 'SMA', 'Metro', 'Kalimantan', 54673821, 'aziz@gmail.com'),
(26, 10650099, 'Agus Cahyono', 'laki-laki', 'Lumajang', '1992-09-12', 'Andi', 'Bupati', 'Lumajang', 'Lumajang', 'Jawa Timur', 2010, 'informatika', 'SMA', 'Metro', 'Kalimantan', 816587398, 'AgusCahyono@gmail.com');

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
(10650032, 20, 3.5),
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
(10650032, 20, 3.5),
(10650102, 1, 4),
(10650021, 1, 4),
(10650021, 1, 4),
(10650021, 2, 2.5),
(10650021, 3, 3.5),
(10650021, 4, 3.5),
(10650021, 5, 4),
(10650021, 6, 4),
(10650021, 7, 3.5),
(10650021, 8, 3.5),
(10650021, 9, 3.5),
(10650021, 10, 3.5),
(10650021, 11, 2.5),
(10650021, 12, 3.5),
(10650021, 13, 3),
(10650021, 14, 4),
(10650021, 15, 3),
(10650021, 16, 2.5),
(10650021, 17, 3.5),
(10650021, 18, 2.5),
(10650021, 19, 2),
(10650021, 20, 2),
(10650021, 21, 2),
(10650032, 1, 3.5),
(10650032, 2, 3.5),
(10650032, 3, 2.5),
(10650032, 4, 4),
(10650032, 5, 3),
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
(10650032, 16, 2.5),
(10650032, 17, 3.5),
(10650032, 18, 3),
(10650032, 19, 3.5),
(10650032, 20, 3.5),
(10650032, 21, 2.5),
(10650054, 1, 2.5),
(10650054, 2, 3.5),
(10650054, 3, 3.5),
(10650054, 4, 3.5),
(10650054, 5, 2.5),
(10650054, 6, 4),
(10650054, 7, 2.5),
(10650054, 8, 3.5),
(10650054, 9, 3.5),
(10650054, 10, 3),
(10650054, 12, 4),
(10650054, 13, 3.5),
(10650032, 12, 3.5),
(10650054, 13, 3),
(10650054, 14, 4),
(10650054, 15, 3.5),
(10650054, 16, 3),
(10650054, 17, 2.5),
(10650054, 18, 2),
(10650054, 19, 3),
(10650054, 20, 4),
(10650054, 21, 2.5),
(10650056, 1, 3.5),
(10650056, 2, 3),
(10650056, 3, 3),
(10650056, 4, 3.5),
(10650056, 5, 3.5),
(10650056, 6, 3.5),
(10650056, 7, 3.5),
(10650056, 8, 3.5),
(10650056, 9, 3.5),
(10650056, 10, 4),
(10650056, 11, 3),
(10650056, 12, 3.5),
(10650056, 13, 3),
(10650056, 14, 3.5),
(10650056, 15, 3.5),
(10650056, 16, 3.5),
(10650056, 17, 3.5),
(10650056, 18, 3),
(10650056, 19, 4),
(10650056, 20, 3.5),
(10650056, 21, 2.5),
(10650076, 1, 3.5),
(10650076, 2, 2),
(10650076, 3, 3.5),
(10650076, 4, 3),
(10650076, 5, 3.5),
(10650076, 6, 4),
(10650076, 7, 3.5),
(10650076, 8, 3.5),
(10650076, 9, 3.5),
(10650076, 10, 3.5),
(10650076, 11, 3),
(10650076, 12, 3.5),
(10650076, 13, 3),
(10650076, 14, 3),
(10650076, 15, 3),
(10650076, 16, 3),
(10650076, 17, 3),
(10650076, 17, 3.5),
(10650076, 18, 2.5),
(10650076, 19, 4),
(10650076, 20, 3),
(10650076, 21, 3.5),
(10650088, 1, 4),
(10650088, 2, 4),
(10650088, 3, 2),
(10650088, 4, 4),
(10650088, 5, 2),
(10650088, 6, 3.5),
(10650088, 7, 3.5),
(10650088, 7, 3),
(10650088, 8, 3.5),
(10650088, 8, 3.5),
(10650088, 9, 3.5),
(10650088, 10, 3),
(10650088, 11, 4),
(10650088, 12, 4),
(10650088, 13, 3.5),
(10650088, 14, 4),
(10650088, 15, 4),
(10650088, 16, 3.5),
(10650088, 17, 4),
(10650088, 18, 3),
(10650088, 19, 3.5),
(10650088, 20, 2.5),
(10650088, 21, 2.5),
(10650098, 1, 2.5),
(10650098, 2, 3.5),
(10650098, 3, 3.5),
(10650098, 4, 4),
(10650098, 5, 3),
(10650098, 6, 4),
(10650098, 7, 3.5),
(10650098, 8, 3.5),
(10650098, 9, 3.5),
(10650098, 10, 4),
(10650098, 11, 4),
(10650098, 12, 4),
(10650098, 13, 4),
(10650098, 14, 3),
(10650098, 15, 3.5),
(10650098, 16, 3),
(10650098, 17, 4),
(10650098, 18, 3.5),
(10650098, 19, 3.5),
(10650098, 20, 3.5),
(10650098, 21, 2.5),
(10650099, 1, 4),
(10650099, 2, 3.5),
(10650099, 3, 3),
(10650099, 4, 4),
(10650099, 5, 3.5),
(10650099, 6, 3),
(10650099, 7, 3),
(10650099, 8, 3.5),
(10650099, 9, 3.5),
(10650099, 10, 3.5),
(10650099, 11, 4),
(10650099, 12, 3.5),
(10650099, 13, 3),
(10650099, 14, 4),
(10650099, 15, 3.5),
(10650099, 16, 4),
(10650099, 17, 3.5),
(10650099, 18, 3),
(10650099, 19, 2),
(10650099, 20, 2),
(10650099, 21, 2.5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `cover` text NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta_pkli`
--

CREATE TABLE IF NOT EXISTS `peserta_pkli` (
  `Id_peserta` int(11) NOT NULL AUTO_INCREMENT,
  `Id_program` int(11) NOT NULL,
  `NIM` int(11) NOT NULL,
  PRIMARY KEY (`Id_peserta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_pkli`
--

CREATE TABLE IF NOT EXISTS `program_pkli` (
  `Id_program_pkli` int(11) NOT NULL AUTO_INCREMENT,
  `Id_instansi` int(11) NOT NULL,
  `Bidang_Keahlian` int(4) NOT NULL,
  `Jumlah_peserta` int(11) NOT NULL,
  `awal` date NOT NULL,
  `akhir` date NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`Id_program_pkli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data untuk tabel `program_pkli`
--

INSERT INTO `program_pkli` (`Id_program_pkli`, `Id_instansi`, `Bidang_Keahlian`, `Jumlah_peserta`, `awal`, `akhir`, `keterangan`) VALUES
(5, 11, 2, 4, '2013-11-14', '2013-11-07', 'PKLI dilaksankan paha hari Senin-Jumat Pukul 08.00 WIB - 15.00 WIB'),
(6, 11, 1, 6, '2013-11-13', '2013-11-13', 'Mendapat Setrikitat '),
(7, 11, 4, 10, '2013-11-22', '2013-11-22', 'Project yang akan di kerjakan membangun SI REKOMENDASI PKLI'),
(8, 12, 5, 15, '2014-01-01', '2013-11-01', 'Program PKLI ini dikhususkan untuk Mahasiswa UIN Malang'),
(9, 12, 3, 4, '2013-11-30', '2013-11-30', 'Project yang akan dikerjakan membangun robot '),
(10, 14, 4, 10, '2013-12-12', '2013-12-12', 'mendapat biaya hidup selama prrogram berjalan'),
(11, 14, 1, 20, '2013-12-12', '2013-12-12', 'Mendapatkan biaya Transport selama 1 bulan'),
(12, 15, 1, 10, '2013-11-27', '2013-12-17', 'Dibutuhkan kerja 24 jam full'),
(13, 15, 2, 2, '2013-11-27', '2013-12-17', 'Memperbaiki sistem jaringan kantor'),
(14, 13, 1, 7, '2013-11-16', '2013-12-16', 'Membuat Aplikasi interaktif TV-Digital'),
(17, 25, 5, 10, '1970-01-01', '1970-01-01', 'ok');

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
(7, '10650099', 'fd103e76c1a3406f090dbd01c67ed134', 'mahasiswa', 1),
(8, '10650090', '2b9f66b976f57014b966752edbfa7b6c', 'mahasiswa', 1),
(9, '10650098', '440fd2e411f3d109aec0b326666161a7', 'mahasiswa', 1),
(10, 'aneh', 'd41d8cd98f00b204e9800998ecf8427e', 'instansi', 0),
(11, 'pasca', 'f92e65c0ea92747a7b86fd6fd6c4efcc', 'instansi', 0),
(12, 'gudang', '202446dd1d6028084426867365b0c7a1', 'instansi', 0),
(13, 'dis', '4cdf5a25d4673bfc4546ca7843071f65', 'instansi', 0),
(14, 'telkom', 'a2ed39c417316adbd5cd1d0211a5d711', 'instansi', 0),
(15, 'kaskus', 'cc689fce639ab2aa69fe308cda19b703', 'instansi', 0),
(16, 'gersik', 'ec4a2276e0caa8ca3b940df82dcb0568', 'instansi', 0),
(17, '10650021', '90c68430d8a0f129b42e7dc18030e2a4', 'mahasiswa', 1),
(18, '10650032', '9b5edda3b1454fda12d622772b235200', 'mahasiswa', 1),
(19, '10650054', '201344857223f72a4bb1deb7469c38c8', 'mahasiswa', 1),
(20, '10650056', 'b28d58a8571bbaefe989e937bb78c692', 'mahasiswa', 1),
(21, '10650059', 'a8d62ab63ce07aa9f33531848a5a783e', 'mahasiswa', 1),
(22, '10650076', 'c7512ec8eee8245bd7388f1752e4c966', 'mahasiswa', 1),
(23, '10650088', '7f8b32bca28a4b4afd41983398af5a7e', 'mahasiswa', 1),
(24, 'bentoel', '60df92d3fa34fc1b1162dc2982dcbbbc', 'instansi', 0),
(25, 'google', 'c822c1b63853ed273b89687ac505f9fa', 'instansi', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
