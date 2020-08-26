-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2020 at 11:49 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `b_group` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `pic_source` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`user_name`, `password`, `Name`, `qualification`, `nic`, `dob`, `b_group`, `email`, `contact`, `address`, `pic_source`) VALUES
('Admin', 'iamadmin', 'Prof Aqib shah', 'MSCS', '16103-0361219-1', '14/6/1992', 'B+', 'aqibshah@gmail.com', '03405849528', 'Abbottabad ', ' image/DSC_0189.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `admission_data`
--

CREATE TABLE `admission_data` (
  `roll_no` int(10) NOT NULL,
  `class` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `student_cell` varchar(20) NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `father_cell` varchar(20) NOT NULL,
  `student_nic` varchar(15) NOT NULL,
  `domicile` varchar(20) NOT NULL,
  `qouta` varchar(20) NOT NULL,
  `present_address` varchar(100) NOT NULL,
  `permanent_address` varchar(100) NOT NULL,
  `examination1` varchar(30) NOT NULL,
  `ssc_year` varchar(20) NOT NULL,
  `ssc_total_mrks` varchar(20) NOT NULL,
  `ssc_obt_mrks` varchar(20) NOT NULL,
  `ssc_grade` varchar(20) NOT NULL,
  `ssc_subject` varchar(20) NOT NULL,
  `ssc_institue` varchar(30) NOT NULL,
  `examination2` varchar(30) NOT NULL,
  `hssc_year` varchar(20) NOT NULL,
  `hssc_total_mrks` varchar(20) NOT NULL,
  `hssc_obt_mrks` varchar(20) NOT NULL,
  `hssc_grade` varchar(20) NOT NULL,
  `hssc_subject` varchar(20) NOT NULL,
  `hssc_institue` varchar(30) NOT NULL,
  `examination3` varchar(30) NOT NULL,
  `bachlor_year` varchar(20) NOT NULL,
  `bachlor_total_mrks` varchar(20) NOT NULL,
  `bachlor_obt_mrks` varchar(20) NOT NULL,
  `bachlor_grade` varchar(20) NOT NULL,
  `bachlor_subject` varchar(20) NOT NULL,
  `bachlor_institue` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission_data`
--

INSERT INTO `admission_data` (`roll_no`, `class`, `semester`, `department`, `student_name`, `student_cell`, `father_name`, `father_cell`, `student_nic`, `domicile`, `qouta`, `present_address`, `permanent_address`, `examination1`, `ssc_year`, `ssc_total_mrks`, `ssc_obt_mrks`, `ssc_grade`, `ssc_subject`, `ssc_institue`, `examination2`, `hssc_year`, `hssc_total_mrks`, `hssc_obt_mrks`, `hssc_grade`, `hssc_subject`, `hssc_institue`, `examination3`, `bachlor_year`, `bachlor_total_mrks`, `bachlor_obt_mrks`, `bachlor_grade`, `bachlor_subject`, `bachlor_institue`) VALUES
(5407, 'MSc', 'final', 'Computer science', 'azmat ali', '03421470241', 'gul daraz', '03145414737', '16101-1234567-1', 'mardan', 'Non-Local', 'dheri likpani katlang mardan', 'dhrei likpani katlang mardan', 'SSC', '2013', ' 1050', '766', '1st/A', 'science', 'GHSS dheri likpani', 'HSSC', '2015', ' 1100', '686', '1st/B', 'pre-engineering', 'GDC NO-2 Mardan', 'BA/BSc', '2017', '550', '406', '1st/A', 'computer science', 'GDC NO-2 Mardan'),
(5408, 'MSc', 'final', 'english', 'farooq saeed', '03405849528', 'khan qadar', '03145414737', '3847893', 'mardan', 'Non-Local', 'Peshawar board', 'dhrei likpani katlang mardan', 'SSC', '2013', ' 1050', '729', '1st/B', 'science', 'GHSS dheri likpani', 'HSSC', '2015', ' 1100', '724', '1st/B', 'pre-engineering', 'GDC NO-2 Mardan', 'BA/BSc', '2017', '550', '359', '1st/B', 'computer science', 'GDC NO-2 Mardan'),
(5409, 'MSc', 'final', 'english', 'fawad', '03421470241', 'bakht sheed', '03145414737', '16101-1234567-1', 'mardan', 'Local', 'mardan par hoti', 'mardan par hoti', 'SSC', '2013', ' 1050', '650', '1st/B', 'science', 'GHS mardan', 'HSSC', '2015', ' 1100', '680', '1st/B', 'pre-engineering', 'GPGC NO-1 mardan', 'BA/BSc', '2017', '550', '351', '1st/B', 'computer science', 'GDC NO-2 Mardan'),
(5410, 'mcs', '1st', 'english', 'farooq saeed', '03405849528', 'muhammad mudassir', '03145414737', '16101-1234567-1', 'mardan', 'Non-Local', 'dheri likpani katlang mardan', 'dhrei likpani katlang mardan', 'SSC', '2015', ' 567', '1050', 'C', 'science', 'GHSS dheri likpani', 'HSSC', '2015', ' 789', '1100', '1st/B', 'pre-engineering', 'GDC NO-2 Mardan', 'SSC', '', '', '', '', '', ''),
(5413, 'mcs', '1st', 'english', 'farooq saeed', '03405849528', 'muhammad mudassir', '03145414737', '16101-1234567-1', 'mardan', 'Non-Local', 'dheri likpani katlang mardan', 'dhrei likpani katlang mardan', 'SSC', '2015', ' 567', '1050', 'C', 'science', 'GHSS dheri likpani', 'HSSC', '2015', ' 789', '1100', '1st/B', 'pre-engineering', 'GDC NO-2 Mardan', 'SSC', '', '', '', '', '', ''),
(5416, 'MSc', 'final', 'pak study', 'ahmad mudassir', '03405849528', 'muhammad mudassir', '03145414737', '16101-1234567-1', 'mardan', 'Non-Local', 'dheri likpani katlang mardan', 'dhrei likpani katlang mardan', 'SSC', '2013', ' 1050', '644', '1st/B', 'science', 'GHSS dheri likpani', 'HSSC', '2015', ' 1100', '650', '1st/B', 'computer science', 'GPGC NO-1 mardan', 'BA/BSc', '2017', '550', '366', '1st/B', 'computer science', 'GDC NO-2 Mardan'),
(5417, 'MSc', 'final', 'pak study', 'ahmad mudassir', '03405849528', 'muhammad mudassir', '03145414737', '16101-1234567-1', 'mardan', 'Non-Local', 'dheri likpani katlang mardan', 'dhrei likpani katlang mardan', 'SSC', '2013', ' 1050', '644', '1st/B', 'science', 'GHSS dheri likpani', 'HSSC', '2015', ' 1100', '650', '1st/B', 'computer science', 'GPGC NO-1 mardan', 'BA/BSc', '2017', '550', '366', '1st/B', 'computer science', 'GDC NO-2 Mardan'),
(5420, 'BS', '5th', 'physics', 'farooq saeed', '03405849528', 'khan qadar', '03145414737', '16101-1234567-1', 'mardan', 'Non-Local', 'dheri likpani katlang mardan', 'dhrei likpani katlang mardan', 'SSC', '2013', ' 1050', '729', '1st/B', 'science', 'GHSS dheri likpani', 'BA/BSc', '2015', ' 1100', '724', '1st/B', 'pre-engineering', 'GPGC NO-1 mardan', 'BA/BSc', '2017', '550', '359', '1st/B', 'computer science', 'GDC NO-2 Mardan'),
(5435, 'MSc', 'final', 'urdu', 'muhammad', '03405849528', 'muhammad mudassir', '03145414737', '16101-1234567-1', 'mansehra', 'Non-Local', 'dheri likpani katlang mardan', 'dhrei likpani katlang mardan', 'SSC', '2013', ' 1050', '880', '1st/A', 'science', 'GHSS dheri likpani', 'HSSC', '2015', ' 1100', '765', '1st/B', 'pre-engineering', 'GDC NO-2 Mardan', 'BA/BSc', '2017', '550', '467', '1st/A', 'computer science', 'GDC NO-2 Mardan'),
(5445, 'BS', '1st', 'urdu', 'muhammad ameen', '03405849528', 'muhammad mudassir', '03145414737', '16101-1234567-1', 'mansehra', 'Local', 'dheri likpani katlang mardan', 'dhrei likpani katlang mardan', 'SSC', '2013', ' 1050', '880', '1st/A', 'science', 'GHSS dheri likpani', 'HSSC', '2015', ' 1100', '765', '1st/B', 'pre-engineering', 'GDC NO-2 Mardan', 'BA/BSc', '2017', '550', '467', '1st/A', 'computer science', 'GDC NO-2 Mardan'),
(5448, 'MSc', 'final', 'urdu', 'muhammad', '03405849528', 'muhammad mudassir', '03145414737', '16101-1234567-1', 'mansehra', 'Local', 'dheri likpani katlang mardan', 'dhrei likpani katlang mardan', 'SSC', '2013', ' 1050', '880', '1st/A', 'science', 'GHSS dheri likpani', 'HSSC', '2015', ' 1100', '765', '1st/B', 'pre-engineering', 'GDC NO-2 Mardan', 'BA/BSc', '2017', '550', '467', '1st/A', 'computer science', 'GDC NO-2 Mardan'),
(5478, 'mcs', '1st', 'english', 'farooq saeed', '03405849528', 'muhammad mudassir', '03145414737', '16101-1234567-1', 'mardan', 'Non-Local', 'dheri likpani katlang mardan', 'dhrei likpani katlang mardan', 'SSC', '2013', ' 567', '1050', 'C', 'science', 'GHSS dheri likpani', 'HSSC', '2015', ' 789', '1100', '1st/B', 'pre-engineering', 'GDC NO-2 Mardan', 'SSC', '', '', '', '', '', ''),
(5480, 'MSc', 'final', 'pak study', 'muhammad ameen', '03405849528', 'khan qadar', '03145414737', '16101-1234567-1', 'mansehra', 'Non-Local', 'dheri likpani katlang mardan', 'dhrei likpani katlang mardan', 'SSC', '2013', ' 1050', '678', '1st/A', 'science', 'GHSS dheri likpani', 'HSSC', '2015', ' 1100', '789', '1st/B', 'pre-engineering', 'GDC NO-2 Mardan', 'BA/BSc', '2017', '550', '345', '1st/B', 'computer science', 'GDC NO-2 Mardan'),
(5481, 'MSc', '1st', 'Computer science', 'muhammad', '03405849528', 'bakht sheed', '03145414737', '16101-1234567-1', 'mansehra', 'Non-Local', 'dheri likpani katlang mardan', 'dhrei likpani katlang mardan', 'SSC', '2015', ' 1050', '654', '1st/B', 'science', 'GHSS dheri likpani', 'HSSC', '2017', ' 1100', '678', '1st/B', 'computer science', 'GPGC NO-1 mardan', 'SSC', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `admission_schedule`
--

CREATE TABLE `admission_schedule` (
  `id` int(10) NOT NULL,
  `start_date` date NOT NULL,
  `close_date` date NOT NULL,
  `first_date` date NOT NULL,
  `second_date` date NOT NULL,
  `third_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission_schedule`
--

INSERT INTO `admission_schedule` (`id`, `start_date`, `close_date`, `first_date`, `second_date`, `third_date`) VALUES
(1, '0000-00-00', '0000-00-00', '0000-00-00', '2020-03-12', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `admitted_student`
--

CREATE TABLE `admitted_student` (
  `ID` varchar(10) NOT NULL,
  `student_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admitted_student`
--

INSERT INTO `admitted_student` (`ID`, `student_name`) VALUES
('CS-5407', 'FAROOQ SAEDD'),
('CS-5409', 'FAWAD'),
('ENG-4567', 'Ashaq Nawab'),
('PHY-1234', 'Muhammad Ishaq'),
('PS-1012', 'naseeb ullah'),
('ps-3041', 'Aman Ullah');

-- --------------------------------------------------------

--
-- Table structure for table `complian`
--

CREATE TABLE `complian` (
  `S_No` int(20) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `room_no` varchar(20) NOT NULL,
  `complaints` varchar(500) NOT NULL,
  `c_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complian`
--

INSERT INTO `complian` (`S_No`, `student_id`, `student_name`, `department`, `room_no`, `complaints`, `c_date`) VALUES
(16, 'CS-5408', 'ahmad', 'computer science', '1', 'sir i have a problem in my project which can not be solved urgently so i want to change my project\r\n.', '2020-03-08 13:23:09'),
(19, 'CS-5407', 'farooq saeed', 'computer science', '3', 'my name is farooq saeed and from mardan\r\n', '2020-03-20 12:03:42'),
(20, 'CS-5407', 'farooq saeed', 'computer science', '3', 'hi how are you i have a problem i my project i need your help ', '2020-03-20 12:07:02');

-- --------------------------------------------------------

--
-- Table structure for table `food_monitor`
--

CREATE TABLE `food_monitor` (
  `ID` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_monitor`
--

INSERT INTO `food_monitor` (`ID`, `password`) VALUES
('CS-5408', 'food12345');

-- --------------------------------------------------------

--
-- Table structure for table `form_status`
--

CREATE TABLE `form_status` (
  `s_no` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_status`
--

INSERT INTO `form_status` (`s_no`, `status`) VALUES
(1, 'Disable');

-- --------------------------------------------------------

--
-- Table structure for table `merit_list`
--

CREATE TABLE `merit_list` (
  `roll_no` varchar(20) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `marks` varchar(20) NOT NULL,
  `qouta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merit_list`
--

INSERT INTO `merit_list` (`roll_no`, `student_name`, `father_name`, `department`, `class`, `semester`, `marks`, `qouta`) VALUES
('5408', 'farooq saeed', 'khan qadar', 'english', 'MSc', 'final', '359', 'Non-Local'),
('5417', 'ahmad mudassir', 'muhammad mudassir', 'pak study', 'MSc', 'final', '366', 'Non-Local');

-- --------------------------------------------------------

--
-- Table structure for table `merit_list_status`
--

CREATE TABLE `merit_list_status` (
  `S_No` int(10) NOT NULL,
  `first_merit_list` varchar(10) NOT NULL,
  `second_merit_list` varchar(10) NOT NULL,
  `third_merit_list` varchar(10) NOT NULL,
  `mess_pdf` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merit_list_status`
--

INSERT INTO `merit_list_status` (`S_No`, `first_merit_list`, `second_merit_list`, `third_merit_list`, `mess_pdf`) VALUES
(1, 'unpublish', 'unpublish', 'publish', 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `mess_dues`
--

CREATE TABLE `mess_dues` (
  `ID` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `room_no` int(20) NOT NULL,
  `mess_status` varchar(10) NOT NULL,
  `Attd` int(20) NOT NULL,
  `per_day` int(20) NOT NULL,
  `dues` int(20) NOT NULL,
  `total_dues` int(20) NOT NULL,
  `Received` int(20) NOT NULL,
  `Balance` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mess_dues`
--

INSERT INTO `mess_dues` (`ID`, `name`, `room_no`, `mess_status`, `Attd`, `per_day`, `dues`, `total_dues`, `Received`, `Balance`) VALUES
('CS-5410', 'faroq', 16, 'ON', 30, 100, 3000, 3000, 2500, 500),
('CS-5412', 'ahmad', 5, 'ON', 23, 100, 2254, 2254, 2260, -6),
('CS-5420', 'farooq saeed', 5, 'ON', 30, 100, 1541, 1541, 2041, -500),
('ENG-3457', 'Bilal', 3, 'ON', 10, 100, 500, 554, 754, -200),
('PS-1123', 'Nadeem khan', 7, 'ON', 26, 100, 2600, 2600, 2600, 0),
('ps-3041', 'Aman Ullah', 4, 'ON', 23, 100, 3870, 3870, 3870, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mess_member`
--

CREATE TABLE `mess_member` (
  `nic_no` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `Attd` int(20) NOT NULL,
  `per_day` int(20) NOT NULL,
  `dues` int(20) NOT NULL,
  `total_dues` int(20) NOT NULL,
  `Received` int(20) NOT NULL,
  `Balance` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mess_member`
--

INSERT INTO `mess_member` (`nic_no`, `name`, `department`, `Attd`, `per_day`, `dues`, `total_dues`, `Received`, `Balance`) VALUES
('16103-0361219-1', 'prof aqib shah', 'computer science', 20, 100, 2000, 2000, 1000, 1000),
('16103-1234567-9', 'rizwan shah', 'chemistry', 20, 100, 1600, 1600, 1800, -200),
('16106-5678123-9', 'Bilal', 'english', 30, 100, 3000, 3000, 1500, 1500),
('231523451342514', 'farooq saeed', 'Computer Science', 0, 100, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `notice_date` varchar(10) NOT NULL,
  `actual_notice` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `Description`, `notice_date`, `actual_notice`) VALUES
(6, 'BS mid term exam is going to start', 'hostel is going to close....', '2020-03-08', 'gpgc no 1 atd my name is farooq saed');

-- --------------------------------------------------------

--
-- Table structure for table `no_of_seat`
--

CREATE TABLE `no_of_seat` (
  `s_no` int(11) NOT NULL,
  `seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `no_of_seat`
--

INSERT INTO `no_of_seat` (`s_no`, `seats`) VALUES
(1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `old_student_data`
--

CREATE TABLE `old_student_data` (
  `ID` varchar(20) NOT NULL,
  `session` varchar(20) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `room_no` int(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `dues` int(20) NOT NULL,
  `cell_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `old_student_data`
--

INSERT INTO `old_student_data` (`ID`, `session`, `student_name`, `father_name`, `room_no`, `department`, `class`, `dues`, `cell_no`) VALUES
('CS-5416', ' ', 'AHMAD', 'muhammad mudassir', 1, 'Computer Science', ' MSc', 0, '3645635463'),
('CS-5437', ' 2017-19', 'Bilal', 'siraj nabi', 3, 'Computer science', ' MSc', 0, '5243672354726');

-- --------------------------------------------------------

--
-- Table structure for table `room_details`
--

CREATE TABLE `room_details` (
  `room_no` int(10) NOT NULL,
  `seat_no` int(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `ID` varchar(20) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_details`
--

INSERT INTO `room_details` (`room_no`, `seat_no`, `status`, `ID`, `student_name`, `department`, `class`) VALUES
(1, 1, 'FULL', 'CS-5408', 'Azmat ali', 'Computer Science', 'MSc'),
(1, 2, 'FULL', 'CS-5407', 'Farooq Saeed', 'english', 'MSc'),
(2, 1, 'VACANT', '', '', '', ''),
(2, 2, 'VACANT', '', '', '', ''),
(3, 1, 'VACANT', '', '', '', ''),
(3, 2, 'VACANT', '', '', '', ''),
(4, 1, 'VACANT', '', '', '', ''),
(4, 2, 'VACANT', '', '', '', ''),
(5, 1, 'VACANT', '', '', '', ''),
(5, 2, 'VACANT', '', '', '', ''),
(6, 1, 'VACANT', '', '', '', ''),
(6, 2, 'VACANT', '', '', '', ''),
(7, 1, 'VACANT', '', '', '', ''),
(7, 2, 'VACANT', '', '', '', ''),
(7, 3, 'VACANT', '', '', '', ''),
(7, 4, 'VACANT', '', '', '', ''),
(8, 1, 'VACANT', '', '', '', ''),
(8, 2, 'VACANT', '', '', '', ''),
(8, 3, 'VACANT', '', '', '', ''),
(8, 4, 'VACANT', '', '', '', ''),
(9, 1, 'VACANT', '', '', '', ''),
(9, 2, 'VACANT', '', '', '', ''),
(9, 3, 'VACANT', '', '', '', ''),
(9, 4, 'VACANT', '', '', '', ''),
(10, 1, 'VACANT', '', '', '', ''),
(10, 2, 'VACANT', '', '', '', ''),
(10, 3, 'VACANT', '', '', '', ''),
(10, 4, 'VACANT', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `second_merit_list`
--

CREATE TABLE `second_merit_list` (
  `roll_no` varchar(20) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `marks` int(20) NOT NULL,
  `qouta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `ID` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `security_question` varchar(100) NOT NULL,
  `security_answer` varchar(100) NOT NULL,
  `stu_name` varchar(20) NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `session` varchar(10) NOT NULL,
  `room_no` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `cnic` varchar(20) NOT NULL,
  `b_group` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cell_no` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `pic_source` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`ID`, `password`, `security_question`, `security_answer`, `stu_name`, `father_name`, `class`, `department`, `session`, `room_no`, `dob`, `cnic`, `b_group`, `email`, `cell_no`, `address`, `pic_source`) VALUES
('CS-5407', 'pakistan', '', '', 'Farooq saeed', 'khan qadar', 'MSc(final)', 'Computer science', '2017-19', '3', '13/01/1997', '16101-0361219-1', 'A-', 'farooqsaeed997@gmail.com', '03405849528', 'Dheri Likpani Katlang    ', ' image/farooq.jpg'),
('ENG-3457', '12345', '', '', 'ahmad', 'muhammad mudassir', 'MSc', 'Computer science', '2017-19', '12', '1/3/1997', '123456789', 'B+', 'farr@gmail.com', '03405478967', 'Dheri Likpani Katlang', 'image/IMG_20180311_170807.jpg'),
('ENG-4567', '75424ad7ef836ac39dda', '', '', 'Ashaq Nawab', 'bakht sheed', 'MSc', 'urdu', '2017-19', '1', '2020-03-19', '63654762357462', 'A-', 'g@gamil.com', '6354672', 'dheri likpani katlang', 'image/DSC_0189.JPG'),
('PHY-1234', 'party123', '', '', 'Muhammad Ishaq', 'bakht sheed', 'mcs', 'urdu', '2017-19', '8', '1/3/1997', '15165415145614', 'A-', 'azmatali@gmail.com', '32453215421', 'dheri likpani katlang', 'image/20191102_183701.jpg'),
('ps-3041', 'kpk12345', 'What is your favorite color?', 'green', 'Aman Ullah', 'ajab khan', 'MSc', 'Computer Science', '2017-19', '12', '2020-03-27', '653463547632', 'A-', 'farooqsaeed997@gmail.com', '5346534', 'Dheri Likpani Katlang', 'image/IMG_20180311_170807.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `third_merit_list`
--

CREATE TABLE `third_merit_list` (
  `roll_no` varchar(20) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `marks` int(20) NOT NULL,
  `qouta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `third_merit_list`
--

INSERT INTO `third_merit_list` (`roll_no`, `student_name`, `father_name`, `department`, `class`, `semester`, `marks`, `qouta`) VALUES
('5407', 'azmat ali', 'gul daraz', 'Computer science', 'MSc', 'final', 406, 'Non-Local');

-- --------------------------------------------------------

--
-- Table structure for table `view_dues`
--

CREATE TABLE `view_dues` (
  `ID` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `room_no` int(10) NOT NULL,
  `Attd` int(20) NOT NULL,
  `per_day` int(20) NOT NULL,
  `dues` int(20) NOT NULL,
  `balance` int(20) NOT NULL,
  `total_dues` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `view_dues`
--

INSERT INTO `view_dues` (`ID`, `name`, `room_no`, `Attd`, `per_day`, `dues`, `balance`, `total_dues`) VALUES
('16103-0361219-1', 'prof aqib shah', 0, 20, 100, 2000, 1000, 2000),
('16103-1234567-9', 'rizwan shah', 0, 20, 100, 1600, -200, 1600),
('16106-5678123-9', 'Bilal', 0, 30, 100, 3000, 1500, 3000),
('231523451342514', 'farooq saeed', 0, 0, 100, 0, 0, 0),
('CS-5410', 'faroq', 16, 30, 100, 3000, 1000, 3000),
('CS-5412', 'ahmad', 5, 23, 100, 2254, -6, 2254),
('CS-5420', 'farooq saeed', 5, 30, 100, 1541, -500, 1541),
('ENG-3457', 'Bilal', 3, 10, 100, 500, -200, 554),
('PS-1123', 'Nadeem khan', 7, 26, 100, 2600, 0, 2600),
('ps-3041', 'Aman Ullah', 4, 23, 100, 3870, 0, 3870);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `admission_data`
--
ALTER TABLE `admission_data`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `admission_schedule`
--
ALTER TABLE `admission_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admitted_student`
--
ALTER TABLE `admitted_student`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `complian`
--
ALTER TABLE `complian`
  ADD PRIMARY KEY (`S_No`);

--
-- Indexes for table `food_monitor`
--
ALTER TABLE `food_monitor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `form_status`
--
ALTER TABLE `form_status`
  ADD KEY `s_no` (`s_no`);

--
-- Indexes for table `merit_list`
--
ALTER TABLE `merit_list`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `merit_list_status`
--
ALTER TABLE `merit_list_status`
  ADD PRIMARY KEY (`S_No`);

--
-- Indexes for table `mess_dues`
--
ALTER TABLE `mess_dues`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `mess_member`
--
ALTER TABLE `mess_member`
  ADD PRIMARY KEY (`nic_no`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `no_of_seat`
--
ALTER TABLE `no_of_seat`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `old_student_data`
--
ALTER TABLE `old_student_data`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `room_details`
--
ALTER TABLE `room_details`
  ADD PRIMARY KEY (`room_no`,`seat_no`);

--
-- Indexes for table `second_merit_list`
--
ALTER TABLE `second_merit_list`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `third_merit_list`
--
ALTER TABLE `third_merit_list`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `view_dues`
--
ALTER TABLE `view_dues`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complian`
--
ALTER TABLE `complian`
  MODIFY `S_No` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `form_status`
--
ALTER TABLE `form_status`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `merit_list_status`
--
ALTER TABLE `merit_list_status`
  MODIFY `S_No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `no_of_seat`
--
ALTER TABLE `no_of_seat`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
