-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 01 Bulan Mei 2023 pada 14.52
-- Versi server: 8.0.31
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_app_yii`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_wilayah`
--

DROP TABLE IF EXISTS `master_wilayah`;
CREATE TABLE IF NOT EXISTS `master_wilayah` (
  `kode_klinik` int NOT NULL AUTO_INCREMENT,
  `nama_klinik` varchar(150) NOT NULL,
  `lokasi_klinik` varchar(150) NOT NULL,
  `jam_buka_klinik` time NOT NULL,
  `jam_tutup_klinik` time NOT NULL,
  `penanggung_jawab_klinik` varchar(150) NOT NULL,
  PRIMARY KEY (`kode_klinik`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

DROP TABLE IF EXISTS `obat`;
CREATE TABLE IF NOT EXISTS `obat` (
  `id_obat` int NOT NULL AUTO_INCREMENT,
  `nama_obat` varchar(150) NOT NULL,
  `keterangan` varchar(150) NOT NULL,
  PRIMARY KEY (`id_obat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

DROP TABLE IF EXISTS `pasien`;
CREATE TABLE IF NOT EXISTS `pasien` (
  `id_pasien` int NOT NULL,
  `nama_pasien` varchar(150) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `umur` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pasien`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pegawai` int NOT NULL AUTO_INCREMENT,
  `nomor_pegawai` int NOT NULL,
  `nomor_induk_kependudukan` int NOT NULL,
  `nama_pegawai` varchar(150) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

DROP TABLE IF EXISTS `pendaftaran`;
CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `id_pendaftaran` int NOT NULL AUTO_INCREMENT,
  `id_pasien` int NOT NULL,
  `tanggal_berobat` date NOT NULL,
  `rujukan_poli` varchar(100) NOT NULL,
  `nomor_urut` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pendaftaran`),
  KEY `id_pasien` (`id_pasien`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tindakan`
--

DROP TABLE IF EXISTS `tindakan`;
CREATE TABLE IF NOT EXISTS `tindakan` (
  `id_tindakan` int NOT NULL AUTO_INCREMENT,
  `nama_tindakan` varchar(150) NOT NULL,
  `keterangan` varchar(150) NOT NULL,
  PRIMARY KEY (`id_tindakan`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `authKey` varchar(50) NOT NULL,
  `accessToken` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `authKey`, `accessToken`, `role`) VALUES
(1, 'ade', '123456789', '@d3M@uL', '@d3M@uL-123', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
