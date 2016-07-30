-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Време на генериране: 
-- Версия на сървъра: 5.5.34
-- Версия на PHP: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- БД: `db_hungry`
--

-- --------------------------------------------------------

--
-- Структура на таблица `gameplays`
--

CREATE TABLE IF NOT EXISTS `gameplays` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_player_one` int(11) NOT NULL DEFAULT '0',
  `id_player_two` int(11) NOT NULL DEFAULT '0',
  `letter` text COLLATE utf8_unicode_ci,
  `is_active` tinyint(4) NOT NULL DEFAULT '0',
  `game_sec_key` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Схема на данните от таблица `gameplays`
--

INSERT INTO `gameplays` (`id`, `id_player_one`, `id_player_two`, `letter`, `is_active`, `game_sec_key`) VALUES
(1, 50, 50, NULL, 1, 'BMTOxhNIPd89EP7IdpKC0U8Iajg90Am0'),
(2, 50, 48, NULL, 1, 'IOYv2gzGhIwxLOIE4ekXi5Fb7BmO2wKY'),
(3, 50, 48, NULL, 1, 'SiuJqrFuYTUczqMfHaSHKqg1FqyLNyhH'),
(4, 50, 48, NULL, 1, '1BRO0pmi8PtkHeJgX36c6XF02qjAN5PS'),
(5, 50, 48, NULL, 1, 'y6JIMKm9HXeXneB2XbayXrOej0HZlRk3'),
(6, 54, 51, NULL, 1, 'mcOZ4OB1yieqkXETYDXTqpFWVHTSD6qf');

-- --------------------------------------------------------

--
-- Структура на таблица `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sec_key` text COLLATE utf8_unicode_ci,
  `name` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Схема на данните от таблица `games`
--

INSERT INTO `games` (`id`, `sec_key`, `name`) VALUES
(1, '04Qr4Wjd9FrRLTGRzhivwlEtbNLBzuic', 'slavi104'),
(2, 'JHaOTEyPIoGNscPJitDZgjrkY1OjsxGP', 'johny'),
(3, 'swW8kyPNsEB6qYeuwKsEtcEsdFvtF15b', NULL),
(4, 'dcHNx4q5vRnWP3EQXdcbT7mnbD7DpGAQ', NULL),
(5, 'eAByIDaXnsCjZaynbpXXUbMMNszcicI9', NULL),
(6, 'V4o2MTUxUIHOA2tKTW6IeSV6QbcpX4g1', NULL),
(7, 'SBXzwYFwQeaHldhqAYjz7D7PeDtFhcQS', NULL),
(8, '6SDqMHbnoAuEhCV8WSolHTdDWtfPouQP', NULL),
(9, 'gsVLlxdD1HBWV79WDfspIksAAFqk8mZd', NULL),
(10, 'bF4CESNxfDJGzJvpLroN2HLRSdyanmQI', NULL),
(11, 'BMTOxhNIPd89EP7IdpKC0U8Iajg90Am0', NULL),
(12, 'IOYv2gzGhIwxLOIE4ekXi5Fb7BmO2wKY', NULL),
(13, 'SiuJqrFuYTUczqMfHaSHKqg1FqyLNyhH', NULL),
(14, '1BRO0pmi8PtkHeJgX36c6XF02qjAN5PS', NULL),
(15, 'y6JIMKm9HXeXneB2XbayXrOej0HZlRk3', NULL),
(16, 'mcOZ4OB1yieqkXETYDXTqpFWVHTSD6qf', NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` text COLLATE utf8_unicode_ci,
  `email` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `score` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=55 ;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `password`, `created_date`, `score`) VALUES
(14, 'JORO', '', 'fCryptography::password_hash#YKcKt8fVfv#1a50ab817c3ac54eda95c9aa9cb2d77c142e108a', '2014-03-09 11:51:34', 0),
(48, 'asd', 'asd', 'fCryptography::password_hash#d04ZVCl1ep#c71d0ef42233f7bd52043bf6d5dd934e96fb083c', '2014-03-13 18:58:23', 0),
(49, 'george', 'geroge@mail.bg', 'fCryptography::password_hash#R68qwBHwxr#823db22834905e8dffdfb9c43112650207adc45d', '2014-03-13 18:59:14', 0),
(50, 'mama', 'mama@mai.bg', 'fCryptography::password_hash#Ivm7vcWO0P#b125e28bf752a47763b3716cb3b49166e806b4ed', '2014-03-13 19:00:09', 0),
(51, 'slavi104', 'slavi104@gmail.com', 'fCryptography::password_hash#wBHVWVEgcQ#bb955fd9a31233a53f3333d4ed5429feed0d5427', '2014-03-13 19:26:29', 0),
(52, 'johny', 'johny@mail.bg', 'fCryptography::password_hash#IoDfgF3XXQ#ef7d97b7ed49ff4988bdf12c1043e2d4fe6799ff', '2014-03-13 19:27:09', 0),
(53, 'mama', 'mama@mama.bg', 'fCryptography::password_hash#TLJTAjdYsg#e43102a2628a8acd79c28fe7031f0c2fe2a9c3a1', '2014-03-13 19:58:20', 0),
(54, 'slavi104', 'slavi104@abv.bg', 'fCryptography::password_hash#aiABj2Tlv0#7516596d84fea2a54839dea8e472ac68be818730', '2014-03-13 20:13:45', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
