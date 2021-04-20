-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Apr 2021 pada 13.20
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `user_id` varchar(20) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pass` varchar(225) NOT NULL,
  `user_join` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_join`) VALUES
('wfaqx1solmn', 'ajipaon', 'ajisetiawan883@gmail.com', '$2y$10$OSBDjNul0JzLZijqQJrSC.0sTD32lpoiX3EnrQ3lnLzHU6dYrG3dy', '2021-04-19 08:04:28');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_page`
--
ALTER TABLE `tb_page`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_email` (`user_email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
