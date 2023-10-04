-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2023 at 09:21 AM
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

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`user_employee_fk`, `employee_salaray`) VALUES
(13, 78184),
(14, 82523),
(16, 68187),
(20, 55457),
(45, 19656),
(48, 88317);

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
(20, '89.302753,-149.385902');

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
(5, 'user'),
(6, 'partner'),
(7, 'employee'),
(8, 'admin'),
(9, 'user'),
(10, 'partner'),
(11, 'employee'),
(12, 'admin'),
(13, 'user'),
(14, 'partner'),
(15, 'employee'),
(16, 'admin'),
(17, 'user'),
(18, 'partner'),
(19, 'employee'),
(20, 'admin');

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
(13, 'Demario', 'Schultz', 'muhammad66@gmail.com', '9167 Elna Street Suite 388\nNew Erikville, GA 79567', '$2y$10$tHKt3Tfyrvmwy6YilXkobuqVNC.8biY/kRMnJvXzWvjZCug6qFOfy', 'user', '1695900118', '0', '0', 0),
(14, 'Lily', 'Wunsch', 'ahills@gmail.com', '869 Douglas Vista\nEast Joelleside, DC 36253', '$2y$10$JmlXIPQb8Zr4uDdqDWeY6OXhG44uBG/tkQH09ToTq8FnHfIzeK2l.', 'user', '1695900118', '0', '0', 1),
(15, 'Marguerite', 'Strosin', 'mariana18@pacocha.com', '780 Isabelle Lakes Suite 636\nNettieview, ND 73933', '$2y$10$zqiitHkn77VPI1jXRKrWUOA.rgrwVhUPZjh17JYTR8Ec02xPhARJS', 'user', '1695900118', '0', '0', 0),
(16, 'Tyrese', 'Hill', 'anthony.breitenberg@kiehn.com', '7526 Desmond Avenue\nMartymouth, SD 14325', '$2y$10$aHlxv3/xwiYRaEBv4rlOXeOpiEJwFkmUNLdYPsStj/MZouX4xIHOi', 'user', '1695900118', '0', '0', 1),
(17, 'Dorcas', 'Jacobi', 'wolf.brielle@orn.com', '9983 King Mission Apt. 492\nWest Fabianfurt, OK 05148', '$2y$10$hraG2pBKr6ij3NRj5RXo9OHovBpuAwFSUnZyXKGqd1PULS77EBM0e', 'user', '1695900118', '0', '0', 1),
(18, 'Geovanni', 'Sipes', 'ortiz.dedrick@hotmail.com', '5024 Shaniya Avenue Apt. 275\nGreenholtchester, PA 50146-7391', '$2y$10$dBGfQX7z/P/9/tvaoB9kIOhxt63mY9pOPUij5RnQ4VPJp9atSFVSu', 'user', '1695900118', '0', '0', 0),
(20, 'Lenna', 'Crona', 'ratke.chanelle@hotmail.com', '84750 Gusikowski Plaza Suite 641\nNorth Trinityland, WA 05864-1189', '$2y$10$hQl8MRfdgVn8RgZ20/roBuMDtMficfKUSoS5fBKIyu6CQzi6h9dli', 'user', '1695900118', '0', '0', 1),
(21, 'Jimmy', 'Vandervort', 'marlen.hickle@mohr.org', '439 Green Knolls\nNew Archtown, NE 38275', '$2y$10$UCG.TJ01Lzf8h0P9q3DbeObkx.3O53ZUwBFYu7HySjfxkr1XrCIHe', 'user', '1695900248', '0', '0', 0),
(22, 'Stefan', 'Stracke', 'hhuels@gerhold.com', '55110 White Loaf\nNew Palmafort, TX 36467-7169', '$2y$10$ZB.qxLsfQpD8USjlH2lZs.mjBgyoe0Zmsh95KpQFCHtYVDfYt0wdm', 'user', '1695900248', '0', '0', 1),
(23, 'Elijah', 'Schowalter', 'rolfson.rowan@mccullough.com', '3439 Brown Camp\nKuhlmanfort, WY 71918', '$2y$10$w.CH3NqwXY6eVojQebKZteW8n.FysGHQZEfR1GstqYtZ4lo3R1vAe', 'user', '1695900248', '0', '0', 1),
(24, 'Rodger', 'Schuppe', 'margot.okuneva@yahoo.com', '532 Jaiden Brook\nPort Winfield, KS 08795', '$2y$10$vV.hALE5VIj.JKoUwKGnOOzjqp9O/espd6flqq.T7nSIiDjKiMEMm', 'user', '1695900248', '0', '0', 1),
(25, 'Bailee', 'Stiedemann', 'shanie75@heidenreich.net', '441 Shany Mountains\nWeissnatfort, MO 10900', '$2y$10$n.qj/8zAyBbZKnpd.Y2gIufXr9.ENOVkhNs1HKs72t7t0/WGxwO.y', 'user', '1695900248', '0', '0', 0),
(26, 'Micah', 'Hirthe', 'stanford64@yahoo.com', '8175 Hills Bridge\nCarlieland, OR 99114', '$2y$10$TH7mnX1Ti/fKZJWMam4mluZGh5yxoh/tjEeXrGHLoQLxB4t0vnJHC', 'user', '1695900248', '0', '0', 0),
(27, 'Ardith', 'Hessel', 'hagenes.dedric@hotmail.com', '98299 Joshuah River Apt. 203\nBarrowsborough, MS 07640', '$2y$10$1EAzy0x4MmNcjC/GFoyHRONIB1pOtdi1Xbi60DAB.zmGCOa8voNfK', 'user', '1695900248', '0', '0', 1),
(28, 'Zack', 'Weimann', 'lulu78@gmail.com', '88322 Dicki Groves Apt. 844\nHillborough, CT 31899', '$2y$10$glFRRJQkw9Zil1P3JbOjbeE/Gh0hUaUgiqhs2SzsZmkeFQESnis9S', 'user', '1695900248', '0', '0', 1),
(29, 'Edwina', 'DuBuque', 'nkautzer@olson.com', '8723 Russel Freeway\nPredovicton, MI 58979', '$2y$10$4GJXuGzsOg8KYmB2hQxxTuJ6uAifZezmvyMtr.y9jgLtrBlpWAs2K', 'user', '1695900248', '0', '0', 0),
(30, 'Brisa', 'Raynor', 'kaylin.dickinson@schmidt.com', '85470 Henderson Union\nArnulfofurt, NC 17121-3516', '$2y$10$gM82JJkLHF7tSWKz3HRrnuyy15iVofQtSIqIvsu1TrnvUVeeBdDcq', 'user', '1695900248', '0', '0', 0),
(31, 'Sigrid', 'Murray', 'earline47@gmail.com', '862 Kuvalis Harbor\nEast Fredericbury, MD 05208-1990', '$2y$10$e5DaEXh3fYOE5de2UlIvSOopmnUJxDjRYHNs6u/woO44IUe0OULXy', 'user', '1695900341', '0', '0', 0),
(32, 'Maxie', 'Wiegand', 'kelly.jones@heaney.com', '9161 Leilani Streets\nCollinsview, UT 20014-5812', '$2y$10$7rMOX0koCCxznkXgIpeZCu6g8HbNH2MEWmibEVy3apPOsKqrM6P4m', 'user', '1695900341', '0', '0', 0),
(33, 'Breanne', 'Walsh', 'sam34@yahoo.com', '664 Hegmann Glens Suite 571\nNorth Elisha, ME 78764-7580', '$2y$10$/mtkvWMlAB5APTlXRrE9cutxShfFfcLfojXjXDl9p8r9Wec7RJWk6', 'user', '1695900341', '0', '0', 1),
(34, 'Lenore', 'Jones', 'cecile.anderson@gmail.com', '301 Nova Village Apt. 121\nSandrineshire, UT 50620-3454', '$2y$10$nurnvud2Ijx4zfFEuRGbNOMxk2hg/TOLjycLjHUd5cDyBKh.aT5Je', 'user', '1695900342', '0', '0', 0),
(35, 'Wanda', 'Ward', 'lizzie.tromp@parker.com', '3569 Jamarcus Roads Suite 765\nSauerville, WV 08992', '$2y$10$jzAH/3l3OI/Ipu/rbQYXsuvrRqWnRrikL0jZzRrOssgrfVQMMXTDm', 'user', '1695900342', '0', '0', 1),
(36, 'Oswald', 'Gusikowski', 'rosenbaum.eugene@yahoo.com', '64733 Hilpert Views\nBreanaborough, DE 39118', '$2y$10$H91mDnRa58A3FZ3jr1EaHOlOMPrmiYXQ8VlWZkaNWawAFfurPwOz6', 'user', '1695900342', '0', '0', 0),
(37, 'Hanna', 'Tremblay', 'vladimir.considine@bednar.info', '8798 Gerhold Summit Apt. 293\nEast June, TN 50525', '$2y$10$QY41gq6NH45uXACTRmOAuOBmGtvUBE49MZCdGp2nFDM42adCdM6OW', 'user', '1695900342', '0', '0', 1),
(38, 'Mazie', 'Hettinger', 'hermiston.kade@mosciski.biz', '867 Koepp Cape Suite 944\nMcClureville, NV 16810', '$2y$10$j4.ySLAoWKk0u0zVi6UEkuyxNM2jEhyDfLscQQ8MHQFbTXhrbQdzi', 'user', '1695900342', '0', '0', 1),
(39, 'Dax', 'Emmerich', 'boyer.shanny@runolfsdottir.com', '17766 Johnpaul Inlet Apt. 113\nRathton, NJ 89624', '$2y$10$MrBmVclMGpUrXgsif.17Kuv.tAC2cq04T.JICGgx7Qc./sLPjO2Nm', 'user', '1695900342', '0', '0', 0),
(40, 'Douglas', 'Sporer', 'ffeeney@yundt.info', '34472 Garrett Islands\nNorth Eldora, IN 80451', '$2y$10$1HhlsVMrcLJ5FWQc.flVU.w7Q1STKhd9DPp4TgpCNoh3bFSdbGITa', 'user', '1695900342', '0', '0', 0),
(41, 'Constantin', 'Legros', 'maybelle.boyle@okon.com', '53162 Lacy Gateway\nLake Mikaylaburgh, WV 95530-2253', '$2y$10$x9IOPIV69Bwz7BKrGd.geu3YYVdg8RjjiXqouGvuOeWXY3d/mkFp6', 'user', '1695900346', '0', '0', 1),
(42, 'Sim', 'Beahan', 'olaf.bayer@gmail.com', '18692 Nelle Road Suite 886\nChrisville, MS 80971', '$2y$10$mbYuujvnhn4YRBJBzmBoDO7qiOiVYfOw5Z2DuvrQTl0pYoAkfmyda', 'user', '1695900346', '0', '0', 1),
(43, 'Antonia', 'Zboncak', 'oconnell.donny@hotmail.com', '651 Aniyah Unions\nNormafurt, PA 70132', '$2y$10$I2qlv8jAN9nl2qaGjSxYc.kqo/GCwBLbzjFn0/mV3PBtW9GeQgrJy', 'user', '1695900346', '0', '0', 1),
(44, 'Ruthie', 'Connelly', 'lane.littel@kuhlman.biz', '618 Sawayn Stravenue\nPort Fritz, MS 54672-7468', '$2y$10$NZapwqj4X0WKEqVlBfNlquHlwPxTGvlIVy2ABI3qc0c.AHpDc2RLm', 'user', '1695900346', '0', '0', 1),
(45, 'Carmen', 'Stark', 'treva79@anderson.com', '589 Javon Manor Apt. 670\nSouth Zeldafort, HI 51315', '$2y$10$Rvj4YSA8eh8AbVTJIUu/mOamrzlZet3PhTT2/LN16eM7Mt5BPCY6q', 'user', '1695900346', '0', '0', 0),
(46, 'Spencer', 'Ankunding', 'briana.kreiger@gmail.com', '6697 Keyon Tunnel Apt. 569\nBerniermouth, MN 07903', '$2y$10$C74VJF5yHDuibnFTBTpofeNfBRmVZBExBTHe6rfchwVOn.duYo3bW', 'user', '1695900346', '0', '0', 1),
(47, 'Ted', 'Torp', 'leffler.sydney@gmail.com', '716 Fisher Estates Apt. 515\nLittlefort, AK 69596', '$2y$10$vgYtneBdnVRU7omFMw/xDemDxjPcPWXys6jDXLb.j07hmBcigfY2.', 'user', '1695900346', '0', '0', 1),
(48, 'Camden', 'King', 'abernathy.helene@yahoo.com', '5760 Kasey Isle Suite 455\nAufderharport, ND 02909-8471', '$2y$10$0J3CAwIsdZprWEETYxiRB.60DB.FyhvxiURvpokR6Pfc43b4pk04C', 'user', '1695900346', '0', '0', 1),
(49, 'David', 'Howe', 'xstoltenberg@williamson.com', '486 Mitchell Corner Suite 812\nKuphalland, UT 96702-2971', '$2y$10$rMjT3oNrEJs5YNI6isE2ZelyZhTnOoDQm7THOQBBvK4yv/vJjvpiG', 'user', '1695900347', '0', '0', 1),
(50, 'Ellen', 'Dooley', 'crowe@hotmail.com', '68137 Olson Stravenue\nWest Kyleigh, RI 22424-9988', '$2y$10$KzJWjV0lDQRhWYR5OTB7/OflaGUfXb94AM2ab2j3ekwnX52jTHwPC', 'user', '1695900347', '0', '0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`user_employee_fk`,`employee_salaray`),
  ADD UNIQUE KEY `user_employee_fk` (`user_employee_fk`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD UNIQUE KEY `user_partner_fk` (`user_partner_fk`);

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
  MODIFY `role_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

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
