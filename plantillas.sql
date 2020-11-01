-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2020 a las 23:08:58
-- Versión del servidor: 10.3.14-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `plantillas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trafficker_pack`
--

CREATE TABLE `trafficker_pack` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_header` varchar(250) DEFAULT NULL,
  `text_header` varchar(100) NOT NULL,
  `url_video` varchar(250) CHARACTER SET utf8 COLLATE utf8_esperanto_ci NOT NULL,
  `textarea_1` varchar(250) NOT NULL,
  `textarea_2` varchar(250) NOT NULL,
  `textarea_product` varchar(500) NOT NULL,
  `img_product` varchar(250) DEFAULT NULL,
  `packImagen` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trafficker_pack`
--

INSERT INTO `trafficker_pack` (`id`, `image_header`, `text_header`, `url_video`, `textarea_1`, `textarea_2`, `textarea_product`, `img_product`, `packImagen`) VALUES
(2, NULL, 'Inserte texto', 'https://player.vimeo.com/video/446962586?embedparameter=value', 'Pulse aqui para insertar texto.\r\n                  ', '', '<p>Describa las ventajas del pack.</p>\r\n\r\n<ul>\r\n	<li>Nombre Producto 1</li>\r\n	<li>Nombre Producto 2</li>\r\n	<li>Nombre Produco 3</li>\r\n</ul>\r\n\r\n<p><strong>Producto1</strong><br />\r\nDescripci&oacute;n de las ventajas de cada producto</p>\r\n', NULL, 0),
(3, NULL, 'Inserte texto', 'fsdfdasfads', 'Pulse aqui para insertar texto.\r\n                  ', '', '<p>Describa las ventajas del pack.</p>\r\n\r\n<ul>\r\n	<li>Nombre Producto 1</li>\r\n	<li>Nombre Producto 2</li>\r\n	<li>Nombre Produco 3</li>\r\n</ul>\r\n\r\n<p><strong>Producto1</strong><br />\r\nDescripci&oacute;n de las ventajas de cada producto</p>\r\n', NULL, 0),
(4, NULL, 'Inserte texto', 'fasfsda', 'Pulse aqui para insertar texto.\r\n                  ', '', '<p>Describa las ventajas del pack.</p>\r\n\r\n<ul>\r\n	<li>Nombre Producto 1</li>\r\n	<li>Nombre Producto 2</li>\r\n	<li>Nombre Produco 3</li>\r\n</ul>\r\n\r\n<p><strong>Producto1</strong><br />\r\nDescripci&oacute;n de las ventajas de cada producto</p>\r\n', NULL, 0),
(5, NULL, 'Inserte texto', 'fasdfd', 'Pulse aqui para insertar texto.\r\n                  ', '', '<p>Describa las ventajas del pack.</p>\r\n\r\n<ul>\r\n	<li>Nombre Producto 1</li>\r\n	<li>Nombre Producto 2</li>\r\n	<li>Nombre Produco 3</li>\r\n</ul>\r\n\r\n<p><strong>Producto1</strong><br />\r\nDescripci&oacute;n de las ventajas de cada producto</p>\r\n', NULL, 0),
(6, NULL, 'Inserte texto', 'fdsfads', 'Pulse aqui para insertar texto.\r\n                  ', '', '<p>Describa las ventajas del pack.</p>\r\n\r\n<ul>\r\n	<li>Nombre Producto 1</li>\r\n	<li>Nombre Producto 2</li>\r\n	<li>Nombre Produco 3</li>\r\n</ul>\r\n\r\n<p><strong>Producto1</strong><br />\r\nDescripci&oacute;n de las ventajas de cada producto</p>\r\n', NULL, 0),
(7, NULL, 'Inserte texto', 'https://player.vimeo.com/video/446962586?embedparameter=value', 'Pulse aqui para insertar texto.\r\n                  ', '', '<p>Describa las ventajas del pack.</p>\r\n\r\n<ul>\r\n	<li>Nombre Producto 1</li>\r\n	<li>Nombre Producto 2</li>\r\n	<li>Nombre Produco 3</li>\r\n</ul>\r\n\r\n<p><strong>Producto1</strong><br />\r\nDescripci&oacute;n de las ventajas de cada producto</p>\r\n', NULL, 0),
(8, NULL, 'Inserte texto', 'fasdfasd', 'Pulse aqui para insertar texto.\r\n                  ', '', '<p>Describa las ventajas del pack.</p>\r\n\r\n<ul>\r\n	<li>Nombre Producto 1</li>\r\n	<li>Nombre Producto 2</li>\r\n	<li>Nombre Produco 3</li>\r\n</ul>\r\n\r\n<p><strong>Producto1</strong><br />\r\nDescripci&oacute;n de las ventajas de cada producto</p>\r\n', NULL, 0),
(9, 'img/packs/9/header.jpg', 'Inserte texto', 'https://player.vimeo.com/video/446962586?embedparameter=value', 'Pulse aqui para insertar texto.\r\n                  ', '', '<p>Describa las ventajas del pack.</p>\r\n\r\n<ul>\r\n	<li>Nombre Producto 1</li>\r\n	<li>Nombre Producto 2</li>\r\n	<li>Nombre Produco 3</li>\r\n</ul>\r\n\r\n<p><strong>Producto1</strong><br />\r\nDescripci&oacute;n de las ventajas de cada producto</p>\r\n', 'img/packs/9/product.jpg', 0),
(10, 'img/packs/10/header.jpg', 'Inserte textoss', 'pruebass', 'Pulse aqui para insertar texto prueba numero 10.\r\n                  ', 'Pulse aquÃ­ para insertar texto 10....', '<p>Describa las ventajas del pack.</p>\r\n\r\n<ul>\r\n	<li>Nombre Producto 11</li>\r\n	<li>Nombre Producto 2</li>\r\n	<li>Nombre Produco 3</li>\r\n	<li>esto es una prueba 10</li>\r\n</ul>\r\n\r\n<p><strong>Producto11</strong><br />\r\nDescripci&oacute;n de las ventajas de cada producto</p>\r\n', 'img/packs/10/product.jpg', 0),
(11, 'img/packs/11/header.jpg', 'Inserte texto', 'fasdfads', 'Pulse aqui para insertar texto.\r\n                  ', 'Pulse aquÃ­ para insertar texto', '<p>Describa las ventajas del pack.</p>\r\n\r\n<ul>\r\n	<li>Nombre Producto 1</li>\r\n	<li>Nombre Producto 2</li>\r\n	<li>Nombre Produco 3</li>\r\n</ul>\r\n\r\n<p><strong>Producto1</strong><br />\r\nDescripci&oacute;n de las ventajas de cada producto</p>\r\n', 'img/packs/11/product.jpg', 1),
(12, 'img/packs/12/header.jpg', 'Inserte texto', 'dddddddddddddddddddddddddd', 'Pulse aqui para insertar texto.\r\n                  ', 'Pulse aquÃ­ para insertar texto', '<p>Describa las ventajas del pack.</p>\r\n\r\n<ul>\r\n	<li>Nombre Producto 1</li>\r\n	<li>Nombre Producto 2</li>\r\n	<li>Nombre Produco 3</li>\r\n</ul>\r\n\r\n<p><strong>Producto1</strong><br />\r\nDescripci&oacute;n de las ventajas de cada producto</p>\r\n', 'img/packs/12/product.jpg', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `trafficker_pack`
--
ALTER TABLE `trafficker_pack`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `trafficker_pack`
--
ALTER TABLE `trafficker_pack`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
