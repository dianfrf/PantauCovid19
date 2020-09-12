-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2020 at 10:53 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pantaucovid`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil_laporan`
--

CREATE TABLE `hasil_laporan` (
  `id_laporan` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_laporan`
--

INSERT INTO `hasil_laporan` (`id_laporan`, `nama_lengkap`, `alamat`, `telepon`, `create_at`) VALUES
(4, 'Dian Fakhrul Arif', 'Ds. Puton RT 01/ RW 01 Kec. Diwek Kab. Jombang', '085155397766', '2020-09-12 03:18:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil_laporan`
--
ALTER TABLE `hasil_laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil_laporan`
--
ALTER TABLE `hasil_laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
