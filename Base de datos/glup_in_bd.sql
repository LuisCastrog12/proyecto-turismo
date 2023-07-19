-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-09-2022 a las 00:44:26
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `glup_in_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `nombre`, `correo`, `contrasena`) VALUES
(1, 'Ramiro González', 'ramiro', '123456'),
(2, 'admin', 'Monica', '112211'),
(3, 'Mina', 'Mina', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sitios_turisticos`
--

CREATE TABLE `sitios_turisticos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(12) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `visitado` int(11) NOT NULL,
  `alojamiento` int(11) NOT NULL,
  `seccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sitios_turisticos`
--

INSERT INTO `sitios_turisticos` (`id`, `nombre`, `precio`, `descripcion`, `visitado`, `alojamiento`, `seccion`) VALUES
(1, 'Barú', 1100000, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae similique delectus inventore officii', 1, 1, 1),
(2, 'San Andres Islas', 1170000, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae similique delectus inventore officii', 1, 1, 1),
(3, 'La Guajira', 1170000, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae similique delectus inventore officii', 1, 1, 3),
(4, 'Barranquilla', 1170000, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae similique delectus inventore officii', 1, 1, 2),
(5, 'La Guajira', 1170000, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae similique delectus inventore officii', 1, 1, 3),
(6, 'Santa Marta', 1170000, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae similique delectus inventore officii', 1, 1, 2),
(7, 'Santa Marta', 1170000, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae similique delectus inventore officii', 1, 1, 1),
(13, 'San Andres Islas', 1170000, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae similique delectus inventore officii', 3, 0, 1),
(14, 'Santa Marta', 1170000, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae similique delectus inventore officii', 2, 0, 3),
(15, 'La Guajira', 1170000, '', 0, 0, 2),
(16, 'Baru_cartagena', 1170000, '', 2, 2, 3),
(17, 'Santa Marta', 1170000, '', 2, 3, 3),
(19, 'La Guajira', 1170000, '', 2, 3, 3),
(26, 'cartagena', 11000000, '', 1, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_completo`, `correo`, `usuario`, `contrasena`) VALUES
(15, 'andres', 'andres@gmail.com', 'andres1', '123'),
(16, 'jorge', 'ramiro@gmail.com', 'ramiro12', '123'),
(17, 'mina123', 'mina@gmail.com', 'mina1', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sitios_turisticos`
--
ALTER TABLE `sitios_turisticos`
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
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sitios_turisticos`
--
ALTER TABLE `sitios_turisticos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
