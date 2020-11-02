-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2020 a las 18:43:32
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
  `text_header` varchar(100) NOT NULL,
  `video_url` varchar(250) CHARACTER SET utf8 COLLATE utf8_esperanto_ci NOT NULL,
  `first_description` varchar(250) NOT NULL,
  `second_description` varchar(250) NOT NULL,
  `product_description` varchar(500) NOT NULL,
  `picture_pack` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trafficker_pack`
--

INSERT INTO `trafficker_pack` (`id`, `text_header`, `video_url`, `first_description`, `second_description`, `product_description`, `picture_pack`) VALUES
(2, 'Inserte texto', 'https://player.vimeo.com/video/446962586?embedparameter=value', 'Pulse aqui para insertar texto.\r\n                  ', '', '<p>Describa las ventajas del pack.</p>\r\n\r\n<ul>\r\n	<li>Nombre Producto 1</li>\r\n	<li>Nombre Producto 2</li>\r\n	<li>Nombre Produco 3</li>\r\n</ul>\r\n\r\n<p><strong>Producto1</strong><br />\r\nDescripci&oacute;n de las ventajas de cada producto</p>\r\n', 0),
(3, 'Inserte texto', 'fsdfdasfads', 'Pulse aqui para insertar texto.\r\n                  ', '', '<p>Describa las ventajas del pack.</p>\r\n\r\n<ul>\r\n	<li>Nombre Producto 1</li>\r\n	<li>Nombre Producto 2</li>\r\n	<li>Nombre Produco 3</li>\r\n</ul>\r\n\r\n<p><strong>Producto1</strong><br />\r\nDescripci&oacute;n de las ventajas de cada producto</p>\r\n', 0),
(4, 'Inserte texto', 'fasfsda', 'Pulse aqui para insertar texto.\r\n                  ', '', '<p>Describa las ventajas del pack.</p>\r\n\r\n<ul>\r\n	<li>Nombre Producto 1</li>\r\n	<li>Nombre Producto 2</li>\r\n	<li>Nombre Produco 3</li>\r\n</ul>\r\n\r\n<p><strong>Producto1</strong><br />\r\nDescripci&oacute;n de las ventajas de cada producto</p>\r\n', 0),
(5, 'Inserte texto', 'fasdfd', 'Pulse aqui para insertar texto.\r\n                  ', '', '<p>Describa las ventajas del pack.</p>\r\n\r\n<ul>\r\n	<li>Nombre Producto 1</li>\r\n	<li>Nombre Producto 2</li>\r\n	<li>Nombre Produco 3</li>\r\n</ul>\r\n\r\n<p><strong>Producto1</strong><br />\r\nDescripci&oacute;n de las ventajas de cada producto</p>\r\n', 0),
(6, 'Inserte texto', 'fdsfads', 'Pulse aqui para insertar texto.\r\n                  ..', 'Pulse aquÃ­ para insertar textoss. \"hola\"', '<p>Describa las ventajas del pack.</p>\r\n\r\n<ul>\r\n	<li>Nombre Producto 1</li>\r\n	<li>Nombre Producto 2</li>\r\n	<li>Nombre Produco 3</li>\r\n</ul>\r\n\r\n<p><strong>Producto1</strong><br />\r\nDescripci&oacute;n de las ventajas de cada producto</p>\r\n', 0),
(7, 'Inserte texto', 'https://player.vimeo.com/video/446962586?embedparameter=value', 'Pulse aqui para insertar texto.\r\n                  ', '', '<p>Describa las ventajas del pack.</p>\r\n\r\n<ul>\r\n	<li>Nombre Producto 1</li>\r\n	<li>Nombre Producto 2</li>\r\n	<li>Nombre Produco 3</li>\r\n</ul>\r\n\r\n<p><strong>Producto1</strong><br />\r\nDescripci&oacute;n de las ventajas de cada producto</p>\r\n', 0),
(8, 'Inserte texto', 'fasdfasd', 'Pulse aqui para insertar texto.\r\n                  ', '', '<p>Describa las ventajas del pack.</p>\r\n\r\n<ul>\r\n	<li>Nombre Producto 1</li>\r\n	<li>Nombre Producto 2</li>\r\n	<li>Nombre Produco 3</li>\r\n</ul>\r\n\r\n<p><strong>Producto1</strong><br />\r\nDescripci&oacute;n de las ventajas de cada producto</p>\r\n', 0),
(9, 'Inserte texto', 'https://player.vimeo.com/video/446962586?embedparameter=value', 'Pulse aqui para insertar texto.\r\n                  ', '', '<p>Describa las ventajas del pack.</p>\r\n\r\n<ul>\r\n	<li>Nombre Producto 1</li>\r\n	<li>Nombre Producto 2</li>\r\n	<li>Nombre Produco 3</li>\r\n</ul>\r\n\r\n<p><strong>Producto1</strong><br />\r\nDescripci&oacute;n de las ventajas de cada producto</p>\r\n', 0),
(10, 'Inserte textoss', 'pruebass', 'Pulse aqui para insertar texto prueba numero 10.ss \"hola\"\r\n                  ..', 'Pulse aquÃ­ para insertar texto 10......', '', 0),
(11, 'Inserte texto', 'fasdfads', 'Pulse aqui para insertar texto.\r\n                  ..', 'Pulse aquÃ­ para insertar texto..', '<p>Describa las ventajas del pack.</p>\r\n\r\n<ul>\r\n	<li>Nombre Producto 1</li>\r\n	<li>Nombre Producto 2</li>\r\n	<li>Nombre Produco 3</li>\r\n</ul>\r\n\r\n<p><strong>Producto1</strong><br />\r\nDescripci&oacute;n de las ventajas de cada producto</p>\r\n', 1),
(12, 'Inserte texto', 'dddddddddddddddddddddddddd', 'Pulse aqui para insertar texto.\r\n                  ', 'Pulse aquÃ­ para insertar texto', '<p>Describa las ventajas del pack.</p>\r\n\r\n<ul>\r\n	<li>Nombre Producto 1</li>\r\n	<li>Nombre Producto 2</li>\r\n	<li>Nombre Produco 3</li>\r\n</ul>\r\n\r\n<p><strong>Producto1</strong><br />\r\nDescripci&oacute;n de las ventajas de cada producto</p>\r\n', 0),
(13, 'Inserte texto', 'iiiiiiiiiiiiiiiiiii', 'Pulse aqui para insertar texto.2222\r\n                     ', 'Pulse aquÃ­ para insertar texto', '<p>Describa las ventajas del pack.</p>\r\n\r\n<ul>\r\n	<li>Nombre Producto 1</li>\r\n	<li>Nombre Producto 2</li>\r\n	<li>Nombre Produco 3</li>\r\n</ul>\r\n\r\n<p><strong>Producto1</strong><br />\r\nDescripci&oacute;n de las ventajas de cada producto</p>\r\n', 0),
(14, 'Inserte texto', 'aaaaaa', 'Pulse aqui para insertar texto.\r\n                     ', 'Pulse aquÃ­ para insertar texto', '<p>Describa las ventajas del pack.</p>\r\n\r\n<ul>\r\n	<li>Nombre Producto 1</li>\r\n	<li>Nombre Producto 2</li>\r\n	<li>Nombre Produco 3</li>\r\n</ul>\r\n\r\n<p><strong>Producto1</strong><br />\r\nDescripci&oacute;n de las ventajas de cada producto</p>\r\n', 0),
(15, 'Inserte texto', '\'hola\' \"hola\"', '', 'Pulse aquÃ­ para insertar texto.', '<p>Describa las ventajas del pack.</p>\r\n\r\n<ul>\r\n	<li>Nombre Producto 1</li>\r\n	<li>Nombre Producto 2</li>\r\n	<li>Nombre Produco 3</li>\r\n</ul>\r\n\r\n<p><strong>Producto1</strong><br />\r\nDescripci&oacute;n de las ventajas de cada producto</p>\r\n', 0),
(16, 'Inserte textos89', 'hols \'jajaj\' \"prueba\"', 'Pulse aqui para insertar texto. \"hola\" 1\r\n                     ..........', 'Pulse aquÃ­ para insertar texto \'adios\'..........', '<p>Describa las ventajas del pack.</p>\r\n\r\n<ul>\r\n	<li>Nombre Producto 1</li>\r\n	<li>Nombre Producto 2</li>\r\n	<li>Nombre Produco 3</li>\r\n	<li>nuevo producto &quot;hola&quot;</li>\r\n</ul>\r\n\r\n<p><strong>Producto1</strong><br />\r\nDescripci&oacute;n de las ventajas de cada producto</p>\r\n', 0);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
