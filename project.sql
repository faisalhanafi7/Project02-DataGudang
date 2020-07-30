-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jul 2020 pada 11.37
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gudangs`
--

CREATE TABLE `gudangs` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kode` varchar(15) NOT NULL,
  `lokasi` text NOT NULL,
  `toko_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gudangs`
--

INSERT INTO `gudangs` (`id`, `nama`, `kode`, `lokasi`, `toko_id`, `created_at`, `updated_at`) VALUES
(1, 'Gudang Redol', '001', 'Sebelah kanan gudang TERA', 1, '2020-07-28 20:29:11', '0000-00-00 00:00:00'),
(2, 'Gudang Tera', '002', 'Sebelah kiri Gudang redol', 2, '2020-07-28 20:29:25', '0000-00-00 00:00:00'),
(3, 'Gudang roothan', '003', 'Selatan gudang Tera', 1, '2020-07-28 20:30:51', '0000-00-00 00:00:00'),
(4, 'Gudang Selor', '003', 'Sebalah Utara G.Tera', 3, '2020-07-28 20:47:56', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gudang_item`
--

CREATE TABLE `gudang_item` (
  `id` int(11) NOT NULL,
  `gudang_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gudang_item`
--

INSERT INTO `gudang_item` (`id`, `gudang_id`, `item_id`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 1, 0, '2020-07-29 02:07:06', '0000-00-00 00:00:00'),
(4, 3, 1, 0, '2020-07-29 02:07:06', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `items`
--

INSERT INTO `items` (`id`, `nama`, `qty`, `created_at`, `updated_at`) VALUES
(1, 'mie sedap', 19, '2020-07-29 00:51:53', '0000-00-00 00:00:00'),
(2, 'mie sedap', 20, '2020-07-29 00:51:53', '0000-00-00 00:00:00'),
(3, 'Ale -  ale', 50, '2020-07-29 00:52:32', '0000-00-00 00:00:00'),
(4, 'Teh gelas', 50, '2020-07-29 00:52:32', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `item_toko`
--

CREATE TABLE `item_toko` (
  `id` int(11) NOT NULL,
  `toko_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `gudang_id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `item_toko`
--

INSERT INTO `item_toko` (`id`, `toko_id`, `item_id`, `gudang_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 0, 0),
(2, 1, 3, 2, 0, 0),
(3, 2, 2, 2, 0, 0),
(4, 3, 3, 1, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_07_28_115412_create_tokos_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tokos`
--

CREATE TABLE `tokos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_toko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_toko` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_toko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tokos`
--

INSERT INTO `tokos` (`id`, `nama_toko`, `alamat_toko`, `email_toko`, `created_at`, `updated_at`) VALUES
(1, 'Albatros', 'Sidoarjo', 'albatros@gmail.com', NULL, NULL),
(2, 'Farmakop', 'Mojokerto', 'farmakop@gmail.com', NULL, '2020-07-28 22:12:38'),
(3, 'roothan', 'Surabaya', 'roothan@gmail.com', NULL, '2020-07-28 22:18:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hanafi', 'faiz@gmail.com', NULL, '$2y$10$IoNPxjV4o5C65imFJOnB.OCFZEBBjdKtKhNo25bBIjNUTDBUHo7MK', 'c8aLBqTvnBs6v9O4ke2W7bJzWotwkDf73CopNqU9scEHAWd8jNsV4xVBvGIx', '2020-07-29 20:54:43', '2020-07-29 20:54:43');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gudangs`
--
ALTER TABLE `gudangs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gudang_item`
--
ALTER TABLE `gudang_item`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `item_toko`
--
ALTER TABLE `item_toko`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `tokos`
--
ALTER TABLE `tokos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gudangs`
--
ALTER TABLE `gudangs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `gudang_item`
--
ALTER TABLE `gudang_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `item_toko`
--
ALTER TABLE `item_toko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tokos`
--
ALTER TABLE `tokos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
