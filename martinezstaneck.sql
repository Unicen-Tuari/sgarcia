-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2016 a las 18:36:17
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `martinezstaneck`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_tecnicos`
--

CREATE TABLE `datos_tecnicos` (
  `id_maq` int(11) NOT NULL,
  `denominacion` varchar(50) NOT NULL,
  `potencia` varchar(30) NOT NULL,
  `altura` varchar(30) NOT NULL,
  `ancho` varchar(30) NOT NULL,
  `peso` varchar(30) NOT NULL,
  `capacidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos_tecnicos`
--

INSERT INTO `datos_tecnicos` (`id_maq`, `denominacion`, `potencia`, `altura`, `ancho`, `peso`, `capacidad`) VALUES
(1, 'Silograin Energia Cero', 'No corresponde', '2,7 metros', '2,2 metros', '1100 Kg', 'Lo que de la monotolva'),
(2, 'Moledora M-699', '25 HP', '2,1 Mt', '1,9 Mt', '1500 Kg', '40 Tn/Hr');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_imagen` int(11) NOT NULL,
  `path` varchar(100) NOT NULL,
  `fk_id_maq` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_imagen`, `path`, `fk_id_maq`) VALUES
(1, 'images/silograin.jpg', 1),
(2, 'images/moledora.jpg', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquina`
--

CREATE TABLE `maquina` (
  `id_maq` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `datos_tecnicos` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `maquina`
--

INSERT INTO `maquina` (`id_maq`, `nombre`, `tipo`, `precio`, `datos_tecnicos`) VALUES
(1, 'Silograin Energia Cero', 'Moledora Embutidora', 120000, 1),
(2, 'M-699', 'Moledora Embutidora ', 150000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nom_usuario` varchar(20) NOT NULL,
  `clave` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nom_usuario`, `clave`) VALUES
(1, 'Admin', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_tecnicos`
--
ALTER TABLE `datos_tecnicos`
  ADD PRIMARY KEY (`id_maq`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`),
  ADD UNIQUE KEY `EXTRANJERA` (`fk_id_maq`);

--
-- Indices de la tabla `maquina`
--
ALTER TABLE `maquina`
  ADD PRIMARY KEY (`id_maq`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `maquina`
--
ALTER TABLE `maquina`
  MODIFY `id_maq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datos_tecnicos`
--
ALTER TABLE `datos_tecnicos`
  ADD CONSTRAINT `fk_dato_maq` FOREIGN KEY (`id_maq`) REFERENCES `maquina` (`id_maq`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `fk_imagen_maq` FOREIGN KEY (`fk_id_maq`) REFERENCES `maquina` (`id_maq`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
