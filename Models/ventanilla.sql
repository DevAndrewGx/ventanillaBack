-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2023 a las 19:20:26
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventanilla`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramites`
--

CREATE TABLE `tramites` (
  `codigo_tramite` int(32) NOT NULL,
  `tipo_tramite` varchar(32) NOT NULL,
  `numero_docum` int(32) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `nombres` varchar(40) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `telefono` varchar(40) NOT NULL,
  `EPS` varchar(40) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `estado` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tramites`
--

INSERT INTO `tramites` (`codigo_tramite`, `tipo_tramite`, `numero_docum`, `apellidos`, `nombres`, `correo`, `telefono`, `EPS`, `direccion`, `estado`) VALUES
(0, '0', 35121234, 'rrrr', 'rrrr', 'rrrr@gmail.com', '123413', 'EPS 1', 'calle 100', ''),
(1, '0', 10000000, 'sss', 'www', 'ssww@gmail.com', '1234130000', 'EPS 2', 'calle 1000', ''),
(234, '#', 1234, 'rrrr', 'rrrr', 'nombre@gmail.com', '12341', 'EPS 2', '1234', 'EN PROCESO'),
(1234, 'Tramite 2', 1234, 'xxxxxxxx', 'xxxxxxxxx', 'xxxxxxxxxx@gmail.com', '234234', 'EPS 4', 'xxxxxxxxxx', 'EN PROCESO'),
(1235123, 'Tramite 3', 1111111, 'Sanabria', 'Juanito', 'Juaniyo@gmail.com', '3300000', 'EPS 3', 'calle2222', 'EN PROCESO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tramites`
--
ALTER TABLE `tramites`
  ADD PRIMARY KEY (`codigo_tramite`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
