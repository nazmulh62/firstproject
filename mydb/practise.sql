-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2017 at 05:09 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practise`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `blog_title`, `author_name`, `blog_short_description`, `blog_long_description`, `blog_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(4, 11, 'Samsung Galaxy Note 8 wins ‘Gadget of the Year’', 'Md.nazmul', 'Samsung’s flagship smartphone Galaxy Note8 on Friday won the ‘Gadget of the Year’ award at the India Mobile Congress (IMC) 2017 here.', 'Galaxy Note8, which features ‘Bixby’ digital assistant and enhanced ‘S Pen’, was launched in India on 12 September at Rs 67,900.\r\n\r\n“With the launch of Galaxy Note8, we have further strengthened our leadership in the premium smartphone segment in India and this prestigious award bears testimony to our efforts,” said Asim Warsi, Senior Vice President, Mobile Business, Samsung India, in a statement.\r\n\r\nThe 6.3-inch smartphone comes with 6GB RAM, 64GB internal memory which is expandable up to 256GB and sports a 12MP dual rear camera.', 'blog_images/643xNx19ff46b948fdbc2e8b14fab10881ed97-NOte8.jpg.pagespeed.ic.BmJGD95ZlL.jpg', 1, '2017-09-29 12:32:50', '2017-09-29 14:01:14'),
(5, 11, 'Australia to create national space agency', 'Md.Nazmul', 'Australia on Monday committed to creating a national space agency as it looks to cash in on the lucrative and fast-evolving astronautical sector.\r\n\r\nThe announcement came at a week-long Adelaide space conference attended by the world’s top scientists and experts including SpaceX chief Elon Musk.\r\n\r\nIt brings Canberra—which already has significant involvement in national and international space activities—into line with most other developed nations, which already have dedicated agencies to help coordinate the industry and shape development.', '“The global space industry is growing rapidly and it’s crucial that Australia is part of this growth,” acting science minister Michaelia Cash said in statement.\r\n\r\n“A national space agency will ensure we have a strategic long-term plan that supports the development and application of space technologies and grows our domestic space industry.”\r\n\r\nAccording to the government, the global space sector—encompassing innovation, defence, and telecommunications—has been growing annually since the late 1990s at almost 10 percent, driving revenue each year of US$323 billion.\r\n\r\n\r\nThis year marks the 50th anniversary of Australia launching its first satellite, the only country at the time to achieve the feat after the United States and Russia.\r\n\r\nIt has played a vital part in many space missions in the decades since then, with its Deep Space Communication Complex outside Canberra one of only three sites in the world capable of tracking NASA’s deep space assets.', 'blog_images/e7470d6d1a1b2d135b392634bc4223e5-Australia.jpg', 1, '2017-09-29 12:37:08', '2017-09-29 14:01:17'),
(7, 13, '\'Terminator 6\' to release in July 2019', 'Md.nazmul', 'The sixth instalment of Arnold Schwarzenegger-starrer science fiction franchise \"Terminator\" has been slated for release on July 26, 2019.', 'The upcoming film will mark Schwarzenegger\'s reunion with Linda Hamilton, who originally played Sarah Connor. Directed by Tim Miller, it is expected to be a sequel to 1991 movie \"Terminator 2: Judgement Day\", reports aceshowbiz.com.\r\n\r\n\"This is a continuation of the story from \'Terminator 1\' and ‘Terminator 2\',\" James Cameron, producer of the film, said.\r\n\r\n\"And we\'re pretending the other films were a bad dream. Or an alternate timeline, which is permissible in our multi-verse. This was really driven more by (Miller) than anybody, surprisingly, because I came in pretty agnostic about where we took it. The only thing I insisted on was that we somehow revamp it and reinvent it for the 21st century,\" Cameron added.', 'blog_images/72b76d2e3247d4f376047b930d2aa3ca-Arnold-Schwarzenegger.jpg', 1, '2017-09-29 12:54:50', '2017-09-29 12:54:50');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(11, 'Science&Tech', 'This category Is on Science and Technology related', 1, '2017-09-29 12:31:18', '2017-10-06 07:24:32'),
(12, 'Education', 'This Content Is About on Education', 1, '2017-09-29 12:36:02', '2017-10-03 23:32:21'),
(13, 'Entertainment', 'This category is Based on Entainment', 1, '2017-09-29 12:40:06', '2017-10-03 23:32:28'),
(14, 'Sports News', 'This category Is Based On Sports', 1, '2017-09-29 12:40:47', '2017-10-04 00:15:56');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `customer_id`, `customer_comment`, `publication_status`, `created_at`, `updated_at`) VALUES
(4, 10, 'fgggf', 1, '2017-10-06 06:49:38', '2017-10-06 10:42:28'),
(6, 10, 'hi asif how are you', 1, '2017-10-06 06:55:32', '2017-10-06 10:34:17'),
(7, 10, 'Hi Azom How are You', 1, '2017-10-06 07:56:42', '2017-10-06 10:42:29'),
(8, 10, 'hi Nazmul how are you', 1, '2017-10-06 08:44:13', '2017-10-06 09:54:48'),
(9, 11, 'hi kamal', 1, '2017-10-06 10:47:58', '2017-10-06 10:48:19'),
(10, 11, 'hi zafor', 1, '2017-10-06 10:52:56', '2017-10-06 10:53:11');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fullName`, `email`, `password`, `customer_image`, `created_at`, `updated_at`) VALUES
(10, 'najmul', 'najmul@gmail.com', '$2y$10$7GDdwFnxK2HGMqMN1qCwdOLg/x2OMwN4Lfqh2ygIsMIqqJd29NC2i', '', '2017-10-06 06:39:42', '2017-10-06 06:39:42'),
(11, 'kamal', 'kamal@gmail.com', '$2y$10$Ug7fj3nZUzJZiyPSzvdP7.KrmSoiv0bBAKLV28ZUv3xh9kvGjE5OW', '', '2017-10-06 10:43:33', '2017-10-06 10:43:33'),
(12, 'Rana', 'rana@gmail.com', '$2y$10$HvImaiKhNG1kHIEZ14ZTDe0gDtav/AkuraBkNLJfIx4o/ij2KaIzq', 'https://cdn3.iconfinder.com/data/icons/rcons-user-action/32/boy-512.png', '2017-10-06 11:17:48', '2017-10-06 11:17:48'),
(14, 'kamal', 'sojib@gmail.com', '$2y$10$XbGsAEad9Vma/JcwJam48.QgDBSmvl2HQzab7T0RnO21TMv.5Z7hW', 'https://cdn3.iconfinder.com/data/icons/rcons-user-action/32/boy-512.png', '2017-10-06 11:27:42', '2017-10-06 11:27:42');

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
(3, '2017_09_28_042829_create_students_table', 1),
(4, '2017_09_28_045511_create_students_table', 2),
(5, '2017_09_28_063723_create_categories_table', 3),
(6, '2017_09_28_065923_create_blogs_table', 4),
(7, '2017_09_28_124606_create_blogs_table', 5),
(8, '2017_09_29_112831_create_blogs_table', 6),
(9, '2017_10_01_113929_create_customers_table', 7),
(10, '2017_10_01_190121_create_comments_table', 8),
(11, '2017_10_05_094514_create_comments_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `mobile`, `created_at`, `updated_at`) VALUES
(1, 'kamal', 'najmulh62@gmail.com', '45345', '2017-09-27 23:00:07', '2017-09-27 23:00:07'),
(2, 'jhj', 'najmulh62@gmail.com', '45345', '2017-09-27 23:00:44', '2017-09-27 23:00:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nazmul', 'admin@gmail.com', '$2y$10$qa9y68aV7Ue0VUoHmmZHi.TmOeIkBrngRd1jna6/bePh5pp30pF7u', 'WHixObjZ7IJtKmQ2H5aOLAUbvbaXtdqssCTMLT9jcvB8fDkGmgMBWn9htIKZ', '2017-09-27 23:18:20', '2017-09-27 23:18:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
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
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
