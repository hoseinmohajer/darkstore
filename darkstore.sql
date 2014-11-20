-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2014 at 03:42 PM
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
-- Table structure for table `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(128) NOT NULL AUTO_INCREMENT,
  `goodname` varchar(512) COLLATE utf8_persian_ci DEFAULT NULL,
  `goodcost` varchar(512) COLLATE utf8_persian_ci DEFAULT NULL,
  `cat` int(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=1 ;

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
(48, 'hosein', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'regular'),
(49, 'hosein1', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'regular'),
(50, 'hosein2', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'regular'),
(51, 'hosein3', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'regular'),
(52, '111111', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'regular');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
