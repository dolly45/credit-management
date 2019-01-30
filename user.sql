-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2019 at 02:02 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `trans_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `credit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`trans_id`, `sender_id`, `sender`, `receiver_id`, `receiver`, `credit`) VALUES
(1001, 1, 'Tiffaney Dunmore', 5, 'Baxter Rath', 200),
(1002, 6, 'Violet Plunkett', 5, 'Baxter Rath', 40),
(1003, 4, 'Christy Plunkett', 6, 'Violet Plunkett', 100),
(1004, 10, 'Rachel Greene', 9, 'Monica Geller', 100),
(1024, 7, 'Alvin Bing', 4, 'Christy Plunkett', 1000),
(1025, 6, 'Violet Plunkett', 4, 'Christy Plunkett', 200),
(1027, 11, 'Pheobe Buffay', 10, 'Rachel Greene', 1000),
(1028, 3, 'Richard Mister', 5, 'Baxter Rath', 40),
(1034, 4, 'Christy Plunkett', 5, 'Baxter Rath', 500);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_credit` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_credit`) VALUES
(1, 'Tiffaney Dunmore', 'tiff@gmail.com', '2000'),
(3, 'Richard Mister', 'richard@gmail.com', '1260'),
(4, 'Christy Plunkett', 'christy@gmail.com', '1900'),
(5, 'Baxter Rath', 'bax@gmail.com', '8997'),
(6, 'Violet Plunkett', 'vi@gmail.com', '2310'),
(7, 'Alvin Bing', 'alvin@gmail.com', '7452'),
(8, 'Bonnie Plunkett', 'bonnie@gmail.com', '902'),
(9, 'Monica Geller', 'mon@gmail.com', '4762'),
(10, 'Rachel Greene', 'rachel@gmail.com', '6441'),
(11, 'Pheobe Buffay', 'phebs@gmail.com', '2210');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`trans_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1035;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
