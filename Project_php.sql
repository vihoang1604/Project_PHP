-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2019 at 07:16 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) DEFAULT NULL,
  `comments` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `comments`) VALUES
(1, 'Dày Nam', '1'),
(2, 'Dày N?', '2'),
(3, 'Dày Tre Em', '3');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `cus_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `cus_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `prod_name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `describes` varchar(255) DEFAULT NULL,
  `imported_date` date DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `prod_name`, `price`, `quantity`, `category_id`, `comments`, `describes`, `imported_date`, `img`) VALUES
(1, 'Dày Th? Thao Nam', 500, 150, 1, '1', 'D? Tr?n, Cao su t?ng h?p,nh? b?n.', '2016-01-01', 'img/nam1.jpg'),
(2, 'Dày Th? Thao Nam', 550, 150, 1, '1', 'D? Tr?n, Cao su t?ng h?p,nh? b?n.', '2016-01-01', 'img/nam2.jpg'),
(3, 'Dày Th? Thao Nam', 600, 150, 1, '1', 'D? Tr?n, Cao su t?ng h?p,nh? b?n.', '2016-01-01', 'img/nam3.jpg'),
(4, 'Dày Th? Thao Nam', 700, 150, 1, '1', 'D? Tr?n, Cao su t?ng h?p,nh? b?n.', '2016-01-01', 'img/nam4.jpg'),
(5, 'Dày Th? Thao Nam', 800, 150, 1, '1', 'D? Tr?n, Cao su t?ng h?p,nh? b?n.', '2016-01-01', 'img/nam5.jpg'),
(6, 'Dày Da Nam', 750, 150, 1, '1', 'D? Tr?n, Cao su t?ng h?p,nh? b?n.', '2016-01-01', 'img/nam6.jpg'),
(7, 'Dày Da Nam', 900, 150, 1, '1', 'D? Tr?n, Cao su t?ng h?p,nh? b?n.', '2016-01-01', 'img/nam7.jpg'),
(8, 'Dày Da Nam', 500, 150, 1, '1', 'D? Tr?n, Cao su t?ng h?p,nh? b?n.', '2016-01-01', 'img/nam8.jpg'),
(9, 'Dày Da Nam', 505, 150, 1, '1', 'D? Tr?n, Cao su t?ng h?p,nh? b?n.', '2016-01-01', 'img/nam9.jpg'),
(10, 'Dày Cao gót', 500, 150, 2, '1', 'D? Tr?n, Cao su t?ng h?p,nh? b?n.', '2016-01-01', 'img/nu1.jpg'),
(11, 'Dày Th? Thao N?', 550, 150, 2, '1', 'D? Tr?n, Cao su t?ng h?p,nh? b?n.', '2016-01-01', 'img/nu2.jpg'),
(12, 'Dày Cao gót N?', 600, 150, 2, '1', 'D? Tr?n, Cao su t?ng h?p,nh? b?n.', '2016-01-01', 'img/nu3.jpg'),
(13, 'Dày búp bê da', 700, 150, 2, '1', 'D? Tr?n, Cao su t?ng h?p,nh? b?n.', '2016-01-01', 'img/nu4.jpg'),
(14, 'Dày Cao gót', 800, 150, 2, '1', 'D? Tr?n, Cao su t?ng h?p,nh? b?n.', '2016-01-01', 'img/nu5.jpg'),
(15, 'Dày Cao gót', 750, 150, 2, '1', 'D? Tr?n, Cao su t?ng h?p,nh? b?n.', '2016-01-01', 'img/nu6.jpg'),
(16, 'Dày Th? Thao N?', 900, 150, 2, '1', 'D? Tr?n, Cao su t?ng h?p,nh? b?n.', '2016-01-01', 'img/nu7.jpg'),
(17, 'Dày Th? Thao N?', 500, 150, 2, '1', 'D? Tr?n, Cao su t?ng h?p,nh? b?n.', '2016-01-01', 'img/nu8.jpg'),
(18, 'Dày Th? Thao N?', 505, 150, 2, '1', 'D? Tr?n, Cao su t?ng h?p,nh? b?n.', '2016-01-01', 'img/nu9.jpg'),
(19, 'Dày Bé Gái', 500, 150, 3, '1', 'D? Tr?n, Cao su t?ng h?p,nh? b?n.', '2016-01-01', 'img/tre1.jpg'),
(20, 'Dày Bé Gái', 550, 150, 3, '1', 'D? Tr?n, Cao su t?ng h?p,nh? b?n.', '2016-01-01', 'img/tre2.jpg'),
(21, 'Dày Bé Gái', 600, 150, 3, '1', 'D? Tr?n, Cao su t?ng h?p,nh? b?n.', '2016-01-01', 'img/tre3.jpg'),
(22, 'Dày Bé Gái', 700, 150, 3, '1', 'D? Tr?n, Cao su t?ng h?p,nh? b?n.', '2016-01-01', 'img/tre4.jpg'),
(23, 'Dày Bé Gái', 800, 150, 3, '1', 'D? Tr?n, Cao su t?ng h?p,nh? b?n.', '2016-01-01', 'img/tre5.jpg'),
(24, 'Dày Bé Trai', 750, 150, 3, '1', 'D? Tr?n, Cao su t?ng h?p,nh? b?n.', '2016-01-01', 'img/tre6.jpg'),
(25, 'Dày Bé Trai', 900, 150, 3, '1', 'D? Tr?n, Cao su t?ng h?p,nh? b?n.', '2016-01-01', 'img/tre7.jpg'),
(26, 'Dày Bé Trai', 500, 150, 3, '1', 'D? Tr?n, Cao su t?ng h?p,nh? b?n.', '2016-01-01', 'img/tre8.jpg'),
(27, 'Dày Bé Trai', 505, 150, 3, '1', 'D? Tr?n, Cao su t?ng h?p,nh? b?n.', '2016-01-01', 'img/tre9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `prod_orders`
--

CREATE TABLE `prod_orders` (
  `prod_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(225) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `passwords` varchar(255) DEFAULT NULL,
  `levels` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `user_name`, `email`, `passwords`, `levels`) VALUES
(1, 'homdkfkdg', 'vi.hoang', 'vi.hoang.thanh@student.passerellesnumeriques.org', 'c20ad4d76fe97759aa27a0c99bff6710', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `prod_orders`
--
ALTER TABLE `prod_orders`
  ADD PRIMARY KEY (`prod_id`,`order_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `prod_orders`
--
ALTER TABLE `prod_orders`
  ADD CONSTRAINT `prod_orders_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `prod_orders_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
