-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 07 2018 г., 09:46
-- Версия сервера: 8.0.12
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
-- База данных: `stavr213_stavpant`
--

-- --------------------------------------------------------

--
-- Структура таблицы `reestr_rgia`
--

CREATE TABLE `reestr_rgia` (
  `id` int(11) NOT NULL,
  `fond` int(100) NOT NULL,
  `opis` int(100) NOT NULL,
  `delo` int(100) NOT NULL,
  `nach` varchar(100) NOT NULL,
  `okonch` varchar(100) NOT NULL,
  `naimen` varchar(1000) NOT NULL,
  `listov` int(100) NOT NULL,
  `prim` varchar(1000) NOT NULL,
  `tom` varchar(100) NOT NULL,
  `zakaz` varchar(100) NOT NULL,
  `poluch` varchar(100) NOT NULL,
  `zakaz_cop` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `poluch_cop` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `gotovnost` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reestr_rgia`
--

INSERT INTO `reestr_rgia` (`id`, `fond`, `opis`, `delo`, `nach`, `okonch`, `naimen`, `listov`, `prim`, `tom`, `zakaz`, `poluch`, `zakaz_cop`, `poluch_cop`, `gotovnost`) VALUES
(1, 796, 186, 411, '27.07.1904', '03.09.1904', '«О ревизии Ставропольской духовной семинарии»', 14, '«Об учреждении при С.Петербургской академии премии имени Преосвященного Ставропольского Агафадора»', 'I', '24.05.2018', '01.06.2018', 'Фотокопия сделана: 07.06.2018', 'на почте в Ставрополе 20.07.2018', ''),
(2, 831, 181, 2309, '27.07.1904', '03.09.1904', 'По ходатайству Преосвященного Ставропольского об открытии штата причта при Спасо-Преображенской церкви Ставропольского епархиального свечного завода»', 14, '«Об учреждении при С.Петербургской академии премии имени Преосвященного Ставропольского Агафадора»', 'II', '24.05.2018', '01.06.2018', 'Фотокопия сделана: 07.06.2018', 'на почте в Ставрополе 20.07.2018', 'on'),
(3, 796, 186, 411, '27.07.1904', '03.09.1904', '«По ходатайству о разрешении выдавать некоторым казеннокоштным воспитанникам Ставропольской духовной семинарии на руки деньги, ассигнованные на их содержание, с предоставлением права жить вне пансиона»', 14, '«Об учреждении при С.Петербургской академии премии имени Преосвященного Ставропольского Агафадора»', 'II', '24.05.2018', '01.06.2018', 'Фотокопия сделана: 07.06.2018', 'на почте в Ставрополе 20.07.2018', ''),
(4, 7961, 186, 411, '27.07.1904', '03.09.1904', '«О ревизии Ставропольской духовной семинарии»', 14, '«Об учреждении при С.Петербургской академии премии имени Преосвященного Ставропольского Агафадора»', 'I', '24.05.2018', '01.06.2018', 'Фотокопия сделана: 07.06.2018', 'на почте в Ставрополе 20.07.2018', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `reestr_rgia`
--
ALTER TABLE `reestr_rgia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `reestr_rgia`
--
ALTER TABLE `reestr_rgia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
