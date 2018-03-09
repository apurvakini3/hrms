-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2018 at 06:24 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'test123*'),
(2, 'Apurva', 'physics'),
(4, 'Garima', 'maths');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `id` int(6) UNSIGNED NOT NULL,
  `deptname` varchar(50) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `deptname`, `Date`) VALUES
(51, 'Development', '2018-01-15 18:56:32'),
(57, 'Marketing', '2018-01-20 19:33:09');

-- --------------------------------------------------------

--
-- Table structure for table `empattendence`
--

CREATE TABLE `empattendence` (
  `id` int(11) NOT NULL,
  `Current Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `empid` int(11) NOT NULL,
  `OnDate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empattendence`
--

INSERT INTO `empattendence` (`id`, `Current Date`, `empid`, `OnDate`) VALUES
(6, '2018-01-05 10:38:31', 13, '05/02/2018'),
(7, '2018-01-05 10:42:03', 15, '06/02/2018'),
(8, '2018-01-05 11:03:48', 17, '01/02/2018'),
(9, '2018-01-05 11:08:55', 14, '06/02/2018'),
(10, '2018-01-05 11:56:53', 14, '02/03/2018'),
(11, '2018-01-05 12:03:09', 15, '07/02/2018'),
(12, '2018-01-05 12:16:23', 14, '25/01/2018'),
(13, '2018-01-05 12:16:48', 14, '17/01/2018'),
(15, '2018-01-05 12:31:06', 10, '05/02/2018'),
(16, '2018-01-05 12:38:31', 13, '05/02/2018'),
(17, '2018-01-05 12:39:32', 14, '05/01/2018'),
(21, '2018-01-05 12:52:14', 15, '07/02/2018'),
(22, '2018-01-05 12:52:58', 15, '07/02/2018'),
(23, '2018-01-05 12:53:14', 15, '07/02/2018'),
(24, '2018-01-05 12:53:40', 15, '07/02/2018'),
(25, '2018-01-05 12:54:11', 15, '07/02/2018'),
(26, '2018-01-05 12:56:41', 15, '07/02/2018'),
(27, '2018-01-05 12:59:33', 15, '07/02/2018'),
(28, '2018-01-05 13:00:00', 15, '07/02/2018'),
(29, '2018-01-05 13:00:42', 15, '07/02/2018'),
(30, '2018-01-08 05:38:31', 14, '08/01/2018'),
(31, '2018-01-23 17:10:16', 14, '23/01/2018');

-- --------------------------------------------------------

--
-- Table structure for table `empinfo`
--

CREATE TABLE `empinfo` (
  `id` int(6) UNSIGNED NOT NULL,
  `ename` varchar(50) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `institute` varchar(30) NOT NULL,
  `experience` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `deptid` int(6) UNSIGNED DEFAULT NULL,
  `pass_flag` int(11) NOT NULL DEFAULT '0',
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empinfo`
--

INSERT INTO `empinfo` (`id`, `ename`, `qualification`, `designation`, `institute`, `experience`, `email`, `pwd`, `address`, `deptid`, `pass_flag`, `Date`) VALUES
(10, 'nitin', 'B.E.', 'marketing', 'ceop', '2', 'nitin@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'pune', 51, 0, '2018-01-20 19:13:46'),
(13, 'Hina', 'BE', 'Developer', 'GIT', '2', 'hina@gmail.com', 'b5416c1bf9bb9fd6a5bda33035f5b13f', 'jsjjs', 50, 0, '2018-01-05 07:42:32'),
(14, 'Apurva', 'Mtech', 'Intern', 'GIT', '1', 'apurvakini3@gmail.com', '77b163cc4791f951a41af338299844ac', 'kop', 51, 0, '2018-01-16 19:30:16'),
(15, 'Garima', 'BE', 'Intern', 'RIT', '2', 'garima@gmail.com', '2b882400855082a1b1a97cedf64cb413', 'Belgavi', 55, 0, '2018-01-05 10:05:55'),
(16, 'Deepti', 'BE', 'Developer', 'NIT', '2', 'deepti@gmail.com', '99cbfc815db6fc6c0a83c97137c7ea40', 'Pune', 51, 0, '2018-01-05 10:06:30'),
(19, 'onkar2', 'B.E.', 'Intern', 'BVCOEK', '1', 'omielectronics@gmail.com', '1f32aa4c9a1d2ea010adcf2348166a04', 'kop', 51, 0, '2018-01-16 19:30:43'),
(20, 'onkar', 'B.E.', 'Intern', 'BVCOEK', '1', 'dange.onkar5@gmail.com', '0ef63386fdcb3dc2c2914b319668ff81', 'kop', 51, 0, '2018-01-21 00:15:16'),
(21, 'Raj', 'B.E.', 'developer', 'sgi', '3', 'rajesh.jd@gmail.com', '123456789', '', 51, 0, '2018-01-20 19:50:35'),
(22, 'Jatin', 'MBA', 'marketing', 'ceop', '1', 'Jatin@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'pune', 57, 0, '2018-01-22 19:10:54');

-- --------------------------------------------------------

--
-- Table structure for table `empleave`
--

CREATE TABLE `empleave` (
  `id` int(6) UNSIGNED NOT NULL,
  `lid` int(6) NOT NULL,
  `posting_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `from_date` text NOT NULL,
  `to_date` text NOT NULL,
  `description` varchar(255) NOT NULL,
  `empid` int(6) NOT NULL,
  `ApprovalStatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empleave`
--

INSERT INTO `empleave` (`id`, `lid`, `posting_date`, `from_date`, `to_date`, `description`, `empid`, `ApprovalStatus`) VALUES
(1, 2, '2017-12-30 11:02:45', '27/12/2017', '28/12/2017', 'Visiting hometown', 1, 1),
(2, 3, '2017-12-30 11:49:29', '03/01/2018', '04/01/2018', 'Not Well', 4, 0),
(4, 2, '2018-01-05 16:04:21', '06/02/2018', '07/02/2018', 'sad', 0, 0),
(6, 2, '2018-01-10 12:16:12', '27/01/2018', '27/01/2018', 'leave', 0, 0),
(7, 2, '2018-01-10 12:20:27', '26/01/2018', '27/01/2018', 'leave', 18, 1),
(8, 2, '2018-01-15 11:19:46', '27/01/2018', '28/01/2018', 'leave', 20, 1),
(9, 3, '2018-01-16 17:10:08', '27/01/2018', '27/01/2018', 'holiday', 20, 0),
(10, 2, '2018-01-16 17:10:49', '20/01/2018', '21/01/2018', 'ok', 20, 0),
(11, 2, '2018-01-20 17:12:06', '23/01/2018', '23/01/2018', 'casual', 20, 0),
(12, 2, '2018-01-22 14:09:12', '26/01/2018', '26/01/2018', 'leave', 22, 1),
(13, 3, '2018-01-22 17:49:56', '31/01/2018', '31/01/2018', 'sick', 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `leavetype`
--

CREATE TABLE `leavetype` (
  `id` int(255) NOT NULL,
  `leavetype` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leavetype`
--

INSERT INTO `leavetype` (`id`, `leavetype`, `description`, `Date`) VALUES
(2, 'Casual Leave', 'casual reasons', '2018-01-05 07:44:42'),
(3, 'Sick Leave', 'Not keeping well', '2018-01-05 07:44:42'),
(4, 'Casual Leave', 'casual reasons', '2018-01-15 18:58:44'),
(6, 'Casual Leave', 'ok', '2018-01-20 19:18:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empattendence`
--
ALTER TABLE `empattendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empinfo`
--
ALTER TABLE `empinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deptid` (`deptid`);

--
-- Indexes for table `empleave`
--
ALTER TABLE `empleave`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lid` (`lid`);

--
-- Indexes for table `leavetype`
--
ALTER TABLE `leavetype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `empattendence`
--
ALTER TABLE `empattendence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `empinfo`
--
ALTER TABLE `empinfo`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `empleave`
--
ALTER TABLE `empleave`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `leavetype`
--
ALTER TABLE `leavetype`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `empleave`
--
ALTER TABLE `empleave`
  ADD CONSTRAINT `empleave_ibfk_1` FOREIGN KEY (`lid`) REFERENCES `leavetype` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
