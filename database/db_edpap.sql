-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-10-2025 a las 15:41:10
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_edpap`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `albumes`
--

CREATE TABLE `albumes` (
  `id` int(11) NOT NULL,
  `tituloA` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `fechaA` date NOT NULL,
  `enlace_imagenA` varchar(255) NOT NULL,
  `enlaceA` varchar(255) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `albumes`
--

INSERT INTO `albumes` (`id`, `tituloA`, `slug`, `fechaA`, `enlace_imagenA`, `enlaceA`, `visible`, `created`, `modified`) VALUES
(10, 'Clínic de porteros: técnica y reflejos', 'Batalla-de-porteros-Oira', '2020-09-02', 'https://images.unsplash.com/photo-1508087625439-de3978963553?q=80&w=1173&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'https://images.unsplash.com/photo-1508087625439-de3978963553?q=80&w=1173&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 1, '2020-09-22 15:55:58', '2025-10-01 19:44:57'),
(11, 'Clínic de técnica de pies con invitados', '2-clinic-barbadas-en-la-esscuela-de-porteros-angel-y-pato', '2020-09-01', 'https://images.unsplash.com/photo-1739550899048-30cecc9c90c3?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'https://images.unsplash.com/photo-1739550899048-30cecc9c90c3?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 1, '2020-09-22 16:22:08', '2025-10-01 19:55:03'),
(12, 'Campus de verano 2020', '2-batalla-escuela-de-porteros-Angel-y-Pato', '2020-09-24', 'https://images.unsplash.com/photo-1650410811784-42a0002fdb0e?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'https://images.unsplash.com/photo-1650410811784-42a0002fdb0e?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 1, '2020-09-22 16:23:12', '2025-10-01 19:45:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `tituloE` varchar(255) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `descripcionE` text NOT NULL,
  `fechaE` date NOT NULL,
  `horaE` time NOT NULL,
  `localizacionE` varchar(255) NOT NULL,
  `enlace_localizacionE` varchar(255) DEFAULT NULL,
  `fotoE` varchar(255) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `tituloE`, `slug`, `descripcionE`, `fechaE`, `horaE`, `localizacionE`, `enlace_localizacionE`, `fotoE`, `visible`, `created`, `modified`) VALUES
(10, 'Presentación camisetas de la escuela', 'Presentacion-camisetas-de-la-escuela', '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: normal;\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: normal;\">Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>', '2020-09-11', '00:10:00', 'Centro Comercial Pontevella', '', 'camiseta_edpap.jpg', 1, '2020-09-18 22:56:10', '2020-09-19 00:09:36'),
(12, 'Presentación nueva temporada 2020 2021', 'Presentacion-nueva-temporada-2020-2021', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\"><span style=\"font-family: Roboto;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ligula mi, lacinia a sollicitudin vel, mollis vitae ligula. Sed non diam finibus, tempus nibh vitae, convallis dui. Curabitur eget orci eu leo rhoncus vulputate. Fusce sit amet commodo elit, id molestie ipsum. Pellentesque tristique turpis ut arcu malesuada, vel pretium elit suscipit. Mauris facilisis rhoncus est, eu tempus sapien condimentum et. Fusce non egestas urna. Cras congue tincidunt sapien ac tempor. In id tempus eros. Duis eget turpis ut felis blandit tincidunt. In hac habitasse platea dictumst.</span></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\"><span style=\"font-family: Roboto;\">Aenean euismod porta dolor, in varius nulla bibendum ac. Vestibulum velit arcu, iaculis nec turpis nec, facilisis elementum neque. Praesent malesuada arcu sed ullamcorper vehicula. Suspendisse dolor justo, pretium eu ullamcorper nec, pharetra facilisis urna. Suspendisse potenti. Vestibulum fringilla arcu sit amet elit accumsan, in ornare risus volutpat. Nam finibus lacus nibh, ut hendrerit metus aliquam ut. Duis gravida nec quam vel maximus.</span></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\"><span style=\"font-family: Roboto;\">Vestibulum faucibus faucibus eros quis efficitur. Etiam quis ipsum non magna facilisis venenatis congue et metus. Duis lacinia quis lacus a efficitur. In et tristique mi. Aliquam iaculis felis vel purus dignissim imperdiet. Integer vulputate arcu non enim lacinia, vel fringilla lectus maximus. Ut tempus erat eget diam consectetur, ac posuere lacus mollis. Cras tincidunt pulvinar finibus. Donec convallis consequat quam sit amet cursus. Sed mattis, ligula pulvinar pellentesque semper, diam magna blandit elit, in ullamcorper orci neque a urna. Aenean sollicitudin accumsan augue, eget ultrices est lobortis vel. Praesent dui risus, porta quis consequat at, lobortis non purus. Nam a lacus vulputate, bibendum nulla nec, tempor dui. Cras tincidunt et ex eu fringilla. Vestibulum fringilla tristique finibus. Vivamus volutpat pulvinar nisl sed feugiat.</span></p>', '2020-08-30', '09:30:00', 'Centro comercial pontevella', '', 'descarga.png', 1, '2020-09-22 14:50:01', '2025-09-30 21:00:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(10) UNSIGNED NOT NULL,
  `tituloN` varchar(255) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `descripcionN` text NOT NULL,
  `fechaN` date NOT NULL,
  `fotoN` varchar(255) NOT NULL,
  `evento_id` int(255) DEFAULT NULL,
  `visible` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `tituloN`, `slug`, `descripcionN`, `fechaN`, `fotoN`, `evento_id`, `visible`, `created`, `modified`) VALUES
(58, 'Nuestros alumnos participan en el Torneo Juvenil de Verano', 'La-escuela-de-porteros-Angel-y-Pato-estrena-su-pagina-web', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur tristique sem ac sollicitudin. Aliquam pellentesque lorem sit amet aliquam ornare. Quisque erat metus, gravida in varius faucibus, porttitor eget sapien. Phasellus dignissim, eros ut pretium congue, ante ipsum convallis risus, id porta erat eros nec diam. Donec semper ligula eu neque faucibus tempus. Donec leo odio, congue tincidunt diam eu, varius ultrices nunc. Donec varius velit luctus pharetra commodo. Aliquam ligula est, mattis in pulvinar sit amet, scelerisque ut elit. Nulla iaculis lectus sit amet ex interdum, sit amet rutrum sem pretium. Proin pellentesque ornare sapien at interdum. Sed vel ex lorem.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\">Etiam ullamcorper vel tellus a consequat. In mi augue, ornare a lacinia quis, sollicitudin nec turpis. Fusce lacinia nisl et magna eleifend, imperdiet maximus tellus vulputate. Etiam ante ligula, blandit a augue at, varius tempor elit. Suspendisse velit felis, dignissim vitae pulvinar a, aliquet eget nisi. Nam ut placerat ante. Donec vel est non nunc molestie mollis quis eu nibh. Nullam rhoncus vel lacus ac eleifend. Proin porttitor dictum dapibus. Fusce dignissim vehicula orci. Maecenas placerat neque non augue volutpat posuere. Fusce hendrerit lectus ac neque fringilla, a pellentesque nibh sollicitudin. Pellentesque sagittis erat non libero blandit sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis eget ipsum eget sapien tincidunt efficitur non in sapien. Pellentesque nec auctor metus, eget elementum turpis.</p>', '2020-10-03', 'torneo.webp', NULL, 1, '2020-09-18 16:54:25', '2025-10-01 18:34:37'),
(60, 'Nueva temporada de entrenamientos abre sus puertas', 'La-escuela-contara-con-la-visita-del-ex-guardameta-Dani-Mallo', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><span style=\"font-family: Roboto;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae pulvinar tortor. Nam aliquam magna quis metus pellentesque, quis porta magna pellentesque. Curabitur nisi nisl, varius id eros vitae, malesuada imperdiet sapien. Aliquam consequat purus a tincidunt imperdiet. Morbi porta nisi vitae nulla lacinia iaculis nec et tortor. Mauris ipsum magna, maximus quis interdum et, efficitur vitae ex. Curabitur lacinia convallis lectus. Nullam cursus augue fringilla tortor facilisis elementum. Aliquam vel tellus sit amet enim scelerisque hendrerit non ut quam. Proin aliquet urna eu finibus placerat. Aenean ipsum enim, vehicula sed nibh sit amet, pretium feugiat nulla. Aliquam nec pulvinar leo, vitae elementum ipsum. Cras vestibulum accumsan justo sit amet sagittis.</span></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><span style=\"font-family: Roboto;\">Curabitur vehicula in mauris et gravida. Aliquam lobortis ultrices dui et tempus. Aenean ullamcorper enim et ullamcorper tristique. Sed auctor fermentum lorem, ac egestas nibh ultrices sit amet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla accumsan nec est et posuere. Aliquam velit risus, tempor id varius ut, aliquet quis est. Vivamus auctor bibendum lacus, at vehicula mauris convallis nec. Praesent viverra est at sapien laoreet, vel commodo mauris blandit. Aenean ullamcorper sit amet dolor sit amet accumsan. Vestibulum imperdiet imperdiet est, vitae viverra quam. Nulla varius nisl eget lectus consequat fringilla.</span></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><span style=\"font-family: Roboto;\">Aliquam finibus quam nibh, ut tempus massa suscipit a. Quisque suscipit dictum nisl id suscipit. Ut sit amet mattis magna. Ut placerat nisi vel aliquet sodales. In tempor libero tellus, nec commodo metus sodales ut. Vivamus nec erat porta, elementum nibh sed, lobortis lectus. Proin malesuada sit amet tortor eget aliquam. Vivamus placerat felis magna, a maximus libero vestibulum ut. Etiam justo nibh, egestas sit amet nunc id, eleifend faucibus nunc. Proin id ex sit amet ipsum suscipit tincidunt at nec sapien. Nunc varius est felis, sed fringilla ipsum lacinia pharetra. Nunc molestie sit amet mauris sit amet elementum. Curabitur pulvinar, nulla eget egestas suscipit, neque turpis venenatis ipsum, vel cursus nisl lacus semper purus.</span></p>', '2020-10-25', 'balones.webp', NULL, 1, '2020-09-18 17:00:50', '2025-10-01 18:49:21'),
(61, 'Claves para mejorar la técnica en los balones aéreos', 'Nuevo-campo-de-entrenamiento-de-la-escuela', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\"><span style=\"font-family: Roboto;\">Curabitur vehicula in mauris et gravida. Aliquam lobortis ultrices dui et tempus. Aenean ullamcorper enim et ullamcorper tristique. Sed auctor fermentum lorem, ac egestas nibh ultrices sit amet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla accumsan nec est et posuere. Aliquam velit risus, tempor id varius ut, aliquet quis est. Vivamus auctor bibendum lacus, at vehicula mauris convallis nec. Praesent viverra est at sapien laoreet, vel commodo mauris blandit. Aenean ullamcorper sit amet dolor sit amet accumsan. Vestibulum imperdiet imperdiet est, vitae viverra quam. Nulla varius nisl eget lectus consequat fringilla.</span></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\"><span style=\"font-family: Roboto;\">Aliquam finibus quam nibh, ut tempus massa suscipit a. Quisque suscipit dictum nisl id suscipit. Ut sit amet mattis magna. Ut placerat nisi vel aliquet sodales. In tempor libero tellus, nec commodo metus sodales ut. Vivamus nec erat porta, elementum nibh sed, lobortis lectus. Proin malesuada sit amet tortor eget aliquam. Vivamus placerat felis magna, a maximus libero vestibulum ut. Etiam justo nibh, egestas sit amet nunc id, eleifend faucibus nunc. Proin id ex sit amet ipsum suscipit tincidunt at nec sapien. Nunc varius est felis, sed fringilla ipsum lacinia pharetra. Nunc molestie sit amet mauris sit amet elementum. Curabitur pulvinar, nulla eget egestas suscipit, neque turpis venenatis ipsum, vel cursus nisl lacus semper purus.</span><span style=\"font-family: Roboto;\">﻿</span></p>', '2020-09-24', 'tecnica.png', NULL, 1, '2020-09-18 17:16:35', '2025-10-01 18:37:20'),
(64, 'Entrenamiento de pretemporada: fuerza, coordinación y mentalidad', 'La-escuela-realiza-un-convenio-con-Tecnopole-Sport-Center', '<p>﻿<span style=\"text-align: justify;\">Curabitur vehicula in mauris et gravida. Aliquam lobortis ultrices dui et tempus. Aenean ullamcorper enim et ullamcorper tristique. Sed auctor fermentum lorem, ac egestas nibh ultrices sit amet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla accumsan nec est et posuere. Aliquam velit risus, tempor id varius ut, aliquet quis est. Vivamus auctor bibendum lacus, at vehicula mauris convallis nec. Praesent viverra est at sapien laoreet, vel commodo mauris blandit. Aenean ullamcorper sit amet dolor sit amet accumsan. Vestibulum imperdiet imperdiet est, vitae viverra quam. Nulla varius nisl eget lectus consequat fringilla.</span><br></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">Aliquam finibus quam nibh, ut tempus massa suscipit a. Quisque suscipit dictum nisl id suscipit. Ut sit amet mattis magna. Ut placerat nisi vel aliquet sodales. In tempor libero tellus, nec commodo metus sodales ut. Vivamus nec erat porta, elementum nibh sed, lobortis lectus. Proin malesuada sit amet tortor eget aliquam. Vivamus placerat felis magna, a maximus libero vestibulum ut. Etiam justo nibh, egestas sit amet nunc id, eleifend faucibus nunc. Proin id ex sit amet ipsum suscipit tincidunt at nec sapien. Nunc varius est felis, sed fringilla ipsum lacinia pharetra. Nunc molestie sit amet mauris sit amet elementum. Curabitur pulvinar, nulla eget egestas suscipit, neque turpis venenatis ipsum, vel cursus nisl lacus semper purus.</p>', '2020-09-09', 'entrenamiento pretemporada.png', NULL, 1, '2020-09-18 17:23:36', '2025-10-01 18:48:04'),
(73, 'Sesión especial de reflejos y reacción con invitados profesionales', 'Comienzo-nueva-temporada-2020-2021', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\"><span style=\"font-family: Roboto;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed neque quis odio sodales congue. Praesent pharetra metus risus, sit amet vulputate erat feugiat nec. Donec a iaculis nunc. Praesent eget enim dignissim, ornare libero a, ornare sem. Vivamus rutrum nec dolor et suscipit. Aenean feugiat placerat magna, scelerisque volutpat massa sodales at. Nulla elementum felis nec quam egestas pellentesque. Integer mattis in nulla et lacinia. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque luctus aliquam arcu id auctor. Phasellus eu consectetur nibh. Suspendisse sed lacus nulla. Donec ut euismod nibh, eu ullamcorper neque. Donec et tellus est. Vestibulum ornare, nulla at placerat vestibulum, neque nisl bibendum leo, ut tincidunt augue purus pretium sapien. Morbi ultrices porta neque ac gravida.</span></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\"><span style=\"font-family: Roboto;\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur ac tristique est, a efficitur tellus. Suspendisse gravida dolor quis purus hendrerit, scelerisque lobortis metus ultricies. Vestibulum arcu eros, aliquam a mi eget, dictum ultricies ante. Nulla rutrum posuere imperdiet. Aenean vulputate enim quis diam auctor ornare. Quisque sed porta justo. Nam tincidunt risus vel congue egestas. Cras quis orci non nibh faucibus placerat vel in ligula. Duis venenatis ante nec diam ultrices, sagittis eleifend elit dignissim. Aliquam erat volutpat.</span></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\"><span style=\"font-family: Roboto;\">Nunc auctor, lorem euismod accumsan luctus, elit turpis ullamcorper dolor, vel aliquet metus justo nec felis. Fusce ac consectetur lectus, sit amet ultrices ipsum. Fusce quis orci sed est tristique volutpat dignissim ut diam. Phasellus sed fermentum erat. Nulla ullamcorper turpis lorem, nec finibus tellus pulvinar vitae. Sed in blandit tellus, a laoreet enim. Sed luctus sapien ligula. Suspendisse eget justo at mi sodales aliquet maximus in tortor. Vivamus lacinia accumsan odio, eu laoreet ante interdum et. Pellentesque a nisi et nulla consectetur varius. Sed imperdiet at erat vel malesuada. Quisque quam risus, suscipit in sollicitudin vitae, dignissim et tellus. Integer sed tellus nulla. Vivamus ornare nisl eget nulla pharetra, non molestie eros molestie. Praesent elementum diam eu arcu vulputate tempor. Nunc nec enim dapibus urna lobortis auctor.</span></p>', '2020-11-08', 'sesion_entrenamiento.jpg', NULL, 1, '2020-09-22 13:53:27', '2025-10-01 18:26:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `porteros`
--

CREATE TABLE `porteros` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `apodo` varchar(255) DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  `equipo` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `slogan` text DEFAULT NULL,
  `pie_dominante` varchar(255) NOT NULL,
  `fotoP` varchar(255) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `porteros`
--

INSERT INTO `porteros` (`id`, `nombre`, `apellidos`, `slug`, `apodo`, `fecha_nacimiento`, `equipo`, `categoria`, `descripcion`, `slogan`, `pie_dominante`, `fotoP`, `visible`, `created`, `modified`) VALUES
(10, 'Andrés', 'Cifuentes', 'Jan-Oblak', 'Andrés', '1994-10-11', 'Atlético de Madrid ', 'Senior', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo', 'Me gustaría ser como Oblak de mayor', 'Derecho', 'portero_logo.png', 1, '2020-09-15 16:18:55', '2025-10-01 17:22:00'),
(11, 'Sergio', 'Villalba', 'Muni-Munir', 'Sergio', '1996-04-12', 'Málaga CF', 'Infantil', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu ', 'Mi ídolo de la infancia es Iker Casillas.', 'Derecho', 'portero_logo.png', 1, '2020-09-15 16:20:17', '2025-10-01 17:22:30'),
(12, 'Bruno', 'Torres', 'Pitu-Cuellar', 'Bruno Torres', '1986-12-12', 'Leganés CF', 'Alevin', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu ', 'Siempre creo en mis posibilidades.', 'Izquierdo', 'portero_logo.png', 1, '2020-09-15 16:22:17', '2025-10-01 17:22:51'),
(13, 'Iván', 'Delgado', 'Thibaut-Courtois', 'Delgado', '1992-08-12', 'Real Madrid CF', 'Benjamin', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu ', 'Mi sueño se ha cumplido, jugar en el Real Madrid.', 'Izquierdo', 'portero_logo.png', 1, '2020-09-15 16:22:59', '2025-10-01 17:23:18'),
(14, 'Alejandro', 'Pardo', 'Youseff-Bounou', 'Álex', '2004-06-25', 'Sevilla FC', 'Cadete', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu ', 'Me gustaría ser portero de la premier league.', 'Derecho', 'portero_logo.png', 1, '2020-09-15 16:24:06', '2025-10-01 17:23:50'),
(15, 'Javier', 'Molina', 'Diego-Rivas', 'Javier Molina', '2005-05-04', 'Racing de Ferrol FC', 'Infantil', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu ', 'Quiero llegar a ser portero del primer equipo del Racing.', 'Izquierdo', 'portero_logo.png', 1, '2020-09-15 16:25:19', '2025-10-01 17:21:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created`, `modified`) VALUES
(10, 'admin', '$2y$10$tQo8.R0vkioNmJYn4Q53SuPpy4AXAKVZj9GrcFEumO3t5z6MS7ikO', '2020-09-10 13:25:01', '2020-09-10 13:25:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `tituloV` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `fechaV` date NOT NULL,
  `enlaceV` varchar(255) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `tituloV`, `slug`, `fechaV`, `enlaceV`, `visible`, `created`, `modified`) VALUES
(25, 'Sesión entrenamiento fútbol base', 'Entrenamiento-con-juveniles-CD-La-Nucia', '2020-09-24', 'https://www.youtube.com/embed/tOhgahFDl_Y', 1, '2020-09-22 16:34:12', '2025-10-01 19:58:26'),
(26, 'Entrenamiento físico ténico de porteros', 'Entrenamiento-fisico-tenico-de-porteros', '2020-09-24', 'https://www.youtube.com/embed/mUXgiNZa1Js', 1, '2020-09-22 17:05:28', '2020-09-22 17:06:41'),
(27, 'Sesión agilidad porteros profesionales', 'Clinic-de-porteros-en-Benidorm-2020', '2020-09-20', 'https://www.youtube.com/embed/XcJ1geO-LCY', 1, '2020-09-22 17:06:35', '2025-10-01 19:59:11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `albumes`
--
ALTER TABLE `albumes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `porteros`
--
ALTER TABLE `porteros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `albumes`
--
ALTER TABLE `albumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `porteros`
--
ALTER TABLE `porteros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
