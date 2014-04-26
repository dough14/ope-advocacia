-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.14 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura para tabela ope_advocacia.calendar
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

-- Copiando dados para a tabela ope_advocacia.calendar: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `calendar` DISABLE KEYS */;
INSERT IGNORE INTO `calendar` (`id`, `startDate`, `user_fk`, `cliente_id`, `endDate`, `title`, `event_description`, `status`, `last_update`, `last_user_update`) VALUES
	(15, '2014-03-22', 5, 0, '2014-03-23', 'Evento teste id', NULL, 0, NULL, NULL),
	(16, '2014-03-24', 5, NULL, '2014-04-25', 'Evento da Ana', NULL, 0, NULL, NULL),
	(17, '2014-03-22', 5, NULL, '2014-03-23', 'teste', NULL, 0, NULL, NULL),
	(18, '2014-03-10', 5, NULL, '2014-03-10', 'Evento do Henrique', NULL, 0, '2014-04-14 20:53:19', NULL);
/*!40000 ALTER TABLE `calendar` ENABLE KEYS */;


-- Copiando estrutura para tabela ope_advocacia.ci_sessions
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

-- Copiando dados para a tabela ope_advocacia.ci_sessions: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT IGNORE INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
	('e52a2eea7b7ea2c3f8f1011a6349ee98', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.116 Safari/537.36', 1398519178, 'a:4:{s:9:"user_data";s:0:"";s:6:"logged";b:1;s:4:"user";s:1:"5";s:5:"level";s:1:"1";}');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;


-- Copiando estrutura para tabela ope_advocacia.cliente
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela ope_advocacia.cliente: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT IGNORE INTO `cliente` (`id`, `nome`, `cpf`, `tel`, `tipos_processo`, `endereco`, `cep`, `uf`, `date_created`, `data_nasc`, `tel2`, `cel`, `tel_alt`, `contatar`, `num_beneficio`, `obs`, `status`) VALUES
	(1, 'Douglas Leandro', '123.454.876-54', '(11) 1111-11111', '0', 'Rua qualquer nº2', '01312-010', '0', '2014-04-12 08:38:59', '1970-01-01', '', '(11) 9822-23195', NULL, NULL, NULL, NULL, NULL),
	(24, 'teste', '', '', '0', '', '', '0', '2014-04-20 22:06:48', '1994-12-01', '', '', '(88) 8888-88888', 'alguem', NULL, NULL, NULL),
	(25, 'Manolo Pina', '123456789', '12323131', '0', 'Rua qualquer', '01312010', '0', '2014-04-05 17:05:35', '1990-03-22', '12312121', '1232131', NULL, NULL, NULL, NULL, NULL),
	(27, 'a', '222.222.222-22', '(22) 2222-22222', '0', '1361656', '61615-321', '0', '2014-04-19 16:40:56', '1999-01-12', '(11) 1111-11111', '(33) 3333-33333', '(33) 3333-33333', 'alguem', NULL, NULL, NULL);
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;


-- Copiando estrutura para tabela ope_advocacia.lawsuits
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

-- Copiando dados para a tabela ope_advocacia.lawsuits: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `lawsuits` DISABLE KEYS */;
INSERT IGNORE INTO `lawsuits` (`id`, `code`, `cliente_id`, `user_id`, `type`, `note`, `start_date`, `created_at`, `updated_at`) VALUES
	(2, 'CODE', 1, 5, 'TYPE', 'NOTE', '2014-03-29', '2014-03-29 15:17:20', '2014-03-29 15:17:21'),
	(4, '1', 24, NULL, '2', '3', '1980-01-04', '2014-03-29 19:57:55', '2014-03-29 19:57:55'),
	(5, '11', 24, 5, '12', '13', '1970-02-05', '2014-03-29 20:00:16', '2014-03-29 20:00:16');
/*!40000 ALTER TABLE `lawsuits` ENABLE KEYS */;


-- Copiando estrutura para tabela ope_advocacia.user
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

-- Copiando dados para a tabela ope_advocacia.user: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT IGNORE INTO `user` (`id`, `nome`, `email`, `telefone`, `password`, `level`, `date_created`, `login`, `last_login`) VALUES
	(5, 'Administrador', 'email@teste.com', '(12) 3456-7897', 'b007febbc0f75455c60c521f1c503f7a6eb81b73', 1, '2014-01-04 22:05:30', 'admin', '2014-03-12 19:55:47');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
