-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2021 at 05:17 PM
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
  `image` varchar(191) COLLATE utf8_bin DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `abbr`, `image`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Abia', 'AB', 'National-War-Museum UMUAHIA.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Adamawa', 'AD', 'unesco monument heritage site. adamawa state.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Akwa Ibom', 'AK', 'ibeno beach AKWAIBOM.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Anambra', 'AN', 'anambrathumb.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Bauchi', 'BA', 'mbula hills bauchi.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Bayelsa', 'BY', 'Bayelsathumb.jpeg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Benue', 'BE', 'food basket of the nation Benue.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Borno', 'BO', 'bornothumb.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Cross River', 'CR', 'agbokim falls cross river.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Delta', 'DE', 'deltathumb.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Ebonyi', 'EB', 'ebonyithumb.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Edo', 'ED', 'edothumb.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Ekiti', 'EK', 'IKOGOSI WARM SPRING EKITI.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Enugu', 'EN', 'National-Museum-Benin.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'FCT', 'FC', 'millenium-park-abuja.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Gombe', 'GO', 'gombethumb.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Imo', 'IM', 'imothumb.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Jigawa', 'JI', 'jigawathumb.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Kaduna', 'KD', 'kajuru castle Kaduna.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Kano', 'KN', 'DALA HILLS KANO.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Katsina', 'KT', 'katsinathumb.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Kebbi', 'KE', 'kebbithumb.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Kogi', 'KO', 'kogi state.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Kwara', 'KW', 'kwarathumb.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Lagos', 'LA', 'Lekki-conservation-centre 2.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Nasarawa', 'NA', 'nasarawathumb.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Niger', 'NI', 'Dr-Ladi-Kwali pottery center Niger.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Ogun', 'OG', 'Olumo-Rock OGUN.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Ondo', 'ON', 'Idanre-Hills ONDO STATE.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Osun', 'OS', 'MicCom-Golf-Course OSUN.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Oyo', 'OY', 'AGODI GARDENS IBADAN.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Plateau', 'PL', 'plateauthumb.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Rivers', 'RI', 'riversthumb.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Sokoto', 'SO', 'Sukur-Cultural-Landscape SOKOTO.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Taraba', 'TA', 'tarabathumb.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Yobe', 'YO', 'yobethumb.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Zamfara', 'ZA', 'zamfarathumb.jpg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
