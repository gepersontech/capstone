-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 01:32 AM
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
(3, 'GEOMETRY', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(11) NOT NULL,
  `exam_title` varchar(255) NOT NULL,
  `exam_desc` varchar(500) NOT NULL,
  `totalPoints` int(100) NOT NULL,
  `passing_score` int(255) NOT NULL,
  `totalQuestion` int(100) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `exam_title`, `exam_desc`, `totalPoints`, `passing_score`, `totalQuestion`, `course_id`) VALUES
(1, 'Lesson 1 - Circle Quiz', 'Evaluate the student learning in circles', 110, 80, 11, 3);

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
  `hint_attempt` int(100) NOT NULL,
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
(1, ' It is the intersection of a plane and a double-napped cone.', 'locus', 'conic section', 'circle', 'radius', 'conic section', 'Two connecting cones', 1),
(2, 'A collection of points satisfying a geometric property can also be \r\nreferred to as a ______ of points.\r\n', 'locus', 'conic section', 'circle', 'radius', 'locus', 'Collection of points', 1),
(3, 'A ____________ is the set of all points (x, y) in a plane that are\r\nequidistant from a fixed point, called the center.', 'locus', 'conic section', 'circle', 'radius', 'circle', 'A cone with fixed point and center', 1),
(4, 'A/n ____________ is the set of all points in the plane that are equidistant from a fixed point F(called the focus) and a fixed line or (called the directrix).', 'circle', 'ellipse', 'parabola', 'hyperbola', 'parabola', 'A cone that contains vertex', 1),
(5, 'A/n ___________ is the set of all points in the plane the sum of \r\nwhose distances from two fixed points \\(F_{1}\\) and \\(F_{2}\\) is a constant.', 'circle', 'ellipse', 'parabola', 'hyperbola\r\n', 'ellipse', 'It is an elongated circle', 1),
(6, 'A/n ____________ is the set of all points in the plane, the difference \r\nof whose distances from two fixed points \\(F_{1}\\) and \\(F_{2}\\) is a constant.\r\n', 'circle', 'ellipse', 'parabola ', 'hyperbola', 'hyperbola', 'A cone with two opposite parabolas', 1),
(7, '\\(6x^2+12x+6y^2-8y=100\\) is an example of a', 'Circle', 'parabola ', 'ellipse', 'hyperbola', 'Circle', 'x and y have squares and its coefficients are equal', 1),
(8, '\\(4x^2+12x+y^2-8y=64\\) is an example of a', 'Circle', 'parabola', 'ellipse', 'hyperbola', 'ellipse', 'x and y have squares but its coefficients are equal and the sign between', 1),
(9, '\\(6y=3x^2−15\\) is an example of a', 'Circle', 'parabola', 'ellipse', 'hyperbola', 'parabola', 'Only one variable (either x or y) has a square', 1),
(10, '\\(2x^2+87x-25=y^2+4y\\) is an example of a', 'Circle', 'parabola', 'ellipse', 'hyperbola', 'hyperbola', 'x and y have squares, coefficients are different, the sign between them is subtraction', 1),
(11, '\\(6x^2-15x=3y^2+4y+13\\) is an example of a', 'Circle', 'parabola', 'ellipse', 'hyperbola', 'hyperbola', 'x and y have squares, coefficients are different, the sign between them is subtraction.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `exam_mistakes`
--

CREATE TABLE `exam_mistakes` (
  `mistake_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `examitem_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `answer_input` varchar(100) NOT NULL,
  `mistakes` int(11) NOT NULL,
  `examistakes_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `exam_results`
--

CREATE TABLE `exam_results` (
  `examresult_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `total_mistakes` int(255) NOT NULL,
  `total_hintUsed` int(255) NOT NULL,
  `Student_Score` int(255) NOT NULL,
  `status` int(100) NOT NULL,
  `result_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
  `lesson_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`lesson_id`, `lesson_name`, `lesson_desc`, `lesson_added`) VALUES
(1, 'Lesson 1', ' Introduction of Conic Sections and the Circle', '0000-00-00 00:00:00'),
(2, 'Lesson 2', 'The Parabola', '2022-11-04 17:23:51'),
(3, 'Lesson 3', 'The Ellipse', '2022-12-06 14:22:34'),
(4, 'Lesson 4', 'The Hyperbola', '2022-12-06 14:24:31');

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
-- Table structure for table `lesson_view`
--

CREATE TABLE `lesson_view` (
  `lesson_view_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lesson_id` int(11) NOT NULL,
  `isView` int(11) NOT NULL,
  `log_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `log_name` varchar(100) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
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
(74, '', 'James', 'Gwapo', '', 'male', 'Digos City, Mainland China', 'james@gmail.com', 'james@gmail.com', '$2y$10$2oE6J6xNEPmHevsieecineKNW0NAzRr/P5RWb2X6CG2Bq354BmERW', 3, '2022-12-08 22:44:07'),
(75, '', 'Geperson', 'Mamalias', '', 'male', 'Digos City', 'geperson.ph@gmail.com', 'geperson.ph@gmail.com', '$2y$10$dfYHvQ.KZbIxIWWsOki5AuuGaVgoUbFWJ985Z0kL2ZxCRxWULT4u2', 3, '2022-12-10 14:34:08'),
(228, '', 'Student1', 'Student1', '', '', '', 'student1@gmail.com', 'student1@gmail.com', '$2y$10$olgNpbBRnpCB/B8.20jfOeVmgCacA50gns5sS0aFeB7OrUSMNDSrC', 3, '0000-00-00 00:00:00'),
(229, '', 'Student2', 'Student2', '', '', '', 'student2@gmail.com', 'student2@gmail.com', '$2y$10$CNDzlgIpbHH.j2U.trUx3uFM0oyUswHwpMbAx.5bJBxSfz7weNnUe', 3, '0000-00-00 00:00:00'),
(230, '', 'Student3', 'Student3', '', '', '', 'student3@gmail.com', 'student3@gmail.com', '$2y$10$kiyhk2POoazjZGWYFDGVA.v1Rr1RAwQN1A5lGJ7cQaOZQPC80kdtS', 3, '0000-00-00 00:00:00'),
(231, '', 'Student4', 'Student4', '', '', '', 'student4@gmail.com', 'student4@gmail.com', '$2y$10$dZkth4GY2N/vZMJHplEhbuLj1xEXsOxeHb7pVOMjmf/FOyq5djcWO', 3, '0000-00-00 00:00:00'),
(232, '', 'Student5', 'Student5', '', '', '', 'student5@gmail.com', 'student5@gmail.com', '$2y$10$deo9briomDFSlT0RVcmn3.4kNGYk9unUX99mW53euQROwgR.WGLZy', 3, '0000-00-00 00:00:00'),
(233, '', 'Student6', 'Student6', '', '', '', 'student6@gmail.com', 'student6@gmail.com', '$2y$10$dS1EbKgSj5V3x8xjZs.qEO.l0LPtG.0cyLxKrTyetAFhtOFxdoCBO', 3, '0000-00-00 00:00:00'),
(234, '', 'Student7', 'Student7', '', '', '', 'student7@gmail.com', 'student7@gmail.com', '$2y$10$IyaiLlrrzhEX/sit32H3V.15sfjJATH2Nu0fwDSjCQzfZghPKnVSG', 3, '0000-00-00 00:00:00'),
(235, '', 'Student8', 'Student8', '', '', '', 'student8@gmail.com', 'student8@gmail.com', '$2y$10$GxoG1gHrVbkAep7Vg24cYeTbjh46W/z0Fj1sE4hTOcRZl3AVnsj6a', 3, '0000-00-00 00:00:00'),
(236, '', 'Student9', 'Student9', '', '', '', 'student9@gmail.com', 'student9@gmail.com', '$2y$10$eGkagDXJWHD51j1fOqD7Led1OmT8sRhmMAopgdk/FtNH1MrK/vxvq', 3, '0000-00-00 00:00:00'),
(237, '', 'Student10', 'Student10', '', '', '', 'student10@gmail.com', 'student10@gmail.com', '$2y$10$ICQCcFDCvDGhCdzHYMnT6uPbJUtm5dUNculxfESxFSvwBHFI8uLzO', 3, '0000-00-00 00:00:00'),
(238, '', 'Student11', 'Student11', '', '', '', 'student11@gmail.com', 'student11@gmail.com', '$2y$10$vpxEN7Mv941aws1Msb/GBubLnZgO60Gy/Hs9le4m2/urZ0bkaLVam', 3, '0000-00-00 00:00:00'),
(239, '', 'Student12', 'Student12', '', '', '', 'student12@gmail.com', 'student12@gmail.com', '$2y$10$DZ4hK5cYcmSchUUnJEoWX.kx56WaYUoyip/hllZoociipp79QdMKW', 3, '0000-00-00 00:00:00'),
(240, '', 'Student13', 'Student13', '', '', '', 'student13@gmail.com', 'student13@gmail.com', '$2y$10$lVxqYNrHnoUQS01COaynsOl/o9Bs8Rzr4.augrc.NLAa/xv0iizXy', 3, '0000-00-00 00:00:00'),
(241, '', 'Student14', 'Student14', '', '', '', 'student14@gmail.com', 'student14@gmail.com', '$2y$10$OUNCZewAL0QyjSOIAhKVn.701HNh7cDsH6fFbE7DZSJafns2V1oia', 3, '0000-00-00 00:00:00'),
(242, '', 'Student15', 'Student15', '', '', '', 'student15@gmail.com', 'student15@gmail.com', '$2y$10$vaseD3NKkBNVXVzp6yEhAOiXA9fAEHC.ID3M6HTIoIu32X6TTiB7e', 3, '0000-00-00 00:00:00'),
(243, '', 'Student16', 'Student16', '', '', '', 'student16@gmail.com', 'student16@gmail.com', '$2y$10$BHHt8x08jap35NNo/wYbG.5VavXBeUKp3PT3Rtb7Eta7ZJwLLoMqe', 3, '0000-00-00 00:00:00'),
(244, '', 'Student17', 'Student17', '', '', '', 'student17@gmail.com', 'student17@gmail.com', '$2y$10$hHoR9ew7AkcCrVRuswAgL.SgwxM36IASJvJlo7pK1o3mJQMEezkEW', 3, '0000-00-00 00:00:00'),
(245, '', 'Student18', 'Student18', '', '', '', 'student18@gmail.com', 'student18@gmail.com', '$2y$10$a.xzONMmUjBTP31iJGGptORunuXo6HzPV4eIxGgUHIWn3pIH8Mmxi', 3, '0000-00-00 00:00:00'),
(246, '', 'Student19', 'Student19', '', '', '', 'student19@gmail.com', 'student19@gmail.com', '$2y$10$Z6LkqFGzRtoUgj01Ho86SOLm1q5A3FTdIvs/NTnhCZMN.mNHvPGmW', 3, '0000-00-00 00:00:00'),
(247, '', 'Student20', 'Student20', '', '', '', 'student20@gmail.com', 'student20@gmail.com', '$2y$10$kKdUbyqiKHh7tkQl.n8B5.xrf4Wuw0Xr8JsiwsDlnKYYzzIk9TH8.', 3, '0000-00-00 00:00:00'),
(248, '', 'Student21', 'Student21', '', '', '', 'student21@gmail.com', 'student21@gmail.com', '$2y$10$ke1lcv1PX/cqkuKCPzrsNetzNVy1vDKysEIYu7KV5FaHFXN5vI.UG', 3, '0000-00-00 00:00:00'),
(249, '', 'Student22', 'Student22', '', '', '', 'student22@gmail.com', 'student22@gmail.com', '$2y$10$GqSPxboyhz5R3hblwPkB9OaubOVuAEy6NC5x75LxrHieSnkUDYgvS', 3, '0000-00-00 00:00:00'),
(250, '', 'Student23', 'Student23', '', '', '', 'student23@gmail.com', 'student23@gmail.com', '$2y$10$U7LAeXvE2AIrqtXyLohriu8eiGDcZ/OOhvUpM5eC2rvBNcuQSN/jG', 3, '0000-00-00 00:00:00'),
(251, '', 'Student24', 'Student24', '', '', '', 'student24@gmail.com', 'student24@gmail.com', '$2y$10$MmnSb80YQOwux2ZBbStRNOfQ3KgesFxWQsSgOTKl2uS.6P5ROrJlu', 3, '0000-00-00 00:00:00'),
(252, '', 'Student25', 'Student25', '', '', '', 'student25@gmail.com', 'student25@gmail.com', '$2y$10$R9ZhlItpz5wo7F6Q2V/gEOjCu3H8hnJOfOpKatp5TnRY/8E2YBt9C', 3, '0000-00-00 00:00:00'),
(253, '', 'Student26', 'Student26', '', '', '', 'student26@gmail.com', 'student26@gmail.com', '$2y$10$XptUzBPhMfrTc9zQA76dtul4WTui6FaedN4ahR4KNx0clUOFB1W/O', 3, '0000-00-00 00:00:00'),
(254, '', 'Student27', 'Student27', '', '', '', 'student27@gmail.com', 'student27@gmail.com', '$2y$10$l1.fGpNTjHhKuRp55Vzf.OPGRmW5jRIvhMd79upu7v4FspatQE.lu', 3, '0000-00-00 00:00:00'),
(255, '', 'Student28', 'Student28', '', '', '', 'student28@gmail.com', 'student28@gmail.com', '$2y$10$rPKy2Ukn44QQwC49THGkMerzjVqlO6/.vgHjswdEwDSh1zxQySGkS', 3, '0000-00-00 00:00:00'),
(256, '', 'Student29', 'Student29', '', '', '', 'student29@gmail.com', 'student29@gmail.com', '$2y$10$582NaS.KpQnnkniXPYW1CelIFLClc8zPTz4l20roOvHQ4fH9fs2VG', 3, '0000-00-00 00:00:00'),
(257, '', 'Student30', 'Student30', '', '', '', 'student30@gmail.com', 'student30@gmail.com', '$2y$10$nX63nLY7.//t/YRpoSyAou83q0eoqMY7/u/hf51TB1DitkF3A9Yam', 3, '0000-00-00 00:00:00'),
(258, '', 'Student31', 'Student31', '', '', '', 'student31@gmail.com', 'student31@gmail.com', '$2y$10$yJLbQc.vf.t2qACnnAp9heEZ1e9kqeh/teAyImKqKUFVm3klwP0pi', 3, '0000-00-00 00:00:00'),
(259, '', 'Student32', 'Student32', '', '', '', 'student32@gmail.com', 'student32@gmail.com', '$2y$10$B4pVAH7/M9XAQDu/0sFjBuLZI06W7cd9iT3/jsaX8.eFpyJPW7FSm', 3, '0000-00-00 00:00:00'),
(260, '', 'Student33', 'Student33', '', '', '', 'student33@gmail.com', 'student33@gmail.com', '$2y$10$3zzNbNP/r9HWCc/nOeQ45uhGPBnbyviqNJAa7q.9O1qRR3PjxQFDa', 3, '0000-00-00 00:00:00'),
(261, '', 'Student34', 'Student34', '', '', '', 'student34@gmail.com', 'student34@gmail.com', '$2y$10$53kstSyS8FJpDyvQy20JgOu3lcc9UmZqMAL6.kFKTmKj9Y9w3uAli', 3, '0000-00-00 00:00:00'),
(262, '', 'Student35', 'Student35', '', '', '', 'student35@gmail.com', 'student35@gmail.com', '$2y$10$aiBSWccIQrZ6LY16f8.jsuQKKESrvc/mn67PtNCmGYHBR.1S1Eoa6', 3, '0000-00-00 00:00:00'),
(263, '', 'Student36', 'Student36', '', '', '', 'student36@gmail.com', 'student36@gmail.com', '$2y$10$by3DUQulB/KEBELSPXvf3ugCYOyoLOnyFG3qr3T3r3AoI40oI1O0q', 3, '0000-00-00 00:00:00'),
(264, '', 'Student37', 'Student37', '', '', '', 'student37@gmail.com', 'student37@gmail.com', '$2y$10$BWmMhA9qRa5s1HtnwGV5sOHfgOFAcJEKSaaqIsjkqbFHedkRfR5ti', 3, '0000-00-00 00:00:00'),
(265, '', 'Student38', 'Student38', '', '', '', 'student38@gmail.com', 'student38@gmail.com', '$2y$10$YbCqTlu83ew4C6EjQI8bterRuRsfcoBthctEEv9XkkkZYNnTxRBpq', 3, '0000-00-00 00:00:00'),
(266, '', 'Student39', 'Student39', '', '', '', 'student39@gmail.com', 'student39@gmail.com', '$2y$10$ErPE3j/3.58OOCnHtVXrSu5vN0gTVvySi8epbx85TEv/T.us2vQLu', 3, '0000-00-00 00:00:00'),
(267, '', 'Student40', 'Student40', '', '', '', 'student40@gmail.com', 'student40@gmail.com', '$2y$10$6MOZtekpM0dVfgQeJXnHmOJ8NKnq9gVyD6jiP.MiToW5QGdqEOj26', 3, '0000-00-00 00:00:00'),
(268, '', 'Student41', 'Student41', '', '', '', 'student41@gmail.com', 'student41@gmail.com', '$2y$10$JJDlXJn8fFm6j/B4wcHdAuxAnmk.nmMSG1o421/nnF4Fzi2tAM7QW', 3, '0000-00-00 00:00:00'),
(269, '', 'Student42', 'Student42', '', '', '', 'student42@gmail.com', 'student42@gmail.com', '$2y$10$65VNUfxCvr9viuggZjNtd.MFkphzzIc.E8NM90i0kNu3j9h5rwove', 3, '0000-00-00 00:00:00'),
(270, '', 'Student43', 'Student43', '', '', '', 'student43@gmail.com', 'student43@gmail.com', '$2y$10$u1OmQSw0ceNl0tI2M05ZpOg7rRjefOacrvIw8sW9hFr1K1LzcsagG', 3, '0000-00-00 00:00:00'),
(271, '', 'Student44', 'Student44', '', '', '', 'student44@gmail.com', 'student44@gmail.com', '$2y$10$jR/uO7XVSmuTU9s1X.0gKumERP.2q8ddgMKdkqcflSh71qxjZoXJ.', 3, '0000-00-00 00:00:00'),
(272, '', 'Student45', 'Student45', '', '', '', 'student45@gmail.com', 'student45@gmail.com', '$2y$10$qdKNhaMhGH5liFFBAcnMfuTBHbkUygkco6ggtt.KxFeSV5fVOABaS', 3, '0000-00-00 00:00:00'),
(273, '', 'Student46', 'Student46', '', '', '', 'student46@gmail.com', 'student46@gmail.com', '$2y$10$cdPConK97DGP5fpPveTcBuwMPACzEzAMYAfDyXk2mdLPM/JNbFHiq', 3, '0000-00-00 00:00:00'),
(274, '', 'Student47', 'Student47', '', '', '', 'student47@gmail.com', 'student47@gmail.com', '$2y$10$JgcXStyc1HIirTVLFiYQVOp6Tn1UTszCLUu3YftURNtz0O4JgXpXi', 3, '0000-00-00 00:00:00'),
(275, '', 'Student48', 'Student48', '', '', '', 'student48@gmail.com', 'student48@gmail.com', '$2y$10$20bbLQMUX3v87rUOctOMNOHnkfA2t6109lRW7EZrYiK4ZgEYqkPIO', 3, '0000-00-00 00:00:00'),
(276, '', 'Student49', 'Student49', '', '', '', 'student49@gmail.com', 'student49@gmail.com', '$2y$10$miCes7a9waqLfG.8VHG.S.u6GfxykGxge62j4.9OyZvUVFP31mbU.', 3, '0000-00-00 00:00:00'),
(277, '', 'Student50', 'Student50', '', '', '', 'student50@gmail.com', 'student50@gmail.com', '$2y$10$4oxaxBlFXAnF8G4PF4J9LONhFC517ltE1SpYeNS7Q6vlHEUtSwiI2', 3, '0000-00-00 00:00:00');

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
-- Indexes for table `exam_results`
--
ALTER TABLE `exam_results`
  ADD PRIMARY KEY (`examresult_id`);

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
-- Indexes for table `lesson_view`
--
ALTER TABLE `lesson_view`
  ADD PRIMARY KEY (`lesson_view_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`log_id`);

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
-- AUTO_INCREMENT for table `exam_attempt`
--
ALTER TABLE `exam_attempt`
  MODIFY `examAttempt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `exam_correct`
--
ALTER TABLE `exam_correct`
  MODIFY `examcorrect_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=273;

--
-- AUTO_INCREMENT for table `exam_items`
--
ALTER TABLE `exam_items`
  MODIFY `examitem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `exam_mistakes`
--
ALTER TABLE `exam_mistakes`
  MODIFY `mistake_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=601;

--
-- AUTO_INCREMENT for table `exam_results`
--
ALTER TABLE `exam_results`
  MODIFY `examresult_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lesson_view`
--
ALTER TABLE `lesson_view`
  MODIFY `lesson_view_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
  MODIFY `user_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=278;

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
