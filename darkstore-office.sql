-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 09, 2014 at 05:56 PM
-- Server version: 5.5.35
-- PHP Version: 5.3.10-1ubuntu3.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
  `productImages_productId` varchar(512) COLLATE utf8_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=172 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_cost`, `product_category`, `product_images_name`, `product_description`, `product_published`) VALUES
(1, 'first images', '1500', 1, 'a:4:{s:6:"image1";a:2:{s:4:"name";s:45:"3d-abstract_other_beautiful-daisies_47359.jpg";s:4:"main";s:1:"1";}s:6:"image2";a:1:{s:4:"name";s:0:"";}s:6:"image3";a:1:{s:4:"name";s:0:"";}s:6:"image4";a:1:{s:4:"name";s:0:"";}}', NULL, NULL),
(2, 'test1', '1000', 1, 'a:4:{s:6:"image1";a:2:{s:4:"name";s:15:"vw-opt-1600.jpg";s:4:"main";s:1:"1";}s:6:"image2";a:1:{s:4:"name";s:39:"nature-hills-sunrise-landscape-wide.jpg";}s:6:"image3";a:1:{s:4:"name";s:15:"vw-opt-1600.jpg";}s:6:"image4";a:1:{s:4:"name";s:45:"3d-abstract_other_beautiful-daisies_47359.jpg";}}', NULL, NULL),
(3, 'test1', '1000', 1, 'a:4:{s:6:"image1";a:2:{s:4:"name";s:15:"vw-opt-1600.jpg";s:4:"main";s:1:"1";}s:6:"image2";a:1:{s:4:"name";s:39:"nature-hills-sunrise-landscape-wide.jpg";}s:6:"image3";a:1:{s:4:"name";s:15:"vw-opt-1600.jpg";}s:6:"image4";a:1:{s:4:"name";s:45:"3d-abstract_other_beautiful-daisies_47359.jpg";}}', NULL, NULL),
(4, 'test1', '1000', 1, 'a:4:{s:6:"image1";a:2:{s:4:"name";s:15:"vw-opt-1600.jpg";s:4:"main";s:1:"1";}s:6:"image2";a:1:{s:4:"name";s:39:"nature-hills-sunrise-landscape-wide.jpg";}s:6:"image3";a:1:{s:4:"name";s:15:"vw-opt-1600.jpg";}s:6:"image4";a:1:{s:4:"name";s:45:"3d-abstract_other_beautiful-daisies_47359.jpg";}}', NULL, NULL),
(5, 'test2', '1000', 1, 'a:4:{s:6:"image1";a:2:{s:4:"name";s:15:"vw-opt-1600.jpg";s:4:"main";s:1:"1";}s:6:"image2";a:1:{s:4:"name";s:39:"nature-hills-sunrise-landscape-wide.jpg";}s:6:"image3";a:1:{s:4:"name";s:15:"vw-opt-1600.jpg";}s:6:"image4";a:1:{s:4:"name";s:45:"3d-abstract_other_beautiful-daisies_47359.jpg";}}', NULL, NULL),
(6, 'test1', '1000', 1, 'a:4:{s:6:"image1";a:2:{s:4:"name";s:15:"vw-opt-1600.jpg";s:4:"main";s:1:"1";}s:6:"image2";a:1:{s:4:"name";s:39:"nature-hills-sunrise-landscape-wide.jpg";}s:6:"image3";a:1:{s:4:"name";s:15:"vw-opt-1600.jpg";}s:6:"image4";a:1:{s:4:"name";s:45:"3d-abstract_other_beautiful-daisies_47359.jpg";}}', 'hello this is a sample text', NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=48 ;

--
-- Dumping data for table `slideshows`
--

INSERT INTO `slideshows` (`id`, `type`, `backgroundimage`, `insideimage1`, `insideimage2`, `insideimage3`, `title`, `subtitle`) VALUES
(41, '2', 'images (2).jpg', 'images (5).jpg', 'images (6).jpg', 'images (4).jpg', NULL, NULL),
(42, '3', 'inside.jpg', 'inside2.jpg', 'bg3.jpg', 'bg2.jpg', 'Welcom to Darkstore', 'darkstore'),
(43, '2', 'ferrari-bike.jpg', 'images (8).jpg', 'images (7).jpg', 'bike2.jpg', NULL, NULL),
(44, '1', 'Screenshot from 2014-09-25 14:27:33.png', NULL, NULL, NULL, 'gfhfhfh', 'gfhnfh'),
(45, '1', 'mount_shuksan.jpg', NULL, NULL, NULL, 'Natural', 'Images'),
(46, '1', 'Screenshot from 2014-09-25 14:27:15.png', NULL, NULL, NULL, 'code', 'code'),
(47, '1', 'test.jpg', NULL, NULL, NULL, 'test', 'test');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=53 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(48, 'hosein', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'admin'),
(49, 'hosein1', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'regular'),
(50, 'hosein2', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'regular'),
(51, 'hosein3', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'regular'),
(52, '111111', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'regular');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
