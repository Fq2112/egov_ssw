-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2017 at 05:13 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egov`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'avatar.png',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skills` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biography` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `url`, `name`, `lastname`, `address`, `education`, `skills`, `biography`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'fq.jpg', 'Fiqy Ainuzzaqy', 'Super Admin', 'Jl. Hikmat 50A Betro, Sedati, Sidoarjo', 'D3 Manajemen Informatika, Universitas Negeri Surabaya', 'PHP, Laravel, HTML, JavaScript', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.', 'rm.rabbitmedia@gmail.com', '$2y$10$5jMDHcmLXqKBFezNTlHme.EptWa5KzMm3a2ru0WqSpVJi5zIpqRaO', 'XweNVQPcAHfuaaoqSzLwOst7NwxAVJIWBfjBJGh2ix5SprNkp7xWuULchUFy', '2017-05-11 08:12:42', '2017-05-27 02:42:44', NULL),
(2, 'adi.jpg', 'Adi Prasetiyo', 'Ux Designer', 'Jalan Raya Juanda, Sidoarjo', 'D3 Manajemen Informatika - Universitas Negeri Surabaya', 'HTML, CSS, JS', 'Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet', 'adi@yahoo.com', '$2y$10$0b7rZUm4rQuALssoPFhv2OHpqD7BJatqP92M9I6i/rVx8vZtvvENy', 'JtGqt9g14fE02ZPYtseLOFjO8I1eDOoMbQXdht5Kg6iN7dC2mFzzIpdx3MN3', '2017-05-11 08:16:25', '2017-05-26 11:09:32', NULL),
(3, 'aguk.jpg', 'M Aguk Nur Anggraini', 'Editor', 'Bangil, Pasuruan', 'D3 Manajemen Informatika, Universitas Negeri Surabaya', 'HTML', 'lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet', 'agukadmin@yahoo.com', '$2y$10$p3.PObL64KaKlbnfNGzbYuwH6CtxECIjSoqm3J5zwdJprE5zri1wu', 'bv4TQNGDP8kCbqSRzaf1FnNjM4gZHqs8bmaaMGaj3u4XeE5AJkIkDpxRB6I2', '2017-05-12 02:54:24', '2017-05-31 23:54:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `id_alat`
--

CREATE TABLE `id_alat` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_12_05_090208_create_contacts_table', 1),
(4, '2017_12_05_130316_create_m_apoteks_table', 2),
(5, '2017_12_05_130504_create_m_pemiliks_table', 3),
(6, '2017_12_05_130550_create_m_pemohons_table', 4),
(7, '2017_12_05_130629_create_m_alat_apotiks_table', 4),
(8, '2017_12_05_130707_create_m_perusahaans_table', 4),
(9, '2017_12_05_130806_create_m_depo_airs_table', 4),
(10, '2017_12_05_132821_create_m_apotekers_table', 4),
(11, '2017_12_05_133252_create_tr_perizinan_apotiks_table', 4),
(12, '2017_12_05_133329_create_tr_perizinan_hamas_table', 4),
(13, '2017_12_05_133442_create_tr_perizinan_depos_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `m_apotekers`
--

CREATE TABLE `m_apotekers` (
  `id` int(10) UNSIGNED NOT NULL,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Pria','Wanita') COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thn_lulus` date NOT NULL,
  `no_sipa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_sipa` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_apoteks`
--

CREATE TABLE `m_apoteks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_depo_airs`
--

CREATE TABLE `m_depo_airs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_pemiliks`
--

CREATE TABLE `m_pemiliks` (
  `id` int(10) UNSIGNED NOT NULL,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Pria','Wanita') COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_perusahaans`
--

CREATE TABLE `m_perusahaans` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tr_perizinan_apotiks`
--

CREATE TABLE `tr_perizinan_apotiks` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_admin` int(10) UNSIGNED NOT NULL,
  `id_pemohon` int(10) UNSIGNED NOT NULL,
  `id_pemilik` int(10) UNSIGNED NOT NULL,
  `id_alat` int(10) UNSIGNED NOT NULL,
  `id_apoteker` int(10) UNSIGNED NOT NULL,
  `id_apotek` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_berkas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_perizinan` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tr_perizinan_depos`
--

CREATE TABLE `tr_perizinan_depos` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_admin` int(10) UNSIGNED NOT NULL,
  `id_pemohon` int(10) UNSIGNED NOT NULL,
  `id_depo` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_berkas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_perizinan` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tr_perizinan_hamas`
--

CREATE TABLE `tr_perizinan_hamas` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_admin` int(10) UNSIGNED NOT NULL,
  `id_pemohon` int(10) UNSIGNED NOT NULL,
  `id_perusahaan` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_berkas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_perizinan` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ava` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jk` enum('Pria','Wanita') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_sipa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_sipa` date DEFAULT NULL,
  `npwp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_sk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nik`, `ava`, `name`, `tempat_lahir`, `tgl_lahir`, `jk`, `agama`, `phone`, `alamat`, `pekerjaan`, `jabatan`, `no_sipa`, `tgl_sipa`, `npwp`, `tempat_sk`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'fq1.jpg', 'Fiqy Ainuzzaqy', NULL, NULL, NULL, NULL, '8563094333', 'Jl. Hikmat 50A Betro\r\nSedati', 'Mahasiswa', NULL, NULL, NULL, NULL, NULL, 'fiqy_a@yahoo.com', '$2y$10$Mtd34pk8GUDKrHKC7MHuHefY06qS8hM4bWPxCnrWb.n9rP8h0VlLG', 'ENLdMxjKra7KHuAIZyKQx0y50CQqj7ho4YXGVdjKUUXtwrTiC3twvCg7W5kD', '2017-12-06 05:23:58', '2017-12-07 06:59:05'),
(3, NULL, 'adi.JPG', 'Fiqy Ainuzzaqy', NULL, NULL, NULL, NULL, '8563094333', 'Jl. Hikmat 50A Betro\r\nSedati', 'Mahasiswa', NULL, NULL, NULL, NULL, NULL, 'fiqy_a@fq.com', '$2y$10$5JJJnthDz6ScTtU5lyqGg.zf5EYmQA8ey64GigFDIubONk65BheHy', 'ENLdMxjKra7KHuAIZyKQx0y50CQqj7ho4YXGVdjKUUXtwrTiC3twvCg7W5kD', '2017-12-06 05:23:58', '2017-12-06 07:47:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`);

--
-- Indexes for table `id_alat`
--
ALTER TABLE `id_alat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_apotekers`
--
ALTER TABLE `m_apotekers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `m_apotekers_nik_unique` (`nik`);

--
-- Indexes for table `m_apoteks`
--
ALTER TABLE `m_apoteks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_depo_airs`
--
ALTER TABLE `m_depo_airs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_pemiliks`
--
ALTER TABLE `m_pemiliks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `m_pemiliks_nik_unique` (`nik`),
  ADD UNIQUE KEY `m_pemiliks_npwp_unique` (`npwp`);

--
-- Indexes for table `m_perusahaans`
--
ALTER TABLE `m_perusahaans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tr_perizinan_apotiks`
--
ALTER TABLE `tr_perizinan_apotiks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tr_perizinan_apotiks_id_admin_foreign` (`id_admin`),
  ADD KEY `tr_perizinan_apotiks_id_pemilik_foreign` (`id_pemilik`),
  ADD KEY `tr_perizinan_apotiks_id_alat_foreign` (`id_alat`),
  ADD KEY `tr_perizinan_apotiks_id_apoteker_foreign` (`id_apoteker`),
  ADD KEY `tr_perizinan_apotiks_id_apotek_foreign` (`id_apotek`),
  ADD KEY `id_pemohon` (`id_pemohon`);

--
-- Indexes for table `tr_perizinan_depos`
--
ALTER TABLE `tr_perizinan_depos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tr_perizinan_depos_id_admin_foreign` (`id_admin`),
  ADD KEY `tr_perizinan_depos_id_depo_foreign` (`id_depo`),
  ADD KEY `id_pemohon` (`id_pemohon`);

--
-- Indexes for table `tr_perizinan_hamas`
--
ALTER TABLE `tr_perizinan_hamas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tr_perizinan_hamas_id_admin_foreign` (`id_admin`),
  ADD KEY `tr_perizinan_hamas_id_perusahaan_foreign` (`id_perusahaan`),
  ADD KEY `id_pemohon` (`id_pemohon`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD UNIQUE KEY `npwp` (`npwp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `id_alat`
--
ALTER TABLE `id_alat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `m_apotekers`
--
ALTER TABLE `m_apotekers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `m_apoteks`
--
ALTER TABLE `m_apoteks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `m_depo_airs`
--
ALTER TABLE `m_depo_airs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `m_pemiliks`
--
ALTER TABLE `m_pemiliks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `m_perusahaans`
--
ALTER TABLE `m_perusahaans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tr_perizinan_apotiks`
--
ALTER TABLE `tr_perizinan_apotiks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tr_perizinan_depos`
--
ALTER TABLE `tr_perizinan_depos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tr_perizinan_hamas`
--
ALTER TABLE `tr_perizinan_hamas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tr_perizinan_apotiks`
--
ALTER TABLE `tr_perizinan_apotiks`
  ADD CONSTRAINT `tr_perizinan_apotiks_ibfk_1` FOREIGN KEY (`id_pemohon`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tr_perizinan_apotiks_id_admin_foreign` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `tr_perizinan_apotiks_id_alat_foreign` FOREIGN KEY (`id_alat`) REFERENCES `id_alat` (`id`),
  ADD CONSTRAINT `tr_perizinan_apotiks_id_apotek_foreign` FOREIGN KEY (`id_apotek`) REFERENCES `m_apoteks` (`id`),
  ADD CONSTRAINT `tr_perizinan_apotiks_id_apoteker_foreign` FOREIGN KEY (`id_apoteker`) REFERENCES `m_apotekers` (`id`),
  ADD CONSTRAINT `tr_perizinan_apotiks_id_pemilik_foreign` FOREIGN KEY (`id_pemilik`) REFERENCES `m_pemiliks` (`id`);

--
-- Constraints for table `tr_perizinan_depos`
--
ALTER TABLE `tr_perizinan_depos`
  ADD CONSTRAINT `tr_perizinan_depos_ibfk_1` FOREIGN KEY (`id_pemohon`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tr_perizinan_depos_id_admin_foreign` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `tr_perizinan_depos_id_depo_foreign` FOREIGN KEY (`id_depo`) REFERENCES `m_depo_airs` (`id`);

--
-- Constraints for table `tr_perizinan_hamas`
--
ALTER TABLE `tr_perizinan_hamas`
  ADD CONSTRAINT `tr_perizinan_hamas_ibfk_1` FOREIGN KEY (`id_pemohon`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tr_perizinan_hamas_id_admin_foreign` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `tr_perizinan_hamas_id_perusahaan_foreign` FOREIGN KEY (`id_perusahaan`) REFERENCES `m_perusahaans` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
