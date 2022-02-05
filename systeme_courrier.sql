-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2022 at 01:11 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `systeme_courrier`
--

-- --------------------------------------------------------

--
-- Table structure for table `courriers`
--

CREATE TABLE `courriers` (
    `id` int(11) NOT NULL,
    `numero_inscription` text NOT NULL,
    `designateur` text DEFAULT NULL,
    `destination` text NOT NULL,
    `date_depart` date DEFAULT NULL,
    `date_arrive` date DEFAULT current_timestamp(),
    `received_by_employee_id` int(11) NOT NULL,
    `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
    `id` int(11) NOT NULL,
    `full_name` text NOT NULL,
    `job_title` varchar(200) NOT NULL,
    `phone` varchar(8) NOT NULL,
    `email` varchar(200) DEFAULT NULL,
    `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `full_name`, `job_title`, `phone`, `email`, `created_at`) VALUES
(1, 'Moctar Abdalllahi', 'Administrator', '33101418', 'mtrelkenty@gmail.com', '2022-01-26 12:26:36');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
    `id` int(11) NOT NULL,
    `role` enum('admin','manager','employee','') NOT NULL DEFAULT 'employee',
    `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`) VALUES
(1, 'admin', '2022-01-26 10:14:55'),
(2, 'manager', '2022-01-26 10:16:26'),
(3, 'employee', '2022-01-26 10:16:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
    `id` int(11) NOT NULL,
    `employee_id` int(11) NOT NULL,
    `username` varchar(50) NOT NULL,
    `password` text NOT NULL,
    `role_id` int(11) NOT NULL,
    `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `employee_id`, `username`, `password`, `role_id`, `created_at`) VALUES
(1, 1, 'mtrElkenty', '9af15b336e6a9619928537df30b2e6a2376569fcf9d7e773eccede65606529a0', 1, '2022-01-26 12:27:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courriers`
--
ALTER TABLE `courriers`
    ADD PRIMARY KEY (`id`),
    ADD UNIQUE KEY `numero_inscription` (`numero_inscription`) USING HASH,
    ADD KEY `FK_received_by_employee_id` (`received_by_employee_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
    ADD PRIMARY KEY (`id`),
    ADD UNIQUE KEY `phone` (`phone`),
    ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
    ADD PRIMARY KEY (`id`),
    ADD UNIQUE KEY `username` (`username`),
    ADD UNIQUE KEY `employee_id` (`employee_id`),
    ADD KEY `FK_role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courriers`
--
ALTER TABLE `courriers`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courriers`
--
ALTER TABLE `courriers`
    ADD CONSTRAINT `FK_received_by_employee_id` FOREIGN KEY (`received_by_employee_id`) REFERENCES `employees` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
    ADD CONSTRAINT `FK_employee_id` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
    ADD CONSTRAINT `FK_role_id` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
