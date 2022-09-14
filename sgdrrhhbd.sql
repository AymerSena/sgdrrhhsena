-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2021 a las 01:53:56
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sgdrrhhbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblarea`
--

CREATE TABLE `tblarea` (
  `AreCodigo` int(12) NOT NULL,
  `AreNombre` varchar(30) NOT NULL DEFAULT '',
  `AreDescripcion` varchar(30) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblausencias`
--

CREATE TABLE `tblausencias` (
  `AusCodigo` int(12) NOT NULL,
  `AusTipo` varchar(20) NOT NULL DEFAULT '',
  `AusDescripcion` varchar(20) NOT NULL DEFAULT '',
  `AusForUsuar` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldocumento`
--

CREATE TABLE `tbldocumento` (
  `DocCodigo` int(12) NOT NULL,
  `DocTipo` varchar(20) NOT NULL,
  `DocDescripcion` varchar(40) NOT NULL,
  `DocAdjunto` varchar(50) DEFAULT NULL,
  `DocForUsuario` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbldocumento`
--

INSERT INTO `tbldocumento` (`DocCodigo`, `DocTipo`, `DocDescripcion`, `DocAdjunto`, `DocForUsuario`) VALUES
(1, 'Hoja de vida', 'La hoja de vida con información', 'lleno', 1002),
(2, 'Certificado de eps', 'Descripción eps afiliacion', 'Lleno', 1002),
(3, 'Certificado estudian', 'diploma de grado bachiller', 'Lleno', 1001);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblevaluaciones`
--

CREATE TABLE `tblevaluaciones` (
  `EvaCodigo` int(12) NOT NULL,
  `EvaNombre` varchar(20) NOT NULL DEFAULT '',
  `EvaDescripcion` varchar(40) NOT NULL DEFAULT '',
  `EvaForArea` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblevaluaciones`
--

INSERT INTO `tblevaluaciones` (`EvaCodigo`, `EvaNombre`, `EvaDescripcion`, `EvaForArea`) VALUES
(1, 'PrimeraEvaluacion', 'Hola', NULL),
(2, 'Segunda Evaluacion', 'Prueba con la segunda evaluación', NULL),
(3, 'Tercera Evaluacion', 'Esta debe ser la tercera evaluacion crea', NULL),
(4, 'Cuarta Pregunta ', 'Cuarta demostración', NULL),
(5, 'Quinta eVA', 'Descripcion ', NULL),
(6, '6 evaluacion', 'Descrip 6', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblhistovaca`
--

CREATE TABLE `tblhistovaca` (
  `HisCodigo` int(12) NOT NULL,
  `HisFechaInicio` date NOT NULL,
  `HisFechaRegreso` date NOT NULL,
  `HisFechaSolicitud` date NOT NULL,
  `HisEstado` varchar(20) NOT NULL DEFAULT '',
  `HisForUsuCed` int(12) DEFAULT NULL,
  `HisDiasSolici` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblperfiles`
--

CREATE TABLE `tblperfiles` (
  `PerCodigo` int(12) NOT NULL,
  `PerTipo` varchar(15) NOT NULL DEFAULT '',
  `PerDescripcion` varchar(40) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblperfiles`
--

INSERT INTO `tblperfiles` (`PerCodigo`, `PerTipo`, `PerDescripcion`) VALUES
(1, 'Administrador', 'Perfil que cuenta con todos los permisos'),
(2, 'Jefe Dir Area', 'Perfil que se le otorga a responsables d'),
(3, 'Empleado', 'Perfil bajo en el sistema y que tiene fu');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpreguntaseva`
--

CREATE TABLE `tblpreguntaseva` (
  `CriCodigo` int(12) NOT NULL,
  `CriPregunta` varchar(50) NOT NULL DEFAULT '',
  `CriValorPreg` int(3) NOT NULL,
  `CriForeEvaluacion` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblpreguntaseva`
--

INSERT INTO `tblpreguntaseva` (`CriCodigo`, `CriPregunta`, `CriValorPreg`, `CriForeEvaluacion`) VALUES
(1, 'Pregunta', 20, NULL),
(2, 'Pregunta1', 32, NULL),
(3, 'Pregunta 3', 45, NULL),
(4, 'Pregunta 4', 20, NULL),
(5, 'Pregunta?', 50, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblresultadoeva`
--

CREATE TABLE `tblresultadoeva` (
  `ResCodigo` int(12) NOT NULL,
  `ResNota` int(3) NOT NULL,
  `ResForUsuario` int(12) DEFAULT NULL,
  `ResForPregun` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblusuario`
--

CREATE TABLE `tblusuario` (
  `UsuCedula` int(12) NOT NULL,
  `UsuNombre` varchar(20) DEFAULT NULL,
  `UsuApellido` varchar(20) DEFAULT NULL,
  `UsuCargo` varchar(20) DEFAULT NULL,
  `UsuGenero` char(1) DEFAULT NULL,
  `UsuEps` varchar(20) DEFAULT NULL,
  `UsuTelefono` varchar(20) DEFAULT NULL,
  `UsuBarrio` varchar(20) DEFAULT NULL,
  `UsuDireccion` varchar(20) DEFAULT NULL,
  `UsuFechaNaci` date DEFAULT NULL,
  `UsuFechaExpCc` date DEFAULT NULL,
  `UsuCorreo` varchar(20) DEFAULT NULL,
  `UsuTIpoSangre` char(3) DEFAULT NULL,
  `UsuContrasenaSis` varchar(25) DEFAULT NULL,
  `UsuFechaContrato` date DEFAULT NULL,
  `UsuForaPerfil` int(12) DEFAULT NULL,
  `UsuForaArea` int(12) DEFAULT NULL,
  `UsuDiasAcuVacaci` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblusuario`
--

INSERT INTO `tblusuario` (`UsuCedula`, `UsuNombre`, `UsuApellido`, `UsuCargo`, `UsuGenero`, `UsuEps`, `UsuTelefono`, `UsuBarrio`, `UsuDireccion`, `UsuFechaNaci`, `UsuFechaExpCc`, `UsuCorreo`, `UsuTIpoSangre`, `UsuContrasenaSis`, `UsuFechaContrato`, `UsuForaPerfil`, `UsuForaArea`, `UsuDiasAcuVacaci`) VALUES
(111, 'Prueba', 'NMa', '', '', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(1001, 'Johhan', 'asdfasdfasdfasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Empleado01', NULL, 3, NULL, 0),
(1002, 'Miguel', 'Copete', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jefe01', NULL, 2, NULL, 0),
(111111111, 'Pepito', 'Perez', 'Analista Sistemas', 'M', 'Eps Salud OCU', '123123|123', 'EL BCKS', 'En calle 21 avinida ', '2012-09-07', '2016-09-08', 'pepito@pepito.com.co', 'AB+', 'Pepito01', '2019-09-01', 3, NULL, 0),
(1110000001, 'El Admin Aymer', 'Suescun Ruiz', 'Analista Sistemas', 'M', 'SALUD PRO', '3177777777', 'BONITO', 'CALLE 32 DEL PALA # ', '1998-09-25', '2012-09-11', 'aycruz04@misena.edu.', 'C+', 'NoMeLaSe01', '2021-09-01', 1, NULL, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblarea`
--
ALTER TABLE `tblarea`
  ADD PRIMARY KEY (`AreCodigo`);

--
-- Indices de la tabla `tblausencias`
--
ALTER TABLE `tblausencias`
  ADD PRIMARY KEY (`AusCodigo`),
  ADD KEY `FK2 UsuCedula` (`AusForUsuar`);

--
-- Indices de la tabla `tbldocumento`
--
ALTER TABLE `tbldocumento`
  ADD PRIMARY KEY (`DocCodigo`),
  ADD KEY `FK1 UsuCedula` (`DocForUsuario`);

--
-- Indices de la tabla `tblevaluaciones`
--
ALTER TABLE `tblevaluaciones`
  ADD PRIMARY KEY (`EvaCodigo`),
  ADD UNIQUE KEY `EvaCodigo` (`EvaCodigo`),
  ADD UNIQUE KEY `EvaCodigo_2` (`EvaCodigo`),
  ADD KEY `FK2 AreCodigo` (`EvaForArea`);

--
-- Indices de la tabla `tblhistovaca`
--
ALTER TABLE `tblhistovaca`
  ADD PRIMARY KEY (`HisCodigo`),
  ADD KEY `FK2 UsuCedulaF` (`HisForUsuCed`);

--
-- Indices de la tabla `tblperfiles`
--
ALTER TABLE `tblperfiles`
  ADD PRIMARY KEY (`PerCodigo`);

--
-- Indices de la tabla `tblpreguntaseva`
--
ALTER TABLE `tblpreguntaseva`
  ADD PRIMARY KEY (`CriCodigo`),
  ADD KEY `FK1 EvaCreaFor` (`CriForeEvaluacion`);

--
-- Indices de la tabla `tblresultadoeva`
--
ALTER TABLE `tblresultadoeva`
  ADD PRIMARY KEY (`ResCodigo`),
  ADD KEY `FK3 UsuCedula` (`ResForUsuario`),
  ADD KEY `FK2 CriCod` (`ResForPregun`);

--
-- Indices de la tabla `tblusuario`
--
ALTER TABLE `tblusuario`
  ADD PRIMARY KEY (`UsuCedula`),
  ADD KEY `FK PerCodigo` (`UsuForaPerfil`),
  ADD KEY `FK1 AreCodigo` (`UsuForaArea`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbldocumento`
--
ALTER TABLE `tbldocumento`
  MODIFY `DocCodigo` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tblevaluaciones`
--
ALTER TABLE `tblevaluaciones`
  MODIFY `EvaCodigo` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tblhistovaca`
--
ALTER TABLE `tblhistovaca`
  MODIFY `HisCodigo` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tblpreguntaseva`
--
ALTER TABLE `tblpreguntaseva`
  MODIFY `CriCodigo` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tblresultadoeva`
--
ALTER TABLE `tblresultadoeva`
  MODIFY `ResCodigo` int(12) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tblausencias`
--
ALTER TABLE `tblausencias`
  ADD CONSTRAINT `FK2 UsuCedula` FOREIGN KEY (`AusForUsuar`) REFERENCES `tblusuario` (`UsuCedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbldocumento`
--
ALTER TABLE `tbldocumento`
  ADD CONSTRAINT `FK1 UsuCedula` FOREIGN KEY (`DocForUsuario`) REFERENCES `tblusuario` (`UsuCedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblevaluaciones`
--
ALTER TABLE `tblevaluaciones`
  ADD CONSTRAINT `FK2 AreCodigo` FOREIGN KEY (`EvaForArea`) REFERENCES `tblarea` (`AreCodigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblhistovaca`
--
ALTER TABLE `tblhistovaca`
  ADD CONSTRAINT `FK2 UsuCedulaF` FOREIGN KEY (`HisForUsuCed`) REFERENCES `tblusuario` (`UsuCedula`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tblpreguntaseva`
--
ALTER TABLE `tblpreguntaseva`
  ADD CONSTRAINT `FK1 EvaCreaFor` FOREIGN KEY (`CriForeEvaluacion`) REFERENCES `tblevaluaciones` (`EvaCodigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblresultadoeva`
--
ALTER TABLE `tblresultadoeva`
  ADD CONSTRAINT `FK2 CriCod` FOREIGN KEY (`ResForPregun`) REFERENCES `tblpreguntaseva` (`CriCodigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK3 UsuCedula` FOREIGN KEY (`ResForUsuario`) REFERENCES `tblusuario` (`UsuCedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblusuario`
--
ALTER TABLE `tblusuario`
  ADD CONSTRAINT `FK PerCodigo` FOREIGN KEY (`UsuForaPerfil`) REFERENCES `tblperfiles` (`PerCodigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK1 AreCodigo` FOREIGN KEY (`UsuForaArea`) REFERENCES `tblarea` (`AreCodigo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
