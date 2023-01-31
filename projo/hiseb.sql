-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 10:51 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hiseb`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `user_name`, `password`) VALUES
(1, 'admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `placed`
--

CREATE TABLE `placed` (
  `id` int(11) NOT NULL,
  `sch_id` int(11) NOT NULL,
  `index_no` varchar(20) NOT NULL,
  `school_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `sch_id` int(11) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`sch_id`, `school_name`, `category`, `level`, `location`) VALUES
(1, 'Nyeri  Girls High School', 'Girls School', 'National School', 'Nyeri'),
(2, 'Gakuu Mixed High School', 'Mixed School', 'County  School', 'Kirinyaga'),
(3, 'Muranga Boys High School', 'Boys School', 'Extra County', 'Muranga'),
(4, 'Alliance Boys High School', 'Boys', 'National', 'Nairobi'),
(5, 'Alliance Girls High School', 'Girls School', 'National School', 'Nairobi'),
(6, 'Nyaga Mixed school', 'Mixed', 'County', 'Meru'),
(9, 'St. Mary Riruta Girls High School', 'Girls School', 'Extra County', 'Kiambu'),
(10, 'Precious Blood Girls High School', 'Girls', 'County', 'Makueni'),
(12, 'Muruguru Girls High School', 'Girls', 'Extra', 'Nyeri'),
(14, 'Kirinyaga Boys High School', 'Boys School', 'Extra County', 'Kutus'),
(15, 'St Tereza Girls', 'Girls School', 'County', 'Kutus'),
(16, 'Maranda Boys High School', 'Boys', 'National', 'Nairobi');

-- --------------------------------------------------------

--
-- Table structure for table `schools_selected`
--

CREATE TABLE `schools_selected` (
  `id` int(11) NOT NULL,
  `index_no` varchar(20) NOT NULL,
  `marks` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `National` varchar(100) NOT NULL,
  `extra_county` varchar(100) NOT NULL,
  `county` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schools_selected`
--

INSERT INTO `schools_selected` (`id`, `index_no`, `marks`, `email`, `National`, `extra_county`, `county`) VALUES
(18, '3000', '400', 'kariukiwinfred215@gmail.c', 'Alliance Girls High School', 'St. Mary Riruta Girls High School', ''),
(30, '3550', '375', '77@gmail.com', '', 'Muranga Boys High School', 'Kisii Boys High School');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `index_no` varchar(20) NOT NULL,
  `password` varchar(16) NOT NULL,
  `marks` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user_id`, `index_no`, `password`, `marks`, `email`, `gender`) VALUES
(31, 6290, '3000', '0712397540', 400, 'kariukiwinfred215@gmail.c', 'female'),
(33, 79859, '3500', '234', 300, 'premgram3@gmail.com', 'male'),
(37, 1998, '2390', '4', 450, 'benmuli54@gmail.com', 'female'),
(42, 83660, '3550', '12', 375, '77@gmail.com', 'male'),
(43, 7326, '3999', '00', 351, '00@gmail.com', 'female'),
(44, 440, '3331', '45', 390, '4@gmail.com', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `placed`
--
ALTER TABLE `placed`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sch_id` (`sch_id`),
  ADD KEY `index_no` (`index_no`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`sch_id`);

--
-- Indexes for table `schools_selected`
--
ALTER TABLE `schools_selected`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `index_no` (`index_no`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `index_no` (`index_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `placed`
--
ALTER TABLE `placed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `sch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `schools_selected`
--
ALTER TABLE `schools_selected`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `placed`
--
ALTER TABLE `placed`
  ADD CONSTRAINT `placed_ibfk_1` FOREIGN KEY (`sch_id`) REFERENCES `schools` (`sch_id`),
  ADD CONSTRAINT `placed_ibfk_2` FOREIGN KEY (`index_no`) REFERENCES `students` (`index_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
