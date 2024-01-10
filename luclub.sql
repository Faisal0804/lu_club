-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2024 at 09:34 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `clublist`
--

CREATE TABLE `clublist` (
  `id` int(11) NOT NULL,
  `club_name` varchar(255) NOT NULL,
  `club_title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clublist`
--

INSERT INTO `clublist` (`id`, `club_name`, `club_title`, `image`) VALUES
(1, 'lucc', 'leading university computer club', ''),
(2, 'IEEE', 'leading university EEE', ''),
(3, 'lusc', 'leading university computer club', ' LUCC_logo.jpg'),
(4, 'lussc', 'leading university social service club', ' images/Infinity Mern.png'),
(5, 'lucc', 'leading university computer club', 'images/Infinity Laravel.png');

-- --------------------------------------------------------

--
-- Table structure for table `club_pst`
--

CREATE TABLE `club_pst` (
  `id` int(11) NOT NULL,
  `club_id` int(11) DEFAULT NULL,
  `desccription` varchar(5000) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `club_pst`
--

INSERT INTO `club_pst` (`id`, `club_id`, `desccription`, `image`) VALUES
(1, 1, '\r\n      An LUCC Student Branch provides opportunities to meet and learn from fellow LUCC Student and Graduate Student Members and engage with professional LUCC members locally.An active LUCC Student Branch can be one of the most positive elements of your academic career, offering programs, activities, and professional networking opportunities that build critical skills outside of the class.                                  ', 'images/blue green red independence day of bangladesh instagram post.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clublist`
--
ALTER TABLE `clublist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `club_pst`
--
ALTER TABLE `club_pst`
  ADD PRIMARY KEY (`id`),
  ADD KEY `club_id` (`club_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clublist`
--
ALTER TABLE `clublist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `club_pst`
--
ALTER TABLE `club_pst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `club_pst`
--
ALTER TABLE `club_pst`
  ADD CONSTRAINT `club_pst_ibfk_1` FOREIGN KEY (`club_id`) REFERENCES `clublist` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
