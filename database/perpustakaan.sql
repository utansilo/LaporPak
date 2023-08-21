-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 06:01 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `fakultas` varchar(255) NOT NULL,
  `nlaporan` varchar(255) NOT NULL,
  `jlaporan` varchar(255) NOT NULL,
  `nerima` varchar(255) NOT NULL,
  `isian` varchar(301) NOT NULL,
  `status` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `prodi`, `fakultas`, `nlaporan`, `jlaporan`, `nerima`, `isian`, `status`, `deskripsi`, `gambar`) VALUES
(16, 'D3 Teknik Informatika', 'FIK', 'Kehadiran Dosen', 'Akademik', 'Prodi', 'afsfvesvsevsevesvsevesvsvsev svesves fesfesfesfse fes fesfes es se', 'Acc', 'Dosen akan ditindak lanjuti tegas', ''),
(17, 'S1 Kewirausahaan', 'FIK', 'Lapangan Rusak', 'Non-Akademik', 'Fakultas', 'Lapangan perlu diperbaiki lagi bang', 'Acc', 'Sudah sangat disetujui\r\n', ''),
(18, 'D3 Teknik Informatika', 'FIK', 'Kerusakan PC', 'Akademik', 'Prodi', 'Adanya PC yang rusak', 'Review', 'Sedang tahap review', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `role`) VALUES
(10, 'admin', 'admin@admin.com', '$2y$10$IkHS9PffKZw3MsEKpj8vDOk14uMtfJplEMGYkMgUlKTvyNgSOjdNa', 'admin'),
(12, 'luqman', 'lqmn@gmail.com', '$2y$10$r2RlVQ2xsxRsYl4.CUFL.OzdWVDjcVKNPsTQLrvlwkIk2AG2B7Tw.', 'user'),
(15, 'ansilo', 'sultan@gmail.com', '$2y$10$LeFGc9FPH9a4YptHDyoJL./Y19E7lM7GnjaR4zJpjPgIm2vqcRc.y', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
