-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 22-01-2021 a las 19:01:45
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id15299699_proyectos_nadiamortarino`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nuevosUsuarios`
--

CREATE TABLE `nuevosUsuarios` (
  `Usuario` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Clave` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `nuevosUsuarios`
--

INSERT INTO `nuevosUsuarios` (`Usuario`, `Clave`, `Id`) VALUES
('juan', '23789ffn', 1),
('marcos', 'mm345678', 2),
('Maria', '123456', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `nuevosUsuarios`
--
ALTER TABLE `nuevosUsuarios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `nuevosUsuarios`
--
ALTER TABLE `nuevosUsuarios`
  MODIFY `Id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
