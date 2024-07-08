-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2024 at 11:52 PM
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
-- Database: `adoption_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `company` varchar(255) NOT NULL,
  `social_media` varchar(255) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `pronouns` varchar(50) NOT NULL,
  `adopt_paws` varchar(50) NOT NULL,
  `adopt_before` varchar(50) NOT NULL,
  `alt_first_name` varchar(255) NOT NULL,
  `alt_last_name` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `alt_phone` varchar(50) NOT NULL,
  `alt_email` varchar(255) NOT NULL,
  `looking_to_adopt` varchar(50) NOT NULL,
  `specific_shelter_animal` varchar(50) NOT NULL,
  `ideal_pet` text NOT NULL,
  `building_type` varchar(50) NOT NULL,
  `rent` varchar(50) NOT NULL,
  `move_pet` text NOT NULL,
  `live_with` varchar(50) NOT NULL,
  `allergic` varchar(50) NOT NULL,
  `responsible_care` varchar(255) NOT NULL,
  `financially_responsible` varchar(255) NOT NULL,
  `pet_care_emergency` varchar(255) NOT NULL,
  `hours_alone` int(11) NOT NULL,
  `introduce_pet` text NOT NULL,
  `family_support` varchar(50) NOT NULL,
  `explain_support` text NOT NULL,
  `other_pets` varchar(50) NOT NULL,
  `past_pets` varchar(50) NOT NULL,
  `zoom_date` date NOT NULL,
  `zoom_time` time NOT NULL,
  `visit_shelter` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `first_name`, `last_name`, `address`, `phone`, `email`, `birth_date`, `occupation`, `company`, `social_media`, `status`, `pronouns`, `adopt_paws`, `adopt_before`, `alt_first_name`, `alt_last_name`, `relationship`, `alt_phone`, `alt_email`, `looking_to_adopt`, `specific_shelter_animal`, `ideal_pet`, `building_type`, `rent`, `move_pet`, `live_with`, `allergic`, `responsible_care`, `financially_responsible`, `pet_care_emergency`, `hours_alone`, `introduce_pet`, `family_support`, `explain_support`, `other_pets`, `past_pets`, `zoom_date`, `zoom_time`, `visit_shelter`) VALUES
(1, 'Juan Miguel', 'Santiago', 'alabang', '706060', 'juan@email.com', '2002-02-08', 'n/a', 'n/a', 'juanmsishdj', 'Single', 'He/him', 'Website', 'No', 'lizabeth', 'santiago', 'grandmother', '706060', 'lufficious@email.com', 'Dog', 'Yes', 'playful,big', 'Apartment', 'Yes', 'i dont know', 'Spouse', 'No', 'n', 'n', 'hytt', -2, 'hhhhh', 'Yes', 'hhhh', '0', 'Yes', '2024-06-20', '19:51:00', 'Yes'),
(2, 'Juan Miguel', 'Santiago', 'alabang', '706060', 'juan@email.com', '2002-02-08', 'n/a', 'n/a', 'juanmsishdj', 'Single', 'He/him', 'Website', 'No', 'lizabeth', 'santiago', 'grandmother', '706060', 'lufficious@email.com', 'Dog', 'Yes', 'playful,big', 'Apartment', 'Yes', 'i dont know', 'Spouse', 'No', 'n', 'n', 'hytt', -2, 'hhhhh', 'Yes', 'hhhh', '0', 'Yes', '2024-06-20', '19:51:00', 'Yes'),
(3, 'n', 'n', 'n', '0', 'jialim24@email.com', '2024-07-17', '', 'n/a', 'juanmsishdj', 'Single', 'She/her', 'Friends', 'Yes', 'lizabeth', 'santiago', 'grandmother', '706060', 'lufficious@email.com', 'Cat', 'Yes', 'j', 'House', 'No', 'l', 'Living alone', 'Yes', 'n', 'n', 'hytt', 0, 'l', 'No', ';', '0', 'Yes', '2024-07-09', '21:30:00', 'Yes'),
(4, 'n', 'n', 'n', '0', 'jialim24@email.com', '2024-07-17', '', 'n/a', 'juanmsishdj', 'Single', 'She/her', 'Friends', 'Yes', 'lizabeth', 'santiago', 'grandmother', '706060', 'lufficious@email.com', 'Cat', 'Yes', 'j', 'House', 'No', 'l', 'Living alone', 'Yes', 'n', 'n', 'hytt', 0, 'l', 'No', ';', '0', 'Yes', '2024-07-09', '21:30:00', 'Yes'),
(5, 'n', 'n', 'n', '0', 'jialim24@email.com', '2024-07-17', '', 'n/a', 'juanmsishdj', 'Single', 'She/her', 'Friends', 'Yes', 'lizabeth', 'santiago', 'grandmother', '706060', 'lufficious@email.com', 'Cat', 'Yes', 'j', 'House', 'No', 'l', 'Living alone', 'Yes', 'n', 'n', 'hytt', 0, 'l', 'No', ';', '0', 'Yes', '2024-07-09', '21:30:00', 'Yes'),
(6, 'n', 'n', 'n', '0', 'jialim24@email.com', '2024-07-10', 'n', 'n/a', 'juanmsishdj', 'Single', 'She/her', 'Friends', 'No', 'n', 'n', 'n', 'n', 'lufficious@email.com', 'Cat', 'Yes', 'n', 'House', 'No', 'n', 'Living alone', 'No', 'n', 'n', 'n', 0, 'n', 'Yes', 'n', '0', 'No', '2024-07-13', '15:07:00', 'Yes'),
(7, 'n', 'n', 'n', '0', 'jialim24@email.com', '2024-07-10', 'n', 'n/a', 'juanmsishdj', 'Single', 'She/her', 'Friends', 'No', 'n', 'n', 'n', 'n', 'lufficious@email.com', 'Cat', 'Yes', 'n', 'House', 'No', 'n', 'Living alone', 'No', 'n', 'n', 'n', 0, 'n', 'Yes', 'n', '0', 'No', '2024-07-13', '15:07:00', 'Yes'),
(8, 'n', 'n', 'n', '0', 'jialim24@email.com', '2024-07-26', 'n', 'n/a', 'juanmsishdj', 'Single', 'She/her', 'Friends', 'No', 'n', 'n', 'n', 'n', 'lufficious@email.com', 'Cat', 'Yes', 'n', 'House', 'No', 'n', 'Living alone', 'No', 'n', 'n', 'n', 0, 'n', 'No', 'n', '0', 'No', '2024-07-13', '03:21:00', 'No'),
(9, 'n', 'n', 'n', '0', 'jialim24@email.com', '2024-07-26', 'n', 'n/a', 'juanmsishdj', 'Single', 'She/her', 'Friends', 'No', 'n', 'n', 'n', 'n', 'lufficious@email.com', 'Cat', 'Yes', 'n', 'House', 'No', 'n', 'Living alone', 'No', 'n', 'n', 'n', 0, 'n', 'No', 'n', '0', 'No', '2024-07-13', '03:21:00', 'No'),
(10, 'n', 'n', 'n', '0', 'jialim24@email.com', '2024-07-24', 'n', 'n/a', 'juanmsishdj', 'Single', 'She/her', 'Friends', 'Yes', 'n', 'n', 'n', 'n', 'lufficious@email.com', 'Cat', 'Yes', 'n', 'House', 'No', 'n', 'Living alone', 'No', 'n', 'n', 'n', 0, 'n', 'No', 'n', '0', 'No', '2024-07-31', '03:25:00', 'No'),
(11, 'n', 'n', 'n', '0', 'jialim24@email.com', '2024-07-24', 'n', 'n/a', 'juanmsishdj', 'Single', 'She/her', 'Friends', 'Yes', 'n', 'n', 'n', 'n', 'lufficious@email.com', 'Cat', 'Yes', 'n', 'House', 'No', 'n', 'Living alone', 'No', 'n', 'n', 'n', 0, 'n', 'No', 'n', '0', 'No', '2024-07-31', '03:25:00', 'No'),
(12, 'n', 'n', 'n', '0', 'jialim24@email.com', '2024-07-24', 'n', 'n/a', 'juanmsishdj', 'Single', 'She/her', 'Friends', 'Yes', 'n', 'n', 'n', 'n', 'lufficious@email.com', 'Cat', 'Yes', 'n', 'House', 'No', 'n', 'Living alone', 'No', 'n', 'n', 'n', 0, 'n', 'No', 'n', '0', 'No', '2024-07-31', '03:25:00', 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
