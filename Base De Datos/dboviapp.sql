-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2018 a las 14:24:06
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dboviapp`
--

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
  `fec_Animal` varchar(50) NOT NULL,
  `num_Partos` varchar(10) NOT NULL,
  `nom_Raza` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `animal`
--

INSERT INTO `animal` (`id_Animal`, `nom_Animal`, `sex_Animal`, `ori_Animal`, `cod_Animal`, `fec_Animal`, `num_Partos`, `nom_Raza`) VALUES
(1, 'nom_Animal', 'sex_Animal', 'ori_Animal', 'cod_Animal', 'fec_Animal', 'num_Partos', 'nom_Raza'),
(2, '2', 'MACHO', 'INTERNO', '2', '2018-09-07', '2', 'KATAHDIN'),
(3, 'LOLS', 'MACHO', 'INTERNO', '43342', '2018-09-03', '2', 'PELIBUEY'),
(4, 'GGGH', 'HEMBRA', 'EXTERNO', '97878', '2018-09-03', '8', 'KATAHDIN'),
(5, 'EEE', 'MACHO', 'INTERNO', '23', '2018-09-17', '22', 'KATAHDIN'),
(6, '3WWE', 'HEMBRA', 'INTERNO', '132', '2018-09-03', '23', 'KATAHDIN'),
(7, '213EW', 'HEMBRA', 'INTERNO', '2323', '2018-09-04', '1', 'KATAHDIN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `celos`
--

CREATE TABLE `celos` (
  `id_Celo` bigint(20) NOT NULL,
  `id_Animal` varchar(20) NOT NULL,
  `fec_Inicio` varchar(20) NOT NULL,
  `fec_Final` varchar(20) NOT NULL,
  `observaciones` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ecografias`
--

CREATE TABLE `ecografias` (
  `id_Ecografia` bigint(20) NOT NULL,
  `fec_Ecografia` varchar(20) NOT NULL,
  `id_Persona` bigint(20) NOT NULL,
  `id_Animal` bigint(20) NOT NULL,
  `res_Ecografia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `montas`
--

CREATE TABLE `montas` (
  `id_Monta` bigint(20) NOT NULL,
  `fec_Monta` double NOT NULL,
  `fec_Posible_Parto` double NOT NULL,
  `id_AnimalMadre` varchar(20) NOT NULL,
  `id_AnimalPadre` varchar(20) NOT NULL,
  `observacion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partos`
--

CREATE TABLE `partos` (
  `id_Parto` bigint(20) NOT NULL,
  `fec_Parto` varchar(20) NOT NULL,
  `num_AnimalParido` double NOT NULL,
  `num_AnimalVivo` double NOT NULL,
  `num_AnimalMuerto` double NOT NULL,
  `num_AnimalMacho` double NOT NULL,
  `num_AnimalHembra` double NOT NULL,
  `fec_Destete` varchar(20) NOT NULL,
  `id_Persona` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'nom_Persona', 'tel_Persona', 'cor_Persona', 'tip_Persona'),
(2, 'EEEEE', '1121', '1212@FJDJFJD', 'APRENDIZ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pesajes`
--

CREATE TABLE `pesajes` (
  `id_Pesaje` bigint(20) NOT NULL,
  `id_Animal` varchar(20) NOT NULL,
  `pes_Kg_Animal` double NOT NULL,
  `observacion` varchar(20) NOT NULL,
  `fec_Peso` double NOT NULL,
  `gan_Peso` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indices de la tabla `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id_Animal`);

--
-- Indices de la tabla `celos`
--
ALTER TABLE `celos`
  ADD PRIMARY KEY (`id_Celo`),
  ADD KEY `id_Animal` (`id_Animal`);

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
  ADD KEY `id_AnimalMadre` (`id_AnimalMadre`,`id_AnimalPadre`),
  ADD KEY `id_AnimalPadre` (`id_AnimalPadre`);

--
-- Indices de la tabla `partos`
--
ALTER TABLE `partos`
  ADD PRIMARY KEY (`id_Parto`),
  ADD KEY `id_Persona` (`id_Persona`);

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
  ADD KEY `id_Ovino` (`id_Animal`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `animal`
--
ALTER TABLE `animal`
  MODIFY `id_Animal` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `celos`
--
ALTER TABLE `celos`
  MODIFY `id_Celo` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ecografias`
--
ALTER TABLE `ecografias`
  MODIFY `id_Ecografia` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `montas`
--
ALTER TABLE `montas`
  MODIFY `id_Monta` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `partos`
--
ALTER TABLE `partos`
  MODIFY `id_Parto` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id_Persona` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pesajes`
--
ALTER TABLE `pesajes`
  MODIFY `id_Pesaje` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_Usuario` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ecografias`
--
ALTER TABLE `ecografias`
  ADD CONSTRAINT `ecografias_ibfk_1` FOREIGN KEY (`id_Persona`) REFERENCES `personas` (`id_Persona`),
  ADD CONSTRAINT `ecografias_ibfk_2` FOREIGN KEY (`id_Animal`) REFERENCES `montas` (`id_Monta`);

--
-- Filtros para la tabla `partos`
--
ALTER TABLE `partos`
  ADD CONSTRAINT `partos_ibfk_1` FOREIGN KEY (`id_Persona`) REFERENCES `personas` (`id_Persona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
