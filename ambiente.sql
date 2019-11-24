-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-10-2019 a las 22:21:07
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ambiente`
--
CREATE DATABASE IF NOT EXISTS `ambiente` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `ambiente`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

DROP TABLE IF EXISTS `reportes`;
CREATE TABLE `reportes` (
  `Consecutivo` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `jornada` enum('M','T','N','F') COLLATE utf8_spanish_ci NOT NULL,
  `Inst entrega` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Inst recibe` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `obs_org_E` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `obs_org_R` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `obs_equi_E` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `obs_equi_R` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `obs_mob_E` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `obs_mob_R` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `Estado` enum('E','R') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`Consecutivo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `Consecutivo` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
