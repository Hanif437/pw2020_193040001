-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Apr 2020 pada 13.56
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
-- Database: `pw_193040001`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nrp` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Putra Hanif Ammarta', '193040001', 'putra@mail.unpas.ac.id', 'Teknik Informatika', 'putra.jpg'),
(2, 'David Dalil', '193040002', 'david@mail.unpas.ac.id', 'Teknik Informatika', 'david.jpg'),
(3, 'Maulana Muhammad Adha', '193040003', 'maulana@mail.unpas.ac.id', 'Teknik Informatika', 'maulana.jpg'),
(4, 'Reza Dwiyana', '193040005', 'reza@mail.unpas.ac.id', 'Teknik Informatika', 'reza.jpg'),
(5, 'Lamhot Kristofer', '193040006', 'lamhot@mail.unpas.ac.id', 'Teknik Informatika', 'lamhot.jpg'),
(6, 'Anjara Darojatun', '193040007', 'anjara@mail.unpas.ac.id', 'Teknik Informatika', 'anjara.jpg'),
(7, 'Agung Gumelar', '193040008', 'agung@mail.unpas.ac.id', 'Teknik Infomartika', 'agung.jpg'),
(8, 'Muhammad Wildhan Kusuma', '193040009', 'wildhan@mail.unpas.ac.id', 'Teknik Informatika', 'wildhan.jpg'),
(9, 'Fahri Arliansyah', '193040010', 'fahri@mail.unpas.ac.id', 'Teknik Informatika', 'fahri.jpg'),
(10, 'Muhammad Farhan Assidiq', '193040011', 'farhan@mail.unpas.ac.id', 'Teknik Informatika', 'farhan.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
