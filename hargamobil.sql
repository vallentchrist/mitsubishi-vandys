-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 21, 2021 at 05:46 PM
-- Server version: 10.3.27-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sardanab_hpsardana`
--

-- --------------------------------------------------------

--
-- Table structure for table `hargamobil`
--

CREATE TABLE `hargamobil` (
  `id` int(15) NOT NULL,
  `merek` varchar(30) CHARACTER SET latin1 NOT NULL,
  `kode` varchar(10) CHARACTER SET latin1 NOT NULL,
  `tipe` varchar(70) CHARACTER SET latin1 NOT NULL,
  `harga` decimal(18,0) NOT NULL,
  `urutan` int(11) NOT NULL,
  `discontinue` tinyint(1) NOT NULL DEFAULT 0,
  `varian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hargamobil`
--

INSERT INTO `hargamobil` (`id`, `merek`, `kode`, `tipe`, `harga`, `urutan`, `discontinue`, `varian`) VALUES
(1, 'OUTLANDER SPORT', '001', 'PX-E', 403800000, 68, 1, 'outlander-sport'),
(2, 'OUTLANDER SPORT', '002', 'GLS-E', 377500000, 67, 0, 'outlander-sport'),
(3, 'OUTLANDER SPORT', '003', 'GLX-E', 359500000, 66, 0, 'outlander-sport'),
(4, 'PAJERO SPORT RF', '004', 'DAKAR ROCKFORD FOSGATE', 597000000, 35, 0, ''),
(5, 'PAJERO SPORT', '005', 'DAKAR ULTIMATE (4X4) AT', 740000000, 37, 0, 'pajero-sport'),
(6, 'PAJERO SPORT', '006', 'DAKAR ULTIMATE (4X2) AT', 635000000, 36, 0, 'pajero-sport'),
(7, 'PAJERO SPORT', '007', 'DAKAR (4X2) AT', 585000000, 34, 0, 'pajero-sport'),
(8, 'PAJERO SPORT', '008', 'EXCEED (4X2) AT', 540000000, 32, 0, 'pajero-sport'),
(9, 'PAJERO SPORT', '009', 'EXCEED (4X2) MT', 528000000, 31, 0, 'pajero-sport'),
(10, 'PAJERO SPORT', '010', 'GLX (4X4) MT', 580000000, 33, 0, 'pajero-sport'),
(11, 'TRITON', '011', 'ATHLETE AT', 536500000, 19, 1, 'triton'),
(12, 'TRITON', '012', 'ATHLETE MT', 520000000, 18, 1, 'triton'),
(13, 'MIRAGE', '013', 'EXCEED-H', 210000000, 73, 1, ''),
(14, 'MIRAGE', '014', 'GLS-H', 185000000, 72, 1, ''),
(15, 'MIRAGE', '015', 'GLX-H', 173000000, 71, 1, ''),
(16, 'TRITON', '016', 'ULTIMATE AT 4X4', 570000000, 17, 0, 'triton'),
(17, 'TRITON', '017', 'EXCEED MT 4X4', 541500000, 16, 0, 'triton'),
(18, 'TRITON', '018', 'GLS MT D-CABIN 4X4', 481000000, 15, 0, 'triton'),
(19, 'TRITON', '019', 'HDX MT D-CABIN 4X4', 459500000, 14, 0, 'triton'),
(20, 'TRITON', '020', 'HDX MT SINGLE CABIN 4X4', 396500000, 13, 0, 'triton'),
(21, 'TRITON', '021', 'GLX MT 4X2 SINGLE CABIN', 270000000, 12, 0, 'triton'),
(22, 'TRITON', '022', 'GLX MT 4X2 CAB-CHASSIS', 242000000, 11, 1, 'triton'),
(23, 'XPANDER', '023', 'GLX MT', 237600000, 51, 0, 'xpander'),
(24, 'XPANDER', '024', 'GLS MT', 253600000, 52, 0, 'xpander'),
(25, 'XPANDER', '025', 'EXCEED MT', 260600000, 54, 0, 'xpander'),
(26, 'XPANDER', '026', 'EXCEED AT', 270800000, 55, 0, 'xpander'),
(27, 'XPANDER', '027', 'SPORT AT', 286800000, 57, 0, 'xpander'),
(28, 'XPANDER', '028', 'ULTIMATE AT', 290800000, 58, 0, 'xpander'),
(29, 'DELICA', '029', 'ROYAL', 457000000, 26, 1, ''),
(30, 'DELICA', '030', 'STANDARD', 436000000, 27, 1, ''),
(31, 'L300', '031', 'PICK UP STANDARD', 219000000, 6, 0, 'l300'),
(32, 'L300', '032', 'PICK UP FLATDECK', 220000000, 7, 0, 'l300'),
(33, 'L300', '033', 'BUS CHASSIS', 175000000, 9, 1, 'l300'),
(34, 'L300', '034', 'CAB CHASSIS', 214000000, 8, 0, 'l300'),
(35, 'T120SS', '035', '1.5 L STANDARD PICK UP', 136000000, 1, 1, ''),
(36, 'T120SS', '036', '1.5 L STANDARD PICK UP FLATBED', 137000000, 2, 1, ''),
(37, 'T120SS', '037', '1.5 L 3 WAY WIDE DECK', 139000000, 3, 1, ''),
(38, 'T120SS', '038', 'BUS CHASSIS', 114500000, 4, 1, ''),
(39, 'COLT DIESEL', '039', 'FE 74 S', 420500000, 90, 0, ''),
(40, 'COLT DIESEL', '040', 'FE 73 HD', 407500000, 89, 0, ''),
(41, 'COLT DIESEL', '041', 'FE 74 HDV', 426000000, 92, 0, ''),
(42, 'COLT DIESEL', '042', 'FE SUPER HD', 434000000, 93, 0, ''),
(43, 'COLT DIESEL', '043', 'FE SUPER HDX HI-GEAR', 443000000, 94, 0, ''),
(44, 'COLT DIESEL', '044', 'FE 71 L', 362500000, 83, 0, ''),
(45, 'COLT DIESEL', '045', 'FE 84G HDL', 449500000, 95, 0, ''),
(46, 'COLT DIESEL', '046', 'FE 74 L', 431500000, 91, 0, ''),
(47, 'COLT DIESEL', '047', 'FE 71 LONG BC', 358000000, 85, 0, ''),
(48, 'COLT DIESEL', '048', 'FE 71 PS', 357500000, 82, 0, ''),
(49, 'COLT DIESEL', '049', 'FE 73', 398000000, 88, 0, ''),
(50, 'FUSO', '050', 'FM 517 HL LONG 4X2', 824500000, 113, 0, ''),
(51, 'FUSO', '051', 'FM 517 HL 4X2', 819000000, 112, 0, ''),
(52, 'FUSO', '052', 'FM 517 HS 4X2', 788500000, 111, 0, ''),
(53, 'FUSO', '053', 'FI 1217 4X2', 570000000, 118, 1, ''),
(54, 'FUSO', '054', 'FJ2523 6X2', 801800000, 119, 1, ''),
(55, 'FUSO', '055', 'FN 517 ML2 SUPER LONG 6X2', 939500000, 115, 0, ''),
(56, 'FUSO', '056', 'FN 517 ML2 6X2', 927000000, 114, 0, ''),
(57, 'FUSO', '057', 'FJ2528 6X4', 1052300000, 120, 1, ''),
(58, 'FUSO', '058', 'FN 527 ML 6X4', 1062000000, 117, 0, ''),
(59, 'FUSO', '059', 'FN 527 MS 6X4', 1048500000, 116, 0, ''),
(60, 'TRACTOR HEAD', '060', 'FZ 4028 4X2', 966000000, 141, 0, ''),
(61, 'TRACTOR HEAD', '061', 'FZ 4928 6X4', 890000000, 142, 1, ''),
(62, 'XPANDER', '062', 'GLS AT', 263600000, 53, 0, 'xpander'),
(63, 'XPANDER', '063', 'SPORT MT', 275800000, 56, 0, 'xpander'),
(64, 'OUTLANDER SPORT', '064', 'PX-E ACTION', 411000000, 69, 0, 'outlander-sport'),
(65, 'COLT DIESEL', '065', 'FE 71', 351000000, 81, 0, ''),
(66, 'COLT DIESEL', '066', 'FE 71 BC', 342500000, 84, 0, ''),
(67, 'COLT DIESEL', '067', 'FE 71 LONG BUS (ESPASIO)', 554000000, 87, 0, ''),
(68, 'COLT DIESEL', '068', 'FE 84G BC', 429500000, 96, 0, ''),
(69, 'COLT DIESEL', '069', 'FE 83 BC', 397500000, 97, 1, ''),
(70, 'FUSO', '070', 'FM 65 FS 4X2', 815500000, 121, 0, ''),
(71, 'FUSO', '071', 'FM 65 FS HI-GEAR 4X2', 820000000, 122, 0, ''),
(72, 'FUSO', '072', 'FM 65 FL HI-GEAR', 840500000, 123, 0, ''),
(73, 'FUSO', '073', 'FM 65 FL 4X2 MT', 823500000, 124, 0, ''),
(74, 'FUSO', '074', 'FN 61 FS 6X2 MT', 952500000, 125, 0, ''),
(75, 'FUSO', '075', 'FN 61 FM HD 6X2 MT', 970500000, 126, 0, ''),
(76, 'FUSO', '076', 'FN 62 F 6X4 MT', 1083500000, 127, 0, ''),
(77, 'FUSO', '077', 'FN 62 F HD 6X4 MT', 1134500000, 128, 0, ''),
(78, 'FUSO', '078', 'FN 62 F TH 6X4 MT', 1181100000, 129, 0, ''),
(79, 'FUSO', '079', 'FM 65 FM 4X2 MT', 840000000, 130, 0, ''),
(80, 'FUSO', '080', 'FM 65 FM HI GEAR 4X2 MT', 846000000, 131, 0, ''),
(81, 'FUSO', '081', 'FM 65 FSL 4X2 MT', 857500000, 132, 0, ''),
(82, 'FUSO', '082', 'FM 65 FSL HI GEAR 4X2 MT', 862500000, 133, 0, ''),
(83, 'FUSO', '083', 'FN 61 FL 6X2 MT', 982000000, 134, 0, ''),
(84, 'FUSO', '084', 'FN 62 FL HD 6X4 MT', 1133000000, 135, 0, ''),
(85, 'ECLIPSE CROSS', '085', 'AMETHYST BLACK', 500100000, 40, 0, 'eclipse-cross'),
(86, 'ECLIPSE CROSS', '086', 'SILKY WHITE', 503100000, 41, 0, 'eclipse-cross'),
(87, 'ECLIPSE CROSS', '087', 'RED DIAMOND', 505100000, 42, 0, 'eclipse-cross'),
(88, 'XPANDER', '088', 'ULTIMATE LIMITED 4X2 AT', 288500000, 59, 1, 'xpander'),
(89, 'COLT DIESEL', '089', 'FE 71 LONG BC NC', 346900000, 86, 0, ''),
(90, 'XPANDER CROSS', '090', 'XPANDER CROSS 1.5L M/T', 284800000, 60, 0, 'xpander-cross'),
(91, 'XPANDER CROSS', '091', 'XPANDER CROSS 1.5L A/T', 294800000, 61, 0, 'xpander-cross'),
(92, 'XPANDER CROSS', '092', 'XPANDER CROSS 1.5L A/T PREMIUM', 310800000, 62, 0, 'xpander-cross'),
(93, 'FUSO', '093', 'FN 61 FL HD 6X2 MT', 999000000, 136, 0, ''),
(94, 'XPANDER BLACK EDITION', '094', 'EXCEED LIMITED M/T', 274300000, 60, 0, 'xpander-black-edition'),
(95, 'XPANDER CROSS RF', '095', 'XPANDER CROSS RF', 319800000, 5, 0, 'xpander-cross-rf'),
(96, 'XPANDER BLACK EDITION', '096', 'EXCEED LIMITED A/T', 284300000, 61, 0, 'xpander-black-edition'),
(97, 'PAJERO SPORT RF', '097', 'DAKAR ULTIMATE ROCKFORD FOSGATE', 639000000, 36, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hargamobil`
--
ALTER TABLE `hargamobil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hargamobil`
--
ALTER TABLE `hargamobil`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
