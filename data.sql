-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 17, 2019 at 05:16 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bncc`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sekolah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `paymenyt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` int(11) DEFAULT NULL,
  `jawaban` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `sekolah`, `name`, `email`, `ktp`, `name1`, `email1`, `ktp1`, `name2`, `email2`, `ktp2`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `paymenyt`, `verified`, `jawaban`) VALUES
(1, 'test', '$2y$10$vC5AQSk/0lwWRskWdCma6ubAnJLUDdmyTQ.oCg9ecqmcOC2A/gJ0a', 'binus', 'test', 'test@email.com', '123445678910', 'test1', 'tes@email.com', '0987654321', 'tes2', 'test2@email.com', '1029384756', NULL, 'JkUwiugtdsPFcBwTRsE92mt2f3CFvtaGbnvNlfmrrKpKcfZmVmCJxILfsD8O', '2019-02-13 03:26:15', '2019-02-17 08:58:39', '1341468378.jpg', 1, 'bisnis.zip'),
(2, 'Admin', '$2y$10$VPtq3ASPNS6rN9.B5DZ/7uL3BqRGpj93b59SInj6xUVGd00L1R3FK', '-', 'Admin', 'admin@bncc.net', '-', '-', '-', '-', '-', '-', '-', NULL, 'vsAHGbarm69NyZCgS0QEPrsw5YT7V8hnGOerjrBvFHt5VHXIqPPufiEQybLc', '2019-02-13 03:38:39', '2019-02-17 07:28:35', '', 1, ''),
(3, 'reynaldodev', '$2y$10$keCVlJQiGaPt0JTvKP.a1OIiI4rSo8lbF8ehyMLXwlQa6chrVuxC2', 'sunib', 'rey', 'rey@email.com', '34534534535', 'nal', 'nal@email.com', '9028450783535', 'do', 'do@email.com', '8473598355', NULL, 'B1yr8oQs9hcgwDUpwAOPvRF3himQv666viPjiKTGy7QnlKSohTk2igzNncpy', '2019-02-17 00:38:43', '2019-02-17 00:38:43', NULL, 0, ''),
(4, 'robot', '$2y$10$Qoyn298Wl7vi2GhZfNRB1uzyOaGF7B7Q6QCY..12.gkuNcwDjjLMm', 'robot', 'robot', 'robot@email.com', '1111111111111111', 'robott', 'robott@email.com', '222222222222', 'roboto', 'roboto@email.com', '33333333333', NULL, NULL, '2019-02-17 09:15:53', '2019-02-17 09:15:53', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;