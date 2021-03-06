-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.19 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para control
DROP DATABASE IF EXISTS `control`;
CREATE DATABASE IF NOT EXISTS `control` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `control`;

-- Volcando estructura para tabla control.actividades
DROP TABLE IF EXISTS `actividades`;
CREATE TABLE IF NOT EXISTS `actividades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) COLLATE utf8_bin NOT NULL,
  `porcentaje` float NOT NULL,
  `grupo_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `calificacion` int(11) NOT NULL DEFAULT '0',
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla control.asistencias
DROP TABLE IF EXISTS `asistencias`;
CREATE TABLE IF NOT EXISTS `asistencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `horario_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `valor` int(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla control.calendarios
DROP TABLE IF EXISTS `calendarios`;
CREATE TABLE IF NOT EXISTS `calendarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `periodo_id` int(11) NOT NULL,
  `inicio_vacaciones` date DEFAULT NULL,
  `fin_vacaciones` date DEFAULT NULL,
  `inicio_periodo` date NOT NULL,
  `fin_periodo` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla control.carreras
DROP TABLE IF EXISTS `carreras`;
CREATE TABLE IF NOT EXISTS `carreras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `duracion` int(11) NOT NULL,
  `modalidad` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT 'Semestral',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla control.grupos
DROP TABLE IF EXISTS `grupos`;
CREATE TABLE IF NOT EXISTS `grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `materia_id` int(11) NOT NULL,
  `clave` varchar(50) COLLATE utf8_bin NOT NULL,
  `turno` varchar(15) COLLATE utf8_bin DEFAULT 'Matutino',
  `user_id` int(11) NOT NULL,
  `periodo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla control.horarios
DROP TABLE IF EXISTS `horarios`;
CREATE TABLE IF NOT EXISTS `horarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grupo_id` int(11) NOT NULL,
  `dia` varchar(11) COLLATE utf8_bin NOT NULL,
  `hora_inicio` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla control.inscripciones
DROP TABLE IF EXISTS `inscripciones`;
CREATE TABLE IF NOT EXISTS `inscripciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `grupo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla control.materias
DROP TABLE IF EXISTS `materias`;
CREATE TABLE IF NOT EXISTS `materias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `carrera_id` int(11) NOT NULL,
  `grado` int(2) NOT NULL,
  `creditos` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla control.parciales
DROP TABLE IF EXISTS `parciales`;
CREATE TABLE IF NOT EXISTS `parciales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `periodo_id` int(11) NOT NULL,
  `inicio_examenes` date NOT NULL,
  `fin_examenes` date NOT NULL,
  `descripcion` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla control.periodos
DROP TABLE IF EXISTS `periodos`;
CREATE TABLE IF NOT EXISTS `periodos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) COLLATE utf8_bin NOT NULL,
  `plural` varchar(50) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_bin NOT NULL,
  `ciclo` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla control.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(20) COLLATE utf8_bin NOT NULL,
  `apellido_paterno` varchar(17) COLLATE utf8_bin NOT NULL,
  `apellido_materno` varchar(17) COLLATE utf8_bin NOT NULL,
  `sexo` varchar(10) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `rol` varchar(11) COLLATE utf8_bin NOT NULL DEFAULT 'estudiante',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- La exportación de datos fue deseleccionada.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
