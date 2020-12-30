-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 06:38 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bristol`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `submenu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aboutuses`
--

CREATE TABLE `aboutuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutuses`
--

INSERT INTO `aboutuses` (`id`, `heading`, `description`, `banner`, `created_at`, `updated_at`) VALUES
(3, 'Profile', '<p>skjdfhskjdfhkjsdhfksjfhksdf</p>', '15989813212-1600.jpg', '2020-09-01 17:28:42', '2020-09-02 02:13:21'),
(4, 'Director message', '<p>klsfjlkdsfhjskdhfkjshdfkjshfkshdfsdf</p>', '1262289140Best-Mobile-App-Development-tools.jpg', '2009-12-31 19:52:20', '2009-12-31 19:52:20');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` enum('admin','editor') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `phone`, `remember_token`, `created_at`, `updated_at`, `type`) VALUES
(1, 'Admin', 'gurusharangiri40@gmail.com', '2019-10-09 18:15:00', '$2y$10$CaWOSwY1GyT5mTgUWFlDhuq0I9mRMnE9R7.LE1KMr31p2PiWT0cW.', NULL, '456464564', NULL, NULL, '2020-07-18 16:38:16', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `heading`, `created_at`, `updated_at`) VALUES
(6, '1594880393slider1.jpg', 'slider1', '2020-07-16 06:19:53', '2020-07-16 06:19:53'),
(7, '1594881219slider2.png', 'image2', '2020-07-16 06:33:39', '2020-07-16 06:33:39'),
(8, '1599288536background-image-4.jpg', 'image3', '2020-09-05 06:48:58', '2020-09-05 06:48:58');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(2, '1575704952chemist-with-vials.jpg', 'Hello', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. <strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2019-12-07 07:49:13', '2019-12-07 07:49:13'),
(3, '1575704967134940_Research-Laboratory_iStock-516592247.jpg', 'hello2', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. <strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2019-12-07 07:49:27', '2019-12-07 07:49:27'),
(4, '157570498212.png', 'hello3', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. <strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2019-12-07 07:49:42', '2019-12-07 07:49:42');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enable',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coments`
--

CREATE TABLE `coments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coments`
--

INSERT INTO `coments` (`id`, `blog_id`, `name`, `comment`, `created_at`, `updated_at`) VALUES
(2, 3, 'hello', 'Its Important to know', '2019-12-13 07:06:00', '2019-12-13 07:06:00'),
(3, 3, 'sdfvsdf', 'sdfsdfsdfsd', '2019-12-13 08:34:04', '2019-12-13 08:34:04'),
(4, 4, 'Hello', 'hii', '2019-12-14 04:46:55', '2019-12-14 04:46:55');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `name`, `comment`, `created_at`, `updated_at`) VALUES
(1, 3, 'sdfvsdf', 'sdfsdfsdfsd', '2019-12-13 06:05:21', '2019-12-13 06:05:21');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('seen','unseen') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unseen',
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `Contact`, `message`, `created_at`, `updated_at`, `status`, `country`) VALUES
(6, 'guru Sharan Giri', 'gurusharangiri40@gmail.com', '9807632111', 'skjdfskfhskjfhksfdhk', '2020-08-04 10:59:34', '2020-08-04 10:59:34', 'unseen', 'Nepal');

-- --------------------------------------------------------

--
-- Table structure for table `featureds`
--

CREATE TABLE `featureds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `featureds`
--

INSERT INTO `featureds` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '1599282513.bristol.PNG', '2020-09-05 05:08:33', '2020-09-05 05:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `mobile`, `phone`, `email`, `facebook`, `twitter`, `insta`, `youtube`, `address`, `created_at`, `updated_at`) VALUES
(2, '3123456789', 'dslkfslkfhsdfklhskfjhskjfhskfh', 'support@email.com', 'asdfasdfas', 'sadfasdfasdfas', 'fasdfasdfasdfa', 'asdfasdfasdf', 'Ring Road,Biratnagar', '2019-12-07 08:35:28', '2020-09-05 07:42:05');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `created_at`, `updated_at`) VALUES
(2, '157597285712.png', '2019-12-10 10:14:18', '2019-12-10 10:14:18'),
(3, '1575972858134940_Research-Laboratory_iStock-516592247.jpg', '2019-12-10 10:14:18', '2019-12-10 10:14:18'),
(4, '15990160042-1600.jpg', '2020-09-02 03:06:45', '2020-09-02 03:06:45'),
(6, '159901600620-online-tools-to-convert-your-static-web-design-to-codes_55a667621c2cf_w1500.jpg', '2020-09-02 03:06:46', '2020-09-02 03:06:46');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `heading`, `description`, `banner`, `created_at`, `updated_at`) VALUES
(1, 'IELTSs', '<p>agf</p>', '159898153720-online-tools-to-convert-your-static-web-design-to-codes_55a667621c2cf_w1500.jpg', '2020-09-01 17:29:55', '2020-09-01 17:32:17');

-- --------------------------------------------------------

--
-- Table structure for table `headings`
--

CREATE TABLE `headings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfollio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `research` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ourteam` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `headings`
--

INSERT INTO `headings` (`id`, `service`, `portfollio`, `research`, `ourteam`, `blog`, `created_at`, `updated_at`) VALUES
(2, 'Separated they live in. A small river named Duden flows by their place and supplies it with the  necessary regelialia. It is a paradisematic country', 'Separated they live in. A small river named Duden flows by their place and supplies it with the  necessary regelialia. It is a paradisematic country', 'Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country', 'Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country', 'Separated they live in. A small river named Duden flows by their place and supplies it with the  necessary regelialia. It is a paradisematic country', '2019-12-15 06:25:59', '2019-12-15 06:31:29');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
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
(3, '2019_10_10_071106_create_admins_table', 1),
(4, '2019_10_10_144230_create_categories_table', 2),
(5, '2019_10_10_151456_create_subcats_table', 3),
(6, '2019_10_10_153400_create_categories_table', 4),
(7, '2019_10_10_153506_create_subcats_table', 5),
(8, '2019_10_10_154230_create_brands_table', 6),
(9, '2019_10_10_154635_add_image_to_brands', 7),
(10, '2019_10_10_173900_create_products_table', 8),
(11, '2019_10_10_193224_add_slug_to_products', 9),
(12, '2019_10_10_193934_add_name_to_products', 10),
(13, '2019_10_11_015957_create_productattributes_table', 11),
(14, '2019_10_11_135138_create_subcats_table', 12),
(15, '2019_10_11_154401_add_status_to_categories', 13),
(16, '2019_10_11_163802_create_galleries_table', 14),
(17, '2019_10_12_154345_add_eyes_to_productattributes', 15),
(18, '2019_10_12_163444_create_powers_table', 16),
(19, '2019_10_12_165112_add_power_to_productattributes', 17),
(20, '2019_10_13_121558_add_status_to_products', 18),
(21, '2019_10_17_124949_create_vacancyforms_table', 19),
(22, '2019_10_17_131840_create_contactpages_table', 20),
(23, '2019_10_17_134122_create_programs_table', 21),
(24, '2019_10_17_134316_create_footers_table', 22),
(25, '2019_10_17_134917_add_heading_to_footers', 23),
(26, '2019_10_17_135013_create_socials_table', 24),
(27, '2019_10_17_135110_create_sliders_table', 25),
(28, '2019_10_17_145609_create_touches_table', 26),
(29, '2019_10_17_145822_add_images_to_touches', 27),
(30, '2019_10_18_111903_create_services_table', 28),
(31, '2019_10_18_121216_create_galleries_table', 29),
(32, '2019_10_18_135137_add_others_to_vacancyforms', 30),
(33, '2019_10_18_234544_create_notices_table', 31),
(34, '2019_10_18_235012_create_downloads_table', 32),
(35, '2019_10_19_123322_create_documents_table', 33),
(36, '2019_10_19_124917_add_lavel_to_vacancyforms', 34),
(37, '2019_10_19_203939_add_status_to_vacancyforms', 35),
(38, '2019_10_20_004058_add_vouchar_to_vacancyforms', 36),
(39, '2019_10_20_111249_create_levels_table', 37),
(40, '2019_10_20_111415_create_sexes_table', 38),
(41, '2019_10_20_111501_create_districts_table', 39),
(42, '2019_10_20_111541_create_casts_table', 40),
(43, '2019_10_20_111616_create_maritalstatuses_table', 41),
(44, '2019_10_20_111654_create_religions_table', 42),
(45, '2019_10_20_111742_create_employments_table', 43),
(46, '2019_10_20_111815_create_motherlanguages_table', 44),
(47, '2019_10_20_111902_create_physicallies_table', 45),
(48, '2019_10_20_111945_create_fatheredus_table', 46),
(49, '2019_10_20_112107_create_motheredus_table', 47),
(50, '2019_10_20_112156_create_fatheroccus_table', 48),
(51, '2019_10_20_112240_create_aboutus_table', 49),
(52, '2019_10_21_183347_add_profile_to_vacancyforms', 50),
(53, '2019_10_25_074545_add_field_to_vacancyforms', 51),
(54, '2019_10_25_144607_add_type_to_admins', 52),
(55, '2019_11_19_124223_add_info_to_vacancyforms', 53),
(56, '2019_11_19_125159_add_jarimiti_to_vacancyforms', 54),
(57, '2019_11_19_152736_add_document_to_vacancyforms', 55),
(58, '2019_11_20_150350_create_popups_table', 56),
(59, '2019_11_20_150449_create_news_table', 56),
(60, '2019_11_20_152401_create_floats_table', 57),
(61, '2019_11_20_155508_create_dialogues_table', 58),
(62, '2019_11_20_173811_create_pages_table', 59),
(63, '2019_11_28_141851_create_abouts_table', 60),
(64, '2019_11_28_145824_create_shubhsaits_table', 61),
(65, '2019_11_28_150946_create_panchangs_table', 62),
(66, '2019_11_28_153246_create_contacts_table', 63),
(67, '2019_11_28_160729_add_bot_to_contacts', 64),
(68, '2019_11_28_161933_add_status_to_contacts', 65),
(69, '2019_11_28_163446_create_footers_table', 66),
(70, '2019_11_29_113013_create_bastus_table', 67),
(71, '2019_11_29_113256_create_dharmsastras_table', 67),
(72, '2019_11_29_113355_create_onlines_table', 68),
(73, '2019_11_29_113420_create_lekhs_table', 69),
(74, '2019_11_29_113446_create_prems_table', 70),
(75, '2019_11_29_113516_create_parbs_table', 71),
(76, '2019_11_29_113540_create_sewas_table', 72),
(77, '2019_11_29_120643_create_ratnas_table', 73),
(78, '2019_11_29_151959_create_rashis_table', 74),
(79, '2019_11_29_154018_create_dainiks_table', 75),
(80, '2019_11_29_155327_create_saptahiks_table', 76),
(81, '2019_11_29_155402_create_mashiks_table', 77),
(82, '2019_11_29_155428_create_barsiks_table', 78),
(83, '2019_11_29_170029_create_services_table', 79),
(84, '2019_12_01_120046_create_sewachetras_table', 80),
(85, '2019_12_01_121551_create_shubsaits_table', 81),
(86, '2019_12_03_154342_create_abouts_table', 82),
(87, '2019_12_03_154628_create_banners_table', 83),
(88, '2019_12_03_154818_create_whychooses_table', 84),
(89, '2019_12_03_155023_create_services_table', 85),
(90, '2019_12_03_161200_create_portfollios_table', 86),
(91, '2019_12_03_161335_create_researches_table', 87),
(92, '2019_12_03_161440_create_teams_table', 88),
(93, '2019_12_06_163121_create_blogs_table', 89),
(94, '2019_12_06_164619_create_footers_table', 90),
(95, '2019_12_07_103031_create_headings_table', 91),
(96, '2019_12_07_112144_create_categories_table', 92),
(97, '2019_12_07_112608_create_subcats_table', 93),
(98, '2019_12_07_130605_add_deg_to_teams', 94),
(99, '2019_12_07_134823_create_videos_table', 95),
(100, '2019_12_09_141125_create_pages_table', 96),
(101, '2019_12_10_150805_create_galleries_table', 97),
(102, '2019_12_10_151148_create_contacts_table', 98),
(103, '2019_12_10_152757_add_status_to_contacts', 99),
(104, '2019_12_13_113710_create_comments_table', 100),
(105, '2019_12_13_122750_create_coments_table', 101),
(106, '2020_07_16_135628_create_productcategories_table', 102),
(107, '2020_07_16_144406_create_productsubcats_table', 103),
(108, '2020_07_16_190800_create_products_table', 104),
(109, '2020_07_16_221207_add_productcode_to_products', 105),
(110, '2020_07_17_230806_create_proimages_table', 106),
(111, '2020_07_18_153622_add_country_to_contacts', 107),
(112, '2020_07_18_171805_create_quotes_table', 108),
(113, '2020_07_18_173420_add_message_to_quotes', 109),
(114, '2020_07_18_190423_add_status_to_quotes', 110),
(115, '2020_08_29_221029_create_provideheadings_table', 111),
(116, '2020_09_01_222025_create_aboutuses_table', 112),
(117, '2020_09_01_225544_create_classes_table', 113),
(118, '2020_09_01_230837_create_grades_table', 114),
(119, '2020_09_01_232406_create_registers_table', 115),
(120, '2010_01_01_001243_model', 116),
(121, '2010_01_01_001509_create_logos_table', 117),
(122, '2020_09_05_104115_create_featureds_table', 118),
(123, '2020_09_05_110228_create_shortnotices_table', 119);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page`, `category`, `subcat`, `created_at`, `updated_at`) VALUES
(1, '<div>\r\n<h2><span style=\"background-color:#c0392b\">Why do we use it??</span></h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n\r\n<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n\r\n<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n\r\n<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n\r\n<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n\r\n<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n\r\n<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n\r\n<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n\r\n<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n\r\n<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n\r\n<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>', 'About Us', 'Director Message', '2019-12-09 08:52:38', '2019-12-10 09:00:52'),
(3, '<p>&lt;div&gt;<br />\r\n&lt;p&gt;&lt;strong&gt;Lorem Ipsum&lt;/strong&gt; is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;<br />\r\n&lt;/div&gt;</p>\r\n\r\n<p>&lt;div&gt;<br />\r\n&lt;h2&gt;Why do we use it?&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &amp;#39;Content here, content here&amp;#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &amp;#39;lorem ipsum&amp;#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&lt;/p&gt;<br />\r\n&lt;/div&gt;</p>\r\n\r\n<p>&lt;div&gt;<br />\r\n&lt;p&gt;&lt;strong&gt;Lorem Ipsum&lt;/strong&gt; is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;<br />\r\n&lt;/div&gt;</p>\r\n\r\n<p>&lt;div&gt;<br />\r\n&lt;h2&gt;Why do we use it?&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &amp;#39;Content here, content here&amp;#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &amp;#39;lorem ipsum&amp;#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&lt;/p&gt;<br />\r\n&lt;/div&gt;</p>\r\n\r\n<p>&lt;div&gt;<br />\r\n&lt;p&gt;&lt;strong&gt;Lorem Ipsum&lt;/strong&gt; is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;<br />\r\n&lt;/div&gt;</p>\r\n\r\n<p>&lt;div&gt;<br />\r\n&lt;h2&gt;Why do we use it?&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &amp;#39;Content here, content here&amp;#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &amp;#39;lorem ipsum&amp;#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&lt;/p&gt;<br />\r\n&lt;/div&gt;</p>\r\n\r\n<p>&lt;div&gt;<br />\r\n&lt;p&gt;&lt;strong&gt;Lorem Ipsum&lt;/strong&gt; is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;<br />\r\n&lt;/div&gt;</p>\r\n\r\n<p>&lt;div&gt;<br />\r\n&lt;h2&gt;Why do we use it?&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &amp;#39;Content here, content here&amp;#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &amp;#39;lorem ipsum&amp;#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&lt;/p&gt;<br />\r\n&lt;/div&gt;</p>\r\n\r\n<p>&lt;div&gt;<br />\r\n&lt;p&gt;&lt;strong&gt;Lorem Ipsum&lt;/strong&gt; is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;<br />\r\n&lt;/div&gt;</p>\r\n\r\n<p>&lt;div&gt;<br />\r\n&lt;h2&gt;Why do we use it?&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &amp;#39;Content here, content here&amp;#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &amp;#39;lorem ipsum&amp;#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&lt;/p&gt;<br />\r\n&lt;/div&gt;</p>\r\n\r\n<p>&lt;div&gt;<br />\r\n&lt;p&gt;&lt;strong&gt;Lorem Ipsum&lt;/strong&gt; is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;<br />\r\n&lt;/div&gt;</p>\r\n\r\n<p>&lt;div&gt;<br />\r\n&lt;h2&gt;Why do we use it?&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &amp;#39;Content here, content here&amp;#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &amp;#39;lorem ipsum&amp;#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&lt;/p&gt;<br />\r\n&lt;/div&gt;</p>\r\n\r\n<p>&lt;div&gt;<br />\r\n&lt;p&gt;&lt;strong&gt;Lorem Ipsum&lt;/strong&gt; is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;<br />\r\n&lt;/div&gt;</p>\r\n\r\n<p>&lt;div&gt;<br />\r\n&lt;h2&gt;Why do we use it?&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &amp;#39;Content here, content here&amp;#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &amp;#39;lorem ipsum&amp;#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&lt;/p&gt;<br />\r\n&lt;/div&gt;</p>\r\n\r\n<p>&lt;div&gt;<br />\r\n&lt;p&gt;&lt;strong&gt;Lorem Ipsum&lt;/strong&gt; is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;<br />\r\n&lt;/div&gt;</p>\r\n\r\n<p>&lt;div&gt;<br />\r\n&lt;h2&gt;Why do we use it?&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &amp;#39;Content here, content here&amp;#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &amp;#39;lorem ipsum&amp;#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&lt;/p&gt;<br />\r\n&lt;/div&gt;</p>\r\n\r\n<p>&lt;div&gt;<br />\r\n&lt;p&gt;&lt;strong&gt;Lorem Ipsum&lt;/strong&gt; is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;<br />\r\n&lt;/div&gt;</p>\r\n\r\n<p>&lt;div&gt;<br />\r\n&lt;h2&gt;Why do we use it?&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &amp;#39;Content here, content here&amp;#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &amp;#39;lorem ipsum&amp;#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&lt;/p&gt;<br />\r\n&lt;/div&gt;</p>\r\n\r\n<p>&lt;div&gt;<br />\r\n&lt;p&gt;&lt;strong&gt;Lorem Ipsum&lt;/strong&gt; is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;<br />\r\n&lt;/div&gt;</p>\r\n\r\n<p>&lt;div&gt;<br />\r\n&lt;h2&gt;Why do we use it?&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &amp;#39;Content here, content here&amp;#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &amp;#39;lorem ipsum&amp;#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&lt;/p&gt;<br />\r\n&lt;/div&gt;</p>\r\n\r\n<p>&lt;div&gt;<br />\r\n&lt;p&gt;&lt;strong&gt;Lorem Ipsum&lt;/strong&gt; is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;<br />\r\n&lt;/div&gt;</p>\r\n\r\n<p>&lt;div&gt;<br />\r\n&lt;h2&gt;Why do we use it?&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &amp;#39;Content here, content here&amp;#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &amp;#39;lorem ipsum&amp;#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&lt;/p&gt;<br />\r\n&lt;/div&gt;</p>', 'Project', 'Small select', '2019-12-10 08:45:23', '2019-12-10 08:45:23'),
(4, '<div>\r\n<p><strong>Lore</strong><strong>m Ipsum</strong> is simply dummy t<img alt=\"\" src=\"/seednano/public/ckeditor/kcfinder/upload/images/hello.jpg\" style=\"float:left; height:149px; width:500px\" />ext of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n\r\n<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n\r\n<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n\r\n<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n\r\n<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n\r\n<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n\r\n<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>', 'Resources', 'Publication 1', '2019-12-13 09:30:55', '2019-12-13 09:30:55'),
(5, '<div>\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n\r\n<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n\r\n<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n\r\n<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n\r\n<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<hr />\r\n<p>&nbsp;</p>\r\n</div>', 'Resources', 'Publication 1', '2019-12-13 09:43:43', '2019-12-13 09:48:01');
INSERT INTO `pages` (`id`, `page`, `category`, `subcat`, `created_at`, `updated_at`) VALUES
(6, '<h1 style=\"text-align:center\"><img alt=\"\" src=\"/seednano/public/ckeditor/kcfinder/upload/images/web.jpg\" style=\"float:left; height:351px; width:500px\" /><span style=\"font-size:24px\"><u><span style=\"color:#000033\"><strong>WEB DEVELOPMENT</strong></span></u></span></h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Singlepage Website</strong></p>\r\n\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Multi Page Website</strong></p>\r\n\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Website Redesign</strong></p>\r\n\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bootstrap Website</strong></p>\r\n\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Web Portals</strong></p>\r\n\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Wordpress Website</strong></p>\r\n\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-size:20px\"> </span></strong><span style=\"font-size:20px\"><a href=\"http://localhost/seednano\">view price list</a></span></p>\r\n\r\n<ul>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n</ul>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<pre>\r\n<span style=\"background-color:#efefef\">\r\n</span></pre>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"/seednano/public/ckeditor/kcfinder/upload/images/web.jpg\" style=\"float:right; height:308px; width:442px\" /></p>\r\n\r\n<h1 style=\"text-align:center\"><span style=\"font-size:24px\"><u><span style=\"color:#000033\"><strong>WEB DEVELOPMENT</strong></span></u></span></h1>\r\n\r\n<p style=\"text-align:center\">&nbsp;&nbsp;&nbsp; <strong>Singlepage Website</strong></p>\r\n\r\n<p style=\"text-align:center\"><strong>&nbsp;&nbsp;&nbsp;&nbsp; Multi Page Website</strong></p>\r\n\r\n<p style=\"text-align:center\"><strong>&nbsp;&nbsp;&nbsp; Website Redesign</strong></p>\r\n\r\n<p style=\"text-align:center\"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bootstrap Website</strong></p>\r\n\r\n<p style=\"text-align:center\"><strong>Web Portals</strong></p>\r\n\r\n<p style=\"text-align:center\"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Wordpress Website</strong></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/seednano/public/ckeditor/kcfinder/upload/images/web.jpg\" style=\"float:left; height:381px; width:509px\" /></p>\r\n\r\n<h1 style=\"text-align:center\"><span style=\"font-size:24px\"><u><span style=\"color:#000033\"><strong>WEB DEVELOPMENT</strong></span></u></span></h1>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp; <strong>Singlepage Website</strong></p>\r\n\r\n<p style=\"text-align:center\"><strong>&nbsp;&nbsp;&nbsp;&nbsp; Multi Page Website</strong></p>\r\n\r\n<p style=\"text-align:center\"><strong>&nbsp;&nbsp; Website Redesign</strong></p>\r\n\r\n<p style=\"text-align:center\"><strong>&nbsp;&nbsp;&nbsp;&nbsp; Bootstrap Website</strong></p>\r\n\r\n<p style=\"text-align:center\"><strong>Web Portals</strong></p>\r\n\r\n<p style=\"text-align:center\"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Wordpress Website</strong></p>', 'Work', 'Digital Market', '2019-12-14 06:40:27', '2019-12-14 07:19:21'),
(7, '<p>ksdihfeifhvbfrbewiewiorkefhsdkjfhksdjfdf</p>', 'About Us', 'Chairman Message', '2020-08-05 08:51:01', '2020-08-05 08:51:01');

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
-- Table structure for table `portfollios`
--

CREATE TABLE `portfollios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfollios`
--

INSERT INTO `portfollios` (`id`, `image`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(10, '1598681262Australia.jpg', 'Australia', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2020-08-29 06:07:43', '2020-08-29 06:07:43'),
(11, '1598715596Best-Mobile-App-Development-tools.jpg', 'Canada', '<p>sajkdhkasdhaskjdahskdjahskdjahsdkjashdkasjd askjdhakjsdhaksjdhaskd askjdhaskdjadkha asjkdahsdkjadhaksdjasdh askjdhasdkjadhkajddh kajsdahdkjadhkajdhakas akjdshaskjdashdk</p>\r\n\r\n<p>sajkdhkasdhaskjdahskdjahskdjahsdkjashdkasjd askjdhakjsdhaksjdhaskd askjdhaskdjadkha asjkdahsdkjadhaksdjasdh askjdhasdkjadhkajddh kajsdahdkjadhkajdhakas akjdshaskjdashdk</p>\r\n\r\n<p>sajkdhkasdhaskjdahskdjahskdjahsdkjashdkasjd askjdhakjsdhaksjdhaskd askjdhaskdjadkha asjkdahsdkjadhaksdjasdh askjdhasdkjadhkajddh kajsdahdkjadhkajdhakas akjdshaskjdashdk</p>\r\n\r\n<p>sajkdhkasdhaskjdahskdjahskdjahsdkjashdkasjd askjdhakjsdhaksjdhaskd askjdhaskdjadkha asjkdahsdkjadhaksdjasdh askjdhasdkjadhkajddh kajsdahdkjadhkajdhakas akjdshaskjdashdk</p>', '2020-08-29 15:39:56', '2020-08-29 15:39:56');

-- --------------------------------------------------------

--
-- Table structure for table `productcategories`
--

CREATE TABLE `productcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enable',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productcategories`
--

INSERT INTO `productcategories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Test', 'test', 'enable', '2020-07-16 11:54:34', '2020-07-16 11:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `features` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `productcategory_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `productsubcat_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `features`, `productcategory_name`, `productsubcat_id`, `created_at`, `updated_at`, `product_code`) VALUES
(2, 'hello 1 23', '<p>Some quick example text to build on the card title and make up the.</p>', '1595060575unnamed.png', '<p>Some quick example text to build on the card title and make up the.</p>', 'Test', 2, '2020-07-18 08:22:55', '2020-07-18 08:22:55', '123-product1'),
(4, 'hello', '<p>sdkfjsdkfjsd</p>', '1595068374android.PNG', '<p>;ldfkjlskdjflksdjfs</p>', 'Test', 2, '2020-07-18 10:32:54', '2020-07-18 10:32:54', '124-hello'),
(5, 'product1', '<p>dfsdfsdfsdf</p>', '159506919371IaX1SHVuL._AC_SL1000_.jpg', '<p>ssfsdfsdfsdf</p>', 'Test', 4, '2020-07-18 10:46:33', '2020-07-18 10:46:33', '123product');

-- --------------------------------------------------------

--
-- Table structure for table `productsubcats`
--

CREATE TABLE `productsubcats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productcategory_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productcategory_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productsubcats`
--

INSERT INTO `productsubcats` (`id`, `productcategory_id`, `name`, `productcategory_name`, `slug`, `created_at`, `updated_at`) VALUES
(2, 2, 'hello', 'Test', 'hello', '2020-07-16 16:23:51', '2020-07-16 16:23:51'),
(3, 2, 'hello2', 'Test', 'hello2', '2020-07-18 10:33:44', '2020-07-18 10:33:44'),
(4, 2, 'hello3', 'Test', 'hello3', '2020-07-18 10:33:54', '2020-07-18 10:33:54');

-- --------------------------------------------------------

--
-- Table structure for table `proimages`
--

CREATE TABLE `proimages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proimages`
--

INSERT INTO `proimages` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(4, 2, '1595060601_109256824_dji-dron1.jpg', '2020-07-18 08:23:21', '2020-07-18 08:23:21'),
(5, 2, '159506060120-online-tools-to-convert-your-static-web-design-to-codes_55a667621c2cf_w1500.jpg', '2020-07-18 08:23:22', '2020-07-18 08:23:22'),
(6, 2, '159506060271IaX1SHVuL._AC_SL1000_.jpg', '2020-07-18 08:23:22', '2020-07-18 08:23:22');

-- --------------------------------------------------------

--
-- Table structure for table `provideheadings`
--

CREATE TABLE `provideheadings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Shortdes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provideheadings`
--

INSERT INTO `provideheadings` (`id`, `Shortdes`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a pi classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,', '1598719940standing.jpg', NULL, '2020-08-29 16:52:20');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('seen','unseen') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unseen'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `product_name`, `name`, `email`, `city`, `country`, `phone_number`, `created_at`, `updated_at`, `message`, `status`) VALUES
(1, 'product1', 'Guru', 'gurusharangiri40@gmail.com', 'Biratnagar', 'NEPAL', NULL, '2020-07-18 13:10:59', '2020-07-18 14:00:18', 'siadjahdakjhdkahds', 'seen');

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('seen','unseen') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unseen'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `name`, `email`, `phone`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Guru Sharan', 'gurusharangiri40@gmail.com', '9801881002', '2020-09-01 17:49:55', '2020-09-02 01:28:30', 'seen'),
(3, 'dsfsdfsd', 'sdfsd@dsfsdf', '6465465456', '2020-09-05 09:02:06', '2020-09-05 09:02:06', 'unseen');

-- --------------------------------------------------------

--
-- Table structure for table `researches`
--

CREATE TABLE `researches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `researches`
--

INSERT INTO `researches` (`id`, `image`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(6, '1598682461main-qimg-493e590e6de1ba428129f12dff528b88.png', 'Cambridge', '<p>askdfjlskjflksjflksdjflksdfjs&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;kjdsflksdjflskfjlskfjlskfjlskfjslkfjlskjflskjfslkjflsjfksfsfd</p>\r\n\r\n<p>askdfjlskjflksjflksdjflksdfjs&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;kjdsflksdjflskfjlskfjlskfjlskfjslkfjlskjflskjfslkjflsjfksfsfd</p>\r\n\r\n<p>askdfjlskjflksjflksdjflksdfjs&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;kjdsflksdjflskfjlskfjlskfjlskfjslkfjlskjflskjfslkjflsjfksfsfd</p>\r\n\r\n<p>askdfjlskjflksjflksdjflksdfjs&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;kjdsflksdjflskfjlskfjlskfjlskfjslkfjlskjflskjfslkjflsjfksfsfdaskdfjlskjflksjflksdjflksdfjs&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;kjdsflksdjflskfjlskfjlskfjlskfjslkfjlskjflskjfslkjflsjfksfsfdaskdfjlskjflksjflksdjflksdfjs&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;kjdsflksdjflskfjlskfjlskfjlskfjslkfjlskjflskjfslkjflsjfksfsfd</p>', '2020-08-29 06:27:41', '2020-08-29 06:27:41');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(6, '1598684027standing.jpg', 'Test', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incDuis aute irure dolor in reprehenderit in velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in omnis iste natus error sit voluptatem accusantiu.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incDuis aute irure dolor in reprehenderit in velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in omnis iste natus error sit voluptatem accusantiu.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incDuis aute irure dolor in reprehenderit in velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in omnis iste natus error sit voluptatem accusantiu.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incDuis aute irure dolor in reprehenderit in velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in omnis iste natus error sit voluptatem accusantiu.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incDuis aute irure dolor in reprehenderit in velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in omnis iste natus error sit voluptatem accusantiu.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incDuis aute irure dolor in reprehenderit in velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in omnis iste natus error sit voluptatem accusantiu.</p>', '2020-08-29 06:53:47', '2020-08-29 06:53:47'),
(7, '1599288173mission.PNG', 'Test-1', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incDuis aute irure dolor in reprehenderit in velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in omnis iste natus error sit voluptatem accusantiu.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incDuis aute irure dolor in reprehenderit in velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in omnis iste natus error sit voluptatem accusantiu.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incDuis aute irure dolor in reprehenderit in velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in omnis iste natus error sit voluptatem accusantiu.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incDuis aute irure dolor in reprehenderit in velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in omnis iste natus error sit voluptatem accusantiu.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incDuis aute irure dolor in reprehenderit in velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in omnis iste natus error sit voluptatem accusantiu.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incDuis aute irure dolor in reprehenderit in velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in omnis iste natus error sit voluptatem accusantiu.</p>', '2020-09-05 06:42:54', '2020-09-05 09:01:36');

-- --------------------------------------------------------

--
-- Table structure for table `shortnotices`
--

CREATE TABLE `shortnotices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `heading2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shortnotices`
--

INSERT INTO `shortnotices` (`id`, `heading1`, `description1`, `created_at`, `updated_at`, `heading2`, `description2`, `heading3`, `description3`, `heading4`, `description4`, `status`) VALUES
(1, 'hello1', 'dsjfhsdkjfhksfhksdf', NULL, '2020-09-05 08:48:22', 'hello2', 'kjsdhkjsdhjshdjasd', 'hello3', 'ejhghjhdhsdjhsgda', 'hello4', 'sdsfdfsdfsdfsfsdfsdfsdf', '<p>Sunday-Friday&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;10:00 AM - 6:00 PM</p>\r\n\r\n<p>Saturday&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; close</p>');

-- --------------------------------------------------------

--
-- Table structure for table `subcats`
--

CREATE TABLE `subcats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `image`, `heading`, `description`, `created_at`, `updated_at`, `designation`) VALUES
(5, '1598779040standing.jpg', 'Ram', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2020-08-30 09:17:20', '2020-08-30 09:17:20', 'Engineer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Demo', 'demo@email.com', NULL, '$2y$10$orrFltt8ef.7K8ZOY5D5ruAtbbxA3uEgYb8Jr.t0w0O83MSiPuP6q', NULL, '2019-10-14 06:41:16', '2019-10-14 06:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video`, `created_at`, `updated_at`) VALUES
(2, 'https://www.youtube.com/embed/7sRpZhDBOIM', '2019-12-07 08:19:15', '2019-12-07 08:19:15');

-- --------------------------------------------------------

--
-- Table structure for table `whychooses`
--

CREATE TABLE `whychooses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `submenu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whychooses`
--

INSERT INTO `whychooses` (`id`, `submenu`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(3, '1598684295standing.jpg', 'Test', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incDuis aute irure dolor in reprehenderit in velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in omnis iste natus error sit voluptatem accusantiu.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incDuis aute irure dolor in reprehenderit in velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in omnis iste natus error sit voluptatem accusantiu.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incDuis aute irure dolor in reprehenderit in velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in omnis iste natus error sit voluptatem accusantiu.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incDuis aute irure dolor in reprehenderit in velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in omnis iste natus error sit voluptatem accusantiu.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incDuis aute irure dolor in reprehenderit in velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in omnis iste natus error sit voluptatem accusantiu.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incDuis aute irure dolor in reprehenderit in velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in omnis iste natus error sit voluptatem accusantiu.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incDuis aute irure dolor in reprehenderit in velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in omnis iste natus error sit voluptatem accusantiu.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incDuis aute irure dolor in reprehenderit in velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in omnis iste natus error sit voluptatem accusantiu.</p>', '2020-08-29 06:58:15', '2020-08-29 06:58:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutuses`
--
ALTER TABLE `aboutuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coments`
--
ALTER TABLE `coments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featureds`
--
ALTER TABLE `featureds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headings`
--
ALTER TABLE `headings`
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
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `portfollios`
--
ALTER TABLE `portfollios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productcategories`
--
ALTER TABLE `productcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_productsubcat_id_index` (`productsubcat_id`);

--
-- Indexes for table `productsubcats`
--
ALTER TABLE `productsubcats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productsubcats_productcategory_id_index` (`productcategory_id`);

--
-- Indexes for table `proimages`
--
ALTER TABLE `proimages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proimages_product_id_index` (`product_id`);

--
-- Indexes for table `provideheadings`
--
ALTER TABLE `provideheadings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `researches`
--
ALTER TABLE `researches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shortnotices`
--
ALTER TABLE `shortnotices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcats`
--
ALTER TABLE `subcats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcats_category_id_index` (`category_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whychooses`
--
ALTER TABLE `whychooses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aboutuses`
--
ALTER TABLE `aboutuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coments`
--
ALTER TABLE `coments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `featureds`
--
ALTER TABLE `featureds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `headings`
--
ALTER TABLE `headings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `portfollios`
--
ALTER TABLE `portfollios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `productcategories`
--
ALTER TABLE `productcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `productsubcats`
--
ALTER TABLE `productsubcats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `proimages`
--
ALTER TABLE `proimages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `provideheadings`
--
ALTER TABLE `provideheadings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `researches`
--
ALTER TABLE `researches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `shortnotices`
--
ALTER TABLE `shortnotices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subcats`
--
ALTER TABLE `subcats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `whychooses`
--
ALTER TABLE `whychooses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_productsubcat_id_foreign` FOREIGN KEY (`productsubcat_id`) REFERENCES `productsubcats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `productsubcats`
--
ALTER TABLE `productsubcats`
  ADD CONSTRAINT `productsubcats_productcategory_id_foreign` FOREIGN KEY (`productcategory_id`) REFERENCES `productcategories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `proimages`
--
ALTER TABLE `proimages`
  ADD CONSTRAINT `proimages_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcats`
--
ALTER TABLE `subcats`
  ADD CONSTRAINT `subcats_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
