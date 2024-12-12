-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 01:52 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `djlm`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `care_taker`
--

INSERT INTO `care_taker` (`id`, `title`, `video`, `status`) VALUES
(15, 'Be Kind to them', '2024-04-11-09-43-37video_2024-04-11_09-40-37.mp4', 'active'),
(17, 'Personal Hygiene', '2024-04-11-09-43-53video_2024-04-11_09-40-47.mp4', 'active'),
(19, 'Teething Stage of Childern', '2024-04-11-09-44-08video_2024-04-11_09-40-56.mp4', 'active'),
(20, 'Poor Behaviour of Children', '2024-04-11-09-44-16video_2024-04-11_09-41-01.mp4', 'active'),
(22, 'Establishing Behavioural Skills', '2024-04-11-09-44-31video_2024-04-11_09-41-12.mp4', 'active'),
(23, 'Life facilities', '2024-04-11-09-44-38video_2024-04-11_09-41-16.mp4', 'active'),
(24, 'Minimal And Non Verbal Language', '2024-04-11-09-44-49video_2024-04-11_09-41-21.mp4', 'active'),
(26, 'Lack of Response', '2024-04-11-09-45-06video_2024-04-11_09-41-31.mp4', 'active'),
(27, 'Teaching Social Skills', '2024-04-11-09-45-13video_2024-04-11_09-41-36.mp4', 'active');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `letter`, `word`, `image`) VALUES
(1, 'A', 'Apple', '2024-03-18-10-46-37apple_158989157.jpg'),
(2, 'B', 'Ball', '2024-03-18-10-47-56ball.jpg'),
(3, 'C', 'Cat', '2024-04-10-10-06-48vecteezy_ilustracion-de-lindo-gato-de-color-imagen-de-gato-de_13078569.png'),
(4, 'D', 'Dog', '2024-04-10-10-11-06pngwing.com (1).png'),
(5, 'E', 'Elephant', '2024-04-10-10-09-59pngwing.com.png'),
(6, 'F', 'Frog', '2024-03-22-01-27-48frog.jpeg'),
(7, 'G', 'Goat', '2024-04-10-10-13-33pngwing.com (2).png'),
(8, 'H', 'House', '2024-04-10-10-14-26pngwing.com (3).png'),
(9, 'I', 'Ice Cream', '2024-04-10-10-16-22pngwing.com (4).png'),
(10, 'J', 'Jelly Fish', '2024-04-10-10-17-58pngwing.com (5).png'),
(11, 'K', 'Kite', '2024-04-10-10-19-21pngwing.com (6).png'),
(12, 'L', 'Lion', '2024-04-10-10-19-51pngwing.com (7).png'),
(13, 'M', 'Monkey', '2024-04-10-10-20-23pngwing.com (8).png'),
(14, 'N', 'Nurse', '2024-04-10-10-21-29pngwing.com (9).png'),
(15, 'O', 'Octopus', '2024-04-10-10-22-39pngwing.com (10).png'),
(16, 'P', 'Penguin', '2024-04-10-10-24-30pngwing.com (11).png'),
(17, 'Q', 'Queen', '2024-04-10-10-25-39pngwing.com (12).png'),
(18, 'R', 'Rat', '2024-04-10-10-26-34pngwing.com (13).png'),
(19, 'S', 'Sun', '2024-04-10-10-27-23pngwing.com (14).png'),
(20, 'T', 'Tea', '2024-04-10-10-29-01pngwing.com (15).png'),
(21, 'U', 'Umbrella', '2024-04-10-10-30-32pngwing.com (16).png'),
(22, 'V', 'Vegetables', '2024-04-10-10-31-46pngwing.com (17).png'),
(23, 'W', 'Wheel', '2024-04-10-10-32-48pngwing.com (18).png'),
(24, 'X', 'X-Ray', '2024-04-10-10-33-52pngwing.com (19).png'),
(25, 'Y', 'Yak', '2024-04-10-10-34-48pngwing.com (20).png'),
(26, 'Z', 'Zip', '2024-04-10-10-36-05pngwing.com (21).png');

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
-- Table structure for table `mob_otp`
--

CREATE TABLE IF NOT EXISTS `mob_otp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile_number` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `verification_code` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `verified` tinyint(1) DEFAULT NULL COMMENT '1=verified,0=not verified',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `number`
--

CREATE TABLE IF NOT EXISTS `number` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `letter` varchar(100) NOT NULL,
  `image` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `number`
--

INSERT INTO `number` (`id`, `letter`, `image`) VALUES
(1, 'A', '2024-03-18-10-46-37apple_158989157.jpg'),
(2, 'B', '2024-03-18-10-47-56ball.jpg'),
(3, 'C', '2024-03-18-10-48-24cat.jpg'),
(4, 'D', '2024-03-18-10-49-25dog.jpg'),
(5, 'E', '2024-03-18-10-49-59uiCrUgVCf64TzEdTM8x9aD-1200-80.jpg'),
(6, 'F', '2024-03-22-01-27-48frog.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `numbers`
--

CREATE TABLE IF NOT EXISTS `numbers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `letter` varchar(100) NOT NULL,
  `word` varchar(50) NOT NULL,
  `image` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `numbers`
--

INSERT INTO `numbers` (`id`, `letter`, `word`, `image`) VALUES
(1, '1', '1', '2024-04-22-06-21-251.png'),
(2, '2', '2', '2024-04-22-06-21-362.png'),
(3, '3', '3', '2024-04-22-06-21-493.png'),
(4, '4', '4', '2024-04-22-06-21-584.png'),
(5, '5', '5', '2024-04-22-06-22-085.png'),
(6, '6', '6', '2024-04-22-06-22-206.png'),
(7, '7', '7', '2024-04-22-06-22-307.png'),
(8, '8', '8', '2024-04-22-06-22-418.png'),
(9, '9', '9', '2024-04-22-06-22-529.png'),
(10, '10', '10', '2024-04-22-06-23-0110.png');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `user_id`, `result`, `date`) VALUES
(4, 3, 'autistic', '2024-04-24'),
(5, 1, 'Suspected Autistic\n', '2024-04-24'),
(6, 1, 'Suspected Autistic\n', '2024-04-24'),
(7, 1, 'Suspected Autistic\n', '2024-04-24'),
(8, 1, 'Suspected Autistic\n', '2024-04-24'),
(9, 15, 'autistic', '2024-04-28'),
(10, 7, 'autistic', '2024-04-28'),
(11, 12, 'autistic', '2024-04-29'),
(12, 16, 'autistic', '2024-05-09');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `social_awareness`
--

INSERT INTO `social_awareness` (`id`, `title`, `video`, `status`) VALUES
(1, 'May I Please', '2024-04-11-09-00-35May_I_Please__Yes_You_May!___Good_Manners_Song_for_Kids___Noodle___Pals(4K)[1].webm', 'active'),
(2, 'Beautiful day', '2024-04-11-09-04-51Good_Morning_It_s_Such_A_Beautiful_Day___Preschool_Songs___Noodle___Pals(4K)[1].webm', 'active'),
(3, 'Wash Your Hands', '2024-04-11-09-06-47The_Hand_Washing_Song___Staying_Clean_And_Healthy___Noodle___Pals(1080p)[1].mp4', 'active'),
(4, 'Brush Your Teeth', '2024-04-11-09-14-12Brush_Your_Teeth___Tooth_Brushing_Song_for_Kids___Noodle___Pals(4K)[1].webm', 'active'),
(5, 'Put On Your Shoes', '2024-04-11-09-20-34Put_On_Your_Shoes___Get_Ready_for_Preschool___Noodle___Pals(4K)[1].webm', 'active'),
(6, 'Are You Hungry', '2024-04-11-09-21-55Are_You_Hungry____Preschool_Song___Noodle___Pals(4K)[1].webm', 'active'),
(7, 'Walking Down The Street', '2024-04-11-09-22-57We_re_Walking_Down_The_Street___Noodle___Pals(4K)[1].webm', 'active');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `social_community`
--

INSERT INTO `social_community` (`id`, `user_id`, `title`, `video`, `status`) VALUES
(1, 1, 'Cartoon', 'a.mp4', 'active'),
(5, 1, 'Army Base', 'MVI_9381.MP4', 'active'),
(6, 1, 'Time', '8617063-hd_1920_1080_25fps.mp4', 'active'),
(7, 1, 'Football', '2932300-uhd_4096_2160_24fps.mp4', 'active'),
(8, 1, 'Soccar', '2932301-uhd_4096_2160_24fps.mp4', 'active'),
(9, 1, 'VR', '3209828-uhd_3840_2160_25fps.mp4', 'active'),
(10, 1, 'SunSet', '15220395-uhd_3840_1634_25fps.mp4', 'active'),
(12, 1, 'Car Racing', '16605635-uhd_3840_2160_60fps.mp4', 'active'),
(13, 15, 'Memories', 'MVI_0466.MP4', 'active');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `story_telling`
--

INSERT INTO `story_telling` (`id`, `title`, `video`, `status`) VALUES
(9, 'The Sky Is Falling', '2024-04-28-11-03-58Y2meta.app-19 Best Short English Stories for Kids Collection _ Infobells-(480p).mp4', 'active'),
(10, 'Find A Flower', '2024-04-28-11-12-01Find A Flower _ Jungle Beat _ Cartoons for kids _ WildBrain Bananas.mp4', 'active'),
(11, 'Boing Boing Jungle', '2024-04-28-11-15-57Boing Boing _ Jungle Beat_ Munki and Trunk _ Kids Animation 2022.mp4', 'active');

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
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`) VALUES
(1, 'mike', 'mike@gmail.com', '1234', 7355612288),
(2, 'Laura Norda', 'laura@gmail.com', '123', 7355612288),
(4, 'Delna', 'AL@gmail.com', '123', 8848029530),
(5, 'hello', 'all@gmail.com', '123', 8848029530),
(7, 'Ammu', 'Ammu@gamil.com', '123', 8848029530),
(8, 'John', 'john@gmail.com', '123', 8848029530),
(9, 'janu', 'janu@gmail.com', '123', 920000000000),
(10, 'Thomas', 'tj@gmail.com', '123', 9447814622),
(11, 'kevin', 'kevin@gmail.com', '123', 8848029530),
(12, 'jaya', 'jaya@gmail.com', '123', 9447814622),
(15, 'Alvin', 'dj@gmail.com', '1234', 9447516622),
(16, 'Hridhya', 'HJ@gmail.com', '123', 8078471622);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
