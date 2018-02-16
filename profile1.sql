-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 16, 2018 at 03:05 PM
-- Server version: 5.7.20-0ubuntu0.17.10.1
-- PHP Version: 7.1.11-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbinfo2`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile1`
--

CREATE TABLE `profile1` (
  `sno` int(11) NOT NULL,
  `bday` varchar(12) DEFAULT NULL,
  `uname` varchar(30) NOT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `phnumber` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile1`
--

INSERT INTO `profile1` (`sno`, `bday`, `uname`, `gender`, `address`, `pincode`, `phnumber`) VALUES
(13, '1998-06-15', 'am@gmail.com', 'female', 'ahkshkhdd ndkjnkdn', '302017', '7896541234'),
(14, '1998-01-29', 'gc@gmail.com', 'female', 'agshkjdbkbcgkb dxbhjbd bkjbdxsk', '301403', '8956471236'),
(15, '1998-06-18', 'dm@gmail.com', 'female', 'ahkdjhkjd bckjsxljl', '302017', '1236547892'),
(16, '1997-02-21', 'mk@gmail.com', 'female', 'ggn', '342011', '45697112');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile1`
--
ALTER TABLE `profile1`
  ADD PRIMARY KEY (`sno`),
  ADD KEY `uname` (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile1`
--
ALTER TABLE `profile1`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `profile1`
--
ALTER TABLE `profile1`
  ADD CONSTRAINT `profile1_ibfk_1` FOREIGN KEY (`uname`) REFERENCES `userinfo1` (`uname`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
