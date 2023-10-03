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
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `id2` int(100) NOT NULL,
  `user_product_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `user_product_name` varchar(100) NOT NULL,
  `user_product_price` varchar(100) NOT NULL,
  `user_product_image` varchar(100) NOT NULL,
  `user_product_quantity` varchar(100) NOT NULL,
  `user_product_info` varchar(200) NOT NULL,
  `order_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_cart`
--

INSERT INTO `user_cart` (`id2`, `user_product_id`, `user_id`, `user_product_name`, `user_product_price`, `user_product_image`, `user_product_quantity`, `user_product_info`, `order_date`) VALUES
(95, 5, 16, 'Apple iPhone 11', '350', 'iphone4.jpeg', '1', 'Screen: FHD<br> - RAM: 6<br> - Memory: 512Gb<br> - Color: white', '2023-10-02 14:30:17'),
(96, 1, 16, 'Samsung a11', '250', 'samsung2.jpeg', '1', 'Screen: FHD<br> - RAM: 8<br> - Memory: 512GB<br> - Color: blue                                                                                                                                          ', '2023-10-02 14:30:36'),
(99, 1, 16, 'HEADPHONES E1 OFFER', '199', 'offers_01.png', '1', '', '2023-10-02 14:34:14');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(1, '1', '1@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, '2', '2@gmail.com', 'f3bb06607732c34aecec5683f27d2fcd'),
(15, '3', '3@gmail.com', 'a8ae104615cb4e966ddb435f3e575a02'),
(16, '4', '4@gmail.com', 'd10906c3dac1172d4f60bd41f224ae75'),
(17, '5', '5@gmail.com', '00c66aaf5f2c3f49946f15c1ad2ea0d3'),
(18, '6', '6@gmail.com', '8d70d8ab2768f232ebe874175065ead3'),
(19, '7', '7@gmail.com', 'c5fde9de2d29789a81d1bc0f16292048');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`id2`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `id2` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
