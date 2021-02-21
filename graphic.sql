-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Фев 21 2021 г., 03:06
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
(1, 'uiuiu', '2002-11-20 22:00:00', 'foto/', '2.jpg', 'temp'),
(2, 'vasya', '2002-11-20 22:00:00', 'foto/', '2.jpg', ''),
(3, 'irina', '2002-11-20 22:00:00', 'foto/', '2.jpg', ''),
(4, 'aaaa', '2002-11-20 22:00:00', 'foto/', '2.jpg', ''),
(5, 'aaaa', '2002-11-20 22:00:00', 'foto/', '2.jpg', ''),
(6, 'aleksandr', '2002-11-20 22:00:00', 'foto/', '2.jpg', ''),
(7, 'ghgh', '2002-11-20 22:00:00', 'foto/', '2.jpg', ''),
(8, 'ghgh', '2002-11-20 22:00:00', 'foto/', '2.jpg', ''),
(9, 'ghgh', '2002-11-20 22:00:00', 'foto/', '2.jpg', ''),
(10, 'ghgh', '2002-11-20 22:00:00', 'foto/', '2.jpg', ''),
(11, 'ghgh', '2002-11-20 22:00:00', 'foto/', '2.jpg', ''),
(12, 'ghgh', '2002-12-20 22:00:00', 'foto/', '2.jpg', ''),
(13, 'ghgh', '2002-12-20 22:00:00', 'foto/', '2.jpg', ''),
(14, 'tuytuty', '0000-00-00 00:00:00', 'image/', '214.jpg', 'hjh'),
(15, 'uiuiu', '0000-00-00 00:00:00', 'image/', '600.jpg', 'hjh'),
(16, 'uyyuy', '0000-00-00 00:00:00', 'image/', '143.jpg', 'hjh'),
(17, 'hjkhj', '0000-00-00 00:00:00', 'image/', '634.jpg', 'hjh'),
(32, 'ншгнгн', '0000-00-00 00:00:00', 'image/', '155.jpg', 'hjh'),
(33, 'olga', '0000-00-00 00:00:00', 'image/', '712.jpg', 'hjh'),
(34, 'olga', '0000-00-00 00:00:00', 'image/', '110.jpg', 'hjh'),
(35, 'olga', '0000-00-00 00:00:00', 'image/', '419.jpg', 'hjh'),
(36, 'hjhjhj', '0000-00-00 00:00:00', 'image/', '189.jpg', 'hjh'),
(37, 'ghkjhjg', '0000-00-00 00:00:00', 'image/', '477.jpg', 'hjh'),
(38, 'ghkjhjg', '0000-00-00 00:00:00', 'image/', '903.jpg', 'hjh'),
(39, 'ghkjhjg', '0000-00-00 00:00:00', 'image/', '253.jpg', 'hjh'),
(40, 'ghkjhjg', '0000-00-00 00:00:00', 'image/', '567.jpg', 'hjh'),
(41, 'uyiyiy', '0000-00-00 00:00:00', 'image/', '252.jpg', 'hjh'),
(42, 'ророр', '0000-00-00 00:00:00', 'image/', '591.jpg', 'hjh'),
(43, 'оророр', '0000-00-00 00:00:00', 'image/', '289.jpg', 'hjh'),
(44, 'пррпа', '0000-00-00 00:00:00', 'image/', '930.jpg', 'hjh'),
(45, 'hjhkjhj', '0000-00-00 00:00:00', 'image/', '764.jpg', 'hjh'),
(46, 'hjhkjhj', '0000-00-00 00:00:00', 'image/', '114.jpg', 'hjh'),
(47, 'hjhkjhj', '0000-00-00 00:00:00', 'image/', '509.jpg', 'hjh'),
(48, 'ghghg', '0000-00-00 00:00:00', 'image/', '647.jpg', 'hjh'),
(49, 'ghghg', '0000-00-00 00:00:00', 'image/', '625.jpg', 'hjh'),
(50, 'рлрлор', '0000-00-00 00:00:00', 'image/', '483.jpg', 'hjh'),
(51, 'рлрлор', '0000-00-00 00:00:00', 'image/', '887.jpg', 'hjh'),
(52, 'ншншгн', '0000-00-00 00:00:00', 'image/', '433.jpg', 'hjh'),
(53, 'нншн', '0000-00-00 00:00:00', 'image/', '540.jpg', 'hjh'),
(54, 'ншншгн', '0000-00-00 00:00:00', 'image/', '497.jpg', 'hjh'),
(55, 'ншншгн', '0000-00-00 00:00:00', 'image/', '326.jpg', 'hjh'),
(56, 'ншншгн', '0000-00-00 00:00:00', 'image/', '777.jpg', 'hjh'),
(57, 'ролрло', '0000-00-00 00:00:00', 'image/', '267.jpg', 'hjh'),
(58, 'ролрло', '0000-00-00 00:00:00', 'image/', '911.jpg', 'hjh'),
(59, 'ролрло', '0000-00-00 00:00:00', 'image/', '676.jpg', 'hjh'),
(60, 'ролрло', '0000-00-00 00:00:00', 'image/', '678.jpg', 'hjh'),
(61, 'ролрло', '0000-00-00 00:00:00', 'image/', '143.jpg', 'hjh'),
(62, 'ролрло', '0000-00-00 00:00:00', 'image/', '287.jpg', 'hjh'),
(63, 'ролрло', '0000-00-00 00:00:00', 'image/', '682.jpg', 'hjh'),
(64, 'ролрло', '0000-00-00 00:00:00', 'image/', '246.jpg', 'hjh'),
(65, 'гщшгшщг', '0000-00-00 00:00:00', 'image/', '194.jpg', 'hjh'),
(66, 'гщшгшщг', '0000-00-00 00:00:00', 'image/', '359.jpg', 'hjh'),
(67, 'прпорп', '0000-00-00 00:00:00', 'image/', '480.jpg', 'hjh'),
(68, 'прпорп', '0000-00-00 00:00:00', 'image/', '171.jpg', 'hjh'),
(69, 'ggjgh', '0000-00-00 00:00:00', 'image/', '713.jpg', 'hjh'),
(70, 'uoiui', '0000-00-00 00:00:00', 'image/', '190.jpg', 'hjh'),
(71, 'uoiui', '0000-00-00 00:00:00', 'image/', '371.jpg', 'hjh'),
(72, 'uoiui', '0000-00-00 00:00:00', 'image/', '624.jpg', 'hjh'),
(73, 'uoiui', '0000-00-00 00:00:00', 'image/', '658.jpg', 'hjh'),
(74, 'tuytu', '0000-00-00 00:00:00', 'image/', '991.jpg', 'hjh'),
(75, 'tuytu', '0000-00-00 00:00:00', 'image/', '367.jpg', 'hjh'),
(76, 'hkjhkhj', '0000-00-00 00:00:00', 'image/', '938.jpg', 'hjh'),
(77, 'hkjhkhj', '0000-00-00 00:00:00', 'image/', '883.jpg', 'hjh'),
(78, 'hkjhkhj', '0000-00-00 00:00:00', 'image/', '104.jpg', 'hjh'),
(79, 'hkjhkhj', '0000-00-00 00:00:00', 'image/', '884.jpg', 'hjh'),
(80, 'ncnnn', '0000-00-00 00:00:00', 'image/', '617.jpg', 'hjh'),
(81, 'ncnnn', '0000-00-00 00:00:00', 'image/', '445.jpg', 'hjh'),
(82, 'ncnnn', '0000-00-00 00:00:00', 'image/', '970.jpg', 'hjh'),
(83, 'ncnnn', '0000-00-00 00:00:00', 'foto/', '656.jpg', 'hjh'),
(84, 'yuuiyu', '0000-00-00 00:00:00', 'foto/', '358.jpg', 'hjh'),
(85, 'yuuiyu', '0000-00-00 00:00:00', 'foto/', '628.jpg', 'hjh'),
(86, 'yuuiyu', '0000-00-00 00:00:00', 'foto/', '376.jpg', 'hjh'),
(87, 'jggh', '0000-00-00 00:00:00', 'foto/', '492.jpg', 'hjh'),
(88, 'jggh', '0000-00-00 00:00:00', 'foto/', '992.jpg', 'hjh'),
(89, 'jggh', '0000-00-00 00:00:00', 'foto/', '323.jpg', 'hjh'),
(90, 'jggh', '0000-00-00 00:00:00', 'foto/', '121.jpg', 'hjh'),
(91, 'jggh', '0000-00-00 00:00:00', 'foto/', '654.jpg', 'hjh'),
(92, 'jggh', '0000-00-00 00:00:00', 'foto/', '786.jpg', 'hjh'),
(93, 'jggh', '0000-00-00 00:00:00', 'foto/', '284.jpg', 'hjh'),
(94, 'опопоп', '2021-02-20 22:00:00', 'foto/', '220.jpg', 'hjh'),
(95, 'ншншнш', '2021-02-20 22:00:00', 'foto/', '350.jpg', 'hjh'),
(96, 'gjhgjg', '2021-02-20 22:00:00', 'foto/', '888.jpg', 'hjh'),
(97, 'gjhgjg', '2021-02-20 22:00:00', 'foto/', '823.jpg', 'hjh'),
(98, 'gjhgjg', '2021-02-21 00:16:39', 'foto/', '746.jpg', 'hjh'),
(99, 'gjhgjg', '2021-02-21 00:39:37', 'foto/', '494.jpg', 'hjh'),
(100, 'gjhgjg', '2021-02-21 00:46:38', 'foto/', '454.jpg', 'hjh'),
(101, 'default', '2021-02-21 00:56:14', 'foto/', '913.jpg', 'hjh'),
(102, 'default', '2021-02-21 00:58:07', 'foto/', '691.jpg', 'hjh'),
(103, 'default', '2021-02-21 00:58:42', 'foto/', '303.jpg', 'hjh'),
(104, 'default', '2021-02-21 00:59:40', 'foto/', '670.jpg', 'hjh'),
(105, 'default', '2021-02-21 01:00:33', 'foto/', '569.jpg', 'hjh'),
(106, 'default', '2021-02-21 01:01:37', 'foto/', '554.jpg', 'hjh'),
(107, 'default', '2021-02-21 01:02:35', 'foto/', '498.jpg', 'hjh'),
(108, 'default', '2021-02-21 01:03:08', 'foto/', '853.jpg', 'hjh');

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
