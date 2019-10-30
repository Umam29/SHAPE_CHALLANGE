-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Okt 2019 pada 04.46
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `level`) VALUES
(2, 'userone', 'userone', '5f4dcc3b5aa765d61d8327deb882cf99', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kid`
--

CREATE TABLE `kid` (
  `id_kid` int(11) NOT NULL,
  `kidName` varchar(255) NOT NULL,
  `kidUsername` varchar(100) NOT NULL,
  `kidPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kid`
--

INSERT INTO `kid` (`id_kid`, `kidName`, `kidUsername`, `kidPassword`) VALUES
(6, 'umam', 'umam', '1a1dc91c907325c69271ddf0c944bc72'),
(7, 'arul', 'ar', 'be3025c4341e340ee641e89779ca2649'),
(8, 'tes4', 'tes4', '27069e6baf4eba0ad33686287d582c97'),
(9, 'tes5', 'tes5', '305506069f2dda79d68e638186b83a5e'),
(10, 'bon', 'bon', 'c7f86e8cf8f01309853411133e764fe9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shape`
--

CREATE TABLE `shape` (
  `id_shape` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `length` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `shape`
--

INSERT INTO `shape` (`id_shape`, `size`, `width`, `length`) VALUES
(1, 4, 2, 2),
(2, 12, 4, 3),
(3, 6, 2, 3),
(4, 6, 2, 3),
(5, 20, 4, 5);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kid`
--
ALTER TABLE `kid`
  ADD PRIMARY KEY (`id_kid`);

--
-- Indeks untuk tabel `shape`
--
ALTER TABLE `shape`
  ADD PRIMARY KEY (`id_shape`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kid`
--
ALTER TABLE `kid`
  MODIFY `id_kid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `shape`
--
ALTER TABLE `shape`
  MODIFY `id_shape` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
