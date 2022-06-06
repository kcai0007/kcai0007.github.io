-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 30, 2022 at 09:51 AM
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
-- Table structure for table `art_museum`
--

CREATE TABLE `art_museum` (
  `museumId` int(255) NOT NULL,
  `museumName` varchar(300) NOT NULL,
  `museumType` varchar(300) NOT NULL,
  `museumAddress` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `art_museum`
--

INSERT INTO `art_museum` (`museumId`, `museumName`, `museumType`, `museumAddress`) VALUES
(1, 'ANCHORAGE CLAY ARTS GUILD', 'ART MUSEUM', 'PO BOX 241151'),
(2, 'ARC GALLERY', 'ART MUSEUM', '3211 PROVIDENCE DRIVE'),
(3, 'BUNNELL STREET GALLERY', 'ART MUSEUM', '106 W BUNNELL AVE'),
(4, 'CARR-GOTTSTEIN GALLERY', 'ART MUSEUM', '4101 UNIVERSITY DRIVE'),
(5, 'GARY L. FREEBURG ART GALLERY', 'ART MUSEUM', '3211 PROVIDENCE DRIVE'),
(6, 'INTERNATIONAL GALLERY OF CONTEMPORARY ARTS', 'ART MUSEUM', 'PO BOX 100239'),
(7, 'KIMURA GALLERY', 'ART MUSEUM', '3211 PROVIDENCE DRIVE'),
(8, 'KODIAK MARITIME MUSEUM AND ART CENTER', 'ART MUSEUM', 'PO BOX 1876'),
(9, 'NEW YORK ALASKA HOUSE', 'ART MUSEUM', '3806 N POINT CIR'),
(10, 'PRATT MUSEUM', 'ART MUSEUM', '3779 BARTLETT STREET'),
(11, 'STUDENT UNION GALLERY', 'ART MUSEUM', '3211 PROVIDENCE DRIVE'),
(12, 'ALABAMA FOLK ART MUSEUM', 'ART MUSEUM', '1731 1ST AVE N'),
(13, 'ALABAMA RIVER REGION ARTS CENTER', 'ART MUSEUM', '300 W TALLASSEE ST'),
(14, 'ALTAMONT SCHOOL', 'ART MUSEUM', '4801 ALTAMONT RD S'),
(15, 'AMERICAN SPORT ART MUSEUM AND ARCHIVES', 'ART MUSEUM', '1 ACADEMY DR'),
(16, 'ART GALLERIES AT UAH', 'ART MUSEUM', 'WILSON HALL 160 B'),
(17, 'ART GALLERY', 'ART MUSEUM', 'STATION 6001'),
(18, 'BARE HANDS GALLERY', 'ART MUSEUM', 'PO BOX 13961'),
(19, 'BIRMINGHAM MUSEUM OF ART', 'ART MUSEUM', '2000 8TH AVENUE NORTH'),
(20, 'CALHOUN FINE ARTS GALLERY', 'ART MUSEUM', '6250 HWY. 31 NORTH'),
(21, 'CALHOUN FINE ARTS GALLERY', 'ART MUSEUM', '102 WYNN DR NW'),
(22, 'CHOCTAW COUNTY HISTORICAL MUSEUM', 'ART MUSEUM', '2842 ARARAT ROAD'),
(23, 'CHURCH GALLERY', 'ART MUSEUM', '301 SPARKMAN DR'),
(24, 'COLEMAN CENTER FOR THE ARTS', 'ART MUSEUM', '630 AVENUE A ST'),
(25, 'DURBIN GALLERY', 'ART MUSEUM', '900 ARKADELPHIA ROAD'),
(26, 'EAST ALABAMA ARTISTS', 'ART MUSEUM', 'PO BOX 443'),
(27, 'EASTERN SHORE ART ASSOCIATION', 'ART MUSEUM', '401 OAK AVE'),
(28, 'EICHOLD GALLERY', 'ART MUSEUM', '4000 DAUPHIN ST'),
(29, 'FAYETTE ART MUSEUM', 'ART MUSEUM', '530 TEMPLE AVENUE NORTH'),
(30, 'GADSDEN MUSEUM OF ART', 'ART MUSEUM', '2829 W MEIGHAN BLVD'),
(31, 'GADSDEN MUSEUM OF FINE ARTS', 'ART MUSEUM', '515 BROAD STREET'),
(32, 'HAMMOND HALL GALLERY', 'ART MUSEUM', '700 PELHAM ROAD NORTH'),
(33, 'HEART GALLERY OF ALABAMA', 'ART MUSEUM', '716 37TH ST S'),
(34, 'ISABEL ANDERSON COMER MUSEUM & ARTS CENTER', 'ART MUSEUM', 'PO BOX 245'),
(35, 'JAN DEMPSEY ARTS CENTER', 'ART MUSEUM', '222 E DRAKE AVE'),
(36, 'JULE COLLINS SMITH MUSEUM OF FINE ARTS', 'ART MUSEUM', '901 SOUTH COLLEGE STREET'),
(37, 'KENTUCK ART CENTER & MUSEUM', 'ART MUSEUM', '503 MAIN AVE'),
(38, 'LBWCC ART GALLERY', 'ART MUSEUM', '1000 DANNELLY BLVD'),
(39, 'MALONE GALLERY OF FINE ART', 'ART MUSEUM', 'UNIVERSITY AVENUE'),
(40, 'Ainslie Arts Centre', 'ART MUSEUM', 'Elouera Street, BRADDON ACT 2612'),
(41, 'Gorman House Arts Centre', 'ART MUSEUM', 'Ainslie Avenue, BRADDON ACT 2612'),
(42, 'Watson Arts Centre', 'ART MUSEUM', '1 Aspinall Street, WATSON ACT 2602'),
(43, 'Belconnen Arts Centre', 'ART MUSEUM', '118 Emu Bank, BELCONNEN ACT 2617'),
(44, 'Manuka Arts Centre', 'ART MUSEUM', 'Corner of NSW Crescent and Manuka Circle, GRIFFITH ACT 2603'),
(45, 'Tuggeranong Arts Centre', 'ART MUSEUM', '137 Reed Street, GREENWAY ACT 2901'),
(46, 'Canberra Contemporary Art Space', 'ART MUSEUM', '19 Furneaux Street, FORREST ACT 2603'),
(47, 'Strathnairn', 'ART MUSEUM', '90 Stockdill Drive, BELCONNEN ACT 2615'),
(48, 'Canberra Glassworks', 'ART MUSEUM', '11 Wentworth Avenue, Kingston ACT 2604'),
(49, 'The Street Theatre', 'ART MUSEUM', 'Corner of Childers Street and University Avenue, ACTON ACT 2601'),
(50, 'Canberra Glassworks Chapel', 'ART MUSEUM', '11 Wentworth Avenue, Kingston ACT 2604 '),
(51, 'Ian Potter Centre: NGV Australia', 'ART MUSEUM', 'Federation Square, Swanston St, Melbourne, Victoria 3000, Australia'),
(52, 'Melbourne Museum', 'ART MUSEUM', '11 Nicholson St, Carlton VIC 3053, Australia'),
(53, 'Scienceworks', 'ART MUSEUM', '2 Booker St, Spotswood VIC 3015, Australia'),
(54, 'Immigration Museum', 'ART MUSEUM', '400 Flinders St, Melbourne VIC 3000, Australia'),
(55, 'Victoria Police Museum', 'ART MUSEUM', '313 Spencer St, Docklands VIC 3008, Australia'),
(56, 'Bunjilaka Aboriginal Cultural Centre', 'ART MUSEUM', '11 Nicholson St, Melbourne, Victoria 3053, Australia'),
(57, 'Arts Centre Melbourne', 'ART MUSEUM', '100 St Kilda Road, Southbank Victoria 3006, Australia'),
(58, 'Gasworks Arts Park', 'ART MUSEUM', '21 Graham Street, Albert Park Victoria 3206, Australia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `art_museum`
--
ALTER TABLE `art_museum`
  ADD PRIMARY KEY (`museumId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `art_museum`
--
ALTER TABLE `art_museum`
  MODIFY `museumId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
