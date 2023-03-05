-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2023 a las 00:03:04
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `people`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `description` varchar(300) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `author`
--

INSERT INTO `author` (`id`, `name`, `lastname`, `description`, `phone`, `email`, `created_at`) VALUES
(1, 'Odalis ', 'Rea', 'Estudiante de la Carrera de Desarrollo de Software', '0993556321', 'ofc.rea@yavirac.edu.ec', '2023-02-28 22:48:37'),
(2, 'Jorge', 'Sucuzhañay', 'Estudiante de la Carrera de Desarrollo de Software', '098 903 7997', 'jev.sucuzhanay@yavirac.edu.ec', '2023-03-03 16:19:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `person_blog`
--

CREATE TABLE `person_blog` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `comentario` varchar(300) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `person_blog`
--

INSERT INTO `person_blog` (`id`, `name`, `lastname`, `comentario`, `phone`, `email`, `created_at`) VALUES
(3, 'Marco', 'Benavides', 'Me gustó mucho el short deportivo', '0993556323', 'marcob@gmail.com', '2023-03-05 18:00:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `person_help`
--

CREATE TABLE `person_help` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `help` varchar(300) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `person_help`
--

INSERT INTO `person_help` (`id`, `name`, `lastname`, `help`, `phone`, `email`, `created_at`) VALUES
(1, 'Marcos', 'Vargas', '¿Quiero que me den información de cómo puedo comprar?', '0998877445', 'marcosvargas@gmail.com', '2023-01-21 21:47:48'),
(4, 'Juan ', 'Vargas', '¿Quiero que me den información de cómo creo mi cuenta?', '0988774457', 'juanvargas@gmail.com', '2023-01-22 19:55:56');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `person_blog`
--
ALTER TABLE `person_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `person_help`
--
ALTER TABLE `person_help`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `person_blog`
--
ALTER TABLE `person_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `person_help`
--
ALTER TABLE `person_help`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
