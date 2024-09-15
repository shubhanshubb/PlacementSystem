-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 07:06 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@xyz.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `anouncement`
--

CREATE TABLE `anouncement` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `desc` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anouncement`
--

INSERT INTO `anouncement` (`id`, `date`, `desc`) VALUES
(1, '2018-11-30', 'Intership shall Start form the next Month');

-- --------------------------------------------------------

--
-- Table structure for table `collegeinfo`
--

CREATE TABLE `collegeinfo` (
  `id` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `society` varchar(100) NOT NULL,
  `reBy` varchar(150) NOT NULL,
  `logoImgName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collegeinfo`
--

INSERT INTO `collegeinfo` (`id`, `aid`, `name`, `society`, `reBy`, `logoImgName`) VALUES
(1, 0, 'HKBK COLLEGE OF ENGINEERING', 'Affilatted to VTU', 'Recognized by AICTE', 'tempLogo.png');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `usn` varchar(200) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(100) NOT NULL,
  `10th` varchar(200) NOT NULL,
  `12th` varchar(200) NOT NULL,
  `Dip` varchar(200) NOT NULL,
  `CGPA` varchar(200) NOT NULL,
  `sem1` varchar(200) NOT NULL,
  `sem2` varchar(200) NOT NULL,
  `sem3` varchar(200) NOT NULL,
  `sem4` varchar(200) NOT NULL,
  `sem5` varchar(200) NOT NULL,
  `sem6` varchar(200) NOT NULL,
  `10th_year_passing` varchar(200) NOT NULL,
  `10th_school_name` varchar(200) NOT NULL,
  `10th_board` varchar(200) NOT NULL,
  `pu_dip_clg_name` varchar(200) NOT NULL,
  `pu_dip_board` varchar(200) NOT NULL,
  `cet_rank` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `usn`, `branch`, `address`, `mobile`, `gender`, `dob`, `password`, `10th`, `12th`, `Dip`, `CGPA`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `10th_year_passing`, `10th_school_name`, `10th_board`, `pu_dip_clg_name`, `pu_dip_board`, `cet_rank`) VALUES
(1, 'HKBK COLLEGE OF ENGINEERING', '1hk20cs409@hkbk.edu.in', 'xyzyxyzxyz', '', 'xyz', '3598467851', '', '1998-07-12', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', '74', '76', '', '', '', '', '', '', '', '', '2000', 'Hussain', 'KASEEB', 'Sharay', 'KSEEB', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anouncement`
--
ALTER TABLE `anouncement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collegeinfo`
--
ALTER TABLE `collegeinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anouncement`
--
ALTER TABLE `anouncement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `collegeinfo`
--
ALTER TABLE `collegeinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
