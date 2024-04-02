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
-- Table structure for table `bookplace`
--

CREATE TABLE `bookplace` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bookPlace` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `bookPrice` int(255) NOT NULL,
  `people` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookplace`
--

INSERT INTO `bookplace` (`id`, `first_name`, `last_name`, `email`, `bookPlace`, `start_date`, `end_date`, `bookPrice`, `people`) VALUES
(59, 'gabriel', 'limsiaco', 'gabriel@gmail.com', 'Mt. Pulag', '2024-03-30', '2024-03-31', 290, 3),
(60, 'unique', 'salonga', 'unique@gmail.com', 'Mt. Pulag', '2024-03-31', '2024-04-02', 220, 3),
(61, 'dsfsd', 'sfsd', 'sdds@gmail.com', 'Calle Crisologo', '2024-03-30', '2024-03-31', 1120, 4),
(62, 'taylor', 'swift', 'taylor@gmail.com', 'Calle Crisologo', '2024-03-30', '2024-04-02', 1120, 2),
(63, 'fsdsdf', 'sdasas', 'sadsa@gmail.com', 'Kawasan Falls', '2024-03-30', '2024-04-01', 290, 3),
(64, 'colin', 'pampango', 'colin@gmail.com', 'Kawasan Falls', '2024-03-30', '2024-03-31', 290, 3),
(65, 'adsad', 'sadaS', 'SFD@gmail.com', 'Coron Island', '2024-03-30', '2024-04-01', 290, 3),
(66, 'aelfric', 'amor', 'aelfric@gmail.com', 'Coron Island', '2024-03-30', '2024-04-01', 290, 3),
(67, 'sadaddsad', 'dadaasdasd', 'dasdsadas@gmail.com', 'Coron Island', '2024-03-30', '2024-04-01', 320, 4),
(68, 'ada', 'dsada', 'dasd@gmail.com', 'Calle Crisologo', '2024-03-30', '2024-03-30', 220, 3),
(69, 'asdsad', 'dsad', 'dsad@gmail.com', 'Siargao Island', '2024-04-01', '2024-04-05', 560, 4),
(70, 'dsad', 'sadas', 'dsada@gmail', 'Taal Volcano', '2024-03-31', '2024-04-01', 320, 2),
(71, 'sada', 'wqqqwe', 'asas@gmail.com', 'Siargao Island', '2024-03-31', '2024-04-03', 220, 4),
(72, 'asSsa', 'SADSADAD', 'DSADADA@GMAIL.COM', 'Taal Volcano', '2024-04-02', '2024-04-03', 290, 5),
(73, 'Gabriel', 'Limsiaco', 'limsiaco@gmail.com', 'Boracay Island', '2024-04-01', '2024-04-05', 520, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookplace`
--
ALTER TABLE `bookplace`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookplace`
--
ALTER TABLE `bookplace`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
