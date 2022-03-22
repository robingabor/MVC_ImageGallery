-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3307
-- Létrehozás ideje: 2022. Már 22. 19:40
-- Kiszolgáló verziója: 10.4.10-MariaDB
-- PHP verzió: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `mvc_imagegallery_db`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `images`
--

CREATE TABLE `images` (
  `id` bigint(20) NOT NULL,
  `user_url` varchar(60) COLLATE utf8_hungarian_ci NOT NULL,
  `image` varchar(500) COLLATE utf8_hungarian_ci NOT NULL,
  `date` datetime NOT NULL,
  `views` int(11) NOT NULL,
  `url_address` varchar(60) COLLATE utf8_hungarian_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `images`
--

INSERT INTO `images` (`id`, `user_url`, `image`, `date`, `views`, `url_address`, `title`) VALUES
(4, '1', 'uploads/1559485452_u4i3k8ioht.jpg', '2022-01-09 15:26:28', 2, 'eQbKVocOAWXM9HemjrSw52nOGbZO', 'underwater'),
(5, '1', 'uploads/zzzz-1-1107x800.jpg', '2022-01-09 15:30:30', 5, 'RQgxd2BOTktMLvhDm9OVomAloZ6WsJJy4tl', 'northern_lights'),
(6, '1', 'uploads/ArchonSealiner.jpg', '2022-01-09 15:31:31', 8, 'whK09SeRVJp', 'underwater_02');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `email` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_hungarian_ci NOT NULL,
  `date` datetime NOT NULL,
  `url_address` varchar(60) COLLATE utf8_hungarian_ci NOT NULL,
  `image` varchar(500) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `date`, `url_address`, `image`) VALUES
(2, 'test@test.hu', 'admin', '2022-03-15 21:17:03', '4yYKehBcmzuXkvVtby0NgdRvvZ8rvN', ''),
(3, 'test01@test.hu', '$2y$10$ntm7oebAIaHVMwUCXzOTQu9Y1ytHf6WtMLeWUCst4CodfXYy1mF4S', '2022-03-19 16:46:08', 'bjU4ie5nBpJzHjN1QIzrSnUEtkMgkfwvnQ3J1hzhMZ', ''),
(4, 'test02@test.hu', '$2y$10$A09ROYL5c11XmRrKsn.42umwZLGgYQIqWBFqReN2yXWwcFmrpfneC', '2022-03-19 17:12:44', 'W0kodJpUTtLFjPyp61GVI3nuzkVuz1UNrA4', '');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`user_url`),
  ADD KEY `url_address` (`url_address`),
  ADD KEY `date` (`date`),
  ADD KEY `views` (`views`),
  ADD KEY `title` (`title`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `date` (`date`),
  ADD KEY `url_address` (`url_address`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
