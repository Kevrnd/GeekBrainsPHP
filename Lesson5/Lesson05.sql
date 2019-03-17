-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Мар 17 2019 г., 10:38
-- Версия сервера: 5.7.25-0ubuntu0.16.04.2
-- Версия PHP: 7.0.33-0ubuntu0.16.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Lesson05`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `filename` varchar(10) NOT NULL,
  `size` varchar(10) NOT NULL,
  `numviews` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `filename`, `size`, `numviews`) VALUES
(1, '1.jpg', '6047', 0),
(2, '2.jpg', '263077', 0),
(3, '3.jpg', '56971', 0),
(4, '4.jpg', '52396', 3),
(5, '5.jpg', '99011', 0),
(6, '6.jpg', '83768', 0),
(7, '7.jpg', '102923', 1),
(8, '8.jpg', '70067', 3),
(9, '9.jpg', '124951', 0),
(10, '10.jpg', '53853', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
