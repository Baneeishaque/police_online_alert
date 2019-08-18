-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 28, 2015 at 10:26 AM
-- Server version: 5.6.23-log
-- PHP Version: 5.6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oops`
--
CREATE DATABASE IF NOT EXISTS `oops` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `oops`;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `username` varchar(50) DEFAULT NULL,
  `chatdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `msg` varchar(250) DEFAULT NULL,
`id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`username`, `chatdate`, `msg`, `id`) VALUES
('dk', '2015-02-04 10:40:53', 'test', 1),
('dk', '2015-02-04 10:43:41', 'ree', 2),
('dk', '2015-02-04 10:43:48', 'hai', 3),
('banee', '2015-02-04 10:44:17', 'how are you', 4),
('dk', '2015-02-04 10:44:27', 'fine', 5),
('banee', '2015-02-04 10:44:41', 'then', 6),
('nqb', '2015-02-04 10:45:26', 'hai', 7),
('dk', '2015-02-04 10:45:43', 'naqeebe poda', 8),
('dk', '2015-02-06 15:33:11', 'vbv', 9),
('dkr', '2015-02-06 15:34:33', 'gbbbb', 10),
('dk', '2015-02-06 15:34:42', 'hshjd', 11),
('mansoor', '2015-02-06 15:42:59', 'dgjh', 12),
('faculty', '2015-02-07 04:47:27', 'hjhdj', 13),
('dfd', '2015-02-07 04:48:16', 'dxvf', 14),
('faculty', '2015-02-07 04:52:49', 'hjhh', 15),
('faculty', '2015-02-07 04:54:28', 'jghuiu', 16),
('student', '2015-02-07 05:05:25', 'dgdh', 17),
('student', '2015-02-15 13:54:48', 'dgjh', 18),
('dk', '2015-02-17 19:35:34', 'ddghfgh', 19),
('dk', '2015-02-20 07:07:12', 'sffs', 20),
('dk', '2015-02-20 07:08:28', 'ffdfd', 21),
('dk', '2015-02-20 07:08:39', 'rt', 22),
('dk', '2015-02-20 07:22:46', 'whatf', 23),
('faculty', '2015-02-28 02:17:28', 'ds', 24),
('Rafi P', '2015-02-28 02:21:46', 'ghhggg', 25),
('Banee Ishaque K', '2015-02-28 04:23:54', 'enthada myra rafi evide karyam', 26);

-- --------------------------------------------------------

--
-- Table structure for table `deptfiles`
--

CREATE TABLE IF NOT EXISTS `deptfiles` (
`File_ID` int(11) NOT NULL,
  `Faculty_ID` varchar(50) NOT NULL,
  `FileName` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deptfiles`
--

INSERT INTO `deptfiles` (`File_ID`, `Faculty_ID`, `FileName`) VALUES
(3, 'Rafi P', 'dgh - Copy.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
`SUBID` int(10) NOT NULL,
  `StudentID` varchar(50) NOT NULL,
  `Series1_Mark` varchar(50) NOT NULL,
  `Series2_Mark` varchar(50) NOT NULL,
  `TotalScore` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`SUBID`, `StudentID`, `Series1_Mark`, `Series2_Mark`, `TotalScore`) VALUES
(5, '35', '5', '', 100),
(6, '34', '9', '8', 100);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
`Faculty_ID` int(20) NOT NULL,
  `Faculty_Name` varchar(50) NOT NULL,
  `DOB` varchar(15) NOT NULL,
  `DEPTID` varchar(50) NOT NULL,
  `DESIG` varchar(50) NOT NULL,
  `QUALIFICATION` varchar(50) NOT NULL,
  `SEX` varchar(50) NOT NULL,
  `ADDRESS` varchar(50) NOT NULL,
  `CITY` varchar(50) NOT NULL,
  `STATE` varchar(50) NOT NULL,
  `PIN` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PHNNO` varchar(50) NOT NULL,
  `STATUS` varchar(50) NOT NULL,
  `Image_Name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Faculty_ID`, `Faculty_Name`, `DOB`, `DEPTID`, `DESIG`, `QUALIFICATION`, `SEX`, `ADDRESS`, `CITY`, `STATE`, `PIN`, `EMAIL`, `PHNNO`, `STATUS`, `Image_Name`) VALUES
(16, 'Rafi P', '12-12-1985', 'Computer', 'Lecturer', 'Diploma', 'Male', 'Parappangadi2', 'Tanur2', 'Kerala2', '6764072', 'rafi@gmail.com27', '9189898989892', 'Active', 'Tulips.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`FeedBackID` int(11) NOT NULL,
  `Faculty_ID` varchar(50) NOT NULL,
  `Knowledge` varchar(50) NOT NULL,
  `OhpUsage` varchar(50) NOT NULL,
  `Behaviour` varchar(50) NOT NULL,
  `TeachingStyle` varchar(50) NOT NULL,
  `Notes` varchar(50) NOT NULL,
  `DoubtClearing` varchar(50) NOT NULL,
  `Assignment` varchar(50) NOT NULL,
  `Message` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FeedBackID`, `Faculty_ID`, `Knowledge`, `OhpUsage`, `Behaviour`, `TeachingStyle`, `Notes`, `DoubtClearing`, `Assignment`, `Message`) VALUES
(3, 'Rafi P', 'poor', 'poor', 'poor', 'poor', 'poor', 'poor', 'poor', 'p');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
`feedbackid` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `Phone` varchar(50) DEFAULT NULL,
  `message` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`feedbackid`, `name`, `Phone`, `message`) VALUES
(1, 'Banee Ishaque K', '+919446827218', 'Fuck You...');

-- --------------------------------------------------------

--
-- Table structure for table `forumanswer`
--

CREATE TABLE IF NOT EXISTS `forumanswer` (
`AnswerID` int(11) NOT NULL,
  `ID` varchar(50) NOT NULL,
  `ReplyMsg` text NOT NULL,
  `QuestionID` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forumanswer`
--

INSERT INTO `forumanswer` (`AnswerID`, `ID`, `ReplyMsg`, `QuestionID`) VALUES
(11, 'Rafi P', 'Funny...', '12'),
(12, 'Rafi P', 'Beautiful...', '12'),
(13, 'Banee Ishaque K', 'e', '12'),
(14, 'Banee Ishaque K', 'ee', '12'),
(15, 'Banee Ishaque K', 'a', '13');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`ID` int(50) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `Role` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `USERNAME`, `PASSWORD`, `Role`, `user_id`) VALUES
(48, 'admin', 'admin', 'admin', 0),
(49, '1', '28-09-1993', 'student', 34),
(50, 'faculty', 'faculty', 'faculty', 16),
(51, '2', '12-12-2012', 'student', 35);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
`NotificationID` int(11) NOT NULL,
  `FacultyID` varchar(50) NOT NULL,
  `Dept` varchar(50) NOT NULL,
  `Sem` varchar(50) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Message` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`NotificationID`, `FacultyID`, `Dept`, `Sem`, `Title`, `Message`) VALUES
(7, 'Rafi P', 'Automobile', 'fifth & sixth', 't', 't'),
(8, 'Rafi P', 'Automobile', 'sixth', 'g', 'g'),
(9, 'Rafi P', 'Computer', 'fifth & sixth', 'd', 'd'),
(10, 'Rafi P', 'Automobile', 'sixth', 'd2', 'd2'),
(11, 'Rafi P', 'Computer', 'sixth', 'd', 'g');

-- --------------------------------------------------------

--
-- Table structure for table `qforum`
--

CREATE TABLE IF NOT EXISTS `qforum` (
`Forum_ID` int(11) NOT NULL,
  `Asker_ID` varchar(50) NOT NULL,
  `Subject` text NOT NULL,
  `Question` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qforum`
--

INSERT INTO `qforum` (`Forum_ID`, `Asker_ID`, `Subject`, `Question`) VALUES
(12, 'Rafi P', 'C', 'What is the use of C?'),
(13, 'Banee Ishaque K', 's', 's');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
`StudentID` int(50) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `SEX` varchar(50) NOT NULL,
  `BRANCH` varchar(50) NOT NULL,
  `SEM` varchar(50) NOT NULL,
  `ADDRESS` varchar(50) NOT NULL,
  `CITY` varchar(50) NOT NULL,
  `STATE` varchar(50) NOT NULL,
  `PIN` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PHNNO` varchar(50) NOT NULL,
  `PAREMAIL` varchar(50) NOT NULL,
  `PARPHN` varchar(50) NOT NULL,
  `RollNo` varchar(50) NOT NULL,
  `STATUS` varchar(50) NOT NULL,
  `Image_Name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StudentID`, `NAME`, `DOB`, `SEX`, `BRANCH`, `SEM`, `ADDRESS`, `CITY`, `STATE`, `PIN`, `EMAIL`, `PHNNO`, `PAREMAIL`, `PARPHN`, `RollNo`, `STATUS`, `Image_Name`) VALUES
(34, 'Banee Ishaque K', '28-09-1993', 'Male', 'Computer', 'sixth', 'Kuttiyathil house2', 'Kerala2', 'Tirur2', '6763072', 'banee@gmail.com2', '+9194468272182', 'baneeishaque@localhost.localdomain', '+9194468272182', '1', 'Active', 'Hydrangeas.jpg'),
(35, 'Mansoor', '12-12-2012', 'Male', 'Computer', 'sixth', 'e', 'e', 'e', 'e', 'e', '7', 'r', 'r', '2', 'Active', 'Lighthouse.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deptfiles`
--
ALTER TABLE `deptfiles`
 ADD PRIMARY KEY (`File_ID`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
 ADD PRIMARY KEY (`SUBID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
 ADD PRIMARY KEY (`Faculty_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`FeedBackID`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
 ADD PRIMARY KEY (`feedbackid`);

--
-- Indexes for table `forumanswer`
--
ALTER TABLE `forumanswer`
 ADD PRIMARY KEY (`AnswerID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
 ADD PRIMARY KEY (`NotificationID`);

--
-- Indexes for table `qforum`
--
ALTER TABLE `qforum`
 ADD PRIMARY KEY (`Forum_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`StudentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `deptfiles`
--
ALTER TABLE `deptfiles`
MODIFY `File_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
MODIFY `SUBID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
MODIFY `Faculty_ID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `FeedBackID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
MODIFY `feedbackid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `forumanswer`
--
ALTER TABLE `forumanswer`
MODIFY `AnswerID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
MODIFY `NotificationID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `qforum`
--
ALTER TABLE `qforum`
MODIFY `Forum_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
MODIFY `StudentID` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
