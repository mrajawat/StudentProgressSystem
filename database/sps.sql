-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 10:15 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sps`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_ID` int(10) NOT NULL,
  `A_Name` varchar(20) NOT NULL,
  `A_Email` varchar(40) NOT NULL,
  `A_Password` int(10) NOT NULL,
  `A_Contactno.` int(10) NOT NULL,
  `Staff_type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_ID`, `A_Name`, `A_Email`, `A_Password`, `A_Contactno.`, `Staff_type`) VALUES
(0, 'bannaji', 'msrbannaji@gmail.com', 1234, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `course_info`
--

CREATE TABLE `course_info` (
  `C_No` int(11) NOT NULL,
  `Batch` varchar(20) NOT NULL,
  `Degree` varchar(20) NOT NULL,
  `Study Period` varchar(20) NOT NULL,
  `Code` varchar(20) NOT NULL,
  `Course Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_info`
--

INSERT INTO `course_info` (`C_No`, `Batch`, `Degree`, `Study Period`, `Code`, `Course Name`) VALUES
(1, '2018', 'BCA', '1 sem', 'CA11', 'information technology'),
(2, '2018', 'BCA', '1 sem', 'CA12', 'Basic programming in c');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `D_No.` varchar(20) NOT NULL,
  `D_Name` varchar(30) NOT NULL,
  `D_Head` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`D_No.`, `D_Name`, `D_Head`) VALUES
('1D', 'Hotel management', 'OM ji'),
('3d', 'BBA', 'ram ji'),
('3d', 'MCA', 'Shiv ji');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `image_text`) VALUES
(1, '', 'op teacher'),
(2, 'WIN_20190428_15_14_51_Pro.jpg', 'sdfds'),
(3, 'WIN_20190428_15_14_51_Pro.jpg', 'sdfds');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `slno` int(20) NOT NULL,
  `whom` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `subject` varchar(90) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parents_table`
--

CREATE TABLE `parents_table` (
  `sl` int(11) NOT NULL,
  `S_name` varchar(30) NOT NULL,
  `F_name` varchar(20) NOT NULL,
  `M_name` varchar(20) NOT NULL,
  `F_occupation` varchar(20) NOT NULL,
  `M_occupation` varchar(20) NOT NULL,
  `F_mobno` varchar(10) NOT NULL,
  `M_mobno` varchar(10) NOT NULL,
  `F_email` varchar(30) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `City` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents_table`
--

INSERT INTO `parents_table` (`sl`, `S_name`, `F_name`, `M_name`, `F_occupation`, `M_occupation`, `F_mobno`, `M_mobno`, `F_email`, `Country`, `City`) VALUES
(1, 'banna ji', 'Mal Singh', 'Om kanwar', 'farmer', 'housewife', '9829100121', '7976526554', '0msrajawat@gmail.com', 'India', 'churu');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `Subject` varchar(20) NOT NULL,
  `Test Type` varchar(20) NOT NULL,
  `Study Period` varchar(10) NOT NULL,
  `Teacher Name` varchar(20) NOT NULL,
  `Test Name` varchar(20) NOT NULL,
  `Max marks` int(10) NOT NULL,
  `Marks Scored` int(10) NOT NULL,
  `Percentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semester info`
--

CREATE TABLE `semester info` (
  `Sem.` int(10) NOT NULL,
  `Course Code` varchar(20) NOT NULL,
  `Course Name` varchar(60) NOT NULL,
  `Course Credit` varchar(20) NOT NULL,
  `Faculty Id` varchar(20) NOT NULL,
  `Faculty Name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_fine`
--

CREATE TABLE `student_fine` (
  `S_ID` int(20) NOT NULL,
  `Date` date NOT NULL,
  `Fine` varchar(40) NOT NULL,
  `Fine_Amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stud_table`
--

CREATE TABLE `stud_table` (
  `S_ID` int(20) NOT NULL,
  `S_NAME` varchar(100) NOT NULL,
  `S_BATCH` int(20) NOT NULL,
  `S_MOB` varchar(20) NOT NULL,
  `S_EMAIL` varchar(100) NOT NULL,
  `S_DOB` date NOT NULL,
  `S_GENDER` varchar(10) NOT NULL,
  `S_ADDRESS` varchar(100) NOT NULL,
  `S_COURSE` varchar(20) NOT NULL,
  `S_PASSWORD` varchar(20) NOT NULL,
  `S_CITY` varchar(20) NOT NULL,
  `S_PINCODE` varchar(10) NOT NULL,
  `S_COUNTRY` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_table`
--

INSERT INTO `stud_table` (`S_ID`, `S_NAME`, `S_BATCH`, `S_MOB`, `S_EMAIL`, `S_DOB`, `S_GENDER`, `S_ADDRESS`, `S_COURSE`, `S_PASSWORD`, `S_CITY`, `S_PINCODE`, `S_COUNTRY`) VALUES
(6001, 'banna ji', 2018, '2147483647', 'msrbannaji@gmail.com', '2000-12-11', 'male', 'ward no. 4', 'BCA', 'msr123', 'churu', '331501', 'India'),
(6002, 'Tushar Kashyap', 2018, '2147483647', '0msrajawat@gmail.com', '2000-12-11', 'male', 'ward no. 4', 'BCA', 'tushar123', 'churu', '331501', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_table`
--

CREATE TABLE `teachers_table` (
  `T_ID` int(20) NOT NULL,
  `T_NAME` varchar(50) NOT NULL,
  `T_EMAIL` varchar(50) NOT NULL,
  `T_Password` varchar(20) NOT NULL,
  `T_DOB` date NOT NULL,
  `T_GENDER` varchar(10) NOT NULL,
  `T_MOB` varchar(20) NOT NULL,
  `T_ADDRESS` varchar(100) NOT NULL,
  `T_PINCODE` int(20) NOT NULL,
  `T_CITY` varchar(20) NOT NULL,
  `T_COUNTRY` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers_table`
--

INSERT INTO `teachers_table` (`T_ID`, `T_NAME`, `T_EMAIL`, `T_Password`, `T_DOB`, `T_GENDER`, `T_MOB`, `T_ADDRESS`, `T_PINCODE`, `T_CITY`, `T_COUNTRY`, `image`) VALUES
(101, 'vivek sharma', 'msrbannaji@gmail.com', 'tushar123', '2020-12-19', 'male', '7976527114', 'Kuchaman,bidasar', 7889, 'bidasar', 'india', ''),
(102, 'banna ji', 'tushar@gmail.com', 'tushar123', '2000-12-12', 'male', '9829100163', 'ward no. 4', 331501, 'churu', 'India', ''),
(103, 'Mohan Singh', 'msrbannaji@gmail.com', 'mohan123', '2000-12-01', 'male', '9829100163', 'ward no. 4', 0, '', '', ''),
(104, 'Ravi Sharma', 'ravi@gmail.com', 'ravi1234', '2000-12-12', 'male', '9820190165', 'ward no. 4', 331501, 'churu', 'India', ''),
(105, ' ms jyoti ', 'jyoti@gmail.com', 'jyoti123', '2000-12-12', 'female', '9820190165', 'ward no. 4', 331501, 'churu', 'India', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_info`
--
ALTER TABLE `course_info`
  ADD PRIMARY KEY (`C_No`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `parents_table`
--
ALTER TABLE `parents_table`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `stud_table`
--
ALTER TABLE `stud_table`
  ADD PRIMARY KEY (`S_ID`);

--
-- Indexes for table `teachers_table`
--
ALTER TABLE `teachers_table`
  ADD PRIMARY KEY (`T_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_info`
--
ALTER TABLE `course_info`
  MODIFY `C_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `slno` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parents_table`
--
ALTER TABLE `parents_table`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stud_table`
--
ALTER TABLE `stud_table`
  MODIFY `S_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6003;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
