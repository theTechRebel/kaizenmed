-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2015 at 08:05 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kaizenmed`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clinicID` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `start` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('0218f625a5036f7f21d0357c15d41fdade3fb400', '::1', 1442989247, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323938383935383b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3131223b733a343a2274696d65223b733a353a2230383a3030223b7d636c696e696349447c733a333a22434331223b),
('24bac85d589982102d27196637b7e7fc0a922e63', '::1', 1442992616, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323939323539323b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3131223b733a343a2274696d65223b733a353a2230383a3030223b7d636c696e696349447c733a333a22434331223b),
('4d7f4d39ee14eb4e9c9d70903f37c481880273e6', '::1', 1442988389, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323938383138373b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3233223b733a343a2274696d65223b733a353a2230383a3030223b7d636c696e696349447c733a343a2243433334223b),
('509e3888fc01e2e8cc5669a59d4f1215aa9d94ec', '::1', 1443029673, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333032393537303b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b),
('535dd4586595d90e22d69d6e0874ab6e3fcdb2fa', '::1', 1443015817, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333031353831343b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b),
('86b43e671cf82f8b20993f247660cdf6cdbd91c5', '::1', 1443017099, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333031363932393b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3131223b733a343a2274696d65223b733a353a2231303a3030223b7d636c696e696349447c733a333a22434332223b),
('8822daadb71d6ba9a255dc8b04fb78540c33b55b', '::1', 1443016618, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333031363631363b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b),
('9cb97ea48cdbe316af6e24b50b5aaefef144bdd3', '::1', 1443017631, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333031373537323b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3234223b733a343a2274696d65223b733a353a2230373a3030223b7d636c696e696349447c733a333a22434333223b),
('a255adfa49fd489198f0378837e997ead0fa8064', '::1', 1443012309, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333031323233383b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b),
('cb04e93c71bc6d7f226a040ac3c34c4d13ef2837', '::1', 1442988120, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323938373835363b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b),
('d2bbb7e0a08b0f930940be0295137cfed979223e', '::1', 1442987588, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323938373336373b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b),
('e2b88ac0b2404771f0ef40a7e3237e346f4bd333', '::1', 1442988792, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323938383633333b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3233223b733a343a2274696d65223b733a353a2231313a3330223b7d636c696e696349447c733a333a22434331223b),
('f09b9e7cdc2e1e04b041ee3cf6eb7148a6a4fac9', '::1', 1443016231, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333031363232383b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `clinicID` varchar(255) NOT NULL,
  `title` enum('Mr.','Mrs.','Ms','Miss','Doc.','Prof.') DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `idnumber` varchar(255) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `notes` text NOT NULL,
  `dob` date NOT NULL,
  `marital` enum('Married','Single','Divorced','Widowed') DEFAULT NULL,
  `language` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  PRIMARY KEY (`clinicID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clients_account`
--

CREATE TABLE IF NOT EXISTS `clients_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clinic_ID` varchar(255) NOT NULL,
  `title` enum('Mr.','Mrs.','Ms','Miss','Doc.','Prof.') NOT NULL,
  `fname` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `idnumber` varchar(255) NOT NULL,
  `work` text NOT NULL,
  `post` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `clinic_ID` (`clinic_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `clients_family`
--

CREATE TABLE IF NOT EXISTS `clients_family` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clinic_ID` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `allergies` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `other` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `clinic_ID` (`clinic_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `clients_medical_aid`
--

CREATE TABLE IF NOT EXISTS `clients_medical_aid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clinic_ID` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `members_name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `clinic_ID` (`clinic_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `clients_nearest_family_friend`
--

CREATE TABLE IF NOT EXISTS `clients_nearest_family_friend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clinic_ID` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `relation` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `clinic_ID` (`clinic_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `clients_reffered`
--

CREATE TABLE IF NOT EXISTS `clients_reffered` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clinic_ID` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `clinic_ID` (`clinic_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `clients_results`
--

CREATE TABLE IF NOT EXISTS `clients_results` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clinic_ID` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `illness` text NOT NULL,
  `diagnosis` text NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `prescription` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `clinic_ID` (`clinic_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `count`
--

CREATE TABLE IF NOT EXISTS `count` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `count`
--

INSERT INTO `count` (`id`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `notes` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `surname`, `gender`, `notes`) VALUES
(0, '', '', '', ''),
(1, '', 'Masiya', 'Male', ''),
(3, '', 'Gwinji', 'Male', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `userlevel` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `details`, `userlevel`, `status`) VALUES
(1, 'admin', 'admin', 'System Administrator', 'admin', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clients_account`
--
ALTER TABLE `clients_account`
  ADD CONSTRAINT `clients_account_constraint` FOREIGN KEY (`clinic_ID`) REFERENCES `clients` (`clinicID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `clients_family`
--
ALTER TABLE `clients_family`
  ADD CONSTRAINT `clients_family_constraint` FOREIGN KEY (`clinic_ID`) REFERENCES `clients` (`clinicID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `clients_medical_aid`
--
ALTER TABLE `clients_medical_aid`
  ADD CONSTRAINT `clients_medical_aid_constraint` FOREIGN KEY (`clinic_ID`) REFERENCES `clients` (`clinicID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `clients_nearest_family_friend`
--
ALTER TABLE `clients_nearest_family_friend`
  ADD CONSTRAINT `clients_nearest_family_friend_constraint` FOREIGN KEY (`clinic_ID`) REFERENCES `clients` (`clinicID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `clients_reffered`
--
ALTER TABLE `clients_reffered`
  ADD CONSTRAINT `clients_reffered_constraint` FOREIGN KEY (`clinic_ID`) REFERENCES `clients` (`clinicID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `clients_results`
--
ALTER TABLE `clients_results`
  ADD CONSTRAINT `clients_results_contstraint` FOREIGN KEY (`clinic_ID`) REFERENCES `clients` (`clinicID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
