-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 02, 2015 at 10:10 AM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `darkstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `productimages`
--

CREATE TABLE IF NOT EXISTS `productimages` (
  `id` int(128) NOT NULL AUTO_INCREMENT,
  `productimages_name` varchar(512) COLLATE utf8_persian_ci DEFAULT NULL,
  `productimages_directoryName` varchar(512) COLLATE utf8_persian_ci DEFAULT NULL,
  `productimages_imagesDirectoryAddress` varchar(512) COLLATE utf8_persian_ci DEFAULT NULL,
  `productimages_isMain` varchar(512) COLLATE utf8_persian_ci NOT NULL,
  `productimages_productId` varchar(512) COLLATE utf8_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=177 ;

--
-- Dumping data for table `productimages`
--

INSERT INTO `productimages` (`id`, `productimages_name`, `productimages_directoryName`, `productimages_imagesDirectoryAddress`, `productimages_isMain`, `productimages_productId`) VALUES
(130, 'McLaren_650S_GT3_2015_06_1024x768.jpg', 'McLaren650S', '/files/productsimage/McLaren650S', '0', '203'),
(132, 'McLaren_650S_GT3_2015_01_1024x768.jpg', 'McLaren650S', '/files/productsimage/McLaren650S', '1', '203'),
(133, 'Arash_AF10_05_1024x768.jpg', 'Arash', '/files/productsimage/Arash', '1', '204'),
(134, 'Arash_AF10_07_1024x768.jpg', 'Arash', '/files/productsimage/Arash', '0', '204'),
(135, 'Arash_AF10_01_1024x768.jpg', 'Arash', '/files/productsimage/Arash', '0', '204'),
(136, 'Bugatti_Veyron_grand_vit_sport_2013_02_1024x768.jpg', 'BugattiVeyrongrandvitsport', '/files/productsimage/BugattiVeyrongrandvitsport', '1', '205'),
(137, 'Bugatti_Veyron_grand_vit_sport_2013_03_1024x768.jpg', 'BugattiVeyrongrandvitsport', '/files/productsimage/BugattiVeyrongrandvitsport', '0', '205'),
(138, 'Bugatti_Veyron_grand_vit_sport_2013_01_1024x768.jpg', 'BugattiVeyrongrandvitsport', '/files/productsimage/BugattiVeyrongrandvitsport', '0', '205'),
(139, 'Cobra_Venom_08_1024x768.jpg', 'CobraVenom', '/files/productsimage/CobraVenom', '1', '206'),
(140, 'Cobra_Venom_12_1024x768.jpg', 'CobraVenom', '/files/productsimage/CobraVenom', '0', '206'),
(141, 'Cobra_Venom_01_1024x768.jpg', 'CobraVenom', '/files/productsimage/CobraVenom', '0', '206'),
(142, 'Dodge_Challenger_RT_Shaker_201303_1024x768.jpg', 'DodgeChallengerRTShaker', '/files/productsimage/DodgeChallengerRTShaker', '1', '207'),
(143, 'Dodge_Challenger_RT_Shaker_201306_1024x768.jpg', 'DodgeChallengerRTShaker', '/files/productsimage/DodgeChallengerRTShaker', '0', '207'),
(144, 'Dodge_Challenger_RT_Shaker_201308_1024x768.jpg', 'DodgeChallengerRTShaker', '/files/productsimage/DodgeChallengerRTShaker', '0', '207'),
(145, 'Opel_Astra_OPC_Extreme_2015_01_1024x768.jpg', 'OpelAstraOPCExtreme2015', '/files/productsimage/OpelAstraOPCExtreme2015', '1', '208'),
(146, 'Opel_Astra_OPC_Extreme_2015_10_1024x768.jpg', 'OpelAstraOPCExtreme2015', '/files/productsimage/OpelAstraOPCExtreme2015', '0', '208'),
(147, 'Opel_Astra_OPC_Extreme_2015_06_1024x768.jpg', 'OpelAstraOPCExtreme2015', '/files/productsimage/OpelAstraOPCExtreme2015', '0', '208'),
(148, 'Opel_Astra_OPC_Extreme_2015_05_1024x768.jpg', 'OpelAstraOPCExtreme2015', '/files/productsimage/OpelAstraOPCExtreme2015', '0', '208'),
(149, 'chevrolet_camaro_378_1024x768.jpg', 'ChevroletCamaro', '/files/productsimage/ChevroletCamaro', '1', '209'),
(150, 'chevrolet_camaro_379_1024x768.jpg', 'ChevroletCamaro', '/files/productsimage/ChevroletCamaro', '0', '209'),
(151, 'BMW_M4_Coupe_2015_21_1024x768.jpg', 'BMWM4COUPE', '/files/productsimage/BMWM4COUPE', '1', '210'),
(152, 'BMW_M4_Coupe_2015_17_1024x768.jpg', 'BMWM4COUPE', '/files/productsimage/BMWM4COUPE', '0', '210'),
(153, 'BMW_M4_Coupe_2015_23_1024x768.jpg', 'BMWM4COUPE', '/files/productsimage/BMWM4COUPE', '0', '210'),
(154, 'BMW_M4_Coupe_2015_04_1024x768.jpg', 'BMWM4COUPE', '/files/productsimage/BMWM4COUPE', '0', '210'),
(156, 'McLaren_650S_GT3_2015_04_1024x768.jpg', 'McLaren650S', '/files/productsimage/McLaren650S', '0', '203'),
(157, 'Lotus_Esprit_134_1024x768.jpg', 'LotusEsprit', '/files/productsimage/LotusEsprit', '1', '212'),
(158, 'Lotus_Esprit_136_1024x768.jpg', 'LotusEsprit', '/files/productsimage/LotusEsprit', '0', '212'),
(159, 'Lotus_Esprit_138_1024x768.jpg', 'LotusEsprit', '/files/productsimage/LotusEsprit', '0', '212'),
(160, 'Hennesey_Venom_GT_2013_01_1024x768.jpg', 'henneseyVenomGT', '/files/productsimage/henneseyVenomGT', '1', '213'),
(161, 'Hennesey_Venom_GT_2013_11_1024x768.jpg', 'henneseyVenomGT', '/files/productsimage/henneseyVenomGT', '0', '213'),
(162, 'Hennesey_Venom_GT_2013_02_1024x768.jpg', 'henneseyVenomGT', '/files/productsimage/henneseyVenomGT', '0', '213'),
(163, 'Jaguar_XKR-S-GT_004_1024x768.jpg', 'Jaguar_XKR-S-GT', '/files/productsimage/Jaguar_XKR-S-GT', '1', '214'),
(164, 'Jaguar_XKR-S-GT_005_1024x768.jpg', 'Jaguar_XKR-S-GT', '/files/productsimage/Jaguar_XKR-S-GT', '0', '214'),
(171, 'BMW_M4_Coupe_2015_17_1024x768.jpg', 'Other', '/files/productsimage/Other', '1', '216'),
(172, 'Jaguar_XKR-S-GT_005_1024x768.jpg', 'Other', '/files/productsimage/Other', '0', '216'),
(173, 'Toyota_Tundra_Lets_Go_Moto_2013_08_1024x768.jpg', 'Other', '/files/productsimage/Other', '0', '216'),
(174, 'Toyota_F-1_Concept_2014_06_1024x768.jpg', 'TheBest', '/files/productsimage/TheBest', '1', '217'),
(175, 'MG_Icon_concept_2012_01_1024x768.jpg', 'TheBest', '/files/productsimage/TheBest', '0', '217'),
(176, 'Hennesey_Venom_GT_2013_01_1024x768.jpg', 'TheBest', '/files/productsimage/TheBest', '0', '217');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(128) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(512) COLLATE utf8_persian_ci DEFAULT NULL,
  `product_cost` varchar(512) COLLATE utf8_persian_ci DEFAULT NULL,
  `product_category` int(128) DEFAULT NULL,
  `product_images_name` varchar(512) COLLATE utf8_persian_ci DEFAULT NULL,
  `product_description` varchar(512) COLLATE utf8_persian_ci DEFAULT NULL,
  `product_published` varchar(128) COLLATE utf8_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=218 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_cost`, `product_category`, `product_images_name`, `product_description`, `product_published`) VALUES
(203, 'McLaren', '15000000000', 1, NULL, 'McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren McLaren ', '1'),
(204, 'Arash', '1800000000000000', 2, NULL, 'arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash arash ', '1'),
(205, 'Dodge Challenger RT Shaker', '1478965324', 3, NULL, 'Dodge Challenger RT Shaker Dodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger ', '1'),
(206, 'Cobra', '14565450000', 4, NULL, 'Cobra Venom Cobra Venom Cobra Venom Cobra Venom Cobra Venom Cobra Venom Cobra Venom Cobra Venom Cobra Venom Cobra Venom Cobra Venom Cobra Venom Cobra Venom Cobra Venom Cobra Venom Cobra Venom Cobra Venom Cobra Venom Cobra Venom Cobra Venom Cobra Venom Cobra Venom Cobra Venom Cobra Venom Cobra Venom Cobra Venom ', '1'),
(207, 'Dodge Challenger RT Shaker', '1478965324', 5, NULL, 'Dodge Challenger RT Shaker Dodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger RT ShakerDodge Challenger ', '1'),
(208, 'Chevrolet Camaro', '169000225500', 6, NULL, 'Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrole', '1'),
(209, 'Chevrolet', '169000225500', 7, NULL, 'Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrolet Camaro 378 Chevrole', '1'),
(210, 'BMW M4 COUPE', '10052222222222222222', 8, NULL, 'BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M4 COUPE BMW M', '1'),
(212, 'hennesey Venom GT', '200000', 9, NULL, 'hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT ', '1'),
(213, 'hennesey', '200000', 1, NULL, 'hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT hennesey Venom GT ', '1'),
(214, 'Jaguar_XKR-S-GT', '70000000000', 10, NULL, 'Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT Jaguar_XKR-S-GT ', '1'),
(216, 'The Best', '15000000000', 1, NULL, 'The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best', '1'),
(217, 'The Best', '15000000000', 1, NULL, 'The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best The Best', '1');

-- --------------------------------------------------------

--
-- Table structure for table `slideshows`
--

CREATE TABLE IF NOT EXISTS `slideshows` (
  `id` int(128) NOT NULL AUTO_INCREMENT,
  `type` varchar(512) COLLATE utf8_persian_ci DEFAULT NULL,
  `backgroundimage` varchar(512) COLLATE utf8_persian_ci DEFAULT NULL,
  `insideimage1` varchar(512) COLLATE utf8_persian_ci DEFAULT NULL,
  `insideimage2` varchar(512) COLLATE utf8_persian_ci DEFAULT NULL,
  `insideimage3` varchar(512) COLLATE utf8_persian_ci DEFAULT NULL,
  `title` varchar(512) COLLATE utf8_persian_ci DEFAULT NULL,
  `subtitle` varchar(512) COLLATE utf8_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=56 ;

--
-- Dumping data for table `slideshows`
--

INSERT INTO `slideshows` (`id`, `type`, `backgroundimage`, `insideimage1`, `insideimage2`, `insideimage3`, `title`, `subtitle`) VALUES
(48, '1', 'Jaguar_XKR-S-GT_010_1024x768.jpg', NULL, NULL, NULL, 'Jaguar', 'XKR-S-GT'),
(49, '1', 'Toyota_Tundra_Lets_Go_Moto_2013_09_1024x768.jpg', NULL, NULL, NULL, 'Toyota', 'Toyota Tundra Lets Go Moto'),
(52, '1', 'BMW_M4_Coupe_2015_23_1024x768.jpg', NULL, NULL, NULL, 'BMW M4 COUPE', '2015 - 23'),
(54, '2', 'MG_Icon_concept_2012_03_1024x768.jpg', 'MG_Icon_concept_2012_02_1024x768.jpg', 'MG_Icon_concept_2012_01_1024x768.jpg', 'MG_Icon_concept_2012_03_1024x768.jpg', NULL, NULL),
(55, '4', 'Bugatti_Veyron_grand_vit_sport_2013_03_1024x768.jpg', 'Bugatti_Veyron_grand_vit_sport_2013_02_1024x768.jpg', NULL, NULL, 'Bugatti', 'Bugatti Veyron Grand sport');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(128) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(256) COLLATE utf8_persian_ci NOT NULL,
  `role` enum('admin','regular') COLLATE utf8_persian_ci NOT NULL DEFAULT 'regular',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=49 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(48, 'hosein', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
