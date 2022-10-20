-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2022 a las 00:26:12
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `petshop_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(10) UNSIGNED NOT NULL,
  `nombre_cargo` varchar(30) NOT NULL,
  `estado_cargo` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `nombre_cargo`, `estado_cargo`) VALUES
(1, 'ADMINISTRADOR', 1),
(2, 'EMPLEADO', 0),
(3, 'DOCENTES', 1),
(4, 'SECRETARIO', 1),
(5, 'OTROSsss', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(255) NOT NULL,
  `descripcion_categoria` text NOT NULL,
  `estado_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`, `descripcion_categoria`, `estado_categoria`) VALUES
(1, 'COMIDA HUMEDA', 'DESCRIPCION COMIDA HUMEDA', 1),
(2, 'SNACKS Y HUESOS', 'DESCRIPCION SNACKS Y HUESOS', 1),
(3, 'JUGUETES', 'DESCRIPCION JUGUETES', 1),
(4, 'CORREAS Y COLLARES', 'DESCRIPCION CORREAS Y COLLARES', 1),
(5, 'CASETAS Y JAULAS', 'DESCRIPCION CASETAS Y JAULAS', 1),
(6, 'ROPA PARA MASCOTAS', 'DESCRIPCION ROPA PARA MASCOTAS', 1),
(7, 'COMEDEROS Y BEBEDEROS', 'DESCRIPCION COMEDEROS Y BEBEDEROS', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(10) UNSIGNED NOT NULL,
  `nombre_cliente` varchar(100) DEFAULT NULL,
  `ci_cliente` char(15) NOT NULL,
  `estado_cliente` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre_cliente`, `ci_cliente`, `estado_cliente`) VALUES
(1, 'ABRAHAM CABRERA MAMANII', '68179183', 1),
(2, 'COROL', '3837123', 0),
(3, 'PATRICIA TORRICO DAVALOS', '1234567', 1),
(4, 'GABRIELA CUSI MAMANI', '7654321', 1),
(26, 'POCO X3 PROS', '4444444', 1),
(27, 'INCOS LA PAZ CITY', '4444', 0),
(32, 'GINA BAYON MEDINA AAA', '10743847', 0),
(33, 'TOP LEVEL', '2220000', 1),
(40, 'ENTEL', '5555555222', 1),
(48, 'PRINGLES', '6668881', 1),
(49, 'INCOS LA PAZ', '5448156', 1),
(50, 'JSON ENCODE', '44545', 0),
(51, 'THE PRODIGY', '6565601', 1),
(52, 'SAMSUNG', '3463463', 1),
(53, 'dewdwe', '3434', 0),
(54, 'LA SANTE', '8888899', 1),
(55, 'asdfghjkl', '11111', 1),
(56, 'rreeeer', '789789', 1),
(57, 'CESAR MARTINS', '233990000', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id_venta` int(10) UNSIGNED NOT NULL,
  `id_producto` int(10) UNSIGNED NOT NULL,
  `cantidad` int(10) UNSIGNED NOT NULL,
  `costo` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_venta`
--

INSERT INTO `detalle_venta` (`id_venta`, `id_producto`, `cantidad`, `costo`) VALUES
(132, 6, 2, '7.00'),
(132, 7, 10, '40.00'),
(133, 6, 5, '7.00'),
(133, 7, 5, '40.00'),
(133, 5, 7, '6.00'),
(134, 5, 3, '6.00'),
(134, 6, 6, '7.00'),
(134, 7, 8, '40.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` int(10) UNSIGNED NOT NULL,
  `id_cargo` int(10) UNSIGNED NOT NULL,
  `ci_empleado` varchar(20) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `direccion_empleado` varchar(60) NOT NULL,
  `telefono_empleado` varchar(15) DEFAULT NULL,
  `fechanacimiento` date DEFAULT NULL,
  `genero_empleado` char(2) NOT NULL,
  `estado_empleado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `id_cargo`, `ci_empleado`, `nombre_completo`, `direccion_empleado`, `telefono_empleado`, `fechanacimiento`, `genero_empleado`, `estado_empleado`) VALUES
(1, 5, '7894561', 'Juan Carrasco vicente', 'Calle 2', '77726685', '1992-05-06', 'M', 1),
(2, 1, '123456789', 'Miguel Campos Savedra', 'Calle Max Paredes', '77726685', '1990-06-16', 'M', 1),
(3, 4, '456123789', 'Steve Jobs Mamani', 'Av. Apumalla', '77879765', '1996-02-09', 'M', 1),
(4, 4, '123', 'Bill Gates Smith', 'Achachicala', '123', '2022-04-08', 'F', 1),
(12, 5, '1111111', 'QBASS', 'calle bueno lindo', '123123', '2022-09-30', 'F', 1),
(13, 5, '4922723', 'WILL', 'Av. Republica', '71010111', '2022-09-15', 'F', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_proveedor` int(10) UNSIGNED NOT NULL,
  `nombreproducto` varchar(70) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `costocompra` decimal(12,2) NOT NULL,
  `costoventa` decimal(12,2) NOT NULL,
  `stock` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `imagen_producto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `id_categoria`, `id_proveedor`, `nombreproducto`, `descripcion`, `costocompra`, `costoventa`, `stock`, `fecha`, `estado`, `imagen_producto`) VALUES
(5, 1, 3, 'Rocco Classic Trio de Carne', 'Rocco Classic Trio de Carne 24 x 800 g comida húmeda', '5.00', '6.00', 290, '2022-09-01', 1, '28011_megapack_rocco_classic_rindpur_24x800g_hs_02_3.jpg'),
(6, 1, 3, 'Rocco Classic 24 x 800 g - Pack Ahorro', 'Rocco Classic 24 x 800 g - Pack Ahorro', '3.00', '7.00', 487, '2022-08-10', 1, 'icon_percent_template_1000x1000_int_40__0.jpg'),
(7, 1, 7, 'Rocco Classic 24 x 800 g comida húmeda', 'Rocco Classic 24 x 800 g comida húmeda', '16.00', '40.00', 677, '2022-07-13', 1, 'icon_percent_template_1000x1000_int_46__4.jpg'),
(8, 1, 6, 'Pack Ahorro: Rocco Sensitive 24 x 800 g', 'Pack Ahorro: Rocco Sensitive 24 x 800 g', '3.00', '4.00', 885, '2022-09-07', 1, 'rocco_sensitive_chickenpotatoes_24x800g_es_4.jpg'),
(9, 2, 2, 'Barritas Barkoo 12 / 24', 'Barritas', '9.00', '19.00', 399, '2022-09-07', 1, '1300172_icon_percent_template_1000x1000_int_8.jpg'),
(10, 3, 3, 'Huesos', 'Huesos', '67.00', '90.00', 50, '2022-09-01', 1, 'barkoo_huesos_masticables_prensados_3.jpg'),
(11, 3, 6, 'Pelotas', 'Pelotas', '7.00', '9.00', 1200, '2022-09-06', 1, '115297_doskocil_chuckit_breatheright_fetchball_medium_6_5cm_hs_02_9.jpg'),
(13, 3, 3, 'Frisbees', 'Frisbees', '45.00', '70.00', 277, '2022-09-03', 1, '115205_pla_doskocil_chuckit_rugged_flyer_orange_25cm_hs_01_2.jpg'),
(14, 3, 6, 'Peluches', 'Peluches', '33.00', '45.00', 50, '2022-08-11', 1, 'peluche.jpg'),
(15, 4, 7, 'Arneses', 'Arneses', '43.00', '66.00', 200, '2022-07-15', 1, '74067_pla_julius_k9_idc_powergeschirr_rot_gr_e_mini_41.jpg'),
(16, 4, 6, 'Bozales', 'Bozales', '150.00', '170.00', 1200, '2022-06-10', 1, '94506_pla_coa_halti_kopfhalfter_hs_02_1.jpg'),
(18, 4, 6, 'Correas', 'Correas', '200.00', '290.00', 600, '2022-08-26', 1, '174796_174797_pla_petlando_schleppleine_rund_geflochten_blau_5m_10m_hs_01_4.jpg'),
(19, 5, 6, 'Corrales', 'Corrales', '500.00', '700.00', 30, '2022-09-05', 1, '102099_pla_freilaufgehege_nylon_fg_0569_8.jpg'),
(20, 5, 8, 'Jaulas', 'Jaulas', '400.00', '700.00', 20, '2022-08-14', 1, '76341_pla_3293_4006_dr91_ht_5.jpg'),
(21, 6, 6, 'Abrigos', 'Abrigos', '45.00', '60.00', 100, '2022-08-24', 1, '73483_hundeoverall_mint_fg_1000px_2928_9.jpg'),
(22, 6, 3, 'Jerseis', 'Jerseis', '24.00', '29.00', 90, '2022-06-17', 1, 'norweger_hundepulli_45cm_fg_6007_grau_5.jpg'),
(23, 7, 2, 'Comederos de plastico', 'Comederos de plastico', '45.00', '89.00', 30, '2022-07-23', 1, '36278_PLA_savic_anti_schling_napf_elfenbein_11_2012_3.jpg'),
(24, 7, 2, 'Comederos de Acero', 'Comederos de Acero', '60.00', '120.00', 885, '2022-06-17', 1, '75611_pla_edelstahlnapf_color_splash_h_fg_5400_9.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(10) UNSIGNED NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `contacto` varchar(50) NOT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `direccion` varchar(60) NOT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `empresa`, `contacto`, `mail`, `telefono`, `direccion`, `estado`) VALUES
(2, 'ROCCO', 'Mateos', 'mateo@gmail.com', '73025659', 'Av. Buenos Aires', 1),
(3, 'PEDIGREE', 'Evelin Campos', 'cris@gmail.com', '78945621', 'Miraflores', 1),
(6, 'ROYAL CANIN', 'Micaela', 'micaela@gmail.com', '123456', 'Av. Busch', 1),
(7, 'WOLF', 'Marco Antonio', 'marco5.6@gmail.com', '24026111', 'Satelite', 1),
(8, 'HILLS', 'eriel', 'eriel5.6@gmail.com', '2394644', 'calle bueno lindo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `id_empleado` int(10) UNSIGNED NOT NULL,
  `user` varchar(35) NOT NULL,
  `password` varchar(65) NOT NULL,
  `nivel` int(2) NOT NULL,
  `estado` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `id_empleado`, `user`, `password`, `nivel`, `estado`) VALUES
(1, 12, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, '1'),
(2, 1, 'juan', 'e10adc3949ba59abbe56e057f20f883e', 2, '1'),
(3, 3, 'steve', 'e10adc3949ba59abbe56e057f20f883e', 2, '1'),
(4, 4, 'bill', 'e10adc3949ba59abbe56e057f20f883e', 2, '0'),
(10, 2, 'miguel', 'e10adc3949ba59abbe56e057f20f883e', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(10) UNSIGNED NOT NULL,
  `id_cliente` int(10) UNSIGNED NOT NULL,
  `id_empleado` int(10) UNSIGNED NOT NULL,
  `fecha_venta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `id_cliente`, `id_empleado`, `fecha_venta`) VALUES
(132, 32, 2, '2022-09-04'),
(133, 57, 2, '2022-09-04'),
(134, 51, 2, '2022-09-05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

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
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD KEY `fk_detalle_venta_producto1_idx` (`id_producto`),
  ADD KEY `fk_detalle_venta_venta1_idx` (`id_venta`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `fk_empleado_cargo1_idx` (`id_cargo`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_producto_proveedor_idx` (`id_proveedor`),
  ADD KEY `fk_producto_categoria1_idx` (`id_categoria`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_usuarios_empleado1_idx` (`id_empleado`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `fk_venta_cliente1_idx` (`id_cliente`),
  ADD KEY `fk_venta_empleado1_idx` (`id_empleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_empleado` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `fk_detalle_venta_producto1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_detalle_venta_venta1` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id_venta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `fk_empleado_cargo1` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id_cargo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_producto_categoria1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_producto_proveedor` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_empleado1` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `fk_venta_cliente1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_venta_empleado1` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
