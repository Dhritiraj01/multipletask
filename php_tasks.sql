-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2025 at 03:09 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_tasks`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`) VALUES
(1, 'Product A', '10.99'),
(2, 'Product B', '15.50'),
(3, 'Product C', '20.00'),
(4, 'Product D', '5.75'),
(5, 'Product E', '12.30'),
(6, 'Product F', '9.99'),
(7, 'Product G', '7.45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `role` enum('admin','user') DEFAULT 'user',
  `password` varchar(255) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `age`, `profile_pic`, `role`, `password`, `city`) VALUES
(1, 'Admin', 'admin@example.com', 35, NULL, 'admin', 'admin123', 'New York'),
(2, 'User', 'user@example.com', 28, NULL, 'user', 'user123', 'Los Angeles'),
(3, 'dhriti', 'dhritiraj026@gmail.com', NULL, NULL, 'user', 'db@123', NULL),
(4, 'dhriti', NULL, NULL, 'uploads/1748425267_WhatsApp Image 2025-05-18 at 11.14.32 AM.jpeg', 'user', NULL, NULL),
(5, 'dfdfd', NULL, NULL, 'uploads/1748425295_WhatsApp Image 2025-05-18 at 1.26.06 PM.jpeg', 'user', NULL, NULL),
(6, 'dfdfd', NULL, NULL, 'uploads/1748425322_WhatsApp Image 2025-05-18 at 1.26.06 PM.jpeg', 'user', NULL, NULL),
(7, 'dhritri', 'db@gmail.com', 28, NULL, 'user', NULL, NULL),
(8, 'admin', 'admin@gmail.com', NULL, NULL, 'admin', 'admin123', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
