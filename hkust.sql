-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2015 at 09:40 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hkust`
--
CREATE DATABASE IF NOT EXISTS `hkust` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hkust`;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
`key` smallint(5) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(8) NOT NULL,
  `quantity` int(5) NOT NULL,
  `content` text NOT NULL,
  `seller` varchar(20) NOT NULL,
  `img_path` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
`key` smallint(5) unsigned NOT NULL,
  `id` varchar(20) CHARACTER SET utf8 NOT NULL,
  `pw` varchar(20) CHARACTER SET utf8 NOT NULL,
  `sid` int(11) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`key`, `id`, `pw`, `sid`, `name`) VALUES
(1, 'admin', 'admin', 11111111, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
`key` smallint(5) unsigned NOT NULL,
  `id` varchar(20) NOT NULL,
  `sid` int(11) NOT NULL,
  `title` varchar(70) NOT NULL,
  `content` text NOT NULL,
  `wdate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`key`, `id`, `sid`, `title`, `content`, `wdate`) VALUES
(3, 'admin', 11111111, 'asdf', 'asdf', '2015-02-02 17:16:16'),
(4, 'admin', 11111111, 'asdf', 'asdf', '2015-02-02 17:16:16'),
(5, 'admin', 11111111, 'asdfasdf', 'asdfdsf', '2015-02-02 17:16:45'),
(6, 'admin', 11111111, 'asdfasdf', 'asdfdsf', '2015-02-02 17:16:45'),
(7, 'admin', 11111111, 'asdf', 'asdf', '2015-02-02 18:06:33'),
(8, 'admin', 11111111, 'asdf', 'asdf', '2015-02-02 18:06:33'),
(9, 'admin', 11111111, 'asdf', 'asdf', '2015-02-02 18:14:54'),
(10, 'admin', 11111111, 'asdf', 'asdf', '2015-02-02 18:14:54'),
(11, 'admin', 11111111, 'í•˜í•˜í•˜í•˜', 'í•˜í•˜í–ã…‘í•˜í•˜í•³', '2015-02-02 18:15:03'),
(12, 'admin', 11111111, 'í•˜í•˜í•˜í•˜', 'í•˜í•˜í–ã…‘í•˜í•˜í•³', '2015-02-02 18:15:03'),
(13, 'admin', 11111111, 'ì™œ ìƒˆë¡œìš´ ê¸€ì´ ë°‘ìœ¼ë¡œ ë‚´ë ¤ê°€ëƒ', 'í–ëƒì•¼í•˜ì•„í–í–í•˜í•˜í•˜ã…ã…Ž', '2015-02-02 18:15:18'),
(14, 'admin', 11111111, 'ì™œ ìƒˆë¡œìš´ ê¸€ì´ ë°‘ìœ¼ë¡œ ë‚´ë ¤ê°€ëƒ', 'í–ëƒì•¼í•˜ì•„í–í–í•˜í•˜í•˜ã…ã…Ž', '2015-02-02 18:15:18'),
(15, 'admin', 11111111, 'fdfdf', 'sdfs', '2015-02-02 18:37:34'),
(16, 'admin', 11111111, 'fdfdf', 'sdfs', '2015-02-02 18:37:34'),
(17, 'admin', 11111111, 'dsadf', 'asdffff', '2015-02-02 18:41:49'),
(18, 'admin', 11111111, 'dsadf', 'asdffff', '2015-02-02 18:41:49'),
(19, 'admin', 11111111, 'asdfsdfas', 'asdfffff', '2015-02-02 18:41:57'),
(20, 'admin', 11111111, 'asdfsdfas', 'asdfffff', '2015-02-02 18:41:57'),
(21, 'admin', 11111111, 'sdfasdf', 'asdfsda', '2015-02-02 18:42:29'),
(22, 'admin', 11111111, 'sdfasdf', 'asdfsda', '2015-02-02 18:42:29'),
(23, 'asdfs', 214123, 'asdfasdg', 'gdsafadf', '2015-02-02 18:42:38'),
(24, 'asdfs', 214123, 'asdfasdg', 'gdsafadf', '2015-02-02 18:42:38'),
(25, 'admin', 11111111, 'asdfsdf', 'asdf', '2015-02-02 18:44:42'),
(26, 'admin', 11111111, 'ì•„ë‹ˆë„¤!? ìž˜ëœë‹¤', 'í˜¸í˜¸í˜¸', '2015-02-02 18:48:05'),
(27, 'admin', 11111111, 'ì•„ë‹ˆì•¼ ã… ã… ã… ', 'ë°‘ìœ¼ë¡œ ë‚´ë ¤ê°€ìž–ì•„ ã… ã… ', '2015-02-02 18:48:17'),
(28, 'admin', 11111111, 'ads', 'fasdf', '2015-02-02 18:59:29'),
(29, 'admin', 11111111, 'fasdfdsf', 'asdfsdf', '2015-02-02 19:04:24'),
(30, 'admin', 11111111, 'ë²„ê·¸ë§Žì•„..ã… ã… ã… ', 'ë²„ê·¸ë§Žë‹¹..ã… ã… ã… ', '2015-02-02 19:04:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
 ADD PRIMARY KEY (`key`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
 ADD PRIMARY KEY (`key`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`key`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
MODIFY `key` smallint(5) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
MODIFY `key` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `key` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
