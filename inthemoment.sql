-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 20, 2018 at 01:58 PM
-- Server version: 5.7.23
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inthemoment`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `categID` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`categID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categID`, `name`, `image`) VALUES
(1, 'Outdoor', 'fa-tree'),
(2, 'Events', 'fa-calendar-check'),
(3, 'Food', 'fa-cookie-bite'),
(4, 'Drinks', 'fa-wine-glass-alt'),
(5, 'At home activities', 'fa-home');

-- --------------------------------------------------------

--
-- Table structure for table `demouser`
--

DROP TABLE IF EXISTS `demouser`;
CREATE TABLE IF NOT EXISTS `demouser` (
  `userID` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(10000) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `demouser`
--

INSERT INTO `demouser` (`userID`, `name`) VALUES
(1, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `interest`
--

DROP TABLE IF EXISTS `interest`;
CREATE TABLE IF NOT EXISTS `interest` (
  `interestID` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`interestID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `interest`
--

INSERT INTO `interest` (`interestID`, `name`, `image`) VALUES
(1, 'Music', 'fa-music'),
(2, 'Art', 'fa-paint-brush'),
(3, 'Fitness', 'fa-running'),
(4, 'Cooking', 'fa-utensils');

-- --------------------------------------------------------

--
-- Table structure for table `recommendation`
--

DROP TABLE IF EXISTS `recommendation`;
CREATE TABLE IF NOT EXISTS `recommendation` (
  `recomID` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `categID` int(255) NOT NULL,
  `interestID` int(255) NOT NULL,
  `timeRangeStart` int(50) NOT NULL,
  `timeRangeEnd` int(50) NOT NULL,
  `image` varchar(500) NOT NULL,
  `startTimeSuitable` time NOT NULL,
  `endTimeSuitable` time NOT NULL,
  PRIMARY KEY (`recomID`),
  KEY `categID` (`categID`),
  KEY `interestID` (`interestID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recommendation`
--

INSERT INTO `recommendation` (`recomID`, `title`, `categID`, `interestID`, `timeRangeStart`, `timeRangeEnd`, `image`, `startTimeSuitable`, `endTimeSuitable`) VALUES
(1, 'Coffee', 4, 4, 30, 80, '', '09:00:00', '17:00:00'),
(2, 'Art gallery', 1, 2, 20, 90, '', '09:00:00', '14:00:00'),
(3, 'Yoga', 5, 3, 0, 30, 'img\\activity\\yoga.png', '18:00:00', '24:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `recommendationdetails`
--

DROP TABLE IF EXISTS `recommendationdetails`;
CREATE TABLE IF NOT EXISTS `recommendationdetails` (
  `recomDId` int(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `link1` varchar(100) NOT NULL,
  `link2` varchar(100) NOT NULL,
  `link3` varchar(100) NOT NULL,
  `latitude` decimal(65,4) NOT NULL,
  `longitude` decimal(65,4) NOT NULL,
  `recomID` int(255) NOT NULL,
  PRIMARY KEY (`recomDId`),
  KEY `recomID` (`recomID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

DROP TABLE IF EXISTS `stats`;
CREATE TABLE IF NOT EXISTS `stats` (
  `userID` int(255) NOT NULL,
  `day` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `hour` int(255) NOT NULL,
  PRIMARY KEY (`userID`,`day`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userinterest`
--

DROP TABLE IF EXISTS `userinterest`;
CREATE TABLE IF NOT EXISTS `userinterest` (
  `userID` int(255) NOT NULL,
  `InterestID` int(255) NOT NULL,
  PRIMARY KEY (`userID`,`InterestID`),
  KEY `InterestID` (`InterestID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userinterest`
--

INSERT INTO `userinterest` (`userID`, `InterestID`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'zxczczxczxc', 'zxczxccz@asdads', '1aabac6d068eef6a7bad3fdf50a05cc8'),
(4, 'dd', 'dd@dd', '1aabac6d068eef6a7bad3fdf50a05cc8'),
(5, 'ee', 'ee@ee', '08a4415e9d594ff960030b921d42b91e'),
(6, 'qq', 'qq@qq', '099b3b060154898840f0ebdfb46ec78f'),
(7, 'ss', 'ss@ss', '3691308f2a4c2f6983f2880d32e29c84'),
(8, 'ww', 'ww@ww', 'ad57484016654da87125db86f4227ea3'),
(9, 'asdas', 'asdsd@asd', '3691308f2a4c2f6983f2880d32e29c84');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recommendation`
--
ALTER TABLE `recommendation`
  ADD CONSTRAINT `recommendation_ibfk_1` FOREIGN KEY (`categID`) REFERENCES `category` (`categID`),
  ADD CONSTRAINT `recommendation_ibfk_2` FOREIGN KEY (`interestID`) REFERENCES `interest` (`interestID`);

--
-- Constraints for table `recommendationdetails`
--
ALTER TABLE `recommendationdetails`
  ADD CONSTRAINT `recommendationDetails_ibfk_1` FOREIGN KEY (`recomID`) REFERENCES `recommendation` (`recomID`);

--
-- Constraints for table `stats`
--
ALTER TABLE `stats`
  ADD CONSTRAINT `stats_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `demouser` (`userID`);

--
-- Constraints for table `userinterest`
--
ALTER TABLE `userinterest`
  ADD CONSTRAINT `userInterest_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `demouser` (`userID`),
  ADD CONSTRAINT `userInterest_ibfk_2` FOREIGN KEY (`InterestID`) REFERENCES `interest` (`interestID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
