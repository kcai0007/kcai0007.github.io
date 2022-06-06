-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 30, 2022 at 09:38 AM
-- Server version: 10.3.34-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitnami_wordpress`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_recommendation`
--

CREATE TABLE `food_recommendation` (
  `recommendationId` int(255) NOT NULL,
  `recommendationName` varchar(300) NOT NULL,
  `recommendationGroup` varchar(300) NOT NULL,
  `recommendationDegree` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food_recommendation`
--

INSERT INTO `food_recommendation` (`recommendationId`, `recommendationName`, `recommendationGroup`, `recommendationDegree`) VALUES
(1, 'Potato', 'Vegetables', '80%'),
(2, 'Carrot', 'Vegetables', '63%'),
(3, 'Banana', 'Fruits', '71%'),
(4, 'Apple', 'Fruits', '67%'),
(5, 'Date', 'Fruits', '55%'),
(6, 'Mango', 'Fruits', '58%'),
(7, 'Pomegranate', 'Fruits', '52%');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food_recommendation`
--
ALTER TABLE `food_recommendation`
  ADD PRIMARY KEY (`recommendationId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food_recommendation`
--
ALTER TABLE `food_recommendation`
  MODIFY `recommendationId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
