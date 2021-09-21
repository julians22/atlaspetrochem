-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 21 Sep 2021 pada 00.19
-- Versi server: 8.0.26
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_atlaspetrochem`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about_contents`
--

CREATE TABLE `about_contents` (
  `id` bigint UNSIGNED NOT NULL,
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumb_location` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `thumb_text` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_image_location` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `about_contents`
--

INSERT INTO `about_contents` (`id`, `key`, `title`, `thumb_location`, `content`, `created_at`, `updated_at`, `thumb_text`, `featured_image_location`) VALUES
(1, 'key-1', 'Sejarah Perusahaan', 'http://atlaspetrochem.democube.id//storage/photos/shares/about/Sejarah Perusahaan 450x500.jpg', '<p class=\"MsoNormal\"><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\">PT. </span></span></span><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\">Atlas Petrochem Indo yang bergerak dibidang distributor Pelumas Industri dan Retail Otomotif Merk IDEMITSU. </span></span></span><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\">Kami merupakan distributor dari produk tersebut di Indonesia. </span></span></span><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\">Berdiri sejak tahun 1996, Kami sudah memiliki 32 titik Distribution Center dari 34 provinsi di Indonesia. </span></span></span><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\">Statistik Penjualan &amp; Aktivitas Penjualan dikelola langsung dari Kami secara profesional.</span></span></span></span></p>', '2021-04-05 09:10:41', '2021-07-30 11:13:41', 'Distributor terpercaya sejak tahun 1996', 'http://atlaspetrochem.democube.id//storage/photos/1/COMPANY - BACKGROUND.jpg'),
(2, 'key-3', 'Customer Priority', 'http://atlaspetrochem.democube.id//storage/photos/shares/about/Customer Priority 450x500.jpg', '<p><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\">Dengan prioritas selalu mengutamakan Customer, Kami akan selalu memberikan pelayanan After Sales dengan optimal. Mulai dari memberikan uji coba kepada customer, support cek laboratorium, melakukan pengurasan terhadap mesin, seminar seputar pelumas, dan lain sebagainya.</span></span></p>', '2021-04-05 09:20:01', '2021-07-28 13:11:21', 'Pelayanan terbaik melalui aktivitas After Sales Service', 'http://atlaspetrochem.democube.id//storage/photos/1/ABOUT - P3 CUST. PRIORITY.jpg'),
(3, 'key-2', 'Sistem Perusahaan', 'http://atlaspetrochem.democube.id//storage/photos/1/HOME - PU-SYSTEM PERUSAHAAN 450x500.jpg', '<p><span style=\"vertical-align: inherit;\">Dengan tersebarnya </span><span style=\"vertical-align: inherit;\">32 titik Pusat Distribusi dari 34 provinsi di Indonesia, maka Kami menggunakan dukungan sistem yang terintegrasi dalam setiap divisi/departemen. Hal ini memudahkan proses monitoring Kami mulai dari persiapan/packing barang, proses pengiriman, hingga analisa penjualan, sehingga Kami bisa melakukan banyak improvisasi untuk proses yang lebih baik.</span></p>\r\n<p class=\"MsoNormal\">&nbsp;</p>', '2021-04-05 09:30:59', '2021-07-30 11:13:57', 'Terintegrasi dengan dukungan sistem yang memadai', 'http://atlaspetrochem.democube.id//storage/photos/1/ABOUT - P2 SISTEM INTEGRASI.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `application_jobs`
--

CREATE TABLE `application_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `career_id` bigint NOT NULL,
  `name` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `resume_location` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `application_jobs`
--

INSERT INTO `application_jobs` (`id`, `career_id`, `name`, `email`, `gender`, `phone`, `message`, `resume_location`, `created_at`, `updated_at`) VALUES
(1, 2, 'Dean Abner Julian', 'dabnerjulian@yahoo.com', 'male', '+628121856261', 'Please Hire Me!!!', NULL, '2021-03-12 07:47:03', '2021-03-12 07:47:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner_per_pages`
--

CREATE TABLE `banner_per_pages` (
  `id` bigint UNSIGNED NOT NULL,
  `key` char(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_location_desktop` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_location_mobile` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `banner_per_pages`
--

INSERT INTO `banner_per_pages` (`id`, `key`, `image_location_desktop`, `image_location_mobile`, `created_at`, `updated_at`) VALUES
(1, 'about-banner', 'http://atlaspetrochem.democube.id//storage/photos/1/ABOUT - BANNER.jpg', NULL, '2021-04-22 14:55:59', '2021-07-28 13:13:35'),
(2, 'news-banner', 'http://atlaspetrochem.democube.id//storage/photos/1/NEWS - BANNER 2.jpg', NULL, '2021-04-22 14:55:59', '2021-07-28 13:13:50'),
(3, 'news-show-banner', 'http://atlaspetrochem.democube.id//storage/photos/1/NEWS - BANNER.jpg', NULL, '2021-04-22 14:55:59', '2021-07-28 13:14:05'),
(4, 'galery-banner', 'http://atlaspetrochem.democube.id//storage/photos/1/GALLERY - BANNER.jpg', NULL, '2021-04-22 14:55:59', '2021-07-28 13:14:15'),
(5, 'careers-banner', 'http://atlaspetrochem.democube.id//storage/photos/1/CAREERS - BANNER.jpg', NULL, '2021-04-22 14:55:59', '2021-07-28 13:14:29'),
(6, 'careers-show-banner', 'http://atlaspetrochem.democube.id//storage/photos/1/CAREERS - BANNER IN.jpg', NULL, '2021-04-22 14:55:59', '2021-07-28 13:14:39'),
(7, 'category-product-banner', 'http://atlaspetrochem.democube.id//storage/photos/1/PRODUCT - BANNER IND.jpg', NULL, '2021-04-27 05:08:13', '2021-07-28 12:54:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner_slider`
--

CREATE TABLE `banner_slider` (
  `id` bigint UNSIGNED NOT NULL,
  `image_location` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `overlay_level` enum('0','1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `title` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `linked` tinyint(1) NOT NULL DEFAULT '0',
  `linked_location` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` smallint NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `banner_slider`
--

INSERT INTO `banner_slider` (`id`, `image_location`, `active`, `deleted_at`, `created_at`, `updated_at`, `overlay_level`, `title`, `description`, `linked`, `linked_location`, `sort`) VALUES
(1, 'http://atlaspetrochem.democube.id//storage/photos/1/SAVE_20210324_102034.jpg', 1, NULL, '2021-02-23 02:51:36', '2021-07-28 13:19:25', '2', '25 Tahun Pengalaman', 'Berdiri sejak 1996 sebagai distributor pelumas, Kami dipercaya selama bertahun-tahun sebagai penyedia pelumas untuk berbagai kalangan Industrial maupun Retail Automotif di Indonesia', 1, 'http://atlaspetrochem.democube.id/company', 1),
(4, 'http://atlaspetrochem.democube.id//storage/photos/shares/gudang.jpg', 1, NULL, '2021-03-23 07:10:05', '2021-07-28 12:42:10', '2', 'Safe Handling and Storage', NULL, 0, NULL, 2),
(2, 'https://atlaspetrochem.julian.app-show.net//storage/photos/shares/lobby2.jpg', 0, '2021-04-19 03:52:17', '2021-02-23 03:34:55', '2021-04-19 03:52:17', '0', 'Your Trusted Lubricant Distributor', NULL, 0, NULL, 0),
(3, 'https://atlaspetrochem.julian.app-show.net//storage/photos/shares/room1.jpg', 0, '2021-04-19 03:52:12', '2021-03-23 06:40:47', '2021-04-19 03:52:12', '1', NULL, NULL, 0, NULL, 0),
(5, 'http://atlaspetrochem.democube.id//storage/photos/shares/aftersales.jpg', 1, NULL, '2021-03-23 07:27:21', '2021-07-28 12:42:25', '2', 'After Sales Service Activity', NULL, 0, NULL, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `careers`
--

CREATE TABLE `careers` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_desk` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `requirements` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `careers`
--

INSERT INTO `careers` (`id`, `uuid`, `position`, `job_desk`, `requirements`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '727e445a-ab86-4e0e-b7b1-54c9965a0e4d', 'OPERATIONAL DIRECTOR', 'An operational director, according to the title, lends a helping hand to the vice president in his day to day tasks. It is thus very important for him to understand his work and the work of vice president as well.', '<p></p><p class=\"MsoNoSpacing\"><span lang=\"IN\" style=\"font-family:\" tahoma\",sans-serif;mso-ansi-language:in\"=\"\"><b>Responsibilities: </b><o:p></o:p></span></p><p style=\"\"><span lang=\"IN\" style=\"\" tahoma\",sans-serif\"=\"\">An operational director, according to the title, lends a\r\nhelping hand to the vice president in his day to day tasks. It is thus very\r\nimportant for him to understand his work and the work of vice president as\r\nwell. <o:p></o:p></span></p><p style=\"\"><span lang=\"IN\" style=\"\" tahoma\",sans-serif\"=\"\">An operational director is accountable for handling\r\nvarious tasks simultaneously on a routine business day. He is involved in the\r\ndevelopment of new policies and programs, staffing and training process,\r\nsupervision of subordinates, research, preparation of presentation and reports,\r\netc. Being at a relatively higher position in the hierarchy, he has to coordinate\r\nand communicate with a large number of people to be aware of the progress in\r\nthe departmental and organizational activities. <o:p></o:p></span></p><p style=\"\"><span lang=\"IN\" style=\"\" tahoma\",sans-serif\"=\"\">Operational Director has to execute all the tasks with a\r\nvision for perfection. He must know how to manage people and budgets in the\r\norganization and earn maximum profits through minimum investment of labor and\r\nfinance. He has to initiate various projects on behalf of the vice president\r\nand organization and maintain effective relations with the various external\r\nagencies. <o:p></o:p></span></p><p style=\"\"><span lang=\"IN\" style=\"\" tahoma\",sans-serif\"=\"\">Operational Director responsibilities, in short, can be\r\ndescribed as a combination of administration, leadership and support that\r\nenables proper functioning of the organization</span><span lang=\"IN\">. <o:p></o:p></span></p><p class=\"MsoNoSpacing\"><span lang=\"IN\" style=\"font-family:\" tahoma\",sans-serif;mso-ansi-language:in\"=\"\"><b>Job description:</b><o:p></o:p></span></p><p class=\"MsoNoSpacing\"><span lang=\"IN\" style=\"font-size: 0.875rem;\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;\r\n</span></span><span lang=\"IN\" tahoma\",sans-serif;=\"\" mso-ansi-language:in\"=\"\" style=\"font-size: 0.875rem;\">Formulation of Strategies and Policies<br><span lang=\"IN\" style=\"font-size: 0.875rem;\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;\r\n</span></span><span lang=\"IN\" tahoma\",sans-serif;=\"\" mso-ansi-language:in\"=\"\" style=\"font-size: 0.875rem;\">Arrangement and allocation of Funds and Resources<br></span></span><span lang=\"IN\" style=\"font-size: 0.875rem;\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;\r\n</span></span><span lang=\"IN\" tahoma\",sans-serif;=\"\" mso-ansi-language:in\"=\"\" style=\"font-size: 0.875rem;\">Supervision of People and Processes</span></p><p class=\"MsoNoSpacing\"><span style=\"font-size: 0.875rem;\"><b>Qualification:</b></span></p><ul><li><span style=\"font-family:\" tahoma\",sans-serif\"=\"\">Min.\r\n3 years experiences as an </span><span lang=\"IN\" style=\"font-family:\" tahoma\",sans-serif;=\"\" mso-ansi-language:in\"=\"\">Operational Director</span><span style=\"font-family:\" tahoma\",sans-serif\"=\"\">,\r\nwith preference from FMCG or Lubricant Sector and experience in </span><span lang=\"IN\" style=\"font-family:\" tahoma\",sans-serif;mso-ansi-language:in\"=\"\">project\r\nmanagemant and handling a large team.</span><span style=\"font-family:\" tahoma\",sans-serif\"=\"\"><o:p></o:p></span></li><li><span lang=\"IN\" style=\"font-family:\" tahoma\",sans-serif;=\"\" mso-ansi-language:in\"=\"\">Energetic, confident, positive thinking, can balance\r\nvarious task and deliver outstanding results,</span><span lang=\"IN\" style=\"font-family:\" tahoma\",sans-serif\"=\"\"> </span><span lang=\"IN\" style=\"font-family:\r\n\" tahoma\",sans-serif;mso-ansi-language:in\"=\"\">excellent </span><span style=\"font-family:\" tahoma\",sans-serif\"=\"\">communication and interpersonal skills.<o:p></o:p></span></li><li><span style=\"font-family:\" tahoma\",sans-serif\"=\"\">Graduated\r\nin any discipline (S</span><span lang=\"IN\" style=\"font-family:\" tahoma\",sans-serif;=\"\" mso-ansi-language:in\"=\"\">2</span><span style=\"font-family:\" tahoma\",sans-serif\"=\"\">), technical background will be an advantage<o:p></o:p></span></li><li><span style=\"font-family:\" tahoma\",sans-serif\"=\"\">Good\r\nin English (oral and written) and computer literate<o:p></o:p></span></li><li><span style=\"font-family:\" tahoma\",sans-serif\"=\"\">Able\r\nto make a presentation and target oriented<o:p></o:p></span></li><li><span lang=\"IN\" style=\"font-family:\" tahoma\",sans-serif;=\"\" mso-ansi-language:in\"=\"\">Able to work in team, have a good leadership and excellent\r\nselling skills</span><span style=\"font-family:\" tahoma\",sans-serif\"=\"\"><o:p></o:p></span></li><li><span lang=\"IN\" style=\"font-family:\" tahoma\",sans-serif;=\"\" mso-ansi-language:in\"=\"\">Willing to travel </span><span style=\"font-family:\" tahoma\",sans-serif\"=\"\"><o:p></o:p></span></li><li><span style=\"font-family:\" tahoma\",sans-serif\"=\"\">Male\r\nwith maximum age of 40 years old<o:p></o:p></span></li><li><span style=\"font-family:\" tahoma\",sans-serif\"=\"\">Having\r\ncar driver license (SIM A)<o:p></o:p></span></li></ul><p style=\"text-align:justify\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\"><span style=\"font-family:\" tahoma\",sans-serif\"=\"\">Please send a\r\ncomprehensive resume and recent photograph within 2 weeks. Only Short listed\r\ncandidate will be notified.</span><span lang=\"IN\" style=\"font-family:\" tahoma\",sans-serif;=\"\" mso-ansi-language:in\"=\"\"><o:p></o:p></span></p>', 1, '2021-03-31 00:35:24', '2021-04-13 03:12:12', NULL),
(2, 'e0e8bda9-1554-4896-896c-ab83e59c2baf', 'REGIONAL SALES MANAGER', 'Managing the Area / Branch to improve the effectiveness of sales and promotions which can provide the maximum benefit for the company. Had the responsibility for the sales and products for Motorcycles and Cars.', '<p class=\"MsoNormal\" style=\"line-height:150%\"><span lang=\"IN\"><b>Job requirement :</b><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left:36.0pt;text-align:justify;text-indent:\r\n-18.0pt;line-height:normal;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:\r\nWingdings\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;\r\n</span></span><!--[endif]-->Managing\r\nthe Area / Branch to improve the effectiveness of sales and promotions which\r\ncan provide the maximum benefit for the company.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left:36.0pt;text-align:justify;text-indent:\r\n-18.0pt;line-height:normal;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:\r\nWingdings\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;\r\n</span></span><!--[endif]--><span class=\"hps\">Had the</span><span class=\"hps\"> </span><span class=\"hps\">responsibility for the</span><span class=\"hps\"> </span><span class=\"hps\">sales</span><span class=\"hps\"> </span><span class=\"hps\">and</span><span class=\"hps\"> </span><span class=\"hps\">products</span><span class=\"hps\"> </span><span class=\"hps\">for</span><span class=\"hps\"> </span><span class=\"hps\">Motorcycles</span><span class=\"hps\"> </span><span class=\"hps\">and</span><span class=\"hps\"> </span><span class=\"hps\">Cars</span>, <span class=\"hps\">which</span><span class=\"hps\"> </span><span class=\"hps\">is divided</span><span class=\"hps\"> </span><span class=\"hps\">into 4</span><span class=\"hps\"> </span><span class=\"hps\">categories</span><span class=\"hps\"> </span><span class=\"hps\">namely</span><span class=\"hps\"> </span><span class=\"hps\">Lubricants</span><span class=\"hps\"> </span><span class=\"hps\">Motor</span>, <span class=\"hps\">Car</span><span class=\"hps\"> </span><span class=\"hps\">Lubricants</span>, <span lang=\"IN\">and </span><span class=\"hps\">Specialty</span><span class=\"hps\"> </span><span class=\"hps\">Product (</span><span class=\"atn\">non-</span>lubricant<span lang=\"IN\"> i.e. grease, oil\r\nindustries,etc</span>)<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left:36.0pt;text-align:justify;text-indent:\r\n-18.0pt;line-height:normal;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:\r\nWingdings\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;\r\n</span></span><!--[endif]--><span class=\"hps\">Managing</span><span class=\"hps\"> </span><span class=\"hps\">and</span><span class=\"hps\"> </span><span class=\"hps\">working together with the</span><span class=\"hps\"> </span><span class=\"hps\">distributors</span><span class=\"hps\"> </span><span class=\"hps\">to</span><span class=\"hps\"> </span><span class=\"hps\">increase</span><span class=\"hps\"> </span><span class=\"hps\">sales</span><span class=\"hps\"> </span><span class=\"hps\">and</span><span class=\"hps\"> </span><span class=\"hps\">improve equitable</span><span class=\"hps\"> </span><span class=\"hps\">distribution of</span><span class=\"hps\"> </span><span class=\"hps\">Top</span><span class=\"hps\"> </span><span class=\"hps\">Products</span><span class=\"hps\"> </span><span class=\"hps\">in the</span><span class=\"hps\"> </span><span class=\"hps\">work</span><span class=\"hps\"><span lang=\"IN\">s</span></span><span class=\"hps\">hops</span><span class=\"hps\"> </span><span class=\"hps\">and</span><span class=\"hps\"> </span><span class=\"hps\">outlets</span> that <span class=\"hps\">are</span><span class=\"hps\"> </span><span class=\"hps\">listed as</span><span class=\"hps\"> </span><span class=\"hps\">Top</span><span class=\"hps\"> </span><span class=\"hps\">Customer.</span><span class=\"hps\"> </span><span class=\"hps\">Open a</span><span class=\"hps\"> </span><span class=\"hps\">new</span><span class=\"hps\"> </span><span class=\"hps\">area</span><span class=\"hps\"> </span><span class=\"hps\">to</span><span class=\"hps\"> </span><span class=\"hps\">increase</span><span class=\"hps\"> </span><span class=\"hps\">the number of customers</span>.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left:36.0pt;text-align:justify;text-indent:\r\n-18.0pt;line-height:normal;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:\r\nWingdings\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;\r\n</span></span><!--[endif]-->To\r\ncreate market demand, by developing promotional strategies in line with company\r\nstrategy, is, execute programs and manage the customer <o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left:36.0pt;text-align:justify;text-indent:\r\n-18.0pt;line-height:normal;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:\r\nWingdings\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;\r\n</span></span><!--[endif]-->Provide\r\nattractive promotional programs to retailers to increase the sales, by focusing\r\non the proportional’s in selling and selling out of products. Program Trade\r\nPromotion, Event, and Gathering with the goal for improving customer.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left:36.0pt;text-align:justify;text-indent:\r\n-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-family:\r\nWingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:Wingdings\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp; </span></span><!--[endif]--><span class=\"hps\">Managing the promotional budget\r\nbranches</span>, <span class=\"hps\">in order to</span><span class=\"hps\"> </span><span class=\"hps\">generate</span><span class=\"hps\"> </span><span class=\"hps\">optimal</span><span class=\"hps\"> </span><span class=\"hps\">sales</span><span class=\"hps\"> </span><span class=\"hps\">by improving</span><span class=\"hps\"> </span><span class=\"hps\">the effectiveness</span><span class=\"hps\"> </span><span class=\"hps\">and</span><span class=\"hps\"> </span><span class=\"hps\">efficiency of</span><span class=\"hps\"> </span><span class=\"hps\">the budget</span>, <span class=\"hps\">by managing the</span><span class=\"hps\"> </span><span class=\"hps\">ratio</span><span class=\"hps\"> </span><span class=\"hps\">of</span><span class=\"hps\"> </span><span class=\"hps\">promotional budget</span>.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left:36.0pt;text-align:justify;text-indent:\r\n-18.0pt;line-height:normal;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:\r\nWingdings;color:black;mso-fareast-language:IN\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp; </span></span><!--[endif]--><span class=\"hps\">Managing the</span><span class=\"hps\"> </span><span class=\"hps\">portfolio</span><span class=\"hps\"> </span><span class=\"hps\">managing</span><span class=\"hps\"> </span><span class=\"hps\">branch</span><span class=\"hps\"> </span><span class=\"hps\">(</span>P <span class=\"hps\">&amp;L</span>), <span class=\"hps\">includes</span><span class=\"hps\"> </span><span class=\"hps\">direct</span><span class=\"hps\"> </span><span class=\"hps\">and</span><span class=\"hps\"> </span><span class=\"hps\">indirect</span><span class=\"hps\"> </span><span class=\"hps\">expense</span>s.<span style=\"mso-ascii-font-family:\r\nCalibri;mso-ascii-theme-font:minor-latin;mso-fareast-font-family:\" times=\"\" new=\"\" roman\";=\"\" mso-hansi-font-family:calibri;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:=\"\" calibri;mso-bidi-theme-font:minor-latin;color:black;mso-fareast-language:in\"=\"\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left:36.0pt;text-indent:-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:\r\nWingdings\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;\r\n</span></span><!--[endif]-->Managing\r\nthe team that consists of Supervisor, Salesman, Data Administration and\r\nFinance, Warehouse and delivery team.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left:36.0pt;text-align:justify;text-indent:\r\n-18.0pt;line-height:normal;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:\r\nWingdings;color:black;mso-fareast-language:IN\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp; </span></span><!--[endif]--><span class=\"hps\">Providing the</span><span class=\"hps\"> </span><span class=\"hps\">sales</span><span class=\"hps\"> </span><span class=\"hps\">reports</span>, <span class=\"hps\">market</span><span class=\"hps\"> </span><span class=\"hps\">demand</span><span class=\"hps\"> </span><span class=\"hps\">and</span><span class=\"hps\"> </span><span class=\"hps\">activity</span><span class=\"hps\"> </span><span class=\"hps\">promotion to</span><span class=\"hps\"> </span>the <span class=\"hps\"><span lang=\"IN\">General </span></span><span class=\"hps\">Manager</span><span style=\"mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;\r\nmso-fareast-font-family:\" times=\"\" new=\"\" roman\";mso-hansi-font-family:calibri;=\"\" mso-hansi-theme-font:minor-latin;mso-bidi-font-family:calibri;mso-bidi-theme-font:=\"\" minor-latin;color:black;mso-fareast-language:in\"=\"\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\"><span lang=\"IN\"><b>Qualification:</b><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpFirst\" style=\"margin-left:54.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;mso-list:l1 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:\r\nWingdings\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;\r\n</span></span><!--[endif]-->Min. <span lang=\"IN\">4</span> years experience as a <span lang=\"IN\">Supervisor</span> in Sales &amp; Marketing, with\r\npreference from Lubricant Sector and experience in<span lang=\"IN\"> handling B2B and\r\nB2C Customer</span>.<o:p></o:p></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:54.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;mso-list:l1 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:\r\nWingdings;background:yellow;mso-highlight:yellow\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp; </span></span><!--[endif]--><b><i><span style=\"mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;\r\nmso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:\r\nCalibri;mso-bidi-theme-font:minor-latin;background:yellow;mso-highlight:yellow\">Experience\r\nhandle area all Sulawesi, Sumatra<o:p></o:p></span></i></b></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:54.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;mso-list:l1 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:\r\nWingdings\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;\r\n</span></span><!--[endif]-->Graduated\r\nin any discipline (S1), technical background will be an advantage<o:p></o:p></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:54.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;mso-list:l1 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:\r\nWingdings\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;\r\n</span></span><!--[endif]-->Good\r\nin English (oral and written) and computer literate<o:p></o:p></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:54.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;mso-list:l1 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:\r\nWingdings\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;\r\n</span></span><!--[endif]-->Able\r\nto make a presentation and target oriented<o:p></o:p></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:54.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;mso-list:l1 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:\r\nWingdings\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;\r\n</span></span><!--[endif]--><span lang=\"IN\">Able to work in team, have a good leadership and\r\nrelationship&nbsp; with our distributor point</span><o:p></o:p></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:54.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;mso-list:l1 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:\r\nWingdings\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;\r\n</span></span><!--[endif]--><span lang=\"IN\">Willing to travelling all over Indonesia</span><o:p></o:p></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:54.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;mso-list:l1 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:\r\nWingdings\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;\r\n</span></span><!--[endif]-->Male\r\nwith m<span lang=\"IN\">aximum</span> age of 3<span lang=\"IN\">8</span> years old<o:p></o:p></p>\r\n\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"margin-left:54.0pt;mso-add-space:auto;\r\ntext-indent:-18.0pt;mso-list:l1 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:\r\nWingdings\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;\r\n</span></span><!--[endif]-->Having\r\ncar driver license (SIM A)<o:p></o:p></p>', 1, '2021-03-31 00:35:24', '2021-04-13 03:12:59', NULL),
(3, '83232832-e89c-4143-8073-39be810c7f1b', 'SPV MARKETING', 'Coordinating all internal and external marketing and promotional efforts including community relations, public relations and information. Measure, evaluate and analyze marketing programs', '<p class=\"MsoNormal\"><span lang=\"IN\"><b>Job Description:</b></span></p><ul><li><span style=\"text-align: justify; text-indent: -18pt; font-size: 0.875rem;\">Develop and create marketing strategy and\r\nwritten actions plans in order to achieve specific objectives including email\r\ncampaigns, events, media promotions, advertising and increase company’s image\r\nbranding</span></li><li><span style=\"text-align: justify; text-indent: -18pt; font-size: 0.875rem;\">Measure, evaluate and analyze marketing\r\nprograms</span></li><li><span style=\"text-align: justify; text-indent: -18pt; font-size: 0.875rem;\">Managing the entire product line life cycle\r\nfrom strategic planning to tactical activities</span></li><li><span style=\"font-size: 0.875rem; text-align: justify; text-indent: -18pt;\">Monitoring and understand the market through\r\ncustomers trend and competitor product movement</span></li><li><span style=\"text-align: justify; text-indent: -18pt; font-size: 0.875rem;\">Conducting customer survey / research and\r\ncompetitives analysis</span></li><li><span style=\"text-align: justify; text-indent: -18pt; font-size: 0.875rem;\">Handle trade promo and promotion program</span></li><li><span style=\"text-align: justify; text-indent: -18pt; font-size: 0.875rem;\">Coordinate with Sales department</span></li></ul>\r\n\r\n<p class=\"MsoNoSpacing\" style=\"text-align:justify\"><b><span lang=\"IN\" style=\"font-size:10.0pt;font-family:\" tahoma\",sans-serif;mso-fareast-font-family:=\"\" \"times=\"\" new=\"\" roman\";color:black\"=\"\">&nbsp;</span><span style=\"font-size: 10pt;\">Requirements of:</span></b></p>\r\n\r\n<ul><li style=\"text-align: justify;\"><span lang=\"IN\" tahoma\",sans-serif\"=\"\" style=\"text-indent: -18pt; font-size: 10pt;\">Bachelor degree in PR/marketing/communication\r\nor similiar</span></li><li style=\"text-align: justify;\"><span style=\"font-size: 10pt; text-indent: -18pt;\">Under 35 years old</span></li><li style=\"text-align: justify;\"><span style=\"font-size: 10pt; text-indent: -18pt;\">Communication skill, market research,\r\nnegotiating and presentations skill</span></li><li style=\"text-align: justify;\"><span style=\"font-size: 10pt; text-indent: -18pt;\">Detail oriented and out of the box thinker</span></li><li style=\"text-align: justify;\"><span lang=\"IN\" tahoma\",sans-serif\"=\"\" style=\"text-indent: -18pt; font-size: 10pt;\">Fluent in English</span></li><li style=\"text-align: justify;\"><span style=\"font-size: 10pt; text-indent: -18pt;\">Strong computer skill and substantial\r\nknowledge of Microsoft Windows, Photoshop, etc</span></li><li style=\"text-align: justify;\"><span style=\"font-size: 10pt; text-indent: -18pt;\">Have the ability to work in a high-paced and\r\nchallenging business environment</span></li><li style=\"text-align: justify;\"><span style=\"font-size: 10pt; text-indent: -18pt;\">Willing and ability to travel in order to\r\nfulfill the responsibilities of this position</span></li><li style=\"text-align: justify;\"><span style=\"font-size: 10pt; text-indent: -18pt;\">Experience in distribution market or consumer\r\ngoods.</span></li><li style=\"text-align: justify;\"><span style=\"font-size: 0.875rem; text-indent: -18pt;\">Coordinating all internal and external\r\nmarketing and promotional efforts including community relations, public\r\nrelationsand information</span></li></ul><p style=\"text-align: justify;\">Please send a\r\ncomprehensive resume and recent photograph within 2 weeks. Only Short listed candidate\r\nwill be notified.</p>', 1, '2021-03-31 00:35:24', '2021-04-13 03:20:04', NULL),
(4, 'c33a29d0-bace-4747-9c2e-ce340f507390', 'Home Entertainment Equipment Installer', 'Ratione molestiae quis est enim occaecati et id quia sed consectetur officiis libero ratione non quis amet ipsa velit mollitia enim eaque sit sunt quam velit iure accusantium in qui nostrum sit aut itaque quo aut eaque asperiores tempora ad consequatur eum dolorum in.', 'Mock Turtle a little nervous about it while the rest of the way--\' \'THAT generally takes some time,\' interrupted the Hatter: \'I\'m on the slate. \'Herald, read the accusation!\' said the Mock Turtle.', 1, '2021-03-31 00:35:24', '2021-04-12 07:02:42', '2021-04-12 07:02:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_thumb` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `slug` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_category_id` bigint NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `img_thumb`, `created_at`, `updated_at`, `description`, `slug`, `main_category_id`) VALUES
(1, 'MAINTENANCE OILS', 'http://atlaspetrochem.democube.id//storage/photos/1/PRODUCT - P3 GREASE.jpg', '2021-03-31 00:35:24', '2021-07-28 12:49:36', 'Maintenance Oils', 'maintenance-oils', 2),
(2, 'METAL WORKING OILS', 'http://atlaspetrochem.democube.id//storage/photos/1/PRODUCT - P2 MWO.jpg', '2021-03-31 00:35:24', '2021-07-28 12:50:29', 'Metal Working Oils', 'metal-working-oils', 2),
(3, 'GREASE', 'http://atlaspetrochem.democube.id//storage/photos/1/PRODUCT - P1 GREASE.jpeg', '2021-03-31 00:35:24', '2021-07-28 12:51:40', 'Grease', 'grease', 2),
(4, 'INDUSTRI SPECIALITY', 'http://atlaspetrochem.democube.id//storage/photos/shares/categories/categories_ex1.jpg', '2021-03-31 00:35:24', '2021-07-28 12:52:02', 'Industri Speciality', 'industri-speciality', 2),
(5, 'OLI SEPEDA MOTOR', 'http://atlaspetrochem.democube.id//storage/photos/1/PRODUCT - P5 MCO.jpg', '2021-04-19 07:53:26', '2021-07-28 12:52:23', 'Rangkaian pelumas untuk Sepeda Motor', 'oli-sepeda-motor', 1),
(6, 'OLI MESIN MOBIL', 'http://atlaspetrochem.democube.id//storage/photos/1/PRODUCT - P6 GEO.jpg', '2021-04-19 09:11:08', '2021-07-28 12:52:37', 'Rangkaian pelumas untuk Mesin Mobil', 'oli-mesin-mobil', 1),
(7, 'OLI MESIN DIESEL', 'http://atlaspetrochem.democube.id//storage/photos/1/PRODUCT - P7 DEO.jpg', '2021-04-19 09:11:49', '2021-07-28 12:52:50', 'Rangkaian pelumas untuk Mesin Diesel', 'oli-mesin-diesel', 1),
(8, 'OLI TRANSMISI', 'http://atlaspetrochem.democube.id//storage/photos/1/PRODUCT - P8 TO.jpg', '2021-04-19 09:13:15', '2021-07-28 12:53:02', 'Rangkaian pelumas untuk Transmisi & Gear', 'oli-transmisi', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `company_banners`
--

CREATE TABLE `company_banners` (
  `id` bigint UNSIGNED NOT NULL,
  `image_location` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `company_banners`
--

INSERT INTO `company_banners` (`id`, `image_location`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'http://atlaspetrochem.democube.id//storage/photos/1/Slide Company 1.jpg', 0, NULL, '2021-04-16 09:40:09', '2021-07-28 12:46:28'),
(2, 'http://atlaspetrochem.democube.id//storage/photos/1/SLIDE COMPANY 2.jpg', 1, NULL, '2021-04-16 09:40:46', '2021-07-28 12:45:53'),
(3, 'http://atlaspetrochem.democube.id//storage/photos/1/Slide Company 3 1024x461.jpg', 1, NULL, '2021-04-16 09:41:01', '2021-07-28 12:46:09'),
(4, 'https://atlaspetrochem.julian.app-show.net//storage/photos/3/Slide Company 1.jpg', 1, '2021-04-19 03:29:44', '2021-04-19 01:29:53', '2021-04-19 03:29:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `company_contents`
--

CREATE TABLE `company_contents` (
  `id` bigint UNSIGNED NOT NULL,
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `company_contents`
--

INSERT INTO `company_contents` (`id`, `key`, `type`, `value`, `created_at`, `updated_at`) VALUES
(1, 'vision', 'text', '<span style=\"vertical-align: inherit; font-size: 18px;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\" color=\"#ffffff\"><b>Menjadi perusahaan distributor pelumas yang dapat diandalkan, dengan memberikan kontribusi yang optimal baik dari pelumas industrial maupun dari pelumas retail otomotif</b></font></font></span>', '2021-04-05 05:25:32', '2021-04-16 08:27:28'),
(2, 'mission', 'text', '<p><span style=\"vertical-align: inherit; font-size: 12px;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\" color=\"#ffffff\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><b>1. Secara berkesinambungan menyalurkan produk-produk yang berkualitas tinggi serta memenuhi kebutuhan pelanggan melalui program pemasaran yang terbaik</b></font></font></font></font></span></p><p><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit; font-size: 12px;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\" color=\"#ffffff\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><b>2. Mengembangkan karyawan yang berkompeten dengan menciptakan lingkungan kerja yang baik untuk mendukung tercapainya kepuasan pelanggan</b></font></font></font></font></span></span></p><p><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit; font-size: 12px;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\" color=\"#ffffff\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><b>3. Memperkuat kolaborasi dengan produsen, dealer utama dan dealer-dealer melalui komunikasi dan kerjasama yang lebih baik</b></font></font></font></font></span></span></p><p><span style=\"vertical-align: inherit; font-size: 12px;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\" color=\"#ffffff\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><b>4. Untuk operasi mengembangkan perusahaan yang sehat dalam segala aspek, misalnya pemenuhan peraturan, lingkungan dan lain-lain</b></font></font></font></font></span></p>', '2021-04-05 06:38:26', '2021-04-16 08:27:28'),
(3, 'workplace', 'array-text', '[\"<b><u> HEAD OFFICE<br><\\/u><\\/b>Jl. Danau Indah Raya Blok C2 No. 5, Jakarta Utara 14350<br><b>Telp. 021-22065-068<\\/b><br><b>Fax. 021-22065-005<br><\\/b><i><u><font color=\\\"#0000ff\\\">www.atlaspetrochem.co.id <\\/font><\\/u><\\/i>\",\"<b><u> SURABAYA BRANCH<br><\\/u><\\/b>Pergudangan Central Industrial Park (CIP) Blok Alpha No. 16-17<br>Jl. Lingkar Timur Km. 4 Desa Kemiri, Sidoarjo, Jawa Timur 61234<br><b>Telp. 031-997-22888<br>Fax. 031-997-21951 <\\/b>\",\"<b><u> DEALER\\/AGENT<br><\\/u><\\/b>Dealer-dealer &amp; Sub-dealer yang tersebar luas diseluruh Indonesia\"]', '2021-04-05 06:47:02', '2021-04-16 08:27:28'),
(4, 'brand', 'text', '<p style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; line-height: 1.5; text-rendering: optimizelegibility;\"><strong style=\"outline: none; font-weight: bold; line-height: inherit;\"><font color=\"#ff0000\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><span style=\"font-size: 18px;\">IDEMITSU</span></font></font></font></strong><font color=\"#ffffff\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><span style=\"font-size: 18px;\"> &nbsp;merupakan brand&nbsp; </span></font></font></font><span style=\"color: rgb(255, 255, 255); font-size: 0.875rem;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><span style=\"font-size: 18px;\">pelumas kelas dunia untuk pasar industri dan juga otomotif. </span></font><font style=\"vertical-align: inherit;\"><span style=\"font-size: 18px;\">Salah satu Merek terbesar asal </span></font></font></span><span style=\"color: rgb(255, 255, 255); font-size: 0.875rem;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><span style=\"font-size: 18px;\">&nbsp;Jepang ini bergerak pada sektor minyak dengan pabrik dan kantor cabang yang terkenal di seluruh dunia.</span><br></font></font></span><span style=\"font-size: 18px; color: rgb(255, 255, 255);\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Dengan</font></font></font></font></span><font style=\"font-size: 0.875rem; color: rgb(255, 255, 255); vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><span style=\"font-size: 18px;\"> pengalaman lebih dari 100 tahun, </span></font></font></font></font><font style=\"vertical-align: inherit;\"><font style=\"font-size: 0.875rem; vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font color=\"#ff0000\"><b><font style=\"vertical-align: inherit;\"><span style=\"font-size: 18px;\">IDEMITSU</span></font></b></font></font></font><font style=\"font-size: 0.875rem; color: rgb(255, 255, 255); vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><span style=\"font-size: 18px;\"> dengan bangga mempersembahkan produk oli yang sudah teruji kualitasnya.</span></font></font></font></font></p>', '2021-04-05 07:01:09', '2021-04-16 08:27:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint UNSIGNED NOT NULL,
  `question_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `faqs`
--

INSERT INTO `faqs` (`id`, `question_text`, `answer_text`, `created_at`, `updated_at`, `active`) VALUES
(1, '<p>sadasd</p>', '<p>dasd</p>', '2021-06-23 06:10:37', '2021-06-23 06:10:37', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeries`
--

CREATE TABLE `galeries` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `thumbnail_location` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_location` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('picture','video') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galeries`
--

INSERT INTO `galeries` (`id`, `created_at`, `updated_at`, `thumbnail_location`, `image_location`, `video_url`, `deleted_at`, `title`, `slug`, `type`, `youtube`) VALUES
(1, '2021-03-31 00:35:24', '2021-03-31 00:35:24', NULL, NULL, NULL, NULL, 'Earum repellat dolores et sint.', 'earum-repellat-dolores-et-sint', 'picture', 0),
(2, '2021-03-31 00:35:24', '2021-03-31 00:35:24', NULL, NULL, NULL, NULL, 'Aspernatur voluptatem rerum expedita perspiciatis perferendis.', 'aspernatur-voluptatem-rerum-expedita-perspiciatis-perferendis', 'picture', 0),
(3, '2021-03-31 00:35:24', '2021-03-31 00:35:24', NULL, NULL, NULL, NULL, 'Enim mollitia est non quidem consequatur.', 'enim-mollitia-est-non-quidem-consequatur', 'picture', 0),
(4, '2021-03-31 00:35:24', '2021-03-31 00:35:24', NULL, NULL, NULL, NULL, 'Sunt ratione fuga quibusdam.', 'sunt-ratione-fuga-quibusdam', 'picture', 0),
(5, '2021-03-31 00:35:24', '2021-04-23 01:33:47', NULL, 'NULL', 'EFBywhmrkTY', NULL, 'Daphne Super Coat JP', 'daphne-super-coat-jp', 'video', 1),
(6, '2021-03-31 00:35:24', '2021-04-23 01:31:23', NULL, 'NULL', 'JFvlnhjpJQs', NULL, 'Idemitsu – The Leading Lubricant From Japan- Brand Journey', 'idemitsu-the-leading-lubricant-from-japan-brand-journey', 'video', 1),
(7, '2021-04-22 08:30:06', '2021-04-23 01:30:10', NULL, 'NULL', 'WubrYxDI_xE', NULL, 'Idemitsu 0W-20', 'idemitsu-0w-20', 'video', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ledgers`
--

CREATE TABLE `ledgers` (
  `id` int UNSIGNED NOT NULL,
  `user_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `recordable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `recordable_id` bigint UNSIGNED NOT NULL,
  `context` tinyint UNSIGNED NOT NULL,
  `event` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `properties` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `modified` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pivot` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `extra` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ledgers`
--

INSERT INTO `ledgers` (`id`, `user_type`, `user_id`, `recordable_type`, `recordable_id`, `context`, `event`, `properties`, `modified`, `pivot`, `extra`, `url`, `ip_address`, `user_agent`, `signature`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Auth\\User', 3, 'App\\Models\\Auth\\User', 3, 4, 'updated', '{\"id\":\"3\",\"uuid\":\"6e105278-2bb7-4d55-9a7d-791eec208317\",\"first_name\":\"Admin\",\"last_name\":\"Atlaspetrochem\",\"email\":\"admin@atlaspetrochem.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$5klTpDIqZGejURTdaaxWceUlVS3.rLmu09zUA4FWTsQbz1gPwfgqO\",\"password_changed_at\":null,\"active\":\"1\",\"confirmation_code\":\"0d6567ce094e3a8d3260737d5cf90f8e\",\"confirmed\":\"1\",\"timezone\":\"Asia\\/Jakarta\",\"last_login_at\":\"2021-04-27 16:23:08\",\"last_login_ip\":\"182.253.34.157\",\"to_be_logged_out\":\"0\",\"remember_token\":\"LxmkXkkhG76daPoV91Tp8iHJRVCLjEGfSvJZHywF8YUQslK3g9cF7wmUuB53\",\"created_at\":\"2021-02-22 13:34:15\",\"updated_at\":\"2021-04-27 16:23:08\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'https://atlaspetrochem.julian.app-show.net/login', '182.253.34.157', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36', '7072eb3f2eddff1cae79529bf09adb19eac84fe54ef765de93589c3b9e92fc456c54a7bde2dfceecb1eece81c26684d303f8f7e25c71920a682c8a83c90fea1d', '2021-04-27 08:23:08', '2021-04-27 08:23:08'),
(2, 'App\\Models\\Auth\\User', 3, 'App\\Models\\Auth\\User', 3, 4, 'updated', '{\"id\":\"3\",\"uuid\":\"6e105278-2bb7-4d55-9a7d-791eec208317\",\"first_name\":\"Admin\",\"last_name\":\"Atlaspetrochem\",\"email\":\"admin@atlaspetrochem.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$5klTpDIqZGejURTdaaxWceUlVS3.rLmu09zUA4FWTsQbz1gPwfgqO\",\"password_changed_at\":null,\"active\":\"1\",\"confirmation_code\":\"0d6567ce094e3a8d3260737d5cf90f8e\",\"confirmed\":\"1\",\"timezone\":\"Asia\\/Jakarta\",\"last_login_at\":\"2021-04-27 16:27:44\",\"last_login_ip\":\"182.253.34.157\",\"to_be_logged_out\":\"0\",\"remember_token\":\"LxmkXkkhG76daPoV91Tp8iHJRVCLjEGfSvJZHywF8YUQslK3g9cF7wmUuB53\",\"created_at\":\"2021-02-22 13:34:15\",\"updated_at\":\"2021-04-27 16:27:44\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'https://atlaspetrochem.julian.app-show.net/login', '182.253.34.157', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36', 'c673dd73dded12fde85fe7dfe0eccd460472dc34ac15caaa5d8e6e376538c29eaff46eeadc2fe3a6313800a838cf218d0b3dbffcaca8f785c1c38a781b1e21cc', '2021-04-27 08:27:44', '2021-04-27 08:27:44'),
(3, 'App\\Models\\Auth\\User', 3, 'App\\Models\\Auth\\User', 3, 4, 'updated', '{\"id\":\"3\",\"uuid\":\"6e105278-2bb7-4d55-9a7d-791eec208317\",\"first_name\":\"Admin\",\"last_name\":\"Atlaspetrochem\",\"email\":\"admin@atlaspetrochem.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$5klTpDIqZGejURTdaaxWceUlVS3.rLmu09zUA4FWTsQbz1gPwfgqO\",\"password_changed_at\":null,\"active\":\"1\",\"confirmation_code\":\"0d6567ce094e3a8d3260737d5cf90f8e\",\"confirmed\":\"1\",\"timezone\":\"Asia\\/Jakarta\",\"last_login_at\":\"2021-04-27 17:20:38\",\"last_login_ip\":\"182.253.34.157\",\"to_be_logged_out\":\"0\",\"remember_token\":\"LxmkXkkhG76daPoV91Tp8iHJRVCLjEGfSvJZHywF8YUQslK3g9cF7wmUuB53\",\"created_at\":\"2021-02-22 13:34:15\",\"updated_at\":\"2021-04-27 17:20:45\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'https://atlaspetrochem.julian.app-show.net/login', '182.253.34.157', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36', '52b212310f3855d2deb3b19d2123947114ccb1978526dcaca7b1c4c71c0e61855a05bcc82e30591af6498cd237090c71b6076833e39cae4a7f84bc657a36d64a', '2021-04-27 09:20:45', '2021-04-27 09:20:45'),
(4, 'App\\Models\\Auth\\User', 3, 'App\\Models\\Auth\\User', 3, 4, 'updated', '{\"id\":\"3\",\"uuid\":\"6e105278-2bb7-4d55-9a7d-791eec208317\",\"first_name\":\"Admin\",\"last_name\":\"Atlaspetrochem\",\"email\":\"admin@atlaspetrochem.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$5klTpDIqZGejURTdaaxWceUlVS3.rLmu09zUA4FWTsQbz1gPwfgqO\",\"password_changed_at\":null,\"active\":\"1\",\"confirmation_code\":\"0d6567ce094e3a8d3260737d5cf90f8e\",\"confirmed\":\"1\",\"timezone\":\"Asia\\/Jakarta\",\"last_login_at\":\"2021-04-30 17:13:15\",\"last_login_ip\":\"103.131.119.130\",\"to_be_logged_out\":\"0\",\"remember_token\":\"LxmkXkkhG76daPoV91Tp8iHJRVCLjEGfSvJZHywF8YUQslK3g9cF7wmUuB53\",\"created_at\":\"2021-02-22 13:34:15\",\"updated_at\":\"2021-04-30 17:13:15\",\"deleted_at\":null}', '[\"last_login_at\",\"last_login_ip\",\"updated_at\"]', '[]', '[]', 'https://atlaspetrochem.julian.app-show.net/login', '103.131.119.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'd80e4ce92d9ea413ee62291a73c4fe93d1e15e72da973b0a702666dfcfba1619582f4b4f70a71d8765517daa3cdb7da52e460b3d8acc35b1f11c78596a3ad52e', '2021-04-30 09:13:15', '2021-04-30 09:13:15'),
(5, 'App\\Models\\Auth\\User', 3, 'App\\Models\\Auth\\User', 3, 4, 'updated', '{\"id\":\"3\",\"uuid\":\"6e105278-2bb7-4d55-9a7d-791eec208317\",\"first_name\":\"Admin\",\"last_name\":\"Atlaspetrochem\",\"email\":\"admin@atlaspetrochem.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$5klTpDIqZGejURTdaaxWceUlVS3.rLmu09zUA4FWTsQbz1gPwfgqO\",\"password_changed_at\":null,\"active\":\"1\",\"confirmation_code\":\"0d6567ce094e3a8d3260737d5cf90f8e\",\"confirmed\":\"1\",\"timezone\":\"Asia\\/Jakarta\",\"last_login_at\":\"2021-04-30 17:13:15\",\"last_login_ip\":\"103.131.119.130\",\"to_be_logged_out\":\"0\",\"remember_token\":\"dVPs5A0ssebHMMFJSyd81CzmWjmobPdelCJjInPIYz4qZvQTG8wSvFZqOLBE\",\"created_at\":\"2021-02-22 13:34:15\",\"updated_at\":\"2021-04-30 17:13:15\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'https://atlaspetrochem.julian.app-show.net/logout', '103.131.119.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'f7aa251f3003c2bafa75ed56d80581afcafd5e61d3804f0961b71a8f154fc85728fb0a69c25190a5378c27469c81c7156cea2ede78691ebf4237507019d4e2b9', '2021-04-30 09:42:17', '2021-04-30 09:42:17'),
(6, 'App\\Models\\Auth\\User', 3, 'App\\Models\\Auth\\User', 3, 4, 'updated', '{\"id\":\"3\",\"uuid\":\"6e105278-2bb7-4d55-9a7d-791eec208317\",\"first_name\":\"Admin\",\"last_name\":\"Atlaspetrochem\",\"email\":\"admin@atlaspetrochem.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$5klTpDIqZGejURTdaaxWceUlVS3.rLmu09zUA4FWTsQbz1gPwfgqO\",\"password_changed_at\":null,\"active\":\"1\",\"confirmation_code\":\"0d6567ce094e3a8d3260737d5cf90f8e\",\"confirmed\":\"1\",\"timezone\":\"Asia\\/Jakarta\",\"last_login_at\":\"2021-05-03 17:01:15\",\"last_login_ip\":\"182.253.34.157\",\"to_be_logged_out\":\"0\",\"remember_token\":\"dVPs5A0ssebHMMFJSyd81CzmWjmobPdelCJjInPIYz4qZvQTG8wSvFZqOLBE\",\"created_at\":\"2021-02-22 13:34:15\",\"updated_at\":\"2021-05-03 17:01:15\",\"deleted_at\":null}', '[\"last_login_at\",\"last_login_ip\",\"updated_at\"]', '[]', '[]', 'https://atlaspetrochem.julian.app-show.net/login', '182.253.34.157', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '98c7f17247af648e3d00bbe5328d6e67c251f912559f4fb3b4a2d1c22c4a35cecb2ae71f7e5749e767a3142dfb2b0246f694c93bcbc784ff6440a18f56f8e3ed', '2021-05-03 09:01:15', '2021-05-03 09:01:15'),
(7, 'App\\Models\\Auth\\User', 3, 'App\\Models\\Auth\\User', 3, 4, 'updated', '{\"id\":\"3\",\"uuid\":\"6e105278-2bb7-4d55-9a7d-791eec208317\",\"first_name\":\"Admin\",\"last_name\":\"Atlaspetrochem\",\"email\":\"admin@atlaspetrochem.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$5klTpDIqZGejURTdaaxWceUlVS3.rLmu09zUA4FWTsQbz1gPwfgqO\",\"password_changed_at\":null,\"active\":\"1\",\"confirmation_code\":\"0d6567ce094e3a8d3260737d5cf90f8e\",\"confirmed\":\"1\",\"timezone\":\"Asia\\/Jakarta\",\"last_login_at\":\"2021-05-05 19:09:44\",\"last_login_ip\":\"114.124.130.35\",\"to_be_logged_out\":\"0\",\"remember_token\":\"dVPs5A0ssebHMMFJSyd81CzmWjmobPdelCJjInPIYz4qZvQTG8wSvFZqOLBE\",\"created_at\":\"2021-02-22 13:34:15\",\"updated_at\":\"2021-05-05 19:09:44\",\"deleted_at\":null}', '[\"last_login_at\",\"last_login_ip\",\"updated_at\"]', '[]', '[]', 'https://atlaspetrochem.julian.app-show.net/login', '114.124.130.35', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'b4726f008bcadc8e859013f20951b387b53227dd2ab892e3eec355e3d8dd2580b039539a9b7563c0314b1e3ba89ba5999453bad28add32d9b1c60d3897063b58', '2021-05-05 11:09:44', '2021-05-05 11:09:44'),
(8, 'App\\Models\\Auth\\User', 3, 'App\\Models\\Auth\\User', 3, 4, 'updated', '{\"id\":\"3\",\"uuid\":\"6e105278-2bb7-4d55-9a7d-791eec208317\",\"first_name\":\"Admin\",\"last_name\":\"Atlaspetrochem\",\"email\":\"admin@atlaspetrochem.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$5klTpDIqZGejURTdaaxWceUlVS3.rLmu09zUA4FWTsQbz1gPwfgqO\",\"password_changed_at\":null,\"active\":\"1\",\"confirmation_code\":\"0d6567ce094e3a8d3260737d5cf90f8e\",\"confirmed\":\"1\",\"timezone\":\"Asia\\/Jakarta\",\"last_login_at\":\"2021-05-05 19:09:44\",\"last_login_ip\":\"114.124.130.35\",\"to_be_logged_out\":\"0\",\"remember_token\":\"6lAgDtxYWof7nvtLKzBOSgmgTQctcLXLmI0gCH9vcM1VNWOwDfgBJVafpdsV\",\"created_at\":\"2021-02-22 13:34:15\",\"updated_at\":\"2021-05-05 19:09:44\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'https://atlaspetrochem.julian.app-show.net/logout', '114.124.130.35', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', '534452d626c8a1cabad2f3d7b3243ee3d6c03d4e1dd032ca2bc244059b9a88060d6c5966511d33ebc5f7b3f5345060464b02262faaf9b3accb8d2e23b328cbce', '2021-05-05 11:57:08', '2021-05-05 11:57:08'),
(9, 'App\\Models\\Auth\\User', 3, 'App\\Models\\Auth\\User', 3, 4, 'updated', '{\"id\":\"3\",\"uuid\":\"6e105278-2bb7-4d55-9a7d-791eec208317\",\"first_name\":\"Admin\",\"last_name\":\"Atlaspetrochem\",\"email\":\"admin@atlaspetrochem.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$5klTpDIqZGejURTdaaxWceUlVS3.rLmu09zUA4FWTsQbz1gPwfgqO\",\"password_changed_at\":null,\"active\":\"1\",\"confirmation_code\":\"0d6567ce094e3a8d3260737d5cf90f8e\",\"confirmed\":\"1\",\"timezone\":\"Asia\\/Jakarta\",\"last_login_at\":\"2021-05-06 09:09:49\",\"last_login_ip\":\"182.253.34.157\",\"to_be_logged_out\":\"0\",\"remember_token\":\"6lAgDtxYWof7nvtLKzBOSgmgTQctcLXLmI0gCH9vcM1VNWOwDfgBJVafpdsV\",\"created_at\":\"2021-02-22 13:34:15\",\"updated_at\":\"2021-05-06 09:09:49\",\"deleted_at\":null}', '[\"last_login_at\",\"last_login_ip\",\"updated_at\"]', '[]', '[]', 'https://atlaspetrochem.julian.app-show.net/login', '182.253.34.157', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'fc042ae79edba625f2bc84f52784394c1807a6a155a0ae769c50b8468db5fe5bcd3d8a1fbdaf15c7dc14eeac846addcb21cacdfe1dbf37f832a6dedbf4db7601', '2021-05-06 01:09:49', '2021-05-06 01:09:49'),
(10, 'App\\Models\\Auth\\User', 3, 'App\\Models\\Auth\\User', 3, 4, 'updated', '{\"id\":\"3\",\"uuid\":\"6e105278-2bb7-4d55-9a7d-791eec208317\",\"first_name\":\"Admin\",\"last_name\":\"Atlaspetrochem\",\"email\":\"admin@atlaspetrochem.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$5klTpDIqZGejURTdaaxWceUlVS3.rLmu09zUA4FWTsQbz1gPwfgqO\",\"password_changed_at\":null,\"active\":\"1\",\"confirmation_code\":\"0d6567ce094e3a8d3260737d5cf90f8e\",\"confirmed\":\"1\",\"timezone\":\"Asia\\/Jakarta\",\"last_login_at\":\"2021-05-18 14:46:38\",\"last_login_ip\":\"103.78.114.171\",\"to_be_logged_out\":\"0\",\"remember_token\":\"6lAgDtxYWof7nvtLKzBOSgmgTQctcLXLmI0gCH9vcM1VNWOwDfgBJVafpdsV\",\"created_at\":\"2021-02-22 13:34:15\",\"updated_at\":\"2021-05-18 14:46:38\",\"deleted_at\":null}', '[\"last_login_at\",\"last_login_ip\",\"updated_at\"]', '[]', '[]', 'https://atlaspetrochem.julian.app-show.net/login', '103.78.114.171', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'ec668119a67b401a768276f42852175f47d93840571ba07f3862a5bb67c2c5e5ee5dc8df003ad53fe33a86c7d4f78da0df16f56f714bad57499f83c2ad7db6f1', '2021-05-18 06:46:38', '2021-05-18 06:46:38'),
(11, 'App\\Models\\Auth\\User', 3, 'App\\Models\\Auth\\User', 3, 4, 'updated', '{\"id\":\"3\",\"uuid\":\"6e105278-2bb7-4d55-9a7d-791eec208317\",\"first_name\":\"Admin\",\"last_name\":\"Atlaspetrochem\",\"email\":\"admin@atlaspetrochem.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$5klTpDIqZGejURTdaaxWceUlVS3.rLmu09zUA4FWTsQbz1gPwfgqO\",\"password_changed_at\":null,\"active\":\"1\",\"confirmation_code\":\"0d6567ce094e3a8d3260737d5cf90f8e\",\"confirmed\":\"1\",\"timezone\":\"Asia\\/Jakarta\",\"last_login_at\":\"2021-06-14 15:11:34\",\"last_login_ip\":\"103.78.114.102\",\"to_be_logged_out\":\"0\",\"remember_token\":\"6lAgDtxYWof7nvtLKzBOSgmgTQctcLXLmI0gCH9vcM1VNWOwDfgBJVafpdsV\",\"created_at\":\"2021-02-22 13:34:15\",\"updated_at\":\"2021-06-14 15:11:34\",\"deleted_at\":null}', '[\"last_login_at\",\"last_login_ip\",\"updated_at\"]', '[]', '[]', 'https://atlaspetrochem.julian.app-show.net/login', '103.78.114.102', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Safari/537.36', 'bf0131e0e2331a77b20f4dc52e8e7992a095ce18321ea3a80a3a672f968f2766e1ff6e8a79dfe5179db85a4ce7b80737036b3be3afc112a045a33a4a0c08dbe5', '2021-06-14 07:11:34', '2021-06-14 07:11:34'),
(12, 'App\\Models\\Auth\\User', 3, 'App\\Models\\Auth\\User', 3, 4, 'updated', '{\"id\":\"3\",\"uuid\":\"6e105278-2bb7-4d55-9a7d-791eec208317\",\"first_name\":\"Admin\",\"last_name\":\"Atlaspetrochem\",\"email\":\"admin@atlaspetrochem.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$5klTpDIqZGejURTdaaxWceUlVS3.rLmu09zUA4FWTsQbz1gPwfgqO\",\"password_changed_at\":null,\"active\":\"1\",\"confirmation_code\":\"0d6567ce094e3a8d3260737d5cf90f8e\",\"confirmed\":\"1\",\"timezone\":\"Asia\\/Jakarta\",\"last_login_at\":\"2021-06-23 13:16:24\",\"last_login_ip\":\"139.193.215.207\",\"to_be_logged_out\":\"0\",\"remember_token\":\"6lAgDtxYWof7nvtLKzBOSgmgTQctcLXLmI0gCH9vcM1VNWOwDfgBJVafpdsV\",\"created_at\":\"2021-02-22 13:34:15\",\"updated_at\":\"2021-06-23 13:16:24\",\"deleted_at\":null}', '[\"last_login_at\",\"last_login_ip\",\"updated_at\"]', '[]', '[]', 'https://atlaspetrochem.julian.app-show.net/login', '139.193.215.207', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', 'd9ff56f3614b6b70af6e7a23c48d60a10ed8ed43cdc4e2d3db3740f705a8530bdcf9381d3db7633af91ede746f49c3699a2faacf5f132a5fa044979459503e4e', '2021-06-23 05:16:24', '2021-06-23 05:16:24'),
(13, 'App\\Models\\Auth\\User', 3, 'App\\Models\\Auth\\User', 3, 4, 'updated', '{\"id\":\"3\",\"uuid\":\"6e105278-2bb7-4d55-9a7d-791eec208317\",\"first_name\":\"Admin\",\"last_name\":\"Atlaspetrochem\",\"email\":\"admin@atlaspetrochem.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$5klTpDIqZGejURTdaaxWceUlVS3.rLmu09zUA4FWTsQbz1gPwfgqO\",\"password_changed_at\":null,\"active\":\"1\",\"confirmation_code\":\"0d6567ce094e3a8d3260737d5cf90f8e\",\"confirmed\":\"1\",\"timezone\":\"Asia\\/Jakarta\",\"last_login_at\":\"2021-06-23 13:16:24\",\"last_login_ip\":\"139.193.215.207\",\"to_be_logged_out\":\"0\",\"remember_token\":\"OfhKW3HET4tImuqnX68mYUOwoYsx6VWBtvVzSBktT62wjVCdWnFHBrgc27o5\",\"created_at\":\"2021-02-22 13:34:15\",\"updated_at\":\"2021-06-23 13:16:24\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'https://atlaspetrochem.julian.app-show.net/logout', '139.193.215.207', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '14e79240f0713ff35b0121112d4f15708508b2d2e70a1a399eac5b37102f90792369490d43bd9595057f8cc85cc261307362602a425f0a4524cd82e72c1aa33d', '2021-06-23 07:19:39', '2021-06-23 07:19:39'),
(14, 'App\\Models\\Auth\\User', 3, 'App\\Models\\Auth\\User', 3, 4, 'updated', '{\"id\":\"3\",\"uuid\":\"6e105278-2bb7-4d55-9a7d-791eec208317\",\"first_name\":\"Admin\",\"last_name\":\"Atlaspetrochem\",\"email\":\"admin@atlaspetrochem.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$5klTpDIqZGejURTdaaxWceUlVS3.rLmu09zUA4FWTsQbz1gPwfgqO\",\"password_changed_at\":null,\"active\":\"1\",\"confirmation_code\":\"0d6567ce094e3a8d3260737d5cf90f8e\",\"confirmed\":\"1\",\"timezone\":\"Asia\\/Jakarta\",\"last_login_at\":\"2021-06-23 16:29:57\",\"last_login_ip\":\"182.253.34.157\",\"to_be_logged_out\":\"0\",\"remember_token\":\"OfhKW3HET4tImuqnX68mYUOwoYsx6VWBtvVzSBktT62wjVCdWnFHBrgc27o5\",\"created_at\":\"2021-02-22 13:34:15\",\"updated_at\":\"2021-06-23 16:29:57\",\"deleted_at\":null}', '[\"last_login_at\",\"last_login_ip\",\"updated_at\"]', '[]', '[]', 'https://atlaspetrochem.julian.app-show.net/login', '182.253.34.157', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', '498da17c6e38629263113fd57c8df01382bd886df1a01cea030d9db8fb601d0ff56ad75f7135c792a7e3a276c5cac214f0de5ed6eb74eb52e243f0fd82ab6169', '2021-06-23 08:29:57', '2021-06-23 08:29:57'),
(15, 'App\\Models\\Auth\\User', 3, 'App\\Models\\Auth\\User', 3, 4, 'updated', '{\"id\":\"3\",\"uuid\":\"6e105278-2bb7-4d55-9a7d-791eec208317\",\"first_name\":\"Admin\",\"last_name\":\"Atlaspetrochem\",\"email\":\"admin@atlaspetrochem.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$5klTpDIqZGejURTdaaxWceUlVS3.rLmu09zUA4FWTsQbz1gPwfgqO\",\"password_changed_at\":null,\"active\":\"1\",\"confirmation_code\":\"0d6567ce094e3a8d3260737d5cf90f8e\",\"confirmed\":\"1\",\"timezone\":\"Asia\\/Jakarta\",\"last_login_at\":\"2021-07-21 11:05:20\",\"last_login_ip\":\"114.124.140.134\",\"to_be_logged_out\":\"0\",\"remember_token\":\"OfhKW3HET4tImuqnX68mYUOwoYsx6VWBtvVzSBktT62wjVCdWnFHBrgc27o5\",\"created_at\":\"2021-02-22 13:34:15\",\"updated_at\":\"2021-07-21 11:05:20\",\"deleted_at\":null}', '[\"last_login_at\",\"last_login_ip\",\"updated_at\"]', '[]', '[]', 'https://atlaspetrochem.julian.app-show.net/login', '114.124.140.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.164 Safari/537.36', '409e6df39fc741b12ac6af5587e354fd7440c92a2debe40fbf73997bc56446e4a2095e77fb191f8a1c2f5fe6cd35d5783fbdb82da4ed241a7d72553b06572171', '2021-07-21 03:05:20', '2021-07-21 03:05:20'),
(16, 'App\\Models\\Auth\\User', 3, 'App\\Models\\Auth\\User', 3, 4, 'updated', '{\"id\":\"3\",\"uuid\":\"6e105278-2bb7-4d55-9a7d-791eec208317\",\"first_name\":\"Admin\",\"last_name\":\"Atlaspetrochem\",\"email\":\"admin@atlaspetrochem.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$5klTpDIqZGejURTdaaxWceUlVS3.rLmu09zUA4FWTsQbz1gPwfgqO\",\"password_changed_at\":null,\"active\":\"1\",\"confirmation_code\":\"0d6567ce094e3a8d3260737d5cf90f8e\",\"confirmed\":\"1\",\"timezone\":\"Asia\\/Jakarta\",\"last_login_at\":\"2021-07-21 11:05:20\",\"last_login_ip\":\"114.124.140.134\",\"to_be_logged_out\":\"0\",\"remember_token\":\"WEXJU2BPnb88RyKAP10RLpMIkuJbFC7EPgKiKpsQTlggFBppWQdwuaGeYcPt\",\"created_at\":\"2021-02-22 13:34:15\",\"updated_at\":\"2021-07-21 11:05:20\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'https://atlaspetrochem.julian.app-show.net/logout', '114.124.168.254', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.164 Safari/537.36', '8c8ad8dbfd87f1119d1fedfc13c5064fdfe0ae59c0659054d7a676c135c90f01c168938762210605a3218c51c1a66b99078be39b8a62702372892eb38e73bc0c', '2021-07-21 03:30:49', '2021-07-21 03:30:49'),
(17, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"8e3b4554-8eaa-4fe9-82cc-3038f3b252d9\",\"first_name\":\"Super\",\"last_name\":\"Admin\",\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$EPbsd8OI0kOII1SGbCtcoONVUZUDk9xmryKqe8SR2A8MmcAf74ENe\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"dae54ed4e32a17a2d78fae68fcce155d\",\"confirmed\":1,\"timezone\":\"Asia\\/Jakarta\",\"last_login_at\":\"2021-07-27 16:53:57\",\"last_login_ip\":\"139.193.222.28\",\"to_be_logged_out\":0,\"remember_token\":\"yJEkCaiQGhVAoittdfSi87qmUNl9oW6YY3BaOzafIGqP49EAoVdxrBIo9QAk\",\"created_at\":\"2021-01-25 03:39:35\",\"updated_at\":\"2021-07-27 16:53:57\",\"deleted_at\":null}', '[\"last_login_at\",\"last_login_ip\",\"updated_at\"]', '[]', '[]', 'http://atlaspetrochem.democube.id/login', '139.193.222.28', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '6a9ac117e10fc0112f0dbe7c7f25eec8d2ee0403574922faf29144eb996ffaaafc96cc69fc4afe421a40175912287ac5b30a3ffcf109b1b78bda9e0defaba7ee', '2021-07-27 16:53:57', '2021-07-27 16:53:57'),
(18, 'App\\Models\\Auth\\User', 3, 'App\\Models\\Auth\\User', 3, 4, 'updated', '{\"id\":3,\"uuid\":\"6e105278-2bb7-4d55-9a7d-791eec208317\",\"first_name\":\"Admin\",\"last_name\":\"Atlaspetrochem\",\"email\":\"admin@atlaspetrochem.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$5klTpDIqZGejURTdaaxWceUlVS3.rLmu09zUA4FWTsQbz1gPwfgqO\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"0d6567ce094e3a8d3260737d5cf90f8e\",\"confirmed\":1,\"timezone\":\"Asia\\/Jakarta\",\"last_login_at\":\"2021-07-28 09:25:40\",\"last_login_ip\":\"114.124.144.244\",\"to_be_logged_out\":0,\"remember_token\":\"WEXJU2BPnb88RyKAP10RLpMIkuJbFC7EPgKiKpsQTlggFBppWQdwuaGeYcPt\",\"created_at\":\"2021-02-22 05:34:15\",\"updated_at\":\"2021-07-28 09:25:40\",\"deleted_at\":null}', '[\"last_login_at\",\"last_login_ip\",\"updated_at\"]', '[]', '[]', 'http://atlaspetrochem.democube.id/login', '114.124.144.244', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36 Edg/92.0.902.55', '8e30ef42da5287ce53e36d3014ba6d88089d30e7ad6fa164c889515281205d94541378f8cd8b0fc12fc319824d234b2383e852d2ec29fad6b0ff07ae53244c83', '2021-07-28 09:25:40', '2021-07-28 09:25:40'),
(19, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"8e3b4554-8eaa-4fe9-82cc-3038f3b252d9\",\"first_name\":\"Super\",\"last_name\":\"Admin\",\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$EPbsd8OI0kOII1SGbCtcoONVUZUDk9xmryKqe8SR2A8MmcAf74ENe\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"dae54ed4e32a17a2d78fae68fcce155d\",\"confirmed\":1,\"timezone\":\"Asia\\/Jakarta\",\"last_login_at\":\"2021-07-28 12:25:28\",\"last_login_ip\":\"139.193.222.28\",\"to_be_logged_out\":0,\"remember_token\":\"yJEkCaiQGhVAoittdfSi87qmUNl9oW6YY3BaOzafIGqP49EAoVdxrBIo9QAk\",\"created_at\":\"2021-01-25 03:39:35\",\"updated_at\":\"2021-07-28 12:25:28\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://atlaspetrochem.democube.id/login', '139.193.222.28', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', 'ccb36a6b500c31a4d399dac0ce79f16787d389d86b162baf625490b2e7d078f95c81d6d63f1c461712d3088ff43c96db5160e8b0811a78b23dc4480b766cbec0', '2021-07-28 12:25:28', '2021-07-28 12:25:28'),
(20, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"8e3b4554-8eaa-4fe9-82cc-3038f3b252d9\",\"first_name\":\"Super\",\"last_name\":\"Admin\",\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$EPbsd8OI0kOII1SGbCtcoONVUZUDk9xmryKqe8SR2A8MmcAf74ENe\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"dae54ed4e32a17a2d78fae68fcce155d\",\"confirmed\":1,\"timezone\":\"Asia\\/Jakarta\",\"last_login_at\":\"2021-07-28 12:25:28\",\"last_login_ip\":\"139.193.222.28\",\"to_be_logged_out\":0,\"remember_token\":\"pxcumnNRxSDZNmV7CuDaY0tngXK2euR0EgHuaVWig4NM2Bo79froXg84MDN1\",\"created_at\":\"2021-01-25 03:39:35\",\"updated_at\":\"2021-07-28 12:25:28\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://atlaspetrochem.democube.id/logout', '139.193.222.28', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', 'affa645210d14c1be6321e3e25da5a7e9bb811936e2b31028cf1cb4b3ba4f31bc3dd5d813f5e784354af794061fff60cab10fb2bfb5b7ee87851b80b32ba6ba7', '2021-07-28 14:24:22', '2021-07-28 14:24:22'),
(21, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"8e3b4554-8eaa-4fe9-82cc-3038f3b252d9\",\"first_name\":\"Super\",\"last_name\":\"Admin\",\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$EPbsd8OI0kOII1SGbCtcoONVUZUDk9xmryKqe8SR2A8MmcAf74ENe\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"dae54ed4e32a17a2d78fae68fcce155d\",\"confirmed\":1,\"timezone\":\"Asia\\/Jakarta\",\"last_login_at\":\"2021-07-30 11:12:59\",\"last_login_ip\":\"139.193.222.28\",\"to_be_logged_out\":0,\"remember_token\":\"pxcumnNRxSDZNmV7CuDaY0tngXK2euR0EgHuaVWig4NM2Bo79froXg84MDN1\",\"created_at\":\"2021-01-25 03:39:35\",\"updated_at\":\"2021-07-30 11:12:59\",\"deleted_at\":null}', '[\"last_login_at\",\"updated_at\"]', '[]', '[]', 'http://atlaspetrochem.democube.id/login', '139.193.222.28', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', 'c310ca23c301c585addee2073bdab8656394b1b9a08e986e943e418bbaf87b3303228301829c93dce6cc80bcc94284a8899a15e3686b21ad0e61e808e337134f', '2021-07-30 11:12:59', '2021-07-30 11:12:59'),
(22, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"8e3b4554-8eaa-4fe9-82cc-3038f3b252d9\",\"first_name\":\"Super\",\"last_name\":\"Admin\",\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$EPbsd8OI0kOII1SGbCtcoONVUZUDk9xmryKqe8SR2A8MmcAf74ENe\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"dae54ed4e32a17a2d78fae68fcce155d\",\"confirmed\":1,\"timezone\":\"Asia\\/Jakarta\",\"last_login_at\":\"2021-07-30 11:12:59\",\"last_login_ip\":\"139.193.222.28\",\"to_be_logged_out\":0,\"remember_token\":\"NSJu54jKF2qonjEmceglmrVrIxfZmog06DCP6rwkwBGx3E2ssOuGiK15m7Js\",\"created_at\":\"2021-01-25 03:39:35\",\"updated_at\":\"2021-07-30 11:12:59\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://atlaspetrochem.democube.id/logout', '139.193.222.28', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', 'de3146179a6184f4a53d737da3c92dc4de29e501fa53aa4ef7fbde1c37cd02175ccafa238b2f6e926f9df01d84740429b3b55e564f85382fd10e085627d6e601', '2021-07-30 13:06:20', '2021-07-30 13:06:20'),
(23, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"8e3b4554-8eaa-4fe9-82cc-3038f3b252d9\",\"first_name\":\"Super\",\"last_name\":\"Admin\",\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$EPbsd8OI0kOII1SGbCtcoONVUZUDk9xmryKqe8SR2A8MmcAf74ENe\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"dae54ed4e32a17a2d78fae68fcce155d\",\"confirmed\":1,\"timezone\":\"Asia\\/Jakarta\",\"last_login_at\":\"2021-08-10 16:46:12\",\"last_login_ip\":\"114.124.143.22\",\"to_be_logged_out\":0,\"remember_token\":\"NSJu54jKF2qonjEmceglmrVrIxfZmog06DCP6rwkwBGx3E2ssOuGiK15m7Js\",\"created_at\":\"2021-01-25 03:39:35\",\"updated_at\":\"2021-08-10 16:46:12\",\"deleted_at\":null}', '[\"last_login_at\",\"last_login_ip\",\"updated_at\"]', '[]', '[]', 'http://atlaspetrochem.democube.id/login', '114.124.143.22', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '44d22fe2faf0a4ba5c16884769af102ae7595963f26385cda712d6b3646d9ed5ac5941c07096aa4468f328cbaf85a62bf6b158a826d9cd7d4f687d23667e5204', '2021-08-10 16:46:12', '2021-08-10 16:46:12'),
(24, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"8e3b4554-8eaa-4fe9-82cc-3038f3b252d9\",\"first_name\":\"Super\",\"last_name\":\"Admin\",\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$EPbsd8OI0kOII1SGbCtcoONVUZUDk9xmryKqe8SR2A8MmcAf74ENe\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"dae54ed4e32a17a2d78fae68fcce155d\",\"confirmed\":1,\"timezone\":\"Asia\\/Jakarta\",\"last_login_at\":\"2021-08-12 13:55:36\",\"last_login_ip\":\"139.193.222.71\",\"to_be_logged_out\":0,\"remember_token\":\"NSJu54jKF2qonjEmceglmrVrIxfZmog06DCP6rwkwBGx3E2ssOuGiK15m7Js\",\"created_at\":\"2021-01-25 03:39:35\",\"updated_at\":\"2021-08-12 13:55:36\",\"deleted_at\":null}', '[\"last_login_at\",\"last_login_ip\",\"updated_at\"]', '[]', '[]', 'http://atlaspetrochem.democube.id/login', '139.193.222.71', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '9f1f75a63792bbab8de1be5aade0682b3851248040ebec59a9f70afe66847cc3ca8b3f3f5bdd209f26b4839091aa1d632339af7f1a401e86b853ff75a210de76', '2021-08-12 13:55:36', '2021-08-12 13:55:36'),
(25, 'App\\Models\\Auth\\User', 1, 'App\\Models\\Auth\\User', 1, 4, 'updated', '{\"id\":1,\"uuid\":\"8e3b4554-8eaa-4fe9-82cc-3038f3b252d9\",\"first_name\":\"Super\",\"last_name\":\"Admin\",\"email\":\"admin@admin.com\",\"avatar_type\":\"gravatar\",\"avatar_location\":null,\"password\":\"$2y$10$EPbsd8OI0kOII1SGbCtcoONVUZUDk9xmryKqe8SR2A8MmcAf74ENe\",\"password_changed_at\":null,\"active\":1,\"confirmation_code\":\"dae54ed4e32a17a2d78fae68fcce155d\",\"confirmed\":1,\"timezone\":\"Asia\\/Jakarta\",\"last_login_at\":\"2021-08-12 13:55:36\",\"last_login_ip\":\"139.193.222.71\",\"to_be_logged_out\":0,\"remember_token\":\"g2v0xJNDuZsI83MiCIX4VBTEZBpS476oBhXXUJ4znCXICv39VUb4EAKtpz9Y\",\"created_at\":\"2021-01-25 03:39:35\",\"updated_at\":\"2021-08-12 13:55:36\",\"deleted_at\":null}', '[\"remember_token\"]', '[]', '[]', 'http://atlaspetrochem.democube.id/logout', '139.193.222.71', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', 'ecad69f48371f2fe1d62f9ea43a0c69eedd0ba579f88e1fda710e484e023daf3a920d21e763c64c241204e1335761dcd973fdcef21e2bd319d5dd0a22d8b8984', '2021-08-12 14:29:13', '2021-08-12 14:29:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `main_categories`
--

CREATE TABLE `main_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image_location` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `banner_image_location_desktop` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image_location_mobile` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `main_categories`
--

INSERT INTO `main_categories` (`id`, `name`, `slug`, `description`, `image_location`, `created_at`, `updated_at`, `banner_image_location_desktop`, `banner_image_location_mobile`) VALUES
(1, 'Automotive Products', 'automotive-products', NULL, NULL, '2021-04-16 04:12:11', '2021-07-28 13:07:51', 'http://atlaspetrochem.democube.id//storage/photos/1/PRODUCT - BANNER AUTO.jpg', ''),
(2, 'Industrial Products', 'industrial-products', NULL, NULL, '2021-04-16 04:12:11', '2021-07-28 13:07:22', 'http://atlaspetrochem.democube.id//storage/photos/1/PRODUCT - BANNER IND.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_09_03_144628_create_permission_tables', 1),
(4, '2017_09_11_174816_create_social_accounts_table', 1),
(5, '2017_09_26_140332_create_cache_table', 1),
(6, '2017_09_26_140528_create_sessions_table', 1),
(7, '2017_09_26_140609_create_jobs_table', 1),
(8, '2018_04_08_033256_create_password_histories_table', 1),
(9, '2018_11_21_000001_create_ledgers_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2021_02_17_120051_create_banner_slider_table', 2),
(12, '2021_02_18_144757_create_news_table', 2),
(13, '2021_02_18_234642_create_galeries_table', 2),
(14, '2021_02_19_003703_add_intro_column_to_news_table', 2),
(15, '2021_02_19_103104_modify_galeries_table', 2),
(16, '2021_02_19_103454_add_title_column_to_galeries_table', 2),
(17, '2021_02_19_105157_add_slug_column_to_galeries_table', 2),
(18, '2021_02_19_135927_create_careers_table', 2),
(19, '2021_02_19_230734_add_uuid_column_to_careers_table', 2),
(20, '2021_02_20_161643_create_application_jobs_table', 2),
(21, '2021_03_12_114529_add_deleted_at_column_to_career_table', 3),
(22, '2021_03_22_144935_create_faqs_table', 4),
(23, '2021_03_22_151318_add_active_column_to_faqs_table', 4),
(24, '2021_03_24_175513_add_overlay_effect_column_to_banner_slider_table', 4),
(25, '2021_03_24_180946_update__column__banner_slider_table', 4),
(26, '2021_03_24_182022_update_title_and_description_column_on_banner_slider_table', 4),
(27, '2021_03_24_182317_add_linked_column_to_banner_slider_table', 4),
(28, '2021_03_24_182521_add_link_location_column_to_banner_slider_table', 4),
(29, '2021_03_29_122428_create_categories_table', 4),
(30, '2021_03_29_140415_create_company_banners_table', 4),
(31, '2021_03_29_140629_add_division_column_to_categories_table', 4),
(32, '2021_03_29_151119_add_description_column_to_categories_table', 4),
(33, '2021_03_29_153514_add_slug_column_to_categories_table', 4),
(34, '2021_03_29_155858_create_products_table', 4),
(35, '2021_03_31_092026_create_team_banners_table', 5),
(36, '2021_04_05_130443_create_company_contents_table', 6),
(37, '2021_04_05_170025_create_about_contents_table', 6),
(38, '2021_04_05_170755_add_thumb_text_columnt_to_about_contents_table', 6),
(39, '2021_04_06_121002_add_featured_image_location_column_to_about_contents_table', 6),
(40, '2021_04_06_155142_create_web_settings_table', 7),
(41, '2021_04_15_132614_add_sort_columnt_to_banner_slider_table', 8),
(42, '2021_04_15_160213_create_main_categories_table', 8),
(43, '2021_04_15_161505_drop_division_column_from_categories_table', 8),
(44, '2021_04_16_094948_add_link_column_to_products_table', 8),
(45, '2021_04_20_123418_add_type_column_to_galeries_table', 9),
(46, '2021_04_20_134802_add_youtube_column_to_galeries_table', 9),
(47, '2021_04_22_163209_create_banner_per_pages_table', 10),
(48, '2021_04_22_220606_update_key_column_at_banner_per_pages_table', 10),
(49, '2021_04_27_091636_add_banner_image_location_to_main_categories_table', 11),
(50, '2021_04_27_092131_updaye_banner_image_location_to_main_categories_table', 11),
(51, '2021_04_27_140535_create_news_thumbnails_table', 12),
(52, '2021_07_23_122745_update_news_table', 13),
(53, '2021_07_23_122927_update_structure_data_on_galeries_table', 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int UNSIGNED NOT NULL,
  `model_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\Auth\\User', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int UNSIGNED NOT NULL,
  `model_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\Auth\\User', 1),
(1, 'App\\Models\\Auth\\User', 3),
(2, 'App\\Models\\Auth\\User', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `slug` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumb_location` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `intro` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `title`, `value`, `slug`, `thumb_location`, `featured_image`, `deleted_at`, `created_at`, `updated_at`, `intro`) VALUES
(1, '{\"en\":\"Lubricant Seminar 2016\",\"id\":\"Seminar Pelumas 2016\"}', '{\"en\":\"<p>WARMEST GREETING FROM PT IDEMITSU LUBE TECHNO INDONESIA. WE HAVE BEEN OPERATING SINCE 2004 SPECIALIZED IN PRODUCT S FOR BOTH INDUSTRIAL AND AUTOMOTIVE LUBRICANTS IN INDONESIA. WE WOULD LIKE TO INVITE YOU TO UPCOMING LUBRICANT SEMINAR, WHICH WILL TAKE PLACE AT :PLACE : HOLIDAY INN CIKARANG JABABEKA<br style=\\\"outline: none; margin: 0px; padding: 0px;\\\" \\/>DATE : WEDNESDAY, 5 OCTOBER 2016<br style=\\\"outline: none; margin: 0px; padding: 0px;\\\" \\/>TIME : 11.00 &ndash; 17.30<\\/p>\\r\\n<p>THE AIM SEMINAR IS TO HAVE PROFOUND STUDY IN THE HEAT TREATMENT TECHNOLOGY AS WE SEE REMARKABLE NUMBER OF HEAT TREATMENT BASED JAPANESE COMPANIES ESTABLISHE THEIR OPERATIONS HERE IN INDONESIA.THE CONTENT OF OUR 2ND WORKSHOP WILL BE FOCUSING MORE ON IMPROVING THE TECHNICAL ASPECT IN THE FIELD RATHER THAN PROVIDING ACADEMIC KNOWLEDGE OF HEAT TREATMENT. SHOULD YOU HAVE ANY QUESTIONS REGARDING THIS EVENT, PLEASE KINDLY FEEL FREE TO CONTACT US DIRECTLY. WE LOOK FORWARD FOR YOUR PARTICIPATION IN OUR SEMINAR.<\\/p>\",\"id\":\"<p>WARMEST GREETING FROM PT IDEMITSU LUBE TECHNO INDONESIA. WE HAVE BEEN OPERATING SINCE 2004 SPECIALIZED IN PRODUCT S FOR BOTH INDUSTRIAL AND AUTOMOTIVE LUBRICANTS IN INDONESIA. WE WOULD LIKE TO INVITE YOU TO UPCOMING LUBRICANT SEMINAR, WHICH WILL TAKE PLACE AT :PLACE : HOLIDAY INN CIKARANG JABABEKA<br style=\\\"outline: none; margin: 0px; padding: 0px;\\\" \\/>DATE : WEDNESDAY, 5 OCTOBER 2016<br style=\\\"outline: none; margin: 0px; padding: 0px;\\\" \\/>TIME : 11.00 &ndash; 17.30<\\/p>\\r\\n<p>THE AIM SEMINAR IS TO HAVE PROFOUND STUDY IN THE HEAT TREATMENT TECHNOLOGY AS WE SEE REMARKABLE NUMBER OF HEAT TREATMENT BASED JAPANESE COMPANIES ESTABLISHE THEIR OPERATIONS HERE IN INDONESIA.THE CONTENT OF OUR 2ND WORKSHOP WILL BE FOCUSING MORE ON IMPROVING THE TECHNICAL ASPECT IN THE FIELD RATHER THAN PROVIDING ACADEMIC KNOWLEDGE OF HEAT TREATMENT. SHOULD YOU HAVE ANY QUESTIONS REGARDING THIS EVENT, PLEASE KINDLY FEEL FREE TO CONTACT US DIRECTLY. WE LOOK FORWARD FOR YOUR PARTICIPATION IN OUR SEMINAR.<\\/p>\"}', '{\"en\":\"lubricant-seminar-2016\",\"id\":\"seminar-pelumas-2016\"}', 'http://atlaspetrochem.democube.id//storage/photos/1/Design-Mockup-Campaign-3.jpg', 'http://atlaspetrochem.democube.id//storage/photos/1/Design-Mockup-Campaign-3.jpg', NULL, '2021-03-31 00:35:24', '2021-08-12 13:59:43', '{\"en\":\"Heat Treatment Workshop\",\"id\":\"Workshop Heat Treatment\"}'),
(2, '{\"en\":\"IDEMITSU Road To MOTO GP 2021\",\"id\":\"IDEMITSU Road To MOTO GP 2021\"}', '{\"en\":\"<p>Brads, who misses watching MotoGP so much?<\\/p>\\r\\n<p>Before watching the action of each of your favorite racers on the track, it\'s a good idea to take a look at the preparations for MotoGP this season!<\\/p>\\r\\n<p>Come on, join together on Live Instagram Idemitsu to talk about the preparations of various figures in MotoGP for this year\'s championship. We will thoroughly peel each preparation starting from; Manager of MotoGP Racing Team, Racers, to Indonesia\'s readiness to host MotoGP in Mandalika.<\\/p>\\r\\n<p>So, don\'t miss it to watch Live Instagram Idemitsu on:<\\/p>\\r\\n<p>Saturday<br \\/>Dates: March 27, April 3, and April 10, 2021<br \\/>Hours: 16.00 WIB - Done<br \\/>Channel : @Idemitsu_Lube<\\/p>\\r\\n<p>There will be Kang Taufik from TMC Blog who will accompany you to chat with each character. Curious who Idemitsu will talk to? Follow Idemitsu\'s Instagram to get the latest updates. See you on Live Instagram Idemitsu Road to MotoGP, Brads!<\\/p>\",\"id\":\"<p>Brads, siapa yang udah kangen banget buat nonton MotoGP?<\\/p>\\r\\n<p>Sebelum nonton aksi dari masing-masing pembalap jagoan kalian di atas trek, ada baiknya kita simak dulu persiapan untuk MotoGP di musim ini!<\\/p>\\r\\n<p>Yuk, gabung bareng di Live Instagram Idemitsu untuk ngobrolin persiapan dari berbagai tokoh di MotoGP untuk kejuaraan tahun ini. Kita akan kupas tuntas setiap persiapan mulai dari; Manger Tim Balap MotoGP, Pembalap, sampai dengan kesiapan Indonesia untuk menjadi tuan rumah MotoGP di Mandalika.<\\/p>\\r\\n<p>Jadi, jangan sampai terlewat untuk nonton Live Instagram Idemitsu pada:<\\/p>\\r\\n<table class=\\\"table table-bordered\\\">\\r\\n<tbody>\\r\\n<tr>\\r\\n<td>Hari<\\/td>\\r\\n<td>: Sabtu<\\/td>\\r\\n<\\/tr>\\r\\n<tr>\\r\\n<td>Tanggal<\\/td>\\r\\n<td>: 27 Maret, 3 April, dan 10 April 2021<\\/td>\\r\\n<\\/tr>\\r\\n<tr>\\r\\n<td>Jam<\\/td>\\r\\n<td>: 16.00 WIB - Selesai<\\/td>\\r\\n<\\/tr>\\r\\n<tr>\\r\\n<td>Channel<\\/td>\\r\\n<td>:\\u00a0<a href=\\\"https:\\/\\/www.instagram.com\\/idemitsu_lube\\/\\\" target=\\\"_blank\\\" rel=\\\"noopener\\\">@Idemitsu_Lube<\\/a><\\/td>\\r\\n<\\/tr>\\r\\n<\\/tbody>\\r\\n<\\/table>\\r\\n<p>Akan ada Kang Taufik dari TMC Blog yang akan nemenin kalian untuk ngobrol bareng setiap tokoh. Penasaran siapa aja yang akan Idemitsu ajak ngobrol bareng? Ikuti terus Instagram Idemitsu untuk mendapatkan update terbarunya. Sampai jumpa di Live Instagram Idemitsu Road to MotoGP, Brads!<\\/p>\"}', '{\"en\":\"idemitsu-road-to-moto-gp-2021\",\"id\":\"idemitsu-road-to-moto-gp-2021\"}', 'http://atlaspetrochem.democube.id//storage/photos/1/web-banner.jpg', 'http://atlaspetrochem.democube.id//storage/photos/1/web-banner.jpg', NULL, '2021-03-31 00:35:24', '2021-08-12 13:59:50', '{\"en\":\"Live Instagram Idemitsu to talk about the preparations of various figures in MotoGP for this year\'s sport. We will complete every preparation starting from; MotoGP Racing Team Manager, Racers, to Indonesia\'s readiness to host\",\"id\":\"Live Instagram Idemitsu untuk ngobrolin persiapan dari berbagai tokoh di MotoGP untuk kejuaraan tahun ini. Kita akan kupas tuntas setiap persiapan mulai dari; Manger Tim Balap MotoGP, Pembalap, sampai dengan kesiapan Indonesia untuk menjadi tuan rumah\"}'),
(3, '{\"en\":\"Pelumas Idemitsu Sudah Bersetifikasi SNI\",\"id\":\"Pelumas Idemitsu Sudah Bersetifikasi SNI\"}', '{\"id\":\"<p>Sehubungan dengan ketentuan Pasal 4 Peraturan Mentri Perindustrian No. 25 tahun 2018 mengenai pemberlakuan Standar Nasional Indonesia Pelumas Secara Wajib terhadap produk-produk pelumas kendaraan bermotor, PT Idemitsu Lube Techno Indonesia menginformasikan bahwa seluruh produk-produk pelumas Idemitsu sudah memenuhi Standar Nasional Indonesia.<\\/p>\"}', '{\"en\":\"pelumas-idemitsu-sudah-bersetifikasi-sni\",\"id\":\"pelumas-idemitsu-sudah-bersetifikasi-sni\"}', 'http://atlaspetrochem.democube.id//storage/photos/1/lines-up-banner.jpg', 'http://atlaspetrochem.democube.id//storage/photos/1/lines-up-banner.jpg', NULL, '2021-03-31 00:35:24', '2021-08-12 14:01:00', '{\"id\":\"Sertifikat SNI untuk Produk IDEMITSU\"}'),
(4, 'THE.', 'Suscipit esse dolorem qui repellat laudantium ut aut similique. Saepe iure eligendi perferendis atque accusamus. Ut sapiente enim architecto tenetur officia perspiciatis. Cum aperiam eveniet fugit. Sit laudantium sit molestias consequuntur. Hic deserunt autem id corrupti enim. Minima voluptatem illum cum voluptas voluptatem praesentium. Vel et eius molestias quia qui. Fuga rerum consequuntur id libero. Possimus placeat tenetur corporis voluptate voluptate sequi qui atque. Dolorem magni ut fugit beatae excepturi vel sit. Ad at dicta libero quia et suscipit et. Ullam repudiandae atque sequi dolore et. Dolorem tempora qui doloribus rerum eum eaque. Alias iure repellendus sint doloremque. Quibusdam repellendus assumenda a pariatur quia quis ex magni. Iusto omnis sunt dolor fugiat blanditiis. Ut natus et accusantium reiciendis itaque. Consequatur autem maxime qui molestiae ullam aut. Ut omnis necessitatibus tenetur reiciendis. Aliquam quis blanditiis iusto. Quas unde quis assumenda numquam. Necessitatibus quaerat facere odit accusamus. Est et quia sed. Aut vitae tempore rerum cupiditate ut. Laborum praesentium iusto molestias occaecati. Est qui cupiditate et. Dolorem enim quod provident repellat saepe laudantium. Qui qui unde dolore ab necessitatibus maiores. Quidem vero fugit vel. Vel autem dolore aut et accusamus minima adipisci. Sit culpa cumque sunt ut ut voluptas omnis eaque.', NULL, NULL, NULL, '2021-04-19 03:22:57', '2021-03-31 00:35:24', '2021-04-19 03:22:57', 'Corporis dolor ut ut sit repellendus architecto asperiores. Qui voluptatum optio commodi et quibusdam rerum qui. Perferendis reiciendis quibusdam modi nesciunt magnam. Velit optio necessitatibus doloremque aut animi. Aperiam et praesentium ducimus cumque quisquam maiores sit. A voluptatem est architecto vero rerum necessitatibus.'),
(5, 'WOULD twist itself round and.', 'Facilis voluptas saepe facere consequuntur modi. Facere quia quaerat aut iure ea quod placeat. Quia fugit odio accusantium in. Et reprehenderit ex consectetur. Dolor occaecati similique officia vitae et. Non est itaque est cumque. Quis ea rerum doloremque nostrum omnis sunt est. Accusamus aut maiores eligendi et eaque consequatur. Consequatur omnis sint quos et vel. Ipsa vero numquam et. Vero veritatis doloremque ea rerum enim. Pariatur maxime qui ut aut amet. Repellendus officia magnam aut ut officiis esse sit. Aut voluptates nulla unde veniam ad porro aperiam dolor. Quia ut porro rem rerum omnis eaque dolores. Dolorum sit rem veritatis et cupiditate sequi laborum. Est dolor pariatur occaecati natus. Molestiae et illum doloremque. Est accusantium atque fugiat minus. Ut excepturi nemo iusto aut adipisci. Eius dolore accusamus in est eos.', NULL, NULL, NULL, '2021-04-19 03:23:01', '2021-03-31 00:35:24', '2021-04-19 03:23:01', 'Porro voluptas assumenda perferendis veniam quia. Qui numquam voluptates rem quasi nulla vitae est. Rerum sed nostrum sed ipsum repellat nisi sit repellendus. Architecto sint libero dolor non quis. A voluptatum et velit consectetur voluptatem culpa voluptas.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news_thumbnails`
--

CREATE TABLE `news_thumbnails` (
  `id` bigint UNSIGNED NOT NULL,
  `news_id` bigint NOT NULL,
  `sort` tinyint NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `news_thumbnails`
--

INSERT INTO `news_thumbnails` (`id`, `news_id`, `sort`) VALUES
(1, 3, 1),
(2, 2, 2),
(3, 2, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_histories`
--

CREATE TABLE `password_histories` (
  `id` int UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_histories`
--

INSERT INTO `password_histories` (`id`, `user_id`, `password`, `created_at`, `updated_at`) VALUES
(1, 1, '$2y$10$EPbsd8OI0kOII1SGbCtcoONVUZUDk9xmryKqe8SR2A8MmcAf74ENe', '2021-01-25 03:39:35', '2021-01-25 03:39:35'),
(2, 2, '$2y$10$s1DawKWRy7OQJPUCvApgDOUUW3khhgivLGdxUrKQserym6FxcdHcm', '2021-01-25 03:39:35', '2021-01-25 03:39:35'),
(3, 3, '$2y$10$5klTpDIqZGejURTdaaxWceUlVS3.rLmu09zUA4FWTsQbz1gPwfgqO', '2021-02-22 05:34:15', '2021-02-22 05:34:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view backend', 'web', '2021-01-25 03:39:35', '2021-01-25 03:39:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint NOT NULL,
  `name` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image_location` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `link` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `description`, `image_location`, `deleted_at`, `created_at`, `updated_at`, `link`) VALUES
(1, 1, 'MULTI PURPOSE OIL', 'multi-purpose-oil', '<p><a href=\"https://ilti.idemitsu.com/files/uploads/2015/08/DN-MECHANIC-OIL-SERIES.pdf\" target=\"_blank\" rel=\"noopener\"><span style=\"color: #0000ff;\">DAPHNE MECHANIC OIL</span></a><br />Oli multi-purpose yang diformulasikan dengan paraffinic base oil dan berbagai zat aditif seperti mengurangi oksidasi, mencegah karat, anti-busa, dan juga pelumas lainnya untuk memberikan kinerja yang terbaik.</p>\r\n<p><a href=\"https://ilti.idemitsu.com/files/uploads/2015/08/DN-SUPER-MULTI-OIL-SERIES.pdf\" target=\"_blank\" rel=\"noopener\"><span style=\"color: #0000ff;\">DAPHNE SUPER MULTI OIL</span></a><span style=\"color: #0000ff;\">&nbsp;</span><br />Seri Daphne Super Multi Oil merupakan oli multi-purpose terbaik yang diformulasikan dengan paraffinic base oil dan berbagai zat aditif seperti mengurangi oksidasi, mencegah karat, anti-busa, dan juga pelumas lainnya untuk memberikan kinerja yang maksimal.<span style=\"background-color: #fafafa;\"><br /></span></p>', NULL, NULL, '2021-03-31 00:35:24', '2021-04-27 05:10:54', 'https://ilti.idemitsu.com/files/uploads/2015/08/DN-MECHANIC-OIL-SERIES.pdf'),
(2, 1, 'SLIDEWAY OIL', 'slideway-oil', '<p><span style=\"color: #236fa1;\"><a style=\"color: #236fa1;\" href=\"https://ilti.idemitsu.com/files/uploads/2015/08/DN-MULTI-WAY-MT-SERIES.pdf\" target=\"_blank\" rel=\"noopener\">DAPHNE MULTIWAY MT</a>&nbsp;</span><br />Daphne Multiway MT series merupakan rangkaian dari oli premium grade slideway yang memiliki kinerja terbaik. Oli ini secara spesifik telah diformulasikan dengan paraffin base oil yang berkolaborasi dengan berbagai zat lain seperti anti-oksidan dan anti-noda untuk memberikan kinerja yang terbaik.</p>', NULL, NULL, '2021-03-31 00:35:24', '2021-04-27 05:25:47', 'https://ilti.idemitsu.com/files/uploads/2015/08/DN-MULTI-WAY-MT-SERIES.pdf'),
(3, 1, 'TURBINE OIL', 'turbine-oil', '<p><a href=\"https://ilti.idemitsu.com/files/uploads/2015/08/DN-TURBINE-OIL-SERIES.pdf\" target=\"_blank\"><font color=\"#0000ff\">DAPHNE TURBINE OIL</font></a><br>Daphne Turbine Oil Series merupakan oli turbin premium yang diformulasikan dengan hydrocracked paraffinic base oil dan mengandung berbagai aditif seperti anti-oksidasi, pencegah karat, anti-busa, dan juga pelumas.</p><p><a href=\"https://ilti.idemitsu.com/files/uploads/2015/08/DN-SUPER-TURBINE-OIL-SERIES.pdf\" target=\"_blank\"><font color=\"#0000ff\">DAPHNE SUPER TURBINE OIL</font></a><br>Daphne Super Turbine Oil merupakan oli turbin premium yang diformulasikan secara khusus dari hydrotreated paraffinic base oil serta berbagai aditif seperti anti-oksidasi, pencegah karat, anti-busa, dan juga pelumas.</p><p><a href=\"https://ilti.idemitsu.com/files/uploads/2015/08/DN-SUPER-TURBINE-OIL-MG32.pdf\" target=\"_blank\"><font color=\"#0000ff\">DAPHNE SUPER TURBINE OIL MG</font></a><br>Daphne Super Turbine Oil MG32 merupakan oli turbin tahan lama yang diformulasikan secara khusus dari hydrogenated paraffin-base oil serta berbagai aditif seperti anti-oksidan dan anti-busa.<br></p>', NULL, NULL, '2021-03-31 00:35:24', '2021-04-23 03:16:03', 'https://ilti.idemitsu.com/files/uploads/2015/08/DN-SUPER-TURBINE-OIL-SERIES.pdf'),
(4, 1, 'HYDRAULIC OIL', 'hydraulic-oil', '<p><a href=\"https://ilti.idemitsu.com/files/uploads/2015/08/DN-SUPER-HYDRO-A-SERIES_v2.pdf\" target=\"_blank\"><font color=\"#0000ff\">DAPHNE SUPER HYDRO A</font></a><br>Seri Daphne Super Hydro A merupakan oli hidrolik nonzinc yang diformulasikan dengan hydro-treated base oil dengan anti-keausan, anti-oksidan, dan zat aditif lainnya untuk meningkatkan performa di sistem hidrolik.<br></p>', NULL, NULL, '2021-03-31 00:35:24', '2021-04-23 03:20:39', 'https://ilti.idemitsu.com/files/uploads/2015/08/DN-SUPER-HYDRO-A-SERIES_v2.pdf'),
(5, 1, 'MIST LUBRICATING OIL', 'mist-lubricating-oil', '<font color=\"#0000ff\">DN MIST MULTI MU Series</font>', NULL, NULL, '2021-03-31 00:35:24', '2021-04-23 03:35:27', NULL),
(6, 2, 'HEAT TREATING OIL', 'heat-treating-oil', '<p><font color=\"#0000ff\">DN BRIGHT QUENCH</font></p><p><font color=\"#0000ff\">DN HI TEMP OIL Series</font></p><p><font color=\"#0000ff\">DN MASTER QUENCH A</font></p><p><font color=\"#0000ff\">DN PLASTIC QUENCH RP</font></p><p><font color=\"#0000ff\">DN QUENCH Series</font><br></p>', NULL, NULL, '2021-03-31 00:35:24', '2021-04-23 08:12:08', NULL),
(7, 2, 'HEAT TRANSFER OIL', 'heat-transfer-oil', '<p><font color=\"#0000ff\">DN ALPHA THERMO Series</font></p><p><font color=\"#0000ff\">DN THERMIC OIL Series<br></font></p><p><br></p>', NULL, NULL, '2021-03-31 00:35:24', '2021-04-23 08:13:50', NULL),
(8, 2, 'NON-SOLUBLE CUTTING OIL', 'non-soluble-cutting-oil', '<p><a href=\"https://ilti.idemitsu.com/files/uploads/2015/08/DN-CUT-HL-25.pdf\" target=\"_blank\"><font color=\"#0000ff\">DAPHNE CUT HL-25</font></a><br>Oli Electro-Discharge Machine (EDM) berkualitas tinggi secara khusus diformulasikan dengan oli dasar sintetis untuk memberikan performa tidak terkalahkan. Oli yang jernih dan transparan ini tidak berbau dan tidak beracun, serta memiliki viskositas rendah dan flash point yang tinggi, yang menghasilkan kinerja aman dan memuaskan.</p><p><a href=\"https://ilti.idemitsu.com/files/uploads/2015/08/DN-MAGPLUS-AM-30.pdf\" target=\"_blank\"><font color=\"#0000ff\">DAPHNE MAGPLUS AM 30</font></a><br>Daphne Magplus AM 30 merupakan oli cutting nonaktif, bebas klorin, dan juga rendah embun yang diformulasikan dari oli mineral base dan berbagai aditif seperti aditif sulfur nonaktif bertekanan ekstrem dan fatty oil yang memberikan performa cutting terbaik bahkan untuk operasi pemotongan pada temperatur tinggi.</p><p><a href=\"https://ilti.idemitsu.com/files/uploads/2015/08/DN-MAGPLUS-DH-SERIES.pdf\" target=\"_blank\"><font color=\"#0000ff\">DAPHNE MAGPLUS DH10A</font></a><br>Daphne Magplus DH Series merupakan oli cutting bebas klorin yang diformulasikan dengan berbagai aditif seperti special stress releaser, aditif anti-embun, dan paraffinic base stock. Daphne Magplus DH 10 merupakan tipe oli cutting aktif yang bisa digunakan untuk pengeboran baja karbon dan baja campuran.</p><p><a href=\"https://ilti.idemitsu.com/files/uploads/2015/08/DN-MAGPLUS-SLA-SERIES.pdf\" target=\"_blank\"><font color=\"#0000ff\">DAPHNE MAGPLUS SLA</font></a><br>Daphne Magplus SLA Series merupakan oli bebas klorin dan nonaktif Cutting Oil. Produk ini secara khusus diformulasikan dengan base oil terbaik, aditif sulfur nonaktif untuk tekanan ekstrem, fatty oil, anti-busa, aditif anti-embun, dan juga aditif anti-karat. Oli ini memberikan performa cutting terbaik dan di saat yang bersamaan, memperpanjang umur karbon baja, high tensile steels, dan logam non-ferrous seperti: kuningan, tembaga, dan juga aluminum.</p>', NULL, NULL, '2021-03-31 00:35:24', '2021-04-23 08:22:38', 'https://ilti.idemitsu.com/files/uploads/2015/08/DN-MAGPLUS-SLA-SERIES.pdf'),
(9, 2, 'WATER SOLUBLE CUTTING OIL', 'water-soluble-cutting-oil', '<p><a href=\"https://ilti.idemitsu.com/files/uploads/2015/08/DN-MILCOOL-AL.pdf\" target=\"_blank\"><font color=\"#0000ff\">DAPHNE MILCOOL AL</font></a><br>Daphne Milcool AL merupakan oli yang ‘larut dalam air’, pengemulsi oli cutting dengan berbagai aditif seperti surfaktan, anti-karat, dan anti-korosi.</p><p><a href=\"https://ilti.idemitsu.com/files/uploads/2015/08/DN-MILCOOL-XL.pdf\" target=\"_blank\"><font color=\"#0000ff\">DAPHNE MILCOOL XL</font></a><br>Daphne Milcool XL merupakan oli yang larut dalam air dan diformulasikan dengan surfaktan khusus yang dikembangkan oleh Idemitsu, aditif emulsi penahan karat dan base oil mineral. Kombinasi aditif superior dan dasar ini tidak hanya menghasilkan performa cutting yang superior tetapi juga memperpanjang umur cairan cutting terhadap kerusakan dan juga pertumbuhan bakteri.</p><p><a href=\"https://ilti.idemitsu.com/files/uploads/2015/08/DN-ALPHACOOL-EW.pdf\" target=\"_blank\"><font color=\"#0000ff\">DAPHNE ALPHA COOL EW</font></a><br>Daphne Alpha Cool EW diformulasikan dengan surfaktan khusus yang dikembangkan oleh Idemitsu, aditif emulsi penahan karat dan base oil mineral. Kombinasi aditif superior dan dasar ini tidak hanya menghasilkan performa cutting yang superior tetapi juga memperpanjang umur cairan cutting terhadap kerusakan dan juga pertumbuhan bakteri.<br></p><p><br></p>', NULL, NULL, '2021-03-31 00:35:24', '2021-04-23 08:22:11', 'https://ilti.idemitsu.com/files/uploads/2015/08/DN-ALPHACOOL-EW.pdf'),
(10, 2, 'ROLLING OIL', 'rolling-oil', '<font color=\"#0000ff\">DN OIL AL 35</font>', NULL, NULL, '2021-03-31 00:35:24', '2021-04-23 08:23:58', NULL),
(11, 3, 'LITHIUM', 'lithium', '<p><a href=\"https://ilti.idemitsu.com/files/uploads/2015/08/DN-BEARING-GREASE-EP-SERIES.pdf\" target=\"_blank\"><font color=\"#0000ff\">DAPHNE BEARING GREASE EP</font></a><br>Daphne Bearing Grease EP Series merupakan oli multifungsi dengan bahan thickener lithium soap base berkualitas yang secara khusus diformulasikan dengan oli mineral serta berbagai aditif seperti anti-karat dan extreme pressure (E.P.) untuk memberikan performa pelumas terbaik.<br></p>', NULL, NULL, '2021-03-31 00:35:24', '2021-04-23 08:33:28', 'https://ilti.idemitsu.com/files/uploads/2015/08/DN-BEARING-GREASE-EP-SERIES.pdf'),
(12, 3, 'LITHIUM COMPLEX', 'lithium-complex', '<p><a href=\"https://ilti.idemitsu.com/files/uploads/2015/08/DN-EPONEX-GREASE-SR-SERIES.pdf\" target=\"_blank\"><font color=\"#0000ff\">DAPHNE EPONEX SR</font></a><br>Gemuk (grease) lithium complex tidak hanya bertahan lama tetapi juga memiliki kemampuan untuk bertahan dalam temperatur tinggi dan tekanan ekstrim.<br></p>', NULL, NULL, '2021-03-31 00:35:24', '2021-04-23 08:34:24', 'https://ilti.idemitsu.com/files/uploads/2015/08/DN-EPONEX-GREASE-SR-SERIES.pdf'),
(13, 3, 'POLYUREA', 'polyurea', '<font color=\"#0000ff\">DN POLYLEX GREASE Series</font>', NULL, NULL, '2021-03-31 00:35:24', '2021-04-23 08:35:31', NULL),
(14, 4, 'LIQUID PARAFFIN', 'liquid-paraffin', '<font color=\"#0000ff\">DN OIL CP 15N</font>', NULL, NULL, '2021-03-31 00:35:24', '2021-04-23 08:37:03', NULL),
(15, 4, 'TRANSFORMER OIL', 'transformer-oil', '<p><a style=\"background-color: #ffffff; font-size: 0.875rem;\" href=\"https://ilti.idemitsu.com/files/uploads/2015/08/ID-TRANSFORMER-OIL-G-J.pdf\" target=\"_blank\" rel=\"noopener\"><span style=\"color: #0000ff;\">ID TRANSFORMER OIL G</span></a><br />Idemitsu Transformer Oil G merupakan oli mineral khusus yang diformulasikan dengan stabilitas oksidasi dan zat antikorosi untuk memberikan perlindungan terbaik pada trafo dan kebutuhan pelumasan dari gardu tambahan dan peralatan listrik lainnya.</p>', NULL, NULL, '2021-03-31 00:35:24', '2021-04-29 01:10:40', 'https://ilti.idemitsu.com/files/uploads/2015/08/ID-TRANSFORMER-OIL-G-J.pdf'),
(16, 4, 'RUBBER INGREDIENT OIL', 'rubber-ingredient-oil', '<font color=\"#0000ff\">DIANA PROCESS OIL PW-380</font>', NULL, NULL, '2021-03-31 00:35:24', '2021-04-23 08:39:23', NULL),
(17, 1, 'GEAR OIL', 'gear-oil', '<p><a href=\"https://ilti.idemitsu.com/files/uploads/2015/08/DN-SUPER-GEAR-OIL-SERIES.pdf\" target=\"_blank\"><font color=\"#0000ff\">DAPHNE SUPER GEAR OIL</font></a><br>Daphne Super Gear Oil merupakan oli untuk gear berkualitas tinggi yang diformulasikan dengan paraffinic base oil dan berbagai zat aditif seperti mengurangi oksidasi, mencegah karat, anti-busa, dan juga pelumas lainnya untuk memberikan kinerja yang terbaik.<br></p>', NULL, NULL, '2021-04-16 08:33:22', '2021-04-23 03:36:38', 'https://ilti.idemitsu.com/files/uploads/2015/08/DN-SUPER-GEAR-OIL-SERIES.pdf'),
(18, 1, 'COMPRESSOR OIL', 'compressor-oil', '<p><a href=\"https://ilti.idemitsu.com/files/uploads/2015/08/DN-SUPER-SCREW-SERIES.pdf\" target=\"_blank\"><font color=\"#0000ff\">DAPHNE SUPER SCREW</font></a><br>Daphne Super Screw Compressor Oil Series merupakan oli kompresor yang tahan lama dan diformulasikan secara khusus dengan mineral base oil dan dikombinasikan dengan aditif terpilih termasuk antioksidan untuk temperatur tinggi. Secara khusus, oli ini memiliki kestabilan oksidasi dan tidak terpengaruh dengan kontaminasi dari luar seperti oil mist atau kemunculan residu dan lain sebagainya.</p><p><a href=\"https://ilti.idemitsu.com/files/uploads/2015/08/DN-ALPHA-SCREW-32.pdf\" target=\"_blank\"><font color=\"#0000ff\">DAPHNE ALPHA SCREW</font></a><br>Daphne Alpha Screw 32 merupakan pelumas kompresor tipe sintetis yang dibentuk dari oli dasar sintetis dengan aditif untuk stabilitas termal, anti-oksidan, aditif anti-korosi dan aditif anti-karat. Kombinasi ini menghasilkan pelumas kompresor sintetis yang memiliki stabilitas termal terbaik dan juga mengurangi endapan.<br></p>', NULL, NULL, '2021-04-16 08:34:07', '2021-04-23 03:39:45', 'https://ilti.idemitsu.com/files/uploads/2015/08/DN-SUPER-SCREW-SERIES.pdf'),
(19, 1, 'VACUUM PUMP OIL', 'vacuum-pump-oil', '<p><a href=\"https://ilti.idemitsu.com/files/uploads/2015/08/DN-SUPER-ACE-VAC-SERIES.pdf\" target=\"_blank\"><font color=\"#0000ff\">DAPHNE SUPER ACE-VAC</font></a><br>Oli pelumas premium yang direkomendasikan untuk semua vacuum pump atau blower. Secara khusus diformulasikan dengan hydrogenated paraffin base oil dan berbagai zat aditif seperti penurun oksidasi, pencegah karat, anti-busa, pemisah air, dan juga pelumas lainnya.<br></p>', NULL, NULL, '2021-04-16 08:34:38', '2021-04-23 03:40:52', 'https://ilti.idemitsu.com/files/uploads/2015/08/DN-SUPER-ACE-VAC-SERIES.pdf'),
(20, 1, 'TRACTION OIL', 'traction-oil', '<p><font color=\"#0000ff\">DN ALPHA DRIVE P Series</font><br></p>', NULL, NULL, '2021-04-16 08:34:58', '2021-04-23 08:08:27', NULL),
(21, 1, 'HEAT RESISTANCE OIL', 'heat-resistance-oil', '<p><font color=\"#0000ff\">DN CHAIN MASTER 260 NZ</font><br></p>', NULL, NULL, '2021-04-16 08:36:31', '2021-04-23 08:09:29', NULL),
(22, 2, 'DRAWING & PUNCH OIL', 'drawing-punch-oil', '<p><font color=\"#0000ff\">DN MASTER DRAW Series</font></p><p><font color=\"#0000ff\">DN NEW PUNCH OIL</font></p><p><font color=\"#0000ff\">DN PRESS CUT UP Series</font></p><p><font color=\"#0000ff\">DN PRESS DRAW 6K-S</font></p><p><font color=\"#0000ff\">DN PUNCH OIL AF Series</font></p><p><font color=\"#0000ff\">DN SUPER BLANKING SR 80</font><br></p>', NULL, NULL, '2021-04-16 08:38:46', '2021-04-23 08:29:42', NULL),
(23, 2, 'RUST PREVENTING OIL', 'rust-preventing-oil', '<p><a href=\"https://ilti.idemitsu.com/files/uploads/2015/08/DN-SUPER-COAT-NR.pdf\" target=\"_blank\"><font color=\"#0000ff\">DAPHNE SUPER COAT NR</font></a><br>Daphne Super Coat NR merupakan oli pencegah karat bebas barium. Oli ini diformulasikan dari mineral base oil serta beberapa aditif pencegah karat untuk memberikan performa pencegah karat saat proses dan ketika pengiriman.</p><p><a href=\"https://ilti.idemitsu.com/files/uploads/2015/08/DN-SUPER-COAT-TW.pdf\" target=\"_blank\"><font color=\"#0000ff\">DAPHNE SUPER COAT TW</font></a><br>Daphne Super Coat TW adalah pelumas pencegah karat dengan viskositas rendah yang diformulasikan secara khusus dengan oli mineral ringan dan berbagai tipe aditif anti-karat untuk melindungi permukaan logam seperti baut dan mur. Oli ini mudah melekat pada permukaan logam dan membentuk lapisan pelindung pada logam yang terbuka untuk penyimpanan di dalam ruangan.<br></p>', NULL, NULL, '2021-04-16 08:39:05', '2021-04-23 08:26:29', 'https://ilti.idemitsu.com/files/uploads/2015/08/DN-SUPER-COAT-TW.pdf'),
(24, 2, 'RINSE OIL', 'rinse-oil', '<p><a href=\"https://ilti.idemitsu.com/files/uploads/2015/08/Daphne-Cleaner-SH.pdf\" target=\"_blank\"><font color=\"#0000ff\">DAPHNE CLEANER SH</font></a><br>Oli napthenic hydrocarbon murni ini secara khusus dikembangkan oleh Idemitsu. Produk ini sangat ramah lingkungan dan tidak mengandung bahan kimia perusak ozon.</p><p><a href=\"https://ilti.idemitsu.com/files/uploads/2015/08/DN-ALPHA-CLEANER-SERIES.pdf\" target=\"_blank\"><font color=\"#0000ff\">DAPHNE ALPHA CLEANER</font></a><br>Seri ini merupakan oli hidrokarbon sintetis murni yang secara khusus dikembangkan oleh Idemitsu. Seri ini mampu memenuhi persyaratan ketat yang berlaku saat ini untuk pembersihan industri dan tetap ramah lingkungan di saat yang bersamaan dengan tidak mengandung zat perusak ozon.<br></p>', NULL, NULL, '2021-04-16 08:39:25', '2021-04-23 08:31:39', 'https://ilti.idemitsu.com/files/uploads/2015/08/DN-ALPHA-CLEANER-SERIES.pdf'),
(25, 5, 'Idemitsu 4T SL/MA2 5W-40 FS', 'idemitsu-4t-slma2-5w-40-fs', '<ul><li style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\">Direkomendasikan untuk motor 4T dan motor sport.\r\n</li><li style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\">Oli mesin fully sintetik dengan PAO base oil.\r\n</li><li style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\">Rentang suhu 5W-40.\r\n<ul><li style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\">Kinerja luar biasa pada suhu tinggi.</li><li style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\">Tingkat fluiditas tinggi pada suhu rendah dan kinerja mesin optimal meski dalam keadaan dingin.</li></ul></li><li style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\">Jaminan perlindungan menyeluruh pada mesin motor.\r\n</li><li style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\">Cocok untuk dipakai di jalur balap atau di jalanan ibukota.</li><li style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\">Memenuhi sertifikasi:-<ul><li style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\"><b style=\"font-size: 0.875rem;\">API: SL &amp; JASO: MA2</b></li></ul></li></ul><p style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\">Kemasan 24 x 1 L per karton</p>', NULL, NULL, '2021-04-19 07:54:16', '2021-04-27 03:54:27', 'https://ilti.idemitsu.com/files/uploads/2016/10/Idemitsu-4T-SL-MA-5W-40-final.pdf'),
(26, 5, 'Idemitsu 4T SL/MB 10W-40 SS (MATIC)', 'idemitsu-4t-slmb-10w-40-ss-matic', '<ul style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 1.1rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Oli mesin semi sintetik.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Rentang suhu 10W-40.<ul style=\"outline: none; margin-right: 0px; margin-left: 1.25rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Tingkat fluiditas tinggi pada suhu rendah dan kinerja mesin optimal meski dalam keadaan dingin.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Kinerja luar biasa pada suhu tinggi.</li></ul></li><li style=\"outline: none; margin: 0px; padding: 0px;\">Memberikan perlindungan menyeluruh pada mesin.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Hemat bahan bakar.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Memenuhi sertifikasi:-<br style=\"outline: none;\">API: SL &amp; JASO: MB</li></ul><p style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\">Kemasan 24 x 0.8L per karton,&nbsp;24 x 1L per karton</p>', NULL, NULL, '2021-04-21 09:02:56', '2021-04-21 09:02:56', 'https://ilti.idemitsu.com/files/uploads/2015/07/Idemitsu-4T-SL-MB-10W-40-S-S.pdf'),
(27, 5, 'Idemitsu 4T SL/MA 10W-40 SS', 'idemitsu-4t-slma-10w-40-ss', '<ul style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 1.1rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Oli mesin semi sintetik.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Rentang suhu 10W-40<ul style=\"outline: none; margin-right: 0px; margin-left: 1.25rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Tingkat fluiditas tinggi pada suhu rendah dan kinerja mesin optimal meski dalam keadaan dingin.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Kinerja luar biasa pada suhu tinggi.</li></ul></li><li style=\"outline: none; margin: 0px; padding: 0px;\">Memberikan perlindungan pada suhu tinggi.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Hemat bahan bakar.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Memenuhi sertifikasi API SL&nbsp;&amp; JASO MA</li></ul><p style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\">Kemasan 24 x 0.8L atau 24 x 1L per karton</p>', NULL, NULL, '2021-04-21 09:03:54', '2021-04-21 09:03:54', 'https://ilti.idemitsu.com/files/uploads/2015/08/Idemitsu-4T-SL-MA-10W-40-S-S.pdf'),
(28, 5, 'Idemitsu 4T SL/MA 10W-30 FS', 'idemitsu-4t-slma-10w-30-fs', '<ul style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 1.1rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Oli motor 4T Full Sintetik</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Bertenaga dan responsif</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Mengurangi getaran mesin</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Menghaluskan suara mesin</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Memperpanjang umur mesin</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Cocok untuk semua merk motor Jepang dan Eropa</li></ul><p style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\">Kemasan 24 x 0.8L per karton / 24 x 1L per karton</p>', NULL, NULL, '2021-04-21 09:04:42', '2021-04-21 09:04:42', 'https://ilti.idemitsu.com/files/uploads/2019/03/Idemitsu-4T-SL-MA-10W-30-FS.pdf'),
(29, 5, 'Idemitsu 4T SL/MA 10W-30', 'idemitsu-4t-slma-10w-30', '<ul style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 1.1rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Rentang suhu 10W-30<ul style=\"outline: none; margin-right: 0px; margin-left: 1.25rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Tingkat fluiditas tinggi pada suhu rendah dan kinerja mesin optimal meski dalam keadaan dingin.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Kinerja luar biasa pada suhu tinggi.</li></ul></li><li style=\"outline: none; margin: 0px; padding: 0px;\">Memberikan perlindungan pada suhu tinggi.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Hemat bahan bakar.</li></ul><p style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\">Kemasan 24 x 0.8L per karton/ 24 x 1L per karton</p>', NULL, NULL, '2021-04-21 09:06:11', '2021-04-21 09:06:11', 'https://ilti.idemitsu.com/files/uploads/2015/08/Idemitsu-4T-SL-MA-10W-30.pdf'),
(30, 5, 'Idemitsu 4T SL/MB 10W-30 (MATIC)', 'idemitsu-4t-slmb-10w-30-matic', '<ul style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 1.1rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Rentang suhu 10W-30<ul style=\"outline: none; margin-right: 0px; margin-left: 1.25rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Tingkat fluiditas tinggi pada suhu rendah dan kinerja mesin optimal meski dalam keadaan dingin.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Kinerja luar biasa pada suhu tinggi.</li></ul></li><li style=\"outline: none; margin: 0px; padding: 0px;\">Memberikan perlindungan pada suhu tinggi.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Hemat bahan bakar.</li></ul><p style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\">Kemasan 24 x 0.8L per karton</p>', NULL, NULL, '2021-04-21 09:06:52', '2021-04-21 09:06:52', 'https://ilti.idemitsu.com/files/uploads/2015/08/Idemitsu-4T-SL-MB-10W-30.pdf'),
(31, 5, 'Idemitsu 2T FC SS', 'idemitsu-2t-fc-ss', '<ul style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 1.1rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Performa terbaik pada mesin tanpa menghasilkan asap karena special base oil.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Mencegah pembentukan karbon dan penyumbatan pada saluran pembuangan.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Mencegah korosi dan karat.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Melindungi mesin dari keausan.’</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Memperpanjang usia mesin dan meningkatkan efisiensi saat berkendara.</li></ul><p style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\">Kemasan 24 x 0.8L per karton</p>', NULL, NULL, '2021-04-21 09:07:36', '2021-04-21 09:07:36', 'https://ilti.idemitsu.com/files/uploads/2015/07/Idemitsu-2T-FC-S-S.pdf'),
(32, 6, 'Idemitsu SN/GF-5 0W-20 FS', 'idemitsu-sngf-5-0w-20-fs', '<ul style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 1.1rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Pelopor oli mesin hemat bahan bakar.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Meningkatkan suhu dan perlindungan deposit pada piston.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Mengontrol dan mengunci endapan dengan lebih baik.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Oli mesin fully sintetik yang hemat bahan bakar.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Rentang suhu 0W-20.<ul style=\"outline: none; margin-right: 0px; margin-left: 1.25rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Tingkat fluiditas tinggi pada suhu rendah dan kinerja mesin optimal meski dalam keadaan dingin.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Kinerja luar biasa pada suhu tinggi.</li></ul></li><li style=\"outline: none; margin: 0px; padding: 0px;\">Memperpanjang umur mesin dengan mengurangi keausan.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">API SN/GF-5 dengan resource conserving untuk jarak tempuh yang lebih baik dan penghematan bahan bakar.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Meningkatkan respon kinerja mesin.</li></ul><p style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\">Kemasan 24 x 1L per karton.</p>', NULL, NULL, '2021-04-21 09:09:40', '2021-04-21 09:09:40', 'https://ilti.idemitsu.com/files/uploads/2016/06/Idemitsu-SN-GF-5-0W-20-F-S-rev1.pdf'),
(33, 6, 'Idemitsu SN/GF-5 5W-30 FS', 'idemitsu-sngf-5-5w-30-fs', '<ul style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 1.1rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Meningkatkan suhu dan perlindungan deposit pada piston.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Mengontrol dan mengunci endapan dengan lebih baik.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Oli mesin mobil fully sintetik.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Rentang suhu 5W-30<ul style=\"outline: none; margin-right: 0px; margin-left: 1.25rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Tingkat fluiditas tinggi pada suhu rendah dan kinerja mesin optimal meski dalam keadaan dingin.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Kinerja luar biasa pada suhu tinggi.</li></ul></li><li style=\"outline: none; margin: 0px; padding: 0px;\">Memperpanjang umur mesin dengan mengurangi keausan.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">API SN/GF-5 dengan&nbsp;<span style=\"outline-color: initial; outline-width: initial; line-height: inherit;\">resource conserving</span>&nbsp;untuk jarak tempuh yang lebih baik dan penghematan bahan bakar.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Meningkatkan kinerja mesin.</li></ul><p style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\">Kemasan 24 x 1L per karton.</p>', NULL, NULL, '2021-04-21 09:10:23', '2021-04-21 09:10:23', 'https://ilti.idemitsu.com/files/uploads/2015/08/Idemtisu-SN-GF-5-5W-30-F-S.pdf'),
(34, 6, 'Idemitsu SN 5W-30 SS', 'idemitsu-sn-5w-30-ss', '<ul style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 1.1rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Direkomendasikan untuk mesin mobil LCGC</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Memberikan perlindungan yang lebih baik pada piston dari temperatur tinggi dan pembentukan kerak</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Mencegah terjadinya sludge sehingga tidak merusak seal mesin</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Oli mesin mobil Semi Sintetik</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Rentang temperatur yang luas 5W-30</li><li style=\"outline: none; margin: 0px; padding: 0px;\"><ul style=\"outline: none; margin-right: 0px; margin-left: 1.25rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Tingkat fluiditas tinggi pada suhu rendah dan kinerja mesin optimal meski dalam keadaan dingin.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Kinerja luar biasa pada suhu tinggi.</li></ul></li><li style=\"outline: none; margin: 0px; padding: 0px;\">Mengurangi keausan dan memperpanjang umur mesin</li><li style=\"outline: none; margin: 0px; padding: 0px;\">API SN yang ramah lingkungan dan hemat bahan bakar</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Membuat mesin lebih responsif</li></ul><p style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\">Kemasan 24 x 1L per karton.</p>', NULL, NULL, '2021-04-21 09:15:23', '2021-04-21 09:15:23', 'https://ilti.idemitsu.com/files/uploads/2018/10/Idemitsu-SN-5W-30-SS-1.pdf'),
(35, 6, 'Idemitsu SN/CF 5W-40 FS', 'idemitsu-sncf-5w-40-fs', '<ul style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 1.1rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Meningkatkan suhu dan perlindungan deposit pada piston.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Mengontrol dan mengunci endapan dengan lebih baik.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Cocok untuk semua jenis mesin mobil.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Oli mesin mobil fully sintetik.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Rentang suhu 5W-40.<ul style=\"outline: none; margin-right: 0px; margin-left: 1.25rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Tingkat fluiditas tinggi pada suhu rendah dan kinerja mesin optimal meski dalam keadaan dingin.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Kinerja luar biasa pada suhu tinggi.</li></ul></li><li style=\"outline: none; margin: 0px; padding: 0px;\">Tingkat konsumsi rendah.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Bahan bakar yang ekonomis.</li></ul><p style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\">Kemasan 24 x 1L per karton.</p>', NULL, NULL, '2021-04-21 09:16:04', '2021-04-21 09:16:04', 'https://ilti.idemitsu.com/files/uploads/2015/08/Idemitsu-SN-CF-5W-40-F-S.pdf'),
(36, 6, 'Idemitsu SN/CF 10W-40 SS', 'idemitsu-sncf-10w-40-ss', '<ul style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 1.1rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Pelopor oli mesin hemat bahan bakar</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Meningkatkan suhu dan perlindungan deposit pada piston.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Mengontrol dan mengunci endapan dengan lebih baik.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Oli mesin mobil semi sintetik.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Rentang suhu 10W-40<ul style=\"outline: none; margin-right: 0px; margin-left: 1.25rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Tingkat fluiditas tinggi pada suhu rendah dan kinerja mesin optimal meski dalam keadaan dingin.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Kinerja luar biasa pada suhu tinggi.</li></ul></li><li style=\"outline: none; margin: 0px; padding: 0px;\">Memperpanjang umur mesin dengan mengurangi keausan</li></ul><p style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\">Kemasan 24 x 1L per karton/ 6 x 4L per karton/&nbsp;1 x 200L per drum.</p>', NULL, NULL, '2021-04-21 09:16:36', '2021-04-21 09:16:36', 'https://ilti.idemitsu.com/files/uploads/2015/07/Idemitsu-SN-CF-10W-40-S-S.pdf'),
(37, 6, 'Idemitsu SM/CF 10W-30', 'idemitsu-smcf-10w-30', '<ul style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 1.1rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Rentang suhu 10W-30<ul style=\"outline: none; margin-right: 0px; margin-left: 1.25rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Tingkat fluiditas tinggi pada suhu rendah dan kinerja mesin optimal meski dalam keadaan dingin.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Kinerja luar biasa pada suhu tinggi.</li></ul></li><li style=\"outline: none; margin: 0px; padding: 0px;\">Melindungi saat suhu tinggi.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Memperpanjang umur mesin dengan mengurangi keausan</li></ul><p style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\">Kemasan 24 x 1L per karton/ 6 x 4L per karton/ 1 x 200L per drum</p>', NULL, NULL, '2021-04-21 09:17:14', '2021-04-21 09:17:14', 'https://ilti.idemitsu.com/files/uploads/2015/07/Idemitsu-SM-CF-10W-30.pdf'),
(38, 6, 'Idemitsu SM/CF 15W-40', 'idemitsu-smcf-15w-40', '<ul style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 1.1rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Oksidasi luar biasa dan menjaga suhu tetap stabil.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Rentang suhu 15W-40<ul style=\"outline: none; margin-right: 0px; margin-left: 1.25rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Tingkat fluiditas tinggi pada suhu rendah dan kinerja mesin optimal meski dalam keadaan dingin.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Kinerja luar biasa pada suhu tinggi.</li></ul></li><li style=\"outline: none; margin: 0px; padding: 0px;\">Mampu mengontrol deposit, karat, aus, dan menghindari korosi.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Bahan bakar yang ekonomis.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Memperpanjang usia mesin dan meningkatkan efisiensi saat berkendara.</li></ul><p style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\">Kemasan 24 x 1L per karton/ 6 x 4L per karton</p>', NULL, NULL, '2021-04-21 09:17:45', '2021-04-21 09:17:45', 'https://ilti.idemitsu.com/files/uploads/2015/06/Idemitsu-SM-CF-15W-40.pdf'),
(39, 7, 'Idemitsu CI-4/DH-1 15W-40', 'idemitsu-ci-4dh-1-15w-40', '<ul style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 1.1rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Mampu menjaga kebersihan mesin dalam segala kondisi.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Ketahanan oksidasi yang baik sehingga memperpanjang usia mesin.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Tetap stabil pada suhu tinggi.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Proteksi yang baik terhadap keausan saat mesin dinyalakan.</li></ul><ul style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 1.1rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Memenuhi tingkat performa: SAE 15W-40, API CI-4, CH-4/SL, SJ, JASO DH-1, ACEA E7-08, Mack EO-M+, MB 228.2/3, MTU Type 2, MAN M3275, Renault RLD-2, Volvo VDS-3, Cummins CES 20076/77/78</li></ul><p style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\">Kemasan 24 x 1L per karton/ 6 x 5L per karton/ 1 x 20L per pail/ 1 x 200L per drum</p>', NULL, NULL, '2021-04-21 09:18:53', '2021-04-21 09:18:53', 'https://ilti.idemitsu.com/files/uploads/2015/08/Idemitsu-Diesel-CI-4-DH-1-15W-40.pdf'),
(40, 7, 'Idemitsu CF-4/SG 15W-40', 'idemitsu-cf-4sg-15w-40', '<ul style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 1.1rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Stabilitas terhadap oksidasi dan panas yang baik saat mesin beroperasi.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Kemampuan deterjensi dan dispersansi yang superior.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Mampu mencegah pembentukan foam yang berbahaya bagi mesin.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Mengandung zat anti korosi dan anti karat yang baik.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Memperpanjang usia mesin dan meningkatkan efisiensi bahan bakar.</li></ul><p style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\">Kemasan 24 x 1L per karton/ 6 x 5L per karton/ 1 x 20L per pail/ 1 x 200L per drum</p>', NULL, NULL, '2021-04-21 09:19:31', '2021-04-21 09:19:31', 'https://ilti.idemitsu.com/files/uploads/2015/07/Idemitsu-Diesel-CF4-SG-15W-40.pdf'),
(41, 8, 'Idemitsu ATF', 'idemitsu-atf', '<ul style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 1.1rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Oli Transmisi Otomotis yang tahan lama.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Perlindungan terbaik terhadap keausan dan kerusakan pada bagian yang bergerak.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Perlindungan terbaik dan performa unggul pada suhu tinggi.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Dapat digunakan pada berbagai model kendaraan buatan Jepang, Eropa, Amerika, dan Korea Selatan.</li></ul><p style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\">Kemasan 24 x 1L per karton/ 1 x 20L per tabung / 1 x 200L per drum</p>', NULL, NULL, '2021-04-21 09:20:47', '2021-04-21 09:20:47', 'https://ilti.idemitsu.com/files/uploads/2015/08/Oli-Idemitsu-ATF-Indonesia-Rev.pdf'),
(42, 8, 'Idemitsu CVTF', 'idemitsu-cvtf', '<ul style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 1.1rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Oli Transmisi CVT yang tahan lama.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Perlindungan terbaik terhadap keausan dan kerusakan pada bagian yang bergerak.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Perlindungan terbaik dan performa unggul pada suhu tinggi.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Dapat digunakan pada berbagai model kendaraan buatan Jepang, Eropa, Amerika, dan Korea Selatan.</li></ul><p style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\">Kemasan 24 x 1L per&nbsp;karton</p>', NULL, NULL, '2021-04-21 09:21:20', '2021-04-21 09:21:20', 'https://ilti.idemitsu.com/files/uploads/2015/08/Idemitsu-CVTF-1L.pdf'),
(43, 8, 'Idemitsu MTF', 'idemitsu-mtf', '<ul style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 1.1rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Oli Transmisi Manual yang tahan lama.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Perlindungan terbaik terhadap keausan dan kerusakan pada bagian yang bergerak.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Cocok untuk digunakan&nbsp;untuk kendaraan berbahan bakar bensin dan diesel.</li></ul><p style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\">Kemasan 24 x 1L per karton</p>', NULL, NULL, '2021-04-21 09:21:52', '2021-04-21 09:21:52', 'https://ilti.idemitsu.com/files/uploads/2015/08/Oli-Idemitsu-MTF-Indonesia-rev.pdf'),
(44, 8, 'Idemitsu Transmission & Differential Oil GL-5 90/ GL-5 140/ GL-5 80W-90', 'idemitsu-transmission-differential-oil-gl-5-90-gl-5-140-gl-5-80w-90', '<ul style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 1.1rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Kualitas terbaik untuk transmisi dan differential gears&nbsp;GL-5</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Diformulasikan dengan EP agent, antioksidan, pencegah jamur dan busa, serta base oil yang terbaik.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Pemakaian: Direkomendasikan untuk semua transmisi otomotif dan&nbsp;<span style=\"outline-color: initial; outline-width: initial; line-height: inherit;\">differential gears</span>&nbsp;untuk GL-5 atau di bawahnya.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Karakteristik<ul style=\"outline: none; margin-right: 0px; margin-left: 1.25rem; padding: 0px; line-height: 1.6; list-style-position: outside;\"><li style=\"outline: none; margin: 0px; padding: 0px;\">Indeks viskositas tinggi.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Oksidasi stabil.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Daya tahan tinggi terhadap beban berat.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Mengurangi busa.</li><li style=\"outline: none; margin: 0px; padding: 0px;\">Mengurangi korosi dan karat.</li></ul></li></ul><p style=\"outline: none; margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility;\">Kemasan 24 x 1L per karton (khusus untuk GL-5 80W-90)/ 1 x 200L per drum</p>', NULL, NULL, '2021-04-21 09:22:38', '2021-04-21 09:22:38', 'https://ilti.idemitsu.com/files/uploads/2015/07/Idemitsu-Gear-Series-GL-5-80W-90-90-140.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'web', '2021-01-25 03:39:35', '2021-01-25 03:39:35'),
(2, 'user', 'web', '2021-01-25 03:39:35', '2021-01-25 03:39:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int UNSIGNED NOT NULL,
  `role_id` int UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `social_accounts`
--

CREATE TABLE `social_accounts` (
  `id` int UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `provider` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `avatar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `team_banners`
--

CREATE TABLE `team_banners` (
  `id` bigint UNSIGNED NOT NULL,
  `image_location` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `team_banners`
--

INSERT INTO `team_banners` (`id`, `image_location`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'https://atlaspetrochem.julian.app-show.net//storage/photos/3/SLIDE COMPANY 2.jpg', 1, '2021-04-16 09:12:34', '2021-04-05 04:08:38', '2021-04-16 09:12:34'),
(2, 'https://atlaspetrochem.julian.app-show.net//storage/photos/3/Slide Company 1.jpg', 1, '2021-04-16 09:12:36', '2021-04-16 09:11:34', '2021-04-16 09:12:36'),
(3, 'https://atlaspetrochem.julian.app-show.net//storage/photos/3/Slide Company 1.jpg', 1, '2021-04-19 01:28:37', '2021-04-16 09:12:52', '2021-04-19 01:28:37'),
(4, 'http://atlaspetrochem.democube.id//storage/photos/1/SLIDE COMPANY 2.jpg', 1, NULL, '2021-04-16 09:13:05', '2021-07-28 12:47:59'),
(6, 'http://atlaspetrochem.democube.id//storage/photos/1/Slide Company 1.jpg', 1, NULL, '2021-04-16 09:13:47', '2021-07-28 12:48:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'gravatar',
  `avatar_location` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_changed_at` timestamp NULL DEFAULT NULL,
  `active` tinyint UNSIGNED NOT NULL DEFAULT '1',
  `confirmation_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `timezone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL,
  `last_login_ip` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_be_logged_out` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `uuid`, `first_name`, `last_name`, `email`, `avatar_type`, `avatar_location`, `password`, `password_changed_at`, `active`, `confirmation_code`, `confirmed`, `timezone`, `last_login_at`, `last_login_ip`, `to_be_logged_out`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '8e3b4554-8eaa-4fe9-82cc-3038f3b252d9', 'Super', 'Admin', 'admin@admin.com', 'gravatar', NULL, '$2y$10$EPbsd8OI0kOII1SGbCtcoONVUZUDk9xmryKqe8SR2A8MmcAf74ENe', NULL, 1, 'dae54ed4e32a17a2d78fae68fcce155d', 1, 'Asia/Jakarta', '2021-08-12 13:55:36', '139.193.222.71', 0, 'g2v0xJNDuZsI83MiCIX4VBTEZBpS476oBhXXUJ4znCXICv39VUb4EAKtpz9Y', '2021-01-25 03:39:35', '2021-08-12 13:55:36', NULL),
(2, 'b353b1db-9a6d-49e3-a7b7-da75ad813103', 'Default', 'User', 'user@user.com', 'gravatar', NULL, '$2y$10$s1DawKWRy7OQJPUCvApgDOUUW3khhgivLGdxUrKQserym6FxcdHcm', NULL, 1, 'a65460bf2af18db77c1bccf717ea4d85', 1, NULL, NULL, NULL, 0, NULL, '2021-01-25 03:39:35', '2021-01-25 03:39:35', NULL),
(3, '6e105278-2bb7-4d55-9a7d-791eec208317', 'Admin', 'Atlaspetrochem', 'admin@atlaspetrochem.com', 'gravatar', NULL, '$2y$10$5klTpDIqZGejURTdaaxWceUlVS3.rLmu09zUA4FWTsQbz1gPwfgqO', NULL, 1, '0d6567ce094e3a8d3260737d5cf90f8e', 1, 'Asia/Jakarta', '2021-07-28 09:25:40', '114.124.144.244', 0, 'WEXJU2BPnb88RyKAP10RLpMIkuJbFC7EPgKiKpsQTlggFBppWQdwuaGeYcPt', '2021-02-22 05:34:15', '2021-07-28 09:25:40', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `web_settings`
--

CREATE TABLE `web_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `config` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `web_settings`
--

INSERT INTO `web_settings` (`id`, `config`, `type`, `value`, `created_at`, `updated_at`) VALUES
(1, 'head office', 'address', 'Jl. Danau Indah Raya Blok C2 No. 5 Jakarta Utara 14360 - Indonesia', '2021-04-07 05:34:47', '2021-04-12 06:51:13'),
(2, 'mobile phone', 'phone', '+628 2122 3874 88', '2021-04-07 05:34:47', '2021-04-12 06:51:13'),
(3, 'phone', 'phone', '+6221 220 650 68', '2021-04-07 05:34:47', '2021-04-07 05:34:47'),
(4, 'whatsapp url', 'url', 'wa.me/6282122387488/?text=Halo%20Idemitsu', '2021-04-07 05:34:47', '2021-04-27 04:03:37'),
(5, 'helpdesk email', 'email', 'info@atlaspetrochem.co.id', '2021-04-07 05:34:47', '2021-04-12 06:51:13'),
(6, 'marketplace blibli', 'url', 'blibli.com/merchant/idemitsu-online-official-store/IDS-60034', '2021-04-07 05:34:47', '2021-04-27 05:39:03'),
(7, 'marketplace lazada', 'url', 's.lazada.co.id/s.WRhhm', '2021-04-07 05:34:47', '2021-04-27 05:39:03'),
(8, 'logo', 'image', 'http://atlaspetrochem.democube.id//storage/photos/1/LOGO ATLAS WHITE.png', '2021-05-05 08:31:42', '2021-07-28 13:18:22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about_contents`
--
ALTER TABLE `about_contents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `about_contents_key_unique` (`key`);

--
-- Indeks untuk tabel `application_jobs`
--
ALTER TABLE `application_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `banner_per_pages`
--
ALTER TABLE `banner_per_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `banner_slider`
--
ALTER TABLE `banner_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD UNIQUE KEY `cache_key_unique` (`key`);

--
-- Indeks untuk tabel `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `company_banners`
--
ALTER TABLE `company_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `company_contents`
--
ALTER TABLE `company_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeries`
--
ALTER TABLE `galeries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `ledgers`
--
ALTER TABLE `ledgers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ledgers_recordable_type_recordable_id_index` (`recordable_type`,`recordable_id`),
  ADD KEY `ledgers_user_id_user_type_index` (`user_id`,`user_type`);

--
-- Indeks untuk tabel `main_categories`
--
ALTER TABLE `main_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news_thumbnails`
--
ALTER TABLE `news_thumbnails`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_histories`
--
ALTER TABLE `password_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_histories_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roles_name_index` (`name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indeks untuk tabel `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `social_accounts_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `team_banners`
--
ALTER TABLE `team_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `web_settings`
--
ALTER TABLE `web_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about_contents`
--
ALTER TABLE `about_contents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `application_jobs`
--
ALTER TABLE `application_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `banner_per_pages`
--
ALTER TABLE `banner_per_pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `banner_slider`
--
ALTER TABLE `banner_slider`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `company_banners`
--
ALTER TABLE `company_banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `company_contents`
--
ALTER TABLE `company_contents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `galeries`
--
ALTER TABLE `galeries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ledgers`
--
ALTER TABLE `ledgers`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `main_categories`
--
ALTER TABLE `main_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `news_thumbnails`
--
ALTER TABLE `news_thumbnails`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `password_histories`
--
ALTER TABLE `password_histories`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `social_accounts`
--
ALTER TABLE `social_accounts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `team_banners`
--
ALTER TABLE `team_banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `web_settings`
--
ALTER TABLE `web_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
