-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2018 a las 19:41:54
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `oviapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE `agenda` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(15) DEFAULT NULL,
  `body` text NOT NULL,
  `url` varchar(50) NOT NULL,
  `class` varchar(40) NOT NULL,
  `start` varchar(15) NOT NULL,
  `end` varchar(15) NOT NULL,
  `inicio_normal` varchar(50) NOT NULL,
  `final_normal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`id`, `title`, `body`, `url`, `class`, `start`, `end`, `inicio_normal`, `final_normal`) VALUES
(1, '999999', 'hhhhhhhhhhhhhh', 'http://localhost/oviapp/pages/Administrador/agenda', 'event-info', '1544625540000', '1545143940000', '12/12/2018 09:39:00', '18/12/2018 09:39:00'),
(2, 'ukhg', 'jkhgkhgckgh', 'http://localhost/oviapp/pages/Administrador/agenda', 'event-warning', '1545236940000', '1545150540000', '19/12/2018 11:29:00', '18/12/2018 11:29:00'),
(3, 'tyty', 'rtyrty', 'http://localhost/oviapp/pages/Administrador/agenda', 'event-success', '1545582600000', '1545582600000', '23/12/2018 11:30:00', '23/12/2018 11:30:00'),
(4, 'ertret', 'rtretert', 'http://localhost/oviapp/pages/Administrador/agenda', 'event-warning', '1545237060000', '1544805060000', '19/12/2018 11:31:00', '14/12/2018 11:31:00'),
(5, 'ertret', 'rtretert', 'http://localhost/oviapp/pages/Administrador/agenda', 'event-warning', '1545237060000', '1544805060000', '19/12/2018 11:31:00', '14/12/2018 11:31:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animal`
--

CREATE TABLE `animal` (
  `id_Animal` bigint(20) NOT NULL,
  `nom_Animal` varchar(50) NOT NULL,
  `sex_Animal` varchar(50) NOT NULL,
  `ori_Animal` varchar(50) NOT NULL,
  `cod_Animal` varchar(20) NOT NULL,
  `fec_Nacimiento` varchar(50) NOT NULL,
  `num_Partos` varchar(10) NOT NULL,
  `nom_Raza` varchar(20) NOT NULL,
  `ind_Prenez` varchar(2) NOT NULL,
  `pes_Actual` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `animal`
--

INSERT INTO `animal` (`id_Animal`, `nom_Animal`, `sex_Animal`, `ori_Animal`, `cod_Animal`, `fec_Nacimiento`, `num_Partos`, `nom_Raza`, `ind_Prenez`, `pes_Actual`) VALUES
(1, 'veronica', 'macho', 'interno', '5555', '', '1', 'cruces', 's', ''),
(15, 'pacho', 'hembra', 'interno', '6418', '00-00-0000', '500', 'cruces', 's', ''),
(16, 'PACHO CHU', 'HEMBRA', 'INTERNO', '3', '2018-11-04', '55', 'CRECES', 'S', '100'),
(17, 'PACHECO', 'MACHO', 'INTERNO', '1209', '2018-11-22', '1', 'KATAHDIN', 'S', ''),
(18, 'PANCHA', 'HEMBRA', 'EXTERNO', '1234', '2018-11-06', '1', 'KATAHDIN', 'N', ''),
(20, 'HAM', 'MACHO', 'EXTERNO', '991122', '2018-12-03', '0', 'PELIBUEY', 'NO', '12'),
(21, 'LOKO', 'MACHO', 'EXTERNO', 'ffffffffff', '2018-12-13', '0', 'PELIBUEY', 'SE', '50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `celos`
--

CREATE TABLE `celos` (
  `id_Celo` bigint(20) NOT NULL,
  `id_Animal` bigint(20) NOT NULL,
  `id_Persona` bigint(20) NOT NULL,
  `fec_Inicio` date NOT NULL,
  `fec_Final` date NOT NULL,
  `observaciones` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `celos`
--

INSERT INTO `celos` (`id_Celo`, `id_Animal`, `id_Persona`, `fec_Inicio`, `fec_Final`, `observaciones`) VALUES
(31, 16, 7, '2018-11-22', '2018-11-02', 'el observador es ...'),
(33, 16, 9, '2016-02-09', '2017-01-01', 'Salio Naco'),
(34, 1, 9, '2018-12-12', '2018-12-21', 'Nada'),
(35, 1, 9, '2018-12-03', '2018-12-04', ''),
(36, 18, 9, '2018-12-18', '2019-01-04', ''),
(37, 17, 9, '2019-01-01', '2018-12-18', 'ADIOS'),
(38, 1, 7, '2018-12-11', '2019-01-04', ''),
(39, 1, 7, '2018-12-03', '2018-12-04', ''),
(40, 20, 10, '2018-12-03', '2018-12-04', ''),
(43, 20, 8, '2018-12-10', '2018-12-20', 'AQUIIIII ESTE ESSSS!!!'),
(44, 21, 14, '2018-12-13', '2018-12-20', 'gggg'),
(45, 1, 8, '2018-12-14', '2018-12-21', 'gggg'),
(46, 1, 10, '2018-12-15', '2018-12-28', 'gggg'),
(47, 1, 14, '2018-12-20', '2018-12-20', 'eef'),
(48, 1, 10, '2018-12-14', '2018-12-21', 'jgfjgfjdgfj');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ecografias`
--

CREATE TABLE `ecografias` (
  `id_Ecografia` bigint(20) NOT NULL,
  `fec_Ecografia` date NOT NULL,
  `id_Persona` bigint(20) NOT NULL,
  `id_Animal` bigint(20) NOT NULL,
  `res_Ecografia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ecografias`
--

INSERT INTO `ecografias` (`id_Ecografia`, `fec_Ecografia`, `id_Persona`, `id_Animal`, `res_Ecografia`) VALUES
(2, '2018-11-14', 7, 15, 'WERTYU'),
(4, '2018-11-13', 7, 15, 'EMBARAZADA'),
(5, '2012-01-11', 9, 1, 'CON CRIAS :V'),
(6, '2021-01-05', 9, 15, 'CON CRIAS X2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `montas`
--

CREATE TABLE `montas` (
  `id_Monta` bigint(20) NOT NULL,
  `id_Persona` bigint(20) NOT NULL,
  `fec_Monta` date NOT NULL,
  `fec_Posible_Parto` date NOT NULL,
  `observacion` varchar(100) NOT NULL,
  `id_Animal` bigint(20) NOT NULL,
  `id_Parto` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partos`
--

CREATE TABLE `partos` (
  `id_Parto` bigint(20) NOT NULL,
  `id_Animal` bigint(30) NOT NULL,
  `fec_Parto` date NOT NULL,
  `num_AnimalParido` double NOT NULL,
  `num_AnimalVivo` double NOT NULL,
  `num_AnimalMuerto` double NOT NULL,
  `num_AnimalMacho` double NOT NULL,
  `num_AnimalHembra` double NOT NULL,
  `fec_Destete` date NOT NULL,
  `id_Persona` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `partos`
--

INSERT INTO `partos` (`id_Parto`, `id_Animal`, `fec_Parto`, `num_AnimalParido`, `num_AnimalVivo`, `num_AnimalMuerto`, `num_AnimalMacho`, `num_AnimalHembra`, `fec_Destete`, `id_Persona`) VALUES
(7, 15, '2018-11-27', 1, 2, 3, 4, 5, '2018-11-01', 7),
(8, 15, '2018-11-08', 6, 453, 46, 4, 4, '2018-11-27', 8),
(9, 16, '2018-11-27', 1, 1, 1, 1, 1, '2018-11-27', 10),
(10, 16, '2018-12-16', 1, 1, 1, 1, 2, '2018-12-12', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id_Persona` bigint(20) NOT NULL,
  `nom_Persona` varchar(20) NOT NULL,
  `tel_Persona` varchar(20) NOT NULL,
  `cor_Persona` varchar(20) NOT NULL,
  `tip_Persona` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_Persona`, `nom_Persona`, `tel_Persona`, `cor_Persona`, `tip_Persona`) VALUES
(7, 'JUAN JOSE', '3125484194', 'AAAAAAAAAAA.COOM', 'APRENDIZ'),
(8, 'KEVIN VILLAREAL', '3125484194', 'KEVINVILLAREAL84@GMA', 'EXTERNO'),
(9, 'ANDREY GRANDA', '1111111111', '44444444444DDDDDDDD', 'APRENDIZ'),
(10, 'JOSE JAIR PACHECO', '312548415', 'KEVUINFUIUDFS@F.COM', 'INSTRUCTOR'),
(14, 'LUIISA CARDODOSO', '3112661468', 'MGGDFGDFGDFSGSDFGFDG', 'INSTRUCTOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pesajes`
--

CREATE TABLE `pesajes` (
  `id_Pesaje` bigint(20) NOT NULL,
  `id_Animal` bigint(20) NOT NULL,
  `id_Persona` bigint(20) NOT NULL,
  `pes_Kg_Animal` double NOT NULL,
  `observacion` varchar(20) NOT NULL,
  `fec_Peso` date NOT NULL,
  `gan_Peso` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pesajes`
--

INSERT INTO `pesajes` (`id_Pesaje`, `id_Animal`, `id_Persona`, `pes_Kg_Animal`, `observacion`, `fec_Peso`, `gan_Peso`) VALUES
(4, 21, 14, 25, 'RUGRFUTRU', '2018-12-13', -25),
(5, 21, 14, 2, 'RUGRFUTRU', '2018-12-13', -48),
(6, 21, 14, 2, 'RUGRFUTRU', '2018-12-13', -48);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_Usuario` bigint(20) NOT NULL,
  `rol` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre_Usuario` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuario` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `contrasena` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_Usuario`, `rol`, `nombre_Usuario`, `usuario`, `contrasena`) VALUES
(1, 'ADMINISTRADOR', 'Instructor', 'admin', '9adcb29710e807607b683f62e555c22dc5659713');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inicio_normal` (`inicio_normal`,`final_normal`);

--
-- Indices de la tabla `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id_Animal`);

--
-- Indices de la tabla `celos`
--
ALTER TABLE `celos`
  ADD PRIMARY KEY (`id_Celo`),
  ADD KEY `id_Animal` (`id_Animal`),
  ADD KEY `id_Persona` (`id_Persona`);

--
-- Indices de la tabla `ecografias`
--
ALTER TABLE `ecografias`
  ADD PRIMARY KEY (`id_Ecografia`),
  ADD KEY `id_Persona` (`id_Persona`,`id_Animal`),
  ADD KEY `id_Monta` (`id_Animal`);

--
-- Indices de la tabla `montas`
--
ALTER TABLE `montas`
  ADD PRIMARY KEY (`id_Monta`),
  ADD KEY `id_Persona` (`id_Persona`),
  ADD KEY `id_Animal` (`id_Animal`,`id_Parto`),
  ADD KEY `id_Parto` (`id_Parto`);

--
-- Indices de la tabla `partos`
--
ALTER TABLE `partos`
  ADD PRIMARY KEY (`id_Parto`),
  ADD KEY `id_Persona` (`id_Persona`),
  ADD KEY `id_Animal` (`id_Animal`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id_Persona`);

--
-- Indices de la tabla `pesajes`
--
ALTER TABLE `pesajes`
  ADD PRIMARY KEY (`id_Pesaje`),
  ADD KEY `id_Ovino` (`id_Animal`),
  ADD KEY `id_Persona` (`id_Persona`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `animal`
--
ALTER TABLE `animal`
  MODIFY `id_Animal` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `celos`
--
ALTER TABLE `celos`
  MODIFY `id_Celo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `ecografias`
--
ALTER TABLE `ecografias`
  MODIFY `id_Ecografia` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `montas`
--
ALTER TABLE `montas`
  MODIFY `id_Monta` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `partos`
--
ALTER TABLE `partos`
  MODIFY `id_Parto` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id_Persona` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `pesajes`
--
ALTER TABLE `pesajes`
  MODIFY `id_Pesaje` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_Usuario` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `celos`
--
ALTER TABLE `celos`
  ADD CONSTRAINT `celos_ibfk_1` FOREIGN KEY (`id_Animal`) REFERENCES `animal` (`id_Animal`),
  ADD CONSTRAINT `celos_ibfk_2` FOREIGN KEY (`id_Persona`) REFERENCES `personas` (`id_Persona`);

--
-- Filtros para la tabla `ecografias`
--
ALTER TABLE `ecografias`
  ADD CONSTRAINT `ecografias_ibfk_1` FOREIGN KEY (`id_Animal`) REFERENCES `animal` (`id_Animal`),
  ADD CONSTRAINT `ecografias_ibfk_2` FOREIGN KEY (`id_Persona`) REFERENCES `personas` (`id_Persona`);

--
-- Filtros para la tabla `partos`
--
ALTER TABLE `partos`
  ADD CONSTRAINT `partos_ibfk_1` FOREIGN KEY (`id_Animal`) REFERENCES `animal` (`id_Animal`),
  ADD CONSTRAINT `partos_ibfk_2` FOREIGN KEY (`id_Persona`) REFERENCES `personas` (`id_Persona`);

--
-- Filtros para la tabla `pesajes`
--
ALTER TABLE `pesajes`
  ADD CONSTRAINT `pesajes_ibfk_1` FOREIGN KEY (`id_Animal`) REFERENCES `animal` (`id_Animal`),
  ADD CONSTRAINT `pesajes_ibfk_2` FOREIGN KEY (`id_Persona`) REFERENCES `personas` (`id_Persona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
