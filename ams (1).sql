-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2020 at 04:24 PM
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
(100, 4, 'bca', 'web_tech', 'absent', '24-04-2020', 3, 2020),
(101, 1, 'bca', 'web_tech', 'absent', '30-04-2020', 3, 2020),
(102, 2, 'bca', 'web_tech', 'absent', '30-04-2020', 3, 2020),
(103, 3, 'bca', 'web_tech', 'absent', '30-04-2020', 3, 2020),
(104, 4, 'bca', 'web_tech', 'absent', '30-04-2020', 3, 2020),
(105, 1, 'bca', 'web_tech', 'absent', '03-05-2020', 3, 2020),
(106, 2, 'bca', 'web_tech', 'present', '03-05-2020', 3, 2020),
(107, 3, 'bca', 'web_tech', 'present', '03-05-2020', 3, 2020),
(108, 4, 'bca', 'web_tech', 'present', '03-05-2020', 3, 2020),
(109, 5, 'bca', 'web_tech', 'present', '03-05-2020', 3, 2020),
(110, 1, 'bca', 'web_tech', 'present', '04-05-2020', 3, 2020),
(111, 2, 'bca', 'web_tech', 'absent', '04-05-2020', 3, 2020),
(112, 3, 'bca', 'web_tech', 'present', '04-05-2020', 3, 2020),
(113, 4, 'bca', 'web_tech', 'absent', '04-05-2020', 3, 2020),
(114, 5, 'bca', 'web_tech', 'present', '04-05-2020', 3, 2020);

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
(72, 'MANISHA JOSHI', 'wonderful faculty', 2020);

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
('bhupi', 'bhupi123', 4, 2020),
('disha', 'disha123', 4, 2020),
('kc', 'kc123', 2, 2020),
('manisha', '2', 4, 2020),
('mc', 'mc123', 2, 2020),
('meenakshi', '1', 4, 2020),
('nandi', 'nandi123', 3, 2020),
('nannu', '2', 1, 2021),
('nc', 'nc123', 2, 2020),
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
  `sess_id` int(20) NOT NULL,
  `enrollment_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`parent_id`, `parent_name`, `email`, `contact`, `relation`, `username`, `sess_id`, `enrollment_no`) VALUES
(23, 'ndfhdj', 'tiwarimeenu@gmail.com', 7456935618, 'mother', 'kc', 2020, 1),
(25, 'mahesh', 'tiwarimeenu593@gmail.com', 678734873, 'Father', 'mc', 2020, 2),
(27, 'narendra', 'tiwarimeenu593@gmail.com', 5642656754, 'Father', 'nc', 2020, 5);

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
(1, 'meenakshi tiwari', 1, 'tiwarimeenu593@gmail', 2147483647, 'meenakshi', 'bca', 'sembca1', 'ftcs', 2020),
(2, 'manisha joshi', 2, 'tiwarimeenu593@gmail', 8923423206, 'manisha', 'bca', 'sembca1', 'ftcs', 2020),
(3, 'rakhi joshi', 3, 'tiwarimeenu@gamil.com', 7456935618, 'rakhi', 'bca', 'sembca1', 'ftcs', 2020),
(4, 'disha joshi', 4, 'tiwarikavita@123gmail.com', 7456935618, 'disha', 'bca', 'sembca1', 'ftcs', 2020),
(5, 'bhupesh rathaur', 5, 'tiwarimeenu593@gmail.com', 56237689, 'bhupi', 'bca', 'sembca1', 'ftcs', 2020);

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
  ADD KEY `sess_id` (`sess_id`),
  ADD KEY `enrollment_no` (`enrollment_no`);

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
  MODIFY `attend_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=679;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `parent_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `subfaculty`
--
ALTER TABLE `subfaculty`
  MODIFY `subfac_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

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
  ADD CONSTRAINT `parent_ibfk_4` FOREIGN KEY (`sess_id`) REFERENCES `session` (`sess_id`),
  ADD CONSTRAINT `parent_ibfk_5` FOREIGN KEY (`enrollment_no`) REFERENCES `student` (`enrollment_no`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
