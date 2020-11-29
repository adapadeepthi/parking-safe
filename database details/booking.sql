-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 12:15 PM
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
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `cid` int(11) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phnno` varchar(10) DEFAULT NULL,
  `from_area` varchar(10) DEFAULT NULL,
  `to_area` varchar(10) DEFAULT NULL,
  `vehicle_num` varchar(10) DEFAULT NULL,
  `from_time` datetime DEFAULT NULL,
  `to_time` datetime DEFAULT NULL,
  `lid` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `cid`, `email`, `phnno`, `from_area`, `to_area`, `vehicle_num`, `from_time`, `to_time`, `lid`) VALUES
(1, 21, 'tester@gmail.com', '9848761234', 'machilipat', 'machilipat', 'asdfghjklk', '2020-10-31 00:00:00', '2020-10-31 00:00:00', 6),
(2, 21, 'tester@gmail.com', '9848761234', 'gudivada', 'gudivada', 'asdfgfdsdf', '2020-10-31 00:00:00', '2020-10-31 00:00:00', 7),
(4, 36, 'deepa@gmail.com', '9347610583', 'gudivada', 'gudivada', 'sdfgf', '2020-11-02 00:00:00', '2020-11-02 00:00:00', 8),
(5, 36, 'deepa@gmail.com', '9347610583', 'gudivada', 'gudivada', 'sdfgf', '2020-11-02 00:00:00', '2020-11-02 00:00:00', 8),
(8, 32, 'l', '7330782878', 'gudivada', 'gudivada', 'sdsfgb', '2020-11-28 00:00:00', '2020-11-28 00:00:00', 8),
(11, 32, 'l', '7330782878', 'gudivada', 'gudivada', 'erdtyuiokp', '2020-11-28 00:00:00', '2020-11-28 00:00:00', 8),
(12, 32, 'l', '7330782878', 'gudivada', 'gudivada', 'sdfghj', '2020-11-28 00:00:00', '2020-11-28 00:00:00', 8),
(13, 32, 'l', '7330782878', 'gudivada', 'gudivada', 'sdfghj', '2020-11-28 00:00:00', '2020-11-28 00:00:00', 8),
(14, 32, 'l', '7330782878', 'gudivada', 'gudivada', 'asdfghj', '2020-11-28 00:00:00', '2020-11-28 00:00:00', 7),
(15, 32, 'l', '7330782878', 'gudivada', 'gudivada', 'abcdefg', '2020-11-28 00:00:00', '2020-11-28 00:00:00', 7),
(16, 32, 'l', '7330782878', 'gudivada', 'vijayawada', 'deepthi', '2020-11-28 00:00:00', '2020-11-28 00:00:00', 8),
(18, 21, 'tester@gmail.com', '9848761234', 'gudivada', 'Hyderabad', 'VOLVO', '2020-11-28 00:00:00', '2020-11-28 00:00:00', 8),
(19, 36, 'deepa@gmail.com', '9347610583', 'gudivada', 'gudivada', 'dafsfgh', '2020-11-28 00:00:00', '2020-11-28 00:00:00', 8),
(20, 36, 'deepa@gmail.com', '9347610583', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(21, 36, 'deepa@gmail.com', '9347610583', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(22, 36, 'deepa@gmail.com', '9347610583', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(23, 36, 'deepa@gmail.com', '9347610583', 'gudivada', 'gudivada', 'qatter', '2020-11-29 00:00:00', '2020-11-29 00:00:00', 8),
(24, 36, 'deepa@gmail.com', '9347610583', 'gudivada', 'gudivada', 'qatter', '2020-11-29 00:00:00', '2020-11-29 00:00:00', 8),
(25, 23, 'pavan@gmail.com', '9220033113', 'gudivada', 'gudivada', 'deepthi', '2020-11-29 00:00:00', '2020-11-29 00:00:00', 8),
(26, 23, 'pavan@gmail.com', '9220033113', 'gudivada', 'gudivada', 'deepthi', '2020-11-29 00:00:00', '2020-11-29 00:00:00', 8),
(27, 28, 'navya@gmail.com', '7675089839', 'gudivada', 'gudivada', 'sadfg', '2020-11-29 00:00:00', '2020-11-29 00:00:00', 8),
(28, 37, 'abc@gmail.com', '9123456789', 'Gudivada', 'america', 'ABCDEF', '2020-11-29 00:00:00', '2020-11-29 00:00:00', 7),
(31, 37, 'abc@gmail.com', '9123456789', 'gudivada', 'gudivada', 'AP16CM5480', '2020-11-29 00:00:00', '2020-11-29 00:00:00', 8),
(32, 37, 'abc@gmail.com', '9123456789', 'gudivada', 'gudivada', '8540', '2020-11-29 00:00:00', '2020-11-29 00:00:00', 8),
(33, 37, 'abc@gmail.com', '9123456789', 'gudivada', 'gudivada', '7894', '2020-11-29 00:00:00', '2020-11-29 00:00:00', 8),
(34, 37, 'abc@gmail.com', '9123456789', 'gudivada', 'gudivada', '1234', '2020-11-29 00:00:00', '2020-11-29 00:00:00', 7),
(35, 37, 'abc@gmail.com', '9123456789', 'gudivada', 'gudivada', '1234', '2020-11-29 00:00:00', '2020-11-29 00:00:00', 7),
(36, 37, 'abc@gmail.com', '9123456789', 'gudivada', 'gudivada', '0909', '2020-11-29 00:00:00', '2020-11-29 00:00:00', 7),
(37, 37, 'abc@gmail.com', '9123456789', 'machilipat', 'machilipat', '85236', '2020-11-29 00:00:00', '2020-11-29 00:00:00', 3),
(38, 37, 'abc@gmail.com', '9123456789', 'machilipat', 'machilipat', '85236', '2020-11-29 00:00:00', '2020-11-29 00:00:00', 3),
(39, 24, 'avinash@gmail.com', '9390572780', 'Gudivada', 'gudivada', 'Adapa', '2020-11-29 00:00:00', '2020-11-29 00:00:00', 8),
(40, 24, 'avinash@gmail.com', '9390572780', 'gudivada', 'gudivada', 'dadsfdgh', '2020-11-29 00:00:00', '2020-11-29 00:00:00', 8),
(41, 28, 'navya@gmail.com', '7675089839', 'gudivada', 'AMALAPURAM', 'from', '2020-11-29 00:00:00', '2020-11-29 00:00:00', 8),
(42, 28, 'navya@gmail.com', '7675089839', 'gudivada', 'AMALAPURAM', 'from', '2020-11-29 00:00:00', '2020-11-29 00:00:00', 8),
(43, 28, 'navya@gmail.com', '7675089839', 'gudivada', 'AMALAPURAM', 'from', '2020-11-29 00:00:00', '2020-11-29 00:00:00', 8),
(44, 28, 'navya@gmail.com', '7675089839', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(45, 28, 'navya@gmail.com', '7675089839', 'gudivada', 'gudivada', 'deepthi', '2020-11-29 16:00:00', '2020-11-29 18:00:00', 8),
(46, 32, 'l', '7330782878', 'gudivada', 'gudivada', 'deephti', '2020-11-29 16:00:00', '2020-11-29 18:00:00', 8),
(47, 23, 'pavan@gmail.com', '9220033113', 'gudivada', 'gudivada', 'asdfh', '2020-11-29 17:00:00', '2020-11-29 18:00:00', 8),
(48, 23, 'pavan@gmail.com', '9220033113', 'gudivada', 'gudivada', 'asdfh', '2020-11-29 17:00:00', '2020-11-29 18:00:00', 8),
(49, 23, 'pavan@gmail.com', '9220033113', 'gudivada', 'gudivada', 'asdfh', '2020-11-29 17:00:00', '2020-11-29 18:00:00', 8),
(50, 23, 'pavan@gmail.com', '9220033113', 'gudivada', 'gudivada', 'asdfh', '2020-11-29 17:00:00', '2020-11-29 18:00:00', 8),
(51, 23, 'pavan@gmail.com', '9220033113', 'gudivada', 'gudivada', 'asdfh', '2020-11-29 17:00:00', '2020-11-29 18:00:00', 8),
(52, 23, 'pavan@gmail.com', '9220033113', 'gudivada', 'gudivada', 'asdfh', '2020-11-29 17:00:00', '2020-11-29 18:00:00', 8),
(53, 23, 'pavan@gmail.com', '9220033113', 'gudivada', 'gudivada', 'asdfh', '2020-11-29 17:00:00', '2020-11-29 18:00:00', 8),
(54, 38, 'ash@gmail.com', '9441031121', 'gudivada', 'canada', 'canada', '2020-11-29 17:00:00', '2020-11-29 18:00:00', 8),
(55, 38, 'ash@gmail.com', '9441031121', 'gudivada', 'canada', 'canada', '2020-11-29 17:00:00', '2020-11-29 18:00:00', 8),
(56, 24, 'avinash@gmail.com', '9390572780', 'vijayawada', 'gudivada', '0220', '2020-11-29 16:38:00', '2020-11-29 19:00:00', 1),
(57, 24, 'avinash@gmail.com', '9390572780', 'vijayawada', 'gudivada', '0220', '2020-11-29 16:38:00', '2020-11-29 19:00:00', 1);

--
-- Triggers `booking`
--
DELIMITER $$
CREATE TRIGGER `space_count` AFTER INSERT ON `booking` FOR EACH ROW update landlord set rem = rem-1 where id=NEW.lid
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cid` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `allcustomers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
