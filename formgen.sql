-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2016 at 05:37 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `Title`) VALUES
(1, 'fdsfsd'),
(2, 'fsdf'),
(3, 'fsdf'),
(4, 'czxcx'),
(5, 'czxcx'),
(6, 'fdsfd'),
(7, 'dfsd'),
(8, 'dfsd'),
(9, 'cxvc'),
(10, 'vvx'),
(11, 'cxzc'),
(12, 'fdsfsdfsdf'),
(13, 'dfds'),
(14, 'cxzcxc');

-- --------------------------------------------------------

--
-- Table structure for table `form_element`
--

CREATE TABLE IF NOT EXISTS `form_element` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `form_id` int(11) NOT NULL,
  `element` varchar(255) NOT NULL,
  `element_label` varchar(500) DEFAULT NULL,
  `options` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `form_element`
--

INSERT INTO `form_element` (`id`, `form_id`, `element`, `element_label`, `options`) VALUES
(1, 1, 'txtf', 'dsfdf', ''),
(2, 2, 'txtarea', 'fsdf', ''),
(3, 3, 'txtarea', 'fsdf', ''),
(4, 4, 'txtf', 'czxcx', ''),
(5, 5, 'txtf', 'czxcx', ''),
(6, 6, 'txtf', 'fsdfd', ''),
(7, 7, 'txtarea', 'sdfsd', ''),
(8, 8, 'txtarea', 'sdfsd', ''),
(9, 9, 'txtarea', 'vxcv', ''),
(10, 10, 'txtf', 'vxcv', ''),
(11, 11, 'txtarea', 'czxcx', ''),
(12, 12, 'txtf', 'fsdf', ''),
(13, 13, 'txtarea', 'fsdf', ''),
(14, 14, 'drp_dwn', 'czxcx', 'czxczxcx'),
(15, 9, 'drp_dwn', 'gdfgf', 'xczxc,fdhhdfh'),
(16, 9, 'drp_dwn', 'gdfgf', 'xczxc,fdhhdfh'),
(17, 9, 'drp_dwn', 'cxzc', 'cxzcx,dgdgsd,gdgdfgf'),
(18, 9, 'drp_dwn', 'cxzc', 'cxzcx,dgdgsd,gdgdfgf'),
(19, 9, 'drp_dwn', 'cxzc', 'cxzcx,dgdgsd,gdgdfgf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
