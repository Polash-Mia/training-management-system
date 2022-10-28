-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 09:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `training-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `teacher_id` int(11) DEFAULT NULL,
  `course_fee` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `starting_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `type`, `teacher_id`, `course_fee`, `title`, `subtitle`, `sort_description`, `long_description`, `image`, `banner_image`, `starting_date`, `course_duration`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, NULL, 'Php', 'Php with laravel', 'Php with laravel', 'Php with laravel', 'upload/course/course_1666728647.jpg', NULL, '14-10-2022', '3 month', NULL, '2022-10-25 14:10:47', '2022-10-26 22:15:03'),
(2, 0, NULL, NULL, 'Graphic Design', 'Graphic Design', 'Graphic Design', 'Graphic Design', 'upload/course/course_1666728753.jpg', NULL, '14-10-2022', '3 month', NULL, '2022-10-25 14:12:33', '2022-10-25 14:12:33'),
(3, 0, NULL, NULL, 'Digital Marketing', 'Digital Marketing', 'Digital Marketing', 'Digital Marketing', 'upload/course/course_1666728792.jpg', NULL, '14-10-2022', '3 month', NULL, '2022-10-25 14:13:12', '2022-10-25 14:13:12'),
(4, 1, 203, 1212121, 'laravel9', 'laravel9', 'laravel9', 'laravel9', 'upload/course/course_1666729384.jpg', NULL, '14-10-2022', '3 month', NULL, '2022-10-25 14:23:04', '2022-10-25 14:23:04'),
(5, 1, 203, 454545, 'Microtic Routing', 'Microtic Routing', 'Microtic Routing', 'Microtic Routing', 'upload/course/course_1666772048.jpg', NULL, '14-10-2022', '3 month', NULL, '2022-10-26 02:14:08', '2022-10-26 02:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `institutes`
--

CREATE TABLE `institutes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_as` tinyint(4) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `institutes`
--

INSERT INTO `institutes` (`id`, `role_as`, `name`, `code`, `about`, `person`, `mobile`, `password`, `email`, `address`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, 'Bitm', 101, 'Computer', 'Habib', 1737115041, '$2y$10$KiCTR27br5n3RcxH61BOKeWTE4XYEMZdkJIEJBXAViplCkxbdOxNi', 'bitm@gmail.com', 'Dhaka', 'upload/Institute/Bitm_1666727741.png', '2022-10-25 13:55:41', '2022-10-25 13:55:41'),
(2, 2, 'Creative IT', 102, 'Computer', 'RAZU', 1737115041, '$2y$10$wXe5xdSxW80yHnPakTGzNeC13QFa4z6GrMeJpCVZPdgVeAcv4bDBe', 'critiveit@gmail.com', 'Dhaka', 'upload/Institute/Bitm_1666727779.png', '2022-10-25 13:56:19', '2022-10-25 13:56:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(55, '2014_10_12_000000_create_users_table', 1),
(56, '2014_10_12_100000_create_password_resets_table', 1),
(57, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(58, '2019_08_19_000000_create_failed_jobs_table', 1),
(59, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(60, '2022_10_13_150819_create_sessions_table', 1),
(61, '2022_10_17_194220_add_role_as_to_users_table', 1),
(62, '2022_10_18_095256_create_institutes_table', 1),
(63, '2022_10_21_134545_create_teachers_table', 1),
(64, '2022_10_23_053659_create_courses_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9EMB5FDOjZESqVqwSgLhir53qFHn3bK85AO1R46t', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiaFNLaEl1enA2SGJleG5HSEJYTE55VXNIOHZ4SEVCclBieWtKYkZENyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC90ZWFjaGVyL21hbmFnZSI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkNU94c3lJcDFQSk5zTmVjeU5xQXhlLlBLTmVvNk81SFJBTVhYVzhtM2tva2d4N29BTmJIRksiO30=', 1666853598);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` int(11) DEFAULT NULL,
  `role_as` tinyint(4) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(11) NOT NULL,
  `nid` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `institute_id`, `role_as`, `name`, `code`, `email`, `mobile`, `nid`, `address`, `district`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 101, 3, 'Polash Khan', 201, 'polash@gamil.com', 1737115041, 1134545465, 'Dhaka', 'Dhaka', '$2y$10$8BHbUQztgHkbqVzpFro49uMUS5yyErFT4v85JVXazCaqtPgYJ8ioS', 'upload/Teacher/teacher_1666729089.jpg', '2022-10-25 14:18:09', '2022-10-26 22:20:00'),
(2, 101, 3, 'Asad', 202, 'asad@gamil.com', 1737115041, 2121212, 'Dhaka', 'Dhaka', '$2y$10$C01LMzE7v7gOJORMUuodWO/D/NZikq.pAxpeiRRR9YEmA1.x8p0kO', 'upload/Teacher/teacher_1666729127.webp', '2022-10-25 14:18:47', '2022-10-25 14:18:47'),
(3, 102, 3, 'Prince', 203, 'prince@gamil.com', 1737115041, 454545, 'Dhaka', 'Dhaka', '$2y$10$X1M9jd75la7vY6J71psAgu69Q46wS5yhYzAWNvahXu7iW/HA3UDNC', 'upload/Teacher/teacher_1666729259.jpg', '2022-10-25 14:21:00', '2022-10-25 14:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `institute_id`, `teacher_id`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `role_as`) VALUES
(1, 'Admin', NULL, NULL, 'admin@gmail.com', NULL, '$2y$10$5OxsyIp1PJNsNecyNqAxe.PKNeo6O5HRAMXXW8m3kokgx7oANbHFK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-25 13:55:01', '2022-10-25 13:55:01', 1),
(2, 'Bitm', NULL, NULL, 'bitm@gmail.com', NULL, '$2y$10$KiCTR27br5n3RcxH61BOKeWTE4XYEMZdkJIEJBXAViplCkxbdOxNi', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-25 13:55:41', '2022-10-25 13:55:41', 2),
(3, 'Creative IT', NULL, NULL, 'critiveit@gmail.com', NULL, '$2y$10$wXe5xdSxW80yHnPakTGzNeC13QFa4z6GrMeJpCVZPdgVeAcv4bDBe', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-25 13:56:19', '2022-10-25 13:56:19', 2),
(4, 'Polash Khan', NULL, NULL, 'polash@gamil.com', NULL, '$2y$10$8BHbUQztgHkbqVzpFro49uMUS5yyErFT4v85JVXazCaqtPgYJ8ioS', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-25 14:18:09', '2022-10-26 22:20:00', 3),
(5, 'Asad', NULL, NULL, 'asad@gamil.com', NULL, '$2y$10$C01LMzE7v7gOJORMUuodWO/D/NZikq.pAxpeiRRR9YEmA1.x8p0kO', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-25 14:18:47', '2022-10-25 14:18:47', 3),
(6, 'Prince', NULL, NULL, 'prince@gamil.com', NULL, '$2y$10$X1M9jd75la7vY6J71psAgu69Q46wS5yhYzAWNvahXu7iW/HA3UDNC', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-25 14:21:00', '2022-10-25 14:21:00', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `institutes`
--
ALTER TABLE `institutes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `institutes`
--
ALTER TABLE `institutes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
