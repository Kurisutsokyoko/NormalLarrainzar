-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-12-2022 a las 15:00:18
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u860963186_normal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `titulo` varchar(90) NOT NULL,
  `fecha` date NOT NULL,
  `imagen` longblob NOT NULL,
  `name` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `becas`
--

CREATE TABLE `becas` (
  `id` int(11) NOT NULL,
  `imagen` longblob NOT NULL,
  `files` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `becas`
--

INSERT INTO `becas` (`id`, `imagen`, `files`, `title`) VALUES
(2, 0x322e302e6a7067, '1 CONVOCATORIA  SUBES JÓVENES ESCRIBIENDO EL FUTURO  (1).pdf', 'Hola'),
(3, 0x31373030392e6a7067, '1 CONVOCATORIA  SUBES JÓVENES ESCRIBIENDO EL FUTURO  (1).pdf', 'Jovenes Escribiendo el futuro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario`
--

CREATE TABLE `calendario` (
  `id` int(11) NOT NULL,
  `imagen` longblob NOT NULL,
  `name` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `calendario`
--

INSERT INTO `calendario` (`id`, `imagen`, `name`) VALUES
(6, 0x31373030392e6a7067, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatoria`
--

CREATE TABLE `convocatoria` (
  `id` int(11) NOT NULL,
  `filee` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `convocatoria`
--

INSERT INTO `convocatoria` (`id`, `filee`) VALUES
(1, 'CONVOCATORIA_PARA_INGRESO_A_NORMALES_2022-2023.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id` int(11) NOT NULL,
  `semestre` int(11) NOT NULL,
  `grupo` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `horario` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id`, `semestre`, `grupo`, `horario`) VALUES
(9, 1, 'A', '1. DEFINICIÓN DE MATRIZ.pdf'),
(12, 1, 'B', '1 CONVOCATORIA  SUBES JÓVENES ESCRIBIENDO EL FUTURO  (1).pdf'),
(14, 2, 'A', '1 CONVOCATORIA  SUBES JÓVENES ESCRIBIENDO EL FUTURO  (1).pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--

CREATE TABLE `informacion` (
  `id` int(11) NOT NULL,
  `titulo` varchar(90) NOT NULL,
  `imagen` longblob NOT NULL,
  `cuerpo` longblob NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `informacion`
--

INSERT INTO `informacion` (`id`, `titulo`, `imagen`, `cuerpo`, `fecha`) VALUES
(10, 'Resultados de Examenes de Ingreso', 0x6b766e656b6d656c766d656c766d2e6a7067, 0x3c703e4c6973746120646520616c756d6e6f7320616365707461646f733a266e6273703b3c2f703e0d0a0d0a3c703e3c6120687265663d2268747470733a2f2f6d2e66616365626f6f6b2e636f6d2f73746f72792e7068703f73746f72795f666269643d7066626964304c787043517574325173593870546276774855654e48636d69783957713453505871385372436177517663556a6e4c4e4d55636839487479526a476f4a694d316c26616d703b69643d31313133323338383830353733393626616d703b73666e736e3d7363777370776122207461726765743d225f626c616e6b223e3c7370616e207374796c653d22636f6c6f723a23303030303030223e416365707461646f733c2f7370616e3e3c2f613e3c2f703e0d0a0d0a3c703e4c6973746120646520616c756d6e6f73204e4f20414345505441444f533a3c2f703e0d0a0d0a3c703e3c6120687265663d2268747470733a2f2f7777772e66616365626f6f6b2e636f6d2f3131313332333838383035373339362f706f7374732f70666269643032446671714c6b746a51614368653346795a3434504433614837443134503937505072316870506a52333165794a454235344357735668743546594343764661686c2f3f73666e736e3d7363777370776122207461726765743d225f626c616e6b223e3c7370616e207374796c653d22636f6c6f723a23303030303030223e4e6f20416365707461646f733c2f7370616e3e3c2f613e3c7370616e207374796c653d22636f6c6f723a23303030303030223e2e3c2f7370616e3e3c2f703e0d0a0d0a3c703e3c6120687265663d2268747470733a2f2f7777772e796f75747562652e636f6d2f77617463683f763d65786768726b46746f726322207461726765743d225f626c616e6b223e4f6a6f73204e6567726f733c2f613e3c2f703e0d0a0d0a3c703e266e6273703b3c2f703e0d0a0d0a3c703e266e6273703b3c2f703e0d0a0d0a3c703e266e6273703b3c2f703e0d0a, '2022-06-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `imagen` longblob NOT NULL,
  `name` varchar(90) NOT NULL,
  `titulo` varchar(90) NOT NULL,
  `cuerpo` longblob NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `imagen` longblob NOT NULL,
  `name` varchar(80) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `academic_formation` text NOT NULL,
  `academic_levels` text NOT NULL,
  `cargo` text NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `imagen`, `name`, `nombre`, `academic_formation`, `academic_levels`, `cargo`, `orden`) VALUES
(59, 0x4d6f622d50737963686f2d4949492d546572636572612d54656d706f726164612d5072696d657261732d496d70726573696f6e65732d48616e616d692d44616e676f2d31372e6a7067, '', 'ONELIA TORRES', 'bxfbxfbxbfxbgfbgfx', '', 'Director', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `imagen` longblob NOT NULL,
  `name` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `photos`
--

INSERT INTO `photos` (`id`, `imagen`, `name`) VALUES
(12, 0x706f72746164615f736f6e6f2d6269737175652d646f6c6c2d32382e6a7067, ''),
(13, 0x6b61677579612d73616d612d6c6f76652d69732d7761722d746572636572612d74656d706f726164612d706f72746164612e6a7067, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stand`
--

CREATE TABLE `stand` (
  `id` int(11) NOT NULL,
  `stand` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `levels` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `stand`
--

INSERT INTO `stand` (`id`, `stand`, `levels`) VALUES
(9, 'Departamento de Idiomas Extranjeras  y Lenguas Originarias', '4'),
(10, 'Áreas Sustantivas', '3'),
(12, 'Administracion', '6'),
(14, 'Personal de Apoyo', '7'),
(15, 'Catedratico', '5'),
(17, 'Subdirector', '2'),
(18, 'Hola', '2'),
(19, 'Director', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(90) NOT NULL,
  `contra` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user`, `contra`) VALUES
(1, 'directora', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(90) NOT NULL,
  `link` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `titulo`, `link`) VALUES
(7, 'Hola', 'https://www.youtube.com/embed/Oi1k6vEshJc');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `becas`
--
ALTER TABLE `becas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `calendario`
--
ALTER TABLE `calendario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `convocatoria`
--
ALTER TABLE `convocatoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `informacion`
--
ALTER TABLE `informacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `stand`
--
ALTER TABLE `stand`
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
-- AUTO_INCREMENT de la tabla `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `becas`
--
ALTER TABLE `becas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `calendario`
--
ALTER TABLE `calendario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `convocatoria`
--
ALTER TABLE `convocatoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `informacion`
--
ALTER TABLE `informacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `stand`
--
ALTER TABLE `stand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
