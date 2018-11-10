-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Ноя 10 2018 г., 09:15
-- Версия сервера: 5.7.20-log
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ComputerConsuming`
--
CREATE DATABASE IF NOT EXISTS `ComputerConsuming` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ComputerConsuming`;

-- --------------------------------------------------------

--
-- Структура таблицы `inbox`
--

DROP TABLE IF EXISTS `inbox`;
CREATE TABLE `inbox` (
  `id` int(11) NOT NULL,
  `topic` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL,
  `login` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Очистить таблицу перед добавлением данных `inbox`
--

TRUNCATE TABLE `inbox`;
--
-- Дамп данных таблицы `inbox`
--

INSERT INTO `inbox` (`id`, `topic`, `message`, `login`) VALUES
(1, 'test', 'test', 'Stranger'),
(2, 'test', 'test', 'Stranger'),
(3, 'Сайт убогий', 'Удалите его пожалуйста!', 'ishkining');

-- --------------------------------------------------------

--
-- Структура таблицы `Product`
--

DROP TABLE IF EXISTS `Product`;
CREATE TABLE `Product` (
  `id` int(11) NOT NULL,
  `title` varchar(56) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `producer` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Очистить таблицу перед добавлением данных `Product`
--

TRUNCATE TABLE `Product`;
--
-- Дамп данных таблицы `Product`
--

INSERT INTO `Product` (`id`, `title`, `image`, `description`, `price`, `producer`, `type`) VALUES
(1, '13.3 Ультрабук Acer Aspire S 13 S5-371-33RL черный', 'img/imgForElements/1.jpg', 'Прекрасный Ultrabook с диагональю 13,3 дюйма и компактным дизайном благодаря технологии порта MagicFlip', 62999, 'China', 'Notebook'),
(2, '14.1 Нетбук Prestigio Smartbook 141S синий', 'img/imgForElements/2.jpg', 'Благодаря компактным размерам и небольшому весу всего в 1.4 кг Smartbook 141S станет незаменимым помощником, если вам необходимо поехать на деловую встречу, поработать в кафе или просто взять его с собой в отпуск для просмотра фильмов или игры в любимые видеоигры.', 15999, 'China', 'Notebook'),
(3, '13.3 Ноутбук Acer Aspire R 13 R7-372T-520Q черный', 'img/imgForElements/3.jpg', 'Ноутбук Acer Aspire R 13 R7-372T-520Q отличает уникальная конструкция-трансформер.', 79999, 'China', 'Notebook');

-- --------------------------------------------------------

--
-- Структура таблицы `Types`
--

DROP TABLE IF EXISTS `Types`;
CREATE TABLE `Types` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Очистить таблицу перед добавлением данных `Types`
--

TRUNCATE TABLE `Types`;
--
-- Дамп данных таблицы `Types`
--

INSERT INTO `Types` (`id`, `type`, `img`) VALUES
(1, 'Ноутбуки', 'img/imgForElements/Type_1.jpg'),
(2, 'Ультрабуки', 'img/imgForElements/Type_2.jpg'),
(3, 'КПК', 'img/imgForElements/Type_3.jpg'),
(4, 'Нетбуки', 'img/imgForElements/Type_4.jpg'),
(5, 'Планшеты', 'img/imgForElements/Type_5.jpg'),
(6, 'Настольные ПК', 'img/imgForElements/Type_6.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(24) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(30) NOT NULL,
  `xCode` int(11) NOT NULL,
  `rights` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Очистить таблицу перед добавлением данных `users`
--

TRUNCATE TABLE `users`;
--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `xCode`, `rights`) VALUES
(1, 'ishkining', 'password', 'ishkining@mail.ru', 0, 'admin'),
(2, 'Andrey', 'admin', 'test@mail.ru', 0, 'admin'),
(5, 'Sergey', 'password', 'test@mail.ru', 0, 'user'),
(6, 'test', 'test', 'test@mail.ru', 0, 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Types`
--
ALTER TABLE `Types`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `Product`
--
ALTER TABLE `Product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `Types`
--
ALTER TABLE `Types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
