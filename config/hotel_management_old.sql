-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 10:41 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
--
-- Database: `hotel_management`
--

-- --------------------------------------------------------


--
-- Table structure for table `login`
--
CREATE TABLE `login`
(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `userId` INT NOT NULL,
    `username` VARCHAR(50) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `last_login` TIMESTAMP,
    FOREIGN KEY (userId) REFERENCES users(id)
);
-- Inserting sample data into the `users` table
INSERT INTO `login` (`userId`, `username`, `password`, `last_login`)
VALUES (1, 'A Tan', '12345', CURRENT_TIMESTAMP),
        (2, 'Nguyen Hoai', '11111', CURRENT_TIMESTAMP),
        (3, 'Xuom', '2222', CURRENT_TIMESTAMP);


--
-- Table structure for table `users`
--
CREATE TABLE `users`
(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(50) NOT NULL,
    `avatar` varchar(255),
    `email` VARCHAR(100) NOT NULL,
    `birthday` DATE NOT NULL,
    `phone` VARCHAR(20) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `role` int(11) NOT NULL,
    `status` int(11) NOT NULL,
    `gender` varchar(50),
    `updated_at` timestamp,
    `created_at` timestamp

);
-- Inserting sample data into the `users` table
INSERT INTO `users` (`name`, `avatar`, `email`, `birthday`, `phone`, `password`, `role`, `status`, `gender`, `updated_at`, `created_at`) VALUES
    ('A Tan', 'https://vcdn-vnexpress.vnecdn.net/2023/02/01/327930130-1584629158642723-553-6981-4746-1675237738.jpg', 'tan@gmail.com', '2001-01-05', '123456789', '12345', 1, 1, 'Male', NOW(), NOW()),
    ('Nguyen Hoai', 'https://lmhoptacxatthue.com.vn/wp-content/uploads/2023/05/anh-con-cho-ngao-17.jpg', 'hoai@gmail.com', '2004-02-03', '987654321', '11111', 0, 1, 'Female', NOW(), NOW()),
    ('Ho Xuom', 'https://lmhoptacxatthue.com.vn/wp-content/uploads/2023/05/anh-con-cho-ngao-9.jpg', 'xuom@gmail.com', '2004-04-01', '555555555', '22222', 0, 1, 'Male', NOW(), NOW());


CREATE TABLE `rooms`
(
    `id` int PRIMARY KEY,
    `name` varchar(50) UNIQUE,
    `bedroom` int(50),
    `bathroom` int(50),
    `livingroom` int(50),
    `type` varchar(50),
    `price` decimal(10,2),
    `tax` decimal(10,2),
    `cleaning_fee` decimal(10,2),
    `description` text,
    `status` tinyint(1) DEFAULT NULL,
    `updated_at` timestamp,
    `created_at` timestamp
);
-- Inserting sample data into the `rooms` table
INSERT INTO `rooms` (`id`, `name`, `bedroom`, `bathroom`, `livingroom`, `type`, `price`, `tax`, `cleaning_fee`, `description`, `status`, `updated_at`, `created_at`) VALUES
    (1, 'Room A', 2, 1, 1, 'Standard', 100.00, 5.00, 10.00, 'A cozy standard room.', 1, NOW(), NOW()),
    (2, 'Room B', 3, 2, 1, 'Deluxe', 150.00, 7.50, 15.00, 'A luxurious deluxe room with a view.', 1, NOW(), NOW()),
    (3, 'Room C', 1, 1, 1, 'Economy', 75.00, 3.75, 7.50, 'An affordable economy room.', 1, NOW(), NOW());


CREATE TABLE `bookings`
(
    `id` int(11) AUTO_INCREMENT PRIMARY KEY,
    `user_id` int(10) NOT NULL,
    `room_id` int(10) NOT NULL,
    `check_indate` varchar(100) DEFAULT NULL,
    `check_iutdate` varchar(100) NOT NULL,
    `total_price` int(10) NOT NULL,
    `status` int(10) NOT NULL,
    `note` TEXT, 
    `updated_at` timestamp,
    `created_at` timestamp,
    FOREIGN KEY (userId) REFERENCES users(id),
    FOREIGN KEY (roomId) REFERENCES rooms(id)
);
-- Inserting sample data into the `bookings` table
INSERT INTO `bookings` (`userId`, `roomId`, `checkIndate`, `checkOutdate`, `total_price`, `status`, `note`, `updated_at`, `created_at`) VALUES
    (1, 1, '2024-01-10', '2024-01-15', 250, 1, 'Reservation for John Doe', NOW(), NOW()),
    (2, 2, '2024-02-05', '2024-02-10', 375, 1, 'Reservation for Jane Doe', NOW(), NOW()),
    (3, 3, '2024-03-20', '2024-03-25', 225, 1, 'Reservation for Bob Smith', NOW(), NOW());


CREATE TABLE `payments`
(
    `id`  INT PRIMARY KEY,
    `bookingId` int,
    `paymentDate` DATE,
    `Amount` DECIMAL(10, 2),
    `PaymentMethod` VARCHAR(50),
    `updated_at` timestamp,
    `created_at` timestamp,
    FOREIGN KEY (bookingId) REFERENCES bookings(id)
);
-- Inserting sample data into the `payment` table
INSERT INTO `payments` (`bookingId`, `paymentDate`, `Amount`, `PaymentMethod`, `updated_at`, `created_at`) VALUES
    (1, '2024-01-12', 250.00, 'Credit Card', NOW(), NOW()),
    (2, '2024-02-08', 375.00, 'PayPal', NOW(), NOW()),
    (3, '2024-03-22', 225.00, 'Cash', NOW(), NOW());

CREATE TABLE user_like_room (
`userId` INT,
`roomId` INT,
FOREIGN KEY (userId) REFERENCES users(id),
FOREIGN KEY (roomId) REFERENCES rooms(id)
);

CREATE TABLE user_rating_room (
`userId` INT,
`roomId` INT,
`rating` INT,
FOREIGN KEY (userId) REFERENCES users(id),
FOREIGN KEY (roomId) REFERENCES rooms(id)
);

CREATE TABLE reviews (
`userId` INT,
`roomId` INT,
`content` TEXT,
`status` INT,
`updated_at` TIMESTAMP,
`created_at` TIMESTAMP,
FOREIGN KEY (userId) REFERENCES users(id),
FOREIGN KEY (roomId) REFERENCES rooms(id)
);

CREATE TABLE room_images (
id INT,
roomId INT,
image VARCHAR(255),
`updated_at` timestamp,
`created_at` timestamp,
FOREIGN KEY (roomId) REFERENCES rooms(id)
);
