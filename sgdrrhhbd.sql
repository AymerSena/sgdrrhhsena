-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
<<<<<<< HEAD
-- Tiempo de generación: 07-10-2021 a las 01:53:56
=======
<<<<<<< HEAD
-- Tiempo de generación: 26-03-2022 a las 15:51:36
=======
-- Tiempo de generación: 07-10-2021 a las 01:53:56
>>>>>>> codaym
>>>>>>> codaym
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
-- Estructura Stand-in para la vista `areasdefuncionarios`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `areasdefuncionarios` (
`UsuNombre` varchar(20)
,`UsuApellido` varchar(20)
,`AreNombre` varchar(30)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `areasysusevaluaciones`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `areasysusevaluaciones` (
`AreNombre` varchar(30)
,`EvaNombre` varchar(20)
,`EvaDescripcion` varchar(40)
);

-- --------------------------------------------------------

--
=======
>>>>>>> codaym
>>>>>>> codaym
-- Estructura de tabla para la tabla `tblarea`
--

CREATE TABLE `tblarea` (
  `AreCodigo` int(12) NOT NULL,
  `AreNombre` varchar(30) NOT NULL DEFAULT '',
  `AreDescripcion` varchar(30) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

<<<<<<< HEAD
=======
<<<<<<< HEAD
--
-- Volcado de datos para la tabla `tblarea`
--

INSERT INTO `tblarea` (`AreCodigo`, `AreNombre`, `AreDescripcion`) VALUES
(0, 'Administrativa', 'Área vincula todas las áreas'),
(1, 'Sistemas', 'Área de proceso IT de la empre'),
(2, 'Contabilidad', 'Área contable y responsable de');

=======
>>>>>>> codaym
>>>>>>> codaym
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblausencias`
--

CREATE TABLE `tblausencias` (
  `AusCodigo` int(12) NOT NULL,
<<<<<<< HEAD
  `AusTipo` varchar(20) NOT NULL DEFAULT '',
  `AusDescripcion` varchar(20) NOT NULL DEFAULT '',
  `AusForUsuar` int(12) DEFAULT NULL
=======
<<<<<<< HEAD
  `AusFechaInicio` date DEFAULT NULL,
  `AusFechaRegreso` date DEFAULT NULL,
  `AusFechaSolicitud` date DEFAULT NULL,
  `AusEstado` varchar(20) NOT NULL DEFAULT '',
  `AusFechaInterr` date NOT NULL,
  `AusForUsuCed` int(12) DEFAULT NULL,
  `AusDiasSolici` int(2) NOT NULL,
  `AusDocumen` varchar(50) NOT NULL,
  `AusForTipAus` int(3) DEFAULT NULL
=======
  `AusTipo` varchar(20) NOT NULL DEFAULT '',
  `AusDescripcion` varchar(20) NOT NULL DEFAULT '',
  `AusForUsuar` int(12) DEFAULT NULL
>>>>>>> codaym
>>>>>>> codaym
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
<<<<<<< HEAD
=======
<<<<<<< HEAD
-- Estructura de tabla para la tabla `tblcontratos`
--

CREATE TABLE `tblcontratos` (
  `ContId` int(3) NOT NULL,
  `ContTipo` varchar(40) NOT NULL,
  `ContDescripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblcontratos`
--

INSERT INTO `tblcontratos` (`ContId`, `ContTipo`, `ContDescripcion`) VALUES
(1, 'INDEFINIDO', 'INDEFINIDO'),
(2, 'TERMINIO FIJO', 'TERMINO FIJO');

-- --------------------------------------------------------

--
=======
>>>>>>> codaym
>>>>>>> codaym
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
(1, 'PrimeraEvaluacion', 'Hola', 1),
(2, 'Segunda Evaluacion', 'Prueba con la segunda evaluación', 0),
(3, 'Tercera Evaluacion', 'Esta debe ser la tercera evaluacion crea', 2),
(4, 'Cuarta Pregunta ', 'Cuarta demostración', 0),
(5, 'Quinta eVA', 'Descripcion ', 0),
(6, '6 evaluacion', 'Descrip 6', 0);
=======
>>>>>>> codaym
(1, 'PrimeraEvaluacion', 'Hola', NULL),
(2, 'Segunda Evaluacion', 'Prueba con la segunda evaluación', NULL),
(3, 'Tercera Evaluacion', 'Esta debe ser la tercera evaluacion crea', NULL),
(4, 'Cuarta Pregunta ', 'Cuarta demostración', NULL),
(5, 'Quinta eVA', 'Descripcion ', NULL),
(6, '6 evaluacion', 'Descrip 6', NULL);
<<<<<<< HEAD
=======
>>>>>>> codaym
>>>>>>> codaym

-- --------------------------------------------------------

--
<<<<<<< HEAD
=======
<<<<<<< HEAD
-- Estructura de tabla para la tabla `tblexperiencia`
--

CREATE TABLE `tblexperiencia` (
  `ExpId` int(12) NOT NULL,
  `ExpEmpresaEntida` varchar(50) NOT NULL DEFAULT '',
  `ExpFechaIncio` date NOT NULL,
  `ExpFechaSalida` date NOT NULL,
  `ExpCargoDes` varchar(50) NOT NULL DEFAULT '',
  `ExpDocumentoCer` varchar(50) NOT NULL DEFAULT '',
  `ExpForUsuario` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblexperiencia`
--

INSERT INTO `tblexperiencia` (`ExpId`, `ExpEmpresaEntida`, `ExpFechaIncio`, `ExpFechaSalida`, `ExpCargoDes`, `ExpDocumentoCer`, `ExpForUsuario`) VALUES
(1, 'davivienda', '2018-02-01', '2022-01-01', 'Analista algo', 'cargado', 1110000001),
(2, 'bbvva', '2021-12-01', '2022-02-24', 'Vendedor', 'cargado', 1002);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblfirmas`
--

CREATE TABLE `tblfirmas` (
  `firmaCod` int(3) NOT NULL,
  `firmaUrl` varchar(60) NOT NULL,
  `firmaUsuDocu` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblfirmas`
--

INSERT INTO `tblfirmas` (`firmaCod`, `firmaUrl`, `firmaUsuDocu`) VALUES
(1, 'Firmas/firmante.png', 1110000001);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblfuncionescar`
--

CREATE TABLE `tblfuncionescar` (
  `FunId` int(12) NOT NULL,
  `FunTitulo` varchar(25) NOT NULL DEFAULT '',
  `FunDescripcion` varchar(60) NOT NULL DEFAULT '',
  `FunForUsuDocumen` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblhisevaluacionesr`
--

CREATE TABLE `tblhisevaluacionesr` (
  `EvRCodigo` int(12) DEFAULT NULL,
  `EvRFecha` date DEFAULT NULL,
  `EvRForUsuario` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblhorarios`
--

CREATE TABLE `tblhorarios` (
  `horarIdPK` int(3) NOT NULL,
  `horarios` varchar(50) NOT NULL DEFAULT '',
  `horariDescripcion` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblhorarios`
--

INSERT INTO `tblhorarios` (`horarIdPK`, `horarios`, `horariDescripcion`) VALUES
(1, 'DIURNO', 'Jornada normal '),
(2, 'NOCTURNO', 'Jornada nocturna ');

=======
>>>>>>> codaym
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

<<<<<<< HEAD
=======
>>>>>>> codaym
>>>>>>> codaym
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
(1, 'Pregunta', 20, 1),
(2, 'Pregunta1', 32, 1),
(3, 'Pregunta 3', 45, 1),
(4, 'Pregunta 4', 20, 2),
(5, 'Pregunta?', 50, 2);
=======
>>>>>>> codaym
(1, 'Pregunta', 20, NULL),
(2, 'Pregunta1', 32, NULL),
(3, 'Pregunta 3', 45, NULL),
(4, 'Pregunta 4', 20, NULL),
(5, 'Pregunta?', 50, NULL);
<<<<<<< HEAD
=======
>>>>>>> codaym
>>>>>>> codaym

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblresultadoeva`
--

CREATE TABLE `tblresultadoeva` (
  `ResCodigo` int(12) NOT NULL,
<<<<<<< HEAD
  `ResNota` int(3) NOT NULL,
  `ResForUsuario` int(12) DEFAULT NULL,
  `ResForPregun` int(12) DEFAULT NULL
=======
<<<<<<< HEAD
  `ResRespuesta` varchar(4) NOT NULL,
  `ResNota` int(3) NOT NULL,
  `ResForPregun` int(12) DEFAULT NULL,
  `ResForEvrHis` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltiposausen`
--

CREATE TABLE `tbltiposausen` (
  `TipID` int(3) NOT NULL,
  `TipTipo` varchar(50) NOT NULL DEFAULT '',
  `TipDescripcion` varchar(50) NOT NULL DEFAULT '',
  `TipVigencia` char(2) DEFAULT NULL
=======
  `ResNota` int(3) NOT NULL,
  `ResForUsuario` int(12) DEFAULT NULL,
  `ResForPregun` int(12) DEFAULT NULL
>>>>>>> codaym
>>>>>>> codaym
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
<<<<<<< HEAD
  `UsuForaPerfil` int(12) DEFAULT NULL,
  `UsuForaArea` int(12) DEFAULT NULL,
  `UsuDiasAcuVacaci` int(3) NOT NULL
=======
<<<<<<< HEAD
  `UsuNoHijos` int(3) NOT NULL,
  `UsuForaPerfil` int(12) DEFAULT NULL,
  `UsuForaArea` int(12) DEFAULT NULL,
  `UsuDiasAcuVacaci` int(3) NOT NULL,
  `UsuFotoPerfil` varchar(200) NOT NULL,
  `UsuSalario` int(10) NOT NULL,
  `UsuHorario` int(3) DEFAULT NULL,
  `UsuTipoContra` int(3) DEFAULT NULL
=======
  `UsuForaPerfil` int(12) DEFAULT NULL,
  `UsuForaArea` int(12) DEFAULT NULL,
  `UsuDiasAcuVacaci` int(3) NOT NULL
>>>>>>> codaym
>>>>>>> codaym
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblusuario`
--

<<<<<<< HEAD
=======
<<<<<<< HEAD
INSERT INTO `tblusuario` (`UsuCedula`, `UsuNombre`, `UsuApellido`, `UsuCargo`, `UsuGenero`, `UsuEps`, `UsuTelefono`, `UsuBarrio`, `UsuDireccion`, `UsuFechaNaci`, `UsuFechaExpCc`, `UsuCorreo`, `UsuTIpoSangre`, `UsuContrasenaSis`, `UsuFechaContrato`, `UsuNoHijos`, `UsuForaPerfil`, `UsuForaArea`, `UsuDiasAcuVacaci`, `UsuFotoPerfil`, `UsuSalario`, `UsuHorario`, `UsuTipoContra`) VALUES
(0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, '', 0, NULL, NULL),
(111, 'Prueba', 'NMa', '', '', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, '', 0, NULL, NULL),
(1001, 'Johhan', 'asdfasdfasdfasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Empleado01', NULL, 0, 3, 0, 0, '', 0, NULL, NULL),
(1002, 'Miguel', 'Copete', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jefe01', NULL, 0, 2, 1, 0, '', 0, NULL, NULL),
(111111111, 'Pepito', 'Perez', 'Analista Sistemas', 'M', 'Eps Salud OCU', '123123|123', 'EL BCKS', 'En calle 21 avinida ', '2012-09-07', '2016-09-08', 'pepito@pepito.com.co', 'AB+', 'Pepito01', '2019-09-01', 0, 3, 2, 0, '', 0, NULL, NULL),
(1110000001, 'El Admin Aymer', 'Suescun Ruiz', 'Analista Sistemas', 'M', 'SALUD PRO', '3177777777', 'BONITO', 'CALLE 32 DEL PALA # ', '1998-09-25', '2012-09-11', 'aycruz04@misena.edu.', 'C+', 'NoMeLaSe01', '2021-09-01', 0, 1, 1, 0, 'Imagenes/descarga222.png', 3800000, 2, 1);

-- --------------------------------------------------------

--
-- Estructura para la vista `areasdefuncionarios`
--
DROP TABLE IF EXISTS `areasdefuncionarios`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `areasdefuncionarios`  AS SELECT `usu`.`UsuNombre` AS `UsuNombre`, `usu`.`UsuApellido` AS `UsuApellido`, `ar`.`AreNombre` AS `AreNombre` FROM (`tblusuario` `usu` join `tblarea` `ar` on(`ar`.`AreCodigo` = `usu`.`UsuForaArea`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `areasysusevaluaciones`
--
DROP TABLE IF EXISTS `areasysusevaluaciones`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `areasysusevaluaciones`  AS SELECT `ar`.`AreNombre` AS `AreNombre`, `eva`.`EvaNombre` AS `EvaNombre`, `eva`.`EvaDescripcion` AS `EvaDescripcion` FROM (`tblevaluaciones` `eva` join `tblarea` `ar` on(`ar`.`AreCodigo` = `eva`.`EvaForArea`)) ;
=======
>>>>>>> codaym
INSERT INTO `tblusuario` (`UsuCedula`, `UsuNombre`, `UsuApellido`, `UsuCargo`, `UsuGenero`, `UsuEps`, `UsuTelefono`, `UsuBarrio`, `UsuDireccion`, `UsuFechaNaci`, `UsuFechaExpCc`, `UsuCorreo`, `UsuTIpoSangre`, `UsuContrasenaSis`, `UsuFechaContrato`, `UsuForaPerfil`, `UsuForaArea`, `UsuDiasAcuVacaci`) VALUES
(111, 'Prueba', 'NMa', '', '', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(1001, 'Johhan', 'asdfasdfasdfasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Empleado01', NULL, 3, NULL, 0),
(1002, 'Miguel', 'Copete', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jefe01', NULL, 2, NULL, 0),
(111111111, 'Pepito', 'Perez', 'Analista Sistemas', 'M', 'Eps Salud OCU', '123123|123', 'EL BCKS', 'En calle 21 avinida ', '2012-09-07', '2016-09-08', 'pepito@pepito.com.co', 'AB+', 'Pepito01', '2019-09-01', 3, NULL, 0),
(1110000001, 'El Admin Aymer', 'Suescun Ruiz', 'Analista Sistemas', 'M', 'SALUD PRO', '3177777777', 'BONITO', 'CALLE 32 DEL PALA # ', '1998-09-25', '2012-09-11', 'aycruz04@misena.edu.', 'C+', 'NoMeLaSe01', '2021-09-01', 1, NULL, 0);
<<<<<<< HEAD
=======
>>>>>>> codaym
>>>>>>> codaym

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
<<<<<<< HEAD
  ADD KEY `FK2 UsuCedula` (`AusForUsuar`);
=======
<<<<<<< HEAD
  ADD KEY `FK2 UsuCedulaF` (`AusForUsuCed`),
  ADD KEY `FK2 AusTipo2` (`AusForTipAus`);

--
-- Indices de la tabla `tblcontratos`
--
ALTER TABLE `tblcontratos`
  ADD PRIMARY KEY (`ContId`);
=======
  ADD KEY `FK2 UsuCedula` (`AusForUsuar`);
>>>>>>> codaym
>>>>>>> codaym

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
<<<<<<< HEAD
=======
<<<<<<< HEAD
-- Indices de la tabla `tblexperiencia`
--
ALTER TABLE `tblexperiencia`
  ADD PRIMARY KEY (`ExpId`),
  ADD KEY `FK1 expforus` (`ExpForUsuario`);

--
-- Indices de la tabla `tblfirmas`
--
ALTER TABLE `tblfirmas`
  ADD PRIMARY KEY (`firmaCod`),
  ADD KEY `FK1 firmaDocu` (`firmaUsuDocu`);

--
-- Indices de la tabla `tblfuncionescar`
--
ALTER TABLE `tblfuncionescar`
  ADD PRIMARY KEY (`FunId`),
  ADD KEY `FK1 forUsuFuncio` (`FunForUsuDocumen`);

--
-- Indices de la tabla `tblhisevaluacionesr`
--
ALTER TABLE `tblhisevaluacionesr`
  ADD KEY `EvRForUsuario` (`EvRCodigo`),
  ADD KEY `FK1 EvRUsuario` (`EvRForUsuario`);

--
-- Indices de la tabla `tblhorarios`
--
ALTER TABLE `tblhorarios`
  ADD PRIMARY KEY (`horarIdPK`);
=======
>>>>>>> codaym
-- Indices de la tabla `tblhistovaca`
--
ALTER TABLE `tblhistovaca`
  ADD PRIMARY KEY (`HisCodigo`),
  ADD KEY `FK2 UsuCedulaF` (`HisForUsuCed`);
<<<<<<< HEAD
=======
>>>>>>> codaym
>>>>>>> codaym

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
<<<<<<< HEAD
  ADD KEY `FK3 UsuCedula` (`ResForUsuario`),
  ADD KEY `FK2 CriCod` (`ResForPregun`);
=======
<<<<<<< HEAD
  ADD KEY `FK2 CriCod` (`ResForPregun`),
  ADD KEY `FK2 EvrHistor` (`ResForEvrHis`);

--
-- Indices de la tabla `tbltiposausen`
--
ALTER TABLE `tbltiposausen`
  ADD PRIMARY KEY (`TipID`);
=======
  ADD KEY `FK3 UsuCedula` (`ResForUsuario`),
  ADD KEY `FK2 CriCod` (`ResForPregun`);
>>>>>>> codaym
>>>>>>> codaym

--
-- Indices de la tabla `tblusuario`
--
ALTER TABLE `tblusuario`
  ADD PRIMARY KEY (`UsuCedula`),
  ADD KEY `FK PerCodigo` (`UsuForaPerfil`),
<<<<<<< HEAD
  ADD KEY `FK1 AreCodigo` (`UsuForaArea`);
=======
<<<<<<< HEAD
  ADD KEY `FK1 AreCodigo` (`UsuForaArea`),
  ADD KEY `FK2 HoraId` (`UsuHorario`),
  ADD KEY `FK3 ContratoId` (`UsuTipoContra`);
=======
  ADD KEY `FK1 AreCodigo` (`UsuForaArea`);
>>>>>>> codaym
>>>>>>> codaym

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
<<<<<<< HEAD
=======
<<<<<<< HEAD
-- AUTO_INCREMENT de la tabla `tblausencias`
--
ALTER TABLE `tblausencias`
  MODIFY `AusCodigo` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblcontratos`
--
ALTER TABLE `tblcontratos`
  MODIFY `ContId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
=======
>>>>>>> codaym
>>>>>>> codaym
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
-- AUTO_INCREMENT de la tabla `tblexperiencia`
--
ALTER TABLE `tblexperiencia`
  MODIFY `ExpId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tblfirmas`
--
ALTER TABLE `tblfirmas`
  MODIFY `firmaCod` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tblfuncionescar`
--
ALTER TABLE `tblfuncionescar`
  MODIFY `FunId` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblhorarios`
--
ALTER TABLE `tblhorarios`
  MODIFY `horarIdPK` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
=======
>>>>>>> codaym
-- AUTO_INCREMENT de la tabla `tblhistovaca`
--
ALTER TABLE `tblhistovaca`
  MODIFY `HisCodigo` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
<<<<<<< HEAD
=======
>>>>>>> codaym
>>>>>>> codaym

--
-- AUTO_INCREMENT de la tabla `tblpreguntaseva`
--
ALTER TABLE `tblpreguntaseva`
  MODIFY `CriCodigo` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tblresultadoeva`
--
ALTER TABLE `tblresultadoeva`
<<<<<<< HEAD
  MODIFY `ResCodigo` int(12) NOT NULL AUTO_INCREMENT;
=======
<<<<<<< HEAD
  MODIFY `ResCodigo` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbltiposausen`
--
ALTER TABLE `tbltiposausen`
  MODIFY `TipID` int(3) NOT NULL AUTO_INCREMENT;
=======
  MODIFY `ResCodigo` int(12) NOT NULL AUTO_INCREMENT;
>>>>>>> codaym
>>>>>>> codaym

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tblausencias`
--
ALTER TABLE `tblausencias`
<<<<<<< HEAD
  ADD CONSTRAINT `FK2 UsuCedula` FOREIGN KEY (`AusForUsuar`) REFERENCES `tblusuario` (`UsuCedula`) ON DELETE CASCADE ON UPDATE CASCADE;
=======
<<<<<<< HEAD
  ADD CONSTRAINT `FK1 UsuCedaus` FOREIGN KEY (`AusForUsuCed`) REFERENCES `tblusuario` (`UsuCedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK2 AusTipo2` FOREIGN KEY (`AusForTipAus`) REFERENCES `tbltiposausen` (`TipID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
=======
  ADD CONSTRAINT `FK2 UsuCedula` FOREIGN KEY (`AusForUsuar`) REFERENCES `tblusuario` (`UsuCedula`) ON DELETE CASCADE ON UPDATE CASCADE;
>>>>>>> codaym
>>>>>>> codaym

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
<<<<<<< HEAD
=======
<<<<<<< HEAD
-- Filtros para la tabla `tblexperiencia`
--
ALTER TABLE `tblexperiencia`
  ADD CONSTRAINT `FK1 expforus` FOREIGN KEY (`ExpForUsuario`) REFERENCES `tblusuario` (`UsuCedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblfirmas`
--
ALTER TABLE `tblfirmas`
  ADD CONSTRAINT `FK1 firmaDocu` FOREIGN KEY (`firmaUsuDocu`) REFERENCES `tblusuario` (`UsuCedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblfuncionescar`
--
ALTER TABLE `tblfuncionescar`
  ADD CONSTRAINT `FK1 forUsuFuncio` FOREIGN KEY (`FunForUsuDocumen`) REFERENCES `tblusuario` (`UsuCedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblhisevaluacionesr`
--
ALTER TABLE `tblhisevaluacionesr`
  ADD CONSTRAINT `FK1 EvRUsuario` FOREIGN KEY (`EvRForUsuario`) REFERENCES `tblusuario` (`UsuCedula`) ON DELETE CASCADE ON UPDATE CASCADE;
=======
>>>>>>> codaym
-- Filtros para la tabla `tblhistovaca`
--
ALTER TABLE `tblhistovaca`
  ADD CONSTRAINT `FK2 UsuCedulaF` FOREIGN KEY (`HisForUsuCed`) REFERENCES `tblusuario` (`UsuCedula`) ON DELETE CASCADE;
<<<<<<< HEAD
=======
>>>>>>> codaym
>>>>>>> codaym

--
-- Filtros para la tabla `tblpreguntaseva`
--
ALTER TABLE `tblpreguntaseva`
  ADD CONSTRAINT `FK1 EvaCreaFor` FOREIGN KEY (`CriForeEvaluacion`) REFERENCES `tblevaluaciones` (`EvaCodigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblresultadoeva`
--
ALTER TABLE `tblresultadoeva`
<<<<<<< HEAD
  ADD CONSTRAINT `FK2 CriCod` FOREIGN KEY (`ResForPregun`) REFERENCES `tblpreguntaseva` (`CriCodigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK3 UsuCedula` FOREIGN KEY (`ResForUsuario`) REFERENCES `tblusuario` (`UsuCedula`) ON DELETE CASCADE ON UPDATE CASCADE;
=======
<<<<<<< HEAD
  ADD CONSTRAINT `FK2 CriCod` FOREIGN KEY (`ResForPregun`) REFERENCES `tblpreguntaseva` (`CriCodigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK2 EvrHistor` FOREIGN KEY (`ResForEvrHis`) REFERENCES `tblhisevaluacionesr` (`EvRCodigo`) ON DELETE CASCADE ON UPDATE CASCADE;
=======
  ADD CONSTRAINT `FK2 CriCod` FOREIGN KEY (`ResForPregun`) REFERENCES `tblpreguntaseva` (`CriCodigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK3 UsuCedula` FOREIGN KEY (`ResForUsuario`) REFERENCES `tblusuario` (`UsuCedula`) ON DELETE CASCADE ON UPDATE CASCADE;
>>>>>>> codaym
>>>>>>> codaym

--
-- Filtros para la tabla `tblusuario`
--
ALTER TABLE `tblusuario`
  ADD CONSTRAINT `FK PerCodigo` FOREIGN KEY (`UsuForaPerfil`) REFERENCES `tblperfiles` (`PerCodigo`) ON DELETE CASCADE ON UPDATE CASCADE,
<<<<<<< HEAD
  ADD CONSTRAINT `FK1 AreCodigo` FOREIGN KEY (`UsuForaArea`) REFERENCES `tblarea` (`AreCodigo`) ON DELETE CASCADE ON UPDATE CASCADE;
=======
<<<<<<< HEAD
  ADD CONSTRAINT `FK1 AreCodigo` FOREIGN KEY (`UsuForaArea`) REFERENCES `tblarea` (`AreCodigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK2 HoraId` FOREIGN KEY (`UsuHorario`) REFERENCES `tblhorarios` (`horarIdPK`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK3 ContratoId` FOREIGN KEY (`UsuTipoContra`) REFERENCES `tblcontratos` (`ContId`) ON DELETE CASCADE ON UPDATE CASCADE;
=======
  ADD CONSTRAINT `FK1 AreCodigo` FOREIGN KEY (`UsuForaArea`) REFERENCES `tblarea` (`AreCodigo`) ON DELETE CASCADE ON UPDATE CASCADE;
>>>>>>> codaym
>>>>>>> codaym
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
