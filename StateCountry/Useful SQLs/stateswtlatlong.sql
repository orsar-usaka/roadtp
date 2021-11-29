-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2021 at 09:54 AM
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
  `latitude` decimal(10,7) NOT NULL,
  `longitude` decimal(11,8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `abbr`, `image`, `latitude`, `longitude`) VALUES
(1, 'Abia', 'AB', 'National-War-Museum UMUAHIA.jpg', '5.4527000', '7.52480000'),
(2, 'Adamawa', 'AD', 'unesco monument heritage site. adamawa state.jpg', '9.3265000', '12.39840000'),
(3, 'Akwa Ibom', 'AK', 'ibeno beach AKWAIBOM.jpg', '4.9057000', '7.85370000'),
(4, 'Anambra', 'AN', 'anambrathumb.jpg', '6.2209000', '6.93700000'),
(5, 'Bauchi', 'BA', 'mbula hills bauchi.jpg', '10.7761000', '9.99920000'),
(6, 'Bayelsa', 'BY', 'Bayelsathumb.jpeg', '4.7719000', '6.06990000'),
(7, 'Benue', 'BE', 'food basket of the nation Benue.jpg', '7.3369000', '8.74040000'),
(8, 'Borno', 'BO', 'bornothumb.jpg', '11.8846000', '13.15200000'),
(9, 'Cross River', 'CR', 'agbokim falls cross river.jpg', '5.8702000', '8.59880000'),
(10, 'Delta', 'DE', 'deltathumb.jpg', '5.7040000', '5.93390000'),
(11, 'Ebonyi', 'EB', 'ebonyithumb.jpg', '6.2649000', '8.01370000'),
(12, 'Edo', 'ED', 'edothumb.jpg', '6.6342000', '5.93040000'),
(13, 'Ekiti', 'EK', 'IKOGOSI WARM SPRING EKITI.jpg', '7.7190000', '5.31100000'),
(14, 'Enugu', 'EN', 'National-Museum-Benin.jpg', '6.5364000', '7.43560000'),
(15, 'FCT', 'FC', 'millenium-park-abuja.jpg', '9.0765000', '7.49140000'),
(16, 'Gombe', 'GO', 'gombethumb.jpg', '10.3638000', '11.19280000'),
(17, 'Imo', 'IM', 'imothumb.jpg', '5.5720000', '7.05880000'),
(18, 'Jigawa', 'JI', 'jigawathumb.jpg', '12.2280000', '0.00000000'),
(19, 'Kaduna', 'KD', 'kajuru castle Kaduna.jpg', '10.3764000', '7.70950000'),
(20, 'Kano', 'KN', 'DALA HILLS KANO.jpg', '12.0000000', '8.51670000'),
(21, 'Katsina', 'KT', 'katsinathumb.jpg', '12.3797000', '7.63060000'),
(22, 'Kebbi', 'KE', 'kebbithumb.jpg', '11.4942000', '4.23330000'),
(23, 'Kogi', 'KO', 'kogi state.jpg', '7.7337000', '6.69060000'),
(24, 'Kwara', 'KW', 'kwarathumb.jpg', '8.9669000', '4.38740000'),
(25, 'Lagos', 'LA', 'Lekki-conservation-centre 2.jpg', '6.4500000', '3.40000000'),
(26, 'Nasarawa', 'NA', 'nasarawathumb.jpg', '8.4998000', '8.19970000'),
(27, 'Niger', 'NI', 'Dr-Ladi-Kwali pottery center Niger.jpg', '9.9309000', '5.59830000'),
(28, 'Ogun', 'OG', 'Olumo-Rock OGUN.jpg', '6.9980000', '3.47370000'),
(29, 'Ondo', 'ON', 'Idanre-Hills ONDO STATE.jpg', '6.9149000', '5.14780000'),
(30, 'Osun', 'OS', 'MicCom-Golf-Course OSUN.jpg', '7.5629000', '4.52000000'),
(31, 'Oyo', 'OY', 'AGODI GARDENS IBADAN.jpg', '8.1574000', '3.61470000'),
(32, 'Plateau', 'PL', 'plateauthumb.jpg', '9.2182000', '9.51790000'),
(33, 'Rivers', 'RI', 'riversthumb.jpg', '4.8396000', '6.91120000'),
(34, 'Sokoto', 'SO', 'Sukur-Cultural-Landscape SOKOTO.jpg', '13.0533000', '5.32230000'),
(35, 'Taraba', 'TA', 'tarabathumb.jpg', '7.9994000', '10.77400000'),
(36, 'Yobe', 'YO', 'yobethumb.jpg', '12.2939000', '11.43900000'),
(37, 'Zamfara', 'ZA', 'zamfarathumb.jpg', '12.1222000', '6.22360000');

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
