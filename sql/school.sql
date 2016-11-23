-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2016 at 06:20 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `id` int(6) NOT NULL,
  `student_id` int(6) NOT NULL,
  `english` float NOT NULL,
  `maths` float NOT NULL,
  `science` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`id`, `student_id`, `english`, `maths`, `science`) VALUES
(1, 1, 90, 80, 70),
(2, 2, 80, 99, 88);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(6) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `class` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_name`, `class`, `phone`, `email`, `address`) VALUES
(1, 'Student One', '3A', '9789820329', 'sankara@gmail.com', 'Test Address'),
(2, 'student two', '3A', '999999999', 'test@gmail.com', 'Test Address');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mark`
--
ALTER TABLE `mark`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `mark`
--
ALTER TABLE `mark`
  ADD CONSTRAINT `mark_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
