-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2023 at 10:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `user_employee_fk` bigint(20) UNSIGNED NOT NULL,
  `employee_salaray` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `user_partner_fk` bigint(20) UNSIGNED NOT NULL,
  `partner_geo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`user_partner_fk`, `partner_geo`) VALUES
(2, '55.6938931425976, 12.554285296201355');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'user'),
(2, 'partner'),
(3, 'employee'),
(4, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_last_name` varchar(20) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_role` varchar(20) NOT NULL,
  `user_created_at` char(10) NOT NULL,
  `user_updated_at` char(10) NOT NULL,
  `user_deleted_at` char(10) NOT NULL,
  `user_is_blocked` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_last_name`, `user_email`, `user_address`, `user_password`, `user_role`, `user_created_at`, `user_updated_at`, `user_deleted_at`, `user_is_blocked`) VALUES
(2, 'Lonnie', 'Roberts', 'swift.laney@hotmail.com', '10871 Bernhard Villages Suite 402\nLake Kaciemouth, CT 44635-7285', '$2y$10$MGkI.9aDaAOPcQTj2kVzV./U139OrNqLucEbrxUPsE6stjNH98lvS', 'user', '1695809360', '0', '0', 1),
(4, 'Fermin', 'Wiza', 'junius.luettgen@hegmann.biz', '9066 Boyle Neck\nDeanview, OR 62471', '$2y$10$4gRb08AK3vjDCU5kLct6Buw96roxcT39Cx9GJTaOa7RhqQCsawHWm', 'user', '1695809360', '0', '0', 1),
(5, 'Adelbert', 'Mayert', 'ifeest@yahoo.com', '9086 Price Gateway\nWest Demario, SC 21783', '$2y$10$p.kyrMAsZJAXd466Z64uZ.c00Jpu4/mWTKSadr8SNFrZrIu0YTk8S', 'user', '1695809360', '0', '0', 0),
(6, 'Bethany', 'Haag', 'michaela.halvorson@bartoletti.biz', '235 Rodriguez Inlet\nScarlettberg, DE 61122-7121', '$2y$10$pygJEJM.yT7b2bjMSxeJo.BP5IreggEtD6ZwJs6k8dxJfen8jdrJC', 'user', '1695809360', '0', '0', 0),
(7, 'Brionna', 'Ankunding', 'retha43@yundt.com', '84436 Rafael Ford Apt. 578\nWest Turnerhaven, MO 93861', '$2y$10$QXk5UQ5nKiqqQ3ll/aVSt.2g.wOISy0JaGcG9zprEXKE3SBGEzbfu', 'user', '1695809360', '0', '0', 1),
(8, 'Makayla', 'Schulist', 'jett.russel@lesch.info', '835 Stacey Hill Suite 044\nPort Ella, TX 54582-9162', '$2y$10$VLvs7v2zOtfpT4VsH7WiS.zU6qv5Y7u6CkTrEFjzL7dO3701KOyuW', 'user', '1695809360', '0', '0', 0),
(9, 'Darren', 'Brown', 'courtney.marquardt@bruen.com', '2212 Hilpert Corner\nSheldonton, OK 60262-1009', '$2y$10$FDKgqJCJfTk9thEsBOJgKOxlMg5y6impU/vbKM0AXGm9zKLHviP/i', 'user', '1695809360', '0', '0', 1),
(10, 'Elizabeth', 'Veum', 'homenick.dayne@kirlin.net', '877 Jerde Field\nBonitaton, TX 11184', '$2y$10$15/XcXOQtMTVHhH4jxXxf.MItK1dUe0Z6cSHSmduB9TXf7gR.Gws6', 'user', '1695809360', '0', '0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`user_employee_fk`,`employee_salaray`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`user_partner_fk`,`partner_geo`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD UNIQUE KEY `role_id` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`user_employee_fk`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `partners`
--
ALTER TABLE `partners`
  ADD CONSTRAINT `partners_ibfk_1` FOREIGN KEY (`user_partner_fk`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
