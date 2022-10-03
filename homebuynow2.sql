-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 04, 2022 at 07:59 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homebuynow2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_kategori`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'primary', '2022-09-04 10:19:20', '2022-09-04 10:19:20'),
(2, 'secondary', '2022-09-04 10:19:20', '2022-09-04 10:19:20'),
(3, 'renovasi', '2022-09-04 10:19:20', '2022-09-04 10:19:20'),
(4, 'konstruksi', '2022-09-04 10:19:20', '2022-09-04 10:19:20'),
(5, 'ruko', '2022-09-04 10:19:20', '2022-09-04 10:19:20'),
(6, 'kavling', '2022-09-04 10:19:20', '2022-09-04 10:19:20'),
(7, 'apartemen', '2022-09-04 10:19:20', '2022-09-04 10:19:20');

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
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `id_house` bigint(20) UNSIGNED NOT NULL,
  `nama_object` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `jumlah_lantai` int(11) NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas_tanah` int(11) NOT NULL,
  `luas_bangunan` int(11) NOT NULL,
  `jumlah_kamar_tidur` int(11) NOT NULL,
  `jumlah_kamar_mandi` int(11) NOT NULL,
  `jumlah_carport` int(11) NOT NULL,
  `tahun_bangun` int(11) NOT NULL,
  `id_harga` int(11) NOT NULL,
  `id_luas` int(11) NOT NULL,
  `jenis_rumah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `house_images`
--

CREATE TABLE `house_images` (
  `no` bigint(20) UNSIGNED NOT NULL,
  `id_house` int(11) NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `house_prices`
--

CREATE TABLE `house_prices` (
  `id_harga` bigint(20) UNSIGNED NOT NULL,
  `min_harga` bigint(20) NOT NULL,
  `max_harga` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `house_prices`
--

INSERT INTO `house_prices` (`id_harga`, `min_harga`, `max_harga`, `created_at`, `updated_at`) VALUES
(1, 0, 100000000, '2022-09-04 10:19:20', '2022-09-04 10:19:20'),
(2, 100000001, 500000000, '2022-09-04 10:19:20', '2022-09-04 10:19:20'),
(3, 500000001, 1000000000, '2022-09-04 10:19:20', '2022-09-04 10:19:20'),
(4, 1000000001, 3000000000, '2022-09-04 10:19:20', '2022-09-04 10:19:20'),
(5, 3000000001, 5000000000, '2022-09-04 10:19:20', '2022-09-04 10:19:20'),
(6, 5000000001, 100000000000, '2022-09-04 10:19:20', '2022-09-04 10:19:20');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id_lokasi` bigint(20) UNSIGNED NOT NULL,
  `nama_lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id_lokasi`, `nama_lokasi`, `created_at`, `updated_at`) VALUES
(1, 'cibubur', '2022-09-04 10:19:20', '2022-09-04 10:19:20'),
(2, 'depok', '2022-09-04 10:19:20', '2022-09-04 10:19:20'),
(3, 'sentul', '2022-09-04 10:19:20', '2022-09-04 10:19:20'),
(4, 'bogor', '2022-09-04 10:19:20', '2022-09-04 10:19:20'),
(5, 'jakarta', '2022-09-04 10:19:20', '2022-09-04 10:19:20'),
(6, 'bekasi', '2022-09-04 10:19:20', '2022-09-04 10:19:20'),
(7, 'tangerang', '2022-09-04 10:19:20', '2022-09-04 10:19:20');

-- --------------------------------------------------------

--
-- Table structure for table `luas_tanahs`
--

CREATE TABLE `luas_tanahs` (
  `id_luas` bigint(20) UNSIGNED NOT NULL,
  `min_luas` int(11) NOT NULL,
  `max_luas` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `luas_tanahs`
--

INSERT INTO `luas_tanahs` (`id_luas`, `min_luas`, `max_luas`, `created_at`, `updated_at`) VALUES
(1, 0, 50, '2022-09-04 10:19:20', '2022-09-04 10:19:20'),
(2, 51, 80, '2022-09-04 10:19:20', '2022-09-04 10:19:20'),
(3, 81, 100, '2022-09-04 10:19:20', '2022-09-04 10:19:20'),
(4, 101, 150, '2022-09-04 10:19:20', '2022-09-04 10:19:20'),
(5, 151, 200, '2022-09-04 10:19:20', '2022-09-04 10:19:20'),
(6, 201, 300, '2022-09-04 10:19:20', '2022-09-04 10:19:20'),
(7, 301, 500, '2022-09-04 10:19:20', '2022-09-04 10:19:20'),
(8, 501, 100000, '2022-09-04 10:19:20', '2022-09-04 10:19:20');

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
(41, '2014_10_12_000000_create_users_table', 1),
(42, '2014_10_12_100000_create_password_resets_table', 1),
(43, '2019_08_19_000000_create_failed_jobs_table', 1),
(44, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(45, '2022_07_12_111852_create_houses_table', 1),
(46, '2022_07_12_112605_create_house_images_table', 1),
(47, '2022_07_12_112923_create_house_prices_table', 1),
(48, '2022_07_12_113311_create_locations_table', 1),
(49, '2022_07_12_130325_create_luas_tanahs_table', 1),
(50, '2022_07_14_033251_create_categories_table', 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `telepon`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Miss Carolina Ondricka PhD', 'seller@gmail.com', '2022-09-04 10:19:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'seller', '+1.727.967.4254', 'rqjRfszBNYXyQpXNU2LECplzigFn5sEomnDJWsIspU7Uw2g8HMxP1YF5CPOD', '2022-09-04 10:19:20', '2022-09-04 10:19:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id_house`);

--
-- Indexes for table `house_images`
--
ALTER TABLE `house_images`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `house_prices`
--
ALTER TABLE `house_prices`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `luas_tanahs`
--
ALTER TABLE `luas_tanahs`
  ADD PRIMARY KEY (`id_luas`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_kategori` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `id_house` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `house_images`
--
ALTER TABLE `house_images`
  MODIFY `no` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `house_prices`
--
ALTER TABLE `house_prices`
  MODIFY `id_harga` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id_lokasi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `luas_tanahs`
--
ALTER TABLE `luas_tanahs`
  MODIFY `id_luas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
