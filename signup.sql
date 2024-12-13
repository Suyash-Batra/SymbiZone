-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2024 at 08:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `id`
--

CREATE TABLE `id` (
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `descr` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `price`, `image`, `link`, `descr`) VALUES
(1, 'Apple Mobile Earphone', '1,699', 'image18', 'ear', 'APPLE EarPods with Lightning Connector Wired Headset (White)'),
(2, 'S3 Wireless Headset', '29,900', 'image1', 'S3', 'STAX Spirit S3 Wireless Planar Magnetic Headphone Bluetooth\r\n              Headset'),
(3, 'HP EliteBook 640', '90,000', 'image3', 'Hp', 'HP Elitebook Core i5 8th Gen Intel® UHD Graphics 640'),
(4, 'FIRE-BOLTT Cyclone', '1,999', 'image4', 'fire', 'Fire-Boltt Cyclone 1.6\'\' Round Premium Display (Black Strap,\r\n              Onesize)'),
(5, 'iFFALCON S53 TV', '7,999', 'image5', 'contv', 'iFFALCON by TCL 80.04 cm (32 inch) HD Ready LED Smart Android TV'),
(6, 'Titan Smart 2', '5,995', 'image6', 'titan', 'Titan Smart 2 with 1.78 AMOLED Display & Premium Metal Body'),
(7, 'Apple iPhone 15 Pro Max', '1,27,999', 'image7', 'iphone', 'APPLE iPhone 15 Pro Max (Black Titanium, 256 GB)'),
(8, 'Mi QLED TV 75', '1,29,999', 'image8', 'mitv', 'Mi Q1 189.34 cm (75 inch) QLED Ultra HD (4K) Smart Android TV 4K\r\n              QLED'),
(9, 'Asus ROG Strix G513RC', '84,990', 'image16', 'asus', ' ASUS ROG Strix G15 Ryzen 7 (16 GB/512 GB SSD)'),
(10, 'Gear S3 Samsung', '26,660', 'image20', 'gear', 'SAMSUNG Gear S3 - Frontier (Black Strap, Regular)'),
(11, 'Ideapad Gaming 3i', '64,490', 'image14', 'idepad', 'Lenovo IdeaPad Gaming 3i Intel Core i5 10th Gen 10300H (8 GB/1 TB\r\n              HDD)'),
(12, 'Galaxy S23 Ultra', '1,24,999', 'image13', 'S23', 'SAMSUNG Galaxy S23 Ultra 5G (256 GB ROM) (12 GB RAM)'),
(13, 'Xiaomi 12 Pro 5G', '41,999', 'image9', 'xio', 'Xiaomi 12 Pro 5G (Noir Black, 256 GB) (12 GB RAM)'),
(14, 'H11 Ultra Plus', '7,099', 'image10', 'h11', 'H11 ultra Plus IWOs Watch 45MM Smart Watch Series 8'),
(15, 'READY STOCK B39', '42,450', 'image11', 'ready', 'B39 Wireless Headset Bluetooth 5.0 LED Bass Stereo Wireless\r\n              Headphones'),
(16, 'TCL 108cm', '28,990', 'image12', 'roku', 'TCL C645 108 cm (43 inch) QLED Ultra HD (4K) Smart Google TV'),
(17, 'Vivo Y73', '17,999', 'image2', 'vivo', 'Vivo Y73 (Diamond Flare, 128 GB) (8 GB RAM)'),
(18, 'LG TV', '32,990', 'image17', 'lg', 'LG UR7500 108 cm (43 inch) Ultra HD (4K) LED Smart WebOS TV 2023\r\n              Edition'),
(19, 'Urban 3 Indigo', '5,450', 'image19', 'urban', '25 hours of battery life .Voice Assistant and Qi-compatible\r\n      charging case.'),
(20, 'HP 15 Thin & Light Laptop', '53,490', 'image15', 'thin', 'HP 15s Core i5 11th Gen 1135G7 - (8 GB/1 TB HDD/Windows 10 Home)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `id`
--
ALTER TABLE `id`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `id`
--
ALTER TABLE `id`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
