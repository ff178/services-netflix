-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-09-2016 a las 23:03:19
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `U-Mobile`
--
CREATE DATABASE IF NOT EXISTS `U-Mobile` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `U-Mobile`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Actividad`
--

CREATE TABLE `Actividad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `id_Curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Actividad`
--

INSERT INTO `Actividad` (`id`, `nombre`, `descripcion`, `fecha`, `hora`, `id_Curso`) VALUES
(1, 'Diagramas', 'Web III', '2016-03-15', '06:00:00', 1),
(2, 'Documento Petitorio', 'Legislacion', '2016-12-29', '04:00:00', 2),
(3, 'Planos', 'introduccion autocad', '2015-12-05', '02:00:00', 3),
(4, 'Teoria del color', 'Definiciones', '2014-11-09', '03:00:00', 4),
(5, 'Costos', 'introduccion', '2016-10-12', '09:00:00', 5),
(19, 'Prueba', 'Vamos!', '2016-08-18', '00:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cita`
--

CREATE TABLE `Cita` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `id_Usuario` int(11) NOT NULL,
  `id_Facultad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Cita`
--

INSERT INTO `Cita` (`id`, `titulo`, `descripcion`, `fecha`, `hora`, `estado`, `id_Usuario`, `id_Facultad`) VALUES
(1, 'Financiero', 'Matricula Extratemporanea', '2015-09-12', '03:00:00', 0, 1120506, 1),
(2, 'Mercadeo', 'Imagen', '2016-10-15', '12:30:00', 1, 1120036, 1),
(3, 'Administrativo', 'Cambio de grupo', '2016-11-11', '11:00:00', 1, 1120089, 2),
(4, 'Centro de idiomas', 'Curso de verano', '2016-11-09', '12:00:00', 1, 1125829, 3),
(5, 'Educacion Continua', 'Diplomado', '2015-05-12', '04:00:00', 0, 1134567, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Noticia`
--

CREATE TABLE `Noticia` (
  `id` int(11) NOT NULL,
  `titulo` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `id_TipoNoticia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Noticia`
--

INSERT INTO `Noticia` (`id`, `titulo`, `descripcion`, `fecha`, `hora`, `id_TipoNoticia`) VALUES
(1, 'Asis', 'Nuevo sistema Universitario', '2016-04-12', '09:00:00', 1),
(2, 'Torneo Interno', 'Interclases', '2016-05-13', '12:00:00', 2),
(3, 'Nuevo Diplomado', 'Diplomado en animacion 3d', '2016-03-12', '11:00:00', 1),
(4, 'Nueva Ruta del mio', 'Nueva ruta ', '2015-04-12', '10:00:00', 3),
(5, 'Cuenteros', 'Cuenteros', '2016-02-12', '12:00:00', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Notificacion`
--

CREATE TABLE `Notificacion` (
  `id` int(11) NOT NULL,
  `titulo` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `id_TipoNotificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci PACK_KEYS=0;

--
-- Volcado de datos para la tabla `Notificacion`
--

INSERT INTO `Notificacion` (`id`, `titulo`, `descripcion`, `fecha`, `hora`, `id_TipoNotificacion`) VALUES
(1, 'Cambio de Aula', 'Cambio de salon', '2016-04-13', '10:00:00', 1),
(2, 'Notas', 'Definitivas', '2016-06-21', '12:00:00', 2),
(3, 'Cancelacion de Clase', 'Cancelacion', '2016-12-12', '08:00:00', 5),
(4, 'Cambio de ruta', 'Nueva Ruta en el mio', '2016-05-11', '02:00:00', 4),
(5, 'Taller', 'Nuevo Actividad en moodle', '2016-03-12', '10:00:00', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Rol`
--

CREATE TABLE `Rol` (
  `id` int(11) NOT NULL,
  `nombre` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Rol`
--

INSERT INTO `Rol` (`id`, `nombre`) VALUES
(1, 'Estudiante'),
(2, 'Profesor'),
(3, 'Secretaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TipoNoticia`
--

CREATE TABLE `TipoNoticia` (
  `id` int(11) NOT NULL,
  `tipo` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `TipoNoticia`
--

INSERT INTO `TipoNoticia` (`id`, `tipo`) VALUES
(1, 'Academica'),
(2, 'Deportiva'),
(3, 'Informativa'),
(4, 'Diplomados'),
(5, 'Eventos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TipoNotificacion`
--

CREATE TABLE `TipoNotificacion` (
  `id` int(11) NOT NULL,
  `tipo` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `TipoNotificacion`
--

INSERT INTO `TipoNotificacion` (`id`, `tipo`) VALUES
(1, 'Cambios'),
(2, 'Novedades'),
(3, 'Actividad'),
(4, 'Noticia'),
(5, 'Cancelacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `id` int(11) NOT NULL,
  `id_Rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`id`, `id_Rol`) VALUES
(1120506, 1),
(1125829, 1),
(1120036, 2),
(1134567, 2),
(1120089, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario_has_Actividad`
--

CREATE TABLE `Usuario_has_Actividad` (
  `id_Usuario` int(11) NOT NULL,
  `id_Actividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Usuario_has_Actividad`
--

INSERT INTO `Usuario_has_Actividad` (`id_Usuario`, `id_Actividad`) VALUES
(1120036, 2),
(1120089, 4),
(1120506, 1),
(1125829, 5),
(1134567, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario_has_Notificacion`
--

CREATE TABLE `Usuario_has_Notificacion` (
  `id_Usuario` int(11) NOT NULL,
  `id_Notificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Usuario_has_Notificacion`
--

INSERT INTO `Usuario_has_Notificacion` (`id_Usuario`, `id_Notificacion`) VALUES
(1120036, 2),
(1120089, 5),
(1120506, 1),
(1125829, 3),
(1134567, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Actividad`
--
ALTER TABLE `Actividad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Cita`
--
ALTER TABLE `Cita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Cita_Usuario1_idx` (`id_Usuario`);

--
-- Indices de la tabla `Noticia`
--
ALTER TABLE `Noticia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Noticia_Tipo_Noticia1_idx` (`id_TipoNoticia`);

--
-- Indices de la tabla `Notificacion`
--
ALTER TABLE `Notificacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Notificacion_Tipo_Notificacion1_idx` (`id_TipoNotificacion`);

--
-- Indices de la tabla `Rol`
--
ALTER TABLE `Rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `TipoNoticia`
--
ALTER TABLE `TipoNoticia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `TipoNotificacion`
--
ALTER TABLE `TipoNotificacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Usuario_Rol_idx` (`id_Rol`);

--
-- Indices de la tabla `Usuario_has_Actividad`
--
ALTER TABLE `Usuario_has_Actividad`
  ADD PRIMARY KEY (`id_Usuario`,`id_Actividad`),
  ADD KEY `fk_Usuario_has_Actividad_Actividad1_idx` (`id_Actividad`),
  ADD KEY `fk_Usuario_has_Actividad_Usuario1_idx` (`id_Usuario`);

--
-- Indices de la tabla `Usuario_has_Notificacion`
--
ALTER TABLE `Usuario_has_Notificacion`
  ADD PRIMARY KEY (`id_Usuario`,`id_Notificacion`),
  ADD KEY `fk_Usuario_has_Notificacion_Notificacion1_idx` (`id_Notificacion`),
  ADD KEY `fk_Usuario_has_Notificacion_Usuario1_idx` (`id_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Actividad`
--
ALTER TABLE `Actividad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `Cita`
--
ALTER TABLE `Cita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `Noticia`
--
ALTER TABLE `Noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `Notificacion`
--
ALTER TABLE `Notificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `Rol`
--
ALTER TABLE `Rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `TipoNoticia`
--
ALTER TABLE `TipoNoticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `TipoNotificacion`
--
ALTER TABLE `TipoNotificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Cita`
--
ALTER TABLE `Cita`
  ADD CONSTRAINT `fk_Cita_Usuario1` FOREIGN KEY (`id_Usuario`) REFERENCES `Usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Noticia`
--
ALTER TABLE `Noticia`
  ADD CONSTRAINT `fk_Noticia_Tipo_Noticia1` FOREIGN KEY (`id_TipoNoticia`) REFERENCES `TipoNoticia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Notificacion`
--
ALTER TABLE `Notificacion`
  ADD CONSTRAINT `fk_Notificacion_Tipo_Notificacion1` FOREIGN KEY (`id_TipoNotificacion`) REFERENCES `TipoNotificacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD CONSTRAINT `fk_Usuario_Rol` FOREIGN KEY (`id_Rol`) REFERENCES `Rol` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Usuario_has_Actividad`
--
ALTER TABLE `Usuario_has_Actividad`
  ADD CONSTRAINT `fk_Usuario_has_Actividad_Actividad1` FOREIGN KEY (`id_Actividad`) REFERENCES `Actividad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Usuario_has_Actividad_Usuario1` FOREIGN KEY (`id_Usuario`) REFERENCES `Usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Usuario_has_Notificacion`
--
ALTER TABLE `Usuario_has_Notificacion`
  ADD CONSTRAINT `fk_Usuario_has_Notificacion_Notificacion1` FOREIGN KEY (`id_Notificacion`) REFERENCES `Notificacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Usuario_has_Notificacion_Usuario1` FOREIGN KEY (`id_Usuario`) REFERENCES `Usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
--
-- Base de datos: `amalgama_erp`
--
CREATE DATABASE IF NOT EXISTS `amalgama_erp` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `amalgama_erp`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Atributo`
--

CREATE TABLE `Atributo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `tipo` int(11) NOT NULL,
  `limite` int(11) DEFAULT NULL,
  `obligatorio` tinyint(1) NOT NULL DEFAULT '1',
  `indiceb` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Determina si es un indice de búsqueda para filtros'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Bodega`
--

CREATE TABLE `Bodega` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `idTienda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Bodega_x_Producto`
--

CREATE TABLE `Bodega_x_Producto` (
  `Bodega_id` int(11) NOT NULL,
  `Producto_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CategoriaProducto`
--

CREATE TABLE `CategoriaProducto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CategoriaProducto_x_Atributo`
--

CREATE TABLE `CategoriaProducto_x_Atributo` (
  `CategoriaProducto_id` int(11) NOT NULL,
  `Atributo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Producto`
--

CREATE TABLE `Producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `categoria` int(11) NOT NULL,
  `costo` int(11) NOT NULL DEFAULT '0',
  `precio` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Producto_x_Atributo`
--

CREATE TABLE `Producto_x_Atributo` (
  `Producto_id` int(11) NOT NULL,
  `Atributo_id` int(11) NOT NULL,
  `valor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tienda`
--

CREATE TABLE `Tienda` (
  `idTienda` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `nit` int(11) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `telefono1` varchar(45) NOT NULL,
  `telefono2` varchar(45) DEFAULT NULL,
  `celular1` varchar(45) DEFAULT NULL,
  `celular2` varchar(45) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `eslogan` mediumtext,
  `logo` varchar(255) DEFAULT NULL,
  `aperturaSemana` int(11) NOT NULL DEFAULT '800',
  `cierreSemana` int(11) NOT NULL DEFAULT '1800',
  `aperturaFds` int(11) NOT NULL DEFAULT '900',
  `cierreFds` int(11) NOT NULL DEFAULT '1800'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TipoAtributo`
--

CREATE TABLE `TipoAtributo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Atributo`
--
ALTER TABLE `Atributo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`),
  ADD KEY `fk_Atributo_TipoAtributo1_idx` (`tipo`);

--
-- Indices de la tabla `Bodega`
--
ALTER TABLE `Bodega`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Bodega_Tienda_idx` (`idTienda`);

--
-- Indices de la tabla `Bodega_x_Producto`
--
ALTER TABLE `Bodega_x_Producto`
  ADD PRIMARY KEY (`Bodega_id`,`Producto_id`),
  ADD KEY `fk_Bodega_has_Producto_Producto1_idx` (`Producto_id`),
  ADD KEY `fk_Bodega_has_Producto_Bodega1_idx` (`Bodega_id`);

--
-- Indices de la tabla `CategoriaProducto`
--
ALTER TABLE `CategoriaProducto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `CategoriaProducto_x_Atributo`
--
ALTER TABLE `CategoriaProducto_x_Atributo`
  ADD PRIMARY KEY (`CategoriaProducto_id`,`Atributo_id`),
  ADD KEY `fk_CategoriaProducto_has_Atributo_Atributo1_idx` (`Atributo_id`),
  ADD KEY `fk_CategoriaProducto_has_Atributo_CategoriaProducto1_idx` (`CategoriaProducto_id`);

--
-- Indices de la tabla `Producto`
--
ALTER TABLE `Producto`
  ADD PRIMARY KEY (`id`,`categoria`),
  ADD KEY `fk_Producto_CategoriaProducto1_idx` (`categoria`);

--
-- Indices de la tabla `Producto_x_Atributo`
--
ALTER TABLE `Producto_x_Atributo`
  ADD PRIMARY KEY (`Producto_id`,`Atributo_id`),
  ADD KEY `fk_Producto_has_Atributo2_Atributo1_idx` (`Atributo_id`),
  ADD KEY `fk_Producto_has_Atributo2_Producto1_idx` (`Producto_id`);

--
-- Indices de la tabla `Tienda`
--
ALTER TABLE `Tienda`
  ADD PRIMARY KEY (`idTienda`);

--
-- Indices de la tabla `TipoAtributo`
--
ALTER TABLE `TipoAtributo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Atributo`
--
ALTER TABLE `Atributo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Bodega`
--
ALTER TABLE `Bodega`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `CategoriaProducto`
--
ALTER TABLE `CategoriaProducto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Producto`
--
ALTER TABLE `Producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Tienda`
--
ALTER TABLE `Tienda`
  MODIFY `idTienda` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Atributo`
--
ALTER TABLE `Atributo`
  ADD CONSTRAINT `fk_Atributo_TipoAtributo1` FOREIGN KEY (`tipo`) REFERENCES `TipoAtributo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Bodega`
--
ALTER TABLE `Bodega`
  ADD CONSTRAINT `fk_Bodega_Tienda` FOREIGN KEY (`idTienda`) REFERENCES `Tienda` (`idTienda`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Bodega_x_Producto`
--
ALTER TABLE `Bodega_x_Producto`
  ADD CONSTRAINT `fk_Bodega_has_Producto_Bodega1` FOREIGN KEY (`Bodega_id`) REFERENCES `Bodega` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Bodega_has_Producto_Producto1` FOREIGN KEY (`Producto_id`) REFERENCES `Producto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `CategoriaProducto_x_Atributo`
--
ALTER TABLE `CategoriaProducto_x_Atributo`
  ADD CONSTRAINT `fk_CategoriaProducto_has_Atributo_Atributo1` FOREIGN KEY (`Atributo_id`) REFERENCES `Atributo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CategoriaProducto_has_Atributo_CategoriaProducto1` FOREIGN KEY (`CategoriaProducto_id`) REFERENCES `CategoriaProducto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Producto`
--
ALTER TABLE `Producto`
  ADD CONSTRAINT `fk_Producto_CategoriaProducto1` FOREIGN KEY (`categoria`) REFERENCES `CategoriaProducto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Producto_x_Atributo`
--
ALTER TABLE `Producto_x_Atributo`
  ADD CONSTRAINT `fk_Producto_has_Atributo2_Atributo1` FOREIGN KEY (`Atributo_id`) REFERENCES `Atributo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Producto_has_Atributo2_Producto1` FOREIGN KEY (`Producto_id`) REFERENCES `Producto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
--
-- Base de datos: `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `friends`
--

CREATE TABLE `friends` (
  `id_user` int(11) NOT NULL,
  `id_friend` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `friends`
--

INSERT INTO `friends` (`id_user`, `id_friend`) VALUES
(2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `rol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `rol`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `email`, `password`, `rol`) VALUES
(1, 'pabhoz', 'pabhoz@gmail.com', '3c6ed72ff56aad6dfbb0b958202e966ed63fed8ef74fe600eccabc0f74908d679ec47a9a6b29e69e3b3d991774022cbe949d50b5c91656549619afa175226438', 2),
(2, 'ajtbarandica', 'ajtbarandica@gmail.com', '3c6ed72ff56aad6dfbb0b958202e966ed63fed8ef74fe600eccabc0f74908d679ec47a9a6b29e69e3b3d991774022cbe949d50b5c91656549619afa175226438', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id_user`,`id_friend`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;--
-- Base de datos: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Volcado de datos para la tabla `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{"db":"mydb","table":"friends"},{"db":"mydb","table":"usuario"},{"db":"mydb","table":"rol"},{"db":"mydb","table":"user"},{"db":"mydb","table":"users"},{"db":"myshop","table":"Producto"},{"db":"OPshop","table":"Category"},{"db":"OPshop","table":"CarService"},{"db":"OPshop","table":"CarRental"},{"db":"OPshop","table":"CarProduct"}]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

--
-- Volcado de datos para la tabla `pma__relation`
--

INSERT INTO `pma__relation` (`master_db`, `master_table`, `master_field`, `foreign_db`, `foreign_table`, `foreign_field`) VALUES
('mydb', 'friends', 'id_friend', 'mydb', 'user', 'id'),
('mydb', 'friends', 'id_user', 'mydb', 'user', 'id'),
('mydb', 'user', 'rol', 'mydb', 'rol', 'id');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Volcado de datos para la tabla `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2016-07-03 18:19:41', '{"lang":"es","collation_connection":"utf8mb4_unicode_ci"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indices de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indices de la tabla `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indices de la tabla `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indices de la tabla `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indices de la tabla `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indices de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indices de la tabla `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indices de la tabla `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indices de la tabla `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indices de la tabla `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indices de la tabla `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;--
-- Base de datos: `umobile`
--
CREATE DATABASE IF NOT EXISTS `umobile` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `umobile`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `password`, `email`) VALUES
(1, 'pabhoz', '1234', 'pabhoz@gmail.com'),
(2, 'crisdhoyos', '1234', 'crisdhoyos@gmail.com'),
(3, 'ajtbarandica', '1234', 'ajtbarandica@gmail.com'),
(4, 'eve', '1234', 'eve@pkmn.com'),
(5, 'Raichu', 'editado', 'pika@chu.com'),
(6, 'test', '1234', 'test@some.com'),
(7, 'pepe', '1234', 'pepe@grillo.com'),
(8, 'arce', 'editado', 'ar@ce.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;--
-- Base de datos: `usuariosdb`
--
CREATE DATABASE IF NOT EXISTS `usuariosdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `usuariosdb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `User`
--

INSERT INTO `User` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'camilo', 'cifu', 'cifu@test.com', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
