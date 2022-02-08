-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: custsqlmoo32
-- Generation Time: Dec 12, 2021 at 11:26 PM
-- Server version: 5.6.47-87.0-log
-- PHP Version: 7.0.33-0ubuntu0.16.04.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aaronjwash_aau`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `type` varchar(32) NOT NULL,
  `category` varchar(32) NOT NULL,
  `size` varchar(16) NOT NULL,
  `color` varchar(32) NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `date_create`, `date_modify`, `description`, `type`, `category`, `size`, `color`, `thumbnail`, `images`) VALUES
(1, 'Division is for Math', '26.99', '2021-11-04 18:12:11', '2021-12-02 12:52:00', 'We live in a divided world, aren\'t you sick of it? Isn\'t division better off with math problems than with people? Well, let everyone know where you stand with this premium t-shirt.\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide.', 'T-shirt', 'Men', 'S, M, L, XL, XXL', 'Black', 'AW-DivisionForMath-Tshirt-Premium_Men-BLACK-Thumbnail.jpg', 'AW-DivisionForMath-Tshirt-Premium_Men-BLACK.jpg'),
(2, 'Bold as a Lion', '29.99', '2021-11-04 18:16:21', '2021-11-04 18:16:21', 'The bold lead the way to innovation and success. Be as bold as a lion and show your strength with this premium t-shirt.\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide.', 'T-shirt', 'Men', 'S, M, L, XL, XXL', 'Heather Gray', 'AW-BoldAsLion-Tshirt-Premium_Men-HEATHER_GRAY-Thumbnail.jpg', 'AW-BoldAsLion-Tshirt-Premium_Men-HEATHER_GRAY.jpg'),
(3, 'Peace, Love & Christ', '34.99', '2021-11-04 18:26:15', '2021-11-04 18:26:15', 'Can\'t we all just use some more of this in our lives? Remind the world of what we all really need with this premium hoodie.\r\n\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide.', 'Hoodie', 'Women', 'XS, S, M, L, XL', 'Tan', 'AW-PeaceLoveChrist-Hoodie-Women-TAN-Thumbnail.jpg', 'AW-PeaceLoveChrist-Hoodie-Women-TAN.jpg'),
(4, 'Bold as a Lion (Sport)', '34.99', '2021-11-04 18:28:13', '2021-11-04 18:28:13', 'The bold lead the way to innovation and success. Show your true strength with this premium hoodie.\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide.', 'Hoodie', 'Men', 'S, M, L, XL, XXL', 'Heather_Gray', 'AW-BoldAsLion-Hoodie-Sport_Men-HEATHER_GRAY-Thumbnail.jpg', 'AW-BoldAsLion-Hoodie-Sport_Men-HEATHER_GRAY.jpg'),
(5, 'Peace, Love & The Son', '24.99', '2021-11-04 18:30:20', '2021-11-04 18:30:20', 'Can\'t we all just use some more of this in our lives? Remind the world of what we all really need with this premium hoodie.\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide.', 'T-shirt', 'Women', 'XS, S, M, L, XL', 'Heather_Dark_Gray', 'AW-PeaceLoveSon-Tshirt-Premium_Women-DARK_GRAY-Thumbnail.jpg', 'AW-PeaceLoveSon-Tshirt-Premium_Women-DARK_GRAY.jpg'),
(6, 'Rise Above', '19.99', '2021-11-04 18:35:15', '2021-11-04 18:35:15', 'We are all capable of greatness! Rise above society\'s standards and show the world what it means to be the best you can be with this premium hand-knitted beanie.\r\n\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide.', 'Headwear', 'Teen', 'M, L', 'Black, Brown, Green, Navy, Red', 'AW-RiseAbove-Beanie-Teen-BLACK-Thumbnail.jpg', 'AW-RiseAbove-Beanie-Teen-RED.jpg,AW-RiseAbove-Beanie-Teen-BLACK.jpg,AW-RiseAbove-Beanie-Teen-BROWN.jpg,AW-RiseAbove-Beanie-Teen-GREEN.jpg,AW-RiseAbove-Beanie-Teen-NAVY.jpg'),
(7, 'Autumn Cider', '34.99', '2021-11-05 01:18:32', '2021-11-05 01:18:32', 'Stay warm and look good with this fall-colored scarf.\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide.', 'Scarf', 'Teen', 'S, M', 'Orange', 'AW-AutumnCider-Scarf-Teen-ORANGE-Thumbnail.jpg', 'AW-AutumnCider-Scarf-Teen-ORANGE.jpg'),
(8, 'Black and White', '44.99', '2021-11-05 01:25:03', '2021-11-05 01:25:03', 'Stripes are in and bad style is out! Enjoy the cool fall weather with this fashionably warm sweater.\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide.', 'Sweater', 'Teen', 'S, M, L, XL, XXL', 'Gray', 'AW-BlackAndWhite-Sweater-Teen-GRAY-Thumbnail.jpg', 'AW-BlackAndWhite-Sweater-Teen-GRAY.jpg'),
(9, 'Peace Even in Death', '24.99', '2021-11-05 01:33:34', '2021-11-05 01:33:34', 'We can find peace, even in death! Peace to all!\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide.', 'T-shirt', 'Women', 'XS, S, M, L, XL', 'Black', 'AW-PeaceInDeath-Tshirt-Premium_Women-BLACK-Thumbnail.jpg', 'AW-PeaceInDeath-Tshirt-Premium_Women-BLACK.jpg'),
(10, 'Close-Knit Fall', '49.99', '2021-11-05 01:42:18', '2021-12-08 13:50:30', 'Get close knit with our latest in fall style. Enjoy the cool fall weather with this fashionably warm sweater.\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide.', 'Sweater', 'Women', 'S, M, L, XL, XXL', 'Brown', 'AW-CloseKnit-Sweater-Women-BROWN-Thumbnail.jpg', 'AW-CloseKnit-Sweater-Women-BROWN.jpg'),
(11, 'Blue Blazes', '34.99', '2021-11-05 01:46:09', '2021-11-05 01:46:09', 'Look sharp with this blazing blue button down. The shirt is closely knitted so that you can look warm and dapper at the same time!\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide.', 'Button Down Shirt', 'Kids', 'XXS, XS, S, M, L', 'Blue', 'AW-BlueBlazes-ButtonDown-Kids-BLUE-Thumbnail.jpg', 'AW-BlueBlazes-ButtonDown-Kids-BLUE.jpg'),
(12, 'Famous Enough', '24.99', '2021-11-05 01:48:48', '2021-11-05 01:48:48', '\"I am known, that\'s famous enough!\" Let the world know that they don\'t all have to know who you are for you to be important. Are you okay with being famous enough? Tell everyone with this premium t-shirt.\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide.', 'T-shirt', 'Men', 'S, M, L, XL, XXL', 'White, Black', 'AW-FamousEnough-Tshirt-Premium_Men-WHITE-Thumbnail.jpg', 'AW-FamousEnough-Tshirt-Premium_Men-WHITE.jpg'),
(13, 'Just Black', '34.99', '2021-11-05 01:51:16', '2021-11-05 01:51:16', 'Fan of the simple things? Like to look dapper without much effort? That\'s all it takes with this scarf because it\'s... just black.\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide.', 'Scarf', 'Men', 'M, L', 'Black', 'AW-JustBlack-Scarf-Men-BLACK-Thumbnail.jpg', 'AW-JustBlack-Scarf-Men-BLACK.jpg'),
(14, 'Custom Quality', '24.99', '2021-11-05 02:05:01', '2021-11-05 02:05:01', 'Parents understand how challenging it is dealing with the uniqueness of their children, almost as if they were custom made to poke their buttons. Huh...someone should make a shirt out of that.\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide.', 'T-shirt', 'Kids', 'XXS, XS, S, M, L', 'White, Tan', 'AW-CustomKid-Tshirt-Premium_Kids-WHITE-Thumbnail.jpg', 'AW-CustomKid-Tshirt-Premium_Kids-WHITE.jpg'),
(15, 'Jackie Denim', '45.00', '2021-11-05 02:10:05', '2021-12-08 13:50:11', 'Simply put: if your child loves blue, jeans, or just denim in general, this jacket is for them. Premium denim that\'s sturdy yet comfortable makes this Jackie Denim\'s favorite jacket... and maybe even yours too.\r\n\r\n\r\n100% denim\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide.', 'Jacket', 'Kids', 'XXS, XS, S, M, L', 'Blue', 'AW-JackieDenim-Jacket-Kids-BLUE-Thumbnail.jpg', 'AW-JackieDenim-Jacket-Kids-BLUE.jpg'),
(21, 'Cozy Love', '49.99', '2021-12-12 00:00:00', '2021-12-12 00:00:00', 'Get cozy with your loved ones while wearing this warm and snuggly sweater. Perfect for the cooler seasons.\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide.', 'Sweater', 'Teen', 'S, M, L, XL', 'Rose', 'AW-CozyLove-Sweater-Teen-PINK-Thumbnail.jpg', 'AW-CozyLove-Sweater-Teen-PINK.jpg'),
(22, 'Future Leader', '24.99', '2021-12-12 00:00:00', '2021-12-12 00:00:00', 'Kids are the leaders of the future! Why not remind them how important they are with this bold t-shirt?\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide.', 'T-shirt', 'Kids', 'XXS, XS, S, M, L', 'Black', 'AW-FutureLeader-Tshirt-Kids-BLACK-Thumbnail.jpg', 'AW-FutureLeader-Tshirt-Kids-BLACK.jpg'),
(23, 'Glacier Stitch', '55.99', '2021-12-12 00:00:00', '2021-12-12 00:00:00', 'Stay warm while looking cool in this hand-crafted, close-knit sweater. Perfect for the cooler seasons!\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide.', 'Sweater', 'Men', 'S, M, L, XL, XXL', 'Blue', 'AW-GlacierStitch-Sweater-Men-BLUE-Thumbnail.jpg', 'AW-GlacierStitch-Sweater-Men-BLUE.jpg'),
(24, 'Loop De Loop', '34.99', '2021-12-12 00:00:00', '2021-12-12 00:00:00', 'Keep warm while looking good with this modern, hand-knit scarf, the perfect addition to your seasonal fall collection!\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide.', 'Scarf', 'Women', 'M, L', 'Brown', 'AW-LoopDeLoop-Scarf-Women-BROWN-Thumbnail.jpg', 'AW-LoopDeLoop-Scarf-Women-BROWN.jpg'),
(25, 'Bright Sunshiny Day', '22.99', '2021-12-12 00:00:00', '2021-12-12 00:00:00', 'This adorable children\'s sun hat is the perfect hat for the perfect outfit on the perfect sunny day.\r\n\r\n100% tightly woven synthetic straw\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide.', 'Headwear', 'Kids', 'XS, S, M', 'Tan', 'AW-BrightSunshinyDay-Headwear-Kids-TAN-Thumbnail.jpg', 'AW-BrightSunshinyDay-Headwear-Kids-TAN.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
