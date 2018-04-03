-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 30 2018 г., 19:55
-- Версия сервера: 5.7.19
-- Версия PHP: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `DataBase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `News`
--

CREATE TABLE `News` (
  `id_news` int(11) NOT NULL,
  `Title` varchar(1000) NOT NULL,
  `Text` text NOT NULL,
  `IMG` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `News`
--

INSERT INTO `News` (`id_news`, `Title`, `Text`, `IMG`) VALUES
(1, 'ЧЕМПИОНАТ ISA WSG. ОТЧЕТ ИРИНЫ КОСОБУКИНОЙ', 'Командный чемпионат мира по серфингу ISA World Surfing Games (WSG) — это одно из самых крупных соревнований, в котором принимают участие национальные сборные стран, состоящих в Международной Ассоциации Серфинга (ISA). «Состоявшиеся в мае этого года соревнования стали рекордными в истории:', '/static/pictures/News_1.jpg'),
(2, 'БАЛИ: БОТАНИЧЕСКИЙ ПАРК', 'Не всё серферам свелл да пляжи. Иногда и мышцам, и глазу, и перегревшейся голове нужно давать заслуженный отдых. Даже если вы и так на отдыхе. Как это сделать в пределах райского Бали,- наше руководство сегодня. В это путешествие мы берем толстовку, кроссовки, зонт и транспортное средство', '/static/pictures/News_2.jpg'),
(3, 'БАЛИ: ИССЛЕДУЕМ СЕВЕР', 'Все основные туристические районы Бали сгрудились на юге в кучу и перетекают один в другой бесконечной чередой вилл и отелей. Тут все ясно, — открыл трипадвайзер и вперед на поиски всех радостей путешествий в условиях тропического климата. Искушенным же странникам по плечу ...', '/static/pictures/News_3.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `News`
--
ALTER TABLE `News`
  ADD PRIMARY KEY (`id_news`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `News`
--
ALTER TABLE `News`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
