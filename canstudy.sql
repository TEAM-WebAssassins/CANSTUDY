-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2022 at 02:30 PM
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
  `branch_type` enum('ISE','CSE','ECE','ME','AI/ML','CSD','CSB') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_registration`
--

INSERT INTO `faculty_registration` (`faculty_Id`, `username`, `phone`, `email`, `password`, `branch_type`) VALUES
(120070010, 'Rithik ', '6282711688', 'rithik14@canaraengineering.in', '1234', 'ISE');

-- --------------------------------------------------------

--
-- Table structure for table `isefaculty_upload`
--

CREATE TABLE `isefaculty_upload` (
  `email` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `sem` enum('Sem3','Sem4','Sem5','Sem6','Sem7','Sem8') NOT NULL,
  `sub` enum('MAT3','DS','DMS','CO','ADE','SE','KAN','MCES','DAA','OS','DC','CIP','CNS','DBMS','ATC','AOP','UP','ES') NOT NULL,
  `module1` varchar(255) NOT NULL,
  `module2` varchar(255) NOT NULL,
  `module3` varchar(255) NOT NULL,
  `module4` varchar(255) NOT NULL,
  `module5` varchar(255) NOT NULL
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
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_registration`
--
ALTER TABLE `faculty_registration`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `faculty_Id` (`faculty_Id`);

--
-- Indexes for table `isefaculty_upload`
--
ALTER TABLE `isefaculty_upload`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `sub` (`sub`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`usn`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `isefaculty_upload`
--
ALTER TABLE `isefaculty_upload`
  ADD CONSTRAINT `isefaculty_upload_ibfk_1` FOREIGN KEY (`email`) REFERENCES `faculty_registration` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
