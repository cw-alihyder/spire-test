-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 19, 2023 at 01:20 AM
-- Server version: 10.5.18-MariaDB-0+deb11u1
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `address_line_1` varchar(400) DEFAULT NULL,
  `address_line_2` varchar(400) DEFAULT NULL,
  `city` varchar(400) DEFAULT NULL,
  `state` varchar(400) DEFAULT NULL,
  `zipcode` varchar(400) DEFAULT NULL,
  `address_format` varchar(400) DEFAULT 'standardized'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `address_line_1`, `address_line_2`, `city`, `state`, `zipcode`, `address_format`) VALUES
(1, '54510', '19323', '90735', 'California', '11949', 'standardized'),
(2, '54510', '19323', '90735', 'California', '11949', 'standardized'),
(3, '54510', '19323', '90735', 'California', '11949', 'standardized'),
(4, '54510', '19323', '90735', 'California', '11949', 'standardized'),
(5, '54510', '19323', '90735', 'California', '11949', 'standardized'),
(6, '19013', '78453', '64554', 'California', '21417', 'standardized');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
