-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.16 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4177
-- Date/time:                    2014-04-26 13:16:28
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table ope_advocacia.calendar
DROP TABLE IF EXISTS `calendar`;
CREATE TABLE IF NOT EXISTS `calendar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `startDate` date DEFAULT NULL,
  `user_fk` int(11) unsigned NOT NULL,
  `cliente_id` int(11) unsigned DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `title` varchar(350) DEFAULT NULL,
  `event_description` varchar(500) DEFAULT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  `last_update` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `last_user_update` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_fk` (`user_fk`),
  CONSTRAINT `user_fk` FOREIGN KEY (`user_fk`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Dumping data for table ope_advocacia.calendar: ~4 rows (approximately)
DELETE FROM `calendar`;
/*!40000 ALTER TABLE `calendar` DISABLE KEYS */;
INSERT INTO `calendar` (`id`, `startDate`, `user_fk`, `cliente_id`, `endDate`, `title`, `event_description`, `status`, `last_update`, `last_user_update`) VALUES
	(15, '2014-03-22', 5, 0, '2014-03-23', 'Evento teste id', NULL, 0, NULL, NULL),
	(16, '2014-03-24', 5, NULL, '2014-04-25', 'Evento da Ana', NULL, 0, NULL, NULL),
	(17, '2014-03-22', 5, NULL, '2014-03-23', 'teste', NULL, 0, NULL, NULL),
	(18, '2014-03-10', 5, NULL, '2014-03-10', 'Evento do Henrique', NULL, 0, '2014-04-14 20:53:19', NULL);
/*!40000 ALTER TABLE `calendar` ENABLE KEYS */;


-- Dumping structure for table ope_advocacia.ci_sessions
DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ope_advocacia.ci_sessions: ~1 rows (approximately)
DELETE FROM `ci_sessions`;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
	('eed7dfc2bb5a50a4ce009e3a5c6c7d90', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.116 Safari/537.36', 1398528358, 'a:4:{s:9:"user_data";s:0:"";s:6:"logged";b:1;s:4:"user";s:1:"5";s:5:"level";s:1:"1";}');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;


-- Dumping structure for table ope_advocacia.cliente
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `tipos_processo` varchar(10) NOT NULL,
  `endereco` varchar(500) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `uf` varchar(10) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `data_nasc` date NOT NULL,
  `tel2` varchar(15) DEFAULT NULL,
  `cel` varchar(15) DEFAULT NULL,
  `tel_alt` varchar(15) DEFAULT NULL,
  `contatar` varchar(100) DEFAULT NULL,
  `num_beneficio` varchar(200) DEFAULT NULL,
  `obs` varchar(500) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- Dumping data for table ope_advocacia.cliente: ~4 rows (approximately)
DELETE FROM `cliente`;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`id`, `nome`, `cpf`, `tel`, `tipos_processo`, `endereco`, `cep`, `uf`, `date_created`, `data_nasc`, `tel2`, `cel`, `tel_alt`, `contatar`, `num_beneficio`, `obs`, `status`, `deleted_at`, `updated_at`) VALUES
	(1, 'Douglas Leandro', '123.454.876-54', '(11) 1111-11111', '0', 'Rua qualquer nº2', '01312-010', '0', '2014-04-12 08:38:59', '1970-01-01', '', '(11) 9822-23195', NULL, NULL, NULL, NULL, NULL, NULL, '2014-04-26 12:56:54'),
	(24, 'teste', '', '', '0', '', '', '0', '2014-04-26 12:37:03', '1994-12-01', '', '', '(88) 8888-88888', 'alguem', NULL, NULL, NULL, NULL, '2014-04-26 12:56:54'),
	(25, 'Manolo Pina', '123456789', '12323131', '0', 'Rua qualquer', '01312010', '0', '2014-04-05 17:05:35', '1990-03-22', '12312121', '1232131', NULL, NULL, NULL, NULL, NULL, NULL, '2014-04-26 12:56:54'),
	(27, 'a', '222.222.222-22', '(22) 2222-22222', '0', '1361656', '61615-321', '0', '2014-04-26 12:37:29', '1999-01-12', '(11) 1111-11111', '(33) 3333-33333', '(33) 3333-33333', 'alguem', NULL, NULL, NULL, NULL, '2014-04-26 12:56:54');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;


-- Dumping structure for table ope_advocacia.lawsuits
DROP TABLE IF EXISTS `lawsuits`;
CREATE TABLE IF NOT EXISTS `lawsuits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  `type` varchar(120) DEFAULT NULL,
  `note` text,
  `start_date` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `CLIENTE_ID` (`cliente_id`),
  KEY `user_id` (`user_id`),
  KEY `status_id` (`status_id`),
  CONSTRAINT `CLIENTE_ID` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `USER_ID` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `LAWSUITS_STATUS_ID` FOREIGN KEY (`status_id`) REFERENCES `lawsuits_status` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table ope_advocacia.lawsuits: ~3 rows (approximately)
DELETE FROM `lawsuits`;
/*!40000 ALTER TABLE `lawsuits` DISABLE KEYS */;
INSERT INTO `lawsuits` (`id`, `code`, `cliente_id`, `status_id`, `user_id`, `type`, `note`, `start_date`, `created_at`, `updated_at`) VALUES
	(2, 'CODE', 1, 2, 5, 'TYPE', 'NOTE', '2014-03-29', '2014-04-26 17:53:53', '2014-04-26 17:53:53'),
	(4, '1', 24, 3, NULL, '2', '3', '1980-01-04', '2014-03-29 19:57:55', '2014-03-29 19:57:55'),
	(5, '11', 24, 5, 5, '12', '13', '1970-02-05', '2014-03-29 20:00:16', '2014-03-29 20:00:16');
/*!40000 ALTER TABLE `lawsuits` ENABLE KEYS */;


-- Dumping structure for table ope_advocacia.lawsuits_status
DROP TABLE IF EXISTS `lawsuits_status`;
CREATE TABLE IF NOT EXISTS `lawsuits_status` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `status` varchar(80) DEFAULT NULL,
  `color` char(10) DEFAULT '#000',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table ope_advocacia.lawsuits_status: ~5 rows (approximately)
DELETE FROM `lawsuits_status`;
/*!40000 ALTER TABLE `lawsuits_status` DISABLE KEYS */;
INSERT INTO `lawsuits_status` (`id`, `status`, `color`) VALUES
	(1, 'Novo', '#7FAF1B'),
	(2, 'Em Andamento', '#107FC9'),
	(3, 'Em Espera', '#FFC800'),
	(4, 'Aguardando Veredicto', '#A80000'),
	(5, 'Finalizado', '#000');
/*!40000 ALTER TABLE `lawsuits_status` ENABLE KEYS */;


-- Dumping structure for table ope_advocacia.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `password` varchar(40) NOT NULL,
  `level` tinyint(4) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `login` varchar(40) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table ope_advocacia.user: ~0 rows (approximately)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `nome`, `email`, `telefone`, `password`, `level`, `date_created`, `login`, `last_login`) VALUES
	(5, 'Administrador', 'email@teste.com', '(12) 3456-7897', 'b007febbc0f75455c60c521f1c503f7a6eb81b73', 1, '2014-01-04 22:05:30', 'admin', '2014-03-12 19:55:47');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
