-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2016 at 02:44 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alien_abductors`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` char(36) NOT NULL,
  `sortname` varchar(3) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` char(36) NOT NULL,
  `Exp_Name` varchar(45) NOT NULL,
  `Description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `exp_reviews`
--

CREATE TABLE `exp_reviews` (
  `id` char(36) NOT NULL,
  `Review` text,
  `Exp_Rating` tinyint(5) DEFAULT NULL,
  `member_id` char(36) NOT NULL,
  `experience_id` char(36) NOT NULL,
  `Recommend` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` char(36) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `Username` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `First_Name` varchar(45) DEFAULT NULL,
  `Last_Name` varchar(45) DEFAULT NULL,
  `Age` tinyint(4) DEFAULT NULL,
  `city` varchar(80) DEFAULT NULL,
  `state_id` char(36) DEFAULT NULL,
  `country_id` char(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` char(36) NOT NULL,
  `name` varchar(30) NOT NULL,
  `country_id` char(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Exp_Name` (`Exp_Name`);

--
-- Indexes for table `exp_reviews`
--
ALTER TABLE `exp_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Member_id_idx` (`member_id`),
  ADD KEY `Exp_id_idx` (`experience_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exp_reviews`
--
ALTER TABLE `exp_reviews`
  ADD CONSTRAINT `experience_id` FOREIGN KEY (`experience_id`) REFERENCES `experiences` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `member_id` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `state` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `country` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
