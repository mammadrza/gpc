-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2020 at 08:21 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gpc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `type`) VALUES
(1, 'student'),
(2, 'nonstudent');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `user_education` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `user_education`) VALUES
(1, 'Bachelor\'s'),
(2, 'Master\'s'),
(3, 'Ph.D.');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` int(11) NOT NULL,
  `user_gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `user_gender`) VALUES
(1, 'men'),
(2, 'women');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `birthday_date` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `university_name` varchar(255) DEFAULT NULL,
  `education` varchar(50) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `work_status` varchar(255) DEFAULT NULL,
  `cv` varchar(255) NOT NULL,
  `user_member` varchar(255) NOT NULL,
  `register_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `surname`, `gender`, `birthday_date`, `email`, `phone`, `address`, `type`, `university_name`, `education`, `company_name`, `work_status`, `cv`, `user_member`, `register_date`) VALUES
(4, 'samir', 'Abbasov', 'men', '0012-12-12', 'x_man555@mail.ru', '+99455 222 33 44', 'baku', 'student', 'anadolu', 'Bachelor\'s', '', '', '9e576a06c73367886b5d2d19bcae6285.jpg', 'member', '2020-08-08 23:17:37'),
(5, 'samir1', 'Abbasov1', 'women', '0012-12-12', 'x_man555@mail.ru1', '+99455 222 33 441', 'baku1', 'nonstudent', '', '', 'Sefco', 'Manager', '30904f40b5be043e861de73aed3b5b9e.jpg', 'volunteer', '2020-08-08 23:18:54'),
(6, 'Mahir', 'dsdsd', 'men', '1212-12-12', 'x_man555@mail.ru', '12121', 'baku3', 'student', 'anadolu', 'Bachelor\'s', '', '', 'b2e9c57da923ad48a172ec2a393301f6.jpg', 'member', '2020-08-08 23:25:09'),
(7, 'Mahirqqq', 'Abbasovaaa', 'women', '1212-02-01', 'x_man555@mail.ru', '12121', 'baku22', 'nonstudent', '', '', 'Sefco', 'Manager', '2dd93a41beb1f44088c6bcfaae72c955.jpg', 'member', '2020-08-08 23:27:44'),
(8, 'samir', 'Valiyevs', 'men', '0012-12-12', 'x_man555@mail.ru', '12121', 'baku', 'student', 'anadolu', 'Bachelor\'s', '', '', '1551defa0a812432e4e2b7ad486b6357.pdf', 'volunteer', '2020-08-08 23:51:52');

-- --------------------------------------------------------

--
-- Table structure for table `select_member`
--

CREATE TABLE `select_member` (
  `id` int(11) NOT NULL,
  `user_member` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `select_member`
--

INSERT INTO `select_member` (`id`, `user_member`) VALUES
(1, 'member'),
(2, 'volunteer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `select_member`
--
ALTER TABLE `select_member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `select_member`
--
ALTER TABLE `select_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
