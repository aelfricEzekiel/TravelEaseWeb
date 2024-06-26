-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2024 at 02:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

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
(18, 'Colin', 'Pampango', 'colin@gmail.com', 'colin', 'coli '),
(19, 'Donald', 'Trump', 'donald_trump@gmail.com', 'donald24', 'donald24'),
(20, 'Alexander', 'the Great', 'alexander@gmail.com', 'alexanderthegreat', 'alexanderthegreat'),
(21, 'Napoleon', 'Bonaparte', 'napoleon@gmail.com', 'napoleon', 'napoleon'),
(22, 'gabriel', 'limsiaco', 'limsiaco@gmail.com', 'limsiaco', 'limsiaco'),
(23, 'John Cris', 'Villahermosa', 'cris@gmail.com', 'cris', 'cris'),
(24, 'Joe', 'Biden', 'joebiden@gmail.com', 'joebiden', 'joebiden');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
