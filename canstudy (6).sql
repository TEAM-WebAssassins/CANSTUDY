-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 04:17 PM
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
(120070010, 'Rithik ', '6282711688', 'rithik@canaraengineering.in', '11', 'ISE');

-- --------------------------------------------------------

--
-- Table structure for table `isefaculty_upload`
--

CREATE TABLE `isefaculty_upload` (
  `id` int(11) NOT NULL,
  `faculty_Id` varchar(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `sem` enum('Sem3','Sem4','Sem5','Sem6','Sem7','Sem8') NOT NULL,
  `sub` enum('MAT3','DS','DMS','CO','ADE','SE','KAN','MCES','DAA','OS','DC','CIP','CNS','DBMS','ATC','AOP','UP','ES') NOT NULL,
  `module1` varchar(255) NOT NULL,
  `module2` varchar(255) NOT NULL,
  `module3` varchar(255) NOT NULL,
  `module4` varchar(255) NOT NULL,
  `module5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `isefaculty_upload`
--

INSERT INTO `isefaculty_upload` (`id`, `faculty_Id`, `username`, `sem`, `sub`, `module1`, `module2`, `module3`, `module4`, `module5`) VALUES
(2, '0210070010', 'Rithik ', 'Sem3', 'MAT3', 'CPC 2021 Semeseter Answer code.pdf', 'Indian Constitution Question Bank.pdf', 'PDF quiz Constitution of India with solutions.pdf', 'QUESTION BANKS-CPC-Multiple Choice-QP(Exam preparation) (1)pdf.pdf', 'PDF quiz Ethics and Cyber law 100.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `phone`, `email`, `password`) VALUES
(1, 'Rithik ', '6282711688', 'rithik@canaraengineering.in', '111'),
(2, 'Rithik ', '6282711688', 'rkumbla46@gmail.com', '111'),
(3, 'Rithik ', '6282711688', 'rkumbla46@gmail.com', '111'),
(4, 'Rithik ', '6282711688', 'rkumbla46@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `isefaculty_upload`
--
ALTER TABLE `isefaculty_upload`
  ADD PRIMARY KEY (`sem`),
  ADD UNIQUE KEY `sub` (`sub`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `isefaculty_upload`
--
ALTER TABLE `isefaculty_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
