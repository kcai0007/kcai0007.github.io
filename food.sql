-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 30, 2022 at 09:49 AM
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
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `foodId` int(255) NOT NULL,
  `foodName` varchar(300) NOT NULL,
  `scientificName` varchar(300) NOT NULL,
  `foodGroup` varchar(300) NOT NULL,
  `foodSubGroup` varchar(300) NOT NULL,
  `foodColor` varchar(300) NOT NULL,
  `foodTaste` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foodId`, `foodName`, `scientificName`, `foodGroup`, `foodSubGroup`, `foodColor`, `foodTaste`) VALUES
(1, 'Apple', 'Malus pumila', 'Fruits', 'Pomes', 'Red', 'Sour and sweet'),
(10, 'Soy milk', 'Soy milk', 'milk', 'Drupes', 'white', 'Sour and sweet'),
(13, 'Asian pear', 'Pyrus pyrifolia', 'Fruits', 'Pomes', 'Light brown', 'Crisp and sweet'),
(17, 'Peeled banana', 'Musa acuminata', 'Fruits', 'Tropical fruits', 'white', 'Sweet'),
(20, 'Blackberry', 'Rubus', 'Fruits', 'Berries', 'Black', 'Sour and sweet'),
(25, 'Rice noodle', 'Rice noodle', 'cereal', 'Cabbages', 'white', 'Crisp and refreshing'),
(27, 'Stem of Chinese cabbage', 'Brassica oleracea var. capitata', 'Vegetables', 'Cabbages', 'white', 'Slightly sweet'),
(31, 'Carrot', 'Daucus carota ssp. sativus', 'Vegetables', 'Root vegetables', 'orange', 'Crisp and slightly sweet'),
(34, 'Cauliflowers', 'Brassica oleracea var. botrytis', 'Vegetables', 'Cabbages', 'white', 'Bitter'),
(40, 'Citrus', 'nan', 'Fruits', 'Citrus', 'orange', 'Sweet'),
(43, 'White fish', 'fish', 'meat', 'Tropical fruits', 'white', 'Light sweet'),
(48, 'Durian', 'Durio zibethinus', 'Fruits', 'Tropical fruits', 'Yellow', 'Smelly and sweet'),
(50, 'Peeled Eggplant', 'Solanum melongena', 'Vegetables', 'Fruit vegetables', 'white', 'Astringent'),
(55, 'Cooked salmon', 'Ficus carica', 'meat', 'Other fruits', 'orange', 'Mellow and sweet'),
(63, 'Orange cake', 'nan', 'cake', 'Berries', 'orange', 'Sour and bitter'),
(65, 'Grape', 'Vitis', 'Fruits', 'Berries', 'Purple', 'Sour and sweet'),
(67, 'Green apple', 'nan', 'Fruits', 'Pomes', 'Green', 'Sour and sweet'),
(70, 'Green onion', 'nan', 'Vegetables', 'Onion-family vegetables', 'Green', 'Spicy and crisp'),
(73, 'Guava', 'Psidium guajava', 'Fruits', 'Tropical fruits', 'Green', 'Sweet'),
(74, 'Hawthorn', 'Crataegus', 'Fruits', 'Berries', 'Red', 'Sour and sweet'),
(75, 'Jackfruit', 'Artocarpus heterophyllus', 'Fruits', 'Tropical fruits', 'Yellow', 'Sweet and refreshing'),
(82, 'Kiwi', 'Actinidia chinensis', 'Fruits', 'Tropical fruits', 'Brown and green', 'Sour and sweet'),
(87, 'Leek', 'Allium porrum', 'Vegetables', 'Onion-family vegetables', 'Green', 'Spicy and slightly bitter'),
(88, 'Lemon', 'Citrus limon', 'Fruits', 'Citrus', 'Yellow', 'Sour'),
(89, 'Lettuce', 'Lactuca sativa', 'Vegetables', 'Leaf vegetables', 'Green', 'Slightly sweet'),
(90, 'Lichee', 'Litchi chinensis', 'Fruits', 'Tropical fruits', 'Deep red and white', 'Sweet'),
(94, 'Longan', 'Dimocarpus longan', 'Fruits', 'Tropical fruits', 'Yellowish brown and white', 'Sweet'),
(95, 'Loquat', 'Eriobotrya japonica', 'Fruits', 'Tropical fruits', 'Yellow and orange', 'Sour and sweet'),
(97, 'Mango', 'Mangifera indica', 'Fruits', 'Tropical fruits', 'Yellow', 'Sweet and slightly astringent'),
(104, 'Mushroom', 'nan', 'Vegetables', 'Mushrooms', 'brown', 'Delicious'),
(109, 'Nectarine', 'Prunus persica var. nucipersica', 'Fruits', 'Drupes', 'Red or dark pink', 'Sweet and crunchy'),
(111, 'Okra', 'Abelmoschus esculentus', 'Vegetables', 'Other vegetables', 'Green', 'Refreshing'),
(112, 'Olive', 'Olea europaea', 'Vegetables', 'Fruit vegetables', 'Green', 'Bitter and sweet'),
(117, 'Papaya', 'Carica papaya', 'Fruits', 'Tropical fruits', 'Cyan and yellow', 'Sweet'),
(119, 'Pea shoots', 'nan', 'Vegetables', 'Leaf vegetables', 'Light yellow', 'Astringent and refreshing'),
(120, 'Peach', 'Prunus persica', 'Fruits', 'Drupes', 'Dark pink or red', 'Sweet and sour'),
(121, 'Pear', 'Pyrus communis', 'Fruits', 'Pomes', 'Yellow', 'Sweet'),
(122, 'Pepper', 'Capsicum annuum', 'Vegetables', 'Fruit vegetables', 'Black', 'Bitter and spicy'),
(124, 'Persimmon', 'Diospyros', 'Fruits', 'Tropical fruits', 'Orange', 'Sour and sweet'),
(125, 'Pineapple', 'Ananas comosus', 'Fruits', 'Tropical fruits', 'Yellow', 'Sweet and slightly astringent'),
(127, 'Pitaya', 'Hylocereus undatus', 'Fruits', 'Tropical fruits', 'Burgundy or white', 'Sweet'),
(129, 'Pomegranate', 'Punica granatum', 'Fruits', 'Tropical fruits', 'Red', 'Sour and sweet'),
(131, 'Potato', 'Solanum tuberosum', 'Vegetables', 'Tubers', 'Yellow and white', 'Refreshing'),
(133, 'Pummelo', 'Citrus maxima', 'Fruits', 'Citrus', 'Yellow and red', 'Sour and sweet'),
(141, 'Red onion', 'nan', 'Vegetables', 'Onion-family vegetables', 'Dark purple and red', 'Spicy and crisp with a hint of sweetness'),
(149, 'Shallot', 'Allium ascalonicum', 'Vegetables', 'Onion-family vegetables', 'Green and white', 'Spicy'),
(150, 'Shiitake', 'Lentinus edodes', 'Vegetables', 'Mushrooms', 'Dark brown', 'Tender and refreshing'),
(152, 'Sour orange', 'Citrus × aurantium', 'Fruits', 'Citrus', 'Yellow and orange', 'Sour'),
(155, 'Spinach', 'Spinacia oleracea', 'Vegetables', 'Leaf vegetables', 'Green', 'Slightly bitter and slightly sweet'),
(157, 'Strawberry', 'Fragaria X ananassa', 'Fruits', 'Berries', 'Red', 'Sweet and slightly sour'),
(161, 'Cherry', 'Prunus avium', 'Fruits', 'Drupes', 'Red', 'Sweet and sour'),
(162, 'Sweet orange', 'Citrus sinensis', 'Fruits', 'Citrus', 'Yellow and orange', 'Sweet'),
(165, 'Taro', 'Colocasia esculenta', 'Vegetables', 'Root vegetables', 'Dark brown and white', 'Sweet and crisp'),
(175, 'Yam', 'Dioscorea', 'Vegetables', 'Tubers', 'Dark brown and white', 'Sweet and sticky'),
(179, 'Cooked salmon', 'nan', 'meat', 'Citrus', 'orange', 'Sweet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`foodId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `foodId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
