-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Bulan Mei 2020 pada 22.49
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
(1, 'Jo Yuri', '193040001', 'yuri@mail.ac.id', 'Teknik Informatika', 'jo yuri.jpg'),
(2, 'Choi Yena', '193040002', 'yena@mail.ac.id', 'Teknik Informatika', 'choi yena.jpg'),
(3, 'Lee Chaeyeon', '193040003', 'chaeyeon@mail.ac.id', 'Teknik Informatika', 'lee chaeyeon.jpg'),
(4, 'Yabuki Nako', '193040005', 'nako@mail.ac.id', 'Teknik Informatika', 'yabuki nako.jpg'),
(5, 'Honda Hitomi', '193040006', 'hitomi@mail.ac.id', 'Teknik Informatika', 'honda hitomi.jpg'),
(6, 'Kwon Eunbi', '193040007', 'eunbi@mail.ac.id', 'Teknik Informatika', 'kwon eunbi.jpg'),
(7, 'Miyawaki Sakura', '193040008', 'sakura@mail.ac.id', 'Teknik Infomartika', 'miyawaki sakura.jpg'),
(8, 'Jang Wonyoung', '193040009', 'wonyoung@mail.ac.id', 'Teknik Informatika', 'jang wonyoung.jpg'),
(9, 'Kim Chaewon', '193040010', 'chaewon@mail.ac.id', 'Teknik Informatika', 'kim chaewon.jpg'),
(10, 'Ahn Yujin', '193040011', 'yujin@mail.ac.id', 'Teknik Informatika', 'ahn yujin.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'hanif', '$2y$10$.isfNAWrgbzl5TXrESHzZOXggzQb4w7i4WGnY8daDrqlh3idqprMu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
