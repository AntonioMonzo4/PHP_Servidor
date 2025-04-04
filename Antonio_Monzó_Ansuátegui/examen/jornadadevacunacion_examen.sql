-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-02-2025 a las 10:39:31
-- Versión del servidor: 10.11.6-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jornadadevacunacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cod_provincia`
--

CREATE TABLE `cod_provincia` (
  `codigo` int(11) NOT NULL,
  `provincia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cod_provincia`
--

INSERT INTO `cod_provincia` (`codigo`, `provincia`) VALUES
(1, 'Álava'),
(2, 'Albacete'),
(3, 'Alicante'),
(4, 'Almería'),
(33, 'Asturias'),
(5, 'Avila'),
(6, 'Badajoz'),
(7, 'Baleares'),
(8, 'Barcelona'),
(9, 'Burgos'),
(10, 'Cáceres'),
(11, 'Cádiz'),
(39, 'Cantabria'),
(12, 'Castellón'),
(51, 'Ceuta'),
(13, 'Ciudad Real'),
(14, 'Córdoba'),
(15, 'Coruña, La'),
(16, 'Cuenca'),
(17, 'Gerona'),
(18, 'Granada'),
(19, 'Guadalajara'),
(20, 'Guipúzcoa'),
(21, 'Huelva'),
(22, 'Huesca'),
(23, 'Jaen'),
(24, 'León'),
(25, 'Lérida'),
(27, 'Lugo'),
(28, 'Madrid'),
(29, 'Málaga'),
(52, 'Melilla'),
(30, 'Murcia'),
(31, 'Navarra'),
(32, 'Orense'),
(34, 'Palencia'),
(35, 'Palmas, Las'),
(36, 'Pontevedra'),
(26, 'Rioja, La'),
(37, 'Salamanca'),
(38, 'S.C.Tenerife'),
(40, 'Segovia'),
(41, 'Sevilla'),
(42, 'Soria'),
(43, 'Tarragona'),
(44, 'Teruel'),
(45, 'Toledo'),
(46, 'Valencia'),
(47, 'Valladolid'),
(48, 'Vizcaya'),
(49, 'Zamora'),
(50, 'Zaragoza'),
(0, 'Andorra'),
(99, 'Otra/Extranjero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroasistentes`
--

CREATE TABLE `registroasistentes` (
  `email` varchar(50) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido1` varchar(50) DEFAULT NULL,
  `apellido2` varchar(50) DEFAULT NULL,
  `centrotrabajo` varchar(255) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `codigopostal` int(5) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `provincia` int(2) DEFAULT NULL,
  `fecha` varchar(10) DEFAULT NULL,
  `hora` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `registroasistentes`
--

INSERT INTO `registroasistentes` (`email`, `nombre`, `apellido1`, `apellido2`, `centrotrabajo`, `telefono`, `direccion`, `codigopostal`, `ciudad`, `provincia`, `fecha`, `hora`) VALUES
('aam@educa.madrid.org', 'Milagros', 'Apellido1', 'Apellido2', 'Vacunacion núñez de balboa', '555555555', 'Vacunacion núñez de balboa 111', 28006, 'Madrid', 28, '2011-04-04', '19:50:29'),
('abparedes2@educa.madrid.org', 'Ana Belén', 'Apellido1', 'Apellido2', 'C.S. Avda. Aragón', '555555555', 'calle timon, 31A 2ºB', 28042, 'Madrid', 28, '2011-04-06', '09:14:35'),
('acampillo82@educa.madrid.org', 'Ana', 'Apellido1', 'Apellido2', 'CS Maqueda', '555555555', 'C/Maqueda, 12', 28042, 'Madrid', 28, '2011-04-06', '13:07:59'),
('adela.fernandez@educa.madrid.org', 'Adela', 'Apellido1', 'Apellido2', 'Subdirección Promoción de la Salud y Prevención', '555555555', 'C. Julián Camarillo,4 B', 28037, 'Madrid', 28, '2025-02-13', '13:25:25'),
('alejandro.alvarez@educa.madrid.org', 'alejandro', 'Apellido1', 'Apellido2', 'centro vacunacion Núñez de Balboa', '555555555', 'Nuñez de Balboa 111', 28006, 'madrid', 28, '2011-04-04', '17:33:23'),
('alejandromejianieto@educa.madrid.org', 'Alejandro', 'Apellido1', 'Apellido2', 'Hospital Universitario de Guadalajara', '555555555', 'C/ DONANTE DE SANGRE, S/N', 19002, 'Guadalajara', 19, '2011-04-06', '22:12:54'),
('alimia@educa.madrid.org', 'Aurora', 'Apellido1', 'Apellido2', 'Ministerio de Sanidad, Política Social e Igualdad', '555555555', 'Paseo del Prado, 18-20', 28071, 'Madrid', 28, '2011-04-07', '10:03:25'),
('almajoven63@educa.madrid.org', 'MARISA', 'Apellido1', 'Apellido2', 'REJAS', '555555555', 'ACUARELA 2', 28905, 'GETAFE', 28, '2011-04-05', '11:58:30'),
('amaya.simon65@educa.madrid.org', 'AMAYA', 'Apellido1', 'Apellido2', 'SAN FERNANDO 1', '555555555', 'c/Maestro Jose Simon portal 4, atico B', 19004, 'guadalajara', 28, '2011-04-06', '18:45:11'),
('amelia.fernandez@educa.madrid.org', 'Amelia', 'Apellido1', 'Apellido2', 'Centro de Salud Pública de Alcorcón', '555555555', 'Avda. de Leganés 25', 28925, 'Alcorcón', 28, '2011-04-04', '10:52:46'),
('ana.perez@educa.madrid.org', 'Ana María', 'Apellido1', 'Apellido2', 'Serv. Salud Pública Área10', '555555555', 'C/Fco Gasco Santillán nº4B 2ªplanta', 28906, 'Getafe', 28, '2011-04-05', '10:58:14'),
('anadue78@educa.madrid.org', 'ana maria', 'Apellido1', 'Apellido2', 'C.S. ARGANDA I', '555555555', 'C/ colibri 8', 28500, 'arganda del rey', 28, '2011-04-05', '17:20:40'),
('anamaria.pedraza@educa.madrid.org', 'Ana Maria', 'Apellido1', 'Apellido2', 'Servicio Epidemiología Comunidad de Madrid', '555555555', 'C/ Valverde 8, 2B2', 28004, 'Madrid', 28, '2011-04-07', '23:58:12'),
('angeles.gutierrez@educa.madrid.org', 'Mª Angeles', 'Apellido1', 'Apellido2', 'Servicio de Epidemiología', '555555555', 'C/Julián Camarillo 4B, 2ª planta', 28037, 'Madrid', 28, '2011-04-06', '08:14:38'),
('angelica.martin@educa.madrid.org', 'Angelica Iris', 'Apellido1', 'Apellido2', 'Vacunación Núñez de Balboa 111', '555555555', 'Calle Núñez de Balboa 105, Apto.411', 28006, 'Madrid', 28, '2011-04-05', '10:29:57'),
('angelllanos@educa.madrid.org', 'carmen-llanos', 'Apellido1', 'Apellido2', 'c.m.s.usera , ( madrid salud)', '555555555', 'c/ avena s/n', 28026, 'madrid', 28, '2011-04-04', '15:23:08'),
('antonio.cacha@educa.madrid.org', 'Antonio', 'Apellido1', 'Apellido2', 'Dirección General de Ordenación e Inspección', '555555555', 'c/Recoletos 14', 28001, 'Madrid', 28, '2011-04-05', '10:23:42'),
('antonio.vaquero.r@educa.madrid.org', 'Valentina', 'Apellido1', 'Apellido2', 'CS Los Castillos', '555555555', 'C/ Carballino 25', 28925, 'Alcorcón', 28, '2011-04-07', '16:10:16'),
('araceli.arce@educa.madrid.org', 'Araceli', 'Apellido1', 'Apellido2', 'Servicio de Epidemiología. SDG Promoción y Prevención', '555555555', 'C/ Jualian Camarillo 4 B', 28037, 'Madrid', 28, '2011-04-06', '14:11:44'),
('aragl@educa.madrid.org', 'María Araceli', 'Apellido1', 'Apellido2', 'Hospital CarlosIII. C.V.I.', '555555555', 'C/Estocolmo nº 31, P2, 2º Dcha', 28022, 'Madrid', 28, '2011-04-07', '17:18:12'),
('asanchezg.gapm05@educa.madrid.org', 'Ana Isabel', 'Apellido1', 'Apellido2', 'Centro de salud Barrio del Pilar', '555555555', 'Bulevar José Prat, 28 5º-A', 28032, 'Madrid', 28, '2011-04-05', '17:48:26'),
('aurelia.bodalo@educa.madrid.org', 'Maria Aurelia', 'Apellido1', 'Apellido2', 'Centro vacunacion Nuñez de Balboa', '555555555', 'Nuñez de Balboa 111', 28006, 'Madrid', 28, '2011-04-04', '09:31:59'),
('basilio.parras@educa.madrid.org', 'Basilio Juan', 'Apellido1', 'Apellido2', 'Area 2 Salud Pública', '555555555', 'Océano Pácifico 3', 28821, 'Coslada', 28, '2011-04-04', '12:36:03'),
('bea22nurse@educa.madrid.org', 'BEATRIZ', 'Apellido1', 'Apellido2', 'ROSA DE LUXEMBURGO', '555555555', 'OBISPO EIJO DE GARAY 6 3º D', 28100, 'alcobendas', 27, '2011-04-05', '18:22:08'),
('benitezrmt@educa.madrid.org', 'Teresa', 'Apellido1', 'Apellido2', 'Ayuntamiento Madrid', '555555555', 'Gobernador, 39', 28014, 'Madrid', 28, '2011-04-06', '11:54:52'),
('bertha.angelica@educa.madrid.org', 'Bertha Angélica', 'Apellido1', 'Apellido2', 'Medicina Preventiva - Hosp. General Nuestra Sra. del Prado', '555555555', 'Av. de Madrid s/n (dirección laboral)', 45600, 'Talavera de la Reina', 45, '2011-04-12', '08:43:43'),
('bocosamo@educa.madrid.org', 'MARIA OLVIDO', 'Apellido1', 'Apellido2', 'CMS USERA MADRID SALUD', '555555555', 'C/ AVENA ESQ HENO', 28026, 'MADRID', 28, '2011-04-04', '15:15:24'),
('c.r.entrecanales@educa.madrid.org', 'Carolina', 'Apellido1', 'Apellido2', 'centro salud', '555555555', 'via dos castillas 7', 28224, 'Pozuelo de Alarcón', 28, '2011-04-05', '15:31:07'),
('caguilar.gapm01@educa.madrid.org', 'Consuelo', 'Apellido1', 'Apellido2', 'EAP. Perales de Tajuña', '555555555', 'Carretera de Morata S/N', 28540, 'Madrid', 28, '2011-04-05', '12:54:37'),
('carlos.martinez@educa.madrid.org', 'Carlos Luis', 'Apellido1', 'Apellido2', 'Servicio de Prevencion de la enfermedad', '555555555', 'Julian Camarillo, 4b', 28037, 'Madrid', 28, '2011-04-04', '10:40:42'),
('ccraventos51@educa.madrid.org', 'Cecilia', 'Apellido1', 'Apellido2', 'San Fernando 1', '555555555', 'c/ Cordoba s/n', 28230, 'Madrid', 28, '2011-04-06', '20:16:12'),
('cenis.valdes@educa.madrid.org', 'CENEGUNDIS', 'Apellido1', 'Apellido2', 'SALUD PÚBLICA ÁREA 11', '555555555', 'PLZA PAREJAS,11', 28300, 'ARANJUEZ', 28, '2011-04-06', '09:47:43'),
('cescalante@educa.madrid.org', 'Carmen', 'Apellido1', 'Apellido2', 'Laboratorios Farmaceuticos Rovi', '555555555', 'cerro de las flores,3', 41927, 'Mairena del Aljarafe', 41, '2011-04-06', '11:20:29'),
('chus_cm@educa.madrid.org', 'Mª Jesus', 'Apellido1', 'Apellido2', 'C.S Dr Luengo Rodriguez', '555555555', 'C/ Nueva York 16', 28938, 'Madrid-Mostoles', 28, '2011-04-05', '18:52:05'),
('claudia_g_l@educa.madrid.org', 'Claudia', 'Apellido1', 'Apellido2', 'Desempleada', '555555555', 'Marques de santa Ana nº9 3ºb 28004', 28004, 'Madrid', 28, '2011-04-05', '15:52:56'),
('cmaria.hupa@educa.madrid.org', 'CARMEN', 'Apellido1', 'Apellido2', 'HOSPITAL PRINCIPE DE ASTURIAS', '555555555', 'CRTA ALCALA MECO S/N', 28805, 'ALCALA DE HENARES', 28, '2011-04-05', '14:18:11'),
('cminguet.gapm11@educa.madrid.org', 'Mª Cristina', 'Apellido1', 'Apellido2', 'Servicio Territorial Salud Pública Área 8', '555555555', 'Calle Leganés, 25', 28925, 'Alcorcón', 28, '2011-04-04', '10:54:23'),
('cmoreno.gapm01@educa.madrid.org', 'CARMEN', 'Apellido1', 'Apellido2', 'CS, PAVONES', '555555555', 'C/ HACIENDA DE PAVONES 271', 28030, 'MADRID', 28, '2011-04-05', '00:27:01'),
('colmos@educa.madrid.org', 'Cristina', 'Apellido1', 'Apellido2', 'C.S Mirasierra', '555555555', 'c/josé arcones gil 152 portal C 3ºB', 28017, 'madrid', 28, '2011-04-05', '17:34:22'),
('consuelo.febrel@educa.madrid.org', 'Consuelo', 'Apellido1', 'Apellido2', 'subdireccion de prevencion y promocion de salud area 2', '555555555', 'oceano pacifico 3', 28821, 'Coslada', 28, '2011-04-07', '10:18:48'),
('cperez@educa.madrid.org', 'Charo', 'Apellido1', 'Apellido2', 'SPMSD', '555555555', 'Pº de la Castellana, 141', 28046, 'MADRID', 28, '2011-04-07', '10:58:01'),
('crisanchun@educa.madrid.org', 'Maria Cristina', 'Apellido1', 'Apellido2', 'Centro Medico Gran Vìa', '555555555', 'C/ Gran Vìa 67', 28013, 'Madrid', 28, '2011-04-07', '18:44:58'),
('cristina.hidalgo@educa.madrid.org', 'Cristina', 'Apellido1', 'Apellido2', 'Centro de Salud Publica area V', '555555555', 'c/ doctor Cecilio de la Morena Arranz', 28770, 'Colmenar Viejo', 28, '2011-04-08', '22:25:56'),
('cvalle.giraldez@educa.madrid.org', 'Carolina del Valle', 'Apellido1', 'Apellido2', 'Hospital Universitario La Paz - Servicio de Medicina Preventiva', '555555555', 'Calle Villa de Marín, 40', 28039, 'Madrid', 28, '2011-04-05', '11:38:04'),
('diana.monge@educa.madrid.org', 'Diana', 'Apellido1', 'Apellido2', 'Subdierección de promoción de la salud y prevención', '555555555', 'Julián Camarillo', 28037, 'madrid', 28, '2011-04-06', '12:56:14'),
('dianacastilla@educa.madrid.org', 'DIANA E', 'Apellido1', 'Apellido2', 'HOSPITAL RIO HORTEGA', '555555555', 'CL DULZAINA', 47012, 'VALLADOLID', 47, '2011-04-08', '09:49:37'),
('dolores.barranco@educa.madrid.org', 'Dolores', 'Apellido1', 'Apellido2', 'Servicio de Prevencion de la enfermedad', '555555555', 'C/ Julian Camarillo 4B', 20237, 'Madrid', 28, '2011-04-06', '09:51:07'),
('dorismany@educa.madrid.org', 'Doris', 'Apellido1', 'Apellido2', 'C.S.Dr. Luengo Rodríguez', '555555555', 'C/Nueva York 16', 28938, 'Madrid-Móstoles', 28, '2011-04-05', '17:28:28'),
('duesogc@educa.madrid.org', 'carmen', 'Apellido1', 'Apellido2', 'CMS SanBlas', '555555555', 'C/Pobladura del Valle 11', 28037, 'madrid', 28, '2011-04-04', '10:33:57'),
('elisa.gil@educa.madrid.org', 'elisa', 'Apellido1', 'Apellido2', 'servicio salud publica area 11', '555555555', 'c/ benimamet 24', 28021, 'madrid', 28, '2011-04-07', '09:22:34'),
('emma.melendro@educa.madrid.org', 'Emma', 'Apellido1', 'Apellido2', 'Centro carabanchel', '555555555', 'Calle General Ricardos 177', 28025, 'MADRID', 28, '2011-04-08', '11:00:57'),
('eportillo.gapm04@educa.madrid.org', 'Eduardo', 'Apellido1', 'Apellido2', 'C.S. Avda de Aragon', '555555555', 'C/ Alcala 425', 28017, 'Madrid', 28, '2011-04-07', '10:31:09'),
('felicitas.dominguez@educa.madrid.org', 'M Felícitas', 'Apellido1', 'Apellido2', 'Subdirección Promoción de la Salud y Prevención', '555555555', 'C/ Julián Camarillo, 4b', 28037, 'Madrid', 28, '2011-04-08', '15:24:25'),
('fidel.illana@educa.madrid.org', 'Fidel', 'Apellido1', 'Apellido2', 'DG Ordenación e Inspección', '555555555', 'Paseo de Recoletos 14', 28001, 'Madrid', 28, '2011-04-05', '10:28:00'),
('isabelcc000@educa.madrid.org', 'Isabel', 'Apellido1', 'Apellido2', 'Hospital de La Princesa', '555555555', 'Diego de León, 62', 28006, 'Madrid', 28, '2011-04-07', '01:42:40'),
('isi_pelaez@educa.madrid.org', 'Mª Isabel', 'Apellido1', 'Apellido2', 'C.S.Fronteras', '555555555', 'C/ Puerto de Navacerrada, 4', 28850, 'Torrejon de Ardoz', 28, '2011-04-06', '22:10:24'),
('jacobus2004@educa.madrid.org', 'Jose Dionisio', 'Apellido1', 'Apellido2', 'CS Abrantes', '555555555', 'AV Abrantes 55', 28025, 'Madrid', 28, '2011-04-06', '23:00:37'),
('jgonzalezg.gapm04@educa.madrid.org', 'Julia', 'Apellido1', 'Apellido2', 'C.S.MAR BALTICO', '555555555', 'C/ Chaparral 22 4ºC', 28033, 'MADRID', 28, '2011-04-06', '13:03:31'),
('joaquincoloma@educa.madrid.org', 'joaquin', 'Apellido1', 'Apellido2', 'Carlos III', '555555555', 'aguarón, 29 esc izq, bajo c', 28023, 'madrid', 28, '2011-04-07', '09:34:00'),
('jose.deleon@educa.madrid.org', 'José Mariano', 'Apellido1', 'Apellido2', 'Salud Pública Área 6', '555555555', 'Av. Guadarrama, 34', 28220, 'Madrid', 28, '2011-04-04', '10:23:09'),
('jose.taveira@educa.madrid.org', 'Jose Antonio', 'Apellido1', 'Apellido2', 'Epidemiologia. Salud Publica (STSP 7)', '555555555', 'Julian Camarillo, 4 2ª pl.', 28037, 'Madrid', 28, '2011-04-04', '14:33:56'),
('jose.torcal@educa.madrid.org', 'jose maria', 'Apellido1', 'Apellido2', 'salud publica area 11', '555555555', 'plaza parejas 1', 28300, 'aranjuez', 28, '2011-04-08', '09:41:21'),
('joseagarcigam@educa.madrid.org', 'JOSE ANTONIO', 'Apellido1', 'Apellido2', 'CS NOBLEJAS', '555555555', 'APODACA,6.1ºA', 28004, 'MADRID', 28, '2011-04-04', '17:30:54'),
('josefina.lopez@educa.madrid.org', 'JOSEFINA', 'Apellido1', 'Apellido2', 'SALUD PÚBLICA ÁREA 1', '555555555', 'CINCOVILLAS 5, ENTRADA POR QUIJORNA', 28051, 'MADRID', 28, '2011-04-04', '10:53:50'),
('josemanuelcr@educa.madrid.org', 'José Manuel', 'Apellido1', 'Apellido2', 'C.S. LEGAZPI', '555555555', 'C/ FERROCARRIL 13, 5º IZ', 28045, 'MADRID', 28, '2011-04-08', '15:20:37'),
('jsanc121@educa.madrid.org', 'JESUS', 'Apellido1', 'Apellido2', 'HOSPIATAL CLINICO SAN CARLOS. MADRID', '555555555', 'PROF. MARTIN LAGO S/N', 28041, 'MADRID', 28, '2011-04-04', '14:44:24'),
('juan_m_g2003@educa.madrid.org', 'Juan Manuel', 'Apellido1', 'Apellido2', 'CS Virgen del Cortijo', '555555555', 'Avd Manoteras 47', 28050, 'Madrid', 28, '2011-04-07', '09:44:18'),
('juan.sanz@educa.madrid.org', 'Juan Carlos', 'Apellido1', 'Apellido2', 'Laboratorio Regional de Salud pública de la Comunidad de Madrid', '555555555', 'Sierra de Alquife 8, 2ª planta', 28053, 'Madrid', 28, '2011-04-04', '14:44:41'),
('juancarlos.mateos@educa.madrid.org', 'Juan Carlos', 'Apellido1', 'Apellido2', 'Servicio Territorial de Salud Pública 3', '555555555', 'Avda. Reyes Magos s/n', 28806, 'Alcalá de Henares', 28, '2011-04-04', '11:00:53'),
('juncotmi@educa.madrid.org', 'isabel', 'Apellido1', 'Apellido2', 'I. Salud Publica. Madrid Salud. Ayto de Madrid', '555555555', 'juan esplandiú 11-13', 28007, 'madrid', 28, '2011-04-04', '12:49:46'),
('jupular@educa.madrid.org', 'Julia', 'Apellido1', 'Apellido2', 'CS Los Castillos Alcorcón', '555555555', 'C/ Carballino 25', 28925, 'Alcorcon', 28, '2011-04-07', '15:47:05'),
('lrubio@educa.madrid.org', 'laura', 'Apellido1', 'Apellido2', 'hospital universitario fundacion alcorcon', '555555555', 'calle budapest 1', 28922, 'alcorcon', 28, '2011-04-05', '14:08:41'),
('luis.garcia@educa.madrid.org', 'Luis', 'Apellido1', 'Apellido2', 'Servicio de Epidemiología. Comunidad de Madrid', '555555555', 'C/ Julián Camarillo, 4b-2ªpt', 28037, 'Madrid', 28, '2011-04-05', '09:19:29'),
('luisa-f99@educa.madrid.org', 'luisa', 'Apellido1', 'Apellido2', 'hospital clinico san carlos', '555555555', 'calle carnicer 20 211', 28039, 'madrid', 28, '2011-04-07', '18:05:30'),
('maalmodovar65@educa.madrid.org', 'Maria Angeles', 'Apellido1', 'Apellido2', 'C. S. LA GARENA', '555555555', 'C/ FRANCISCO PIZARRO Nº 6 2º B', 28802, 'ALCALÁ DE HENARES', 28, '2011-04-07', '22:12:34'),
('mangeles.planchuelo@educa.madrid.org', 'Mª Ángeles', 'Apellido1', 'Apellido2', 'Subdirección de Promoción de la Salud y Prevención', '555555555', 'Julian Camarillo 4b', 28037, 'Madrid', 28, '2011-04-04', '15:18:09'),
('manuela.arranz@educa.madrid.org', 'manuela', 'Apellido1', 'Apellido2', 'Subdirección de Promoción de la Salud y Prevención', '555555555', 'Calle Julián Camarillo nº 4b', 28037, 'Madrid', 28, '2011-04-04', '12:31:27'),
('manuela.vadillo@educa.madrid.org', 'MANUELA', 'Apellido1', 'Apellido2', 'HOSPITAL PRINCIPE DE ASTURIAS', '555555555', 'Crtra/alcal/Meco s/n', 20805, 'ALCALA DE HENARES', 28, '2011-04-05', '14:04:37'),
('margarita.fer@educa.madrid.org', 'MARGARITA', 'Apellido1', 'Apellido2', 'C.S. CANILLEJAS', '555555555', 'CALLE BOLTAÑA 5', 28022, 'MADRID', 28, '2011-04-07', '13:10:42'),
('margarita.hernando@educa.madrid.org', 'MARGARITA', 'Apellido1', 'Apellido2', 'Sº SALUD PUBLICA AREA 2', '555555555', 'C/OCEANO PACIFICO, 3', 28821, 'COSLADA', 28, '2011-04-08', '14:18:40'),
('marhuedo@educa.madrid.org', 'MªAngeles', 'Apellido1', 'Apellido2', 'H Central de la Cruz Roja', '555555555', 'Avda Reina Victoria, 26', 28003, 'Madrid', 28, '2011-04-05', '09:09:21'),
('maria.estebanv@educa.madrid.org', 'María D.', 'Apellido1', 'Apellido2', 'Subdirección de Promoción de la Salud y Prevención', '555555555', 'C/ Julián Camarillo, Nº 4b, 3º', 28037, 'Madrid', 28, '2011-04-08', '08:16:38'),
('maria.martinezb@educa.madrid.org', 'Maria Luisa', 'Apellido1', 'Apellido2', 'Servicio Territorial de salud Pública 11', '555555555', 'Plaza Parejas 11 esc 10', 28300, 'Madrid', 28, '2011-04-06', '11:15:03'),
('maria.toledano@educa.madrid.org', 'MARIA JOSE', 'Apellido1', 'Apellido2', 'SUB.DIRECCION DE PROMOCION DE LA SALUD Y PREVENCION', '555555555', 'JULIAN CAMARILLO N 9', 23037, 'MADRID', 28, '2011-04-06', '10:21:33'),
('mariaeugenia.lopez@educa.madrid.org', 'María Eugenia', 'Apellido1', 'Apellido2', 'Hospital Universitario Infanta Sofía/HULP', '555555555', 'Paseo de Europa, 34', 28702, 'San Sebastián de los Reyes', 28, '2011-04-06', '14:07:59'),
('mariluzsanchez2000@educa.madrid.org', 'mariluz', 'Apellido1', 'Apellido2', 'valmojado', '555555555', 'arroyo de la media legua 9 3ºA', 28030, 'madrid', 28, '2011-04-06', '10:30:11'),
('maytedue@educa.madrid.org', 'María Teresa', 'Apellido1', 'Apellido2', 'C.S.Dr. Luengo Rodríguez', '555555555', 'c/Nueva York 16', 28938, 'Madrid Mósotles', 28, '2011-04-05', '17:36:33'),
('memayo@educa.madrid.org', 'Elga', 'Apellido1', 'Apellido2', 'Centro Nacional de Epidemiologia', '555555555', 'Calle Sinesio Delgado', 28029, 'Madrid', 28, '2011-04-06', '12:33:20'),
('memendiburu.gapm11@educa.madrid.org', 'Mª Eulalia', 'Apellido1', 'Apellido2', 'C.S. Perales del Rio', '555555555', 'Juan de mairena s/n', 28909, 'Getafe', 28, '2011-04-04', '19:23:17'),
('mgarciaf.gapm05@educa.madrid.org', 'Mercedes V.', 'Apellido1', 'Apellido2', 'Centro de Salud Barrio del Pilar', '555555555', 'C/.Finisterre 18', 28029, 'Madrid', 28, '2011-04-07', '18:49:17'),
('mgarciafgapm05@educa.madrid.org', 'Mercedes V.', 'Apellido1', 'Apellido2', 'Centro de Salud Barrio del Pilar', '555555555', 'C/.Finisterre 18', 28029, 'Madrid', 28, '2011-04-06', '14:54:40'),
('mgomez.gapm01@educa.madrid.org', 'MARIA LUISA', 'Apellido1', 'Apellido2', 'CENTRO DE SALUD ADELFAS', '555555555', 'C/ CERRO NEGRO S/N', 28007, 'MADRID', 28, '2011-04-05', '11:42:41'),
('MGSenfercaris@educa.madrid.org', 'María Soledad', 'Apellido1', 'Apellido2', 'Donde me contratan', '555555555', 'C / Rafael Ceballos, Nº 1, 2º A', 28029, 'Madrid', 28, '2011-04-05', '19:55:00'),
('mj.antolin@educa.madrid.org', 'Mª JESUS', 'Apellido1', 'Apellido2', 'MANZANARES EL REAL - MATAELPINO', '555555555', 'PLAZA DE LOS CUATRO CAÑOS, 6 D', 28400, 'COLLADO VILLALBA', 28, '2011-04-07', '09:10:39'),
('mj.lopez.r@educa.madrid.org', 'Mª Jesús', 'Apellido1', 'Apellido2', 'C.S.MAR BALTICO', '555555555', 'C/ Del Trinquete 3 1º B', 28033, 'MADRID', 28, '2011-04-06', '12:51:52'),
('mjperezm28@educa.madrid.org', 'maría josé', 'Apellido1', 'Apellido2', 'CS Avenida de Aragón', '555555555', 'Calle Boltaña, 82, 4ºB', 28022, 'madrid', 28, '2011-04-05', '13:57:55'),
('mjsalvador.gapm06@educa.madrid.org', 'Mª Jesus', 'Apellido1', 'Apellido2', 'C.S. Valle de la Oliva - Majadahonda', '555555555', 'Avda Alfonso XIII nº 143', 28016, 'Madrid', 28, '2011-04-05', '18:07:58'),
('mleza.gapm04@educa.madrid.org', 'MARGARITA', 'Apellido1', 'Apellido2', 'CENTRO DE SALUD VICENTE MUZAS', '555555555', 'C/VICENTE MUZAS Nº 8', 28043, 'MADRID', 28, '2011-04-05', '16:08:51'),
('mlopca1@educa.madrid.org', 'milagros', 'Apellido1', 'Apellido2', 'centro de salid isfas', '555555555', 'lanceros nº 2', 28024, 'madrid', 28, '2011-04-07', '12:07:35'),
('MLuisa.PerezR@educa.madrid.org', 'MARIA LUISA', 'Apellido1', 'Apellido2', 'EAP ALMENDRALES', '555555555', 'C/ VISITACION, 5', 28026, 'MADRID', 28, '2011-04-07', '20:27:31'),
('mluisaromerom@educa.madrid.org', 'Maria-Luisa', 'Apellido1', 'Apellido2', 'Canillejas', '555555555', 'Boltaña 5', 28022, 'Madrid', 28, '2011-04-07', '13:53:54'),
('mmurciano@educa.madrid.org', 'Marilia', 'Apellido1', 'Apellido2', 'Madrid', '555555555', 'Paseo de la Castellana, 141', 28046, 'MADRID', 28, '2011-04-07', '11:41:04'),
('moimeme_443@educa.madrid.org', 'SOUAD', 'Apellido1', 'Apellido2', 'Mir UDMPySP ARAGÓN (TEMPORALMENTE EN ISCIII)', '555555555', 'C/ VICTOR DE LA SERNA Nº 25, 5ºC', 28016, 'MADRID', 28, '2011-04-06', '12:36:24'),
('moises.cameno@educa.madrid.org', 'Moisés', 'Apellido1', 'Apellido2', 'Servicio de Prevención de la Enfermedad', '555555555', 'Calle Julian Camarillo, 4b, 2ª planta', 28037, 'Madrid', 28, '2011-04-04', '13:33:18'),
('mrossi@educa.madrid.org', 'Marcello', 'Apellido1', 'Apellido2', 'Programa de Epidemiología Aplicada y de Campo (PEAC), Centro Nacional de Epidemiología, ISCIII', '555555555', 'Calle Sinesio Delgado 6, Pabellón 13', 28029, 'Madrid', 28, '2011-04-06', '12:52:47'),
('msgimeno@educa.madrid.org', 'Marisol', 'Apellido1', 'Apellido2', 'SPMSD', '555555555', 'Ríos Rosas, 8', 28003, 'Madrid', 28, '2011-04-08', '14:08:24'),
('msol_due@educa.madrid.org', 'Mª Soledad', 'Apellido1', 'Apellido2', 'Centro de Salud Chopera', '555555555', 'Paseo de la chopera 48', 28100, 'Alcobendas', 28, '2011-04-07', '08:19:54'),
('mteresa.hernandezm@educa.madrid.org', 'MARIA TERESA', 'Apellido1', 'Apellido2', 'HOSPITAL 12 OCTUBRE', '555555555', 'Avd. Córdoba s/n', 28045, 'MADRID', 28, '2011-04-04', '14:47:35'),
('mvgardeta@educa.madrid.org', 'Victoria', 'Apellido1', 'Apellido2', 'Laboratorios Rovi', '555555555', 'Julian Camarillo 35', 28037, 'Madrid', 28, '2011-04-06', '12:08:42'),
('mvina@educa.madrid.org', 'María del Carmen', 'Apellido1', 'Apellido2', 'Servicio Salud Laboral - Gerencia Regional de Salud - Consejería Sanidad - Junta Castilla y León', '555555555', 'Paseo de Zorrilla, 1 - Despacho 3009', 47007, 'Valladolid', 47, '2011-04-08', '09:34:12'),
('natividad.garcia@educa.madrid.org', 'Natividad', 'Apellido1', 'Apellido2', 'Salud Pública área 9', '555555555', 'Avda. Juan Carlos I, 84 1ª planta', 28916, 'Leganés', 28, '2011-04-07', '12:20:05'),
('nlopezp@educa.madrid.org', 'Noemí', 'Apellido1', 'Apellido2', 'Centro Nacional de Epidemiología', '555555555', 'Sinesio Delgado, 6', 28029, 'Madrid', 28, '2011-04-07', '09:48:31'),
('noemimartox@educa.madrid.org', 'Noemi', 'Apellido1', 'Apellido2', 'Centro Nacional de Epidemiología', '555555555', 'C/ Monforte de Lemos, 5. Pabellón 13', 28029, 'madrid', 28, '2011-04-06', '12:42:07'),
('nolotienenadieexceptoyo@educa.madrid.org', 'Rocio', 'Apellido1', 'Apellido2', 'Hospital Nisa Pardo de Aravaca', '555555555', 'c/altamirano, 32', 28008, 'madrid', 28, '2011-04-07', '10:20:15'),
('odiazg.gapm01@educa.madrid.org', 'oscar', 'Apellido1', 'Apellido2', 'C.S. ARGANDA I', '555555555', 'C/martell 27 1ºc', 28053, 'madrid', 28, '2011-04-05', '17:19:14'),
('omoreno@educa.madrid.org', 'Olga', 'Apellido1', 'Apellido2', 'SANOFI PASTEUR MSD', '555555555', 'Pº de la Castellana, 141 -2ºC', 28046, 'Madrid', 28, '2011-04-07', '10:05:39'),
('oriana.ramirez@educa.madrid.org', 'Oriana', 'Apellido1', 'Apellido2', 'H.U La Paz', '555555555', 'Paseo de la Castellana s/n', 28029, 'Madrid', 28, '2011-04-06', '12:30:01'),
('otsherrero@educa.madrid.org', 'teresa', 'Apellido1', 'Apellido2', 'MADRID SALUD FUENCARRAL', '555555555', 'MONFORTE DE LEMOS- 38', 28029, 'MADRID', 28, '2011-04-05', '22:40:20'),
('paloma.gomez@educa.madrid.org', 'Paloma', 'Apellido1', 'Apellido2', 'CS:MARIA DE GUZMAN', '555555555', 'JUAN DE BORGOÑA S/N', 28806, 'ALCALA DE HENARES', 28, '2011-04-06', '12:51:57'),
('paloma.martinez@educa.madrid.org', 'PALOMA', 'Apellido1', 'Apellido2', 'SERVICIO DE SALUD PÚBLICA ÁREA 6', '555555555', 'AVDA GUADARRAMA 34', 28220, 'MAJADAHONDA', 28, '2011-04-05', '09:17:36'),
('palomagarridocalleja@educa.madrid.org', 'PALOMA', 'Apellido1', 'Apellido2', 'C.S.ALMENDRALES', '555555555', 'C/ VISITACION Nº 5', 28026, 'MADRID', 28, '2011-04-07', '11:36:32'),
('palsinamier@educa.madrid.org', 'Pedro', 'Apellido1', 'Apellido2', 'Sanofi Pasteur MSD', '555555555', 'Paseo de la Castellana 141, 2ºC', 28046, 'Madrid', 28, '2011-04-07', '16:25:22'),
('parrazola.hdoc@educa.madrid.org', 'Mª Pilar', 'Apellido1', 'Apellido2', 'Hospital Universitario 12 de Octubre', '555555555', 'Avda de Córdoba, s/n', 28041, 'Madrid', 28, '2011-04-04', '14:55:54'),
('pefaboca@educa.madrid.org', 'PEDRO FABIO', 'Apellido1', 'Apellido2', 'HUFA', '555555555', 'GREGORIO VACAS Nº 1 - 1º A', 28047, 'MADRID', 28, '2011-04-06', '03:01:21'),
('pilar.gomez@educa.madrid.org', 'Pilar', 'Apellido1', 'Apellido2', 'Coordinación de Sanidad Penitenciaria', '555555555', 'C/ Alcalá 38', 28014, 'Madrid', 28, '2011-04-04', '11:36:47'),
('pilar.serra@educa.madrid.org', 'Pilar', 'Apellido1', 'Apellido2', 'Sº Prevención de la Enfermedad', '555555555', 'Julian Camarillo-4B', 28037, 'Madrid', 28, '2011-04-06', '14:26:40'),
('querubina.castillo@educa.madrid.org', 'Querubina', 'Apellido1', 'Apellido2', 'Centro de Vacunación', '555555555', 'Nuñez de Balboa nº 111', 28006, 'Madrid', 28, '2011-04-04', '20:52:45'),
('rafasoco@educa.madrid.org', 'Rafael', 'Apellido1', 'Apellido2', 'CS8. Cadalso de los Vidrios', '555555555', 'San LázaroNº9', 28630, 'Villa del Prado', 28, '2011-04-07', '02:27:09'),
('rakel_monasterio@educa.madrid.org', 'Rakel', 'Apellido1', 'Apellido2', '--', '555555555', 'Rafael Calvo 30', 28010, 'Madrid', 28, '2011-04-05', '20:32:48'),
('rdiez.hupa@educa.madrid.org', 'ROSA', 'Apellido1', 'Apellido2', 'HOSPITAL PRINCIPE DE ASTURIAS', '555555555', 'Crta.alcala/meco s/n', 28805, 'Alcala de Henares', 28, '2011-04-05', '14:09:02'),
('ricard.genova@educa.madrid.org', 'ricard', 'Apellido1', 'Apellido2', 'Subdir Promocion de la Salud y Prevencion, DG Atencion Primaria', '555555555', 'Julian Camarillo, 4-B', 28037, 'Madrid', 28, '2011-04-06', '09:38:04'),
('rmalvarez.gap08@educa.madrid.org', 'rosa mª', 'Apellido1', 'Apellido2', 'C.S. Rivota', '555555555', 'Granadilla 45', 28220, 'majadahonda', 28, '2011-04-06', '10:10:53'),
('ro.os.va@educa.madrid.org', 'ROSALBA', 'Apellido1', 'Apellido2', 'CENTRO MEDICO BOADILLA', '555555555', 'AVDA NUEVO MUNDO 14', 28660, 'BOADILLA DEL MONTE', 28, '2011-04-05', '19:52:35'),
('rosa.cayetano@educa.madrid.org', 'Rosa', 'Apellido1', 'Apellido2', 'C:S. Dr. Luengo Rodríguez', '555555555', 'c/Nueva York 16', 28938, 'Madrid-Móstoles', 28, '2011-04-05', '17:26:51'),
('rosa.noguerales@educa.madrid.org', 'ROSA', 'Apellido1', 'Apellido2', 'Consejeria de Sanidad', '555555555', 'Julian Camarillo 4-b', 28037, 'Madrid', 28, '2011-04-08', '12:37:51'),
('Rosana.Inurrieta@educa.madrid.org', 'ROSANA', 'Apellido1', 'Apellido2', 'PUERTA BONITA 1', '555555555', 'CONDE DE PEÑALVER 28', 28006, 'MADRID', 28, '2011-04-08', '09:42:05'),
('rsolano@educa.madrid.org', 'Rubén', 'Apellido1', 'Apellido2', 'Centro Nacional de Epidemiología. ISCIII', '555555555', 'C/ Monforte de Lemos 5, Pabellon 13', 28029, 'Madrid', 28, '2011-04-06', '13:51:43'),
('ruthsanzplanillo@educa.madrid.org', 'RUTH', 'Apellido1', 'Apellido2', 'CENTRO DE SALUD ABRANTES', '555555555', 'CALLE HISPANO 14D 8ºC', 28054, 'MADRID', 28, '2011-04-05', '23:37:53'),
('sar2222@educa.madrid.org', 'ROSARIO', 'Apellido1', 'Apellido2', 'C.S. SAN FERNANDO 1', '555555555', 'CALLE CORDOBA Nº6', 28821, 'COSLADA', 28, '2011-04-06', '19:01:28'),
('silvia.sanchez@educa.madrid.org', 'SILVIA', 'Apellido1', 'Apellido2', 'SALUD PÚBLICA ÁREA 1', '555555555', 'CINCOVILLAS, 5', 28051, 'MADRID', 28, '2011-04-05', '09:30:25'),
('susana_55@educa.madrid.org', 'susana', 'Apellido1', 'Apellido2', 'vacunacion nuñez de balboa', '555555555', 'vacunacion nuñez de balboa 111', 28006, 'madrid', 28, '2011-04-04', '19:01:08'),
('susana.granado@educa.madrid.org', 'SUSANA', 'Apellido1', 'Apellido2', 'SUBDIRECCIÓN DE PROMOCIÓN DE LA SALUD Y PREVENCIÓN', '555555555', 'JULIAN CAMARILLO 4B 2ª PLANTA', 28037, 'MADRID', 28, '2011-04-06', '11:42:55'),
('susana.herrero@educa.madrid.org', 'susana', 'Apellido1', 'Apellido2', 'CS Vicente Muzas', '555555555', 'C/ Vicente Muzas 8', 28043, 'Madrid', 28, '2011-04-07', '17:01:01'),
('susana.jimenez@educa.madrid.org', 'SUSANA', 'Apellido1', 'Apellido2', 'SERVICIO TERRITORIAL SALUD 5', '555555555', 'AVDA. BRUSELAS 38, EDIF 1, 1º', 28108, 'ALCOBENDAS', 28, '2011-04-06', '12:27:56'),
('teresa.sagrado@educa.madrid.org', 'Teresa', 'Apellido1', 'Apellido2', 'Hospital Ramón y Cajal', '555555555', 'Carretera Colmenar Viejo', 28035, 'Madrid', 28, '2011-04-04', '20:36:49'),
('toyavrt@educa.madrid.org', 'VICTORIA', 'Apellido1', 'Apellido2', 'SAN FERNANDO 1', '555555555', 'CALLE LAS MATAS 17-2º IZQDO', 28039, 'MADRID', 28, '2011-04-06', '16:08:16'),
('vacunasgu@educa.madrid.org', 'Fernanda', 'Apellido1', 'Apellido2', 'Delegacion de Salud y Bienestar Social', '555555555', 'Paseo Fernandez Iparraguirre nº 1', 19001, 'Guadalajara', 19, '2011-04-07', '10:10:05'),
('victoria.rodriguez@educa.madrid.org', 'Maria Victoria', 'Apellido1', 'Apellido2', 'DirecciónGral Atención Primaria', '555555555', 'Julian Camarillo- 4b', 28037, 'Madrid', 28, '2011-04-04', '09:50:05'),
('virgy_hg@educa.madrid.org', 'Virginia', 'Apellido1', 'Apellido2', 'CS. Colmenar Viejo Sur', '555555555', 'dr cecilio de la morena', 28770, 'Colmenar Viejo', 28, '2011-04-05', '17:55:07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registroasistentes`
--
ALTER TABLE `registroasistentes`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
