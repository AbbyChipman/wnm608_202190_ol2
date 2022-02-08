-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 04, 2021 at 12:29 PM
-- Server version: 5.7.35-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wnm_newdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Mango', 7.00, 'fruit', '2021-11-04 12:10:04', '2021-11-04 12:10:04', 'Organic & Homegrown in the Philippines', 'img/mango_fruit_thumb.jpg', 'img/mango_1.jpg,img/mango_2.jpg'),
(2, 'Ginger', 4.99, 'vegetable', '2021-11-04 12:11:52', '2021-11-04 12:11:52', 'Organic & grown in Southeast Asia', 'img/ginger_veg_thumb.jpg', 'img/ginger_1.jpg,img/ginger_2.jpg,'),
(3, 'Pineapple', 6.00, 'fruit', '2021-11-04 12:13:42', '2021-11-04 12:13:42', 'Organic & Homegrown in the Philippines', 'img/pineapple_fruit_thumb.jpg', 'img/pineapple_1.jpg,img/pineapple_2.jpg,'),
(4, 'Carrot', 5.99, 'vegetable', '2021-11-04 12:15:27', '2021-11-04 12:15:27', 'Organic & Homegrown locally in California', 'img/carrot_thumb.jpg', 'img/carrot_1.jpg,img/carrot_2.jpg'),
(5, 'Blueberries', 2.99, 'fruit', '2021-11-04 12:16:48', '2021-11-04 12:16:48', 'Organic & Locally Grown in California', 'img/blueberries_fruit_thumb.jpg', 'img/blueberries_1.jpg,img/blueberries_2.jpg'),
(6, 'Strawberries', 2.99, 'fruit', '2021-11-04 12:18:17', '2021-11-04 12:18:17', 'Organic & NON-GMO. Grown in California', 'img/strawberries_fruit_thumb.jpg', 'img/strawberries_1.jpg,img/strawberries_2.jpg'),
(7, 'Banana', 1.99, 'fruit', '2021-11-04 12:19:45', '2021-11-04 12:19:45', 'NON-GMO, Organically produced', 'img/banana_fruit_thumb.jpg', 'img/banana_1.jpg,img/banana_2.jpg'),
(8, 'Cucumber', 4.99, 'vegetable', '2021-11-04 12:21:34', '2021-11-04 12:21:34', 'Produced in California. Organic', 'img/cucumber_thumb.jpg', 'img/cucumber_1.jpg,img/cucumber_2.jpg'),
(9, 'Celery', 4.99, 'vegetable', '2021-11-04 12:23:11', '2021-11-04 12:23:11', 'Organic & Homegrown in the U.S', 'img/celery_thumb.jpg', 'img/celery_1.jpg,img/celery_2.jpg'),
(10, 'Lemon', 2.99, 'fruit', '2021-11-04 12:24:53', '2021-11-04 12:24:53', 'Locally produced. Organic', 'img/lemon_fruit_thumb.jpg', 'img/lemon_1.jpg,img/lemon_2.jpg'),
(11, 'Lime', 2.99, 'fruit', '2021-11-04 12:25:34', '2021-11-04 12:25:34', 'Locally produced. Organic', 'img/lime_fruit_thumb.jpg', 'img/lime_1.jpg,img/lime_2.jpg'),
(12, 'Fuji Apple', 4.99, 'fruit', '2021-11-04 12:26:37', '2021-11-04 12:26:37', 'Organic & Locally grown in California', 'img/apple_fruit_thumb.jpg', 'img/apple_1.jpg,img/apple_2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
