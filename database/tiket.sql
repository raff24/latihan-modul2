-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 10:26 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `tiket_stadion`
--

CREATE TABLE `tiket_stadion` (
  `id_tiket` int(25) NOT NULL,
  `jenis_tiket` varchar(25) NOT NULL,
  `harga_tiket` int(8) NOT NULL,
  `jumlah_tiket` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiket_stadion`
--

INSERT INTO `tiket_stadion` (`id_tiket`, `jenis_tiket`, `harga_tiket`, `jumlah_tiket`) VALUES
(1, 'VIP', 120000, 20),
(2, 'Reguler', 500000, 50),
(5, 'Super', 120000, 20),
(67, 'Baru', 100000, 20),
(76, 'Mewah', 500000, 900),
(77, 'Emas', 1000000, 650);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tiket_stadion`
--
ALTER TABLE `tiket_stadion`
  ADD PRIMARY KEY (`id_tiket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
