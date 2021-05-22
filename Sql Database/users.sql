-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 07:37 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `scr` int(11) NOT NULL,
  `username` varchar(51) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`scr`, `username`, `password`, `email`, `phone`, `address`, `dt`) VALUES
(1, 'lehar', '1234', 'lehar@gmail.com', '1234567', 'kishengarh', '2021-04-13 10:51:02'),
(24, 'khizar', 'baig', 'khizar@gmail.com', '12345678', 'saudi arabia', '2021-04-16 16:20:47'),
(26, 'atharv', 'nirvana', 'atharv@gmail.com', '12345678', 'vijay nagar', '2021-04-16 22:21:00'),
(27, 'naveena', 'patner', 'naveena@gmail.com', '12345678', 'guntur', '2021-04-20 22:56:54'),
(28, 'ishita', 'admin', 'ishita@gmail.com', '12345678', 'nanda nagar', '2021-04-20 22:59:55'),
(29, 'shivani', '12345', 'shivani@gmail.com', '12345678', 'subash nagar', '2021-04-28 20:21:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`scr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `scr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
