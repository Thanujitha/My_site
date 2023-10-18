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

-- Dumping structure for table my_sample.colore
CREATE TABLE IF NOT EXISTS `colore` (
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table my_sample.colore: ~0 rows (approximately)
/*!40000 ALTER TABLE `colore` DISABLE KEYS */;
INSERT INTO `colore` (`name`) VALUES
	('bg-danger'),
	('bg-gradient'),
	('bg-info'),
	('bg-success'),
	('bg-warning');
/*!40000 ALTER TABLE `colore` ENABLE KEYS */;

-- Dumping structure for table my_sample.contact_us
CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `icon` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT 'bootstrap icon tag',
  `link` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- Dumping data for table my_sample.contact_us: ~5 rows (approximately)
/*!40000 ALTER TABLE `contact_us` DISABLE KEYS */;
INSERT INTO `contact_us` (`id`, `name`, `icon`, `link`) VALUES
	(1, 'Facebook', 'bi bi-facebook', 'https://www.facebook.com/profile.php?id=100022527731448'),
	(3, 'Whatsapp', 'bi bi-whatsapp', 'https://wa.me/0756485394/'),
	(4, 'Linkdin', 'bi-linkedin', 'https://www.linkedin.com/in/thanujitha-dilshan-681188274/'),
	(6, 'Github', 'bi bi-github', 'https://github.com/Thanujitha');
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
/*!40000 ALTER TABLE `sample` ENABLE KEYS */;

-- Dumping structure for table my_sample.services
CREATE TABLE IF NOT EXISTS `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `icon` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `dis` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table my_sample.services: ~0 rows (approximately)
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` (`id`, `icon`, `title`, `dis`) VALUES
	(1, 'assets/icon/responsive.png', 'Web Site Design ', 'Web Site Design in HTML, CSS, JavaScript'),
	(2, 'assets/icon/pos.png', 'POS System Develop', 'System Development Main using by Java'),
	(3, 'assets/icon/development.png', 'React Native App Development', 'Android and iOS application development in React Native Core using JavaScript'),
	(4, 'assets/icon/app-development.png', 'Android App Development', 'Android Application Development ');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;

-- Dumping structure for table my_sample.skills
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `colore` varchar(50) DEFAULT NULL,
  `marks` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_skills_colore` (`colore`),
  CONSTRAINT `FK_skills_colore` FOREIGN KEY (`colore`) REFERENCES `colore` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table my_sample.skills: ~0 rows (approximately)
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills` (`id`, `name`, `colore`, `marks`) VALUES
	(1, 'Java development', 'bg-danger', 82),
	(2, 'Php Web Development', 'bg-success', 95),
	(3, 'Java Web Development', 'bg-info', 65),
	(4, 'Servelet Using', 'bg-warning', 60),
	(5, 'React Native Application Development', 'bg-gradient', 83);
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;

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
