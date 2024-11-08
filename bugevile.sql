-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2024 at 11:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bugevile`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `atribute_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attribute_photos`
--

CREATE TABLE `attribute_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attribute_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute_photos`
--

INSERT INTO `attribute_photos` (`id`, `attribute_id`, `name`, `foto`, `created_at`, `updated_at`) VALUES
(3, 1, 'wewewe', 'attributes_photos/pFgefOT5ej7SKSL6oG4wzMSA4T8Sq20EsJRbPRtX.png', '2024-11-07 16:35:30', '2024-11-07 16:35:30'),
(4, 1, 'wawaw', 'attributes_photos/SousaY6vMrTZ8Owhpd1owdhbClFB2XUpqxWPqDJB.png', '2024-11-07 17:32:25', '2024-11-07 17:32:25'),
(5, 1, 'sasasa', 'attributes_photos/hwlbIfjUZpTcc3gZXFUIWLb6xRBXMgxFILAhMq8w.png', '2024-11-07 18:47:00', '2024-11-07 18:47:00'),
(6, 1, 'sihab', 'attributes_photos/QJY6faMqjkaN6YhmaRiAIKucEnmwewYJpVXUuLl5.png', '2024-11-08 02:03:48', '2024-11-08 02:03:48');

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
-- Table structure for table `master_atributes`
--

CREATE TABLE `master_atributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `photo` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_atributes`
--

INSERT INTO `master_atributes` (`id`, `nama`, `harga`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Kain', 1000.00, NULL, '2024-11-07 16:32:40', '2024-11-07 16:32:40'),
(2, 'Kain', 1000.00, NULL, '2024-11-07 16:44:54', '2024-11-07 16:44:54'),
(3, 'Kain', 1000.00, NULL, '2024-11-07 17:09:37', '2024-11-07 17:09:37'),
(4, 'Kain', 1000.00, NULL, '2024-11-07 17:14:48', '2024-11-07 17:14:48'),
(5, 'Jahitan', 1000.00, NULL, '2024-11-07 17:21:05', '2024-11-07 17:21:05'),
(6, 'Jahitan', 1000.00, NULL, '2024-11-07 17:24:35', '2024-11-07 17:24:35'),
(7, 'Jahitan', 1000.00, NULL, '2024-11-07 17:25:44', '2024-11-07 17:25:44'),
(8, 'Jahitan', 2000.00, NULL, '2024-11-07 17:31:56', '2024-11-07 17:31:56'),
(9, 'well', 7000.00, NULL, '2024-11-07 17:37:29', '2024-11-07 17:37:29'),
(10, 'rafli', 9000.00, NULL, '2024-11-07 18:06:34', '2024-11-07 18:06:34'),
(11, 'sasasa', 90000.00, NULL, '2024-11-08 02:04:57', '2024-11-08 02:04:57');

-- --------------------------------------------------------

--
-- Table structure for table `master_spesifikasi_prints`
--

CREATE TABLE `master_spesifikasi_prints` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_spesifikasi_prints`
--

INSERT INTO `master_spesifikasi_prints` (`id`, `nama`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'All', 1000.00, '2024-11-07 16:32:47', '2024-11-07 16:32:47'),
(2, 'All', 1000.00, '2024-11-07 16:44:31', '2024-11-07 16:44:31'),
(3, 'All', 1000.00, '2024-11-07 17:10:12', '2024-11-07 17:10:12'),
(4, 'All', 1000.00, '2024-11-07 17:10:29', '2024-11-07 17:10:29'),
(5, 'All', 1000.00, '2024-11-07 17:10:33', '2024-11-07 17:10:33'),
(6, 'All', 1000.00, '2024-11-07 17:13:32', '2024-11-07 17:13:32'),
(7, 'All', 1000.00, '2024-11-07 17:13:36', '2024-11-07 17:13:36'),
(8, 'All', 1000.00, '2024-11-07 17:15:00', '2024-11-07 17:15:00'),
(9, 'well', 3000.00, '2024-11-07 17:37:45', '2024-11-07 17:37:45'),
(10, 'All', 1000.00, '2024-11-07 18:06:48', '2024-11-07 18:06:48'),
(11, 'sa', 2000.00, '2024-11-07 18:06:57', '2024-11-07 18:06:57'),
(12, 'well', 3000.00, '2024-11-08 02:04:28', '2024-11-08 02:04:28'),
(13, 'sasasa', 80000.00, '2024-11-08 02:04:37', '2024-11-08 02:04:37');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2024_11_02_164504_add_is_admin_to_users_table', 1),
(6, '2024_11_02_190237_create_pelanggan_table', 1),
(7, '2024_11_03_103319_create_products_table', 1),
(8, '2024_11_03_195035_create_specifications_table', 1),
(9, '2024_11_03_195049_create_master_atributes_table', 1),
(10, '2024_11_03_195050_create_attributes_table', 1),
(11, '2024_11_03_196221_create_attribute_photos_table', 1),
(12, '2024_11_06_195335_create_master_spesifikasi_prints_table', 1),
(13, '2024_11_06_214132_create_pemesanans_table', 1),
(14, '2024_11_07_220209_create_spesifikasi_prints_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `nomor_telepon`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'sihab', '44444444', 'ssa', '2024-11-07 17:00:38', '2024-11-07 17:00:38');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanans`
--

CREATE TABLE `pemesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pelanggan` bigint(20) UNSIGNED NOT NULL,
  `no_telpon` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `total_waktu_pengerjaan` varchar(255) DEFAULT NULL,
  `jenis_produk` varchar(255) NOT NULL,
  `jenis_pola` varchar(255) NOT NULL,
  `jenis_print` varchar(255) NOT NULL,
  `jumlah_produk` int(11) NOT NULL,
  `harga_satuan` decimal(10,2) NOT NULL,
  `total_harga` decimal(10,2) NOT NULL,
  `pembayaran_awal` decimal(10,2) NOT NULL,
  `sisa_pembayaran` decimal(10,2) NOT NULL,
  `qty_xxs` int(11) DEFAULT NULL,
  `qty_xs` int(11) DEFAULT NULL,
  `qty_s` int(11) DEFAULT NULL,
  `qty_m` int(11) DEFAULT NULL,
  `qty_l` int(11) DEFAULT NULL,
  `qty_xl` int(11) DEFAULT NULL,
  `qty_2xl` int(11) DEFAULT NULL,
  `qty_3xl` int(11) DEFAULT NULL,
  `qty_4xl` int(11) DEFAULT NULL,
  `qty_5xl` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemesanans`
--

INSERT INTO `pemesanans` (`id`, `id_pelanggan`, `no_telpon`, `alamat`, `tanggal_masuk`, `tanggal_selesai`, `total_waktu_pengerjaan`, `jenis_produk`, `jenis_pola`, `jenis_print`, `jumlah_produk`, `harga_satuan`, `total_harga`, `pembayaran_awal`, `sisa_pembayaran`, `qty_xxs`, `qty_xs`, `qty_s`, `qty_m`, `qty_l`, `qty_xl`, `qty_2xl`, `qty_3xl`, `qty_4xl`, `qty_5xl`, `created_at`, `updated_at`) VALUES
(3, 1, '44444444', 'ssa', '2024-01-11', '2025-04-11', '4', 'awawa', '1', '2', 3, 10000.00, 30000.00, 20000.00, 10000.00, NULL, NULL, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, '2024-11-08 03:03:54', '2024-11-08 03:03:54');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_produk` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `jenis_pola` varchar(255) NOT NULL,
  `total_harga_spesifikasi` int(11) NOT NULL,
  `jenis_print` varchar(255) NOT NULL,
  `total_harga_print` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `harga_produksi` int(11) NOT NULL,
  `laba` int(11) NOT NULL,
  `foto` longtext DEFAULT NULL,
  `id_spesifikasi` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `kode_produk`, `nama_produk`, `jenis_pola`, `total_harga_spesifikasi`, `jenis_print`, `total_harga_print`, `harga_jual`, `harga_produksi`, `laba`, `foto`, `id_spesifikasi`, `created_at`, `updated_at`) VALUES
(1, 'kode01', 'sihab', 'pola', 2000, 'full', 2000, 500000, 4000, 496000, 'products/hiNJ420ZXkqvfhjr1i5lVJpCB09H9U7xo9LOYhv3.png', NULL, '2024-11-07 17:00:21', '2024-11-07 17:00:21'),
(2, 'kode05', 'awawa', 'pola', 2000, 'fddd', 2000, 500000, 4000, 496000, 'products/mcOaBLcC0j04Pmr54hsfkT67yGeiMltCQhMBJ0xW.png', NULL, '2024-11-07 17:56:10', '2024-11-07 17:56:10'),
(3, 'kode05', 'awawa', 'pola', 2000, 'fddd', 2000, 500000, 4000, 496000, 'products/NImQB4tdVjJHwjWFTdq2wctOTOIiMrBgijkgRCk7.png', NULL, '2024-11-07 17:56:45', '2024-11-07 17:56:45'),
(4, 'kode05', 'awawa', 'pola', 2000, 'fddd', 2000, 500000, 4000, 496000, 'products/INefCFtlx7vVpf486ipnsyDvoEm3mED3Mlkv0Mqz.png', NULL, '2024-11-07 17:57:32', '2024-11-07 17:57:32'),
(5, 'kode05', 'awawa', 'pola', 2000, 'fddd', 2000, 500000, 4000, 496000, 'products/Db8ei1ihTEovJE4vuiorHaMX1Iy7amDxqXoFfGwD.png', NULL, '2024-11-07 17:58:24', '2024-11-07 17:58:24'),
(6, 'kode05', 'awawa', 'pola', 2000, 'fddd', 2000, 500000, 4000, 496000, 'products/SVH4BQrbsyxxoOqvp69c6xkRUNZUICM3uvFjEWTT.png', NULL, '2024-11-07 17:58:40', '2024-11-07 17:58:40'),
(7, 'kode05', 'awawa', 'pola', 2000, 'fddd', 2000, 500000, 4000, 496000, 'products/ubJYqXZk5H8mWKy7qYRGMhbPWqeBSdVK60ffhZRj.png', NULL, '2024-11-07 17:58:43', '2024-11-07 17:58:43'),
(8, 'kode05', 'awawa', 'pola', 2000, 'fddd', 2000, 500000, 4000, 496000, 'products/eGnQvnkZWE8U3BRshri1dn6zJI3WISsE3orVCjg1.png', NULL, '2024-11-07 17:58:53', '2024-11-07 17:58:53'),
(9, 'kode05', 'awawa', 'pola', 2000, 'fddd', 2000, 500000, 4000, 496000, 'products/BjtBCsfuJOQk8p5TBVESK7WL8vpbcv5s6JwERmhy.png', NULL, '2024-11-07 17:59:14', '2024-11-07 17:59:14'),
(10, 'kode05', 'awawa', 'pola', 2000, 'fddd', 2000, 500000, 4000, 496000, 'products/3qkIUFYlaRzeyd4OX7peEcvk4kyyKcyMJMtig6YL.png', NULL, '2024-11-07 18:02:24', '2024-11-07 18:02:24'),
(11, 'kode05', 'awawa', 'pola', 2000, 'fddd', 2000, 500000, 4000, 496000, 'products/IHzqSYuFnd4hNFsAN8z6aXDJKURWorcJDbB5vvdQ.png', NULL, '2024-11-07 18:07:20', '2024-11-07 18:07:20'),
(12, 'kode05', 'awawa', 'pola', 2000, 'fddd', 2000, 500000, 4000, 496000, 'products/7lGmiFIdKlZIQfrtdNFgnwOw1pL5eb8k2c44Ede8.png', NULL, '2024-11-07 18:09:02', '2024-11-07 18:09:02'),
(13, 'kode05', 'awawa', 'pola', 2000, 'fddd', 2000, 500000, 4000, 496000, 'products/Pgi4ycopk5gBi36NRFOjN0KqsmpVmOB0xvTYL89G.png', NULL, '2024-11-07 18:09:18', '2024-11-07 18:09:18'),
(14, 'kode05', 'awawa', 'pola', 2000, 'fddd', 2000, 5000000, 4000, 4996000, 'products/fN0icBjHGGCwSVF07RKul0YCkboVJgiwom0QRt6T.png', NULL, '2024-11-07 18:10:57', '2024-11-07 18:10:57'),
(15, 'kode05', 'awawa', 'pola', 2000, 'fddd', 2000, 5000000, 4000, 4996000, 'products/vwNqcjze6Cr07k6ZiO45fglTTaQ47uHK350BKkAB.png', NULL, '2024-11-07 18:28:35', '2024-11-07 18:28:35'),
(16, 'kode05', 'awawa', 'pola', 2000, 'fddd', 2000, 5000000, 4000, 4996000, 'products/dV5d97OpplnG2P2VF0fh2s49VS1utFJ2xEDExiT8.png', NULL, '2024-11-07 18:29:48', '2024-11-07 18:29:48'),
(17, 'kode05', 'awawa', 'pola', 2000, 'fddd', 2000, 5000000, 4000, 4996000, 'products/4GkLYZIxXnFrLLZ50qIgXzDCbkx929djWP8m8YGi.png', NULL, '2024-11-07 18:30:57', '2024-11-07 18:30:57'),
(18, 'kode05', 'awawa', 'pola', 2000, 'fddd', 2000, 5000000, 4000, 4996000, 'products/71hd2ZjdIvvXGeLWEhXsNM73PRjybUA0HO5Vbbfa.png', NULL, '2024-11-07 18:35:51', '2024-11-07 18:35:51'),
(19, 'kode05', 'awawa', 'pola', 2000, 'fddd', 2000, 5000000, 4000, 4996000, 'products/8IltaaQYAAOY4xIMXdzsRMLBGysjHcgvqf3734zv.png', NULL, '2024-11-07 18:37:07', '2024-11-07 18:37:07'),
(20, 'kode05', 'awawa', 'pola', 2000, 'fddd', 2000, 5000000, 4000, 4996000, 'products/2nlJ8kbNMWV6gwVdlpx43KPH0sY9zq0u2nBsIv8Z.png', NULL, '2024-11-07 18:38:11', '2024-11-07 18:38:11'),
(21, 'kode05', 'awawa', 'pola', 2000, 'fddd', 2000, 5000000, 4000, 4996000, 'products/s71WghWOV5O9F7nq57n16BzBwDAr37KGDNZgCuIM.png', NULL, '2024-11-07 18:38:25', '2024-11-07 18:38:25'),
(22, 'kode05', 'awawa', 'pola', 2000, 'fddd', 2000, 5000000, 4000, 4996000, 'products/jII0aStSMbD0HpE1wnYvGqN0arA4J2plI2kX31gs.png', NULL, '2024-11-07 18:39:46', '2024-11-07 18:39:46'),
(23, 'kode05', 'awawa', 'pola', 1000, 'fddd', 1000, 5000000, 2000, 4998000, 'products/Ky8kb7bwH0vqdPdptjHic1rphsymz4o6fWUqd7DU.png', NULL, '2024-11-07 18:40:12', '2024-11-07 18:40:12'),
(24, 'kode05', 'awawa', 'pola', 1000, 'fddd', 1000, 5000000, 2000, 4998000, 'products/i8mCJncQJ76AnLxUhvShzjaYUKgJfRpjVjLyoFxM.png', NULL, '2024-11-07 18:40:25', '2024-11-07 18:40:25'),
(25, 'kode05', 'awawa', 'pola', 1000, 'fddd', 1000, 5000000, 2000, 4998000, 'products/R1E1fCOfzyzx3TLhbMM4akTTbrY0LQIiy1lVRPnm.png', NULL, '2024-11-07 18:41:10', '2024-11-07 18:41:10'),
(26, 'kode05', 'awawa', 'pola', 1000, 'fddd', 1000, 5000000, 2000, 4998000, 'products/mDw8bNxHjGFlsZC2yNGt1jHFjLVacCF71yn9cDyh.png', NULL, '2024-11-07 18:41:42', '2024-11-07 18:41:42'),
(27, 'kode05', 'awawa', 'pola', 1000, 'fddd', 1000, 5000000, 2000, 4998000, 'products/0sf2p6cqkyFrmKK9rm4Gn4H2pbCnlShS5KcN9qcD.png', NULL, '2024-11-07 18:41:48', '2024-11-07 18:41:48'),
(28, 'kode05', 'awawa', 'pola', 1000, 'fddd', 1000, 5000000, 2000, 4998000, 'products/bPmR2cJtRqSx7DLYZ3moOtp3NKNbZiFxurR51Apa.png', NULL, '2024-11-07 18:42:17', '2024-11-07 18:42:17'),
(29, 'kode05', 'awawa', 'pola', 1000, 'fddd', 1000, 5000000, 2000, 4998000, 'products/QC1yce7w4YrEtVFjy5WbV5Vs0yzCt2LKQ96WYFhP.png', NULL, '2024-11-07 18:43:13', '2024-11-07 18:43:13'),
(30, 'kode05', 'awawa', 'pola', 1000, 'fddd', 1000, 5000000, 2000, 4998000, 'products/Nu9njpSWvPd0j692pjon94D0KxlciT4wIVekdrAc.png', NULL, '2024-11-07 18:44:14', '2024-11-07 18:44:14'),
(31, 'kode05', 'awawa', 'pola', 1000, 'fddd', 1000, 5000000, 2000, 4998000, 'products/DamtQfYzGm8nDWYGYubcIGduZrUp8KQ3eIQbTbYo.png', NULL, '2024-11-07 18:45:38', '2024-11-07 18:45:38'),
(32, 'kode05', 'awawa', 'pola', 1000, 'fddd', 1000, 5000000, 2000, 4998000, 'products/gmybJMtEeeAlIbAjr3KdXqCH6ilsT7Ed2yMloFwC.png', NULL, '2024-11-07 18:46:25', '2024-11-07 18:46:25');

-- --------------------------------------------------------

--
-- Table structure for table `specifications`
--

CREATE TABLE `specifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spesifikasi_prints`
--

CREATE TABLE `spesifikasi_prints` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `spesifikasi_print_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'admin', 'admin@gmail.online', NULL, '$2y$10$mfOGLEGrFbovBqx28ZwDBuVYsVibxs9QehbYWXvWlTBQDJ0b7IZ8C', NULL, '2024-11-07 16:32:28', '2024-11-07 16:32:28', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attributes_product_id_foreign` (`product_id`),
  ADD KEY `attributes_atribute_id_foreign` (`atribute_id`);

--
-- Indexes for table `attribute_photos`
--
ALTER TABLE `attribute_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `master_atributes`
--
ALTER TABLE `master_atributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_spesifikasi_prints`
--
ALTER TABLE `master_spesifikasi_prints`
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
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanans`
--
ALTER TABLE `pemesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specifications`
--
ALTER TABLE `specifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spesifikasi_prints`
--
ALTER TABLE `spesifikasi_prints`
  ADD PRIMARY KEY (`id`),
  ADD KEY `spesifikasi_prints_product_id_foreign` (`product_id`),
  ADD KEY `spesifikasi_prints_spesifikasi_print_id_foreign` (`spesifikasi_print_id`);

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
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attribute_photos`
--
ALTER TABLE `attribute_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_atributes`
--
ALTER TABLE `master_atributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `master_spesifikasi_prints`
--
ALTER TABLE `master_spesifikasi_prints`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pemesanans`
--
ALTER TABLE `pemesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `specifications`
--
ALTER TABLE `specifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spesifikasi_prints`
--
ALTER TABLE `spesifikasi_prints`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attributes`
--
ALTER TABLE `attributes`
  ADD CONSTRAINT `attributes_atribute_id_foreign` FOREIGN KEY (`atribute_id`) REFERENCES `master_atributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attributes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `spesifikasi_prints`
--
ALTER TABLE `spesifikasi_prints`
  ADD CONSTRAINT `spesifikasi_prints_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `spesifikasi_prints_spesifikasi_print_id_foreign` FOREIGN KEY (`spesifikasi_print_id`) REFERENCES `master_spesifikasi_prints` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
