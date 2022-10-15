-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2022 at 06:10 AM
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
-- Database: `canstudy`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty_registration`
--

CREATE TABLE `faculty_registration` (
  `faculty_Id` bigint(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(25) NOT NULL,
  `branch_type` enum('ISE','CSE','ECE','ME','AI/ML','CSD','CSB') NOT NULL,
  `sub1` int(11) NOT NULL,
  `sub2` int(11) NOT NULL,
  `sub3` int(11) NOT NULL,
  `sub4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_registration`
--

INSERT INTO `faculty_registration` (`faculty_Id`, `username`, `phone`, `email`, `password`, `branch_type`, `sub1`, `sub2`, `sub3`, `sub4`) VALUES
(120070010, 'Rithik ', '6282711688', 'rithik14@canaraengineering.in', '1234', 'ISE', 0, 0, 0, 0),
(120070011, 'Rithik ', '6282711688', 'rithik@canaraengineering.in', '121323', 'ISE', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_teaching`
--

CREATE TABLE `faculty_teaching` (
  `faculty_Id` bigint(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `sub1` varchar(7) NOT NULL,
  `title1` varchar(35) NOT NULL,
  `file1` varchar(25) NOT NULL,
  `sub2` varchar(15) NOT NULL,
  `title2` varchar(15) NOT NULL,
  `file2` varchar(15) NOT NULL,
  `sub3` varchar(15) NOT NULL,
  `title3` varchar(15) NOT NULL,
  `file3` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `usn` varchar(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(25) NOT NULL,
  `branch_type` enum('ISE','CSE','ECE','ME','AI/ML','CSD','CSB') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`usn`, `username`, `phone`, `email`, `password`, `branch_type`) VALUES
('4CB20IS042', 'Rithik ', 6282711688, 'rithikkumble@gmail.com', '123', 'ISE'),
('4CB20IS043', 'Rohan', 6282711699, 'rohan@gmail.com', '1313', 'CSE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_registration`
--
ALTER TABLE `faculty_registration`
  ADD PRIMARY KEY (`faculty_Id`);

--
-- Indexes for table `faculty_teaching`
--
ALTER TABLE `faculty_teaching`
  ADD PRIMARY KEY (`faculty_Id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`usn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
