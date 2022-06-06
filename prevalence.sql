-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 06, 2022 at 03:19 AM
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
-- Table structure for table `prevalence`
--

CREATE TABLE `prevalence` (
  `pervalenceId` int(255) NOT NULL,
  `age_group` varchar(300) NOT NULL,
  `year2018` varchar(300) NOT NULL,
  `year2015` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prevalence`
--

INSERT INTO `prevalence` (`pervalenceId`, `age_group`, `year2018`, `year2015`) VALUES
(1, '0 to 4', '0.7', '0.4'),
(2, '5 to 9', '3.1', '2.8'),
(3, '10 to 14', '3.3', '2.8'),
(4, '15 to 19', '2.8', '0.8'),
(5, '20 to 24', '1.2', '1.2'),
(6, '25 to 29', '0.8', '0.7'),
(7, '30 to 34', '0.4', '0.3'),
(8, '35 to 39', '0.2', '0.2'),
(9, '40 years and over', '0.1', '0.1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prevalence`
--
ALTER TABLE `prevalence`
  ADD PRIMARY KEY (`pervalenceId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
