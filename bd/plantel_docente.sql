-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.31 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for plantel_docente
CREATE DATABASE IF NOT EXISTS `plantel_docente` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `plantel_docente`;

-- Dumping structure for table plantel_docente.docente
CREATE TABLE IF NOT EXISTS `docente` (
  `ci` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `grado_academico` varchar(50) NOT NULL,
  `estado_laboral` varchar(50) NOT NULL,
  `formacion_academica` varchar(350) NOT NULL,
  `formacion_profesional` varchar(350) NOT NULL,
  `historial_trabajo` varchar(350) NOT NULL,
  `nombre_foto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ci`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table plantel_docente.materia
CREATE TABLE IF NOT EXISTS `materia` (
  `codigo` int(11) NOT NULL,
  `sigla` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='	';

-- Data exporting was unselected.
-- Dumping structure for table plantel_docente.materiasDictadas
CREATE TABLE IF NOT EXISTS `materiasDictadas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ci` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
