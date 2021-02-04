-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 24, 2020 at 02:15 PM
-- Server version: 8.0.20-0ubuntu0.20.04.1
-- PHP Version: 7.2.32-1+ubuntu20.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `Application`
--

CREATE TABLE `Application` (
  `Application_id` int NOT NULL,
  `Student_id` varchar(255) NOT NULL,
  `Hostel_id` int NOT NULL,
  `Application_status` tinyint(1) DEFAULT NULL,
  `Room_No` int DEFAULT NULL,
  `Message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Hostel`
--

CREATE TABLE `Hostel` (
  `Hostel_id` int NOT NULL,
  `Hostel_name` varchar(255) NOT NULL,
  `current_no_of_rooms` varchar(255) DEFAULT NULL,
  `No_of_rooms` varchar(255) DEFAULT NULL,
  `No_of_students` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Hostel`
--

INSERT INTO `Hostel` (`Hostel_id`, `Hostel_name`, `current_no_of_rooms`, `No_of_rooms`, `No_of_students`) VALUES
(1, 'A', NULL, '100', '0'),
(2, 'B', NULL, '100', '0'),
(3, 'C', NULL, '100', '6'),
(4, 'D', NULL, '100', '0');

-- --------------------------------------------------------

--
-- Table structure for table `Hostel_Manager`
--

CREATE TABLE `Hostel_Manager` (
  `Hostel_man_id` int NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Mob_no` varchar(255) NOT NULL,
  `Hostel_id` int NOT NULL,
  `Pwd` longtext NOT NULL,
  `Isadmin` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Hostel_Manager`
--

INSERT INTO `Hostel_Manager` (`Hostel_man_id`, `Username`, `Fname`, `Lname`, `Mob_no`, `Hostel_id`, `Pwd`, `Isadmin`) VALUES
(1, 'admin', 'Admin', '', '9685743215', 1, '$2y$10$Wo0K9FXen94gNZB9V9tVWemZQ5AWxkD0I/XMOp5XuPQxp9p/rzb2G', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Message`
--

CREATE TABLE `Message` (
  `msg_id` int NOT NULL,
  `sender_id` varchar(255) DEFAULT NULL,
  `receiver_id` varchar(255) DEFAULT NULL,
  `hostel_id` int DEFAULT NULL,
  `subject_h` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `msg_date` varchar(255) DEFAULT NULL,
  `msg_time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Room`
--

CREATE TABLE `Room` (
  `Room_id` int NOT NULL,
  `Hostel_id` int NOT NULL,
  `Room_No` int NOT NULL,
  `Student_id` varchar(250) NOT NULL,
  `Allocated` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE `Student` (
  `Student_id` varchar(255) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Mob_no` varchar(255) NOT NULL,
  `Dept` varchar(255) NOT NULL,
  `Year_of_study` varchar(255) NOT NULL,
  `Pwd` longtext NOT NULL,
  `Hostel_id` int DEFAULT NULL,
  `Room_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Application`
--
ALTER TABLE `Application`
  ADD PRIMARY KEY (`Application_id`),
  ADD KEY `Student_id` (`Student_id`),
  ADD KEY `Hostel_id` (`Hostel_id`);

--
-- Indexes for table `Hostel`
--
ALTER TABLE `Hostel`
  ADD PRIMARY KEY (`Hostel_id`);

--
-- Indexes for table `Hostel_Manager`
--
ALTER TABLE `Hostel_Manager`
  ADD PRIMARY KEY (`Hostel_man_id`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD KEY `Hostel_id` (`Hostel_id`);

--
-- Indexes for table `Message`
--
ALTER TABLE `Message`
  ADD PRIMARY KEY (`msg_id`),
  ADD KEY `hostel_id` (`hostel_id`);

--
-- Indexes for table `Room`
--
ALTER TABLE `Room`
  ADD PRIMARY KEY (`Room_id`),
  ADD KEY `Hostel_id` (`Hostel_id`);

--
-- Indexes for table `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`Student_id`),
  ADD KEY `Hostel_id` (`Hostel_id`),
  ADD KEY `Room_id` (`Room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Application`
--
ALTER TABLE `Application`
  MODIFY `Application_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `Hostel`
--
ALTER TABLE `Hostel`
  MODIFY `Hostel_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `Hostel_Manager`
--
ALTER TABLE `Hostel_Manager`
  MODIFY `Hostel_man_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `Message`
--
ALTER TABLE `Message`
  MODIFY `msg_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `Room`
--
ALTER TABLE `Room`
  MODIFY `Room_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Application`
--
ALTER TABLE `Application`
  ADD CONSTRAINT `Application_ibfk_1` FOREIGN KEY (`Student_id`) REFERENCES `Student` (`Student_id`),
  ADD CONSTRAINT `Application_ibfk_2` FOREIGN KEY (`Hostel_id`) REFERENCES `Hostel` (`Hostel_id`);

--
-- Constraints for table `Hostel_Manager`
--
ALTER TABLE `Hostel_Manager`
  ADD CONSTRAINT `Hostel_Manager_ibfk_1` FOREIGN KEY (`Hostel_id`) REFERENCES `Hostel` (`Hostel_id`);

--
-- Constraints for table `Message`
--
ALTER TABLE `Message`
  ADD CONSTRAINT `Message_ibfk_1` FOREIGN KEY (`hostel_id`) REFERENCES `Hostel` (`Hostel_id`);

--
-- Constraints for table `Room`
--
ALTER TABLE `Room`
  ADD CONSTRAINT `Room_ibfk_1` FOREIGN KEY (`Hostel_id`) REFERENCES `Hostel` (`Hostel_id`);

--
-- Constraints for table `Student`
--
ALTER TABLE `Student`
  ADD CONSTRAINT `Student_ibfk_1` FOREIGN KEY (`Hostel_id`) REFERENCES `Hostel` (`Hostel_id`),
  ADD CONSTRAINT `Student_ibfk_2` FOREIGN KEY (`Room_id`) REFERENCES `Room` (`Room_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
