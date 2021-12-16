-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 14, 2021 at 09:24 PM
-- Server version: 10.3.23-MariaDB-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abigailc_AAU`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `title` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity_avail` int(10) NOT NULL,
  `image_main` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_other` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `date_create`, `date_modify`, `title`, `category`, `description`, `price`, `quantity_avail`, `image_main`, `images_other`) VALUES
(1, '2021-11-03 02:08:17', '2021-12-03 17:23:34', 'notebook - small', 'Notebooks', ' 3 x 5 inch resin notebook, cover made of resin with custom inclusions. 50 pages (25 sheets).', 5.00, 10, 'nb_r_sm.jpg', 'nb_r_sm1.jpg,nb_r_sm2.jpg,nb_r_sm3.jpg'),
(2, '2021-11-03 02:08:38', '2021-12-03 17:31:00', 'notebook - medium', 'Notebooks', ' 4 x 6 inch resin notebook, cover made of resin with custom inclusions. 80 pages (40 sheets).', 7.50, 10, 'nb_r_md.jpg', 'nb_r_md1.jpg,nb_r_md2.jpg,nb_r_md3.jpg'),
(5, '2021-11-03 02:11:13', '2021-11-15 23:29:35', 'LEFTY notebook - small', 'Notebooks', 'LEFTY-FRIENDLY 3 x 5 inch resin notebook, cover made of resin with custom inclusions.\r\n50 pages (25 sheets)', 5.00, 10, 'nb_r_sm_lf.jpg', 'nb_r_sm_lf1.jpg,nb_r_sm_lf2.jpg,nb_r_sm_jf3.jpg'),
(6, '2021-11-03 02:11:54', '2021-11-15 23:33:02', 'LEFTY notebook - medium', 'Notebooks', 'LEFTY-FRIENDLY 4 x 6 inch resin notebook, cover made of resin with custom inclusions. 80 pages (40 sheets).', 7.50, 10, 'nb_r_md_lf.jpg', 'nb_r_md_lf1.jpg,nb_r_md_lf2.jpg,nb_r_md_lf3.jpg'),
(9, '2021-11-03 02:13:29', '2021-11-03 02:13:29', 'resin bookmark - small', 'Bookmarks', '3 inch bookmark, made of resin.', 3.00, 10, 'bm_r_sm.jpg', 'bm_r_sm1.jpg,bm_r_sm2.jpg,bm_r_sm3.jpg'),
(10, '2021-11-03 02:14:06', '2021-11-03 02:14:06', 'resin bookmark - medium', 'Bookmarks', '5 inch bookmark, made of resin.', 5.00, 10, 'bm_r_md.jpg', 'bm_r_md1.jpg,bm_r_md2.jpg,bm_r_md3.jpg'),
(13, '2021-11-03 02:15:44', '2021-11-03 02:15:44', 'resin ink pen', 'Pens', 'Molded ink pen made of resin.', 5.00, 10, 'res_pen.jpg', 'res_pen1.jpg,res_pen2.jpg,res_pen3.jpg'),
(15, '2021-11-03 02:17:47', '2021-11-03 02:17:47', 'Resin stationery set - small', 'Sets', '3 x 5 resin notebook, 3 inch resin bookmark and resin pen, packaged suitable for gifting.', 12.00, 10, 'res_set_sm.jpg', 'res_set_sm1.jpg,res_set_sm2.jpg,res_set_sm3.jpg'),
(16, '2021-11-03 02:20:53', '2021-12-05 15:19:48', 'Resin stationery set - medium', 'Sets', '  4 x 6 resin notebook, 5 inch resin bookmark and resin pen, packaged suitable for gifting.', 15.00, 10, 'res_set_md.jpg', 'res_set_md1.jpg,res_set_md2.jpg,res_set_md3.jpg'),
(19, '2021-11-03 02:08:38', '2021-11-15 23:26:56', 'resin notebook - large', 'Notebooks', '5 x 7 inch resin notebook, cover made of resin with custom inclusions. 100 pages (50 sheets).', 10.00, 10, 'nb_r_lg.jpg', 'nb_r_lg1.jpg,nb_r_lg2.jpg,nb_r_lg3.jpg'),
(20, '2021-11-03 02:08:38', '2021-11-15 23:32:13', 'LEFTY notebook - large', 'Notebooks', 'LEFTY-FRIENDLY 5 x 7 inch resin notebook, cover made of resin with custom inclusions. 100 pages (50 sheets).', 10.00, 10, 'nb_r_lg_lf.jpg', 'nb_r_lg_lf1.jpg,nb_r_lg_lf2.jpg,nb_r_lg_lf3.jpg'),
(21, '2021-11-03 02:20:53', '2021-12-11 16:21:50', 'Resin stationery set - large', 'Sets', '  5 x 7 resin notebook, 5 inch resin bookmark and resin pen, packaged suitable for gifting.', 18.00, 10, 'res_set_lg.jpg', 'res_set_lg1.jpg,res_set_lg2.jpg,res_set_lg3.jpg');

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
