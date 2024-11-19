-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2024 a las 17:26:32
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio_quimica`
--

CREATE TABLE `laboratorio_quimica` (
  `id` int(11) NOT NULL,
  `material` varchar(255) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `capacidad` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `laboratorio_quimica`
--

INSERT INTO `laboratorio_quimica` (`id`, `material`, `cantidad`, `capacidad`) VALUES
(1, 'Bureta de vidrio', 2, '50 ml'),
(2, 'Condensador de flujo', 1, NULL),
(3, 'Cono decantador', 3, '1 lt'),
(4, 'Embudo de sepracion', 1, NULL),
(5, 'Embudo de Vidrio', 7, NULL),
(6, 'Espectrometro', 3, NULL),
(7, 'Matraz de destilacion', 1, '1 lt'),
(8, 'Matraz erlenmenyer', 6, '500 ml'),
(9, 'Matraz erlenmenyer', 9, '300 ml'),
(10, 'Matraz erlenmenyer', 13, '250 ml'),
(11, 'Matraz de filtracion', 4, '4 lts'),
(12, 'Matraz de filtracion', 11, '1 lt'),
(13, 'Matraz de filtracion', 3, '250 ml'),
(14, 'Matraz volumetrico', 21, '1 lt'),
(15, 'Matraz volumetrico', 36, '500 ml'),
(16, 'Matraz volumetrico', 5, '250 ml'),
(17, 'Matraz volumetrico', 2, '100 ml'),
(18, 'Matraz volumetrico', 35, '50 ml'),
(19, 'Matraz volumetrico', 4, '10 ml'),
(20, 'Mechero de Bunsen', 10, NULL),
(21, 'Multimetro', 10, NULL),
(22, 'perillas de agua destilada', 10, NULL),
(23, 'Pinzas para Bureta', 5, NULL),
(24, 'Pinzas para tubo de ensayo', 17, NULL),
(25, 'Pipeta aforada', 3, '50 ml'),
(26, 'Pipeta de reloj', 14, NULL),
(27, 'Probeta graduada', 9, '1000 ml'),
(28, 'Probeta graduada', 6, '500 ml'),
(29, 'Probeta graduada', 7, '250 ml'),
(30, 'Probeta graduada', 9, '100 ml'),
(31, 'Probeta graduada', 13, '50 ml'),
(32, 'Probeta graduada', 9, '25 ml'),
(33, 'Probeta graduada', 2, '10 ml'),
(34, 'Termometro de inmersion', 1, NULL),
(35, 'Tubos de ensayo', 67, NULL),
(36, 'Vaso de precipitado', 3, '1000 ml'),
(37, 'Vaso de precipitado', 6, '400 ml'),
(38, 'Vaso de precipitado', 16, '250 ml'),
(39, 'Vaso de precipitado', 6, '150 ml'),
(40, 'Vaso de precipitado', 19, '100 ml'),
(41, 'Vaso de precipitado', 10, '50 ml');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `barcode` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `units` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` enum('Active','Deactivated') NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `usuario`, `password`, `rol_id`, `fecha_registro`) VALUES
(1, 'Juan Perez', 'juan.perez@example.com', 'juanp', 'contrasena_hashed', 1, '2024-11-18 01:07:57'),
(2, 'bryan', 'al33422@gmail.com', 'bryan', '$2y$10$zIAtbrivnDyqCZLg8Y07c.aY2/kY85W1rkARyonTCBs5GU2zmOeaK', 2, '2024-11-18 01:25:54'),
(3, 'carlos', 'carlos142@gmial.com', 'carlos', '$2y$10$xK1W.aeAs4wjAOLt52MmgO.1/aEH5R8jQF76COaWGDwlEUuHi8oVa', 1, '2024-11-18 01:45:27'),
(4, 'adrian', 'bryan1234@gmail.com', 'adrian', '$2y$10$GOBixIktTb9tA5bIm0GMcuQ6WzYSIzCdRCgS3iNxz7d7abSqpM3Km', 2, '2024-11-18 02:08:39');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `laboratorio_quimica`
--
ALTER TABLE `laboratorio_quimica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `laboratorio_quimica`
--
ALTER TABLE `laboratorio_quimica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
