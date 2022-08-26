-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 26, 2022 at 05:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geometry`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `accountID` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `date-registered` date DEFAULT NULL,
  `studentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `assignmentID` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `totalQuestion` int(11) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemId` int(11) NOT NULL,
  `questions` varchar(45) DEFAULT NULL,
  `answerKey` varchar(45) DEFAULT NULL,
  `moduleID` int(11) NOT NULL,
  `assignmentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `lessonID` int(11) NOT NULL,
  `lessonName` varchar(45) DEFAULT NULL,
  `lessonvideo` blob DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `moduleID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `moduleID` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `progressID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `progressID` int(11) NOT NULL,
  `Description` int(11) DEFAULT NULL,
  `scoreInfo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentID` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `middlename` varchar(45) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `birthdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transactionID` int(11) NOT NULL,
  `startdate` date DEFAULT NULL,
  `studentID` int(11) NOT NULL,
  `moduleID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`accountID`,`studentID`),
  ADD KEY `fk_account_student1_idx` (`studentID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`assignmentID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemId`,`moduleID`,`assignmentID`),
  ADD KEY `fk_items_modules1_idx` (`moduleID`),
  ADD KEY `fk_items_assignment1_idx` (`assignmentID`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`lessonID`,`moduleID`),
  ADD KEY `fk_lessons_modules1_idx` (`moduleID`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`moduleID`,`progressID`),
  ADD KEY `fk_modules_progress1_idx` (`progressID`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`progressID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transactionID`,`studentID`,`moduleID`),
  ADD KEY `fk_transaction_student_idx` (`studentID`),
  ADD KEY `fk_transaction_modules1_idx` (`moduleID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `fk_account_student1` FOREIGN KEY (`studentID`) REFERENCES `student` (`studentID`);

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `fk_items_assignment1` FOREIGN KEY (`assignmentID`) REFERENCES `assignment` (`assignmentID`),
  ADD CONSTRAINT `fk_items_modules1` FOREIGN KEY (`moduleID`) REFERENCES `modules` (`moduleID`);

--
-- Constraints for table `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `fk_lessons_modules1` FOREIGN KEY (`moduleID`) REFERENCES `modules` (`moduleID`);

--
-- Constraints for table `modules`
--
ALTER TABLE `modules`
  ADD CONSTRAINT `fk_modules_progress1` FOREIGN KEY (`progressID`) REFERENCES `progress` (`progressID`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `fk_transaction_modules1` FOREIGN KEY (`moduleID`) REFERENCES `modules` (`moduleID`),
  ADD CONSTRAINT `fk_transaction_student` FOREIGN KEY (`studentID`) REFERENCES `student` (`studentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
