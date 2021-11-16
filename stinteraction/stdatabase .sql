-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2017 at 03:31 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `stu_id` varchar(40) NOT NULL,
  `fac_id` varchar(40) NOT NULL,
  `stu_name` varchar(40) NOT NULL,
  `fac_name` varchar(40) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `sender` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`stu_id`, `fac_id`, `stu_name`, `fac_name`, `msg`, `sender`, `date`) VALUES
('13JG1A0543', '13JG2A501', 'vijaya', 'sridevi', 'hi', 'sridevi', '2017-01-19 10:11:06'),
('13JG1A0543', '13JG2A501', 'vijaya', 'sridevi', 'hi', 'sridevi', '2017-01-19 10:11:13'),
('13JG1A0543', '13JG2A501', 'vijaya', 'sridevi', 'hello mam!!', 'vijaya', '2017-01-19 10:16:10'),
('13JG1A0543', '13JG2A501', 'vijaya', 'sridevi', 'hello mam!!', 'vijaya', '2017-01-19 10:16:14'),
('13JG1A0543', '13JG2A501', 'vijaya', 'sridevi', '', 'sridevi', '2017-01-19 10:32:28'),
('13JG1A0543', '13JG2A501', 'vijaya', 'sridevi', '', 'sridevi', '2017-01-19 10:32:45'),
('13JG1A0543', '13JG2A501', 'vijaya', 'sridevi', 'hello pujitha', 'sridevi', '2017-01-19 10:33:39'),
('13JG1A05B2', '13JG2A501', 'bhargavi', 'sridevi', 'hi bhargavi\r\n', 'sridevi', '2017-01-19 10:38:12'),
('13JG1A0543', '13JG2A501', 'vijaya', 'sridevi', 'hi', 'sridevi', '2017-01-19 11:02:13'),
('13JG1A05B2', '13JG2A501', 'bhargavi', 'sridevi', 'hii\r\n', 'sridevi', '2017-01-19 11:22:21'),
('13JG1A0543', '13JG2A501', 'vijaya', 'sridevi', 'hi\r\n', 'sridevi', '2017-01-19 14:16:50'),
('13JG1A0543', '13JG2A501', 'vijaya', 'sridevi', '', 'sridevi', '2017-01-19 14:17:03'),
('13JG1A0543', '13JG2A501', 'vijaya', 'sridevi', '', 'sridevi', '2017-01-19 14:17:05'),
('13JG1A0543', '13JG2A501', 'vijaya', 'sridevi', 'hi', 'sridevi', '2017-01-19 14:17:08'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'hiiiii pujitha', 'sridevi', '2017-01-19 14:25:23'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'hii', 'sridevi', '2017-01-19 14:26:06'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'hi', 'sridevi', '2017-01-19 14:31:26'),
('13JG1A0543', '13JG2A501', 'vijaya', 'sridevi', 'hi', 'sridevi', '2017-01-19 14:38:38'),
('13JG1A0543', '13JG2A501', 'vijaya', 'sridevi', 'hii', 'sridevi', '2017-01-19 14:40:06'),
('13JG1A0543', '13JG2A501', 'vijaya', 'sridevi', 'hi\r\n', 'sridevi', '2017-01-19 14:40:28'),
('13JG1A0543', '13JG2A501', 'vijaya', 'sridevi', 'ela unav', 'sridevi', '2017-01-19 14:44:28'),
('13JG1A0543', '13JG2A501', 'vijaya', 'sridevi', 'chala rojulyndhi kadhaa', 'sridevi', '2017-01-19 14:44:42'),
('13JG1A0543', '13JG2A501', 'vijaya', 'sridevi', '', 'sridevi', '2017-01-19 14:52:56'),
('13JG1A0543', '13JG2A501', 'vijaya', 'sridevi', '', 'sridevi', '2017-01-19 14:52:56'),
('13JG1A0543', '13JG2A501', 'vijaya', 'sridevi', 'lets eat vijaya have a good sleep you have done well today ', 'sridevi', '2017-01-19 15:07:09'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'hii madam', 'pujitha', '2017-01-20 15:48:53'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'hello pujitha\r\n', 'sridevi', '2017-01-20 15:49:45'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'gud nyt\r\n', 'sridevi', '2017-01-20 15:50:15'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'gud mrng\r\n', 'sridevi', '2017-01-21 05:18:48'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'pujitha', 'sridevi', '2017-01-21 05:18:54'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'gud mrng madam', 'pujitha', '2017-01-21 05:19:31'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', '', 'pujitha', '2017-01-21 05:19:36'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', '', 'pujitha', '2017-01-21 05:19:50'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'gudmrng', 'sridevi', '2017-01-21 05:26:50'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'hello gud evng', 'sridevi', '2017-01-21 13:08:57'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'hello mam gud evng have a good snacks', 'sridevi', '2017-01-21 13:09:31'),
('13JG1A0574', '13JG2A0401', 'pujitha', 'Bharathi', 'hi', 'pujitha', '2017-01-22 04:33:37'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'Today all most I feel that project may be completed\r\n', 'pujitha', '2017-01-22 07:00:46'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'Good work pujitha complete it soon', 'pujitha', '2017-01-22 07:01:05'),
('13JG1A05B2', '13JG2A501', 'bhargavi', 'sridevi', 'hello mam how are you', 'sridevi', '2017-01-22 07:03:55'),
('13JG1A05B2', '13JG2A501', 'bhargavi', 'sridevi', 'yah Bhargavi I am fine', 'sridevi', '2017-01-22 07:04:06'),
('13JG1A05B2', '13JG2A501', 'bhargavi', 'sridevi', 'ok mam I am leaving byee', 'sridevi', '2017-01-22 07:04:13'),
('13JG1A05B2', '13JG2A501', 'bhargavi', 'sridevi', 'byee', 'sridevi', '2017-01-22 07:04:17'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'thank you mam', 'pujitha', '2017-01-22 08:09:42'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'hii', 'pujitha', '2017-01-22 11:08:00'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'hii\r\n', 'pujitha', '2017-01-22 11:08:27'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'helo', 'pujitha', '2017-01-22 11:09:16'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'hii', 'sridevi', '2017-01-22 11:11:52'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'hii\r\n', 'sridevi', '2017-01-22 11:12:02'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'gud evng\r\n', 'pujitha', '2017-01-22 11:14:29'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'gud evng', 'pujitha', '2017-01-22 11:14:42'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'gud evng', 'sridevi', '2017-01-22 11:15:27'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'gud evng', 'sridevi', '2017-01-22 11:15:33'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'hi', 'sridevi', '2017-01-22 11:21:04'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'hi', 'sridevi', '2017-01-22 11:21:09'),
('13JG1A0101', '13JG2A501', 'vijayalakshmi', 'sridevi', 'hai madam', 'vijayalakshmi', '2017-01-25 04:35:01'),
('13JG1A0101', '13JG2A501', 'vijayalakshmi', 'sridevi', 'this is vijayalakshmi\r\n', 'vijayalakshmi', '2017-01-25 04:35:27'),
('13JG1A0543', '13JG2A501', 'vijaya', 'sridevi', 'hai', 'sridevi', '2017-01-25 04:39:01'),
('13JG1A0543', '13JG2A501', 'vijaya', 'sridevi', 'hai', 'vijaya', '2017-01-25 04:40:49'),
('13JG1A0543', '13JG2A501', 'vijaya', 'sridevi', 'hello vijaya ', 'vijaya', '2017-01-25 04:40:58'),
('13JG1A0543', '13JG2A501', 'vijaya', 'sridevi', 'hai ', 'vijaya', '2017-01-25 04:41:28'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'today is saturday have a nice day mam', 'pujitha', '2017-01-28 02:21:53'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'gud mrng pujitha have a nice day for you too', 'sridevi', '2017-01-28 02:23:00'),
('13JG1A0574', '13JG2A501', 'pujitha', 'sridevi', 'thank you mam', 'sridevi', '2017-01-28 02:23:12');

-- --------------------------------------------------------

--
-- Table structure for table `fanswers`
--

CREATE TABLE `fanswers` (
  `question_id` int(4) NOT NULL,
  `a_id` int(4) NOT NULL,
  `a_name` varchar(65) NOT NULL,
  `a_answer` longtext NOT NULL,
  `a_date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fanswers`
--

INSERT INTO `fanswers` (`question_id`, `a_id`, `a_name`, `a_answer`, `a_date`) VALUES
(1, 1, 'pujitha', 'I am fine', '07/01/17'),
(2, 1, 'pujitha', 'good morning', '07/01/17'),
(2, 2, 'pujitha', 'It should be a long day', '07/01/17'),
(2, 3, 'lalitha', 'gud mrng', '21/01/17'),
(3, 1, 'pujitha', 'core cladding study in physics text book', '22/01/17'),
(4, 1, 'pujitha', 'switches are used to connect networks from one place to another', '28/01/17');

-- --------------------------------------------------------

--
-- Table structure for table `fquestions`
--

CREATE TABLE `fquestions` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nameid` varchar(50) NOT NULL,
  `deptname` varchar(10) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `date` varchar(100) NOT NULL,
  `view` int(4) NOT NULL DEFAULT '0',
  `reply` int(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fquestions`
--

INSERT INTO `fquestions` (`id`, `name`, `nameid`, `deptname`, `topic`, `detail`, `date`, `view`, `reply`) VALUES
(1, 'pujitha', '13JG1A0574', 'CSE', 'Hai', 'how are you', '07/01/17', 3, 1),
(2, 'pujitha', '13JG1A0574', 'CSE', 'Good morning', 'Hello all', '07/01/17', 11, 3),
(3, 'lalitha', '13JG1A05B6', 'CSE', 'optical fibre', 'Discuss about the layers in optical fibre', '21/01/17', 17, 1),
(4, 'vijayalakshmi', '13JG1A0101', 'IT', 'networking', 'Discuss about switch', '25/01/17', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_userslist`
--

CREATE TABLE `login_userslist` (
  `name` varchar(50) NOT NULL,
  `regmember` varchar(50) NOT NULL,
  `branch` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_userslist`
--

INSERT INTO `login_userslist` (`name`, `regmember`, `branch`) VALUES
('pujitha', 'student', 'CSE'),
('sridevi', 'faculty', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `register_table`
--

CREATE TABLE `register_table` (
  `name` varchar(50) NOT NULL,
  `nameid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `deptname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `regmember` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_table`
--

INSERT INTO `register_table` (`name`, `nameid`, `password`, `deptname`, `gender`, `regmember`) VALUES
('pujitha', '13JG1A0574', 'pujitha', 'CSE', 'female', 'student'),
('pujitha', '13JG1A0574', 'pujitha', 'CSE', 'female', 'student'),
('vijaya', '13JG1A0543', 'vijayalakshmi', 'CSE', 'female', 'student'),
('bhargavi', '13JG1A05B2', 'bharu', 'CSE', 'female', 'student'),
('vardana', '13JG1A0540', 'vardana', 'CSE', 'female', 'student'),
('', '', '', '', '', ''),
('joshna', '13JG1A0548', '13JG1A0548', 'IT', 'female', 'student'),
('sailu', '13JG1A0570', 'sailu', 'IT', 'female', 'student'),
('', '', '', '', '', ''),
('sridhar', '13JG2A0571', '', 'CSE', 'male', 'faculty'),
('', '', '', '', '', ''),
('admin', 'admin', 'admin', 'admin', 'male', 'admin'),
('sirisha', '13JG1A0566', 'siri', 'IT', 'female', 'student'),
('Bharathi', '13JG2A0401', 'bharathi', 'ECE', 'female', 'faculty'),
('sridevi', '13JG2A501', 'sridevi', 'CSE', 'female', 'faculty'),
('lalitha', '13JG1A05B6', 'lalitha5b6', 'CSE', 'female', 'student'),
('sudheer', '13JG2A0502', 'sudheer', 'CSE', 'male', 'faculty'),
('vijayalakshmi', '13JG1A0101', 'vijayalakshmi', 'IT', 'female', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fquestions`
--
ALTER TABLE `fquestions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fquestions`
--
ALTER TABLE `fquestions`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
