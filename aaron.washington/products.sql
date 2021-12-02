-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: custsqlmoo32
-- Generation Time: Nov 07, 2021 at 03:48 PM
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
  `quantity` int(11) NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `date_create`, `date_modify`, `description`, `type`, `category`, `size`, `quantity`, `thumbnail`, `images`) VALUES
(1, 'Division is for Math Premium T-shirt', '24.99', '2021-11-04 18:12:11', '2021-11-04 18:12:11', 'We live in a divided world...aren\'t you sick of it? Isn\'t division better off with math problems than with people? Well, let everyone know where you stand with this premium t-shirt.\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide', 'T-shirt', 'Men', 'S, M, L, XL, XXL', 1, 'AW-DivisionForMath-Tshirt-Premium_Men-BLACK-Thumbnail', 'AW-DivisionForMath-Tshirt-Premium_Men-BLACK'),
(2, 'Bold as a Lion Premium T-shirt', '29.99', '2021-11-04 18:16:21', '2021-11-04 18:16:21', 'The bold lead the way to innovation and success. Be as bold as a lion and show your strength with this premium t-shirt.\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide', 'T-shirt', 'Men', 'S, M, L, XL, XXL', 1, 'AW-BoldAsLion-Tshirt-Premium_Men-HEATHER_GRAY-Thumbnail.jpg', 'AW-BoldAsLion-Tshirt-Premium_Men-HEATHER_GRAY.jpg'),
(3, 'Peace, Love & Christ Premium Hoodie', '34.99', '2021-11-04 18:26:15', '2021-11-04 18:26:15', 'Can\'t we all just use some more of this in our lives? Remind the world of what we all really need with this premium hoodie.\r\n\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide', 'Hoodie', 'Women', 'XS, S, M, L, XL,', 1, 'AW-PeaceLoveChrist-Hoodie-Women-TAN-Thumbnail.jpg', 'AW-PeaceLoveChrist-Hoodie-Women-TAN.jpg'),
(4, 'Bold as a Lion Sport Hoodie', '34.99', '2021-11-04 18:28:13', '2021-11-04 18:28:13', 'The bold lead the way to innovation and success. Showcase your strength with this premium hoodie.\r\n\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide', 'Hoodie', 'Men', 'S, M, L, XL, XXL', 1, 'AW-BoldAsLion-Hoodie-Sport_Men-HEATHER_GRAY-Thumbnail.jpg', 'AW-BoldAsLion-Hoodie-Sport_Men-HEATHER_GRAY.jpg'),
(5, 'Peace, Love & The Son Premium T-shirt', '24.99', '2021-11-04 18:30:20', '2021-11-04 18:30:20', 'Can\'t we all just use some more of this in our lives? Remind the world of what we all really need with this premium hoodie.\r\n\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide', 'T-shirt', 'Women', 'XS, S, M, L, XL,', 1, 'AW-PeaceLoveSon-Tshirt-Premium_Women-DARK_GRAY-Thumbnail.jpg', 'AW-PeaceLoveSon-Tshirt-Premium_Women-DARK_GRAY.jpg'),
(6, 'Rise Above Knitted Beanie', '19.99', '2021-11-04 18:35:15', '2021-11-04 18:35:15', 'We are all capable of greatness! Rise above society\'s standards and show the world what it means to be best you can be with this premium knitted beanie.\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide', 'Headwear', 'Teen', 'M, L', 1, 'AW-RiseAbove-Beanie-Teen-BLACK-Thumbnail.jpg', 'AW-RiseAbove-Beanie-Teen-RED.jpg, AW-RiseAbove-Beanie-Teen-BLACK.jpg, AW-RiseAbove-Beanie-Teen-BROWN.jpg, AW-RiseAbove-Beanie-Teen-GREEN.jpg, AW-RiseAbove-Beanie-Teen-NAVY.jpg'),
(7, 'Autumn Cider Knitted Scarf', '34.99', '2021-11-05 01:18:32', '2021-11-05 01:18:32', 'Stay warm and look good with this fall-colored scarf.\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide', 'Scarf', 'Teen', 'S, M', 1, 'AW-AutumnCider-Scarf-Teen-ORANGE-Thumbnail.jpg', 'AW-AutumnCider-Scarf-Teen-ORANGE.jpg'),
(8, 'Black and White Knitted Sweater', '44.99', '2021-11-05 01:25:03', '2021-11-05 01:25:03', 'Stripes are in and bad style is out! Enjoy the cool fall weather with this fashionably warm sweater.\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide', 'Sweater', 'Teen', 'S, M, L, XL, XXL', 1, 'AW-BlackAndWhite-Sweater-Teen-GRAY-Thumbnail.jpg', 'AW-BlackAndWhite-Sweater-Teen-GRAY.jpg'),
(9, 'Peace in Death Premium T-shirt', '24.99', '2021-11-05 01:33:34', '2021-11-05 01:33:34', 'Peace, death, and love! Let\'s all get along while we\'re still in the land of the living. Peace to all!\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide', 'T-shirt', 'Women', 'XS, S, M, L, XL,', 1, 'AW-PeaceInDeath-Tshirt-Premium_Women-BLACK-Thumbnail.jpg', 'AW-PeaceInDeath-Tshirt-Premium_Women-BLACK.jpg'),
(10, 'Close Knit Fall Sweater', '49.99', '2021-11-05 01:42:18', '2021-11-05 01:42:18', 'Get close knit with our latest in fall style. Enjoy the cool fall weather with this fashionably warm sweater.\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide', 'Sweater', 'Women', 'S, M, L, XL, XXL', 1, 'AW-CloseKnit-Sweater-Women-BROWN-Thumbnail.jpg', 'AW-CloseKnit-Sweater-Women-BROWN.jpg'),
(11, 'Blue Blazes Button Down Shirt', '34.99', '2021-11-05 01:46:09', '2021-11-05 01:46:09', 'Look sharp with this blazing blue button down. The shirt is closely knitted so that you can look warm and dapper at the same time!\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide', 'Button Down Shirt', 'Kids', 'XXS, XS, S, M, L', 1, 'AW-BlueBlazes-ButtonDown-Kids-BLUE-Thumbnail.jpg', 'AW-BlueBlazes-ButtonDown-Kids-BLUE.jpg'),
(12, 'Famous Enough Premium T-shirt', '24.99', '2021-11-05 01:48:48', '2021-11-05 01:48:48', '\"I am known, that\'s famous enough!\" Let the world know that they don\'t all have to know who you are for you to be important. Are you okay with being famous enough? Tell everyone with this premium t-shirt.\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide', 'T-shirt', 'Men', 'S, M, L, XL, XXL', 1, 'AW-FamousEnough-Tshirt-Premium_Men-WHITE-Thumbnail.jpg', 'AW-FamousEnough-Tshirt-Premium_Men-WHITE.jpg'),
(13, 'Just Black Knitted Scarf', '34.99', '2021-11-05 01:51:16', '2021-11-05 01:51:16', 'Fan of the simple things? Like to look dapper without much effort? That\'s all it takes with this scarf because it\'s... just black.\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide', 'Scarf', 'Men', 'M, L', 1, 'AW-JustBlack-Scarf-Men-BLACK-Thumbnail.jpg', 'AW-JustBlack-Scarf-Men-BLACK.jpg'),
(14, 'Custom Kid Premium T-shirt', '24.99', '2021-11-05 02:05:01', '2021-11-05 02:05:01', 'Parents understand how challenging it is dealing with the uniqueness of their children, almost as if they were custom made to poke their buttons. Ah, the joys of parenting!\r\n\r\n80% recycled cotton, 20% nylon\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide', 'T-shirt', 'Kids', 'XXS, XS, S, M, L', 1, 'AW-CustomKid-Tshirt-Premium_Kids-WHITE-Thumbnail.jpg', 'AW-CustomKid-Tshirt-Premium_Kids-WHITE.jpg'),
(15, 'Jackie Denim Kid\'s Jacket', '44.99', '2021-11-05 02:10:05', '2021-11-05 02:10:05', 'Simply put: if you like blue, jeans, or just denim in general, this jacket is for you. Premium denim that\'s sturdy yet comfortable makes this Jackie Denim\'s favorite jacket... and maybe even yours.\r\n\r\n\r\n100% denim\r\nMade in the U.S.\r\nA portion of all proceeds are donated to support natural disaster relief worldwide', 'Jacket', 'Kids', 'XXS, XS, S, M, L', 1, 'AW-JackieDenim-Jacket-Kids-BLUE-Thumbnail.jpg', 'AW-JackieDenim-Jacket-Kids-BLUE.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
