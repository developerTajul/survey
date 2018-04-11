-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 02:00 PM
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
(1, 'Strongly disagree ', 1),
(2, 'Disagree somewhat', 2),
(3, 'Disagree a little', 3),
(4, 'Neutral', 4),
(5, 'Agree somewhat', 5),
(6, 'Agree', 6),
(7, 'Strongly agree', 7);

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
(22, 'I have a good idea about what I want to do for a career. '),
(23, 'I have a clear sense of my strengths and interests, or how they could relate to a career path.'),
(24, 'I have the skills and experience to pursue my dream career and I am working on it.'),
(25, 'I feel motivated by my current job and look forward to going to work every day.'),
(26, 'I am happy with my current career or line of work'),
(27, 'If I lost my job today, I would prefer to look for another job in the same industry'),
(28, 'I am respected and recognized by others for my knowledge and expertise.');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `result_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `ans_id` int(11) DEFAULT NULL
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
  ADD PRIMARY KEY (`result_id`);

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
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userrespons`
--
ALTER TABLE `userrespons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
