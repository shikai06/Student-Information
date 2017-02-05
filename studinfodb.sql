-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 05, 2017 at 05:51 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `studinfodb`
--
CREATE DATABASE IF NOT EXISTS `studinfodb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `studinfodb`;

-- --------------------------------------------------------

--
-- Table structure for table `infotbl`
--

CREATE TABLE IF NOT EXISTS `infotbl` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Dateofbirth` date NOT NULL,
  `Age` int(11) DEFAULT NULL,
  `Course` varchar(100) NOT NULL,
  `Year` varchar(50) DEFAULT NULL,
  `Address` varchar(100) NOT NULL,
  `Citizenship` varchar(100) DEFAULT NULL,
  `Status` varchar(100) DEFAULT NULL,
  `BloodType` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `infotbl`
--

INSERT INTO `infotbl` (`ID`, `FirstName`, `LastName`, `Gender`, `Dateofbirth`, `Age`, `Course`, `Year`, `Address`, `Citizenship`, `Status`, `BloodType`) VALUES
(19, 'Mary Joy', 'Cainta', 'female', '1997-01-18', 18, 'Medical Technology', 'Junior', 'Galas', 'Filipino', 'Single', 'O'),
(20, 'Michelle May', 'Basa', 'female', '1997-05-30', 18, 'Nursing', 'Junior', 'Galas', 'Filipino', 'Single', 'O'),
(21, 'Lloric', 'Garcia', 'male', '1990-03-15', 25, 'Information Technology', 'Junior', 'Parañaque', 'Filipino', 'Single', 'AB'),
(22, 'Neil Christian', 'Culanculan', 'male', '1996-09-17', 19, 'Information Technology', 'Junior', 'Roxas', 'Filipino', 'Married', 'A'),
(29, 'Ling', 'Antiquina', 'female', '1996-09-06', 19, 'Information Technology', 'Junior', 'St. Filomena', 'Filipino', 'Single', 'O'),
(33, 'Janne Krish Viviene ', 'Erasmo', 'female', '1997-01-11', 18, 'Information Technology', 'Junior', 'Turno', 'Filipino', 'Engaged', 'O'),
(47, 'Jinkee', 'Po', 'female', '1996-06-10', 20, 'Information Technology', 'Senior', 'Sicayab', 'Filipino', 'Single', 'O');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
