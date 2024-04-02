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
-- Table structure for table `book_hotel`
--

CREATE TABLE `book_hotel` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hotel` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `price` int(255) NOT NULL,
  `people` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_hotel`
--

INSERT INTO `book_hotel` (`id`, `first_name`, `last_name`, `email`, `hotel`, `start_date`, `end_date`, `price`, `people`) VALUES
(34, 'ihioq', 'wqeq', 'wdsa@gmail.com', 'Kingsford Hotel', '2024-03-30', '2024-04-02', 2200, 3),
(35, 'dsad', 'sadsa', 'dsa@gmail.com', 'The Piccolo Hotel', '2024-03-30', '2024-04-01', 4400, 3),
(36, 'sadsa', 'dsada', 'sada@gmail.com', 'Kingsford Hotel', '2024-03-30', '2024-04-01', 4400, 3),
(37, 'asdsad', 'dsadsa', 'dasdadsad@gmail.com', 'Pontefino Hotel and Residences', '2024-03-30', '2024-04-10', 2200, 1),
(38, 'mark', 'zuckerberg', 'mark_zuckerberg@gmail.com', 'Casa Aguelo', '2024-03-30', '2024-04-02', 1870, 2),
(39, 'cc', 'asd', 'dsad@gmail.com', 'Hotel Veneto de Vigan', '2024-03-30', '2024-04-01', 1770, 2),
(40, 'sadad', 'dsadadad', 'dasdad@gmail.com', 'Pontefino Hotel and Residences', '2024-03-30', '2024-04-02', 1770, 2),
(41, 'wqdq', 'ddasd', 'dsa@gmail.com', 'Hang Loose Hotel', '2024-03-30', '2024-04-02', 1770, 3),
(42, 'sadd', 'dsadad', 'dadas@gmail.com', 'Kingsford Hotel', '2024-03-30', '2024-04-01', 1250, 4),
(43, 'Axxz', 'aSASS', 'ssa@gmail.com', 'Hang Loose Hotel', '2024-03-31', '2024-04-02', 3120, 4),
(44, 'sadsad', 'asdsada', 'asdsa@gmail.com', 'MO2 Westown Lagoon', '2024-03-31', '2024-04-01', 2200, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_hotel`
--
ALTER TABLE `book_hotel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_hotel`
--
ALTER TABLE `book_hotel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
