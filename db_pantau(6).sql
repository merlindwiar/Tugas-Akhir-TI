-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2021 pada 12.03
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pantau`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alats`
--

CREATE TABLE `alats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_alat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `alats`
--

INSERT INTO `alats` (`id`, `nama_alat`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, '01', '11233', '-11112', '2021-09-23 06:23:02', '2021-09-27 10:33:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NTU` double(8,2) NOT NULL,
  `kadar_ph` double(8,2) NOT NULL,
  `status_kekeruhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_ph` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `NTU`, `kadar_ph`, `status_kekeruhan`, `status_ph`, `created_at`, `updated_at`) VALUES
(9, 90.46, 7.48, 'Normal', 'Basa', '2021-10-12 11:26:34', '2021-10-12 11:26:34'),
(10, 110.46, 8.48, 'Normal', 'Basa', '2021-10-12 11:26:51', '2021-10-12 11:26:51'),
(11, 110.46, 8.48, 'Normal', 'Basa', '2021-11-13 13:33:51', '2021-11-13 13:33:51'),
(12, 110.46, 8.48, 'Normal', 'Basa', '2021-11-13 13:37:47', '2021-11-13 13:37:47'),
(13, 110.46, 8.48, 'Normal', 'Basa', '2021-11-13 13:38:31', '2021-11-13 13:38:31'),
(14, 110.46, 9.48, 'Normal', 'Basa', '2021-11-13 13:39:29', '2021-11-13 13:39:29'),
(15, 110.46, 7.48, 'Normal', 'Basa', '2021-11-13 13:41:21', '2021-11-13 13:41:21'),
(16, 117.46, 7.48, 'Normal', 'Basa', '2021-11-15 06:24:15', '2021-11-15 06:24:15'),
(17, 117.46, 7.48, 'Normal', 'Basa', '2021-11-15 07:26:53', '2021-11-15 07:26:53'),
(18, 90.46, 7.48, 'Normal', 'Basa', '2021-11-15 07:31:53', '2021-11-15 07:31:53'),
(19, 80.46, 7.48, 'Normal', 'Basa', '2021-11-15 07:32:00', '2021-11-15 07:32:00'),
(20, 150.46, 7.48, 'Normal', 'Basa', '2021-11-15 07:32:15', '2021-11-15 07:32:15'),
(21, 150.46, 8.87, 'Normal', 'Basa', '2021-11-15 12:11:53', '2021-11-15 12:11:53'),
(22, 180.46, 6.87, 'Normal', 'Asam', '2021-11-15 12:12:38', '2021-11-15 12:12:38'),
(23, 160.46, 7.87, 'Normal', 'Basa', '2021-11-15 12:13:25', '2021-11-15 12:13:25'),
(24, 165.46, 8.87, 'Normal', 'Basa', '2021-11-15 12:17:31', '2021-11-15 12:17:31'),
(25, 165.46, 8.87, 'Normal', 'Basa', '2021-11-26 05:49:32', '2021-11-26 05:49:32'),
(26, 165.46, 9.87, 'Normal', 'Basa', '2021-11-26 05:50:23', '2021-11-26 05:50:23'),
(27, 165.46, 10.87, 'Normal', 'Basa', '2021-11-26 05:50:39', '2021-11-26 05:50:39'),
(28, 165.46, 9.87, 'Normal', 'Basa', '2021-11-26 05:50:54', '2021-11-26 05:50:54'),
(29, 165.46, 9.87, 'Normal', 'Basa', '2021-11-27 12:26:20', '2021-11-27 12:26:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `kekeruhans`
--

CREATE TABLE `kekeruhans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NTU` double(8,2) NOT NULL,
  `status_kekeruhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_30_160509_create_alats_table', 1),
(5, '2021_07_30_160540_create_kekeruhans_table', 1),
(6, '2021_07_30_160603_create_status_kekeruhans_table', 1),
(7, '2021_07_30_160618_create_phs_table', 1),
(8, '2021_07_30_160634_create_status_phs_table', 1),
(9, '2021_07_30_160646_create_roles_table', 1),
(10, '2021_08_27_142113_create_rata_data_phs_table', 1),
(11, '2021_08_27_142726_create_rata_data_keruhs_table', 1),
(12, '2021_09_22_105319_create_data_table', 1);

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
-- Struktur dari tabel `phs`
--

CREATE TABLE `phs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kadar_ph` double(8,2) NOT NULL,
  `status_ph` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rata_data_keruhs`
--

CREATE TABLE `rata_data_keruhs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NTU` double(8,2) NOT NULL,
  `status_kekeruhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rata_data_phs`
--

CREATE TABLE `rata_data_phs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kadar_ph` double(8,2) NOT NULL,
  `status_ph` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_kekeruhans`
--

CREATE TABLE `status_kekeruhans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_kekeruhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_kekeruhan` double(8,2) NOT NULL,
  `max_kekeruhan` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_phs`
--

CREATE TABLE `status_phs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_ph` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_ph` double(8,2) NOT NULL,
  `max_ph` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Petugas', 'user', 'petugas@gmail.com', NULL, '$2y$10$1I3LQ8SLCYuYE9.p/XYWGup.N77RP8owyNyxis75I8hmy.mQvwXUi', 'w15RgxFD9HKg3hi0Y5ZROp4CgdYQoAJey0igkY4I4dpfYswyYqpEtcNwPyKB', '2021-09-23 06:00:35', '2021-09-23 06:00:35'),
(2, 'Admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$7B8nuVdr0kioNhxJq6rP6eaSn9OXU5nW3fmz.HfBpPphK.eDDJspm', '45hR4FcHQ9oAzZH3bRNWY4PHP1PgCtFa57l23NJcwYaDAQ9DphXI5p6jcyWE', '2021-09-23 06:01:49', '2021-09-23 06:01:49');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alats`
--
ALTER TABLE `alats`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kekeruhans`
--
ALTER TABLE `kekeruhans`
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
-- Indeks untuk tabel `phs`
--
ALTER TABLE `phs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rata_data_keruhs`
--
ALTER TABLE `rata_data_keruhs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rata_data_phs`
--
ALTER TABLE `rata_data_phs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status_kekeruhans`
--
ALTER TABLE `status_kekeruhans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `status_kekeruhans_jenis_kekeruhan_unique` (`jenis_kekeruhan`);

--
-- Indeks untuk tabel `status_phs`
--
ALTER TABLE `status_phs`
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
-- AUTO_INCREMENT untuk tabel `alats`
--
ALTER TABLE `alats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kekeruhans`
--
ALTER TABLE `kekeruhans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `phs`
--
ALTER TABLE `phs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rata_data_keruhs`
--
ALTER TABLE `rata_data_keruhs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rata_data_phs`
--
ALTER TABLE `rata_data_phs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `status_kekeruhans`
--
ALTER TABLE `status_kekeruhans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `status_phs`
--
ALTER TABLE `status_phs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
