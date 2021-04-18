-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Apr 2021 pada 16.50
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wame`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_page`
--

CREATE TABLE `tb_page` (
  `id` varchar(9) NOT NULL,
  `title` varchar(225) NOT NULL,
  `nomor_tlp` varchar(225) NOT NULL,
  `pesan` varchar(225) NOT NULL,
  `web` varchar(225) NOT NULL,
  `descripsi` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_page`
--

INSERT INTO `tb_page` (`id`, `title`, `nomor_tlp`, `pesan`, `web`, `descripsi`) VALUES
('dkuLZL', 'ini title', '085728539252', 'saya mau beli gan', 'www.google.com', 'tempat jual beli barang dan jasa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_page`
--
ALTER TABLE `tb_page`
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
