-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2020 a las 23:40:45
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `belttoinventory`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cities`
--

INSERT INTO `cities` (`id`, `country_id`, `state_id`, `city_name`, `created`, `modified`) VALUES
(1, 1, 1, 'Chennai', '2017-05-19 10:04:59', '2017-05-19 10:04:59'),
(2, 1, 1, 'Coimbatore', '2017-05-19 10:04:59', '2017-05-19 10:04:59'),
(3, 1, 1, 'Madurai', '2017-05-19 10:05:21', '2017-05-19 10:05:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `country_code` varchar(25) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `country_code`, `created`, `modified`) VALUES
(1, 'India', 'IND', '2017-05-19 09:57:22', '2017-05-19 09:57:22'),
(2, 'United states', 'US', '2017-05-19 09:57:22', '2017-05-19 09:57:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) DEFAULT NULL,
  `nombre_prod` varchar(50) DEFAULT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `talla` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `v_unitario` int(11) DEFAULT NULL,
  `iva` int(11) DEFAULT NULL,
  `id_almacen` int(11) DEFAULT NULL,
  `create_by` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `codigo`, `nombre_prod`, `modelo`, `talla`, `stock`, `v_unitario`, `iva`, `id_almacen`, `create_by`, `create_at`, `update_by`, `update_at`) VALUES
(1, 'FJ5605', 'Faja Termo Reductora', 'V25', 35, 30, 120000, 19, 1, 1, '2020-05-14 16:34:33', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `nombre` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Administrador', 'Administrador del Sistema'),
(2, 'Vendedor', 'Vendedor'),
(3, 'Comprador', 'Comprador del Sistema Belt');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `states`
--

INSERT INTO `states` (`id`, `country_id`, `state_name`, `created`, `modified`) VALUES
(1, 1, 'Tamil Nadu', '2017-05-19 10:01:39', '2017-05-19 10:01:39'),
(2, 1, 'Kerala', '2017-05-19 10:01:39', '2017-05-19 10:01:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stores`
--

CREATE TABLE `stores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `stores`
--

INSERT INTO `stores` (`id`, `nombre`, `direccion`, `telefono`) VALUES
(1, 'Prueba', 'asfdasdf', '123465');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `document` int(11) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `pass` varchar(300) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `doj` date NOT NULL,
  `salary` float(15,2) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1 COMMENT '1-active,0-inactive',
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `document`, `firstname`, `lastname`, `pass`, `email`, `gender`, `dob`, `address`, `country`, `state`, `city`, `doj`, `salary`, `status`, `created`, `modified`) VALUES
(1, 1144189937, 'suresh', 's', 'a4db58d1814063fc35447a2f8b01e6353432aefe', 'test@gmaial.com', 'male', '1989-05-08', '1234 five streetasd', '1', '1', '2', '2017-05-22', 40000.99, 1, '2017-05-18 19:39:46', '2020-05-10 02:24:35'),
(2, 0, 'test', '1', '0', 'test1@gmail.com', 'male', '1989-07-05', '123 four street', '1', '1', '3', '2017-06-20', 39999.99, 1, '2017-05-18 19:47:34', '2017-05-18 19:47:34'),
(3, 0, 'test', '2', '0', 'test2@gmail.com', 'male', '1989-05-09', 'tyetaserf', '1', '1', '1', '2017-05-09', 29999.99, 1, '2017-05-18 18:23:14', '2017-05-18 18:23:14'),
(4, 0, 'test', '2', '0', 'test2@gmail.com', 'male', '1989-05-09', 'tyetaserf', '1', '1', '1', '2017-05-09', 41999.99, 1, '2017-05-18 18:23:39', '2017-05-18 18:23:39'),
(5, 0, 'test', 'test', '0', 'test21@gmail.com', 'female', '1999-05-05', 'tyetaserf', '1', '1', '2', '2017-05-09', 45699.99, 0, '2017-05-18 18:24:21', '2020-05-10 04:57:08'),
(6, 0, 'first', 'last', '0', 'first@gmail.com', 'female', '1998-10-05', 'test', '1', '1', '1', '2017-05-21', 25000.56, 0, '2017-05-21 11:26:48', '2020-05-10 04:57:20'),
(7, 0, 'asd', 'asd', '0', '123@hotmail.com', 'female', '0000-00-00', '123', '1', '1', '2', '2000-01-23', 123.00, 1, '2020-05-10 02:23:36', '2020-05-10 02:24:15'),
(8, 0, 'asfd', 'dcxfv', '0', 'wq@hotmail.com', 'male', '0000-00-00', 'sz<asdasd', '1', '1', '1', '0000-00-00', 231231216.00, 1, '2020-05-10 04:46:59', '2020-05-10 04:46:59'),
(9, 0, 'asd', 'asd', '', 'asd@hotmail.com', 'male', '0000-00-00', 'asdasd', '1', '1', '1', '0000-00-00', 212121.00, 1, '2020-05-11 06:19:02', '2020-05-11 06:19:02'),
(11, 123456789, 'asd', 'asd', '450aea5ebad6dc562fcc28ac8d5f85272597c6a4', 'steven@hotmail.com', 'male', '0000-00-00', 'zxczxc', '1', '1', '1', '0000-00-00', 4001111.00, 1, '2020-05-13 03:52:04', '2020-05-13 03:52:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioroles`
--

CREATE TABLE `usuarioroles` (
  `id` int(11) UNSIGNED NOT NULL,
  `role_id` tinyint(3) UNSIGNED NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `activo` tinyint(4) NOT NULL,
  `opcional` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarioroles`
--

INSERT INTO `usuarioroles` (`id`, `role_id`, `usuario_id`, `activo`, `opcional`) VALUES
(1, 1, 1, 1, NULL),
(2, 3, 11, 1, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_almacen` (`id_almacen`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarioroles`
--
ALTER TABLE `usuarioroles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_roles_has_usuarios_roles` (`role_id`),
  ADD KEY `fk_roles_has_usuarios_usuarios1` (`usuario_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarioroles`
--
ALTER TABLE `usuarioroles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `id_almacen` FOREIGN KEY (`id_almacen`) REFERENCES `stores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarioroles`
--
ALTER TABLE `usuarioroles`
  ADD CONSTRAINT `usuarioroles_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `usuarioroles_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
