-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2022 a las 22:11:22
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
-- Base de datos: `chiquitopc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `id_formulario` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `mensaje` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`id_formulario`, `nombre`, `email`, `mensaje`) VALUES
(15, 'Leonel', 'leonel@gmail.com', 'Buenas me comunico por una computadora'),
(16, 'Juan', 'juan@gmail.com', 'Buenas me comunico por una computadora'),
(17, 'Nicolas', 'Nicolas@gmail.com', 'Buenas me comunico por un producto'),
(18, 'Agustin', 'agustin@gmail.com', 'Buenas me comunico por un producto'),
(19, 'Santiago', 'santiago@gmail.com', 'Buenas me comunico por un producto que no tienen en stock'),
(20, 'Matias', 'matias@gmail.com', 'Buenas me comunico por un producto que no tienen en stock'),
(21, 'Hugo', 'hugo@gmail.com', 'Buenas me comunico por un producto que no tienen en stock o si?'),
(22, 'Lucas', 'lucas@gmail.com', 'Buenas me comunico por un producto que no tienen en stock o si?'),
(23, 'Martin', 'martin@gmail.com', 'Buenas, me gustaria enviar mi curriculum'),
(24, 'Daniel', 'daniel@gmail.com', 'Buenas, me gustaria enviar mi curriculum'),
(25, 'Pablo', 'pablo@gmail.com', 'Buenas, me gustaria enviar mi curriculum, si es que me lo aceptan'),
(26, 'Mateo', 'mateo@gmail.com', 'Buenas, me gustaria enviar mi curriculum para aplicar a la empresa'),
(27, 'Alejandro', 'alejandro@gmail.com', 'Me comunico con ventas'),
(28, 'Alvaro', 'alvaro@gmail.com', 'Me comunico con ventas'),
(29, 'Manuel', 'manuel@gmail.com', 'Me comunico con el sector tecnico'),
(30, 'Lucia', 'lucia@gmail.com', 'Me comunico con ventas'),
(31, 'Martina', 'martina@gmail.com', 'Me comunico al mail de chiquitopc?'),
(32, 'Maria', 'maria@gmail.com', 'Su informacion en la web esta mal'),
(33, 'Paula', 'paula@gmail.com', 'Su informacion en la web esta mal'),
(34, 'Julia', 'julia@gmail.com', 'Su informacion en la web esta mal, su numero es falso'),
(35, 'Jorge', 'jorge@gmail.com', 'Me gusta la CPU'),
(36, 'Alex', 'alex@gmail.com', 'QUE MAL SERVICIO'),
(37, 'Angel', 'angel@gmail.com', 'No puedo creer!'),
(38, 'gael', 'gael@gmail.com', 'Me gustaria poder conocerlos!'),
(39, 'iker', 'iker@gmail.com', 'Quiero la placa de video RTX'),
(40, 'saul', 'saul@gmail.com', 'Quiero tener el GABINETE APOLO'),
(41, 'ivan', 'ivan@gmail.com', 'Con esta temperatura estan abiertos?\r\n'),
(42, 'aaron', 'aaron@gmail.com', 'Me regalan una pc?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio` int(11) NOT NULL,
  `imagen` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `descripcion`, `precio`, `imagen`) VALUES
(1, 'PC HOGAR Y OFICINA', 'PC Armada | AMD Ryzen 5 5600 + 8GB + SSD', 65000, 'https://s3-sa-east-1.amazonaws.com/saasargentina/NcVxVUXWo9fqb7joNOP4/imagen'),
(2, 'PC BASIC GAMER', 'PC Gamer Armada | Intel Core I5 10400F + 8GB + RX 550 4Gb', 100000, 'https://s3-sa-east-1.amazonaws.com/saasargentina/U8Kvwp2a2M6fvs78tucD/imagen'),
(3, 'PC ELITE GAMER', 'PC Gamer Armada | AMD Ryzen 5 5600 + 8GB + GTX 1660 TI 6Gb', 150000, 'https://s3-sa-east-1.amazonaws.com/saasargentina/VafQ2T9zOhzfoPNIxoYr/imagen'),
(4, 'PC XTREME GAMER', 'PC Gamer Armada | Intel Core I7 10700F + 16GB (2x8GB) + RTX 3070 TI 8Gb + 500GB NVME', 225000, 'https://s3-sa-east-1.amazonaws.com/saasargentina/TxQ5W9qoPeanjKPgfQnr/imagen');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`id_formulario`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id_formulario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
