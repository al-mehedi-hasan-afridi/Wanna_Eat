-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 06:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food-management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Full_name` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`Id`, `Full_name`, `Username`, `Password`) VALUES
(25, 'mehedi', 'mehedi', '202cb962ac59075b964b07152d234b70'),
(30, ' nawal', 'nawal66', '26408ffa703a72e8ac0117e74ad46f33');

-- --------------------------------------------------------

--
-- Table structure for table `food_table`
--

CREATE TABLE `food_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_table`
--

INSERT INTO `food_table` (`id`, `title`, `description`, `price`, `image_name`, `featured`, `active`) VALUES
(14, 'Chicken Burger', ' Prepared with chicken patty, cheese & special sauce.', 180, 'Food-Name-9487.jpg', 'Yes', 'Yes'),
(15, 'Beef Sausage Burger', '    Prepared with beef patty, 2pcs chicken, cheese & special sauce.', 250, 'Food-Name-6178.jpg', 'Yes', 'Yes'),
(16, 'Chicken Bacon Burger', 'Prepared with chicken patty, beef bacon & special sauce.', 230, 'Food-Name-8872.jpg', 'Yes', 'Yes'),
(18, 'Chicken Sausage Burger', 'Prepared with tomato sauce, chicken, cheese and sausage.', 250, 'Food-Name-7065.jpg', 'Yes', 'Yes'),
(20, 'Cheese Fountain Pizza', 'Prepared with cube chicken, extra cheese, mayonnaise, mushroom and sauce', 350, 'Food-Name-2529.jpg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(150) NOT NULL,
  `price` float NOT NULL,
  `qty` int(11) NOT NULL,
  `total` float NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_contact` varchar(200) NOT NULL,
  `customer_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_address`) VALUES
(1, 'Beef Sausage Burger', 250, 3, 750, '2021-12-31 02:49:21', 'On Delivery', 'mim', '01648882409', 'Dhaka,bangladesh'),
(2, 'Chicken Bacon Burger', 230, 2, 460, '2021-12-31 02:51:15', 'Delivered', 'nawal', '01705258269', 'bashundhora residential area'),
(3, 'Chicken Sausage Burger', 250, 1, 250, '2022-01-03 09:30:43', 'Ordered', 'Al Mehedi Hasan', '019000000', '298,Moghbazar'),
(4, 'Chicken Sausage Burger', 250, 2, 500, '2022-01-03 09:37:46', 'Delivered', 'Mehedi Hasan', '0191111111', '298.Noy,Mo'),
(5, 'Chicken Bacon Burger', 230, 2, 460, '2022-01-03 09:59:13', 'Ordered', 'Mehedi Hasan', '01789123455', '299.Noy,Mo'),
(6, 'Chicken Bacon Burger', 230, 1, 230, '2022-01-03 11:25:11', 'On Delivery', 'Al Mehedi Hasan', '01788881112', '211.Noyatola,Moghbazar'),
(7, 'Beef Sausage Burger', 250, 1, 250, '2022-01-03 04:55:48', 'Cancelled', 'Al Mehedi Hasan', '01912345641', '298.Noy,Mo'),
(8, 'Chicken Bacon Burger', 230, 2, 460, '2022-01-03 05:47:03', 'Ordered', 'Al Mehedi Hasan', '01912345698', '298,Moghbazar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `food_table`
--
ALTER TABLE `food_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `food_table`
--
ALTER TABLE `food_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
