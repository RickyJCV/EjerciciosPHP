-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2019 a las 20:26:53
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `distroada`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distros`
--

CREATE TABLE `distros` (
  `id` int(11) NOT NULL,
  `nombre` varchar(180) NOT NULL,
  `version` varchar(80) NOT NULL,
  `descripcion` text NOT NULL,
  `mes` int(2) NOT NULL,
  `anno` int(4) NOT NULL,
  `estable` tinyint(1) NOT NULL,
  `distribucion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `distros`
--

INSERT INTO `distros` (`id`, `nombre`, `version`, `descripcion`, `mes`, `anno`, `estable`, `distribucion`) VALUES
(1, 'Kaos', '5.17', 'The KaOS team has published a new snapshot of the distribution\'s rolling desktop operating system. The project is removing Python 2 packages and is publishing cutting edge packages for KDE Plasma 5.17.', 10, 2019, 1, 'KDE'),
(2, 'Ubuntu', '19.2', 'aaaaaaaaaa', 11, 2019, 0, 'KDE'),
(3, 'Kali Linux', '10.2', 'Se usa para hackear', 4, 2012, 0, 'KDE'),
(4, 'Kali Linux', '10.3', 'Se usa para hackear', 5, 2012, 0, 'KDE'),
(5, 'Kali Linux', '10.4', 'Se usa para hackear', 6, 2012, 0, 'KDE'),
(6, 'Kali Linux', '10.5', 'Se usa para hackear', 9, 2012, 1, 'KDE'),
(8, 'Kali Linux', '10', 'Se usa para hackear', 1, 2012, 0, 'KDE');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `distros`
--
ALTER TABLE `distros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `distros`
--
ALTER TABLE `distros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
