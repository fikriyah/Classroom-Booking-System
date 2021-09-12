-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2019 at 11:09 AM
-- Server version: 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library_class_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `auther` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `edition` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `department` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `datep` date NOT NULL,
  `photo` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `title`, `auther`, `publisher`, `edition`, `description`, `department`, `faculty`, `datep`, `photo`, `date`) VALUES
(1, 'salam', ';l', ';lk', '1', '', '', '', '', '2019-04-25', '', '2019-04-25'),
(3, 'lkjljk', 'klklk', 'lk', '0', '', '', '', '', '0000-00-00', '', '0000-00-00'),
(4, 'lkjljk', 'klklk', 'lk', '0', '', 'asdasd', '', '', '0000-00-00', '', '0000-00-00'),
(5, 'lkjljk', 'klklk', 'lk', '0', '', 'asdasd', '', '', '2020-05-26', '', '2019-04-25'),
(6, 'najib', 'kkkk', 'najib', '0', '', 'ljljl', '', '', '2019-04-17', '', '2019-04-25'),
(7, 'najib', 'nn', 'lk', '0', '', 'hjklj;llj;', 'Second', 'First', '2019-04-17', '', '2019-04-25'),
(8, 'Najb boook', 'dddd', 'ddddddd', '0', '', 'sa', 'Second', 'First', '2019-02-26', '', '2019-04-25'),
(9, 'kk', 'k', 'kk', '0', '', 'fhjkl', '', 'First', '2017-03-24', 'upload/book/9/cea2fb61308183.5a69ffc8a828f.png', '2019-04-25'),
(10, 'test ed', 'Test', 'Allah', 'Islam', 'five', 'najib', 'CS', 'Najibullah', '2019-04-10', 'upload/book/10/23607c885bf1bff1e31f4fc52f9e4ae7720a4656.png.2904f01bb30bb013497a6fc041dd4ec5.png', '2019-04-29'),
(11, 'Test', 'Test', 'Allah', 'Islam', 'lkj;', 'ss', '', '', '2018-03-27', '', '2019-04-29'),
(12, 'BCS', 'dddd', 'lkj;dd', '011', 'five', 'test', 'BCSSS', 'Najibullah', '2018-03-28', '', '2019-04-29'),
(13, 'test1', 'test1', 'test1', 'test1', 'test1', 'test1', 'BCSSS', '', '2019-04-10', '', '2019-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `catagury`
--

CREATE TABLE IF NOT EXISTS `catagury` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `faculty` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `note` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `catagury`
--

INSERT INTO `catagury` (`id`, `name`, `faculty`, `department`, `note`, `date`) VALUES
(2, 'Najib', 'First', 'Third', 'Najib ', '2019-04-25'),
(3, 'Test', 'Second', 'Third', 'test test test test test', '2019-04-25'),
(4, 'najibtest', 'Second', 'Third', 'najib test', '2019-04-25'),
(5, 'test', '', 'najib', 'test 2', '2019-04-30'),
(6, 'tst 2', '', 'BCSSS', 'test 5', '2019-04-30'),
(7, 'test  5', '', 'CS', 'test  5 test  5', '2019-04-30'),
(8, '53', '', 'janan', '', '2019-04-30'),
(9, 'test  555', 'BCS', '', 'najib', '2019-04-30'),
(10, 'test dep', 'BCS', 'najib', 'najib', '2019-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `faculty`, `note`, `date`) VALUES
(1, 'najib', 'BCS', '', '0000-00-00'),
(3, 'janan', 'Najibullah', '', '0000-00-00'),
(9, 'najibbbbb', 'Third', 'testttt', '2019-04-25'),
(10, 'najibtest', 'Third', 'test najib', '2019-04-25'),
(11, 'CS', '1', 'CS is', '2019-04-27'),
(12, 'BCSSS', 'BCS', 'Test', '2019-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `faculites`
--

CREATE TABLE IF NOT EXISTS `faculites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `note` text NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `faculites`
--

INSERT INTO `faculites` (`id`, `name`, `note`, `date`) VALUES
(1, 'BCS', '', '2019-04-25'),
(2, 'LOW', 'low', '2019-04-25'),
(4, 'najib', 'sslk', '2019-04-25'),
(5, 'najib', 'sslk', '2019-04-25'),
(7, 'Najibullah', '', '2019-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT '0',
  `gender` enum('Male','Female') NOT NULL DEFAULT 'Male',
  `photo` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `note`, `status`, `gender`, `photo`, `date`) VALUES
(23, 'karim', 'Najib', '123', 'naihb', 'Active', 'Male', '', '2019-04-29');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
