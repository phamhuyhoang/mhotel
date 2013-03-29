-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2013 at 03:02 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mhotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE IF NOT EXISTS `hotels` (
  `hotel_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `address` text NOT NULL,
  `website` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `create_time` datetime NOT NULL,
  PRIMARY KEY (`hotel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotel_id`, `user_id`, `name`, `phone`, `email`, `address`, `website`, `description`, `create_time`) VALUES
(1, 1, 'Khách sạn Hotel Mini', 985699138, 'trongyd@gmail.com', 'Minh Khai, Hà Nội', '', '', '2013-03-29 01:20:05');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE IF NOT EXISTS `tests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `name`, `description`) VALUES
(1, 'Trọng', ''),
(2, 'Tiến', ''),
(3, 'Tiến', ''),
(4, 'Long', ''),
(5, 'Hoa', 'la chi ho');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `address` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `create_time` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `gender`, `birthday`, `email`, `phone`, `mobile`, `address`, `username`, `password`, `active`, `create_time`) VALUES
(1, 'Đàm Đức Trọng', 'Nam', '0000-00-00', 'trongyd@gmail.com', 2147483647, 985699138, 'Minh Khai, Hà Nội', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 0, '2013-03-23 19:33:01'),
(2, 'Đàm Đức Trọng', 'Nữ', '0000-00-00', 'trongyd@gmail.com', 2147483647, 985699138, 'Minh Khai, Hà Nội', 'trongdd', '5416d7cd6ef195a0f7622a9c56b55e84', 0, '2013-03-25 17:55:31'),
(3, 'Hoàng Hà', '', '0000-00-00', 'trongyd@gmail.com', 0, 0, 'Minh Khai, Hà Nội', 'hoangha', 'e10adc3949ba59abbe56e057f20f883e', 0, '2013-03-26 15:18:56'),
(4, 'dam trong', '', '0000-00-00', 'trongyd@gmail.com', 2147483647, 985699138, 'Minh Khai, Hà Nội', 'wefio', 'e10adc3949ba59abbe56e057f20f883e', 0, '2013-03-26 16:11:57');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
