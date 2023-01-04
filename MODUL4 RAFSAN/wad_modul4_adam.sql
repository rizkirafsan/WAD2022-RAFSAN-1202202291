-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3333
-- Generation Time: Nov 27, 2022 at 03:28 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul4_rafsan`
--

-- --------------------------------------------------------

--
-- Table structure for table `showroom_rafsan`
--

CREATE TABLE `showroom_rafsan` (
  `id_mobil` int(11) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showroom_rafsan`
--

INSERT INTO `showroom_rafsan` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(1, 'Shelby Cobra', 'Ali', 'Shelby', '2022-11-09', 'Mobil pabrikan amerika', 'ksksksks.jpg\r\n', 'Lunas'),
(4, 'Ford Mustang', 'Syla', 'Ford', '2022-07-08', 'Mobil pabrikan eropa', 'mobil.jpg', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `user_rafsan`
--

CREATE TABLE `user_rafsan` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_rafsan`
--

INSERT INTO `user_rafsan` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(1, 'Muhammad Rizki Rafsyandjani', 'rizkirafsan51@gmail.com', 'aaa', '085892115101'),
(2, 'Muhammad Rizki Rafsyandjani', 'rizkirafsan51@gmail.com', 'aaa', '085892115101'),
(3, 'lele', 'abc@gmail.com', '123', '0999928282872');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showroom_rafsan`
--
ALTER TABLE `showroom_rafsan`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `user_rafsan`
--
ALTER TABLE `user_rafsan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `showroom_rafsan`
--
ALTER TABLE `showroom_rafsan`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_rafsan`
--
ALTER TABLE `user_`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
