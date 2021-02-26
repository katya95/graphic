-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Фев 26 2021 г., 02:54
-- Версия сервера: 5.5.62-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `graphic`
--

-- --------------------------------------------------------

--
-- Структура таблицы `pictures`
--

CREATE TABLE `pictures` (
  `id` int(5) NOT NULL,
  `name` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `patch` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `image` varchar(12) NOT NULL,
  `temp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pictures`
--

INSERT INTO `pictures` (`id`, `name`, `date`, `patch`, `image`, `temp`) VALUES
(1, 'uiuiu', '2021-02-26 00:52:10', 'foto/', '2.jpg', 'temp'),
(2, 'vasya', '2021-02-25 23:52:57', 'foto/', '2.jpg', '0'),
(95, 'ншншнш', '2021-02-20 22:00:00', 'foto/', '350.jpg', 'hjh'),
(356, 'anna', '2021-02-25 22:28:40', 'foto/', '377.jpg', '0'),
(357, 'anna', '2021-02-25 22:29:50', 'foto/', '602.jpg', '0'),
(358, 'anna', '2021-02-25 22:31:44', 'foto/', '989.jpg', '0'),
(359, 'default', '2021-02-25 22:31:58', 'foto/', '894.jpg', '0'),
(360, 'default', '2021-02-25 23:26:26', 'foto/', '843.jpg', '0'),
(361, 'default', '2021-02-25 23:28:20', 'foto/', '782.jpg', '0'),
(362, 'vasya', '2021-02-25 23:36:32', 'foto/', '606.jpg', '0'),
(363, 'vasya', '2021-02-25 23:37:23', 'foto/', '718.jpg', '0'),
(364, 'name', '2021-02-26 00:15:51', 'foto/', '900.jpg', '0'),
(365, 'tanya', '2021-02-26 00:29:08', 'foto/', '169.jpg', '0'),
(366, 'mihail', '2021-02-26 00:31:04', 'foto/', '400.jpg', '0');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=367;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
