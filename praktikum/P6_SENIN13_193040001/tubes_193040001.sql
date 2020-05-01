-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Apr 2020 pada 17.11
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040001`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `elektronik`
--

CREATE TABLE `elektronik` (
  `id` int(11) NOT NULL,
  `foto` varchar(10) NOT NULL,
  `kode_barang` char(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_barang` varchar(20) NOT NULL,
  `harga` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `elektronik`
--

INSERT INTO `elektronik` (`id`, `foto`, `kode_barang`, `nama`, `jenis_barang`, `harga`) VALUES
(1, 'BE01.jpg', 'BE01', 'Samsung A50', 'Smartphone', 'Rp. 3.500.000'),
(2, 'BE02.jpg', 'BE02', 'Rexus F65', 'Headset', 'Rp. 170.000'),
(3, 'BE03.jpg', 'BE03', 'Epson L1110', 'Printer', 'Rp. 1.700.000'),
(4, 'BE04.jpg', 'BE04', 'Digital Alliance Luna Gaming Mouse', 'Aksesoris Game', 'Rp. 140.000'),
(5, 'BE05.jpg', 'BE05', 'Logitech G102 Prodigy Gaming Mouse', 'Aksesoris Game', 'Rp. 250.000'),
(6, 'BE06.jpg', 'BE06', 'Realme 5 Pro', 'Smartphone', 'Rp. 3.100.000'),
(7, 'BE07.jpg', 'BE07', 'Sony Playstation 3 Slim', 'Konsol Game', 'Rp. 1.650.000'),
(8, 'BE08.jpg', 'BE08', 'Nintendo Switch', 'Konsol Game', 'Rp. 7.500.000'),
(9, 'BE09.jpg', 'BE09', 'Sony Playstation 4 Pro', 'Konsol Game', 'Rp. 6.250.000'),
(10, 'BE10.jpg', 'BE10', 'Keyboard Gaming Imperion Gamemaster KG-G180', 'Aksesoris Game', 'Rp. 130.000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `elektronik`
--
ALTER TABLE `elektronik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
