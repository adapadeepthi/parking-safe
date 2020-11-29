-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 12:21 PM
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
-- Table structure for table `landlord`
--

CREATE TABLE `landlord` (
  `id` int(11) NOT NULL,
  `cid` int(11) DEFAULT NULL,
  `name` varchar(15) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `landmark` varchar(20) DEFAULT NULL,
  `area` varchar(20) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `lat` float(10,6) DEFAULT NULL,
  `lng` float(10,6) DEFAULT NULL,
  `amt_space` int(4) DEFAULT NULL,
  `rem` int(5) DEFAULT NULL,
  `cost_per_hr` int(4) DEFAULT NULL,
  `history` varchar(1) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `landlord`
--

INSERT INTO `landlord` (`id`, `cid`, `name`, `address`, `landmark`, `area`, `phone`, `lat`, `lng`, `amt_space`, `rem`, `cost_per_hr`, `history`, `email`) VALUES
(1, 21, 'test', 'MG Rd', 'pvpmall', 'Vijayawada', '9848761234', 16.502399, 80.642700, 10, 8, 60, NULL, 'tester@gmail.com'),
(3, 23, 'pavan', 'beach', 'chilakalapudi', 'Machilipatnam', '9220033113', 16.133200, 81.192902, 20, 18, 30, NULL, 'pavan@gmail.com'),
(4, 24, 'Avinash', 'durga temple', 'durga temple', 'vijayawada', '9390572780', 16.515400, 80.605904, 25, 25, 40, NULL, 'avinash@gmail.com'),
(5, 25, 'yoganandam', 'ieth nagar', 'iethnagar', 'hyderabad', '1234567890', 17.467699, 78.379799, 40, 40, 30, NULL, 'yoganandam@gmail.com'),
(6, 26, 'bhavya', 'machilipatnam bus stand', 'bus stand', 'machilipatnam', '2345678901', 16.188000, 81.136803, 50, 50, 20, NULL, 'bhavya@gmail.com'),
(7, 27, 'sriram', 'rajendranagar', 'rajendra nagar', 'gudivada', '3456789012', 16.485901, 80.681801, 20, 18, 30, NULL, 'sriram@gmail.com'),
(8, 28, 'navya', 'rajendranagar', 'rajendranagar', 'gudivada', '7675089839', 16.445101, 80.997704, 1, -15, 50, NULL, 'navya@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `landlord`
--
ALTER TABLE `landlord`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cid` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `landlord`
--
ALTER TABLE `landlord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `landlord`
--
ALTER TABLE `landlord`
  ADD CONSTRAINT `landlord_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `allcustomers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
