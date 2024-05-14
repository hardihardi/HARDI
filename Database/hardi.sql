-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 13, 2024 at 03:46 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hardi`
--

-- --------------------------------------------------------

--
-- Table structure for table `hardi`
--

CREATE TABLE `hardi` (
  `id` int NOT NULL,
  `nim` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no_telepon` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `agama` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_kelamin` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jurusan` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hardi`
--

INSERT INTO `hardi` (`id`, `nim`, `nama`, `tanggal_lahir`, `tempat_lahir`, `alamat`, `email`, `no_telepon`, `agama`, `jenis_kelamin`, `jurusan`, `foto`) VALUES
(1, '312010281', 'HARDIANTO', '2024-05-13', 'CIKARANG', 'CIKARANG, JAWA BARAT', 'hardi@gmail.com', '081111334445', 'Islam', 'L', 'TEKNIK INFORMATIKA', '20240227_181252.jpg'),
(5, '312010351', ' FAZRIN PUTRI HARDIANTI ', '2024-05-13', 'Bekasi', 'CIKARANG, JAWA BARAT', 'fazrin@gmai.com', '081348920101', 'Islam', 'P', 'TEKNIK LINGKUNGAN', '72555_02E103C7-D7ED-4871-99AC-D9DE304A7BDB.jpeg'),
(7, '311910599 ', 'FAJAR MARDIANTO', '2024-05-13', 'Bekasi', 'Bekasi, Jawa Barat', 'fajar@gmail.com', '081345670987', 'Islam', 'L', 'TEKNIK INFORMATIKA', 'PhotoGrid_1612791833967.jpg'),
(8, '311910743', ' ANGGI RINGGO KUNCORO JATI', '2024-05-13', 'Bekasi', 'Bekasi', 'anggi@gmail.com', '081111334445', 'Islam', 'L', 'TEKNIK INFORMATIKA', '54231_3+x+4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hardi`
--
ALTER TABLE `hardi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hardi`
--
ALTER TABLE `hardi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
