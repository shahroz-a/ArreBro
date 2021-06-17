-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2021 at 01:01 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arre_bro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'sarthak.ahuja0007@gmail.com', 'arrebro');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `category_picture` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `category_picture`, `created_at`, `updated_at`) VALUES
(1, 'Featured Products', '../used/featured.jpg', '2021-05-11 01:52:29', '2021-05-11 01:52:29'),
(2, 'Minimal', '../used/minimal.png', '2021-05-11 14:27:50', '2021-05-11 14:27:50'),
(3, 'Printed T-Shirts', '../used/printed.png', '2021-05-11 01:54:45', '2021-05-11 01:54:45'),
(4, 'Solid T-Shirts', '../used/solid.png', '2021-05-11 01:55:03', '2021-05-11 01:55:03'),
(5, 'The Office', '../used/office.png', '2021-05-11 01:55:19', '2021-05-11 01:55:19'),
(6, 'Valorant', '../used/valorant.png', '2021-05-11 13:43:05', '2021-05-11 13:43:05');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `msg` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `name`, `phone`, `msg`, `created_at`, `updated_at`) VALUES
(1, 'gqg@gmail.com', 'fag', '35161616', 'gagaga', '2021-05-12 04:56:37', '2021-05-12 04:56:37'),
(2, 'gqg@gmail.com', 'fagafga', '351616164534', 'gagagadff', '2021-05-12 04:56:58', '2021-05-12 04:56:58'),
(3, 'dgs@gmail', 'Sarthak Ahuja', '62361261', '6136616', '2021-05-12 04:59:17', '2021-05-12 04:59:17'),
(4, 'dgs@gmail', 'g', '', '', '2021-05-12 05:00:58', '2021-05-12 05:00:58'),
(5, 'dgs@gmail', 'g', '', '', '2021-05-12 05:08:45', '2021-05-12 05:08:45');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'sarthak.ahuja0007@gmail.com', 'arrebro', '2021-05-12 07:56:09', '2021-05-12 07:56:09'),
(2, 'Sentenzera@gmail.com', 'arrebro', '2021-05-12 08:07:07', '2021-05-12 08:07:07'),
(3, 'sarthak.ahuja00007@gmail.com', 'arrebro', '2021-05-13 08:50:19', '2021-05-13 08:50:19');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `total` int(11) NOT NULL,
  `pay_method` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `address`, `phone`, `total`, `pay_method`, `created_at`, `updated_at`) VALUES
(11, 1, '4/75 shivaji nagar gurgaon', '9560369143', 1198, 'upi', '2021-05-13 16:47:36', '2021-05-13 16:47:36');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `price` int(11) NOT NULL,
  `picture` varchar(30) NOT NULL,
  `description` longtext NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `picture`, `description`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Red Valorant', 599, '../used/valorant_black.png', '100% Original, Unisex, Printed Round Neck, and Short Sleeves T-shirt 100% Cotton, Machine-wash\r\n', 6, '2021-05-11 19:18:53', '2021-05-11 19:18:53'),
(2, 'Aesthetic Black', 599, '../used/aesthetic_black.png', '100% Original, Unisex, Printed Round Neck, and Short Sleeves T-shirt\r\n\r\n', 1, '2021-05-11 20:34:25', '2021-05-11 20:34:25'),
(4, 'Bad Bro (White)', 549, '../used/bad_bro_white.jpg', '100% Original, Unisex, Printed Round Neck, and Short Sleeves T-shirt\r\n\r\n', 3, '2021-05-11 19:27:48', '2021-05-11 19:27:48'),
(7, 'Rebibe Me Jett Tshirt', 599, '../used/rebibe_black.png', 'Rebibe me Jett T-shirt Valorant 100% Original, Unisex, Printed Round Neck, and Short Sleeves T-shirt', 6, '2021-05-11 19:20:34', '2021-05-11 19:20:34'),
(8, 'Smoking Dwight', 599, '../used/dwight_black.png', 'Smoking Dwight (Black)\r\n100% Original, Unisex, Printed Round Neck, and Short Sleeves T-shirt', 5, '2021-05-11 19:22:04', '2021-05-11 19:22:04'),
(9, 'Assistant Regional Manager', 599, '../used/assistant_black.png', '100% Original, Unisex, Printed Round Neck, and Short Sleeves T-shirt\r\n\r\n', 5, '2021-05-11 19:23:35', '2021-05-11 19:23:35'),
(10, 'Solid Grey Melange Unisex T-shirt', 449, '../used/CharcoalMelange.png', '100% Original, Unisex, Plain Round Neck, and Short Sleeves T-shirt, Made in India\r\nMaterial & Care\r\n100% Cotton,\r\nMachine-wash', 4, '2021-05-11 19:24:44', '2021-05-11 19:24:44'),
(11, 'Solid Navy Blue Unisex T-shirt', 449, '../used/NavyBlue.png', '100% Original, Unisex, Plain Round Neck, and Short Sleeves T-shirt, Made in India\r\n\r\nMaterial & Care\r\n100% Cotton,\r\nMachine-wash', 4, '2021-05-11 19:25:26', '2021-05-11 19:25:26'),
(12, 'Nirvana Horizontal (Black)', 549, '../used/nirvana_black.jpg', '100% Original, Unisex, Printed Round Neck, and Short Sleeves T-shirt', 3, '2021-05-11 19:26:41', '2021-05-11 19:26:41'),
(13, 'Lost (White)', 599, '../used/love_white.jpg', '', 2, '2021-05-11 19:29:13', '2021-05-11 19:29:13'),
(15, 'Block Black', 599, '../used/block_black.jpg', '100% Original, Unisex, Printed Round Neck, and Short Sleeves T-shirt\r\n\r\n', 2, '2021-05-11 19:31:20', '2021-05-11 19:31:20'),
(17, 'Love (White)', 549, '../used/love_white.jpg', '100% Original, Unisex, Printed Round Neck, and Short Sleeves T-shirt\r\n\r\n', 1, '2021-05-11 19:32:39', '2021-05-11 19:32:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
