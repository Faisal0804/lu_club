-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2024 at 10:41 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
  `image` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clublist`
--

INSERT INTO `clublist` (`id`, `club_name`, `club_title`, `image`) VALUES
(7, 'LUSSC', 'Leading University Social Service Club', 'images/logo_lussc.jpg'),
(8, 'LUCuC', 'Leading University Cultural Club', 'images/logo_lucc(culture).jpg'),
(9, 'ieee', 'Institute of Electrical and Electronics Engineers', 'images/logo_ieee.png');

-- --------------------------------------------------------

--
-- Table structure for table `club_activities`
--

CREATE TABLE `club_activities` (
  `id` int(11) NOT NULL,
  `club_id` int(11) DEFAULT NULL,
  `activity_title` varchar(255) DEFAULT NULL,
  `activity_description` varchar(5000) DEFAULT NULL,
  `activity_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `club_activities`
--

INSERT INTO `club_activities` (`id`, `club_id`, `activity_title`, `activity_description`, `activity_image`) VALUES
(8, 7, 'Fruit Sharing', 'A well-wisher of Leading University Social Services Club and with the joint funding of the club distributed fruits among 100 orphans of government children\'s families in Bagbari.\r\n                                        ', 'images/activity1.jpg'),
(15, 8, 'ভাষাশহীদদের শ্রদ্ধাঞ্জলি', 'আজ ২১শে ফেব্রুয়ারি আন্তর্জাতিক মাতৃভাষা দিবস উপলক্ষে লিডিং ইউনিভার্সিটি শহীদ মিনার প্রাঙ্গণে পুষ্পস্তবক অর্পণ এবং ভাষাশহীদদের প্রতি শ্রদ্ধাঞ্জলি প্রদর্শনে লিডিং ইউনিভার্সিটি কালচারাল ক্লাব পরিবার।\r\n                                        ', 'images/activity2.jpeg'),
(16, 8, 'মৃত্যু বার্ষিকীতে শ্রদ্ধাঞ্জলী', 'মহীয়সী নারী এবং লিডিং ইউনিভার্সিটির সহপ্রতিষ্ঠাতা বেগম রাবেয়া খাতুন চৌধুরীর ষোড়শতম মৃত্যু বার্ষিকীতে শ্রদ্ধাঞ্জলী এবং পুষ্পস্তপক অর্পণে লিডিং ইউনিভার্সিটি কালচারাল ক্লাব পরিবার।\r\n                                        ', 'images/activity1.jpeg'),
(17, 8, 'ইফতার মাহফিল', 'পবিত্র মাহে রমজান উপলক্ষে ১৬/৪/২০২৩ তারিখে লিডিং ইউনিভার্সিটি কালচারাল ক্লাব কর্তৃক আয়োজিত ইফতার মাহফিল।মাহফিলে উপস্থিত ছিলেন ক্লাবের উপদেষ্টা শাম্মী আক্তার ম্যাম।\r\n                                        ', 'images/activity3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `club_event`
--

CREATE TABLE `club_event` (
  `id` int(11) NOT NULL,
  `club_id` int(11) DEFAULT NULL,
  `event_title` varchar(255) DEFAULT NULL,
  `event_image` varchar(255) DEFAULT NULL,
  `event_start_date` date DEFAULT NULL,
  `event_end_date` date DEFAULT NULL,
  `event_start_time` time DEFAULT NULL,
  `event_end_time` time DEFAULT NULL,
  `event_description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `club_event`
--

INSERT INTO `club_event` (`id`, `club_id`, `event_title`, `event_image`, `event_start_date`, `event_end_date`, `event_start_time`, `event_end_time`, `event_description`) VALUES
(4, 8, 'Fusion Of Soul', 'images/event2.png', '2024-10-12', '2024-02-22', '10:00:00', '00:00:00', 'Leading University Cultural Club is going to organize a cultural fest for the first time, in the name of \" Fusion Of Souls \", at Leading University Premises.\r\n                                        ');

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
(2, 9, 'An IEEE Student Branch provides opportunities to meet and learn from fellow IEEE Student and Graduate Student Members and engage with professional IEEE members.\r\n                                        ', 'images/about3.png'),
(3, 7, 'An organization which provide services to needy people around our society. The main motive of this club is to provide help to the people who are really need help to survive. Alo school is an institute of homeless children which get huge services from LUSSC.                               ', 'images/about3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `club_team`
--

CREATE TABLE `club_team` (
  `id` int(11) NOT NULL,
  `club_id` int(11) DEFAULT NULL,
  `member_name` varchar(255) DEFAULT NULL,
  `member_designation` varchar(255) DEFAULT NULL,
  `member_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `club_team`
--

INSERT INTO `club_team` (`id`, `club_id`, `member_name`, `member_designation`, `member_image`) VALUES
(2, 8, 'sfvz', 'vbcb', 'images/activity3.jpeg'),
(3, 8, 'dhrrs', 'sge', 'images/event11.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clublist`
--
ALTER TABLE `clublist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `club_activities`
--
ALTER TABLE `club_activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `club_id` (`club_id`);

--
-- Indexes for table `club_event`
--
ALTER TABLE `club_event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `club_id` (`club_id`);

--
-- Indexes for table `club_pst`
--
ALTER TABLE `club_pst`
  ADD PRIMARY KEY (`id`),
  ADD KEY `club_id` (`club_id`);

--
-- Indexes for table `club_team`
--
ALTER TABLE `club_team`
  ADD PRIMARY KEY (`id`),
  ADD KEY `club_id` (`club_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clublist`
--
ALTER TABLE `clublist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `club_activities`
--
ALTER TABLE `club_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `club_event`
--
ALTER TABLE `club_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `club_pst`
--
ALTER TABLE `club_pst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `club_team`
--
ALTER TABLE `club_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `club_activities`
--
ALTER TABLE `club_activities`
  ADD CONSTRAINT `club_activities_ibfk_1` FOREIGN KEY (`club_id`) REFERENCES `clublist` (`id`);

--
-- Constraints for table `club_event`
--
ALTER TABLE `club_event`
  ADD CONSTRAINT `club_event_ibfk_1` FOREIGN KEY (`club_id`) REFERENCES `clublist` (`id`);

--
-- Constraints for table `club_pst`
--
ALTER TABLE `club_pst`
  ADD CONSTRAINT `club_pst_ibfk_1` FOREIGN KEY (`club_id`) REFERENCES `clublist` (`id`);

--
-- Constraints for table `club_team`
--
ALTER TABLE `club_team`
  ADD CONSTRAINT `club_team_ibfk_1` FOREIGN KEY (`club_id`) REFERENCES `clublist` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
