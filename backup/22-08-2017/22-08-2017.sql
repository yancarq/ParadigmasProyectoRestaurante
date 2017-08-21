-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-08-2017 a las 23:33:08
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
-- Estructura de tabla para la tabla `tbcarnes`
--

CREATE TABLE `tbcarnes` (
  `carneid` int(11) NOT NULL,
  `carnedescripcion` mediumtext NOT NULL,
  `carnenombre` varchar(255) NOT NULL,
  `carnemedida` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbempleados`
--

CREATE TABLE `tbempleados` (
  `empleadoid` varchar(255) NOT NULL,
  `empleadocontrasenia` varchar(255) NOT NULL,
  `empleadonombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbensaladas`
--

CREATE TABLE `tbensaladas` (
  `ensaladaid` int(11) NOT NULL,
  `ensaladadescripcion` mediumtext NOT NULL,
  `ensaladanombre` varchar(255) NOT NULL,
  `ensaladamedida` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbespecias`
--

CREATE TABLE `tbespecias` (
  `especiaid` int(11) NOT NULL,
  `especiadescripcion` mediumtext NOT NULL,
  `especianombre` varchar(255) NOT NULL,
  `especiamedida` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbsector`
--

CREATE TABLE `tbsector` (
  `sectorid` int(11) NOT NULL,
  `sectornombre` varchar(255) NOT NULL,
  `sectorcapacidadpersonas` int(11) NOT NULL,
  `sectorcapacidadmesas` int(11) NOT NULL,
  `sectorestado` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla para los sectores del restaurante';

--
-- Volcado de datos para la tabla `tbsector`
--

INSERT INTO `tbsector` (`sectorid`, `sectornombre`, `sectorcapacidadpersonas`, `sectorcapacidadmesas`, `sectorestado`) VALUES
(123123, 'hola', 412, 2147483647, 'Habilidato');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbvegetales`
--

CREATE TABLE `tbvegetales` (
  `vegetalid` int(11) NOT NULL,
  `vegetaldescripcion` mediumtext NOT NULL,
  `vegetalnombre` varchar(255) NOT NULL,
  `vegetalmedida` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbcarnes`
--
ALTER TABLE `tbcarnes`
  ADD PRIMARY KEY (`carneid`);

--
-- Indices de la tabla `tbempleados`
--
ALTER TABLE `tbempleados`
  ADD PRIMARY KEY (`empleadoid`);

--
-- Indices de la tabla `tbensaladas`
--
ALTER TABLE `tbensaladas`
  ADD PRIMARY KEY (`ensaladaid`);

--
-- Indices de la tabla `tbespecias`
--
ALTER TABLE `tbespecias`
  ADD PRIMARY KEY (`especiaid`);

--
-- Indices de la tabla `tbsector`
--
ALTER TABLE `tbsector`
  ADD PRIMARY KEY (`sectorid`);

--
-- Indices de la tabla `tbvegetales`
--
ALTER TABLE `tbvegetales`
  ADD PRIMARY KEY (`vegetalid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbcarnes`
--
ALTER TABLE `tbcarnes`
  MODIFY `carneid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbensaladas`
--
ALTER TABLE `tbensaladas`
  MODIFY `ensaladaid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbespecias`
--
ALTER TABLE `tbespecias`
  MODIFY `especiaid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbsector`
--
ALTER TABLE `tbsector`
  MODIFY `sectorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123124;
--
-- AUTO_INCREMENT de la tabla `tbvegetales`
--
ALTER TABLE `tbvegetales`
  MODIFY `vegetalid` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
