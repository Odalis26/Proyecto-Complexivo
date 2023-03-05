-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2023 a las 00:04:17
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
-- Base de datos: `compra_productos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `fecha`) VALUES
(19, 'PERFUMES SUCCESI', '2023-03-04 16:37:07'),
(20, 'ACCESORIOS', '2023-03-04 16:37:31'),
(21, 'CEJAS PERFECTAS', '2023-03-04 16:37:47'),
(22, 'DALE VIDA A TU ROSTRO CON UN TOQUE DE COLOR', '2023-03-04 16:38:31'),
(23, 'DEFINE TU MIRADA', '2023-03-04 16:39:38'),
(24, 'ESMALTE PARA UÑAS', '2023-03-04 16:39:55'),
(25, 'EL MATCH PERFECTO', '2023-03-04 16:40:18'),
(26, 'MATIFICA RETOCA Y SELLA TU MAQUILLAJE', '2023-03-04 16:41:02'),
(27, 'MIRADA DE IMPACTO', '2023-03-04 16:42:14'),
(28, 'PALETA DE SOMBRAS', '2023-03-04 16:42:35'),
(29, 'RESALTA TUS LABIOS', '2023-03-04 16:42:59'),
(30, 'ROPA DE HOMBRE', '2023-03-04 17:06:40'),
(31, 'ZAPATOS DE HOMBRE', '2023-03-04 17:06:59'),
(32, 'ROPA DE MUJER', '2023-03-04 17:07:40'),
(33, 'ZAPATOS DE MUJER', '2023-03-04 17:08:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `documento` int(11) NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `compras` int(11) NOT NULL,
  `ultima_compra` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `documento`, `email`, `telefono`, `direccion`, `fecha_nacimiento`, `compras`, `ultima_compra`, `fecha`) VALUES
(24, 'Leo García', 1752442289, 'leogarcia@gmail.com', '(09) 9988-4455', 'Las Casas', '2000-05-16', 15, '2023-03-05 17:42:56', '2023-03-05 22:42:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `codigo` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `precio_compra` float NOT NULL,
  `precio_venta` float NOT NULL,
  `ventas` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `id_categoria`, `codigo`, `descripcion`, `imagen`, `stock`, `precio_compra`, `precio_venta`, `ventas`, `fecha`) VALUES
(69, 19, '01', 'SUCCESI FOR HER', 'vistas/img/productos/01/935.jpg', 8, 25, 30, 0, '2023-03-05 16:58:11'),
(70, 19, '02', 'SUCCESI FOR HIM', 'vistas/img/productos/02/591.jpg', 0, 25, 30, 5, '2023-03-05 22:42:56'),
(71, 20, '03', 'SET DE BROCHAS', 'vistas/img/productos/03/305.png', 4, 25, 30, 0, '2023-03-05 22:34:05'),
(72, 20, '04', 'BROCHA', 'vistas/img/productos/04/942.jpg', 4, 25, 30, 0, '2023-03-05 22:34:05'),
(73, 20, '05', 'COSMETIQUERA', 'vistas/img/productos/05/525.png', 15, 25, 30, 0, '2023-03-05 22:34:05'),
(74, 21, '06', 'SET DELINEADOR COMPACTO PARA CEJAS', 'vistas/img/productos/06/195.jpg', 5, 25, 30, 0, '2023-03-05 17:01:29'),
(75, 21, '07', 'LÁPIZ PARA CEJAS', 'vistas/img/productos/07/379.png', 4, 25, 30, 0, '2022-07-01 22:11:28'),
(76, 22, '08', 'RUBOR COMPACTO', 'vistas/img/productos/08/515.png', 4, 25, 30, 0, '2022-07-01 22:11:28'),
(77, 23, '09', 'DELINEADOR PENLINER', 'vistas/img/productos/09/998.png', 10, 25, 30, 0, '2022-07-01 22:11:28'),
(78, 23, '10', 'DELINEADOR LÍQUIDO', 'vistas/img/productos/10/768.png', 52, 25, 30, 0, '2022-07-01 22:11:28'),
(79, 23, '11', 'LÁPIZ DELINEADOR PARA OJOS', 'vistas/img/productos/11/692.png', 5, 25, 30, 0, '2023-03-05 17:04:22'),
(81, 24, '12', 'VIRGO', 'vistas/img/productos/12/708.jpg', 3, 25, 30, 0, '2023-03-05 17:05:42'),
(82, 24, '13', 'LEO', 'vistas/img/productos/13/133.jpg', 7, 25, 30, 0, '2023-03-05 17:06:11'),
(83, 24, '14', 'ESCORPIO', 'vistas/img/productos/14/717.jpg', 8, 25, 30, 0, '2023-03-05 16:05:33'),
(84, 24, '15', 'ARIES', 'vistas/img/productos/15/101.jpg', 6, 25, 30, 0, '2023-03-05 17:15:09'),
(85, 24, '16', 'TAURO', 'vistas/img/productos/16/676.jpg', 7, 25, 30, 0, '2023-03-05 17:15:40'),
(86, 24, '17', 'LIBRA', 'vistas/img/productos/17/926.jpg', 9, 25, 30, 0, '2023-03-05 17:16:20'),
(87, 24, '18', 'CÁNCER', 'vistas/img/productos/18/157.jpg', 6, 25, 30, 0, '2023-03-05 17:16:52'),
(88, 24, '19', 'PISCIS', 'vistas/img/productos/19/206.jpg', 7, 25, 30, 0, '2023-03-05 17:17:31'),
(89, 24, '20', 'CAPRICORNIO', 'vistas/img/productos/20/741.jpg', 10, 25, 30, 0, '2023-03-05 17:18:06'),
(90, 24, '21', 'GÉMINIS', 'vistas/img/productos/21/435.jpg', 7, 25, 30, 0, '2023-03-05 17:19:09'),
(91, 24, '22', 'ACUARIO', 'vistas/img/productos/22/673.jpg', 12, 25, 30, 0, '2023-03-05 17:19:49'),
(92, 24, '23', '1991', 'vistas/img/productos/23/532.jpg', 12, 25, 30, 0, '2023-03-05 17:20:33'),
(93, 24, '24', 'SAGITARIO', 'vistas/img/productos/24/804.jpg', 7, 25, 30, 0, '2023-03-05 17:21:03'),
(94, 24, '25', 'ORIÓN', 'vistas/img/productos/25/214.jpg', 6, 25, 30, 0, '2023-03-05 17:21:36'),
(95, 25, '26', 'MAQUILLAJE LÍQUIDO UP FPS 15 TONO FAIR', 'vistas/img/productos/26/320.jpg', 6, 25, 30, 0, '2023-03-05 17:31:24'),
(96, 25, '27', 'MAQUILLAJE LÍQUIDO UP FPS 15 TONO LIGHT SAND', 'vistas/img/productos/27/415.jpg', 4, 25, 30, 0, '2023-03-05 17:33:03'),
(97, 25, '28', 'MAQUILLAJE LÍQUIDO UP FPS 15 TONO SOFT HONEY', 'vistas/img/productos/28/892.jpg', 7, 25, 30, 0, '2023-03-05 17:33:37'),
(98, 25, '29', 'MAQUILLAJE LÍQUIDO UP FPS 15 TONO NATURAL BEIGE', 'vistas/img/productos/29/760.jpg', 8, 25, 30, 0, '2023-03-05 17:34:14'),
(99, 25, '30', 'MAQUILLAJE LÍQUIDO UP FPS 15 TONO WARM BEIGE', 'vistas/img/productos/30/910.jpg', 9, 25, 30, 0, '2023-03-05 17:34:55'),
(100, 25, '31', 'MAQUILLAJE LÍQUIDO UP FPS 15 TONO CREAMY NATURAL', 'vistas/img/productos/31/141.jpg', 20, 25, 30, 0, '2023-03-05 17:35:33'),
(101, 25, '32', 'MAQUILLAJE LÍQUIDO UP FPS 15 TONO SUN BEIGE', 'vistas/img/productos/32/857.jpg', 5, 25, 30, 0, '2023-03-05 17:36:13'),
(102, 25, '33', 'MAQUILLAJE LÍQUIDO UP FPS 15 TONO CARAMEL', 'vistas/img/productos/33/971.png', 5, 25, 30, 0, '2023-03-05 17:37:06'),
(103, 25, '34', 'MAQUILLAJE COMPACTO 2 EN 1 TONO FAIR', 'vistas/img/productos/34/168.png', 10, 25, 30, 0, '2023-03-05 17:37:47'),
(104, 25, '35', 'MAQUILLAJE COMPACTO 2 EN 1 TONO LIGHT SAND', 'vistas/img/productos/35/183.png', 5, 25, 30, 0, '2023-03-05 17:38:43'),
(105, 25, '36', 'MAQUILLAJE COMPACTO 2 EN 1 TONO SOFT HONEY', 'vistas/img/productos/36/797.png', 5, 25, 30, 0, '2023-03-05 17:39:36'),
(106, 25, '37', 'MAQUILLAJE COMPACTO 2 EN 1 TONO NATURAL BEIGE', 'vistas/img/productos/37/656.png', 15, 25, 30, 0, '2023-03-05 17:40:25'),
(107, 25, '38', 'MAQUILLAJE COMPACTO 2 EN 1  TONO SUN BEIGE', 'vistas/img/productos/38/127.png', 22, 25, 30, 0, '2023-03-05 17:41:00'),
(108, 25, '39', 'MAQUILLAJE COMPACTO 2 EN 1  TONO WARM BEIGE', 'vistas/img/productos/39/900.png', 7, 25, 30, 0, '2023-03-05 17:41:38'),
(109, 25, '40', 'MAQUILLAJE COMPACTO 2 EN 1 TONO CARAMEL', 'vistas/img/productos/40/666.png', 7, 25, 30, 0, '2023-03-05 17:42:10'),
(110, 25, '41', 'CORRECTOR LÍQUIDO TONO FAIR', 'vistas/img/productos/41/271.jpg', 7, 25, 30, 0, '2023-03-05 17:43:26'),
(111, 25, '42', 'CORRECTOR LÍQUIDO TONO LIGHT', 'vistas/img/productos/42/844.jpg', 7, 25, 30, 0, '2023-03-05 17:42:43'),
(112, 25, '43', 'CORRECTOR LÍQUIDO TONO MEDIUM', 'vistas/img/productos/43/754.jpg', 5, 25, 30, 0, '2023-03-05 17:44:51'),
(113, 25, '44', 'CORRECTOR LÍQUIDO TONO DEEP', 'vistas/img/productos/44/840.jpg', 11, 8, 30, 0, '2023-03-05 17:46:16'),
(114, 26, '45', 'POLVO TRASLÚCIDO', 'vistas/img/productos/45/484.png', 9, 25, 30, 0, '2023-03-05 17:46:55'),
(115, 27, '46', 'MÁSCARA PARA PESTAÑAS', 'vistas/img/productos/46/542.png', 6, 8, 30, 0, '2023-03-05 17:48:03'),
(116, 27, '47', 'RÍMEL DE AGUA', 'vistas/img/productos/47/248.png', 6, 30, 30, 0, '2023-03-05 17:49:11'),
(117, 28, '48', 'UMA', 'vistas/img/productos/48/446.jpg', 11, 30, 30, 0, '2023-03-05 17:51:19'),
(118, 28, '49', 'Yelena', 'vistas/img/productos/49/127.jpg', 9, 8, 30, 0, '2023-03-05 17:54:22'),
(119, 29, '50', 'LABIALES MATE TONO SAMBURU', 'vistas/img/productos/50/760.jpg', 4, 25, 30, 0, '2023-03-05 17:53:05'),
(120, 29, '51', 'LABIALES MATE TONO MASAI', 'vistas/img/productos/51/840.jpg', 8, 30, 30, 0, '2023-03-05 17:55:48'),
(121, 29, '52', 'LABIALES MATE TONO NAIROBI', 'vistas/img/productos/52/966.png', 12, 30, 30, 0, '2023-03-05 17:56:35'),
(122, 29, '53', 'LABIALES MATE TONO ATACAMA', 'vistas/img/productos/53/925.jpg', 14, 25, 30, 0, '2023-03-05 17:44:11'),
(123, 29, '54', 'LABIALES MATE TONO SAHARA', 'vistas/img/productos/54/307.jpg', 13, 25, 30, 0, '2023-03-05 17:29:35'),
(124, 29, '55', 'LABIALES MATE TONO GOBI', 'vistas/img/productos/55/816.jpg', 21, 25, 25, 0, '2023-03-05 17:27:18'),
(125, 29, '56', 'LABIALES MATE TONO  KALAHARI', 'vistas/img/productos/56/159.png', 14, 25, 25, 0, '2023-03-05 17:28:48'),
(126, 29, '57', 'LABIALES HIDRATANTES FPS15 TONO ICON VIOLET', 'vistas/img/productos/57/912.png', 10, 25, 30, 0, '2023-03-05 17:26:15'),
(127, 29, '58', 'LABIALES HIDRATANTES FPS15 TONO CANDY RED', 'vistas/img/productos/58/519.jpg', 5, 25, 30, 0, '2023-03-05 17:25:45'),
(128, 29, '59', 'LABIALES HIDRATANTES FPS15 TONO LIGHT PINK', 'vistas/img/productos/59/498.png', 5, 25, 25, 0, '2023-03-05 17:14:35'),
(129, 29, '60', 'LABIALES HIDRATANTES FPS15 TONO ROSE NUDE', 'vistas/img/productos/60/296.png', 13, 25, 30, 0, '2023-03-05 17:25:18'),
(130, 29, '61', 'LABIALES HIDRATANTES FPS15 TONO SAND NUDE', 'vistas/img/productos/61/843.png', 6, 25, 30, 0, '2023-03-05 17:24:37'),
(131, 29, '62', 'LABIALES HIDRATANTES FPS15 TONO SWEET CORAL', 'vistas/img/productos/62/795.png', 5, 25, 30, 0, '2023-03-05 17:23:11'),
(132, 29, '63', 'LABIALES HIDRATANTES FPS15 TONO FLAME CORAL', 'vistas/img/productos/63/117.jpg', 8, 25, 30, 0, '2023-03-05 17:23:55'),
(133, 29, '64', 'LABIALES HIDRATANTES FPS15 TONO HOT PINK', 'vistas/img/productos/64/818.png', 7, 25, 30, 0, '2023-03-05 17:18:39'),
(134, 29, '65', 'LABIALES HIDRATANTES FPS15 TONO FLASH RED', 'vistas/img/productos/65/544.png', 6, 25, 30, 0, '2023-03-05 17:11:35'),
(135, 29, '66', 'LABIALES HIDRATANTES FPS15 TONO SEYTÚ RED', 'vistas/img/productos/66/581.png', 6, 25, 30, 0, '2023-03-05 17:11:04'),
(136, 29, '67', 'BRILLO LABIAL TONO TOPAZ', 'vistas/img/productos/67/594.jpg', 7, 25, 30, 0, '2023-03-05 17:10:32'),
(137, 29, '68', 'BRILLO LABIAL TONO ÁMBAR', 'vistas/img/productos/68/721.jpg', 12, 25, 30, 0, '2023-03-05 17:09:21'),
(138, 29, '69', 'BRILLO LABIAL TONO ÁGATA', 'vistas/img/productos/69/212.jpg', 13, 10, 30, 0, '2023-03-05 03:44:51'),
(139, 29, '70', 'BRILLO LABIAL TONO ZAFIRO', 'vistas/img/productos/70/302.jpg', 10, 8, 30, 0, '2023-03-05 03:47:14'),
(140, 29, '71', 'BRILLO LABIAL TONO ZAFIRO TONO ÓPALO', 'vistas/img/productos/71/544.png', 18, 25, 25, 0, '2023-03-05 17:08:47'),
(141, 29, '72', 'BRILLO LABIAL TONO RUBÍ', 'vistas/img/productos/72/448.png', 16, 25, 30, 0, '2023-03-05 17:07:37'),
(142, 30, '73', 'CAMISA CASUAL TALLA S', 'vistas/img/productos/73/306.jpg', 4, 20, 30, 0, '2023-03-05 02:56:27'),
(143, 30, '74', 'CAMISA CASUAL TALLA M', 'vistas/img/productos/74/510.jpg', 8, 8, 30, 0, '2023-03-05 02:56:50'),
(144, 30, '75', 'CAMISA CASUAL TALLA L', 'vistas/img/productos/75/501.jpg', 7, 25, 30, 0, '2023-03-05 02:57:14'),
(145, 30, '76', 'CAMISA CASUAL TALLA LX', 'vistas/img/productos/76/158.jpg', 13, 25, 30, 0, '2023-03-05 02:57:32'),
(146, 30, '77', ' JEANS TALLA S', 'vistas/img/productos/77/532.jpg', 22, 25, 30, 0, '2023-03-05 02:58:27'),
(147, 30, '78', 'JEANS TALLA M', 'vistas/img/productos/78/519.jpg', 17, 15, 30, 0, '2023-03-05 02:58:47'),
(149, 30, '79', 'JEANS TALLA L', 'vistas/img/productos/79/764.jpg', 15, 25, 30, 0, '2023-03-05 02:59:08'),
(150, 30, '80', 'JEANS TALLA LX', 'vistas/img/productos/80/614.jpg', 9, 25, 30, 0, '2023-03-05 02:59:28'),
(151, 30, '81', 'ROPA DE BODA TALLA S', 'vistas/img/productos/81/148.png', 12, 25, 100, 0, '2023-03-05 03:05:06'),
(152, 30, '82', 'ROPA DE BODA TALLA M', 'vistas/img/productos/82/182.png', 17, 25, 100, 0, '2023-03-05 03:05:24'),
(153, 30, '83', 'ROPA DE BODA TALLA L', 'vistas/img/productos/83/902.png', 60, 25, 100, 0, '2023-03-05 03:05:49'),
(154, 30, '84', 'ROPA DE BODA TALLA LX', 'vistas/img/productos/84/833.png', 5, 25, 100, 5, '2023-03-05 22:42:56'),
(155, 30, '85', 'ROPA FORMAL TALLA S', 'vistas/img/productos/85/760.jpg', 17, 25, 100, 0, '2023-03-05 03:07:25'),
(156, 30, '86', 'ROPA FORMAL TALLA M', 'vistas/img/productos/86/282.jpg', 19, 25, 100, 0, '2023-03-05 03:08:21'),
(157, 30, '87', 'ROPA FORMAL TALLA L', 'vistas/img/productos/87/892.jpg', 14, 25, 100, 0, '2023-03-05 03:08:45'),
(158, 30, '88', 'ROPA FORMAL TALLA LX', 'vistas/img/productos/88/856.jpg', 15, 25, 100, 0, '2023-03-05 03:15:27'),
(159, 30, '89', 'CAMISETA DEPORTIVA TALLA S', 'vistas/img/productos/89/454.jpg', 15, 25, 30, 0, '2023-03-05 03:17:59'),
(160, 30, '90', 'CAMISETA DEPORTIVA TALLA M', 'vistas/img/productos/90/712.jpg', 26, 25, 30, 0, '2023-03-05 03:18:20'),
(161, 30, '91', 'CAMISETA DEPORTIVA TALLA L', 'vistas/img/productos/91/126.jpg', 39, 25, 30, 0, '2023-03-05 03:18:48'),
(162, 30, '92', 'CAMISETA DEPORTIVA  TALLA LX', 'vistas/img/productos/92/842.jpg', 23, 25, 30, 0, '2023-03-05 03:19:07'),
(163, 30, '93', 'SHORT DEPORTIVO TALLA S', 'vistas/img/productos/93/879.png', 20, 25, 30, 0, '2023-03-05 22:35:41'),
(164, 30, '94', 'SHORT DEPORTIVO TALLA M', 'vistas/img/productos/94/698.png', 9, 25, 30, 0, '2023-03-05 03:21:28'),
(165, 30, '95', 'SHORT DEPORTIVO TALLA L', 'vistas/img/productos/95/329.png', 20, 25, 30, 0, '2023-03-05 03:21:45'),
(178, 30, '96', 'SHORT DEPORTIVO TALLA LX', 'vistas/img/productos/96/626.png', 25, 25, 30, 0, '2023-03-05 03:22:03'),
(179, 31, '97', 'ZAPATOS DE TRAJE TALLA S', 'vistas/img/productos/97/127.png', 22, 25, 30, 0, '2023-03-05 03:23:54'),
(180, 31, '98', 'ZAPATOS DE TRAJE TALLA M', 'vistas/img/productos/98/913.png', 25, 25, 30, 0, '2023-03-05 03:24:12'),
(181, 31, '99', 'ZAPATOS DE TRAJE TALLA L', 'vistas/img/productos/99/950.png', 21, 25, 30, 0, '2023-03-05 03:24:31'),
(182, 31, '100', 'ZAPATOS DE TRAJE TALLA LX', 'vistas/img/productos/100/699.png', 21, 25, 30, 0, '2023-03-05 03:24:50'),
(183, 31, '101', 'ZAPATOS DE BODA TALLA S', 'vistas/img/productos/101/223.png', 13, 25, 30, 5, '2023-03-05 22:42:56'),
(184, 31, '102', 'ZAPATOS DE BODA TALLA M', 'vistas/img/productos/102/445.png', 19, 25, 30, 0, '2023-03-05 03:26:35'),
(185, 31, '103', 'ZAPATOS DE BODA TALLA L', 'vistas/img/productos/103/684.png', 20, 25, 30, 0, '2023-03-05 03:26:57'),
(186, 31, '104', 'ZAPATOS DE BODA TALLA LX', 'vistas/img/productos/104/473.png', 22, 25, 30, 0, '2023-03-05 03:27:11'),
(187, 31, '105', 'ZAPATOS FORMALES TALLA S', 'vistas/img/productos/105/127.jpg', 11, 25, 30, 0, '2023-03-05 03:28:37'),
(188, 31, '106', 'ZAPATOS FORMALES TALLA M', 'vistas/img/productos/106/816.jpg', 18, 25, 30, 0, '2023-03-05 17:06:40'),
(190, 31, '107', 'ZAPATOS FORMALES TALLA L', 'vistas/img/productos/107/203.jpg', 16, 25, 30, 0, '2023-03-05 03:29:12'),
(191, 31, '108', 'ZAPATOS FORMALES TALLA LX', 'vistas/img/productos/108/391.jpg', 14, 25, 30, 0, '2023-03-05 03:29:32'),
(192, 31, '109', 'ZAPATOS DE CHAROL TALLA S', 'vistas/img/productos/109/761.jpg', 43, 25, 30, 0, '2023-03-05 03:32:14'),
(193, 31, '110', 'ZAPATOS DE CHAROL TALLA M', 'vistas/img/productos/110/837.jpg', 25, 25, 30, 0, '2023-03-05 03:32:33'),
(194, 31, '111', 'ZAPATOS DE CHAROL  TALLA L', 'vistas/img/productos/111/677.jpg', 45, 25, 30, 0, '2023-03-05 03:32:50'),
(195, 31, '112', 'ZAPATOS DE CHAROL TALLA LX', 'vistas/img/productos/112/627.jpg', 25, 25, 30, 0, '2023-03-05 03:33:07'),
(196, 32, '113', 'TOP TALLA S', 'vistas/img/productos/113/381.jpg', 25, 25, 30, 0, '2023-03-05 18:07:40'),
(197, 32, '114', 'TOP TALLA M', 'vistas/img/productos/114/730.jpg', 24, 25, 30, 0, '2023-03-05 18:10:13'),
(198, 32, '115', 'TOP  TALLA L', 'vistas/img/productos/115/591.jpg', 27, 20, 30, 0, '2023-03-05 22:34:47'),
(199, 32, '116', 'TOP TALLA LX', 'vistas/img/productos/116/820.jpg', 19, 15, 30, 0, '2023-03-05 22:34:47'),
(200, 32, '117', 'PANTALÓN TALLA S', 'vistas/img/productos/117/155.jpg', 17, 25, 30, 0, '2023-03-05 18:18:09'),
(201, 32, '118', 'PANTALÓN TALLA M', 'vistas/img/productos/118/336.jpg', 15, 25, 30, 0, '2023-03-05 18:18:29'),
(202, 32, '119', 'PANTALÓN TALLA L', 'vistas/img/productos/119/166.jpg', 16, 15, 30, 0, '2023-03-05 18:19:18'),
(203, 32, '120', 'PANTALÓN  TALLA LX', 'vistas/img/productos/120/264.jpg', 15, 25, 30, 0, '2023-03-05 18:19:39'),
(204, 32, '121', 'ROPA DE BODA', 'vistas/img/productos/121/309.jpg', 15, 20, 30, 0, '2023-03-05 18:21:13'),
(205, 32, '122', 'ROPA DE BODA', 'vistas/img/productos/122/278.jpg', 25, 15, 30, 0, '2023-03-05 18:23:28'),
(206, 32, '123', 'ROPA DE BODA', 'vistas/img/productos/123/497.jpg', 7, 25, 30, 0, '2023-03-05 18:24:35'),
(207, 33, '124', 'SANDALIAS', 'vistas/img/productos/124/733.png', 25, 30, 30, 0, '2023-03-05 19:18:57'),
(208, 32, '125', 'ROPA FORMAL TALLA S', 'vistas/img/productos/125/971.jpg', 25, 20, 30, 0, '2023-03-05 18:32:51'),
(209, 32, '126', 'ROPA FORMAL TALLA M', 'vistas/img/productos/126/233.jpg', 30, 20, 30, 0, '2023-03-05 18:33:23'),
(210, 32, '127', 'ROPA FORMAL TALLA L', 'vistas/img/productos/127/414.jpg', 30, 25, 30, 0, '2023-03-05 18:33:58'),
(211, 32, '128', 'ROPA FORMAL TALLA LX', 'vistas/img/productos/128/535.jpg', 37, 25, 30, 0, '2023-03-05 18:34:33'),
(212, 32, '129', 'FALDA DEPORTIVA TALLA S', 'vistas/img/productos/129/745.png', 5, 25, 30, 0, '2023-03-05 18:44:28'),
(213, 32, '130', 'FALDA DEPORTIVA TALLA M', 'vistas/img/productos/130/449.png', 16, 20, 30, 0, '2023-03-05 18:44:54'),
(214, 32, '131', 'FALDA DEPORTIVA TALLA L', 'vistas/img/productos/131/777.png', 10, 20, 30, 0, '2023-03-05 18:53:16'),
(215, 32, '132', 'FALDA DEPORTIVA TALLA LX', 'vistas/img/productos/132/339.png', 20, 20, 30, 0, '2023-03-05 18:54:31'),
(216, 32, '133', 'TOP DEPORTIVO TALLA S', 'vistas/img/productos/133/604.png', 30, 30, 30, 0, '2023-03-05 18:55:19'),
(217, 32, '134', 'TOP DEPORTIVO TALLA M', 'vistas/img/productos/134/928.png', 20, 20, 30, 0, '2023-03-05 18:55:54'),
(218, 32, '135', 'TOP DEPORTIVO TALLA L', 'vistas/img/productos/135/972.png', 30, 30, 30, 0, '2023-03-05 18:56:16'),
(219, 32, '136', 'TOP DEPORTIVO TALLA LX', 'vistas/img/productos/136/997.png', 23, 20, 30, 0, '2023-03-05 18:56:36'),
(222, 33, '137', 'BOTINES  TALLA S', 'vistas/img/productos/137/645.png', 14, 30, 30, 0, '2023-03-05 21:20:53'),
(223, 33, '138', 'BOTINES TALLA M', 'vistas/img/productos/138/938.png', 40, 30, 30, 0, '2023-03-05 21:21:38'),
(224, 33, '139', 'BOTINES TALLA L', 'vistas/img/productos/139/995.png', 59, 30, 30, 0, '2023-03-05 21:22:15'),
(225, 33, '140', 'BOTINES TALLA LX', 'vistas/img/productos/140/137.png', 36, 30, 30, 0, '2023-03-05 22:35:35'),
(226, 33, '141', 'SANDALIAS  TALLA S', 'vistas/img/productos/141/350.png', 23, 30, 30, 0, '2023-03-05 21:21:07'),
(228, 33, '142', 'SANDALIAS TALLA M', 'vistas/img/productos/142/442.png', 20, 30, 30, 0, '2023-03-05 21:21:53'),
(229, 33, '143', 'SANDALIAS TALLA L', 'vistas/img/productos/143/347.png', 29, 30, 30, 0, '2023-03-05 21:22:28'),
(230, 33, '144', 'SANDALIAS TALLA LX', 'vistas/img/productos/144/890.png', 34, 30, 30, 0, '2023-03-05 21:23:03'),
(231, 33, '145', 'ZAPATOS DE BODA TALLA S', 'vistas/img/productos/145/917.jpg', 17, 25, 30, 0, '2023-03-05 21:42:42'),
(232, 33, '146', 'ZAPATOS DE BODA TALLA M', 'vistas/img/productos/146/101.jpg', 11, 25, 30, 0, '2023-03-05 21:43:07'),
(233, 33, '147', 'ZAPATOS DE BODA TALLA L', 'vistas/img/productos/147/169.jpg', 13, 25, 30, 0, '2023-03-05 21:43:48'),
(234, 33, '148', 'ZAPATOS DE BODA TALLA LX', 'vistas/img/productos/148/182.jpg', 13, 25, 30, 0, '2023-03-05 21:44:21'),
(235, 33, '149', 'ZAPATOS FORMALES TALLA S', 'vistas/img/productos/149/252.jpg', 25, 25, 30, 0, '2023-03-05 21:52:30'),
(236, 33, '150', 'ZAPATOS FORMALES TALLA M', 'vistas/img/productos/150/794.jpg', 20, 25, 30, 0, '2023-03-05 21:53:06'),
(237, 33, '151', 'ZAPATOS FORMALES TALLA L', 'vistas/img/productos/151/799.jpg', 21, 25, 30, 0, '2023-03-05 21:53:19'),
(238, 33, '152', 'ZAPATOS FORMALES TALLA LX', 'vistas/img/productos/152/882.jpg', 25, 15, 30, 0, '2023-03-05 21:53:37'),
(239, 33, '153', 'ZAPATOS FORMALES TALLA S', 'vistas/img/productos/153/574.jpg', 39, 25, 30, 0, '2023-03-05 22:32:59'),
(240, 33, '154', 'ZAPATOS FORMALES TALLA M', 'vistas/img/productos/154/624.jpg', 24, 25, 30, 0, '2023-03-05 22:32:59'),
(241, 33, '155', 'ZAPATOS FORMALES TALLA L', 'vistas/img/productos/155/380.jpg', 19, 25, 30, 0, '2023-03-05 21:55:30'),
(242, 33, '156', 'ZAPATOS FORMALES TALLA LX', 'vistas/img/productos/156/395.jpg', 35, 30, 30, 0, '2023-03-05 21:55:42'),
(243, 33, '157', 'ZAPATILLAS DEPORTIVAS TALLA S', 'vistas/img/productos/157/271.jpg', 44, 25, 30, 0, '2023-03-05 22:03:49'),
(244, 33, '158', 'ZAPATILLAS DEPORTIVAS TALLA M', 'vistas/img/productos/158/840.jpg', 56, 20, 30, -1, '2023-03-05 22:34:47'),
(245, 33, '159', 'ZAPATILLAS DEPORTIVAS TALLA L', 'vistas/img/productos/159/309.jpg', 103, 25, 30, -1, '2023-03-05 22:34:47'),
(246, 33, '160', 'ZAPATILLAS DEPORTIVAS TALLA LX', 'vistas/img/productos/160/572.jpg', 20, 25, 30, -1, '2023-03-05 22:34:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `perfil`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(62, 'Administrador', 'admin', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'Administrador', 'vistas/img/usuarios/admin/589.jpg', 1, '2023-03-04 11:23:51', '2023-03-04 16:23:51'),
(63, 'Andres Hernández', 'andres', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'Administrador', 'vistas/img/usuarios/andres/394.jpg', 1, '0000-00-00 00:00:00', '2023-02-03 19:40:17'),
(64, 'Leo García', 'leo', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'Cliente', 'vistas/img/usuarios/leo/497.jpg', 1, '2023-03-04 11:16:33', '2023-03-04 16:16:33'),
(65, 'Daniel Sánchez', 'daniel', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'Especial', 'vistas/img/usuarios/daniel/695.jpg', 1, '2023-03-02 21:51:51', '2023-03-03 02:51:51'),
(66, 'Manuel Paez', 'Administrador', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'Administrador', 'vistas/img/usuarios/Administrador/924.jpg', 1, '2023-03-05 07:58:35', '2023-03-05 12:58:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `productos` text COLLATE utf8_spanish_ci NOT NULL,
  `impuesto` float NOT NULL,
  `neto` float NOT NULL,
  `total` float NOT NULL,
  `metodo_pago` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `codigo`, `id_cliente`, `id_vendedor`, `productos`, `impuesto`, `neto`, `total`, `metodo_pago`, `fecha`) VALUES
(83, 10001, 24, 66, '[{\"id\":\"183\",\"descripcion\":\"ZAPATOS DE BODA TALLA S\",\"cantidad\":\"5\",\"stock\":\"13\",\"precio\":\"30\",\"total\":\"150\"},{\"id\":\"154\",\"descripcion\":\"ROPA DE BODA TALLA LX\",\"cantidad\":\"5\",\"stock\":\"5\",\"precio\":\"100\",\"total\":\"500\"},{\"id\":\"70\",\"descripcion\":\"SUCCESI FOR HIM\",\"cantidad\":\"5\",\"stock\":\"0\",\"precio\":\"30\",\"total\":\"150\"}]', 0, 800, 800, 'Efectivo', '2023-03-05 22:42:56');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ventas_ibfk_3` (`id_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ventas_ibfk_1` (`id_cliente`),
  ADD KEY `ventas_ibfk_2` (`id_vendedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `ventas_ibfk_3` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`id_vendedor`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
