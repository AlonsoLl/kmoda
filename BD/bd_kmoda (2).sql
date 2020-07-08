-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-07-2020 a las 08:59:24
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_kmoda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombrecateg` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL,
  `descripcion` varchar(100) COLLATE ucs2_spanish2_ci NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 1,
  `motivo` varchar(70) COLLATE ucs2_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombrecateg`, `descripcion`, `estado`, `motivo`) VALUES
(1, 'Ropa para Bebé', 'Modelos Variados', 1, ''),
(2, 'Ropa para Niños', 'Modelos Variados', 1, ''),
(3, 'Ropa para Jóvenes', 'De todo', 1, ''),
(4, 'Ropa para Adultos', 'Muy Variado', 1, ''),
(5, 'Accesorios para Bebé', 'Muy Variado', 1, ''),
(82, 'Accesorios para Niños', 'muy variado', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombres` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL,
  `dni` int(8) NOT NULL,
  `direccion` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL,
  `correo` varchar(60) COLLATE ucs2_spanish2_ci DEFAULT 'No especifica',
  `telefono` varchar(9) COLLATE ucs2_spanish2_ci NOT NULL DEFAULT 'No tiene'
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombres`, `dni`, `direccion`, `correo`, `telefono`) VALUES
(2, 'Gladys Chozo Reyes', 17535231, 'Junin 457 - Lambayeque', 'gladyschr@gmail.com', '983991765'),
(3, 'Livi Chamaya Moreno\r\n', 0, ' El Naranjo I - Tuman', 'No especifica', '920308168'),
(4, 'Leslie Kassandra Palacios Chozo', 76692030, 'junin 457 - Lambayeque', 'No especifica', '982456089'),
(5, 'Zulema Mejía Burga', 41527022, 'El Naranjo I - Tumán', 'No especifica', '979551876'),
(6, 'Tifany Idrogo ', 76879344, 'Calle las delicias - Sector Jarrin - Tumán', 'brisedth_fany31@hotmail.com', '998440455'),
(7, 'Laura Suyon Benavidez', 0, 'El vivero 2 orillas de las cañas- Tumán', 'No especifica', '931026286'),
(9, 'Astrid  Nicole Cieza Tantajulca ', 73338602, 'Calle santa Rosa 113 - Tumán', 'astridct130599@gmail.com', '963527422'),
(10, 'Noelia Capuñay Mendoza', 43578592, 'Calle San Pedro - Túcume', 'No especifica', '950517111'),
(11, 'Carla Gonzales Arica', 0, 'Las casuarina - Tumán', 'No especifica', 'No tiene'),
(12, 'Miluska Capuñay Mendoza', 74600274, 'Calle San Pedro - Túcume', 'No especifica', '947879006'),
(13, 'Maria de los Angeles Galvez Estela', 76252233, 'Block 3 -Tumán', 'No especifica', '956571155'),
(14, 'Dilser Mejia Burga', 16714456, 'Naranjo I 136 - Tumán', 'No especifica', '943501042'),
(15, 'Amy Sandoval Ramirez', 71540063, 'Block 14 1429 - Tumán', 'amyitalasandovalramirez@gmail.com', '993884551'),
(16, 'Maria Julia Labrin Chozo', 46150950, 'Junin 457 - Lambayeque', 'No especifica', '989091350'),
(17, 'Rosario Nuñez Flores', 0, 'Tuman', 'No especifica', 'No tiene'),
(18, 'Victoria Gutierrez Ipanaque', 40642108, 'El Naranjo - Tuman', 'No especifica', '945193174'),
(19, 'Julia Rodriguez Novoa', 71525560, 'Chiclayo ', 'No especifica', '927574570'),
(20, 'Sarela Campos Cordova', 73018856, 'Barrio nuevo - Calupe', 'sarelita_campos@hotmail.com', '950187298'),
(21, 'Zunilda Burga Huaman', 3701575, 'Block 10 - Tumán', 'No especifica', '978368111'),
(22, 'Diana Aquino Cornetero', 75926036, 'Pampa El Toro - Tuman', 'No especifica', '902360252'),
(23, 'Carla Rivadeneyra Suclupe', 41946266, 'Calle Grau 404 - Lambayeque', 'No especifica', ''),
(24, 'Lorena Silva Martinez', 72466948, 'Juan Manuel Iturregui 938', 'fanny-6-escorpio@hotmail.com', '918062581'),
(25, 'Ricardo Alonso Zamora Bobadilla', 71085603, 'AV. Solf y Muro 115 Santa Rosa - Lambayeque', 'ricardozamoraboba@hotmail.com', '959064391'),
(26, 'Mercy Bracamonte Vergara', 40625538, 'El Naranjo I - Tuman', 'No especifica	', '987855806'),
(27, 'Ana Peña Lopez', 76949843, 'Mocce antiguo Mz B lote 34', '', '977650975'),
(28, 'Edsson Chumbes Rodriguez', 71599035, 'Lima', '', '942514155'),
(29, 'Silvia Zavaleta Garcia', 40716415, 'Jr. Unión 136 Naranjo I - Tumán', 'soepjaime1@gmail.com', '947548058'),
(30, 'Liz Suzety Chupillon Bravo', 43803518, 'Acapulco Sanchez Cerro ', 'liz_43803518@hotmail.com', '976200800'),
(31, 'Susana Paola Cajusol Niquen', 72020836, 'Tarapaca 161', 'sus18caj12@gmail.com', '999536830'),
(32, 'Naify Soplapuco Vasquez', 76305301, 'Jarrin', 'No especifico', '988851808'),
(33, 'Katherin Guevara Rojas', 72022640, 'Block 14 1401 - Tumán', 'No especifica', '925901702'),
(43, 'Gina Lopez Chamaya', 44492115, 'Las Dunas', 'No especifico', '926672804'),
(44, 'Luz Mejia Burga', 40505986, 'El Naranjo I - Tuman', 'No especifico', '979822338'),
(45, 'Ronald Castañeda Navarro', 45553254, 'Calle Ladera 325 - Urb. 3 de Octubre - Chiclayo', 'rocana_12_07@hotmail.com', '978999178'),
(46, 'Lucia Chamaya Moreno', 16714360, 'El Naranjo - Tuman', 'No especifico', '956744005');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE `color` (
  `id_color` int(11) NOT NULL,
  `nombre_color` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Volcado de datos para la tabla `color`
--

INSERT INTO `color` (`id_color`, `nombre_color`) VALUES
(1, 'No aplica'),
(2, 'Rojo'),
(3, 'Azul'),
(4, 'Verde'),
(5, 'Amarillo'),
(6, 'Blanco'),
(7, 'Negro'),
(8, 'Rosado'),
(9, 'Morado'),
(10, 'Lila'),
(11, 'Fuccia'),
(12, 'Marron'),
(13, 'Verde Agua'),
(14, 'Plomo'),
(15, 'Azul Noche'),
(16, 'Azul Eléctrico'),
(17, 'Celeste'),
(18, 'Crema'),
(19, 'Coral'),
(20, 'Mostaza'),
(21, 'Camello'),
(22, 'Azul Acero'),
(23, 'Beige'),
(24, 'Gris'),
(25, 'Plomo Oscuro'),
(26, 'Granate'),
(27, 'Rosado Bebé');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `fecha_compra` date NOT NULL DEFAULT current_timestamp(),
  `nombre_producto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `precio_unidad` float(5,2) NOT NULL,
  `precio_vender` float(5,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `total` float(5,2) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 0,
  `motivo` varchar(100) COLLATE utf8_spanish_ci DEFAULT '---'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id_compra`, `id_proveedor`, `fecha_compra`, `nombre_producto`, `precio_unidad`, `precio_vender`, `cantidad`, `total`, `estado`, `motivo`) VALUES
(1, 2, '2020-06-18', 'Platitos Biodegradables ', 9.50, 18.00, 12, 114.00, 1, NULL),
(2, 1, '2020-06-17', 'Poleras Urbanas', 30.00, 48.00, 6, 180.00, 1, NULL),
(3, 4, '2020-06-23', 'Conjunto de Oso', 28.00, 55.00, 6, 168.00, 1, NULL),
(4, 3, '2020-06-18', 'Chompas de Lana', 28.00, 45.00, 6, 168.00, 1, NULL),
(5, 8, '2020-06-26', 'Colchas', 35.00, 50.00, 6, 210.00, 1, NULL),
(6, 1, '2020-06-23', 'Mantas', 35.00, 50.00, 6, 210.00, 1, NULL),
(7, 5, '2020-06-25', 'Jogger ', 45.00, 65.00, 3, 135.00, 1, NULL),
(8, 7, '2020-06-24', 'Mochilas', 16.00, 30.00, 10, 160.00, 1, NULL),
(9, 9, '2020-06-27', 'Bodys', 13.00, 25.00, 16, 208.00, 1, NULL),
(10, 10, '2020-06-30', 'Jogger niños', 8.00, 15.00, 12, 96.00, 0, '---');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `id_detalle_pedido` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `subtotal` float(5,3) NOT NULL,
  `total` float(5,2) NOT NULL,
  `descripcion` varchar(200) COLLATE ucs2_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_pago`
--

CREATE TABLE `estado_pago` (
  `id_estado_pago` int(11) NOT NULL,
  `nombre_pago` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estado_pago`
--

INSERT INTO `estado_pago` (`id_estado_pago`, `nombre_pago`) VALUES
(1, 'Pago Parcial'),
(2, 'Pago Total'),
(3, 'Contra-entrega');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_pedido`
--

CREATE TABLE `estado_pedido` (
  `id_estado_pedido` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estado_pedido`
--

INSERT INTO `estado_pedido` (`id_estado_pedido`, `nombre`) VALUES
(1, 'Por Entregar'),
(2, 'Entregado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_venta`
--

CREATE TABLE `estado_venta` (
  `id_estado_venta` int(11) NOT NULL,
  `nombre_venta` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estado_venta`
--

INSERT INTO `estado_venta` (`id_estado_venta`, `nombre_venta`) VALUES
(1, 'Vigente'),
(2, 'Anulada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `cantidad_pago` float(5,2) NOT NULL DEFAULT 0.00,
  `id_estado_pago` int(11) NOT NULL,
  `id_estado_pedido` int(11) NOT NULL,
  `id_estado_venta` int(1) NOT NULL DEFAULT 1,
  `motivo` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `id_producto`, `cantidad`, `id_usuario`, `id_cliente`, `fecha`, `cantidad_pago`, `id_estado_pago`, `id_estado_pedido`, `id_estado_venta`, `motivo`) VALUES
(10, 1, 1, 4, 4, '2020-06-17', 18.00, 2, 2, 1, ''),
(11, 2, 1, 4, 3, '2020-06-21', 18.00, 2, 2, 1, ''),
(12, 1, 1, 4, 2, '2020-06-18', 18.00, 2, 2, 1, ''),
(13, 1, 1, 4, 15, '2020-06-18', 18.00, 2, 2, 1, ''),
(14, 1, 1, 4, 5, '2020-06-18', 18.00, 2, 2, 1, ''),
(15, 1, 1, 4, 17, '2020-06-20', 18.00, 2, 2, 1, ''),
(16, 59, 1, 4, 12, '2020-06-18', 0.00, 3, 1, 1, ''),
(17, 59, 1, 4, 12, '2020-06-18', 0.00, 3, 1, 1, ''),
(18, 56, 1, 4, 5, '2020-06-20', 45.00, 2, 1, 1, ''),
(19, 56, 1, 4, 14, '2020-06-20', 45.00, 2, 1, 1, ''),
(20, 60, 1, 4, 13, '2020-06-19', 12.00, 1, 1, 1, ''),
(21, 54, 1, 4, 7, '2020-06-18', 20.00, 1, 1, 1, ''),
(24, 54, 1, 4, 9, '2020-06-19', 30.00, 1, 1, 1, ''),
(25, 54, 1, 4, 18, '2020-06-23', 30.00, 1, 1, 1, ''),
(26, 40, 1, 4, 10, '2020-06-17', 48.00, 2, 2, 1, ''),
(27, 40, 1, 4, 11, '2020-06-18', 48.00, 2, 2, 1, ''),
(28, 39, 1, 4, 3, '2020-06-17', 48.00, 2, 2, 1, ''),
(88, 1, 1, 4, 24, '2020-06-26', 4.00, 2, 2, 1, ''),
(118, 53, 1, 4, 6, '2020-06-26', 30.00, 1, 1, 1, ''),
(120, 37, 1, 4, 23, '2020-06-25', 48.00, 2, 2, 1, ''),
(121, 75, 1, 4, 14, '2020-06-23', 65.00, 2, 2, 1, ''),
(123, 77, 1, 4, 21, '2020-06-16', 65.00, 2, 2, 1, ''),
(125, 101, 1, 4, 19, '2020-06-24', 50.00, 2, 1, 1, ''),
(126, 103, 1, 4, 19, '2020-06-24', 50.00, 2, 1, 1, ''),
(127, 102, 1, 4, 25, '2020-06-25', 0.00, 3, 1, 1, ''),
(128, 103, 1, 4, 26, '2020-06-25', 25.00, 1, 1, 2, 'cambio de producto'),
(135, 3, 1, 4, 27, '2020-06-26', 0.00, 2, 2, 1, ''),
(137, 3, 1, 4, 19, '2020-06-24', 18.00, 2, 1, 1, ''),
(176, 82, 1, 4, 19, '2020-06-24', 30.00, 2, 1, 1, ''),
(177, 86, 1, 4, 19, '2020-06-24', 30.00, 2, 1, 1, ''),
(178, 82, 1, 4, 22, '2020-06-23', 15.00, 1, 1, 1, ''),
(179, 83, 1, 4, 30, '2020-06-26', 15.00, 1, 1, 1, ''),
(189, 50, 1, 4, 20, '2020-06-28', 32.00, 1, 1, 1, ''),
(193, 88, 1, 4, 19, '2020-06-24', 30.00, 2, 1, 1, ''),
(194, 114, 1, 4, 32, '2020-06-29', 0.00, 3, 1, 1, ''),
(195, 128, 1, 4, 33, '2020-06-29', 0.00, 3, 1, 1, ''),
(239, 75, 1, 4, 46, '2020-01-07', 0.00, 2, 2, 1, ''),
(240, 130, 1, 4, 26, '2020-01-07', 25.00, 1, 1, 1, ''),
(241, 138, 2, 4, 19, '2020-01-07', 0.00, 2, 1, 1, ''),
(242, 139, 1, 4, 19, '2020-01-07', 0.00, 2, 1, 1, ''),
(243, 141, 1, 4, 28, '2020-01-07', 0.00, 2, 1, 1, ''),
(244, 140, 1, 4, 29, '2020-01-07', 0.00, 3, 1, 1, ''),
(245, 147, 1, 4, 2, '2020-01-07', 0.00, 3, 1, 1, ''),
(246, 141, 1, 4, 45, '2020-01-07', 0.00, 3, 1, 1, ''),
(247, 138, 1, 4, 33, '2020-01-07', 0.00, 2, 1, 1, ''),
(248, 140, 1, 4, 33, '2020-01-07', 0.00, 2, 1, 1, ''),
(249, 142, 1, 4, 33, '2020-01-07', 0.00, 2, 1, 1, ''),
(250, 143, 1, 4, 33, '2020-01-07', 0.00, 2, 1, 1, ''),
(251, 144, 1, 4, 33, '2020-01-07', 0.00, 3, 1, 1, ''),
(252, 145, 1, 4, 33, '2020-01-07', 0.00, 3, 1, 1, ''),
(253, 146, 1, 4, 33, '2020-01-07', 0.00, 3, 1, 1, ''),
(254, 147, 1, 4, 33, '2020-01-07', 0.00, 3, 1, 1, ''),
(255, 148, 1, 4, 33, '2020-01-07', 0.00, 3, 1, 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `nombre_producto` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL,
  `id_talla` int(11) NOT NULL,
  `id_color` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `precio` float(5,2) NOT NULL,
  `descripcion_producto` varchar(100) COLLATE ucs2_spanish2_ci NOT NULL,
  `imagen` blob NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 1,
  `motivo` varchar(100) COLLATE ucs2_spanish2_ci NOT NULL DEFAULT '----',
  `fecha_ingreso` timestamp NOT NULL DEFAULT current_timestamp(),
  `ingreso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `id_proveedor`, `id_categoria`, `nombre_producto`, `id_talla`, `id_color`, `stock`, `precio`, `descripcion_producto`, `imagen`, `estado`, `motivo`, `fecha_ingreso`, `ingreso`) VALUES
(1, 2, 5, 'Platitos Biodegradables ', 1, 8, 2, 18.00, 'Producto nuevo', '', 1, '', '2020-06-21 23:13:35', 0),
(2, 2, 5, 'Platitos Biodegradables ', 1, 17, 0, 18.00, 'Producto nuevo', '', 1, '', '2020-06-21 23:13:28', 0),
(3, 2, 5, 'Platitos Biodegradables ', 1, 18, 1, 18.00, 'Producto nuevo', '', 1, '', '2020-06-21 23:13:39', 0),
(36, 1, 2, 'Poleras Urbanas (Mickey)', 3, 14, 0, 48.00, 'Material: algodón afranelado', '', 1, '', '2020-06-24 01:38:28', 0),
(37, 1, 2, 'Poleras Urbanas (Hello Kity)', 3, 8, 0, 48.00, 'Material: algodón afranelado', '', 1, '', '2020-06-24 01:38:28', 0),
(38, 1, 2, 'Polera Urbana (Mickey)', 4, 14, 1, 48.00, 'Material: algodón afranelado', '', 1, '', '2020-06-24 01:38:28', 0),
(39, 1, 2, 'Polera Urbana (Minie)', 4, 19, 0, 48.00, 'Material: algodón afranelado', '', 1, '', '2020-06-24 01:38:28', 0),
(40, 1, 2, 'Polera Urbana (Minie)', 5, 19, 0, 48.00, 'Material: algodón afranelado', '', 1, '', '2020-06-24 01:38:28', 0),
(41, 1, 2, 'Polera Urbana (Hello Kitty)', 5, 18, 1, 48.00, 'Material: algodón afranelado', '', 1, '', '2020-06-24 01:38:28', 0),
(49, 4, 2, 'Conjunto Osito', 4, 2, 0, 55.00, 'Material : Micro polar anti-alérgico con mangas en algodón rib\r\nBordado con aplicaciones en el pecho', '', 1, '', '2020-06-24 01:55:17', 0),
(50, 4, 2, 'Conjunto Osito', 5, 12, 0, 55.00, 'Material : Micro polar anti-alérgico con mangas en algodón rib\r\nBordado con aplicaciones en el pecho', '', 1, '', '2020-06-24 01:55:17', 0),
(51, 4, 2, 'Conjunto Osito', 5, 8, 1, 55.00, 'Material : Micro polar anti-alérgico con mangas en algodón rib\r\nBordado con aplicaciones en el pecho', '', 1, '', '2020-06-24 01:55:17', 0),
(53, 4, 2, 'Conjunto Osito', 5, 2, 0, 55.00, 'Material : Micro polar anti-alérgico con mangas en algodón rib\r\nBordado con aplicaciones en el pecho', '', 1, '', '2020-06-24 01:55:17', 0),
(54, 4, 2, 'Conjunto Osito', 6, 12, 0, 55.00, 'Material : Micro polar anti-alérgico con mangas en algodón rib\r\nBordado con aplicaciones en el pecho', '', 1, '', '2020-06-24 01:55:17', 0),
(55, 3, 3, 'Chompas (Poli-Vestido)', 19, 20, 0, 45.00, 'Hilo Grueso', '', 1, '', '2020-06-24 02:03:26', 0),
(56, 3, 3, 'Chompas (Poli-Vestido)', 19, 3, 0, 45.00, 'Hilo Grueso ', '', 1, '', '2020-06-24 02:03:26', 0),
(57, 3, 3, 'Chompas (Manga Murcielago)', 19, 20, 0, 45.00, 'Hilo Grueso ', '', 1, '', '2020-06-24 02:03:26', 0),
(58, 3, 3, 'Chompas (Manga Murcielago)', 19, 13, 0, 45.00, 'Hilo Grueso ', '', 1, '', '2020-06-24 02:03:26', 0),
(59, 3, 3, 'Chompas (Manga Murcielago)', 19, 27, 1, 45.00, 'Hilo Grueso ', '', 1, '', '2020-06-24 02:03:26', 0),
(60, 3, 3, 'Chompas (Cruzada)', 19, 20, 0, 45.00, 'Hilo Grueso ', '', 1, '', '2020-06-24 02:03:26', 0),
(75, 5, 3, 'Conjunto Jogger', 19, 19, 0, 65.00, 'Tela fresh', '', 1, '', '2020-06-24 15:56:16', 0),
(76, 5, 3, 'Conjunto Jogger', 19, 26, 0, 65.00, 'Tela fresh', '', 1, '', '2020-06-24 15:56:48', 0),
(77, 5, 3, 'Conjunto Jogger', 19, 7, 0, 65.00, 'Tela fresh', '', 1, '', '2020-06-24 15:57:16', 0),
(82, 7, 82, 'Mochila (MONITO)', 1, 1, 0, 30.00, 'Material: Felpa ', '', 1, '', '2020-06-25 03:28:54', 0),
(83, 7, 82, 'Mochila (LEÓN)', 1, 1, 0, 30.00, 'Material: Felpa ', '', 1, '', '2020-06-25 03:29:24', 0),
(84, 7, 82, 'Mochila (GALLINITA)', 1, 1, 1, 30.00, 'Material: Felpa ', '', 1, '', '2020-06-25 03:29:52', 0),
(85, 7, 82, 'Mochila (CEBRA)', 1, 1, 1, 30.00, 'Material: Felpa ', '', 1, '', '2020-06-25 03:30:20', 0),
(86, 7, 82, 'Mochila (JIRAFA)', 1, 1, 0, 30.00, 'Material: Felpa ', '', 1, '', '2020-06-25 03:30:39', 0),
(87, 7, 82, 'Mochila (TIBURÓN)', 1, 1, 1, 30.00, 'Material: Felpa ', '', 1, '', '2020-06-25 03:31:01', 0),
(88, 7, 82, 'Mochila (ELEFANTE)', 1, 1, 0, 30.00, 'Material: Felpa ', '', 1, '', '2020-06-25 03:31:39', 0),
(89, 8, 5, 'Colcha (MONO)', 1, 6, 0, 50.00, 'MATERIAL : PIEL DE CARNERO', '', 1, '', '2020-06-25 04:19:07', 0),
(90, 8, 5, 'Colcha (STICH)', 1, 3, 0, 50.00, 'MATERIAL : PIEL DE CARNERO', '', 1, '', '2020-06-25 04:20:30', 0),
(91, 8, 5, 'Colcha (MINNIE)', 1, 8, 1, 50.00, 'MATERIAL : PIEL DE CARNERO', '', 1, '', '2020-06-25 04:21:39', 0),
(92, 8, 5, 'Colcha (MINNIE)', 1, 11, 0, 50.00, 'MATERIAL : PIEL DE CARNERO', '', 1, '', '2020-06-25 04:22:13', 0),
(94, 8, 5, 'Colcha (HIPOPOTAMO)', 1, 11, 1, 50.00, 'MATERIAL : PIEL DE CARNERO', '', 1, '', '2020-06-25 04:23:15', 0),
(101, 2, 2, 'Mantas (ELEFANTE)', 1, 1, 0, 50.00, 'Material: Felpa', '', 1, '', '2020-06-26 23:33:53', 0),
(102, 2, 2, 'Mantas (ELEFANTA)', 1, 1, 0, 50.00, 'Material: Felpa ', '', 1, '', '2020-06-26 23:34:27', 0),
(103, 2, 2, 'Mantas (CABALLITO)', 1, 1, 0, 50.00, 'Material: Felpa ', '', 1, '', '2020-06-26 23:34:50', 0),
(104, 2, 2, 'Mantas (GATITO)', 1, 1, 1, 50.00, 'Material: Felpa ', '', 1, '', '2020-06-26 23:35:05', 0),
(105, 2, 2, 'Mantas (OSITA)', 1, 1, 1, 50.00, 'Material: Felpa ', '', 1, '', '2020-06-26 23:35:27', 0),
(107, 6, 4, 'Camisas M/Larga', 11, 7, 1, 40.00, 'Tela de vestir', 0x576861747341707020496d61676520323032302d30362d323720617420342e33322e343620504d2e6a706567, 1, '', '2020-06-27 21:33:07', 0),
(108, 6, 1, 'Camisa M/Corta', 13, 14, 1, 25.00, '--', 0x576861747341707020496d61676520323032302d30362d323720617420342e33352e303020504d2e6a706567, 1, '', '2020-06-27 21:35:13', 0),
(109, 6, 1, 'Polo con cuello', 13, 11, 1, 39.00, '', 0x576861747341707020496d61676520323032302d30362d323720617420342e33362e313620504d2e6a706567, 1, '', '2020-06-27 21:36:43', 0),
(110, 6, 1, 'Polo Estampado (Led Zelpellin)', 13, 7, 1, 35.00, 'Material: 100% Algodón', 0x576861747341707020496d61676520323032302d30362d323720617420342e33362e313620504d202831292e6a706567, 1, '', '2020-06-27 21:37:47', 0),
(111, 6, 1, 'Jean Clásico', 18, 3, 1, 40.00, '', 0x576861747341707020496d61676520323032302d30362d323720617420342e33362e313620504d202832292e6a706567, 1, '', '2020-06-27 21:38:35', 0),
(112, 6, 1, 'Pantalon drill', 17, 23, 1, 69.00, '', 0x576861747341707020496d61676520323032302d30362d323720617420342e33362e313720504d2e6a706567, 1, '', '2020-06-27 21:46:02', 0),
(113, 6, 1, 'Pantalon drill', 17, 25, 1, 69.00, 'Material: Drill', 0x576861747341707020496d61676520323032302d30362d323720617420342e33362e313720504d2e6a706567, 1, '', '2020-06-27 21:46:38', 0),
(114, 6, 5, 'Colcha(MINNIE)', 1, 19, 0, 50.00, '', '', 1, '', '2020-06-24 23:27:33', 0),
(115, 6, 5, 'Zapatitos para bebé RN', 20, 8, 3, 10.00, 'Tejidos a mano con lana antialergica', 0x576861747341707020496d61676520323032302d30362d32382061742031322e33302e353920414d2e6a706567, 1, '', '2020-06-28 05:31:41', 0),
(116, 6, 5, 'Gorrito para bebé 6 mes +', 1, 8, 1, 20.00, 'Tejidos a mano con lana antialergica', 0x576861747341707020496d61676520323032302d30362d32382061742031322e33322e333920414d2e6a706567, 1, '', '2020-06-28 05:33:29', 0),
(117, 6, 2, 'Pijama Bebo Polar', 27, 14, 1, 50.00, 'Material: 100% Poliester', 0x576861747341707020496d61676520323032302d30362d32382061742031322e33392e333220414d2e6a706567, 1, '', '2020-06-28 05:52:41', 0),
(118, 6, 5, 'Zapatitos para bebé', 22, 1, 2, 10.00, 'Tejidos a mano con lana antialergica', 0x576861747341707020496d61676520323032302d30362d32382061742031322e35392e303220414d2e6a706567, 1, '', '2020-06-28 05:59:28', 0),
(119, 6, 1, 'PIjama Baby Circus', 22, 6, 1, 50.00, 'Material: 100% Algodón', 0x576861747341707020496d61676520323032302d30362d323820617420312e30342e303720414d202831292e6a706567, 1, '', '2020-06-28 06:06:46', 0),
(125, 6, 1, 'Polo manga larga estampado', 22, 14, 1, 20.00, 'Material: 100% algodon', 0x576861747341707020496d61676520323032302d30362d323820617420312e30342e303720414d2e6a706567, 1, 'mal info', '2020-06-29 04:13:59', 0),
(128, 7, 82, 'Mochila (ABEJITA)', 1, 1, 0, 30.00, 'Material: Felpa ', '', 1, '----', '2020-06-29 21:33:17', 0),
(130, 2, 2, 'Mantas (OSITO)', 1, 1, 0, 50.00, 'Material: Felpa ', '', 1, '----', '2020-07-01 04:25:45', 0),
(131, 10, 2, 'Jogger niños', 4, 4, 1, 15.00, 'Material : algodon afranelado', '', 1, '----', '2020-07-01 04:47:22', 0),
(132, 10, 2, 'Jogger niños', 4, 9, 1, 15.00, 'Material : algodon afranelado', '', 1, '----', '2020-07-01 04:48:38', 0),
(133, 10, 2, 'Jogger niños', 4, 17, 1, 15.00, 'Material : algodon afranelado', '', 1, '----', '2020-07-01 04:49:48', 0),
(134, 10, 2, 'Jogger niños', 5, 15, 1, 15.00, 'Material : algodon afranelado', '', 1, '----', '2020-07-01 04:54:00', 0),
(135, 10, 2, 'Jogger niños', 5, 7, 1, 15.00, 'Material : algodon afranelado', '', 1, '----', '2020-07-01 04:54:35', 0),
(136, 10, 2, 'Jogger niños', 6, 9, 1, 15.00, 'Material : algodon afranelado', '', 1, '----', '2020-07-01 04:55:14', 0),
(137, 10, 2, 'Jogger niños', 7, 4, 1, 15.00, 'Material : algodon afranelado', '', 1, '----', '2020-07-01 04:55:44', 0),
(138, 9, 1, 'Bodys (Alianza Lima)', 2, 6, 0, 25.00, 'Material : Algodon Pima', '', 1, '----', '2020-07-01 05:06:57', 0),
(139, 9, 1, 'Bodys (Peru)', 2, 6, 0, 25.00, 'Material : Algodon Pima', '', 1, '----', '2020-07-01 05:07:41', 0),
(140, 9, 1, 'Bodys (batman)', 4, 7, 0, 25.00, 'Material : Algodon Pima', '', 1, '----', '2020-07-01 05:13:37', 0),
(141, 9, 1, 'Bodys (universitario )', 4, 18, 0, 25.00, 'Material : Algodon Pima', '', 1, '----', '2020-07-01 05:15:42', 0),
(142, 9, 1, 'Bodys (spiderman)', 4, 3, 0, 25.00, 'Material : Algodon Pima', '', 1, '----', '2020-07-01 05:16:24', 0),
(143, 9, 1, 'Bodys (hombre araña)', 4, 3, 0, 25.00, 'Material : Algodon Pima', '', 1, '----', '2020-07-01 05:16:59', 0),
(144, 9, 1, 'Bodys (capitan america)', 4, 3, 0, 25.00, 'Material : Algodon Pima', '', 1, '----', '2020-07-01 05:17:40', 0),
(145, 9, 1, 'Bodys (flash)', 4, 2, 0, 25.00, 'Material : Algodon Pima', '', 1, '----', '2020-07-01 05:18:15', 0),
(146, 9, 1, 'Bodys (superman)', 4, 3, 0, 25.00, 'Material : Algodon Pima', '', 1, '----', '2020-07-01 05:18:41', 0),
(147, 9, 1, 'Bodys (chapulin)', 4, 2, 0, 25.00, 'Material : Algodon Pima', '', 1, '----', '2020-07-01 05:19:24', 0),
(148, 9, 1, 'Bodys (version mejorada)', 5, 6, 0, 25.00, 'Material : Algodon Pima', '', 1, '----', '2020-07-01 05:20:05', 0),
(149, 9, 1, 'Bodys (alianza lima)', 4, 6, 0, 25.00, 'Material : Algodon Pima', '', 1, '----', '2020-07-01 05:20:45', 0),
(150, 9, 1, 'Bodys (universitario)', 2, 18, 0, 25.00, 'Material : Algodon Pima', '', 1, '----', '2020-07-01 05:23:31', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nombre_pr` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL,
  `direccion` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL,
  `telefono` varchar(9) COLLATE ucs2_spanish2_ci NOT NULL,
  `contacto` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 1,
  `motivo` varchar(100) COLLATE ucs2_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre_pr`, `direccion`, `telefono`, `contacto`, `estado`, `motivo`) VALUES
(1, 'CocoMiel', 'Trujillo', '981456815', 'No especificó', 1, ''),
(2, 'Baby Mat', 'Lima', '973752552', 'Vanesa Salinas', 1, ''),
(3, 'Cereza', 'Lima', '952734366', 'No especificó', 1, ''),
(4, 'El Closet de Antonella', 'Lima', '917832558', 'No especificó', 1, ''),
(5, 'El Closet de Mia', 'Lima', '912334456', '', 0, 'Mala Información de modelos y envíos a provincias'),
(6, 'Negocios Nelo', 'Lambayeque - Peru', '983991765', 'No especificó', 1, ''),
(7, 'MS Importaciones', 'Lima', '936066961', 'No especificó', 1, ''),
(8, 'Mi Chiki Baby', 'Lima', '959360608', 'Elidia Mansilla', 1, ''),
(9, 'Shirley Mallma', 'Santa Victoria - Chiclayo', '917836540', 'Shirley Mallma', 1, 'mala informacion'),
(10, 'Elizabeth Chavarria', 'Lima', '992332381', 'Elizabeth Chavarria', 1, ''),
(35, 'Baby World', 'Feria Balta Chiclayo ', '950070252', 'Karolina Martinez', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla`
--

CREATE TABLE `talla` (
  `id_talla` int(11) NOT NULL,
  `nombre_talla` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL,
  `Descripcion` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Volcado de datos para la tabla `talla`
--

INSERT INTO `talla` (`id_talla`, `nombre_talla`, `Descripcion`) VALUES
(1, 'No aplica', ''),
(2, 'Talla 1', '0 - 6 meses'),
(3, 'Talla 2', ''),
(4, 'Talla 4', ''),
(5, 'Talla 6', ''),
(6, 'Talla 8', ''),
(7, 'Talla 10', ''),
(8, 'Talla 12', ''),
(9, 'Talla 14', ''),
(10, 'Talla XS', ''),
(11, 'Talla S', ''),
(12, 'Talla M', ''),
(13, 'Talla L', ''),
(14, 'Talla XL', ''),
(15, 'Talla 26', ''),
(16, 'Talla 28', ''),
(17, 'Talla 30', ''),
(18, 'Talla 32', ''),
(19, 'Talla Estandar', ''),
(20, 'Talla RN', ''),
(21, '3 meses', ''),
(22, '6 meses', ''),
(23, '9 meses', ''),
(24, '12 meses', ''),
(25, '18 meses', ''),
(26, '24 meses', ''),
(27, '36 meses', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tip_usuario` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tip_usuario`, `nombre`, `descripcion`) VALUES
(1, 'Administrador', 'Para creacion y mantenimiento de sistema'),
(2, 'Usuario', 'Para utilizar el sistema');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL,
  `apellidos` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL,
  `user` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL,
  `contraseña` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL,
  `telefono` varchar(9) COLLATE ucs2_spanish2_ci NOT NULL,
  `id_tip_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `apellidos`, `user`, `contraseña`, `telefono`, `id_tip_usuario`) VALUES
(4, 'Karla ', 'Mejia Chamaya', 'kmejiachamaya', '586854ce3c9ff183ef6c8d62ce32345c', '998324488', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id_color`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD PRIMARY KEY (`id_detalle_pedido`),
  ADD KEY `id_pedido` (`id_pedido`);

--
-- Indices de la tabla `estado_pago`
--
ALTER TABLE `estado_pago`
  ADD PRIMARY KEY (`id_estado_pago`);

--
-- Indices de la tabla `estado_pedido`
--
ALTER TABLE `estado_pedido`
  ADD PRIMARY KEY (`id_estado_pedido`);

--
-- Indices de la tabla `estado_venta`
--
ALTER TABLE `estado_venta`
  ADD PRIMARY KEY (`id_estado_venta`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_estado_pedido` (`id_estado_pedido`),
  ADD KEY `id_estado_pago` (`id_estado_pago`),
  ADD KEY `id_estado_venta` (`id_estado_venta`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria` (`id_proveedor`),
  ADD KEY `id_proveedor` (`id_categoria`),
  ADD KEY `id_talla` (`id_talla`),
  ADD KEY `id_color` (`id_color`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `talla`
--
ALTER TABLE `talla`
  ADD PRIMARY KEY (`id_talla`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tip_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_tip_usuario` (`id_tip_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `color`
--
ALTER TABLE `color`
  MODIFY `id_color` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  MODIFY `id_detalle_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `estado_pago`
--
ALTER TABLE `estado_pago`
  MODIFY `id_estado_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estado_pedido`
--
ALTER TABLE `estado_pedido`
  MODIFY `id_estado_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estado_venta`
--
ALTER TABLE `estado_venta`
  MODIFY `id_estado_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `talla`
--
ALTER TABLE `talla`
  MODIFY `id_talla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tip_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedido_ibfk_3` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedido_ibfk_4` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedido_ibfk_5` FOREIGN KEY (`id_estado_pedido`) REFERENCES `estado_pedido` (`id_estado_pedido`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedido_ibfk_6` FOREIGN KEY (`id_estado_pago`) REFERENCES `estado_pago` (`id_estado_pago`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedido_ibfk_7` FOREIGN KEY (`id_estado_venta`) REFERENCES `estado_venta` (`id_estado_venta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_3` FOREIGN KEY (`id_talla`) REFERENCES `talla` (`id_talla`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_4` FOREIGN KEY (`id_color`) REFERENCES `color` (`id_color`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_5` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_6` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_tip_usuario`) REFERENCES `tipo_usuario` (`id_tip_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
