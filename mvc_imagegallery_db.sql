-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3307
-- Létrehozás ideje: 2022. Jan 09. 15:32
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
  `userid` bigint(20) NOT NULL,
  `image` varchar(500) COLLATE utf8_hungarian_ci NOT NULL,
  `date` datetime NOT NULL,
  `views` int(11) NOT NULL,
  `url_address` varchar(60) COLLATE utf8_hungarian_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `images`
--

INSERT INTO `images` (`id`, `userid`, `image`, `date`, `views`, `url_address`, `title`) VALUES
(4, 1, 'uploads/1559485452_u4i3k8ioht.jpg', '2022-01-09 15:26:28', 0, 'eQbKVocOAWXM9HemjrSw52nOGbZO', 'underwater'),
(5, 1, 'uploads/zzzz-1-1107x800.jpg', '2022-01-09 15:30:30', 0, 'RQgxd2BOTktMLvhDm9OVomAloZ6WsJJy4tl', 'northern_lights'),
(6, 1, 'uploads/ArchonSealiner.jpg', '2022-01-09 15:31:31', 0, 'whK09SeRVJp', 'underwater_02');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `url_address` (`url_address`),
  ADD KEY `date` (`date`),
  ADD KEY `views` (`views`),
  ADD KEY `title` (`title`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
