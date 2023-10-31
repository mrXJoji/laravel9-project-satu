-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 31, 2023 at 12:18 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `analisa`
--

CREATE TABLE `analisa` (
  `id` bigint UNSIGNED NOT NULL,
  `analisa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `analisa`
--

INSERT INTO `analisa` (`id`, `analisa`, `created_at`, `updated_at`) VALUES
(1, 'Sangat Buruk', NULL, NULL),
(2, 'Buruk', NULL, NULL),
(3, 'Baik', NULL, NULL),
(4, 'Sangat Baik', NULL, NULL),
(5, 'Sempurna', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detail_penilaian`
--

CREATE TABLE `detail_penilaian` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_selesai` datetime NOT NULL,
  `point` int NOT NULL,
  `keterangan_point` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_penilaian`
--

INSERT INTO `detail_penilaian` (`id`, `nama`, `waktu_mulai`, `waktu_selesai`, `point`, `keterangan_point`, `created_at`, `updated_at`) VALUES
(1, 'Rizki Saputra', '2023-10-15 15:10:10', '2023-10-15 15:20:11', 50, 'sangat buruk', '2023-10-14 01:26:58', '2023-10-14 01:26:58'),
(2, 'Syahrul', '2023-10-16 15:10:10', '2023-10-16 15:15:10', 45, 'sedang', '2023-10-22 20:32:20', '2023-10-22 20:32:20'),
(3, 'Aisyah', '2023-10-16 16:10:10', '2023-10-16 16:30:10', 30, 'buruk', '2023-10-22 20:36:46', '2023-10-22 20:36:46'),
(4, 'Rafli Saudi', '2023-10-16 17:10:10', '2023-10-16 17:50:10', 55, 'Baik', '2023-10-22 20:46:31', '2023-10-22 20:46:31'),
(5, 'Jupri', '2023-10-17 10:10:10', '2023-10-17 11:00:10', 50, 'sedang', '2023-10-22 20:47:19', '2023-10-22 20:47:19'),
(6, 'David', '2023-10-17 11:10:10', '2023-10-17 12:00:10', 60, 'baik', '2023-10-22 20:48:02', '2023-10-22 20:48:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hasil_tes`
--

CREATE TABLE `hasil_tes` (
  `id` bigint UNSIGNED NOT NULL,
  `hasil_tes` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hasil_tes`
--

INSERT INTO `hasil_tes` (`id`, `hasil_tes`, `created_at`, `updated_at`) VALUES
(1, '10', NULL, NULL),
(2, '15', NULL, NULL),
(3, '20', NULL, NULL),
(4, '25', NULL, NULL),
(5, '30', NULL, NULL),
(6, '35', NULL, NULL),
(7, '40', NULL, NULL),
(8, '50', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_17_211925_create_siswa_table', 1),
(6, '2022_08_30_003725_add_foto_to_siswa_table', 1),
(7, '2023_10_12_151430_create_jenis_penilaian_table', 2),
(8, '2023_10_13_001222_create_penilaians_table', 3),
(9, '2023_10_13_003740_create_penilaians_table', 4),
(10, '2023_10_14_031434_create_detail_penilaians_table', 5),
(11, '2023_10_14_094435_create_tes_penilaians_table', 6),
(12, '2023_10_14_180845_create_jenis-penilaians_table', 7),
(13, '2023_10_14_181412_create_nama_tes_table', 8),
(14, '2023_10_15_064824_create_hasil_tes_table', 9),
(15, '2023_10_15_070824_create_analisas_table', 10),
(16, '2023_10_15_070841_create_point_tes_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `nama_tes`
--

CREATE TABLE `nama_tes` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_tes` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nama_tes`
--

INSERT INTO `nama_tes` (`id`, `nama_tes`, `created_at`, `updated_at`) VALUES
(1, 'Riski Saputra', NULL, NULL),
(2, 'Syahrul', NULL, NULL),
(3, 'Aisyah', NULL, NULL),
(4, 'Rafli Saudi', NULL, NULL),
(5, 'Jupri', NULL, NULL),
(6, 'David', NULL, NULL);

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
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_penilaian` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tipe_penilaian` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id`, `nama`, `jenis_penilaian`, `tipe_penilaian`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Rizki Saputra', 'lari 12 menit', 'naik', 'sedang', NULL, NULL),
(2, 'Rizki Saputra', 'Push Up', 'naik', 'bagus', NULL, NULL),
(3, 'Rizki Saputra', 'Shuttle Run', 'naik', 'sedang', NULL, NULL),
(4, 'Rizki Saputra', 'Sit Up', 'naik', 'sedang', NULL, NULL),
(5, 'Rizki Saputra', 'Pull up', 'turun', 'buruk', NULL, NULL),
(6, 'Rizki Saputra', 'Renang', 'naik', 'bagus', NULL, NULL),
(7, 'Syahrul', 'Lari 12 Menit', 'Turun', 'Buruk', NULL, NULL),
(8, 'Syahrul', 'Push Up', 'Naik', 'Sedang', NULL, NULL),
(9, 'Syahrul', 'Shuttle Run', 'Turun', 'Buruk', NULL, NULL),
(10, 'Syahrul', 'Sit Up', 'Naik', 'Bagus', NULL, NULL),
(11, 'Syahrul', 'Pull Up', 'Naik', 'Sedang', NULL, NULL),
(12, 'Syahrul', 'Renang', 'Turun', 'Buruk', NULL, NULL),
(13, 'Aisyah', 'Lari 12 Meter', 'Naik', 'Bagus', NULL, NULL),
(14, 'Aisyah', 'Push Up', 'Naik', 'Bagus', NULL, NULL),
(15, 'Aisyah', 'Shuttle Run', 'Turun', 'Buruk', NULL, NULL),
(16, 'Aisyah', 'Sit Up', 'Naik', 'Sedang', NULL, NULL),
(17, 'Aisyah', 'Pull Up', 'Naik', 'Bagus', NULL, NULL),
(18, 'Aisyah', 'Renang', 'Turun', 'Buruk', NULL, NULL),
(19, 'Rafli Saudi', 'Lari 12 Meter', 'Naik', 'Bagus', NULL, NULL),
(20, 'Rafli Saudi', 'Push Up', 'Naik', 'Bagus', NULL, NULL),
(21, 'Rafli Saudi', 'Shuttle Run', 'Naik', 'Sedang', NULL, NULL),
(22, 'Rafli Saudi', 'Sit Up', 'Turun', 'Buruk', NULL, NULL),
(23, 'Rafli Saudi', 'Pull Up', 'Turun', 'Buruk', NULL, NULL),
(24, 'Rafli Saudi', 'Renang', 'Naik', 'Sedang', NULL, NULL),
(25, 'Jupri', 'Lari 12 Meter', 'Turun', 'Buruk', NULL, NULL),
(26, 'Jupri', 'Push Up', 'Naik', 'Sedang', NULL, NULL),
(27, 'Jupri', 'Shuttle Run', 'Turun', 'Buruk', NULL, NULL),
(28, 'Jupri', 'Sit Up', 'Naik', 'Bagus', NULL, NULL),
(29, 'Jupri', 'Pull Up', 'Naik', 'Sedang', NULL, NULL),
(30, 'Jupri', 'Renang', 'Turun', 'Buruk', NULL, NULL),
(31, 'David', 'Lari 12 Meter', 'Naik', 'Sedang', NULL, NULL),
(32, 'David', 'Push Up', 'Naik', 'Bagus', NULL, NULL),
(33, 'David', 'Shuttle Run', 'Naik', 'Sedang', NULL, NULL),
(34, 'David', 'Sit Up', 'Turun', 'Buruk', NULL, NULL),
(35, 'David', 'Pull Up', 'Turun', 'Buruk', NULL, NULL),
(36, 'David', 'Renang', 'Naik', 'Sedang', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `point_tes`
--

CREATE TABLE `point_tes` (
  `id` bigint UNSIGNED NOT NULL,
  `point_tes` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `point_tes`
--

INSERT INTO `point_tes` (`id`, `point_tes`, `created_at`, `updated_at`) VALUES
(1, '10', NULL, NULL),
(2, '20', NULL, NULL),
(3, '30', NULL, NULL),
(4, '40', NULL, NULL),
(5, '50', NULL, NULL),
(6, '60', NULL, NULL),
(7, '70', NULL, NULL),
(8, '80', NULL, NULL),
(9, '90', NULL, NULL),
(10, '100', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_induk` int NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`created_at`, `updated_at`, `nama`, `nomor_induk`, `alamat`, `foto`) VALUES
('2023-10-13 01:29:09', '2023-10-26 04:15:41', 'David', 1208, 'banjarmasin', '231013092909.jpg'),
('2023-10-22 20:08:56', '2023-10-22 20:08:56', 'Jupri', 1237, 'Banjarmasin , komplek permata indah no.11', '231023040856.jpg'),
('2023-10-22 20:09:36', '2023-10-22 20:09:36', 'Rafli Saudi', 1238, 'Banjarmasin Utara, HKSN', '231023040936.jpg'),
('2023-10-22 20:10:32', '2023-10-22 20:10:32', 'Aisyah', 1239, 'Banjarmasin Utara, kayu tangi', '231023041032.jpg'),
('2023-10-24 18:06:44', '2023-10-24 18:06:44', 'Syahrul', 1240, 'Banjarmasin Barat', '231025020644.jpg'),
('2023-10-12 04:57:29', '2023-10-12 04:57:29', 'rizki saputra', 1901, 'Banjarmasin, sultan adam no.12', '231012125729.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tes_penilaian`
--

CREATE TABLE `tes_penilaian` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_tes_id` bigint NOT NULL,
  `hasil_tes_id` bigint NOT NULL,
  `analisa_id` bigint NOT NULL,
  `point_tes_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tes_penilaian`
--

INSERT INTO `tes_penilaian` (`id`, `nama_tes_id`, `hasil_tes_id`, `analisa_id`, `point_tes_id`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 3, 6, NULL, NULL),
(2, 2, 3, 2, 7, NULL, NULL),
(3, 3, 4, 1, 5, NULL, NULL),
(4, 4, 5, 2, 6, NULL, NULL),
(5, 5, 6, 3, 7, NULL, NULL),
(6, 6, 7, 4, 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ahmad', 'ahmad@gmail.com', NULL, '$2y$10$Vq2omuaPFvcIrFrCtsjO3OLcPpGb8EQdlu0bKBfyh0ukhfLr0B2Ki', NULL, '2023-10-12 01:27:18', '2023-10-12 01:27:18'),
(2, 'joji', 'joji@gmail.com', NULL, '$2y$10$aXitfTRN7xmOmtHLHO6wQOTKd15nb2i/dQHMhfcK2J2xKANwcCjcW', NULL, '2023-10-12 03:08:42', '2023-10-12 03:08:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analisa`
--
ALTER TABLE `analisa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_penilaian`
--
ALTER TABLE `detail_penilaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hasil_tes`
--
ALTER TABLE `hasil_tes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nama_tes`
--
ALTER TABLE `nama_tes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `point_tes`
--
ALTER TABLE `point_tes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD UNIQUE KEY `siswa_nomor_induk_unique` (`nomor_induk`);

--
-- Indexes for table `tes_penilaian`
--
ALTER TABLE `tes_penilaian`
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
-- AUTO_INCREMENT for table `analisa`
--
ALTER TABLE `analisa`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detail_penilaian`
--
ALTER TABLE `detail_penilaian`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasil_tes`
--
ALTER TABLE `hasil_tes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `nama_tes`
--
ALTER TABLE `nama_tes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `point_tes`
--
ALTER TABLE `point_tes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tes_penilaian`
--
ALTER TABLE `tes_penilaian`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
