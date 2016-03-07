-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-04-2015 a las 01:53:03
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pomu`
--
CREATE DATABASE IF NOT EXISTS `pomu` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `pomu`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `pregunta` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `respuesta` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `nombre`, `usuario`, `clave`, `cedula`, `pregunta`, `respuesta`) VALUES
(1, 'Kevin Brito', 'kevinabelbrito', 'holamundo', 'V21349732', 'deporte favorito', 'Futbol');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inactivos`
--

CREATE TABLE IF NOT EXISTS `inactivos` (
`id` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `desde` date NOT NULL,
  `hasta` date NOT NULL,
  `motivo` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nomina`
--

CREATE TABLE IF NOT EXISTS `nomina` (
`id` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `bonos` float NOT NULL,
  `hex` float NOT NULL,
  `sueldo` float NOT NULL,
  `caja` float NOT NULL,
  `seguro` float NOT NULL,
  `carga` float NOT NULL,
  `banavih` float NOT NULL,
  `funeraria` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasantes`
--

CREATE TABLE IF NOT EXISTS `pasantes` (
`id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `universidad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `especialidad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `desde` date NOT NULL,
  `hasta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
`id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `fechanac` date NOT NULL,
  `lugarnac` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `residencia` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `cursos` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `experiencia` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `formacion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nomina` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inactivos`
--
ALTER TABLE `inactivos`
 ADD PRIMARY KEY (`id`), ADD KEY `id_personal` (`id_personal`);

--
-- Indices de la tabla `nomina`
--
ALTER TABLE `nomina`
 ADD PRIMARY KEY (`id`), ADD KEY `id_personal` (`id_personal`);

--
-- Indices de la tabla `pasantes`
--
ALTER TABLE `pasantes`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `inactivos`
--
ALTER TABLE `inactivos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `nomina`
--
ALTER TABLE `nomina`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pasantes`
--
ALTER TABLE `pasantes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `inactivos`
--
ALTER TABLE `inactivos`
ADD CONSTRAINT `inactivos_ibfk_1` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `nomina`
--
ALTER TABLE `nomina`
ADD CONSTRAINT `nomina_ibfk_1` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
