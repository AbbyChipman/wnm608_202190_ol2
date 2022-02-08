-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2021 at 03:51 PM
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
  `quantity` int(250) NOT NULL,
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

INSERT INTO `products` (`id`, `name`, `quantity`, `url`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(15, 'Red Overfit Shirt ', 201, '', 25.00, 'tops', '2021-12-03 12:55:29', '2021-12-12 13:48:33', 'Over fit shirt is good for running', '1_overfit.png', '1_overfit.png,1_thumbs1.png,1_thumbs2.png'),
(2, 'Orange Bra Top', 195, 'https://www.lookndfit.com/products/t1002', 29.00, 'tops', '2021-11-05 16:25:14', '2021-12-05 17:57:02', 'Stable support with inner bra pad and high support with 3D pattern.', '2_intention_bratop.png', '2_intention_bratop.png,2_thumbs1.png,2_thumbs2.png'),
(3, 'Limeade Croptop ', 180, 'https://www.lookndfit.com/products/t1003', 38.60, 'tops', '2021-11-05 16:28:03', '2021-12-11 14:23:59', 'Light-weight cool texture crop top.\r\n', '3_alldaycrop.png', '3_alldaycrop.png,3_thumbs1.png,3_thumbs2.png'),
(4, 'Twist Croptop', 150, 'https://www.lookndfit.com/products/t1004', 35.00, 'tops', '2021-11-05 16:30:59', '0000-00-00 00:00:00', 'UV protective fabric effectively block UVs and stay fresh all day.', '4_twistcrop.png', '4_twistcrop.png,4_thumbs1.png,4_thumbs2.png'),
(5, 'Grey Leggings', 160, 'https://www.lookndfit.com/products/b1001', 39.00, 'bottoms', '2021-11-05 16:37:09', '0000-00-00 00:00:00', 'The upgraded 3D pattern will prevent from under booty folding issue.', '5_grey_leggins.png', '5_grey_leggins.png,5_thumbs1.png,5_thumbs2.png'),
(6, 'Black Bootscuts', 177, 'https://www.lookndfit.com/products/b1002', 35.00, 'bottoms', '2021-11-05 16:37:09', '0000-00-00 00:00:00', 'Powerful fleece-lined leggings with extra warmth, softness with slim look.', '6_bootscut.png', '6_bootscut.png,6_thumbs1.png,6_thumbs2.png'),
(7, 'Black Lettering Pants', 97, 'https://www.lookndfit.com/products/b1003', 39.00, 'bottoms', '2021-11-05 16:43:20', '0000-00-00 00:00:00', 'Specialized premium fabric blended with a high elastic secret thread. Soft touch and high body support and cover.', '7_lettering_pants.png', '7_lettering_pants.png,7_thumbs1.png,7_thumbs2.png'),
(8, 'Yellow Jogger Pants', 90, 'https://www.lookndfit.com/products/b1004', 49.01, 'bottoms', '2021-11-05 16:43:20', '2021-12-06 06:37:26', 'Light & High gaze fabric with micro band in waist cutline. Y- zone cover & Hip up.', '8_jogger_pants.png', '8_jogger_pants.png,8_thumbs1.png,8_thumbs2.png'),
(9, 'CreamBeige Padding', 67, 'https://www.lookndfit.com/products/r1001', 89.00, 'outers', '2021-11-05 16:54:26', '0000-00-00 00:00:00', 'The fabric is dried in tumble after give moisture to fabric, so it has high stability and soft texture.', '9_padding.png', '9_padding.png,9_thumb1.png,9_thumb2.png'),
(10, 'AshCream Jumper', 56, 'https://www.lookndfit.com/products/r1002', 79.00, 'outers', '2021-11-05 16:54:26', '0000-00-00 00:00:00', 'It has a micro air layer between the threads which makes a light and Smoot texture. Also, it helps to support quick dry and absorb.', '10_jumper.png', '10_jumper.png,10_thumb1.png,10_thumb2.png'),
(11, 'Windbreaker Jacket', 191, 'https://www.lookndfit.com/products/r1003', 69.00, 'outers', '2021-11-05 16:57:52', '2021-12-05 13:24:16', 'This fabric is smooth but strong durability against frictions.', '11_windbeaker.png', '11_windbeaker.png,11_thumb1.png,11_thumb2.png'),
(12, 'BananaYellow Fleece', 54, 'https://www.lookndfit.com/products/r1003', 59.00, 'outers', '2021-11-05 16:57:52', '0000-00-00 00:00:00', 'Inside fabric is fleece flurry, It helps to keep temperature in warmth.', '12_Highneck_zip.png', '12_Highneck_zip.png,12_thumb1.png,12_thumb2.png');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
