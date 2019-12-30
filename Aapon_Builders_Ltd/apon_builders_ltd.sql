-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2019 at 12:59 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apon_builders_ltd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_socials`
--

CREATE TABLE `admin_socials` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinterest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_socials`
--

INSERT INTO `admin_socials` (`id`, `facebook`, `instagram`, `pinterest`, `twitter`, `created_at`, `updated_at`) VALUES
(1, 'www.facebook.com', 'www.instagram.com', 'www.pinterest.com', 'www.twitter.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinterest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `image`, `name`, `description`, `location`, `email`, `number`, `facebook`, `instagram`, `pinterest`, `twitter`, `created_at`, `updated_at`) VALUES
(1, '1699139069.png', 'Nazmul', 'Lorem is some people', 'mirpur 1 dhaka 1216', 'nazmul@gmail.com', '0123698547', '@facebook', '@instagram', '@pinterset', '@twitter', '2019-12-29 03:06:03', '2019-12-29 03:07:24'),
(2, '659450184.png', 'Lie', 'Lorem is some people', 'Dhake 3', 'test@gmail.com', '0123698547', '@facebook', '@instagram', '@pinterset', '@twitter', '2019-12-29 03:06:57', '2019-12-29 03:06:57'),
(3, '1521265814.png', 'Jon', 'Lorem is some people', 'Bogura', 'test@gmail.com', '0123698547', '@facebook', '@instagram', '@pinterset', '@twitter', '2019-12-29 03:07:56', '2019-12-29 03:07:56'),
(4, '1873526336.png', 'Dow', 'Lorem is some people', 'mirpur 1', 'test@gmail.com', '0123698547', '@facebook', '@instagram', '@pinterset', '@twitter', '2019-12-29 03:11:15', '2019-12-29 03:11:15'),
(5, '85958127.png', 'jamal', 'Lorem is some people', 'Bogura', 'test@gmail.com', '0123698547', '@facebook', '@instagram', '@pinterset', '@twitter', '2019-12-29 03:12:00', '2019-12-29 03:12:00'),
(6, '949705753.png', 'Joy', 'Lorem is some people', 'Dhaka', 'test@gmail.com', '0123698547', '@facebook', '@instagram', '@pinterset', '@twitter', '2019-12-29 03:12:54', '2019-12-29 03:12:54');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'A', '2019-12-29 02:53:48', '2019-12-29 02:53:48'),
(2, 'B', '2019-12-29 02:53:54', '2019-12-29 02:53:54'),
(3, 'C', '2019-12-29 02:53:59', '2019-12-29 02:53:59'),
(4, 'D', '2019-12-29 02:54:04', '2019-12-29 02:54:04'),
(5, 'E', '2019-12-29 02:54:09', '2019-12-29 02:54:09');

-- --------------------------------------------------------

--
-- Table structure for table `email_numbers`
--

CREATE TABLE `email_numbers` (
  `id` int(10) UNSIGNED NOT NULL,
  `a_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_numbers`
--

INSERT INTO `email_numbers` (`id`, `a_email`, `a_number`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '01952101213', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `featurproperties`
--

CREATE TABLE `featurproperties` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beds` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baths` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `garage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale_both` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `featurproperties`
--

INSERT INTO `featurproperties` (`id`, `category_id`, `title`, `location`, `area`, `beds`, `baths`, `garage`, `price`, `sale_both`, `name`, `date`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'This is Heading', 'mirpur 1 dhaka 1216', '300-sqft', '4', '3', '1', '50000', 'New', 'Nazmul', '12-12-1912', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '1070071804.jpg', '2019-12-29 02:57:22', '2019-12-29 02:57:22'),
(2, 1, 'This is Heading 2', 'mirpur 1', '400-sqft', '4', '3', '1', '20000', 'Sale', 'Nazmul', '12-12-2020', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '714117219.jpg', '2019-12-29 02:59:29', '2019-12-29 02:59:29'),
(3, 2, 'This is Heading', 'Dhake 2', '300-sqft', '4', '3', '1', '10000', 'New', 'Nazmul', '12-12-2020', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '1674224112.jpg', '2019-12-29 03:00:16', '2019-12-29 03:00:16'),
(4, 2, 'This is Heading 2', 'Dhake 3', '400-sqft', '4', '3', '1', '50000', 'Sale', 'Nazmul', '12-12-1912', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '966113854.jpg', '2019-12-29 03:00:57', '2019-12-29 03:00:57'),
(5, 3, 'This is Heading', 'Bogura', '400-sqft', '4', '3', '1', '10000', 'New', 'Nazmul', '12-12-1912', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '288475505.png', '2019-12-29 03:01:35', '2019-12-29 03:01:35'),
(6, 3, 'This is Heading', 'Dhake 3', '300-sqft', '4', '3', '1', '20000', 'Sale', 'Nazmul', '12-12-1912', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '1905449646.jpg', '2019-12-29 03:02:09', '2019-12-29 03:02:09'),
(7, 4, 'This is Heading', 'Dhake 2', '300-sqft', '4', '3', '1', '50000', 'Sale', 'Nazmul', '12-12-1912', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '978098285.jpg', '2019-12-29 03:03:00', '2019-12-29 03:03:00'),
(8, 4, 'This is Heading 2', 'mirpur 1 dhaka 1216', '300-sqft', '4', '3', '1', '50000', 'New', 'Nazmul', '12-12-1912', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '1430233848.jfif', '2019-12-29 03:03:45', '2019-12-29 03:03:45'),
(9, 5, 'This is Heading', 'Bogura', '300-sqft', '4', '3', '1', '50000', 'Sale', 'Nazmul', '12-12-2020', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '534162005.jpg', '2019-12-29 03:04:28', '2019-12-29 03:04:28'),
(10, 5, 'This is Heading', 'Bogura', '300-sqft', '4', '3', '1', '10000', 'New', 'Nazmul', '24-12-2020', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '221212123.jpg', '2019-12-29 03:05:03', '2019-12-29 03:05:03');

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `description`, `location`, `email`, `number`, `created_at`, `updated_at`) VALUES
(1, 'Lorem is some people sdfhfhsfdgbb fgdfgdfg dstfgdgfdg', 'mirpur 1 dhaka 1216', 'test@gmail.com', '0123698547', '2019-12-29 03:13:44', '2019-12-29 03:13:44');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '1577609427..logo.png', '2019-12-29 02:50:27', '2019-12-29 02:50:27');

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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_12_19_051729_create_email_numbers_table', 1),
(14, '2019_12_19_104854_create_admin_socials_table', 1),
(15, '2019_12_20_120205_create_logos_table', 1),
(16, '2019_12_21_110541_create_sliders_table', 1),
(17, '2019_12_23_054603_create_featurproperties_table', 1),
(18, '2019_12_23_074928_create_categories_table', 1),
(19, '2019_12_24_094405_create_agents_table', 1),
(20, '2019_12_25_052811_create_footers_table', 1),
(21, '2019_12_29_094322_create_features_table', 2),
(22, '2019_12_29_100146_create_properties_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(10) UNSIGNED NOT NULL,
  `featurproperties_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `featurproperties_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '11577694285.jpg', '2019-12-30 02:24:45', '2019-12-30 02:24:45'),
(2, 1, '21577694285.jpg', '2019-12-30 02:24:45', '2019-12-30 02:24:45'),
(3, 1, '31577694285.jpg', '2019-12-30 02:24:45', '2019-12-30 02:24:45'),
(4, 1, '41577694285.jpg', '2019-12-30 02:24:45', '2019-12-30 02:24:45'),
(5, 1, '51577694285.jpg', '2019-12-30 02:24:45', '2019-12-30 02:24:45'),
(6, 1, '61577694285.jpg', '2019-12-30 02:24:45', '2019-12-30 02:24:45'),
(7, 2, '11577694331.jpg', '2019-12-30 02:25:31', '2019-12-30 02:25:31'),
(8, 2, '21577694331.jpg', '2019-12-30 02:25:31', '2019-12-30 02:25:31'),
(9, 2, '31577694331.jpg', '2019-12-30 02:25:31', '2019-12-30 02:25:31'),
(10, 2, '41577694331.jpg', '2019-12-30 02:25:31', '2019-12-30 02:25:31'),
(11, 2, '51577694331.jpg', '2019-12-30 02:25:31', '2019-12-30 02:25:31'),
(12, 2, '61577694331.jfif', '2019-12-30 02:25:31', '2019-12-30 02:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'This is Heading', 'Lorem is some people', '407089811.jpg', '2019-12-29 02:52:12', '2019-12-29 02:52:12'),
(2, 'This is Heading 2', 'Lorem is some people', '143456943.jpg', '2019-12-29 02:52:25', '2019-12-29 02:52:25'),
(3, 'This is Heading 3', 'Lorem is some people', '651973761.jpg', '2019-12-29 02:52:40', '2019-12-29 02:52:40'),
(4, 'This is Heading 4', 'Lorem is some people', '371243817.jpg', '2019-12-29 02:52:53', '2019-12-29 02:52:53'),
(5, 'This is Heading 5', 'Lorem is some people', '1265487775.jpg', '2019-12-29 02:53:05', '2019-12-29 02:53:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'MD.Nazmul Huda', 'nazmul@gmail.com', NULL, '$2y$10$NQXu.ccqfej0QoCOAXEvzumrztALW5TI2.C6BZdUkvSaHagrc2XfO', NULL, '2019-12-29 22:40:43', '2019-12-29 22:40:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_socials`
--
ALTER TABLE `admin_socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `email_numbers`
--
ALTER TABLE `email_numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featurproperties`
--
ALTER TABLE `featurproperties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
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
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `admin_socials`
--
ALTER TABLE `admin_socials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `email_numbers`
--
ALTER TABLE `email_numbers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `featurproperties`
--
ALTER TABLE `featurproperties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
