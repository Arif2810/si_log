-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2019 at 06:51 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_log`
--

-- --------------------------------------------------------

--
-- Table structure for table `agamas`
--

CREATE TABLE `agamas` (
  `id_agama` int(10) UNSIGNED NOT NULL,
  `nama_agama` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agamas`
--

INSERT INTO `agamas` (`id_agama`, `nama_agama`, `created_at`, `updated_at`) VALUES
(1, 'Islam', '2019-03-22 08:42:30', '2019-03-22 08:42:30'),
(2, 'Kristen', '2019-03-22 08:42:49', '2019-03-22 08:42:49'),
(3, 'Katolik', '2019-03-22 08:42:57', '2019-03-22 08:42:57'),
(4, 'Hindu', '2019-03-22 08:43:06', '2019-03-22 08:43:06'),
(7, 'Budha', '2019-11-19 06:32:08', '2019-11-19 06:35:07');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id_data` int(10) NOT NULL,
  `tgl_input` date NOT NULL,
  `id_mesin` int(10) UNSIGNED NOT NULL,
  `oversize_i` float NOT NULL,
  `overthick_i` float NOT NULL,
  `largeaccept_i` float NOT NULL,
  `smallaccept_i` float NOT NULL,
  `pin_i` float NOT NULL,
  `dust_i` float NOT NULL,
  `bark_i` float NOT NULL,
  `oversize` float NOT NULL,
  `overthick` float NOT NULL,
  `largeaccept` float NOT NULL,
  `smallaccept` float NOT NULL,
  `totalaccept` float DEFAULT NULL,
  `pin` float NOT NULL,
  `dust` float NOT NULL,
  `bark` float NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id_data`, `tgl_input`, `id_mesin`, `oversize_i`, `overthick_i`, `largeaccept_i`, `smallaccept_i`, `pin_i`, `dust_i`, `bark_i`, `oversize`, `overthick`, `largeaccept`, `smallaccept`, `totalaccept`, `pin`, `dust`, `bark`, `id_user`, `created_at`, `updated_at`) VALUES
(1, '2019-12-16', 1, 12, 9, 1234.3, 122.2, 2, 2, 0, 0.9, 0.7, 89.3, 8.8, 98.1, 0.1, 0.1, 0, 9, '2019-12-16 10:05:55', '2019-12-16 10:05:55'),
(2, '2019-12-16', 1, 12, 9, 1432.2, 100, 3, 3, 0, 0.8, 0.6, 91.9, 6.4, 98.3, 0.2, 0.2, 0, 9, '2019-12-16 10:07:37', '2019-12-16 10:07:37'),
(3, '2019-12-16', 1, 12, 10, 1234.3, 100, 2, 2, 0, 0.9, 0.7, 90.7, 7.4, 98.1, 0.1, 0.1, 0, 9, '2019-12-16 10:16:03', '2019-12-16 10:16:03'),
(4, '2019-12-16', 3, 12, 9, 1432.2, 100, 2, 3, 0, 0.8, 0.6, 91.9, 6.4, 98.3, 0.1, 0.2, 0, 8, '2019-12-16 10:20:14', '2019-12-16 10:20:14'),
(5, '2019-12-16', 4, 12, 9, 1234.3, 122.2, 2, 2, 0, 0.9, 0.7, 89.3, 8.8, 98.1, 0.1, 0.1, 0, 9, '2019-12-16 10:24:50', '2019-12-16 10:24:50');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id_karyawan` int(10) UNSIGNED NOT NULL,
  `sap` char(7) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `id_gender` int(10) UNSIGNED NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tgl_daftar` date NOT NULL,
  `id_agama` int(10) UNSIGNED DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id_karyawan`, `sap`, `nama_karyawan`, `id_gender`, `tgl_lahir`, `tgl_daftar`, `id_agama`, `alamat`, `telp`, `created_at`, `updated_at`) VALUES
(9, '1234567', 'Karyawan A', 1, '1980-09-23', '2009-11-18', 1, 'Jl. Indah Kasih', '08123123', '2019-11-18 03:26:05', '2019-11-18 15:30:19'),
(10, '123456', 'Karyawan B', 1, '1988-08-21', '2010-11-18', 1, 'Jl. 2', '08765456', '2019-11-18 03:27:39', '2019-11-18 03:27:39'),
(12, '0987654', 'Karyawan E', 1, '1980-10-10', '2000-11-18', 1, 'Jn. Permai', '0567654343', '2019-11-18 07:01:38', '2019-11-18 07:01:38');

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id_gender` int(10) UNSIGNED NOT NULL,
  `nama_gender` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id_gender`, `nama_gender`, `created_at`, `updated_at`) VALUES
(1, 'Laki-laki', '2019-03-22 09:38:24', '2019-03-22 09:38:24'),
(3, 'Perempuan', '2019-11-19 06:18:02', '2019-11-19 06:26:48');

-- --------------------------------------------------------

--
-- Table structure for table `machines`
--

CREATE TABLE `machines` (
  `id_mesin` int(10) UNSIGNED NOT NULL,
  `nama_mesin` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `machines`
--

INSERT INTO `machines` (`id_mesin`, `nama_mesin`, `created_at`, `updated_at`) VALUES
(1, 'Mesin 1', '2019-11-28 16:59:24', '2019-11-28 16:59:24'),
(3, 'Kyoto SS', '2019-11-28 16:59:38', '2019-11-28 17:02:34'),
(4, 'Mesin 4', '2019-11-28 16:59:51', '2019-11-28 16:59:51'),
(5, 'Mesin 3', '2019-12-04 13:54:31', '2019-12-04 13:54:31');

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('arif@contoh.com', '$2y$10$teDGfASs9BQExEzZkCf/OOoMBeOMYIlbwfHUzyVKNEg2NECzNIxyC', '2019-08-26 00:41:24'),
('arif@contoh.com', '$2y$10$teDGfASs9BQExEzZkCf/OOoMBeOMYIlbwfHUzyVKNEg2NECzNIxyC', '2019-08-26 00:41:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akses` enum('admin','operator') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'operator',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `akses`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Administrator', 'admin', 'admin@contoh.com', 'admin', '$2y$10$9iZ3kDbNbZUR.4BbxD14kezBlHh.j37xbMrFsCaFE2IJcqgyuKBSu', 'HZyZGGhfpKICpLJsUWoqZuXe4Mktd7RqjwTKKpDqbXubHV9cQ8kc2WuqISwg', '2019-03-27 09:18:02', '2019-08-26 14:21:28'),
(8, 'Putri Utami', 'putriutami', 'putri@gmail.com', 'operator', '$2y$10$aewd4XVctdmIst0Wy38.HOaY/Tn3MBpoNgiHsI6wOeaz4yMxD5igi', '8VwvxOQ6MlWk9ZWS6rFmz7mexbahsKK5qV31wrzAwvy4rJT7XrtILwkz0jHI', '2019-11-29 22:24:06', '2019-12-03 01:43:28'),
(9, 'Mr X', 'unknown', 'unknown@contoh.com', 'operator', '$2y$10$2z/lJANcLz5BrQi2q1M2AO8xGo3bqHjn54bg6lke9FOokNaWqS.uy', 'ItmOJJf60rk4BEbde9lunOjHAkyvGsUyy7x89pyzFkE3YN1ID3l5k3xkjnvy', '2019-12-16 05:50:35', '2019-12-16 05:50:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agamas`
--
ALTER TABLE `agamas`
  ADD PRIMARY KEY (`id_agama`),
  ADD KEY `id_agama` (`id_agama`),
  ADD KEY `id_agama_2` (`id_agama`),
  ADD KEY `id_agama_3` (`id_agama`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `id_mesin` (`id_mesin`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_pasien` (`id_karyawan`),
  ADD KEY `id_pasien_2` (`id_karyawan`),
  ADD KEY `id_agama` (`id_agama`),
  ADD KEY `id_agama_2` (`id_agama`),
  ADD KEY `id_gender` (`id_gender`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id_gender`);

--
-- Indexes for table `machines`
--
ALTER TABLE `machines`
  ADD PRIMARY KEY (`id_mesin`),
  ADD KEY `id_mesin` (`id_mesin`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agamas`
--
ALTER TABLE `agamas`
  MODIFY `id_agama` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id_data` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id_karyawan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id_gender` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `machines`
--
ALTER TABLE `machines`
  MODIFY `id_mesin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `data_ibfk_1` FOREIGN KEY (`id_mesin`) REFERENCES `machines` (`id_mesin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`id_agama`) REFERENCES `agamas` (`id_agama`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employees_ibfk_2` FOREIGN KEY (`id_gender`) REFERENCES `genders` (`id_gender`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
