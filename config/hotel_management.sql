-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2024 at 02:22 PM
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
--  Database: `hotel_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `room_id` int(10) NOT NULL,
  `checkin_date` timestamp NULL DEFAULT NULL,
  `checkout_date` timestamp NULL DEFAULT NULL,
  `total_price` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `note` text DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `room_id`, `checkin_date`, `checkout_date`, `total_price`, `status`, `note`, `updated_at`, `created_at`) VALUES
(1, 1, 1, '2024-01-09 17:00:00', '2024-01-14 17:00:00', 250, 1, 'Reservation for John Doe', '2023-12-31 20:19:02', '2023-12-31 20:19:02'),
(2, 2, 2, '2024-02-04 17:00:00', '2024-02-09 17:00:00', 375, 1, 'Reservation for Jane Doe', '2023-12-31 20:19:02', '2023-12-31 20:19:02'),
(3, 3, 3, '2024-03-19 17:00:00', '2024-03-24 17:00:00', 225, 1, 'Reservation for Bob Smith', '2023-12-31 20:19:02', '2023-12-31 20:19:02');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `room_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
--
-- Dumping data for table `favorites`
--
INSERT INTO favorites (id, user_id, room_id) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_id`, `last_login`) VALUES
(1, 1, '2024-01-02 08:51:00'),
(2, 2, '2024-01-02 08:51:00'),
(3, 2, '2024-01-02 08:51:00');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `payment_date` datetime DEFAULT current_timestamp(),
  `amount` decimal(10,2) DEFAULT NULL,
  `payment_method` int(10) DEFAULT NULL,
  `status` int(10) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `booking_id`, `payment_date`, `amount`, `payment_method`, `status`, `updated_at`, `created_at`)
VALUES
(1, 1, '2023-12-10 12:30:00', 250.00, 1, 1, current_timestamp(), current_timestamp()),
(2, 2, '2024-01-18 12:30:00', 375.00, 1, 1, current_timestamp(), current_timestamp());

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) NOT NULL,
  `user_id` int(10) NOT NULL,
  `room_id` int(10) NOT NULL,
  `rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `room_id`, `content`, `status`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 'The living room is designed with elegance and sophistication. I am highly impressed with the attention to detail, from the decorative walls to the work desk and stylish lighting. The furniture is carefully selected, creating a cozy yet modern atmosphere.', 1, '2024-01-06 11:23:59', '2024-01-06 11:23:59'),
(2, 2, 2, 'From the moment you step into the lobby, the Golden Sun Hotel captivates with its gilded elegance. Opulent decor, bathed in golden hues, sets the tone for a stay that blends luxury with a touch of Vietnamese charm.', 2, '2024-01-06 11:23:59', '2024-01-06 11:23:59'),
(3, 3, 3, 'The living room is kept impeccably clean and tidy. The staff works diligently to maintain cleanliness and comfort for the guests.', 2, '2024-01-06 11:39:22', '2024-01-06 11:39:22'),
(4, 4, 5, 'A special highlight is the view from the living room window. I could overlook the cityscape with its sparkling lights, creating a relaxing and romantic atmosphere.', 2, '2024-01-06 11:39:22', '2024-01-06 11:39:22'),
(5, 5, 6, 'The room space is airy and clean. Perfect service', 2, '2024-01-06 11:39:22', '2024-01-06 11:39:22');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `bedroom` int(50) DEFAULT NULL,
  `bathroom` int(50) DEFAULT NULL,
  `livingroom` int(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `tax` decimal(10,2) DEFAULT NULL,
  `cleaning_fee` decimal(10,2) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `bedroom`, `bathroom`, `livingroom`, `type`, `price`, `tax`, `cleaning_fee`, `description`, `status`, `updated_at`, `created_at`) VALUES
(1, 'Room Taki', 2, 1, 1, 'Standard', 100.00, 5.00, 10.00, 'A cozy standard room.', 1, '2023-12-31 20:19:02', '2023-12-31 20:19:02'),
(2, 'Room Figo', 3, 2, 1, 'Deluxe', 150.00, 7.50, 15.00, 'A luxurious deluxe room with a view.', 1, '2023-12-31 20:19:02', '2023-12-31 20:19:02'),
(3, 'Room DIno', 1, 1, 1, 'Economy', 75.00, 3.75, 7.50, 'An affordable economy room.', 1, '2023-12-31 20:19:02', '2023-12-31 20:19:02'),
(4, 'Room Gife', 2, 1, 1, 'Standard', 120.00, 6.00, 12.00, 'A comfortable standard room.', 2, '2024-01-01 10:00:00', '2024-01-01 10:00:00'),
(5, 'Room Vina', 3, 2, 1, 'Deluxe', 150.00, 7.50, 15.00, 'A luxurious deluxe room with a view.', 2, '2024-01-01 10:00:00', '2024-01-01 10:00:00'),
(6, 'Room Jika', 1, 1, 1, 'Economy', 75.00, 3.75, 7.50, 'A cost-effective economy room.', 2, '2024-01-01 10:00:00', '2024-01-01 10:00:00'),
(7, 'Room Golden', 2, 1, 1, 'Standard', 110.00, 5.50, 11.00, 'A cozy standard room with a city view.', 2, '2024-01-01 10:00:00', '2024-01-01 10:00:00'),
(8, 'Room Hajo', 3, 2, 1, 'Deluxe', 150.00, 7.50, 15.00, 'A modern superior room with extra amenities.', 2, '2024-01-01 10:00:00', '2024-01-01 10:00:00'),
(9, 'Room Iasa', 3, 2, 1, 'Deluxe', 150.00, 7.50, 15.00, 'A modern superior room with extra amenities.', 2, '2024-01-01 10:00:00', '2024-01-01 10:00:00');
-- --------------------------------------------------------

--
-- Table structure for table `room_images`
--

CREATE TABLE `room_images` (
  `id` bigint(20) NOT NULL,
  `room_id` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `birthday`, `phone`, `password`, `role`, `status`, `gender`, `updated_at`, `created_at`) VALUES
(1, 'A Tan', 'icon1.png', '', '2001-01-05', '0382912591', '11111', 2, 1, 'Male', '2024-01-03 02:46:45', '2023-12-31 20:19:02'),
(2, 'Nguyen Hoai', 'icon2.png', 'hoai.nguyen25@student.passerellesnutan.a25@student.passerellesnumeriques.orgmeriques.org', '2004-02-03', '0899671326', '22222', 2, 1, 'Female', '2024-01-03 02:47:13', '2023-12-31 20:19:02'),
(3, 'Ho Xuom', 'icon4.png', 'xuom.ho25@student.passerellesnumeriques.org', '2004-04-01', '0862526888', '33333', 2, 1, 'Female', '2024-01-04 19:29:29', '2023-12-31 20:19:02'),
(4, 'Admin', 'admin.gif', 'admin@gmail.com', '2011-08-19', '0987654321', 'admin', 1, 1, 'Male', '2024-01-06 10:25:17', '2024-01-05 10:00:00'),
(5, 'Member', 'member.gif', 'eunwoo565@gmail.com', '2024-01-01', '0378233910', 'member', 2, 2, 'Female', '2024-01-17 10:25:17', '2024-01-05 10:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`user_id`),
  ADD KEY `roomId` (`room_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`user_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookingId` (`booking_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `room_images`
--
ALTER TABLE `room_images`
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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `room_images`
--
ALTER TABLE `room_images`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`);
COMMIT;
ALTER TABLE `bookings` CHANGE `total_price` `total_price` FLOAT NOT NULL;
ALTER TABLE `payments` CHANGE `amount` `amount` FLOAT NULL DEFAULT NULL;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


