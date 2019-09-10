-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2019 at 06:11 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `kampus` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `tahun_lulus` year(4) NOT NULL,
  `status` enum('1','2') NOT NULL DEFAULT '2',
  `photo` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `bukti_bayar` varchar(100) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `email`, `password`, `nama`, `level`, `kampus`, `prodi`, `tahun_lulus`, `status`, `photo`, `bukti_bayar`) VALUES
(1, 'admin', 'cd4703ad5255ea03d6efff2091c41c47a11ffc09e70e0c5d54ccbb93b5c5bd94c28e43321136df17fa49781f60a2419f101065ed36a7a96c6669da2d2148d785', 'Puskom', 1, '', '', 0000, '2', 'default.jpg', 'default.jpg'),
(86, 'member@polinela.ac.id', 'cd4703ad5255ea03d6efff2091c41c47a11ffc09e70e0c5d54ccbb93b5c5bd94c28e43321136df17fa49781f60a2419f101065ed36a7a96c6669da2d2148d785', 'member', 2, 'Polinela', 'Manajemen Informatika', 2015, '1', 'default.jpg', 'default.jpg'),
(88, 'user@member.com', 'cd4703ad5255ea03d6efff2091c41c47a11ffc09e70e0c5d54ccbb93b5c5bd94c28e43321136df17fa49781f60a2419f101065ed36a7a96c6669da2d2148d785', 'user', 2, 'polinela', 'MI', 2018, '2', 'default.jpg', 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
