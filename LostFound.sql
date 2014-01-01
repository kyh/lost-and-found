-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 31, 2013 at 10:59 PM
-- Server version: 5.5.34-cll
-- PHP Version: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ccit1241_drupaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `LostFound`
--

CREATE TABLE IF NOT EXISTS `LostFound` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `dateFound` date NOT NULL,
  `building` varchar(30) NOT NULL,
  `claimed` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=186 ;

--
-- Dumping data for table `LostFound`
--

INSERT INTO `LostFound` (`id`, `type`, `color`, `dateFound`, `building`, `claimed`) VALUES
(185, 'keys', 'white', '0000-00-00', 'ccit', 1),
(184, 'purse', 'grey', '2012-12-02', 'north', 0),
(183, 'ipod', 'green', '2013-10-16', 'ccit', 1),
(182, 'keys', 'white', '0000-00-00', 'ccit', 1),
(147, 'wallet', 'purple', '2013-08-13', 'ccit', 0),
(155, 'laptop', 'grey', '2013-08-06', 'ccit', 1),
(151, 'jacket', 'purple', '2013-08-07', 'north', 0),
(154, 'backpack', 'green', '2013-08-03', 'ccit', 0),
(153, 'hat', 'black', '2013-08-01', 'kaneff', 0),
(180, '', '', '0000-00-00', '', 0),
(181, 'keys', 'white', '0000-00-00', 'ccit', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
