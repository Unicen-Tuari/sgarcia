-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2016 a las 02:25:05
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
  `id_dat` int(11) NOT NULL,
  `id_maq` int(11) NOT NULL,
  `caracteristica` varchar(50) NOT NULL,
  `valor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos_tecnicos`
--

INSERT INTO `datos_tecnicos` (`id_dat`, `id_maq`, `caracteristica`, `valor`) VALUES
(1, 1, 'Potencia', '55 hp'),
(2, 1, 'rendimiento', '60 Tn/h'),
(3, 2, 'peso', '4556 kg'),
(4, 2, 'rendimiento', '43 tn/h'),
(6, 1, 'Peso', '1600 kg'),
(8, 2, 'largo', '2 metros'),
(9, 1, 'Alto', '2,4 mts'),
(10, 2, 'potencia', '22 hp'),
(13, 10, 'Peso', '5000 Kg'),
(14, 11, 'Peso', '3200 Kg');

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
(22, 'images/5813e8cf70f72silograin.jpg', 1),
(23, 'images/5813e8e8e2342forrajeb.jpe', 16),
(24, 'images/5813e8e8eff05mixer16.jpg', 16),
(25, 'images/5813e901e20abmoledora.jpg', 2),
(26, 'images/5813e90c9557dmixer.jpg', 10),
(27, 'images/5813e9179f120mixervagon.jpg', 11),
(28, 'images/5813e925ddbf5twin699.jpg', 12);

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
(1, 'Silograin Energia Cero', 'Mixer', 120000, 1),
(2, 'M-699', 'Moledora Embutidora ', 150000, 1),
(10, 'mixer 13', 'Mixer', 1500000, 1),
(11, 'Mixer Dual 10', 'Mixer-Dual', 950000, 1),
(12, 'moledora Twin de 9 pies', 'Moledora Embutidora', 750000, 0),
(16, 'ffff', 'Mixer', 5555, 0);

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
  ADD PRIMARY KEY (`id_dat`),
  ADD KEY `id_maq` (`id_maq`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`),
  ADD KEY `fk_id_maq` (`fk_id_maq`);

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
-- AUTO_INCREMENT de la tabla `datos_tecnicos`
--
ALTER TABLE `datos_tecnicos`
  MODIFY `id_dat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `maquina`
--
ALTER TABLE `maquina`
  MODIFY `id_maq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
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
  ADD CONSTRAINT `fk_imagen_maq` FOREIGN KEY (`fk_id_maq`) REFERENCES `maquina` (`id_maq`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
