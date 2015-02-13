-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15-02-13 10:27
-- 서버 버전: 5.6.21
-- PHP 버전: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 데이터베이스: `hkust`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `infos`
--

CREATE TABLE IF NOT EXISTS `infos` (
  `developer_name` varchar(20) DEFAULT NULL,
  `personal_info` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `infos`
--

INSERT INTO `infos` (`developer_name`, `personal_info`) VALUES
('JiHyokKIM', 'hello'),
('JangBackLEE', 'Personal-Info goes here.'),
('JungHongKIM', 'Personal-Info goes here.'),
('JaeMinSHIN', 'Personal-Info goes here.'),
('NayeonLEE', 'Personal-Info goes here.'),
('SungMinCHO', 'Personal-Info goes here.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
