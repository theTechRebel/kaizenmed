-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2015 at 03:11 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `clinicID`, `title`, `doctor`, `details`, `start`, `end`, `date`) VALUES
(2, 'CC1', 'tinashe dumbura Clinic ID:CC1', 'Cletos Masiya', 'jnbkjbjnjknjnknjnnknjkn', '2015-07-30T13:30:00', '2015-07-30T20:00:00', '2015-07-30'),
(3, 'CC2', 'Makosi Musambasi Clinic ID:CC2', 'George Michael', 'Lumber puncture', '2015-07-03T14:30:00', '2015-07-03T19:00:00', '2015-07-03'),
(5, 'CC2', 'fsdfsdfsdf vsdvdsvdvds Clinic ID:CC2', 'Cletos Masiya', 'gfyuguhuhuhhu', '2015-07-27T01:30:00', '2015-07-27T03:15:00', '2015-07-27'),
(7, 'CC3', 'fsdfsdfsdf dasdasdasd Clinic ID:CC3', 'Cletos Masiya', 'cschuashcaiukscnjuascasac', '2015-07-29T08:00:00', '2015-07-29T11:15:00', '2015-07-29'),
(8, 'CC8', 'Nadia dumbura Clinic ID:CC8', 'Cletos Masiya', 'hvsduihvusihviusdvsdvsd', '2015-07-09T11:00:00', '2015-07-09T12:30:00', '2015-07-09'),
(9, 'CC10', 'fsdfsdfsdf dasdasdasd Clinic ID:CC10', 'Cletos Masiya', 'cbsjbcjsjkcnasjknckjasc\r\ncsahbchjbashjcascsac', '2015-07-15 13:30', '2015-07-15 15:00', '2015-07-15'),
(10, 'CC11', 'Nadia Nakai Clinic ID:CC11', 'George Michael', ' chsbhjcbsjbchjsdcs\r\nscdhvchjsjcsd\r\nvdsjhdvsdvsd', '2015-07-28 15:00', '2015-07-28 16:00', '2015-07-28'),
(11, 'CC12', 'fsdfsdfsdf vsdvdsvdvds Clinic ID:CC12', 'Cletos Masiya', 'dshjbsbdjkvnsdjkncjksncjdnckjsdncjksd', '2015-07-14 09:30', '2015-07-14 10:45', '2015-07-14'),
(12, 'CC13', 'fsdfsdfsdf vsdvdsvdvds Clinic ID:CC13', 'Cletos Masiya', 'diabetes', '2015-07-30T14:30:00', '2015-07-30T15:15:00', '2015-07-30'),
(13, 'CC15', 'tinashe dzambwa Clinic ID:CC15', 'Cletos Masiya', 'kidney failure', '2015-07-29T04:00:00', '2015-07-29T05:00:00', '2015-07-29'),
(14, 'CC16', 'deloris dlamini Clinic ID:CC16', 'Cletos Masiya', 'heart failure', '2015-07-04 13:00', '2015-07-04 13:45', '2015-07-04'),
(15, 'CC17', 'njnjknuni Nakai Clinic ID:CC17', 'Cletos Masiya', 'fsfsdfdf', '2015-07-18 12:30', '2015-07-18 13:15', '2015-07-18'),
(16, 'CC18', 'fsdfsdfsdf Nakai Clinic ID:CC18', 'Cletos Masiya', 'dvdsvsdvsd', '2015-07-20 10:00', '2015-07-20 10:30', '2015-07-20'),
(17, 'CC19', 'thomas chivagwe Clinic ID:CC19', 'Cletos Masiya', 'nose bleed', '2015-07-16 07:30', '2015-07-16 08:15', '2015-07-16'),
(18, 'CC15', 'tinashe dzambwa Clinic ID:CC15', 'Cletos Masiya', 'liver clerosis', '2015-07-28 13:00', '2015-07-28 14:30', '2015-07-28'),
(19, 'CC15', 'tinashe dzambwa Clinic ID:CC15', 'Cletos Masiya', 'liver clerosis', '2015-07-07 08:30', '2015-07-07 10:15', '2015-07-07'),
(20, 'CC20', 'Nadia Mujuru Clinic ID:CC20', 'Cletos Masiya', 'heart transplant', '2015-07-17 09:00', '2015-07-17 10:45', '2015-07-17'),
(21, 'CC20', 'Nadia Mujuru Clinic ID:CC20', 'Cletos Masiya', 'heart transplant', '2015-07-16T11:30:00', '2015-07-16T12:45:00', '2015-07-16'),
(22, 'CC8', 'Nadia dumbura Clinic ID:CC8', 'Cletos Masiya', 'kdnksndlkfksl', '2015-07-31 11:30', '2015-07-31 13:15', '2015-07-31'),
(23, 'CC21', 'Thandiwe Mugadza Clinic ID:CC21', 'Cletos Masiya', 'heart transplant', '2015-08-10T07:30:00', '2015-08-10T08:30:00', '2015-08-10'),
(24, 'CC22', 'bjsefbjdb bjjkbjk Clinic ID:CC22', 'Cletos Masiya', 'mnknjenfjkse', '2015-08-15 08:30', '2015-08-15 09:15', '2015-08-15'),
(25, 'CC14', 'Steven Dumbura Clinic ID:CC14', 'Cletos Masiya', 'heart failure', '2015-07-02 14:00', '2015-07-02 16:00', '2015-07-02'),
(26, 'CC14', 'Steven Dumbura Clinic ID:CC14', 'Cletos Masiya', 'heavy', '2015-10-09T04:00:00', '2015-10-09T10:00:00', '2015-10-09'),
(27, 'CC25', 'sbdjahsbhdashjg hbscjbshjabhbashjcba Clinic ID:CC25', 'Cletos Masiya', 'cxxx', '2015-09-10 09:30', '2015-09-10 10:45', '2015-09-10'),
(28, 'CC30', 'cccfdddgg g Clinic ID:CC30', 'Cletos Masiya', 'b', '2015-09-19 09:30', '2015-09-19 11:15', '2015-09-19');

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
('004fe9e8ea85ea0e3cc98c27686cf27f4534d251', '::1', 1442614584, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323631343334353b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a343a2243433134223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3034223b733a343a2274696d65223b733a353a2230373a3330223b7d),
('055af21dbf7d124c9e719f1f60650ecad2101468', '::1', 1442615263, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323631353032353b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a343a2243433134223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3034223b733a343a2274696d65223b733a353a2230373a3330223b7d),
('05c12d3465bb6f40ede5d525cfd20d5758a9585a', '::1', 1442624260, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323632343136393b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a343a2243433234223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3130223b733a343a2274696d65223b733a353a2230393a3330223b7d),
('1a752684e1c89acf612f7e19c1bb75f0ded2cdbf', '::1', 1442619732, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323631393535363b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a343a2243433134223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3034223b733a343a2274696d65223b733a353a2230373a3330223b7d),
('2dd12aeb963753b35628ce6406cd6066e3d915b9', '::1', 1442613097, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323631323830353b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a343a2243433134223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3034223b733a343a2274696d65223b733a353a2230373a3330223b7d),
('2fabd206688a7c5e2938c507a8731d5013369715', '::1', 1442617206, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323631363934353b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a343a2243433134223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3034223b733a343a2274696d65223b733a353a2230373a3330223b7d),
('3169c9932541cc4eea8361e0132d314016dec038', '::1', 1442612364, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323631323336323b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a343a2243433134223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3034223b733a343a2274696d65223b733a353a2230373a3330223b7d),
('3448cdac4c93883c3dccfa7730fac3a5dc87aed8', '::1', 1442621821, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323632313534333b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a343a2243433134223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3034223b733a343a2274696d65223b733a353a2230373a3330223b7d),
('359014a44d496ec38c0e65675d69e06b617a3295', '::1', 1442617791, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323631373530333b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a343a2243433134223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3034223b733a343a2274696d65223b733a353a2230373a3330223b7d),
('36881fed9d4282d77a243b893e0d0183e68854cf', '::1', 1442616044, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323631353734383b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a343a2243433134223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3034223b733a343a2274696d65223b733a353a2230373a3330223b7d),
('4545c9e37956c0e480951a303b278cac056403ee', '::1', 1442614004, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323631333937323b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a343a2243433134223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3034223b733a343a2274696d65223b733a353a2230373a3330223b7d),
('482495b6bd9eaa7cf33b045f63bed66ddf92b2aa', '::1', 1442623501, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323632333238383b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a333a22434331223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3130223b733a343a2274696d65223b733a353a2230393a3330223b7d),
('4e652a03bbda10a71cb8bf6a77d268d8eca92fa2', '::1', 1442623972, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323632333732303b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a343a2243433233223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3130223b733a343a2274696d65223b733a353a2230393a3330223b7d),
('50dfc9366eab90aa87edb037b315476585086e4c', '::1', 1442619374, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323631393134353b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a343a2243433134223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3034223b733a343a2274696d65223b733a353a2230373a3330223b7d),
('603fe8af1452f0532784a30b0ac2f32cf210bd0e', '::1', 1442612358, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323631313938343b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a343a2243433134223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3034223b733a343a2274696d65223b733a353a2230373a3330223b7d),
('73a367fffc1ce81de70558dd485e39364a91a886', '::1', 1442622245, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323632323039353b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a343a2243433134223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3034223b733a343a2274696d65223b733a353a2230373a3330223b7d),
('785822e49a84350b803060fa67838f063284ddad', '::1', 1442625025, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323632343838383b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a343a2243433330223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3139223b733a343a2274696d65223b733a353a2230393a3330223b7d),
('7e26416f0f18f784e78c2693688d7dba856c73c4', '::1', 1442623119, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323632323937303b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a343a2243433134223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3130223b733a343a2274696d65223b733a353a2230393a3330223b7d),
('7fd2a50f311c4a5b8ab24991e9afccc28d5686a1', '::1', 1442616348, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323631363036313b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a343a2243433134223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3034223b733a343a2274696d65223b733a353a2230373a3330223b7d),
('8fcabdc6704d7c9506bcd3f7aaed1582599aeaaf', '::1', 1442622968, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323632323636393b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a343a2243433134223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3034223b733a343a2274696d65223b733a353a2230373a3330223b7d),
('9de1fe013c9ec5ad98becf3393317d094e66f424', '::1', 1442615704, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323631353432303b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a343a2243433134223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3034223b733a343a2274696d65223b733a353a2230373a3330223b7d),
('9fa244325f4522ae77f1c90e409586142be144da', '::1', 1442613296, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323631333136373b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a343a2243433134223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3034223b733a343a2274696d65223b733a353a2230373a3330223b7d),
('a40eeba4c3b516c01f1656cc16ff38a5e26590e4', '::1', 1442615022, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323631343732313b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a343a2243433134223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3034223b733a343a2274696d65223b733a353a2230373a3330223b7d),
('bc85fa56c77b109b4b1c11e07b8aed3c2c82ec05', '::1', 1442613730, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323631333533353b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a343a2243433134223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3034223b733a343a2274696d65223b733a353a2230373a3330223b7d),
('c625ef6244d041e241af09425ede281cb6a49765', '::1', 1442618232, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323631383136333b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a343a2243433134223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3034223b733a343a2274696d65223b733a353a2230373a3330223b7d),
('e167936802a3998d37c226c6cb3ab78af5a97300', '::1', 1442618964, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323631383730343b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a343a2243433134223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3034223b733a343a2274696d65223b733a353a2230373a3330223b7d),
('e2a0adecde9b483ac18f4e29b8cf2936e2da09fa', '::1', 1442618099, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323631373832383b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a343a2243433134223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3034223b733a343a2274696d65223b733a353a2230373a3330223b7d),
('f02d02effeaaeda5e95801a7bcebcdbe6d6a111e', '::1', 1442624815, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323632343532383b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a343a2243433330223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3139223b733a343a2274696d65223b733a353a2230393a3330223b7d),
('fd1132a38ed100c07c7ce345f2df0b249615a15b', '::1', 1442620566, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323632303431303b6c6f676765645f696e7c623a313b64657461696c737c733a32303a2253797374656d2041646d696e6973747261746f72223b757365726c6576656c7c733a353a2261646d696e223b636c696e696349447c733a343a2243433134223b646174657c613a323a7b733a343a2264617465223b733a31303a22323031352d30392d3034223b733a343a2274696d65223b733a353a2230373a3330223b7d);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `title` enum('Mr.','Mrs.','Ms','Miss','Doc.','Prof.') DEFAULT NULL,
  `clinicID` varchar(255) NOT NULL,
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
  PRIMARY KEY (`clinicID`),
  UNIQUE KEY `clinicID` (`clinicID`),
  KEY `clinicID_2` (`clinicID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`title`, `clinicID`, `name`, `surname`, `idnumber`, `gender`, `phone`, `email`, `notes`, `dob`, `marital`, `language`, `occupation`) VALUES
(NULL, 'CC1', 'Nadia', 'Nakai', '63-10020098J78', 'Female', '07770009007', 'adonis@afrikaizen.co.zw', '', '0000-00-00', 'Married', '', ''),
(NULL, 'CC10', 'fsdfsdfsdf', 'dasdasdasd', 'dsadsdasdasd', 'Male', 'fsdfsdfdsfdsfdsfds', 'adonis@afrikaizen.co.zw', '', '0000-00-00', 'Married', '', ''),
(NULL, 'CC11', 'Nadia', 'Nakai', '63-10020098J78', 'Female', '07770009007', 'adonis@afrikaizen.co.zw', '', '0000-00-00', 'Married', '', ''),
(NULL, 'CC12', 'fsdfsdfsdf', 'vsdvdsvdvds', 'dsadsdasdasd', 'Female', '07770009007', 'adonis@afrikaizen.co.zw', '', '0000-00-00', 'Married', '', ''),
(NULL, 'CC13', 'fsdfsdfsdf', 'vsdvdsvdvds', 'dsadsdasdasd', 'Male', 'fsdfsdfdsfdsfdsfds', 'stevedumbura@gmail.com', '', '0000-00-00', 'Married', '', ''),
(NULL, 'CC14', 'Steven', 'Dumbura', '63-2222078K50', 'Male', '0777902073', 'steve@afrikaizen.co.zw', '', '0000-00-00', 'Married', '', ''),
(NULL, 'CC15', 'tinashe', 'dzambwa', '63-10020098J78', 'Male', '07770009007', 'adonis@afrikaizen.co.zw', '', '0000-00-00', 'Married', '', ''),
(NULL, 'CC16', 'deloris', 'dlamini', '63-10020098J78', 'Female', '07770009007', 'adonis@afrikaizen.co.zw', '', '0000-00-00', 'Married', '', ''),
(NULL, 'CC17', 'njnjknuni', 'Nakai', 'dsadsdasdasd', 'Female', 'fsdfsdfdsfdsfdsfds', 'adonis@afrikaizen.co.zw', '', '0000-00-00', 'Married', '', ''),
(NULL, 'CC18', 'fsdfsdfsdf', 'Nakai', 'fsfsdfdsfsdf', 'Male', 'fsdfsdfdsfdsfdsfds', 'stevedumbura@gmail.com', '', '0000-00-00', 'Married', '', ''),
(NULL, 'CC19', 'thomas', 'chivagwe', '63-10020098J78', 'Male', '07770009007', 'thomas@rbz.co.zw', '', '0000-00-00', 'Married', '', ''),
(NULL, 'CC2', 'fsdfsdfsdf', 'vsdvdsvdvds', '63-10020098J78', 'Male', 'dsadsadsadasdasd', 'uiuninini', '', '0000-00-00', 'Married', '', ''),
(NULL, 'CC20', 'Nadia', 'Mujuru', 'fsfsdfdsfsdf', 'Female', 'fsdfsdfdsfdsfdsfds', 'adonis@afrikaizen.co.zw', '', '0000-00-00', 'Married', '', ''),
(NULL, 'CC21', 'Thandiwe', 'Mugadza', '63-222863939H67', 'Female', '077890876', 'thandiwe@mugadza.com', '', '0000-00-00', 'Married', '', ''),
(NULL, 'CC22', 'bjsefbjdb', 'bjjkbjk', 'bkjnbjkn', 'Male', 'njjk', 'jkjk', '', '0000-00-00', 'Married', '', ''),
('Ms', 'CC23', 'dfsdfsdfsdf', 'fsdfsdf', 'fsdfsdfsdf', 'Male', 'fdsfsdf', 'fsdfsdf', '<p>\r\n	fdsfsdfsdfsdf</p>\r\n', '2015-09-15', 'Divorced', 'fdsffdssfd', 'fsddfsdffsd'),
('Ms', 'CC24', 'dsasddasd', 'dsadas', 'dadasdsa', 'Male', 'dsdsdsadsads', 'asdsadsadas', '<p>\r\n	dsadasdasdasd</p>\r\n', '2015-09-29', NULL, 'dasdasdasd', 'dsadasdsadsad'),
('Ms', 'CC25', 'sbdjahsbhdashjg', 'hbscjbshjabhbashjcba', 'vchjashjcbjshabcjsab', 'Male', 'kjncsjknkajscnkjacnjk', 'bjsabjjcaskjcjkanckjan', '<p>\r\n	c</p>\r\n', '2015-09-18', 'Divorced', 'casbjcbasjhcbjhasjbjascas', 'bvjdhjvsjkncasknvskjnvjkn'),
('Miss', 'CC26', 'ppopppbs sbsb', '890989090`', '455255555', 'Female', '45', '55askjnkjdnakjndjk', '', '0000-00-00', NULL, '', ''),
('Miss', 'CC27', 'ppopppbs sbsb', '890989090`', '455255555', 'Female', '45447', '55askjnkjdnakjndjk', '', '0000-00-00', NULL, '', ''),
('Miss', 'CC28', 'ppopppbs sbsb', '890989090`', '455255555', 'Female', '454474', '55askjnkjdnakjndjk', '', '0000-00-00', NULL, '', ''),
('Miss', 'CC29', 'ppopppbs sbsb', '890989090`', '455255555', 'Female', '4544744', '55askjnkjdnakjndjk', '', '0000-00-00', NULL, '', ''),
(NULL, 'CC3', 'fsdfsdfsdf', 'dasdasdasd', 'fsfsdfdsfsdf', 'Female', 'dsadsadsadasdasd', 'stevedumbura@gmail.com', '', '0000-00-00', 'Married', '', ''),
('Ms', 'CC30', 'cccfdddgg', 'g', 'g', 'Female', 'g', 'gyu', '<p>\r\n	ggg</p>\r\n', '2015-09-01', 'Divorced', 'gg', 'gsaggsgdsag'),
(NULL, 'CC8', 'Nadia', 'dumbura', 'fsfsdfdsfsdf', 'Female', 'dsadsadsadasdasd', 'uiuninini', '', '0000-00-00', 'Married', '', '');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `clients_account`
--

INSERT INTO `clients_account` (`id`, `clinic_ID`, `title`, `fname`, `sname`, `address`, `idnumber`, `work`, `post`) VALUES
(16, '', 'Ms', 'vffff', 'ffff', '<p>\r\n	ff</p>\r\n', 'fff', '<p>\r\n	ff</p>\r\n', '<p>\r\n	ff</p>\r\n'),
(18, 'CC11', 'Ms', 'sdasdsa', 'dsadads', '<p>\r\n	dasdsad</p>\r\n', 'dsdsads', '<p>\r\n	dasdad</p>\r\n', '<p>\r\n	dasdasdas</p>\r\n'),
(19, 'CC11', 'Prof.', 'sdadasd', 'dsadasd', '<p>\r\n	sdaasdas</p>\r\n', 'dsadas', '<p>\r\n	dasdasd</p>\r\n', '<p>\r\n	dsaddasd</p>\r\n'),
(20, 'CC10', 'Doc.', 'cvxcvxcv', 'vxcvxc', '<p>\r\n	vcxvxcv</p>\r\n', 'cxvxcv', '<p>\r\n	vcxvxc</p>\r\n', '<p>\r\n	vcxvxcvxc</p>\r\n');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `clients_family`
--

INSERT INTO `clients_family` (`id`, `clinic_ID`, `name`, `dob`, `allergies`, `blood_group`, `other`) VALUES
(1, 'CC14', 'tinashe', '2015-09-15', 'efsfsfd', 'gddsgsdgdsg', '<p>\r\n	gsdgs</p>\r\n'),
(2, 'CC14', 'Thandiwe', '2015-09-02', 'jtykiiuuyuty', 'rgrhrherh', '<p>\r\n	jtjrtjrtjrtjt</p>\r\n');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `clients_medical_aid`
--

INSERT INTO `clients_medical_aid` (`id`, `clinic_ID`, `name`, `members_name`, `number`) VALUES
(1, 'CC11', 'CIMAS', 'Tinashe Ndlovu', '827482789412jkfnksfsf');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `clients_nearest_family_friend`
--

INSERT INTO `clients_nearest_family_friend` (`id`, `clinic_ID`, `name`, `address`, `relation`, `phone`) VALUES
(1, 'CC10', 'sdvsdvsdvsd', '<p>\r\n	svdvsdvsdvsdvsd</p>\r\n', 'vdsvdsvsdvds', 'dvdvsvdsvsd'),
(2, 'CC10', 'scsdvsdvsd', '<p>\r\n	vsdvsdvsdv</p>\r\n', 'vdsvsdv', 'dsvdsvsdv'),
(3, 'CC11', 'Tonderai Masvinyanga', '<p>\r\n	12 Tilburr Road</p>\r\n', 'Bestie', '0777900890'),
(4, 'CC11', 'vkjvkjsnvjsbjhv', '<p>\r\n	jnvskjdnjksdnvkjsdnvksd</p>\r\n', 'jvkdnskvnksjn', 'bjbvjskjvnjk');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `clients_reffered`
--

INSERT INTO `clients_reffered` (`id`, `clinic_ID`, `name`, `address`, `phone`) VALUES
(1, 'CC12', 'Thomas Nicholson', '<p>\r\n	jbjkasfjnasjkfnjkasnfkjnasfjakj</p>\r\n', '0777900897');

-- --------------------------------------------------------

--
-- Table structure for table `count`
--

CREATE TABLE IF NOT EXISTS `count` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `count`
--

INSERT INTO `count` (`id`) VALUES
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `surname`, `gender`, `notes`) VALUES
(0, '', '', '', ''),
(1, 'Cletos', 'Masiya', 'Male', ''),
(2, 'George', 'Michael', 'Male', '');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `employeeNumber` int(11) NOT NULL AUTO_INCREMENT,
  `lastName` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `extension` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `officeCode` varchar(10) NOT NULL,
  `file_url` varchar(250) CHARACTER SET utf8 NOT NULL,
  `jobTitle` varchar(50) NOT NULL,
  PRIMARY KEY (`employeeNumber`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1703 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employeeNumber`, `lastName`, `firstName`, `extension`, `email`, `officeCode`, `file_url`, `jobTitle`) VALUES
(1002, 'Murphy', 'Diane', 'x5800', 'dmurphy@classicmodelcars.com', '1', '', 'President'),
(1056, 'Patterson', 'Mary', 'x4611', 'mpatterso@classicmodelcars.com', '1', '', 'VP Sales'),
(1076, 'Firrelli', 'Jeff', 'x9273', 'jfirrelli@classicmodelcars.com', '1', '', 'VP Marketing'),
(1088, 'Patterson', 'William', 'x4871', 'wpatterson@classicmodelcars.com', '6', '', 'Sales Manager (APAC)'),
(1102, 'Bondur', 'Gerard', 'x5408', 'gbondur@classicmodelcars.com', '4', 'pdftest.pdf', 'Sale Manager (EMEA)'),
(1143, 'Bow', 'Anthony', 'x5428', 'abow@classicmodelcars.com', '1', '', 'Sales Manager (NA)'),
(1165, 'Jennings', 'Leslie', 'x3291', 'ljennings@classicmodelcars.com', '1', '', 'Sales Rep'),
(1166, 'Thompson', 'Leslie', 'x4065', 'lthompson@classicmodelcars.com', '1', '', 'Sales Rep'),
(1188, 'Firrelli', 'Julie', 'x2173', 'jfirrelli@classicmodelcars.com', '2', 'test-2.pdf', 'Sales Rep'),
(1216, 'Patterson', 'Steve', 'x4334', 'spatterson@classicmodelcars.com', '2', '', 'Sales Rep'),
(1286, 'Tseng', 'Foon Yue', 'x2248', 'ftseng@classicmodelcars.com', '3', '', 'Sales Rep'),
(1323, 'Vanauf', 'George', 'x4102', 'gvanauf@classicmodelcars.com', '3', '', 'Sales Rep'),
(1337, 'Bondur', 'Loui', 'x6493', 'lbondur@classicmodelcars.com', '4', '', 'Sales Rep'),
(1370, 'Hernandez', 'Gerard', 'x2028', 'ghernande@classicmodelcars.com', '4', '', 'Sales Rep'),
(1401, 'Castillo', 'Pamela', 'x2759', 'pcastillo@classicmodelcars.com', '4', '', 'Sales Rep'),
(1501, 'Bott', 'Larry', 'x2311', 'lbott@classicmodelcars.com', '7', '', 'Sales Rep'),
(1504, 'Jones', 'Barry', 'x102', 'bjones@classicmodelcars.com', '7', '', 'Sales Rep'),
(1611, 'Fixter', 'Andy', 'x101', 'afixter@classicmodelcars.com', '6', '', 'Sales Rep'),
(1612, 'Marsh', 'Peter', 'x102', 'pmarsh@classicmodelcars.com', '6', '', 'Sales Rep'),
(1619, 'King', 'Tom', 'x103', 'tking@classicmodelcars.com', '6', '', 'Sales Rep'),
(1621, 'Nishi', 'Mami', 'x101', 'mnishi@classicmodelcars.com', '4', '', 'Sales Rep'),
(1625, 'Kato', 'Yoshimi', 'x102', 'ykato@classicmodelcars.com', '5', '', 'Sales Rep'),
(1702, 'Gerard', 'Martin', 'x2312', 'mgerard@classicmodelcars.com', '4', '', 'Sales Rep');

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE IF NOT EXISTS `offices` (
  `officeCode` int(10) NOT NULL AUTO_INCREMENT,
  `city` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `addressLine1` varchar(50) NOT NULL,
  `addressLine2` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country` varchar(50) NOT NULL,
  `postalCode` varchar(15) NOT NULL,
  `territory` varchar(10) NOT NULL,
  PRIMARY KEY (`officeCode`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`officeCode`, `city`, `phone`, `addressLine1`, `addressLine2`, `state`, `country`, `postalCode`, `territory`) VALUES
(1, 'San Francisco', '+1 650 219 4782', '100 Market Street', 'Suite 300', 'CA', 'USA', '94080', 'NA'),
(2, 'Boston', '+1 215 837 0825', '1550 Court Place', 'Suite 102', 'MA', 'USA', '02107', 'NA'),
(3, 'NYC', '+1 212 555 3000', '523 East 53rd Street', 'apt. 5A', 'NY', 'USA', '10022', 'NA'),
(4, 'Paris', '+33 14 723 4404', '43 Rue Jouffroy D', '', '', 'France', '75017', 'EMEA'),
(5, 'Tokyo', '+81 33 224 5000', '4-1 Kioicho', NULL, 'Chiyoda-Ku', 'Japan', '102-8578', 'Japan'),
(6, 'Sydney', '+61 2 9264 2451', '5-11 Wentworth Avenue', 'Floor #2', NULL, 'Australia', 'NSW 2010', 'APAC'),
(7, 'London', '+44 20 7877 2041', '25 Old Broad Street', 'Level 7', NULL, 'UK', 'EC2N 1HN', 'EMEA');

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
