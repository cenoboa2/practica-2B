-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-01-2022 a las 18:58:47
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `basedatos1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_computadora`
--

CREATE TABLE `tabla_computadora` (
  `ID` int(20) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `procesador` varchar(20) NOT NULL,
  `memoria` varchar(20) NOT NULL,
  `pulgadas` float NOT NULL,
  `color` varchar(20) NOT NULL,
  `disco` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tabla_computadora`
--

INSERT INTO `tabla_computadora` (`ID`, `marca`, `procesador`, `memoria`, `pulgadas`, `color`, `disco`) VALUES
(7, 'HP', 'INTEL CORE i3', '4GB', 14, 'GRIS', '1TB'),
(8, 'SAMSUNG', 'INTEL PENTIUM T4500', '3GB', 15.6, 'GRIS', '320 GB'),
(9, 'LENOVO', 'INTEL CORE i3', '8 GB', 15.6, 'CAFE', '1 TB'),
(10, 'DELL', 'AMD Ryzen 5', '8GB', 15.6, 'GRIS', '256 GB'),
(11, 'ASUS', 'AMD Ryzen 5', '8 GB', 15.6, 'NEGRO', '512 GB');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_pais`
--

CREATE TABLE `tabla_pais` (
  `ID` int(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `capital` varchar(20) NOT NULL,
  `idioma_prin` varchar(20) NOT NULL,
  `poblacion` int(20) NOT NULL,
  `moneda_prin` varchar(20) NOT NULL,
  `forma_gobierno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tabla_pais`
--

INSERT INTO `tabla_pais` (`ID`, `nombre`, `capital`, `idioma_prin`, `poblacion`, `moneda_prin`, `forma_gobierno`) VALUES
(7, 'PERÚ', 'LIMA', 'ESPAÑOL', 33149016, 'SOL', 'PRESIDENCIAL'),
(8, 'ESPAÑA', 'MADRID', 'CASTELLANO', 47450795, 'EURO', 'MONARQUÍA PARLAMENTA'),
(9, 'INGLATERRA', 'LONDRES', 'INGLÉS', 51383000, 'LIBRA ESTERLINA', 'PARLAMENTARIO'),
(10, 'ESTADOS UNIDOS DE AM', 'WASHINGTON D.C.', 'INGLÉS', 331449281, 'DÓLAR', 'PRESIDENCIAL'),
(11, 'ECUADOR', 'QUITO', 'ESPAÑOL', 17803339, 'DÓLAR', 'PRESIDENCIAL');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabla_computadora`
--
ALTER TABLE `tabla_computadora`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tabla_pais`
--
ALTER TABLE `tabla_pais`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabla_computadora`
--
ALTER TABLE `tabla_computadora`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tabla_pais`
--
ALTER TABLE `tabla_pais`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
