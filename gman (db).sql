-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2019 at 10:32 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gman`
--

-- --------------------------------------------------------

--
-- Table structure for table `abo`
--

CREATE TABLE `abo` (
  `id` int(10) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` int(40) NOT NULL,
  `passportS` int(40) NOT NULL,
  `country` varchar(40) NOT NULL,
  `lengthStay` int(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `frf` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abo`
--

INSERT INTO `abo` (`id`, `firstName`, `lastName`, `email`, `contact`, `passportS`, `country`, `lengthStay`, `gender`, `frf`) VALUES
(15, 'Ahmed', 'yusuf', 'mamxam@jama.com', 2367, 1343, 'United kingdom', 3, 'M', 'Floor2'),
(16, '', '', '', 0, 0, 'Somalia', 0, '', ''),
(17, '', '', '', 0, 0, 'Somalia', 0, '', 'Floor2'),
(18, '', '', '', 0, 0, 'Somalia', 0, '', 'Single'),
(19, 'Ahmed', '', 'hahha@ahah', 0, 0, 'Somalia', 0, 'M', 'Floor2'),
(20, 'Ahmed', '', 'hahha@ahah', 0, 0, 'Ethopia', 0, 'F', 'Floor2'),
(21, 'Ahmed', '', '', 0, 0, 'Germany', 7, 'F', 'Floor2,Single'),
(22, '', '', '', 0, 0, 'Somalia', 0, '', ''),
(23, '', '', '', 0, 0, 'Somalia', 0, '', ''),
(24, '', '', '', 0, 0, 'Somalia', 0, '', ''),
(25, '', '', '', 0, 0, 'Somalia', 0, '', ''),
(26, '', '', '', 0, 0, 'Somalia', 0, '', ''),
(27, '', '', '', 0, 0, 'Somalia', 0, '', ''),
(28, 'salaf', 'khalad', 'wjwj', 123, 3443, 'United Kingdom', 24, 'M', 'Floor2,Family'),
(29, '', '', '', 0, 0, 'Somalia', 0, '', ''),
(30, '', '', '', 0, 0, 'Somalia', 0, '', ''),
(31, 'Katima', 'Osman', 'Katima@osman.com', 443322, 1234, 'Somalia', 2, 'F', 'Floor2,Family'),
(32, '', '', '', 0, 0, 'Somalia', 0, '', ''),
(33, '', '', '', 0, 0, 'Somalia', 0, '', ''),
(34, '', '', '', 0, 0, 'Somalia', 0, '', ''),
(35, '', '', '', 0, 0, 'Somalia', 0, '', ''),
(36, '', '', '', 0, 0, 'Somalia', 0, '', ''),
(37, '', '', '', 0, 0, 'Somalia', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) DEFAULT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `PASSWORD`) VALUES
('admin', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abo`
--
ALTER TABLE `abo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abo`
--
ALTER TABLE `abo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
