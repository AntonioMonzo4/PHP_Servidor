-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-02-2025 a las 23:02:28
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `leads`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `peso` decimal(5,2) NOT NULL,
  `altura` decimal(5,2) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` enum('Hombre','Mujer','Mujer embarazada') NOT NULL,
  `actividad` varchar(50) NOT NULL,
  `objetivo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `peso`, `altura`, `fecha_nacimiento`, `sexo`, `actividad`, `objetivo`) VALUES
(1, 'Antonio', 'amonansu@gmail.com', 74.00, 174.00, '2000-02-04', 'Hombre', 'Normal', 'Ganar peso/músculo'),
(2, 'Javi', 'javi@email', 65.00, 173.00, '2005-02-01', 'Hombre', 'Normal', 'Ganar peso/músculo'),
(3, 'Alejandra', 'alejandra@email.com', 55.00, 150.00, '2001-05-12', 'Mujer', 'Normal', 'Perder peso'),
(4, 'Jose', 'jose@email.com', 120.00, 210.00, '2001-05-12', 'Hombre', 'Normal', 'Mejorar mi salud'),
(5, 'Maria', 'maria@email.com', 59.00, 165.00, '2001-05-22', 'Mujer embarazada', 'Normal', 'Mejorar mi salud'),
(6, 'Pol ', 'papafrita@email.com', 63.80, 140.00, '0000-00-00', 'Mujer embarazada', 'Normal', 'Mejorar mi salud'),
(7, 'Humus', 'elamigodepapafrita@email.com', 78.00, 170.00, '0000-00-00', 'Hombre', 'Movilidad casi nula', 'Mejorar mi salud'),
(8, 'Juan', 'olacorreo@email.com', 78.00, 170.00, '1980-01-31', 'Hombre', 'Movilidad casi nula', 'Mejorar mi salud'),
(9, 'Tanato', 'horimoko@email.com', 50.00, 138.00, '1999-06-01', 'Hombre', 'Deportista', 'Mejorar mi salud'),
(10, 'Richarda', 'imoko@email.com', 54.10, 138.00, '1999-06-01', 'Mujer', 'Deportista', 'Mejorar mi salud'),
(11, 'Antonio', 'web.antoniom@gmail.com', 75.00, 175.00, '2000-02-04', 'Hombre', 'Normal', 'Mejorar mi salud'),
(12, 'Alejandro', 'alejandro@email.com', 100.00, 180.00, '1112-05-05', 'Hombre', 'Movilidad casi nula', 'Perder peso');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
