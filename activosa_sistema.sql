-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 10-08-2017 a las 12:42:38
-- Versión del servidor: 5.5.55-cll
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `activosa_sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activos`
--

CREATE TABLE `activos` (
  `id` int(10) UNSIGNED NOT NULL,
  `numero` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `tipo` int(10) NOT NULL,
  `peso` float DEFAULT NULL,
  `talla` float DEFAULT NULL,
  `ancho` float DEFAULT NULL,
  `largo` float DEFAULT NULL,
  `fechacompra` date NOT NULL,
  `fechabaja` date DEFAULT NULL,
  `estado` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Activos pertenecientes a la empresa ASD';

--
-- Volcado de datos para la tabla `activos`
--

INSERT INTO `activos` (`id`, `numero`, `nombre`, `descripcion`, `tipo`, `peso`, `talla`, `ancho`, `largo`, `fechacompra`, `fechabaja`, `estado`, `created_at`, `updated_at`) VALUES
(1, '26478', 'COMPUTO HP 400 G1 AIO 195 HD LED', 'SERIE: MXL5030P50', 1, 10, 120, 35, 43, '2017-08-09', NULL, 1, '2017-08-10 19:06:28', '2017-08-10 19:45:30'),
(2, '10104', 'MESA AUXILIAR ACERO INOXIDABLE', 'MARCA: TRINITY', 1, 1, 10, 20, 23, '2017-08-09', NULL, 1, '2017-08-10 19:47:00', '2017-08-10 19:47:00'),
(3, '2346', 'COSEDORA RAPID', 'SERIE: MXGE987', 1, 12, 2, 3, 5, '2017-08-09', NULL, 1, '2017-08-10 19:51:32', '2017-08-10 19:51:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id` int(10) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text,
  `estado` char(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Areas';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id` int(10) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Ciudades';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_activo`
--

CREATE TABLE `estado_activo` (
  `id` int(10) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Los estados que puede tener un activo';

--
-- Volcado de datos para la tabla `estado_activo`
--

INSERT INTO `estado_activo` (`id`, `nombre`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'ACTIVO', '1', '2017-08-09 15:14:01', NULL),
(2, 'DADO DE BAJA', '1', '2017-08-09 15:14:01', NULL),
(3, 'EN REPARACION', '1', '2017-08-09 15:14:01', NULL),
(4, 'DISPONIBLE', '1', '2017-08-09 15:14:01', NULL),
(5, 'ASIGNADO', '1', '2017-08-09 15:14:01', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_07_185100_create_activos_table', 1),
(4, '2017_08_07_185901_create_posts_table', 2),
(5, '2017_08_07_233211_create_activos_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(10) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `numero_documento` int(10) NOT NULL,
  `estado` char(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Persona registradas en la BD';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsable_activo`
--

CREATE TABLE `responsable_activo` (
  `id` int(10) NOT NULL,
  `tipo_responsable` char(1) DEFAULT NULL COMMENT 'Con este indentificador se relaciona si se asigna el activo a una persona o a un area',
  `estado` char(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fk_activo_id` int(10) NOT NULL COMMENT 'Id del activo  para ser asignado',
  `fk_persona_id` int(10) NOT NULL COMMENT 'En el caso que se asigne a una persona se guarda Id',
  `fk_area_id` int(10) NOT NULL COMMENT 'En el caso que se asigne a un area se guarda Id'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla que contiene los responsables activo';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_activo`
--

CREATE TABLE `tipo_activo` (
  `id` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `estado` char(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tipos de activo';

--
-- Volcado de datos para la tabla `tipo_activo`
--

INSERT INTO `tipo_activo` (`id`, `nombre`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'BIENES INMUEBLES', '1', '2017-08-09 15:14:01', NULL),
(2, 'MAQUINARIA', '1', '2017-08-09 15:14:01', NULL),
(3, 'MATERIAL DE OFICINA', '1', '2017-08-09 15:14:01', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion_area`
--

CREATE TABLE `ubicacion_area` (
  `id` int(10) NOT NULL,
  `estado` char(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fk_ciudad_id` int(10) NOT NULL,
  `fk_area_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Ubicacion de activos por area';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activos`
--
ALTER TABLE `activos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estado` (`estado`),
  ADD KEY `tipo` (`tipo`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado_activo`
--
ALTER TABLE `estado_activo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `responsable_activo`
--
ALTER TABLE `responsable_activo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_persona_id` (`fk_persona_id`),
  ADD KEY `fk_area_ids` (`fk_area_id`),
  ADD KEY `fk_activo_id` (`fk_activo_id`);

--
-- Indices de la tabla `tipo_activo`
--
ALTER TABLE `tipo_activo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ubicacion_area`
--
ALTER TABLE `ubicacion_area`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ciudad_id` (`fk_ciudad_id`),
  ADD KEY `fk_area_id` (`fk_area_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `activos`
--
ALTER TABLE `activos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estado_activo`
--
ALTER TABLE `estado_activo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `responsable_activo`
--
ALTER TABLE `responsable_activo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_activo`
--
ALTER TABLE `tipo_activo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `ubicacion_area`
--
ALTER TABLE `ubicacion_area`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `activos`
--
ALTER TABLE `activos`
  ADD CONSTRAINT `estado` FOREIGN KEY (`estado`) REFERENCES `estado_activo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tipo` FOREIGN KEY (`tipo`) REFERENCES `tipo_activo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `responsable_activo`
--
ALTER TABLE `responsable_activo`
  ADD CONSTRAINT `fk_persona_id` FOREIGN KEY (`fk_persona_id`) REFERENCES `persona` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ubicacion_area`
--
ALTER TABLE `ubicacion_area`
  ADD CONSTRAINT `fk_area_id` FOREIGN KEY (`fk_area_id`) REFERENCES `area` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ciudad_id` FOREIGN KEY (`fk_ciudad_id`) REFERENCES `ciudad` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
