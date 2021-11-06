-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 05, 2021 at 05:08 PM
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
-- Database: `summersong_wnm608ol2`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `email`, `url`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Medium Feather Overfit Short Sleeve_Red', 'support@lookandfit.com', 'https://www.lookndfit.com/products/t1001', 25.00, 'tops', '2021-11-05 15:44:51', '0000-00-00 00:00:00', 'This is loose-fit with side details for comfortable fitting. The neck line is stitched double for high durability.', '', ''),
(2, ' Intention Bra Top_Orange', 'support@lookandfit.com', 'https://www.lookndfit.com/products/t1002', 29.00, 'tops', '2021-11-05 16:25:14', '0000-00-00 00:00:00', 'Stable support with inner bra pad and high support with 3D pattern.', '', ''),
(3, 'Allday Feather Crop Top Lime Ade', 'support@lookandfit.com\r\n', 'https://www.lookndfit.com/products/t1003', 39.00, 'tops', '2021-11-05 16:28:03', '0000-00-00 00:00:00', 'Light-weight cool texture crop top.\r\n', '', ''),
(4, 'Fresh Feather Twist Crop Short Sleeve_White', 'support@lookandfit.com', 'https://www.lookndfit.com/products/t1004', 35.00, 'tops', '2021-11-05 16:30:59', '0000-00-00 00:00:00', 'UV protective fabric effectively block UVs and stay fresh all day.', '', ''),
(5, 'Cella Uptension Leggings_Grey', 'support@lookandfit.com', 'https://www.lookndfit.com/products/b1001', 39.00, 'bottoms', '2021-11-05 16:37:09', '0000-00-00 00:00:00', 'The upgraded 3D pattern will prevent from under booty folding issue.', '', ''),
(6, 'Intention Hard Fluffy Napping Boots cut_Black', 'support@lookandfit.com', 'https://www.lookndfit.com/products/b1002', 35.00, 'bottoms', '2021-11-05 16:37:09', '0000-00-00 00:00:00', 'Powerful fleece-lined leggings with extra warmth, softness with slim look.', '', ''),
(7, 'Signature Lettering Pants_Black', 'support@lookandfit.com', 'https://www.lookndfit.com/products/b1003', 39.00, 'bottoms', '2021-11-05 16:43:20', '0000-00-00 00:00:00', 'Specialized premium fabric blended with a high elastic secret thread. Soft touch and high body support and cover.', '', ''),
(8, 'Medium Feather Jogger Pants_Pampas Yellow', 'support@lookandfit.com', 'https://www.lookndfit.com/products/b1004', 49.00, 'bottoms', '2021-11-05 16:43:20', '0000-00-00 00:00:00', 'Light & High gaze fabric with micro band in waist cutline. Y- zone cover & Hip up.', '', ''),
(9, 'Corduroy Stopper Padding_Cream Beige', 'support@lookandfit.com', 'https://www.lookndfit.com/products/r1001', 89.00, 'outers', '2021-11-05 16:54:26', '0000-00-00 00:00:00', 'The fabric is dried in tumble after give moisture to fabric, so it has high stability and soft texture.', '', ''),
(10, 'Sherpa Highneck Stopper Jumper_Ash Cream', 'support@lookandfit.com', 'https://www.lookndfit.com/products/r1002', 79.00, 'outers', '2021-11-05 16:54:26', '0000-00-00 00:00:00', 'It has a micro air layer between the threads which makes a light and Smoot texture. Also, it helps to support quick dry and absorb.', '', ''),
(11, 'High Neck String Windbreaker_Safari Khak', 'support@lookandfit.com', 'https://www.lookndfit.com/products/r1003', 69.00, 'outers', '2021-11-05 16:57:52', '0000-00-00 00:00:00', 'This fabric is smooth but strong durability against frictions.', '', ''),
(12, 'Soft Fleece Highneck Zip up_Banana Yellow ', 'support@lookandfit.com', 'https://www.lookndfit.com/products/r1003', 59.00, 'outers', '2021-11-05 16:57:52', '0000-00-00 00:00:00', 'Inside fabric is fleece flurry, It helps to keep temperature in warmth.', '', '');

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
