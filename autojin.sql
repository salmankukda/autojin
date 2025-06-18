-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2025 at 12:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autojin`
--

-- --------------------------------------------------------

--
-- Table structure for table `delivery_info`
--

CREATE TABLE `delivery_info` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `building` text NOT NULL,
  `colony` text NOT NULL,
  `province` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `area` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery_info`
--

INSERT INTO `delivery_info` (`id`, `fullname`, `phone`, `building`, `colony`, `province`, `city`, `area`, `address`, `created_at`) VALUES
(1, 'muhammad bilal mahmmod', '012654164', ' 3rd floor, nazmabad no.2', 'nazmabad no.2', 'Sindh', 'Karachi', ' nazmabad no.2', 'plot no.4/25, akela shubhani homes 3rd floor, nazmabad no.2', '2025-06-18 21:47:32');

-- --------------------------------------------------------

--
-- Table structure for table `product2`
--

CREATE TABLE `product2` (
  `id` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product2`
--

INSERT INTO `product2` (`id`, `productname`, `brand`, `price`, `image`) VALUES
(0, 'Sogo Microfiber Towels - Bundle Of Three - Ultra Thick 40x40cm', 'Sogo', 1349.00, 'uploads/sogo microfiber.jpg'),
(0, 'Gladiator Foam Cleaner - GT02S', 'Gladiator', 699.00, 'uploads/GladiatorFoamCleaner.jpg'),
(0, 'Dextro DX-140 Turbo Pressure Washer 140 Bar', 'Dextro', 21999.00, 'uploads/DextroPressureWasher.jpg'),
(0, 'Gladiator Carnauba Car Wax 230G - GT41', 'Gladiator', 699.00, 'uploads/GladiatorCarWax.jpg'),
(0, 'Gladiator Scratch Remover GT99 - 300 ML', 'Gladiator', 799.00, 'uploads/GladiatorScratchRemover.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productname`, `brand`, `price`, `image`) VALUES
(2, ' Diamond Universal Car Android Panel 10 Inch 2K Screen High Definition GPS - Wi-Fi - Navigation', 'Diamond', 23.00, 'uploads/universalled.jpg'),
(3, 'Key Cover With Metal Shell', 'Diamond', 1340.00, 'uploads/keycover.jpg'),
(4, 'Bugatti RS60 Car Led 40000LM 6500K - 400W - 2025 New Edition (3 Month Warranty)', 'Bugatti', 6400.00, 'uploads/BugattiLed.jpg'),
(5, 'Reddhawk Premium Super Horn - Loud Horn - 500HZ - 12v', 'ReddHawk', 2499.00, 'uploads/Reddhawk Super Horn.jpg'),
(6, '48-in-1 Universal Socket Wrench with 360° Rotating Head for Home and Car Repair', 'Universal', 1699.00, 'uploads/UniversalWrench.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'bilal', 'bilal@gmail.com', '$2y$10$4dppsLQDF49U6NDV0vxc4.zuFYuhy.vmvK6YdhkAADuNky7m0FsBC', '2025-06-15 13:02:23'),
(2, 'salman', 'salman@gmail.com', '$2y$10$v/0F6tIZ/zl6w7X.jdNE6.ClfJVvKmPlRuGY5KLC/CKLwFTr0Xklu', '2025-06-15 13:04:42'),
(3, 'salmankukda2004', 'salmansaleem0300@gmail.com', '$2y$10$akISDdOfvDOoq9SBbyhPdumSCXSl.9OCQZnkoQO8UihKvV742KGcC', '2025-06-16 00:28:53'),
(4, 'salman2004', 'salman2004@gmail.com', '$2y$10$8g1YwRKSXpyhNR1p5.dcHOjaO36DfhVPPvQy8oJoG79F0y8I/Gnj.', '2025-06-16 00:31:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delivery_info`
--
ALTER TABLE `delivery_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delivery_info`
--
ALTER TABLE `delivery_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
