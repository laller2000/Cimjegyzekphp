-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Aug 26. 16:45
-- Kiszolgáló verziója: 10.4.20-MariaDB
-- PHP verzió: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `cimjegyadatbazis`
--
CREATE DATABASE IF NOT EXISTS `cimjegyadatbazis` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `cimjegyadatbazis`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `cimzettek`
--

CREATE TABLE IF NOT EXISTS `cimzettek` (
  `Cimzettid` int(11) NOT NULL AUTO_INCREMENT,
  `Nev` varchar(250) COLLATE utf8_hungarian_ci NOT NULL,
  `emailcim` varchar(250) COLLATE utf8_hungarian_ci NOT NULL,
  `mobiltelefonszam` int(250) NOT NULL,
  `felvitelidopontja` datetime NOT NULL DEFAULT current_timestamp(),
  `kategorianeve` varchar(250) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`Cimzettid`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `cimzettek`
--

INSERT INTO `cimzettek` (`Cimzettid`, `Nev`, `emailcim`, `mobiltelefonszam`, `felvitelidopontja`, `kategorianeve`) VALUES
(4, 'Nagy Ferenc', 'semm@gmail.com', 2054033, '2021-08-26 00:00:00', ''),
(9, 'Valaki', 'valaki@gmail.com', 6304400, '2021-08-26 00:00:00', ''),
(17, '', '', 0, '0000-00-00 00:00:00', ''),
(18, 'Toth Gabor', 'tothgabor@gmail.com', 2043055213, '2021-08-26 00:00:00', '');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kapcsolattabla`
--

CREATE TABLE IF NOT EXISTS `kapcsolattabla` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `CimID2` int(11) NOT NULL,
  `kategoriaID2` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `CimID2` (`CimID2`),
  KEY `kategoriaID2` (`kategoriaID2`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `kapcsolattabla`
--

INSERT INTO `kapcsolattabla` (`Id`, `CimID2`, `kategoriaID2`) VALUES
(5, 4, 10),
(6, 18, 6),
(7, 4, 7),
(8, 9, 9),
(9, 4, 11),
(10, 18, 6);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kategoriak`
--

CREATE TABLE IF NOT EXISTS `kategoriak` (
  `kategoriaID` int(11) NOT NULL AUTO_INCREMENT,
  `neve` varchar(250) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`kategoriaID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `kategoriak`
--

INSERT INTO `kategoriak` (`kategoriaID`, `neve`) VALUES
(6, 'Kozossegi'),
(7, 'Frissitesek'),
(8, 'Forumok'),
(9, 'Promociok'),
(10, 'Beerkezo'),
(11, 'Kuldott'),
(12, 'Besorolatlan'),
(13, 'Besorolatlan');

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `kapcsolattabla`
--
ALTER TABLE `kapcsolattabla`
  ADD CONSTRAINT `cimFK` FOREIGN KEY (`CimID2`) REFERENCES `cimzettek` (`CimzettId`),
  ADD CONSTRAINT `kateFK` FOREIGN KEY (`kategoriaID2`) REFERENCES `kategoriak` (`kategoriaID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
