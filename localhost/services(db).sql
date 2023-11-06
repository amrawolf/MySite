-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Лис 06 2023 р., 15:47
-- Версія сервера: 10.3.22-MariaDB
-- Версія PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `services`
--

-- --------------------------------------------------------

--
-- Структура таблиці `animal`
--

CREATE TABLE `animal` (
  `service` varchar(200) NOT NULL,
  `price` int(4) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `animal`
--

INSERT INTO `animal` (`service`, `price`) VALUES
('СТРИЖКА КОТИКА БЕЗ КУПАННЯ', 600),
('КУПАННЯ КОТИКА', 200),
('МЕЙНКУН СТРИЖКА', 700),
('ВИЧІСУВАННЯ КОТИКА', 550),
('КОМПЛЕКСНИЙ ДОГОЛЯД ДЛЯ КРОЛИКА', 600);

-- --------------------------------------------------------

--
-- Структура таблиці `dogs`
--

CREATE TABLE `dogs` (
  `service` varchar(200) NOT NULL,
  `price` int(4) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `dogs`
--

INSERT INTO `dogs` (`service`, `price`) VALUES
('ЧИХУАХУА СТРИЖКА', 600),
('ТОЙ ТЕР\'ЄР', 550),
('МАЛЬТІПУ/ЙОРКІПУ', 750),
('МОПС', 600),
('ЙОРКШИРСЬКИЙ ТЕР\'ЄР/БІВЕР ЙОРК', 600),
('МАЛЬТІЙСЬКА БОЛОНКА', 650),
('ШИ-ТЦУ', 650),
('ПЕКІНЕС', 650),
('ПОМЕРАНСЬКИЙ ШПІЦ', 675),
('ТОЙ ПУДЕЛЬ/КАРЛИКОВИЙ ПУДЕЛЬ', 700),
('СПАНІЕЛЬ', 750),
('ВЕСТ ХАЙЛЕНД УАЙТ СТРИЖКА/ТРИМІНГ', 750),
('БІШОН ФРІЗЕ', 750),
('ПАПІЛЬЙОН', 625),
('ЦВЕРГШНАУЦЕР СТРИЖКА/ТРИМІНГ', 750),
('КОРГІ', 800),
('ІНШІ ПОРОДИ ДО 8 КГ', 600),
('ІНШІ ПОРОДИ 8-15 КГ', 750),
('ІНШІ ПОРОДИ ВІД 15 КГ', 900),
('ГІГІЄНІЧНИЙ ДОГЛЯД ДЛЯ ЦУЦИКІВ', 100);

-- --------------------------------------------------------

--
-- Структура таблиці `other`
--

CREATE TABLE `other` (
  `service` varchar(200) NOT NULL,
  `price` int(4) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `other`
--

INSERT INTO `other` (`service`, `price`) VALUES
('МАНІКЮР', 150),
('ВИЩИПУВАННЯ ШЕРСТІ З ВУШНОЇ РАКОВИНИ', 150),
('ЧИЩЕННЯ ЗУБІВ ГЕЛЕМ', 150),
('МАСКА ДЛЯ КОРОТКОЇ/СЕРЕДНЬОЇ/ДОВГОЇ ШЕРСТІ НА ВИБІР', 250),
('ЗНЯТТЯ ЗУБНОГО КАМЕНЮ УЗ АПАРАТОМ', 700),
('КУПАННЯ ШАМПУНЕМ ПРОТИ БЛІХ', 100),
('КУПАННЯ ГІПОАЛЕРГЕННОЮ КОСМЕТИКОЮ', 100),
('КРЕАТИВНЕ ФАРБУВАННЯ ШЕРСТІ', 200),
('ВИЧІСУВАННЯ КОВТУНІВ', 350),
('ЗООТАКСІ', 500);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
