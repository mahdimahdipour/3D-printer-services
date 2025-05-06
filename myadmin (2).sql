-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 06, 2025 at 06:49 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `text` text COLLATE utf8mb4_persian_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1120 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `image`, `text`, `created_at`) VALUES
(1, '10.jpg', 'انواع دستگاه های جوش', '2025-04-21 13:43:02'),
(2, '15.png', 'انواع کمپرسور', '2025-04-21 13:43:15'),
(3, '9.jpg', 'انواع ابزار های برقی ', '2025-04-21 13:45:31'),
(4, '11.jpg', 'انواع الکتروموتورها', '2025-04-21 13:45:44'),
(5, '21.jpg', 'انواع پرس های هیدرولیک', '2025-04-21 13:46:02'),
(6, '31.jpg', 'انواع آون های جوش', '2025-04-21 12:05:01'),
(7, '28.jpg', 'انواع دستگاه پرس', '2025-04-21 12:05:15'),
(8, '30.jpg', 'انواع دریل و سنگ فرزها', '2025-04-21 13:42:26'),
(9, '23.jpg', 'انواع تیفور های صنعتی', '2025-04-21 13:41:33'),
(10, '35.jpg', 'انواع ابزار ها', '2025-04-21 13:40:46'),
(11, '32.jpg', 'انواع مولتی مترها', '2025-04-21 13:27:58'),
(12, '34.png', 'انواع ابزار های جوشکاری', '2025-04-21 13:22:05');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `content` text COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_id` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `description` text COLLATE utf8mb4_persian_ci,
  `price` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_persian_ci DEFAULT 'user',
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `name`, `password`, `role`, `id`) VALUES
('mahdipour', 'masih', '1234', 'admin', 1),
('mahdipour', 'masih', '1234', 'admin', 2),
('mahdipour', 'mahdi', '1234', 'user', 3),
('mahdipour', 'mahdi', '1234', 'user', 4),
('mahdipour', 'mahdi', '1234', 'user', 5),
('mahdipour', 'mahdi', '1234', 'user', 6),
('mahdipour', 'mahdi', '1234', 'user', 7),
('mahdipour', 'mahdi', '1234', 'user', 8),
('mahdipour', 'mahdi', '1234', 'user', 9),
('mahdipour', 'mahdi', '1234', 'user', 10),
('mahdipour', 'mahdi', '1234', 'user', 11),
('mahdipour', 'mahdi', '1234', 'user', 12),
('mahdipour', 'mahdi', '1234', 'user', 13),
('mahdipour', 'mahdi', '1234', 'user', 14),
('mahdipour', 'mahdi', '1234', 'user', 15),
('mahdipour', 'masih', '1234', 'user', 16),
('mahdipour', 'masih', '1234', 'user', 17),
('mahdipour', 'masih', '1234', 'user', 18),
('mahdipour', 'masih', '1234', 'user', 19),
('mahdipour', 'masih', '1234', 'user', 20),
('mahdipour', 'masih', '1234', 'user', 21),
('mahdipour', 'masih', '1234', 'user', 22),
('mahdipour', 'masih', '1234', 'user', 23),
('mahdipour', 'masih', '1234', 'user', 24),
('mahdipour', 'masih', '1234', 'user', 25),
('mahdipour', 'masih', '1234', 'user', 26),
('mahdipour', 'masih', '1234', 'user', 27),
('mahdipour', 'masih', '1234', 'user', 28),
('mahdipour', 'masih', '1234', 'user', 29),
('mahdipour', 'masih', '1234', 'user', 30),
('mahdipour', 'masih', '1234', 'user', 31),
('mahdipour', 'masih', '1234', 'user', 32),
('mahdipour', 'masih', '1234', 'user', 33),
('mahdipour', 'masih', '1234', 'user', 34),
('mahdipour', 'masih', '1234', 'user', 35),
('mahdipour', 'masih', '1234', 'user', 36),
('mahdipour', 'masih', '1234', 'user', 37),
('mahdipour', 'masih', '1234', 'user', 38),
('mahdipour', 'masih', '1234', 'user', 39),
('mahdipour', 'masih', '1234', 'user', 40),
('mahdipour', 'masih', '1234', 'user', 41),
('mahdipour', 'masih', '1234', 'user', 42),
('mahdipour', 'masih', '1234', 'user', 43),
('mahdipour', 'masih', '1234', 'user', 44),
('mahdipour', 'masih', '1234', 'user', 45),
('مسیح', 'مهدی پور', '1234', 'user', 46),
('مسیح', 'مسیح', '1234', 'user', 47),
('سید', 'سیدی', '1234', 'user', 48),
('adminsepahan', 'مسیح ', '1234sepahanqrup', 'user', 49),
('فاعضه', 'فاعضه', '1234', 'user', 50);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
