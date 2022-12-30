-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-12-2022 a las 18:05:28
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `finalrodri2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `talle` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `detalle` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `calce` varchar(255) NOT NULL,
  `precio` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `categoria`, `talle`, `color`, `detalle`, `material`, `calce`, `precio`, `foto`) VALUES
(16, 'Remera', 'M', 'Azul Marino', 'Lisa', 'Algodon', 'Regular', 7000, 'azul marino slim fit.jpg'),
(17, 'Remera', 'S', 'Negro', 'Lisa', 'Algodon', 'Regular', 3000, 'negra regular.jpg'),
(18, 'Remera', 'XL', 'Gris Claro', 'Lisa', 'Algodon y licra', 'Slim Fit', 9000, 'gris claro slim.jpg'),
(19, 'Campera', 'L', 'Azul Marino', 'Inflable', 'Pluma y microfibra', 'Slim Fit', 15000, 'azul.jpg'),
(20, 'Campera', 'M', 'Verde', 'Lisa', 'Gabardina', 'Regular', 18500, 'verde.png'),
(21, 'Campera', 'L', 'Bordo', 'Lisas', 'Algodon', 'Regular', 9000, 'bordo.jpg'),
(22, 'Chomba', 'L', 'Verde', 'Lisa', 'Pique', 'Regular', 15000, 'verde.jpg'),
(23, 'Chomba', 'M', 'Azul Marino', 'A rayas', 'Algodon', 'Regular', 8000, 'rayas 1.jpg'),
(24, 'Chomba', 'L', 'Gris Claro', 'Lisa', 'Pique', 'Regular', 7000, 'gris.jpg'),
(25, 'Remera', 'L', 'Blanco', 'Lisa', 'Algodon', 'Slim Fit', 5000, 'blanca slim.jpg'),
(26, 'Pantalon', 'L', 'Gris Oscuro', 'Lisa', 'Gabardina', 'Slim Fit', 11500, 'gris oscuro.jpg'),
(27, 'Sueter', 'XL', 'Verde', 'Liso', 'Lana', 'Slim Fit', 11500, 'verde.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calces`
--

CREATE TABLE `calces` (
  `id` int(11) NOT NULL,
  `calce` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `calces`
--

INSERT INTO `calces` (`id`, `calce`) VALUES
(1, 'Regular'),
(2, 'Slim Fit');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`) VALUES
(6, 'Remera'),
(7, 'Pantalon'),
(8, 'Jean'),
(9, 'Campera'),
(10, 'Chomba'),
(12, 'Sueter');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

CREATE TABLE `colores` (
  `id` int(11) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `colores`
--

INSERT INTO `colores` (`id`, `color`) VALUES
(1, 'Gris Claro'),
(2, 'Gris Oscuro'),
(3, 'Azul Marino'),
(4, 'Blanco'),
(5, 'Negro'),
(6, 'Marron'),
(7, 'Verde'),
(8, 'Bordo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seg_usuarios`
--

CREATE TABLE `seg_usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) DEFAULT '',
  `apellido` varchar(200) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `perfil` int(3) DEFAULT 0,
  `clave` varchar(64) DEFAULT '',
  `fechaalta` date DEFAULT NULL,
  `activo` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seg_usuarios`
--

INSERT INTO `seg_usuarios` (`id`, `nombre`, `apellido`, `usuario`, `perfil`, `clave`, `fechaalta`, `activo`) VALUES
(3, 'Fabio', 'Lastra', 'fclastra@gmail.com', 1, '79a1fe79e970a27d6381956aaf742dc3', '2021-03-16', 1),
(4, 'Adinistrador', 'Admin', 'admin', 1, '21232f297a57a5a743894a0e4a801fc3', '2022-12-15', 1),
(5, 'Rodrigo', 'Exposto', 'rodri', 1, 'rodri', '2022-12-30', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talles`
--

CREATE TABLE `talles` (
  `id` int(11) NOT NULL,
  `talle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `talles`
--

INSERT INTO `talles` (`id`, `talle`) VALUES
(1, 'XS'),
(2, 'S'),
(3, 'M'),
(4, 'L'),
(5, 'XL');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `calces`
--
ALTER TABLE `calces`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `colores`
--
ALTER TABLE `colores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seg_usuarios`
--
ALTER TABLE `seg_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `talles`
--
ALTER TABLE `talles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `calces`
--
ALTER TABLE `calces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `colores`
--
ALTER TABLE `colores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `seg_usuarios`
--
ALTER TABLE `seg_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `talles`
--
ALTER TABLE `talles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
