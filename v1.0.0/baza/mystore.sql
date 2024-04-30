-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2022 at 04:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `istifadeci`
--

CREATE TABLE `istifadeci` (
  `id` int(11) NOT NULL,
  `tamadi` varchar(30) NOT NULL DEFAULT 'Qonaq Istifadeci',
  `email` varchar(30) NOT NULL,
  `kod` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'profile.png',
  `stat` int(11) NOT NULL DEFAULT 0,
  `tarix_qeyd` timestamp NOT NULL DEFAULT current_timestamp(),
  `tarix_cixis` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kateqoriya`
--

CREATE TABLE `kateqoriya` (
  `id` int(11) NOT NULL,
  `adi` varchar(30) NOT NULL,
  `stat` int(11) NOT NULL DEFAULT 1,
  `tarix_aktiv` timestamp NOT NULL DEFAULT current_timestamp(),
  `tarix_deaktiv` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mehsullar`
--

CREATE TABLE `mehsullar` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'photo.png',
  `adi` varchar(50) NOT NULL,
  `say` int(11) NOT NULL,
  `kateqoriya` varchar(30) NOT NULL,
  `oz_qiymeti` float NOT NULL DEFAULT 0,
  `endirim_qiymeti` float DEFAULT NULL,
  `haqqinda` text DEFAULT NULL,
  `stat` int(11) NOT NULL DEFAULT 1,
  `tarix_gelis` timestamp NOT NULL DEFAULT current_timestamp(),
  `tarix_bitis` timestamp NULL DEFAULT NULL,
  `sahibi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sifarisler`
--

CREATE TABLE `sifarisler` (
  `id` int(11) NOT NULL,
  `mehsul` int(11) NOT NULL,
  `qebul_eden` int(11) NOT NULL,
  `sifaris_veren_ad` varchar(30) NOT NULL,
  `sifaris_veren_telefon` varchar(15) NOT NULL,
  `sifaris_veren_unvan` varchar(255) NOT NULL,
  `stat` int(11) NOT NULL DEFAULT 1,
  `tarix_sifaris` timestamp NOT NULL DEFAULT current_timestamp(),
  `tarix_bitme` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `testiq_kodu`
--

CREATE TABLE `testiq_kodu` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `kod` int(11) NOT NULL,
  `stat` int(11) NOT NULL DEFAULT 1,
  `tarix_verilme` timestamp NOT NULL DEFAULT current_timestamp(),
  `tarix_istifade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `istifadeci`
--
ALTER TABLE `istifadeci`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kateqoriya`
--
ALTER TABLE `kateqoriya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mehsullar`
--
ALTER TABLE `mehsullar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sifarisler`
--
ALTER TABLE `sifarisler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testiq_kodu`
--
ALTER TABLE `testiq_kodu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `istifadeci`
--
ALTER TABLE `istifadeci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kateqoriya`
--
ALTER TABLE `kateqoriya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mehsullar`
--
ALTER TABLE `mehsullar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sifarisler`
--
ALTER TABLE `sifarisler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testiq_kodu`
--
ALTER TABLE `testiq_kodu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
