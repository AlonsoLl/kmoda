-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2020 a las 20:37:25
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
-- Base de datos: `bd_tartufi`
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
(2, 'Ropa para niños', 'Modelos Variados', 1, ''),
(3, 'Ropa para Jóvenes', 'De todo', 1, ''),
(4, 'Ropa para Adultos', 'Muy Variado', 1, ''),
(5, 'Accesorios para bebé', 'Muy Variado', 1, '');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombres` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL,
  `apellidos` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL,
  `dni` int(8) NOT NULL,
  `direccion` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL,
  `correo` varchar(60) COLLATE ucs2_spanish2_ci DEFAULT 'No especifica',
  `telefono` varchar(9) COLLATE ucs2_spanish2_ci NOT NULL DEFAULT 'No tiene'
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombres`, `apellidos`, `dni`, `direccion`, `correo`, `telefono`) VALUES
(1, 'Amy', 'Sandoval', '' , '', 'No especifica', 'No tiene'),
(2, 'Alonso', 'Llanos Chozo', '71482914', 'Junin 457 - Lambayeque', 'alonsollanosch@gmail.com', '942944351'),
(3, 'Livi', 'Chamaya Moreno', '' , ' El Naranjo I - Tuman', 'No especifica', 'No tiene'),
(4, 'Leslie Kassandra', 'Palacios Chozo', '' , 'junin 457 - Lambayeque', 'No especifica', 'No tiene'),
(5, 'Zulema', 'Mejía Burga', '' , 'El Naranjo I - Tumán', 'No especifica', 'No tiene'),
(6, 'Tifany', 'Idrogo', '' , 'Calle las delicias - Sector Jarrin - Tumán', 'No especifica', 'No tiene'),
(7, 'Laura', 'Benavidez', '' , 'El vivero - Tumán', 'No especifica', 'No tiene'),
(8, 'Zarela', 'Bruno', '' , 'Block 10 1019 - Tumán', 'No especifica', 'No tiene'),
(9, 'Astrid', 'Tantajulca', '' , 'Tumán', 'No especifica', 'No tiene'),
(10, 'Noelia', 'Capuñay Mendoza', '' , 'Calle San Pedro - Túcume', 'No especifica', 'No tiene'),
(11, 'Carla', 'Arica', '' , 'Las casuarina - Tumán', 'No especifica', 'No tiene'),
(12, 'Miluska', 'Capuñay Mendoza', '' , 'Calle San Pedro - Túcume', 'No especifica', 'No tiene'),
(13, 'Maria de los Angeles', 'Galvez Estela', '' , 'Tumán', 'No especifica', 'No tiene'),
(14, 'Dilser', 'Mejia Burga', '' , 'Naranjo I 136 - Tumán', 'No especifica', 'No tiene');


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
(1, '-- No aplica --'),
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
(18, 'Crema');
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `id_detalle_pedido` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `descripcion` varchar(200) COLLATE ucs2_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL,
  `id_talla` int(11) NOT NULL,
  `id_color` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `precio` float(5,2) NOT NULL,
  `descripcion_producto` varchar(100) COLLATE ucs2_spanish2_ci NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 1,
  `motivo` varchar(100) COLLATE ucs2_spanish2_ci NOT NULL,
  `fecha_ingreso` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `id_proveedor`, `id_categoria`, `nombre`, `id_talla`, `id_color`, `stock`, `precio`, `descripcion_producto`, `estado`, `motivo`, `fecha_ingreso`) VALUES
(1, 2, 5, 'Platitos Biodegradables con cuchara y tenedor', 1, 8, 4, 18.00, 'Producto nuevo', 1, '', ''),
(2, 2, 5, 'Platitos Biodegradables con cuchara y tenedor', 1, 16, 4, 18.00, 'Producto nuevo', 1, '', ''),
(3, 2, 5, 'Platitos Biodegradables con cuchara y tenedor', 1, 18, 4, 18.00, 'Producto nuevo', 1, '', '');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nombre_pr` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL,
  `direccion` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL,
  `telefono` varchar(9) COLLATE ucs2_spanish2_ci NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre_pr`, `direccion`, `telefono`, `estado`) VALUES
(1, 'CocoMiel', 'Trujillo', '', 1),
(2, 'By Mat', 'Lima', '', 1),
(3, 'Cereza', 'Lima',  '', 1),
(4, 'El Closet de Antonella' , 'Lima', '', 1);

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
(1, '-- No aplica --', ''),
(2, 'Talla 0', '0 - 6 meses'),
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
(18, 'Talla 32', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL,
  `apellidos` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL,
  `user` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL,
  `contraseña` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL,
  `telefono` varchar(9) COLLATE ucs2_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellidos`, `user`, `contraseña`, `telefono`) VALUES
(1, 'Karla', 'Mejia Chamaya', 'kmejiachamaya', '586854ce3c9ff183ef6c8d62ce32345c', '998324488');

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
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD PRIMARY KEY (`id_detalle_pedido`),
  ADD KEY `id_pedido` (`id_pedido`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_cliente` (`id_cliente`);

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
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `color`
--
ALTER TABLE `color`
  MODIFY `id_color` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  MODIFY `id_detalle_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `talla`
--
ALTER TABLE `talla`
  MODIFY `id_talla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD CONSTRAINT `detalle_pedido_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedido_ibfk_3` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedido_ibfk_4` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_3` FOREIGN KEY (`id_talla`) REFERENCES `talla` (`id_talla`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_4` FOREIGN KEY (`id_color`) REFERENCES `color` (`id_color`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_5` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_6` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
