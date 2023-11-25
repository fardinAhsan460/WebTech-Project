-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 02:11 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `hub` varchar(100) NOT NULL,
  `pickDate` date NOT NULL,
  `pickTime` time NOT NULL,
  `dropOffDate` date NOT NULL,
  `dropOffTime` time NOT NULL,
  `bike` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `hub`, `pickDate`, `pickTime`, `dropOffDate`, `dropOffTime`, `bike`, `username`) VALUES
(2, 'Mirpur', '2022-12-21', '21:04:00', '2022-12-12', '21:03:00', 'Yamaha R15', 'Fardin'),
(3, 'Gulshan', '2022-12-06', '22:06:00', '2022-12-21', '21:06:00', 'Pulser NS 160', 'Fardin');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nid` varchar(100) NOT NULL,
  `driving` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `username`, `password`, `firstname`, `lastname`, `gender`, `age`, `address`, `mobile`, `email`, `nid`, `driving`) VALUES
(1, '0', '1234', '0', '0', '0', 21, '0', 1318979220, '0', 'Avatar-Profile-Vector-PNG-File.png', 'cute-little-girl-avatar-round-profile-picture-isolated-white-background_176411-3067.webp'),
(2, '0', '1234', '0', '0', '0', 22, '0', 1316050604, '0', 'Avatar-Profile-Vector-PNG-File.png', 'DefaultUser.png'),
(3, 'Fardin', 'Fardin33#', 'Mahid', 'Rahman', 'Male', 24, 'Dhaka', 1318979220, 'fardinahsan460@gmail.com', 'Screenshot (2).png', 'Screenshot (9).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
