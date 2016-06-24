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



--
-- Base de datos: `ferreteriaweb`
--

-- --------------------------------------------------------

/*==============================================================*/
/* Base de datos: `ferreteria`                                 */
/*==============================================================*/
CREATE DATABASE IF NOT EXISTS `ferreteriaweb` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `ferreteriaweb`;

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

-- -----------------------------------------------------
-- ADMINISTRADORES
-- -----------------------------------------------------
INSERT INTO ADMINISTRADOR VALUES('177008796','JOSE','PEREZ CARMONA','HOMBRE','1991-03-26','JOSE.PEREZ@PELUKA.INFO','JPEREZ','1234');
INSERT INTO ADMINISTRADOR VALUES('186948483','JONATHAN','ESPINOZA BRAIN','HERMA','1994-01-21','JONATHANESPINOZAB@GMAIL.COM','JESPINOZAB','4321');
INSERT INTO ADMINISTRADOR VALUES('162075497','JORGE','MUÑOZ NOVAKOVIC','MACHO','1985-12-07','JMUNOZNOV@GMAIL.COM','JOR.MUNOZN','2341');


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

INSERT INTO PRODUCTO VALUES('1',' EJE DEL EMBRAGUE','MOBILIARIO DE JARDÍN',26240,'SIN DESCRIPCIÓN DISPONIBLE','MYI6381',22,0,'',14);
INSERT INTO PRODUCTO VALUES('2',' SET VASTAGO Y RODAMIENTOS V: 50/68 MM., R: 125/170/200 MM.,  (P/RCB-25)','FERRETERÍA GENERAL',329640,'SIN DESCRIPCIÓN DISPONIBLE','UWQ2930',3,0,'',5);
INSERT INTO PRODUCTO VALUES('3',' BISAGRA FIERRO CINCADO   2"   X  1.0 MM.','PARA MUEBLES',110,'SIN DESCRIPCIÓN DISPONIBLE','AJE3642',91,0,'',7);
INSERT INTO PRODUCTO VALUES('4',' JUNTA PARA PT2636','GRIFERÍA',1082,'SIN DESCRIPCIÓN DISPONIBLE','QOJ8754',21,0,'',1);
INSERT INTO PRODUCTO VALUES('5',' JGO DESTORNILLADORES MANGO ERGONIC DE 5 PIEZAS, 3 PLANOS 4,0 X 100, 5,5 X 125, 6,5 X 150, Y 2 CRUZ PH1 X 80, PH2 X 100','HERRAMIENTA ELÉCTRICA',24375,'SIN DESCRIPCIÓN DISPONIBLE','LZV9360',8,0,'',16);
INSERT INTO PRODUCTO VALUES('6',' DADO []1/2" POLIGONAL DE 12 MM.','HERRAMIENTAS',1493,'SIN DESCRIPCIÓN DISPONIBLE','OUZ5329',89,0,'',4);
INSERT INTO PRODUCTO VALUES('7',' NAPOLEON CORTACABLE COBRE ALUMINIO ACERO DE 20 MM.','MOBILIARIO DE COCINA',289914,'SIN DESCRIPCIÓN DISPONIBLE','SUA9568',82,0,'',11);
INSERT INTO PRODUCTO VALUES('8',' ESPACIADOR PARA PT326','PARA OBRA Y DECORACIÓN',647,'SIN DESCRIPCIÓN DISPONIBLE','USB2852',97,0,'',6);
INSERT INTO PRODUCTO VALUES('9',' ESCARIADOR CONICO A/R 20 MM.','SANITARIOS Y LAVADOS',36690,'SIN DESCRIPCIÓN DISPONIBLE','MJL2137',15,0,'',10);
INSERT INTO PRODUCTO VALUES('10',' PISTOLA DE ALTA PRESION 4001B, GRAVEDAD, PRESION DE TRABAJO 50-80 PSI, CONSUMO DE AIRE 7-12 PSI, DEPOSITO PLASTICO 600 CC. BOQUILLA PASO 1,7MM','PEQUEÑO ELECTRODOMÉSTICO',15450,'SIN DESCRIPCIÓN DISPONIBLE','KPS5775',12,0,'',22);
INSERT INTO PRODUCTO VALUES('11',' VIDRIO OSCURO REDONDO 50 MM GRADO 5','SANITARIOS Y LAVADOS',110,'SIN DESCRIPCIÓN DISPONIBLE','QEV3111',22,0,'',10);
INSERT INTO PRODUCTO VALUES('12',' ESPATULA FLEXIBLE BIMAT. AC/INOX. 150 MM','MOBILIARIO DE JARDÍN',4432,'SIN DESCRIPCIÓN DISPONIBLE','CSU2412',72,0,'',14);
INSERT INTO PRODUCTO VALUES('13',' BROCA CONO MORSE A/R 49.00 MM.','MOBILIARIO DE JARDÍN',219465,'SIN DESCRIPCIÓN DISPONIBLE','PFK6259',22,0,'2016-07-03',14);
INSERT INTO PRODUCTO VALUES('14',' PLANA ALBAÑIL PUNTA 125 X  70  MM.','ACCESORIOS DE BAÑO',11600,'SIN DESCRIPCIÓN DISPONIBLE','CCS3668',76,0,'',8);
INSERT INTO PRODUCTO VALUES('15',' THROTTLE VALVE SEAT','ACCESORIOS DE BAÑO',850,'SIN DESCRIPCIÓN DISPONIBLE','IPT1336',61,0,'',8);
INSERT INTO PRODUCTO VALUES('16',' CABEZAL 1/4" BSPT TERRAJA OOR','EQUIPAMIENTO DE HABITACIONES',87980,'SIN DESCRIPCIÓN DISPONIBLE','JDQ3884',26,0,'',25);
INSERT INTO PRODUCTO VALUES('17',' LIMA PLANA 2º CORTE DE  4"','SANITARIOS Y LAVADOS',2412,'SIN DESCRIPCIÓN DISPONIBLE','YSZ1571',94,0,'',10);
INSERT INTO PRODUCTO VALUES('18',' BROCA CONCRETO 20X 240/300 SDS-PLUS','FERRETERÍA GENERAL',7862,'SIN DESCRIPCIÓN DISPONIBLE','FST1439',46,0,'',5);
INSERT INTO PRODUCTO VALUES('19',' PANEL FRONTAL PARA #488','HERRAMIENTAS',112308,'SIN DESCRIPCIÓN DISPONIBLE','EGH1757',88,0,'',4);
INSERT INTO PRODUCTO VALUES('20',' LIJADORA DE HOJA 1/4",  POTENCIA 220 W., VELOC. ORBITAL 16000 OPM., OSCILACION: 32000 OPM.,  MEDIDA 114 X 140 MM. CON RECOLECTOR DE POLVO','METALISTERÍA',29024,'SIN DESCRIPCIÓN DISPONIBLE','QNW2711',71,0,'2016-07-03',2);
INSERT INTO PRODUCTO VALUES('21',' SIERRA COPA MULTI MADERA    1"  (25 MM.)','PEQUEÑO ELECTRODOMÉSTICO',5088,'SIN DESCRIPCIÓN DISPONIBLE','XBP5578',31,0,'',22);
INSERT INTO PRODUCTO VALUES('22',' ESPIGA P/UNION MANGUERAS  3/8" X 3/8"','MOBILIARÍO DE BAÑO',1237,'SIN DESCRIPCIÓN DISPONIBLE','JDC1348',87,0,'',9);
INSERT INTO PRODUCTO VALUES('23',' GUADAÑA MOD. ANCHO DE 22" J 115 FORJADAS A MANO','SANITARIOS Y LAVADOS',23750,'SIN DESCRIPCIÓN DISPONIBLE','KTY4246',27,0,'',10);
INSERT INTO PRODUCTO VALUES('24',' CONJUNTO EJE IV CON RODAMIENTOS','HERRAMIENTA ELÉCTRICA',66580,'SIN DESCRIPCIÓN DISPONIBLE','GTU4246',91,0,'',16);
INSERT INTO PRODUCTO VALUES('25',' ALICATE UNIVERSAL 7" MANGO NEGRO BLISTER','CERRAJERÍA',1767,'SIN DESCRIPCIÓN DISPONIBLE','PZK8274',61,0,'',3);
INSERT INTO PRODUCTO VALUES('26',' DESTORNILLADOR NEUMATICO HEAVY DUTY, TORQUE FIJO 145 LB/PULG-16 NM, VELOCIDAD 800 RPM, PINZA DE 1/4", CONSUMO DE AIRE 114 LT/MIN, ENTRADA AIRE 1/4", PESO 1,2K','CERRAJERÍA',64605,'SIN DESCRIPCIÓN DISPONIBLE','YUZ3295',95,0,'',3);
INSERT INTO PRODUCTO VALUES('27',' PINCELES A- 2','PEQUEÑO ELECTRODOMÉSTICO',653,'SIN DESCRIPCIÓN DISPONIBLE','OKK3365',82,0,'2016-07-03',22);
INSERT INTO PRODUCTO VALUES('28',' BARRA DE CABEZAL MODULO B','PARA OBRA Y DECORACIÓN',284400,'SIN DESCRIPCIÓN DISPONIBLE','FWG6458',21,0,'',6);
INSERT INTO PRODUCTO VALUES('29',' AZADA CON ENCAJE DE MANGO SOLDADO  7" DE 90 X 179 MM.','UTENSILIOS Y COMPLEMENTOS',4167,'SIN DESCRIPCIÓN DISPONIBLE','NAL2198',91,0,'2016-07-03',21);
INSERT INTO PRODUCTO VALUES('30',' TALADRO NEUMATICO DE 1/2" HEAVY DUTY REVERSIBLE, VELOCIDAD 800 RPM, CONSUMO DE AIRE 110 LT/MIN, ENTRADA DE AIRE 1/4" PESO 1,80 KGS.','HERRAMIENTA ELÉCTRICA',71685,'SIN DESCRIPCIÓN DISPONIBLE','LPM7823',64,0,'',16);
INSERT INTO PRODUCTO VALUES('31',' TALADRO DE COLUMNA 1.5 HP, 380 VOLTS, PARA BROCA HASTA 1.1/4",  12 VELOCIDADES','ELECTRODOMÉSTICO',525770,'SIN DESCRIPCIÓN DISPONIBLE','FOH5583',19,0,'',23);
INSERT INTO PRODUCTO VALUES('32',' PASADOR DEL MARTILLO PARA PT5124','ARTÍCULOS DE JARDÍN',3164,'SIN DESCRIPCIÓN DISPONIBLE','UJD2545',85,0,'',19);
INSERT INTO PRODUCTO VALUES('33',' RACORD ACOPLE RAPIDO HILO MACHO DE 1/4"','ACCESORIOS DE BAÑO',270,'SIN DESCRIPCIÓN DISPONIBLE','QDD1292',41,0,'',8);
INSERT INTO PRODUCTO VALUES('34',' GATILLO PISTOLIN DE ACEITE','ELECTRODOMÉSTICO',5934,'SIN DESCRIPCIÓN DISPONIBLE','EUB5101',99,0,'',23);
INSERT INTO PRODUCTO VALUES('35',' TECLE ELECTRICO MONOFASICO 0.5 T X 6 MT.','CERRAJERÍA',900750,'SIN DESCRIPCIÓN DISPONIBLE','VRE8326',93,0,'',3);
INSERT INTO PRODUCTO VALUES('36',' INFLADOR DE NEUMATICOS CON MANOMETRO DE BARRA DE 10 A 120 PSI, 1.0 A 8.0 BAR EN METAL, DOBLE TOMA, ENTRADA DE 1/4", EN BLISTER','CERRAJERÍA',23906,'SIN DESCRIPCIÓN DISPONIBLE','EIR8663',12,0,'',3);
INSERT INTO PRODUCTO VALUES('37',' CERRADURA TUBULAR DE POMO  #578 SOLO POMO EXTERIOR SIN LLAVE, CROMADA','UTENSILIOS Y COMPLEMENTOS',1650,'SIN DESCRIPCIÓN DISPONIBLE','GXC3890',38,0,'',21);
INSERT INTO PRODUCTO VALUES('38',' BROCA CILINDRICA A/R 25.0  MM.','MOBILIARÍO DE BAÑO',88484,'SIN DESCRIPCIÓN DISPONIBLE','EJA8317',62,0,'',9);
INSERT INTO PRODUCTO VALUES('39',' BIELA','EQUIPAMIENTO DE JARDÍN',902,'SIN DESCRIPCIÓN DISPONIBLE','IUQ5555',42,0,'',18);
INSERT INTO PRODUCTO VALUES('40',' MUELA DE    1"    P/DOBLADORA DE TUBOS','PARA OBRA Y DECORACIÓN',80160,'SIN DESCRIPCIÓN DISPONIBLE','VRN7888',53,0,'',6);


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


