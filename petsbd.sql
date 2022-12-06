-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-11-2022 a las 23:57:38
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `petsbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `idMascota` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `edad` int(100) NOT NULL,
  `raza` varchar(100) NOT NULL,
  `postulaciones` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`idMascota`, `nombre`, `edad`, `raza`, `postulaciones`, `id`) VALUES
(1, 'Coko', 12, 'coki', 11, 6),
(2, 'coki', 12, 'coki', 2, 6),
(3, 'lazy', 12, 'asd', 1, 32),
(4, 'Puert', 12, 'asd', 2, 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `cedula` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `correo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `nombres`, `apellidos`, `cedula`, `direccion`, `correo`) VALUES
(6, 'Junior', 'Saraguro', '1150582755', 'pedestal', 'xa@gmail.com'),
(7, 'Hector', 'Goter', '2123123', 'agrio', 'ssc@gmai.com'),
(8, 'Xavier', 'Chavez', '123123', 'salado', 'sdsd@gmail.com'),
(9, 'Xavier', 'Chavez', '123123', 'nose', 'sdasd@gmail.com'),
(26, 'Xavier', 'Chavez', '', 'El pedestal', 'xavierchavez916@gmail.com'),
(27, 'Xavier', 'Chavez', '', 'El pedestal', 'xavierchavez916@gmail.com'),
(28, 'Xavier', 'Chavez', '', 'El pedestal', 'xavierchavez916@gmail.com'),
(29, 'Xavier', 'Chavez', '', 'El pedestal', 'xavierchavez916@gmail.com'),
(31, 'lkadsndkl', 'lkasndlka', '', 'lkasnd', 'akslndla@gmaolc.om'),
(32, 'lkadsndkl', 'lkasndlka', '', 'lkasnd', 'akslndla@gmaolc.om'),
(33, 'Xavier', 'Chavez', '', 'El pedestal', 'akslndla@gmaolc.om'),
(34, 'Xavier', 'Chavez', '', 'El pedestal', 'akslndla@gmaolc.om'),
(35, 'Xavier', 'Chavez', '', 'El pedestal', 'akslndla@gmaolc.om'),
(36, 'asdas', 'dasdas', '', 'asd', 'askjdnas@gmail.com'),
(37, 'asdasd', 'asd', '', '123123', 'dasd@gmail.com'),
(38, 'asdasd', 'asd', '', '123123', 'dasd@gmail.com'),
(39, 'asdasd', 'asd', '', '123123', 'dasd@gmail.com'),
(40, 'asdasd', 'asd', '', '123123', 'dasd@gmail.com'),
(41, 'asdas', 'dasdas', '', 'asd', 'askjdnas@gmail.com'),
(42, 'sdasd', 'asdas', '', '123123', 'asda@gmail.com'),
(43, 'sdasd', 'asdas', '', '123123', 'asda@gmail.com'),
(44, 'sdasd', 'asdas', '', '123123', 'asda@gmail.com'),
(45, 'sdasd', 'asdas', '', '123123', 'asda@gmail.com'),
(46, 'asdasd', 'asdas', '', '123123', 'asdas@mgial.com'),
(47, 'asdasd', 'asdas', '', '123123', 'asdas@mgial.com'),
(48, 'asdasd', 'asdas', '', '123123', 'asdas@mgial.com'),
(49, 'asdjasbd', 'jkasbd', '', '123123', 'jasbda@gmail.com'),
(50, 'asdjasbd', 'jkasbd', '', '123123', 'jasbda@gmail.com'),
(51, 'asdjasbd', 'jkasbd', '', '123123', 'jasbda@gmail.com'),
(52, 'asdjasbd', 'jkasbd', '', '123123', 'jasbda@gmail.com'),
(53, 'asdjasbd', 'jkasbd', '', '123123', 'jasbda@gmail.com'),
(54, 'asdasd', 'asdasd', '', '12312312', 'asdasd@gmail.cpom'),
(55, 'asdasd', 'asdasd', '', '12312312', 'asdasd@gmail.cpom'),
(56, 'asdasd', 'asdasd', '', '12312312', 'asdasd@gmail.cpom');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`idMascota`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `idMascota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD CONSTRAINT `mascota_ibfk_1` FOREIGN KEY (`id`) REFERENCES `personal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
