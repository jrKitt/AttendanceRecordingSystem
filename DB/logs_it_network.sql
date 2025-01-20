-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 31, 2023 at 03:22 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logs_it_network`
--

-- --------------------------------------------------------

--
-- Table structure for table `mains`
--

CREATE TABLE `mains` (
  `LOGS_ID` int(11) NOT NULL,
  `LOGS_DATE` varchar(255) DEFAULT NULL,
  `LOGS_CASE_NUMBER` text,
  `LOGS_CASE_CONTACT` varchar(255) NOT NULL,
  `LOGS_LOCATION` varchar(128) DEFAULT NULL,
  `LOGS_RANGE_TIME` varchar(255) DEFAULT NULL,
  `LOGS_PHONE` varchar(255) NOT NULL,
  `LOGS_TECHNICIANS` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `mains`
--

INSERT INTO `mains` (`LOGS_ID`, `LOGS_DATE`, `LOGS_CASE_NUMBER`, `LOGS_CASE_CONTACT`, `LOGS_LOCATION`, `LOGS_RANGE_TIME`, `LOGS_PHONE`, `LOGS_TECHNICIANS`) VALUES
(1, '10/18/2023', '000000001', 'ฮอนด้า', 'ทดสอบ', '10', '0959611962', 'อาร์ต'),
(4, '10/17/2023', 'Talad#6470', 'Centercom', 'ยูดีทาวน์, อุดรธานี', '7', '0632231949', 'เนส'),
(6, '10/30/2023', '19102566-15', 'คุณ ปราณิสา ', 'สตภ.6 อุดรธานี', '1 วัน', '0956307844', 'โอ๊ค');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `USR_ID` int(11) NOT NULL,
  `USR_NAME` varchar(255) DEFAULT NULL,
  `USR_PWD` varchar(255) DEFAULT NULL,
  `USR_ROLE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`USR_ID`, `USR_NAME`, `USR_PWD`, `USR_ROLE`) VALUES
(1, 'admin', 'c93ccd78b2076528346216b3b2f701e6', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mains`
--
ALTER TABLE `mains`
  ADD PRIMARY KEY (`LOGS_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`USR_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mains`
--
ALTER TABLE `mains`
  MODIFY `LOGS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `USR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
