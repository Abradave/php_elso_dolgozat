-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Jan 05. 11:57
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `php_elso_dolgozat`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tomegkozlekedesi_eszkozok`
--

CREATE TABLE `tomegkozlekedesi_eszkozok` (
  `id` int(11) NOT NULL,
  `jarmu` varchar(30) NOT NULL,
  `gyartasi_ev` year(4) NOT NULL,
  `kotottpalyas` tinyint(1) NOT NULL,
  `utas_kapacitas` int(11) NOT NULL,
  `gyartott_db` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `tomegkozlekedesi_eszkozok`
--

INSERT INTO `tomegkozlekedesi_eszkozok` (`id`, `jarmu`, `gyartasi_ev`, `kotottpalyas`, `utas_kapacitas`, `gyartott_db`) VALUES
(1, 'IKARUS C56.42 V2', '1998', 0, 76, 399),
(2, 'IKARUS C80', '1998', 0, 147, 103),
(3, 'MERCEDES Conecto', '2002', 0, 94, 636),
(4, 'Ev3 Metro', '1975', 1, 268, 42);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `tomegkozlekedesi_eszkozok`
--
ALTER TABLE `tomegkozlekedesi_eszkozok`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `tomegkozlekedesi_eszkozok`
--
ALTER TABLE `tomegkozlekedesi_eszkozok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
