-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Agu 2022 pada 08.07
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jualbeli`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jualsapi`
--

CREATE TABLE `jualsapi` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `nohp` varchar(12) DEFAULT NULL,
  `harga` int(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jualsapi`
--

INSERT INTO `jualsapi` (`id`, `nama`, `alamat`, `nohp`, `harga`, `gambar`) VALUES
(1, 'Muh.Parif', 'Rappogading', '082349389244', 14000000, 'logo_sapi.jpg'),
(2, 'Radit', 'Rappogading', '085255221091', 12000000, 'sapi1.jpg'),
(3, 'Riswan', 'Rappogading', '085255221091', 10000000, 'sapi2.jpg'),
(4, 'Asri', 'Rappogading', '085255221091', 9000000, 'sapi3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jualsapi`
--
ALTER TABLE `jualsapi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jualsapi`
--
ALTER TABLE `jualsapi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
