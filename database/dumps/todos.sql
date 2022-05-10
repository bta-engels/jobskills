-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 10. Mai 2022 um 17:41
-- Server-Version: 10.4.21-MariaDB
-- PHP-Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `phpkurs`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `todos`
--

DROP TABLE IF EXISTS `todos`;
CREATE TABLE `todos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `done` tinyint(1) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `todos`
--

INSERT IGNORE INTO `todos` (`title`, `done`, `created_at`, `updated_at`) VALUES
('Zähneputzenn', 0, '2020-06-03 08:11:16', '2020-10-23 15:04:46'),
('KNEIPE. cozy athmosphere, cheap beer, good ', 0, '2020-06-05 13:33:42', '2020-10-23 15:06:00'),
('Schlafen gehen und wieder aufstehen', 1, '2020-10-22 13:06:32', '2020-10-23 15:05:51');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `todos`
--
ALTER TABLE `todos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
