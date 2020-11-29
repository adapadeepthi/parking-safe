-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 12:14 PM
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
-- Table structure for table `allcustomers`
--

CREATE TABLE `allcustomers` (
  `id` int(11) NOT NULL,
  `password` varchar(15) DEFAULT NULL,
  `phonenum` varchar(10) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allcustomers`
--

INSERT INTO `allcustomers` (`id`, `password`, `phonenum`, `Email`) VALUES
(21, 'Testing', '9848761234', 'tester@gmail.com'),
(22, 'Deepthi', '7330782878', 'sweetyadapa01@gmail.'),
(23, 'Pavan', '9220033113', 'pavan@gmail.com'),
(24, 'Avinash', '9390572780', 'avinash@gmail.com'),
(25, 'Yoganandam', '1234567890', 'yoganandam@gmail.com'),
(26, 'Bhavya', '2345678901', 'bhavya@gmail.com'),
(27, 'Sriram', '3456789012', 'sriram@gmail.com'),
(28, 'Navya', '7675089839', 'navya@gmail.com'),
(32, 'l', '7330782878', 'l'),
(33, 'Deepthi', '7330786805', 'deepthiadapa502@gmai'),
(36, 'Deepa', '9347610583', 'deepa@gmail.com'),
(37, 'Abc', '9123456789', 'abc@gmail.com'),
(38, 'Ash', '9441031121', 'ash@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allcustomers`
--
ALTER TABLE `allcustomers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allcustomers`
--
ALTER TABLE `allcustomers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
