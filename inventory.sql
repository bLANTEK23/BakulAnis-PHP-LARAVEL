-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 05:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` bigint(20) UNSIGNED NOT NULL,
  `kode_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_barang` decimal(8,2) NOT NULL,
  `gambar_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_barang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kadaluarsa_barang` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `kode_barang`, `kode_kategori`, `nama_barang`, `harga_barang`, `gambar_barang`, `deskripsi_barang`, `kadaluarsa_barang`, `created_at`, `updated_at`) VALUES
(1, 'SA01', 'SA', 'Sabun Lifebuoy', '2500.00', '/media/barang/1643245837_Dashboard.png', 'ini deksripsi barang', '2020-03-04', '2022-01-25 22:42:16', '2022-01-25 22:42:16'),
(2, 'AM01', 'AM', 'Pepsodent Pasta Gigi', '2500.00', 'https://source.unsplash.com/350x200?fashion', 'ini deksripsi', '2020-03-04', '2022-01-25 22:42:16', '2022-01-25 22:42:16'),
(3, 'AM02', 'AM', 'Sikat Gigi Formula', '2500.00', 'https://source.unsplash.com/350x200?fashion', 'ini deksripsi', '2020-03-04', '2022-01-25 22:42:16', '2022-01-25 22:42:16'),
(4, 'SA02', 'SA', 'Shampo Sunsilk Botol', '2500.00', 'https://source.unsplash.com/350x200?fashion', 'ini deksripsi', '2020-03-04', '2022-01-25 22:42:16', '2022-01-25 22:42:16'),
(5, 'SA03', 'SA', 'Lifebuoy Shampo Sachet', '2500.00', 'https://source.unsplash.com/350x200?fashion', 'ini deksripsi', '2020-03-04', '2022-01-25 22:42:16', '2022-01-25 22:42:16'),
(6, 'ATK01', 'ATK', 'Buku Gambar A4', '2500.00', 'https://source.unsplash.com/350x200?fashion', 'ini deksripsi', '2020-03-04', '2022-01-25 22:42:16', '2022-01-25 22:42:16');

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
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` tinyint(3) UNSIGNED NOT NULL,
  `kode_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kode_kategori`, `nama_kategori`) VALUES
(1, 'SK', 'Sembako'),
(2, 'AM', 'Alat Mandi'),
(3, 'SA', 'Sabun Mandi'),
(4, 'ATK', 'Alat Tulis'),
(6, 'AS', 'Atribut Sekolah'),
(7, 'AMI', 'Air Minum'),
(10, 'SC', 'Sabun Cuci');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_19_025742_create_kategoris_table', 1),
(6, '2022_01_19_031511_create_status_rekaps_table', 1),
(7, '2022_01_19_032412_create_barangs_table', 1),
(8, '2022_01_19_035305_create_rekaps_table', 1);

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
-- Table structure for table `rekap`
--

CREATE TABLE `rekap` (
  `id_rekap` bigint(20) UNSIGNED NOT NULL,
  `kode_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_rekap` date NOT NULL,
  `stok_awal_rekap` int(11) NOT NULL,
  `stok_akhir_rekap` int(11) NOT NULL,
  `kode_status_rekap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rekap`
--

INSERT INTO `rekap` (`id_rekap`, `kode_barang`, `tanggal_rekap`, `stok_awal_rekap`, `stok_akhir_rekap`, `kode_status_rekap`, `created_at`, `updated_at`) VALUES
(5, 'SA01', '2022-01-27', 12, 5, 'INB', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status_rekap`
--

CREATE TABLE `status_rekap` (
  `id_status_rekap` tinyint(3) UNSIGNED NOT NULL,
  `kode_status_rekap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_status_rekap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_rekap`
--

INSERT INTO `status_rekap` (`id_status_rekap`, `kode_status_rekap`, `nama_status_rekap`) VALUES
(1, 'INB', 'Inbound'),
(2, 'OUB', 'Outbound');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Brice Watsica', 'wolff.tremaine@example.com', '2022-01-25 22:42:15', '$2y$10$SZuWO3pSZcvpJu6VG6uwlON/V6U3SWWC.xnhhDy6Z8frwyTx7SEVK', 'Bvgk2x1ZJW', '2022-01-25 22:42:16', '2022-01-25 22:42:16'),
(2, 'Verdie Heidenreich', 'smitham.elnora@example.org', '2022-01-25 22:42:15', '$2y$10$t.pzFyDQjWcPB8.nLJ5rLebBaD6S/vRvXuh1sVq3IukwtUrflsibS', 'kEbdyHBzXK', '2022-01-25 22:42:16', '2022-01-25 22:42:16'),
(3, 'Mr. Raven Stoltenberg', 'inader@example.com', '2022-01-25 22:42:16', '$2y$10$xOh.mQU7SwxhNbyCp6BSSuCgXpA2m2/iEZXCwwH0pG20FNSupocr6', 'cifQGyGamf', '2022-01-25 22:42:16', '2022-01-25 22:42:16'),
(4, 'Jamarcus Bogan', 'wuckert.trudie@example.net', '2022-01-25 22:42:16', '$2y$10$exZgkc3MPVaCFzlf8ZxHJeMASFQGLAFh/hzKAe5CgPnbOfND4Yftq', 'aHKrKHWN2b', '2022-01-25 22:42:16', '2022-01-25 22:42:16'),
(5, 'Nad', 'dah01@example.org', '2022-01-25 22:42:16', '$2y$10$XIq6/Hcp98IPPgBk95ozl.0gkeWnixi6bmRtbHX3qmzgN8I4oW2q6', 'nmSvIKgVg2QII0LUDG505sSxUIcA2pfNfeQNxU4M5uQLAEUy3GZz8ZoN1qr2', '2022-01-25 22:42:16', '2022-01-26 03:50:16'),
(6, 'Tyrela', 'tyrela@gmail.com', '2022-01-27 04:30:15', '12345', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD UNIQUE KEY `barang_kode_barang_unique` (`kode_barang`),
  ADD KEY `barang_kode_kategori_foreign` (`kode_kategori`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD UNIQUE KEY `kategori_kode_kategori_unique` (`kode_kategori`);

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
-- Indexes for table `rekap`
--
ALTER TABLE `rekap`
  ADD PRIMARY KEY (`id_rekap`),
  ADD KEY `rekap_kode_barang_foreign` (`kode_barang`),
  ADD KEY `rekap_kode_status_rekap_foreign` (`kode_status_rekap`);

--
-- Indexes for table `status_rekap`
--
ALTER TABLE `status_rekap`
  ADD PRIMARY KEY (`id_status_rekap`),
  ADD UNIQUE KEY `status_rekap_kode_status_rekap_unique` (`kode_status_rekap`);

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
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekap`
--
ALTER TABLE `rekap`
  MODIFY `id_rekap` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `status_rekap`
--
ALTER TABLE `status_rekap`
  MODIFY `id_status_rekap` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_kode_kategori_foreign` FOREIGN KEY (`kode_kategori`) REFERENCES `kategori` (`kode_kategori`) ON UPDATE CASCADE;

--
-- Constraints for table `rekap`
--
ALTER TABLE `rekap`
  ADD CONSTRAINT `rekap_kode_barang_foreign` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON UPDATE CASCADE,
  ADD CONSTRAINT `rekap_kode_status_rekap_foreign` FOREIGN KEY (`kode_status_rekap`) REFERENCES `status_rekap` (`kode_status_rekap`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
