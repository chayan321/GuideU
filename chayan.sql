-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 07, 2018 at 09:28 AM
-- Server version: 5.7.13-log
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chayan`
--

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
CREATE TABLE IF NOT EXISTS `states` (
  `state_code` char(2) NOT NULL,
  `state` varchar(50) NOT NULL,
  PRIMARY KEY (`state_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_code`, `state`) VALUES
('AN', 'Andaman & Nicobar Islands'),
('AP', 'Andhra Pradesh'),
('AR', 'Arunachal Pradesh'),
('AS', 'Assam'),
('BR', 'Bihar'),
('CG', 'Chhattisgarh'),
('CH', 'Chandigarh'),
('DD', 'Daman & Diu'),
('DL', 'Delhi'),
('DN', 'Dadra & Nagar Haveli'),
('GA', 'Goa'),
('GJ', 'Gujarat'),
('HP', 'Himachal Pradesh'),
('HR', 'Haryana'),
('JH', 'Jharkhand'),
('JK', 'Jammu & Kashmir'),
('KA', 'Karnataka'),
('KL', 'Kerala'),
('LD', 'Lakshadweep'),
('MH', 'Maharashtra'),
('ML', 'Meghalaya'),
('MN', 'Manipur'),
('MP', 'Madhya Pradesh'),
('MZ', 'Mizoram'),
('NL', 'Nagaland'),
('OR', 'Orissa'),
('PB', 'Punjab'),
('PY', 'Puducherry'),
('RJ', 'Rajasthan'),
('SK', 'Sikkim'),
('TN', 'Tamil Nadu'),
('TR', 'Tripura'),
('TS', 'Telangana'),
('UK', 'Uttarakhand'),
('UP', 'Uttar Pradesh'),
('WB', 'West Bengal');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
