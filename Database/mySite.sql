-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.26 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for my_sample
CREATE DATABASE IF NOT EXISTS `my_sample` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `my_sample`;

-- Dumping structure for table my_sample.contact_us
CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `img` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT 'bootstrap icon tag',
  `link` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- Dumping data for table my_sample.contact_us: ~5 rows (approximately)
/*!40000 ALTER TABLE `contact_us` DISABLE KEYS */;
INSERT INTO `contact_us` (`id`, `name`, `img`, `link`) VALUES
	(1, 'Facebook', '0', 'https://chat.openai.com/'),
	(2, 'Twitter', '0', 'https://chat.openai.com/'),
	(3, 'Whatsapp', '0', ''),
	(4, 'Linkdin', '0', '0'),
	(5, 'Youtube', '0', '0');
/*!40000 ALTER TABLE `contact_us` ENABLE KEYS */;

-- Dumping structure for table my_sample.design_category
CREATE TABLE IF NOT EXISTS `design_category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- Dumping data for table my_sample.design_category: ~5 rows (approximately)
/*!40000 ALTER TABLE `design_category` DISABLE KEYS */;
INSERT INTO `design_category` (`id`, `name`) VALUES
	(1, 'Page_Header'),
	(2, 'Page_Footer'),
	(3, 'Travaling'),
	(4, 'Shoping'),
	(5, 'Bussines');
/*!40000 ALTER TABLE `design_category` ENABLE KEYS */;

-- Dumping structure for table my_sample.order_by
CREATE TABLE IF NOT EXISTS `order_by` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `img` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT 'insert image',
  `link` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- Dumping data for table my_sample.order_by: ~2 rows (approximately)
/*!40000 ALTER TABLE `order_by` DISABLE KEYS */;
INSERT INTO `order_by` (`id`, `name`, `img`, `link`) VALUES
	(1, 'Upwork', '0', 'https://chat.openai.com/'),
	(2, 'Fiver', '0', '0');
/*!40000 ALTER TABLE `order_by` ENABLE KEYS */;

-- Dumping structure for table my_sample.sample
CREATE TABLE IF NOT EXISTS `sample` (
  `id` int NOT NULL AUTO_INCREMENT,
  `design_category_id` int DEFAULT NULL,
  `download_file` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `img` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `file_path` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '#',
  PRIMARY KEY (`id`),
  KEY `FK_sample_design_category` (`design_category_id`),
  CONSTRAINT `FK_sample_design_category` FOREIGN KEY (`design_category_id`) REFERENCES `design_category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- Dumping data for table my_sample.sample: ~14 rows (approximately)
/*!40000 ALTER TABLE `sample` DISABLE KEYS */;
INSERT INTO `sample` (`id`, `design_category_id`, `download_file`, `img`, `file_path`) VALUES
	(1, 4, NULL, 'assets//img//sample//64bf5992a9bf6.jpeg', NULL),
	(2, 3, NULL, 'assets//img//sample//64bf59994764b.jpeg', NULL),
	(3, 3, NULL, 'assets//img//sample//64bf599e9860d.jpeg', NULL),
	(4, 4, NULL, 'assets//img//sample//64bf59a5102ff.jpeg', NULL),
	(5, 3, NULL, 'assets//img//sample//64bf59c62f4b8.jpeg', NULL),
	(6, 4, NULL, 'assets//img//sample//64bf623627941.jpeg', NULL),
	(7, 3, NULL, 'assets//img//sample//64bf623b5d071.jpeg', NULL),
	(8, 4, NULL, 'assets//img//sample//64bf62411f4bf.jpeg', NULL),
	(9, 3, NULL, 'assets//img//sample//64bfb7e27257e.jpeg', NULL),
	(10, 4, NULL, 'assets//img//sample//64c9468e61a5e.jpeg', 'assets//file//64c9468e61c53//style.css'),
	(11, 3, NULL, 'assets//img//sample//64c9477f1d4bf.jpeg', 'assets//file//64c9477f1d894//home.html'),
	(12, 2, NULL, 'assets//img//sample//64c94b262a63c.jpeg', 'assets//file//64c94b262a9a7//home.html'),
	(13, 1, NULL, 'assets//img//sample//64c94c25a3290.jpeg', 'assets//file//64c94c25a3b37//home.html'),
	(15, 3, NULL, 'assets//img//sample//64c955dfbb240.jpeg', 'assets//file//64c955dfbb5b3//home.html'),
	(16, 2, NULL, 'assets//img//sample//64cbe1c610d6b.jpeg', 'assets//file//64cbe1c61131d//home.html');
/*!40000 ALTER TABLE `sample` ENABLE KEYS */;

-- Dumping structure for table my_sample.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `discription` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `about` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `profile_img` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- Dumping data for table my_sample.user: ~0 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `name`, `email`, `discription`, `about`, `profile_img`, `password`) VALUES
	(3, '0', 'thanujithad@gmail.com', '', '', 'assets//img//profileImage//646d09eb408a1.jpeg', 'ThA@#123');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
