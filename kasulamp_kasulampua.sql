-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 21, 2023 at 10:23 AM
-- Server version: 5.7.41
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasulamp_kasulampua`
--

-- --------------------------------------------------------

--
-- Table structure for table `excel`
--

CREATE TABLE `excel` (
  `id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `uploaded_by` int(11) NOT NULL,
  `approved_by` int(11) DEFAULT NULL,
  `jenis_excel` int(11) NOT NULL COMMENT '1=sosial, 2=ekonomi, 3=pertanian'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`id`, `nama`) VALUES
(1, 'BPS'),
(2, 'BAPPEDA'),
(3, 'BI');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_excel`
--

CREATE TABLE `jenis_excel` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_excel`
--

INSERT INTO `jenis_excel` (`id`, `nama`) VALUES
(1, 'Sosial'),
(2, 'Ekonomi'),
(3, 'Pertanian');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `nama`) VALUES
(1, 'super_admin'),
(2, 'admin'),
(3, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id`, `nama`) VALUES
(61, 'KALIMANTAN BARAT'),
(62, 'KALIMANTAN TENGAH'),
(63, 'KALIMANTAN SELATAN'),
(64, 'KALIMANTAN TIMUR'),
(65, 'KALIMANTAN UTARA'),
(71, 'SULAWESI UTARA'),
(72, 'SULAWESI TENGAH'),
(73, 'SULAWESI SELATAN'),
(74, 'SULAWESI TENGGARA'),
(75, 'GORONTALO'),
(76, 'SULAWESI BARAT'),
(81, 'MALUKU'),
(82, 'MALUKU UTARA'),
(91, 'PAPUA BARAT'),
(94, 'PAPUA'),
(95, 'PAPUA TENGAH'),
(96, 'PAPUA PEGUNUNGAN'),
(97, 'PAPUA SELATAN'),
(98, 'PAPUA BARAT DAYA');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `id_instansi` int(11) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `id_provinsi`, `id_instansi`, `id_level`) VALUES
(1, 'bps74', 'wayan', 74, 1, 1),
(2, 'bps75', 'bps75', 74, 2, 3),
(3, 'bps6100', 'pass_bps6100', 61, 1, 2),
(4, 'bps6200', 'pass_bps6200', 62, 1, 2),
(5, 'bps6300', 'pass_bps6300', 63, 1, 2),
(6, 'bps6400', 'pass_bps6400', 64, 1, 2),
(7, 'bps6500', 'pass_bps6500', 65, 1, 2),
(8, 'bps7100', 'pass_bps7100', 71, 1, 2),
(9, 'bps7200', 'pass_bps7200', 72, 1, 2),
(10, 'bps7300', 'pass_bps7300', 73, 1, 2),
(11, 'bps7400', 'pass_bps7400', 74, 1, 2),
(12, 'bps7500', 'pass_bps7500', 75, 1, 2),
(13, 'bps7600', 'pass_bps7600', 76, 1, 2),
(14, 'bps8100', 'pass_bps8100', 81, 1, 2),
(15, 'bps8200', 'pass_bps8200', 82, 1, 2),
(16, 'bps9100', 'pass_bps9100', 91, 1, 2),
(17, 'bps9400', 'pass_bps9400', 94, 1, 2),
(18, 'bappeda6100', 'pass_bappeda6100', 61, 2, 2),
(19, 'bappeda6200', 'pass_bappeda6200', 62, 2, 2),
(20, 'bappeda6300', 'pass_bappeda6300', 63, 2, 2),
(21, 'bappeda6400', 'pass_bappeda6400', 64, 2, 2),
(22, 'bappeda6500', 'pass_bappeda6500', 65, 2, 2),
(23, 'bappeda7100', 'pass_bappeda7100', 71, 2, 2),
(24, 'bappeda7200', 'pass_bappeda7200', 72, 2, 2),
(25, 'bappeda7300', 'pass_bappeda7300', 73, 2, 2),
(26, 'bappeda7400', 'pass_bappeda7400', 74, 2, 2),
(27, 'bappeda7500', 'pass_bappeda7500', 75, 2, 2),
(28, 'bappeda7600', 'pass_bappeda7600', 76, 2, 2),
(29, 'bappeda8100', 'pass_bappeda8100', 81, 2, 2),
(30, 'bappeda8200', 'pass_bappeda8200', 82, 2, 2),
(31, 'bappeda9100', 'pass_bappeda9100', 91, 2, 2),
(32, 'bappeda9400', 'pass_bappeda9400', 94, 2, 2),
(33, 'bi6100', 'pass_bi6100', 61, 3, 2),
(34, 'bi6200', 'pass_bi6200', 62, 3, 2),
(35, 'bi6300', 'pass_bi6300', 63, 3, 2),
(36, 'bi6400', 'pass_bi6400', 64, 3, 2),
(37, 'bi6500', 'pass_bi6500', 65, 3, 2),
(38, 'bi7100', 'pass_bi7100', 71, 3, 2),
(39, 'bi7200', 'pass_bi7200', 72, 3, 2),
(40, 'bi7300', 'pass_bi7300', 73, 3, 2),
(41, 'bi7400', 'pass_bi7400', 74, 3, 2),
(42, 'bi7500', 'pass_bi7500', 75, 3, 2),
(43, 'bi7600', 'pass_bi7600', 76, 3, 2),
(44, 'bi8100', 'pass_bi8100', 81, 3, 2),
(45, 'bi8200', 'pass_bi8200', 82, 3, 2),
(46, 'bi9100', 'pass_bi9100', 91, 3, 2),
(47, 'bi9400', 'pass_bi9400', 94, 3, 2),
(48, 'userbps6100', 'pass_userbps6100', 61, 1, 3),
(49, 'userbps6200', 'pass_userbps6200', 62, 1, 3),
(50, 'userbps6300', 'pass_userbps6300', 63, 1, 3),
(51, 'userbps6400', 'pass_userbps6400', 64, 1, 3),
(52, 'userbps6500', 'pass_userbps6500', 65, 1, 3),
(53, 'userbps7100', 'pass_userbps7100', 71, 1, 3),
(54, 'userbps7200', 'pass_userbps7200', 72, 1, 3),
(55, 'userbps7300', 'pass_userbps7300', 73, 1, 3),
(56, 'userbps7400', 'pass_userbps7400', 74, 1, 3),
(57, 'userbps7500', 'pass_userbps7500', 75, 1, 3),
(58, 'userbps7600', 'pass_userbps7600', 76, 1, 3),
(59, 'userbps8100', 'pass_userbps8100', 81, 1, 3),
(60, 'userbps8200', 'pass_userbps8200', 82, 1, 3),
(61, 'userbps9100', 'pass_userbps9100', 91, 1, 3),
(62, 'userbps9400', 'pass_userbps9400', 94, 1, 3),
(63, 'userbappeda6100', 'pass_userbappeda6100', 61, 2, 3),
(64, 'userbappeda6200', 'pass_userbappeda6200', 62, 2, 3),
(65, 'userbappeda6300', 'pass_userbappeda6300', 63, 2, 3),
(66, 'userbappeda6400', 'pass_userbappeda6400', 64, 2, 3),
(67, 'userbappeda6500', 'pass_userbappeda6500', 65, 2, 3),
(68, 'userbappeda7100', 'pass_userbappeda7100', 71, 2, 3),
(69, 'userbappeda7200', 'pass_userbappeda7200', 72, 2, 3),
(70, 'userbappeda7300', 'pass_userbappeda7300', 73, 2, 3),
(71, 'userbappeda7400', 'pass_userbappeda7400', 74, 2, 3),
(72, 'userbappeda7500', 'pass_userbappeda7500', 75, 2, 3),
(73, 'userbappeda7600', 'pass_userbappeda7600', 76, 2, 3),
(74, 'userbappeda8100', 'pass_userbappeda8100', 81, 2, 3),
(75, 'userbappeda8200', 'pass_userbappeda8200', 82, 2, 3),
(76, 'userbappeda9100', 'pass_userbappeda9100', 91, 2, 3),
(77, 'userbappeda9400', 'pass_userbappeda9400', 94, 2, 3),
(78, 'userbi6100', 'pass_userbi6100', 61, 3, 3),
(79, 'userbi6200', 'pass_userbi6200', 62, 3, 3),
(80, 'userbi6300', 'pass_userbi6300', 63, 3, 3),
(81, 'userbi6400', 'pass_userbi6400', 64, 3, 3),
(82, 'userbi6500', 'pass_userbi6500', 65, 3, 3),
(83, 'userbi7100', 'pass_userbi7100', 71, 3, 3),
(84, 'userbi7200', 'pass_userbi7200', 72, 3, 3),
(85, 'userbi7300', 'pass_userbi7300', 73, 3, 3),
(86, 'userbi7400', 'pass_userbi7400', 74, 3, 3),
(87, 'userbi7500', 'pass_userbi7500', 75, 3, 3),
(88, 'userbi7600', 'pass_userbi7600', 76, 3, 3),
(89, 'userbi8100', 'pass_userbi8100', 81, 3, 3),
(90, 'userbi8200', 'pass_userbi8200', 82, 3, 3),
(91, 'userbi9100', 'pass_userbi9100', 91, 3, 3),
(92, 'userbi9400', 'pass_userbi9400', 94, 3, 3),
(93, 'bps_papua_tengah', 'pass_bps_papua_tengah', 95, 1, 2),
(94, 'bps_papua_pegunungan', 'pass_bps_papua_pegunungan', 96, 1, 2),
(95, 'bps_papua_selatan', 'pass_bps_papua_selatan', 97, 1, 2),
(96, 'bps_papua_barat_daya', 'pass_bps_papua_barat_daya', 98, 1, 2),
(97, 'bappeda_papua_tengah', 'pass_bappeda_papua_tengah', 95, 2, 2),
(98, 'bappeda_papua_pegunungan', 'pass_bappeda_papua_pegunungan', 96, 2, 2),
(99, 'bappeda_papua_selatan', 'pass_bappeda_papua_selatan', 97, 2, 2),
(100, 'bappeda_papua_barat_daya', 'pass_bappeda_papua_barat_daya', 98, 2, 2),
(101, 'bi_papua_tengah', 'pass_bi_papua_tengah', 95, 3, 2),
(102, 'bi_papua_pegunungan', 'pass_bi_papua_pegunungan', 96, 3, 2),
(103, 'bi_papua_selatan', 'pass_bi_papua_selatan', 97, 3, 2),
(104, 'bi_papua_barat_daya', 'pass_bi_papua_barat_daya', 98, 3, 2),
(105, 'user_bps_papua_tengah', 'pass_user_bps_papua_tengah', 95, 1, 3),
(106, 'user_bps_papua_pegunungan', 'pass_user_bps_papua_pegunungan', 96, 1, 3),
(107, 'user_bps_papua_selatan', 'pass_user_bps_papua_selatan', 97, 1, 3),
(108, 'user_bps_papua_barat_daya', 'pass_user_bps_papua_barat_daya', 98, 1, 3),
(109, 'user_bappeda_papua_tengah', 'pass_user_bappeda_papua_tengah', 95, 2, 3),
(110, 'user_bappeda_papua_pegunungan', 'pass_user_bappeda_papua_pegunungan', 96, 2, 3),
(111, 'user_bappeda_papua_selatan', 'pass_user_bappeda_papua_selatan', 97, 2, 3),
(112, 'user_bappeda_papua_barat_daya', 'pass_user_bappeda_papua_barat_daya', 98, 2, 3),
(113, 'user_bi_papua_tengah', 'pass_user_bi_papua_tengah', 95, 3, 3),
(114, 'user_bi_papua_pegunungan', 'pass_user_bi_papua_pegunungan', 96, 3, 3),
(115, 'user_bi_papua_selatan', 'pass_user_bi_papua_selatan', 97, 3, 3),
(116, 'user_bi_papua_barat_daya', 'pass_user_bi_papua_barat_daya', 98, 3, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `excel`
--
ALTER TABLE `excel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `path` (`path`),
  ADD KEY `jenis_excel` (`jenis_excel`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_excel`
--
ALTER TABLE `jenis_excel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
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
-- AUTO_INCREMENT for table `excel`
--
ALTER TABLE `excel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_excel`
--
ALTER TABLE `jenis_excel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `excel`
--
ALTER TABLE `excel`
  ADD CONSTRAINT `excel_ibfk_1` FOREIGN KEY (`jenis_excel`) REFERENCES `jenis_excel` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
