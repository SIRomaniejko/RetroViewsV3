-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2018 a las 21:19:12
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
(2, 'RPG'),
(4, 'Anime'),
(5, 'Deporte');

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

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`puntaje`, `contenido_comentario`, `id_comentario`, `id_review`, `user`) VALUES
(1, 'el que escribe despues de yo es un boludo', 21, 18, 'guest'),
(1, 'después* ', 22, 18, 'guest'),
(1, 'oh', 23, 18, 'guest'),
(5, 'JAJAJAJAja', 24, 18, 'Aquaman'),
(3, 'jaaaaaa', 25, 18, 'Aquaman'),
(1, 'aaa', 26, 18, 'Aquaman'),
(1, 'que juegazo, me acordaba cuando lo jugaba con lo jugaba con mi viejo', 27, 20, 'Aquaman');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `id_review` int(11) NOT NULL,
  `id_imagen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`direccion`, `id_review`, `id_imagen`) VALUES
('images/5bf701437588d.png', 18, 51),
('images/5bf7014399d79.jpeg', 18, 52),
('images/5bf70143a8d3c.jpeg', 18, 53),
('images/5bf701821d885.png', 19, 54),
('images/5bf701822f15e.jpeg', 19, 55),
('images/5bf7018256494.png', 19, 56),
('images/5bf702b7db004.jpeg', 20, 57),
('images/5bf702b810466.jpeg', 20, 58);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `review`
--

CREATE TABLE `review` (
  `id_review` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `titulo` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `contenido` text COLLATE utf8_spanish_ci NOT NULL,
  `resumen` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `review`
--

INSERT INTO `review` (`id_review`, `id_categoria`, `titulo`, `contenido`, `resumen`) VALUES
(18, 5, 'Rocket League', 'Let’s not waste energy exploring why soccer should replace its paper chain of squalid billionaires with cars, and accept it as fact. A fact which Rocket League proves with simple and immediate ease. <br><br>\r\nI’ve never played a game that needed a tutorial less. Association football, soccer, wendyball; whatever you want to call it, it’s that, but on wheels. Drive car at giant ball; hit ball into net; score points. Rocket League’s competitive core has existed for centuries, and this helps make a preposterous concept feel primal. This, in turn, is a laughable way of describing a game which would be called moto carball if it actually existed. <br><br>\r\nLike dry martinis and penises scribbled in an unattended notebooks, Rocket League is a celebration of simplicity. Driving is delicious. Cars ease around like butter in a heated pan, but always feel under your control. You accumulate boost by driving over markers on the arena floor and unleash it is a thunderous rush that fires you across, over and around the pitch. Because matches take place in smooth, enclosed spaces, you can drive up walls and across ceilings. Cars can also jump and dodge, both of which can be used defensively and offensively. The weight of the cars, as well as your ability to apply unruly boost to jumps, adds a pleasingly haphazard element; like athletic footballers leaping to header high balls, but with less shirt-pulling and zero chance of flattening a £2000 hairdo.<br><br>\r\nVehicles feel light and buzzy—somewhere between Micro Machines, and those swift, slidey remote controlled cars which only seem to appear on Christmas Day. This contrasts nicely with the fat, beefy bounce of the ball, which gormlessly invites impact like a punchable cousin. And that’s it. I feel almost guilty reducing a review to ‘ball’ and ‘car’, but there are only ever those two things in the field of play, and crucially, they both feel great. It’s helped by a crisp, intuitive camera. You can focus on the ball, effortlessly whizzing around with it always in view, or switch to the standard camera - very useful for rushing back to defend your goal, or smashing into other vehicles. There are no weapons, but certain markers fill your boost and let you obliterate other players. Mercifully, it’s the generous, instantly-respawning type of obliteration. Destruction is the only conspicuous deviation from clean business of driving around and scoring goals, but in most of the games I played it was a rarity—certainly never frequent enough to be irritating.<br><br>\r\nDestroying other vehicles is one of many actions which accumulates points; imagine Burnout, but with awards for skill not speed. You receive points for things like clearing the ball from your goal line, spectacular saves and overhead bicycle kicks—named so because the more literal ‘quadracycle wheel-nudge’ is a senseless stew of words. Giving everything a points value means it’s about more than scoring goals. The most valuable players I encountered were workmanlike wingers who selflessly chugged along the the flanks, crossing the ball for greedy goalhunters like me. It stops players from clustering in the same spots and reinforces the concept that Rocket League is a team game. <br><br>\r\nExcept, of course, when it’s not, such as when you’re duelling against a single opponent. Alternatively, you can set teams of four against each other, in matches which become so frantic that they’re less like footy, more like a lost, confused beach ball bashed between bumper cars. Playlists of duels, doubles, standard 3v3 matches and the appropriately named Chaos 4v4 mode are all available online, with ranked playlists limited to duels, doubles and 3v3. There’s a reason why online play is the first option on the menu: Rocket League is designed to be played with actual people, and this is absolutely where it thrives. My experience was marvellously robust. I rarely had to wait long for a game, and if players dropped out mid-session they were immediately replaced by AI bots. Best of all, it’s refreshingly simple to get back into another game, so very little time is spent lingering in lobbies. <br><br>\r\nIf playing online isn’t your thing, there are exhibition matches and full seasons you can solo. The length and difficulty can be altered, and while it doesn’t offer much in the way of depth—cars and football, remember?—I still found myself bonding with pretend teammates. Whether online or offline, playing games randomly unlocks new cars and upgrades. These range from simple things like fresh coats of paint and shiny wheels, to pointy hats for your wizardmobile. Upgrades are purely cosmetic, but volume, variety and the promise of driving around with bubbles frothing from your exhaust should be enough to keep you coming back. <br><br>\r\nThe offline modes do reveal the game’s minor inadequacies, however: team AI can be flaccid and unreliable, especially against tougher opponents, and the same simplicity which makes Rocket League immediately playable can cause things to get repetitive when played alone; a criticism that only becomes apparent precisely because it’s so damn addictive. It’s a simple thing done brilliantly well, kept interesting by the thrill of competition.', 'juegazo de fisicas donde autos vuelan y meten goles'),
(19, 4, 'Zombieland Saga', 'Sakura Minamoto es una chica de preparatoria que espera ser una idol, pero lo que no esperaba era tener que sobrevivir a un terrorífico apocalipsis zombi... o no. Cuando despierta se encuentra en la prefectura de Saga y un hombre muy escandaloso le indica que lleva bastante tiempo muerta, pero la ha resucitado como una zombi para formar... ¡un grupo de idols zombi junto a chicas legendarias de varias épocas!', 'A partir de la fecha de hoy hacemos reviews de animes'),
(20, 2, 'Fallout', 'The past several years haven\'t exactly been kind to role-playing game fans. Very few role-playing games have been released since 1993, and those that have made it to retail shelves have largely been unsuccessful at combining playability and originality with the complexity that role-playing game fans love. The release of Blizzard Entertainment\'s action/role-playing game hybrid Diablo in early 1997 only increased role-playing gamers\' anticipation for an equally playable game in a more elaborate, detailed world. After a four-year drought, the wait is over. Fallout is one of the best role-playing games to be released in several years and it succeeds in entertaining gamers by providing a fresh and compelling storyline, good graphics and sound, and attention to those little details that can transform a good game into a great one. <br><br>\r\nFallout is an unofficial sequel to 1987\'s Wasteland, one of the most popular role-playing games of all time. While the overwhelming majority of computer role-playing games are set in some pseudo-medieval, Tolkien/AD&D-inspired world of orcs and battleaxes, Fallout is set in the future, several years after an exchange of nuclear weapons has devastated most of the world. Inhabitants who survived did so largely by sheltering themselves in giant underground vaults. Your character\'s life has been spent entirely within one such vault. A broken chip for your vault\'s water recycler forces your character to leave the relative safety of the vault to search for a replacement chip aboveground in the wasteland, where you\'ll encounter struggling communities of survivors, Road Warrior-esque gangs, human mutants, and even stranger creatures. Hardly a typical setting for a role-playing game, but the originality of the setting is one of the strengths of Fallout. In Fallout, rather than trudging through yet another dreary dungeon, in search of ye olde magic artifact to expel demon horde #782, your character will explore the haunting remnants of our own civilization and attempt to unravel the mysterious forces at work in postapocalyptic Southern California. The old 90210 neighborhood has changed, gang violence is rampant, two-headed cows roam Rodeo, and the new fashion accessory is a rocket launcher. And if the guns of the locals don\'t get you, the radiation might. Brandon, Kelly, why are you glowing like that? <br> <br>\r\nFallout oozes style. Not content with extrapolating a plausible but unexciting hi-tech view of the future, Fallout\'s design team instead crafted a vision of the future that combines 1950s cold war American culture and early, primitive computer technology (complete with ugly green monochrome screens and an abundance of vacuum tubes), with advanced energy weapons and chemical compounds. Nuka-cola anyone? Special mention should be made of Fallout\'s classy introduction, which unfolds like a 1950s Public Service announcement but depicts a future that is disturbingly bleak and hostile. Little tributes to classic science fiction films and TV shows such as Dr. Who, Road Warrior and Blade Runner pop up all over the place. Fans of Charlton Heston\'s cheesy science fiction filmmaking days will enjoy the opportunity to yell out Charlie\'s best lines from Soylent Green.<br><br>\r\nNegotiations to allow Fallout to utilize Steve Jackson Games\' popular GURPS character system fell apart, but Interplay\'s replacement character creation system is detailed and thorough. Almost every time a computer game is released that purports to be a role-playing game, a seemingly inevitable onslaught of debate ensues over whether or not that game is, in fact, a role-playing game (as opposed to a member of some presumably inferior wanna-be genre). Fallout will likely avoid being the subject of such \"meaningful\" arguments, as the variety of characters that can be created and the truly different experiences that each type of character can have should satisfy even hard-core RPG players (and also make Fallout a very replayable game, which is fortunate since the main storyline can be completed relatively quickly).', 'Fallout is one of the best role-playing games to be released in several years.');

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
('admin', '$2y$10$xfG/hkFIlHVMgdmPjoK6veKsgcjUWfG6tVxHqZfkgHZguSdeP3hLC', 2),
('Aquaman', '$2y$10$W.MrsC0A4JZHXeNPTIQBfuNCSq8OBCRnzkJHLLAdXOlN9SOCLw4Nu', 1),
('dangan', '$2y$10$hyHAgfF2/j1Vr1IfyYMOwOgouQJ7QN9/vbht43P2OMuHebYc8.A3.', 1),
('guest', '$2y$10$oaLPiiFkmbkD8ra3iQVZ/eNtWSytWnhcxf8Mr/gbFGxikREYG6Dke', 1);

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
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `id_review` FOREIGN KEY (`id_review`) REFERENCES `review` (`id_review`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user` FOREIGN KEY (`user`) REFERENCES `usuario` (`user`) ON DELETE CASCADE ON UPDATE CASCADE;

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
