-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 31, 2024 at 05:57 AM
-- Server version: 10.6.18-MariaDB-cll-lve
-- PHP Version: 8.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moneytaxfilings`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `Message`, `created_at`, `updated_at`) VALUES
(1, 'client Just Updated Basic Info', '2024-03-17 00:15:36', '2024-03-17 00:15:36'),
(2, 'client Just Updated Contact Details', '2024-03-17 00:15:36', '2024-03-17 00:15:36'),
(3, 'client Just Updated Residential Details', '2024-03-17 00:15:36', '2024-03-17 00:15:36'),
(4, 'client Just Updated Income Doc Details', '2024-03-17 00:17:01', '2024-03-17 00:17:01'),
(5, 'admin Just Sent Mail to client', '2024-03-22 03:35:30', '2024-03-22 03:35:30'),
(6, 'Aakash Khiani Just Updated Basic Info', '2024-03-22 03:35:54', '2024-03-22 03:35:54'),
(7, 'Aakash Khiani Just Updated Contact Details', '2024-03-22 03:35:54', '2024-03-22 03:35:54'),
(8, 'Aakash Khiani Just Updated Residential Details', '2024-03-22 03:35:54', '2024-03-22 03:35:54'),
(9, 'Aakash Khiani Just Updated Income Doc Details', '2024-03-22 03:36:21', '2024-03-22 03:36:21'),
(10, 'Aakash Khiani Just Updated Spouse Doc Details', '2024-03-22 03:36:31', '2024-03-22 03:36:31');

-- --------------------------------------------------------

--
-- Table structure for table `bank_details`
--

CREATE TABLE `bank_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `routing_number` varchar(255) NOT NULL,
  `bank_acc_number` varchar(255) NOT NULL,
  `bank_acc_type` varchar(255) NOT NULL,
  `ip_pin` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `basic_infos`
--

CREATE TABLE `basic_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `ssn` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `first_date` varchar(255) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `visa_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basic_infos`
--

INSERT INTO `basic_infos` (`id`, `user_id`, `marital_status`, `full_name`, `ssn`, `occupation`, `dob`, `first_date`, `citizenship`, `visa_type`, `created_at`, `updated_at`) VALUES
(2, '13', 'Single', 'Aakash Gopal Khiani', '3194', 'Employee', '1996-08-12', '1996-01-19', 'Indian', 'F1', '2024-03-22 03:35:54', '2024-03-22 03:35:54');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `timezone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `user_id`, `address`, `contact`, `timezone`, `created_at`, `updated_at`) VALUES
(2, '13', 'Pioneer Way,Royal Palm Beach,1520,Florida,33411,United States', '7328961940', 'America/New_York', '2024-03-22 03:35:54', '2024-03-22 03:35:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `income_details`
--

CREATE TABLE `income_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `First` varchar(255) DEFAULT NULL,
  `Second` varchar(255) DEFAULT NULL,
  `Third` varchar(255) DEFAULT NULL,
  `Fourth` varchar(255) DEFAULT NULL,
  `Fifth` varchar(255) DEFAULT NULL,
  `Sixth` varchar(255) DEFAULT NULL,
  `Seventh` varchar(255) DEFAULT NULL,
  `Eighth` varchar(255) DEFAULT NULL,
  `Ninth` varchar(255) DEFAULT NULL,
  `Tenth` varchar(255) DEFAULT NULL,
  `Eleventh` varchar(255) DEFAULT NULL,
  `Twelfth` varchar(255) DEFAULT NULL,
  `Thirteenth` varchar(255) DEFAULT NULL,
  `Fourteenth` varchar(255) DEFAULT NULL,
  `Fifteenth` varchar(255) DEFAULT NULL,
  `Sixteenth` varchar(255) DEFAULT NULL,
  `Seventeenth` varchar(255) DEFAULT NULL,
  `Eighteenth` varchar(255) DEFAULT NULL,
  `Nineteenth` varchar(255) DEFAULT NULL,
  `Twentieth` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `income_details`
--

INSERT INTO `income_details` (`id`, `user_id`, `First`, `Second`, `Third`, `Fourth`, `Fifth`, `Sixth`, `Seventh`, `Eighth`, `Ninth`, `Tenth`, `Eleventh`, `Twelfth`, `Thirteenth`, `Fourteenth`, `Fifteenth`, `Sixteenth`, `Seventeenth`, `Eighteenth`, `Nineteenth`, `Twentieth`, `created_at`, `updated_at`) VALUES
(1, '12', '171060942146.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-17 00:17:01', '2024-03-17 00:17:01'),
(2, '13', '171105338199.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 03:36:21', '2024-03-22 03:36:21');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `to_id` varchar(255) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

CREATE TABLE `referrals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `alternative` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `replymsgs`
--

CREATE TABLE `replymsgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `to_id` varchar(255) NOT NULL,
  `messages_id` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `residency_details`
--

CREATE TABLE `residency_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `SR_2022` varchar(255) DEFAULT NULL,
  `POS_Start_2022` varchar(255) DEFAULT NULL,
  `POS_End_2022` varchar(255) DEFAULT NULL,
  `SR_2021` varchar(255) DEFAULT NULL,
  `POS_Start_2021` varchar(255) DEFAULT NULL,
  `POS_End_2021` varchar(255) DEFAULT NULL,
  `SR_2020` varchar(255) DEFAULT NULL,
  `POS_Start_2020` varchar(255) DEFAULT NULL,
  `POS_End_2020` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `residency_details`
--

INSERT INTO `residency_details` (`id`, `user_id`, `SR_2022`, `POS_Start_2022`, `POS_End_2022`, `SR_2021`, `POS_Start_2021`, `POS_End_2021`, `SR_2020`, `POS_Start_2020`, `POS_End_2020`, `created_at`, `updated_at`) VALUES
(3, '13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 03:35:54', '2024-03-22 03:35:54'),
(4, '13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 03:35:54', '2024-03-22 03:35:54');

-- --------------------------------------------------------

--
-- Table structure for table `spouse_details`
--

CREATE TABLE `spouse_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `First` varchar(255) DEFAULT NULL,
  `Second` varchar(255) DEFAULT NULL,
  `Third` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spouse_details`
--

INSERT INTO `spouse_details` (`id`, `user_id`, `First`, `Second`, `Third`, `created_at`, `updated_at`) VALUES
(1, '13', NULL, NULL, NULL, '2024-03-22 03:36:31', '2024-03-22 03:36:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` int(11) NOT NULL DEFAULT 3,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `is_active`, `name`, `username`, `email`, `phone`, `address`, `password`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, 'admin', 'admin@moneytaxfilings.com', '9987654321', NULL, '$2y$10$1PXtItNbtZQbD.ZBJCAQIeu5XeBpR9T.tFXMErN4DnaFQDs1CZHpe', '2024-01-18 00:18:43', '2024-01-18 00:18:43'),
(13, 3, 1, NULL, 'Aakash Khiani', 'khiani.aakash@gmail.com', '7328961940', NULL, '$2y$10$69fMzGpp2yYS6GI.u6Ct9eHkPSM65rhE70vlF2I5oaULe6DzGgaZK', '2024-03-22 03:27:08', '2024-03-22 03:27:08'),
(14, 3, 1, NULL, 'abhishek', 'abhishek@moneytaxfilings.com', '9100826352', NULL, '$2y$10$VQJfyRNh8qVyCyJDG7rrZ.gEMw3KsuHqMtmM4SYsjxDaoOaS/Dlhu', '2024-03-22 03:28:23', '2024-03-22 03:28:23'),
(15, 3, 1, NULL, 'client', 'client@moneytaxfiling.com', '9107559991', NULL, '$2y$10$Jd0.eh74voLqFW6b.Q6SQODS/CTY9dm9i94JkG9VJDPWnbaI1XaXy', '2024-03-22 03:44:39', '2024-03-22 03:44:39'),
(16, 3, 1, NULL, 'yugundharreddy', 'yugundhar211@gmail.com', '7175528256', NULL, '$2y$10$jlfeXDZ8iQPBjxTuZ7M.Cu0fiYJE3RC4CLBHBeJqLp6Rt0Qu4panS', '2024-03-26 09:51:31', '2024-03-26 09:51:31'),
(17, 3, 1, NULL, 'janelle_waelchi@banlamail.com', 'janelle_waelchi@banlamail.com', '8647079132', NULL, '$2y$10$2i1xkMECG4pePIqyeGN2hugAMBonnOuxHBd.KvN2XDXOEr2/DnMYm', '2024-07-16 03:55:20', '2024-07-16 03:55:20'),
(18, 3, 1, NULL, 'lesley.okeefe', 'hugolehmann92@outlook.com', '8647079132', NULL, '$2y$10$1eOAXOPqUZ6zOY5mC59Ktuj81UmtBsj3wAeQYCd4/QEX21hoG3rbW', '2024-07-16 03:55:31', '2024-07-16 03:55:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic_infos`
--
ALTER TABLE `basic_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `income_details`
--
ALTER TABLE `income_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `referrals`
--
ALTER TABLE `referrals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replymsgs`
--
ALTER TABLE `replymsgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residency_details`
--
ALTER TABLE `residency_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spouse_details`
--
ALTER TABLE `spouse_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bank_details`
--
ALTER TABLE `bank_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `basic_infos`
--
ALTER TABLE `basic_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `income_details`
--
ALTER TABLE `income_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referrals`
--
ALTER TABLE `referrals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `replymsgs`
--
ALTER TABLE `replymsgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `residency_details`
--
ALTER TABLE `residency_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `spouse_details`
--
ALTER TABLE `spouse_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
