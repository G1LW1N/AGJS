-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2024 at 09:05 PM
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
-- Database: `user_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `pet_name` varchar(255) NOT NULL,
  `breed` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'Juan Miguel', 'jm789', 'lufficious@email.com', '$2y$10$I.5kBfci9itoTsojLNujUeBD/9NFU/Y76KpaCDZUQhhhFeU2XLm8q'),
(2, 'juan Miguel', 'tolentino', 'Hello@gmail.com', '$2y$10$D4WyW692wEp7k4aiyWb3L.iRobn/AiJpwQEWgr6HxZ7N9R8njMSQ6'),
(3, 'Luis Claus', 'luis45', 'luisnadya4578@email.com', '$2y$10$Ns6Eaivf0wuiUKyqQuxT2usQMHjWUfYTkfPyo39LWKptp7X1IpL/S'),
(4, 'Lelemon Banget', 'help09', 'lowbat56@email.com', '$2y$10$djg0GzrT9QEc/gyLAs9I0eF9siIs2ygQ1LfUR.T6HxBJunw7FLB.q'),
(5, 'Elena Flores', 'elenaf56', 'elanflo456@email.com', '$2y$10$RTzubx4gIro4h0VLsKIUpuVxgoBx/CPf4Cqw1AUBhUPqVoUTKYmq2'),
(6, 'Maria Kayles', 'maria09', 'mariakay32@email.com', '$2y$10$GtN4601.QPLLT.m/aVkneOwN5WdMlwKjcusKpHmsnpLEo/tIhXfce'),
(7, 'hello', 'james457@gmail.com', 'hellokitty@email.com', '$2y$10$iRjUQYwnAmwGNowZ.wzH3u1rdXJJVDXTG32rgVAkqC4FcQTGMvlvW');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `birthday` date DEFAULT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `hobbies` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `birthday`, `contact_number`, `hobbies`, `image`) VALUES
(1, 3, '1997-07-17', '75858585', 'Watching movies, playing video games, going to church.', 'uploads/handsome-indian-guy-smiling-XKZP5KC.jpg'),
(2, 4, '0000-00-00', '', '', 'uploads/OIP.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `pets_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
