-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2023 at 01:26 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `customer_name`, `email`, `message`, `created_at`) VALUES
(1, 'Md Alfaz Zaman Akash', 'info.alfazakash@gmail.com', 'Hi', '2023-12-25 06:06:09'),
(2, 'Md Alfaz Zaman Akash', 'info.alfazakash@gmail.com', 'hello', '2023-12-25 06:20:36'),
(3, 'Sajid Ifti', 'sajid@gmail.com', 'Hello', '2023-12-25 08:19:46'),
(4, 'Sakib Al Hasan', 'sakib@gmail.com', 'hello', '2023-12-25 10:43:38');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `track_name` varchar(255) NOT NULL,
  `track_number` varchar(50) NOT NULL,
  `driver_name` varchar(255) NOT NULL,
  `driver_phone_number` varchar(20) NOT NULL,
  `category` enum('Rice','Paddy','Corn','Wheat') NOT NULL,
  `product_description` text NOT NULL,
  `client` varchar(255) NOT NULL,
  `quantity` decimal(10,2) NOT NULL,
  `wearhouse_number` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `track_name`, `track_number`, `driver_name`, `driver_phone_number`, `category`, `product_description`, `client`, `quantity`, `wearhouse_number`, `created_at`) VALUES
(1, 'Tata', 'DMT-14-1246', 'Sajib', '01310226744', 'Rice', 'Wheat', 'Ispahani', 15.00, '5', '2023-12-25 06:58:03'),
(2, 'Tata', 'DMT-14-1246', 'Sajib', '01310226744', 'Paddy', 'Good', 'Ispahani', 15.00, '5', '2023-12-25 08:00:10'),
(3, 'Tata', 'DMT-14-1246', 'Sajib', '01310226744', 'Paddy', 'Good', 'Ispahani', 5.00, '5', '2023-12-25 08:01:50'),
(4, 'Tata', 'DMT-14-1246', 'Sajib', '01310226744', 'Corn', 'Good', 'Ispahani', 10.00, '5', '2023-12-25 08:03:40'),
(5, 'Tata', 'DMT-14-1246', 'Sajib', '01310226744', 'Rice', 'Good', 'Ispahani', 10.00, '5', '2023-12-25 08:04:57'),
(6, 'Tata', 'DMT-14-1246', 'Sajib', '01310226744', 'Wheat', 'Good', 'Ispahani', 10.00, '5', '2023-12-25 08:06:05');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `photo_path` varchar(255) NOT NULL,
  `season` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `description`, `photo_path`, `season`, `created_at`, `updated_at`) VALUES
(1, 'Chinigura Rice', 130.00, 'Hello', 'uploads/rice2.jpg_1703494689.jpg', 'spring', '2023-12-25 08:58:09', '2023-12-25 08:58:09'),
(2, 'Chinigura Rice', 130.00, 'Hakau', 'uploads/rice4.jpg', 'spring', '2023-12-25 09:09:12', '2023-12-25 09:09:12'),
(3, 'Chinigura Rice', 130.00, 'ljknnh', 'uploads/rice3.jpg', 'spring', '2023-12-25 09:10:02', '2023-12-25 09:10:02'),
(4, 'Katharivog', 80.00, 'Katarivog is a very famous type of rice which is cultivated in Dinajpur. It ensures you a pure and fresh texture of rice which is great to eat. This rice was produced before the region of Aryan. It is a little bit curved knife rice and pointed at the edge.', 'uploads/rice3.jpg_1703501406.jpg', 'spring', '2023-12-25 10:50:06', '2023-12-25 10:50:06');

-- --------------------------------------------------------

--
-- Table structure for table `product_inquiry`
--

CREATE TABLE `product_inquiry` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `quantity` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_inquiry`
--

INSERT INTO `product_inquiry` (`id`, `userId`, `productId`, `message`, `quantity`) VALUES
(1, 3, 1, 'valo jinis diyen', 100),
(2, 8, 1, 'Please contact me', 15);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `truck_name` varchar(255) NOT NULL,
  `truck_number` varchar(50) NOT NULL,
  `driver_name` varchar(255) NOT NULL,
  `driver_phone_number` varchar(20) NOT NULL,
  `product_type` enum('Rice','Paddy','Corn','Wheat') NOT NULL,
  `product_description` text NOT NULL,
  `source` varchar(255) NOT NULL,
  `client` varchar(255) NOT NULL,
  `quantity` decimal(10,2) NOT NULL,
  `warehouse_number` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `truck_name`, `truck_number`, `driver_name`, `driver_phone_number`, `product_type`, `product_description`, `source`, `client`, `quantity`, `warehouse_number`, `created_at`) VALUES
(1, 'Tata', 'dhaka metro gha', 'Sajib', '01310226757', 'Rice', 'Very good supply', 'Dinajpur', 'Ruhul Amin', 15.00, '1', '2023-12-25 06:39:19'),
(2, 'Tata', 'dhaka metro gha', 'Sajib', '01310226757', 'Rice', 'Very good supply', 'Dinajpur', 'Ruhul Amin', 15.00, '1', '2023-12-25 06:42:51'),
(3, 'Tata', 'DNT-12-4578', 'Sajib', '01310226757', 'Rice', 'good', 'Dinajpur', 'Ruhul Amin', 10.00, '1', '2023-12-25 07:58:20'),
(4, 'Tata', 'DNT-12-4578', 'Sajib', '01310226757', 'Paddy', 'good', 'Dinajpur', 'Ruhul Amin', 15.00, '1', '2023-12-25 07:59:11'),
(5, 'Tata', 'DNT-12-4578', 'Sajib', '01310226757', 'Paddy', 'good', 'Dinajpur', 'Ruhul Amin', 12.00, '1', '2023-12-25 07:59:31'),
(6, 'Tata', 'DNT-12-4578', 'Sajib', '01310226757', 'Corn', 'Good', 'Dinajpur', 'Ruhul Amin', 18.00, '3', '2023-12-25 08:02:24'),
(7, 'Tata', 'DNT-12-4578', 'Sajib', '01310226757', 'Corn', 'Good', 'Dinajpur', 'Ruhul Amin', 15.00, '3', '2023-12-25 08:02:40'),
(8, 'Tata', 'DNT-12-4578', 'Sajib', '01310226757', 'Wheat', 'Good', 'Dinajpur', 'Ruhul Amin', 15.00, '3', '2023-12-25 08:04:19'),
(9, 'Tata', 'DNT-12-4578', 'Sajib', '01310226757', 'Wheat', 'Good', 'Dinajpur', 'Ruhul Amin', 14.00, '3', '2023-12-25 08:04:42'),
(10, 'Tata', 'DNT-12-4578', 'Sajib', '01310226757', 'Paddy', 'good', 'Dinajpur', 'Ruhul Amin', 14.00, '3', '2023-12-25 08:18:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profilePicturePath` varchar(255) DEFAULT NULL,
  `userType` enum('admin','customer','staff') NOT NULL DEFAULT 'customer',
  `activeStatus` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `fullName`, `password`, `email`, `profilePicturePath`, `userType`, `activeStatus`) VALUES
(3, 'admin', 'Alfaz Akash', '$2y$10$AT6VGa9JOJlOoHPbtbocJe2cSfJCWlg8Nk32DiRg9zb/KZ7zwbiBe', 'alfaz@gmail.com', NULL, 'admin', 1),
(8, 'customer', 'Rabby Rayhan', '$2y$10$t32sWpD7rAKSeVHNZ9pIvubFxaeUMkVcvRACo0JGD3dlUAnfu/1qO', 'rabby@gmail.com', NULL, 'customer', 1),
(9, 'staff', 'Rabby Rayhan', '$2y$10$Lksn0ObnG2YMiYeZ2F2LuO8tmEYONPMGRASUBebEeGCuygUcj18jy', 'rana@gmail.com', NULL, 'staff', 1),
(10, 'Ifti', 'Sajid Ifti', '$2y$10$SRKe74UMRF6LmTcMDlYHfuPEyYB1b.gwzNbwzxbtWmvOBG1xYoIe6', 'ifti@gmail.com', NULL, 'customer', 1),
(11, 'Kamal', 'Kamal kamal', '$2y$10$XTfKtfr0S5N7osOtDtC8aOQemul24RxCjSN2NL.NoySa3eU.qTRNu', 'kamal@gmail.com', NULL, 'staff', 1),
(12, 'rabbu', 'Rabby Rabby', '$2y$10$RhIR8X4lLPhYvMeyV9CAtO0Bd2MnjSEdWpu2BtxCcAJjeivzgQpfq', 'rabbu@gmail.com', NULL, 'staff', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_inquiry`
--
ALTER TABLE `product_inquiry`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_inquiry`
--
ALTER TABLE `product_inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_inquiry`
--
ALTER TABLE `product_inquiry`
  ADD CONSTRAINT `product_inquiry_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`),
  ADD CONSTRAINT `product_inquiry_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
