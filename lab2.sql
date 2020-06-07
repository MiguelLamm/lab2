-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 07, 2020 at 02:04 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab2`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deliverydate` date NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order`, `school`, `deliverydate`, `userid`) VALUES
(1, 'hamburger', 'bimsemM', '2020-05-03', 0),
(2, 'hamburger', 'urselinnenM', '2020-05-03', 0),
(3, 'wrap', 'urselinnenM', '2020-05-05', 0),
(4, 'hamburger', 'bimsemM', '2020-05-11', 0),
(5, 'wrap', 'urselinnenM', '2020-05-14', 0),
(6, 'smos kaas en hesp', 'lyceumM', '2020-05-14', 0),
(7, 'hamburger', 'bimsemM', '2020-05-20', 0),
(8, 'hamburger', 'bimsemM', '2020-05-21', 0),
(9, 'hamburger', 'urselinnenM', '2020-07-07', 0),
(10, 'hamburger', 'urselinnenM', '2020-07-07', 1),
(11, 'hamburger', 'urselinnenM', '2020-06-08', 1),
(12, 'veggieburger', 'bimsemM', '2020-06-09', 11),
(13, 'wrap', 'bimsemM', '2020-06-10', 11),
(14, 'smos kaas en hesp', 'bimsemM', '2020-06-11', 11),
(15, 'hamburger', 'bimsemM', '2020-06-15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voornaam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` float NOT NULL DEFAULT '0',
  `admod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `naam`, `voornaam`, `email`, `pass`, `school`, `credit`, `admod`) VALUES
(2, 'Miguel', 'Lammens', 'mg.lm@gmail.com', '$2y$14$ui0ErduqcY7L4oO.sBLMR.uNeiz4I7bogRPUks3FaxTQrqr4qPtfW', '', 15, 0),
(6, 'test', 'test', 'test', '$2y$14$8MECvL/y5u2MkGkk5QwSXeTt7iga22hAkekUi1H1WqvUZYbJ9oQHi', 'urselinnenM', 20, 0),
(7, 'test1', 'test1', 'test1', '$2y$14$C//RIgEDZ7yNJwV//jzNnOUtC0nhd2VfIfn.v6L7ozSyd0LSrSXqu', '', 20, 0),
(8, 'test3', 'test3', 'test3', '$2y$14$yAWwyZY84BySy47mjQeUUOvbzPrmvGG5o9CLqCNvOK4fGOf4VwIIq', 'lyceumM', 10, 0),
(9, 'test5', 'test5', 'test5', '$2y$14$yzSktFs4XxJ6N5UFvp/2ju5ZoB0KRjauiY/K30NYXwmvjAiJtBQc.', 'bimsemM', 14, 0),
(11, 'Verdoodt', 'Mathias', 'mv@gmail.com', '$2y$14$ECi7aQKgMRUagV96g04cxOzYuklSL.p4CglX2AtVYsgIslmRog.5W', 'bimsemM', 185, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
