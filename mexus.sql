-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2019 a las 15:58:33
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
-- Base de datos: `mexus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_completo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `nombre_completo`, `password`, `usuario_activo`) VALUES
(16, 'carla@gmail.com', 'carla', '2c04bbaf47a50592900121bb1b05685b03331d6cdfd935a8828e1e798579049e5d920d8394324e823f082a8fa79132052631dd0232e252cc60b29accdcea18ed', 1),
(17, 'chrishuancabarreto@gmail.com', 'christian huanca barreto', '2c04bbaf47a50592900121bb1b05685b03331d6cdfd935a8828e1e798579049e5d920d8394324e823f082a8fa79132052631dd0232e252cc60b29accdcea18ed', 1),
(18, 'chrishuancabarreto@gmail.com', 'christian huanca barreto', '2c04bbaf47a50592900121bb1b05685b03331d6cdfd935a8828e1e798579049e5d920d8394324e823f082a8fa79132052631dd0232e252cc60b29accdcea18ed', 1),
(19, 'chrishuancabarreto@gmail.com', 'christian huanca barreto', '2c04bbaf47a50592900121bb1b05685b03331d6cdfd935a8828e1e798579049e5d920d8394324e823f082a8fa79132052631dd0232e252cc60b29accdcea18ed', 1),
(20, 'chrishuancabarreto@gmail.com', 'christian huanca barreto', '2c04bbaf47a50592900121bb1b05685b03331d6cdfd935a8828e1e798579049e5d920d8394324e823f082a8fa79132052631dd0232e252cc60b29accdcea18ed', 1),
(21, 'chrishuancabarreto@gmail.com', 'christian huanca barreto', '2c04bbaf47a50592900121bb1b05685b03331d6cdfd935a8828e1e798579049e5d920d8394324e823f082a8fa79132052631dd0232e252cc60b29accdcea18ed', 1),
(22, 'cami@cami.com', 'camila', '2c04bbaf47a50592900121bb1b05685b03331d6cdfd935a8828e1e798579049e5d920d8394324e823f082a8fa79132052631dd0232e252cc60b29accdcea18ed', 1),
(23, 'chrishuancabarreto@gmail.com', 'christian huanca barreto', '2c04bbaf47a50592900121bb1b05685b03331d6cdfd935a8828e1e798579049e5d920d8394324e823f082a8fa79132052631dd0232e252cc60b29accdcea18ed', 1),
(24, 'juanitamanzanita@gmail.com', 'juana', '2c04bbaf47a50592900121bb1b05685b03331d6cdfd935a8828e1e798579049e5d920d8394324e823f082a8fa79132052631dd0232e252cc60b29accdcea18ed', 1),
(25, 'chrishuancabarreto@gmail.com', 'christian huanca barreto', '2c04bbaf47a50592900121bb1b05685b03331d6cdfd935a8828e1e798579049e5d920d8394324e823f082a8fa79132052631dd0232e252cc60b29accdcea18ed', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
