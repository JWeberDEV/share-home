-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for share_room_database
CREATE DATABASE IF NOT EXISTS `share_room_database` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `share_room_database`;

-- Dumping structure for table share_room_database.cad_usuarios
CREATE TABLE IF NOT EXISTS `cad_usuarios` (
  `cad_id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `cad_nome_completo` varchar(250) DEFAULT NULL,
  `cad_usuario` varchar(100) DEFAULT NULL,
  `cad_senha_usuario` varchar(100) DEFAULT NULL,
  `cad_email` varchar(100) DEFAULT NULL,
  `cad_data_nasc` date DEFAULT NULL,
  PRIMARY KEY (`cad_id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table share_room_database.cad_usuarios: ~0 rows (approximately)
/*!40000 ALTER TABLE `cad_usuarios` DISABLE KEYS */;
INSERT INTO `cad_usuarios` (`cad_id_usuario`, `cad_nome_completo`, `cad_usuario`, `cad_senha_usuario`, `cad_email`, `cad_data_nasc`) VALUES
	(1, 'Josias Weber Machado', 'admin', 'admin', 'email@gmail.com', NULL),
	(6, 'sdasfd', 'agora vai', 'agoravai', 'agoravai@gmail.com', NULL),
	(7, 'resolve', 'resolve', 'resolve', 'resolve', NULL),
	(8, 'cria', 'cria', 'cria', 'cria', NULL),
	(9, 'jao maneu', 'jao', 'abc', 'jao@gmail.com', NULL);
/*!40000 ALTER TABLE `cad_usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
