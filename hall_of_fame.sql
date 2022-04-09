-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 11:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mathgame`
--

-- --------------------------------------------------------

--
-- Table structure for table `hall_of_fame`
--

CREATE TABLE `hall_of_fame` (
  `ID` int(11) NOT NULL,
  `Username` varchar(100) DEFAULT NULL,
  `Score` int(11) DEFAULT NULL,
  `Tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hall_of_fame`
--

INSERT INTO `hall_of_fame` (`ID`, `Username`, `Score`, `Tanggal`) VALUES
(5, 'Jeanne', 124, '2022-04-09 11:12:33'),
(7, 'Rubby', 74, '2022-04-09 11:19:29'),
(11, 'Sheila', 44, '2022-04-09 11:39:16'),
(12, 'Kenzo', 64, '2022-04-09 11:40:47'),
(14, 'Kenzo', 94, '2022-04-09 11:41:34'),
(15, 'Matthew', 74, '2022-04-09 11:43:12'),
(16, 'Naomi', 64, '2022-04-09 11:44:16'),
(17, 'John', 34, '2022-04-09 11:45:00'),
(18, 'Thomas', 34, '2022-04-09 11:45:38'),
(19, 'Amy', 4, '2022-04-09 11:46:59'),
(20, 'Jesse', 174, '2022-04-09 11:48:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hall_of_fame`
--
ALTER TABLE `hall_of_fame`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hall_of_fame`
--
ALTER TABLE `hall_of_fame`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
