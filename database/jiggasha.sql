-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2016 at 12:28 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jiggasha`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `q_id` int(50) NOT NULL,
  `qes_id` int(20) NOT NULL,
  `q_question` text CHARACTER SET utf8 NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`q_id`, `qes_id`, `q_question`, `time`) VALUES
(1, 20, 'what is php ?', '0000-00-00 00:00:00'),
(2, 21, 'what is css ?', '0000-00-00 00:00:00'),
(3, 20, 'what is html ?', '0000-00-00 00:00:00'),
(4, 20, 'what is html ?', '0000-00-00 00:00:00'),
(5, 20, '<html><body>Hi!</body></html>', '0000-00-00 00:00:00'),
(6, 19, 'what is asp.net ?', '0000-00-00 00:00:00'),
(7, 19, 'what is asp.net ?', '0000-00-00 00:00:00'),
(8, 20, 'test', '0000-00-00 00:00:00'),
(11, 21, 'what is css ?', '0000-00-00 00:00:00'),
(12, 20, 'name', '0000-00-00 00:00:00'),
(22, 22, 'test', '2014-08-29 05:14:55'),
(23, 22, 'test', '2014-08-29 06:13:11'),
(24, 22, 'what are you doing now ?', '2014-08-29 06:32:27'),
(25, 20, 'test question', '2014-08-29 08:10:57'),
(30, 19, 'Do you know how to create a cms by php ?', '2014-08-30 15:06:43'),
(31, 21, 'AL-AMIN', '2014-09-10 01:57:56'),
(32, 21, 'à¦†à¦®à¦¿ à¦­à¦¾à¦¤ à¦–à¦¾à¦‡ à¥¤', '2014-09-18 19:25:25'),
(33, 20, 'à¦ªà¦¿à¦à¦‡à¦šà¦ªà¦¿ à¦¶à¦¿à¦–à¦¤à§‡ à¦¹à¦²à§‡  à¦•à¦¿ à¦•à¦°à¦¤à§‡ à¦¹à¦¬à§‡ ?', '2014-09-18 19:27:14'),
(35, 23, 'what do you mean by php ?', '2014-11-05 07:31:56'),
(41, 29, 'What is computer ?', '2015-01-01 07:06:06'),
(43, 31, 'What is computer program?', '2015-01-01 07:23:20'),
(44, 32, 'RAM à¦•à¦¿ ?', '2015-01-01 07:59:04'),
(45, 32, 'RAM à¦•à¦¿ ?', '2015-01-01 09:09:27'),
(46, 33, 'What is algorithm? ', '2015-01-01 16:45:13'),
(47, 34, 'ram', '2016-11-30 11:19:46'),
(48, 34, 'algorithm', '2016-11-30 11:20:39');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `userId` int(11) NOT NULL,
  `Full_name` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` text NOT NULL,
  `profile_img` varchar(255) NOT NULL,
  `date` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`userId`, `Full_name`, `userName`, `password`, `email`, `location`, `profile_img`, `date`) VALUES
(29, 'Abdullah al hafiz', 'hafiz', '827ccb0eea8a706c4c34a16891f84e7b', 'hafiz1@gmail.com', 'kurigram/bangladesh', '18082011(032).jpg', 1420095869),
(31, 'peash al ehasan', 'peash', '827ccb0eea8a706c4c34a16891f84e7b', 'erdft@gamil.com', 'gaibandha/bangladesh', '18823_0787_1_lg.jpg', 1420096827),
(32, 'Asadullah sikdar', 'asad', '827ccb0eea8a706c4c34a16891f84e7b', 'asad@gmail.com', 'bagerhat/bangladesh', '301068_264485773594127_152560524786653_757053_723788616_n.jpg', 1420098918),
(33, 'shakil shariar', 'shakil', '827ccb0eea8a706c4c34a16891f84e7b', 'shakil@gmail.com', 'khulna/bangladesh', '302109_264120776963960_152560524786653_756221_1410322687_n.jpg', 1420130211),
(34, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'Egypt/others', 'me.jpg', 1480503871);

-- --------------------------------------------------------

--
-- Table structure for table `user_ans`
--

CREATE TABLE `user_ans` (
  `ans_id` int(50) NOT NULL,
  `qs_id` int(50) NOT NULL,
  `userId` int(50) NOT NULL,
  `user_ans` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_ans`
--

INSERT INTO `user_ans` (`ans_id`, `qs_id`, `userId`, `user_ans`, `time`) VALUES
(14, 11, 0, 'test ans', '0000-00-00 00:00:00'),
(15, 11, 20, 'test ans', '2014-09-27 18:33:00'),
(16, 11, 19, 'yes.', '2014-09-28 01:02:00'),
(17, 11, 22, 'nice ans', '2014-09-28 02:21:00'),
(18, 11, 20, 'this is a nice question in this section', '2014-09-28 12:56:00'),
(19, 12, 20, 'yes.', '2014-09-28 13:50:00'),
(20, 1, 20, 'nice question', '0000-00-00 00:00:00'),
(21, 12, 22, 'what is this ?', '0000-00-00 00:00:00'),
(22, 22, 21, 'no ans', '0000-00-00 00:00:00'),
(24, 22, 22, 'no ans', '2014-08-29 05:31:27'),
(25, 11, 22, 'what is this ?', '2014-08-29 06:16:36'),
(26, 24, 20, 'what is this ? sabik...', '2014-08-29 06:37:59'),
(28, 25, 21, 'why ?', '2014-08-29 08:11:23'),
(30, 24, 22, 'this is a problem name.', '2014-08-29 08:12:25'),
(31, 25, 22, 'what a question ?', '2014-08-29 10:50:34'),
(33, 12, 20, 'this is a question.', '2014-08-30 02:10:30'),
(34, 7, 20, 'test', '2014-08-30 02:10:55'),
(35, 30, 20, 'Yes. I know how to do.', '2014-08-30 15:07:09'),
(36, 31, 20, 'this is..', '2014-08-31 13:01:30'),
(37, 32, 21, 'à¦¤à¦¾à¦‡ à¦¨à¦¾à¦•à¦¿ ?', '2014-09-18 19:25:35'),
(38, 33, 21, 'http://w3schools.com à¦ à¦—à¦¿à§Ÿà§‡ à¦ªà¦¿à¦à¦‡à¦šà¦ªà¦¿ à¦à¦° à¦Ÿà¦¿à¦‰à¦Ÿà§‹à¦°à¦¿à§Ÿà¦¾à¦² à¦—à§à¦²à§‹ à¦¦à§‡à¦–à¦¤à§‡ à¦ªà¦¾à¦°à§‡à¦¨ à¥¤', '2014-09-18 19:29:16'),
(39, 36, 25, 'ok.', '2014-12-07 20:29:28'),
(42, 41, 31, 'A computer is a device that accepts information (in the form of digitalized data) and manipulates it for some result based on a program or sequence of instructions on how the data is to be processed.', '2015-01-01 07:21:33'),
(43, 43, 32, 'A computer program is a list of instructions that tell a computer what to do. Everything a computer does is done by using a computer program. ', '2015-01-01 07:56:13'),
(44, 41, 32, 'A computer generally means a programmable machine.', '2015-01-01 07:57:10'),
(45, 45, 33, 'RAM (pronounced ramm) is an acronym for random access memory, a type of computer memory that can be accessed randomly; that is, any byte of memory can be accessed without touching the preceding bytes.', '2015-01-01 16:37:49'),
(46, 43, 33, ' Programming involves activities such as analysis, developing understanding, generating algorithms, verification of requirements of algorithms including their correctness and resource consumption, and implementation ', '2015-01-01 16:39:53'),
(49, 48, 34, ' ', '2016-11-30 11:24:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `user_ans`
--
ALTER TABLE `user_ans`
  ADD PRIMARY KEY (`ans_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `q_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `user_ans`
--
ALTER TABLE `user_ans`
  MODIFY `ans_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
