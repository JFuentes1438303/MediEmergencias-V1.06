-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2019 a las 00:27:36
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mediemergencias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_civil`
--

CREATE TABLE `estado_civil` (
  `id_estado_civil` int(2) NOT NULL,
  `estado_civil` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado_civil`
--

INSERT INTO `estado_civil` (`id_estado_civil`, `estado_civil`) VALUES
(1, 'Soltero'),
(2, 'Casado'),
(3, 'Divorciado'),
(4, 'Union libre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historias_clinicas`
--

CREATE TABLE `historias_clinicas` (
  `id_historia_clinica` int(9) NOT NULL,
  `tipo_documento` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `documento` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `edad` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombres` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `ciudad` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `departamento` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ocupacion` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estado_civil` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `entidad` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `regimen` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `region` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `escolaridad` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `triage` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `sintomas` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `enfermedades` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `antecedentes` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `antecedentes_personales` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fisiologicos` varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `examenes` varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historias_clinicas`
--

INSERT INTO `historias_clinicas` (`id_historia_clinica`, `tipo_documento`, `documento`, `edad`, `nombres`, `apellidos`, `fecha_nacimiento`, `ciudad`, `departamento`, `direccion`, `sexo`, `ocupacion`, `estado_civil`, `entidad`, `regimen`, `region`, `escolaridad`, `triage`, `sintomas`, `enfermedades`, `antecedentes`, `antecedentes_personales`, `fisiologicos`, `examenes`) VALUES
(4, '1', '1030659553', '23', 'Jeferson', 'Fuentes Alcendra', '1995-10-31', 'Bogota D.C', 'Cundinamarca', 'Transversal 68 f # 44 a 32 sur', '1', 'Desarrollador de software', '1', 'Compensar', '1', '1', 'Tecnologo', '2', 'Gran inflamaciÃ³n en el tobillo derecho', 'Ninguna', 'Ninguna', 'Tabaco', '3 comidas en la casa', 'RadiografÃ­a de tobillo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regimen`
--

CREATE TABLE `regimen` (
  `id_regimen` int(2) NOT NULL,
  `regimen` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `regimen`
--

INSERT INTO `regimen` (`id_regimen`, `regimen`) VALUES
(1, 'Subsidiado'),
(2, 'Contributivo'),
(3, 'Especial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE `region` (
  `id_region` int(5) NOT NULL,
  `region` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`id_region`, `region`) VALUES
(1, 'Urbana'),
(2, 'Rural');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `id_sexo` int(2) NOT NULL,
  `sexo` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`id_sexo`, `sexo`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id_tipo_documento` int(2) NOT NULL,
  `tipo_documento` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id_tipo_documento`, `tipo_documento`) VALUES
(1, 'Cedula de ciudadania'),
(2, 'Tarjeta de identidad'),
(3, 'Cedula de extrangeria'),
(4, 'Pasaporte'),
(5, 'Registro civil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `triage`
--

CREATE TABLE `triage` (
  `id_triage` int(2) NOT NULL,
  `triage` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `triage`
--

INSERT INTO `triage` (`id_triage`, `triage`) VALUES
(1, 'Triage 1'),
(2, 'Triage 2'),
(3, 'Triage 3'),
(4, 'Triage 4'),
(5, 'Triage 5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_paciente`
--

CREATE TABLE `usuario_paciente` (
  `id_paciente` int(10) NOT NULL,
  `tipo_documento` int(2) NOT NULL,
  `documento` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `primer_nombre` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `segundo_nombre` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `primer_apellido` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `segundo_apellido` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `direccion` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_paciente`
--

INSERT INTO `usuario_paciente` (`id_paciente`, `tipo_documento`, `documento`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `sexo`, `fecha_nacimiento`, `direccion`, `telefono`, `password`) VALUES
(1, 1, '1030659553', 'Jeferson', '', 'Fuentes', 'Alcendra', '1', '1995-10-31', 'Transversal 68 f # 44 a 32 sur', '3213062227', '1234567890'),
(2, 3, '1234567890', 'Angie', 'Alexandra', 'Guzman', 'Villaba', '2', '1997-03-21', 'Transversal 72 d # 32 a 14 sur', '3228575187', '1234567890'),
(3, 1, '1234567899', 'David', 'Andres', 'Rojas', 'Torres', '1', '1990-11-10', 'Calle 68 f # 25 a 50 ', '3124567890', '1234567890');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estado_civil`
--
ALTER TABLE `estado_civil`
  ADD PRIMARY KEY (`id_estado_civil`);

--
-- Indices de la tabla `historias_clinicas`
--
ALTER TABLE `historias_clinicas`
  ADD PRIMARY KEY (`id_historia_clinica`);

--
-- Indices de la tabla `regimen`
--
ALTER TABLE `regimen`
  ADD PRIMARY KEY (`id_regimen`);

--
-- Indices de la tabla `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id_region`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id_sexo`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id_tipo_documento`);

--
-- Indices de la tabla `triage`
--
ALTER TABLE `triage`
  ADD PRIMARY KEY (`id_triage`);

--
-- Indices de la tabla `usuario_paciente`
--
ALTER TABLE `usuario_paciente`
  ADD PRIMARY KEY (`id_paciente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estado_civil`
--
ALTER TABLE `estado_civil`
  MODIFY `id_estado_civil` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `historias_clinicas`
--
ALTER TABLE `historias_clinicas`
  MODIFY `id_historia_clinica` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `regimen`
--
ALTER TABLE `regimen`
  MODIFY `id_regimen` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
  MODIFY `id_region` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id_sexo` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id_tipo_documento` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `triage`
--
ALTER TABLE `triage`
  MODIFY `id_triage` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario_paciente`
--
ALTER TABLE `usuario_paciente`
  MODIFY `id_paciente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
