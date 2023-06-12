-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 11:18 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectsales`
--

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE `deliveries` (
  `id` int(1) NOT NULL,
  `zCode` varchar(999) NOT NULL,
  `zFirst` varchar(999) NOT NULL,
  `zLast` varchar(999) NOT NULL,
  `zStat` int(1) NOT NULL,
  `zAdd` varchar(999) NOT NULL,
  `zStreet` varchar(999) NOT NULL,
  `zContact` varchar(999) NOT NULL,
  `zSize` varchar(999) NOT NULL,
  `zQuantity` varchar(999) NOT NULL,
  `zPayment` varchar(999) NOT NULL,
  `zItem` varchar(999) NOT NULL,
  `uStat` int(1) NOT NULL,
  `zMonth` varchar(999) NOT NULL,
  `zMonth1` varchar(999) NOT NULL,
  `zYear` varchar(999) NOT NULL,
  `zDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliveries`
--

INSERT INTO `deliveries` (`id`, `zCode`, `zFirst`, `zLast`, `zStat`, `zAdd`, `zStreet`, `zContact`, `zSize`, `zQuantity`, `zPayment`, `zItem`, `uStat`, `zMonth`, `zMonth1`, `zYear`, `zDate`, `created_at`, `updated_at`) VALUES
(1, '5632471', 'da', 'da', 3, 'Catanghalan', 'a123', '123123', 'Medium', '1', '70', 'Milktea Black Coffee', 0, '06', 'June', '2023', '2023-06-12 08:57:30', '2023-06-11 23:34:31', '2023-06-12 16:57:30'),
(2, '6423175', 'Dan', 'Vic', 3, 'Catanghalan', 'Catanghalan', '09654188547', 'Medium', '3', '210', 'Yakult MilkTea', 0, '06', 'June', '2023', '2023-06-12 08:57:34', '2023-06-12 00:42:15', '2023-06-12 16:57:34');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(1) NOT NULL,
  `vCode` varchar(999) NOT NULL,
  `uFirst` varchar(999) NOT NULL,
  `uLast` varchar(999) NOT NULL,
  `uStat` varchar(999) NOT NULL,
  `uAdd` varchar(999) NOT NULL,
  `uEmail` varchar(999) NOT NULL,
  `uContact` int(11) NOT NULL,
  `uPass` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(1) NOT NULL,
  `nCode` varchar(999) NOT NULL,
  `nProduct` varchar(999) NOT NULL,
  `nPrice` varchar(999) NOT NULL,
  `nSize` varchar(999) NOT NULL,
  `nDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(1) NOT NULL,
  `tCode` varchar(999) NOT NULL,
  `tFirst` varchar(999) NOT NULL,
  `tLast` varchar(999) NOT NULL,
  `tAdd` varchar(999) NOT NULL,
  `tTask` varchar(999) NOT NULL,
  `tDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `tCode`, `tFirst`, `tLast`, `tAdd`, `tTask`, `tDate`, `created_at`, `updated_at`) VALUES
(1, '5741263', 'Minri', 'Salazar', 'Catanghalan', 'Order All Catanghalan', '2023-06-11 16:00:00', '2023-06-12 00:46:39', '2023-06-12 08:46:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(1) NOT NULL,
  `vCode` varchar(999) NOT NULL,
  `uStat` int(1) NOT NULL,
  `uFirst` varchar(999) NOT NULL,
  `uLast` varchar(999) NOT NULL,
  `uContact` varchar(999) NOT NULL,
  `uAddress` varchar(999) NOT NULL,
  `uStreet` varchar(999) NOT NULL DEFAULT 'none',
  `email` varchar(999) NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(999) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `vCode`, `uStat`, `uFirst`, `uLast`, `uContact`, `uAddress`, `uStreet`, `email`, `email_verified_at`, `password`, `created_at`, `updated_at`) VALUES
(1, '6423175', 0, 'Dan', 'Vic', '09654188547', 'Catanghalan', 'Salambao', 'dan@yahoo.com', '2023-06-12 08:44:33', '$2y$10$LGiYK6Zwuu8ABYKyXJaHBuxYyr1//Ni/xfuyFge7twdb5VZ3eSIpu', '2023-06-12 00:40:50', '2023-06-12 16:44:33'),
(7, '5741263', 1, 'Minri', 'Salazar', '0987457157', 'Catanghalan', 'none', 'minri@yahoo.com', '2023-06-12 08:45:53', '$2y$10$u9EJdqGqrB//SdoWJqBfxerW4FYYFf7bgkiZ99MawWGaaXuA7bbSe', '2023-06-12 00:45:53', '2023-06-12 08:45:53'),
(8, '6375421', 1, 'Melvin', 'Nesio', '0352984516', 'Paliwas', 'none', 'melvin@yahoo.com', '2023-06-12 08:56:23', '$2y$10$LvYRZ5IHQDPl.tAKS.yw7ORcf8.qfJfnDFwa1tGkY4SCFC4Sss.9u', '2023-06-12 00:48:22', '2023-06-12 16:56:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
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
-- AUTO_INCREMENT for table `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
