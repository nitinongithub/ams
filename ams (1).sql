-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2020 at 08:31 AM
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
  `subject_name` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `session_id` int(20) NOT NULL,
  `faculty_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('bca', 'Bachelor In Computer Application', 'ftcs');

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
('fcbm', 'Faculty of Business Administration'),
('ftcs', 'Faculty OF Technology And Computer Applications');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(10) NOT NULL,
  `student_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `student_name`) VALUES
(1, 'knlkmnlk'),
(2, 'meenakshi'),
(3, 'meenakshi');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(10) NOT NULL,
  `faculty_name` varchar(30) NOT NULL,
  `contact` int(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `sess_id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `dept_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`, `contact`, `email`, `sess_id`, `username`, `dept_id`) VALUES
(3, 'roshan chopra', 2147483647, 'tiwarimeenu593@gmail', 2020, 'roshan', 'ftcs'),
(5, 'nandi joshi', 2147483647, 'tiwarimeenu593@gmail', 2020, 'nandi', 'fcbm'),
(6, 'bhupesh rathaur', 2147483647, 'tiwarimeenu593@gmail', 2020, 'bhupesh', 'fcbm');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(20) NOT NULL,
  `parent_name` varchar(30) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `sess_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `parent_name`, `feedback`, `sess_id`) VALUES
(2, 'naveen', 'you should come up with children', 2020),
(3, 'bhfru', 'nvnbcccvbn', 2020),
(11, 'chdjfk', ' vjndvkmv,dmbjcm,;x', 2020);

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
('admin', 'meena123', 1, 2020),
('bhupesh', '1', 3, 2020),
('kc', 'kc123', 2, 2020),
('manisha', 'manisha123', 4, 2020),
('meenakshi', 'meena123', 4, 2020),
('nandi', 'nandi123', 3, 2020),
('roshan', 'r', 3, 2020);

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
(2, 'add_faculty', 'web/add_fac', 1),
(3, 'view_profile', 'web/index2', 1),
(4, 'add_subject', 'web/add_sub', 1),
(5, 'mark_attendance', 'web/mark_attendance', 1),
(6, 'view_attend', 'web/view_attend', 1),
(7, 'stdview_attend', 'web/std_view_attend', 1),
(8, 'view_profile', 'web/index3', 1),
(9, 'feedback', 'web/feedback', 1),
(10, 'generate_report', 'web/generate_report', 1),
(11, 'view_feedback', 'web/index4', 1),
(12, 'manage_session', 'web/manage_session', 1),
(13, 'add_parent', 'web/add_par', 1),
(15, 'view_profile', 'web/index1', 1),
(16, 'Add_student', 'authenticate/addstudent', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `parent_id` int(10) NOT NULL,
  `parent_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` int(10) NOT NULL,
  `relation` varchar(10) NOT NULL,
  `sess_id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`parent_id`, `parent_name`, `email`, `contact`, `relation`, `sess_id`, `username`) VALUES
(1, 'naveen', 'tiwarimeenu593@gmail', 2147483647, 'Father', 2020, 'kc');

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
('sembba3', 'third', 'bba'),
('sembba4', 'forth', 'bba'),
('sembba5', 'fifth', 'bba'),
('sembba6', 'sixth', 'bba'),
('sembca1', 'first', 'bca'),
('sembca2', 'second', 'bca'),
('sembca3', 'third', 'bca'),
('sembca4', 'forth', 'bca'),
('sembca5', 'Fifth', 'bca'),
('sembca6', 'sixth', 'bca');

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
(34, '2020-04-16', '2020-04-30', '2020-04-16'),
(2020, '1-2-2020', '1-2-2021', '1-2-2020');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `enrollment_no` int(10) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `roll_no` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `sess_id` int(20) NOT NULL,
  `course_id` varchar(10) NOT NULL,
  `semester_id` varchar(10) NOT NULL,
  `dept_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`enrollment_no`, `student_name`, `roll_no`, `email`, `contact`, `username`, `sess_id`, `course_id`, `semester_id`, `dept_id`) VALUES
(1, 'meenakshi tiwari', 1, 'tiwarimeenu593@gmail', 2147483647, 'meenakshi', 2020, 'bca', 'sembca1', 'ftcs'),
(2, 'manisha joshi', 2, 'tiwarimeenu593@gmail', 2147483647, 'manisha', 2020, 'bca', 'sembca1', 'ftcs');

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
(17, 'economic', 'bba', 'lacture', 6);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_code` varchar(20) NOT NULL,
  `subject_name` varchar(20) NOT NULL,
  `semester_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_code`, `subject_name`, `semester_id`) VALUES
('.net', '.net', 'sembca1'),
('dbms', 'dbms', 'sembca1'),
('economic', 'economic', 'sembba1'),
('php', 'php', 'sembca1'),
('python', 'python', 'sembca1'),
('web_tech', 'web tech', 'sembca1');

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
(3, 10, 4, 1),
(5, 12, 1, 1),
(6, 2, 1, 1),
(7, 13, 1, 1),
(8, 4, 1, 1),
(9, 16, 1, 1),
(10, 6, 1, 1),
(11, 11, 1, 1),
(13, 7, 2, 1),
(14, 15, 2, 1),
(15, 9, 2, 1),
(16, 10, 2, 1),
(18, 5, 3, 1),
(19, 8, 3, 1),
(20, 6, 3, 1),
(21, 10, 3, 1);

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
  ADD KEY `session_id` (`session_id`),
  ADD KEY `enrollment_no` (`enrollment_no`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `faculty_id` (`faculty_id`);

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
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`),
  ADD KEY `session_id` (`sess_id`),
  ADD KEY `username` (`username`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `session_id` (`sess_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`),
  ADD KEY `STID` (`STID`),
  ADD KEY `session_id` (`sess_id`);

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
  ADD KEY `session_id` (`sess_id`),
  ADD KEY `username` (`username`);

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
  ADD KEY `session_id` (`sess_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `semester_id` (`semester_id`);

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
  ADD KEY `semester_id` (`semester_id`);

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
  MODIFY `attend_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `parent_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subfaculty`
--
ALTER TABLE `subfaculty`
  MODIFY `subfac_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`session_id`) REFERENCES `session` (`sess_id`),
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`enrollment_no`) REFERENCES `student` (`enrollment_no`),
  ADD CONSTRAINT `attendance_ibfk_3` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`),
  ADD CONSTRAINT `attendance_ibfk_4` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`);

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `faculty_ibfk_2` FOREIGN KEY (`sess_id`) REFERENCES `session` (`sess_id`),
  ADD CONSTRAINT `faculty_ibfk_3` FOREIGN KEY (`username`) REFERENCES `login` (`username`),
  ADD CONSTRAINT `faculty_ibfk_4` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`sess_id`) REFERENCES `session` (`sess_id`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`sess_id`) REFERENCES `session` (`sess_id`),
  ADD CONSTRAINT `login_ibfk_2` FOREIGN KEY (`STID`) REFERENCES `user_status` (`STID`);

--
-- Constraints for table `parent`
--
ALTER TABLE `parent`
  ADD CONSTRAINT `parent_ibfk_2` FOREIGN KEY (`sess_id`) REFERENCES `session` (`sess_id`),
  ADD CONSTRAINT `parent_ibfk_3` FOREIGN KEY (`username`) REFERENCES `login` (`username`);

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
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`sess_id`) REFERENCES `session` (`sess_id`),
  ADD CONSTRAINT `student_ibfk_5` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`),
  ADD CONSTRAINT `student_ibfk_6` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`),
  ADD CONSTRAINT `student_ibfk_7` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`semester_id`);

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
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`semester_id`);

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
