-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
<<<<<<< HEAD
=======
<<<<<<< HEAD:lab2 (5).sql
-- Host: 127.0.0.1
-- Gegenereerd op: 06 jun 2020 om 13:55
-- Serverversie: 10.1.37-MariaDB
-- PHP-versie: 7.3.0
=======
>>>>>>> 61e0535f596aa624376c7854123b1fa69f0e1192
-- Host: localhost:3306
-- Generation Time: Jun 07, 2020 at 02:04 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1
<<<<<<< HEAD
=======
>>>>>>> 61e0535f596aa624376c7854123b1fa69f0e1192:lab2.sql
>>>>>>> 61e0535f596aa624376c7854123b1fa69f0e1192

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

<<<<<<< HEAD
=======
<<<<<<< HEAD:lab2 (5).sql
INSERT INTO `orders` (`id`, `order`, `school`, `deliverydate`) VALUES
(1, 'hamburger', 'bimsemM', '2020-05-03'),
(2, 'hamburger', 'urselinnenM', '2020-05-03'),
(3, 'wrap', 'urselinnenM', '2020-05-05'),
(4, 'hamburger', 'bimsemM', '2020-05-11'),
(5, 'wrap', 'urselinnenM', '2020-05-14'),
(6, 'smos kaas en hesp', 'lyceumM', '2020-05-14'),
(11, 'hamburger', 'Urselinnen Mechelen', '2020-06-02'),
(12, 'wrap', 'Bimsem Mechelen', '2020-06-02'),
(13, 'wrap', 'Bimsem Mechelen', '2020-06-02'),
(14, 'wrap', 'Bimsem Mechelen', '2020-06-02'),
(15, 'wrap', 'Bimsem Mechelen', '2020-06-02'),
(16, 'hamburger', 'Urselinnen Mechelen', '2020-06-02'),
(17, 'hamburger', 'Urselinnen Mechelen', '2020-06-02'),
(18, 'hamburger', 'Urselinnen Mechelen', '2020-06-02'),
(19, 'hamburger', 'Urselinnen Mechelen', '2020-06-02'),
(20, 'hamburger', 'Urselinnen Mechelen', '2020-06-02'),
(21, 'smos kaas en hesp', 'Bimsem Mechelen', '2020-06-02'),
(22, 'smos kaas en hesp', 'Bimsem Mechelen', '2020-06-02'),
(23, 'smos kaas en hesp', 'Bimsem Mechelen', '2020-06-02'),
(24, 'smos kaas en hesp', 'Bimsem Mechelen', '2020-06-02'),
(25, 'veggieburger', 'Lyceum Mechelen', '2020-06-02'),
(26, 'hamburger', 'Bimsem Mechelen', '2020-06-02'),
(27, 'veggieburger', 'Bimsem Mechelen', '2020-06-02'),
(28, 'wrap', 'Urselinnen Mechelen', '2020-06-02'),
(29, 'smos kaas en hesp', 'Urselinnen Mechelen', '2020-06-02'),
(30, 'smos kaas en hesp', 'Urselinnen Mechelen', '2020-06-02'),
(31, 'veggieburger', 'Bimsem Mechelen', '2020-06-02'),
(32, 'hamburger', 'Bimsem Mechelen', '2020-06-02'),
(33, 'hamburger', 'Bimsem Mechelen', '2020-06-02'),
(34, 'hamburger', 'Bimsem Mechelen', '2020-06-02');
=======
>>>>>>> 61e0535f596aa624376c7854123b1fa69f0e1192
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
<<<<<<< HEAD
=======
>>>>>>> 61e0535f596aa624376c7854123b1fa69f0e1192:lab2.sql
>>>>>>> 61e0535f596aa624376c7854123b1fa69f0e1192

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
<<<<<<< HEAD
  `credit` float NOT NULL DEFAULT '0',
  `admod` int(11) NOT NULL
=======
<<<<<<< HEAD:lab2 (5).sql
  `bedrijf` varchar(255) CHARACTER SET utf8 NOT NULL,
  `admod` int(1) NOT NULL DEFAULT '0',
  `credit` float NOT NULL DEFAULT '0'
=======
  `credit` float NOT NULL DEFAULT '0',
  `admod` int(11) NOT NULL
>>>>>>> 61e0535f596aa624376c7854123b1fa69f0e1192:lab2.sql
>>>>>>> 61e0535f596aa624376c7854123b1fa69f0e1192
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

<<<<<<< HEAD
=======
<<<<<<< HEAD:lab2 (5).sql
INSERT INTO `user` (`id`, `naam`, `voornaam`, `email`, `pass`, `school`, `bedrijf`, `admod`, `credit`) VALUES
(2, 'Miguel', 'Lammens', 'mg.lm@gmail.com', '$2y$14$ui0ErduqcY7L4oO.sBLMR.uNeiz4I7bogRPUks3FaxTQrqr4qPtfW', '', '', 0, 15),
(6, 'test', 'test', 'test', '$2y$14$8MECvL/y5u2MkGkk5QwSXeTt7iga22hAkekUi1H1WqvUZYbJ9oQHi', 'urselinnenM', '', 0, 10.1),
(7, 'test1', 'test1', 'test1', '$2y$14$C//RIgEDZ7yNJwV//jzNnOUtC0nhd2VfIfn.v6L7ozSyd0LSrSXqu', '', '', 0, 20),
(8, 'test3', 'test3', 'test3', '$2y$14$yAWwyZY84BySy47mjQeUUOvbzPrmvGG5o9CLqCNvOK4fGOf4VwIIq', 'lyceumM', '', 0, 10),
(9, 'test5', 'test5', 'test5', '$2y$14$yzSktFs4XxJ6N5UFvp/2ju5ZoB0KRjauiY/K30NYXwmvjAiJtBQc.', 'bimsemM', '', 0, 14),
(10, 'test5', 'test5', 'test5', '$2y$14$1szxRI5N0nUONFIMk8Cy9O3SynroaHiPbl4P0z284wq0Q.kT/FzVm', 'bimsemM', '', 0, 0),
(11, 'test7', 'test', 'testadmin', '$2y$14$Tynx35cngXjcajpUoYtpHOpQU1ivc6X4NiZ/S82C9gOt40K716FxC', '', 'bedrijf A', 1, 0);
=======
>>>>>>> 61e0535f596aa624376c7854123b1fa69f0e1192
INSERT INTO `user` (`id`, `naam`, `voornaam`, `email`, `pass`, `school`, `credit`, `admod`) VALUES
(2, 'Miguel', 'Lammens', 'mg.lm@gmail.com', '$2y$14$ui0ErduqcY7L4oO.sBLMR.uNeiz4I7bogRPUks3FaxTQrqr4qPtfW', '', 15, 0),
(6, 'test', 'test', 'test', '$2y$14$8MECvL/y5u2MkGkk5QwSXeTt7iga22hAkekUi1H1WqvUZYbJ9oQHi', 'urselinnenM', 20, 0),
(7, 'test1', 'test1', 'test1', '$2y$14$C//RIgEDZ7yNJwV//jzNnOUtC0nhd2VfIfn.v6L7ozSyd0LSrSXqu', '', 20, 0),
(8, 'test3', 'test3', 'test3', '$2y$14$yAWwyZY84BySy47mjQeUUOvbzPrmvGG5o9CLqCNvOK4fGOf4VwIIq', 'lyceumM', 10, 0),
(9, 'test5', 'test5', 'test5', '$2y$14$yzSktFs4XxJ6N5UFvp/2ju5ZoB0KRjauiY/K30NYXwmvjAiJtBQc.', 'bimsemM', 14, 0),
(11, 'Verdoodt', 'Mathias', 'mv@gmail.com', '$2y$14$ECi7aQKgMRUagV96g04cxOzYuklSL.p4CglX2AtVYsgIslmRog.5W', 'bimsemM', 185, 0);
<<<<<<< HEAD
=======
>>>>>>> 61e0535f596aa624376c7854123b1fa69f0e1192:lab2.sql
>>>>>>> 61e0535f596aa624376c7854123b1fa69f0e1192

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
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
=======
<<<<<<< HEAD:lab2 (5).sql
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
>>>>>>> 61e0535f596aa624376c7854123b1fa69f0e1192:lab2.sql
>>>>>>> 61e0535f596aa624376c7854123b1fa69f0e1192
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
=======
<<<<<<< HEAD:lab2 (5).sql
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;
>>>>>>> 61e0535f596aa624376c7854123b1fa69f0e1192:lab2.sql

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
>>>>>>> 61e0535f596aa624376c7854123b1fa69f0e1192
