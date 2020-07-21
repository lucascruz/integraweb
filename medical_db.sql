-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-07-2020 a las 18:35:00
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `medical_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) NOT NULL,
  `patient_id` bigint(20) DEFAULT NULL,
  `insurance_id` bigint(20) DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `city_id` bigint(20) DEFAULT NULL,
  `doctor_id` bigint(20) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL COMMENT 'or it can be int(active or not)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `appointments`
--

INSERT INTO `appointments` (`id`, `patient_id`, `insurance_id`, `reason`, `date`, `city_id`, `doctor_id`, `status`) VALUES
(1, 2, NULL, 'Dolor de cabeza', '2020-07-18', NULL, NULL, NULL),
(2, 2, NULL, 'PRUEBA', '2020-07-16', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `benefits`
--

CREATE TABLE `benefits` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `text` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `departamento` varchar(100) DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL,
  `departamento_id` varchar(100) DEFAULT NULL,
  `active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `city`
--

INSERT INTO `city` (`id`, `name`, `departamento`, `code`, `departamento_id`, `active`) VALUES
(1, 'Bogota', 'Santander', '', '0', 1),
(3, 'Bucaramanga', 'Santander', '', '0', 1),
(4, 'Rionegro', 'Antioquia', '', '0', 1),
(5, 'Barranquilla', 'Atlantico', '', '0', 1),
(6, 'Floridablanca', 'Santander', '', '0', 1),
(7, 'Cucuta', 'Norte de Santander', '', '0', 1),
(8, 'Giron', 'Santander', '', '0', 1),
(9, 'Cali', 'Valle del Cauca', '', '0', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact_form`
--

CREATE TABLE `contact_form` (
  `id` bigint(20) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `intro_text` varchar(100) DEFAULT NULL,
  `active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contact_form`
--

INSERT INTO `contact_form` (`id`, `title`, `intro_text`, `active`) VALUES
(1, 'CONTACTO DE PACIENTES', 'DEJANOS TUS DATOS Y TE ESCRIBIREMOS PRONTO', 1),
(2, 'COTIZACION', 'PRECIO SOFTWARE MEDICO', NULL),
(3, 'COTIZACION', 'PRECIO SOFTWARE', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL,
  `extra` varchar(100) DEFAULT NULL
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `specialization` varchar(100) DEFAULT NULL,
  `university` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `phone_number` varchar(30) DEFAULT NULL,
  `formation_list` varchar(100) DEFAULT '',
  `speciality_list` varchar(100) DEFAULT '',
  `active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `email`, `specialization`, `university`, `address`, `city_id`, `image`, `phone_number`, `formation_list`, `speciality_list`, `active`) VALUES
(1, 'Jucob Dolpalyi', 'jucob@gmail.com', 'DERMATOLOGO', 'KCT University', 'SDF #342 423', 1, 'doctor-6.jpg', '+564 47521 47256', '2', '2,3', 1),
(2, 'Dr. Pepito Perz', 'perz@email.com', 'DERMATOLOGO', 'UNAB', 'CRA 33 #48 - 13', 1, 'doctor-4.jpg', '+798 425 5459', '1', '1,2,3,5', 1),
(3, 'Dr. Natalya', 'natalya@mail.ru', 'SOPAENO', 'KCT university', 'CRA 45 #12 - 71', 6, 'doctor.jpg', '+784 186 423', '2', '2', 1),
(4, 'Dr. Segry JiMacovich', 'segry@gmail.com', 'Vitiligo', 'UNAB', 'SDF #342 423', 4, 'doctor.jpg', '+876 211 5462', '1', '1,2,3', 1),
(5, 'Dr. Shutiwy Puw', 'shu@gmail.com', 'YONEPKBS', 'YOWNW UNIV', 'SDF #342 423', 1, 'doctor-2.jpg', '+789 454 7544', '2', '2', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctor_form`
--

CREATE TABLE `doctor_form` (
  `id` bigint(20) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `intro_text` varchar(100) DEFAULT NULL,
  `active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctor_schedule`
--

CREATE TABLE `doctor_schedule` (
  `id` bigint(20) NOT NULL,
  `day` int(10) DEFAULT NULL COMMENT '(1 day per register)',
  `hour` varchar(100) DEFAULT NULL COMMENT 'json of scheduled hours',
  `doctor_id` bigint(20) DEFAULT NULL,
  `active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctor_services`
--

CREATE TABLE `doctor_services` (
  `id` bigint(20) NOT NULL,
  `doctor_id` bigint(20) DEFAULT NULL,
  `services_id` bigint(20) DEFAULT NULL,
  `price1` float DEFAULT 0,
  `price2` float DEFAULT 0 COMMENT 'face to face',
  `price3` float DEFAULT 0 COMMENT 'telemedicine',
  `active` int(11) DEFAULT 0 COMMENT 'other'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `doctor_services`
--

INSERT INTO `doctor_services` (`id`, `doctor_id`, `services_id`, `price1`, `price2`, `price3`, `active`) VALUES
(1, 2, NULL, 1, 2, 3, 0),
(2, 2, NULL, 10, 12, 13, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctor_tags`
--

CREATE TABLE `doctor_tags` (
  `id` bigint(20) NOT NULL,
  `doctor_id` bigint(20) DEFAULT NULL,
  `tags_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctor_type`
--

CREATE TABLE `doctor_type` (
  `id` bigint(20) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `doctor_type`
--

INSERT INTO `doctor_type` (`id`, `type`, `active`) VALUES
(3, 'Prueba 2', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formation`
--

CREATE TABLE `formation` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `formation`
--

INSERT INTO `formation` (`id`, `name`, `active`) VALUES
(1, 'Dermatologia', 1),
(2, 'Dermatologia Quirurgica', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form_items`
--

CREATE TABLE `form_items` (
  `id` bigint(20) DEFAULT NULL,
  `item` varchar(100) DEFAULT NULL,
  `type` int(11) DEFAULT NULL COMMENT 'dotor or contact form',
  `doctor_form_id` bigint(20) DEFAULT NULL,
  `contact_form_id` bigint(20) DEFAULT NULL,
  `active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `form_items`
--

INSERT INTO `form_items` (`id`, `item`, `type`, `doctor_form_id`, `contact_form_id`, `active`) VALUES
(1, 'Nombre', 1, NULL, 1, 1),
(2, 'Correo', 2, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `catalog` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `title`, `catalog`, `active`) VALUES
(1, 'Medico-en-casa.jpg', 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insurance`
--

CREATE TABLE `insurance` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `insurance`
--

INSERT INTO `insurance` (`id`, `name`, `active`) VALUES
(1, 'SALUD TOTAL', NULL),
(3, 'COOMEVA', NULL),
(4, 'SALUD TOTAL 2', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logos`
--

CREATE TABLE `logos` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `catalog` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `logos`
--

INSERT INTO `logos` (`id`, `title`, `catalog`, `active`) VALUES
(1, '101.png', 1, 1),
(2, 'logo telemedicina. white and blue 1.png', 2, 1),
(3, 'logo telemedicina. white and blue2.png', 3, 1),
(4, 'doctor.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logo_catalogs`
--

CREATE TABLE `logo_catalogs` (
  `id` int(11) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `media_type` varchar(100) DEFAULT NULL,
  `basic_path` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `logo_catalogs`
--

INSERT INTO `logo_catalogs` (`id`, `type`, `media_type`, `basic_path`) VALUES
(1, 'Telemedicina', 'Logo', 'images/page_logos'),
(2, 'Telemedicina Company Logo(Header and Footer)', 'Logo', 'images/page_logos'),
(3, 'Telemedicina Company Logo(Middle)', 'Logo', 'images/page_logos'),
(4, 'Homepage Background', 'Image', 'images'),
(5, 'Homepage Back video', 'Video', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(21, '2020_07_16_214244_create_contacts_form_table', 2),
(43, '2014_10_12_000000_create_users_table', 3),
(44, '2014_10_12_100000_create_password_resets_table', 3),
(45, '2020_07_16_214244_create_contacts_table', 3),
(46, '2020_07_17_080348_create_tags_table', 4),
(47, '2020_07_17_121329_create_insurances_table', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opinions`
--

CREATE TABLE `opinions` (
  `id` bigint(20) NOT NULL,
  `patient_id` bigint(20) DEFAULT NULL,
  `opinion_date` date DEFAULT NULL,
  `opinion_content` varchar(100) DEFAULT NULL,
  `doctors_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `opinions`
--

INSERT INTO `opinions` (`id`, `patient_id`, `opinion_date`, `opinion_content`, `doctors_id`) VALUES
(1, 3, NULL, 'EXCELENTE MEDICO, BUEN SERVICIO', 1),
(6, 3, NULL, 'EXCELENTEEE', 1),
(7, 3, NULL, 'BUENA PERSONA', 1),
(8, 3, NULL, 'BUENA PERSONA', 1),
(9, 4, NULL, 'e', 4),
(10, 4, NULL, 'g', 4),
(11, 4, NULL, 'Hola', 4),
(12, 4, NULL, 'Hola', 3),
(13, 4, NULL, 'Excelente servicio', 2),
(14, 4, NULL, 'excelente profesional', 5),
(15, 4, NULL, 'Bien', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `partners`
--

INSERT INTO `partners` (`id`, `title`, `active`) VALUES
(1, '1.png', 1),
(2, '2.png', 1),
(3, '3.jpg', 1),
(4, '6.png', 1),
(5, '7.png', 1),
(6, '4.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `video` varchar(100) DEFAULT NULL,
  `services_type_id` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `services`
--

INSERT INTO `services` (`id`, `title`, `image`, `video`, `services_type_id`, `active`) VALUES
(2, 'Excision and repair of benign excision skin lesions', 'images.jpg', 'telemedicinacolombia.com', 2, 1),
(3, 'Angioplasty', 'images.jpg', 'http://telemedicinacolombia.com', 2, 1),
(4, 'Spontaneous abortion', 'images.jpg', 'http://telemedicinacolombia.com', 1, 1),
(5, 'Peritonsillar abscess', 'images (1).jpg', 'http://telemedicinacolombia.com', 3, 1),
(6, 'Excision and repair of benign excision skin lesions', 'doctor.jpg', 'https://www.youtube.com/watch?v=LXb3EKWsInQ', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `service_type`
--

CREATE TABLE `service_type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `service_type`
--

INSERT INTO `service_type` (`id`, `name`, `active`) VALUES
(3, 'seguros', 1),
(4, 'servicios', 1),
(8, 'Enfermedades', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `specialist`
--

CREATE TABLE `specialist` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `specialist`
--

INSERT INTO `specialist` (`id`, `name`, `active`) VALUES
(1, 'Vitiligo', 1),
(2, 'Psoriasis', 1),
(3, 'Rosacea', 1),
(5, 'Dermatologia', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) NOT NULL,
  `tag` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`id`, `tag`) VALUES
(3, 'SERVICIOS'),
(4, 'SEGURO'),
(5, 'SINTOMAS'),
(10, 'EDITAR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Manuel Ballesteros', 'emballesteros@gmail.com', NULL, '$2y$10$sxnhJIPgCwbD1wGULf3sZuLuJ92.KSZC4QX7a4wufvo7Pc7vAjdDe', NULL, '2020-07-17 03:38:38', '2020-07-17 03:38:38'),
(2, 'Manuel Ballesteros', 'emballesteros@hotmail.com', NULL, '$2y$10$G/XYBmsBAeHcLSqFb5uqx.4vfemWR9ImO/eAERYUADxoQGHhCC3Lm', '7fLWkDHy7vbs2sxxGKB0YFzBrd9jq2XRvf2LKVdma2LxgeYBNjZJ1vVgsp1V', '2020-07-17 10:45:16', '2020-07-17 10:45:16'),
(3, 'Beto', 'beto@gmail.com', NULL, '$2y$10$zZtDMZ1bxP5ROfGkq/vd0OAvv/Mdj90odW75kaxaY1GVX4/.eLNWG', NULL, '2020-07-17 19:18:06', '2020-07-17 19:18:06'),
(4, 'Fernando', 'fernando@hotmail.com', NULL, '$2y$10$F.hqcgZav035NwPwen5BMeZwn9k6pDMg39B5gtUCqUvOZzlr/BV52', 'se2UgqIbd3LQiOMOFtItjAi4HRsu79Nb8Sa1TRgOFKPkM8z7W5EcCqZsGEw7', '2020-07-18 21:46:57', '2020-07-18 21:46:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `catalog` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `title`, `catalog`, `active`) VALUES
(1, 'https://www.youtube.com/embed/WRm2xrb9ZT0', 5, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `benefits`
--
ALTER TABLE `benefits`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `doctor_form`
--
ALTER TABLE `doctor_form`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `doctor_schedule`
--
ALTER TABLE `doctor_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `doctor_services`
--
ALTER TABLE `doctor_services`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `doctor_tags`
--
ALTER TABLE `doctor_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `doctor_type`
--
ALTER TABLE `doctor_type`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `logo_catalogs`
--
ALTER TABLE `logo_catalogs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `opinions`
--
ALTER TABLE `opinions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctors_id` (`doctors_id`);

--
-- Indices de la tabla `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `service_type`
--
ALTER TABLE `service_type`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `specialist`
--
ALTER TABLE `specialist`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `benefits`
--
ALTER TABLE `benefits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `doctor_form`
--
ALTER TABLE `doctor_form`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `doctor_schedule`
--
ALTER TABLE `doctor_schedule`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `doctor_services`
--
ALTER TABLE `doctor_services`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `doctor_tags`
--
ALTER TABLE `doctor_tags`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `doctor_type`
--
ALTER TABLE `doctor_type`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `formation`
--
ALTER TABLE `formation`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `insurance`
--
ALTER TABLE `insurance`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `logo_catalogs`
--
ALTER TABLE `logo_catalogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `opinions`
--
ALTER TABLE `opinions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `service_type`
--
ALTER TABLE `service_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `specialist`
--
ALTER TABLE `specialist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `opinions`
--
ALTER TABLE `opinions`
  ADD CONSTRAINT `opinions_ibfk_1` FOREIGN KEY (`doctors_id`) REFERENCES `doctors` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
