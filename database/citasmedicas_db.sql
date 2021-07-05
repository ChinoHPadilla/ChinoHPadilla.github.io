-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2021 a las 02:17:05
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `citasmedicas_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_hospital` int(11) NOT NULL,
  `id_doctor` int(11) NOT NULL,
  `id_problema` int(11) NOT NULL,
  `visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `fecha`, `hora`, `id_usuario`, `id_hospital`, `id_doctor`, `id_problema`, `visible`) VALUES
(1, '2021-06-15', '12:12:00', 1, 1, 1, 1, 0),
(2, '2021-06-13', '12:12:00', 1, 2, 2, 1, 0),
(3, '2021-06-25', '11:11:00', 1, 1, 3, 1, 0),
(4, '2021-06-16', '10:10:00', 1, 1, 2, 1, 1),
(6, '2021-06-01', '12:12:00', 1, 1, 1, 1, 1),
(7, '2021-06-30', '12:12:00', 1, 1, 3, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctores`
--

CREATE TABLE `doctores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cargo` varchar(45) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `sexo` int(11) NOT NULL COMMENT '1 = hombre, 2 = mujer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `doctores`
--

INSERT INTO `doctores` (`id`, `nombre`, `cargo`, `direccion`, `sexo`) VALUES
(1, 'Dra. Lorena Menchaca', 'Médico general', 'Santuario del carmen, La piedad Mich.', 2),
(2, 'Dr. Santi Galileo', 'Médico general', 'Santuario del carmen, La piedad Mich.', 1),
(3, 'Dr. Luis Moreno', 'Médico general', 'Santuario del carmen, La piedad Mich.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emergencias`
--

CREATE TABLE `emergencias` (
  `id` int(11) NOT NULL,
  `telefono` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `emergencias`
--

INSERT INTO `emergencias` (`id`, `telefono`) VALUES
(1, 911);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `farmacias`
--

CREATE TABLE `farmacias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `farmacias`
--

INSERT INTO `farmacias` (`id`, `nombre`, `direccion`) VALUES
(1, 'Dr. Pepito', 'La piedad. Mich');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hospitales`
--

CREATE TABLE `hospitales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `hospitales`
--

INSERT INTO `hospitales` (`id`, `nombre`, `direccion`) VALUES
(1, 'Hospital malweder', 'La piedad, Mich.'),
(2, 'Hospital Tuluwas', 'La piedad, Mich.'),
(3, 'Hospital Marcelino', 'La piedad, Mich.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `problemas`
--

CREATE TABLE `problemas` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `problemas`
--

INSERT INTO `problemas` (`id`, `descripcion`) VALUES
(1, 'Dolor de garganta'),
(2, 'Dolor de pansa'),
(9999, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `telefono` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `nombre`, `telefono`) VALUES
(1, '1@gmail.com', '123', 'pacheco', 352000000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `doctores`
--
ALTER TABLE `doctores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `emergencias`
--
ALTER TABLE `emergencias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `farmacias`
--
ALTER TABLE `farmacias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hospitales`
--
ALTER TABLE `hospitales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `problemas`
--
ALTER TABLE `problemas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `doctores`
--
ALTER TABLE `doctores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `emergencias`
--
ALTER TABLE `emergencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `farmacias`
--
ALTER TABLE `farmacias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `hospitales`
--
ALTER TABLE `hospitales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `problemas`
--
ALTER TABLE `problemas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
