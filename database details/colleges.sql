-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 12:19 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `googlemaps`
--

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` int(4) DEFAULT NULL,
  `name` varchar(15) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `landmark` varchar(20) DEFAULT NULL,
  `area` varchar(20) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `lat` float(10,6) DEFAULT NULL,
  `lng` float(10,6) DEFAULT NULL,
  `amt_space` int(4) DEFAULT NULL,
  `show_space` int(4) DEFAULT NULL,
  `rem` int(4) DEFAULT NULL,
  `cost_per_hr` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `name`, `address`, `landmark`, `area`, `phone`, `lat`, `lng`, `amt_space`, `show_space`, `rem`, `cost_per_hr`) VALUES
(1, 'deepthi', 'Santhi Nagar, Gowrisankara Puram, Gudivada', 'santhi nagar', 'gudivada', '9123456789', 16.435400, 80.994301, 10, 10, 10, 200),
(2, 'yoganandam', 'rajendranagar', 'rajendra nagar', 'gudivada', '9123456789', 16.442699, 80.996803, 10, 10, 10, 200),
(2, 'yoganandam', 'rajendranagar', 'rajendra nagar', 'gudivada', '9123456078', 16.445101, 80.997704, 10, 10, 10, 200),
(1, 'deepthi', 'rajendranagar', 'gudivada', 'gudivada', '1234567890', 16.485901, 80.681801, 10, 10, 10, 200),
(3, 'bhavya', 'durga temple', 'durga temple', 'vijayawada', '1234567890', 16.515400, 80.605904, 10, 10, 10, 200),
(3, 'bhavya', 'ABC area', 'pvp mall', 'vijayawada', '1234567890', 16.502399, 80.642700, 10, 10, 10, 600),
(3, 'bhavya', 'ABC area', 'trendset mall', 'vijayawada', '1234567890', 16.498600, 80.653503, 10, 10, 10, 600),
(4, 'sriram', 'machilipatnam bus stand', '', 'machilipatnam', '1234567890', 16.188000, 81.136803, 10, 10, 10, 200),
(4, 'sriram', 'beach', 'chilakalapudi', 'machilipatnam', '1235467892', 16.133200, 81.192902, 10, 10, 10, 200),
(4, 'sriram', 'srnagar', 'srnagar', 'hyderabad', '1234567898', 17.443600, 78.445801, 19, 19, 19, 300),
(4, 'sriram', 'ieth nagar', 'iethnagar', 'hyderabad', '1234567893', 17.467699, 78.379799, 19, 19, 19, 100);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
