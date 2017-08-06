-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-08-2017 a las 07:53:52
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbproyectorestaurante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbsector`
--

CREATE TABLE `tbsector` (
  `sectorid` int(11) NOT NULL,
  `secornombre` varchar(255) NOT NULL,
  `sectorcapacidadpersonas` int(11) NOT NULL,
  `sectorcapacidadmesas` int(11) NOT NULL,
  `sectorestado` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla para los sectores del restaurante';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbsector`
--
ALTER TABLE `tbsector`
  ADD PRIMARY KEY (`sectorid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbsector`
--
ALTER TABLE `tbsector`
  MODIFY `sectorid` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
