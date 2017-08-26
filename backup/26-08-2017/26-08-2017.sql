-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-08-2017 a las 00:38:12
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
-- Base de datos: `dbrestaurante`
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
-- Estructura de tabla para la tabla `tbclientes`
--

CREATE TABLE `tbclientes` (
  `personaid` varchar(20) NOT NULL,
  `clienteid` int(11) NOT NULL,
  `clientemillas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbempleados`
--

CREATE TABLE `tbempleados` (
  `empleadoid` varchar(255) NOT NULL,
  `empleadocontrasenia` varchar(255) NOT NULL,
  `empleadonombre` varchar(255) NOT NULL,
  `empleadohorario` varchar(255) NOT NULL,
  `personaid` varchar(20) NOT NULL,
  `tipoempleadoid` int(11) NOT NULL
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
-- Estructura de tabla para la tabla `tbpersonas`
--

CREATE TABLE `tbpersonas` (
  `personaid` varchar(15) NOT NULL,
  `personsanombre` varchar(50) NOT NULL,
  `personaapellido1` varchar(50) NOT NULL,
  `personaapeliido2` varchar(50) NOT NULL,
  `personacorreo` varchar(255) NOT NULL,
  `personatelefono` varchar(12) NOT NULL,
  `personadireccion` varchar(255) NOT NULL
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
-- Estructura de tabla para la tabla `tbtipoempleado`
--

CREATE TABLE `tbtipoempleado` (
  `tipoempleadoid` int(11) NOT NULL,
  `tipoempleadodescripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbtipoempleado`
--

INSERT INTO `tbtipoempleado` (`tipoempleadoid`, `tipoempleadodescripcion`) VALUES
(1, 'Administrador'),
(2, 'Cocinero'),
(3, 'Mesero');

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
-- Indices de la tabla `tbclientes`
--
ALTER TABLE `tbclientes`
  ADD PRIMARY KEY (`clienteid`),
  ADD KEY `personaid` (`personaid`);

--
-- Indices de la tabla `tbempleados`
--
ALTER TABLE `tbempleados`
  ADD PRIMARY KEY (`empleadoid`),
  ADD KEY `personaid` (`personaid`),
  ADD KEY `tipoempleadoid` (`tipoempleadoid`);

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
-- Indices de la tabla `tbpersonas`
--
ALTER TABLE `tbpersonas`
  ADD PRIMARY KEY (`personaid`);

--
-- Indices de la tabla `tbsector`
--
ALTER TABLE `tbsector`
  ADD PRIMARY KEY (`sectorid`);

--
-- Indices de la tabla `tbtipoempleado`
--
ALTER TABLE `tbtipoempleado`
  ADD PRIMARY KEY (`tipoempleadoid`);

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
-- AUTO_INCREMENT de la tabla `tbclientes`
--
ALTER TABLE `tbclientes`
  MODIFY `clienteid` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT de la tabla `tbtipoempleado`
--
ALTER TABLE `tbtipoempleado`
  MODIFY `tipoempleadoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbvegetales`
--
ALTER TABLE `tbvegetales`
  MODIFY `vegetalid` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbclientes`
--
ALTER TABLE `tbclientes`
  ADD CONSTRAINT `tbclientes_ibfk_1` FOREIGN KEY (`personaid`) REFERENCES `tbpersonas` (`personaid`);

--
-- Filtros para la tabla `tbempleados`
--
ALTER TABLE `tbempleados`
  ADD CONSTRAINT `tbempleados_ibfk_1` FOREIGN KEY (`personaid`) REFERENCES `tbpersonas` (`personaid`),
  ADD CONSTRAINT `tbempleados_ibfk_2` FOREIGN KEY (`tipoempleadoid`) REFERENCES `tbtipoempleado` (`tipoempleadoid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
