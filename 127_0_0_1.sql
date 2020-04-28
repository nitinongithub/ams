-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2020 at 03:40 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ams`
--
CREATE DATABASE IF NOT EXISTS `ams` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ams`;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attend_id` int(11) NOT NULL,
  `enrollment_no` int(10) NOT NULL,
  `course_id` varchar(10) NOT NULL,
  `subject_code` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date` text NOT NULL,
  `faculty_id` int(10) NOT NULL,
  `sess_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attend_id`, `enrollment_no`, `course_id`, `subject_code`, `status`, `date`, `faculty_id`, `sess_id`) VALUES
(1, 1, 'bca', 'web_tech', 'present', '10-04-2020', 3, 2020),
(2, 2, 'bca', 'web_tech', 'absent', '10-04-2020', 3, 2020),
(3, 3, 'bca', 'web_tech', 'present', '10-04-2020', 3, 2020),
(4, 4, 'bca', 'web_tech', 'absent', '10-04-2020', 3, 2020),
(5, 1, 'bca', 'dbms', 'present', '10-04-2020', 6, 2020),
(6, 2, 'bca', 'dbms', 'present', '10-04-2020', 6, 2020),
(7, 3, 'bca', 'dbms', 'present', '10-04-2020', 6, 2020),
(8, 4, 'bca', 'dbms', 'absent', '10-04-2020', 6, 2020),
(9, 1, 'bca', '.net', 'absent', '10-04-2020', 5, 2020),
(10, 2, 'bca', '.net', 'absent', '10-04-2020', 5, 2020),
(11, 3, 'bca', '.net', 'present', '10-04-2020', 5, 2020),
(12, 4, 'bca', '.net', 'present', '10-04-2020', 5, 2020),
(13, 1, 'bca', '.net', 'present', '11-04-2020', 5, 2020),
(14, 2, 'bca', '.net', 'present', '11-04-2020', 5, 2020),
(15, 3, 'bca', '.net', 'present', '11-04-2020', 5, 2020),
(16, 4, 'bca', '.net', 'absent', '11-04-2020', 5, 2020),
(17, 1, 'bca', 'web_tech', 'absent', '11-04-2020', 3, 2020),
(18, 2, 'bca', 'web_tech', 'absent', '11-04-2020', 3, 2020),
(19, 3, 'bca', 'web_tech', 'present', '11-04-2020', 3, 2020),
(20, 4, 'bca', 'web_tech', 'present', '11-04-2020', 3, 2020),
(21, 1, 'bca', 'dbms', 'absent', '11-04-2020', 6, 2020),
(22, 2, 'bca', 'dbms', 'present', '11-04-2020', 6, 2020),
(23, 3, 'bca', 'dbms', 'present', '11-04-2020', 6, 2020),
(24, 4, 'bca', 'dbms', 'present', '11-04-2020', 6, 2020),
(25, 1, 'bca', 'dbms', 'present', '12-04-2020', 6, 2020),
(26, 2, 'bca', 'dbms', 'present', '12-04-2020', 6, 2020),
(27, 3, 'bca', 'dbms', 'present', '12-04-2020', 6, 2020),
(28, 4, 'bca', 'dbms', 'present', '12-04-2020', 6, 2020),
(29, 1, 'bca', 'web_tech', 'absent', '12-04-2020', 3, 2020),
(30, 2, 'bca', 'web_tech', 'present', '12-04-2020', 3, 2020),
(31, 3, 'bca', 'web_tech', 'present', '12-04-2020', 3, 2020),
(32, 4, 'bca', 'web_tech', 'present', '12-04-2020', 3, 2020),
(33, 1, 'bca', '.net', 'present', '12-04-2020', 5, 2020),
(34, 2, 'bca', '.net', 'present', '12-04-2020', 5, 2020),
(35, 3, 'bca', '.net', 'present', '12-04-2020', 5, 2020),
(36, 4, 'bca', '.net', 'absent', '12-04-2020', 5, 2020),
(49, 1, 'bca', 'web_tech', 'present', '15-04-2020', 3, 2020),
(50, 2, 'bca', 'web_tech', 'absent', '15-04-2020', 3, 2020),
(51, 3, 'bca', 'web_tech', 'present', '15-04-2020', 3, 2020),
(52, 4, 'bca', 'web_tech', 'absent', '15-04-2020', 3, 2020),
(53, 1, 'bca', 'dbms', 'present', '15-04-2020', 6, 2020),
(54, 2, 'bca', 'dbms', 'absent', '15-04-2020', 6, 2020),
(55, 3, 'bca', 'dbms', 'absent', '15-04-2020', 6, 2020),
(56, 4, 'bca', 'dbms', 'present', '15-04-2020', 6, 2020),
(57, 1, 'bca', '.net', 'absent', '15-04-2020', 5, 2020),
(58, 2, 'bca', '.net', 'absent', '15-04-2020', 5, 2020),
(59, 3, 'bca', '.net', 'absent', '15-04-2020', 5, 2020),
(60, 4, 'bca', '.net', 'absent', '15-04-2020', 5, 2020),
(87, 3, 'bca', 'web_tech', 'present', '16-04-2020', 3, 2020),
(88, 4, 'bca', 'web_tech', 'absent', '16-04-2020', 3, 2020),
(97, 1, 'bca', 'web_tech', 'present', '24-04-2020', 3, 2020),
(98, 2, 'bca', 'web_tech', 'absent', '24-04-2020', 3, 2020),
(99, 3, 'bca', 'web_tech', 'present', '24-04-2020', 3, 2020),
(100, 4, 'bca', 'web_tech', 'absent', '24-04-2020', 3, 2020);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(10) NOT NULL,
  `course_name` varchar(40) NOT NULL,
  `dept_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `dept_id`) VALUES
('bba', 'Bachelor In Business Administration', 'fcbm'),
('bca', 'Bachelor In Computer Application', 'ftcs'),
('mba', 'Master In Business Administration', 'fcbm'),
('mca', 'master In Computer Application', 'ftcs');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` varchar(10) NOT NULL,
  `dept_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`) VALUES
('choose', 'choose'),
('fcbm', 'Faculty of Business Administration'),
('ftcs', 'Faculty OF Technology And Computer Applications');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(10) NOT NULL,
  `faculty_name` varchar(30) NOT NULL,
  `contact` bigint(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `dept_id` varchar(10) NOT NULL,
  `sess_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`, `contact`, `email`, `username`, `dept_id`, `sess_id`) VALUES
(3, 'roshan chopra', 7456935618, 'tiwarimeenu593@gmail', 'roshan', 'ftcs', 2020),
(5, 'nandi joshi', 7456935618, 'tiwarimeenu593@gmail', 'nandi', 'fcbm', 2020),
(6, 'bhupesh rathaur', 2147483647, 'tiwarimeenu593@gmail', 'bhupesh', 'fcbm', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `sess_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `name`, `feedback`, `sess_id`) VALUES
(49, 'mohan', 'good', 2020),
(60, 'kavita', 'very good', 2020),
(66, 'manisha', 'you have wonderful faculty', 2020),
(69, 'MANISHA JOSHI', 'dfjkdvhjfkhvjbvnbvncbvncv', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `STID` int(11) NOT NULL,
  `sess_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `STID`, `sess_id`) VALUES
('admin', 'admin123', 1, 2020),
('bhupesh', '1', 3, 2020),
('disha', 'disha123', 4, 2020),
('kc', 'kc123', 2, 2020),
('manisha', '2', 4, 2020),
('mc', 'mc123', 2, 2020),
('meenakshi', 'meena123', 4, 2020),
('nandi', 'nandi123', 3, 2020),
('nannu', '2', 1, 2021),
('rakhi', 'rakhi123', 4, 2020),
('roshan', '2', 3, 2020);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(10) NOT NULL,
  `item` varchar(40) NOT NULL,
  `path` varchar(40) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `item`, `path`, `status`) VALUES
(1, 'Update_Attendance', 'web/update_attend', 1),
(2, 'Add_Faculty', 'web/add_fac', 1),
(3, 'View_Profile', 'web/index2', 1),
(4, 'Add_Subject', 'web/add_sub', 1),
(5, 'Mark_Attendance', 'web/mark_attendance', 1),
(6, 'View_Attendance', 'web/view_attend', 1),
(7, 'Student_View_Attendance', 'web/std_view_attend', 1),
(8, 'View_Profile', 'web/index3', 1),
(9, 'Feedback', 'web/feedback', 1),
(11, 'View_Feedback', 'web/index4', 1),
(12, 'Manage_Session', 'web/manage_session', 1),
(13, 'Add_Parent', 'web/add_par', 1),
(15, 'View_Profile', 'web/index1', 1),
(16, 'Add_student', 'web/addstudent', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `parent_id` int(10) NOT NULL,
  `parent_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` bigint(12) NOT NULL,
  `relation` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `sess_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`parent_id`, `parent_name`, `email`, `contact`, `relation`, `username`, `sess_id`) VALUES
(23, 'ndfhdj', 'tiwarimeenu@gmail.com', 7456935618, 'mother', 'kc', 2020),
(25, 'mahesh', 'tiwarimeenu593@gmail.com', 678734873, 'Father', 'mc', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `semester_id` varchar(10) NOT NULL,
  `semester_name` varchar(10) NOT NULL,
  `course_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semester_id`, `semester_name`, `course_id`) VALUES
('sembba1', 'first', 'bba'),
('sembba2', 'second', 'bba'),
('sembca1', 'first', 'bca'),
('sembca2', 'second', 'bca'),
('semmba1', 'first', 'mba'),
('semmba2', 'second', 'mba'),
('semmca1', 'first', 'mca'),
('semmca2', 'second', 'mca');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `sess_id` int(20) NOT NULL,
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL,
  `session_created` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`sess_id`, `start_date`, `end_date`, `session_created`) VALUES
(2020, '1-2-2020', '1-2-2021', '1-2-2020'),
(2021, '1-01-2021', '1-01-2022', '1-01-2021');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `enrollment_no` int(10) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `roll_no` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `course_id` varchar(10) NOT NULL,
  `semester_id` varchar(10) NOT NULL,
  `dept_id` varchar(10) NOT NULL,
  `sess_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`enrollment_no`, `student_name`, `roll_no`, `email`, `contact`, `username`, `course_id`, `semester_id`, `dept_id`, `sess_id`) VALUES
(1, 'meenakshi tiwari', 1, 'tiwarimeenu593@gmail', 2147483647, 'meenakshi', 'bca', 'sembca1', 'ftcs', 2021),
(2, 'manisha joshi', 2, 'tiwarimeenu593@gmail', 8923423206, 'manisha', 'bca', 'sembca1', 'ftcs', 2020),
(3, 'rakhi joshi', 3, 'tiwarimeenu@gamil.com', 7456935618, 'rakhi', 'bca', 'sembca1', 'ftcs', 2020),
(4, 'disha joshi', 4, 'tiwarikavita@123gmail.com', 7456935618, 'disha', 'bca', 'sembca1', 'ftcs', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `subfaculty`
--

CREATE TABLE `subfaculty` (
  `subfac_id` int(10) NOT NULL,
  `subject_code` varchar(20) NOT NULL,
  `course_id` varchar(10) NOT NULL,
  `class` varchar(20) NOT NULL,
  `faculty_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subfaculty`
--

INSERT INTO `subfaculty` (`subfac_id`, `subject_code`, `course_id`, `class`, `faculty_id`) VALUES
(6, 'web_tech', 'bca', 'lacture', 3),
(15, '.net', 'bca', 'lacture', 5),
(17, 'economic', 'bba', 'lacture', 6),
(18, 'economic', 'bba', 'lacture', 5),
(19, 'dbms', 'bca', 'lacture', 6);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_code` varchar(20) NOT NULL,
  `subject_name` varchar(20) NOT NULL,
  `semester_id` varchar(10) NOT NULL,
  `course_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_code`, `subject_name`, `semester_id`, `course_id`) VALUES
('.net', '.net', 'sembca1', 'bca'),
('business', 'business', 'sembba1', 'bba'),
('dbms', 'dbms', 'sembca1', 'bca'),
('economic', 'economic', 'sembba1', 'bba'),
('statstics', 'statstics', 'sembba1', 'bba'),
('web_tech', 'web tech', 'sembca1', 'bca');

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `u_id` int(20) NOT NULL,
  `menu_id` int(10) NOT NULL,
  `STID` int(11) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`u_id`, `menu_id`, `STID`, `status`) VALUES
(1, 7, 4, 1),
(2, 3, 4, 1),
(3, 9, 4, 1),
(5, 12, 1, 1),
(6, 2, 1, 1),
(7, 16, 1, 1),
(8, 4, 1, 1),
(9, 13, 1, 1),
(10, 6, 1, 1),
(11, 11, 1, 1),
(13, 6, 2, 1),
(14, 15, 2, 1),
(15, 9, 2, 1),
(17, 5, 3, 1),
(19, 1, 3, 1),
(20, 8, 3, 1),
(21, 6, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE `user_status` (
  `STID` int(11) NOT NULL,
  `STATUS` varchar(25) NOT NULL,
  `ACTIVE` tinyint(1) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`STID`, `STATUS`, `ACTIVE`, `pic`) VALUES
(1, 'Administrator', 1, 'tech.jpg'),
(2, 'parent', 1, 'tech.jpg'),
(3, 'Faculty', 1, 'tech.jpg'),
(4, 'Student', 1, 'tech.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attend_id`),
  ADD KEY `enrollment_no` (`enrollment_no`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `subject_code` (`subject_code`),
  ADD KEY `sess_id` (`sess_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`),
  ADD KEY `username` (`username`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `sess_id` (`sess_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `sess_id` (`sess_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`),
  ADD KEY `STID` (`STID`),
  ADD KEY `sess_id` (`sess_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`parent_id`),
  ADD KEY `username` (`username`),
  ADD KEY `sess_id` (`sess_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semester_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`sess_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`enrollment_no`),
  ADD KEY `username` (`username`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `semester_id` (`semester_id`),
  ADD KEY `sess_id` (`sess_id`);

--
-- Indexes for table `subfaculty`
--
ALTER TABLE `subfaculty`
  ADD PRIMARY KEY (`subfac_id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `subject_code` (`subject_code`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_code`),
  ADD KEY `semester_id` (`semester_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `STID` (`STID`);

--
-- Indexes for table `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`STID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attend_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=679;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `parent_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `subfaculty`
--
ALTER TABLE `subfaculty`
  MODIFY `subfac_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `u_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_status`
--
ALTER TABLE `user_status`
  MODIFY `STID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`enrollment_no`) REFERENCES `student` (`enrollment_no`),
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`),
  ADD CONSTRAINT `attendance_ibfk_3` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`),
  ADD CONSTRAINT `attendance_ibfk_5` FOREIGN KEY (`subject_code`) REFERENCES `subject` (`subject_code`),
  ADD CONSTRAINT `attendance_ibfk_6` FOREIGN KEY (`sess_id`) REFERENCES `session` (`sess_id`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`);

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `faculty_ibfk_3` FOREIGN KEY (`username`) REFERENCES `login` (`username`),
  ADD CONSTRAINT `faculty_ibfk_4` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`),
  ADD CONSTRAINT `faculty_ibfk_5` FOREIGN KEY (`sess_id`) REFERENCES `session` (`sess_id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`sess_id`) REFERENCES `session` (`sess_id`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_2` FOREIGN KEY (`STID`) REFERENCES `user_status` (`STID`),
  ADD CONSTRAINT `login_ibfk_3` FOREIGN KEY (`sess_id`) REFERENCES `session` (`sess_id`);

--
-- Constraints for table `parent`
--
ALTER TABLE `parent`
  ADD CONSTRAINT `parent_ibfk_3` FOREIGN KEY (`username`) REFERENCES `login` (`username`),
  ADD CONSTRAINT `parent_ibfk_4` FOREIGN KEY (`sess_id`) REFERENCES `session` (`sess_id`);

--
-- Constraints for table `semester`
--
ALTER TABLE `semester`
  ADD CONSTRAINT `semester_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`username`) REFERENCES `login` (`username`),
  ADD CONSTRAINT `student_ibfk_5` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`),
  ADD CONSTRAINT `student_ibfk_6` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`),
  ADD CONSTRAINT `student_ibfk_7` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`semester_id`),
  ADD CONSTRAINT `student_ibfk_8` FOREIGN KEY (`sess_id`) REFERENCES `session` (`sess_id`);

--
-- Constraints for table `subfaculty`
--
ALTER TABLE `subfaculty`
  ADD CONSTRAINT `subfaculty_ibfk_1` FOREIGN KEY (`subject_code`) REFERENCES `subject` (`subject_code`),
  ADD CONSTRAINT `subfaculty_ibfk_3` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`),
  ADD CONSTRAINT `subfaculty_ibfk_4` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`);

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`semester_id`),
  ADD CONSTRAINT `subject_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);

--
-- Constraints for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD CONSTRAINT `user_menu_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`),
  ADD CONSTRAINT `user_menu_ibfk_2` FOREIGN KEY (`STID`) REFERENCES `user_status` (`STID`);
--
-- Database: `login`
--
CREATE DATABASE IF NOT EXISTS `login` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `login`;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"login\",\"table\":\"login_form\"},{\"db\":\"student\",\"table\":\"student_info\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2020-02-25 07:29:30', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
