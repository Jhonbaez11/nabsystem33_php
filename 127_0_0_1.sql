-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2019 a las 19:19:25
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemas`
--
CREATE DATABASE IF NOT EXISTS `sistemas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sistemas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aplicativos`
--

CREATE TABLE `aplicativos` (
  `id_aplicativos` int(11) NOT NULL,
  `nombre_app` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id_area` int(11) NOT NULL,
  `nombre_area` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id_area`, `nombre_area`) VALUES
(1, 'SISTEMAS'),
(2, 'VENTAS'),
(3, 'NEGOCIOS FI'),
(4, 'CENTRAL DE BENEFICIOS'),
(5, 'GERENCIA'),
(6, 'RECURSOS HUMANOS'),
(7, 'CALLCENTER'),
(8, 'TESORERIA'),
(9, 'CONTRALORIA'),
(10, 'CALIDAD'),
(11, 'CULTURA DE SERVICIO'),
(12, 'CONTABILIDAD'),
(13, 'SEGURIDAD'),
(14, 'PUBLICIDAD - MERCADEO'),
(15, 'CONTROL DE GASTOS'),
(16, 'ACCESORIOS'),
(17, 'SITCAR'),
(18, 'ASARU'),
(19, 'CHEVYPLAN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `backup`
--

CREATE TABLE `backup` (
  `id_backup` int(11) NOT NULL,
  `serie_equipo` varchar(50) NOT NULL,
  `usuario_dominio` varchar(50) NOT NULL,
  `nombre_equipo` varchar(50) NOT NULL,
  `fecha_backup` date NOT NULL,
  `ubicacion_backup` varchar(200) NOT NULL,
  `tecnico_backup` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nom_categoria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nom_categoria`) VALUES
(1, 'PLAYSTATION'),
(2, 'XBOX'),
(3, 'NINTENDO'),
(4, 'COMPUTADOR'),
(6, 'SEGA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id_equipo` int(11) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `serial` varchar(30) NOT NULL,
  `tipo_equipo` varchar(30) NOT NULL,
  `procesador` varchar(30) NOT NULL,
  `ram` varchar(20) NOT NULL,
  `disco_duro` varchar(20) NOT NULL,
  `mac` varchar(50) NOT NULL,
  `nombre_equipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha_tecnica`
--

CREATE TABLE `ficha_tecnica` (
  `id_ficha` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `id_red` int(11) NOT NULL,
  `id_usu_dom` int(11) NOT NULL,
  `id_sede` int(11) NOT NULL,
  `id_area` int(11) NOT NULL,
  `id_codigo_cc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ficha_tecnica`
--

INSERT INTO `ficha_tecnica` (`id_ficha`, `id_equipo`, `id_red`, `id_usu_dom`, `id_sede`, `id_area`, `id_codigo_cc`) VALUES
(7, 2, 6, 3, 1, 1, 1013607454),
(8, 0, 0, 0, 5, 11, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habilidades`
--

CREATE TABLE `habilidades` (
  `id_habilidades` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_software` int(11) NOT NULL,
  `id_hardware` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_subcategoria` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precios` double NOT NULL,
  `unid` int(11) NOT NULL,
  `coa` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `nombre`, `id_categoria`, `id_subcategoria`, `descripcion`, `precios`, `unid`, `coa`) VALUES
(3, 'XBOX ONE S', 2, 1, 'Consola de última generación de Microsoft', 950000, 2, 'coa-3-1461967047.jpg'),
(4, 'PLAYSTATION 4 SLIM', 1, 1, 'Consola de ultima generación de Sony', 1000000, 5, 'coa-4-161242085.jpg'),
(5, 'mando playstation 4', 1, 3, 'mando ps4', 210000, 10, 'coa-5-12544.jpg'),
(6, 'mando xbox one', 2, 3, 'mando xbox one', 220000, 9, 'coa-6-8499.jpg'),
(7, 'mando nintendo swich', 3, 3, 'mando', 190000, 5, 'coa-7-3385.jpg'),
(8, 'NINTENDO SWICH', 3, 1, 'CONSOLA DE VIDEOJUEGOS DE ULTIMA GENERACION DE NINTENDO', 1050000, 10, 'coa-8-23792.jpg'),
(9, 'SUPER MARIO odyssey', 3, 2, 'MARIO', 120000, 20, 'coa-9-12158.jpg'),
(10, 'UNCHARTED 4', 1, 2, 'EXCLUSIVO', 160000, 15, 'coa-10-19679.jpg'),
(11, 'GEARS OF WAR 4', 2, 2, 'EXCLUSIVO', 150000, 19, 'coa-11-25193.jpg'),
(12, 'FIFA 19', 4, 2, '.', 190000, 10, 'coa-12-5358.jpg'),
(13, 'MOUSE GAMER', 4, 3, 'GENIUS GAMER', 70000, 3, 'coa-13-17397.jpg'),
(14, 'DELL INSPIRON 15', 4, 1, 'CORE I5 3RA GENERACION - 4GB RAM - 500 GB DD', 950000, 6, 'coa-14-23852.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario2`
--

CREATE TABLE `inventario2` (
  `id` int(11) NOT NULL,
  `id_sede` int(11) NOT NULL,
  `ip_red` varchar(50) NOT NULL,
  `mac_red` varchar(50) NOT NULL,
  `id_area` int(11) NOT NULL,
  `responsable` varchar(70) NOT NULL,
  `inv_id_win` varchar(50) NOT NULL,
  `inv_office_id` varchar(50) NOT NULL,
  `cod_ref_pag_win` varchar(50) NOT NULL,
  `nombre_equipo` varchar(50) NOT NULL,
  `dominio` varchar(50) NOT NULL,
  `usuario_dominio` varchar(50) NOT NULL,
  `contra_dominio` varchar(50) NOT NULL,
  `tipo_equipo` varchar(30) NOT NULL,
  `marca_equipo` varchar(50) NOT NULL,
  `serie_equipo` varchar(50) NOT NULL,
  `monitor_marca` varchar(50) NOT NULL,
  `monitor_modelo` varchar(50) NOT NULL,
  `monitor_serie` varchar(50) NOT NULL,
  `dd_equipo` varchar(50) NOT NULL,
  `ram_equipo` varchar(50) NOT NULL,
  `procesador_equipo` varchar(70) NOT NULL,
  `so` varchar(50) NOT NULL,
  `so_version` varchar(50) NOT NULL,
  `so_arquitectura` varchar(50) NOT NULL,
  `so_serial` varchar(50) NOT NULL,
  `office` varchar(50) NOT NULL,
  `office_version` varchar(50) NOT NULL,
  `office_tipo` varchar(50) NOT NULL,
  `office_serial` varchar(50) NOT NULL,
  `antivirus` varchar(50) NOT NULL,
  `version_endpoint` varchar(50) NOT NULL,
  `version_agente` varchar(50) NOT NULL,
  `nro_factura` varchar(30) NOT NULL,
  `factura` varchar(200) NOT NULL,
  `coa` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimiento`
--

CREATE TABLE `mantenimiento` (
  `id_mantenimiento` int(11) NOT NULL,
  `serie_equipo` varchar(50) NOT NULL,
  `usuario_dominio` varchar(50) NOT NULL,
  `nombre_equipo` varchar(50) NOT NULL,
  `fecha_mantenimiento` date NOT NULL,
  `tecnico_mantenimiento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `net_red`
--

CREATE TABLE `net_red` (
  `id_red` int(11) NOT NULL,
  `direccion_ip` varchar(45) DEFAULT NULL,
  `pto_red` varchar(10) NOT NULL,
  `pto_switch` varchar(10) NOT NULL,
  `proxy` int(11) NOT NULL,
  `vip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perifericos`
--

CREATE TABLE `perifericos` (
  `id_perifericos` int(11) NOT NULL,
  `tipo_periferico` varchar(80) NOT NULL,
  `serial_periferico` varchar(30) NOT NULL,
  `marca_periferico` varchar(30) NOT NULL,
  `id_equipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `id_sede` int(11) NOT NULL,
  `nombre_sede` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`id_sede`, `nombre_sede`) VALUES
(5, 'AMERICAS'),
(1, 'CALLE 34'),
(2, 'CALLE 56'),
(3, 'CALLE 80'),
(7, 'COLISIÓN LIVIANOS'),
(8, 'COLISIÓN PESADOS'),
(6, 'CORABASTOS'),
(4, 'UNICENTRO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `software`
--

CREATE TABLE `software` (
  `id_software` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `licencia` varchar(50) NOT NULL,
  `version` varchar(30) NOT NULL,
  `arquitectura` varchar(20) NOT NULL,
  `n_factura` varchar(30) NOT NULL,
  `fecha_compra` date NOT NULL,
  `id_usu_dom` int(11) NOT NULL,
  `coa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

CREATE TABLE `subcategoria` (
  `id_subcategoria` int(11) NOT NULL,
  `nom_subcategoria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `subcategoria`
--

INSERT INTO `subcategoria` (`id_subcategoria`, `nom_subcategoria`) VALUES
(1, 'CONSOLAS'),
(2, 'VIDEOJUEGOS'),
(3, 'ACCESORIOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_codigo_cc` int(11) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `tel_extencion` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL,
  `tipo_usuario` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_codigo_cc`, `nombre_completo`, `tel_extencion`, `email`, `cargo`, `estado`, `tipo_usuario`, `password`) VALUES
(1013607454, 'JHON BÁEZ QUINTERO', '1169', 'JBAEZ@INTERNACIONALDEVEHICULOS.COM.CO', 'ASISTENTE DE SISTEMAS', 1, 'ADMINISTRADOR', '1234567');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_dominio`
--

CREATE TABLE `usuario_dominio` (
  `id_usu_dom` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password_dom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aplicativos`
--
ALTER TABLE `aplicativos`
  ADD PRIMARY KEY (`id_aplicativos`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`),
  ADD KEY `id_area` (`id_area`);

--
-- Indices de la tabla `backup`
--
ALTER TABLE `backup`
  ADD PRIMARY KEY (`id_backup`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `ficha_tecnica`
--
ALTER TABLE `ficha_tecnica`
  ADD PRIMARY KEY (`id_ficha`),
  ADD KEY `id_usuario` (`id_codigo_cc`),
  ADD KEY `id_area` (`id_area`),
  ADD KEY `id_equipo` (`id_equipo`,`id_red`,`id_usu_dom`,`id_sede`),
  ADD KEY `id_sede` (`id_sede`),
  ADD KEY `id_red` (`id_red`),
  ADD KEY `id_usu_dom` (`id_usu_dom`);

--
-- Indices de la tabla `habilidades`
--
ALTER TABLE `habilidades`
  ADD PRIMARY KEY (`id_habilidades`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_software` (`id_software`),
  ADD KEY `id_hardware` (`id_hardware`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_subcategoria` (`id_subcategoria`);

--
-- Indices de la tabla `inventario2`
--
ALTER TABLE `inventario2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nombre_sede` (`id_sede`),
  ADD KEY `nombre_area` (`id_area`);

--
-- Indices de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD PRIMARY KEY (`id_mantenimiento`);

--
-- Indices de la tabla `net_red`
--
ALTER TABLE `net_red`
  ADD PRIMARY KEY (`id_red`);

--
-- Indices de la tabla `perifericos`
--
ALTER TABLE `perifericos`
  ADD PRIMARY KEY (`id_perifericos`),
  ADD KEY `id_equipo` (`id_equipo`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`id_sede`),
  ADD KEY `nombre_sede` (`nombre_sede`);

--
-- Indices de la tabla `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id_software`),
  ADD KEY `id_usu_dom` (`id_usu_dom`);

--
-- Indices de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`id_subcategoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_codigo_cc`),
  ADD KEY `id_codigo_cc` (`id_codigo_cc`);

--
-- Indices de la tabla `usuario_dominio`
--
ALTER TABLE `usuario_dominio`
  ADD PRIMARY KEY (`id_usu_dom`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `backup`
--
ALTER TABLE `backup`
  MODIFY `id_backup` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ficha_tecnica`
--
ALTER TABLE `ficha_tecnica`
  MODIFY `id_ficha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `habilidades`
--
ALTER TABLE `habilidades`
  MODIFY `id_habilidades` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `inventario2`
--
ALTER TABLE `inventario2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  MODIFY `id_mantenimiento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `net_red`
--
ALTER TABLE `net_red`
  MODIFY `id_red` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perifericos`
--
ALTER TABLE `perifericos`
  MODIFY `id_perifericos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `id_sede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `software`
--
ALTER TABLE `software`
  MODIFY `id_software` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `id_subcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario_dominio`
--
ALTER TABLE `usuario_dominio`
  MODIFY `id_usu_dom` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inventario_ibfk_2` FOREIGN KEY (`id_subcategoria`) REFERENCES `subcategoria` (`id_subcategoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inventario2`
--
ALTER TABLE `inventario2`
  ADD CONSTRAINT `inventario2_ibfk_1` FOREIGN KEY (`id_sede`) REFERENCES `sede` (`id_sede`),
  ADD CONSTRAINT `inventario2_ibfk_2` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
