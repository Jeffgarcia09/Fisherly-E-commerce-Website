-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 04:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fisherly`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `purok` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `network` varchar(20) DEFAULT NULL,
  `cod` varchar(10) DEFAULT NULL,
  `total_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`id`, `fname`, `lname`, `address`, `purok`, `phone`, `network`, `cod`, `total_amount`) VALUES
(7, 'Sonny boy', 'Eduave', 'Usa', 'bungkag', '0913232323232', 'Tm', 'true', 0),
(8, 'sonny boy', 'eduave', 'master pinakadato ', 'nft player', '09228366575474', 'Smart', 'true', 0),
(18, 'Gerald', 'Cahanza', 'Puga-an, Iligan City, Lanao Del Norte', 'Kawayanan', '091335552123', 'Tm', 'true', 0),
(19, 'sdfdsf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'dsfdsf', 'Tm', 'true', 0),
(20, 'kent', 'tangan', 'sdaasd', 'asdasd', 'sadwqew', 'Smart', 'true', 0),
(21, 'alexander', 'garces', 'dasda', 'sdw2', '231231', 'Tm', 'true', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_desc` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_desc`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'BANGUS', 'The milkfish is the sole living species in the family Chanidae', 150.00, 'img/fish1.jpg', '2022-01-16 08:37:19'),
(2, 'DANGGIT', 'A marine fish of the siganidae family', 180.00, 'img/fish2.jpg', '2022-01-16 08:38:43'),
(3, 'TILAPIA', 'a kind of freshwater fish', 200.00, 'img/fish3.jpg', '2022-01-16 08:38:43'),
(4, 'TULINGAN', 'a kind of marine fish', 180.00, 'img/fish4.jpg', '2022-01-16 08:40:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
