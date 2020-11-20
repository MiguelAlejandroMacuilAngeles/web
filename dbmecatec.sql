-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 18-11-2020 a las 08:39:27
-- Versión del servidor: 10.3.20-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbmecatec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogodirecciones`
--

DROP TABLE IF EXISTS `catalogodirecciones`;
CREATE TABLE IF NOT EXISTS `catalogodirecciones` (
  `id_Direccion` int(5) NOT NULL AUTO_INCREMENT,
  `Calle` varchar(60) NOT NULL,
  `NumInterior` int(5) DEFAULT NULL,
  `NumExterior` int(5) NOT NULL,
  `Colonia` varchar(50) NOT NULL,
  `Localidad` varchar(50) NOT NULL,
  `Estado` varchar(50) NOT NULL,
  PRIMARY KEY (`id_Direccion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `catalogodirecciones`
--

INSERT INTO `catalogodirecciones` (`id_Direccion`, `Calle`, `NumInterior`, `NumExterior`, `Colonia`, `Localidad`, `Estado`) VALUES
(1, 'banderas', NULL, 54, 'Vilop', 'Tepeyanco', 'Tlaxcala'),
(2, 'siempre viva', 19, 12, 'laredo', 'atlixco', 'puebla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogolinea`
--

DROP TABLE IF EXISTS `catalogolinea`;
CREATE TABLE IF NOT EXISTS `catalogolinea` (
  `id_CatalogoLinea` int(5) NOT NULL AUTO_INCREMENT,
  `URL` varchar(100) NOT NULL,
  PRIMARY KEY (`id_CatalogoLinea`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `catalogolinea`
--

INSERT INTO `catalogolinea` (`id_CatalogoLinea`, `URL`) VALUES
(1, 'www.mexicanisima.com/catalogo1'),
(2, 'www.mexicanisima.com/catalogo2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

DROP TABLE IF EXISTS `compra`;
CREATE TABLE IF NOT EXISTS `compra` (
  `IDCompra` int(5) NOT NULL AUTO_INCREMENT,
  `IDProveedor` int(5) NOT NULL,
  `IDContacto` int(5) NOT NULL,
  `id_Direccion` int(5) NOT NULL,
  `id_CatalogoLinea` int(5) NOT NULL,
  PRIMARY KEY (`IDCompra`),
  KEY `IDContacto` (`IDContacto`),
  KEY `IDProveedor` (`IDProveedor`),
  KEY `id_CatalogoLinea` (`id_CatalogoLinea`),
  KEY `id_Direccion` (`id_Direccion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`IDCompra`, `IDProveedor`, `IDContacto`, `id_Direccion`, `id_CatalogoLinea`) VALUES
(2, 2, 1, 2, 1),
(3, 1, 2, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

DROP TABLE IF EXISTS `contactos`;
CREATE TABLE IF NOT EXISTS `contactos` (
  `IDContacto` int(5) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(70) NOT NULL,
  `ApellidoPaterno` varchar(70) NOT NULL,
  `ApellidoMaterno` varchar(70) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  PRIMARY KEY (`IDContacto`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`IDContacto`, `Nombre`, `ApellidoPaterno`, `ApellidoMaterno`, `Telefono`, `Correo`) VALUES
(1, 'Louis', 'Pancracio', 'Reyes', '2345678900', 'louis@gmail.com'),
(2, 'Andrés', 'Mellado', 'Rubio', '7654398273', 'andres@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corte`
--

DROP TABLE IF EXISTS `corte`;
CREATE TABLE IF NOT EXISTS `corte` (
  `CodVenta` int(20) NOT NULL,
  `Total` decimal(10,2) NOT NULL,
  `Recibe` decimal(10,2) NOT NULL,
  `Cambio` decimal(10,2) NOT NULL,
  KEY `CodVenta` (`CodVenta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devolucion`
--

DROP TABLE IF EXISTS `devolucion`;
CREATE TABLE IF NOT EXISTS `devolucion` (
  `IDD` int(100) NOT NULL AUTO_INCREMENT,
  `CodVenta` int(20) NOT NULL,
  `CodProducto` varchar(50) NOT NULL,
  `Cantidad` int(10) NOT NULL,
  `Motivo` varchar(100) NOT NULL,
  `Autoriza` varchar(100) NOT NULL,
  PRIMARY KEY (`IDD`),
  KEY `CodVenta` (`CodVenta`),
  KEY `CodProducto` (`CodProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `garantia`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `garantia`;
CREATE TABLE IF NOT EXISTS `garantia` (
`Venta` int(20)
,`Fecha` date
,`Costo` decimal(32,2)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

DROP TABLE IF EXISTS `inventario`;
CREATE TABLE IF NOT EXISTS `inventario` (
  `CodInventario` int(20) NOT NULL AUTO_INCREMENT,
  `stock` int(20) NOT NULL,
  PRIMARY KEY (`CodInventario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inv_prod`
--

DROP TABLE IF EXISTS `inv_prod`;
CREATE TABLE IF NOT EXISTS `inv_prod` (
  `CodProducto` varchar(50) NOT NULL,
  `id_inventario` varchar(50) NOT NULL,
  PRIMARY KEY (`CodProducto`,`id_inventario`),
  KEY `id_inventario` (`id_inventario`),
  KEY `CodProducto` (`CodProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordco_producto`
--

DROP TABLE IF EXISTS `ordco_producto`;
CREATE TABLE IF NOT EXISTS `ordco_producto` (
  `CodProducto` varchar(50) NOT NULL,
  `IDOrdenC` int(5) NOT NULL,
  PRIMARY KEY (`CodProducto`,`IDOrdenC`),
  KEY `IDOrdenC` (`IDOrdenC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ordco_producto`
--

INSERT INTO `ordco_producto` (`CodProducto`, `IDOrdenC`) VALUES
('PC7393B', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_compra`
--

DROP TABLE IF EXISTS `orden_compra`;
CREATE TABLE IF NOT EXISTS `orden_compra` (
  `IDOrdenC` int(5) NOT NULL AUTO_INCREMENT,
  `Referencia` varchar(50) NOT NULL,
  `Total` decimal(10,2) NOT NULL,
  `Fecha` date NOT NULL,
  `Estatus` varchar(20) NOT NULL,
  `Elaboro` varchar(70) NOT NULL,
  `Proovedor` int(5) NOT NULL,
  PRIMARY KEY (`IDOrdenC`),
  KEY `Proovedor` (`Proovedor`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `orden_compra`
--

INSERT INTO `orden_compra` (`IDOrdenC`, `Referencia`, `Total`, `Fecha`, `Estatus`, `Elaboro`, `Proovedor`) VALUES
(1, 'llantas', '123.00', '2020-08-21', 'Activo', 'Pepe Amoroso Rosas', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_servicio`
--

DROP TABLE IF EXISTS `orden_servicio`;
CREATE TABLE IF NOT EXISTS `orden_servicio` (
  `Estatus` varchar(15) NOT NULL,
  `NOrden` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha` date NOT NULL,
  `Elaborado_Por` varchar(50) NOT NULL,
  `Empresa` varchar(50) NOT NULL,
  `OrdCompra` varchar(10) NOT NULL,
  `Responsable` varchar(50) NOT NULL,
  PRIMARY KEY (`NOrden`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `orden_servicio`
--

INSERT INTO `orden_servicio` (`Estatus`, `NOrden`, `Fecha`, `Elaborado_Por`, `Empresa`, `OrdCompra`, `Responsable`) VALUES
('Inactivo', 1, '2020-07-05', 'Juan Escutia', 'Nisan', '1', 'Rodrigo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oserv_prod`
--

DROP TABLE IF EXISTS `oserv_prod`;
CREATE TABLE IF NOT EXISTS `oserv_prod` (
  `CodProducto` varchar(50) NOT NULL,
  `NOrden` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`CodProducto`,`NOrden`),
  KEY `CodProducto` (`CodProducto`,`NOrden`),
  KEY `MOrden` (`NOrden`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `oserv_prod`
--

INSERT INTO `oserv_prod` (`CodProducto`, `NOrden`) VALUES
('AJDGHS745', 1),
('PC7393B', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `CodProducto` varchar(50) NOT NULL,
  `Nombre` text NOT NULL,
  `Marca` text NOT NULL,
  `Modelo` text NOT NULL,
  `Descripcion` text NOT NULL,
  `FechaRegistro` date NOT NULL,
  `Precio` decimal(20,0) NOT NULL,
  `Categoria` text NOT NULL,
  `Stock` int(11) NOT NULL,
  `Num_Serie` varchar(50) NOT NULL,
  `Estatus` varchar(50) NOT NULL,
  PRIMARY KEY (`CodProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`CodProducto`, `Nombre`, `Marca`, `Modelo`, `Descripcion`, `FechaRegistro`, `Precio`, `Categoria`, `Stock`, `Num_Serie`, `Estatus`) VALUES
('AJDGHS745', 'Volante', 'Cars', 'hd456', 'de piel', '2020-07-23', '100', 'Volante', 0, '', ''),
('HSFS4548', 'Aleron', 'Fast', 'GFD45', 'Trasera', '2020-07-23', '3000', 'Adorno', 0, '', ''),
('PC7393B', 'Llantas', 'Rapidos', 'Lyt38', 'Todo terreno', '2020-07-23', '250', 'llantas', 0, '', ''),
('wqeewqewq', 'aweqwe', 'awseqwe', 'qweqw', 'qweqw', '2020-11-02', '32', 'weqeqweqw', 32, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

DROP TABLE IF EXISTS `proveedor`;
CREATE TABLE IF NOT EXISTS `proveedor` (
  `IDProveedor` int(5) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `ApellidoPaterno` varchar(70) NOT NULL,
  `ApellidoMaterno` varchar(70) NOT NULL,
  `RFC` varchar(50) NOT NULL,
  `Fax` varchar(40) NOT NULL,
  `Telefono` int(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  PRIMARY KEY (`IDProveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`IDProveedor`, `Nombre`, `ApellidoPaterno`, `ApellidoMaterno`, `RFC`, `Fax`, `Telefono`, `Correo`) VALUES
(1, 'Miguel', 'Ruíz', 'Orellano', '187VBSYV6', '5634208', 1234567890, 'miguel@outlook.com'),
(2, 'Cristiano', 'Chech', 'Murias', '76Y3GFV21', '86637519', 1998765432, 'cris@gmail.com'),
(3, 'Jorge', 'Arteaga', 'Torres', '827364', '623515', 2147483647, 'ma@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `IDUsuario` int(5) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `apellidoPaterno` varchar(70) NOT NULL,
  `apellidoMaterno` varchar(70) NOT NULL,
  `Area` varchar(70) NOT NULL,
  `Puesto` varchar(70) NOT NULL,
  `tipoUsuario` varchar(70) NOT NULL,
  `grupoTrabajo` varchar(70) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `contrasena` varchar(15) NOT NULL,
  PRIMARY KEY (`IDUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IDUsuario`, `Nombre`, `apellidoPaterno`, `apellidoMaterno`, `Area`, `Puesto`, `tipoUsuario`, `grupoTrabajo`, `correo`, `contrasena`) VALUES
(1, 'pacol', 'rosas', 'felix', 'administrativo', 'jefazo', 'master', 'principal', 'mecatec@mecatec.mx', 'mecatec'),
(4, 'jimena', 'pérez', 'robledo', 'administrativa', 'jefa', 'admin', 'minbvlk', 'jimena@gmail.com', 'jimena');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

DROP TABLE IF EXISTS `venta`;
CREATE TABLE IF NOT EXISTS `venta` (
  `CodVenta` int(20) NOT NULL AUTO_INCREMENT,
  `Cantidad` decimal(10,2) NOT NULL,
  `Importe` decimal(10,2) NOT NULL,
  `Fecha` date NOT NULL,
  `CodProducto` varchar(50) NOT NULL,
  PRIMARY KEY (`CodVenta`),
  KEY `CodProducto` (`CodProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`CodVenta`, `Cantidad`, `Importe`, `Fecha`, `CodProducto`) VALUES
(11, '1000.00', '1000.00', '2020-11-02', 'PC7393B'),
(12, '100.00', '25000.00', '2020-11-18', 'PC7393B');

-- --------------------------------------------------------

--
-- Estructura para la vista `garantia`
--
DROP TABLE IF EXISTS `garantia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `garantia`  AS  select `venta`.`CodVenta` AS `Venta`,`venta`.`Fecha` AS `Fecha`,sum(`venta`.`Importe`) AS `Costo` from `venta` group by `venta`.`CodVenta` ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`IDContacto`) REFERENCES `contactos` (`IDContacto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`IDProveedor`) REFERENCES `proveedor` (`IDProveedor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compra_ibfk_3` FOREIGN KEY (`id_CatalogoLinea`) REFERENCES `catalogolinea` (`id_CatalogoLinea`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compra_ibfk_4` FOREIGN KEY (`id_Direccion`) REFERENCES `catalogodirecciones` (`id_Direccion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `corte`
--
ALTER TABLE `corte`
  ADD CONSTRAINT `corte_ibfk_1` FOREIGN KEY (`CodVenta`) REFERENCES `venta` (`CodVenta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `devolucion`
--
ALTER TABLE `devolucion`
  ADD CONSTRAINT `devolucion_ibfk_1` FOREIGN KEY (`CodProducto`) REFERENCES `inv_prod` (`CodProducto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inv_prod`
--
ALTER TABLE `inv_prod`
  ADD CONSTRAINT `inv_prod_ibfk_2` FOREIGN KEY (`CodProducto`) REFERENCES `producto` (`CodProducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inv_prod_ibfk_3` FOREIGN KEY (`CodProducto`) REFERENCES `venta` (`CodProducto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ordco_producto`
--
ALTER TABLE `ordco_producto`
  ADD CONSTRAINT `ordco_producto_ibfk_1` FOREIGN KEY (`IDOrdenC`) REFERENCES `orden_compra` (`IDOrdenC`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ordco_producto_ibfk_2` FOREIGN KEY (`CodProducto`) REFERENCES `producto` (`CodProducto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `orden_compra`
--
ALTER TABLE `orden_compra`
  ADD CONSTRAINT `orden_compra_ibfk_1` FOREIGN KEY (`Proovedor`) REFERENCES `proveedor` (`IDProveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `oserv_prod`
--
ALTER TABLE `oserv_prod`
  ADD CONSTRAINT `oserv_prod_ibfk_1` FOREIGN KEY (`CodProducto`) REFERENCES `producto` (`CodProducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `oserv_prod_ibfk_2` FOREIGN KEY (`NOrden`) REFERENCES `orden_servicio` (`NOrden`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`CodProducto`) REFERENCES `producto` (`CodProducto`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
