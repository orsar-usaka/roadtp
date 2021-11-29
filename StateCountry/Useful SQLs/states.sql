-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 04:14 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5
-- Created by: Ibidapo Adeolu
-- SQL Version: 1.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ef_newdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `abbr` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `abbr`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Abia', 'AB', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Adamawa', 'AD', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Akwa Ibom', 'AK', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Anambra', 'AN', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Bauchi', 'BA', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Bayelsa', 'BY', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Benue ', 'BE', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Borno', 'BO', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Cross River', 'CR', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Delta', 'DE', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Ebonyi', 'EB', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Edo', 'ED', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Ekiti ', 'EK', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Enugu', 'EN', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'FCT', 'FC', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Gombe', 'GO', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Imo', 'IM', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Jigawa ', 'JI', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Kaduna ', 'KD', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Kano', 'KN', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Katsina', 'KT', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Kebbi', 'KE', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Kogi', 'KO', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Kwara', 'KW', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Lagos', 'LA', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Nasarawa', 'NA', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Niger', 'NI', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Ogun', 'OG', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Ondo', 'ON', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Osun', 'OS', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Oyo', 'OY', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Plateau', 'PL', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Rivers', 'RI', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Sokoto', 'SO', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Taraba', 'TA', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Yobe', 'YO', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Zamfara', 'ZA', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
