-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2024 at 09:35 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelease`
--

-- --------------------------------------------------------

--
-- Table structure for table `tourist_account`
--

CREATE TABLE `tourist_account` (
  `id` int(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tourist_account`
--

INSERT INTO `tourist_account` (`id`, `firstName`, `lastName`, `email`, `password`, `confirm_password`) VALUES
(1, 'aelfric', 'amor', 'aelfric@gmail.com', 'aelfric', 'aelfric'),
(2, 'dadadsaddadadas', 'dsada', 'dsadad@gmail.com', 'qeqe', 'weqe'),
(3, '32312waaasd/sd/fs', 'asdadda/d', 'sam@gmail.com', 'sam', 'sam'),
(4, 'Gabriel', 'Limsiaco', 'gabriel_limsiaco@gmail.com', 'gabriel', 'gabriel'),
(5, 'gab', 'Limsiaco', 'limsiaco@gmail.com', 'gab', 'gab'),
(6, 'ga', 'Limsiaco', 'lim@gmail.com', 'lim', 'lim');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tourist_account`
--
ALTER TABLE `tourist_account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tourist_account`
--
ALTER TABLE `tourist_account`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
