-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 21, 2016 at 07:35 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `BillID` int(10) NOT NULL AUTO_INCREMENT,
  `DateOfAdmit` date NOT NULL,
  `DateOfDischarge` date NOT NULL,
  `TotalRoomFees` int(10) NOT NULL,
  `ChargeForMedicine` int(10) NOT NULL,
  `TotalPayment` int(10) NOT NULL,
  PRIMARY KEY (`BillID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `DoctorID` int(10) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Sex` varchar(5) NOT NULL,
  `ContactNumber` int(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Salary` int(10) NOT NULL,
  `Specialization` varchar(10) NOT NULL,
  PRIMARY KEY (`DoctorID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE IF NOT EXISTS `medicine` (
  `MedicineID` int(5) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `UnitPrice` int(10) NOT NULL,
  PRIMARY KEY (`MedicineID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE IF NOT EXISTS `nurse` (
  `NurseID` int(5) NOT NULL AUTO_INCREMENT,
  `RoomID` int(5) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Sex` varchar(5) NOT NULL,
  `Address` varchar(10) NOT NULL,
  `ContactNumber` int(10) NOT NULL,
  PRIMARY KEY (`NurseID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `PatientID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `ContactNumber` int(10) NOT NULL,
  `DateOfAdmit` date NOT NULL,
  `Disease` varchar(10) NOT NULL,
  `RoomID` int(10) NOT NULL,
  `Comments` text NOT NULL,
  PRIMARY KEY (`PatientID`),
  KEY `RoomID` (`RoomID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`PatientID`, `Name`, `Sex`, `Address`, `ContactNumber`, `DateOfAdmit`, `Disease`, `RoomID`, `Comments`) VALUES
(2, 'M.R.P.M.Meddegoda', 'Female', 'No.4,Beragala Rd,Kegalle', 719135016, '2016-09-21', 'Headache', 3, 'Admitted'),
(3, 'M.R.P.M.Rathnayake', 'Female', 'D20A,Karapalagala,Kegalle', 719135016, '2016-09-22', 'Fever', 1, 'Dengue'),
(4, 'M.R.I.S.Meddegoda', 'Male', 'Beragala Rd,Kegalle', 719135016, '2016-09-23', 'Fever', 3, ''),
(5, 'M.R.P.M.Rathnayake', 'Male', 'Beragala Rd,Kegalle', 719135016, '2016-09-21', 'Fever', 4, '2 days'),
(6, 'M.R.P.M.Rathnapala', 'Male', 'Beligala,Kegalle', 719135015, '2016-09-21', 'Fever', 5, '2 days of fever');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `PrescriptionID` int(5) NOT NULL AUTO_INCREMENT,
  `MedicineID` int(5) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `UnitPrice` int(10) NOT NULL,
  `PatientID` int(10) NOT NULL,
  PRIMARY KEY (`PrescriptionID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `RoomID` int(5) NOT NULL AUTO_INCREMENT,
  `RoomType` varchar(20) NOT NULL,
  `RoomFees` int(10) NOT NULL,
  `Availability` tinyint(1) NOT NULL,
  PRIMARY KEY (`RoomID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`RoomID`, `RoomType`, `RoomFees`, `Availability`) VALUES
(1, 'General room', 500, 1),
(2, 'Twin Share Room', 1000, 1),
(3, 'Deluxe Room', 1500, 1),
(4, 'Super Deluxe Room', 2000, 1),
(5, 'Premium', 2500, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
