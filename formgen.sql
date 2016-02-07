-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2016 at 07:44 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `formgen`
--

-- --------------------------------------------------------

--
-- Table structure for table `elements`
--

CREATE TABLE IF NOT EXISTS `elements` (
`id` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `element_html` varchar(500) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elements`
--

INSERT INTO `elements` (`id`, `name`, `element_html`) VALUES
(1, 'Text Field', '<input type="text" class="form-control" name="element_name">'),
(2, 'Text Area', '<textarea name="element_text"></textarea>'),
(3, 'Dropdown', '<select class="form-control" name="elemet_dropdown">\r\n                <option value="">Select Value</option>\r\n            </select>'),
(4, 'Checkbox', '<input type="checkbox" name="element_check"/>'),
(5, 'Radio Button', '<input type="radio" name="element_radio"/>');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE IF NOT EXISTS `form` (
`id` int(11) NOT NULL,
  `Title` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form_element`
--

CREATE TABLE IF NOT EXISTS `form_element` (
`id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `element_id` int(11) NOT NULL,
  `element_label` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elements`
--
ALTER TABLE `elements`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_element`
--
ALTER TABLE `form_element`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elements`
--
ALTER TABLE `elements`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `form_element`
--
ALTER TABLE `form_element`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

