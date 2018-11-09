-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2018 a las 16:52:57
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `retro_views`
--
CREATE DATABASE IF NOT EXISTS `retro_views` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `retro_views`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'FPS'),
(2, 'JRPG'),
(3, 'Sandbox');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `puntaje` int(5) NOT NULL,
  `contenido_comentario` mediumtext COLLATE utf8_spanish_ci NOT NULL,
  `id_comentario` int(11) NOT NULL,
  `id_review` int(11) NOT NULL,
  `user` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `path` text COLLATE utf8_spanish_ci NOT NULL,
  `id_review` int(11) NOT NULL,
  `id_imagen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `review`
--

CREATE TABLE `review` (
  `id_review` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `titulo` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `contenido` text COLLATE utf8_spanish_ci NOT NULL,
  `resumen` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `portada` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `review`
--

INSERT INTO `review` (`id_review`, `id_categoria`, `titulo`, `contenido`, `resumen`, `portada`) VALUES
(2, 1, 'Counter Strike: Global Offensive', 'Counter-Strike: Global Offensive (CS: GO) ampliará la jugabilidad de acción por equipos que fue pionera en su lanzamiento hace 12 años.<br>\r\nCS: GO incluirá nuevos mapas, personajes y armas y ofrecerá versiones actualizadas del contenido clásico de CS (de_dust2, etc.). Además, CS: GO introducirá nuevos modos de juego, matchmaking, marcadores y mucho más.<br>\r\n\"Counter-Strike cogió la industria de los videojuegos por sorpresa cuando, contra todo pronóstico, el MOD se convirtió en el juego de acción online para PC más jugado del mundo tras su lanzamiento en agosto de 1999\", dijo Doug Lombardi de Valve. \"En los últimos 12 años, ha continuado siendo uno de los juegos más jugados del mundo, el protagonista de los torneos de videojuegos competitivos y se han vendido más de 25 millones de copias por todo el mundo. CS: GO promete ampliar la aclamada jugabilidad de CS y ofrecerla a los jugadores de PC, así como a los de las consolas de última generación y Mac.\"', 'la ultima entrega de counter stike hasta el momento que expande el gameplay', 'https://mlstaticquic-a.akamaihd.net/counter-strike-global-offensive-cs-go-original-steam-xgamesz-D_NQ_NP_784486-MLU26572713582_122017-F.jpg'),
(3, 3, 'Minecraft', 'No other video game has unleashed my creativity like Minecraft. I\'ve spent countless hours chipping away at blocks, gathering the necessary materials to complete the next masterpiece that would otherwise only occupy my mind\'s eye. I\'ve also spent just as many hours exploring, spelunking and slashing my way through monsters with bravado. My character – my entire Minecraft world – constantly evolves into whatever I want it to be. I tell my own stories, I write my own destiny and I bring my fantasies to life one brick at a time.\r\n<br>\r\nMinecraft stands out not only for the way it inspires me creatively, but also because of its unique aesthetic. Look, I know the visuals look dated and a bit silly, but few games have visuals so endearing and charming. I know I\'m not the only one who feels that way either, or else Minecraft\'s graphics wouldn\'t be so iconic. Could you take a texture from Gears of War, Halo or Uncharted, put it on a shirt and have players identify it? I doubt it. The looks just work, giving the game a super unique appearance that\'s memorable, and brings up a bit of nostalgia in me for 8-bit era games.', 'juego de supervivencia y construccion conocido por todo el mundo', 'https://leonardtecoficial.com/wp-content/uploads/2018/04/minecraft-003.jpg'),
(4, 2, 'Tales of Berseria', '\"Why do you think that birds fly?\" This riddle is posed in the first hour of Tales of Berseria, the emotionally ragged semi-prequel to Tales of Zestiria that ripped my heart out again and again with its cautionary tale of a woman so bent on vengeance that every road she follows leads to perdition. By the time the credits rolled on this 45-hour long action RPG I still wasn\'t sure what the answer was, but I knew this: Berseria is the best Tales game I\'ve played, and my favorite to date. <br>\r\n\r\nBerseria\'s greatest strength lies in its ability to tell a different kind of story from those of its predecessors. Instead of the cheery, can-do spirit I\'ve come to expect from the series, Berseria fully explores the darkest parts of the human heart. There\'s no real sunny side to the anti-heroine Velvet Crowe, who drives the plot with her unquenchable thirst for bloody vengeance on the man who took everything from her. Nor is there much hope of redemption for the memorable company she keeps, which includes the enraged pirate Eizen, the mouthy and detached witch Magilou, and the fratricidal demon Rokurou. These characters reflect just how emotionally broken their world has become in the face of multiple calamities. Only the fragile Malak (spirit) Laphi and the earnest Exorcist Elenor keep this ragtag group anchored in hope and distinct from the actual villains. Even then, the ties that bind them threaten to come undone as their search for the truth behind the theo-political machinations of a tight group of elites collides with their need for personal vengeance.', 'un juegazo que trata como tema principal la razon contra los sentimientos', 'https://humblebundle.imgix.net/misc/files/hashed/1acde753c7e25284b03426598b3763d2b1967eb6.jpg?auto=compress,format&fit=crop&h=353&w=616&s=9a6121bacc1335da92298cc8d61c0952');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `user` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `nivel` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`user`, `pass`, `nivel`) VALUES
('admin', '$2y$10$xfG/hkFIlHVMgdmPjoK6veKsgcjUWfG6tVxHqZfkgHZguSdeP3hLC', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_review` (`id_review`),
  ADD KEY `user` (`user`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`),
  ADD KEY `imagenes_review` (`id_review`);

--
-- Indices de la tabla `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD UNIQUE KEY `user` (`user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `id_review` FOREIGN KEY (`id_review`) REFERENCES `review` (`id_review`),
  ADD CONSTRAINT `user` FOREIGN KEY (`user`) REFERENCES `usuario` (`user`);

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagenes_review` FOREIGN KEY (`id_review`) REFERENCES `review` (`id_review`);

--
-- Filtros para la tabla `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
