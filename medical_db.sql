-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-07-2020 a las 22:39:55
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
  `date` datetime DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL COMMENT 'or it can be int(active or not)',
  `city` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `appointments`
--

INSERT INTO `appointments` (`id`, `patient_id`, `insurance_id`, `reason`, `date`, `doctor_id`, `status`, `city`) VALUES
(1, 1, 3, 'HOLA', '2020-07-29 08:37:00', 2, NULL, 'floridablanca'),
(2, 1, 3, 'PRUEBA', '2020-07-30 16:39:00', 2, NULL, 'bucaramanga'),
(3, 1, 3, 'Prueba 2', '2020-07-29 21:43:00', 2, NULL, 'floridablanca'),
(4, 5, 1, 'Hola', '2020-07-31 16:45:00', 3, NULL, 'floridablanca'),
(5, NULL, 1, 'rwer', '2020-07-31 17:54:00', 3, NULL, 'floridablanca'),
(6, NULL, 3, 'PRUEBA', '2020-07-29 14:19:00', 3, NULL, 'bucaramanga'),
(7, NULL, 4, 'SIN LOGEAR', '2020-07-30 10:16:00', 3, NULL, 'floridablanca'),
(8, NULL, 3, 'manuel v3', '2020-07-31 14:22:00', 3, NULL, 'giron'),
(9, NULL, 3, 'Cita prueba', '2020-07-31 17:21:00', 2, NULL, 'bucaramanga'),
(10, NULL, NULL, 'prueba 28', '2020-07-30 15:11:00', 2, NULL, 'Floridablanca'),
(11, NULL, NULL, 'PROBANDO', '2020-07-31 15:18:00', 2, NULL, 'bucaramanga'),
(12, NULL, NULL, 'qweqwe', '2020-07-31 15:20:00', 2, NULL, 'qweqwe'),
(13, NULL, NULL, 'qwerq', '2020-07-31 06:25:00', 2, NULL, 'Floridablanca'),
(14, NULL, NULL, 'qqqqqqqqq', '2020-07-31 07:25:00', 2, NULL, 'giron'),
(15, NULL, NULL, 'ejemplo', '2020-07-31 10:06:00', 3, NULL, 'bucaramanga'),
(16, NULL, NULL, 'EJEMPLO 2', '2020-07-31 10:09:00', 2, NULL, 'floridablanca');

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
(1, 'Bogota', 'Cundinamarca', '', '0', 1),
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
-- Estructura de tabla para la tabla `contact_index`
--

CREATE TABLE `contact_index` (
  `id` bigint(20) NOT NULL,
  `title` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `reason` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contact_index`
--

INSERT INTO `contact_index` (`id`, `title`, `email`, `reason`) VALUES
(1, 'prueba', 'emballesteros@gmail.com', 'sqwe'),
(2, 'Quiero más información', 'emballesteros@gmail.com', 'como funciona el servicio de las citas virtuales'),
(3, 'Soy Profesional', 'manuelballesteros9611@hotmail.com', 'Soy médico, que costo tiene el aplicativo mensual?'),
(4, 'Soy Paciente', 'fernandoarenas@hotmail.com', 'No puedo cancelar una cita'),
(5, 'Soy Profesional', 'jp@gmail.com', 'Como funciona telemedicina, y cuanto es su valor. Gracias'),
(6, 'Soy Profesional', 'camilo@gmail.com', 'precio telemedicina');

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
(4, 'Dr. Segry JiMacovich', 'segry@gmail.com', 'Vitiligo', 'UNAB', 'SDF #342 423', 6, 'doctor.jpg', '+876 211 5462', '1', '1,2,3', 1),
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

--
-- Volcado de datos para la tabla `doctor_form`
--

INSERT INTO `doctor_form` (`id`, `title`, `intro_text`, `active`) VALUES
(1, 'Prueba Editar', 'Texto Editar', NULL);

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
  `doctor_id` int(11) DEFAULT NULL,
  `services_id` int(11) DEFAULT NULL,
  `price1` float DEFAULT 0,
  `price2` float DEFAULT 0 COMMENT 'face to face',
  `price3` float DEFAULT 0 COMMENT 'telemedicine',
  `active` int(11) DEFAULT 0 COMMENT 'other'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `doctor_services`
--

INSERT INTO `doctor_services` (`id`, `doctor_id`, `services_id`, `price1`, `price2`, `price3`, `active`) VALUES
(1, 4, 2, 500, 400, 80, 0),
(2, 1, 3, 100000, 60000, 40000, 0),
(3, 3, 3, 50, 60, 80, 0),
(5, 2, 4, 40, 60, 1, 0),
(9, 3, 3, 1, 2, 3, 0),
(12, 25, 3, 1, 2, 3, 0),
(13, 25, 2, 5, 8, 50, 0),
(14, 25, 6, 1, 2, 3, 0),
(15, 25, 2, 10, 20, 30, 0),
(16, 39, 3, 70, 80, 90, 0),
(17, 55, 3, 100, 200, 300, 0);

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
(3, 'Prueba 5', NULL),
(4, 'asda', NULL);

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
  `id` bigint(20) NOT NULL,
  `item` varchar(100) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `doctor_form_id` bigint(20) DEFAULT NULL,
  `contact_form_id` bigint(20) DEFAULT NULL,
  `active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `form_items`
--

INSERT INTO `form_items` (`id`, `item`, `type`, `doctor_form_id`, `contact_form_id`, `active`) VALUES
(1, 'Texto', 1, NULL, 1, 1),
(2, 'Numero', 2, NULL, 1, 1);

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
(1, 'Salud Total', NULL),
(3, 'Coomeva', NULL),
(4, 'Sura', NULL);

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
(1, 1, '2020-07-24', 'A', 2),
(2, 1, '2020-07-24', 'colombia', 2),
(3, 1, '2020-07-24', 'B', 2),
(4, 1, '2020-07-24', 'EWE', 2),
(5, 1, '2020-07-24', 'w', 2),
(6, 1, '2020-07-24', 'wrw', 2),
(7, 1, '2020-07-24', 'TY', 2),
(8, 1, '2020-07-24', 'HOLA', 2),
(9, 5, '2020-07-29', 'Excelente servicio', 3);

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

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('emballesteros@hotmail.com', '$2y$10$JHzJY6btlmaMAVqgRmt8muU1S8JfstGgw2dafpkEYe2lHd0djazXy', '2020-07-24 20:19:22');

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
(3, 'SERVICIOSS'),
(4, 'SEGURO'),
(5, 'SINTOMAS'),
(10, 'EDITAR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `cel`, `city`, `image`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Manuel Ballesteros', '', '', NULL, 'emballesteros@gmail.com', NULL, '$2y$10$sxnhJIPgCwbD1wGULf3sZuLuJ92.KSZC4QX7a4wufvo7Pc7vAjdDe', 0, 'ne4z4NJWoHViFoWJ5lPCXseOci8EjCeFWHHcTVROH6KSkhD4AzLGqKlJ09vN', '2020-07-17 03:38:38', '2020-07-17 03:38:38'),
(2, 'Manuel', '', '', NULL, 'emballesteros@hotmail.com', NULL, 'daniela12', 0, '	\r\ndaniela12', '2020-07-17 10:45:16', '2020-07-24 20:16:10'),
(3, 'Beto', '', '', NULL, 'beto@gmail.com', NULL, '$2y$10$zZtDMZ1bxP5ROfGkq/vd0OAvv/Mdj90odW75kaxaY1GVX4/.eLNWG', 0, NULL, '2020-07-17 19:18:06', '2020-07-17 19:18:06'),
(4, 'Fernando Arenas', '', '', NULL, 'fernandoarenas@hotmail.com', NULL, 'daniela12', 0, 'Hte2WDo4APGryg7bt6RHy5uxX66F6efeqqqXUYHCUsbixT5KuForVxWiyBwb', '2020-07-18 21:46:57', '2020-07-24 02:36:13'),
(5, 'Byronn', '3164139207', 'Giron', NULL, 'manuelballesteros9611@hotmail.com', NULL, '$2y$10$Rg9qsWjsZ67TKGdsuhiGw.jHIUx/cIMHcOZYy1NWW8bE/LoPLAy4S', 2, '0SWDgLyfv9zybghiq2SXhThzUwyQIhK7SKjRXZFT3gYOuVKKRMTFmJofHp0i', '2020-07-25 02:45:10', '2020-07-29 20:07:45'),
(6, 'Manuel v3', '', '', NULL, 'm@gmail.com', NULL, '$2y$10$Ynj2X2c3zXkckF/c9.k.ge59/SHCMx9KqUetT3P4s/Re.ACsUi/JK', 1, 'O4zShRGkHTohtMMItzqXjnHlNXd8iRkaPzgyxScYi5L2misy2cVRLkQ0vgbL', '2020-07-25 20:17:54', '2020-07-25 20:17:54'),
(7, 'Carlos', '', '', NULL, 'carlos@gmail.com', NULL, '$2y$10$.8uTWQ3BKaA8nQveCs30Ouh34Oxrk0TOyuVq2r44g6lmFShU1yo6y', NULL, 'DFIEXzUN2zMMmtW5xCus2AGanh99CI341QO1ocbpTrHEUqy9Nf8KaAy2y3La', '2020-07-25 22:44:51', '2020-07-25 22:44:51'),
(8, 'Paciente', '', '', NULL, 'paciente@gmail.com', NULL, '$2y$10$HKWkuDCxJlcef2bpWvc7EO3l6s3bFvJsoPDLg3x2ztM8ygDhG6f5O', NULL, 'fp9E1jdZqjA8XDxevHtpfvp4R1eEMDwraUTMPT3aF0rbySoPSWUzH76YPbPI', '2020-07-25 22:46:48', '2020-07-25 22:46:48'),
(9, 'paciente2', '', '', NULL, 'p@gmail.com', NULL, '$2y$10$.Cvw9mRFDxnChw/NUeUy0exJRy3/hMFJocoUyBoWN0AhREvLQ83Xe', 2, 'mdCERUPx7bqNoaIHLxMAmmPhgzZ4tdcPqAIrsTSmEdn6a12IoMw22ncgijc1', '2020-07-25 22:48:19', '2020-07-25 22:48:19'),
(10, 'paciente3', '', '', NULL, 'p3@gmail.com', NULL, '$2y$10$xlDvIHU2eMmYNmiGYKFBZeovQgpzoI1HT2ecy4DUsrguaphm4tpjq', 2, NULL, '2020-07-25 22:55:01', '2020-07-25 22:55:01'),
(11, 'medico1', '', '', NULL, 'm1@gmail.com', NULL, '$2y$10$AKtWmXint56ypPuQxVd6UOMg3M1Vxck/TkAncLWn4eNMkS664Mxgu', 2, NULL, '2020-07-27 19:13:11', '2020-07-27 19:13:11'),
(12, 'medico2', '', '', NULL, 'm2@gmail.com', NULL, '$2y$10$jCIUkJFCcu5tT/AGs92X4ehIfrvGTIwD/XFzVZZT280SZvIjO/Gsa', 2, NULL, '2020-07-27 19:26:04', '2020-07-27 19:26:04'),
(13, 'medico3', '', '', NULL, 'm3@gmail.com', NULL, '$2y$10$O3g7kFOOaCGlmPDYK3g27ujiN7zH2YSDSMJ42Vck0sRr6LxuGuLva', 2, NULL, '2020-07-27 19:29:38', '2020-07-27 19:29:38'),
(14, 'medico4', '', '', NULL, 'm4@gmail.com', NULL, '$2y$10$sXwmTJn67Ne30wXB5y0eb.iu1ZWnuv7IzJ0A1nGElj/HD4D3x5SYS', 2, NULL, '2020-07-27 19:31:39', '2020-07-27 19:31:39'),
(15, 'm5', '', '', NULL, 'm5@gmail.com', NULL, '$2y$10$ohTt7XftfDv47KB3tAEyUOsNLrVzEUmtfr5.oo7d..uhkcviIM2X2', 2, NULL, '2020-07-27 19:34:44', '2020-07-27 19:34:44'),
(18, 'm6', '', '', NULL, 'm6@gmail.com', NULL, '$2y$10$Z38MwIM7biCnGckxAiuzLO9gzDYH3gIVl6xSUSlSdyjOe/fnIpv7a', 2, NULL, '2020-07-27 20:06:25', '2020-07-27 20:06:25'),
(19, 'm7', '', '', NULL, 'm7@gmail.com', NULL, '$2y$10$5lDouPRAilYMA2d6CLuGTObjqkzl4OAUzSXtVL98wqGSakdhZjrwi', 2, NULL, '2020-07-27 20:08:12', '2020-07-27 20:08:12'),
(20, 'medicof', '', '', NULL, 'mf@gmail.com', NULL, '$2y$10$OeR/1sIRtmSar2d8CyTtwOIKLcdvQxMjMeUCx6saHWMPjj16/ilYO', 2, NULL, '2020-07-27 20:09:16', '2020-07-27 20:09:16'),
(21, 'medicofinal', '', '', NULL, 'mff@gmail.com', NULL, '$2y$10$pUPwYlx/9wamr28ydq2.yele3kDTfZRxA4a2lPk5FPumH0doIEfbi', 3, NULL, '2020-07-27 20:10:07', '2020-07-27 20:10:07'),
(22, 'medic', '', '', NULL, 'medic@gmail.com', NULL, '$2y$10$8ATfSIvQp0yYE3XxnLJsT.vJyG.J9jRaHpqAqbzkAp.aTcCTqU7nC', 3, '0IoasRdhCJfaymTE61ZO1mIzGrxE06UhRl3laT6MaH8kNUwsLlUH6dCZbfMZ', '2020-07-27 20:25:34', '2020-07-27 20:25:34'),
(23, 'medicoPP', '', '', NULL, 'medicop@gmail.com', NULL, '$2y$10$YGGkpz2uAkPT/9L4ADLNsOVHUBAul8KTm2OSOyPMOtj8iBYg/jwGW', 2, 'esJCqhzf2R5PlbcT2JdIfD1SgzJxJoBZX0nPdzCVtc1ALWFggzrQp28w3Psn', '2020-07-27 20:49:24', '2020-07-27 22:02:45'),
(24, 'medico 10', '', '', NULL, 'm10@gmail.com', NULL, '$2y$10$i5xfsw2Z3K1ZJkAthXgWK.hx45YnOImx5yaMytDEJ74ucN8UiEy0C', 3, NULL, '2020-07-27 21:13:57', '2020-07-27 22:07:15'),
(25, 'Medico Byron', '', '', NULL, 'medicobyron@gmail.com', NULL, '$2y$10$jpwmm7BI0jYmnknFGUNsPOnlNDDdj3NoS5zxMCAX3wPDE5fMzug2C', 3, 'Z4W5WslZB4RyNVdq36D5egH2gV0l9Wiew6THpyPYp8uEnLlDT1Ct0eb7rISc', '2020-07-28 00:19:55', '2020-07-28 03:13:02'),
(26, 'Medico Prueba2', '', '', NULL, 'medicoprueba2@gmail.com', NULL, '$2y$10$eMS/LsKU83aFsNkZAY2EM.n8IGDZ9DCfllhSpRCcDcICObO/7US/W', 3, NULL, '2020-07-28 01:30:22', '2020-07-28 01:30:22'),
(27, 'medico60', '', '', NULL, 'medico60@gmail.com', NULL, '$2y$10$r8tUvSTCVDHqy2rKVlh7COkPevJ18Qmd1lYBZmQnhFdhdjPRZ9zje', 3, NULL, '2020-07-28 03:11:10', '2020-07-28 03:11:10'),
(28, 'paciente byron', '', '', NULL, 'pacienteb@gmail.com', NULL, '$2y$10$80UUyunG/VHHiGD6lFzatOkwCCE7hjsQ0Bce4SV1mBTPXCptA8Njq', 2, NULL, '2020-07-28 03:26:19', '2020-07-28 03:26:19'),
(29, 'probando', '', '', NULL, 'probando@gmail.com', NULL, '$2y$10$N5dnlVOL2G6KG7rab7MJTeyTqhfYlh8TFWL5oFyMzbpVIVlUFGcDW', 2, NULL, '2020-07-28 20:55:58', '2020-07-28 20:55:58'),
(30, 'prueba2', '', '', NULL, 'prueba2@gmail.com', NULL, '$2y$10$JEdFT1va.HqTQqt5rfKS1eyUErwxYm2qTStDx2R07CKfUQSWWTvPi', 2, 'jqVBHzEW9NVJhEhgHvEN3iG5LTVmuDlVtGtox0TCbEMIvj71HgP0L1aT8a5F', '2020-07-28 20:58:00', '2020-07-28 20:58:00'),
(31, 'Nuevos pacientes', '', '', NULL, 'nuevosp@gmail.com', NULL, '$2y$10$wqGrIvfdnDzrjiOxOA0B3.3OVp/EcyEAHJAlnKSpE4QVLX77pM4hy', 2, 'kHK29H7l72WNgzx9TWAcAvMEvxBd2ANP94pOVf88cKjiaq5T9tg2vjrFL2F7', '2020-07-28 21:29:07', '2020-07-28 21:29:07'),
(32, 'N', NULL, NULL, NULL, 'n@gmail.com', NULL, '$2y$10$DZ3wkbj09cnTwMIK0NMyueObuCs.Le8pOLGszORRAQ3uTQ1lB8QBm', 2, '4lRRrkfMOE0kwLIyXBbSlBFQa39Gk8LijM62k8Fib2sIR4CUJ75pURD4Wct7', '2020-07-28 21:31:36', '2020-07-28 21:31:36'),
(33, 'Juan Perez Rodriguez', NULL, NULL, NULL, 'j@gmail.com', NULL, '$2y$10$dR/X17Mza7sCmW54fWF1L.8qPFDwQhXRlIMv2YR8talJGKPi8P1aq', 2, 'YZniOxvi82WKto7InmcYWgJIh3yPoIXh55G4noPwHQgDuQdTBOJQMCLtQpUO', '2020-07-28 21:34:47', '2020-07-28 21:34:47'),
(34, 'M', NULL, NULL, NULL, 'me@gmail.com', NULL, '$2y$10$1QRu8uVzb5ktkG85gKcRSeq.xrOVrcgCDj4M9cFV.3MU446U0sK5q', 2, 'BVgs9AygvxvXNvSgmRbVeJbTY6OL0Q0oRUomW1KK0ry2kHM3I9tsn8wFwnLF', '2020-07-28 21:37:30', '2020-07-28 21:37:30'),
(35, 'f', NULL, NULL, NULL, 'f@gmail.com', NULL, '$2y$10$pvLnEWRwTj971NaHNpAsIOdUonFxCfxmVz3mQgMKD0JfzJkDj5.RC', 2, 'kX7TCgkQPQ9qYrfP1DqRI1kOvHVNYpDI306ZIIUuif7ONWfvzKdIoiJTeYTJ', '2020-07-28 21:50:26', '2020-07-28 21:50:26'),
(36, 'q', NULL, NULL, NULL, 'q@gmail.com', NULL, '$2y$10$1/CV1CNQN1d4oTl6iL0epOKfh1IgdYC/8RovSf/aBlJAFlQ0.Zdlu', 2, 'odtSOJKcUsaMEoewtR8rYLQsjMtYgBLO3tx8345vqil781xSZMGlNjEu9W8z', '2020-07-28 21:52:08', '2020-07-28 21:52:08'),
(37, 'T', NULL, NULL, NULL, 't@gmail.com', NULL, '$2y$10$HytwI35CQEkT7WMr01iLneMQN762jkwVqIbfznBrg/ZAr0lmYCsK.', 2, 'w3Zo1GmKFACzEpRjq2Y04rWNwZcg4T9k3TVfxkMiNAzGDKoV0BhHfle94ZnF', '2020-07-28 22:01:55', '2020-07-28 22:01:55'),
(38, 'h', '3164139207', 'Floridablanca', NULL, 'h@gmail.com', NULL, '$2y$10$Wfj2I3AERz1ixaAbVhbqWegIeiGDePVySUhWHTi/hRB2vuOEOQ2u2', 2, 'herCAYOkrr72jgYSC0UqCUm8iqoOajHtWNjbzUN5cCKaUd0gyGpybaxJzSMO', '2020-07-28 22:03:46', '2020-07-28 22:03:46'),
(39, 'Nuevo Medico Pruebas', '3118941527', 'Bogotá', NULL, 'nme@gmail.com', NULL, '$2y$10$VDQG302hjM0fcuKPRpxXQO7YxIPwfyjrn3iYUlzGWl3Ywpk25Gv8O', 3, 'h3nQVUvSxDUgt0oGveQ2V4HLvkKI0v4w0kOH2I0oF3etrBRM34awAJWVZpqK', '2020-07-28 22:07:19', '2020-07-29 00:35:55'),
(40, 'medico add admin', NULL, NULL, NULL, 'md@gmail.com', NULL, '$2y$10$Lambm9n26CLx2E8cswFuFOgp6rUW1JJ1VvKq7ekItz4en/YrDwVKG', 3, NULL, '2020-07-29 00:40:18', '2020-07-29 00:40:18'),
(41, 'medico add desde admin', '3042228567', 'Floridablanca', NULL, 'em1@gmail.com', NULL, '$2y$10$A8VUKkyRHGwxzAqhvMvPIu9vgTXct9L4IENsGDYWb1l6YEHRAp5oG', 3, NULL, '2020-07-29 00:42:29', '2020-07-29 00:42:29'),
(42, 'medico agregado desde admin', '311894127', 'Bogota', NULL, 'mm1@gmail.com', NULL, '$2y$10$j6OjzzrLrzsAPYq3oroBTeAGoN8s4QzpAh7/yHuCeVvZ4AQJ5.mF6', 3, NULL, '2020-07-29 00:45:32', '2020-07-29 00:45:32'),
(43, 'foto', '3164139207', 'Bogotá', 'avatar.jpg', 'foto@gmail.com', NULL, '$2y$10$29N.E3RIOWM72ZUEkoimX.lSSiVQIRo37PrGpCkOpx9gf4ELNnlCK', 2, 'dX8AtI4ELyXKlqPhWiObMpLAOeZwcd8xA7wGQV9XeK78lBh4GnHslvNQJuTE', '2020-07-29 01:54:33', '2020-07-29 01:54:33'),
(44, 'perfil con foto', '3164139207', 'Bogota', 'avatar.jpg', 'perfilconfoto@gmail.com', NULL, '$2y$10$7842GxzjePsrQW0AROAVLO8NUrZXX/Bj1HOMKSIeHtksmwVFpMe8G', 2, 'm2jy89bFey3hVlVjUXSKF7FB7LJVx0xmheBS6bgbEXbwdgKWCHfWro918OSH', '2020-07-29 02:32:29', '2020-07-29 02:32:29'),
(45, 'perfil foto', '3164139207', 'Floridablanca', 'avatar.jpg', 'ff@gmail.com', NULL, '$2y$10$ydYRpIM.fkziWwhj8fWIROKghVsG0YJwVKF8.SKmlk3mf3RKfWBI2', 2, 'EXm7xXLXFjS35qbrJ4kX9c2jsxvoEqmMFT6SJowb1QGJrEKgwRfAq7yT1V2P', '2020-07-29 02:35:41', '2020-07-29 02:35:41'),
(46, 'foto1', '3164139207', 'Bogotá', 'avatar.jpg', 'foto1@gmail.com', NULL, '$2y$10$Zg9qi1yob3m3Ttu5RdJfSeyAWq7ACCB2zwRKVKvfzBXPqbHHgj2ze', 2, '1Pg0QPD7MnMhasxNvemIALhBLOLfQfaizX23qWxh5agdhSOPorM3QdzlEtoo', '2020-07-29 03:27:32', '2020-07-29 03:27:32'),
(47, 'foto2', '3164139207', 'Bogotá', 'doctor.jpg', 'foto2@gmail.com', NULL, '$2y$10$V3BfBt6IXjdcDr2SBJLWr.2tZVmjW9Y3xRR5BR0iJ8IQxxonU2ud6', 2, 'nBHb14bEIuKGDb6LBsp4FpszbSlXfEugvUFcLTYv3NVE89h02YFqRTA8hYEF', '2020-07-29 03:30:15', '2020-07-29 03:30:15'),
(48, 'foto3', '3164139207', 'Floridablanca', 'avatar.jpg', 'foto3@gmail.com', NULL, '$2y$10$HpTMBJL0tE3lVYsdV38p.eOMAj46YrVly4.eW3fGPeYiptUmKdu7K', 2, 'wI6ZHnk1NdMfktdTYU0NqPqeMzDX3mPTeyc5je8KoIOcdSo1AbjsSBk5oBXk', '2020-07-29 03:38:20', '2020-07-29 03:38:20'),
(49, 'foto4', '3164139207', 'Bogota', 'avatar.jpg', 'foto4@gmail.com', NULL, '$2y$10$v/.RgcA/mEggIzMQ1viqge7Y3OeAR9kUIxyGzbh0QVoqqCrbQpX6e', 2, NULL, '2020-07-29 04:03:14', '2020-07-29 04:03:14'),
(50, 'Manuel Ballesteros', '311894127', 'Bogota', 'elon.jpg', 'em@gmail.com', NULL, '$2y$10$oG.cXD6UV5/Ar0lLlNsyhOSVDKEh6i6XEYL7fZ87mtZoQPZFbcn2m', 2, 'KTdVt7mxgUT2YdUdSWZ2JWPAl0RwUzNe9bzXbN0mGCiV22KCROeS128k6gip', '2020-07-30 02:36:26', '2020-07-30 18:46:46'),
(51, 'beto1', '311894127', 'Bogota', '', 'beto1@gmail.com', NULL, '$2y$10$xk74fvQ49Qdv.MrkPmW2P.hVz9hKu00YF.7kxtSo5Cm3sp.Oi5Jre', 2, 'B8HPECT0bIWfVdcDdpFGl5TUATh26oDeXiVt22ccQBt1e2rj4C1gmyj6mvUU', '2020-07-30 20:11:19', '2020-07-30 20:11:19'),
(52, 'beto2', '311894127', 'Giron', NULL, 'beto2@gmail.com', NULL, '$2y$10$l1XRWUY5Cgqy1RHh7/XrIuRC3pRZuTQZ/GL5vkL3SzeRbPM4Gvt1i', 2, 'uHU5924ozZ6072Sq2kVa2JD5J8vhe06EBVAIGLouvH3tFucsTErW9vWWJT7W', '2020-07-30 20:13:42', '2020-07-30 20:13:42'),
(53, 'beto3', '311894127', 'Bogota', '', 'beto3@gmail.com', NULL, '$2y$10$0znBjpNpCVS85xK30zwuL.23gnQR/NIFH2qZqD0wpiKbGq6WvhS4W', 2, 'YfRuB19KeR2tZguJCMy70Ecr7z1eFQxonxcoawRkPkRYgPxwlamd8uB8sdOx', '2020-07-30 20:22:00', '2020-07-30 20:22:00'),
(54, 'beto4', '311894127', 'Bogota', NULL, 'beto4@gmail.com', NULL, '$2y$10$7uTUDqUjVLtVB3roiGs2jeZqAmTrHDdMRQMhpMroF2TdUThx0ftL2', 2, 'yKc6WckBUFWanBlDmwkmzKbcApYLk79RsWtblOLylRdxL16n1pKtoHvAZBow', '2020-07-30 20:22:48', '2020-07-30 20:22:48'),
(55, 'beto5', '311894127', 'Bogota', 'elon.jpg', 'beto5@gmail.com', NULL, '$2y$10$k98V7yGtU.jUy5WkundkOeGdurWQnjCCPiy1SfrOnlrq0RDGv0WZm', 3, 'VJiLo4NUQpSieza9YTG1ggI4fTuJZO5ih3yRtfg8EGk566jNfFdpK0MlUgXc', '2020-07-30 20:25:37', '2020-07-30 20:29:42'),
(56, 'beto10', '3164139207', 'Bogota', 'elon.jpg', 'beto10@gmail.com', NULL, '$2y$10$fTwpVvt3yHB4GqXlcjE84.G5RM0XVd8dzXepM7.PH/53AnU/vrQne', 2, 'utQOALjt56Pfsxhy5KxPSTkZ72qFOFyUtF6IDZSfpGohfSW17j1juwb4sFW7', '2020-07-30 21:53:09', '2020-07-30 21:53:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint(20) NOT NULL,
  `role_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user_roles`
--

INSERT INTO `user_roles` (`id`, `role_name`) VALUES
(1, 'admin'),
(2, 'patient'),
(3, 'professional');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `patient_id` (`patient_id`);

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
-- Indices de la tabla `contact_index`
--
ALTER TABLE `contact_index`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_id` (`services_id`);

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
-- Indices de la tabla `form_items`
--
ALTER TABLE `form_items`
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
-- Indices de la tabla `user_roles`
--
ALTER TABLE `user_roles`
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
-- AUTO_INCREMENT de la tabla `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `contact_index`
--
ALTER TABLE `contact_index`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `doctor_schedule`
--
ALTER TABLE `doctor_schedule`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `doctor_services`
--
ALTER TABLE `doctor_services`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `doctor_tags`
--
ALTER TABLE `doctor_tags`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `doctor_type`
--
ALTER TABLE `doctor_type`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `formation`
--
ALTER TABLE `formation`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `form_items`
--
ALTER TABLE `form_items`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `doctor_services`
--
ALTER TABLE `doctor_services`
  ADD CONSTRAINT `doctor_services_ibfk_2` FOREIGN KEY (`services_id`) REFERENCES `services` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `opinions`
--
ALTER TABLE `opinions`
  ADD CONSTRAINT `opinions_ibfk_1` FOREIGN KEY (`doctors_id`) REFERENCES `doctors` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
