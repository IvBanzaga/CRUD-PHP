-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2023 a las 21:21:27
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dweb`
--
CREATE DATABASE IF NOT EXISTS `dweb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dweb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito_usuarios`
--

CREATE TABLE `carrito_usuarios` (
  `id_sesion` varchar(255) NOT NULL,
  `id_producto` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrito_usuarios`
--

INSERT INTO `carrito_usuarios` (`id_sesion`, `id_producto`) VALUES
('r3b7ksei490dp2764mvf00fosm', 18),
('r3b7ksei490dp2764mvf00fosm', 18),
('r3b7ksei490dp2764mvf00fosm', 18),
('r3b7ksei490dp2764mvf00fosm', 18),
('erebpr9ufobfiqea88g4bfcvhk', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(1024) NOT NULL,
  `precio` decimal(9,2) DEFAULT NULL,
  `nombre_archivo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `nombre_archivo`) VALUES
(13, '22', '22', '22.00', '434.jpg'),
(18, 'rtrtr', 'rtretr', '5.00', 'Atardecer 2 10-08-2022.jpg'),
(19, 'BMV', 'Nuevo', '3000.00', 'Acampada 3 14-08-2022.jpg'),
(20, 'Seat', 'usado', '555.00', 'EL Velo C34 15-07-2021.jpg'),
(22, 'nombre nuevo producto', 'descripcion nuevo producto', '500.00', 'Captura.PNG'),
(23, 'vendedor producto', 'vendedor producto', '200.00', 'Captura.PNG'),
(24, 'producto vendedor', 'producto vendedor', '200.00', 'Captura.PNG'),
(25, 'nuevo', 'producto', '150.00', 'Captura.PNG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido1` varchar(25) NOT NULL,
  `apellido2` varchar(25) DEFAULT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pass` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user_admin`
--

INSERT INTO `user_admin` (`id`, `nombre`, `apellido1`, `apellido2`, `telefono`, `email`, `pass`, `fecha`, `path`) VALUES
(1, 'Iván', 'Bazaga', 'González', 638155026, 'ivan.cpweb@gmail.com', 123456, '1977-05-01', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `habitacion` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `clave` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombres` varchar(120) DEFAULT NULL,
  `app` varchar(120) DEFAULT NULL,
  `apm` varchar(120) DEFAULT NULL,
  `correo` varchar(120) DEFAULT NULL,
  `imagen` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `app`, `apm`, `correo`, `imagen`) VALUES
(16, 'Seat', 'Leon ', '638155026', 'ibazaga@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE `vendedor` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido1` varchar(25) NOT NULL,
  `apellido2` varchar(25) DEFAULT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pass` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vendedor`
--

INSERT INTO `vendedor` (`id`, `nombre`, `apellido1`, `apellido2`, `telefono`, `email`, `pass`, `fecha`, `path`) VALUES
(2, 'ivan', 'bazaga', '', 638155026, 'i.ba@gmail.com', 123456, '0000-00-00', ''),
(3, 'mo', 'mo', 'mo', 63815526, 'mo@gmail.com', 123456, '0000-00-00', ''),
(4, '', '', NULL, 0, '', 0, '0000-00-00', ''),
(5, 'manuel', 'manuel', 'manuel', 638155026, 'manuel@gmail.com', 123456, '0000-00-00', ''),
(6, 'ivan45', 'ivan45', 'ivan45', 638155026, 'ivan45@gmail.com', 123456, '0000-00-00', ''),
(7, 'ivan46', 'ivan46', 'ivan46', 638155026, 'ivan@gmail.com', 123456, '0000-00-00', ''),
(8, 'ivan11', 'ivan11', 'ivan11', 638155026, 'ivan11@gmail.com', 123456, '0000-00-00', ''),
(9, 'nau', 'nau', 'nau', 638155026, 'nau@gmail.com', 123456, '0000-00-00', ''),
(10, 'ivan1', 'ivan1', 'ivan1', 638155026, 'ivan1@gmail.com', 123456, '0000-00-00', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito_usuarios`
--
ALTER TABLE `carrito_usuarios`
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito_usuarios`
--
ALTER TABLE `carrito_usuarios`
  ADD CONSTRAINT `carrito_usuarios_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
