-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2022 at 07:32 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knowme`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `adminname` varchar(33) NOT NULL,
  `email` varchar(33) NOT NULL,
  `password` varchar(33) NOT NULL,
  `mobile` varchar(33) NOT NULL,
  `address` varchar(55) NOT NULL,
  `profilepic` varchar(333) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminname`, `email`, `password`, `mobile`, `address`, `profilepic`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', '8088044402', 'ilkal Bagalkot', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(22) NOT NULL,
  `amobile` varchar(22) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` varchar(40) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pin` int(10) NOT NULL,
  `wapp` varchar(15) NOT NULL,
  `job` varchar(30) NOT NULL,
  `ano` int(30) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `userid`, `name`, `mobile`, `amobile`, `email`, `dob`, `gender`, `address`, `state`, `pin`, `wapp`, `job`, `ano`, `image`) VALUES
(3, 16, 'Sharanayya', '8088044402', '8660114487', 'hsharanayya@gmail.com', '2022-08-10', 'Male', 'ilkal Bagalkot  587125', 'Karnataka', 587205, '8088044402', 'Lecturer', 2147483647, '1015.jpg'),
(4, 19, 'Sharanayya', '2147483647', '2147483647', 'panchamukhi.cmkvy@gmail.com', '2022-08-04', 'Male', 'ilkal Bagalkot  587125', 'Jammu and Kashmir', 587205, '2147483647', 'Lecturer', 2147483647, 'img1.jpg'),
(5, 19, 'Sharanayya Hiremath', '8660114487', '8088044402', 'hsharanayya@gmail.com', '2022-08-11', 'Male', 'Khazibudihal', 'Karnataka', 587205, '8088044402', 'Lecturer', 2147483647, '1014.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL DEFAULT '',
  `cpassword` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `image` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `cpassword`, `dob`, `mobile`, `gender`, `address`, `image`) VALUES
(16, 'Sharanayya', 'devaraj@gmail.com', 'qwert', 'qwerty', '2022-08-18', '8088044402', 'Male', 'ilkal Bagalkot  587125', '1.jpg'),
(19, 'Sharanayya', 'abhay@gmail.com', 'asdf', 'asdf', '2022-08-03', '8088044402', 'Male', 'Khazibudihal', 'logo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
