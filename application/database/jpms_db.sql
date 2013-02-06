-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2013 at 06:37 PM
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
-- Table structure for table `dpn`
--

CREATE TABLE IF NOT EXISTS `dpn` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `almoner_number` varchar(20) NOT NULL,
  `pulse_rate` int(11) DEFAULT NULL,
  `blood_pressure` int(11) DEFAULT NULL,
  `respiratory_rate` int(11) DEFAULT NULL,
  `temperature` int(11) DEFAULT NULL,
  `cvp` int(11) DEFAULT NULL,
  `pain` varchar(50) DEFAULT NULL,
  `problems` varchar(256) DEFAULT NULL,
  `plan` varchar(256) DEFAULT NULL,
  `action` varchar(256) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `dpn`
--

INSERT INTO `dpn` (`id`, `almoner_number`, `pulse_rate`, `blood_pressure`, `respiratory_rate`, `temperature`, `cvp`, `pain`, `problems`, `plan`, `action`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'htc', 12, 21, 45, 54, 78, 'pain', 'prob', 'plan', 'action', NULL, '0000-00-00 00:00:00', '2013-01-09 22:37:27'),
(2, 'test2', 12, 21, 21, 21, 21, '21', '21', '21', '21', NULL, '0000-00-00 00:00:00', '2013-01-09 23:49:23');

-- --------------------------------------------------------

--
-- Table structure for table `dpn_remarks`
--

CREATE TABLE IF NOT EXISTS `dpn_remarks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dpn_id` int(11) NOT NULL,
  `pgr` text,
  `sr` text,
  `vs` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `dpn_remarks`
--

INSERT INTO `dpn_remarks` (`id`, `dpn_id`, `pgr`, `sr`, `vs`, `created_at`, `updated_at`) VALUES
(4, 2, 'laksdjflaskj', 'kesa hai baiii', 'aa paiii', NULL, '2013-01-12 22:24:05');

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE IF NOT EXISTS `drugs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `almoner_number` varchar(20) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `dose` int(11) DEFAULT NULL,
  `route` varchar(50) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `prescribed_by` varchar(50) DEFAULT NULL,
  `cancelled_by` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `drugs`
--


-- --------------------------------------------------------

--
-- Table structure for table `examination`
--

CREATE TABLE IF NOT EXISTS `examination` (
  `id` int(11) NOT NULL,
  `almoner_number` int(11) NOT NULL,
  `doctor_name` varchar(50) NOT NULL,
  `gpe` text,
  `head` text,
  `neck` text,
  `thorax` text,
  `abdomen` text,
  `perineal` text,
  `upper_limb` text,
  `lower_limb` text,
  `pr_pv` text,
  `proctosigmoidoscopy` text,
  `local` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examination`
--

INSERT INTO `examination` (`id`, `almoner_number`, `doctor_name`, `gpe`, `head`, `neck`, `thorax`, `abdomen`, `perineal`, `upper_limb`, `lower_limb`, `pr_pv`, `proctosigmoidoscopy`, `local`, `created_at`, `updated_at`) VALUES
(0, 0, '0', 'lksdjf', 'lksdjf8l98*6', '*939*lk3sd9jf396', '5239dksjf6a3l953', '93', '96', '3985', '3', '93', '9', '3', NULL, '2013-02-02 18:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `almoner_number` int(11) NOT NULL,
  `doctor_name` varchar(50) DEFAULT NULL,
  `presenting_complaint` text,
  `hopi` text,
  `past_history` text,
  `active_problems` text,
  `drug_allergies` text,
  `bleeding_disorders` text,
  `family_history` text,
  `personal_history` text,
  `provisional_diagnosis` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `almoner_number`, `doctor_name`, `presenting_complaint`, `hopi`, `past_history`, `active_problems`, `drug_allergies`, `bleeding_disorders`, `family_history`, `personal_history`, `provisional_diagnosis`, `created_at`, `updated_at`) VALUES
(1, 123, '0', 'sljf', 'lksdfj', 'kldsjf', 'kldsjf', 'klsdfj', 'kldsfj', 'laksdfj', 'lksdfj', 'lksdfj', NULL, '2013-02-03 03:33:03');

-- --------------------------------------------------------

--
-- Table structure for table `operation`
--

CREATE TABLE IF NOT EXISTS `operation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `almoner_number` int(11) NOT NULL,
  `bed_number` varchar(20) NOT NULL,
  `starting_time` varchar(10) NOT NULL,
  `ending_time` varchar(10) NOT NULL,
  `operation` text NOT NULL,
  `surgeon` varchar(50) NOT NULL,
  `nurse` varchar(50) NOT NULL,
  `anaesthesia` varchar(100) NOT NULL,
  `anaesthesia_by` varchar(50) NOT NULL,
  `incision` varchar(50) DEFAULT NULL,
  `findings` text,
  `procedure` text,
  `closure` text,
  `drain` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `operation`
--

INSERT INTO `operation` (`id`, `almoner_number`, `bed_number`, `starting_time`, `ending_time`, `operation`, `surgeon`, `nurse`, `anaesthesia`, `anaesthesia_by`, `incision`, `findings`, `procedure`, `closure`, `drain`, `created_at`) VALUES
(2, 123, 'sldk', '02:00', '05:00', 'aslkdjf', 'l;ksadfj;lak', 'lksdfja;slkj', 'sadfjlkj', 'lskdfjl', 'jsakldfj', 'ksdlfjl', 'slkdfj', 'lskdfjl', 'sdklfjl', '2013-02-03 16:21:28');

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `type`, `created_at`, `updated_at`) VALUES
(1, 'wikiRao', '123456', 1, '2013-01-01 00:40:38', '2013-01-02 00:40:48');
