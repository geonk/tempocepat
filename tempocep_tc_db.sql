-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 11, 2017 at 01:21 PM
-- Server version: 5.6.35-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tempocep_tc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE IF NOT EXISTS `activity_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=76 ;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `user_id`, `text`, `ip_address`, `created_at`, `updated_at`) VALUES
(1, 1, 'Article "jokkkoooo" was created', '127.0.0.1', '2016-05-19 07:09:08', '2016-05-19 07:09:08'),
(2, 1, 'Article "jokkkoooo" was updated', '127.0.0.1', '2016-05-19 07:10:32', '2016-05-19 07:10:32'),
(3, 3, 'Article " hahahahahahahaa adsdsdsdkjsk" was created', '127.0.0.1', '2016-06-16 00:19:13', '2016-06-16 00:19:13'),
(4, 3, 'Article "malam panjang" was updated', '127.0.0.1', '2016-06-16 00:19:44', '2016-06-16 00:19:44'),
(5, 3, 'Article "jokkkoooo" was updated', '127.0.0.1', '2016-06-16 00:21:13', '2016-06-16 00:21:13'),
(6, 3, 'Article "zxxzvzv zzvvzxvxzz zxvzxvzx" was created', '127.0.0.1', '2016-06-16 00:22:46', '2016-06-16 00:22:46'),
(7, 3, 'Article "zxxzvzv zzvvzxvxzz zxvzxvzx zxxzvzv zzvvzxvxzz zxvzxvzx" was updated', '127.0.0.1', '2016-06-16 00:24:39', '2016-06-16 00:24:39'),
(8, 3, 'Article "zxxzvzv zzvvzxvxzz zxvzxvzx zxxzvzv zzvvzxvxz" was deleted', '127.0.0.1', '2016-06-21 11:43:03', '2016-06-21 11:43:03'),
(9, 3, 'Article "jokkkoooo" was deleted', '127.0.0.1', '2016-06-21 11:44:09', '2016-06-21 11:44:09'),
(10, 1, 'Article "jokkkoooo" was deleted', '127.0.0.1', '2016-06-21 21:47:27', '2016-06-21 21:47:27'),
(11, 1, 'Article "malam panjang saasf" was updated', '127.0.0.1', '2016-06-21 22:00:39', '2016-06-21 22:00:39'),
(12, 40, 'Article "cvvcv" was created', '127.0.0.1', '2016-10-01 18:27:01', '2016-10-01 18:27:01'),
(13, 40, 'Article "xcxzc" was created', '127.0.0.1', '2016-10-05 05:10:16', '2016-10-05 05:10:16'),
(14, 40, 'Article "cxzcc" was created', '127.0.0.1', '2016-10-05 05:10:28', '2016-10-05 05:10:28'),
(15, 40, 'Article "cxzczccx" was created', '127.0.0.1', '2016-10-05 05:10:42', '2016-10-05 05:10:42'),
(16, 40, 'Article "cxzczc" was created', '127.0.0.1', '2016-10-05 05:10:55', '2016-10-05 05:10:55'),
(17, 40, 'Article "czxcxzczc" was created', '127.0.0.1', '2016-10-05 05:11:15', '2016-10-05 05:11:15'),
(18, 40, 'Article "czxczcz" was created', '127.0.0.1', '2016-10-05 05:11:26', '2016-10-05 05:11:26'),
(19, 40, 'Article "cxczcxcz" was created', '127.0.0.1', '2016-10-05 05:11:38', '2016-10-05 05:11:38'),
(20, 40, 'Article "xczcx" was created', '127.0.0.1', '2016-10-05 05:11:50', '2016-10-05 05:11:50'),
(21, 40, 'Article "xzcxz" was created', '127.0.0.1', '2016-10-05 05:12:10', '2016-10-05 05:12:10'),
(22, 40, 'Article "cxzxczxcc" was created', '127.0.0.1', '2016-10-05 05:12:22', '2016-10-05 05:12:22'),
(23, 40, 'Article "ewwerw" was created', '127.0.0.1', '2016-10-05 05:12:36', '2016-10-05 05:12:36'),
(24, 40, 'Article "geggd" was created', '127.0.0.1', '2016-10-05 05:12:51', '2016-10-05 05:12:51'),
(25, 40, 'Article "fsdfsf" was created', '127.0.0.1', '2016-10-05 05:13:04', '2016-10-05 05:13:04'),
(26, 40, 'Article "fssfdsf" was created', '127.0.0.1', '2016-10-05 05:13:16', '2016-10-05 05:13:16'),
(27, 40, 'Article "Sejarah Musik" was updated', '127.0.0.1', '2016-10-05 09:52:36', '2016-10-05 09:52:36'),
(28, 40, 'Article "Musisi dengan Gaya Hidup Sehat" was updated', '127.0.0.1', '2016-10-05 09:53:12', '2016-10-05 09:53:12'),
(29, 40, 'Article "Kegiatan Musik untuk Amal Terbesar yang Pernah Dicatat Sejarah" was updated', '127.0.0.1', '2016-10-05 09:53:54', '2016-10-05 09:53:54'),
(30, 40, 'Article "Apa yang Terjadi Jika Dunia Tanpa Musik?" was updated', '127.0.0.1', '2016-10-05 09:54:39', '2016-10-05 09:54:39'),
(31, 40, 'Article "Mengenal Perkusi" was updated', '127.0.0.1', '2016-10-05 09:54:57', '2016-10-05 09:54:57'),
(32, 40, 'Article "Mengenal Efek Distorsi" was updated', '127.0.0.1', '2016-10-05 09:55:43', '2016-10-05 09:55:43'),
(33, 40, 'Article "Kalau Punya MP3-nya, Ngapain Datang ke Pertunjukan Musik?" was updated', '127.0.0.1', '2016-10-05 09:56:38', '2016-10-05 09:56:38'),
(34, 40, 'Article "Musik ''Ngamen'', Merusak atau Memperkaya?" was updated', '127.0.0.1', '2016-10-05 09:57:28', '2016-10-05 09:57:28'),
(35, 40, 'Article "Aliran Musik Apa yang Paling Kampungan?" was updated', '127.0.0.1', '2016-10-05 09:58:00', '2016-10-05 09:58:00'),
(36, 40, 'Article "Musik untuk Kesehatan" was updated', '127.0.0.1', '2016-10-05 09:58:31', '2016-10-05 09:58:31'),
(37, 40, 'Article "Tragedi Pagelaran Musik Terburuk Sepanjang Sejarah" was updated', '127.0.0.1', '2016-10-05 09:59:35', '2016-10-05 09:59:35'),
(38, 40, 'Article "Musiknya? Mau, Budayanya? Eits, Entar Dulu..." was updated', '127.0.0.1', '2016-10-05 10:00:47', '2016-10-05 10:00:47'),
(39, 40, 'Article "Indonesia Negara Musik" was updated', '127.0.0.1', '2016-10-05 10:01:16', '2016-10-05 10:01:16'),
(40, 40, 'Article "Alat Musik Unik di Indonesia" was updated', '127.0.0.1', '2016-10-05 10:01:49', '2016-10-05 10:01:49'),
(41, 40, 'Article "Aliran Musik Modern Tertua" was updated', '127.0.0.1', '2016-10-05 10:02:21', '2016-10-05 10:02:21'),
(42, 40, 'Article "Aliran Musik Modern Tertua" was updated', '127.0.0.1', '2016-10-05 10:03:48', '2016-10-05 10:03:48'),
(43, 40, 'Article "Alat Musik Unik di Indonesia" was updated', '127.0.0.1', '2016-10-05 10:04:27', '2016-10-05 10:04:27'),
(44, 40, 'Article "Indonesia Negara Musik" was updated', '127.0.0.1', '2016-10-05 10:05:54', '2016-10-05 10:05:54'),
(45, 40, 'Article "Musiknya? Mau, Budayanya? Eits, Entar Dulu..." was updated', '127.0.0.1', '2016-10-05 10:06:46', '2016-10-05 10:06:46'),
(46, 40, 'Article "Tragedi Pagelaran Musik Terburuk Sepanjang Sejarah" was updated', '127.0.0.1', '2016-10-05 10:07:17', '2016-10-05 10:07:17'),
(47, 40, 'Article "Musik untuk Kesehatan" was updated', '127.0.0.1', '2016-10-05 10:07:30', '2016-10-05 10:07:30'),
(48, 40, 'Article "Aliran Musik Apa yang Paling Kampungan?" was updated', '127.0.0.1', '2016-10-05 10:07:47', '2016-10-05 10:07:47'),
(49, 40, 'Article "Musik ''Ngamen'', Merusak atau Memperkaya?" was updated', '127.0.0.1', '2016-10-05 10:08:05', '2016-10-05 10:08:05'),
(50, 40, 'Article "Kalau Punya MP3-nya, Ngapain Datang ke Pertunjukan Musik?" was updated', '127.0.0.1', '2016-10-05 10:08:45', '2016-10-05 10:08:45'),
(51, 40, 'Article "Mengenal Efek Distorsi" was updated', '127.0.0.1', '2016-10-05 10:09:01', '2016-10-05 10:09:01'),
(52, 40, 'Article "Mengenal Perkusi" was updated', '127.0.0.1', '2016-10-05 10:09:33', '2016-10-05 10:09:33'),
(53, 40, 'Article "Apa yang Terjadi Jika Dunia Tanpa Musik?" was updated', '127.0.0.1', '2016-10-05 10:09:46', '2016-10-05 10:09:46'),
(54, 40, 'Article "Kegiatan Musik untuk Amal Terbesar yang Pernah Dicatat Sejarah" was updated', '127.0.0.1', '2016-10-05 10:10:00', '2016-10-05 10:10:00'),
(55, 40, 'Article "Musisi dengan Gaya Hidup Sehat" was updated', '127.0.0.1', '2016-10-05 10:10:14', '2016-10-05 10:10:14'),
(56, 40, 'Article "Sejarah Musik" was updated', '127.0.0.1', '2016-10-05 10:10:30', '2016-10-05 10:10:30'),
(57, 40, 'Article "Tragedi Pagelaran Musik Terburuk Sepanjang Sejarah" was updated', '127.0.0.1', '2016-10-05 10:14:10', '2016-10-05 10:14:10'),
(58, 40, 'Article "Kegiatan Musik untuk Amal Terbesar yang Pernah Dicatat Sejarah" was updated', '127.0.0.1', '2016-10-05 10:15:03', '2016-10-05 10:15:03'),
(59, 40, 'Article "Indonesia Negara Musik" was updated', '127.0.0.1', '2016-10-05 10:16:31', '2016-10-05 10:16:31'),
(60, 40, 'Article "Kalau Punya MP3-nya, Ngapain Datang ke Pertunjukan Musik?" was updated', '127.0.0.1', '2016-10-05 10:24:14', '2016-10-05 10:24:14'),
(61, 40, 'Article "Aliran Musik Modern Tertua" was updated', '127.0.0.1', '2016-10-05 22:43:37', '2016-10-05 22:43:37'),
(62, 40, 'Article "Musik ''Ngamen'', Merusak atau Memperkaya?" was updated', '127.0.0.1', '2016-10-05 22:47:00', '2016-10-05 22:47:00'),
(63, 40, 'Article "Sejarah Musik" was updated', '127.0.0.1', '2016-10-07 04:02:11', '2016-10-07 04:02:11'),
(64, 40, 'Article "Mengenal Efek Distorsi" was updated', '127.0.0.1', '2016-10-07 04:03:06', '2016-10-07 04:03:06'),
(65, 40, 'Article "Mengenal Perkusi" was updated', '127.0.0.1', '2016-10-07 04:03:12', '2016-10-07 04:03:12'),
(66, 40, 'Article "Kalau Punya MP3-nya, Ngapain Datang ke Pertunjukan Musik?" was updated', '127.0.0.1', '2016-10-07 04:03:34', '2016-10-07 04:03:34'),
(67, 40, 'Article "Apa yang Terjadi Jika Dunia Tanpa Musik?" was updated', '127.0.0.1', '2016-10-07 04:03:44', '2016-10-07 04:03:44'),
(68, 40, 'Article "Kegiatan Musik untuk Amal Terbesar yang Pernah Dicatat Sejarah" was updated', '127.0.0.1', '2016-10-07 04:03:50', '2016-10-07 04:03:50'),
(69, 40, 'Article "Musisi dengan Gaya Hidup Sehat" was updated', '127.0.0.1', '2016-10-07 04:03:56', '2016-10-07 04:03:56'),
(70, 40, 'Article "Musiknya? Mau, Budayanya? Eits, Entar Dulu..." was updated', '127.0.0.1', '2016-10-07 04:04:16', '2016-10-07 04:04:16'),
(71, 40, 'Article "Indonesia Negara Musik" was updated', '127.0.0.1', '2016-10-07 04:04:24', '2016-10-07 04:04:24'),
(72, 40, 'Article "Alat Musik Unik di Indonesia" was updated', '127.0.0.1', '2016-10-07 04:04:30', '2016-10-07 04:04:30'),
(73, 40, 'Article "Tragedi Pagelaran Musik Terburuk Sepanjang Sejarah" was updated', '127.0.0.1', '2016-10-07 04:04:37', '2016-10-07 04:04:37'),
(74, 40, 'Article "Musik untuk Kesehatan" was updated', '127.0.0.1', '2016-10-07 04:04:43', '2016-10-07 04:04:43'),
(75, 40, 'Article "Aliran Musik Apa yang Paling Kampungan?" was updated', '127.0.0.1', '2016-10-07 04:05:16', '2016-10-07 04:05:16');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(125) DEFAULT NULL,
  `title` varchar(75) DEFAULT NULL,
  `article` text,
  `image` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `users_role_id` int(11) NOT NULL,
  `article_categories_id` int(11) NOT NULL DEFAULT '4',
  PRIMARY KEY (`id`,`users_id`,`users_role_id`,`article_categories_id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `fk_articles_users1` (`users_id`,`users_role_id`),
  KEY `fk_articles_article_categories1` (`article_categories_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `slug`, `title`, `article`, `image`, `created_at`, `updated_at`, `users_id`, `users_role_id`, `article_categories_id`) VALUES
(1, 'sejarah-musik', 'Sejarah Musik', 'Siapa sangka musik yang sekarang kita dengerin sudah ada sejak jaman purba. Bener gak sih? Mari kita cari tahu soal sejarah musik di dunia.', 'LRrjyKtZ_blog_image.jpg', '2016-10-01 18:27:01', '2016-10-07 04:02:11', 1, 1, 1),
(2, 'musisi-dengan-gaya-hidup-sehat', 'Musisi dengan Gaya Hidup Sehat', 'Musisi dengan gaya hidup sesat? Jangan salah baca. Sehat bukan sesat.\r\nTerlintas di kepala sobat jika dengar kata musisi atau artis musik mungkin yang terfikir justru hal-hal negatif, seperti kehidupan malam, mabuk-mabukan, narkoba, seks bebas, capek karena jadwal manggung yang padet, smp penyimpangan agama. Wow, serem ya.\r\nTapi tahukah teman-teman kalau ada diantara musisi itu yang menerapkan gaya hidup sehat? Siapa itu, dan sesehat apa sih?\r\nBaik mari kita bahas satu per satu.', 'M2lJJPqC_blog_image.jpg', '2016-10-05 05:10:15', '2016-10-07 04:03:56', 1, 1, 1),
(3, 'kegiatan-musik-untuk-amal-terbesar-yang-pernah-dicatat-sejarah', 'Kegiatan Musik untuk Amal Terbesar yang Pernah Dicatat Sejarah', 'Di dalam kehidupan ini kita diharuskan bersyukur atas semua yang diberikan Tuhan atas kita. Karena tanpa kita sadari, di luar sana banyak orang-orang yang kurang beruntung. Sebagai sesama manusia kita kerap merasa empati dan ingin membantu mereka.\r\nBanyak kegiatan yang dilakukan untuk penggalangan dana guna membantu sesama. Salah satunya adalah dengan menyelenggarakan kegiatan musik untuk amal. Diantara kegiatan musik amal tersebut ada hal-hal fantastis yang terjadi, baik itu jumlah dana yang terkumpul sampa musisi-musisi yang terlibat.\r\nBerikut adalah ulasannya.', 'HvMCcC0u_blog_image.jpg', '2016-10-05 05:10:28', '2016-10-07 04:03:50', 1, 1, 1),
(4, 'apa-yang-terjadi-jika-dunia-tanpa-musik', 'Apa yang Terjadi Jika Dunia Tanpa Musik?', '"Hampa terasa hidupku tanpa dirimu", iya km. Pernah kebayang gak sih kalau dunia tanpa musik gimana jadinya?', 'uUj4nVtB_blog_image.jpg', '2016-10-05 05:10:42', '2016-10-07 04:03:44', 1, 1, 1),
(5, 'mengenal-perkusi', 'Mengenal Perkusi', 'Alat musik sangat beragam macamnya. Jika digolongkan dari cara memainkannya, ada beberapa macam seperti alat musik tiup, alat musik petik, alat musik pukul, alat musik gesek, alat musik goyang dan lain sebagainya.\r\nNamun yang unik, hampir di segala penjuru dunia selalu dijumpai alat musik yang biasa kita kenal sebagai jenis perkusi.', 'B3ZkchYH_blog_image.jpg', '2016-10-05 05:10:55', '2016-10-07 04:03:12', 1, 1, 1),
(6, 'mengenal-efek-distorsi', 'Mengenal Efek Distorsi', 'Slash, Jimmy Hendrick, Buckethead dan Paul john ivan adalah beberapa gitaris terkenal Indonesia dan Internasional. Gaya permainan mereka mudah dikenali, tapi pernahkah kita bertanya kenapa bunyi gitar mereka bisa seperti itu?\r\nIyap, benar bunyi gitar mereka bisa demikian karena adanya efek distorsi.\r\nLalu apa dan bagaimana cara kerja efek distorsi itu?', '6FVbLDdp_blog_image.jpg', '2016-10-05 05:11:15', '2016-10-07 04:03:06', 1, 1, 1),
(7, 'kalau-punya-mp3-nya-ngapain-datang-ke-pertunjukan-musik', 'Kalau Punya MP3-nya, Ngapain Datang ke Pertunjukan Musik?', 'Dalam pergaulan kita sehari-hari, hampir selalu ada orang-orang yang berkata negatif. Satu cotoh saat kita ingin datang menyaksikan pertunjukan musik, bisa jadi akan ada orang yang berkata "udah punya mp3 nya gue, ngapain dateng-dateng ke acara musik begituan?". Nah loh ...\r\nUntuk menjawabnya, mari kita bahas secara pintar.', 'qDhLVQDF_blog_image.jpg', '2016-10-05 05:11:26', '2016-10-07 04:03:33', 1, 1, 1),
(8, 'musik-ngamen-merusak-atau-memperkaya', 'Musik ''Ngamen'', Merusak atau Memperkaya?', 'Ngamen secara awam dapat kita artikan sebagai sebuah kegiatan menghibur orang lain tanpa diminta, dan berharap orang yang dihibur tersebut memberikan sejumlah uang kepada si penghibur.\r\nUntuk mengibur ada banyak yang dapat dilakukan, diantaranya yang paling sering adalah dengan musik.\r\nNah, adanya musik ngamen ini di satu sisi akan menciptakan warna baru dari sebuah lagu yang dibawakan karena sangat mungkin berbeda dengan versi aslinya. Adapula yang justru menciptakan sendiri lagu mereka, tentunya dengan kualitas mereka juga.\r\nTapi disinilah letak pertanyaannya, "Apakah musik ngamen ini menperkaya keragaman musik atau justru merusaknya?".', '5wv0Wr5m_blog_image.jpg', '2016-10-05 05:11:38', '2016-10-05 22:46:59', 1, 1, 1),
(9, 'aliran-musik-apa-yang-paling-kampungan', 'Aliran Musik Apa yang Paling Kampungan?', '"Musik apaan nih?" Kalimat itu yang kerap kita dengar keluar dari orang-orang yang tidak menyukai musik yang sedang diputar pada sebuah kesempatan.\r\nJika ditanya, ada berbagai macam jawaban diantaranya, musiknya gak bisa didengar liriknya, terlalu cengeng, bahasanya gak ngerti sampai musik KAMPUNGAN.\r\nNah, kali ini kita akan bahas tentang kampungan atau musik kampungan. Sebenarnya ada tidak sih, musik kampungan itu?', 'SZJdodtx_blog_image.jpg', '2016-10-05 05:11:50', '2016-10-07 04:05:16', 1, 1, 1),
(10, 'musik-untuk-kesehatan', 'Musik untuk Kesehatan', 'Kalau kita pasti tahu musik untuk hiburan, bagaimana jika musik dimanfaatkan untuk kepentingan lain seperti kesehatan?.\r\nBerikut adalah beberapa fakta tentang pemanfaatan musik untuk kesehatan.', 'PBd3057e_blog_image.jpg', '2016-10-05 05:12:10', '2016-10-07 04:04:42', 1, 1, 1),
(11, 'tragedi-pagelaran-musik-terburuk-sepanjang-sejarah', 'Tragedi Pagelaran Musik Terburuk Sepanjang Sejarah', 'Sebagai pecinta musik dapat menyaksikan musik bersama pecinta musik lainnnya dengan sound, lampu dan panggung yang menarik atau bahkan lagu yang kita sukai langsung dinyanyikan oleh penyanyi aslinya adalah hal yang sangat menakjubkan.\r\nTapi, perhahkan kita membayangkan tentang hal terburuk yang bisa terjadi saat pagelaran musik?\r\nBerikut adalah fakta sejarah, tentang beberapa tragedi terburuk dalam sejarah pagelaran musik dunia.', '4WUZWyM5_blog_image.jpg', '2016-10-05 05:12:22', '2016-10-07 04:04:36', 1, 1, 1),
(12, 'musiknya-mau-budayanya-eits-entar-dulu', 'Musiknya? Mau, Budayanya? Eits, Entar Dulu...', 'Negara kesatuan republik indonesia memiliki ideologi yang telah disepakati bersama yakni Pancasila, yang membedakan indonesia dengan negara-negara dan bangsa-bangsa lain di dunia. berisi 5 pokok tentang sebuah nation state yang religius.\r\nMasuknya musik-musik dari luar negeri, bahkan dari negeri-negeri yang secara budaya sangat berbeda dari indonesia membuat nilai-nilai pancasila yang telah kita bahasa tadi mulai terkikis.\r\nLalu harus bagaimana?', 'btKbkScc_blog_image.jpg', '2016-10-05 05:12:36', '2016-10-07 04:04:16', 1, 1, 1),
(13, 'indonesia-negara-musik', 'Indonesia Negara Musik', 'Negari Sejuta Budaya dan Negeri Sejuta Musik, itulah Indonesia.', 'bnsA3wPd_blog_image.jpg', '2016-10-05 05:12:51', '2016-10-07 04:04:24', 1, 1, 1),
(14, 'alat-musik-unik-di-indonesia', 'Alat Musik Unik di Indonesia', '"Indonesia negeri sejuta budaya". Kalimat tersebut adalah kalimat yang paling tepat menggambarkan betapa beragamnya budaya yang ada di Indonesia. Dari keragaman budaya tersebut, muncul pula keragaman musik berserta alat musiknya.\r\nKali ini kita akan bahas alat musik yang unik dari indonesia, bahkan saking uniknya tak akan mungkin alat musik ini bisa ditemui di kebudayaan asli negara manapun di dunia selain di Indonesia.', 'nbqx6Z3j_blog_image.jpg', '2016-10-05 05:13:04', '2016-10-07 04:04:30', 1, 1, 1),
(15, 'aliran-musik-modern-tertua', 'Aliran Musik Modern Tertua', 'Kita tentu sangat mudah membedakan mana musik daerah/musik etnis/musik nenek moyang dengan musik modern.\r\nNah, apa sih musik modern itu? Kita akan bahas lebih rinci dalam artikel berikut.\r\nDi dalam musik modern, banyak aliran musik yang merupakan turunan dari musik tertentu yang membuat kita bertanya-tanya apa aliran musik modern tertua?\r\nKita akan mendapatkan jawabannya dari fakta-fakta berikut.', 'hjuREMCN_blog_image.jpg', '2016-10-05 05:13:16', '2016-10-05 22:43:36', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `article_categories`
--

CREATE TABLE IF NOT EXISTS `article_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `article_categories`
--

INSERT INTO `article_categories` (`id`, `name`) VALUES
(1, 'musiclopedia'),
(2, 'lifestyle'),
(3, 'lookook'),
(4, 'ngomongin music');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) DEFAULT NULL,
  `related_table` varchar(45) DEFAULT NULL,
  `related_table_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `users_role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`users_id`,`users_role_id`),
  KEY `fk_comment_users1` (`users_id`,`users_role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `related_table`, `related_table_id`, `created_at`, `updated_at`, `users_id`, `users_role_id`) VALUES
(7, 'Superman Is Dead, Shaggydog, Endank Soekamti, Tomato, Suicidal Sinatra, Special performance TAKUPAZ Dancer. Superman Is Dead, Shaggydog, Endank Soekamti, Tomato, Suicidal Sinatra, Special performance TAKUPAZ Dancer. Superman Is Dead, Shaggydog, Endank Soe', 'events', 3, '2016-06-12 23:25:00', '2016-06-12 23:25:00', 1, 1),
(20, 'toha', 'events', 5, '2016-06-14 20:04:54', '2016-06-14 20:04:54', 1, 1),
(21, 'xcxccx', 'events', 1, '2016-06-15 23:06:57', '2016-06-15 23:06:57', 1, 1),
(23, 'xcxcxccxccxrwerw dfdfdfhd dfdfggdfg uyw', 'events', 1, '2016-06-15 23:16:44', '2016-06-15 23:17:12', 1, 1),
(25, 'zxzxzxz dvdsfsdsdfsf', 'events', 1, '2016-06-15 23:22:52', '2016-06-15 23:23:32', 1, 1),
(27, 'xczxczczc', 'events', 5, '2016-06-15 23:53:35', '2016-06-15 23:53:35', 1, 1),
(28, 'xcxcccxccc', 'events', 3, '2016-06-15 23:55:38', '2016-06-15 23:55:38', 1, 1),
(29, 'cxxc', 'events', 3, '2016-06-15 23:59:26', '2016-06-15 23:59:26', 26, 1),
(30, 'vvvxcvxvxv', 'events', 5, '2016-06-16 00:00:14', '2016-06-16 00:00:14', 26, 1),
(31, 'sgjghkkk', 'events', 3, '2016-06-16 00:01:09', '2016-06-16 00:01:09', 4, 1),
(32, 'czxczcczx', 'events', 3, '2016-06-16 00:01:54', '2016-06-16 00:01:54', 3, 1),
(33, 'zzczc', 'events', 7, '2016-06-16 13:02:00', '2016-06-16 13:02:00', 26, 1),
(34, 'sddsdsdds', 'events', 3, '2016-06-16 13:52:28', '2016-06-16 13:52:28', 26, 1),
(35, 'xcbxx', 'events', 1, '2016-06-16 23:51:37', '2016-06-16 23:51:37', 26, 1),
(36, 'axvvvvv', 'events', 16, '2016-06-17 16:27:55', '2016-06-17 16:27:55', 0, 1),
(37, 'cvxcvxcvx', 'events', 16, '2016-06-17 16:28:08', '2016-06-17 16:28:08', 0, 1),
(38, 'asdasdadadad', 'events', 16, '2016-06-17 16:28:46', '2016-06-17 16:28:46', 3, 1),
(39, 'jhbjkjk lklknlk nlkkllj', 'events', 17, '2016-06-17 19:15:35', '2016-06-17 19:15:35', 26, 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `body_info` text,
  `image` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `users_role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`users_id`,`users_role_id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `fk_events_users1` (`users_id`,`users_role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `slug`, `title`, `body_info`, `image`, `created_at`, `updated_at`, `users_id`, `users_role_id`) VALUES
(4, NULL, 'Charity Concert For Elderly Sheila On 7', 'Konser Sheila On 7 | Konser di Jakarta | Jadwal Konser Charity Concert For Elderly Sheila On 7 | &nbsp;Sabtu, 1 Oktober 2016 |&nbsp;Titan Center Acara-Jakarta.com - Salam rangka memperingati Hari Lanjut Usia.', 'bwGwdGdg_event_image.jpg', '2016-06-17 00:00:47', '2016-10-07 11:00:38', 1, 1),
(5, NULL, 'Shivering Ground: The Coolest Dance Music Festival in Indonesia', 'Akhir minggu ini, kita juga bakal kedatangan DJ keren untuk acara Shivering Ground yaitu Dimitri Vegas & Like Mike. Acara yang bakal diadain di Ecopark Ancol ini juga dimeriahin sama DJ-DJ lainnya, kayak Dirty South, Jay Hardway, dan masih banyak lagi. So, are you ready to dance?', '7pdXcHbQ_event_image.jpg', '2016-06-17 00:04:14', '2016-10-07 11:05:20', 1, 1),
(7, NULL, 'Jai Waetford: Heart Miles Promo Tour', 'Juara ketiga dari ajang pencarian bakat The X Factor Australia Season ke-5 ini ngadain tur untuk promo albumnya yang berjudul Heart Miles. Selain ke Eropa, beberapa negara di Asia Tenggara termasuk Indonesia jadi tujuan turnya tahun ini. Wah, jadi nggak sabar nih ngeliat langsung cowok cute ini nyanyiin lagu hits-nya “Living Not Dreaming” dan “Shy”.', 'TkEATNAn_event_image.jpg', '2016-06-17 00:04:37', '2016-10-07 11:06:18', 1, 1),
(8, NULL, 'Selena Gomez: Revival Tour Jakarta', 'Mantan pacar Justin Bieber ini akhirnya bakal dateng juga ke Jakarta dalam tur untuk album solo keduanya, Revival, yang bertajuk SELENA GOMEZ REVIVAL TOUR 2016 – JAKARTA. Ini solo world tour-nya yang kedua dan ini jadi pertama kalinya Selena masukin Indonesia di list negara tujuannya, di bawah naungan promotor Live Nation Indonesia.', 'QKKE2zyA_event_image.jpg', '2016-06-17 00:13:39', '2016-10-07 11:08:47', 1, 1),
(10, NULL, 'We The Fest 2016', 'We The Fest is back! Di tahun ketiganya ini, We The Fest ngedatengin banyak musisi-musisi internasional yang lagi hypening banget, kayak Alina Baraz, Ta-ku, Purity Ring, Breakbot, Macklemore & Ryan Lewis, Mark Ronson, The Temper Trap, dan The 1975. Selain musisi luar negeri, musisi lokal juga ikut tampil di festival musik yang tahun ini diadain selama dua hari, diantaranya Barasuara, Dried Cassava, Trees & Wild, Dekat, Kimokal dan masih banyak lagi. Psst, masih ada line up lainnya lagi lho!', 'LbZ1cwm4_event_image.jpg', '2016-06-17 16:15:41', '2016-10-07 11:12:50', 1, 1),
(11, NULL, 'Sunny Side Up Tropical Festival', 'Setelah sebelumnya tampil di Ancol, Jakarta, Disclosure balik lagi nih bulan Agustus nanti buat acara Sunny Side Up Tropical Festival di Bali. Disclosure nggak sendirian, karena ditemenin sama Mark Ronson buat acara musik yang diselenggarain barengan sama We The Fest 2016 di Jakarta.', 'oL4vTevC_event_image.jpg', '2016-06-17 16:15:56', '2016-10-07 11:14:24', 1, 1),
(12, NULL, 'Boyz II Men', 'Boyz II Men kayaknya cinta banget sama Indonesia, since they’ve come here for several times. Lagu-lagu mereka juga nggak bakal lepas dari memori kita nih, kayak lagu “On Bended Knee”, “End of The Road”, dan “I’ll Make Love To You” yang pastinya bikin sing along pas nonton konsernya. Tahun ini, Boyz II Men nggak mampir ke Jakarta, tapi ke 3 kota besar di Indonesia, yaitu Surabaya, Bandung dan Yogyakarta.', 'XaBOqutt_event_image.jpg', '2016-06-17 16:16:12', '2016-10-07 11:15:01', 1, 1),
(18, NULL, 'Prambanan Jazz', 'Kebayang nggak gimana kerennya nikmatin musik jazz dengan latar Candi Prambanan? Pastinya keren banget nih! Udah gitu, tahun ini Prambanan Jazz dimeriahin sama Boyz II Men, lho! Siap-siap sing along lagu-lagu hits mereka, kayak “On Bended Knee”, “End of The Road”, dan “I’ll Make Love To You”.', 'bSuGuXHi_event_image.jpg', '2016-06-21 13:27:41', '2016-10-07 11:15:38', 1, 1),
(19, NULL, 'Djakarta Warehouse Project 2016', 'Ini dia nih acara musik tahunan yang paling ditunggu-tunggu banyak penggemar dance music di Jakarta. Djakarta Warehouse Project, atau biasa disebut DWP, bakal diadain selama dua hari di akhir tahun ini. Line up-nya emang belum diumumin secara resmi sih, tapi ngaku deh, kebanyakan dari kita pasti udah mulai nabung buat beli tiketnya dari sekarang. Hihi.', 'v3LAdZSh_event_image.jpg', '2016-06-21 13:40:40', '2016-10-07 11:16:10', 1, 1),
(20, NULL, 'Apresiasi Malang Blanggur', 'Apresiasi Malang Blanggur w/ Berbisa, Strider & Glyph\r\n06/10/2016 portal\r\nApresiasi Malang Blanggur w/ Berbisa, Strider & Glyph. Tanggal : 07 Oktober 2016 (Jum’at).', 'XmyphWu3_event_image.jpg', '2016-06-21 13:44:19', '2016-10-07 11:17:56', 1, 1),
(21, NULL, 'Malang Cassette Store Day 2016', 'Malang Cassette Store Day 2016. No CD, No Vinyl just Cassette Only!', 'nlj65N06_event_image.jpg', '2016-07-13 07:33:34', '2016-10-07 11:19:09', 1, 1),
(22, NULL, 'KUTHO BEDAH TOTAL SLAUGHTER', 'KUTHO BEDAH TOTAL SLAUGHTER\r\n03/10/2016 portal\r\nKUTHO BEDAH TOTAL SLAUGHTER. Tanggal : 27 November 2016 (Sabtu)', 'DwbUbgVd_event_image.jpg', '2016-10-07 11:50:31', '2016-10-07 11:50:31', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `related_table` varchar(45) DEFAULT NULL,
  `related_table_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `users_role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`users_id`,`users_role_id`),
  KEY `fk_comment_users1` (`users_id`,`users_role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=125 ;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `related_table`, `related_table_id`, `created_at`, `updated_at`, `users_id`, `users_role_id`) VALUES
(1, 'articles', 3, '2016-06-14 21:17:44', '2016-06-14 21:17:44', 3, 1),
(2, 'articles', 4, '2016-06-14 21:17:44', '2016-06-14 21:17:44', 3, 1),
(3, 'articles', 4, '2016-06-15 04:36:54', '2016-06-15 04:36:54', 2, 1),
(102, 'articles', 5, NULL, '2016-06-15 11:02:08', 26, 1),
(103, 'articles', 3, NULL, '2016-06-15 11:02:30', 26, 1),
(104, 'articles', 3, NULL, '2016-06-15 11:06:24', 4, 1),
(105, 'articles', 5, NULL, '2016-06-15 11:06:26', 4, 1),
(106, 'articles', 4, NULL, '2016-06-15 11:06:38', 4, 1),
(107, 'articles', 3, NULL, '2016-06-15 21:14:46', 1, 1),
(108, 'articles', 4, NULL, '2016-06-15 21:14:59', 1, 1),
(109, 'articles', 5, NULL, '2016-06-15 21:15:04', 1, 1),
(110, 'articles', 5, NULL, '2016-06-16 00:02:03', 3, 1),
(111, 'articles', 7, NULL, '2016-06-16 13:01:49', 26, 1),
(112, 'events', 1, NULL, '2016-06-16 14:10:36', 26, 1),
(113, 'events', 1, NULL, '2016-06-16 15:11:16', 1, 1),
(114, 'events', 16, NULL, '2016-06-17 16:28:42', 3, 1),
(115, 'events', 9, NULL, '2016-06-17 16:31:44', 3, 1),
(116, 'events', 10, NULL, '2016-06-17 16:31:47', 3, 1),
(117, 'events', 17, NULL, '2016-06-17 19:15:22', 26, 1),
(118, 'events', 14, NULL, '2016-06-17 19:16:33', 26, 1),
(119, 'events', 12, NULL, '2016-06-17 19:16:36', 26, 1),
(120, 'events', 20, NULL, '2016-10-05 10:17:45', 40, 1),
(121, 'events', 18, NULL, '2016-10-07 09:47:47', 26, 1),
(122, 'events', 11, NULL, '2016-10-07 09:47:51', 26, 1),
(123, 'events', 10, NULL, '2016-10-07 09:47:53', 26, 1),
(124, 'events', 8, NULL, '2016-10-07 09:47:55', 26, 1);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` timestamp NULL DEFAULT NULL,
  `related_table` varchar(45) DEFAULT NULL,
  `related_table_id` int(11) DEFAULT NULL,
  `log_actions_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `users_role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`log_actions_id`,`users_id`,`users_role_id`),
  KEY `fk_logs_log_actions1` (`log_actions_id`),
  KEY `fk_logs_users1` (`users_id`,`users_role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `log_actions`
--

CREATE TABLE IF NOT EXISTS `log_actions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `log_actions`
--

INSERT INTO `log_actions` (`id`, `label`) VALUES
(1, 'CREATE'),
(2, 'UPDATE'),
(3, 'DELETE');

-- --------------------------------------------------------

--
-- Table structure for table `lookbooks`
--

CREATE TABLE IF NOT EXISTS `lookbooks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(125) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `stores_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`stores_id`),
  UNIQUE KEY `slug` (`slug`),
  UNIQUE KEY `slug_2` (`slug`),
  UNIQUE KEY `slug_3` (`slug`),
  UNIQUE KEY `slug_4` (`slug`),
  UNIQUE KEY `slug_5` (`slug`),
  UNIQUE KEY `slug_6` (`slug`),
  UNIQUE KEY `slug_7` (`slug`),
  UNIQUE KEY `slug_8` (`slug`),
  KEY `fk_lookbook_stores1` (`stores_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lookbook_has_products`
--

CREATE TABLE IF NOT EXISTS `lookbook_has_products` (
  `lookbook_id` int(11) NOT NULL,
  `lookbook_stores_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `products_stores_id` int(11) NOT NULL,
  `products_product_categories_id` int(11) NOT NULL,
  PRIMARY KEY (`lookbook_id`,`lookbook_stores_id`,`products_id`,`products_stores_id`,`products_product_categories_id`),
  KEY `fk_lookbook_has_products_products1` (`products_id`,`products_stores_id`,`products_product_categories_id`),
  KEY `fk_lookbook_has_products_lookbook1` (`lookbook_id`,`lookbook_stores_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_05_18_200802_entrust_setup_tables', 1),
('2016_05_19_140841_create_activity_log_table', 2),
('2016_06_03_072948_create_social_accounts_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `musicians`
--

CREATE TABLE IF NOT EXISTS `musicians` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(125) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` text,
  `genre` varchar(80) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `image_cover` varchar(45) DEFAULT NULL,
  `musician_categories_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`,`musician_categories_id`),
  UNIQUE KEY `slug` (`slug`),
  UNIQUE KEY `slug_2` (`slug`),
  UNIQUE KEY `slug_3` (`slug`),
  UNIQUE KEY `slug_4` (`slug`),
  UNIQUE KEY `slug_5` (`slug`),
  UNIQUE KEY `slug_6` (`slug`),
  UNIQUE KEY `slug_7` (`slug`),
  UNIQUE KEY `slug_8` (`slug`),
  UNIQUE KEY `slug_9` (`slug`),
  UNIQUE KEY `slug_10` (`slug`),
  UNIQUE KEY `slug_11` (`slug`),
  UNIQUE KEY `slug_12` (`slug`),
  KEY `fk_musician_musician_categories1` (`musician_categories_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

--
-- Dumping data for table `musicians`
--

INSERT INTO `musicians` (`id`, `slug`, `name`, `description`, `genre`, `image`, `image_cover`, `musician_categories_id`, `created_at`, `updated_at`) VALUES
(1, 'the-sigit', 'The S.I.G.I.T', 'The S.I.G.I.T. (The Super Insurgent Group of Intemperance Talent) is an Indonesian rock band based in Bandung, Indonesia. The band consists of Rektivianto Yoewono on vocals and guitar, Farri Icksan Wibisana on the lead guitar, Aditya Bagja Mulyana on bass, and Armando "Acil" Donar Ekana on drums. They have three studio albums and two EPs: Visible Idea of Perfection (2007), and Detourn (2014); The S.I.G.I.T. (2004), and the two-parted Hertz Dyslexia that was released separately in 2009 and 2011.\r\n\r\nWhen asked about the origin of band''s name, the frontman Rekti explained, "I was on the internet, with nothing to do, so I just had this silly thought about searching my name on Google. I thought, "What does ''Rekti'' mean on other side of the world?" Then I decided to do the same with my father''s name: Sigit. Then I found this website sigit.com which was a science interests group''s website and I thought it would be a cool name for the band then I worked on the abbreviation stand." The band later admitted that the idea of abbreviating the name came from Black Rebel Motorcycle Club, one of their influences.\r\n\r\nThey described themselves as hard rock band, but often being compared to Wolfmother and The Datsuns. They were even dubbed as ''The Indonesians answer to Wolfmother'' by Australian medias.', 'Rock (Vintage)', 'ZPfzLHjv_musician_image.jpg', 'mFYtv84o_musician_cover_image.jpg', 1, 2016, 2016),
(2, 'volcana', 'Volcana', '<p>Jakarta, 20 Mei 2013, awal lahir nya duo yg diberi nama "VOLCANA", digawangi oleh Dede Hakim (Gitar), dan Ajeng (Vocal, Gitar). Pertemuan keduanya, berawal dari Dede Hakim yang melihat sosok Ajeng pertama kali melalui video youtube yg diupload oleh Ajeng, video yang menampilkan Ajeng sedang bernyanyi sambil bermain gitar akustik. Dengan karakter vocal khas yang di rasa cocok dengan musik VOLCANA, Dede pun mulai mencari kontak ajeng dan akhirnya mengajak ajeng untuk bergabung dengan VOLCANA. Sebelumnya pada medio 2003, Dede Hakim, bersama beberapa teman membentuk Band pertamanya IZI (In Zillion Illusion) dengan genre rock alternatif, dan merilis satu Album (Tanpa Batas) dengan 2 Hits Single, yaitu "Mungkin" dan "Tentang Kita". Ajeng sendiri sempat menjadi vokalis pada EMPEROR Band di Jepara (Jawa Tengah) sekitar tahun 2006 - 2007, kemudian bergabung dengan group band HAVINHELL di Jogjakarta sebagai Gitaris. Akhirnya Ajeng resmi bergabung dengan VOLCANA pada tahun 2013 dan mereka bersama (Dede, Ajeng) merampungkan materi-materi yang telah di garap sejak awal tahun 2011 oleh Dedek Hakim. Nama VOLCANA sendiri, Diambil dari kata VOLCANO yg berarti gunung berapi yg mencerminkan keagungan, kekuatan, semangat dan juga keindahan. Dengan mengusung genre Rock Alternative VOLCANA hadir, menyuarakan dan mengibarkan energy positif, semangat, keindahan di dalam balutan harmonis musik rock alternative. VOLCANA berharap karyanya dapat menyebar ke seluruh wilayah Indonesia, dan dapat diterima semua kalangan. Baik kalangan remaja, dewasa, hingga orang tua.</p>', 'Pop Rock', 'BYO1nDWw_musician_image.jpg', 'lyknWtof_musician_cover_image.jpg', 1, 2016, 2016),
(3, 'close-head', 'Close Head', '<p>Pop Punk</p>', 'Pop Punk', 'zWoVEv5O_musician_image.jpg', 'JOptGUsS_musician_cover_image.jpg', 1, 2016, 2016),
(4, 'fun-fun-for-me', 'Fun Fun for Me', '<p>Pop Punk</p>', 'Pop Punk', 'c0nZPLsS_musician_image.jpg', '0nHdbFLl_musician_cover_image.jpg', 1, 2016, 2016),
(5, 'begundal-lowokwaru', 'Begundal Lowokwaru', '<p>Punk</p>', 'Punk', '2p6VTd74_musician_image.jpg', 'odeNrJ9H_musician_cover_image.jpg', 1, 2016, 2016),
(6, 'endank-soekamti', 'Endank Soekamti', '<p>Alternative</p>', 'Alternative', 'IaGjFZPg_musician_image.jpg', 'iFzrR6FQ_musician_cover_image.jpg', 1, 2016, 2016),
(7, 'desa-luka-negara', 'Desa Luka Negara', '<p>Punk</p>', 'Punk', 'vXrticjB_musician_image.jpg', 'r9XD4Tki_musician_cover_image.jpg', 1, 2016, 2016),
(8, 'day-afternoon', 'Day Afternoon', '<p>Reggae</p>', 'Reggae', 'EieeN6ZM_musician_image.jpg', 'lBB5ucDX_musician_cover_image.jpg', 1, 2016, 2016),
(9, 'burgerkill', 'Burgerkill', '<p>Metalcore</p>', 'Metalcore', 'mG9wlE6a_musician_image.jpg', 'urDreOJa_musician_cover_image.jpg', 1, 2016, 2016),
(10, 'dpas4', 'D''Pas4', '<p>Pop Melayu</p>', 'Pop Melayu', 'fDXbK8cu_musician_image.jpg', '6UNDUnIi_musician_cover_image.jpg', 1, 2016, 2016),
(11, 'devadata', 'Devadata', '<p>Metal/Hardcore</p>', 'Metal/Hardcore', 'LU0C62Iy_musician_image.jpg', 'JEt8MrOK_musician_cover_image.jpg', 1, 2016, 2016),
(12, 'boys-and-roots', 'Boys and Roots', '<p>Reggae</p>', 'Reggae', 'g5Vw7pjo_musician_image.jpg', 'O0EAVlba_musician_cover_image.jpg', 1, 2016, 2016),
(13, 'efek-rumah-kaca', 'Efek Rumah Kaca', '<p>Pop</p>', 'Pop', 'acGvGMG9_musician_image.jpg', 'MKRtheOF_musician_cover_image.jpg', 1, 2016, 2016),
(14, 'gugun-blues-shelter', 'Gugun Blues Shelter', '<p>Blues</p>', 'Blues', 'mmE4vdS3_musician_image.jpg', '02RnVqp5_musician_cover_image.jpg', 1, 2016, 2016),
(15, 'jamica', 'Jamica', '<p>Reggae</p>', 'Reggae', 'hBVCGbYB_musician_image.jpg', '6DKVqAXP_musician_cover_image.jpg', 1, 2016, 2016),
(16, 'jasad', 'Jasad', '<p>Death Metal</p>', 'Death Metal', 'LCVUzxIl_musician_image.jpg', 'oIbB2aJX_musician_cover_image.jpg', 1, 2016, 2016),
(17, 'jeruji', 'Jeruji', '<p>Hardcore</p>', 'Hardcore', 'WyRkKjtV_musician_image.jpg', '88eHl5mq_musician_cover_image.jpg', 1, 2016, 2016),
(18, 'karinding-attack', 'Karinding Attack', '<p>Metal Folk</p>', 'Metal Folk', 'YHtS3ycc_musician_image.jpg', 'p31nwCeX_musician_cover_image.jpg', 1, 2016, 2016),
(19, '12-malaikat-gimbal', '12 Malaikat Gimbal', '<p>Reggae</p>', 'Reggae', 'axwpJaO3_musician_image.jpg', '2bl8VCkx_musician_cover_image.jpg', 1, 2016, 2016),
(20, 'marjinal', 'Marjinal', '<p>Punk</p>', 'Punk', 'EAg3IE1R_musician_image.jpg', 'pVmj9xHn_musician_cover_image.jpg', 1, 2016, 2016),
(21, 'melody-maker', 'Melody Maker', '<p>Metal</p>', 'Metal', 'Sk7JrVqv_musician_image.jpg', 'j8SGABLq_musician_cover_image.jpg', 1, 2016, 2016),
(22, 'mocca', 'Mocca', '<p>Pop (Vintage)</p>', 'Pop (Vintage)', 'mEkda8mW_musician_image.jpg', 'k20odTW7_musician_cover_image.jpg', 1, 2016, 2016),
(23, 'momonon', 'Momonon', '<p>Reggae</p>', 'Reggae', 'C2EY7kFP_musician_image.jpg', 'WJHhBJ1m_musician_cover_image.jpg', 1, 2016, 2016),
(24, 'monkey-boots', 'Monkey Boots', '<p>Steady Beat</p>', 'Steady Beat', 'lo0U2Iar_musician_image.jpg', 'A38UTJcW_musician_cover_image.jpg', 1, 2016, 2016),
(25, 'monkey-to-millionaire', 'Monkey to Millionaire', '<p>Rock</p>', 'Rock', 'bqm6SV5W_musician_image.jpg', '8e28NYVM_musician_cover_image.jpg', 1, 2016, 2016),
(26, 'nath-the-lions', 'Nath The Lions', '<p>Reggae</p>', 'Reggae', 'sA0AFwNe_musician_image.jpg', '6Bs80zZw_musician_cover_image.jpg', 1, 2016, 2016),
(27, 'navicula', 'Navicula', '<p>Grunge</p>', 'Grunge', 'Cri4N0Z2_musician_image.jpg', 'uaSqjpeJ_musician_cover_image.jpg', 1, 2016, 2016),
(28, 'ndx-aka', 'NDX A.K.A', '<p>Hip Hop Dangdut</p>', 'Hip Hop Dangdut', 'Mg7SP5ZV_musician_image.jpg', 'DqMGynhs_musician_cover_image.jpg', 1, 2016, 2016),
(29, 'peron-satoe', 'Peron Satoe', '<p>Reggae</p>', 'Reggae', 'G0g61npW_musician_image.jpg', 'hO5aN8z4_musician_cover_image.jpg', 1, 2016, 2016),
(30, 'rebellion-rose', 'Rebellion Rose', '<p>Punk</p>', 'Punk', 'GUw5ljHO_musician_image.jpg', '4aXjvvq8_musician_cover_image.jpg', 1, 2016, 2016),
(31, 'redwine-coolers', 'Redwine Coolers', '<p>Ska</p>', 'Ska', 'RapZHVhp_musician_image.jpg', '94lH7lrH_musician_cover_image.jpg', 1, 2016, 2016),
(32, 'richard-n-the-gilis', 'Richard n'' The Gilis', '<p>Reggae</p>', 'Reggae', 's0vPBJkf_musician_image.jpg', 'diGmvHWn_musician_cover_image.jpg', 1, 2016, 2016),
(33, 's2b', 'S2B', '<p>Reggae</p>', 'Reggae', 'u6p9k0cd_musician_image.jpg', 'kw1X893z_musician_cover_image.jpg', 1, 2016, 2016),
(34, 'sejedewe', 'Sejedewe', '<p>Reggae</p>', 'Reggae', '1cVqI3ed_musician_image.jpg', 'gbiHwMTO_musician_cover_image.jpg', 1, 2016, 2016),
(35, 'shaggydog', 'Shaggydog', '<p>Ska</p>', 'Ska', 'DRRLGYln_musician_image.jpg', 'ovyBN03J_musician_cover_image.jpg', 1, 2016, 2016),
(36, 'siksa-kubur', 'Siksa Kubur', '<p>Death Metal</p>', 'Death Metal', 'JhhUTHxQ_musician_image.jpg', 'JEv3SZN6_musician_cover_image.jpg', 1, 2016, 2016),
(37, 'souljah', 'Souljah', '<p>Ska</p>', 'Ska', '93AElxZU_musician_image.jpg', 'jjneYvkS_musician_cover_image.jpg', 1, 2016, 2016),
(38, 'suicidal-sinatra', 'Suicidal Sinatra', '<p>Rockabilly</p>', 'Rockabilly', 'p4a4HxRB_musician_image.jpg', 'KRIKXkyX_musician_cover_image.jpg', 1, 2016, 2016),
(39, 'sukirgenk', 'Sukirgenk', '<p>Reggae</p>', 'Reggae', 'azKqutR4_musician_image.jpg', 'Mv0z52TT_musician_cover_image.jpg', 1, 2016, 2016),
(40, 'sunset', 'Sunset', '<p>Reggae</p>', 'Reggae', 'ouwtOEu1_musician_image.jpg', 'UYoD8jY4_musician_cover_image.jpg', 1, 2016, 2016),
(41, 'superman-is-dead', 'Superman Is Dead', '<p>Rockabilly</p>', 'Rockabilly', 'g4fyBnlr_musician_image.jpg', '7rCOa97r_musician_cover_image.jpg', 1, 2016, 2016),
(42, 'teh-manis', 'Teh Manis', '<p>Reggae</p>', 'Reggae', 'wwKSmI6S_musician_image.jpg', 'LSn9CoSv_musician_cover_image.jpg', 1, 2016, 2016),
(43, 'tengkorak', 'Tengkorak', '<p>Metal</p>', 'Metal', 'unV8Ah6O_musician_image.jpg', 'TORtYFMV_musician_cover_image.jpg', 1, 2016, 2016),
(44, 'the-banery', 'The Banery', '<p>Rock</p>', 'Rock', 'UNJ7kFY5_musician_image.jpg', 'lPfy4MKs_musician_cover_image.jpg', 1, 2016, 2016),
(45, 'the-upstairs', 'The Upstairs', '<p>Retro</p>', 'Retro', '5vA4TfbJ_musician_image.jpg', 'bGfbHcMy_musician_cover_image.jpg', 1, 2016, 2016),
(46, 'tony-q-rastafara', 'Tony Q. Rastafara', '<p>Reggae</p>', 'Reggae', '7fRbZ624_musician_image.jpg', 'IuTRLLHB_musician_cover_image.jpg', 1, 2016, 2016),
(47, 'white-shoes-and-the-couples-company', 'White Shoes and The Couples Company', '<p>Pop (Vintage)</p>', 'Pop (Vintage)', 'ASB5YnNn_musician_image.jpg', '0U6VOOgq_musician_cover_image.jpg', 1, 2016, 2016),
(48, 'amtenar', 'Amtenar', '<p>Reggae</p>', 'Reggae', 'U1YUK7Ry_musician_image.jpg', 'f7Aeray2_musician_cover_image.jpg', 1, 2016, 2016),
(49, 'scary-job', 'Scary Job', '<p>Metal</p>', 'Metal', 'eWufoVqL_musician_image.jpg', 'Dcgxvul4_musician_cover_image.jpg', 1, 2016, 2016),
(50, 'midnight-quickie', 'Midnight Quickie', '<p>Electronic Dance Music</p>', 'EDM', 'GczlAy8z_musician_image.jpg', '1q32EEBS_musician_cover_image.jpg', 1, 2016, 2016),
(51, 'awakulo', 'Awakulo', '<p>Hip Hop</p>', 'Hip Hop', 'i4yn7HhP_musician_image.jpg', 'HMvotAgp_musician_cover_image.jpg', 1, 2016, 2016),
(52, 'aftercoma', 'Aftercoma', '<p>Metal</p>', 'Metal', 'mIVe9z9k_musician_image.jpg', 'AlHpQcNI_musician_cover_image.jpg', 1, 2016, 2016),
(53, 'mesin-tempur', 'Mesin Tempur', '<p>Grind Core</p>', 'Grind Core', 'ekUmeIbZ_musician_image.jpg', 'JSwhgbJ3_musician_cover_image.jpg', 1, 2016, 2016),
(54, 'mother-like-superhero', 'Mother Like Superhero', '<p>Pop Punk</p>', 'Pop Punk', 'aSKWOidD_musician_image.jpg', 's0AJUve1_musician_cover_image.jpg', 1, 2016, 2016),
(55, 'my-crazy-home', 'My Crazy Home', '<p>Pop Punk</p>', 'Pop Punk', 'tJJhtmxc_musician_image.jpg', 'I3ruYLOS_musician_cover_image.jpg', 1, 2016, 2016),
(56, 'red-spider', 'Red Spider', '<p>Rock</p>', 'Rock', 'wrZh2nxR_musician_image.jpg', 'GPfO5lsA_musician_cover_image.jpg', 1, 2016, 2016),
(57, 'someday-at-heaven', 'Someday at Heaven', '<p>Pop Punk</p>', 'Pop Punk', 'hunKHcBU_musician_image.jpg', 'DuKYvzNP_musician_cover_image.jpg', 1, 2016, 2016),
(58, 'coffee-reggae-stone', 'Coffee Reggae Stone', '<p>Reggae</p>', 'Reggae', '1CbVgbic_musician_image.jpg', 'xwukUMO6_musician_cover_image.jpg', 1, 2016, 2016),
(59, 'gangstarasta', 'Gangstarasta', '<p>Reggae</p>', 'Reggae', 'HiLVGytJ_musician_image.jpg', 'gjdyKAkp_musician_cover_image.jpg', 1, 2016, 2016),
(60, 'imanez', 'Imanez', '<p>Reggae</p>', 'Reggae', 'YislDOny_musician_image.jpg', 'UWS5ulx6_musician_cover_image.jpg', 1, 2016, 2016),
(61, 'havinhell', 'Havinhell', '<p>Punk</p>', 'Punk', 'bs1SgCrh_musician_image.jpg', 'ycEMFgRo_musician_cover_image.jpg', 1, 2016, 2016),
(62, 'jamaican-soul', 'Jamaican Soul', '<p>Reggae</p>', 'Reggae', '8zy24FGu_musician_image.jpg', 'bdOkWJq6_musician_cover_image.jpg', 1, 2016, 2016),
(63, 'mama-say-reggae', 'Mama Say Reggae', '<p>Reggae</p>', 'Reggae', 'BpdH3R2c_musician_image.jpg', 'mA2ETIQL_musician_cover_image.jpg', 1, 2016, 2016),
(64, 'natural-sunrise', 'Natural Sunrise', '<p>Reggae</p>', 'Reggae', 'Z34UOCKB_musician_image.jpg', 'McK7T37L_musician_cover_image.jpg', 1, 2016, 2016),
(65, 'rastamaniez', 'Rastamaniez', '<p>Reggae</p>', 'Reggae', 'GcxgnTXI_musician_image.jpg', 'icNfIrRa_musician_cover_image.jpg', 1, 2016, 2016),
(66, 'roompoet-hijau', 'Roompoet Hijau', '<p>Reggae</p>', 'Reggae', 'kwLmfAH2_musician_image.jpg', 'MejefFln_musician_cover_image.jpg', 1, 2016, 2016),
(67, 'guns-rasta', 'Guns Rasta', '<p>Reggae</p>', 'Reggae', 'wtl6NMPh_musician_image.jpg', 'UcFRYiF0_musician_cover_image.jpg', 1, 2016, 2016),
(68, 'bravesboy', 'Bravesboy', '<p>Ska</p>', 'Ska', 'nfyTYItX_musician_image.jpg', '2AVN6DaU_musician_cover_image.jpg', 1, 2016, 2016),
(69, 'banana-steady-beat', 'Banana Steady Beat', '<p>Steady Beat</p>', 'Steady Beat', 'OpZLxP80_musician_image.jpg', 'UKBej0hd_musician_cover_image.jpg', 1, 2016, 2016),
(70, 'high-moon', 'High Moon', '<p>Ska</p>', 'Ska', 'Day03iJg_musician_image.jpg', 'W5rHulkJ_musician_cover_image.jpg', 1, 2016, 2016),
(71, 'ibaratskata', 'IbaratSKAta', '<p>Ska</p>', 'Ska', 'dFtrW9PB_musician_image.jpg', '2YpoLv8P_musician_cover_image.jpg', 1, 2016, 2016),
(72, 'r-slide', 'R Slide', '<p>Ska</p>', 'Ska', '4TfI36t1_musician_image.jpg', 'KkCN4Irs_musician_cover_image.jpg', 1, 2016, 2016),
(73, 'skamelehoy', 'Skamelehoy', '<p>Ska</p>', 'Ska', 'ZZEXYbda_musician_image.jpg', 'TiIjho9c_musician_cover_image.jpg', 1, 2016, 2016),
(74, 'tanpa-batas', 'Tanpa Batas', '<p>Punk</p>', 'Punk', 'KR7zsP4f_musician_image.jpg', 'sYIQvWWF_musician_cover_image.jpg', 1, 2016, 2016),
(75, 'endah-n-rhesa', 'Endah n'' Rhesa', '<p>Pop</p>', 'Pop', 'R2yrvYs6_musician_image.jpg', 'y5L5q1GE_musician_cover_image.jpg', 1, 2016, 2016),
(76, 'skj-94', 'SKJ 94', '<p>Electronic</p>', 'Electronic', '7lKlRx4d_musician_image.jpg', 'XJ4EzFF3_musician_cover_image.jpg', 1, 2016, 2016),
(77, 'superkidz', 'Superkidz', '<p>Rock</p>', 'Rock', 'bVVBa9dO_musician_image.jpg', 'Zpa9cj0k_musician_cover_image.jpg', 1, 2016, 2016),
(78, 'the-frustaters', 'The Frustaters', '<p>Pop Punk</p>', 'Pop Punk', 'KzsgwmeN_musician_image.jpg', 'hO9nUZHX_musician_cover_image.jpg', 1, 2016, 2016),
(79, 'anonymous', 'Anonymous', '<p>Pop Punk</p>', 'Pop Punk', 'sUKPjbNp_musician_image.jpg', 'NklDPFuk_musician_cover_image.jpg', 1, 2016, 2016),
(80, 'before-after', 'Before After', '<p>Pop Punk</p>', 'Pop Punk', 'etNMxUN3_musician_image.jpg', 'xzDppffa_musician_cover_image.jpg', 1, 2016, 2016),
(81, 'foodcourt', 'Foodcourt', '<p>Pop Punk</p>', 'Pop Punk', 'oq5xr82U_musician_image.jpg', 'e0luwrec_musician_cover_image.jpg', 1, 2016, 2016),
(82, 'franky-freak-butter-jelly', 'Franky Freak Butter Jelly', '<p>Pop Punk</p>', 'Pop Punk', 'wy6uuMVT_musician_image.jpg', 'W5X92F0x_musician_cover_image.jpg', 1, 2016, 2016),
(83, 'kelompok-penerbang-roket', 'Kelompok Penerbang Roket', '<p>Rock</p>', 'Rock', 'yePnIq8r_musician_image.jpg', '5EpldF8i_musician_cover_image.jpg', 1, 2016, 2016),
(84, 'revara', 'Revara', '<p>Pop</p>', 'Pop', 'IEEkVFN9_musician_image.jpg', 'DuOKsHl5_musician_cover_image.jpg', 1, 2016, 2016),
(85, 'stand-here-alone', 'Stand Here Alone', '<p>Pop Punk</p>', 'Pop Punk', 'pQqdxEeU_musician_image.jpg', 'RQOC0i4n_musician_cover_image.jpg', 1, 2016, 2016),
(86, 'suckers-duck', 'Suckers Duck', '<p>Pop Punk</p>', 'Pop Punk', '51ufOjcc_musician_image.jpg', 'xsbf3Oys_musician_cover_image.jpg', 1, 2016, 2016),
(87, 'hayday', 'Hayday', '<p>Pop Punk</p>', 'Pop Punk', 'sfOQuamu_musician_image.jpg', '4DGCt3i9_musician_cover_image.jpg', 1, 2016, 2016),
(88, 'tom-kill-jerry', 'Tom Kill Jerry', '<p>Pop Punk</p>', 'Pop Punk', 'NgyYqead_musician_image.jpg', 'uPEm73QE_musician_cover_image.jpg', 1, 2016, 2016),
(89, 'bingkai', 'Bingkai', '<p>Pop</p>', 'Pop', 'YD9wSZqw_musician_image.jpg', 'D3Qpq7YB_musician_cover_image.jpg', 1, 2016, 2016),
(90, 'biru', 'Biru', '<p>Pop Melayu</p>', 'Pop Melayu', 'VZTr16xU_musician_image.jpg', 'x5nij9Xu_musician_cover_image.jpg', 1, 2016, 2016),
(91, 'cermin', 'Cermin', '<p>Pop Melayu</p>', 'Pop Melayu', '9KM3Pbkn_musician_image.jpg', '01ZYMZ11_musician_cover_image.jpg', 1, 2016, 2016),
(92, 'badak-militia', 'Badak Militia', '<p><img src="/photos/shares/580a597af240a.jpg" />Grind Core</p>', 'Grind Core', 'xHFhi8Xh_musician_image.jpg', 'ON8n0XLP_musician_cover_image.jpg', 1, 2016, 2016),
(93, 'filosofi', 'Filosofi', '<p>Pop</p>', 'Pop', 'RCC0vWbF_musician_image.jpg', 'FotKhpCi_musician_cover_image.jpg', 1, 2016, 2016),
(94, 'ghaury', 'Ghaury', '<p>Seperti Matahari yang selalu menyinari bumi, membuat kehidupan terus berlangsung dalam waktu yang begitu panjang sampai saat ini. Hal itulah philosofi pemilihan nama Ghaury oleh group band asal Cianjur yang di gawangi oleh Pandu (gitar), Rio (Vokal), Iki (Keyboard),Dicky (Gitar) dan Abo (bass) ini. Dalam bahasa Hindi Ghaury diartikan sebagai Matahari yang memiliki makna yang begitu penting dalam kehidupan, pun group Band Ghaury berharap kehadiran mereka akan memberi makna yang penting dalam kehidupan manusia dengan karya -- karya yang mereka ciptakan. Ghaury mulanya adalah sebuah project sampingan dari group band yang cukup di kenal di Cianjur bernama The Bagong. Group band ini adalah group band rock yang biasa tampil di panggung -- panggung musik Cianjur dan sekitarnya dengan membawakan lagu -- lagu populer secara parodi dengan musik cadas yang penuh dengan distorsi. Sadar dengan keterbatasan konsep yang mereka mainkan tersebut, Pandu, Abo, Angga, Dicky, dan Iki kemudian berinisiatif untuk membuat project yang di harapkan dapat membawa mereka ke tingkat yang lebih tinggi dengan mengajak Rio untuk menjadi vokalis mereka sehingga tepat pada bulan Agustus 2009 terbentuklah Ghaury. Single pertama Ghaury di blantika musik Indonesia berjudul "Janji Abang" adalah lagu yang di ciptakan Pandu (gitar) berdasarkan inspirasi dari fakta yang hadir di sekitar nya (cianjur) dimana banyak kisah cinta yang terpisah karena sang pria merantau ke luar negeri untuk mencari penghasilan agar derajat kehidupannya bisa menjadi lebih baik. Untuk mimpi tersebut tidak jarang kisah cinta kemudian hancur karena sang wanita tidak mampu menunggu dalam waktu yang terlalu lama. Kisah itulah yang terkisahkan dalam lagu "Janji Abang".</p>', 'Pop Melayu', 'hQrALYS4_musician_image.jpg', 'eSNlRZ8L_musician_cover_image.jpg', 1, 2016, 2016),
(95, 'lacy', 'Lacy', '<p>Pop Melayu</p>', 'Pop Melayu', 'hh6cfQdw_musician_image.jpg', '7x6WggOu_musician_cover_image.jpg', 1, 2016, 2016),
(96, 'lovarian', 'Lovarian', '                                    Pop\r\n                                ', 'Pop', 'd5SvzxyZ_musician_image.jpg', 'BptYWf5h_musician_cover_image.jpg', 1, 2016, 2016),
(97, 'metronome', 'Metronome', '                                                                                                            Pop Melayu\r\n                                \r\n                                \r\n                                ', 'Pop Melayu', '2dXTRt73_musician_image.jpg', 'XzKkAzTR_musician_cover_image.jpg', 1, 2016, 2016),
(98, 'pulpan', 'Pulpan', '                                                                                                            Pop Melayu\r\n                                \r\n                                \r\n                                ', 'Pop Melayu', 'WEzMzCGc_musician_image.jpg', '4KFIN7Dg_musician_cover_image.jpg', 1, 2016, 2016),
(99, 'banda-neira', 'Banda Neira', '                                    Pop\r\n                                ', 'Pop', '5aPDseZh_musician_image.jpg', 'JlxAB4cP_musician_cover_image.jpg', 1, 2016, 2016),
(100, 'baraswara', 'Baraswara', '                                    Rock\r\n                                ', 'Rock', 'DEGcVCUK_musician_image.jpg', 'UU8FfEhE_musician_cover_image.jpg', 1, 2016, 2016),
(101, '0aaaaaaa', '0aaaaaaa', '<p>sdgsgsgsg <strong>sczxczxczczcxzc</strong> zvxzxvx <strong><em>zxcczcxzc</em></strong> czxczxczxczxc zsczcxczcz cccxczcz</p>', 'Reggae', '2r8Aezcq_musician_image.jpg', '1LzfqLtL_musician_cover_image.jpg', 1, 2016, 2016);

-- --------------------------------------------------------

--
-- Table structure for table `musician_categories`
--

CREATE TABLE IF NOT EXISTS `musician_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `musician_categories`
--

INSERT INTO `musician_categories` (`id`, `name`) VALUES
(1, 'band'),
(2, 'solo instrument'),
(3, 'solo vocal'),
(4, 'group vocal');

-- --------------------------------------------------------

--
-- Table structure for table `musics`
--

CREATE TABLE IF NOT EXISTS `musics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(125) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `description` text,
  `users_id` int(11) NOT NULL,
  `users_role_id` int(11) NOT NULL,
  `musician_id` int(11) NOT NULL,
  `music_categories_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`users_id`,`users_role_id`,`musician_id`,`music_categories_id`),
  UNIQUE KEY `slug` (`slug`),
  UNIQUE KEY `slug_2` (`slug`),
  UNIQUE KEY `slug_3` (`slug`),
  UNIQUE KEY `slug_4` (`slug`),
  UNIQUE KEY `slug_5` (`slug`),
  UNIQUE KEY `slug_6` (`slug`),
  UNIQUE KEY `slug_7` (`slug`),
  UNIQUE KEY `slug_8` (`slug`),
  UNIQUE KEY `slug_9` (`slug`),
  UNIQUE KEY `slug_10` (`slug`),
  UNIQUE KEY `slug_11` (`slug`),
  UNIQUE KEY `slug_12` (`slug`),
  UNIQUE KEY `slug_13` (`slug`),
  UNIQUE KEY `slug_14` (`slug`),
  UNIQUE KEY `slug_15` (`slug`),
  UNIQUE KEY `slug_16` (`slug`),
  UNIQUE KEY `slug_17` (`slug`),
  UNIQUE KEY `slug_18` (`slug`),
  UNIQUE KEY `slug_19` (`slug`),
  KEY `fk_music_users1` (`users_id`,`users_role_id`),
  KEY `fk_musics_musician1` (`musician_id`),
  KEY `fk_musics_music_categories1` (`music_categories_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `musics`
--

INSERT INTO `musics` (`id`, `slug`, `title`, `description`, `users_id`, `users_role_id`, `musician_id`, `music_categories_id`, `created_at`, `updated_at`) VALUES
(2, NULL, 'bakar gedung DPR', 'bakar gedung DPR bakar gedung DPR bakar gedung DPR bakar gedung DPR bakar gedung DPR bakar gedung DPR', 2, 2, 92, 1, NULL, NULL),
(4, NULL, 'sdfsfs sdfsdf sfsfsdfsscs i', 'fsdfs sdgsdgsdggsg', 1, 1, 92, 1, '2016-06-21 01:30:19', '2016-06-21 09:00:36'),
(5, 'vxcvvxvcxvv', 'cvxcvxvxvxv', 'vxcvxcvx cxxvxcvxcv', 2, 2, 92, 1, '2016-10-06 12:30:04', '2016-10-06 12:30:04'),
(6, 'fdfsds sfdfd', 'fsdfd fdfs sdfs', 'fsdf dfsd dsd', 2, 2, 92, 1, '2016-10-06 12:30:36', '2016-10-06 12:30:36');

-- --------------------------------------------------------

--
-- Table structure for table `music_categories`
--

CREATE TABLE IF NOT EXISTS `music_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `music_categories`
--

INSERT INTO `music_categories` (`id`, `name`) VALUES
(1, 'original'),
(2, 'cover');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(125) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `sale` decimal(10,0) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stores_id` int(11) NOT NULL,
  `product_categories_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`stores_id`,`product_categories_id`),
  UNIQUE KEY `slug` (`slug`),
  UNIQUE KEY `slug_2` (`slug`),
  KEY `fk_products_stores1` (`stores_id`),
  KEY `fk_products_product_categories1` (`product_categories_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `slug`, `name`, `image`, `price`, `sale`, `created_at`, `updated_at`, `stores_id`, `product_categories_id`) VALUES
(1, 'long-last-couple', 'Long last couple', 't728XDTT_product_image.jpg', '150', '0', '2016-10-06 22:43:48', '2016-10-06 22:43:48', 1, 1),
(2, 'xcxccx', 'xcxccx', 'x5qsP5Bg_product_image.jpg', '160', '0', '2016-10-06 22:54:38', '2016-10-06 22:54:38', 1, 1),
(3, 'fdfhdd', 'fdfhdd', 'I5yHiDCb_product_image.jpg', '140', '0', '2016-10-06 22:55:48', '2016-10-06 22:55:48', 1, 1),
(4, 'fdfhdfh', 'fdfhdfh', 'qD9ndL2J_product_image.jpg', '150', '0', '2016-10-06 22:56:39', '2016-10-06 22:56:39', 1, 1),
(5, 'dsddasdada', 'dsddasdada', 'lFNFhBlw_product_image.jpg', '140', '0', '2016-10-06 22:57:02', '2016-10-06 22:57:02', 1, 1),
(6, 'ddsfxvxvxv', 'ddsfxvxvxv', 'tvvHQ3Gb_product_image.jpg', '150', '0', '2016-10-06 22:57:50', '2016-10-06 22:57:50', 1, 1),
(7, 'cxczxczx', 'cxczxczx', 'XRtuIi8z_product_image.jpg', '150', '0', '2016-10-06 23:20:54', '2016-10-06 23:20:54', 1, 1),
(8, 'fdddf', 'fdddf', 'l6ekZG2y_product_image.jpg', '150', '0', '2016-10-07 09:40:44', '2016-10-07 09:40:44', 2, 1),
(9, 'cczxcc', 'cczxcc', 'Lg56Qhmc_product_image.jpg', '140', '0', '2016-10-07 09:41:02', '2016-10-07 09:41:02', 2, 1),
(10, 'czxcczcc', 'czxcczcc', 'Ph0JFFTe_product_image.jpg', '140', '0', '2016-10-07 09:41:14', '2016-10-07 09:41:14', 2, 1),
(11, 'czxcz', 'czxcz', '1PBWMmiE_product_image.jpg', '160', '0', '2016-10-07 09:41:31', '2016-10-07 09:41:31', 2, 1),
(12, 'czxczxczczc', 'czxczxczczc', 'nmZZdW6G_product_image.jpg', '150', '0', '2016-10-07 09:41:49', '2016-10-07 09:41:49', 2, 1),
(13, 'xczccccz', 'xczccccz', 'NhskrglD_product_image.jpg', '160', '0', '2016-10-07 09:42:11', '2016-10-07 09:42:11', 2, 1),
(14, 'cxzczcxzc', 'cxzczcxzc', 'B1auOoCs_product_image.jpg', '111', '0', '2016-10-07 09:42:36', '2016-10-07 09:42:36', 2, 1),
(15, 'fghfhgff', 'fghfhgff', 'Tv3MKgmC_product_image.jpg', '160', '0', '2016-10-07 09:43:39', '2016-10-07 09:43:39', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE IF NOT EXISTS `product_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `initial` varchar(45) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `initial`, `parent_id`) VALUES
(1, 'T-Shirt', 'A', NULL),
(2, 'Hoodie', 'B', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', NULL, '2016-05-18 13:55:21', '2016-05-18 13:55:21'),
(2, 'member', 'Member', NULL, '2016-05-18 13:55:21', '2016-05-18 13:55:21'),
(3, 'superadmin', 'Super Admin', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'developer', 'Developer', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(25, 2),
(26, 2),
(40, 2),
(3, 3),
(40, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `social_accounts`
--

CREATE TABLE IF NOT EXISTS `social_accounts` (
  `user_id` int(11) NOT NULL,
  `provider_user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `social_accounts`
--

INSERT INTO `social_accounts` (`user_id`, `provider_user_id`, `provider`, `created_at`, `updated_at`) VALUES
(39, '1021149064668648', 'facebook', '2016-06-03 01:33:37', '2016-06-03 01:33:37');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE IF NOT EXISTS `stores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(125) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `slogan` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `image_cover` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  UNIQUE KEY `slug_2` (`slug`),
  UNIQUE KEY `slug_3` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `slug`, `name`, `slogan`, `description`, `image`, `image_cover`, `created_at`, `updated_at`) VALUES
(1, 'god-whisper', 'God Whisper', 'cczxcczc', '                                    czxcz zxv', '1DfGhNXE_store_image.jpg', 'MSZBS9xv_store_cover_image.jpg', '2016-10-06 21:06:26', '2016-10-06 21:09:43'),
(2, 'heffen', 'HEFFEN', 'czxczcxczczx', 'czxczxczzvz vxcvxvxvxc vxcvxcvx\n', '4qJRiOyb_store_image.jpg', 'UbxJSpVf_store_cover_image.jpg', '2016-10-06 20:59:12', '2016-10-06 21:04:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(125) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fullname` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT '2',
  `sex_type` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday_day` int(4) DEFAULT NULL,
  `birthday_month` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday_year` int(6) DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `facebook_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `store_id` int(11) NOT NULL DEFAULT '0',
  `musician_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `slug` (`slug`),
  UNIQUE KEY `slug_2` (`slug`),
  UNIQUE KEY `slug_3` (`slug`),
  UNIQUE KEY `slug_4` (`slug`),
  UNIQUE KEY `slug_5` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=41 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `slug`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `fullname`, `image`, `role_id`, `sex_type`, `birthday_day`, `birthday_month`, `birthday_year`, `address`, `facebook_id`, `avatar`, `store_id`, `musician_id`) VALUES
(1, NULL, 'Admin TempoCepat', 'admin@gmail.com', '$2y$10$1IljsTWTOFiXKk5nWrIHXeJ03gFXVN7i.e.GFwY2tlU6C4MSuhKO2', 'W35dKnJqclrjkazHNF1kD4dMGtgsj4lMsiObYeVVnUa3KdwJ0vCrAIT7eL80', '2016-05-18 13:55:21', '2016-07-09 14:37:42', NULL, 'vKDTvyie_profile_image.jpg', 2, NULL, NULL, NULL, NULL, NULL, '', '', 0, 0),
(2, NULL, 'Sample Member', 'member@gmail.com', '$2y$10$/lKSMux9UDZbKtTnenhK3eNkmpw2nj6NMMhVBTdakYX.mpeDMx/xO', 'oN1RPAYtxjN9eHwHknTOUcnskO5SuheiJRRYO2NjkBK5qTnHAQdMsqwuZ2J4', '2016-05-18 13:55:22', '2016-05-18 13:59:57', NULL, 'WLL334Jf_profile_image.jpg', 2, NULL, NULL, NULL, NULL, NULL, '', '', 0, 0),
(3, NULL, 'geonk', 'didien.geonk@gmail.com', '$2y$10$LG2R85vLeR9H/kPaVIKrqO38KYpiInt3cas6goUQ7jgOyaCfiSDl.', 't7vToZrdaxuQ2QYujhHrkEi9Fd5COeZTXqLVgByM', '2016-05-18 14:00:17', '2016-06-21 23:01:23', 'rwerwr gsggsgssdg', 'oI750JKz_product_image.jpg', 0, NULL, 2, '4', 1993, '63463463 dgsdgss', '', '', 0, 0),
(4, NULL, 'mei', 'mei@gmail.com', '$2y$10$AKqV6Ve.UTQxBnlTBu/PvuPwN.fPRUSZkTh1pSxIt7isIMszJd/JO', 'axqNdqQWexiPYtq4HJwhMNfVkIaKcSLyQiLAWGEq6NrV35BLSil4FONyfKfi', '2016-05-18 14:50:14', '2016-10-12 09:00:19', NULL, 'tcSXWShI_profile_image.jpg', 2, NULL, NULL, NULL, NULL, NULL, '', '', 0, 0),
(25, NULL, 'geonk2255', '2255didien.geonk@gmail.com', '$2y$10$0bCZ16qLsQTcSjf77yLffeUo0iorUyoZ9jJn25mtHW1RN86QOUTs.', 'IA6MelECfNNAa9w19Yd0ugVq6N7nLEtlozJpKImLWVkMS2jnwFNbAI4NR9Qt', '2016-05-19 02:14:45', '2016-10-01 18:15:38', NULL, 'Fm1s7obP_profile_image.jpg', 2, NULL, NULL, NULL, NULL, NULL, '', '', 0, 0),
(26, NULL, 'anggota', 'anggota@gmail.com', '$2y$10$676dmgsehj1w98U/4GtV4ONPTLouohRGHcgdlh9uSjVKKNIKdLxqO', 'FBgo1AjQbsmMO3G8TBOzig7pUnZimwcT4ka5pTyzyV6aMyk0N20okUOmbPqu', '2016-05-20 05:11:15', '2016-10-12 09:53:15', NULL, 'muPSP5Zn_profile_image.jpg', 2, NULL, NULL, NULL, NULL, NULL, '', '', 2, 101),
(39, NULL, 'Muhammad Sholahuddin', 'didien_geonk@yahoo.co.id', '', NULL, '2016-06-03 01:33:37', '2016-06-03 01:33:37', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '1021149064668648', 'https://graph.facebook.com/v2.6/1021149064668648/picture?type=normal', 0, 0),
(40, NULL, 'admin2@gmail.com', 'admin2@gmail.com', '$2y$10$DrBTBLyifkMLA4Wvgw4SW.uJKJm31PAFsEtkVoXpxSWEEi7wK8W7K', 'ETTOL57Jd1kwEgcajcSYCZRB73mOHMtD3bHYuQtacHYjprCbXQUmgusRlbHC', '2016-10-01 18:16:20', '2016-10-12 09:55:25', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_has_musician`
--

CREATE TABLE IF NOT EXISTS `users_has_musician` (
  `users_id` int(11) NOT NULL,
  `users_role_id` int(11) NOT NULL,
  `musician_id` int(11) NOT NULL,
  PRIMARY KEY (`users_id`,`users_role_id`,`musician_id`),
  KEY `fk_users_has_musician_musician1` (`musician_id`),
  KEY `fk_users_has_musician_users1` (`users_id`,`users_role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_has_stores`
--

CREATE TABLE IF NOT EXISTS `users_has_stores` (
  `users_id` int(11) NOT NULL,
  `users_role_id` int(11) NOT NULL,
  `stores_id` int(11) NOT NULL,
  PRIMARY KEY (`users_id`,`users_role_id`,`stores_id`),
  KEY `fk_users_has_stores_stores1` (`stores_id`),
  KEY `fk_users_has_stores_users1` (`users_id`,`users_role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
