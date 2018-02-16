-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 16, 2018 at 03:06 PM
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
-- Table structure for table `userinfo1`
--

CREATE TABLE `userinfo1` (
  `uname` varchar(30) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `passw` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo1`
--

INSERT INTO `userinfo1` (`uname`, `fname`, `lname`, `passw`) VALUES
('am@gmail.com', 'ayushi', 'maheshwari', '$2y$10$xl86XQ9pDuNUY51HtgwamezgduMBf/lnFLpkxMzCUIfabl0DfzGci'),
('dm@gmail.com', 'divya', 'meena', '$2y$10$HmSXz.Nln1oK1b0BUdmMieVEuOL1lTT7fXlTnXDAsi4JyC8jYjvzm'),
('gc@gmail.com', 'gunjan', 'choudhary', '$2y$10$iB8O7LbK9D3QuDhHx8WdIeKyTzKLq0G3HJCc9FaMczCvSXsFVgk12'),
('mk@gmail.com', 'mahima', 'kadyan', '$2y$10$2MndNjGH9K0mk9Thw74YX.DqUSKvaGn8f5HwJrOiXK5giwwtv3JvC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo1`
--
ALTER TABLE `userinfo1`
  ADD PRIMARY KEY (`uname`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
