-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 17, 2018 at 11:12 AM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ma`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `no` varchar(10) NOT NULL,
  `sem` int(10) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `external` int(10) NOT NULL,
  `practical` int(10) NOT NULL,
  `internal` int(10) NOT NULL,
  `term_work` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`no`, `sem`, `subject`, `external`, `practical`, `internal`, `term_work`) VALUES
('15co23', 5, 'MP', 50, 20, 18, 20),
('15co23', 5, 'OS', 72, 22, 19, 20),
('15co23', 5, 'SOOAD', 65, 18, 15, 20),
('15co23', 5, 'CN', 68, 16, 15, 19),
('15co23', 5, 'WTL', -1, 18, -1, 19),
('15co23', 5, 'BCE', -1, -1, -1, 18),
('15co25', 3, 'DS', 70, 19, 15, 19),
('15co25', 4, 'M4', 70, 17, 17, 19),
('15co33', 3, 'M3', 46, 20, 15, 20),
('15co33', 3, 'DS', 20, 16, 10, 16),
('15co33', 3, 'OOPM', 60, 20, 6, 16),
('15co33', 3, 'ECCF', 20, 16, 16, 16),
('15co33', 3, 'DLDA', 25, 7, 16, 19),
('15co33', 3, 'DIS', 16, 21, 16, 19);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` text NOT NULL,
  `seat_no` varchar(10) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `regis_no` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `seat_no`, `branch`, `regis_no`) VALUES
('TANVEER', '15co23', 'COMPUTER', 123654),
('MAAZ', '15co25', 'COMPUTER', 123789),
('Manz', '15co33', 'COMPUTER', 978465);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `name` varchar(20) NOT NULL,
  `code` varchar(10) NOT NULL,
  `sem` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`name`, `code`, `sem`) VALUES
('MP', '12345', 5),
('SOOAD', '12379', 5),
('OS', '56413', 5),
('CN', '21356', 5),
('M4', '54678', 4),
('AOA', '87954', 4),
('DS', '87677', 3),
('WTL', '49132', 5),
('BCE', '49735', 5),
('M3', '16532', 3),
('DIS', '43164', 3),
('ECCF', '35164', 3),
('DLDA', '73165', 3),
('OOPM', '73169', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD KEY `seat_no` (`no`),
  ADD KEY `subject` (`subject`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
