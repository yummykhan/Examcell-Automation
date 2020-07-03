-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 26, 2018 at 05:04 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duty`
--

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

DROP TABLE IF EXISTS `block`;
CREATE TABLE IF NOT EXISTS `block` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_no` varchar(6) NOT NULL,
  `ses` varchar(10) NOT NULL,
  PRIMARY KEY (`b_id`),
  UNIQUE KEY `b_id_UNIQUE` (`b_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `duty_assigned`
--

DROP TABLE IF EXISTS `duty_assigned`;
CREATE TABLE IF NOT EXISTS `duty_assigned` (
  `duty_Assigned_id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_id` int(15) NOT NULL,
  `no_of_duties` int(15) NOT NULL,
  `post` varchar(30) NOT NULL,
  PRIMARY KEY (`duty_Assigned_id`),
  UNIQUE KEY `dt_ass_UNIQUE` (`duty_Assigned_id`),
  KEY `faculty_id` (`faculty_id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `duty_assigned`
--

INSERT INTO `duty_assigned` (`duty_Assigned_id`, `faculty_id`, `no_of_duties`, `post`) VALUES
(53, 18, 4, 'Assistant Professor'),
(54, 21, 4, 'Lab Assistant'),
(55, 18, 2, 'Assistant Professor'),
(56, 18, 5, 'Assistant Professor'),
(57, 18, 2, 'Assistant Professor'),
(58, 22, 0, 'hod'),
(59, 23, 3, 'hod'),
(60, 18, 1, 'Assistant Professor'),
(61, 22, 2, 'hod'),
(62, 23, 3, 'hod'),
(63, 18, 2, 'Assistant Professor'),
(64, 22, 3, 'hod'),
(65, 23, 4, 'hod'),
(66, 24, 5, 'Associate Professor');

-- --------------------------------------------------------

--
-- Table structure for table `duty_chart`
--

DROP TABLE IF EXISTS `duty_chart`;
CREATE TABLE IF NOT EXISTS `duty_chart` (
  `duty_attempt` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `duty_charts`
--

DROP TABLE IF EXISTS `duty_charts`;
CREATE TABLE IF NOT EXISTS `duty_charts` (
  `chart_id` int(10) NOT NULL AUTO_INCREMENT,
  `Date` varchar(15) NOT NULL,
  `Session` varchar(20) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Faculty_name` varchar(50) NOT NULL,
  `Block` varchar(5) NOT NULL,
  PRIMARY KEY (`chart_id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `duty_charts`
--

INSERT INTO `duty_charts` (`chart_id`, `Date`, `Session`, `Subject`, `Faculty_name`, `Block`) VALUES
(36, '2018-04-30', 'morning', 'm4', 'neha', '402'),
(37, '2018-04-26', ' mo', 'm6', 'naz', '403'),
(38, '2018-04-26', ' mo', 'm6', 'pritesh', '404'),
(39, '2018-04-26', ' mo', 'm6', 'saqib', '405'),
(57, '2018-05-16', 'evening', 'm6', 'safa', '407'),
(56, '2018-05-08', 'evening', 'm2', 'safa', '406'),
(55, '2018-04-25', 'evening', 'm5', 'naz', '405'),
(54, '2018-04-18', 'evening', 'm1', 'neha', '404'),
(53, '2018-04-11', 'evening', 'm4', 'naz', '403'),
(52, '2018-04-10', 'evening', 'm3', 'safa', '402');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `faculty_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(45) NOT NULL,
  `post` varchar(20) NOT NULL,
  `department` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`faculty_id`),
  UNIQUE KEY `faculty_id_UNIQUE` (`faculty_id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `type`, `name`, `user_name`, `gender`, `contact`, `email`, `post`, `department`, `password`) VALUES
(18, 'Teaching', 'neha', 'neha', 'female', '123456789', 'neha@gmail.com', 'Assistant Professor', 'Computer', 'e10adc3949ba59abbe56e057f20f883e'),
(19, 'Exam cell', 'naaz', 'naaz', 'female', '8745632558', 'naaz@gmail.com', '', '', 'e10adc3949ba59abbe56e057f20f883e'),
(20, 'Conduction Team', 'raju', 'raju', 'male', '854863556', 'raju@gmail.com', '', 'Computer', 'e10adc3949ba59abbe56e057f20f883e'),
(21, 'Non-Teaching', 'preeto', 'preeto', 'male', '8456213694', 'pal@gmail.com', 'Lab Assistant', 'Computer', 'e10adc3949ba59abbe56e057f20f883e'),
(22, 'Teaching', 'zaid', 'zaid', 'male', '654456', 'abc@gmail.com', 'hod', 'Computer', '81dc9bdb52d04dc20036dbd8313ed055'),
(23, 'Teaching', 'moin', 'moin', 'male', '875444', 'ds@gmail.com', 'hod', 'Electrical', '81dc9bdb52d04dc20036dbd8313ed055'),
(24, 'Teaching', 'safa', 'safa', 'female', '34567', 'acgg@gmail.com', 'Associate Professor', 'Computer', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `slotd`
--

DROP TABLE IF EXISTS `slotd`;
CREATE TABLE IF NOT EXISTS `slotd` (
  `slot_id` int(10) NOT NULL AUTO_INCREMENT,
  `fdate` date NOT NULL,
  `tdate` date NOT NULL,
  PRIMARY KEY (`slot_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slotd`
--

INSERT INTO `slotd` (`slot_id`, `fdate`, `tdate`) VALUES
(4, '2002-04-17', '2025-05-17'),
(3, '2017-04-02', '2017-05-25'),
(5, '2003-04-18', '2010-04-18'),
(6, '2017-04-02', '2017-05-25'),
(7, '2018-02-02', '2018-03-04'),
(8, '2018-02-02', '2018-03-05'),
(9, '2018-02-02', '2018-03-05'),
(10, '2018-02-09', '2018-03-19'),
(11, '2018-02-09', '2018-03-19'),
(12, '2018-05-08', '2018-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `slots_availability`
--

DROP TABLE IF EXISTS `slots_availability`;
CREATE TABLE IF NOT EXISTS `slots_availability` (
  `slots_id` int(11) NOT NULL AUTO_INCREMENT,
  `frome_date` date NOT NULL,
  `to_date` date NOT NULL,
  `faculty_id` int(11) NOT NULL,
  PRIMARY KEY (`slots_id`,`faculty_id`),
  UNIQUE KEY `faculty_id_UNIQUE` (`faculty_id`),
  UNIQUE KEY `slots_id_UNIQUE` (`slots_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slots_availability`
--

INSERT INTO `slots_availability` (`slots_id`, `frome_date`, `to_date`, `faculty_id`) VALUES
(3, '2020-02-18', '2022-02-18', 24);

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

DROP TABLE IF EXISTS `time_table`;
CREATE TABLE IF NOT EXISTS `time_table` (
  `tt_id` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(45) NOT NULL,
  `sem` varchar(45) NOT NULL,
  `exam` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `subject` varchar(40) NOT NULL,
  `session` varchar(10) NOT NULL,
  `time` varchar(40) NOT NULL,
  PRIMARY KEY (`tt_id`),
  UNIQUE KEY `tt_id_UNIQUE` (`tt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`tt_id`, `department`, `sem`, `exam`, `date`, `subject`, `session`, `time`) VALUES
(120, 'HAS', 'II', 'CBGS', '2018-04-10', 'm3', 'evening', '10-2'),
(121, 'computer', 'II', 'CBGS', '2018-04-11', 'm4', 'evening', '10-2'),
(122, 'HAS', 'II', 'CBGS', '2018-04-18', 'm1', 'evening', '10-2'),
(123, 'HAS', 'II', 'CBGS', '2018-04-25', 'm5', 'evening', '10-2'),
(124, 'HAS', 'II', 'CBGS', '2018-05-08', 'm2', 'evening', '10-2'),
(125, 'HAS', 'II', 'CBGS', '2018-05-16', 'm6', 'evening', '10-2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
