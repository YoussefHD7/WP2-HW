-- phpMyAdmin SQL Dump
-- version 6.0.0-dev+20230929.1cde51cf70
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2023 at 11:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

CREATE TABLE `cart_item` (
  `id` int(4) NOT NULL,
  `name` varchar(55) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(200) NOT NULL,
  `info` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_item`
--

INSERT INTO `cart_item` (`id`, `name`, `price`, `image`, `info`) VALUES
(1, 'Samsung a11', 250, 'samsung2.jpeg', 'Screen: FHD<br> - RAM: 8<br> - Memory: 512GB<br> - Color: blue                                                                                                                                          '),
(2, 'Samsung a50', 360, 'samsung4.jpeg', 'Screen: FHD<br> - RAM: 6,8<br> - Memory: 1Tb<br> - Color: white'),
(3, 'Apple iPhone 13', 400, 'iphone3.jpeg', 'Screen: FHD<br> - RAM: 6<br> - Memory: 1Tb<br> - Color: blue'),
(4, 'Apple iPhone 14', 450, 'iphone6.jpeg', 'Screen: FHD<br> - RAM: 6,8<br> - Memory: 1Tb<br> - Color: red'),
(5, 'Apple iPhone 11', 350, 'iphone4.jpeg', 'Screen: FHD<br> - RAM: 6<br> - Memory: 512Gb<br> - Color: white'),
(6, 'Apple iPhone 12', 360, 'iphone5.jpeg', 'Screen: FHD<br> - RAM: 6<br> - Memory: 512Gb<br> - Color: blue'),
(7, 'Headphone-e1', 250, 'headphone1.jpeg', 'Material : Leather<br> -Noise Cancelling<br> -Jak : 3.5mm<br> -Color : white                    '),
(8, 'Headphone-e2', 300, 'headphone3.jpeg', 'Material : Leather<br> -Noise Cancelling<br> -Jak : 4.5mm<br> -Color : yellow'),
(9, 'Headphone-b1', 250, 'headphone6.jpeg', 'Material : blastic<br> -Noise Cancelling<br> -Jak : 2.5mm<br> -Color : white'),
(10, 'Headphone-b1', 275, 'headphone7.jpeg', 'Material : blastic<br> -Noise Cancelling<br> -Jak : 3.5mm<br> -Color : white'),
(11, 'Headphone-be1', 300, 'headphone9.jpeg', 'Material : blastic<br> -Noise Cancelling<br> -Jak : 3.5mm<br> -Color : blue'),
(12, 'Headphone-b1', 275, 'headphone12.jpeg', 'Material : leather<br> -Noise Cancelling<br> -Jak : 3.5mm<br> -Color : black');

-- --------------------------------------------------------

--
-- Table structure for table `offers_item`
--

CREATE TABLE `offers_item` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `old_price` int(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `info` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offers_item`
--

INSERT INTO `offers_item` (`id`, `name`, `price`, `old_price`, `image`, `info`) VALUES
(1, 'HEADPHONES E1 OFFER', 199, 300, 'offers_01.png', 'Material : Leather<br> -Noise Cancelling<br> -Jak : 3.5mm<br> -Color : white'),
(2, 'HEADPHONES E3 OFFER', 210, 250, 'headphone3.jpeg', 'Material : Leather<br> -Noise Cancelling<br> -Jak : 3.5mm<br> -Color : Yellow'),
(3, 'SAMSUNG A4 OFFER', 225, 250, 'samsung4.jpeg', 'Screen: FHD<br> - RAM: 6<br> - Memory: 1Tb<br> - Color: white'),
(4, 'SAMSUNG A2 OFFER', 225, 250, 'offers_02.jpeg', 'Screen: FHD<br> - RAM: 6<br> - Memory: 1Tb<br> - Color: blue');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers_item`
--
ALTER TABLE `offers_item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `offers_item`
--
ALTER TABLE `offers_item`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
