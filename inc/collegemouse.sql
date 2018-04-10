-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 02:51 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegemouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(2) NOT NULL,
  `title` varchar(255) NOT NULL,
  `value` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `title`, `value`) VALUES
(1, '', 2),
(2, '', 5),
(3, '', 7),
(4, '', 3),
(5, '', 6),
(6, 'What is your opinion', 2),
(7, 'What is the ciptal of Barisal?', 7);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(2) NOT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title`) VALUES
(18, 'Bangladesh is one of the most ?'),
(19, 'Where are you from ?'),
(20, 'Do you love criket?'),
(21, 'What color do you like?');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `resultId` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `activity` varchar(200) DEFAULT NULL,
  `result` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `userID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userAge` int(3) NOT NULL,
  `userGardian` varchar(255) NOT NULL,
  `userGardianEmail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`userID`, `name`, `userName`, `userPass`, `userEmail`, `userAge`, `userGardian`, `userGardianEmail`) VALUES
(1, 'Tajul Islam', 'developer.tajul', '134391567a045bc4f87ba4c5c920e770', 'developer.tajul@gmail.com', 0, 'Abdur Rahman', 'tajaulislamdu@gmail.'),
(2, 'Anik Khan', 'anikbd', '134391567a045bc4f87ba4c5c920e770', 'anik@gmail.com', 0, 'Fatema Begum', 'fatema@gmail.com'),
(3, 'Raju Ahmed', 'rajubd', 'bd123456', 'rajubd@gamil.com', 0, 'Kamal Khan', 'kamal@gmail.com'),
(4, 'James Bond', 'rajubd', 'bd123456', 'Jamesbond@gmail.com', 0, 'Kamal Khan', 'kamal@gmail.com'),
(6, 'Rahim Khan', 'khanbd', 'bd123456', 'khan@gmail.com', 25, 'Kudus Khan', 'khan@gmail.com'),
(8, 'Mehedi Vai', 'mehedibd', 'bd123456', 'me@gmail.com', 25, 'Mannan', 'me@gmail.com'),
(13, 'Tarun Khan', 'tarun_khan2012', 'bd123456', 'tarun@gmail.com', 36, 'Kabli Olaa', 'tarun@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `userrespons`
--

CREATE TABLE `userrespons` (
  `id` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `rs_value` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`resultId`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `userrespons`
--
ALTER TABLE `userrespons`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `resultId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userrespons`
--
ALTER TABLE `userrespons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
