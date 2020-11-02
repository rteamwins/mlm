-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2020 at 09:16 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1mlmtree`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `joined_by` varchar(200) NOT NULL,
  `leg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `joined_by`, `leg`) VALUES
(2, 'abc', 'self', 'l'),
(3, 'def', 'abc', 'l'),
(4, 'feg', 'def', 'l'),
(5, 'fg', 'feg', 'l'),
(6, 'fdgfg', 'feg', 'l'),
(7, 'dfdf', 'fg', 'l'),
(8, 'dfd', 'abc', 'r'),
(9, 'df', 'abc', 'r'),
(10, 'dfdfdf', 'abc', 'l'),
(11, 'taohid', 'abc', 'l'),
(12, 'sdsd', 'taohid', 'l'),
(13, 'sdsds', 'taohid', 'l'),
(14, 'sdsdsds', 'taohid', 'l'),
(15, 'sds', 'sdsdsds', 'l'),
(16, 'sdsdsdssdsd', 'taohid', 'l'),
(17, 'ssd45454', 'sds', 'l'),
(18, 'dfdf4545', 'sdsdsdssdsd', 'l'),
(19, 'sds546546', 'taohid', 'l'),
(20, 'rtretre554', 'dfdf4545', 'l'),
(21, 'aslam', 'taohid', 'l'),
(22, 'ershad', 'aslam', 'l'),
(23, 'ajij', 'ershad', 'l'),
(24, 'adsd3243434', 'taohid', 'r'),
(25, 'sadfsd43', 'ajij', 'r'),
(26, 'asdsadsa34234', 'sdsd', 'r'),
(27, 'sdfsdf', 'taohid', 'r'),
(28, 'rehan', 'taohid', 'r'),
(29, 'farhan', 'rehan', 'r'),
(30, 'farhan2', 'farhan', 'l'),
(31, '1', 'abc', 'l'),
(32, '2', '1', 'l'),
(33, '3', '1', 'l'),
(34, '4', '1', 'r'),
(35, '6', '2', 'l'),
(36, '7', '2', 'l'),
(37, '8', '2', 'r'),
(38, '9', '2', 'r'),
(39, '10', '3', 'l'),
(40, '11', '3', 'l'),
(41, '12', '3', 'r'),
(42, '13', '3', 'r'),
(43, '14', '4', 'l'),
(44, '15', '4', 'l'),
(45, '16', '4', 'r'),
(46, '17', '4', 'r'),
(47, '5', '1', 'r'),
(48, '18', '5', 'l'),
(49, '19', '5', 'l'),
(50, '20', '5', 'r'),
(51, '21', '5', 'r');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
