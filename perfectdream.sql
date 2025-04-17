-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2024 at 01:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perfectdream`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login_id` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `login_id`, `password`) VALUES
(1, 'company@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `course_category`
--

CREATE TABLE `course_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_category`
--

INSERT INTO `course_category` (`category_id`, `category_name`, `image`, `description`) VALUES
(1, 'gddf', '', 'qwertyuiop');

-- --------------------------------------------------------

--
-- Table structure for table `d_user`
--

CREATE TABLE `d_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `d_user`
--

INSERT INTO `d_user` (`id`, `user_id`, `account_no`) VALUES
(1, 6, '645789'),
(2, 6, '343453511');

-- --------------------------------------------------------

--
-- Table structure for table `e_addcart`
--

CREATE TABLE `e_addcart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `grand_total_price` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_ts` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `last_updated_ts` datetime NOT NULL,
  `last_updated_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `e_addcart`
--

INSERT INTO `e_addcart` (`id`, `user_id`, `grand_total_price`, `status`, `created_ts`, `created_by`, `last_updated_ts`, `last_updated_by`) VALUES
(4, 7, 3585, 50, '2023-11-28 13:02:12', 'user', '2023-11-28 15:17:03', 'user'),
(7, 5, 1656, 50, '2023-11-28 15:21:11', 'user', '2023-11-28 15:22:27', 'user'),
(10, 23, 979, 50, '2023-11-30 13:14:10', 'user', '2023-11-30 13:18:36', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `e_cart`
--

CREATE TABLE `e_cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `color` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `e_cart`
--

INSERT INTO `e_cart` (`cart_id`, `product_id`, `product_name`, `color`, `size`, `price`, `image`, `brand`, `quantity`, `total`, `user_id`) VALUES
(7, 32, 'Redmi  12C(Mint Green ,4GB RAM, 64GB Storage) | High Performance', 'Yellow', 'xxl', 8499, 'e3.webp', 'Redmi', 1, 0, ''),
(8, 35, 'The Kurta Company Men Brocade Jet Black Solid  Kurta | Perfect for Any Occasion', 'White', '36', 1199, 'm2.jpg', 'JadeBlue LifeStyle India ltd', 1, 0, ''),
(9, 43, 'Selvia Women top', 'Yellow', 's', 309, 'f2.jpg', 'Selvia', 1, 0, 'neha@gmail.com'),
(13, 25, 'Sukkhi Adorable Gold  Plated Pearl Choker Necklace', 'Pink', 'xxl', 244, 'td20.jpg', 'Sukkhi Classical Bridal', 1, 244, 'neha@gmail.com'),
(14, 27, 'Meera Fab Women&#39;s Cotton Printed Anarkali Kurti With Palazzo', 'Blue', '32', 769, 'td4.jpg', 'Meera fab', 1, 769, 'neha@gmail.com'),
(15, 26, 'Kaptown Kreations - Tlight dechi Metal Wall Hanging', 'Pink', 'xxl', 680, 'td3.jpg', 'KAPTOWN', 1, 680, 'neha@gmail.com'),
(17, 28, 'Back Banchers Cute New  Teddy for girls and kids', 'Baby Pink', 'm', 1549, 'td5.webp', 'Back Banchers', 1, 0, 'rohan@gmail.com'),
(18, 25, 'Sukkhi Adorable Gold  Plated Pearl Choker Necklace', 'Pink', 'xxl', 244, 'td20.jpg', 'Sukkhi Classical Bridal', 1, 244, 'rohan@gmail.com'),
(19, 52, 'Fashion Dream Girls Taddy Silk Maxi Length Flared Dress', 'Navy blue', 's', 956, 'fr100.jpg', 'Fashion Dream', 1, 956, 'neha@gmail.com'),
(20, 25, 'Sukkhi Adorable Gold  Plated Pearl Choker Necklace', 'Pink', 'xxl', 244, 'td20.jpg', 'Sukkhi Classical Bridal', 1, 244, 'neha@gmail.com'),
(21, 26, 'Kaptown Kreations - Tlight dechi Metal Wall Hanging', 'Pink', 'xxl', 680, 'td3.jpg', 'KAPTOWN', 1, 680, 'neha@gmail.com'),
(22, 31, 'Acer Aspire lite 11th Gen Intel Core i5 - 1155G7 thin  and Light Laptop', 'Black', '36', 42999, 'e2.webp', 'Acer', 1, 42999, 'neha@gmail.com'),
(23, 31, 'Acer Aspire lite 11th Gen Intel Core i5 - 1155G7 thin  and Light Laptop', 'Black', '36', 42999, 'e2.webp', 'Acer', 1, 42999, 'sonal@gmail.com'),
(24, 51, 'Rangnavi Women Rayon Anarkali Embroidered Printed Kurta Pant and Dupatta Set', 'purple', 'm', 779, 'w1.jpg', 'Rangnavi', 1, 779, 'sujata@gmail.com'),
(25, 25, 'Sukkhi Adorable Gold  Plated Pearl Choker Necklace', 'Pink', 'xxl', 244, 'td20.jpg', 'Sukkhi Classical Bridal', 1, 244, 'sujata@gmail.com'),
(26, 25, 'Sukkhi Adorable Gold  Plated Pearl Choker Necklace', 'Pink', 'xxl', 244, 'td20.jpg', 'Sukkhi Classical Bridal', 1, 244, 'sujata@gmail.com'),
(29, 24, 'Fire-Bolt Phoenix Ultra Luxury Smathwatch', 'Maroon', 'xxl', 2199, 'td1.jpg', 'Phoenix U Steel', 1, 2199, 'sujata@gmail.com'),
(33, 31, 'Acer Aspire lite 11th Gen Intel Core i5 - 1155G7 thin  and Light Laptop', 'Black', '36', 42999, 'e2.webp', 'Acer', 1, 42999, 'ria@gmail.com'),
(34, 24, 'Fire-Bolt Phoenix Ultra Luxury Smathwatch', 'Maroon', 'xxl', 2199, 'td1.jpg', 'Phoenix U Steel', 1, 2199, 'renu@gmail.com'),
(35, 24, 'Fire-Bolt Phoenix Ultra Luxury Smathwatch', 'Maroon', 'xxl', 2199, 'td1.jpg', 'Phoenix U Steel', 1, 2199, 'renu@gmail.com'),
(36, 53, 'Clutch plate', 'Black', 'free', 400, 'spr1.jpg', 'SPR', 1, 400, 'pushpa@gmail.com'),
(37, 53, 'Clutch plate', 'Black', 'free', 400, 'spr1.jpg', 'SPR', 1, 400, 'pushpa@gmail.com'),
(38, 53, 'Clutch plate', 'Black', 'free', 400, 'spr1.jpg', 'SPR', 1, 400, 'pushpa@gmail.com'),
(39, 53, 'Clutch plate', 'Black', 'free', 400, 'spr1.jpg', 'SPR', 1, 400, 'pushpa@gmail.com'),
(40, 55, 'dsaewrtdhg', 'Black', 'free', 212, '', 'dsasdfgbvc', 1, 212, 'pushpa@gmail.com'),
(41, 55, 'dsaewrtdhg', 'Black', 'free', 212, 'sb1.jpg', 'dsasdfgbvc', 1, 212, 'sonal@gmail.com'),
(43, 55, 'dsaewrtdhg', 'Black', 'free', 212, 'sb1.jpg', 'dsasdfgbvc', 1, 212, 'sumit@gmail.com'),
(44, 28, 'Back Banchers Cute New  Teddy for girls and kids', 'Baby Pink', 'm', 1549, 'td5.webp', 'Back Banchers', 1, 1549, 'sumit@gmail.com'),
(45, 53, 'Clutch plate', 'Black', 'free', 400, 'spr1.jpg', 'SPR', 1, 400, 'romil@gmail.com'),
(46, 55, 'dsaewrtdhg', 'Black', 'free', 212, 'sb1.jpg', 'dsasdfgbvc', 1, 212, 'pushpa@gmail.com'),
(47, 25, 'Sukkhi Adorable Gold  Plated Pearl Choker Necklace', 'Pink', 'xxl', 244, 'td20.jpg', 'Sukkhi Classical Bridal', 1, 244, 'aa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `e_cart_line`
--

CREATE TABLE `e_cart_line` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_price` decimal(10,0) NOT NULL,
  `status` int(11) NOT NULL,
  `total_price` decimal(10,0) NOT NULL,
  `created_ts` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `last_updated_ts` datetime NOT NULL,
  `last_updated_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `e_cart_line`
--

INSERT INTO `e_cart_line` (`id`, `cart_id`, `product_id`, `quantity`, `product_price`, `status`, `total_price`, `created_ts`, `created_by`, `last_updated_ts`, `last_updated_by`) VALUES
(2, 4, 28, 1, 1549, 50, 1549, '2023-11-28 13:02:12', 'user', '2023-11-28 13:02:12', 'user'),
(5, 0, 39, 1, 299, 50, 299, '2023-11-28 15:06:47', 'user', '2023-11-28 15:06:47', 'user'),
(6, 0, 39, 1, 299, 50, 299, '2023-11-28 15:10:01', 'user', '2023-11-28 15:10:01', 'user'),
(7, 0, 25, 1, 244, 50, 244, '2023-11-28 15:10:10', 'user', '2023-11-28 15:10:10', 'user'),
(8, 0, 40, 1, 514, 50, 514, '2023-11-28 15:14:54', 'user', '2023-11-28 15:14:54', 'user'),
(9, 4, 26, 1, 680, 50, 680, '2023-11-28 15:17:03', 'user', '2023-11-28 15:17:03', 'user'),
(10, 7, 29, 1, 979, 50, 979, '2023-11-28 15:21:11', 'user', '2023-11-28 15:21:11', 'user'),
(11, 7, 38, 1, 677, 50, 677, '2023-11-28 15:22:27', 'user', '2023-11-28 15:22:27', 'user'),
(21, 10, 26, 1, 680, 50, 680, '2023-11-30 13:14:10', 'user', '2023-11-30 13:14:10', 'user'),
(22, 10, 39, 1, 299, 50, 299, '2023-11-30 13:18:36', 'user', '2023-11-30 13:18:36', 'user'),
(26, 13, 26, 1, 680, 50, 680, '2024-01-16 16:55:03', 'user', '2024-01-16 16:55:03', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `e_category`
--

CREATE TABLE `e_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `created_ts` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `e_category`
--

INSERT INTO `e_category` (`category_id`, `category_name`, `created_ts`, `created_by`) VALUES
(1, 'Clothing &  accessories', '2023-11-22 17:45:55', ''),
(2, 'Electronics', '2023-11-22 17:45:55', ''),
(3, 'Beauty', '2023-11-22 17:45:55', ''),
(4, 'Home & kitchen', '2023-11-22 17:45:55', ''),
(5, 'Jewellery', '2023-11-22 17:45:55', ''),
(6, 'Luggage & Bags', '2023-11-22 17:45:55', ''),
(7, 'Books', '2023-11-22 17:45:55', ''),
(8, 'Baby', '2023-11-22 17:45:55', ''),
(9, 'Vehicle', '2023-11-22 17:46:03', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `e_color`
--

CREATE TABLE `e_color` (
  `color_id` int(11) NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `e_color`
--

INSERT INTO `e_color` (`color_id`, `color`) VALUES
(1, 'Red'),
(2, 'Blue'),
(3, 'Black'),
(4, 'White'),
(5, 'Yellow'),
(6, 'Pink'),
(7, 'Maroon'),
(8, 'Baby Pink'),
(9, 'Orange'),
(10, 'green'),
(11, 'purple'),
(12, 'Light green'),
(13, 'Navy blue'),
(14, 'Sky blue'),
(15, 'gray'),
(16, 'Brown'),
(17, 'golden'),
(18, 'silver'),
(19, 'Violet'),
(20, 'Musturd yellow'),
(21, 'Peach'),
(22, 'Magenda'),
(23, 'Rose gold'),
(26, 'yellow'),
(27, 'white'),
(28, 'pink'),
(29, 'blue'),
(30, 'green'),
(31, 'orange');

-- --------------------------------------------------------

--
-- Table structure for table `e_orders`
--

CREATE TABLE `e_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `grand_total_price` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_ts` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `last_update_ts` datetime NOT NULL,
  `last_updated_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `e_orders`
--

INSERT INTO `e_orders` (`order_id`, `user_id`, `grand_total_price`, `status`, `created_ts`, `created_by`, `last_update_ts`, `last_updated_by`) VALUES
(1, 23, 1101, 100, '2023-11-28 23:20:55', 'user', '2023-11-29 11:46:08', 'user'),
(2, 23, 1101, 100, '2023-11-29 23:49:14', 'admin', '2023-11-29 23:49:14', 'admin'),
(3, 1, 680, 100, '2024-01-16 16:55:15', 'admin', '2024-01-16 16:55:15', 'admin'),
(4, 1, 212, 100, '2024-01-16 17:29:31', 'admin', '2024-01-16 17:29:31', 'admin'),
(5, 38, 1549, 100, '2024-01-16 17:39:37', 'admin', '2024-01-16 17:39:37', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `e_order_address`
--

CREATE TABLE `e_order_address` (
  `id` int(11) NOT NULL,
  `name` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `user_id` int(11) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `address` varchar(220) NOT NULL,
  `pincode` int(11) NOT NULL,
  `address_line_1` varchar(220) NOT NULL,
  `address_line_2` varchar(220) NOT NULL,
  `city` varchar(220) NOT NULL,
  `state` varchar(220) NOT NULL,
  `country` varchar(220) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_ts` datetime NOT NULL DEFAULT current_timestamp(),
  `last_updated_by` varchar(100) NOT NULL,
  `last_updated_ts` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `e_order_address`
--

INSERT INTO `e_order_address` (`id`, `name`, `email`, `user_id`, `phone`, `address`, `pincode`, `address_line_1`, `address_line_2`, `city`, `state`, `country`, `created_by`, `created_ts`, `last_updated_by`, `last_updated_ts`) VALUES
(33, 'rohan', 'roha@gmail.com', 0, 9999454053, 'D21 officer colony dugda Bokaro', 828404, 'D21 officer colony dugda Bokaro', '', 'Bokaro', 'Jharkhand', 'India', 'admin', '2023-11-24 17:55:06', 'admin', '2023-11-24 17:55:06'),
(34, 'rohan', 'roha@gmail.com', 0, 9999454053, 'D21 officer colony dugda Bokaro', 828404, 'D21 officer colony dugda Bokaro', '', 'Bokaro', 'Jharkhand', 'India', 'admin', '2023-11-24 17:56:12', 'admin', '2023-11-24 17:56:12'),
(35, 'rohan', 'roha@gmail.com', 0, 9999454053, 'D21 officer colony dugda Bokaro', 828404, 'D21 officer colony dugda Bokaro', '', 'Bokaro', 'Jharkhand', 'India', 'admin', '2023-11-24 17:56:30', 'admin', '2023-11-24 17:56:30'),
(36, 'rohan', 'roha@gmail.com', 0, 9999454053, 'D21 officer colony dugda Bokaro', 828404, 'D21 officer colony dugda Bokaro', '', 'Bokaro', 'Jharkhand', 'India', 'admin', '2023-11-24 17:58:49', 'admin', '2023-11-24 17:58:49'),
(37, 'rohan', 'roha@gmail.com', 0, 9999454053, 'D21 officer colony dugda Bokaro', 828404, 'D21 officer colony dugda Bokaro', '', 'Bokaro', 'Jharkhand', 'India', 'admin', '2023-11-24 17:59:17', 'admin', '2023-11-24 17:59:17'),
(38, 'rohan', 'roha@gmail.com', 0, 9999454053, 'D21 officer colony dugda Bokaro', 828404, 'D21 officer colony dugda Bokaro', '', 'Bokaro', 'Jharkhand', 'India', 'admin', '2023-11-24 18:00:24', 'admin', '2023-11-24 18:00:24'),
(39, 'sonal', 'dvddfgbvc@gmail.com', 26, 9876535352, 'wertjhgbfvcwerthg', 828404, 'wertjhgbfvcwerthg', 'adrhfg', 'Bokaro', 'Jharkhand', 'India', 'admin', '2023-11-24 20:41:51', 'admin', '2023-11-24 20:41:51'),
(40, 'dsfghnb', 'roha@gmail.com', 5, 9999454053, 'D21 officer colony dugda Bokaro', 828404, 'D21 officer colony dugda Bokaro', '', 'Bokaro', 'Jharkhand', 'India', 'admin', '2023-11-25 13:58:14', 'admin', '2023-11-25 13:58:14'),
(41, 'Neha Kumari', 'neha@gmail.com', 0, 8294372130, 'D/21 officer colony', 828404, 'wertjhgbfvcwerthg', '', 'Bokaro', 'Jharkhand', 'India', 'admin', '2023-11-29 23:49:14', 'admin', '2023-11-29 23:49:14'),
(42, 'sonal', 'dvddfgbvc@gmail.com', 1, 9876535352, 'wertjhgbfvcwerthg', 828404, 'D21 officer colony dugda Bokaro', '', 'Bokaro', 'Jharkhand', 'India', 'admin', '2024-01-16 16:55:15', 'admin', '2024-01-16 16:55:15'),
(43, 'rohan', 'roha@gmail.com', 1, 9999454053, 'D21 officer colony dugda Bokaro', 828404, 'D/21 officer colony', '', 'dugda', 'Jharkhand', 'India', 'admin', '2024-01-16 17:29:31', 'admin', '2024-01-16 17:29:31'),
(44, 'rohan', 'roha@gmail.com', 38, 9999454053, 'D21 officer colony dugda Bokaro', 828404, 'wertjhgbfvcwerthg', '', 'Bokaro', 'Jharkhand', 'India', 'admin', '2024-01-16 17:39:37', 'admin', '2024-01-16 17:39:37');

-- --------------------------------------------------------

--
-- Table structure for table `e_order_history`
--

CREATE TABLE `e_order_history` (
  `order_id` int(11) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `order_date` datetime NOT NULL,
  `order_delivery_date` datetime NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `customers_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `e_order_line`
--

CREATE TABLE `e_order_line` (
  `order_line_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `created_ts` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `last_updated_ts` datetime NOT NULL,
  `last_update_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `e_order_line`
--

INSERT INTO `e_order_line` (`order_line_id`, `order_id`, `product_id`, `quantity`, `status`, `product_price`, `total_price`, `created_ts`, `created_by`, `last_updated_ts`, `last_update_by`) VALUES
(1, 8, 25, 2, 488, 50, 244, '2023-11-28 23:20:55', 'user', '2023-11-28 23:31:14', 'user'),
(2, 8, 57, 3, 123, 50, 369, '2023-11-28 23:41:49', 'user', '2023-11-29 11:46:08', 'user'),
(4, 2, 25, 2, 488, 100, 244, '2023-11-29 23:49:14', 'admin', '2023-11-29 23:49:14', 'admin'),
(5, 2, 57, 3, 123, 100, 369, '2023-11-29 23:49:14', 'admin', '2023-11-29 23:49:14', 'admin'),
(7, 3, 26, 1, 680, 100, 680, '2024-01-16 16:55:15', 'admin', '2024-01-16 16:55:15', 'admin'),
(8, 4, 55, 1, 212, 100, 212, '2024-01-16 17:29:31', 'admin', '2024-01-16 17:29:31', 'admin'),
(9, 5, 28, 1, 1549, 100, 1549, '2024-01-16 17:39:37', 'admin', '2024-01-16 17:39:37', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `e_products`
--

CREATE TABLE `e_products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_description` varchar(2000) NOT NULL,
  `product_price` float NOT NULL,
  `product_status` varchar(50) NOT NULL,
  `product_discount` int(11) NOT NULL,
  `discount_price` float NOT NULL,
  `product_image1` varchar(200) NOT NULL,
  `product_image2` varchar(200) NOT NULL,
  `product_image3` varchar(200) NOT NULL,
  `product_image4` varchar(200) NOT NULL,
  `product_color` varchar(50) NOT NULL,
  `product_size` varchar(50) NOT NULL,
  `sku` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `sub_category` varchar(50) NOT NULL,
  `subcategory_type_id` int(11) NOT NULL,
  `brand` varchar(200) NOT NULL,
  `create_ts` datetime NOT NULL,
  `last_updated_ts` datetime NOT NULL,
  `created_by` varchar(10) NOT NULL,
  `last_updated_by` varchar(10) NOT NULL,
  `on_offer` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `e_products`
--

INSERT INTO `e_products` (`product_id`, `product_name`, `product_description`, `product_price`, `product_status`, `product_discount`, `discount_price`, `product_image1`, `product_image2`, `product_image3`, `product_image4`, `product_color`, `product_size`, `sku`, `category`, `sub_category`, `subcategory_type_id`, `brand`, `create_ts`, `last_updated_ts`, `created_by`, `last_updated_by`, `on_offer`) VALUES
(24, 'Fire-Bolt Phoenix Ultra Luxury Smathwatch', 'The watch will work on a single charge for about 7 days (without Bluetooth calling) and about 4 Days with Bluetooth calling. 【Stainless Steel Luxury Straps】- Fire-Boltt Phoenix Ultra has stainless steel magnetic closure straps for ultimate luxury look and sleek finish', 12499, 'available', 82, 2199, 'td1.jpg', 'td0.jpg', 'td00.jpg', 'td000.jpg', '7', '11', 'fjbgmtori6578', '1', '4', 46, 'Phoenix U Steel', '2023-08-16 15:19:01', '2023-08-16 15:19:01', 'Admin', 'Admin', 'Y'),
(25, 'Sukkhi Adorable Gold  Plated Pearl Choker Necklace', 'Superior Quality & Skin Friendly: High Quality as per International Standards that makes it very skin friendly. It has been made from toxic free materials Anti-Allergic and Safe for Skin. It can be worn over long time periods without any complains of ach and swelling.', 1670, 'available', 85, 244, 'td20.jpg', 'td2.jpg', 'td200.jpg', '', '6', '11', 'nbhjjn6745', '5', '24', 68, 'Sukkhi Classical Bridal', '2023-08-16 15:29:01', '2023-08-16 15:29:01', 'Admin', 'Admin', 'Y'),
(26, 'Kaptown Kreations - Tlight dechi Metal Wall Hanging', 'Our Home and Decoration Products are suitable for living room, Bedroom, Dining area and for other interior design.', 1700, 'available', 40, 680, 'td3.jpg', '', '', '', '6', '11', 'nbdjgbrt6545', '4', '20', 61, 'KAPTOWN', '2023-08-16 15:44:47', '2023-08-16 15:44:47', 'Admin', 'Admin', 'Y'),
(27, 'Meera Fab Women&#39;s Cotton Printed Anarkali Kurti With Palazzo', 'There might be slight variation in the actual color of the product due to different screen resolutions.', 5999, 'available', 87, 769, 'td4.jpg', 'td40.jpg', 'td400.jpg', 'td4000.jpg', '2', '3', 'jxdfvme445323', '1', '2', 14, 'Meera fab', '2023-08-16 15:51:52', '2023-08-16 15:51:52', 'Admin', 'Admin', 'Y'),
(28, 'Back Banchers Cute New  Teddy for girls and kids', 'Huggable And Loveable For Someone Special with extra soft and important Ceremony Special.', 2099, 'available', 26, 1549, 'td5.webp', 'td50.jpg', 'td500.jpg', 'td5000.jpg', '8', '8', 'dmfgv653', '7', '26', 70, 'Back Banchers', '2023-08-16 16:47:33', '2023-08-16 16:47:33', 'Admin', 'Admin', 'Y'),
(29, 'Sril Women&#39;s Leheriya Printed & Lace Georgette sare with unstitched Blouse Piece', 'This saree is suitable to get a contemporary stylish look in normal occasions, college farewell, family get together, regular or daily Use, office or work or gifting to loved one .', 5043, 'available', 81, 979, 'td6.jpg', 'td60.jpg', 'td600.jpg', 'td6000.jpg', '5', '11', 'mfr524gc', '1', '2', 15, 'Siril', '2023-08-16 16:51:20', '2023-08-16 16:51:20', 'Admin', 'Admin', 'Y'),
(30, 'Nu 165 cm Premium Series webOS Smart LED TV', 'Smart TV Features: 4K | Real Cinema | Gamma Cinema Mode | Game Optimised Mode | MEMC | Magic Remote (AI Voice Enabled) |Magic Mobile Connection | Miracast | Multi-Tasking', 94999, 'available', 48, 48990, 'e1.webp', 'e10.jpg', 'e100.jpg', 'e1000.jpg', '4', '10', 'nv4575cv', '2', '10', 24, 'NU', '2023-08-16 17:01:52', '2023-08-16 17:01:52', 'Admin', 'Admin', ''),
(31, 'Acer Aspire lite 11th Gen Intel Core i5 - 1155G7 thin  and Light Laptop', 'Great performance meets long battery life with the Intel Core i5-1155G7 Processor - up to 4.50 GHz, 4 cores, 8 threads, 8 MB Intel Smart Cache', 61990, 'available', 31, 42999, 'e2.webp', 'e20.jpg', 'e200.jpg', 'e2000.jpg', '3', '5', 'mnfgbd5634', '2', '9', 25, 'Acer', '2023-08-16 17:07:12', '2023-08-16 17:07:12', 'Admin', 'Admin', ''),
(32, 'Redmi  12C(Mint Green ,4GB RAM, 64GB Storage) | High Performance', 'Display: Large 17cm HD+ display with Scratch resistant Glass and Oleophobic coating | 500nits peak brightness\r\n5000mAh(typ) battery with 10W charger in-box', 13999, 'available', 39, 8499, 'e3.webp', 'e30.jpg', 'e300.jpg', 'e3000.jpg', '5', '11', 'MIUI13sdokv34', '2', '11', 30, 'Redmi', '2023-08-16 17:38:09', '2023-08-16 17:38:09', 'Admin', 'Admin', ''),
(33, 'Boult Audio Anchor Bluetooth Wireless Over Ear Headphones with Mic, Active Noise Cancellation', 'Enjoy a low latency gaming experience with the Game Mode on. With the provision of AUX connectivity, have an even better gaming experience with ANC and ultra-low latency.', 9999, 'available', 60, 3999, 'e4.jpg', 'e40.jpg', 'e400.jpg', 'e4000.jpg', '4', '11', 'fvsk4u542 v', '2', '12', 31, 'Boult Audio', '2023-08-16 18:29:17', '2023-08-16 18:29:17', 'Admin', 'Admin', ''),
(34, 'Dennis Lingo Men&#39;s Solid Slim Fit Casual Shirt', '100% Premium Cottton, extremely soft finish and Rich look .\r\nSolid full sleeve casual shirt .\r\nSlim Fit ,Machine Wash .', 1849, 'available', 74, 489, 'm1.jpg', 'm10.jpg', 'm100.jpg', 'm1000.jpg', '4', '3', 'sdfkvjhw43y3458', '1', '1', 1, 'Dennis Lingo', '2023-08-16 18:38:07', '2023-08-16 18:38:07', 'Admin', 'Admin', ''),
(35, 'The Kurta Company Men Brocade Jet Black Solid  Kurta | Perfect for Any Occasion', 'Crafted with care, this Brocade traditional kurtas ensures a premium quality kurta for men that combines traditional aesthetics with modern fashion trends.', 1199, 'available', 0, 1199, 'm2.jpg', 'm20.jpg', 'm200.jpg', 'm2000.jpg', '4', '5', 'B0CB8QK1F7', '1', '1', 7, 'JadeBlue LifeStyle India ltd', '2023-08-17 12:34:04', '2023-08-17 12:34:04', 'Admin', 'Admin', ''),
(36, 'Destiny Fashion Men&#39;s Slim Fit Casual Shirt', 'Printed; Collar Style: Classic Collar; Closure Type: Button; Material Composition: 84 % Cotton , 20 % Polyeser; Lifestyle: Dresscasualthemedwork Utility', 1999, 'available', 80, 399, 'm3.jpg', 'm30.jpg', '', '', '5', '9', 'dsfove5490', '1', '1', 1, 'Dentiny Fashion', '2023-08-17 12:42:28', '2023-08-17 12:42:28', 'Admin', 'Admin', ''),
(37, 'Urbano Fashion Men&#39;s Regular Fit Washed Full Sleeve Denim Jacket', 'Stylish Light Grey Denim Jacket ; Trendy Heavy Washed Pattern; 100% Mercerised Denim Cotton Fabric ; Regular Fit ; Buttoned Full-Front Opening ; Slim Collar .\r\n Machine Wash , Long Sleeve.', 2399, 'available', 58, 999, 'm4.jpg', 'm40.jpg', 'm400.jpg', 'm4000.jpg', '3', '10', 'dfke6435', '1', '1', 1, 'Urbano Fashion', '2023-08-17 12:48:20', '2023-08-17 12:48:20', 'Admin', 'Admin', ''),
(38, 'Urbano Fashion Men&#39;s Slim Fit Jogger Jeans Stretch', 'Wash Dark Colors Separately , Slim Fit,Cotton with Lycra for Stretchability , Light Blue,Mid-Rise; Cotton Blend with Stretch Fabric - To give you that extra comfort; Washed Style .', 1499, 'available', 55, 677, 'm50.jpg', 'm5.jpg', 'm500.jpg', 'm5000.jpg', '2', '5', 'ldkgvm69349', '1', '1', 2, 'Urbano Fashion', '2023-08-17 13:01:53', '2023-08-17 13:01:53', 'Admin', 'Admin', ''),
(39, 'LEOTUDE Men&#39;s Regular Fit Cotton Blend Full Sleeve  T-Shirt', 'Hand Wash Only , Regular Fit, Cottonblend, Full Sleeve , Crew Neck, Solid .', 1099, 'available', 73, 299, 'm6.jpg', 'm60.jpg', 'm600.jpg', 'm6000.jpg', '1', '8', 'fgme0t5690', '1', '1', 3, 'Leotude', '2023-08-17 13:18:51', '2023-08-17 13:18:51', 'Admin', 'Admin', ''),
(40, 'Uptownie Lite women&#39;n Maxi  JumpSuit', 'Machine Wash, Material: crepe Color: maroon,Neck style: button front,3/4 sleeve .', 1999, 'available', 74, 514, 'f1.jpg', 'f10.jpg', 'f100.jpg', 'f1000.jpg', '1', '7', 'fjbe6u4', '1', '2', 35, 'Uptownie Lite', '2023-08-17 13:57:41', '2023-08-17 13:57:41', 'Admin', 'Admin', ''),
(43, 'Selvia Women top', 'Machine Wash ,22 Inch|| Bust Size : 35 Inch|| Sleeve Length : 17 Inch || Select required Bust Size from Filter Box S (35 Inch),M (37 Inch),L (39 Inch),XL (41 Inch) , Digital Print, Evening,Party or Casual Wear .', 1332, 'available', 77, 309, 'f2.jpg', 'f20.jpg', 'f200.jpg', 'f2000.jpg', '5', '7', 'rtiueb695h47', '1', '2', 11, 'Selvia', '2023-08-17 14:42:14', '2023-08-17 14:42:14', 'Admin', 'Admin', ''),
(44, 'Purvaja Women&#39;s Maxi Dress', 'Hand Wash Only, 100% Heavy Imported With fully Stretchable,  Knee-Long, Style Name: Empire.', 2699, 'available', 85, 395, 'f3.jpg', 'f30.jpg', 'f300.jpg', 'f3000.jpg', '7', '9', 'erfufe575348', '1', '2', 13, 'Purvaja', '2023-08-17 14:53:00', '2023-08-17 14:53:00', 'Admin', 'Admin', ''),
(45, 'Kotty Women Polyester Blend Green Solid Trousers', 'Machine Wash , Women Pant , Polyester blend , Regular Length , Button', 1999, 'available', 84, 329, 'f4.jpg', 'f40.jpg', 'f400.jpg', 'f4000.jpg', '2', '4', 'hrti34o6gu', '1', '2', 20, 'Kotty', '2023-08-17 15:00:38', '2023-08-17 15:00:38', 'Admin', 'Admin', ''),
(49, 'HammerSmith Men&#39;s Printed Slim Fit Cotton Casual Shirt', 'Resort shirts are short-sleeved, light-weight shirts that are perfect for summer beach outings. They are airy and boast attractive tropical patterns, such as flowers, palm trees, or abstract patterns in hard-to-miss hues.', 1999, 'available', 75, 499, 's1.jpg', 's10.jpg', 's100.jpg', 's1000.jpg', '9', '9', 'sjfcn0uy9854', '1', '1', 1, 'HammerSmith', '2023-08-18 13:39:40', '2023-08-18 13:39:40', 'Admin', 'Admin', ''),
(50, 'Symbol Men&#39;s Regular Fit Formal Shirt', 'Machine Wash , Soft & Breathable Cotton fabric , Regular collar long sleeve shirt, Single pocket at chest, Pair it up with formal trousers for a sharp formal look .', 2099, 'available', 66, 709, 'S2.jpg', 'S20.jpg', 'S200.jpg', 'S2000.jpg', '16', '10', 'mvfr654', '1', '1', 1, 'Symbol  Store', '2023-08-18 13:52:05', '2023-08-18 13:52:05', 'Admin', 'Admin', ''),
(51, 'Rangnavi Women Rayon Anarkali Embroidered Printed Kurta Pant and Dupatta Set', 'There might be slight variation in the actual color of the product due to different screen resolutions.\r\nMachine Wash , Rayon , Palazzo - Rayon & Dupatta- Chifon .', 2499, 'available', 69, 779, 'w1.jpg', 'w10.jpg', 'w100.jpg', 'w1000.jpg', '11', '8', 'xfbmgry495p', '1', '2', 14, 'Rangnavi', '2023-08-21 15:48:30', '2023-08-21 15:48:30', 'Admin', 'Admin', ''),
(52, 'Fashion Dream Girls Taddy Silk Maxi Length Flared Dress', 'Digital print and Embroidery Codin Sequence Work , Cold Water Wash/ Hand Wash ,\r\nTabby Silk, Lining Fabric - Butter Crepe With Cancan', 3499, 'available', 73, 956, 'fr100.jpg', 'fr1.jpg', 'fr10.jpg', 'kf.webp', '13', '7', 'mdvfg6760459-3', '1', '3', 41, 'Fashion Dream', '2023-08-22 16:11:52', '2023-08-22 16:11:52', 'Admin', 'Admin', ''),
(53, 'Clutch plate', 're vgfbpvc,parvdb gnersgdhgnbarefgd', 456, 'available', 32, 400, 'spr1.jpg', 'spr2.jpg', 'spr3.jpg', '', '3', '30', 'dserdgfhbn', '9', '37', 81, 'SPR', '2023-11-24 12:10:42', '2023-11-24 12:10:42', 'Admin', 'Admin', ''),
(55, 'dsaewrtdhg', 'ewrtyjghmnbvcfdryftjghm', 435, 'available', 22, 212, 'sb1.jpg', 'sb2.jpg', 'sb3.jpg', 'sb4.jpg', '3', '30', 'dewrgdfb', '9', '37', 82, 'dsasdfgbvc', '2023-11-24 14:51:09', '2023-11-24 14:51:09', 'Admin', 'Admin', ''),
(57, 'derthgnbvcx', 'sdretghfgjngbvc', 234, 'available', 12, 123, 'ol1.jpg', 'ol2.jpg', 'ol3.jpg', 'ol4.jpg', '3', '30', 'dsfsgbnv', '9', '37', 82, 'dsfsrdgvb', '2023-11-24 15:00:00', '2023-11-24 15:00:00', 'Admin', 'Admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `e_size`
--

CREATE TABLE `e_size` (
  `size_id` int(11) NOT NULL,
  `size` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `e_size`
--

INSERT INTO `e_size` (`size_id`, `size`) VALUES
(1, '28'),
(2, '30'),
(3, '32'),
(4, '34'),
(5, '36'),
(6, '38'),
(7, 's'),
(8, 'm'),
(9, 'l'),
(10, 'xl'),
(11, 'xxl'),
(12, '15 inch'),
(13, '5.11 inches'),
(14, '6.69 inches'),
(15, '17 cm'),
(16, '15 cm'),
(17, '16 cm'),
(18, '15.4 inches'),
(19, '15.6 inches'),
(20, '14 inches'),
(21, '16 inches'),
(22, '17 inches'),
(23, '13 inches'),
(30, 'free'),
(31, '3'),
(32, '4'),
(33, '5'),
(34, '6'),
(35, '7'),
(36, '8'),
(37, '9'),
(46, '10');

-- --------------------------------------------------------

--
-- Table structure for table `e_subcategory`
--

CREATE TABLE `e_subcategory` (
  `subcategory_id` int(11) NOT NULL,
  `subcategory_name` varchar(200) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_ts` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `e_subcategory`
--

INSERT INTO `e_subcategory` (`subcategory_id`, `subcategory_name`, `category_id`, `created_ts`, `created_by`) VALUES
(1, 'Men-fashion', 1, '2023-11-22 17:49:08', ''),
(2, 'Women-fashion', 1, '2023-11-22 17:49:08', ''),
(3, 'Kids-fashion', 1, '2023-11-22 17:49:08', ''),
(4, 'Watch', 1, '2023-11-22 17:49:08', ''),
(5, 'Belt', 1, '2023-11-22 17:49:08', ''),
(6, 'Wallet', 1, '2023-11-22 17:49:08', ''),
(7, 'Shoes', 1, '2023-11-22 17:49:08', ''),
(8, 'Perfume', 1, '2023-11-22 17:49:08', ''),
(9, 'Computer & Accessories', 2, '2023-11-22 17:49:08', ''),
(10, 'Home Audiio,Tv & Home Theater', 2, '2023-11-22 17:49:08', ''),
(11, 'Telephones &Accessories', 2, '2023-11-22 17:49:08', ''),
(12, 'Headphones & Earbuds', 2, '2023-11-22 17:49:08', ''),
(13, 'Skin Care', 3, '2023-11-22 17:49:08', ''),
(14, 'Hair Care', 3, '2023-11-22 17:49:08', ''),
(15, 'Bath & Shower', 3, '2023-11-22 17:49:08', ''),
(16, 'Makeup', 3, '2023-11-22 17:49:08', ''),
(17, 'Salon & Spa Equipment', 3, '2023-11-22 17:49:08', ''),
(18, 'Manicure & Pedicure', 3, '2023-11-22 17:49:08', ''),
(19, 'Kitchen & Dining', 4, '2023-11-22 17:49:08', ''),
(20, 'Home Essentials', 4, '2023-11-22 17:49:08', ''),
(21, 'Cookware Sets', 4, '2023-11-22 17:49:08', ''),
(22, 'Gas stoves', 4, '2023-11-22 17:49:08', ''),
(23, 'Silver jewellery', 5, '2023-11-22 17:49:08', ''),
(24, 'Gold and Diamond jewellery', 5, '2023-11-22 17:49:08', ''),
(25, 'Men\'s jewellery & accessories', 5, '2023-11-22 17:49:08', ''),
(26, 'Soft Toy', 8, '2023-11-22 17:49:08', ''),
(27, 'Electronic Toys', 8, '2023-11-22 17:49:08', ''),
(28, 'Nappy', 8, '2023-11-22 17:49:08', ''),
(29, 'trolly', 6, '2023-11-22 17:49:08', ''),
(30, 'ladies Purse', 6, '2023-11-22 17:49:08', ''),
(31, 'clutch', 6, '2023-11-22 17:49:08', ''),
(32, 'sling bag', 6, '2023-11-22 17:49:08', ''),
(33, 'Travel_bag', 6, '2023-11-22 17:49:08', ''),
(34, 'Novel', 7, '2023-11-22 17:49:08', ''),
(35, 'Story book', 7, '2023-11-22 17:49:08', ''),
(36, 'Courses Book', 7, '2023-11-22 17:49:08', ''),
(37, 'Motorbike Accessories', 9, '2023-11-22 17:49:16', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `e_subcategory_type`
--

CREATE TABLE `e_subcategory_type` (
  `subcategory_type_id` int(11) NOT NULL,
  `subcategory_type` varchar(50) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `created_ts` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `e_subcategory_type`
--

INSERT INTO `e_subcategory_type` (`subcategory_type_id`, `subcategory_type`, `subcategory_id`, `quantity`, `image`, `created_ts`, `created_by`) VALUES
(1, 'Shirt', 1, 6, 'm10.jpg', '2023-11-22 18:08:17', ''),
(2, 'Jeans', 1, 25, 'm50.jpg', '2023-11-22 18:08:17', ''),
(3, 'T-shirt', 1, 10, 'm60.jpg', '2023-11-22 18:08:17', ''),
(4, 'Shorts', 1, 32, 'st.webp', '2023-11-22 18:08:17', ''),
(5, 'Trouser', 1, 9, 'tr.webp', '2023-11-22 18:08:17', ''),
(6, 'Blazer', 1, 12, 'bl.webp', '2023-11-22 18:08:17', ''),
(7, 'Kurta-Pjama', 1, 15, 'kp.jpg', '2023-11-22 18:08:17', ''),
(8, '3 Piece Suit', 1, 10, '3p.webp', '2023-11-22 18:08:17', ''),
(9, 'Kurti', 2, 20, 'kk.webp', '2023-11-22 18:08:17', ''),
(10, 'Sharara garara', 2, 10, 'sr.webp', '2023-11-22 18:08:17', ''),
(11, 'Top', 2, 50, 'tp.webp', '2023-11-22 18:08:17', ''),
(12, 'Jean', 2, 1, 'jn.webp', '2023-11-22 18:08:17', ''),
(13, 'One Piece', 2, 2, 'op.webp', '2023-11-22 18:08:17', ''),
(14, 'Frock suit', 2, 30, 'fr.webp', '2023-11-22 18:08:17', ''),
(15, 'Saree', 2, 26, 'sa.webp', '2023-11-22 18:08:17', ''),
(16, 'Lehanga', 2, 7, 'lh.webp', '2023-11-22 18:08:17', ''),
(17, 'Shorts', 2, 200, 'srt.webp', '2023-11-22 18:08:17', ''),
(18, 'Dangary', 2, 7, 'dr.webp', '2023-11-22 18:08:17', ''),
(19, 'Gown', 2, 13, 'gw.webp', '2023-11-22 18:08:17', ''),
(20, 'Denim jean', 2, 10, 'dm.webp', '2023-11-22 18:08:17', ''),
(21, 'Leggies', 2, 12, 'lg.webp', '2023-11-22 18:08:17', ''),
(22, 'Dupatta', 2, 100, 'dp.webp', '2023-11-22 18:08:17', ''),
(23, 'computer', 9, 40, 'com.jpg', '2023-11-22 18:08:17', ''),
(24, 'Moniter', 9, 30, 'mo.jpg', '2023-11-22 18:08:17', ''),
(25, 'Laptop', 9, 12, 'lapt.webp', '2023-11-22 18:08:17', ''),
(26, 'Keyboard', 9, 12, 'keyb.webp', '2023-11-22 18:08:17', ''),
(27, 'Speaker', 10, 15, 'h.webp', '2023-11-22 18:08:17', ''),
(28, 'Bluetooth Speaker', 10, 25, 'o.webp', '2023-11-22 18:08:17', ''),
(29, 'Telephone', 11, 10, 'tel.webp', '2023-11-22 18:08:17', ''),
(30, 'Smartphone', 11, 50, 'sm.webp', '2023-11-22 18:08:17', ''),
(31, 'Headphone', 12, 60, 'hed.webp', '2023-11-22 18:08:17', ''),
(32, 'Earbuds', 12, 70, 'ear.webp', '2023-11-22 18:08:17', ''),
(33, 'Bluetooth', 12, 30, 'blue.webp', '2023-11-22 18:08:17', ''),
(34, 'Earphone', 12, 50, 'earp.webp', '2023-11-22 18:08:17', ''),
(35, 'Jumpsuit', 2, 10, 'jum.webp', '2023-11-22 18:08:17', ''),
(36, 'T-Shirt', 3, 6, 'kt.webp', '2023-11-22 18:08:17', ''),
(37, 'Pant', 3, 32, 'pant.webp', '2023-11-22 18:08:17', ''),
(38, '3Piece', 3, 43, '3pi.webp', '2023-11-22 18:08:17', ''),
(39, 'Kurta - pajama', 3, 22, 'sar.jpg', '2023-11-22 18:08:17', ''),
(40, 'Dangri-jumpsuit', 3, 12, 'dj.webp', '2023-11-22 18:08:17', ''),
(41, 'Frock-suit', 3, 15, 'kf.webp', '2023-11-22 18:08:17', ''),
(42, 'Dresses', 3, 52, 'ko.webp', '2023-11-22 18:08:17', ''),
(43, 'Jumpsuit', 3, 30, 'kj.webp', '2023-11-22 18:08:17', ''),
(44, 'Frock', 3, 28, 'kfr.webp', '2023-11-22 18:08:17', ''),
(45, 'Boys Watch', 4, 50, 'wa.jpg', '2023-11-22 18:08:17', ''),
(46, 'Girls Watch', 4, 34, 'td1.jpg', '2023-11-22 18:08:17', ''),
(47, 'Smart Watch', 4, 57, 'smt.webp', '2023-11-22 18:08:17', ''),
(48, 'Men Belt', 5, 50, 'bt.webp', '2023-11-22 18:08:17', ''),
(49, 'Women belt', 5, 23, 'wb.webp', '2023-11-22 18:08:17', ''),
(50, 'Men Wallet', 6, 32, 'mw.webp', '2023-11-22 18:08:17', ''),
(51, 'Women Wallet', 6, 60, 'ww.webp', '2023-11-22 18:08:17', ''),
(52, 'Sports', 7, 23, 'sp.webp', '2023-11-22 18:08:17', ''),
(53, 'Heels', 7, 60, 'hee.webp', '2023-11-22 18:08:17', ''),
(54, 'Flats', 7, 28, 'flt.webp', '2023-11-22 18:08:17', ''),
(55, 'Slippers', 7, 40, 'spl.webp', '2023-11-22 18:08:17', ''),
(56, 'Perfume', 8, 34, 'pr.webp', '2023-11-22 18:08:17', ''),
(57, 'Deo', 8, 54, 'de.webp', '2023-11-22 18:08:17', ''),
(58, 'Crockery', 19, 340, 'cr.webp', '2023-11-22 18:08:17', ''),
(59, 'kitchen utensils', 19, 100, 'ut.webp', '2023-11-22 18:08:17', ''),
(60, 'Cleaning', 20, 234, 'cl.webp', '2023-11-22 18:08:17', ''),
(61, 'Home decor', 20, 300, 'dro.webp', '2023-11-22 18:08:17', ''),
(62, 'Cooker', 21, 65, 'cro.webp', '2023-11-22 18:08:17', ''),
(63, 'Gas stove', 22, 54, 'gas.webp', '2023-11-22 18:08:17', ''),
(64, 'Diamond', 24, 25, 'di.webp', '2023-11-22 18:08:17', ''),
(65, 'Gold', 24, 40, 'gd.webp', '2023-11-22 18:08:17', ''),
(66, 'Silver', 23, 17, 'si.jpg', '2023-11-22 18:08:17', ''),
(67, 'Silver Oxidise', 23, 100, 'ox.webp', '2023-11-22 18:08:17', ''),
(68, 'Austrian Diamonds', 23, 34, 'jad.jpg', '2023-11-22 18:08:17', ''),
(69, 'Men\'s Jewellery', 25, 25, 'mj.webp', '2023-11-22 18:08:17', ''),
(70, 'Soft Toy', 26, 400, 'std.webp', '2023-11-22 18:08:17', ''),
(71, 'Electronic Toy', 27, 100, 'et.webp', '2023-11-22 18:08:17', ''),
(72, 'Nappy', 28, 500, 'np.jpg', '2023-11-22 18:08:17', ''),
(73, 'Trolly', 29, 50, 'tro.webp', '2023-11-22 18:08:17', ''),
(74, 'Ladies Purse', 30, 400, 'prs.webp', '2023-11-22 18:08:17', ''),
(75, 'Clutch', 31, 200, 'cls.jpg', '2023-11-22 18:08:17', ''),
(76, 'Sling Bag', 32, 43, 'sli.webp', '2023-11-22 18:08:17', ''),
(77, 'Travel Bag', 33, 40, 'trb.webp', '2023-11-22 18:08:17', ''),
(78, 'Novels', 34, 300, 'no.webp', '2023-11-22 18:08:17', ''),
(79, 'Story Books', 35, 50, 'str.webp', '2023-11-22 18:08:17', ''),
(80, 'Courses Books', 36, 100, 'crb.webp', '2023-11-22 18:08:17', ''),
(81, 'Clutch', 37, 2, 'clutch.jpg', '2023-11-22 23:30:46', 'Admin'),
(82, 'Cush Rubber Set', 37, 32, 'WhatsApp Image 2023-11-21 at 17.07.25_722607fe.jpg', '2023-11-24 11:59:58', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `insu_user_request`
--

CREATE TABLE `insu_user_request` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nomineename` varchar(100) NOT NULL,
  `relation` varchar(100) NOT NULL,
  `age` bigint(20) NOT NULL,
  `dob` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `policy_type` varchar(50) DEFAULT NULL,
  `qualification` varchar(400) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `monthly_income` varchar(20) DEFAULT NULL,
  `d_o_b_of_nominee` date DEFAULT NULL,
  `rc_book_img` varchar(100) DEFAULT NULL,
  `brand_of_car` varchar(200) DEFAULT NULL,
  `other_brand_of_car` varchar(100) DEFAULT NULL,
  `address_proof_img` varchar(100) NOT NULL,
  `id_proof_img` varchar(100) NOT NULL,
  `yearly_premium` varchar(20) DEFAULT NULL,
  `term` varchar(20) DEFAULT NULL,
  `sum_assured` varchar(20) DEFAULT NULL,
  `policy_number` varchar(100) DEFAULT NULL,
  `company_name` varchar(200) DEFAULT NULL,
  `company_plan` varchar(200) DEFAULT NULL,
  `created_ts` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `last_updated_ts` datetime NOT NULL,
  `last_updated_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `insu_user_request`
--

INSERT INTO `insu_user_request` (`id`, `name`, `number`, `email`, `nomineename`, `relation`, `age`, `dob`, `status`, `policy_type`, `qualification`, `occupation`, `monthly_income`, `d_o_b_of_nominee`, `rc_book_img`, `brand_of_car`, `other_brand_of_car`, `address_proof_img`, `id_proof_img`, `yearly_premium`, `term`, `sum_assured`, `policy_number`, `company_name`, `company_plan`, `created_ts`, `created_by`, `last_updated_ts`, `last_updated_by`) VALUES
(1, 'rohan', 9999454053, 'roha@gmail.com', 'wesfdgbvcsdfv', 'friend', 34, '2024-01-08', 'New', NULL, NULL, NULL, NULL, NULL, '12.png', NULL, NULL, '555.png', '12.png', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-27 13:47:26', 'sonal@gmail.com', '2024-01-29 11:56:38', 'company@gmail.com'),
(2, 'rohan', 9999454053, 'roha@gmail.com', 'wesfdgbvcsdfv', 'friend', 34, '2024-01-08', 'Hold', NULL, NULL, NULL, NULL, NULL, '12.png', NULL, NULL, '555.png', '12.png', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-27 13:48:30', 'sonal@gmail.com', '2024-01-29 11:56:33', 'company@gmail.com'),
(3, 'neha kumari', 9999454053, 'roha@gmail.com', 'wesfdgbvcsdfv', 'friend', 23, '2000-06-24', 'new', NULL, NULL, NULL, NULL, NULL, 'icons8-danger-48.png', NULL, NULL, 'pray-transformed.jpeg', '101.png', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-29 11:00:22', 'company@gmail.com', '2024-01-29 11:00:22', 'company@gmail.com'),
(4, '', 0, '', '', '', 0, '0000-00-00', 'New', NULL, NULL, NULL, NULL, NULL, 'Your paragraph text.png', NULL, NULL, 'pic.jpeg', 'AAdim-jati-logo-web.png', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-19 17:21:26', 'sonal@gmail.com', '2024-02-19 17:21:26', 'sonal@gmail.com'),
(5, 'prayanshu', 9234567807, 'pankaj@gmail.com', 'werfgvc', 'asdfgvb', 32, '2024-02-15', 'New', NULL, NULL, NULL, NULL, NULL, 'Your paragraph text (1) (1).png', NULL, NULL, 'Untitled-design-93-q80idntxkz8n10yw3rkubzkp825cp2x2ggunwcympc.png', 'images (6).jpeg', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-19 17:22:07', 'sonal@gmail.com', '2024-02-19 17:22:07', 'sonal@gmail.com'),
(6, 'menka', 9234567807, 'menka@gmail.com', 'assedfg', 'sdfg', 32, '2024-01-29', 'Cancle', NULL, NULL, NULL, NULL, NULL, '7.jpg', NULL, NULL, 'images.png', 'istockphoto-529516719-612x612.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-19 17:25:19', 'sonal@gmail.com', '2024-02-19 17:29:34', 'company@gmail.com'),
(7, 'sujata', 1234567890, 'pankaj@gmail.com', 'werf', 'friend', 22, '2024-01-29', 'New', NULL, NULL, NULL, NULL, NULL, 'myw3schoolsimage.jpg', NULL, NULL, 'Untitled-design-93-q80idntxkz8n10yw3rkubzkp825cp2x2ggunwcympc.png', 'download (1).jpeg', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-20 11:13:02', 'sujata@gmail.com', '2024-02-20 11:13:02', 'sujata@gmail.com'),
(8, 'gopi', 2222222222, 'gopi@gmail.com', 'rashi', 'sister', 25, '1998-06-18', 'New', 'Life Insurance', 'b.tech', 'developer', '10000', '2000-08-14', NULL, '', NULL, 'banner3-300x178.jpg', 'icons8-view-48.png', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-24 12:08:04', 'surili@gmail.com', '2024-02-24 12:08:04', 'surili@gmail.com'),
(9, 'kokila', 1234321230, 'kokila@gmail.com', 'mother', 'kinjal', 45, '1976-07-27', 'New', 'Car Insurance Personal/ Private - Two Wheeler', 'graduation', 'house wife', '0', '1998-02-19', 'WhatsApp Image 2024-02-01 at 13.20.45_99514323.jpg', 'sdfvbs', NULL, 'icons8-star-64.png', 'Upscales.ai_1707977630963-removebg-preview.png', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-24 12:27:53', 'surili@gmail.com', '2024-02-24 12:27:53', 'surili@gmail.com'),
(10, 'ajit', 9863446567, 'ajit@gmail.com', 'nbgts', 'friend', 34, '2024-03-04', 'New', 'Commercial Vehicles', 'b.tech', 'developer', '324566', '2024-03-20', 'download (1).jpeg', 'Others', 'ZSdfgbvc', 'adobe-portfolio-icon-2048x2048-9mr3hke4.png', 'logo1.jpg', '20000', '10 year', '4 lac', NULL, NULL, NULL, '2024-03-09 15:30:31', 'surili@gmail.com', '2024-03-09 15:30:31', 'surili@gmail.com'),
(11, 'sonal', 9876535352, 'dvddfgbvc@gmail.com', 'dfvc', 'qwerfgc', 21, '2024-03-01', 'Inprogress', 'Health Insurance', 'Post Graduation', 'Government Job', '1000000', '2024-03-04', NULL, '', '', 'logo192.png', 'logoo.png', '5,000 - 10,000', '15 - 20 year', '80- 90 lac', 'wenfdv', 'Digit (SI>=10Lac)', 'wsdnfg', '2024-03-13 12:47:09', 'sonal@gmail.com', '2024-03-13 12:53:39', 'company@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `m_country`
--

CREATE TABLE `m_country` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_country`
--

INSERT INTO `m_country` (`id`, `name`) VALUES
(1, 'USA'),
(2, 'UK'),
(3, 'India'),
(4, 'Canada'),
(5, 'Pakistan'),
(6, 'Australia'),
(7, 'New Zealand'),
(8, 'UAE');

-- --------------------------------------------------------

--
-- Table structure for table `m_education`
--

CREATE TABLE `m_education` (
  `id` int(11) NOT NULL,
  `eduction_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_education`
--

INSERT INTO `m_education` (`id`, `eduction_type`) VALUES
(1, 'High School'),
(2, 'Associates'),
(3, 'Technical School'),
(4, 'Bachelors'),
(5, 'Masters'),
(6, 'MBBS'),
(7, 'JD'),
(8, 'M.D'),
(9, 'PH.D'),
(10, 'CA/ACCA');

-- --------------------------------------------------------

--
-- Table structure for table `m_more_user_detail`
--

CREATE TABLE `m_more_user_detail` (
  `profile_id` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `profile_for` varchar(20) NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `living_in_india` varchar(50) NOT NULL,
  `birth_place` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `visa_status` varchar(50) NOT NULL,
  `professional` varchar(80) NOT NULL,
  `income` varchar(50) NOT NULL,
  `state` varchar(70) NOT NULL,
  `living_with_family` varchar(5) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `body_type` varchar(50) NOT NULL,
  `family_status` varchar(50) NOT NULL,
  `complexion` varchar(50) NOT NULL,
  `diet` varchar(50) NOT NULL,
  `drink` varchar(50) NOT NULL,
  `smoke` varchar(50) NOT NULL,
  `partner_marital_status` varchar(50) NOT NULL,
  `partner_religion` varchar(50) NOT NULL,
  `partner_eduction` varchar(50) NOT NULL,
  `partner_country` varchar(50) NOT NULL,
  `partner_age_from` int(11) NOT NULL,
  `partner_age_to` int(11) NOT NULL,
  `partner_drink` varchar(50) NOT NULL,
  `partner_smoke` varchar(50) NOT NULL,
  `partner_citizen` varchar(50) NOT NULL,
  `partner_diet` varchar(20) NOT NULL,
  `created_ts` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `last_updated_ts` datetime DEFAULT NULL,
  `last_updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_more_user_detail`
--

INSERT INTO `m_more_user_detail` (`profile_id`, `image`, `profile_for`, `marital_status`, `living_in_india`, `birth_place`, `nationality`, `visa_status`, `professional`, `income`, `state`, `living_with_family`, `height`, `weight`, `body_type`, `family_status`, `complexion`, `diet`, `drink`, `smoke`, `partner_marital_status`, `partner_religion`, `partner_eduction`, `partner_country`, `partner_age_from`, `partner_age_to`, `partner_drink`, `partner_smoke`, `partner_citizen`, `partner_diet`, `created_ts`, `created_by`, `last_updated_ts`, `last_updated_by`) VALUES
('PROF210811', '444.png', 'Self', 'Single', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '2023-11-21 20:32:44', 'user', NULL, NULL),
('PROF580131', '666.png', 'Brother', 'Single', 'since birth', 'India', 'India', 'Citizenship', 'Merchant Navy', 'Tell you later', 'Jharkhand', 'Yes', 179, 55, 'Athletic', 'UpperClass', 'Medium', 'Non-Veg', 'Do not Drink', 'Do not Smoke', 'Single', 'Hindu - Teli', 'Masters', '3', 23, 28, '1 year', '1 year', '1 year', '1 year', '2023-11-21 20:41:39', 'user', NULL, NULL),
('PROF533652', 'img43.jpeg', 'Self', 'Single', 'since birth', 'India', 'India', 'Citizenship', 'Technology Careers', '$24,999 or less', 'Jharkhand', 'Yes', 155, 53, 'Average', 'MiddleClass', 'Medium', 'Veg', 'Do not Drink', 'Do not Smoke', 'Single', '1 year', 'PH.D', '3', 26, 30, '1 year', '1 year', '1 year', '1 year', '2023-11-22 16:44:13', 'user', NULL, NULL),
('PROF604429', '8340645072sbi_page-0001.jpg', 'Self', 'Single', 'since birth', 'India', 'India', 'Citizenship', 'Artist', 'Tell you later', 'Karnataka', 'Yes', 234, 66, 'Average', 'UpperClass', 'Medium', 'Non-Veg', 'Do not Drink', 'Do not Smoke', 'Single', 'Hindu', 'PH.D', '3', 23, 26, '1 year', '1 year', '1 year', '1 year', '2023-11-23 16:11:02', 'user', NULL, NULL),
('PROF623394', 'WhatsApp Image 2023-10-26 at 14.55.42_2b95359c.jpg', 'Sister', 'Divorced', '3 year', 'Canada', 'UK', 'Legal Permanent Residence', 'Engineering', 'Tell you later', 'Chhattisgarh', 'Yes', 4534, 344, 'Athletic', 'Rich/Affluent', 'Fair', 'Veg', 'Do not Drink', 'Do not Smoke', 'Widowed', 'Christianity', 'JD', '3', 23, 27, '1 year', '1 year', '1 year', '1 year', '2023-11-24 14:20:31', 'user', NULL, NULL),
('PROF586491', 'IMG_20231109_072123.jpg', 'Sister', 'Single', '6 year', 'New Zealand', 'India', 'Work Vise', 'Designer', '$24,999 or less', 'Chhattisgarh', 'Yes', 232, 422, 'Average', 'Rich/Affluent', 'Fair', 'Non-Veg', 'Do not Drink', 'Do not Smoke', 'Divorced', 'Christianity - Born Again', 'Masters', '4', 24, 20, '1 year', '1 year', '1 year', '1 year', '2023-11-24 20:48:10', 'user', '2024-01-11 13:42:55', 'romil@gmail.com'),
('PROF586491', 'IMG_20231109_072123.jpg', 'Sister', 'Single', '6 year', 'New Zealand', 'India', 'Work Vise', 'Designer', '$24,999 or less', 'Chhattisgarh', 'Yes', 232, 422, 'Average', 'Rich/Affluent', 'Fair', 'Non-Veg', 'Do not Drink', 'Do not Smoke', 'Divorced', 'Christianity - Born Again', 'Masters', '4', 24, 20, '1 year', '1 year', '1 year', '1 year', '2023-11-24 20:49:38', 'user', '2024-01-11 13:42:55', 'romil@gmail.com'),
('PROF586491', 'IMG_20231109_072123.jpg', 'Sister', 'Single', '6 year', 'New Zealand', 'India', 'Work Vise', 'Designer', '$24,999 or less', 'Chhattisgarh', 'Yes', 232, 422, 'Average', 'Rich/Affluent', 'Fair', 'Non-Veg', 'Do not Drink', 'Do not Smoke', 'Divorced', 'Christianity - Born Again', 'Masters', '4', 24, 20, '1 year', '1 year', '1 year', '1 year', '2023-11-24 20:53:38', 'user', '2024-01-11 13:42:55', 'romil@gmail.com'),
('PROF526501', 'WhatsApp Image 2023-11-10 at 12.40.25_c5d7a52a.jpg', 'Brother', 'Single', '4 year', 'India', 'Pakistan', 'Legal Permanent Residence', 'Engineering', '$25,000 to $34,999', 'Goa', 'No', 0, 0, 'Athletic', 'MiddleClass', 'Medium', 'Non-Veg', 'Drink Socially/occasionally', 'Do not Smoke', 'Divorced', 'Christianity - Catholic Roman', 'High School', '4', 32, 35, '1 year', '1 year', '1 year', '1 year', '2023-11-24 21:05:10', 'user', NULL, NULL),
('PROF526501', 'WhatsApp Image 2023-11-10 at 12.40.25_c5d7a52a.jpg', 'Brother', 'Single', '4 year', 'India', 'Pakistan', 'Legal Permanent Residence', 'Engineering', '$25,000 to $34,999', 'Goa', 'No', 0, 0, 'Athletic', 'MiddleClass', 'Medium', 'Non-Veg', 'Drink Socially/occasionally', 'Do not Smoke', 'Divorced', 'Christianity - Catholic Roman', 'High School', '4', 32, 35, '1 year', '1 year', '1 year', '1 year', '2023-11-24 21:07:13', 'user', NULL, NULL),
('PROF526501', 'WhatsApp Image 2023-11-10 at 12.40.25_c5d7a52a.jpg', 'Brother', 'Single', '4 year', 'India', 'Pakistan', 'Legal Permanent Residence', 'Engineering', '$25,000 to $34,999', 'Goa', 'No', 0, 0, 'Athletic', 'MiddleClass', 'Medium', 'Non-Veg', 'Drink Socially/occasionally', 'Do not Smoke', 'Divorced', 'Christianity - Catholic Roman', 'High School', '4', 32, 35, '1 year', '1 year', '1 year', '1 year', '2023-11-24 21:07:57', 'user', NULL, NULL),
('PROF132889', 'pngtree-pink-watercolor-floral-background-image_593824.jpg', 'Brother', 'Single', '30+ year', 'Pakistan', 'UAE', 'Citizenship', 'Hair or makeup or beauty artists', '$24,999 or less', 'Haryana', 'Yes', 128, 56, 'Average', 'UpperClass', 'Medium', 'Veg', 'Do not Drink', 'Do not Smoke', 'Any', 'Christianity - Catholic Syrian', 'Bachelors', '3', 31, 97, '1 year', '1 year', '1 year', '1 year', '2024-01-11 14:04:59', 'rahul1@gmail.com', '2024-01-11 14:04:59', 'rahul1@gmail.com'),
('PROF760348', 'WhatsApp Image 2024-01-05 at 14.26.45_dcec2950.jpg', 'Sister', 'Single', 'since birth', 'India', 'India', 'Citizenship', 'Engineering', '$24,999 or less', 'Bihar', 'Yes', 234, 34, 'Average', 'MiddleClass', 'Fair', 'Non-Veg', 'Do not Drink', 'Do not Smoke', 'Single', 'Hindu', 'Bachelors', '3', 23, 34, '1 year', '1 year', '1 year', '1 year', '2024-01-11 14:15:51', 'prachipatel98@gmail.com', '2024-01-11 14:16:32', 'prachipatel98@gmail.com'),
('PROF455552', 'prairie-dress-1466680314-64da991818e29 1.png', 'Self', 'Single', 'since birth', 'India', 'USA', 'Citizenship', 'Designer', 'Tell you later', 'Goa', 'Yes', 151, 49, 'Athletic', 'Rich/Affluent', 'Wheatish', 'Veg', 'Do not Drink', 'Do not Smoke', 'Single', 'Spiritualism', 'Masters', '3', 25, 30, '1 year', '1 year', '1 year', '1 year', '2024-01-11 14:29:18', 'surili@gmail.com', '2024-03-07 16:24:34', 'surili@gmail.com'),
('PROF514882', '777.png', 'Sister', 'Single', 'since birth', 'India', 'India', 'Citizenship', 'Technology Careers', 'Tell you later', 'Jharkhand', 'Yes', 189, 78, 'Athletic', 'Rich/Affluent', 'Fair', 'Jain Food', 'Do not Drink', 'Do not Smoke', 'Single', 'Hindu - Teli', 'Masters', '3', 23, 28, '1 year', '1 year', '1 year', '1 year', '2024-01-16 15:42:20', 'neha@gmail.com', '2024-01-16 15:42:20', 'neha@gmail.com'),
('PROF210811', '444.png', 'Self', 'Single', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '2023-11-21 20:32:44', 'user', NULL, NULL),
('PROF580131', '666.png', 'Brother', 'Single', 'since birth', 'India', 'India', 'Citizenship', 'Merchant Navy', 'Tell you later', 'Jharkhand', 'Yes', 179, 55, 'Athletic', 'UpperClass', 'Medium', 'Non-Veg', 'Do not Drink', 'Do not Smoke', 'Single', 'Hindu - Teli', 'Masters', '3', 23, 28, '1 year', '1 year', '1 year', '1 year', '2023-11-21 20:41:39', 'user', NULL, NULL),
('PROF533652', 'img43.jpeg', 'Self', 'Single', 'since birth', 'India', 'India', 'Citizenship', 'Technology Careers', '$24,999 or less', 'Jharkhand', 'Yes', 155, 53, 'Average', 'MiddleClass', 'Medium', 'Veg', 'Do not Drink', 'Do not Smoke', 'Single', '1 year', 'PH.D', '3', 26, 30, '1 year', '1 year', '1 year', '1 year', '2023-11-22 16:44:13', 'user', NULL, NULL),
('PROF604429', '8340645072sbi_page-0001.jpg', 'Self', 'Single', 'since birth', 'India', 'India', 'Citizenship', 'Artist', 'Tell you later', 'Karnataka', 'Yes', 234, 66, 'Average', 'UpperClass', 'Medium', 'Non-Veg', 'Do not Drink', 'Do not Smoke', 'Single', 'Hindu', 'PH.D', '3', 23, 26, '1 year', '1 year', '1 year', '1 year', '2023-11-23 16:11:02', 'user', NULL, NULL),
('PROF623394', 'WhatsApp Image 2023-10-26 at 14.55.42_2b95359c.jpg', 'Sister', 'Divorced', '3 year', 'Canada', 'UK', 'Legal Permanent Residence', 'Engineering', 'Tell you later', 'Chhattisgarh', 'Yes', 4534, 344, 'Athletic', 'Rich/Affluent', 'Fair', 'Veg', 'Do not Drink', 'Do not Smoke', 'Widowed', 'Christianity', 'JD', '3', 23, 27, '1 year', '1 year', '1 year', '1 year', '2023-11-24 14:20:31', 'user', NULL, NULL),
('PROF586491', 'IMG_20231109_072123.jpg', 'Sister', 'Single', '6 year', 'New Zealand', 'India', 'Work Vise', 'Designer', '$24,999 or less', 'Chhattisgarh', 'Yes', 232, 422, 'Average', 'Rich/Affluent', 'Fair', 'Non-Veg', 'Do not Drink', 'Do not Smoke', 'Divorced', 'Christianity - Born Again', 'Masters', '4', 24, 20, '1 year', '1 year', '1 year', '1 year', '2023-11-24 20:48:10', 'user', '2024-01-11 13:42:55', 'romil@gmail.com'),
('PROF586491', 'IMG_20231109_072123.jpg', 'Sister', 'Single', '6 year', 'New Zealand', 'India', 'Work Vise', 'Designer', '$24,999 or less', 'Chhattisgarh', 'Yes', 232, 422, 'Average', 'Rich/Affluent', 'Fair', 'Non-Veg', 'Do not Drink', 'Do not Smoke', 'Divorced', 'Christianity - Born Again', 'Masters', '4', 24, 20, '1 year', '1 year', '1 year', '1 year', '2023-11-24 20:49:38', 'user', '2024-01-11 13:42:55', 'romil@gmail.com'),
('PROF586491', 'IMG_20231109_072123.jpg', 'Sister', 'Single', '6 year', 'New Zealand', 'India', 'Work Vise', 'Designer', '$24,999 or less', 'Chhattisgarh', 'Yes', 232, 422, 'Average', 'Rich/Affluent', 'Fair', 'Non-Veg', 'Do not Drink', 'Do not Smoke', 'Divorced', 'Christianity - Born Again', 'Masters', '4', 24, 20, '1 year', '1 year', '1 year', '1 year', '2023-11-24 20:53:38', 'user', '2024-01-11 13:42:55', 'romil@gmail.com'),
('PROF526501', 'WhatsApp Image 2023-11-10 at 12.40.25_c5d7a52a.jpg', 'Brother', 'Single', '4 year', 'India', 'Pakistan', 'Legal Permanent Residence', 'Engineering', '$25,000 to $34,999', 'Goa', 'No', 0, 0, 'Athletic', 'MiddleClass', 'Medium', 'Non-Veg', 'Drink Socially/occasionally', 'Do not Smoke', 'Divorced', 'Christianity - Catholic Roman', 'High School', '4', 32, 35, '1 year', '1 year', '1 year', '1 year', '2023-11-24 21:05:10', 'user', NULL, NULL),
('PROF526501', 'WhatsApp Image 2023-11-10 at 12.40.25_c5d7a52a.jpg', 'Brother', 'Single', '4 year', 'India', 'Pakistan', 'Legal Permanent Residence', 'Engineering', '$25,000 to $34,999', 'Goa', 'No', 0, 0, 'Athletic', 'MiddleClass', 'Medium', 'Non-Veg', 'Drink Socially/occasionally', 'Do not Smoke', 'Divorced', 'Christianity - Catholic Roman', 'High School', '4', 32, 35, '1 year', '1 year', '1 year', '1 year', '2023-11-24 21:07:13', 'user', NULL, NULL),
('PROF526501', 'WhatsApp Image 2023-11-10 at 12.40.25_c5d7a52a.jpg', 'Brother', 'Single', '4 year', 'India', 'Pakistan', 'Legal Permanent Residence', 'Engineering', '$25,000 to $34,999', 'Goa', 'No', 0, 0, 'Athletic', 'MiddleClass', 'Medium', 'Non-Veg', 'Drink Socially/occasionally', 'Do not Smoke', 'Divorced', 'Christianity - Catholic Roman', 'High School', '4', 32, 35, '1 year', '1 year', '1 year', '1 year', '2023-11-24 21:07:57', 'user', NULL, NULL),
('PROF132889', 'pngtree-pink-watercolor-floral-background-image_593824.jpg', 'Brother', 'Single', '30+ year', 'Pakistan', 'UAE', 'Citizenship', 'Hair or makeup or beauty artists', '$24,999 or less', 'Haryana', 'Yes', 128, 56, 'Average', 'UpperClass', 'Medium', 'Veg', 'Do not Drink', 'Do not Smoke', 'Any', 'Christianity - Catholic Syrian', 'Bachelors', '3', 31, 97, '1 year', '1 year', '1 year', '1 year', '2024-01-11 14:04:59', 'rahul1@gmail.com', '2024-01-11 14:04:59', 'rahul1@gmail.com'),
('PROF760348', 'WhatsApp Image 2024-01-05 at 14.26.45_dcec2950.jpg', 'Sister', 'Single', 'since birth', 'India', 'India', 'Citizenship', 'Engineering', '$24,999 or less', 'Bihar', 'Yes', 234, 34, 'Average', 'MiddleClass', 'Fair', 'Non-Veg', 'Do not Drink', 'Do not Smoke', 'Single', 'Hindu', 'Bachelors', '3', 23, 34, '1 year', '1 year', '1 year', '1 year', '2024-01-11 14:15:51', 'prachipatel98@gmail.com', '2024-01-11 14:16:32', 'prachipatel98@gmail.com'),
('PROF455552', 'prairie-dress-1466680314-64da991818e29 1.png', 'Self', 'Single', 'since birth', 'India', 'USA', 'Citizenship', 'Designer', 'Tell you later', 'Goa', 'Yes', 151, 49, 'Athletic', 'Rich/Affluent', 'Wheatish', 'Veg', 'Do not Drink', 'Do not Smoke', 'Single', 'Spiritualism', 'Masters', '3', 25, 30, '1 year', '1 year', '1 year', '1 year', '2024-01-11 14:29:18', 'surili@gmail.com', '2024-03-07 16:24:34', 'surili@gmail.com'),
('PROF514882', '777.png', 'Sister', 'Single', 'since birth', 'India', 'India', 'Citizenship', 'Technology Careers', 'Tell you later', 'Jharkhand', 'Yes', 189, 78, 'Athletic', 'Rich/Affluent', 'Fair', 'Jain Food', 'Do not Drink', 'Do not Smoke', 'Single', 'Hindu - Teli', 'Masters', '3', 23, 28, '1 year', '1 year', '1 year', '1 year', '2024-01-16 15:42:20', 'neha@gmail.com', '2024-01-16 15:42:20', 'neha@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `m_religion`
--

CREATE TABLE `m_religion` (
  `id` int(11) NOT NULL,
  `religion_tpye` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_religion`
--

INSERT INTO `m_religion` (`id`, `religion_tpye`) VALUES
(1, 'Hindu'),
(2, 'Muslim'),
(3, 'Christain'),
(4, 'Sikh'),
(5, 'Buddhisim'),
(6, 'Christianity'),
(7, 'Christianity - Anglican '),
(8, 'Christianity - Baptist'),
(9, 'Christianity - Born Again '),
(10, 'Christianity - Catholic'),
(11, 'Christianity - Catholic Kananaya'),
(12, 'Christianity - Catholic Latin'),
(13, 'Christianity - Catholic Malankara'),
(14, 'Christianity - Catholic Roman'),
(15, 'Christianity - Catholic Syrian'),
(16, 'Christianity - CMS'),
(17, 'Christianity - CSI'),
(18, 'Christianity - Evangelical'),
(19, 'Christianity - Jacobite'),
(20, 'Christianity - Malayalam'),
(21, 'Christianity - Marthomite'),
(22, 'Christianity - Nadar'),
(23, 'Christianity - Orthodox'),
(24, 'Christianity - Pentacost'),
(25, 'Christianity - Protestant'),
(26, 'Christianity - Thai'),
(27, 'Christianity - Tibetian'),
(28, 'Dawoodi Bhora'),
(29, 'Hindu'),
(30, 'Hindu -  Ganiga'),
(31, 'Hindu - 96K Kokanastha'),
(32, 'Hindu - Adi Dravida'),
(33, 'Hindu - Agamudayaar'),
(34, 'Hindu - Agarwal'),
(35, 'Hindu - Arora'),
(36, 'Hindu - Arya Vysya'),
(37, 'Hindu - Bengali'),
(38, 'Hindu - Bhandari'),
(39, 'Hindu - Billava'),
(40, 'Hindu - Brahmin'),
(41, 'Hindu - Brahmin Anavil'),
(42, 'Hindu - Brahmin Bengali'),
(43, 'Hindu - Brahmin Bengali'),
(44, 'Hindu - Brahmin Davadnya'),
(45, 'Hindu - Brahmin Deshastha'),
(46, 'Hindu - Brahmin Garhwali'),
(47, 'Hindu - Brahmin Gaur'),
(48, 'Hindu - Brahmin Gowd Saraswat'),
(49, 'Hindu - Brahmin Gujarati'),
(50, 'Hindu - Brahmin Havyaka'),
(51, 'Hindu - Brahmin Kanada Madhva'),
(52, 'Hindu - Brahmin Kanyakubja'),
(53, 'Hindu - Brahmin Kokanastha'),
(54, 'Hindu - Brahmin Kumoani'),
(55, 'Hindu - Brahmin Maharashtrian'),
(56, 'Hindu - Brahmin Maithil'),
(57, 'Hindu - Brahmin Nagar'),
(58, 'Hindu - Brahmin Pareek'),
(59, 'Hindu - Brahmin Punjabi'),
(60, 'Hindu - Brahmin Saryuparin'),
(61, 'Hindu - Brahmin Smartha'),
(62, 'Hindu - Brahmin Telugu'),
(63, 'Hindu - Bramhan Bhumihar'),
(64, 'Hindu - Bunt'),
(65, 'Hindu - Byahut Kalwa'),
(66, 'Hindu - Chandraseniya(CKP)'),
(67, 'Hindu - Chettiar'),
(68, 'Hindu - Coorgi'),
(69, 'Hindu - Daraji'),
(70, 'Hindu - Devadiga'),
(71, 'Hindu - Devanga'),
(72, 'Hindu - Dheevara'),
(73, 'Hindu - Dhobi'),
(74, 'Hindu - Digambar'),
(75, 'Hindu - Ezhava'),
(76, 'Hindu - Ezhuthassan'),
(77, 'Hindu - Gold Smith'),
(78, 'Hindu - Goswami'),
(79, 'Hindu - Gounder'),
(80, 'Hindu - Gowda'),
(81, 'Hindu - Gujarati'),
(82, 'Hindu - Gupta'),
(83, 'Hindu - Hindu Nair Veluthedath'),
(84, 'Hindu - Iyengar'),
(85, 'Hindu - Iyer'),
(86, 'Hindu - Jat'),
(87, 'Hindu - Jatav'),
(88, 'Hindu - Kamboj'),
(89, 'Hindu - Kamma'),
(90, 'Hindu - Kapu'),
(91, 'Hindu - Kashmiri Pandit'),
(92, 'Hindu - Kayastha'),
(93, 'Hindu - Kerala Malaylee Namboodiri'),
(94, 'Hindu - Khandelwal'),
(95, 'Hindu - Khatri'),
(96, 'Hindu - Kongu Vellala Gounder'),
(97, 'Hindu - Koshti'),
(98, 'Hindu - Kshatriya'),
(99, 'Hindu - Kumaoni'),
(100, 'Hindu - Kumbara'),
(101, 'Hindu - Kurmi'),
(102, 'Hindu - Kuruhina Shetty'),
(103, 'Hindu - Kushwaha'),
(104, 'Hindu - Lingayat'),
(105, 'Hindu - Lohana'),
(106, 'Hindu - Maharashtrian'),
(107, 'Hindu - Maheshwari'),
(108, 'Hindu - Mallah'),
(109, 'Hindu - Maratha'),
(110, 'Hindu - Maruthuvar'),
(111, 'Hindu - Marwari'),
(112, 'Hindu - Matang'),
(113, 'Hindu - Mathur'),
(114, 'Hindu - Mathurvaishya'),
(115, 'Hindu - Menon'),
(116, 'Hindu - Mudaliar'),
(117, 'Hindu - Mudaliar Arcot'),
(118, 'Hindu - Mudaliar Saiva'),
(119, 'Hindu - Mudaliar Senguntha'),
(120, 'Hindu - Mukulathur'),
(121, 'Hindu - Mutharaiyar'),
(122, 'Hindu - Nadar'),
(123, 'Hindu - Nai'),
(124, 'Hindu - Naidu'),
(125, 'Hindu - Nair'),
(126, 'Hindu - Nambiar'),
(127, 'Hindu - Nayaka'),
(128, 'Hindu - Padmashali'),
(129, 'Hindu - Pasi'),
(130, 'Hindu - Patel'),
(131, 'Hindu - Patel Desai'),
(132, 'Hindu - Patel Kadva'),
(133, 'Hindu - Patel Leva'),
(134, 'Hindu - Pillai'),
(135, 'Hindu - Prajapati'),
(136, 'Hindu - Punjabi'),
(137, 'Hindu - Raghuwanshi'),
(138, 'Hindu - Rajput'),
(139, 'Hindu - Reddy'),
(140, 'Hindu - Saini'),
(141, 'Hindu - Saiva Pillai'),
(142, 'Hindu - Scheduled Caste'),
(143, 'Hindu - Sindhi'),
(144, 'Hindu - Sonar'),
(145, 'Hindu - Sowrashtra'),
(146, 'Hindu - Sozhiya Vellalar'),
(147, 'Hindu - Tamil'),
(148, 'Hindu - Tamil Yadava'),
(149, 'Hindu - Telgu'),
(150, 'Hindu - Teli'),
(151, 'Hindu - Thevar'),
(152, 'Hindu - Thiyya'),
(153, 'Hindu - Udayar'),
(154, 'Hindu - Vaishnav'),
(155, 'Hindu - Vaishnav Bania'),
(156, 'Hindu - Vaishnav Bhatia'),
(157, 'Hindu - Vaishnav Vania'),
(158, 'Hindu - Vanjari'),
(159, 'Hindu - Vanniyakullak Shatriya'),
(160, 'Hindu - Vanniyar'),
(161, 'Hindu - Varier'),
(162, 'Hindu - Veerashaiva'),
(163, 'Hindu - Vellama'),
(164, 'Hindu - Vilakkithala Nair'),
(165, 'Hindu - Vishwakarma'),
(166, 'Hindu - Viswabrahmin'),
(167, 'Hindu - Vokaliga'),
(168, 'Hindu - Vysya'),
(169, 'Hindu - Yadav'),
(170, 'Islam'),
(171, 'Islam - Bangla'),
(172, 'Islam - Shia'),
(173, 'Islam - Sunni'),
(174, 'Ismaili'),
(175, 'Jain'),
(176, 'Jain - Jain Digambar'),
(177, 'Jain - Jain Swetamber'),
(178, 'Nonreligious'),
(179, 'Sikh'),
(180, 'Sikh - Clean Shaven'),
(181, 'Sikh - Gursikh'),
(182, 'Sikh - Jat'),
(183, 'Sikh - Kesadhari'),
(184, 'Sikh - Khatri'),
(185, 'Sikh - Ramqharia'),
(186, 'Spiritualism'),
(187, 'Zoroastrain Parsi');

-- --------------------------------------------------------

--
-- Table structure for table `m_state`
--

CREATE TABLE `m_state` (
  `id` int(11) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_state`
--

INSERT INTO `m_state` (`id`, `state`) VALUES
(1, 'Andhra Pradesh'),
(2, 'Arunachal Pradesh'),
(3, 'Assam'),
(4, 'Bihar'),
(5, 'Chhattisgarh'),
(6, 'Goa'),
(7, 'Gujarat'),
(8, 'Haryana'),
(9, 'Himachal Pradesh'),
(10, 'Jammu and Kashmir'),
(11, 'Jharkhand'),
(12, 'Karnataka'),
(13, 'Kerala'),
(14, 'Madhya Pradesh'),
(15, 'Maharashtra'),
(16, 'Manipur'),
(17, 'Meghalaya'),
(18, 'Mizoram'),
(19, 'Nagaland'),
(20, 'Orissa'),
(21, 'Punjab'),
(22, 'Rajasthan'),
(23, 'Sikkim'),
(24, 'Tamil Nadu'),
(25, 'Tripura'),
(26, 'Uttarakhand'),
(27, 'Uttar Pradesh'),
(28, 'West Bengal'),
(29, 'Tripura'),
(30, 'Andaman and Nicobar Islands'),
(31, 'Chandigarh'),
(32, 'Dadra and Nagar Haveli'),
(33, 'Daman and Diu'),
(34, 'Delhi'),
(35, 'Lakshadweep'),
(36, 'Pondicherry');

-- --------------------------------------------------------

--
-- Table structure for table `m_user_register`
--

CREATE TABLE `m_user_register` (
  `id` int(11) NOT NULL,
  `profile_id` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `number` bigint(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `religion_id` int(11) NOT NULL,
  `education_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `created_ts` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_user_register`
--

INSERT INTO `m_user_register` (`id`, `profile_id`, `user_id`, `first_name`, `last_name`, `gender`, `email`, `password`, `number`, `date_of_birth`, `religion_id`, `education_id`, `country_id`, `created_ts`, `created_by`) VALUES
(1, 'PROF609819', 0, 'neha', 'gupta', 'female', 'neha@gmail.com', '123', 8294372130, '2002-01-26', 150, 4, 0, '2023-11-20 13:28:46', 'user'),
(3, 'PROF609876', 0, 'roha', 'gpta', 'male', 'rohan@gmail.com', '123', 9087654332, '2003-08-04', 150, 6, 0, '2023-11-20 13:37:36', 'user'),
(4, 'PROF609897', 0, 'suraj bali', 'saw', 'male', 'dvddfgbvc@gmail.com', '123', 8798764350, '1997-10-17', 136, 2, 0, '2023-11-20 13:57:13', 'user'),
(5, 'PROF609813', 0, 'sonu', 'kumar', 'male', 'sonu@gmail.com', '123', 8525828803, '1996-06-04', 69, 2, 4, '2023-11-20 14:08:27', 'user'),
(7, 'PROF609867', 0, 'rumi', 'kumar', 'female', 'rumi@gmail.com', '123', 8294372130, '2022-01-05', 61, 3, 4, '2023-11-20 15:42:19', 'user'),
(110, 'PROF359838', 0, 'priya', 'kumari', 'female', 'priya@gmail.com', '123', 9076554540, '2013-12-31', 20, 3, 1, '2023-11-21 16:32:47', 'user'),
(115, 'PROF210811', 0, 'renu', '', 'female', '', '', 0, '0000-00-00', 0, 0, 0, '2023-11-21 20:31:20', 'user'),
(116, 'PROF580131', 0, 'sunil', 'kumar', 'male', 'sunil@gmail.com', '123', 9809806632, '2005-12-12', 150, 5, 3, '2023-11-21 20:36:49', 'user'),
(117, 'PROF533652', 0, 'ria', 'shah', 'female', 'ria@gmail.com', '0', 454545454545456, '2014-12-10', 4, 5, 3, '2023-11-22 16:36:11', 'user'),
(118, 'PROF604429', 0, 'puja', 'mishra', 'female', 'puja@gmail.com', '123', 9861223400, '2006-01-05', 29, 2, 4, '2023-11-23 16:06:57', 'user'),
(119, 'PROF623394', 5, 'camp', 'sdfgb', 'male', 'prashant@gmail.com', '123', 9876542339, '2016-01-20', 13, 7, 1, '2023-11-24 14:18:57', 'user'),
(120, 'PROF586491', 26, 'romi', 'gupta', 'male', 'dvddfgbvc@gmail.com', '123', 9534679786, '2004-12-26', 12, 3, 5, '2023-11-24 20:44:27', 'user'),
(121, 'PROF526501', 0, 'nirmala', 'gupta', 'male', 'nir@gmail.com', '123', 3245367865, '2002-01-16', 2, 1, 8, '2023-11-24 21:02:14', 'user'),
(122, 'PROF132889', 38, 'Rahul', 'Kumar', 'male', 'rahul1@gmail.com', '1234567890', 7528066370, '2000-01-11', 5, 10, 5, '2024-01-11 14:01:36', 'user'),
(123, 'PROF760348', 39, 'PRACHI', 'PATEL', 'female', 'prachipatel98@gmail.com', '1234', 6204829514, '2002-11-28', 1, 4, 3, '2024-01-11 14:12:49', 'user'),
(124, 'PROF455552', 40, 'Menka', 'Murmu', 'female', 'menka@gmail.com', '1234', 232324343433, '1999-12-24', 186, 5, 3, '2024-01-11 14:22:37', 'user'),
(125, 'PROF514882', 1, 'pragay', 'kumari', 'female', 'priya@gmail.com', '123', 9875434700, '2000-01-26', 82, 4, 3, '2024-01-16 15:37:33', 'user'),
(126, 'PROF555309', 7, 'sonu', 'gupta', 'male', 'sonu@gmail.com', '123', 9876443005, '2024-02-26', 1, 4, 3, '2024-03-09 15:34:18', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `transaction_type` varchar(5) NOT NULL,
  `status` int(11) NOT NULL,
  `transaction_date` datetime NOT NULL,
  `created_ts` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`id`, `user_id`, `amount`, `transaction_type`, `status`, `transaction_date`, `created_ts`, `created_by`) VALUES
(1, 'sonal@gmail.com', 70, 'cr', 100, '2023-11-15 11:16:54', '2023-11-15 11:16:54', 'user'),
(2, 'sujata@gmail.com', 50, 'cr', 100, '2023-11-15 11:15:56', '2023-11-15 11:15:56', 'user'),
(3, 'sujata@gmail.com', 20, 'cr', 100, '2023-11-16 08:55:33', '2023-11-16 08:55:33', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `payment_transaction`
--

CREATE TABLE `payment_transaction` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `transaction_id` varchar(100) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `created_ts` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `last_updated_ts` datetime NOT NULL DEFAULT current_timestamp(),
  `last_updated_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_transaction`
--

INSERT INTO `payment_transaction` (`id`, `user_id`, `amount`, `transaction_id`, `payment_status`, `created_ts`, `created_by`, `last_updated_ts`, `last_updated_by`) VALUES
(1, 0, 49, 'sdrtdyfugjkhmnb456', 200, '2023-11-22 12:58:26', 'user', '2023-11-24 15:16:29', ''),
(2, 0, 49, 'erffdser5432', 400, '2023-11-22 13:07:52', 'user', '2023-11-24 15:16:29', ''),
(3, 0, 49, 'hghh45352424', 400, '2023-11-22 16:17:28', 'user', '2023-11-24 15:16:29', ''),
(4, 0, 49, 'iiiiiiii', 400, '2023-11-23 14:34:26', 'user', '2023-11-24 15:16:29', ''),
(5, 0, 49, 'qwertdfg', 200, '2023-11-23 18:35:16', 'user', '2023-11-24 15:16:29', ''),
(6, 0, 49, 'wertyjghnbvc', 400, '2023-11-24 10:32:15', 'user', '2023-11-24 15:16:29', ''),
(7, 22, 49, 'werthgfvdcesrfdg435', 200, '2023-11-24 15:46:47', 'user', '2023-11-24 15:46:47', 'user'),
(8, 23, 49, 'frtfhgbvdfrg', 400, '2023-11-24 18:03:05', 'user', '2023-11-24 18:14:14', 'admin'),
(9, 24, 49, 'aesrdgfhvnbc', 200, '2023-11-24 18:11:57', 'user', '2023-11-24 18:11:57', 'user'),
(10, 25, 49, 'sdfgbvc', 400, '2023-11-24 18:16:46', 'user', '2023-11-24 18:22:12', 'admin'),
(11, 26, 49, '324desfsdfsdfs', 400, '2023-11-24 18:31:53', 'user', '2023-11-25 17:20:40', 'admin'),
(12, 27, 49, 'asertdfhgnbvc', 200, '2023-11-25 17:30:54', 'user', '2023-11-25 17:30:54', 'user'),
(13, 28, 49, 'aSWERTHFGJBV', 200, '2023-11-25 17:36:14', 'user', '2023-11-25 17:36:14', 'user'),
(14, 29, 49, 'awdertyhgf', 400, '2023-11-25 17:40:29', 'user', '2023-11-25 17:40:55', 'admin'),
(15, 30, 49, 'wertdgf345', 400, '2023-11-25 17:49:14', 'user', '2023-11-25 17:59:51', 'admin'),
(16, 31, 49, 'assdgfhbv', 400, '2023-11-25 17:55:02', 'user', '2023-11-25 17:55:33', 'admin'),
(17, 32, 49, 'sadfgh', 400, '2023-11-25 18:00:40', 'user', '2023-11-25 18:00:58', 'admin'),
(18, 33, 49, 'ewrtyjhfgd', 400, '2023-12-18 15:25:27', 'user', '2023-12-18 17:29:41', 'admin'),
(19, 34, 49, 'dgfd', 400, '2023-12-23 20:46:31', 'user', '2023-12-23 20:48:08', 'admin'),
(20, 35, 49, 'pra452323', 400, '2023-12-28 16:35:47', 'user', '2023-12-28 16:37:06', 'admin'),
(21, 36, 49, 'asevdrfc3456', 400, '2023-12-28 16:45:37', 'user', '2023-12-28 16:45:50', 'admin'),
(22, 37, 49, 'aerwthfg456', 400, '2023-12-28 17:42:45', 'user', '2023-12-28 17:42:55', 'admin'),
(23, 38, 49, '1234567890', 400, '2024-01-11 13:58:20', 'user', '2024-01-11 13:59:24', 'admin'),
(24, 39, 49, 'qwert', 200, '2024-01-11 14:08:11', 'user', '2024-01-11 14:08:11', 'user'),
(25, 39, 49, 'qwert', 400, '2024-01-11 14:08:55', 'user', '2024-01-11 14:09:20', 'admin'),
(26, 40, 49, '213232fdkogjdfkj', 400, '2024-01-11 14:18:49', 'user', '2024-01-11 14:19:22', 'admin'),
(27, 41, 49, '1234456', 400, '2024-04-04 13:53:32', 'user', '2024-04-04 13:55:31', 'admin'),
(28, 42, 49, 'derthjngb', 200, '2024-04-13 13:32:42', 'user', '2024-04-13 13:32:42', 'user'),
(29, 42, 49, 'derthjngb', 200, '2024-04-13 13:34:16', 'user', '2024-04-13 13:34:16', 'user'),
(30, 56, 49, 'dsertfghjgfd', 400, '2024-05-05 19:45:01', 'user', '2024-05-05 19:48:15', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `value`, `message`) VALUES
(1, 100, 'login new'),
(3, 300, 'approved by introducer'),
(4, 200, 'payment by user'),
(5, 400, 'approved by admin'),
(6, 50, 'add to cart into skill and ecommerce'),
(7, 60, 'payment of course in skill'),
(8, 70, 'approved by admin of course in skill');

-- --------------------------------------------------------

--
-- Table structure for table `suspend_status`
--

CREATE TABLE `suspend_status` (
  `id` int(11) NOT NULL,
  `suspend_code` int(11) NOT NULL,
  `suspend_reason` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suspend_status`
--

INSERT INTO `suspend_status` (`id`, `suspend_code`, `suspend_reason`) VALUES
(1, 10, 'Incomplete information'),
(2, 20, 'Wrong information'),
(3, 30, 'Missing PAN'),
(4, 40, 'Wrong information - bank details');

-- --------------------------------------------------------

--
-- Table structure for table `s_batch`
--

CREATE TABLE `s_batch` (
  `batch_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `batch_schedule_id` int(11) NOT NULL,
  `trainer_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `start` date NOT NULL DEFAULT current_timestamp(),
  `end` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `s_batch`
--

INSERT INTO `s_batch` (`batch_id`, `name`, `batch_schedule_id`, `trainer_id`, `course_id`, `start`, `end`) VALUES
(1, 'Sankalp', 1, 1, 1, '2023-08-19', '2023-08-19'),
(2, 'Aarambh', 2, 3, 2, '2023-08-19', '2023-08-19'),
(3, 'Saksham', 1, 1, 4, '2023-08-19', '2023-08-19'),
(4, '2023-24', 1, 4, 3, '2023-09-01', '2024-03-31'),
(5, 'java- batch1', 5, 1, 6, '2023-08-15', '2023-12-30'),
(8, 'python- batch1', 8, 3, 9, '2023-08-01', '2023-12-30'),
(12, '2023', 12, 3, 13, '2023-10-01', '2023-11-01'),
(13, 'jyoti', 13, 4, 14, '2023-11-01', '2023-11-22');

-- --------------------------------------------------------

--
-- Table structure for table `s_batch_schedule`
--

CREATE TABLE `s_batch_schedule` (
  `batch_schedule_id` int(11) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `s_batch_schedule`
--

INSERT INTO `s_batch_schedule` (`batch_schedule_id`, `start_time`, `end_time`) VALUES
(1, '05:00:00', '06:00:00'),
(2, '06:00:00', '07:00:00'),
(3, '07:00:00', '08:00:00'),
(4, '12:00:00', '01:00:00'),
(5, '18:00:00', '19:00:00'),
(8, '16:00:00', '17:00:00'),
(12, '17:41:00', '18:41:00'),
(13, '18:16:00', '12:44:00');

-- --------------------------------------------------------

--
-- Table structure for table `s_cart`
--

CREATE TABLE `s_cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_ts` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `last_updated_ts` datetime NOT NULL,
  `last_updated_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `s_cart`
--

INSERT INTO `s_cart` (`id`, `user_id`, `course_id`, `status`, `created_ts`, `created_by`, `last_updated_ts`, `last_updated_by`) VALUES
(1, 23, 3, 50, '2023-12-01 13:31:31', 'admin', '2023-12-01 13:31:31', 'admin'),
(2, 23, 2, 50, '2023-12-01 14:10:36', 'admin', '2023-12-01 14:10:36', 'admin'),
(3, 23, 3, 50, '2023-12-02 14:10:11', 'user', '2023-12-02 14:10:11', 'user'),
(4, 6, 4, 50, '2023-12-28 13:15:37', 'user', '2023-12-28 13:15:37', 'user'),
(5, 9, 6, 50, '2024-05-24 15:14:42', 'user', '2024-05-24 15:14:42', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `s_class_live_link`
--

CREATE TABLE `s_class_live_link` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `class_link` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_ts` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `last_updated_ts` datetime NOT NULL,
  `last_updated_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `s_class_live_link`
--

INSERT INTO `s_class_live_link` (`id`, `course_id`, `class_link`, `status`, `created_ts`, `created_by`, `last_updated_ts`, `last_updated_by`) VALUES
(1, 4, 'https://meet.google.com/gbq-waxh-yjv', 'Active', '2023-12-02 17:37:25', 'Admin', '2023-12-02 17:37:25', 'Admin'),
(2, 3, 'https://meet.google.com/gbq-waxh-yjv', 'Inactive', '2023-12-02 17:47:20', 'Admin', '2023-12-02 17:47:20', 'Admin'),
(3, 2, 'https://meet.google.com/gbq-waxh-yjv', 'Inactive', '2023-12-02 17:47:44', 'Admin', '2023-12-02 17:47:44', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `s_course`
--

CREATE TABLE `s_course` (
  `course_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `language` varchar(100) NOT NULL,
  `createTs` datetime NOT NULL DEFAULT current_timestamp(),
  `lastUpdateTs` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(5) NOT NULL,
  `last_update_by` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `s_course`
--

INSERT INTO `s_course` (`course_id`, `name`, `description`, `image`, `price`, `language`, `createTs`, `lastUpdateTs`, `created_by`, `last_update_by`) VALUES
(1, 'C++', 'C++ is a object oriented Language .', 'c++.jpeg', 899, 'English ,Hindi', '2023-08-19 13:47:35', '2023-08-19 13:47:35', '', ''),
(2, 'Web Development', 'Web Development means Development of website .', 'web.jpeg', 1499, 'English ,Hindi', '2023-08-19 13:47:35', '2023-08-19 13:47:35', '', ''),
(3, 'C', 'C is Language Which is very closer to Machine .', 'c.png', 999, 'English ,Hindi', '2023-08-19 13:47:35', '2023-08-19 13:47:35', '', ''),
(4, 'App Development', 'App Development is use to development Andiod Application .', 'app.jpeg', 2999, 'English', '2023-08-19 13:47:35', '2023-08-19 13:47:35', '', ''),
(5, 'Data Entry', 'Data entry is the process of entering information or updating records in a database or computer system.', 'data.jpeg', 999, 'English', '2023-08-19 13:59:04', '2023-08-19 13:59:04', 'admin', 'admin'),
(6, 'Java Language', 'Java is used to develop mobile apps, web apps, desktop apps, games and much more.', 'java.png', 2499, 'English', '2023-08-19 15:26:15', '2023-08-19 15:26:15', 'Admin', 'Admin'),
(9, 'Python', 'Python can be used on a server to create web applications.', 'python.jpeg', 1999, 'English', '2023-08-19 16:11:35', '2023-08-19 16:11:35', 'Admin', 'Admin'),
(13, 'MARN Stack', '<p>sdcfghjmnbv cxdefrthyjkmnbv</p>', 'imggg.png', 999, 'English', '2023-10-17 14:41:36', '2023-10-17 14:41:36', 'Admin', 'Admin'),
(14, 'Blockchain', '<ul><li>fgbfgfdgnghjkml</li></ul>', 'mens-wedding-sherwani-the-photoroosters-production-nawabi-sherwani (2).jpg', 5000, '', '2023-11-22 17:17:45', '2024-03-12 18:17:46', 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `s_payment`
--

CREATE TABLE `s_payment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `transaction_id` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_ts` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `last_updated_ts` datetime NOT NULL,
  `last_updated_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `s_payment`
--

INSERT INTO `s_payment` (`id`, `user_id`, `course_id`, `transaction_id`, `amount`, `status`, `created_ts`, `created_by`, `last_updated_ts`, `last_updated_by`) VALUES
(1, 23, 2, 'evdgfcwer', 999, 70, '2023-12-02 14:08:31', 'user', '2023-12-02 16:25:55', 'Admin'),
(2, 23, 4, 'wfhsvnvw', 2999, 70, '2023-12-02 14:10:48', 'user', '2023-12-02 16:41:57', 'Admin'),
(3, 23, 3, 'sdfgbvc', 999, 60, '2023-12-02 16:41:45', 'user', '2023-12-02 16:41:45', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `s_student`
--

CREATE TABLE `s_student` (
  `student_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `current_address` varchar(250) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `s_student`
--

INSERT INTO `s_student` (`student_id`, `fname`, `lname`, `gender`, `current_address`, `email_id`, `phone_no`, `batch_id`, `payment_id`) VALUES
(1, 'mayank', 'jha', 'male', 'tharpakhna', 'abc@gmail.com', 7632966717, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `s_trainer`
--

CREATE TABLE `s_trainer` (
  `trainer_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_ts` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `s_trainer`
--

INSERT INTO `s_trainer` (`trainer_id`, `name`, `image`, `created_ts`, `created_by`) VALUES
(1, 'mayank', 'tr.jpeg', '2023-10-17 11:48:30', ''),
(2, 'Neha Gupta', 'te.jpeg', '2023-10-17 11:48:30', ''),
(3, 'Krishn Kumar', 'tc.jpeg', '2023-10-17 11:48:30', ''),
(4, 'menka', 'ch.jpeg\r\n', '2023-10-17 11:48:30', ''),
(5, 'monika', 'icons8-restore-down-48.png', '2023-10-17 14:32:24', 'Admin'),
(6, 'neha kumari', 'img43.jpeg', '2023-11-22 17:21:53', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tran_log`
--

CREATE TABLE `tran_log` (
  `id` int(11) NOT NULL,
  `transaction_id` varchar(35) NOT NULL,
  `purpose` varchar(300) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(40) NOT NULL,
  `created_ts` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `last_created_ts` datetime NOT NULL,
  `last_updated_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tran_log`
--

INSERT INTO `tran_log` (`id`, `transaction_id`, `purpose`, `amount`, `status`, `created_ts`, `created_by`, `last_created_ts`, `last_updated_by`) VALUES
(1, '4205824818', 'signUp', 49, '200', '2024-04-20 12:16:54', 'user', '2024-04-20 12:16:54', 'user'),
(2, '28439621534', 'signUp', 49, '200', '0000-00-00 00:00:00', 'user', '0000-00-00 00:00:00', 'user'),
(3, '39970953053', 'signUp', 49, '200', '0000-00-00 00:00:00', 'user', '0000-00-00 00:00:00', 'user'),
(4, '92357778369', 'signUp', 49, '200', '0000-00-00 00:00:00', 'user', '0000-00-00 00:00:00', 'user'),
(5, '9543042272', 'signUp', 49, '200', '0000-00-00 00:00:00', 'user', '0000-00-00 00:00:00', 'user'),
(6, '43309275884', 'signUp', 49, '200', '2024-05-03 17:33:46', 'ladu@gmail.com', '2024-05-03 17:33:46', 'ladu@gmail.com'),
(7, '89538621384', 'signUp', 49, '200', '2024-05-05 19:38:58', 'arr@gmail.com', '2024-05-05 19:38:58', 'arr@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login_id` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `self_member_id` varchar(20) DEFAULT NULL,
  `parents_member_id` varchar(20) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `flag` tinyint(11) DEFAULT NULL,
  `suspend_code` int(11) DEFAULT NULL,
  `created_ts` datetime DEFAULT current_timestamp(),
  `created_by` varchar(100) DEFAULT NULL,
  `last_updated_ts` datetime NOT NULL DEFAULT current_timestamp(),
  `last_updated_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login_id`, `password`, `name`, `phone_no`, `self_member_id`, `parents_member_id`, `rank`, `status`, `flag`, `suspend_code`, `created_ts`, `created_by`, `last_updated_ts`, `last_updated_by`) VALUES
(1, 'neha@gmail.com', '123', 'neha', 0, 'MEMB7934793', 'MEMB6647586', 6, 300, 1, 30, NULL, 'user', '2024-04-04 13:49:22', 'neha@gmail.com'),
(2, 'rohan@gmail.com', '', 'rohan', 0, 'CMPNY05678', 'MEMB6647582', 7, 300, 0, NULL, '2023-10-14 13:33:40', 'user', '2024-04-04 16:45:51', 'admin'),
(5, 'pushpa@gmail.com', '123', 'pushpa', 9087654678, 'MEMB6206655', 'CMPNY05678', -1, 300, 1, NULL, '2023-10-19 13:31:56', 'user', '2024-04-05 16:33:12', 'pushpa@gmail.com'),
(6, 'sonal@gmail.com', '123', 'sonal', 9678976542, 'MEMB2406648', 'MEMB6206655', 1, 400, 0, 0, '2023-10-29 20:43:33', 'user', '2023-11-30 17:20:01', 'admin'),
(7, 'sujata@gmail.com', '123', 'sujata', 8889899902, 'MEMB6647586', 'MEMB6676498', 0, 300, 1, NULL, '2023-10-30 12:39:15', 'user', '2024-04-04 13:33:30', 'sujata@gmail.com'),
(8, 'neelam@gmail.com', '123', 'neelam', 78945685269, 'MEMB6647888', 'MEMB6647586', 5, 300, 1, NULL, '2023-10-31 17:51:15', 'user', '2024-04-05 16:36:22', 'neelam@gmail.com'),
(9, 'pankaj@gmail.com', '123', 'pankaj', 9087654678, 'MEMB6207755', 'MEMB6676498', 4, 300, 0, NULL, '2023-10-19 13:31:56', 'user', '2023-11-24 17:10:16', ''),
(10, 'sonu@gmail.com', '123', 'sonu', 8522258520, 'MEMB3866916', 'CMPNY05678', 5, 300, NULL, NULL, '2023-11-06 17:27:02', 'user', '2023-11-24 17:10:16', ''),
(11, 'menka@gmail.com', '123', 'MENKA', 9088776666, NULL, 'MEMB6647888', NULL, 100, NULL, NULL, '2023-11-06 18:14:26', 'user', '2023-11-24 17:10:16', ''),
(12, 'ravindra.phusro@gmail.com', '5072', 'Ravindra', 8340645072, NULL, 'MEMB6647586', NULL, 100, NULL, NULL, '2023-11-16 15:44:46', 'user', '2023-11-24 17:10:16', ''),
(13, 'sunil@gmail.com', '123', 'sunil', 9807539021, NULL, 'CMPNY05678', NULL, 100, NULL, NULL, '2023-11-21 23:27:21', 'user', '2023-11-24 17:10:16', ''),
(14, 'abhi@gmail.com', '123', 'abhi', 9876789876, NULL, 'CMPNY05678', NULL, 200, NULL, 20, '2023-11-22 11:54:04', 'user', '2023-11-24 17:10:16', ''),
(15, 'sonam@gmail.com', '123', 'sonam', 3476875232, NULL, 'CMPNY05678', NULL, 100, NULL, NULL, '2023-11-22 12:26:55', 'user', '2023-11-24 17:10:16', ''),
(16, 'kunal@gmail.com', '123', 'kunal', 6205467850, NULL, 'MEMB2519110', NULL, 400, NULL, NULL, '2023-11-22 13:07:23', 'user', '2023-11-24 17:10:16', ''),
(17, 'ria@gmail.com', '0', 'ria', 2134567891, NULL, 'CMPNY05678', NULL, 400, NULL, NULL, '2023-11-22 16:16:35', 'user', '2023-11-24 17:10:16', ''),
(18, 'renu@gmail.com', '123', 'renu', 9876569900, 'MEMB5523535', 'MEMB2406648', -1, 300, NULL, NULL, '2023-11-23 14:29:51', 'user', '2023-11-24 17:10:16', ''),
(19, 'prashant@gmail.com', '123', 'prashant', 9222222290, NULL, 'MEMB2519111', NULL, 100, NULL, NULL, '2023-11-23 18:17:41', 'user', '2023-11-24 17:10:16', ''),
(20, 'prakash@gmail.com', '123', 'prakash', 9888999900, 'MEMB2519111', 'MEMB2519193', NULL, 400, NULL, NULL, '2023-11-24 10:32:07', 'user', '2023-11-24 17:10:16', ''),
(21, 'company@gmail.com', '123', 'ravindar kumar', 9865546570, 'CMPNY05678', NULL, 21, 400, NULL, NULL, '2023-11-24 12:52:53', 'admin', '2023-11-24 17:10:16', ''),
(22, 'roni@gmail.com', '123', 'roni', 9087655611, NULL, 'MEMB2519111', NULL, 200, NULL, NULL, '2023-11-24 15:46:32', 'user', '2023-11-24 17:10:16', ''),
(23, 'sumit@gmail.com', '123', 'sumit', 8765433456, 'MEMB2519193', 'CMPNY05678', 12, 300, 0, NULL, '2023-11-24 18:02:30', 'user', '2023-11-24 18:14:56', 'inducer'),
(24, 'sivani@gmail.com', '123', 'sivani', 9999999999, NULL, 'CMPNY05678', NULL, 200, NULL, NULL, '2023-11-24 18:11:52', 'user', '2023-11-24 18:11:57', 'user'),
(25, 'dia@gmail.com', '123', 'dia', 8989898989, 'MEMB5047941', 'MEMB2519193', 12, 300, NULL, NULL, '2023-11-24 18:16:35', 'user', '2023-11-24 18:24:16', 'inducer'),
(26, 'romil@gmail.com', '1234', 'romil', 2345675342, 'MEMB4682384', 'MEMB5047941', 3, 300, 0, NULL, '2023-11-24 18:31:44', 'user', '2023-11-28 17:00:47', 'inducer'),
(27, 'sushil@gmail.com', '123', 'sushil', 8797556670, 'MEMB2519110', 'MEMB4682384', NULL, 100, NULL, NULL, '2023-11-25 17:30:49', 'user', '2023-11-25 17:30:49', 'user'),
(28, 'manu@gmail', '123', 'manu', 9999774333, NULL, 'MEMB2519110', NULL, 100, NULL, NULL, '2023-11-25 17:36:10', 'user', '2023-11-25 17:36:10', 'user'),
(29, 'pin@gmail.com', '123', 'pin', 8765432456, NULL, 'CMPNY05678', NULL, 200, NULL, NULL, '2023-11-25 17:40:26', 'user', '2023-11-25 17:40:29', 'user'),
(30, 'ss@gmail.com', '123', 'sssss', 9876543245, NULL, 'CMPNY05678', NULL, 400, NULL, NULL, '2023-11-25 17:49:09', 'user', '2023-11-25 17:59:51', 'admin'),
(31, 'sssss@gmail.com', '123', 'sadfg', 4356754330, NULL, 'CMPNY05678', NULL, 200, NULL, NULL, '2023-11-25 17:54:58', 'user', '2023-11-25 17:55:02', 'user'),
(32, 'aa@gmail.com', '123', '123', 9876543560, 'MEMB6002182', 'CMPNY05678', 15, 300, NULL, NULL, '2023-11-25 18:00:36', 'user', '2023-11-25 18:01:53', 'inducer'),
(33, 'prachi@gmail.com', '123', 'prachi', 9990000009, 'PDA9270380', 'CMPNY05678', 16, 400, NULL, NULL, '2023-12-18 15:25:21', 'user', '2023-12-18 17:29:41', 'admin'),
(34, 'aronikagupta@gmail.com', '123', 'aronikagupta', 9877897780, NULL, 'CMPNY05678', NULL, 400, NULL, NULL, '2023-12-23 20:46:24', 'user', '2023-12-23 20:48:08', 'admin'),
(35, 'prachi12@gmail.com', '123', 'prachi', 7675432560, 'PDAA0000000', 'CMPNY05678', 10, 300, NULL, NULL, '2023-12-28 16:34:38', 'user', '2023-12-28 16:37:49', 'inducer'),
(36, 'rahul@gmail.com', '123', 'rahul', 8212123330, 'PDAA0000006', 'CMPNY05678', 12, 300, 0, NULL, '2023-12-28 16:45:30', 'user', '2023-12-28 16:46:16', 'inducer'),
(37, 'ajit@gmail.com', '123', 'ajit', 9621111100, 'PDAA000000037', 'CMPNY05678', 7, 300, NULL, NULL, '2023-12-28 17:42:41', 'user', '2023-12-28 18:14:50', 'inducer'),
(38, 'rahul1@gmail.com', '1234567890', 'rahul kumar', 7528066370, 'PDAA000000038', 'CMPNY05678', 10, 300, NULL, NULL, '2024-01-11 13:58:03', 'user', '2024-01-11 13:59:46', 'inducer'),
(39, 'prachipatel98@gmail.com', '1234', 'Prachi Patel', 4567890435, 'PDAA000000039', 'CMPNY05678', 6, 300, NULL, NULL, '2024-01-11 14:07:55', 'user', '2024-01-11 14:10:06', 'inducer'),
(40, 'surili@gmail.com', '1234', 'Surili', 8123458932, 'PDAA000000040', 'CMPNY05678', 20, 300, 0, NULL, '2024-01-11 14:18:35', 'user', '2024-01-11 14:20:12', 'inducer'),
(41, 'santosh12@gmail.com', '1234', 'santosh', 8765434567, 'PDAA000000041', 'CMPNY05678', 1, 300, 1, NULL, '2024-04-04 13:53:17', 'user', '2024-04-04 13:59:42', 'santosh12@gmail.com'),
(42, 'piku@gmail.com', '123', 'piku', 5432321234, NULL, 'CMPNY05678', NULL, 200, 0, NULL, '2024-04-13 13:32:20', 'user', '2024-04-13 13:34:16', 'user'),
(43, 'minu@gmail.com', '123', 'minu', 8765434567, NULL, 'CMPNY05678', NULL, 100, 0, NULL, '2024-04-13 13:33:45', 'user', '2024-04-13 13:33:45', 'user'),
(44, 'pinki@gmail.com', '123', 'pinki', 2345678654, NULL, 'CMPNY05678', NULL, 100, 0, NULL, '2024-04-13 13:34:52', 'user', '2024-04-13 13:34:52', 'user'),
(45, 'pikachu@gmail.com', '123', 'pikachu', 4568394230, NULL, 'CMPNY05678', NULL, 100, 0, NULL, '2024-04-13 15:04:02', 'user', '2024-04-13 15:04:02', 'user'),
(46, 'tinku@gmail.com', '123', 'tinku', 5678909870, NULL, 'CMPNY05678', NULL, 100, 0, NULL, '2024-04-15 13:29:53', 'user', '2024-04-15 13:29:53', 'user'),
(47, 'SIMA@GMAIL.COM', '123', 'SIMA', 2456786543, NULL, 'CMPNY05678', NULL, 100, 0, NULL, '2024-04-15 15:20:46', 'user', '2024-04-15 15:20:46', 'user'),
(52, 'rohit@gmail.com', '123', 'rohit', 9679456543, NULL, 'CMPNY05678', NULL, 100, 0, NULL, '2024-04-20 12:15:27', 'user', '2024-04-20 12:15:27', 'user'),
(53, 'pooma@gmail.com', '123', 'pooma', 2345084454, NULL, 'CMPNY05678', NULL, 100, 0, NULL, '2024-04-29 13:20:44', 'user', '2024-04-29 13:20:44', 'user'),
(54, 'ladu@gmail.com', '123', 'ladu', 8765432243, NULL, 'CMPNY05678', NULL, 100, 0, NULL, '2024-05-03 17:33:46', 'user', '2024-05-03 17:33:46', 'user'),
(55, 'arr@gmail.com', '123', 'arr', 9087654323, NULL, 'CMPNY05678', NULL, 100, 0, NULL, '2024-05-05 19:38:58', 'user', '2024-05-05 19:38:58', 'user'),
(56, 'aru@gmail.com', '123', 'aru', 9761433445, NULL, 'CMPNY05678', NULL, 400, 0, NULL, '2024-05-05 19:44:55', 'user', '2024-05-05 19:48:15', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_personal_details`
--

CREATE TABLE `user_personal_details` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `payment_mode` varchar(20) DEFAULT NULL,
  `holder_name` varchar(100) DEFAULT NULL,
  `bank_name` varchar(200) DEFAULT NULL,
  `account_no` varchar(20) DEFAULT NULL,
  `ifsc_code` varchar(20) DEFAULT NULL,
  `account_type` varchar(20) DEFAULT NULL,
  `upi_type` varchar(25) DEFAULT NULL,
  `upi_number` varchar(20) DEFAULT NULL,
  `phone_no` bigint(20) DEFAULT NULL,
  `adhar_four_digit` varchar(20) NOT NULL,
  `pan_no` varchar(20) DEFAULT NULL,
  `pan_available` varchar(4) DEFAULT NULL,
  `created_ts` datetime DEFAULT NULL,
  `created_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_personal_details`
--

INSERT INTO `user_personal_details` (`id`, `user_id`, `payment_mode`, `holder_name`, `bank_name`, `account_no`, `ifsc_code`, `account_type`, `upi_type`, `upi_number`, `phone_no`, `adhar_four_digit`, `pan_no`, `pan_available`, `created_ts`, `created_by`) VALUES
(3, 'sujata@gmail.com', 'bank', 'werthgf', 'sdferthjmnbv', '43567897654321', 'xdsfbv45', 'Self', '0', '', 0, '0', 'asdfgbv2345', '', '2024-04-04 13:33:30', 'sujata@gmail.com'),
(4, 'neha@gmail.com', 'upi', '', '', '', '', '', 'google pay', 'sert56789', 2345678909, 'xxxx-xxxx-xxxx9876', '', 'no', '2024-04-04 13:49:22', 'neha@gmail.com'),
(5, 'santosh12@gmail.com', 'upi', '', '', '', '', '', 'phone pe', 'ryt45563vvf', 876554673, 'xxxx-xxxx-xxxx8787', 'dvhajdj123e', '', '2024-04-04 13:59:42', 'santosh12@gmail.com'),
(6, 'pushpa@gmail.com', 'upi', '', '', '', '', '', 'bhim upi', 'asderthg456', 3245678654, 'xxxx-xxxx-xxxx1234', '3456gfvcb', '', '2024-04-05 16:33:12', 'pushpa@gmail.com'),
(7, 'neelam@gmail.com', 'upi', '', '', '', '', '', 'bharat pay', 'dfgbnvcd', 345678, 'xxxx-xxxx-xxxx4567', '', 'no', '2024-04-05 16:36:22', 'neelam@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_category`
--
ALTER TABLE `course_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `d_user`
--
ALTER TABLE `d_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_addcart`
--
ALTER TABLE `e_addcart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_cart`
--
ALTER TABLE `e_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `e_cart_line`
--
ALTER TABLE `e_cart_line`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_category`
--
ALTER TABLE `e_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `e_color`
--
ALTER TABLE `e_color`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `e_orders`
--
ALTER TABLE `e_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `e_order_address`
--
ALTER TABLE `e_order_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_order_history`
--
ALTER TABLE `e_order_history`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `e_order_line`
--
ALTER TABLE `e_order_line`
  ADD PRIMARY KEY (`order_line_id`);

--
-- Indexes for table `e_products`
--
ALTER TABLE `e_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `e_size`
--
ALTER TABLE `e_size`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `e_subcategory`
--
ALTER TABLE `e_subcategory`
  ADD PRIMARY KEY (`subcategory_id`);

--
-- Indexes for table `e_subcategory_type`
--
ALTER TABLE `e_subcategory_type`
  ADD PRIMARY KEY (`subcategory_type_id`);

--
-- Indexes for table `insu_user_request`
--
ALTER TABLE `insu_user_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_country`
--
ALTER TABLE `m_country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_education`
--
ALTER TABLE `m_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_religion`
--
ALTER TABLE `m_religion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_state`
--
ALTER TABLE `m_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_user_register`
--
ALTER TABLE `m_user_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_transaction`
--
ALTER TABLE `payment_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suspend_status`
--
ALTER TABLE `suspend_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_batch`
--
ALTER TABLE `s_batch`
  ADD PRIMARY KEY (`batch_id`);

--
-- Indexes for table `s_batch_schedule`
--
ALTER TABLE `s_batch_schedule`
  ADD PRIMARY KEY (`batch_schedule_id`);

--
-- Indexes for table `s_cart`
--
ALTER TABLE `s_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_class_live_link`
--
ALTER TABLE `s_class_live_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_course`
--
ALTER TABLE `s_course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `s_payment`
--
ALTER TABLE `s_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_student`
--
ALTER TABLE `s_student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `s_trainer`
--
ALTER TABLE `s_trainer`
  ADD PRIMARY KEY (`trainer_id`);

--
-- Indexes for table `tran_log`
--
ALTER TABLE `tran_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_personal_details`
--
ALTER TABLE `user_personal_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_category`
--
ALTER TABLE `course_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `d_user`
--
ALTER TABLE `d_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `e_addcart`
--
ALTER TABLE `e_addcart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `e_cart`
--
ALTER TABLE `e_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `e_cart_line`
--
ALTER TABLE `e_cart_line`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `e_category`
--
ALTER TABLE `e_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `e_color`
--
ALTER TABLE `e_color`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `e_orders`
--
ALTER TABLE `e_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `e_order_address`
--
ALTER TABLE `e_order_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `e_order_history`
--
ALTER TABLE `e_order_history`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `e_order_line`
--
ALTER TABLE `e_order_line`
  MODIFY `order_line_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `e_products`
--
ALTER TABLE `e_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `e_size`
--
ALTER TABLE `e_size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `e_subcategory`
--
ALTER TABLE `e_subcategory`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `e_subcategory_type`
--
ALTER TABLE `e_subcategory_type`
  MODIFY `subcategory_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `insu_user_request`
--
ALTER TABLE `insu_user_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `m_country`
--
ALTER TABLE `m_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `m_education`
--
ALTER TABLE `m_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `m_religion`
--
ALTER TABLE `m_religion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `m_state`
--
ALTER TABLE `m_state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `m_user_register`
--
ALTER TABLE `m_user_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment_transaction`
--
ALTER TABLE `payment_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `suspend_status`
--
ALTER TABLE `suspend_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `s_batch`
--
ALTER TABLE `s_batch`
  MODIFY `batch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `s_batch_schedule`
--
ALTER TABLE `s_batch_schedule`
  MODIFY `batch_schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `s_cart`
--
ALTER TABLE `s_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `s_class_live_link`
--
ALTER TABLE `s_class_live_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `s_course`
--
ALTER TABLE `s_course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `s_payment`
--
ALTER TABLE `s_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `s_student`
--
ALTER TABLE `s_student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `s_trainer`
--
ALTER TABLE `s_trainer`
  MODIFY `trainer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tran_log`
--
ALTER TABLE `tran_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `user_personal_details`
--
ALTER TABLE `user_personal_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
