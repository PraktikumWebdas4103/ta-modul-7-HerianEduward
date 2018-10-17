-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Okt 2018 pada 12.07
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inputanmahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `inputanmahasiswa`
--

CREATE TABLE `inputanmahasiswa` (
  `nama` varchar(25) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `jeniskelamin` varchar(25) NOT NULL,
  `programstudi` varchar(25) NOT NULL,
  `fakultas` varchar(25) NOT NULL,
  `asal` varchar(25) NOT NULL,
  `motto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `inputanmahasiswa`
--

INSERT INTO `inputanmahasiswa` (`nama`, `nim`, `jeniskelamin`, `programstudi`, `fakultas`, `asal`, `motto`) VALUES
('Muchammad Richard', '123678655', 'Laki-Laki', 'D3 Perhotelan', 'FIT', 'Medan', ''),
('Muchammad Richard', '6706174071', 'Laki-Laki', 'D3 IF', 'FKB', 'Medan', 'motto'),
('melki', '7878877668', 'Laki-Laki', 'D3 Perhotelan', 'FEB', 'Medan\r\n ', 'juni');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `inputanmahasiswa`
--
ALTER TABLE `inputanmahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;