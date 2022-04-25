-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 04:16 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtest1`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE `course_details` (
  `c_id` int(11) NOT NULL,
  `c_no` varchar(255) NOT NULL,
  `s_no` varchar(255) NOT NULL,
  `d_no` varchar(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `CRN` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`c_id`, `c_no`, `s_no`, `d_no`, `c_name`, `descr`, `CRN`) VALUES
(1, '1', '2', '3', 'Intro to Information Systems', 'Introduces students to the world of Information Systems and all of the career pathways it allows students to follow', '30214'),
(2, '2', '1', '6', 'Intro to Computer Science', 'Introduces students to the world of Computer Science and all of it\'s career pathways', '30345'),
(3, '5', '6', '8', 'Intro to databases', 'Introduces students to Databases', '30568'),
(4, '10', '5', '8', 'Intro to Java Programming', 'Introduces students to the Java programming language', '30483'),
(5, '7', '9', '13', 'Intro to Cyber Security', 'Introduces students to concepts of Cyber Security', '30867'),
(6, '10', '16', '15', 'Intro to Networking', 'Introduces students to concepts in Networking and how communication systems operate ', '34715'),
(7, '15', '18', '17', 'Networking 2', 'Continues students through more concepts in Networking', '30216'),
(8, '20', '25', '16', 'Databases 2', 'Student\'s continue learning concepts about Databases', '30851');
-- --------------------------------------------------------

--
-- Table structure for table `course_term_assignment`
--

CREATE TABLE `course_term_assignment` (
  `c_id` int(11) NOT NULL,
  `term_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `avail_seats` varchar(255) NOT NULL,
  `timings` varbinary(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `max_strength` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `d_id` int(11) NOT NULL,
  `dname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pre_reg`
--

CREATE TABLE `pre_reg` (
  `prereg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `term_code`
--

CREATE TABLE `term_code` (
  `status` varchar(22) NOT NULL,
  `term_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `d_id` varchar(255) NOT NULL,
  `u_role` varchar(255) NOT NULL,
  `net_id` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`d_id`, `u_role`, `net_id`, `phone`, `email`, `firstname`, `lastname`, `gender`) VALUES
('CS', 'student', 'victor', '8100813300', 'oluwasusiv@gmail.com', 'Oluwasusi', 'Victor', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `c_id` int(11) NOT NULL,
  `net_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_course_enrolled`
--

CREATE TABLE `user_course_enrolled` (
  `c_id` int(11) NOT NULL,
  `net_id` int(11) NOT NULL,
  `term_id` int(11) NOT NULL,
  `estatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `u_role` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `net_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`u_role`, `name`, `username`, `net_id`, `password`, `salt_value`) VALUES
('', '', '', 'victor', '02f858c7add920394e54a9616c75076c78487317234185aa48398f84946fff66', 'bdb');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
