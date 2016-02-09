-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2016 at 04:40 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `formgen`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE IF NOT EXISTS `form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `Title`) VALUES
(1, 'test'),
(2, 'test'),
(3, 'test'),
(4, 'test'),
(5, 'test'),
(6, 'test'),
(7, 'test'),
(8, 'test'),
(9, 'test'),
(10, 'dasd'),
(11, 'dasd'),
(12, 'dasd'),
(13, 'FOrm'),
(14, 'FOrm'),
(15, 'fsdfdfd');

-- --------------------------------------------------------

--
-- Table structure for table `form_element`
--

CREATE TABLE IF NOT EXISTS `form_element` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `form_id` int(11) NOT NULL,
  `element` varchar(255) NOT NULL,
  `element_label` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `form_element`
--

INSERT INTO `form_element` (`id`, `form_id`, `element`, `element_label`) VALUES
(1, 15, 'drp_dwn', 'fsdfdf'),
(2, 15, '4', 'dasfsfas'),
(3, 15, '4', 'dasfsfas'),
(4, 15, 'txtf', 'sdfdf'),
(5, 15, 'txtarea', 'zxcxcxc'),
(6, 15, 'txtarea', 'zxcxcxc'),
(7, 15, 'txtarea', 'zxcxcxc'),
(8, 15, 'sub_btn', 'vxccv'),
(15, 15, 'sub_btn', 'vxccv'),
(16, 15, 'sub_btn', 'vxccv'),
(17, 15, 'sub_btn', 'vxccv'),
(18, 15, 'sub_btn', 'vxccv');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
