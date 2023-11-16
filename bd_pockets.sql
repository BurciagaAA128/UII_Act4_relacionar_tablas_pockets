-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2023 a las 17:41:06
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_pockets`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comida`
--

CREATE TABLE `comida` (
  `id_comida` int(11) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `tamano` varchar(30) NOT NULL,
  `descripcion` varchar(120) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `calorias` varchar(80) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comida`
--

INSERT INTO `comida` (`id_comida`, `nombre`, `tamano`, `descripcion`, `categoria`, `calorias`, `precio`, `foto`) VALUES
(1, 'Tacos al pastor', 'Medianos', 'Con piña', 'Comida rapida', '300 calorias', '120.00', 'tacos.png'),
(3, 'Hamburguesa', 'Mediano', 'Jamon con queso', 'Comida rapida', '500 calorias', '35.00', 'hamburguesa.jpg'),
(4, 'Pizza', 'Grande', 'De peperoni', 'Comida rapida', '300 calorias', '50.00', 'pizza.png'),
(5, 'Ensalada de espinacas', 'Chica', 'Con aderezo', 'Ensaladas', '25 calorias', '35.00', 'Ensalada.jpg'),
(6, 'Pastel de chocolate', 'Mediano', 'Con chispas', 'Postres', '400 calorias', '60.00', 'pastel.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comida_vendida`
--

CREATE TABLE `comida_vendida` (
  `id` int(11) NOT NULL,
  `id_comida` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `id_venta` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comida_vendida`
--

INSERT INTO `comida_vendida` (`id`, `id_comida`, `cantidad`, `id_venta`) VALUES
(1, 2, 12, 3),
(2, 1, 7, 3),
(3, 3, 13, 4),
(4, 3, 3, 5),
(5, 4, 2, 6),
(6, 3, 2, 6),
(7, 1, 3, 6),
(8, 1, 2, 7),
(9, 3, 3, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `fecha`, `total`) VALUES
(1, '2023-11-16 12:59:10', '12828.00'),
(2, '2023-11-16 13:00:51', '12828.00'),
(4, '2023-11-16 17:05:59', '455.00'),
(6, '2023-11-16 17:30:58', '530.00'),
(7, '2023-11-16 17:37:41', '345.00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comida`
--
ALTER TABLE `comida`
  ADD PRIMARY KEY (`id_comida`);

--
-- Indices de la tabla `comida_vendida`
--
ALTER TABLE `comida_vendida`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comida`
--
ALTER TABLE `comida`
  MODIFY `id_comida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `comida_vendida`
--
ALTER TABLE `comida_vendida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
