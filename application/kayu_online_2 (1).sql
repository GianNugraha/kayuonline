-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 03 Sep 2020 pada 06.01
-- Versi server: 5.7.24
-- Versi PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kayu_online_2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_code`, `name`, `description`, `detail`, `created_at`, `updated_at`) VALUES
(1, 1, 'DK MB01', 'Merbau', 'Merbau terutama dimanfaatkan kayunya, yang biasa digunakan dalam konstruksi berat seperti balok-balok, tiang dan bantalan, di bangunan rumah maupun jembatan.Oleh karena kekuatan, keawetan dan penampilannya yang menarik, sekarang kayu merbau juga dimanfaat', 'ini Detail Merbau Decking', '2020-09-02 13:49:41', '2020-09-02 13:49:45'),
(2, 2, 'KO MB01', 'Merbau ', 'Merbau terutama dimanfaatkan kayunya, yang biasa digunakan dalam konstruksi berat seperti balok-balok, tiang dan bantalan, di bangunan rumah maupun jembatan.Oleh karena kekuatan, keawetan dan penampilannya yang menarik, sekarang kayu merbau juga dimanfaat', 'detail merbau kayu olahan', '2020-09-02 13:49:41', '2020-09-02 14:05:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_categories`
--

INSERT INTO `product_categories` (`id`, `category_code`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'DK', 'Deking', 'this is Deking', NULL, NULL),
(2, 'KO', 'Kayu Olahan', 'this is kayu olahan', NULL, NULL),
(3, 'PT', 'Pintu', 'this is pintu', NULL, NULL),
(4, 'TG', 'Tangga', 'this is tangga', NULL, NULL),
(5, 'KS', 'Kusen', 'this is kusen', NULL, NULL),
(6, 'LP', 'Lis Profil', 'this is LP', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_has_sizes`
--

CREATE TABLE `product_has_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_size_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_has_sizes`
--

INSERT INTO `product_has_sizes` (`id`, `product_id`, `product_size_id`, `price`, `stock`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '100000', 10, NULL, NULL),
(2, 1, 2, '75000', 20, NULL, NULL),
(3, 1, 3, '55000', 20, NULL, NULL),
(4, 2, 3, '85000', 20, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `thumbnail_image`, `first`, `created_at`, `updated_at`) VALUES
(1, 1, 'assets/images/merbau-decking.png', 'assets/images/merbau-decking-thumbnail.png', 1, NULL, NULL),
(2, 1, 'assets/images/merbau-decking.png', 'assets/images/merbau-decking-thumbnail.png', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `size`, `description`, `created_at`, `updated_at`) VALUES
(1, '1 meter', '1 m', NULL, NULL),
(2, '2 meter', '2 m', NULL, NULL),
(3, '90x15x20', '90x15x20', NULL, NULL),
(4, '78x20x30', '78x20x30', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_product_code_unique` (`product_code`);

--
-- Indeks untuk tabel `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product_has_sizes`
--
ALTER TABLE `product_has_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `product_has_sizes`
--
ALTER TABLE `product_has_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
