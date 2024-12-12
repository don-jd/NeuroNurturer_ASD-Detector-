-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2024 at 02:51 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `autism`
--

-- --------------------------------------------------------

--
-- Table structure for table `care_taker`
--

CREATE TABLE IF NOT EXISTS `care_taker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `video` tinytext NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `care_taker`
--

INSERT INTO `care_taker` (`id`, `title`, `video`, `status`) VALUES
(1, 'video 1', 'a.mp4', 'active'),
(2, '', '3.mp4', ''),
(3, 'Crae Taker', '2024-03-22-11-35-31b.mp4', 'active'),
(4, '', '2024-03-22-01-50-24', ''),
(5, '', '2024-03-22-01-50-53', ''),
(6, '', '2024-03-22-01-52-56', ''),
(7, 'qqqqq', '2024-03-22-01-54-47b.mp4', 'active'),
(8, 'rty', '2024-03-22-01-56-3922.mp4', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `letter` varchar(100) NOT NULL,
  `word` varchar(50) NOT NULL,
  `image` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `letter`, `word`, `image`) VALUES
(1, 'A', 'apple', '2024-03-18-10-46-37apple_158989157.jpg'),
(2, 'B', 'ball', '2024-03-18-10-47-56ball.jpg'),
(3, 'C', 'cat', '2024-03-18-10-48-24cat.jpg'),
(4, 'D', 'dog', '2024-03-18-10-49-25dog.jpg'),
(5, 'E', 'elephant', '2024-03-18-10-49-59uiCrUgVCf64TzEdTM8x9aD-1200-80.jpg'),
(6, 'F', 'Frog', '2024-03-22-01-27-48frog.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `result` varchar(40) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `user_id`, `result`, `date`) VALUES
(1, 1, 'autistic', '2024-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `social_awareness`
--

CREATE TABLE IF NOT EXISTS `social_awareness` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `video` tinytext NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `social_awareness`
--

INSERT INTO `social_awareness` (`id`, `title`, `video`, `status`) VALUES
(1, 'video 1', 'a.mp4', 'active'),
(2, 'STory', '2024-03-20-12-17-08Screenshot 2024-03-08 114229.png', 'active'),
(3, '', '2024-03-20-12-18-24', '');

-- --------------------------------------------------------

--
-- Table structure for table `social_community`
--

CREATE TABLE IF NOT EXISTS `social_community` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `video` tinytext NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `social_community`
--

INSERT INTO `social_community` (`id`, `user_id`, `title`, `video`, `status`) VALUES
(1, 1, 'video 1', 'a.mp4', 'active'),
(2, 1, 'video 2', 'a.mp4', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `story_telling`
--

CREATE TABLE IF NOT EXISTS `story_telling` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `video` tinytext NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `story_telling`
--

INSERT INTO `story_telling` (`id`, `title`, `video`, `status`) VALUES
(1, 'video 1', 'a.mp4', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` bigint(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`) VALUES
(1, 'mike', 'mike@gmail.com', '123', 7355612288),
(2, 'Laura Norda', 'laura@gmail.com', '123', 7355612288),
(3, 'Alvin', 'dj@gmail.com', '123', 730349584);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
