-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-02-2025 a las 17:17:43
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `camisetas`
--
CREATE DATABASE IF NOT EXISTS `camisetas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `camisetas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camisetasfutbol`
--

CREATE TABLE `camisetasfutbol` (
  `id` int(11) NOT NULL,
  `equipo` varchar(100) NOT NULL,
  `temporada` int(11) DEFAULT NULL,
  `marca` varchar(30) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `imagen_url` varchar(255) DEFAULT NULL,
  `estado_descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `camisetasfutbol`
--
ALTER TABLE `camisetasfutbol`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `camisetasfutbol`
--
ALTER TABLE `camisetasfutbol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Base de datos: `hispania`
--
CREATE DATABASE IF NOT EXISTS `hispania` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hispania`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `cp` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `comunidad` varchar(30) DEFAULT NULL,
  `km2` int(11) DEFAULT NULL,
  `poblacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`cp`, `nombre`, `comunidad`, `km2`, `poblacion`) VALUES
(1, 'Alava', 'Pa?s Vasco', 3037, 331103),
(2, 'Albacete', 'Castilla-La Mancha', 14924, 387969),
(3, 'Alicante', 'Comunidad Valenciana', 5817, 1923000),
(4, 'Almer?a', 'Andaluc?a', 8775, 729201),
(5, 'Avila', 'Castilla y Le?n', 8050, 159317),
(6, 'Badajoz', 'Extremadura', 21766, 666971),
(7, 'Islas Baleares', 'Islas Baleares', 4992, 1232270),
(8, 'Barcelona', 'Catalu?a', 7728, 6658399),
(9, 'Burgos', 'Castilla y Le?n', 14292, 352331),
(10, 'C?ceres', 'Extremadura', 19868, 385472),
(11, 'C?diz', 'Andaluc?a', 7440, 1260204),
(12, 'Castell?n', 'Comunidad Valenciana', 6636, 582434),
(13, 'Ciudad Real', 'Castilla-La Mancha', 19813, 489755),
(14, 'C?rdoba', 'Andaluc?a', 13771, 776582),
(15, 'La Coru?a', 'Galicia', 7950, 1122032),
(16, 'Cuenca', 'Castilla-La Mancha', 17140, 198990),
(17, 'Gerona', 'Catalu?a', 5910, 783420),
(18, 'Granada', 'Andaluc?a', 12647, 932248),
(19, 'Guadalajara', 'Castilla-La Mancha', 12214, 268860),
(20, 'Guip?zcoa', 'Pa?s Vasco', 1980, 714906),
(21, 'Huelva', 'Andaluc?a', 10128, 533989),
(22, 'Huesca', 'Arag?n', 15636, 222713),
(23, 'Ja?n', 'Andaluc?a', 13496, 620762),
(24, 'Le?n', 'Castilla y Le?n', 15581, 451209),
(25, 'L?rida', 'Catalu?a', 12172, 439506),
(26, 'La Rioja', 'La Rioja', 5045, 316806),
(27, 'Lugo', 'Galicia', 9856, 323984),
(28, 'Madrid', 'Comunidad de Madrid', 8028, 6825005),
(29, 'M?laga', 'Andaluc?a', 7306, 1722388),
(30, 'Murcia', 'Regi?n de Murcia', 11314, 1531140),
(31, 'Navarra', 'Navarra', 10391, 661830),
(32, 'Orense', 'Galicia', 7273, 303960),
(33, 'Asturias', 'Asturias', 10604, 1005397),
(34, 'Palencia', 'Castilla y Le?n', 8052, 157205),
(35, 'Las Palmas', 'Canarias', 4066, 1159313),
(36, 'Pontevedra', 'Galicia', 4495, 943473),
(37, 'Salamanca', 'Castilla y Le?n', 12350, 326080),
(38, 'Santa Cruz de Tenerife', 'Canarias', 3381, 1102340),
(39, 'Cantabria', 'Cantabria', 5321, 585221),
(40, 'Segovia', 'Castilla y Le?n', 6921, 153993),
(41, 'Sevilla', 'Andaluc?a', 14036, 1962999),
(42, 'Soria', 'Castilla y Le?n', 10306, 89519),
(43, 'Tarragona', 'Catalu?a', 6303, 828809),
(44, 'Teruel', 'Arag?n', 14810, 133338),
(45, 'Toledo', 'Castilla-La Mancha', 15370, 712472),
(46, 'Valencia', 'Comunidad Valenciana', 10807, 2600793),
(47, 'Valladolid', 'Castilla y Le?n', 8110, 518950),
(48, 'Vizcaya', 'Pa?s Vasco', 2217, 1135269),
(49, 'Zamora', 'Castilla y Le?n', 10561, 167362),
(50, 'Zaragoza', 'Arag?n', 17274, 959471),
(51, 'Ceuta', 'Ceuta', 19, 82147),
(52, 'Melilla', 'Melilla', 13, 82810);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`cp`);
--
-- Base de datos: `leads`
--
CREATE DATABASE IF NOT EXISTS `leads` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `leads`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modificaciones_usuarios`
--

CREATE TABLE `modificaciones_usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `campo_modificado` varchar(50) NOT NULL,
  `valor_anterior` varchar(100) NOT NULL,
  `valor_nuevo` varchar(100) NOT NULL,
  `fecha_modificacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `peso` decimal(5,2) NOT NULL,
  `altura` decimal(5,2) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` enum('Hombre','Mujer','Mujer embarazada') NOT NULL,
  `actividad` varchar(50) NOT NULL,
  `objetivo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `peso`, `altura`, `fecha_nacimiento`, `sexo`, `actividad`, `objetivo`) VALUES
(1, 'Antonio', 'amonansu@gmail.com', 74.00, 174.00, '2000-02-04', 'Hombre', 'Normal', 'Ganar peso/músculo'),
(2, 'Javi', 'javi@email', 65.00, 173.00, '2005-02-01', 'Hombre', 'Normal', 'Ganar peso/músculo'),
(3, 'Alejandra', 'alejandra@email.com', 58.00, 160.00, '2001-05-12', 'Mujer', 'Normal', 'Perder peso'),
(4, 'Jose', 'jose@email.com', 120.00, 210.00, '2001-05-12', 'Hombre', 'Normal', 'Mejorar mi salud'),
(5, 'Maria', 'maria@email.com', 59.00, 165.00, '2001-05-22', 'Mujer embarazada', 'Normal', 'Mejorar mi salud'),
(6, 'Pol ', 'papafrita@email.com', 63.80, 140.00, '0000-00-00', 'Mujer embarazada', 'Normal', 'Mejorar mi salud'),
(7, 'Humus', 'elamigodepapafrita@email.com', 78.00, 170.00, '0000-00-00', 'Hombre', 'Movilidad casi nula', 'Mejorar mi salud'),
(8, 'Juan', 'olacorreo@email.com', 78.00, 170.00, '1980-01-31', 'Hombre', 'Movilidad casi nula', 'Mejorar mi salud'),
(9, 'Tanato', 'horimoko@email.com', 50.00, 138.00, '1999-06-01', 'Hombre', 'Deportista', 'Mejorar mi salud'),
(10, 'Richarda', 'imoko@email.com', 54.10, 138.00, '1999-06-01', 'Mujer', 'Deportista', 'Mejorar mi salud'),
(12, 'Alejandro', 'alejandro@email.com', 100.00, 180.00, '1112-05-05', 'Hombre', 'Movilidad casi nula', 'Perder peso');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `modificaciones_usuarios`
--
ALTER TABLE `modificaciones_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `modificaciones_usuarios`
--
ALTER TABLE `modificaciones_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `modificaciones_usuarios`
--
ALTER TABLE `modificaciones_usuarios`
  ADD CONSTRAINT `modificaciones_usuarios_ibfk_1` FOREIGN KEY (`email`) REFERENCES `usuarios` (`email`) ON DELETE CASCADE;
--
-- Base de datos: `liga`
--
CREATE DATABASE IF NOT EXISTS `liga` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `liga`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clubs`
--

CREATE TABLE `clubs` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `paA-s` varchar(10) DEFAULT NULL,
  `fundaciA3n` int(11) DEFAULT NULL,
  `presidente` varchar(40) DEFAULT NULL,
  `entrenador` varchar(40) DEFAULT NULL,
  `web` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clubs`
--

INSERT INTO `clubs` (`id`, `nombre`, `paA-s`, `fundaciA3n`, `presidente`, `entrenador`, `web`) VALUES
(1, 'AlavAcs', 'EspaA?a', 1921, 'Alfonso FernA?ndez de TrocA3niz', 'Luis GarcA-a Plaza', 'www.deportivoalaves.com'),
(2, 'AlmerA-a', 'EspaA?a', 1989, 'Turki Al-Sheikh', 'Gaizka Garitano', 'www.udalmeriasad.com'),
(3, 'Athletic de Bilbao', 'EspaA?a', 1898, 'Jon Uriarte', 'Ernesto Valverde', 'www.athletic-club.net'),
(4, 'AtlActico de Madrid', 'EspaA?a', 1903, 'Enrique Cerezo', 'Diego Pablo Simeone', 'www.clubatleticodemadrid.com'),
(5, 'Barcelona', 'EspaA?a', 1899, 'Joan Laporta', 'Xavi HernA?ndez', 'www.fcbarcelona.com'),
(6, 'Betis', 'EspaA?a', 1907, 'Angel Haro', 'Manuel Pellegrini', 'www.realbetisbalompie.es'),
(7, 'CA?diz', 'EspaA?a', 1910, 'Manuel VizcaA-no FernA?ndez', 'Sergio GonzA?lez', 'www.cadizcf.com'),
(8, 'Celta', 'EspaA?a', 1923, 'Carlos MouriA?o', 'Rafa BenA-tez', 'www.celtavigo.net'),
(9, 'Getafe', 'EspaA?a', 1983, 'Angel Torres', 'JosAc BordalA?s', 'www.getafecf.com'),
(10, 'Gerona', 'EspaA?a', 1930, 'DelfA- Geli', 'MA-chel SA?nchez', 'www.gironafc.cat'),
(11, 'Granada', 'EspaA?a', 1931, 'Jiang Lizhang', 'Paco LA3pez', 'www.granadacf.es'),
(12, 'Las Palmas', 'EspaA?a', 1949, 'Miguel Angel RamA-rez Alonso', 'Xavi GarcA-a Pimienta', 'www.udlaspalmas.es'),
(13, 'Mallorca', 'EspaA?a', 1916, 'Andy Kohlberg', 'Javier Aguirre', 'www.rcdmallorca.es'),
(14, 'Osasuna', 'EspaA?a', 1920, 'Luis Sabalza', 'Jagoba Arrasate', 'www.osasuna.es'),
(15, 'Real Sociedad', 'EspaA?a', 1909, 'Jokin Aperribay', 'Imanol Alguacil', 'www.realsociedad.com'),
(16, 'Rayo Vallecano', 'EspaA?a', 1924, 'RaA?l MartA-n Presa', 'Francisco RodrA-guez', 'www.rayovallecano.es'),
(17, 'Real Madrid', 'EspaA?a', 1902, 'Florentino PAcrez', 'Carlo Ancelotti', 'www.realmadrid.com'),
(18, 'Sevilla', 'EspaA?a', 1890, 'JosAc Castro', 'Diego Alonso', 'www.sevillafc.es'),
(19, 'Valencia', 'EspaA?a', 1919, 'Layhoon Chan', 'RubAcn Baraja', 'www.valenciacf.es'),
(20, 'Villarreal', 'EspaA?a', 1942, 'Fernando Roig', 'Pacheta', 'www.villarrealcf.es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `idEq` int(11) NOT NULL,
  `dorsal` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `fnac` date DEFAULT NULL,
  `lnac` varchar(35) DEFAULT NULL,
  `nacionalidad` varchar(35) DEFAULT NULL,
  `estatura` int(11) DEFAULT NULL,
  `peso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE `sedes` (
  `idEq` int(11) NOT NULL,
  `estadio` varchar(40) DEFAULT NULL,
  `aforo` int(11) DEFAULT NULL,
  `direccion` varchar(60) DEFAULT NULL,
  `provincia` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`idEq`, `estadio`, `aforo`, `direccion`, `provincia`) VALUES
(1, 'Mendizorroza', 19200, 'Plaza Amadeo GarcA-a de Salazar, s/n,01007, Alava', 'Vitoria'),
(2, 'Power Horse Stadium', 15200, 'Complejo Deportivo de la Vega de AcA?, s/n, 04007, AlmerA-a', 'AlmerA-a'),
(3, 'San MamAcs', 53332, 'C/ Ventosa Bidea, 36, 48013, Bilbao', 'Vizcaya'),
(4, 'CA-vitas Metropolitano', 70460, ' Av. de Luis AragonAcs, 4, 28022 Madrid', 'Madrid'),
(5, 'Estadi OlA-mpic LluA-s Companys', 56000, 'Passeig OlA-mpic, 15-17, 08038 Barcelona', 'Barcelona'),
(6, 'Benito VillamarA-n', 60721, 'Avda. HeliA3polis, s/n, 41012, Sevilla', 'Sevilla'),
(7, 'Nuevo Mirandilla', 19500, 'Plaza de Madrid, 21, 11010, CA?diz', 'CA?diz'),
(8, 'Abanca-BalaA-dos', 31800, 'Avda. de BalaA-dos, s/n, 36210, Vigo, Pontevedra', 'Pontevedra'),
(9, 'Coliseum', 17393, 'Avenida Teresa de Calcuta, 4, 28903, Getafe, Madrid', 'Madrid'),
(10, 'Montilivi', 10000, 'Avenida Montilivi, 141, 17003, Gerona', 'Gerona'),
(11, 'Nuevo Los CA?rmenes', 23156, 'C/ del Pintor Manuel Maldonado, 18007, Granada', 'Granada'),
(12, 'Gran Canaria', 32500, 'C/ Fondos Del Segura, s/n, 35010, Las Palmas de Gran Canaria', 'Las Palmas'),
(13, 'Estadi Mallorca Son Moix', 23142, 'Cami Reis, S/N, 07011, Palma de Mallorca', 'Baleares'),
(14, 'El Sadar', 23516, 'C/ Sadar, s/n, 31006, Pamplona', 'Navarra'),
(15, 'Reale Arena', 32076, 'Paseo de Anoeta, 1, 20014, San SebastiA?n', 'GuipA?zcoa'),
(16, 'Estadio de Vallecas', 14708, 'C/ Payaso FofA3, 1, 28018 Madrid', 'Madrid'),
(17, 'Santiago BernabAcu', 85454, 'Av de Concha Espina, 1, 28036, Madrid', 'Madrid'),
(18, 'RamA3n SA?nchez-PizjuA?n', 45500, 'Avda. Eduardo Dato, s/n, 41005, Sevilla', 'Sevilla'),
(19, 'Mestalla', 52600, 'Avda. Suecia, s/n, 46010, Valencia', 'Valencia'),
(20, 'Estadio de la CerA?mica', 22000, 'Calle de BenicA?ssim, 12540, Villarreal', 'CastellA3n');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`idEq`,`dorsal`);

--
-- Indices de la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`idEq`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD CONSTRAINT `jugadores_ibfk_1` FOREIGN KEY (`idEq`) REFERENCES `clubs` (`id`);

--
-- Filtros para la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD CONSTRAINT `sedes_ibfk_1` FOREIGN KEY (`idEq`) REFERENCES `clubs` (`id`);
--
-- Base de datos: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Volcado de datos para la tabla `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'table', 'Practica', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"allrows\":\"1\",\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@TABLE@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_columns\":\"something\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Estructura de la tabla @TABLE@\",\"latex_structure_continued_caption\":\"Estructura de la tabla @TABLE@ (continúa)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Contenido de la tabla @TABLE@\",\"latex_data_continued_caption\":\"Contenido de la tabla @TABLE@ (continúa)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"xml_structure_or_data\":\"data\",\"xml_export_events\":\"something\",\"xml_export_functions\":\"something\",\"xml_export_procedures\":\"something\",\"xml_export_tables\":\"something\",\"xml_export_triggers\":\"something\",\"xml_export_views\":\"something\",\"xml_export_contents\":\"something\",\"yaml_structure_or_data\":\"data\",\"\":null,\"lock_tables\":null,\"csv_removeCRLF\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_simple_view_export\":null,\"sql_view_current_user\":null,\"sql_or_replace_view\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Volcado de datos para la tabla `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"leads\",\"table\":\"usuarios\"},{\"db\":\"camisetas\",\"table\":\"camisetasfutbol\"}]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Volcado de datos para la tabla `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2025-02-19 16:15:43', '{\"Console\\/Mode\":\"collapse\",\"lang\":\"es\"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indices de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indices de la tabla `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indices de la tabla `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indices de la tabla `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indices de la tabla `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indices de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indices de la tabla `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indices de la tabla `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indices de la tabla `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indices de la tabla `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indices de la tabla `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Base de datos: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
