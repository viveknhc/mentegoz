-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2023 at 07:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mentegoz`
--

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vacancies` int(11) NOT NULL,
  `location` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `news_type` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `image` text NOT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `project_category` varchar(100) DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `technologies` text DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `client` varchar(200) DEFAULT NULL,
  `location` varchar(75) DEFAULT NULL,
  `industry` varchar(150) DEFAULT NULL,
  `scope` varchar(150) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `light_logo` varchar(50) DEFAULT NULL,
  `dark_logo` varchar(50) DEFAULT NULL,
  `project_image` varchar(50) DEFAULT NULL,
  `banner_image` varchar(50) DEFAULT NULL,
  `meta_title` varchar(150) DEFAULT NULL,
  `meta_keywords` varchar(150) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `title`, `slug`, `project_category`, `tags`, `technologies`, `link`, `client`, `location`, `industry`, `scope`, `description`, `light_logo`, `dark_logo`, `project_image`, `banner_image`, `meta_title`, `meta_keywords`, `meta_description`, `priority`, `created_at`, `updated_at`) VALUES
(4, 'Arabian Business Solution', 'arabian-business-solution', '1', '{\"tags\":[\"1\",\"3\",\"4\"]}', '{\"technologies\":[\"3\",\"4\",\"5\",\"6\"]}', 'https://absomann.com/', 'Arabian Business Solution', 'Oman', 'Business Consultancy', 'Web Designing, Branding, Social Media, SEO', 'Always ready to push the boundaries, especially when it comes to our own platform, Our analytical eye to create a site that was visually engaging and also optimised for maximum performance.It also perfectly reflects the journey to help it tell a story to increase its understanding and drive action. To create a site that was visually engaging for maximum performance.', '1698320838.png', '1698320838.png', 'bnr1697193090.jpg', 'bnr1697193090.jpg', 'ABS Oman Business Consultancy', 'Wordpress, Website Design, Branding', 'ABS Oman Business Consultancy', 10, '2023-10-13 10:31:30', '2023-10-26 11:47:18'),
(5, 'Goldmine Sanger', 'goldmine-sanger', '3', '{\"tags\":[\"1\"]}', '{\"technologies\":[\"3\",\"5\",\"6\",\"7\",\"8\",\"9\",\"11\",\"12\"]}', 'https://goldminesanger.com/', 'Goldmine Sanger', 'Germany', 'Goldmine', 'UI Design, Website Development', 'Goldmine Sanger is a leading gold mining company in Dubai. With decades of experience and a dedicated team of experts, we pride ourselves on being able to offer high-quality gold to our customers worldwide. Our modern technologies and sustainable mining practices enable us to extract gold in an efficient and responsible manner. At Goldminsesanger we strive for excellence and strict quality standards to meet the demands of our customers.', '1699513007.png', '1699513007.png', 'bnr1699513449.jpg', 'bnr1699513007.jpg', NULL, NULL, NULL, 1, '2023-11-09 06:56:47', '2023-11-09 07:04:09'),
(6, 'Amal Management Website', 'amal-management-website', '6', '{\"tags\":[\"1\",\"4\"]}', '{\"technologies\":[\"3\",\"4\",\"5\",\"9\",\"11\",\"12\"]}', 'https://amcs-consultancy.sa/', 'Amal Management Consulting', 'Saudi Arabia', 'Business Consultancy', 'Web Designing, Wordpress Development', 'Amal Management Consultancy Solutions Company is Inspired by hope to streamline with the Kingdom 2030 vision. The Website is developed using wordpress platform. We have done Multi-Language setup in this website.&nbsp;', '1699858800.png', '1699858800.png', 'bnr1699858800.jpg', 'bnr1699858800.jpg', NULL, NULL, NULL, 1, '2023-11-13 07:00:00', '2023-11-13 07:07:03'),
(7, 'Jinchu Art Website', 'jinchu-art-website', '7', '{\"tags\":[\"1\",\"4\"]}', '{\"technologies\":[\"3\",\"4\",\"5\",\"9\",\"11\",\"12\"]}', 'https://jinchuart.com/', 'Jinchu Art', 'Calicut', 'Artist, E-Commerce', 'Website Design & E-Commerce', 'Jinchu Art is a website we createted for a porfessional artist in Calicut. We created the website using wordpress &amp; Woo Commerce.', '1699869882.png', '1699869882.png', 'bnr1699869882.jpg', 'bnr1699869882.jpg', NULL, NULL, NULL, 6, '2023-11-13 10:04:42', '2023-11-13 10:04:42'),
(8, 'Aswaqs', 'aswaqs', '3', '{\"tags\":[\"1\",\"4\",\"6\"]}', '{\"technologies\":[\"3\",\"4\",\"5\",\"6\",\"9\",\"11\",\"12\"]}', 'https://aswaqs.com/', 'Aswaqs Electronics', 'Dubai', 'Electronics, Trading', 'Web Designing, Wordpress Development, E-commerce', 'Aswaqs is an online store specializes in smartphones, laptops, gaming PCs, and electronic devices.', '1700569949.png', '1700569949.png', 'bnr1700569780.jpg', 'bnr1700569780.jpg', NULL, NULL, NULL, 9, '2023-11-21 12:29:40', '2023-11-21 12:32:29'),
(9, 'Mavens Education', 'mavens-education', '3', '{\"tags\":[\"1\",\"4\"]}', '{\"technologies\":[\"3\",\"4\",\"5\",\"6\",\"9\",\"11\",\"12\"]}', NULL, 'Mavens Education', 'United Arab Emirates', 'Education', 'Web Designing, Wordpress Development', 'At Mavens, we believe that everyone deserves the opportunity to experience the world and gain a global perspective. Our team of experienced&nbsp;<a href=\"https://mavenseducation.com/\">overseas education consultants in Dubai</a>&nbsp;guides you every step of the way, from choosing the right program to navigating the application process.', '1700570448.png', '1700570448.png', 'bnr1700570448.jpg', 'bnr1700570448.jpg', NULL, NULL, NULL, 3, '2023-11-21 12:40:48', '2023-11-21 12:40:48');

-- --------------------------------------------------------

--
-- Table structure for table `project_category`
--

CREATE TABLE `project_category` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `priority` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_category`
--

INSERT INTO `project_category` (`id`, `parent_id`, `category`, `slug`, `priority`, `created_at`, `updated_at`) VALUES
(12, 0, 'Branding', 'branding', 5, '2023-11-23 06:35:25', '2023-11-23 06:35:25'),
(3, 0, 'Web', 'web', 1, '2023-04-11 06:38:29', '2023-04-11 06:38:29'),
(4, 3, 'CMS Website', 'cms-website', 5, '2023-04-11 06:38:55', '2023-04-11 06:38:55'),
(8, 3, 'Static', 'static', 20, '2023-04-11 06:43:13', '2023-04-11 06:43:13'),
(6, 3, 'Wordpress', 'wordpress', 10, '2023-04-11 06:39:20', '2023-04-11 06:39:20'),
(7, 3, 'E-Commerce', 'e-commerce', 15, '2023-04-11 06:40:04', '2023-04-11 06:40:04'),
(13, 0, 'Social Media', 'social-media', 10, '2023-11-23 06:35:34', '2023-11-23 06:35:34'),
(14, 0, 'SEO', 'seo', 15, '2023-11-23 06:35:47', '2023-11-23 06:35:47');

-- --------------------------------------------------------

--
-- Table structure for table `project_gallery`
--

CREATE TABLE `project_gallery` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `alt_tag` text NOT NULL,
  `priority` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_gallery`
--

INSERT INTO `project_gallery` (`id`, `project_id`, `title`, `image`, `alt_tag`, `priority`, `created_at`, `updated_at`) VALUES
(2, 4, 'Image 1', '1697193134.jpg', 'image-1', 10, '2023-10-13 10:32:14', '2023-10-13 10:32:14'),
(3, 4, 'Image 2', '1697193154.jpg', 'image-2', 12, '2023-10-13 10:32:34', '2023-10-13 10:32:34'),
(4, 5, 'Goldmine 1', '1699513092.jpg', 'image-1', 1, '2023-11-09 06:58:12', '2023-11-09 06:58:12'),
(5, 5, 'Goldmine 2', '1699513112.jpg', 'image-2', 2, '2023-11-09 06:58:32', '2023-11-09 06:58:32'),
(6, 6, 'Amal Website 3', '1699858875.jpg', 'amcs-image-3', 1, '2023-11-13 07:01:15', '2023-11-13 07:01:15'),
(8, 6, 'Amal Website 4', '1699859294.jpg', 'amcs-image-4', 2, '2023-11-13 07:08:14', '2023-11-13 07:08:14'),
(9, 7, 'Jinchu 3', '1699869946.jpg', 'jinchu-image-3', 1, '2023-11-13 10:05:46', '2023-11-13 10:05:46'),
(10, 7, 'Jinchu 3', '1699869963.jpg', 'jinchu-image-4', 2, '2023-11-13 10:06:03', '2023-11-13 10:06:03'),
(11, 8, 'Aswaqs Image 1', '1700569820.jpg', 'aswaq-1', 1, '2023-11-21 12:30:20', '2023-11-21 12:30:20'),
(12, 8, 'Aswaqs image 2', '1700569836.jpg', 'aswaq-2', 2, '2023-11-21 12:30:36', '2023-11-21 12:30:36'),
(13, 9, 'Mavens Website 1', '1700570468.jpg', 'mavens-1', 1, '2023-11-21 12:41:08', '2023-11-21 12:41:08'),
(14, 9, 'Mavens Website 2', '1700570483.jpg', 'mavens-2', 2, '2023-11-21 12:41:23', '2023-11-21 12:41:23');

-- --------------------------------------------------------

--
-- Table structure for table `project_tags`
--

CREATE TABLE `project_tags` (
  `id` int(11) NOT NULL,
  `tags` varchar(100) NOT NULL,
  `priority` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_tags`
--

INSERT INTO `project_tags` (`id`, `tags`, `priority`, `created_at`, `updated_at`) VALUES
(1, 'website', 1, '2023-05-02 07:40:46', '2023-05-02 07:40:46'),
(3, 'branding', 20, '2023-05-02 10:03:49', '2023-05-02 10:03:49'),
(4, 'wordpress', NULL, '2023-05-02 10:03:59', '2023-05-02 10:03:59'),
(5, 'social-media', NULL, '2023-05-02 10:04:30', '2023-05-02 10:04:30'),
(6, 'e-commerce', NULL, '2023-11-21 12:22:41', '2023-11-21 12:22:41');

-- --------------------------------------------------------

--
-- Table structure for table `project_technology`
--

CREATE TABLE `project_technology` (
  `id` int(11) NOT NULL,
  `technology` varchar(150) NOT NULL,
  `image` varchar(50) NOT NULL,
  `priority` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_technology`
--

INSERT INTO `project_technology` (`id`, `technology`, `image`, `priority`, `created_at`, `updated_at`) VALUES
(3, 'HTML', '1697192519.png', 1, '2023-10-13 10:21:59', '2023-10-13 10:21:59'),
(4, 'Wordpress', '1697192541.png', 5, '2023-10-13 10:22:21', '2023-10-13 10:22:21'),
(5, 'Photoshop', '1697192563.png', 2, '2023-10-13 10:22:43', '2023-10-13 10:22:43'),
(6, 'Illustrator', '1697192643.png', 3, '2023-10-13 10:24:03', '2023-10-13 10:24:03'),
(7, 'Figma', '1697192653.png', 6, '2023-10-13 10:24:13', '2023-10-13 10:24:13'),
(8, 'Bootstrap', '1697192680.png', 7, '2023-10-13 10:24:40', '2023-10-13 10:24:40'),
(9, 'Css', '1697192700.png', 8, '2023-10-13 10:25:00', '2023-10-13 10:25:00'),
(10, 'MySQL', '1697192736.png', 9, '2023-10-13 10:25:36', '2023-10-13 10:25:36'),
(11, 'JavaScript', '1697192760.png', 4, '2023-10-13 10:26:00', '2023-10-13 10:26:00'),
(12, 'PHP', '1697192777.png', 6, '2023-10-13 10:26:17', '2023-10-13 10:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `image` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `overview` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(5, 'Menegoz Technologies', 'superadmin@mentegoz.com', NULL, '$2y$10$XLu.0CUGSzWy7dqHCg6jrugcaWwU6ktf1b2D1M/3mHOPjx1zmllxK', NULL, '2023-05-22 23:31:37', '2023-05-22 23:31:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
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
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_category`
--
ALTER TABLE `project_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_gallery`
--
ALTER TABLE `project_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_tags`
--
ALTER TABLE `project_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_technology`
--
ALTER TABLE `project_technology`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
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
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `project_category`
--
ALTER TABLE `project_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `project_gallery`
--
ALTER TABLE `project_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `project_tags`
--
ALTER TABLE `project_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project_technology`
--
ALTER TABLE `project_technology`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
