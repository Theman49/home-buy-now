-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 11, 2022 at 08:48 PM
-- Server version: 10.5.16-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `n1589848_houses`
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

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`id_house`, `nama_object`, `id_lokasi`, `jumlah_lantai`, `harga`, `luas_tanah`, `luas_bangunan`, `jumlah_kamar_tidur`, `jumlah_kamar_mandi`, `jumlah_carport`, `tahun_bangun`, `id_harga`, `id_luas`, `jenis_rumah`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Premiere Estate 3', 1, 2, '1200000000', 83, 84, 3, 2, 1, 2020, 4, 3, 'primary', '<div>Rumah berkonsep modern minimalis dengan backyard design 2 tampak (depan dan belakang) dan layout fungsional yang memuaskan ditambah dengan premium material di daerah Cibubur diapit 3 akses tol mampu menjadikannya sebagai pilihan hunian terbaik.&nbsp;<br><br>Type Besancon<br><br>LT 84m2<br>LB 84m2<br>KT 3<br>KM 2&nbsp;<br>Carport 2 mobil&nbsp;<br><br>Free legal Fee<br>Free carport<br><br></div><div>Info harga dan stock unit bisa hubungi admin kami dengan menekan tombol WA di form kanan ini.</div><div><br>Terima kasih.<br><br>#rumahcibubur<br>#rumahbaru<br>#rumahsecond<br>#rumahmewah<br>#rumahtingkat<br>#rumahmurah<br>#rumahcantik<br>#rumahrapih<br>#property<br>#propertycibubur<br>#investasirumah<br>#investasi<br>#investasimasadepan<br>#investasicibubur<br>#rumahdekatpintutol<br>#rumahprimary<br>#rumahsecondary<br>#rumahbarucibubur<br>#rumahcantikcibubur<br>#rumahrapihcibubur<br>#investasiuntung<br>#premiereestate3<br>#premiere3<br>#premiereindonesia<br><br></div><div><br><br></div><div><br><br></div>', NULL, NULL),
(2, 'Premiere Estate 3', 1, 2, '2500000000', 104, 124, 4, 3, 2, 2022, 4, 4, 'primary', '<div>Rumah berkonsep modern minimalis dengan backyard design 2 tampak (depan dan belakang) dan layout fungsional yang memuaskan ditambah dengan premium material di daerah Cibubur diapit 3 akses tol mampu menjadikannya sebagai pilihan hunian terbaik.&nbsp;<br><br>Type Gavril<br><br>LT 104m2<br>LB 124m2<br>KT 4+1<br>KM 3<br>Carport 2 mobil&nbsp;<br><br>Free legal Fee<br>Free canopy<br><br>SERAH TERIMA DESEMBER 2022<br><br>#rumahcibubur<br>#rumahbaru<br>#rumahsecond<br>#rumahmewah<br>#rumahtingkat<br>#rumahmurah<br>#rumahcantik<br>#rumahrapih<br>#property<br>#propertycibubur<br>#investasirumah<br>#investasi<br>#investasimasadepan<br>#investasicibubur<br>#rumahdekatpintutol<br>#rumahprimary<br>#rumahsecondary<br>#rumahbarucibubur<br>#rumahcantikcibubur<br>#rumahrapihcibubur<br>#investasiuntung<br>#premiereestate3<br>#premiere3<br>#premiereindonesia</div>', NULL, NULL),
(3, 'Premiere Estate 3', 1, 2, '2386000000', 135, 135, 4, 3, 2, 2022, 4, 4, 'primary', '<div>Rumah berkonsep modern minimalis dengan backyard design 2 tampak (depan dan belakang) dan layout fungsional yang memuaskan ditambah dengan premium material di daerah Cibubur diapit 3 akses tol mampu menjadikannya sebagai pilihan hunian terbaik.&nbsp;<br><br>Type Antibes<br><br>LT 135m2<br>LB 135m2<br>KT 4+1<br>KM 3<br>Carport 2 mobil&nbsp;<br><br>Free canopy<br>SERAH TERIMA DESEMBER 2022<br><br>#rumahcibubur<br>#rumahbaru<br>#rumahsecond<br>#rumahmewah<br>#rumahtingkat<br>#rumahmurah<br>#rumahcantik<br>#rumahrapih<br>#property<br>#propertycibubur<br>#investasirumah<br>#investasi<br>#investasimasadepan<br>#investasicibubur<br>#rumahdekatpintutol<br>#rumahprimary<br>#rumahsecondary<br>#rumahbarucibubur<br>#rumahcantikcibubur<br>#rumahrapihcibubur<br>#investasiuntung<br>#premiereestate3<br>#premiere3<br>#premiereindonesia<br><br></div>', NULL, NULL),
(4, 'Kotawisata Cibubur', 1, 2, '4000000000', 205, 350, 5, 3, 2, 2015, 5, 6, 'secondary', '<div>Dijual Rumah di Perumahan Kotawisata Cluster Depan, dengan spesifikasi :<br><br>Lantai 1.<br>Ruang Tamu, Ruang Makan, Ruang Santai<br><br>Lt. 2<br>Kamar Tidur &nbsp; : 3<br>Kamar mandi : 2<br><br>Lt. 3<br>Kamar Tidur &nbsp; : 2<br>Kamar mandi : 1<br><br>SHGB<br>Luas Tanah : 205 (sertifikat), 296 (real)&nbsp;<br>Luas Bangunan : 350 m2<br><br>Harga&nbsp; &nbsp; &nbsp; &nbsp;: 4M<br>Rob 062022<br><br>#rumahcibubur<br>#rumahbaru<br>#rumahsecond<br>#rumahmewah<br>#rumahtingkat<br>#rumahmurah<br>#rumahcantik<br>#rumahrapih<br>#property<br>#propertycibubur<br>#investasirumah<br>#investasi<br>#investasimasadepan<br>#investasicibubur<br>#rumahdekatpintutol<br>#rumahprimary<br>#rumahsecondary<br>#rumahbarucibubur<br>#rumahcantikcibubur<br>#rumahrapihcibubur<br>#investasiuntung<br>#kotawisata<br>#kotawisatacibubur<br>#sinarmasland<br><br></div><div><br></div><div><br><br></div>', NULL, NULL),
(5, 'Citragran Cibubur', 1, 1, '7200000000', 620, 180, 2, 2, 2, 2015, 6, 8, 'secondary', '<div>Dijual Rumah Perumahan Citra Grand Cluster Depan,<br><br>Dengan spesifikasi rumah :<br><br>Kamar Tidur : 2<br>Kamar mandi : 2<br>Lantai :1<br>Luas Tanah: 620m2<br>Luas Bangunan: 180<br><br>Legalitas kepemilikan sertifikat : SHM<br><br>Harga yg ditawarkan: 7,2 M<br><br><br>ROB 072022<br><br>#rumahcibubur<br>#rumahbaru<br>#rumahsecond<br>#rumahmewah<br>#rumahtingkat<br>#rumahmurah<br>#rumahcantik<br>#rumahrapih<br>#property<br>#propertycibubur<br>#investasirumah<br>#investasi<br>#investasimasadepan<br>#investasicibubur<br>#rumahdekatpintutol<br>#rumahprimary<br>#rumahsecondary<br>#rumahbarucibubur<br>#rumahcantikcibubur<br>#rumahrapihcibubur<br>#investasiuntung<br>#citragran<br>#citragrancibubur<br>#rumahcitragran<br>#rumahcitragrancibubur</div><div><br></div><div><br><br></div>', NULL, NULL),
(6, 'Green Park Residence', 6, 1, '1500000000', 127, 100, 3, 3, 2, 2015, 4, 4, 'secondary', '<div>Dijual Rumah lokasi paling strategis dekat exit tol jorr Jatiwarna Perumahan GREEN PARK RESIDENCE<br><br>Luas Tanah.&nbsp; 127<br>Luas Bangunan. 100<br>Kamar tidur. 3<br>K mandi. 3<br>Lantai 1<br><br>- Listrik 2200 watt<br>- Sumur bor<br>- Carport 2 mobil<br><br>Fasilitas komplek :<br>1. Kolam renang<br>2. Joging track<br>3. Security 24 jam<br>4. Lapangan basket 3 on 3<br>5. Play ground<br>6. Lapangan tenis<br>7. Fitness &amp; gym<br>8. Mesjid<br><br>SHM<br>Harga 1,5 M nego.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TF232022<br><br>#rumahbekasi<br>#rumahbaru<br>#rumahsecond<br>#rumahmewah<br>#rumahtingkat<br>#rumahmurah<br>#rumahcantik<br>#rumahrapih<br>#property<br>#propertybekasi<br>#investasirumah<br>#investasi<br>#investasimasadepan<br>#investasibekasi<br>#rumahdekatpintutol<br>#rumahprimary<br>#rumahsecondary<br>#rumahbarubekasi<br>#rumahcantikbekasi<br>#rumahrapihbekasi<br>#investasiuntung<br><br></div><div><br></div><div><br><br></div>', NULL, NULL);

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

--
-- Dumping data for table `house_images`
--

INSERT INTO `house_images` (`no`, `id_house`, `item`, `created_at`, `updated_at`) VALUES
(4, 1, '0.jpg', NULL, NULL),
(5, 1, '1.jpg', NULL, NULL),
(6, 1, '2.jpg', NULL, NULL),
(7, 1, '3.jpg', NULL, NULL),
(8, 1, '4.jpg', NULL, NULL),
(9, 1, '5.jpg', NULL, NULL),
(10, 1, '6.jpg', NULL, NULL),
(11, 1, '7.jpg', NULL, NULL),
(12, 1, '8.jpg', NULL, NULL),
(13, 1, '9.jpg', NULL, NULL),
(14, 1, '10.jpg', NULL, NULL),
(15, 2, '1.jpg', NULL, NULL),
(16, 2, '2.jpg', NULL, NULL),
(17, 2, '3.jpg', NULL, NULL),
(18, 2, '4.jpg', NULL, NULL),
(19, 2, '5.jpg', NULL, NULL),
(20, 2, '6.jpg', NULL, NULL),
(21, 2, '7.jpg', NULL, NULL),
(22, 2, '8.jpg', NULL, NULL),
(23, 2, '9.jpg', NULL, NULL),
(24, 2, '10.jpg', NULL, NULL),
(25, 2, '11.jpg', NULL, NULL),
(26, 2, '12.jpg', NULL, NULL),
(27, 2, '13.jpg', NULL, NULL),
(28, 2, '14.jpg', NULL, NULL),
(29, 3, '1.jpg', NULL, NULL),
(30, 3, '2.jpg', NULL, NULL),
(31, 3, '3.jpg', NULL, NULL),
(32, 3, '4.jpg', NULL, NULL),
(33, 3, '5.jpg', NULL, NULL),
(34, 3, '6.jpg', NULL, NULL),
(35, 3, '7.jpg', NULL, NULL),
(36, 3, '8.jpg', NULL, NULL),
(37, 3, '9.jpg', NULL, NULL),
(38, 3, '10.jpg', NULL, NULL),
(39, 4, '1.jpg', NULL, NULL),
(40, 5, '1.jpg', NULL, NULL),
(41, 6, '1.jpg', NULL, NULL);

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
(1, 'Miss Carolina Ondricka PhD', 'seller@gmail.com', '2022-09-04 10:19:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'seller', '+1.727.967.4254', 'j9XHFU3UKq4tuVCnkMB6uuVIkzHf1qILoCuHu8JaIZn192gSLbIzdgZROPZp', '2022-09-04 10:19:20', '2022-09-04 10:19:20');

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
  MODIFY `id_house` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `house_images`
--
ALTER TABLE `house_images`
  MODIFY `no` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
