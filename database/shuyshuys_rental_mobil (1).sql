-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 01, 2025 at 03:47 PM
-- Server version: 10.6.16-MariaDB-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shuyshuys_rental_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `manufacture_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `license_number` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `penalty` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `manufacture_id`, `name`, `license_number`, `color`, `year`, `status`, `price`, `penalty`, `created_at`, `updated_at`) VALUES
(1, 5, 'M3', 'M 3 GTR', 'White', '2020', '1', 15000000, 500000, '2025-01-29 18:53:57', '2025-01-31 18:38:56'),
(2, 3, 'NSX', 'N 5 X', 'Red', '1990', '0', 5000000, 700000, '2025-01-29 20:18:02', '2025-01-31 18:38:00'),
(3, 6, 'GT-R', 'R 35 GTR', 'Grey', '2024', '1', 8000000, 150000, '2025-01-31 18:31:11', '2025-01-31 18:39:01');

-- --------------------------------------------------------

--
-- Table structure for table `car_images`
--

CREATE TABLE `car_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_images`
--

INSERT INTO `car_images` (`id`, `image`, `car_id`, `created_at`, `updated_at`) VALUES
(9, '07CbGUftmIB8ZJk5YaAdhx9j4q7mKr-metaMDQwX25zeF9jbGFzc2ljLndlYnA=-.webp', 2, '2025-01-30 01:26:52', '2025-01-30 01:26:52'),
(10, '4MB4LHxcDl3EGlDM6vOnoGfSgCMuY5-metaaW1hZ2VzLmpwZWc=-.jpeg', 2, '2025-01-30 01:26:44', '2025-01-30 01:26:44'),
(12, 'tds7TYPDMQai21oidBxMcCGPLnQS5a-metaQk1XLU0zLU5lZWQtZm9yLXNwZWVkLTEtNTAweDMzMy5hdmlm-.avif', 1, '2025-01-30 01:27:13', '2025-01-30 01:27:13'),
(13, 'taORTFH2jQPz2mMDA0h6RCIdcVT8Wj-metaOTRmM2M3MTY2ODk2Mzg1LjY0MjA0ZDRlNWVmN2QucG5n-.png', 1, '2025-01-30 01:27:21', '2025-01-30 01:27:21'),
(14, '6GGx5FQq34iIVcMLvDYR1sk4bBro7Z-metaY2VmYjk1OTc0NTBhMDhmOTY4NmQyMTRlMDRhYmE0MmQuanBn-.jpg', 1, '2025-01-30 01:27:34', '2025-01-30 01:27:34'),
(15, '7mOqa3lyDjGAFtLOCbIw7VdJGwWODb-metaZ3RyLWZyb250LndlYnA=-.webp', 3, '2025-01-31 18:32:37', '2025-01-31 18:32:37'),
(16, '2tRsX1TrRqo7j8yTrDY86lFhLd9SqM-metaZ3RyLXJlYXIud2VicA==-.webp', 3, '2025-01-31 18:33:14', '2025-01-31 18:33:14'),
(17, 'sERMcLQM5zbjrvxpmLRcuuofspUdef-metaMTQyMjYwXzIwMTVfTmlzc2FuX0dULVIuanBn-.jpg', 3, '2025-01-31 18:33:55', '2025-01-31 18:33:55');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `user_id`, `name`, `nik`, `sex`, `address`, `phone_number`, `email`, `created_at`, `updated_at`) VALUES
(1, 4, 'Emilia Zemlak', '752-24-5288', 'Female', '22775 Swaniawski Heights Suite 169Sydneeshire, DE 18344', '751.808.7060', 'emilia@gmail.com', '2025-01-29 19:14:44', '2025-01-29 19:16:22'),
(2, 6, 'Mrs. Fatima Monahan', '669-41-5773', 'Female', '23323 Blanda ParksNorth Garnett, ID 18435-1519', '+1-930-306-7009', 'fatima@gmail.com', '2025-01-29 19:16:12', '2025-01-29 19:16:12'),
(3, 6, 'Nama Toko', '1234567890', 'Male', 'alamat', '621234567890', 'email@gmail.com', '2025-01-30 03:28:47', '2025-01-30 03:28:47');

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
-- Table structure for table `manufactures`
--

CREATE TABLE `manufactures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufactures`
--

INSERT INTO `manufactures` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Toyota', '2025-01-29 18:42:18', '2025-01-29 18:42:23'),
(2, 'Suzuki', '2025-01-29 18:42:38', '2025-01-29 18:42:38'),
(3, 'Honda', '2025-01-29 18:42:41', '2025-01-29 18:42:41'),
(4, 'Mercedes-Benz', '2025-01-29 18:42:49', '2025-01-29 18:42:49'),
(5, 'BMW', '2025-01-29 18:42:52', '2025-01-29 18:42:52'),
(6, 'Nissan', '2025-01-31 18:30:29', '2025-01-31 18:30:29');

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
(1, '2000_01_29_183553_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2025_01_29_183549_create_cars_table', 1),
(7, '2025_01_29_183550_create_car_images_table', 1),
(8, '2025_01_29_183551_create_customers_table', 1),
(9, '2025_01_29_183552_create_manufactures_table', 1),
(10, '2025_01_29_183554_create_settings_table', 1),
(11, '2025_01_29_183555_create_transactions_table', 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', NULL, NULL),
(2, 'Staff', '2025-01-29 19:20:47', '2025-01-29 19:20:47'),
(3, 'Customer', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `slug`, `description`, `type`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Nama Toko', 'nama-toko', 'Rental Mobil Monas', 'text', NULL, '2025-01-29 19:39:38', '2025-01-29 19:39:46'),
(2, 'Alamat', 'alamat', 'Gambir, Central Jakarta City, Jakarta', 'text', NULL, '2025-01-29 19:40:47', '2025-01-29 19:40:47'),
(3, 'Nomer Telepon', 'tlp', '0213853040', 'number', NULL, '2025-01-29 19:41:10', '2025-01-29 19:41:10'),
(4, 'Email', 'email', 'monas@jakarta.id', NULL, NULL, '2025-01-29 19:41:25', '2025-01-29 19:41:25'),
(5, 'Banner', 'banner', 'Something in footer here', 'text', NULL, NULL, NULL),
(6, 'Deskripsi', 'description', 'adalah sebuah perusahaan yang mendirikan Rental Mobil di daerah kabupaten Sambas. Nama pemilik perusahaan adalah xxx yang sudah mendirikan perusahaan ini pada tahun 2025.', 'text', NULL, NULL, NULL),
(7, 'Maps', 'maps', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.666347494426!2d106.82458402402452!3d-6.175403010511381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2db8c5617%3A0x4e446b7ac891d847!2sMonas%2C%20Gambir%2C%20Kecamatan%20Gambir%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sen!2sid!4v1738342507224!5m2!1sen!2sid\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'text', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `rent_date` datetime DEFAULT NULL,
  `back_date` datetime DEFAULT NULL,
  `return_date` datetime DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `penalty` int(11) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `customer_id`, `car_id`, `invoice_no`, `rent_date`, `back_date`, `return_date`, `price`, `amount`, `penalty`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'INV-20250129-OXVAW', '2025-01-27 00:00:00', '2025-01-31 00:00:00', NULL, NULL, NULL, NULL, 'processing', NULL, '2025-01-29 21:19:00', '2025-01-29 21:30:15'),
(2, 2, 2, 'INV-20250130-CPMLG', '2025-01-28 00:00:00', '2025-01-31 00:00:00', NULL, NULL, NULL, NULL, 'processing', NULL, '2025-01-30 03:11:02', '2025-01-30 03:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 1, 'Administrator', 'mimin', 'admin@gmail.com', NULL, '$2y$10$cVo3m9vbYCk86yJ6UyWcb.nAm.JyhOHshaSY4xWvXqFwwP2G8zKhO', 'sN7thRu8zJ9ObMR7646l49PPMg4k25QwJaC2UrhTVv0JLDQbBGVb6sylSFlv', '2024-12-29 18:40:59', '2025-01-29 19:20:18'),
(3, 2, 'Staff-1', 'staff-1', 'staff1@gmail.com', NULL, '$2y$10$cVo3m9vbYCk86yJ6UyWcb.nAm.JyhOHshaSY4xWvXqFwwP2G8zKhO', NULL, '2025-01-29 18:40:59', NULL),
(4, 3, 'Customer-1', 'customer-1', 'c1@gmail.com', NULL, '$2y$10$cVo3m9vbYCk86yJ6UyWcb.nAm.JyhOHshaSY4xWvXqFwwP2G8zKhO', 'MWzz7re0F92PdUMfMlq5GB0RNCkim56OzMkAPsSeI3Vf4sOQxDKvyKRh0aDQ', '2024-12-29 18:40:59', '2024-01-29 18:40:59'),
(6, 3, 'Customer-2', 'customer-2', 'c2@gmail.com', NULL, '$2y$10$cVo3m9vbYCk86yJ6UyWcb.nAm.JyhOHshaSY4xWvXqFwwP2G8zKhO', NULL, '2025-01-29 18:40:59', '2025-01-29 18:40:59'),
(7, 3, 'customer-3', NULL, 'c3@gmail.com', NULL, '$2y$10$v3R1iA6ms.yMnLt4Dgh.wu59sDgYcJnxrJ8GcIxaROmbOks6w8Fui', 'CMechdwcdLRzgtMRV8l77TDj9P0FwuhsOzS2uI4CTvhNDONGuDJ5AsoJTI5R', '2025-01-30 02:19:27', '2025-01-30 02:19:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_manufacture_id_foreign` (`manufacture_id`);

--
-- Indexes for table `car_images`
--
ALTER TABLE `car_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `car_images_car_id_foreign` (`car_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `manufactures`
--
ALTER TABLE `manufactures`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_customer_id_foreign` (`customer_id`),
  ADD KEY `transactions_car_id_foreign` (`car_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `car_images`
--
ALTER TABLE `car_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manufactures`
--
ALTER TABLE `manufactures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_manufacture_id_foreign` FOREIGN KEY (`manufacture_id`) REFERENCES `manufactures` (`id`);

--
-- Constraints for table `car_images`
--
ALTER TABLE `car_images`
  ADD CONSTRAINT `car_images_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`),
  ADD CONSTRAINT `transactions_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
