-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.16 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4177
-- Date/time:                    2014-03-29 17:44:14
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table ope_advocacia.lawsuits
DROP TABLE IF EXISTS `lawsuits`;
CREATE TABLE IF NOT EXISTS `lawsuits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  `type` varchar(120) DEFAULT NULL,
  `note` text,
  `start_date` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `CLIENTE_ID` (`cliente_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `CLIENTE_ID` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `USER_ID` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table ope_advocacia.lawsuits: ~3 rows (approximately)
DELETE FROM `lawsuits`;
/*!40000 ALTER TABLE `lawsuits` DISABLE KEYS */;
INSERT INTO `lawsuits` (`id`, `code`, `cliente_id`, `user_id`, `type`, `note`, `start_date`, `created_at`, `updated_at`) VALUES
	(2, 'CODE', 1, 5, 'TYPE', 'NOTE', '2014-03-29', '2014-03-29 15:17:20', '2014-03-29 15:17:21'),
	(4, '1', 24, 7, '2', '3', '1980-01-04', '2014-03-29 19:57:55', '2014-03-29 19:57:55'),
	(5, '11', 24, 5, '12', '13', '1970-02-05', '2014-03-29 20:00:16', '2014-03-29 20:00:16');
/*!40000 ALTER TABLE `lawsuits` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
