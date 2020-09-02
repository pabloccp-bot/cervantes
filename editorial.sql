-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 30-08-2020 a las 18:03:02
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `editorial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_user` varchar(40) NOT NULL,
  `admin_clave` varchar(32) NOT NULL,
  `admin_estado` int(1) NOT NULL DEFAULT 1,
  `admin_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_user`, `admin_clave`, `admin_estado`, `admin_timestamp`) VALUES
(1, 'admin', '80177534a0c99a7e3645b52f2027a48b', 1, '2019-12-07 14:33:19'),
(2, 'pablo', '202cb962ac59075b964b07152d234b70', 1, '2020-01-12 20:00:32'),
(3, 'admin2', 'adm123', 1, '2020-01-12 20:02:41'),
(5, 'dennis', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2020-01-18 12:51:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_titulo` varchar(120) DEFAULT NULL,
  `banner_imagen` varchar(120) NOT NULL,
  `banner_descripcion` text DEFAULT NULL,
  `banner_status` int(1) NOT NULL DEFAULT 1,
  `banner_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_titulo`, `banner_imagen`, `banner_descripcion`, `banner_status`, `banner_timestamp`) VALUES
(5, 'La lectura es un acto de creaciÃ³n permanente', '1576955660.jpg', 'Contamos con los mejores libros, amplia Variedad...', 1, '2019-12-17 00:06:10'),
(7, '#Somos', '1578693899.jpg', 'Un Planeta de Libros', 1, '2019-12-21 19:11:05'),
(9, 'Todo Enero', '1578693649.jpg', 'Contamos con el 50% de descuento...\r\nApÃºrate!', 1, '2019-12-21 21:46:59'),
(19, 'test1', '1579348273.jpg', 'test', 1, '2020-01-18 11:50:15'),
(21, '20% de descuento.', '1579446007.jpg', '', 0, '2020-01-19 15:00:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `carrito_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `carrito_estado` tinyint(1) NOT NULL,
  `carrito_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito_detalle`
--

CREATE TABLE `carrito_detalle` (
  `detalle_id` int(11) NOT NULL,
  `carrito_id` int(11) NOT NULL,
  `libro_id` int(11) NOT NULL,
  `detalle_cantidad` int(11) NOT NULL,
  `detalle_precio` int(120) NOT NULL,
  `detalle_estado` tinyint(1) NOT NULL,
  `detalle_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `categoria_id` int(11) NOT NULL,
  `categoria_nombre` varchar(255) NOT NULL,
  `categoria_imagen` varchar(255) NOT NULL,
  `categoria_status` tinyint(1) NOT NULL DEFAULT 1,
  `categoria_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`categoria_id`, `categoria_nombre`, `categoria_imagen`, `categoria_status`, `categoria_timestamp`) VALUES
(1, 'Infantil', '1576545807.jpg', 1, '2019-12-14 14:29:39'),
(2, 'Estudiantes', '1576545790.jpg', 1, '2019-12-14 14:32:37'),
(3, 'Universitarios', '1576545772.jpg', 1, '2019-12-15 22:03:39'),
(4, 'Docentes', '1576545746.jpg', 1, '2019-12-17 00:49:55'),
(5, 'Romance', '1576545858.jpg', 1, '2019-12-17 01:24:18'),
(6, 'InterÃ©s General', '1576545906.jpg', 1, '2019-12-17 01:25:06'),
(15, 'Novelas', '1579464800.jpg', 0, '2020-01-19 20:13:20'),
(16, 'hghghghgh', '1590697381.png', 1, '2020-05-28 20:23:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `contacto_id` int(11) NOT NULL,
  `contacto_nombre` varchar(30) NOT NULL,
  `contacto_apellido` varchar(255) NOT NULL,
  `contacto_email` varchar(50) NOT NULL,
  `contacto_telefono` varchar(50) NOT NULL,
  `contacto_mensaje` text NOT NULL,
  `contacto_status` int(1) NOT NULL DEFAULT 1,
  `contacto_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`contacto_id`, `contacto_nombre`, `contacto_apellido`, `contacto_email`, `contacto_telefono`, `contacto_mensaje`, `contacto_status`, `contacto_timestamp`) VALUES
(1, 'Pablo', 'Caballero', 'caballeropablo6@gmail.com', '0982926826', 'Hola Como estan ', 1, '2019-12-18 00:04:05'),
(2, 'Pablo', 'caballero', 'info@estacionbahia.com.py', '0982926826', 'Hola', 1, '2019-12-18 00:30:18'),
(4, 'Lucia', 'Lucia', 'comunicaciones@copipunto.com.py', '0982926826', 'Hola como estan cual \r\nseria el precio del libro\r\nla odisea de homero', 1, '2019-12-18 00:39:05'),
(5, 'Lucia', 'Rios', 'lucia@gmail.com', '0985717700', 'Me interesa ese producto\r\na cuanto lo venden ?', 1, '2019-12-24 20:34:40'),
(6, 'roosana', 'caballero', 'rosimiki@gmail.com', '0981601015', 'Hola me interersa la oferta', 1, '2019-12-24 22:15:35'),
(7, 'paola', 'caballero', 'palola@gmail.com', '0982926826', 'me interersa tal libro', 1, '2019-12-24 22:23:56'),
(8, 'Natalia', 'Elizabeth', 'nelson@joseph.com.py', '0985717700', 'Quiero Trabajar con ustedes', 1, '2019-12-29 18:37:06'),
(10, 'Pablo', 'Caballero', 'udinesepablo@hotmal.com', '0983363331', 'Me gustarÃ­a que tengan mas ofertas', 1, '2020-01-02 12:38:16'),
(11, 'Jorge', 'Ayala', 'jorge.gomez@doral.com.py', '0985717700', 'Necesito que traigan el libro de la selva ', 1, '2020-01-04 13:35:11'),
(12, 'Pablo', 'caballero', 'info@estacionbahia.com.py', '0982926826', 'ass', 1, '2020-01-04 15:17:43'),
(13, 'd', 'Âºqdsd', 'tatiana@pani.com.py', 'dhdu', 'csd', 1, '2020-01-11 12:19:40'),
(14, 'wkjdhwj', 'jkhkj', 'takuareeresto@gmail.com', 'jhghj', 'hbh', 1, '2020-01-11 12:20:38'),
(15, 'mhb', 'jb', 'terminal@fiweex.com', 'twst', 'jghj', 1, '2020-01-11 12:21:20'),
(16, 'kjhjk', 'kjhjh', 'tatiana@pani.com.py', 'uyt', 'hgfg', 1, '2020-01-11 12:23:03'),
(17, 'utyu', 'bjk', 'terminal@fiweex.com', 'kuuu', 'kuyu', 1, '2020-01-11 12:29:25'),
(18, 'utyu', 'bjk', 'terminal@fiweex.com', 'kuuu', 'kuyu', 1, '2020-01-11 12:31:47'),
(19, 'kjgjk', 'kjhjhj', 'territoriochopp@gmail.com', '767', ',nkn', 1, '2020-01-11 12:37:50'),
(20, 'kjgjk', 'kjhjhj', 'territoriochopp@gmail.com', '767', ',nkn', 1, '2020-01-11 12:38:18'),
(21, 'Pablo', 'caballero', 'caballeropablo6@gmail.com', '098', '', 1, '2020-01-11 13:03:17'),
(22, 'Pablo', 'caballero', 'caballeropablo6@gmail.com', '0982926826', 'Hola', 1, '2020-01-11 13:03:34'),
(23, 'Pablo', 'caballero', 'comunicaciones@copipunto.com.py', '0982926826', 'Hola', 1, '2020-01-11 13:04:05'),
(24, 'Pablo', 'caballero', 'info@estacionbahia.com.py', '0982926826', 'sgd', 1, '2020-01-11 13:27:37'),
(25, 'Pablo', 'caballero', 'info@estacionbahia.com.py', '0982926826', 'hola', 1, '2020-01-11 14:29:46'),
(26, 'Lucia', 'Rios', 'lucia@gmail.com', '0985717700', 'Hola como que tal quiero saber si pueden conseguir el libro de harry Potter.', 1, '2020-01-12 14:31:13'),
(27, 'Paola', 'Lucia', 'lucia@gmail.com', '0982926826', 'hola quiero el libro de la Odisea de Homero', 1, '2020-01-13 03:38:58'),
(28, 'Dennis', 'Fretes ', 'denis@gmail.com', '0982926826', 'quiero el libro de Cervantes', 1, '2020-01-19 15:02:46'),
(29, 'Alba', 'Ruiz', 'albospino@hotmail.com', '0985717700', 'Hola quiero trabajar con ustedes', 1, '2020-01-22 00:06:30'),
(30, 'Dennis', 'Bareiro', 'denis@gmail.com', '0982926826', 'Hola quiero que  tengan mas libros de terror', 1, '2020-01-28 00:45:24'),
(31, 'Pablo', 'caballero', 'info@estacionbahia.com.py', '0982926826', 'hkjh', 1, '2020-01-28 01:24:51'),
(33, 'Re', 'ca', 'comunicaciones@copipunto.com.py', '0971993772', '', 1, '2020-05-08 13:07:58'),
(34, 'Au', 'gusto', 'info@estacionbahia.com.py', '0984330784', '', 1, '2020-05-08 13:10:21'),
(35, 'Daniel', 'Rios', 'dani@gmail.com', '0971993772', 'Hola este es un mensaje de prueba', 1, '2020-05-19 04:51:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `libro_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `libro_titulo` text NOT NULL,
  `libro_autor` text DEFAULT NULL,
  `libro_imagen` varchar(255) NOT NULL,
  `libro_sinopsis` text DEFAULT NULL,
  `libro_precio` varchar(255) NOT NULL,
  `libro_oferta` tinyint(1) DEFAULT 0,
  `libro_preciooferta` varchar(255) DEFAULT NULL,
  `libro_pagina` int(11) DEFAULT NULL,
  `libro_novedad` int(1) DEFAULT NULL,
  `libro_proximamente` tinyint(1) DEFAULT 0,
  `libro_visita` int(11) NOT NULL,
  `libro_status` int(1) NOT NULL DEFAULT 1,
  `libro_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`libro_id`, `categoria_id`, `libro_titulo`, `libro_autor`, `libro_imagen`, `libro_sinopsis`, `libro_precio`, `libro_oferta`, `libro_preciooferta`, `libro_pagina`, `libro_novedad`, `libro_proximamente`, `libro_visita`, `libro_status`, `libro_timestamp`) VALUES
(3, 6, 'Horrores del Escalpelo', 'Daniel Mares', '1576976282.jpg', '', '150', 1, '100', 150, 0, 1, 9, 1, '2019-12-14 13:31:23'),
(7, 1, 'El Libro de la Selva', 'Arturo Ruiz', '1576967000.jpg', '', '300.000 ', 0, '250.000 ', 150, 1, 0, 15, 1, '2019-12-14 14:00:31'),
(8, 4, 'Los Hombres del Norte', 'Jhon Ariel', '1576966858.jpg', '', '300.000 ', 1, '100.000', 300, 1, 0, 9, 1, '2019-12-14 14:35:57'),
(11, 1, 'La Odisea de Homero', 'Rafael Mamos', '1576966731.jpg', '', '80.000', 1, '50.000', 10, 1, 0, 13, 1, '2019-12-15 03:16:54'),
(20, 2, 'Gespenst', 'Ignacio Hermoso', '1576966623.jpg', '', '200.000', 1, '100.000', 100, 1, 0, 10, 1, '2019-12-15 22:12:37'),
(22, 2, 'El Bosque Negro', 'Steve Hillard', '1576966471.jpg', '', '150.000', 1, '50.000', 300, 1, 0, 6, 1, '2019-12-17 01:27:52'),
(23, 1, 'Tesoros Inolvidables', 'Felipe Cervantes', '1576966244.jpg', 'Ignacio Hermoso es director de Responsabilidad Corporativa y Desarrollo Sostenible de Oilgas International,\r\nmultinacional del sector petroquÃ­mico con implantaciÃ³n en Europa, Ãfrica y Oriente Medio.\r\nUna maÃ±ana recibe una llamada desde Oilgas IbÃ©rica, su planta de distribuciÃ³n de refino en EspaÃ±a, y le comunican que se acaba\r\nde producir un accidente laboral en dicha planta; un empleado, que ha caÃ­do desde varios metros.\r\nHillard es director de Responsabilidad Corporativa y Desarrollo Sostenible de Oilgas International,\r\nmultinacional del sector petroquÃ­mico con implantaciÃ³n en Europa, Ãfrica y Oriente Medio.\r\nRecibe una llamada desde Oilgas IbÃ©rica, su planta de distribuciÃ³n de refino en EspaÃ±a, y le comunican que se acaba\r\nde producir un accidente laboral en dicha planta; un empleado, que ha caÃ­do desde varios metros.', '60.000', 0, '', 100, 1, 0, 27, 1, '2019-12-18 22:59:16'),
(24, 5, 'Soltera no es un estado sino una forma de ser', 'BÃ¡rbara Apluente', '1576976153.jpg', '', '', 0, '', 100, 0, 1, 9, 1, '2019-12-21 22:26:22'),
(25, 6, 'Codigo De Ladrones', 'Alba Palacio', '1576976776.jpg', 'Ignacio Hermoso es director de Responsabilidad Corporativa y Desarrollo Sostenible de Oilgas International,multinacional del sector petroquÃ­mico con implantaciÃ³n en Europa, Ãfrica y Oriente Medio.Una maÃ±ana recibe una llamada desde Oilgas IbÃ©rica, su planta de distribuciÃ³n de refino en EspaÃ±a, y le comunican que se acabade producir un accidente laboral en dicha planta; un empleado, que ha caÃ­do desde varios metros. Hillard es director de Responsabilidad Corporativa y Desarrollo Sostenible de Oilgas International,multinacional del sector petroquÃ­mico con implantaciÃ³n en Europa, Ãfrica y Oriente Medio.Recibe una llamada desde Oilgas IbÃ©rica, su planta de distribuciÃ³n de refino en EspaÃ±a, y le comunican que se acaba de producir un accidente laboral en dicha planta; un empleado, que ha caÃ­do desde varios metros.', '50.000', 1, '30.000', 100, 0, 1, 18, 1, '2019-12-22 00:09:41'),
(27, 3, 'Los Chicos del Ferrocaril', 'Jose Caceres ', '1577827640.jpg', '', '200.000', 1, '60.000', 300, 0, 0, 15, 1, '2019-12-31 21:27:20'),
(29, 1, 'Alicia En el Pais de las Maravillas', 'Luisa Caballero', '1577932629.jpg', '', '100.000', 1, '50.000', 80, 0, 0, 11, 1, '2020-01-02 02:37:09'),
(32, 6, 'test', 'Jorge', '1578145082.jpg', '', '100.000', 1, '50.000', 100, 0, 0, 1, 1, '2020-01-04 13:38:02'),
(33, 6, 'El Ferrocarril II', 'Tania Vera', '1578654916.jpg', '', '100.000', 1, '80.000', 130, 1, 0, 4, 1, '2020-01-07 12:30:20'),
(34, 6, 'El Ferrocarril  I', 'Tania Vera', '1578654781.jpg', 'Ignacio Hermoso es director de Responsabilidad Corporativa y Desarrollo Sostenible de Oilgas International,\r\nmultinacional del sector petroquÃ­mico con implantaciÃ³n en Europa, Ãfrica y Oriente Medio.\r\nUna maÃ±ana recibe una llamada desde Oilgas IbÃ©rica, su planta de distribuciÃ³n de refino en EspaÃ±a, y le comunican que se acaba\r\nde producir un accidente laboral en dicha planta; un empleado, que ha caÃ­do desde varios metros.\r\nHillard es director de Responsabilidad Corporativa y Desarrollo Sostenible de Oilgas International,\r\nmultinacional del sector petroquÃ­mico con implantaciÃ³n en Europa, Ãfrica y Oriente Medio.\r\nRecibe una llamada desde Oilgas IbÃ©rica, su planta de distribuciÃ³n de refino en EspaÃ±a.', '100.000', 1, '75.000', 100, 1, 0, 35, 1, '2020-01-10 11:13:01'),
(35, 6, 'Asuntos de Honor', 'Roger Gauto', '1578655832.jpg', '', '50.000', 1, '20.000', 150, 1, 0, 73, 1, '2020-01-10 11:30:32'),
(36, 6, 'prueba', 'Jorge', '1579349432.jpg', '', '100.000', 1, '50.000', 100, 0, 0, 0, 0, '2020-01-14 02:19:57'),
(38, 6, 'LlÃ©vate 3 libros al precio de una!!!', 'Carlos Baez', '1579634471.jpg', '', '150.000', 1, '100.000', 100, 1, 0, 7, 1, '2020-01-21 19:05:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promocion`
--

CREATE TABLE `promocion` (
  `promocion_id` int(11) NOT NULL,
  `promocion_email` varchar(120) NOT NULL,
  `promocion_status` int(1) NOT NULL DEFAULT 1,
  `promocion_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `promocion`
--

INSERT INTO `promocion` (`promocion_id`, `promocion_email`, `promocion_status`, `promocion_timestamp`) VALUES
(1, 'caballeropablo6@gmail.com', 1, '2020-01-12 14:09:44'),
(4, 'info@estacionbahia.com.py', 1, '2020-01-12 14:22:10'),
(5, 'ckim@cbtlparaguay.com', 1, '2020-01-12 14:26:06'),
(6, 'hola', 1, '2020-01-12 14:27:06'),
(7, 'caballeropablo6@gmail.com', 1, '2020-01-12 14:28:59'),
(8, 'rosanna.suarez@gmail.com', 1, '2020-01-12 14:29:56'),
(9, 'ckim@cbtlparaguay.com', 1, '2020-01-12 14:30:23'),
(10, 'mktgranvia@granviaelidgrupo.com.py', 1, '2020-01-12 17:56:39'),
(11, 'laura.barrios.py@gmail.com', 1, '2020-01-12 18:01:50'),
(12, 'burmei@burmei.com', 1, '2020-01-12 18:06:20'),
(13, 'mktgranvia@granviaelidgrupo.com.py', 1, '2020-01-12 19:08:53'),
(14, 'info@estacionbahia.com.py', 1, '2020-01-17 20:21:00'),
(15, 'denis@gmail.com', 1, '2020-01-19 15:03:04'),
(16, 'ckim@cbtlparaguay.com', 1, '2020-01-19 22:49:30'),
(17, 'hola@v', 1, '2020-01-22 00:07:02'),
(18, 'mktgranvia@granviaelidgrupo.com.py', 1, '2020-01-28 00:45:36'),
(19, 'burmei@burmei.com', 1, '2020-01-28 01:24:57'),
(20, 'burmei@burmei.com', 1, '2020-01-28 23:06:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario_nombre` varchar(120) NOT NULL,
  `usuario_email` varchar(80) NOT NULL,
  `usuario_clave` varchar(32) NOT NULL,
  `usuario_telefono` varchar(40) NOT NULL,
  `usuario_estado` tinyint(1) NOT NULL,
  `usuario_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario_nombre`, `usuario_email`, `usuario_clave`, `usuario_telefono`, `usuario_estado`, `usuario_timestamp`) VALUES
(1, 'pablo', 'caballeropablo6@gmail.com', '123456', '0982926826', 1, '2020-01-27 23:12:14'),
(2, 'Paola', 'prueba', '123', '0985717700', 1, '2020-01-27 23:17:12'),
(3, 'Lucia', 'pablo', '123', '0985717700', 1, '2020-01-27 23:26:11'),
(4, 'Paola', 'admin', '123', '0982926826', 1, '2020-01-27 23:28:24'),
(5, 'Pablo', 'admin', '123456', '0982926826', 1, '2020-01-27 23:29:48'),
(6, 'Pablo', 'admin', '123456', '0982926826', 1, '2020-01-27 23:35:12'),
(7, 'Pablo', 'admin', '123', '0982926826', 1, '2020-01-27 23:37:57'),
(8, 'Paola', 'admin', '123456', '0982926826', 1, '2020-01-27 23:43:20'),
(9, 'Pablo', 'admin', '123456', '0982926826', 1, '2020-01-27 23:44:13'),
(10, 'Pablo', 'admin', '123456', '0985717700', 1, '2020-01-27 23:46:10'),
(11, 'Hola', 'admin', '123456', '0982926826', 1, '2020-01-27 23:47:05'),
(12, 'Pablo', 'admin', '123', '0982926826', 1, '2020-01-27 23:48:13'),
(13, 'Pablo', 'admin', '123456', '0982926826', 1, '2020-01-27 23:50:03'),
(14, 'Pablo', 'admin', '123', '0982926826', 1, '2020-01-28 00:32:20'),
(15, 'Pablo', 'admin', '123', '0982926826', 1, '2020-01-28 00:32:59'),
(16, 'Lucia', 'b', '1', '1', 1, '2020-01-28 00:33:55'),
(18, 'Pablo', 'admin', '123', '0982926826', 1, '2020-01-28 00:35:23'),
(19, 'Pablo', 'caballeropablo6@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0982926826', 1, '2020-01-28 00:38:38'),
(24, 'Rossana', 'rosanna.suarez@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0982926826', 1, '2020-01-28 02:33:29'),
(25, 'z', 'ckim@cbtlparaguay.com', 'c4ca4238a0b923820dcc509a6f75849b', '0', 1, '2020-01-28 02:50:41'),
(26, 'Dennis', 'denis@gmail.com', '202cb962ac59075b964b07152d234b70', '0982926826', 1, '2020-01-28 02:52:24'),
(27, 'Pablo', 'info@estacionbahia.com.py', 'e10adc3949ba59abbe56e057f20f883e', '0985717700', 1, '2020-01-28 23:02:13'),
(28, 'Pablo', 'caballeropablo6@gmail.com', '202cb962ac59075b964b07152d234b70', '0985717700', 1, '2020-02-01 01:36:12'),
(29, 'Pablo', 'caballeropablo6@gmail.com', '202cb962ac59075b964b07152d234b70', '0982926826', 1, '2020-02-01 11:46:15'),
(30, 'Lucia', 'lucia@gmail.com', '202cb962ac59075b964b07152d234b70', '0985717700', 1, '2020-02-01 12:07:33'),
(31, 'Hola', 'ho-fiweex@factoriahotel.com.py', '202cb962ac59075b964b07152d234b70', '0982926826', 1, '2020-02-01 12:09:52'),
(32, 'Pablo22', 'info@estacionbahia.com.py', '202cb962ac59075b964b07152d234b70', '0981601015', 1, '2020-02-01 12:12:08'),
(33, 'Dennis', 'denis@gmail.com', '202cb962ac59075b964b07152d234b70', '0982926826', 1, '2020-02-01 12:21:20'),
(34, 'Dennis', 'denis@gmail.com', '202cb962ac59075b964b07152d234b70', '0981601015', 1, '2020-02-01 12:24:45'),
(35, 'Dennis', 'denis@gmail.com', '202cb962ac59075b964b07152d234b70', '0985717700', 1, '2020-02-01 12:26:29'),
(36, 'Pablo', 'caballeropablo6@gmail.com', '202cb962ac59075b964b07152d234b70', '0983363331', 1, '2020-02-28 17:58:39'),
(37, 'Roque', 'roque@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0985717700', 1, '2020-05-16 01:40:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `venta_id` int(11) NOT NULL,
  `venta_titulo` text NOT NULL,
  `venta_descripcion` text NOT NULL,
  `venta_imagen` varchar(500) NOT NULL,
  `venta_status` int(1) NOT NULL DEFAULT 1,
  `venta_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`venta_id`, `venta_titulo`, `venta_descripcion`, `venta_imagen`, `venta_status`, `venta_timestamp`) VALUES
(1, 'Stock', 'Ã‘emby,Luque,San Antonio\r\n', '1578148829.jpg', 1, '2019-12-17 22:35:20'),
(2, 'Los Jardines Express', 'San Antonio,\r\nMariano, \r\nÃ‘emby\r\n', '1576623235.jpg', 1, '2019-12-17 22:38:45'),
(3, 'Salemma', 'Luque, Fernando de la Mora, Villa Elisa', '1578148890.jpg', 1, '2019-12-18 22:58:04'),
(4, 'Gran Via', 'San Lorenzo', '1578142902.jpg', 1, '2019-12-18 23:16:32'),
(5, 'Super Seis', 'Los Laureles', '1578148910.jpg', 1, '2020-01-04 13:09:55'),
(6, 'EspaÃ±a', 'Mundi Mark', '1578151378.jpg', 1, '2020-01-04 15:22:58'),
(7, 'Pueblo', 'Lambare', '1578151436.jpg', 1, '2020-01-04 15:23:56'),
(8, 'Real', 'Centro, Villa Morra', '1578151499.jpg', 1, '2020-01-04 15:24:59');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`carrito_id`);

--
-- Indices de la tabla `carrito_detalle`
--
ALTER TABLE `carrito_detalle`
  ADD PRIMARY KEY (`detalle_id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`contacto_id`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`libro_id`);

--
-- Indices de la tabla `promocion`
--
ALTER TABLE `promocion`
  ADD PRIMARY KEY (`promocion_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`venta_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `carrito_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carrito_detalle`
--
ALTER TABLE `carrito_detalle`
  MODIFY `detalle_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `contacto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `libro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `promocion`
--
ALTER TABLE `promocion`
  MODIFY `promocion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `venta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
