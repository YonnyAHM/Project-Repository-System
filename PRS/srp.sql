-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2017 a las 19:58:59
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `srp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `nombre_secun` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `apellido_secun` varchar(50) NOT NULL,
  `cedula` int(10) NOT NULL,
  `fecha_n` date NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `correo_secun` varchar(100) NOT NULL,
  `telefono` int(11) NOT NULL,
  `telefono_secun` int(11) NOT NULL,
  `semestre` int(3) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `code`
--

CREATE TABLE `code` (
  `code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `code`
--

INSERT INTO `code` (`code`) VALUES
('ais_unerg_ais');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `nombre_secun` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `apellido_secun` varchar(50) NOT NULL,
  `cedula` int(10) NOT NULL,
  `fecha_n` date NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `correo_secun` varchar(100) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `telefono_secun` varchar(11) NOT NULL,
  `periodo_esc` varchar(7) NOT NULL,
  `semestre` varchar(3) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id`, `nombre`, `nombre_secun`, `apellido`, `apellido_secun`, `cedula`, `fecha_n`, `direccion`, `correo`, `correo_secun`, `telefono`, `telefono_secun`, `periodo_esc`, `semestre`, `pass`) VALUES
(1, 'Yonny', 'Alexander', 'Hernandez', 'Montesinos', 23663611, '1995-05-20', 'Villa de cura ', 'yonnyhernandezm@gmail.com', 'yonnyalexander_15@hotmail.com', '04243754671', '04144452634', '0', '10', '20051995'),
(2, '', 'jose', '', 'y palacios', 8934567, '1980-01-12', 'villa', 'juanj@ht.com', 'juanjj@ht.com', '04144452634', '04243754671', '1999-2', '10m', 'queloco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facilitador`
--

CREATE TABLE `facilitador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `nombre_secun` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `apellido_secun` varchar(50) NOT NULL,
  `cedula` int(10) NOT NULL,
  `fecha_n` date NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `correo_secun` varchar(100) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `telefono_secun` varchar(11) NOT NULL,
  `asignatura` varchar(100) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `facilitador`
--

INSERT INTO `facilitador` (`id`, `nombre`, `nombre_secun`, `apellido`, `apellido_secun`, `cedula`, `fecha_n`, `direccion`, `correo`, `correo_secun`, `telefono`, `telefono_secun`, `asignatura`, `pass`) VALUES
(1, 'od', 'sama', 'de las', 'tinieblas', 4567899, '1996-06-06', 'el infierno', 'intiniebla1@inferno.com', 'sdxfghfc@gt.com', '34567899876', '98765445678', 'xxxx', 'diablo666'),
(2, 'Yonny HernÃ¡ndez', 'Yonny', 'HernÃ¡ndez', 'ffff', 123456789, '1999-09-20', 'villa de cura estado aragua, venezuela', 'prodiyyr@hotmail.com', 'juanjj@ht.com', '4243754671', '9868877888', 'gerencia ', '1234'),
(3, 'al', 'ti', 'jkh', 'khb', 3456789, '1666-06-05', 'votiybhvu', 'ff@ff.com', 'hviktu@jhbhb.comn', '6457689', '35467890', 'uvckcitg', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(5) NOT NULL,
  `correo` varchar(5) NOT NULL,
  `pass` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `user`, `correo`, `pass`) VALUES
(1, '', 'admin', 2005);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id` int(11) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `nombre_autor` varchar(50) NOT NULL,
  `apellido_autor` varchar(50) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `tamaño` int(20) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `nombre_tem` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitante`
--

CREATE TABLE `visitante` (
  `id` int(11) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `tiempo` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `facilitador`
--
ALTER TABLE `facilitador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `visitante`
--
ALTER TABLE `visitante`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `facilitador`
--
ALTER TABLE `facilitador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `visitante`
--
ALTER TABLE `visitante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
