-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2022 a las 20:08:41
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `informes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ans`
--

CREATE TABLE `ans` (
  `id` int(11) NOT NULL,
  `indicador` varchar(150) NOT NULL,
  `meta` varchar(150) NOT NULL,
  `cumplen` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `ans` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ans`
--

INSERT INTO `ans` (`id`, `indicador`, `meta`, `cumplen`, `total`, `ans`) VALUES
(1, 'Calidad y oportunidad en los reportes entregados', '<=2 Devoluciones', 2, 2, 100),
(2, 'Rendimiento de perfil contratado', '1 Act No Ejecutada', 1, 1, 100),
(3, 'Puntualidad del perfil contratado', '<=2 Retrasos', 2, 2, 100),
(4, 'Verificación del cumplimiento del perfil exigido', '1 actividad', 1, 1, 100),
(5, 'Rotación máxima', '2 rotaciones cada dos meses', 1, 1, 100),
(6, 'Tiempo de asignación de un nuevo perfil contratado en caso de rotación', '5 Días habiles', 5, 5, 100),
(7, 'Tiempo asignación de un perfil contratado', '25 Días habiles', 24, 24, 100),
(8, 'Atención Canal Telefónico y/o linea celular (C)', '>=97%', 620, 638, 97),
(9, 'Atención de canal © Chat en Linea con agente', '>=97%', 768, 826, 92),
(10, 'Atención de canal (C) email, web, canales de autogestión', '>=97%', 3128, 3670, 85),
(11, 'Resolución de tickets Nivel 1 (C)', '>=95%', 3791, 3855, 98),
(12, 'Cierre de Tickets (C)', '>=90%', 3067, 3129, 98),
(13, 'Escalamiento de tickets (C)', '>=95%', 2838, 2838, 100),
(14, 'Resolución de tickets usuarios VIP (C)', '>=97%', 54, 58, 93),
(15, 'Porcentaje de satisfacción en la calidad del servicio prestado a usuario final', '>=95%', 10, 10, 100),
(16, 'Tickets reabiertos (C)', '>=95%', 0, 0, 100),
(17, 'Documentación ticket resuelto (C)', '>=90%', 99, 100, 99),
(18, 'Entrega de informes de operación y gestión (C)', '100%', 1, 1, 100);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ans`
--
ALTER TABLE `ans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ans`
--
ALTER TABLE `ans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
