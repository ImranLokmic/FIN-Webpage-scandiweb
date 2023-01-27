-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2023 at 11:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `label`) VALUES
(1, 'name'),
(2, 'price');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_sku` varchar(11) NOT NULL,
  `product_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_sku`, `product_type`) VALUES
(1, '1A', 'Book'),
(2, '2B', 'DVD'),
(3, '3C', 'Furniture');

-- --------------------------------------------------------

--
-- Table structure for table `p_values`
--

CREATE TABLE `p_values` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `att_id` int(11) NOT NULL,
  `product_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_values`
--

INSERT INTO `p_values` (`id`, `product_id`, `att_id`, `product_value`) VALUES
(1, 1, 1, 'The Brothers Karamazov'),
(2, 1, 2, '20'),
(3, 1, 5, '1,3'),
(4, 2, 1, 'The Big Short'),
(5, 2, 2, '5'),
(6, 2, 4, '30'),
(7, 3, 1, 'IKEA Dresser'),
(8, 3, 2, '45'),
(9, 3, 6, '40x48x55'),
(10, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `uniqueatt`
--

CREATE TABLE `uniqueatt` (
  `id` int(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `p_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uniqueatt`
--

INSERT INTO `uniqueatt` (`id`, `label`, `p_type`) VALUES
(4, 'size', 'DVD'),
(5, 'weight', 'Book'),
(6, 'HxWxL', 'Furniture');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_values`
--
ALTER TABLE `p_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uniqueatt`
--
ALTER TABLE `uniqueatt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `p_values`
--
ALTER TABLE `p_values`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `uniqueatt`
--
ALTER TABLE `uniqueatt`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
