-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2021 a las 07:04:25
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `salud_login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `nombre_cargo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`nombre_cargo`) VALUES
('Administrador'),
('Enfermero'),
('Medico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cronos`
--

CREATE TABLE `cronos` (
  `id_personal` bigint(20) UNSIGNED NOT NULL,
  `1` varchar(45) NOT NULL,
  `2` varchar(45) NOT NULL,
  `3` varchar(45) NOT NULL,
  `4` varchar(45) NOT NULL,
  `5` varchar(45) NOT NULL,
  `6` varchar(45) NOT NULL,
  `7` varchar(45) NOT NULL,
  `8` varchar(45) NOT NULL,
  `9` varchar(45) NOT NULL,
  `10` varchar(45) NOT NULL,
  `11` varchar(45) NOT NULL,
  `12` varchar(45) NOT NULL,
  `13` varchar(45) NOT NULL,
  `14` varchar(45) NOT NULL,
  `15` varchar(45) NOT NULL,
  `16` varchar(45) NOT NULL,
  `17` varchar(45) NOT NULL,
  `18` varchar(45) NOT NULL,
  `19` varchar(45) NOT NULL,
  `20` varchar(45) NOT NULL,
  `21` varchar(45) DEFAULT NULL,
  `22` varchar(45) NOT NULL,
  `23` varchar(45) NOT NULL,
  `24` varchar(45) NOT NULL,
  `25` varchar(45) NOT NULL,
  `26` varchar(45) NOT NULL,
  `27` varchar(45) NOT NULL,
  `28` varchar(45) NOT NULL,
  `29` varchar(45) NOT NULL,
  `30` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cronos`
--

INSERT INTO `cronos` (`id_personal`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`) VALUES
(1234567898, 'l', 'm', 't', 'n', 'm', 'l', 'm', 'l', 'm', 't', 'n', 'm', 'l', 't', 'l', 'm', 't', 'n', 'm', 'l', 'n', 'l', 'm', 't', 'n', 'm', 'l', 'm', 'l', 'm'),
(1234567899, 'm', 't', 'n', 'm', 'l', 't', 'l', 'm', 't', 'n', 'm', 'l', 'n', 'l', 'm', 't', 'n', 'm', 'l', 'm', 'l', 'm', 't', 'n', 'm', 'l', 't', 'l', 'm', 't'),
(1234567894, 't', 'n', 'm', 'l', 'n', 'l', 'm', 't', 'n', 'm', 'l', 'm', 'l', 'm', 't', 'n', 'm', 'l', 't', 'l', 'm', 't', 'n', 'm', 'l', 'n', 'l', 'm', 't', 'n'),
(1234567895, 'n', 'm', 'l', 'm', 'l', 'm', 't', 'n', 'm', 'l', 't', 'l', 'm', 't', 'n', 'm', 'l', 'n', 'l', 'm', 't', 'n', 'm', 'l', 'm', 'l', 'm', 't', 'n', 'm'),
(1234567896, 'm', 'l', 't', 'l', 'm', 't', 'n', 'm', 'l', 'n', 'l', 'm', 't', 'n', 'm', 'l', 'm', 'l', 'm', 't', 'n', 'm', 'l', 't', 'l', 'm', 't', 'n', 'm', 'l'),
(1234567897, 'l', 'n', 'l', 'm', 't', 'n', 'm', 'l', 'm', 'l', 'm', 't', 'n', 'm', 'l', 't', 'l', 'm', 't', 'n', 'm', 'l', 'n', 'l', 'm', 't', 'n', 'm', 'l', 'm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `nombre_documento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`nombre_documento`) VALUES
('Cedula de ciudadania'),
('Tarjeta de identidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `N_documento` bigint(20) UNSIGNED NOT NULL,
  `Tipo_documento` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `Primer_nombre` varchar(45) NOT NULL,
  `Primer_apellido` varchar(45) NOT NULL,
  `contrasena` varchar(200) NOT NULL,
  `correo_electronico` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`N_documento`, `Tipo_documento`, `cargo`, `Primer_nombre`, `Primer_apellido`, `contrasena`, `correo_electronico`) VALUES
(1110474610, 'Cedula de ciudadania', 'Administrador', 'Jefferon', 'Narvaez', '123', 'jeffersonnarvaez2003@gmail.com'),
(1234567894, 'Cedula de ciudadania', 'Enfermero', 'Junior', 'Roa', '123', 'junior@gmail.com'),
(1234567895, 'Cedula de ciudadania', 'Enfermero', 'Ivan', 'Roa', '123', 'ivan@gmail.com'),
(1234567896, 'Cedula de ciudadania', 'Enfermero', 'Jonathan', 'Narvaez', '123', 'jonathan@gmail.com'),
(1234567897, 'Cedula de ciudadania', 'Enfermero', 'Steven', 'Rubiano', '123', 'steven@gmail.com'),
(1234567898, 'Cedula de ciudadania', 'Medico', 'Marta', 'Ramirez', '123', 'marta@gmail.com'),
(1234567899, 'Cedula de ciudadania', 'Medico', 'Pepito', 'Perez', '123', 'pepito@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`nombre_cargo`);

--
-- Indices de la tabla `cronos`
--
ALTER TABLE `cronos`
  ADD KEY `documento del persona_ibfk_1` (`id_personal`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`nombre_documento`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`N_documento`),
  ADD KEY `Tipo_documento_ibfk_1_idx` (`Tipo_documento`),
  ADD KEY `cargo_ibfk_2_idx` (`cargo`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cronos`
--
ALTER TABLE `cronos`
  ADD CONSTRAINT `documento del persona_ibfk_1` FOREIGN KEY (`id_personal`) REFERENCES `usuario` (`N_documento`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `Tipo_documento_ibfk_1` FOREIGN KEY (`Tipo_documento`) REFERENCES `tipo_documento` (`nombre_documento`),
  ADD CONSTRAINT `cargo_ibfk_2` FOREIGN KEY (`cargo`) REFERENCES `cargo` (`nombre_cargo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
