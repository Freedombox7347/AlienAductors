-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
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
CREATE SCHEMA IF NOT EXISTS `alien_abductors` DEFAULT CHARACTER SET utf8 ;
USE `Alien_Abductors` ;
-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE IF NOT EXISTS `experiences` (
  `id` char(36) NOT NULL,
  `Exp_Name` varchar(45) NOT NULL,
  `Description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `exp_reviews`
--

CREATE TABLE IF NOT EXISTS `exp_reviews` (
  `id` char(36) NOT NULL,
  `Review` text,
  `Exp_Rating` tinyint(5) DEFAULT NULL,
  `member_id` char(36) NOT NULL,
  `experience_id` char(36) NOT NULL,
  `Recommend` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` char(36) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `First_Name` varchar(45) DEFAULT NULL,
  `Last_Name` varchar(45) DEFAULT NULL,
  `Age` tinyint(4) DEFAULT NULL,
  `city` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
--

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Username` (`username`),
  ADD UNIQUE KEY `Email` (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exp_reviews`
--
ALTER TABLE `exp_reviews`
  ADD CONSTRAINT `experience_id` FOREIGN KEY (`experience_id`) REFERENCES `experiences` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `member_id` FOREIGN KEY (`member_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
