-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-04-2015 a las 15:35:29
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proovedores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE IF NOT EXISTS `contactos` (
  `idContacto` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `RFC` varchar(100) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Estado` varchar(100) NOT NULL,
  `Pais` varchar(100) NOT NULL,
  `Numero` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  PRIMARY KEY (`idContacto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`idContacto`, `Nombre`, `RFC`, `Direccion`, `Estado`, `Pais`, `Numero`, `Correo`) VALUES
(1, 'hola2', '', '', '', '', '', ''),
(2, 'perfecto', '', '', '', '', '', ''),
(3, 'hola3', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proovedores`
--

CREATE TABLE IF NOT EXISTS `proovedores` (
  `idProovedor` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `codigoPostal` varchar(100) NOT NULL,
  `RFC` varchar(100) NOT NULL,
  `Estado` varchar(100) NOT NULL,
  `Pais` varchar(100) NOT NULL,
  `Numero1` varchar(100) NOT NULL,
  `Numero2` varchar(100) NOT NULL,
  `Numero3` varchar(100) NOT NULL,
  `Correo1` varchar(100) NOT NULL,
  `Correo2` varchar(100) NOT NULL,
  `Correo3` varchar(100) NOT NULL,
  `Categoria` varchar(100) NOT NULL,
  PRIMARY KEY (`idProovedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `proovedores`
--

INSERT INTO `proovedores` (`idProovedor`, `Nombre`, `Direccion`, `codigoPostal`, `RFC`, `Estado`, `Pais`, `Numero1`, `Numero2`, `Numero3`, `Correo1`, `Correo2`, `Correo3`, `Categoria`) VALUES
(8, 'alejandro7', 'i', 'ji', 'ij', 'ji', 'ji', 'ji', 'j', 'ij', 'ij', 'ij', 'j', ''),
(9, 'ei2jwiwj2wji', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proovedorescontactos`
--

CREATE TABLE IF NOT EXISTS `proovedorescontactos` (
  `idProovedor` int(100) NOT NULL,
  `idContacto` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proovedorescontactos`
--

INSERT INTO `proovedorescontactos` (`idProovedor`, `idContacto`) VALUES
(8, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
