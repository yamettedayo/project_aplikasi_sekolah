-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2023 pada 09.05
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `databuku`
--

CREATE TABLE `databuku` (
  `id_buku` int(11) NOT NULL,
  `gambar_buku` varchar(100) NOT NULL,
  `kode_buku` char(5) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `penulis_buku` varchar(50) NOT NULL,
  `penerbit_buku` varchar(50) NOT NULL,
  `tahun_penerbit` char(4) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `databuku`
--

INSERT INTO `databuku` (`id_buku`, `gambar_buku`, `kode_buku`, `judul_buku`, `penulis_buku`, `penerbit_buku`, `tahun_penerbit`, `stok`) VALUES
(1, 'forbidden.jpg', '11001', 'Forrbidden', 'METT', 'compas.com', '2022', 5),
(2, 'malu.jpg', '11002', 'Putri Malu', 'Kenzie', 'Zettu', '2013', 10),
(3, 'stoic.jpg', '11003', 'Filosofi Teras', 'Henri Manampiring', 'Kompas', '2018', 50);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `databuku`
--
ALTER TABLE `databuku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `databuku`
--
ALTER TABLE `databuku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
