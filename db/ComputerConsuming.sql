-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 29 2018 г., 22:20
-- Версия сервера: 5.7.23
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `computerconsuming`
--
CREATE DATABASE IF NOT EXISTS `computerconsuming` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `computerconsuming`;

-- --------------------------------------------------------

--
-- Структура таблицы `databoutstation`
--

CREATE TABLE `databoutstation` (
  `id` int(11) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `workDays` varchar(100) NOT NULL,
  `phoneNumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Очистить таблицу перед добавлением данных `databoutstation`
--

TRUNCATE TABLE `databoutstation`;
--
-- Дамп данных таблицы `databoutstation`
--

INSERT DELAYED INTO `databoutstation` (`id`, `logo`, `workDays`, `phoneNumber`) VALUES
(1, 'img/logo/logo.png', 'Рабочие день: Пн с 13:00 до 15:00 Выходные дни: Вт, Ср, Чт, Пт, Сб, Вс', '7001000002');

-- --------------------------------------------------------

--
-- Структура таблицы `inbox`
--

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

INSERT DELAYED INTO `inbox` (`id`, `topic`, `message`, `login`) VALUES
(1, 'test', 'test', 'Stranger'),
(2, 'test', 'test', 'Stranger'),
(3, 'Сайт убогий', 'Удалите его пожалуйста!', 'ishkining');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(56) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `producer` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Очистить таблицу перед добавлением данных `product`
--

TRUNCATE TABLE `product`;
--
-- Дамп данных таблицы `product`
--

INSERT DELAYED INTO `product` (`id`, `title`, `image`, `description`, `price`, `producer`, `type`) VALUES
(1, '13.3 Ультрабук Acer Aspire S 13 S5-371-33RL черный', 'img/imgForElements/1.jpg', 'Прекрасный Ultrabook с диагональю 13,3 дюйма и компактным дизайном благодаря технологии порта MagicFlip', 62999, 'China', 'Ноутбуки'),
(2, '14.1 Нетбук Prestigio Smartbook 141S синий', 'img/imgForElements/2.jpg', 'Благодаря компактным размерам и небольшому весу всего в 1.4 кг Smartbook 141S станет незаменимым помощником, если вам необходимо поехать на деловую встречу, поработать в кафе или просто взять его с собой в отпуск для просмотра фильмов или игры в любимые видеоигры.', 15999, 'China', 'Ноутбуки'),
(3, '13.3 Ноутбук Acer Aspire R 13 R7-372T-520Q черный', 'img/imgForElements/3.jpg', 'Ноутбук Acer Aspire R 13 R7-372T-520Q отличает уникальная конструкция-трансформер.', 79999, 'China', 'Ноутбуки'),
(4, '14.1 Ноутбук Prestigio Smartbook 141 C2 синий', 'img/imgForElements/4.jpg', 'Ноутбук Prestigio Smartbook 141 C2 подойдет тем, кто планирует использовать его для выполнения стандартных офисных и домашних задач, а также простых игр. Благодаря своему относительно небольшому размеру и малому весу он чрезвычайно удобен в транспортировке – его нетрудно брать с собой всегда и везде. Отличное качество изображения на 14.1-дюймовом экране достигается благодаря его Full-HD-разрешению. Высокой скорости загрузки и быстрым переходам от одного приложения к другому способствует использование для установки системы SSD-диска. Объем его минимален, всего 32 ГБ, для хранения данных подразумевается привлечение облачных сервисов или внешних носителей. Выход в Интернет возможен как через кабель, так и без него (есть Wi-Fi-модуль и Ethernet-порт). Беспроводные устройства получится подключить благодаря наличию Bluetooth версии 4.0. Производителем установлена ОС Windows 10, что избавляет он необходимости трат на ее приобретение.', 13999, 'Syberia', 'Ноутбуки');

-- --------------------------------------------------------

--
-- Структура таблицы `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Очистить таблицу перед добавлением данных `types`
--

TRUNCATE TABLE `types`;
--
-- Дамп данных таблицы `types`
--

INSERT DELAYED INTO `types` (`id`, `type`, `img`) VALUES
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

INSERT DELAYED INTO `users` (`id`, `login`, `password`, `email`, `xCode`, `rights`) VALUES
(1, 'ishkining', 'password', 'ishkining@mail.ru', 0, 'admin'),
(2, 'Andrey', 'admin', 'test@mail.ru', 0, 'admin'),
(5, 'Sergey', 'password', 'test@mail.ru', 0, 'user'),
(6, 'test', 'test', 'test@mail.ru', 0, 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `databoutstation`
--
ALTER TABLE `databoutstation`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `types`
--
ALTER TABLE `types`
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
-- AUTO_INCREMENT для таблицы `databoutstation`
--
ALTER TABLE `databoutstation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `types`
--
ALTER TABLE `types`
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
