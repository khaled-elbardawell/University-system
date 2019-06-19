-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2019 at 05:13 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `un-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `hours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `hours`) VALUES
(1, 'php', 4),
(2, 'java', 4),
(3, 'js', 3);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(170) NOT NULL,
  `password` varchar(170) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `phone`, `address`, `name`, `image`) VALUES
(3, 'khaled', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '0597474345', 'Gaza', 'khaled elbardawell', 'image/1.jpg'),
(4, 'mohammed', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '0598822445', 'gaza', 'mohammed mostafa', 'image/2.jpg'),
(5, 'mjdi', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '0597474345', 'gaza', 'mjdi elbardawell', 'image/2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rel`
--

CREATE TABLE `rel` (
  `id` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `grades` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rel`
--

INSERT INTO `rel` (`id`, `id_student`, `id_course`, `grades`) VALUES
(75, 4, 3, '85'),
(77, 4, 2, '91'),
(97, 5, 1, '80'),
(98, 5, 2, '80'),
(100, 3, 2, '80'),
(101, 3, 3, '80');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `course_id` varchar(150) NOT NULL,
  `course` varchar(150) NOT NULL,
  `Saturday` varchar(100) NOT NULL,
  `Sunday` varchar(100) NOT NULL,
  `Monday` varchar(100) NOT NULL,
  `Tuesday` varchar(100) NOT NULL,
  `Wednesday` varchar(100) NOT NULL,
  `Thursday` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `course_id`, `course`, `Saturday`, `Sunday`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`) VALUES
(1, '1', 'php', '11-12', '8-9', '10-11', '-', '10-11', '-'),
(2, '2', 'java', '10-11', '10-11', '-', '-', '9-10', '8-9'),
(3, '3', 'js', '-', '-', '9-10', '9-10', '-', '12-1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rel`
--
ALTER TABLE `rel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rel`
--
ALTER TABLE `rel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
