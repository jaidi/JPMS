-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 09, 2013 at 08:44 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jpms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient_bio_data`
--

CREATE TABLE IF NOT EXISTS `patient_bio_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `almoner_number` varchar(20) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` int(11) DEFAULT NULL,
  `father_name` varchar(50) DEFAULT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `address` varchar(256) DEFAULT 'Jinnah Hospital, Lahore.',
  `telephone_number` varchar(20) DEFAULT NULL,
  `bed_number` varchar(20) DEFAULT NULL,
  `date_of_admission` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admitted_from` varchar(20) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `patient_bio_data`
--

INSERT INTO `patient_bio_data` (`id`, `almoner_number`, `name`, `age`, `sex`, `father_name`, `occupation`, `address`, `telephone_number`, `bed_number`, `date_of_admission`, `admitted_from`, `created_by`) VALUES
(10, 'test2', 'saddaaam', 23, 0, 'lasdfj', 'ksadjfl', 'lkdfj', 'laksjdlfjasdlfjal;sd', 'sldkfj', '2013-01-06 05:20:47', 'asdf', 0),
(11, '123', '123', 123, 0, '123', '123', '123', '123', '123', '2013-01-10 01:35:47', '123', 0),
(12, '654', '258', 456, 0, '456', '456', '456', '456', '456', '2013-01-10 01:37:28', '456', 0),
(13, '456', '54', 456, 0, '546', '456', '456', '456', '456', '2013-01-10 01:40:38', '456', 0);
