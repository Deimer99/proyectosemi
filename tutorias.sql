-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-02-2020 a las 04:13:47
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tutorias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `Cedula` int(255) NOT NULL,
  `Nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`Cedula`, `Nombre`) VALUES
(31488, 'DANILO OLIVOS'),
(1143389166, 'SIXTO FIGUEROA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudianteauxiliar`
--

CREATE TABLE `estudianteauxiliar` (
  `cedula` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudianteauxiliar`
--

INSERT INTO `estudianteauxiliar` (`cedula`) VALUES
(31488);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutor`
--

CREATE TABLE `tutor` (
  `idTutor` int(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `primer apellido` varchar(30) NOT NULL,
  `materia` varchar(30) NOT NULL,
  `edad` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tutor`
--

INSERT INTO `tutor` (`idTutor`, `nombre`, `primer apellido`, `materia`, `edad`) VALUES
(123, 'JUAN JOSE AYALA', 'Ayala', 'Programacion', 19),
(1234, 'CARLOS MEZA', 'Meza', 'Matematicas y fisica', 36),
(12345, 'CAMILA CARDONA', 'Cardona', 'Biologia y quimica', 28),
(123456, 'WILIAM ANDERSON', 'Anderson', 'Ingles y frances', 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutorauxiliar`
--

CREATE TABLE `tutorauxiliar` (
  `cedula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tutorauxiliar`
--

INSERT INTO `tutorauxiliar` (`cedula`) VALUES
(1234);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutorias`
--

CREATE TABLE `tutorias` (
  `activo` int(11) NOT NULL,
  `idTutoria` int(255) NOT NULL,
  `idTutor` int(30) NOT NULL,
  `idEstudiante` int(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `color` varchar(255) NOT NULL,
  `textColor` varchar(255) NOT NULL,
  `start` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tutorias`
--

INSERT INTO `tutorias` (`activo`, `idTutoria`, `idTutor`, `idEstudiante`, `title`, `descripcion`, `color`, `textColor`, `start`) VALUES
(1, 2746, 1234, 1143389166, 'TUTORIA', 'NOMBRE DEL TUTOR: CARLOS MEZA<br>CEDULA TUTOR: 1234<br>NOMBRE DEL ESTUDIANTE: SIXTO FIGUEROA<br> CEDULA ESTUDIANTE: 1143389166<br>HORA DE LA TUTORIA: 14:00', '#1FE9E9', '#FFFFFF', '2020-02-15 14:00:00'),
(1, 9611, 1234, 31488, 'TUTORIA', 'NOMBRE DEL TUTOR: CARLOS MEZA<br>CEDULA TUTOR: 1234<br>NOMBRE DEL ESTUDIANTE: DANILO OLIVOS<br> CEDULA ESTUDIANTE: 31488<br>HORA DE LA TUTORIA: 14:00', '#1FE9E9', '#FFFFFF', '2020-02-15 14:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`Cedula`);

--
-- Indices de la tabla `tutor`
--
ALTER TABLE `tutor`
  ADD UNIQUE KEY `Indices` (`idTutor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
