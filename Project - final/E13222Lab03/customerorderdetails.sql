-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 24, 2016 at 07:06 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e13222lab02`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerorderdetails`
--

CREATE TABLE IF NOT EXISTS `customerorderdetails` (
  `OrderNo` int(4) NOT NULL AUTO_INCREMENT,
  `size` varchar(10) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `cap` tinyint(1) DEFAULT NULL,
  `wristBand` tinyint(1) DEFAULT NULL,
  `firstName` varchar(20) DEFAULT NULL,
  `lastName` varchar(20) DEFAULT NULL,
  `address1` varchar(20) DEFAULT NULL,
  `address2` varchar(20) DEFAULT NULL,
  `address3` varchar(20) DEFAULT NULL,
  `comments` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`OrderNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `customerorderdetails`
--

INSERT INTO `customerorderdetails` (`OrderNo`, `size`, `color`, `cap`, `wristBand`, `firstName`, `lastName`, `address1`, `address2`, `address3`, `comments`) VALUES
(1, 'small', 'red', 1, 1, 'Prabhashi', 'Meddegoda', 'd 20', 'Beragala Rd', 'Kegalle', 'Nice work'),
(2, 'small', 'red', 0, 0, 'Prabashi', 'Kalupahana', 'No.4', 'Karapalagala', 'Kegalle', 'Need a yellow 1'),
(3, 'small', 'red', 1, 0, 'Prabhashi', 'Kalupahana', 'd', 'Karapalagala', 'Kandy', 'good'),
(4, 'large', 'blue', 1, 0, 'Dihani', 'Samarathunga', 'N02', 'Peradeniya Rd', 'Kandy', 'Need more sizes'),
(5, 'large', 'red', 1, 1, 'Dinusha', 'Gamlath', 'No23', 'Katugastota', 'Kandy', 'Need as soon as possible');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
