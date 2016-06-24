-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2016 a las 03:46:31
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ferreteriaweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `runUsuario` varchar(13) COLLATE utf8_bin NOT NULL COMMENT 'Rol Unico Nacional del Administrador',
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(30) COLLATE utf8_bin NOT NULL,
  `sexo` varchar(7) COLLATE utf8_bin NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `email` varchar(30) COLLATE utf8_bin NOT NULL,
  `userName` varchar(30) COLLATE utf8_bin NOT NULL,
  `pass` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boleta`
--

CREATE TABLE `boleta` (
  `numBoleta` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `medioPago` varchar(30) COLLATE utf8_bin NOT NULL,
  `nroTarjeta` mediumtext COLLATE utf8_bin NOT NULL,
  `total` int(11) NOT NULL,
  `tipoTransaccion` varchar(30) COLLATE utf8_bin NOT NULL,
  `nroOrden` int(11) NOT NULL,
  `Usuario_runUsuario` varchar(13) COLLATE utf8_bin NOT NULL,
  `carritoCompra_idcarritoCompra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carritocompra`
--

CREATE TABLE `carritocompra` (
  `idcarritoCompra` int(11) NOT NULL,
  `producto` int(11) NOT NULL,
  `dscto` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `montoPagar` int(11) NOT NULL,
  `carritoCompracol` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  `tipoCategoria` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nombre`, `tipoCategoria`) VALUES
(1, 'Fontaneria', 'Griferia'),
(2, 'METALISTERÍA', 'FERRETERÍA'),
(3, 'CERRAJERÍA', 'FERRETERÍA'),
(4, 'HERRAMIENTAS', 'FERRETERÍA'),
(5, 'FERRETERÍA GENERAL', 'FERRETERÍA'),
(6, 'PARA OBRA Y DECORACIÓN', 'HERRAJES'),
(7, 'PARA MUEBLES', 'HERRAJES'),
(8, 'ACCESORIOS DE BAÑO', 'BAÑOS'),
(9, 'MOBILIARÍO DE BAÑO', 'BAÑOS'),
(10, 'SANITARIOS Y LAVADOS', 'BAÑOS'),
(11, 'MOBILIARIO DE COCINA', 'MOBILIARIO'),
(12, 'MOBILIARIO DE HOGAR Y OFICINA', 'MOBILIARIO'),
(13, 'MOBILIARIO INFANTIL', 'MOBILIARIO'),
(14, 'MOBILIARIO DE JARDÍN', 'MOBILIARIO'),
(15, 'HERRAMIENTA MANUAL', 'JARDÍN'),
(16, 'HERRAMIENTA ELÉCTRICA', 'JARDÍN'),
(17, 'MOBILIARIO DE JARDÍN', 'JARDÍN'),
(18, 'EQUIPAMIENTO DE JARDÍN', 'JARDÍN'),
(19, 'ARTÍCULOS DE JARDÍN', 'JARDÍN'),
(20, 'MOBILIARIO DE DISEÑO', 'COCINAS'),
(21, 'UTENSILIOS Y COMPLEMENTOS', 'COCINAS'),
(22, 'PEQUEÑO ELECTRODOMÉSTICO', 'COCINAS'),
(23, 'ELECTRODOMÉSTICO', 'COCINAS'),
(24, 'MANTENIMIENTO', 'SERVICIO HOTELES'),
(25, 'EQUIPAMIENTO DE HABITACIONES', 'SERVICIO HOTELES'),
(26, 'EXTERIORES', 'SERVICIO HOTELES'),
(27, 'GRIFERÍA', 'BAÑOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(11) NOT NULL,
  `nombreProducto` varchar(30) COLLATE utf8_bin NOT NULL,
  `categoria` varchar(30) COLLATE utf8_bin NOT NULL,
  `precioUnitario` int(11) NOT NULL,
  `descripcionProducto` varchar(1024) COLLATE utf8_bin NOT NULL,
  `ubicacion` varchar(30) COLLATE utf8_bin NOT NULL,
  `cantidad` int(11) NOT NULL,
  `dsto` double DEFAULT NULL,
  `fechaTerminoDsto` date DEFAULT NULL,
  `Categoria_idCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `nombreProducto`, `categoria`, `precioUnitario`, `descripcionProducto`, `ubicacion`, `cantidad`, `dsto`, `fechaTerminoDsto`, `Categoria_idCategoria`) VALUES
(1, 'Grifo', 'Fontaneria', 25000, 'Grifo de acero bañado en plata', 'Casa Matriz', 10, 50, '2016-06-30', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_has_administrador`
--

CREATE TABLE `producto_has_administrador` (
  `Producto_idProducto` int(11) NOT NULL,
  `Producto_Categoria_idCategoria` int(11) NOT NULL,
  `Administrador_runUsuario` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

CREATE TABLE `subcategoria` (
  `idSubCategoria` int(11) NOT NULL,
  `nomCategoria` varchar(30) COLLATE utf8_bin NOT NULL,
  `Categoria_idCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `runUsuario` varchar(13) COLLATE utf8_bin NOT NULL COMMENT 'Rol Unico Nacional del Cliente',
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(50) COLLATE utf8_bin NOT NULL,
  `sexo` varchar(7) COLLATE utf8_bin NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `suscripcion` tinyint(1) NOT NULL,
  `pass` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`runUsuario`, `nombre`, `apellido`, `sexo`, `fechaNacimiento`, `telefono`, `email`, `suscripcion`, `pass`) VALUES
('101081281', 'RODOLFO', 'VELASQUEZ SANTOS', 'HOMBRE', '1986-02-07', 964682316, 'RVELASQUEZ.SA@OUTLOOK.ES', 0, 'e1880e4f9b6c70dd9da4'),
('104254551', 'ARMANDO', 'MORENO GAMBOA', 'HOMBRE', '1983-03-26', 973731839, 'AMORENO.GA@HOTMAIL.COM', 1, '75fe2b82fa2aa8f94995'),
('109753122', 'LORENA', 'RAMÍREZ AHUMADA', 'MUJER', '1988-11-07', 973406640, 'LRAMÍREZ.AH@OUTLOOK.ES', 0, '46577e3803a3896dbe65'),
('112881956', 'JUANA', 'GUTIERREZ CARDENAS', 'MUJER', '1983-06-15', 988489114, 'JGUTIERREZ.CA@FACEBOOK.COM', 1, '64c3b87cb55496d93196'),
('118978013', 'NELSON', 'LAGOS PADILLA', 'HOMBRE', '1995-03-12', 984834027, 'NLAGOS.PA@YAHOO.COM', 0, '987a9c010b6ac5e4e9d0'),
('119701759', 'DENISSE', 'VERA ASTORGA', 'MUJER', '1985-09-30', 961304052, 'DVERA.AS@HOTMAIL.COM', 1, '19c36e07ed2b9bd5ee2f'),
('121128055', 'RITA', 'JIMENEZ VITALJIC', 'MUJER', '1990-03-02', 968272228, 'RJIMENEZ.VI@GMAIL.COM', 0, 'ef6bbe768a53b1fe9e34'),
('124872847', 'CARMEN', 'JARA GUZMAN', 'MUJER', '1989-02-10', 998537329, 'CJARA.GU@FACEBOOK.COM', 1, 'a84d1d67b8bd80e1ad52'),
('125474330', 'CHRISTIAN', 'GARRIDO GARRIDO', 'HOMBRE', '1992-11-18', 969316324, 'CGARRIDO.GA@FACEBOOK.COM', 0, '044e3e493b40654cdc8b'),
('126031661', 'ERIKA', 'ROZAS LUNA', 'MUJER', '1988-11-28', 961984154, 'EROZAS.LU@HOTMAIL.COM', 1, '823dc358df875a190984'),
('127192898', 'VERONICA', 'MUÑOZ MESA', 'MUJER', '1980-03-19', 985139498, 'VMUÑOZ.ME@GMAIL.COM', 0, '0354827c39c36e64fb91'),
('128249834', 'CAROLA', 'GONZALES SEPULVEDA', 'MUJER', '1986-02-04', 978993854, 'CGONZALES.SE@OUTLOOK.ES', 1, '74d8b0c0b2b05a1a46d3'),
('74351336', 'MARIA', 'TOLEDO ESCOBAR', 'MUJER', '1987-01-30', 984885450, 'MTOLEDO.ES@FACEBOOK.COM', 0, '1234'),
('78482796', 'ERIKA', 'MILLAS GONZALEZ', 'MUJER', '1982-12-22', 986921326, 'EMILLAS.GO@YAHOO.COM', 0, '47fa7b241cb1b4f35722'),
('85112244', 'RODRIGO', 'MORAGA VARGAS', 'HOMBRE', '1983-12-17', 984635896, 'RMORAGA.VA@FACEBOOK.COM', 0, '1db41f6f96f232d888bd'),
('85188046', 'MARIA', 'QUIROZ BRAVO', 'MUJER', '1980-10-15', 975631686, 'MQUIROZ.BR@OUTLOOK.ES', 0, '4a3b00cd6053326df6ca'),
('90651110', 'PATRICIA', 'ALBORNOZ VICUÑA', 'MUJER', '1981-05-19', 983513455, 'PALBORNOZ.VI@GMAIL.COM', 1, '2fc72acaa7f64b6e4c33'),
('91970856', 'LUIS', 'CESPEDES FUENTES', 'HOMBRE', '1987-11-25', 990406046, 'LCESPEDES.FU@OUTLOOK.ES', 1, '9c5057c775276e741e05'),
('94561485', 'WALDO', 'TAPIA TAPIA', 'HOMBRE', '1980-10-17', 969916058, 'WTAPIA.TA@GMAIL.COM', 0, '1337dc4d8862472936ba');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`runUsuario`);

--
-- Indices de la tabla `boleta`
--
ALTER TABLE `boleta`
  ADD PRIMARY KEY (`numBoleta`,`carritoCompra_idcarritoCompra`),
  ADD KEY `fk_Boleta_Usuario1_idx` (`Usuario_runUsuario`),
  ADD KEY `fk_Boleta_carritoCompra1_idx` (`carritoCompra_idcarritoCompra`);

--
-- Indices de la tabla `carritocompra`
--
ALTER TABLE `carritocompra`
  ADD PRIMARY KEY (`idcarritoCompra`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`,`Categoria_idCategoria`),
  ADD KEY `fk_Producto_Categoria1_idx` (`Categoria_idCategoria`);

--
-- Indices de la tabla `producto_has_administrador`
--
ALTER TABLE `producto_has_administrador`
  ADD PRIMARY KEY (`Producto_idProducto`,`Producto_Categoria_idCategoria`,`Administrador_runUsuario`),
  ADD KEY `fk_Producto_has_Administrador_Administrador1_idx` (`Administrador_runUsuario`),
  ADD KEY `fk_Producto_has_Administrador_Producto1_idx` (`Producto_idProducto`,`Producto_Categoria_idCategoria`);

--
-- Indices de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`idSubCategoria`,`Categoria_idCategoria`),
  ADD KEY `fk_SubCategoria_Categoria_idx` (`Categoria_idCategoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`runUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `boleta`
--
ALTER TABLE `boleta`
  MODIFY `numBoleta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `idSubCategoria` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `boleta`
--
ALTER TABLE `boleta`
  ADD CONSTRAINT `fk_Boleta_Usuario1` FOREIGN KEY (`Usuario_runUsuario`) REFERENCES `usuario` (`runUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Boleta_carritoCompra1` FOREIGN KEY (`carritoCompra_idcarritoCompra`) REFERENCES `carritocompra` (`idcarritoCompra`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_Producto_Categoria1` FOREIGN KEY (`Categoria_idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `producto_has_administrador`
--
ALTER TABLE `producto_has_administrador`
  ADD CONSTRAINT `fk_Producto_has_Administrador_Administrador1` FOREIGN KEY (`Administrador_runUsuario`) REFERENCES `administrador` (`runUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Producto_has_Administrador_Producto1` FOREIGN KEY (`Producto_idProducto`,`Producto_Categoria_idCategoria`) REFERENCES `producto` (`idProducto`, `Categoria_idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD CONSTRAINT `fk_SubCategoria_Categoria` FOREIGN KEY (`Categoria_idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
