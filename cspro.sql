-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2018 at 06:55 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cspro`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(10) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `pasword` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `pasword`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `driverreg`
--

CREATE TABLE `driverreg` (
  `compName` varchar(1000) NOT NULL,
  `tele` varchar(20) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driverreg`
--

INSERT INTO `driverreg` (`compName`, `tele`, `email`, `password`) VALUES
('aaa', '2222', 'aaaaaaa@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `nic` varchar(100) NOT NULL,
  `tele` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pasword` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`firstName`, `lastName`, `nic`, `tele`, `email`, `pasword`) VALUES
('jask', 'wjehfvaj', 'ashjsdh', 'sdjfh', 'shdf', 'qwe'),
('ooooo', 'pppp', '960023412v', '324', 'aaaaaaa@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `rides`
--

CREATE TABLE `rides` (
  `id` int(11) NOT NULL,
  `destinations` varchar(1000) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `email` varchar(100) DEFAULT NULL,
  `desti` varchar(1000) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`email`, `desti`, `price`) VALUES
('aaaaaaa@gmail.com', 'Hikkaduwa', '500.00');

-- --------------------------------------------------------

--
-- Table structure for table `vehical`
--

CREATE TABLE `vehical` (
  `email` varchar(100) DEFAULT NULL,
  `vehi` varchar(1000) DEFAULT NULL,
  `ac` varchar(100) DEFAULT NULL,
  `nonac` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehical`
--

INSERT INTO `vehical` (`email`, `vehi`, `ac`, `nonac`) VALUES
('aaaaaaa@gmail.com', 'Nano', 'ac', 'nonac'),
('aaaaaaa@gmail.com', 'Car', 'ac', 'nonac'),
('bbbbbbb@gmail.com', 'VIP', 'ac', 'nonac');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`nic`);

--
-- Indexes for table `rides`
--
ALTER TABLE `rides`
  ADD KEY `id` (`id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD KEY `drid` (`email`);

--
-- Indexes for table `vehical`
--
ALTER TABLE `vehical`
  ADD KEY `drid` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
