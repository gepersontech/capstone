-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 06:32 PM
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
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(250) NOT NULL,
  `course_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_created`) VALUES
(3, 'GEOMETRY', '0000-00-00 00:00:00'),
(5, 'BSCS', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(11) NOT NULL,
  `exam_title` varchar(255) NOT NULL,
  `exam_desc` varchar(500) NOT NULL,
  `totalPoints` int(100) NOT NULL,
  `totalQuestion` int(100) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `exam_title`, `exam_desc`, `totalPoints`, `totalQuestion`, `course_id`) VALUES
(1, 'Circle post test', 'Evaluate the student learning in circles', 110, 11, 3);

-- --------------------------------------------------------

--
-- Table structure for table `examquestion_attempt`
--

CREATE TABLE `examquestion_attempt` (
  `eqa_id` int(11) NOT NULL,
  `studen_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `examitem_id` int(11) NOT NULL,
  `status` int(255) NOT NULL,
  `eqa_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `exam_answers`
--

CREATE TABLE `exam_answers` (
  `exans_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `num_wrong` int(11) NOT NULL,
  `exans_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_answers`
--

INSERT INTO `exam_answers` (`exans_id`, `student_id`, `course_id`, `exam_id`, `question_id`, `num_wrong`, `exans_created`) VALUES
(1, 1, 1, 1, 1, 3, '2022-12-06 15:19:16'),
(2, 1, 1, 1, 1, 1, '2022-12-06 17:19:39'),
(3, 1, 1, 1, 1, 1, '2022-12-06 17:21:48'),
(4, 1, 1, 1, 1, 1, '2022-12-06 17:23:28'),
(5, 1, 1, 1, 1, 1, '2022-12-06 17:25:54'),
(6, 1, 1, 1, 1, 1, '2022-12-06 17:26:03'),
(7, 1, 1, 1, 1, 1, '2022-12-06 17:26:38'),
(8, 1, 1, 1, 1, 1, '2022-12-06 17:56:47'),
(9, 1, 1, 1, 1, 1, '2022-12-06 17:57:00'),
(10, 1, 1, 1, 1, 1, '2022-12-06 17:57:08'),
(11, 1, 1, 1, 1, 1, '2022-12-06 17:57:13'),
(12, 1, 1, 1, 1, 1, '2022-12-06 17:58:24'),
(13, 1, 1, 1, 1, 1, '2022-12-06 18:13:39'),
(14, 1, 1, 1, 1, 1, '2022-12-07 05:30:04'),
(15, 1, 1, 1, 1, 1, '2022-12-07 10:47:55'),
(16, 1, 1, 1, 1, 1, '2022-12-07 10:48:44'),
(17, 1, 1, 1, 1, 1, '2022-12-07 10:48:52'),
(18, 1, 1, 1, 1, 1, '2022-12-07 13:30:30'),
(19, 1, 1, 1, 1, 1, '2022-12-07 13:50:53'),
(20, 1, 1, 1, 1, 1, '2022-12-07 14:23:27'),
(21, 1, 1, 1, 1, 1, '2022-12-07 14:23:30');

-- --------------------------------------------------------

--
-- Table structure for table `exam_attempt`
--

CREATE TABLE `exam_attempt` (
  `examAttempt_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `status` int(255) NOT NULL,
  `exattempt_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `exam_correct`
--

CREATE TABLE `exam_correct` (
  `examcorrect_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `examitem_id` int(11) NOT NULL,
  `points` int(255) NOT NULL,
  `excorrect_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `exam_items`
--

CREATE TABLE `exam_items` (
  `examitem_id` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `exam_ch1` varchar(255) NOT NULL,
  `exam_ch2` varchar(255) NOT NULL,
  `exam_ch3` varchar(255) NOT NULL,
  `exam_ch4` varchar(255) NOT NULL,
  `answerkey` varchar(255) NOT NULL,
  `hint` varchar(255) NOT NULL,
  `exam_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_items`
--

INSERT INTO `exam_items` (`examitem_id`, `question`, `exam_ch1`, `exam_ch2`, `exam_ch3`, `exam_ch4`, `answerkey`, `hint`, `exam_id`) VALUES
(1, ' It is the intersection of a plane and a double-napped cone.', 'locus', 'conic section', 'circle', 'radius', 'conic section', 'waiting', 1),
(2, 'A collection of points satisfying a geometric property can also be \r\nreferred to as a ______ of points.\r\n', 'locus', 'conic section', 'circle', 'radius', 'locus', 'waiting', 1),
(3, 'A ____________ is the set of all points (x, y) in a plane that are\r\nequidistant from a fixed point, called the center.', 'locus', 'conic section', 'circle', 'radius', 'circle', 'waiting', 1),
(4, 'A/n ____________ is the set of all points in the plane that are equidistant from a fixed point F(called the focus) and a fixed line or (called the directrix).', 'circle', 'ellipse', 'parabola', 'hyperbola', 'parabola', 'waiting', 1),
(5, 'A/n ___________ is the set of all points in the plane the sum of \r\nwhose distances from two fixed points \\(F_{1}\\) and \\(F_{2}\\) is a constant.', 'circle', 'ellipse', 'parabola', 'hyperbola\r\n', 'ellipse', 'waiting', 1),
(6, 'A/n ____________ is the set of all points in the plane, the difference \r\nof whose distances from two fixed points \\(F_{1}\\) and \\(F_{2}\\) is a constant.\r\n', 'circle', 'ellipse', 'parabola ', 'hyperbola', 'hyperbola', 'waiting', 1),
(7, '\\(6x^2+12x+6y^2-8y=100\\) is an example of a', 'Circle', 'parabola ', 'ellipse', 'hyperbola', 'Circle', 'waiting', 1),
(8, '\\(4x^2+12x+y^2-8y=64\\) is an example of a', 'Circle', 'parabola', 'ellipse', 'hyperbola', 'ellipse', 'waiting', 1),
(9, '\\(6y=3x^2−15\\) is an example of a', 'Circle', 'parabola', 'ellipse', 'hyperbola', 'parabola', 'waiting', 1),
(10, '\\(2x^2+87x-25=y^2+4y\\) is an example of a', 'Circle', 'parabola', 'ellipse', 'hyperbola', 'hyperbola', 'waiting', 1),
(11, '\\(6x^2-15x=3y^2+4y+13\\) is an example of a', 'Circle', 'parabola', 'ellipse', 'hyperbola', 'hyperbola', 'waiting', 1);

-- --------------------------------------------------------

--
-- Table structure for table `exam_mistakes`
--

CREATE TABLE `exam_mistakes` (
  `mistake_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `examitem_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `mistakes` int(11) NOT NULL,
  `examistakes_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `lesson_id` int(11) NOT NULL,
  `lesson_name` varchar(250) NOT NULL,
  `lesson_desc` varchar(250) NOT NULL,
  `lesson_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`lesson_id`, `lesson_name`, `lesson_desc`, `lesson_added`) VALUES
(1, 'Lesson 1', ' Introduction of Conic Sections and the Circle', '0000-00-00 00:00:00'),
(2, 'Lesson 2', 'The Parabola', '2022-11-05 01:23:51'),
(3, 'Lesson 3', 'The Ellipse', '2022-12-06 22:22:34'),
(4, 'Lesson 4', 'The Hyperbola', '2022-12-06 22:24:31');

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
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `module_id` int(11) NOT NULL,
  `module_name` varchar(250) NOT NULL,
  `module_desc` varchar(250) NOT NULL,
  `module_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`module_id`, `module_name`, `module_desc`, `module_added`) VALUES
(5, 'MODULE 1', 'ANALYTIC GEOMETRY', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `module_id` int(11) NOT NULL,
  `module_name` varchar(45) DEFAULT NULL,
  `module_added` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL
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
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'superadmin'),
(2, 'admin'),
(3, 'student'),
(4, 'teacher');

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(55) NOT NULL,
  `profile_pic` varchar(200) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `age` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email_add` varchar(50) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role_id` int(55) NOT NULL,
  `added_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `profile_pic`, `firstname`, `lastname`, `age`, `gender`, `address`, `email_add`, `username`, `password`, `role_id`, `added_at`) VALUES
(1, '', 'Admin', 'Admin', '25', 'Male', 'Digos City', 'admin@gmail.com', 'admin@gmail.com', '$2y$10$627KTYhahPQq9al9sbgQDuJaeRiROt.rDoWPV1nqwYjsxZNHNlr4W', 4, '2022-11-22 09:18:43'),
(2, '', 'User', 'User', '25', 'Male', 'Digos City', 'user@gmail.com', 'user@gmail.com', '$2y$10$aoF3GO5Wyf6qLSG8MhbDaO4hjb8VID9A9NEnfqr6gvxaqJHA3jrwO', 3, '2022-11-22 09:20:09'),
(3, '', 'Superadmin', 'Superadmin', '25', 'Male', 'Digos City', 'superadmin@gmail.com', 'superadmin@gmail.com', '$2y$10$9cKb.z/gAsSZwlK10oSX1OPQsNE1HtkJYouQouw0CaJ4pc6wL6WI.', 1, '2022-11-22 09:21:26'),
(74, '', 'James', 'Gwapo', '', 'male', 'Digos City, Mainland China', 'james@gmail.com', 'james@gmail.com', '$2y$10$2oE6J6xNEPmHevsieecineKNW0NAzRr/P5RWb2X6CG2Bq354BmERW', 3, '2022-12-08 22:44:07');

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
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `examquestion_attempt`
--
ALTER TABLE `examquestion_attempt`
  ADD PRIMARY KEY (`eqa_id`);

--
-- Indexes for table `exam_answers`
--
ALTER TABLE `exam_answers`
  ADD PRIMARY KEY (`exans_id`);

--
-- Indexes for table `exam_attempt`
--
ALTER TABLE `exam_attempt`
  ADD PRIMARY KEY (`examAttempt_id`);

--
-- Indexes for table `exam_correct`
--
ALTER TABLE `exam_correct`
  ADD PRIMARY KEY (`examcorrect_id`);

--
-- Indexes for table `exam_items`
--
ALTER TABLE `exam_items`
  ADD PRIMARY KEY (`examitem_id`);

--
-- Indexes for table `exam_mistakes`
--
ALTER TABLE `exam_mistakes`
  ADD PRIMARY KEY (`mistake_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemId`,`moduleID`,`assignmentID`),
  ADD KEY `fk_items_modules1_idx` (`moduleID`),
  ADD KEY `fk_items_assignment1_idx` (`assignmentID`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`lessonID`,`moduleID`),
  ADD KEY `fk_lessons_modules1_idx` (`moduleID`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`module_id`,`user_id`),
  ADD KEY `fk_modules_progress1_idx` (`user_id`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`progressID`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `examquestion_attempt`
--
ALTER TABLE `examquestion_attempt`
  MODIFY `eqa_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_answers`
--
ALTER TABLE `exam_answers`
  MODIFY `exans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `exam_attempt`
--
ALTER TABLE `exam_attempt`
  MODIFY `examAttempt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_correct`
--
ALTER TABLE `exam_correct`
  MODIFY `examcorrect_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `exam_items`
--
ALTER TABLE `exam_items`
  MODIFY `examitem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `exam_mistakes`
--
ALTER TABLE `exam_mistakes`
  MODIFY `mistake_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

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
  ADD CONSTRAINT `fk_items_modules1` FOREIGN KEY (`moduleID`) REFERENCES `modules` (`module_id`);

--
-- Constraints for table `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `fk_lessons_modules1` FOREIGN KEY (`moduleID`) REFERENCES `modules` (`module_id`);

--
-- Constraints for table `modules`
--
ALTER TABLE `modules`
  ADD CONSTRAINT `fk_modules_progress1` FOREIGN KEY (`user_id`) REFERENCES `progress` (`progressID`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `fk_transaction_modules1` FOREIGN KEY (`moduleID`) REFERENCES `modules` (`module_id`),
  ADD CONSTRAINT `fk_transaction_student` FOREIGN KEY (`studentID`) REFERENCES `student` (`studentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
