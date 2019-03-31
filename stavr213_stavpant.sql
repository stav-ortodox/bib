-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 01 2019 г., 02:39
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
-- Структура таблицы `bread`
--

CREATE TABLE `bread` (
  `id` int(11) NOT NULL,
  `name_page` varchar(500) NOT NULL,
  `path_page` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bread`
--

INSERT INTO `bread` (`id`, `name_page`, `path_page`) VALUES
(1, 'Библиотека', '/pages/p_biblioteka.php');

-- --------------------------------------------------------

--
-- Структура таблицы `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `month` varchar(50) NOT NULL DEFAULT '',
  `days` varchar(50) NOT NULL DEFAULT '',
  `date` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `calendar`
--

INSERT INTO `calendar` (`id`, `month`, `days`, `date`) VALUES
(1, 'января', 'Вторник', 1),
(2, 'января', 'Среда', 2),
(3, 'января', 'Четверг', 3),
(4, 'января', 'Пятница', 4),
(5, 'января', 'Суббота', 5),
(6, 'января', 'Воскресение', 6),
(7, 'января', 'Понедельник', 7),
(8, 'января', 'Вторник', 9),
(9, 'января', 'Среда', 8),
(10, 'января', 'Четверг', 10),
(11, 'января', 'Пятница', 11),
(12, 'января', 'Суббота', 12),
(13, 'января', 'Воскресение', 13),
(14, 'января', 'Понедельник', 14),
(15, 'января', 'Вторник', 15),
(16, 'января', 'Среда', 16),
(17, 'января', 'Четверг', 17),
(18, 'января', 'Пятница', 18),
(19, 'января', 'Суббота', 19),
(20, 'января', 'Воскресение', 20),
(21, 'января', 'Понедельник', 21),
(22, 'января', 'Вторник', 22),
(23, 'января', 'Среда', 23),
(24, 'января', 'Четверг', 25),
(25, 'января', 'Пятница', 24),
(26, 'января', 'Суббота', 26),
(27, 'января', 'Воскресение', 27),
(28, 'января', 'Понедельник', 28),
(29, 'января', 'Среда', 30),
(30, 'января', 'Вторник', 29),
(31, 'января', 'Четверг', 31);

-- --------------------------------------------------------

--
-- Структура таблицы `den_slugbi`
--

CREATE TABLE `den_slugbi` (
  `id` int(11) NOT NULL,
  `day` varchar(50) DEFAULT NULL,
  `namber` int(11) DEFAULT NULL,
  `month` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'Admins', 'Это администратор'),
(2, 'Users', 'Это пользователи!');

-- --------------------------------------------------------

--
-- Структура таблицы `house`
--

CREATE TABLE `house` (
  `house_id` int(11) NOT NULL,
  `house` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `house`
--

INSERT INTO `house` (`house_id`, `house`) VALUES
(2, 'Приходской дом'),
(1, 'Административный корпус'),
(3, 'Храм'),
(4, 'Гостевой дом'),
(5, 'Трапезная');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `name_img` varchar(50) NOT NULL DEFAULT '0',
  `path` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `name`, `name_img`, `path`) VALUES
(1, 'Главная', 'main.png', 'index.php'),
(2, 'Библиотека', 'bib.png', 'pages/p_biblioteka.php'),
(3, 'Жизнь прихода', 'news.png', 'pages/p_news.php'),
(4, 'О храме', 'o_hrame.png', 'pages/p_o_hrame.php');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL DEFAULT '0',
  `n_text` varchar(5000) NOT NULL DEFAULT '0',
  `image` varchar(150) NOT NULL DEFAULT '0',
  `date` varchar(50) DEFAULT NULL,
  `views` int(11) DEFAULT '0',
  `repost_fb` int(11) DEFAULT '0',
  `repost_ok` int(11) DEFAULT '0',
  `repost_vk` int(11) DEFAULT '0',
  `author` varchar(50) DEFAULT '0',
  `taxonomy` varchar(50) DEFAULT NULL,
  `hidden` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `n_text`, `image`, `date`, `views`, `repost_fb`, `repost_ok`, `repost_vk`, `author`, `taxonomy`, `hidden`) VALUES
(16, 'Прихожане поздравили Настоятеля с Престольным праздником', 'Заманивший речью запятых меня продолжил ведущими коварных, реторический гор бросил маленькая пор.', 'nastoyatel/prihozhane_pozdravili_nastoyatelya_s_prestolnym_prazdnikom/2019-04-01_01-56-22.jpg', NULL, 0, 0, 0, 0, 'иерей Игнатий Переходченко', 'Настоятель', 1),
(17, 'Состоялась первая беседа с прихожанами на предмет изучения Священного Писания Нового Завета.', '31 марта 2019 года при храме святага великомученика и целителя Пантелейимона состоялась\r\nпервая беседа с прихожанами на предмет изучения Священного Писания Нового Завета. Со\r\nвступительным словом выступил настоятель храма митрофорный протоиерей Павел Самойленко.\r\nБыло сказано о важности изучения Священного Писания, авторов писавших богодухновенные\r\nкниги и той исторической ситуации, в которой они писались. Преподано благословение на\r\nведение данных бесед каждое воскресение в 14-00.\r\nБеседу провел иерей Иоанн Шестаков. Она была посвященна введению в предмет. Были\r\nрассмотрены темы: введение в Новый Завет, состав НЗ, распределение НЗ книг по содержанию,\r\nкраткая история канона свящ. книг НЗ, на каком языке написаны свящ. книги НЗ, текст НЗ,\r\nпереводы и цитаты, Четвероевангелие, взаимные отношения Евангелий, достоверность\r\nЕвангелий.\r\nВстреча закончилась подытоживанием настоятелем поднятых тем и заключительным словом.', 'missionerstvo/sostoyalas_pervaya_beseda_s_prihozhanami_na_predmet_izucheniya_svyaschennogo_pisaniya_novogo_zaveta_/2019-04-01_02-29-36.jpg', NULL, 0, 0, 0, 0, 'иерей Иоанн Шестаков', 'Миссионерство', 1),
(18, 'Состоялась первая беседа с прихожанами на предмет изучения Священного Писания Нового Завета.', '31 марта 2019 года при храме святага великомученика и целителя Пантелейимона состоялась\r\nпервая беседа с прихожанами на предмет изучения Священного Писания Нового Завета. Со\r\nвступительным словом выступил настоятель храма митрофорный протоиерей Павел Самойленко.\r\nБыло сказано о важности изучения Священного Писания, авторов писавших богодухновенные\r\nкниги и той исторической ситуации, в которой они писались. Преподано благословение на\r\nведение данных бесед каждое воскресение в 14-00.\r\nБеседу провел иерей Иоанн Шестаков. Она была посвященна введению в предмет. Были\r\nрассмотрены темы: введение в Новый Завет, состав НЗ, распределение НЗ книг по содержанию,\r\nкраткая история канона свящ. книг НЗ, на каком языке написаны свящ. книги НЗ, текст НЗ,\r\nпереводы и цитаты, Четвероевангелие, взаимные отношения Евангелий, достоверность\r\nЕвангелий.\r\nВстреча закончилась подытоживанием настоятелем поднятых тем и заключительным словом.', 'missionerstvo/sostoyalas_pervaya_beseda_s_prihozhanami_na_predmet_izucheniya_svyaschennogo_pisaniya_novogo_zaveta_/2019-04-01_02-30-26.jpg', NULL, 0, 0, 0, 0, 'иерей Иоанн Шестаков', 'Миссионерство', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `path_image`
--

CREATE TABLE `path_image` (
  `id` int(11) NOT NULL,
  `id_news` int(11) NOT NULL DEFAULT '0',
  `path_image` varchar(500) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `path_image`
--

INSERT INTO `path_image` (`id`, `id_news`, `path_image`) VALUES
(1, 0, 'nastoyatel/prihozhane_pozdravili_nastoyatelya_s_prestolnym_prazdnikom/slide-7fbd0d5ab54b7e1b201de4278e05cf01.jpg'),
(2, 0, 'nastoyatel/prihozhane_pozdravili_nastoyatelya_s_prestolnym_prazdnikom/slide-4c57516dc54c440012400815ba0b3b0f.jpg'),
(3, 0, 'nastoyatel/prihozhane_pozdravili_nastoyatelya_s_prestolnym_prazdnikom/slide-46416c0aece5af8e9ada7686c2728c54.jpg'),
(4, 0, 'nastoyatel/prihozhane_pozdravili_nastoyatelya_s_prestolnym_prazdnikom/slide-150047cab5e50894fb04e1fa53ed85df.jpg'),
(5, 0, 'nastoyatel/prihozhane_pozdravili_nastoyatelya_s_prestolnym_prazdnikom/slide-c7de4ab9e968fd1ac751abb5105b0adc.jpg'),
(6, 0, 'nastoyatel/prihozhane_pozdravili_nastoyatelya_s_prestolnym_prazdnikom/slide-bc8b8a13d1d9dd84e0fe710aeeee4401.jpg'),
(7, 15, 'nastoyatel/prihozhane_pozdravili_nastoyatelya_s_prestolnym_prazdnikom/slide-7fbd0d5ab54b7e1b201de4278e05cf01.jpg'),
(8, 15, 'nastoyatel/prihozhane_pozdravili_nastoyatelya_s_prestolnym_prazdnikom/slide-4c57516dc54c440012400815ba0b3b0f.jpg'),
(9, 15, 'nastoyatel/prihozhane_pozdravili_nastoyatelya_s_prestolnym_prazdnikom/slide-46416c0aece5af8e9ada7686c2728c54.jpg'),
(10, 15, 'nastoyatel/prihozhane_pozdravili_nastoyatelya_s_prestolnym_prazdnikom/slide-150047cab5e50894fb04e1fa53ed85df.jpg'),
(11, 15, 'nastoyatel/prihozhane_pozdravili_nastoyatelya_s_prestolnym_prazdnikom/slide-c7de4ab9e968fd1ac751abb5105b0adc.jpg'),
(12, 15, 'nastoyatel/prihozhane_pozdravili_nastoyatelya_s_prestolnym_prazdnikom/slide-bc8b8a13d1d9dd84e0fe710aeeee4401.jpg'),
(13, 16, 'nastoyatel/prihozhane_pozdravili_nastoyatelya_s_prestolnym_prazdnikom/slide-7fbd0d5ab54b7e1b201de4278e05cf01.jpg'),
(14, 16, 'nastoyatel/prihozhane_pozdravili_nastoyatelya_s_prestolnym_prazdnikom/slide-4c57516dc54c440012400815ba0b3b0f.jpg'),
(15, 16, 'nastoyatel/prihozhane_pozdravili_nastoyatelya_s_prestolnym_prazdnikom/slide-46416c0aece5af8e9ada7686c2728c54.jpg'),
(16, 16, 'nastoyatel/prihozhane_pozdravili_nastoyatelya_s_prestolnym_prazdnikom/slide-150047cab5e50894fb04e1fa53ed85df.jpg'),
(17, 16, 'nastoyatel/prihozhane_pozdravili_nastoyatelya_s_prestolnym_prazdnikom/slide-c7de4ab9e968fd1ac751abb5105b0adc.jpg'),
(18, 16, 'nastoyatel/prihozhane_pozdravili_nastoyatelya_s_prestolnym_prazdnikom/slide-bc8b8a13d1d9dd84e0fe710aeeee4401.jpg'),
(19, 18, 'missionerstvo/sostoyalas_pervaya_beseda_s_prihozhanami_na_predmet_izucheniya_svyaschennogo_pisaniya_novogo_zaveta_/slide-176896df71d38d8fac9e02126b380b90.jpg'),
(20, 18, 'missionerstvo/sostoyalas_pervaya_beseda_s_prihozhanami_na_predmet_izucheniya_svyaschennogo_pisaniya_novogo_zaveta_/slide-557cc3ef3b4a7e8ce4c7d0aa3fb002fd.jpg'),
(21, 18, 'missionerstvo/sostoyalas_pervaya_beseda_s_prihozhanami_na_predmet_izucheniya_svyaschennogo_pisaniya_novogo_zaveta_/slide-c37f8f45ebe4908b3e4961686354ed91.jpg'),
(22, 18, 'missionerstvo/sostoyalas_pervaya_beseda_s_prihozhanami_na_predmet_izucheniya_svyaschennogo_pisaniya_novogo_zaveta_/slide-8a14e6151a08734b8567f602fdbaad83.jpg'),
(23, 18, 'missionerstvo/sostoyalas_pervaya_beseda_s_prihozhanami_na_predmet_izucheniya_svyaschennogo_pisaniya_novogo_zaveta_/slide-7d0b9100d9a4fc63f326e1e52a542272.jpg'),
(24, 18, 'missionerstvo/sostoyalas_pervaya_beseda_s_prihozhanami_na_predmet_izucheniya_svyaschennogo_pisaniya_novogo_zaveta_/slide-22e14ca8ad3cad6480505090898c4654.jpg'),
(25, 18, 'missionerstvo/sostoyalas_pervaya_beseda_s_prihozhanami_na_predmet_izucheniya_svyaschennogo_pisaniya_novogo_zaveta_/slide-cb798cf24ceff2218db55cb7146c90bf.jpg'),
(26, 18, 'missionerstvo/sostoyalas_pervaya_beseda_s_prihozhanami_na_predmet_izucheniya_svyaschennogo_pisaniya_novogo_zaveta_/slide-cbf0b96bbc68afcdba7c431f02d0a2ff.jpg'),
(27, 18, 'missionerstvo/sostoyalas_pervaya_beseda_s_prihozhanami_na_predmet_izucheniya_svyaschennogo_pisaniya_novogo_zaveta_/slide-ed5880677edf381212f9058d2da642c8.jpg'),
(28, 18, 'missionerstvo/sostoyalas_pervaya_beseda_s_prihozhanami_na_predmet_izucheniya_svyaschennogo_pisaniya_novogo_zaveta_/slide-c4e50610451a5025c7c54a2b78f4f291.jpg'),
(29, 18, 'missionerstvo/sostoyalas_pervaya_beseda_s_prihozhanami_na_predmet_izucheniya_svyaschennogo_pisaniya_novogo_zaveta_/slide-229b91c2c61518ab19035ca500c25035.jpg'),
(30, 18, 'missionerstvo/sostoyalas_pervaya_beseda_s_prihozhanami_na_predmet_izucheniya_svyaschennogo_pisaniya_novogo_zaveta_/slide-f105ff0ebbf4e8495c2d422764f3f63f.jpg'),
(31, 18, 'missionerstvo/sostoyalas_pervaya_beseda_s_prihozhanami_na_predmet_izucheniya_svyaschennogo_pisaniya_novogo_zaveta_/slide-6cf3a0ff0e6c880892d3b5fc4ce9c676.jpg'),
(32, 18, 'missionerstvo/sostoyalas_pervaya_beseda_s_prihozhanami_na_predmet_izucheniya_svyaschennogo_pisaniya_novogo_zaveta_/slide-1b574ce8b18a96d33d3a9b66469991e7.jpg'),
(33, 18, 'missionerstvo/sostoyalas_pervaya_beseda_s_prihozhanami_na_predmet_izucheniya_svyaschennogo_pisaniya_novogo_zaveta_/slide-93e40408172c843b1d3b6f2ef15688f3.jpg'),
(34, 18, 'missionerstvo/sostoyalas_pervaya_beseda_s_prihozhanami_na_predmet_izucheniya_svyaschennogo_pisaniya_novogo_zaveta_/slide-b9b5efd476a8f10cc1a2ade595de6d13.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `place`
--

CREATE TABLE `place` (
  `place_id` int(11) NOT NULL,
  `place` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `place`
--

INSERT INTO `place` (`place_id`, `place`) VALUES
(1, 'Кабинет Настоятеля'),
(2, 'Бухгалтерия'),
(3, 'Канцелярия'),
(4, 'Административно-хозяйственная часть'),
(6, 'Актовый зал'),
(7, 'Учебный класс 1а'),
(8, 'Учебный класс 1'),
(9, 'Покои Настоятеля'),
(10, 'Информационно-аналитический центр'),
(11, 'Библиотека'),
(12, 'Компьютерный класс'),
(14, 'Учебный класс 3'),
(15, 'Учебный класс 4'),
(16, 'Фотоцентр'),
(17, 'Ризница'),
(18, 'Алтарь'),
(19, 'Древлехранилище'),
(20, 'Гостиница'),
(5, 'Коридор'),
(13, 'Учебный класс 2'),
(21, 'Трапезная');

-- --------------------------------------------------------

--
-- Структура таблицы `publishing_blocks`
--

CREATE TABLE `publishing_blocks` (
  `id` int(11) NOT NULL,
  `block_name` varchar(100) NOT NULL,
  `block_image` varchar(500) NOT NULL,
  `block_description` varchar(500) NOT NULL,
  `block_path` varchar(500) NOT NULL,
  `block_hidden` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `publishing_blocks`
--

INSERT INTO `publishing_blocks` (`id`, `block_name`, `block_image`, `block_description`, `block_path`, `block_hidden`) VALUES
(13, 'Приходская газета &quot;Воскресение&quot;', '../../images/biblioteka/publishing_blocks/20190325012525769.jpg', 'Газета Воскресной школы храма святого Великомученика и Целителя Пантелеимона г. Ставрополя.', '/pages/biblioteka/p_publishing_page.php?id=13', 1),
(33, 'Свет Христов просвещает всех', '../../images/biblioteka/publishing_blocks/20190325012813441.jpg', 'Газета Воскресной школы храма святого Великомученика и Целителя Пантелеимона г. Ставрополя.', '/pages/biblioteka/p_publishing_page.php?id=33', 0),
(34, 'Приходская газета &quot;Свет Христов просвещает всех&quot;', '../../images/biblioteka/publishing_blocks/20190325013714206.jpg', 'Газета Воскресной школы храма святого Великомученика и Целителя Пантелеимона г. Ставрополя.', '/pages/biblioteka/p_publishing_page.php?id=34', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `publishing_post`
--

CREATE TABLE `publishing_post` (
  `id` int(11) NOT NULL,
  `block_id` int(11) DEFAULT NULL,
  `block_name` varchar(500) DEFAULT NULL,
  `pub_name` varchar(500) DEFAULT NULL,
  `pub_description` varchar(500) DEFAULT NULL,
  `pub_image` varchar(500) DEFAULT NULL,
  `pub_file` varchar(500) DEFAULT NULL,
  `pub_hidden` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `publishing_post`
--

INSERT INTO `publishing_post` (`id`, `block_id`, `block_name`, `pub_name`, `pub_description`, `pub_image`, `pub_file`, `pub_hidden`) VALUES
(20, 33, 'Приходская газета &quot;Воскресение&quot;', 'Новая газета1', 'Хорошая газета1', '../../images/biblioteka/publishing_blocks/20181212231820558.jpg', '../../images/biblioteka/publishing_files/20181212231820293.jpg', 0),
(21, 33, 'Приходская газета &quot;Воскресение&quot;', 'Новая газета2', 'Хорошая газета2', '../../images/biblioteka/publishing_blocks/20181212231904230.jpg', '../../images/biblioteka/publishing_files/20181212231904727.jpg', 0),
(23, 13, 'Приходская газета &quot;Воскресение&quot;', 'Редактированная газета', 'Хорошая газета3', '../../images/biblioteka/publishing_blocks/20181212232038647.jpg', '../../images/biblioteka/publishing_files/20181212232038505.jpg', 0),
(24, 13, 'Приходская газета &quot;Воскресение&quot;', 'Новая газета4', 'Хорошая газета4', '../../images/biblioteka/publishing_blocks/20181212232114738.jpg', '../../images/biblioteka/publishing_files/20181212232114107.jpg', 0),
(38, 34, 'Приходская газета &quot;Воскресение&quot;', 'Приходская газета \"Воскресение\"', 'Приходская газета \"Воскресение\"', '../../images/biblioteka/publishing_blocks/20190314224721804.jpg', '../../images/biblioteka/publishing_files/20190314224721480.jpg', 0),
(39, 34, 'Приходская газета &quot;Воскресение&quot;', 'Выпуск №1 июнь 2007', 'Первый выпуск газеты Воскресной школы храма св. Великомученика и Целителя Пантелеимона Воскресение', '../../images/biblioteka/publishing_blocks/20190323224637998.jpg', '../../images/biblioteka/publishing_files/20190323224637577.jpg', 0),
(40, 34, 'Приходская газета &quot;Воскресение&quot;', 'Выпуск №45 июнь 2008', 'Первый выпуск газеты Воскресной школы храма св. Великомученика и Целителя Пантелеимона Свет Христов просвещает всех', '../../images/biblioteka/publishing_blocks/20190324014613898.jpg', '../../images/biblioteka/publishing_files/20190324014613525.jpg', 0),
(41, 13, 'Приходская газета &quot;Воскресение&quot;', 'Выпуск №1 июнь 2007', 'Первый выпуск газеты Воскресной школы храма св. Великомученика и Целителя Пантелеимона Воскресение', '../../images/biblioteka/publishing_blocks/20190324014723196.jpg', '../../images/biblioteka/publishing_files/20190324014723125.jpg', 0),
(42, 13, 'Приходская газета &quot;Воскресение&quot;', 'Выпуск №45 июнь 2008', 'Пятнадцатый выпуск газеты Воскресной школы храма св. Великомученика и Целителя Пантелеимона Свет Христов просвещает всех', '../../images/biblioteka/publishing_blocks/20190324015029860.jpg', '../../images/biblioteka/publishing_files/20190324015029625.jpg', 0),
(43, 34, 'Приходская газета &quot;Воскресение&quot;', 'Выпуск №47 июнь 2009', '156 выпуск газеты Воскресной школы храма св. Великомученика и Целителя Пантелеимона Свет Христов просвещает всех', '../../images/biblioteka/publishing_blocks/20190324015202319.jpg', '../../images/biblioteka/publishing_files/20190324015202482.jpg', 0),
(44, 34, 'Приходская газета &quot;Воскресение&quot;', 'Выпуск №47 июнь 2009', '159 выпуск газеты Воскресной школы храма св. Великомученика и Целителя Пантелеимона Свет Христов просвещает всех', '../../images/biblioteka/publishing_blocks/20190324015307971.jpg', '../../images/biblioteka/publishing_files/20190324015308463.jpg', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `raspisanie`
--

CREATE TABLE `raspisanie` (
  `id` int(11) NOT NULL,
  `s_date` varchar(50) DEFAULT '0',
  `week` varchar(50) DEFAULT '0',
  `s_time` varchar(50) DEFAULT NULL,
  `u_text` varchar(1000) DEFAULT NULL,
  `u_color_text` varchar(50) DEFAULT NULL,
  `s_text` varchar(1000) DEFAULT NULL,
  `color_text` varchar(50) DEFAULT NULL,
  `priest1` varchar(50) DEFAULT NULL,
  `priest2` varchar(50) DEFAULT NULL,
  `priest3` varchar(50) DEFAULT NULL,
  `priest4` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `raspisanie`
--

INSERT INTO `raspisanie` (`id`, `s_date`, `week`, `s_time`, `u_text`, `u_color_text`, `s_text`, `color_text`, `priest1`, `priest2`, `priest3`, `priest4`) VALUES
(119, '2 января', 'Вторник', '7:30', 'Гражданский Новый год.', 'black', 'Гражданский Новый год.', '', 'on', 'on', 'on', 'on'),
(127, '2 января', 'Вторник', '7:30', 'Седмица 32-я по Пятидесятнице', 'black', 'Божественная Литургия. Исповедь. Молебен. Заупокойная панихида.', 'black', 'on', 'on', 'on', 'on');

-- --------------------------------------------------------

--
-- Структура таблицы `reestr_comps`
--

CREATE TABLE `reestr_comps` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `name_type` varchar(300) NOT NULL,
  `characterics` varchar(10000) NOT NULL,
  `house` varchar(500) NOT NULL,
  `place` varchar(1000) NOT NULL,
  `of_face` varchar(2000) NOT NULL,
  `sost` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reestr_comps`
--

INSERT INTO `reestr_comps` (`id`, `name`, `name_type`, `characterics`, `house`, `place`, `of_face`, `sost`, `image`) VALUES
(84, 'Многофункциональное устройство', 'Panasonic 6в1 KX-MB2020RU', '&bull Многофункциональное устройство (факс/телефон/принтер/сканер/копир/PC-факс) &bull; Интерфейс подключения к ПК - USB 2.0 &bull; Сетевой интерфейс &bull; AOH, Caller ID* &bull; Монохромная лазерная печать (600 точек на дюйм) &bull; Цветное сканирование (до 9600 точек на дюйм) &bull; Скорость печати- 24 стр./мин &bull; Передача документов из памяти ( 150 стр.) &bull; Прием при отсутствии бумаги ( 110 стр.) &bull; Энергонезависимая память &bull; Высокоскоростная передача (33,6 кбит/cек) &bull; Режим исправления ошибок (ЕСМ) &bull; Рассылка (2х20) &bull; Отложенная передача &bull; Набор 106 номеров из памяти &bull; 2-строчный LCD-дисплей для отображения имени и номера (русский язык) &bull; Сканирование на ftp сервер/ папку SMB (PDF,JPEG или TIFF) &bull; Сканирование в электронную почту', 'Административный корпус', 'Кабинет Настоятеля', 'иерей Игнатий Переходченко', 'рабочее', 'uploads/20181214124337740.jpg'),
(85, 'Персональный компьютер (моноблок)', 'Acer/Aspire C20-720', 'Имя ОС Майкрософт Windows 10 * Домашняя для одного языка * Версия	10.0.17134 Сборка 17134 * Изготовитель ОС Microsoft Corporation * Имя системы	DESKTOP-SJ2VGHD * Тип Компьютер на базе x64&bull;Процессор Intel(R) Celeron(R) CPU J3060 @ 1.60GHz, 1601 МГц, ядер: 2, логических процессоров: 2&bull;Изготовитель основной платы Acer&bull;Устройство загрузки \\Device\\HarddiskVolume1&bull;Установленная оперативная память (RAM) 4,00 ГБ&bull;Жесткий диск: Toshiba MQ01ABF050&bull;Видеокарта: intel(R) HD Graphics', 'Приходской дом', 'Библиотека', 'Агуренко Л.М.', 'рабочее', 'uploads/20181214141328473.jpg'),
(96, 'Принтер', 'HP LaserJet Pro M104a', 'Партномер G3Q36AСтрана-изготовитель Вьетнам&bull;Цвет белый Цветность печати Монохромное Количество цветов 1Макс. формат печатиA4 (210 x 297 мм)Форматы печатных материаловA4 (210 x 297 мм), A5 (148 x 210 мм), A6 (105 x 148 мм), B5 (176 x 250 мм), конверты, почтовые открытки&bull;Разрешение печати 1200x1200 dpi, 600x600 dpi&bull;Макс. скорость печати (ч/б), стр/мин22Выход первой страницы, с7,3Нагрузка в месяц 10000 страницЛоток подачи, листов 150Выходной лоток, листов 1', 'Приходской дом', 'Библиотека', 'Агуренко Л.М.', 'рабочее', 'uploads/20181214141447973.jpg'),
(97, 'Персональный компьютер (сборный)', 'Монитор BenQ GL2450H [24', 'Тип компьютера ACPI x64-based PC&bull;Операционная система Microsoft Windows 7 Professional&bull;Системная плата Gigabyte GA-F2A55M-S1 (1 PCI, 1 PCI-E x1, 1 PCI-E x16, 2 DDR3 DIMM, Audio, Video, Gigabit LAN)&bull;Чипсет системной платы AMD A55, AMD K15.1&bull;Системная память [ TRIAL VERSION ]&bull;DIMM3:&bull;Samsung M378B5673GB0-CH9 [ TRIAL VERSION ]&bull;DIMM4: Kingston 99U5595-001.A00LF [ TRIAL VERSION ]&bull;Видеоадаптер NVIDIA GeForce 210 (512 МБ)&bull;Дисковый накопитель WDC&bull;WD5000AAKX-08U6AA0 ATA Device (500 ГБ, 7200 RPM, SATA-III)&bull;Оптический накопитель TSSTcorp CDDVDW SH-224DB ATA Device&bull;Клавиатура Клавиатура HID&bull;Мышь PS/2-совместимая мышь', 'Приходской дом', 'Компьютерный класс', 'диакон Симеон Чикин', 'рабочее', 'uploads/20181214141612912.jpg'),
(98, 'Принтер', 'HP LaserJet Pro P1102 RU', '-Устройство: принтер•Тип печати: черно-белая•Технология печати: лазерная•Размещение: настольный•Область применения: персональный•Количество страниц в месяц: 5000•Максимальное разрешение для ч/б печати: 600x600 dpi•Максимальный формат: A4 •Время выхода первого отпечатка: 8.50 c (ч/б)•Скорость печати: 18 стр/мин (ч/б А4)', 'Приходской дом', 'Компьютерный класс', 'диакон Симеон Чикин', 'рабочее', 'uploads/20181214141748255.jpg'),
(99, 'Персональный компьютер (сборный)', 'Монитор ACER 22 дюймa/Сист. блок ATX', 'Мышь комп. 4 TECH•Клавиатура 4 TECH•Динамик GENIUS•Сетевые фильтры 6 гнезд•Блок питания ATX•DVD-RW•Мат-плата GIGBYTE•Жест.Диск 500 Гб•Процессор INTEL E 5700', 'Приходской дом', 'Компьютерный класс', 'диакон Симеон Чикин', 'рабочее', 'uploads/20181214141848155.jpg'),
(100, 'Персональный компьютер (сборный)', 'Монитор ACER 19 дюйм/Сист.блок ATX мини', 'Мышь комп. GENIUS•Клавиатура GENIUS•Динамик GENIUS•Сетевые фильтры 6 гнезд•Блок питания ATX•DVD-RW•Мат-плата MSI•Жест. Диск 250 Гб', 'Приходской дом', 'Компьютерный класс', 'диакон Симеон Чикин', 'рабочее', 'uploads/20181214142011147.jpg'),
(101, 'Персональный компьютер (сборный)', 'Монитор ACER 19 дюйм/Сист.блок ATX мини', 'Мышь комп. GENIUS•Клавиатура GENIUS•Динамик GENIUS•Сетевые фильтры 6 гнезд•Блок питания ATX•DVD-RW•Мат-плата MSI•Жест. Диск 250 Гб', 'Приходской дом', 'Компьютерный класс', 'диакон Симеон Чикин', 'рабочее', 'uploads/20181214142041429.jpg'),
(102, 'Персональный компьютер (сборный)', 'Монитор ACER 19 дюйм/Сист.блок ATX мини', 'Мышь комп. GENIUS•Клавиатура GENIUS•Динамик GENIUS•Сетевые фильтры 6 гнезд•Блок питания ATX•DVD-RW•Мат-плата MSI•Жест. Диск 250 Гб', 'Приходской дом', 'Компьютерный класс', 'диакон Симеон Чикин', 'рабочее', 'uploads/20181214142107528.jpg'),
(103, 'Персональный компьютер (сборный)', 'Монитор ACER 19 дюйм/Сист.блок ATX мини', 'Мышь комп. GENIUS&bull;Клавиатура GENIUS&bull;Динамик GENIUS&bull;Сетевые фильтры 6 гнезд&bull;Блок питания ATX&bull;DVD-RW&bull;Мат-плата MSI&bull;Жест. Диск 250 Гб', 'Приходской дом', 'Компьютерный класс', 'диакон Симеон Чикин', 'рабочее', 'uploads/20181214142140500.jpg'),
(104, 'Персональный компьютер (сборный)', 'Монитор ACER 19 дюйм/Сист.блок ATX мини', 'Мышь комп. GENIUS&bull;Клавиатура GENIUS&bull;Динамик GENIUS&bull;Сетевые фильтры 6 гнезд&bull;Блок питания ATX&bull;DVD-RW&bull;Мат-плата MSI&bull;Жест. Диск 250 Гб', 'Приходской дом', 'Компьютерный класс', 'диакон Симеон Чикин', 'рабочее', 'uploads/20181214142225972.jpg'),
(105, 'Персональный компьютер (сборный)', 'Монитор ACER 19 дюйм/Сист.блок ATX мини', 'Мышь комп. GENIUS•Клавиатура GENIUS•Динамик GENIUS•Сетевые фильтры 6 гнезд•Блок питания ATX•DVD-RW•Мат-плата MSI•Жест. Диск 250 Гб', 'Приходской дом', 'Компьютерный класс', 'диакон Симеон Чикин', 'рабочее', 'uploads/20181214142424934.jpg'),
(106, 'Многофункциональное устройство', 'Samsung SCX-4824FN2020RU', 'Устройство: принтер/сканер/копир/факс •Тип печати: черно-белая•Технология печати: лазерная•Размещение: настольный•Область применения: средний офис•Количество страниц в месяц: 50000•Скорость печати: 24 стр/мин (ч/б А4)•Время выхода первого отпечатка: 9.50 c (ч/б)•Максимальное разрешение для ч/б печати: 1200x1200 dpi•Максимальный формат: A4', 'Приходской дом', 'Компьютерный класс', 'диакон Симеон Чикин', 'рабочее', 'uploads/20181214142638228.jpg'),
(107, 'Интерактивная доска', 'Hitachi Starboard FX 77', 'Диагональ рабочей поверхности – 77 дюймов или 158х118 см;•Габариты (без учета стойки) – 176,5х148,1х75 см (ШхВхГ);•Вес – 24 килограмма;•Распознавание маркера – происходит с использованием ИК датчиков;•Разрешение дигитайзера – 0,05 миллиметров;•Электронное перо с ИК системой связи использует частоту 56 кГц и длину ИК луча равную 940 нм, питается от батарей ААА. Сам девайс длиной 149 мм, а в диаметре — 17мм;•Тип поверхности рабочей – матовая белая;•Температурный диапазон — +5C — 35C;•Допустимый уровень влажности – от 20 до 80%;•Изображение формата 4.3;•Точность электронного пера — +/- ± 1.5 мм.•Длина кабеля – 2,8м.', 'Приходской дом', 'Компьютерный класс', 'диакон Симеон Чикин', 'рабочее', 'uploads/20181214142812842.jpg'),
(108, 'Проектор', 'Acer X118', 'Проекционная технология DLP•Разрешение 800x600•Соотношение сторон 4:3•Поддержка 3D есть•Световой поток 3600 люмен•Контрастность 20000:1•Максимальная частота вертикальной развертки 120 Гц•Тип коррекции трапецеидальных искажений вертикальная•Лампа Тип лампы OSRAM•Количество ламп 1•Срок службы лампы 4000 ч•Срок службы лампы в экономичном режиме 10000 ч•Мощность лампы 203 Вт•Проекция•Ультракороткофокусный проектор нет•Минимальное проекционное расстояние 1 м•Максимальное проекционное расстояние 11.8 м•Минимальный размер проекции по диагонали 0.58 м•Максимальный размер проекции по диагонали 7.62 м•Минимальное проекционное соотношение 1.94:1•Максимальное проекционное соотношение 2.16:1', 'Приходской дом', 'Компьютерный класс', 'диакон Симеон Чикин', 'рабочее', 'uploads/20181214142925510.jpg'),
(109, 'Персональный компьютер (сборный)', 'монитор Acer S191HQL [18.5', 'Тип ЦП DualCore Intel Celeron E3400, 2600 MHz (13 x 200)&bull;Системная плата Asus P5B-VM SE (2 PCI, 1 PCI-E x1, 1 PCI-E x16, 4 DDR2 DIMM, Audio, Video, Gigabit LAN)&bull;Системная память [ TRIAL VERSION ]DIMM1: Samsung M3 78T5663RZ3-CF7 2 ГБ DDR2-800 DDR2 SDRAM (6-6-6-18 @ 400 МГц) (5-5-5-15 @ 333 МГц) (4-4-4-12 @ 266 МГц)&bull;Тип BIOS AMI (09/28/09)&bull;Видеоадаптер Intel(R) G965 Express Chipset Family (384 МБ)&bull;Хранение данных:&bull;Дисковый накопитель &bull;ST3802110A ATA Device (80 ГБ, 7200 RPM, Ultra-ATA/100)&bull;Дисковый накопитель SUNTRSI SSD S660ST ATA Device (111 ГБ, IDE)&bull;Ввод:&bull;Клавиатура Стандартная клавиатура Genius PS/2&bull;Мышь &bull;Microsoft PS/2 мышь', 'Административный корпус', 'Административно-хозяйственная часть', 'Каневников А. А.', 'рабочее', 'uploads/20181214143139688.jpg'),
(110, 'Принтер', 'Canon LBP2900', 'Модель Canon LBP 2900&bull;Область применения для офиса, для дома&bull;Технология печати лазерная&bull;Цветность печати черно-белая&bull;Максимальный формат печати A4&bull;Максимальное разрешение чёрно-белой печати 2400x600 dpi&bull;Скорость чёрно-белой печати (стр/мин) 12 стр/мин (A4)&bull;Время выхода первого чёрно-белого отпечатка (сек.) 9.3 сек.&bull;Ресурс черного картриджа 2000 страниц&bull;Ёмкость подачи 150 листов&bull;Ёмкость выходного лотка 100 листов', 'Административный корпус', 'Административно-хозяйственная часть', 'Каневников А. А.', 'рабочее', 'uploads/20181214143245977.jpg'),
(111, 'Персональный компьютер (сборный)', 'монитор Samsung SyncMaster 943N/943NX [19', 'Многопроцессорный компьютер с ACPI&bull;Операционная система Microsoft Windows XP Professional&bull;Системная плата:&bull;Тип ЦП DualCore AMD Athlon 64 X2, 2500 MHz (12.5 x 200) 4800+&bull;Системная плата Acer F690GVM&bull;Чипсет системной платы AMD 690G, AMD Hammer&bull;Системная память[ TRIAL VERSION ]&bull;DIMM1: Patriot Memory PSD21G8002&bull;1 ГБ DDR2-800 DDR2 SDRAM (5-5-5-16 @ 400 МГц) (4-4-4-11 @ 266 МГц) (3-3-3-8 @ 200 МГц)&bull;DIMM2: Patriot Memory PSD21G8002&bull;[ TRIAL VERSION ]&bull;Тип BIOS Award (06/25/07)&bull;Видеоадаптер ATI Radeon X1250 (256 МБ)&bull;Дисковый накопитель ST3250410AS (250 ГБ, 7200 RPM, SATA-II)&bull;Оптический накопитель TSSTcorp CDDVDW SH-S203D &bull;DVD+RW/DVD-RW/DVD-RAM)&bull;Клавиатура&bull;Мышь', 'Административный корпус', 'Административно-хозяйственная часть', 'Каневников А. А.', 'рабочее', 'uploads/201812141433581000.jpg'),
(112, 'Принтер', 'Canon LASER SHOT LBP-1120', 'Устройство: принтер&bull;Тип печати: черно-белая &bull;Технология печати: лазерная &bull;Область применения: персональный&bull;Количество страниц в месяц: 7000&bull;Максимальное разрешение для ч/б печати: 600x600 dpi&bull;Время выхода первого отпечатка: 18 c (ч/б)&bull;Максимальный формат: A4&bull;Скорость печати: 10 стр/мин (ч/б А4) &bull;Вывод бумаги: 50 лист. (стандартный)', 'Административный корпус', 'Административно-хозяйственная часть', 'Каневников А. А.', 'рабочее', 'uploads/20181214143453726.jpg'),
(113, 'Персонaльный компьютер (сборный)', 'Монитор LG IPS226/Процессор Intel(R) Core(TM) i5-2300 CPU @ 2.80GHz', 'Блок бесперебойного питания Ippon BPP700/ Клавиатура/ Мышь/ Память ОЗУ 8,00 ГБ/ Материнская плата ASUSTeK Computer INC. P8P67-M Rev x.0x/ Графическая плата NVIDIA GeForce GTX 560 Версия DirectX: 11.0/ Жёсткий диск WDCWD1003FBYX-01Y7B1 из 931.51 ГБ SATA II / CD-ROM Optiarc DVD RW AD-7280S / Мультимедийные карты Intel Corporation 6 Series/C200 Series Chipset Family High Definition Audio Controller NVIDIA Corporation GF114 HDMI Audio Controller\r\n', 'Приходской дом', 'Информационно-аналитический центр', 'Сигай Ю. Ф.', 'рабочее', 'uploads/20181214145115998.jpg'),
(114, 'Принтер', 'OKI C9655', '-Тип печати: цветная -Технология печати: светодиодная -Размещение: настольный -Область применения: большой офис -Количество страниц в месяц: 150000 -Время разогрева: 85 с -Максимальное разрешение для ч/б печати: 1200x600 dpi -Максимальное разрешение для цветной печати: 1200x600 dpi -Скорость печати: 40 стр/мин (ч/б А4), 36 стр/мин (цветн. А4), 21 стр/мин (ч/б А3), 19 стр/мин (цветн. А3)', 'Приходской дом', 'Информационно-аналитический центр', 'Сигай Ю. Ф.', 'рабочее', 'uploads/20181214145520903.jpg'),
(115, 'Принтер', 'EPSON Stylus PHOTO 1410', '-Тип печати: цветная -Технология печати: пьезоэлектрическая струйная -Размещение: настольный -Область применения: персональный -Максимальный формат: A3 -Печать без полей: есть -Максимальное разрешение для цветной печати: 5760x1440 dpi -Время печати 10x15 см (цветн.): 46 с -Количество цветов: 6', 'Приходской дом', 'Информационно-аналитический центр', 'Сигай Ю. Ф.', 'рабочее', 'uploads/20181214145707234.jpg'),
(116, 'Принтер', 'HP LaserJet P2055d', '-Тип печати: черно-белая -Технология печати: лазерная -Размещение: настольный -Область применения: средний офис -Количество страниц в месяц: 50000 -Максимальный формат: A4 -Максимальное разрешение для ч/б печати: 1200x1200 dpi -Скорость печати: 33 стр/мин (ч/б А4) -Автоматичесkая двусторонняя печать: есть', 'Приходской дом', 'Информационно-аналитический центр', 'Сигай Ю. Ф.', 'рабочее', 'uploads/20181214145846866.jpg'),
(117, 'Сканер', 'HP Scanjet G4010', '-Тип датчика: CCD -Совместимость: PC -Интерфейс: USB 2.0 -Слайд-адаптер: есть -Тип: планшетный -Глубина цвета (внешн.): 96 бит -Скорость сканирования (ч/б): А4 - 29 с, слайд - 6 с. -Скорость сканирования (цветн.): А4 - 29 с, слайд - 6 с. -Разрешение: 4800x4800 dpi -Максимальный размер слайда: 35x35 мм', 'Приходской дом', 'Информационно-аналитический центр', 'Сигай Ю. Ф.', 'рабочее', 'uploads/20181214150110555.jpg'),
(118, 'Ламинатор', 'Bulros PDA3-330SL', 'Полупрофессиональный пакетный ламинатор, А3, скор. 1600 мм/мин, 250 мкм, 4 вала, цифр. регулировка темп. и скорости, цифр. индикатор, реверс, корпус металл, вес 12,0 кг', 'Приходской дом', 'Информационно-аналитический центр', 'Сигай Ю. Ф.', 'рабочее', 'uploads/20181214150342621.jpg'),
(119, 'Резак', 'IDEAL 1038', 'Тип: Сабельный Длина реза, мм: 385 Высота стопы, листов: 50 Прижим стопы: Ручной Вес, кг: 9 Габариты (ШхГхВ), мм: 575x410x260 Страна производства: Германия', 'Приходской дом', 'Информационно-аналитический центр', 'Сигай Ю. Ф.', 'рабочее', 'uploads/20181214150525981.jpg'),
(120, 'Переплeтчик', 'GLADWORK CB-25', '-Тип: пружинный механический-Формат бумаги: A4-Толщина переплета: 500 листов-Тип отверстия: прямоугольные-Одновременная перфорация: 25 л листов-Настройка глубины перфорации: Есть-Шаг перфорации: 2:1-Материал корпуса: пластик-Материал пружины: пластиковая-Селектор пружины: Нет', 'Приходской дом', 'Информационно-аналитический центр', 'Сигай Ю. Ф.', 'рабочее', 'uploads/20181217131739373.jpg'),
(121, 'Степлеp', 'KW-Trio 5000', 'Тип степлера	мощный/Одновременно скрепляемых листов	200/Глубина прошивки	250 мм/Использование скоб 23/6	есть/Использование скоб 23/8	есть/Использование скоб 23/10	есть/Использование скоб 23/13	есть/Использование скоб 23/15	есть/Использование скоб 23/17	есть/Использование скоб 23/20	есть/Использование скоб 23/23	есть/Особенности	Мощный брошюровочный степлер до 200 листов, глубина загрузки бумаги до 250мм./Материал	металл/пластик/Цвет	серый и черный/Страна производитель	Тайвань (Китай)', 'Приходской дом', 'Информационно-аналитический центр', 'Сигай Ю. Ф.', 'рабочее', 'uploads/20181214150948611.jpg'),
(122, 'Термопeреплётчик', 'FASTBIND SECURA', 'Максимальный формат блока, мм: 320x235 /Минимальная толщина блока, мм: 0.2 /Максимальная толщина блока, мм: 40 /Максимальная плотность обложки, г/м&sup2;: 400 /Производительность, блоков/час: 120 /Автоматический режим: Нет /Фрезерование корешка: Нет /Устройство удаления дыма и отходов: Нет /Подрезка обложки: Нет /Стол-подставка: Нет /Подача обложки: Ручная /Напряжение, В: 220 /Мощность, Вт: 660 /Вес, кг: 32 /Габариты (ШхГхВ), мм: 660x330x430 /Страна производства: Финляндия', 'Приходской дом', 'Информационно-аналитический центр', 'Сигай Ю. Ф.', 'рабочее', 'uploads/20181214151146617.jpg'),
(126, 'Персональный компьютер (сборный)', 'Монитор ACER AL 1917', 'Мышь комп. GENIUS&bull;Клавиатура GENIUS&bull;Динамик GENIUS&bull;Сетевые фильтры 6 гнезд&bull;Блок питания ATX&bull;DVD-RW&bull;Мат-плата MSI&bull;Жест. Диск 250 Гб', 'Административный корпус', 'Бухгалтерия', 'Каштанова Л.П.', 'рабочее', 'uploads/20181216012657670.jpg'),
(127, 'Принтер', 'Canon i-SENSYS LBP6030B', '-Устройство: принтер&bull;Тип печати: черно-белая&bull;Технология печати: лазерная&bull;Размещение: настольный&bull;Область применения: персональный&bull;Количество страниц в месяц: 5000&bull;Максимальный формат: A4&bull;Время выхода первого отпечатка: 7.80 c (ч/б)&bull;Максимальное разрешение для ч/б печати: 600x600 dpi&bull;Время разогрева: 10 с', 'Административный корпус', 'Бухгалтерия', 'Каштанова Л.П.', 'рабочее', 'uploads/20181216012818969.jpg'),
(128, 'Персональный компьютер (сборный)', 'Монитор ACER AL 1917', 'Мышь комп. GENIUS&bull;Клавиатура GENIUS&bull;Динамик GENIUS&bull;Сетевые фильтры 6 гнезд&bull;Блок питания ATX&bull;DVD-RW&bull;Мат-плата MSI&bull;Жест. Диск 250 Гб', 'Административный корпус', 'Бухгалтерия', 'Некрасова О.И.', 'рабочее', 'uploads/20181216012945741.jpg'),
(129, 'Принтер', 'Canon LASER SHOT LBP-1120', 'Устройство: принтер&bull;Тип печати: черно-белая &bull;Технология печати: лазерная &bull;Область применения: персональный&bull;Количество страниц в месяц: 7000&bull;Максимальное разрешение для ч/б печати: 600x600 dpi&bull;Время выхода первого отпечатка: 18 c (ч/б)&bull;Максимальный формат: A4&bull;Скорость печати: 10 стр/мин (ч/б А4) &bull;Вывод бумаги: 50 лист. (стандартный)', 'Административный корпус', 'Бухгалтерия', 'Некрасова О.И.', 'рабочее', 'uploads/20181216013416243.jpg'),
(130, 'Персональный компьютер (сборный)', 'монитор Samsung SyncMaster 913 [19&quot; LCD] /процессор DualCore AMD Athlon 64 X2, 2500 MHz (12.5 x 200) 4800+', 'Многопроцессорный компьютер с ACPI&bull;Операционная система Microsoft Windows XP Professional&bull;Системная плата:&bull;Тип ЦП DualCore AMD Athlon 64 X2, 2500 MHz (12.5 x 200) 4800+&bull;Системная плата Acer F690GVM&bull;Чипсет системной платы AMD 690G, AMD Hammer&bull;Системная память[ TRIAL VERSION ]&bull;DIMM1: Patriot Memory PSD21G8002&bull;1 ГБ DDR2-800 DDR2 SDRAM (5-5-5-16 @ 400 МГц) (4-4-4-11 @ 266 МГц) (3-3-3-8 @ 200 МГц)&bull;DIMM2: Patriot Memory PSD21G8002&bull;[ TRIAL VERSION ]&bull;Тип BIOS Award (06/25/07)&bull;Видеоадаптер ATI Radeon X1250 (256 МБ)&bull;Дисковый накопитель ST3250410AS (250 ГБ, 7200 RPM, SATA-II)&bull;Оптический накопитель TSSTcorp CDDVDW SH-S203D &bull;DVD+RW/DVD-RW/DVD-RAM)&bull;Клавиатура&bull;Мышь', 'Административный корпус', 'Канцелярия', 'Дмитриенко Н.А.', 'рабочее', 'uploads/20181216013932954.jpg'),
(131, 'Принтер', 'Canon i-SENSYS LBP6030B', '-Устройство: принтер&bull;Тип печати: черно-белая&bull;Технология печати: лазерная&bull;Размещение: настольный&bull;Область применения: персональный&bull;Количество страниц в месяц: 5000&bull;Максимальный формат: A4&bull;Время выхода первого отпечатка: 7.80 c (ч/б)&bull;Максимальное разрешение для ч/б печати: 600x600 dpi&bull;Время разогрева: 10 с', 'Административный корпус', 'Канцелярия', 'Дмитриенко Н.А.', 'рабочее', 'uploads/20181216014323498.jpg'),
(132, 'Факс', 'PANASONIC KX-F580', '-Тип печати: печать на термобумаге&bull;Проводная трубка: Есть&bull;-Скорость модема: 9.6 Кбит/с&bull;-Число оттенков серого: 64&bull;-Тип бумаги: рулон&bull;-Авторезак для бумаги: Есть&bull;-Емкость устройства автоподачи: 15 листов&bull;-Однокнопочный набор: 10 кнопок&bull;-Регулятор громкости в трубке: Нет&bull;-Спикерфон: Есть', 'Административный корпус', 'Канцелярия', 'Дмитриенко Н.А.', 'рабочее', 'uploads/20181216014805843.jpg'),
(133, 'Персональный компьютер (сборный)', 'Монитор HP W2072a', '', 'Административный корпус', 'Канцелярия', 'Самойленко А.П.', 'рабочее', 'uploads/20181216015151477.jpg'),
(134, 'Принтер', 'HP LaserJet Pro MFP M125ra', '-Устройство: принтер/сканер/копир&bull;Тип печати: черно-белая&bull;Технология печати: лазерная&bull;Размещение: настольный&bull;Область применения: персональный&bull;Количество страниц в месяц: 8000&bull;Максимальное разрешение для ч/б печати: 600x600 dpi&bull;Скорость печати: 20 стр/мин (ч/б А4)&bull;Время выхода первого отпечатка: 9.50 c (ч/б)&bull;Максимальный формат: A4', 'Административный корпус', 'Канцелярия', 'Самойленко А.П.', 'рабочее', 'uploads/20181216015615124.jpg'),
(135, 'Принтер', 'EPSON L110', '-Устройство: принтер&bull;Тип печати: цветная&bull;Технология печати: пьезоэлектрическая струйная&bull;Размещение: настольный&bull;Область применения: персональный&bull;Максимальное разрешение для цветной печати: 5760x1440 dpi&bull;Максимальный формат: A4&bull;Печать фотографий: есть&bull;Количество цветов: 4&bull;Минимальный объем капли: 3 пл', 'Административный корпус', 'Канцелярия', 'Самойленко А.П.', 'рабочее', 'uploads/20181224203533106.jpg'),
(136, 'Копировальный аппарат', 'Canon FC128', 'Функции устройства&bull;копир&bull;Принтер&bull;Технология печати&bull;лазерная&bull;Цветность печати&bull;черно-белая&bull;Максимальный формат&bull;A4&bull;Автоматическая двусторонняя печать&bull;нет&bull;Максимальное разрешение чёрно-белой печати&bull;600x600 dpi&bull;Скорость чёрно-белой печати (стр/мин)&bull;4 стр/мин (А4)&bull;Время выхода первого чёрно-белого отпечатка (сек.)&bull;22 сек.&bull;Количество страниц в месяц&bull;1000&bull;Сканер&bull;Оптическое разрешение сканера&bull;600x600 dpi&bull;Максимальный формат бумаги (сканер)&bull;A4 (297х210)&bull;Устройство автоподачи&bull;нет&bull;Копир&bull;Максимальное разрешение копира&bull;600x600 dpi&bull;Скороcть копирования (стр/мин)&bull;4 стр/мин&bull;Максимальное количество копий за цикл&bull;9&bull;Лотки&bull;Ёмкость лотка ручной подачи&bull;50 листов', 'Административный корпус', 'Канцелярия', 'Головина Г.В.', 'рабочее', 'uploads/20181216020301807.jpg'),
(137, 'Персональный компьютер (сборный)', 'Монитор ASUS', '', 'Административный корпус', 'Канцелярия', 'Головина Г.В.', 'рабочее', 'uploads/20181216020422903.jpg'),
(138, 'Принтер', 'HP Photosmart 7450', '-Устройство: принтер&bull;Тип печати: цветная&bull;Технология печати: термическая струйная&bull;Размещение: настольный&bull;Область применения: персональный&bull;Количество страниц в месяц: 1000&bull;Печать фотографий: есть&bull;Количество цветов: 6&bull;Максимальный формат: A4&bull;Время печати 10x15 см (цветн.): 36 с', 'Административный корпус', 'Канцелярия', 'Головина Г.В.', 'рабочее', 'uploads/20181216020739529.jpg'),
(139, 'Принтер', 'HP LaserJet Pro M104a', 'Партномер G3Q36AСтрана-изготовитель Вьетнам&bull;Цвет белый Цветность печати Монохромное Количество цветов 1Макс. формат печатиA4 (210 x 297 мм)Форматы печатных материаловA4 (210 x 297 мм), A5 (148 x 210 мм), A6 (105 x 148 мм), B5 (176 x 250 мм), конверты, почтовые открытки&bull;Разрешение печати 1200x1200 dpi, 600x600 dpi&bull;Макс. скорость печати (ч/б), стр/мин22Выход первой страницы, с7,3Нагрузка в месяц 10000 страницЛоток подачи, листов 150Выходной лоток, листов 1', 'Административный корпус', 'Канцелярия', 'Головина Г.В.', 'рабочее', 'uploads/20181216020947692.jpg'),
(140, 'Принтер', 'HP LaserJet 1018', '-Устройство: принтер&bull;Тип печати: черно-белая&bull;Технология печати: лазерная&bull;Размещение: настольный&bull;Область применения: персональный&bull;Количество страниц в месяц: 3000&bull;Скорость печати: 12 стр/мин (ч/б А4)&bull;Максимальное разрешение для ч/б печати: 600x600 dpi&bull;Максимальный формат: A4&bull;Время выхода первого отпечатка: 10 c (ч/б)', 'Административный корпус', 'Канцелярия', '', 'рабочее', 'uploads/20181216021711149.jpg'),
(141, 'Персональный компьютер (сборный)', '', '', 'Административный корпус', 'Канцелярия', '', 'рабочее', 'uploads/20181216021753657.jpg'),
(142, 'Кондиционер', 'TOSHIBA ras-22n3kv-e ras-22n3av-e', '-Тип: настенная сплит-система&bull;Инвертор (плавная регулировка мощности): есть&bull;Длина охвата: 20 м&bull;Возможные режимы: охлаждение / обогрев&bull;Воздушный поток: 18.3 куб. м/мин&bull;Функция охлаждения: 22000 BTU&bull;Мощность охлаждения: 6000 Вт&bull;Мощность обогрева: 7000 Вт&bull;Потребляемая мощность при обогреве: 2050 Вт&bull;Потребляемая мощность при охлаждении: 1990 Вт&bull;Режим приточной вентиляции: нет&bull;Другие режимы: режим вентиляции (без охлаждения и обогрева), автоматический режим, самодиагностика неисправностей&bull;Функция осушения: есть', 'Административный корпус', 'Коридор', 'Каневников А. А.', 'рабочее', 'uploads/20181216022416352.jpg'),
(143, 'Персональный компьютер (сборный)', 'Монитор BenQ GL2450H [24', 'Тип компьютера ACPI x64-based PC&bull;Операционная система Microsoft Windows 7 Professional&bull;Системная плата Gigabyte GA-F2A55M-S1 (1 PCI, 1 PCI-E x1, 1 PCI-E x16, 2 DDR3 DIMM, Audio, Video, Gigabit LAN)&bull;Чипсет системной платы AMD A55, AMD K15.1&bull;Системная память [ TRIAL VERSION ]&bull;DIMM3:&bull;Samsung M378B5673GB0-CH9 [ TRIAL VERSION ]&bull;DIMM4: Kingston 99U5595-001.A00LF [ TRIAL VERSION ]&bull;Видеоадаптер NVIDIA GeForce 210 (512 МБ)&bull;Дисковый накопитель WDC&bull;WD5000AAKX-08U6AA0 ATA Device (500 ГБ, 7200 RPM, SATA-III)&bull;Оптический накопитель TSSTcorp CDDVDW SH-224DB ATA Device&bull;Клавиатура Клавиатура HID&bull;Мышь PS/2-совместимая мышь', 'Приходской дом', 'Ризница', 'Водопьянова Е.М.', 'рабочее', 'uploads/20181216022635682.jpg'),
(144, 'Принтер', 'Canon i-SENSYS LBP6030B', '-Устройство: принтер&bull;Тип печати: черно-белая&bull;Технология печати: лазерная&bull;Размещение: настольный&bull;Область применения: персональный&bull;Количество страниц в месяц: 5000&bull;Максимальный формат: A4&bull;Время выхода первого отпечатка: 7.80 c (ч/б)&bull;Максимальное разрешение для ч/б печати: 600x600 dpi&bull;Время разогрева: 10 с', 'Приходской дом', 'Ризница', 'Водопьянова Е.М.', 'рабочее', 'uploads/20181216022904438.jpg'),
(145, 'Персонaльный компьютер (ноутбук)', 'Acer/Aspire E1-571G', 'Тип жесткого диска: HDD&bull;Размер&bull;HDD диска: 750 ГБ&bull;Размер оперативной памяти: 6 ГБ&bull;Разрешение: 1366x768&bull;Диагональ: 15.6 &quot; null,1,&quot;11748&bull;Операционная система: Linux / Windows 8 64&bull;Частота процессора: 2600 МГц&bull;Количество ядер процессора: 2&bull;Чипсет: Intel HM77&bull;Объем жесткого диска: 750 ГБ', 'Приходской дом', 'Актовый зал', '', 'рабочее', 'uploads/20181224230723575.jpg'),
(146, 'Цифровое фортепиано', 'Casio Celviano AP-650', '-Тип: синтезатор\\r\\n-Обучение: Есть\\r\\n-Жесткость клавиатуры: взвешенная\\r\\n-Разделение клавиатуры: Есть\\r\\n-Чувствительность клавиатуры к касанию: Есть\\r\\n-Количество клавиш: 88\\r\\n-Педали: встроенные\\r\\n-Контроллер изменения высоты тона: Есть\\r\\n-Встроенная акустическая система: Есть\\r\\n-Дисплей: Есть', 'Приходской дом', 'Актовый зал', '', 'рабочее', 'uploads/20181224231158879.jpg'),
(147, 'Акустическая система количество: 2 шт.', 'BEHRINGER Eurolive F1320D', '-Тип: концертная, активная, фазоинверторного типа \\r\\n-Акустическое излучение: монополярная \\r\\n-Состав комплекта: 1 громкоговоритель \\r\\n-Количество полос: 2 \\r\\n-Мощность: 200 Вт \\r\\n-Максимальное звуковое давление: 118 дБ SPL \\r\\n-Диапазон воспроизводимых частот: 60-16000 Гц (-10 дБ)  \\r\\n-Раздельное усиление НЧ и ВЧ (Bi-amping): есть \\r\\n-Интерфейсы: балансный вход \\r\\n-Разъем для подключения к усилителю мощности: jack 6.3 мм', 'Приходской дом', 'Актовый зал', '', 'рабочее', 'uploads/20181224231803727.jpg'),
(149, 'Акустическая система количество: 2 шт.', 'BEHRINGER Eurolive B215D', '-Тип: концертная, активная, фазоинверторного типа \\r\\n-Акустическое излучение: монополярная \\r\\n-Количество полос: 2 \\r\\n-Мощность: 345 Вт \\r\\n-Максимальная мощность: 550 Вт \\r\\n-Диапазон воспроизводимых частот: 65-20000 Гц  \\r\\n-Частота кроссовера: 1.9 кГц \\r\\n-Раздельное усиление НЧ и ВЧ (Bi-amping): есть \\r\\n-Интерфейсы: балансный вход \\r\\n-Разъем для подключения к усилителю мощности: jack 6.3 мм', 'Приходской дом', 'Актовый зал', '', 'рабочее', 'uploads/20181224232655874.jpg'),
(151, 'Микрофoн количество: 2 шт.', 'Shure PGA48-XLR', '-Назначение: профессиональный\\r\\n-Вид: студийный\\r\\n-Тип: динамический\\r\\n-Беспроводной (радиосигнал): Нет\\r\\n-Радиус действия: 4.5 м\\r\\n-Полярность: направленный\\r\\n-Сопротивление: 600 Ом\\r\\n-Нижнее значение частот: 70 Гц\\r\\n-Верхнее значение частот: 15 000 Гц\\r\\n-XLR: Есть', 'Приходской дом', 'Актовый зал', '', 'рабочее', 'uploads/20181224233538215.jpg'),
(152, 'Проектoр', 'DELL 7700FullHD', '-Класс устройства: стационарный \\r\\n-Широкоформатный: да \\r\\n-Реальное разрешение: 1920x1080 (Full HD) \\r\\n-Поддержка HDTV: есть \\r\\n-Рекомендуемая область применения: для домашнего кинотеатра \\r\\n-Тип устройства: DLP \\r\\n-Мощность лампы: 400 Вт \\r\\n-Количество ламп: 1 \\r\\n-Срок службы лампы: 1500 часов \\r\\n-Срок службы лампы в экономичном режиме: 2000 часов', 'Приходской дом', 'Актовый зал', '', 'рабочее', 'uploads/20181224235245128.jpg'),
(153, 'Микшерный пульт', 'YAMAHA MG166C', 'Количество каналов	16\\r\\nМикрофонный вход	8 комбинированных XLR / TRS\\r\\nЛинейный вход	4 стерео входа 1/4, 2 входа RCA\\r\\nПроцессор эффектов	SPX на 16 каналов\\r\\nAUX	REC in/out\\r\\nФильтр	HPF\\r\\nИнтерфейс	Insert I/O\\r\\nдополнительно	крепления для рэка', 'Приходской дом', 'Актовый зал', '', 'рабочее', 'uploads/20181224235833225.jpg'),
(154, 'Экран для проектора', 'Draper Baronet AV', '(1:1) 96/96\\&quot; 244*244 XT1000E (MW) MB (with black borders)', 'Приходской дом', 'Актовый зал', '', 'рабочее', 'uploads/20181225002910476.jpg'),
(155, 'DVD ПЛЕЕР', 'BBK DV313SI', '-Тип: DVD-плеер \\r\\n-Функция караоке: есть, один микрофонный вход \\r\\n-Прогрессивная развертка: есть \\r\\n-Видео ЦАП: 12 бит / 108 МГц \\r\\n-Коэффициент гармоник: 0.01 % \\r\\n-Отношение сигнал/шум (аудио): 100 дБ \\r\\n-Аудио ЦАП: 24 бит / 96 кГц \\r\\n-Подключаемые носители: DVD, DVD R, DVD RW, CD, CD-R, CD-RW \\r\\n-Форматы и разрешения: MP3, WMA, MPEG4, VideoCD, SVCD, HDCD, JPEG, Picture CD \\r\\n-Выходы: композитный, S-video, компонентный, SCART, аудио стерео, аудио оптический, аудио коаксиальный', 'Приходской дом', 'Актовый зал', '', '?', 'uploads/20181225003402178.jpg'),
(156, 'DVD ПЛЕЕР', 'Samsung DVD-D530K', '-Тип: DVD-плеер \\r\\n-Масштабирование изображения: HDTV \\r\\n-Функция караоке: есть, один микрофонный вход \\r\\n-Прогрессивная развертка: есть \\r\\n-Разрешение выходного сигнала (HD): 720p, 1080i, 1080p \\r\\n-Видео ЦАП: 12 бит / 148 МГц \\r\\n-Аудио ЦАП: 24 бит / 192 кГц \\r\\n-Подключаемые носители: DVD, DVD R, DVD RW, CD, CD-R, CD-RW \\r\\n-Форматы и разрешения: MP3, WMA, MPEG4, DivX, VideoCD, SVCD, JPEG \\r\\n-Выходы: композитный, компонентный, HDMI, аудио стерео, аудио коаксиальный', 'Приходской дом', 'Актовый зал', '', '?', 'uploads/20181225003908775.jpg'),
(157, 'Микшер-усилитель', 'Apart MA200', 'мощность	200 Вт\\r\\nвыходное напряжение	100, 70, 50 В\\r\\nнизкоомный выход	8 Ом\\r\\nвходы	3 микрофонных входа, 1 микрофонный/линейный вход, входы AUX/CD/TUNER (селективный)\\r\\nдополнительные	Аварийный Emergency / telephone вход, выход предварительного и вход оконечного усилителя\\r\\nвыход	линейный (rec)\\r\\nприоритетные входы	1. Аварийный Emergency / telephone\\r\\n-	2. первый микрофонный\\r\\nпитание	220В АС, 24В DC\\r\\nгабариты	430(W) x 88(H) x 356(D) мм\\r\\nвес	12 кг', 'Храм', 'Алтарь', '', 'рабочее', 'uploads/20181225005432439.jpg'),
(158, 'Персональный компьютер (сборный)', 'Монитор LG E2242V/Процесор', 'Тип компьютера ACPI x64-based PC&bull;Операционная система Microsoft Windows 7 Professional&bull;Системная плата Gigabyte GA-F2A55M-S1 (1 PCI, 1 PCI-E x1, 1 PCI-E x16, 2 DDR3 DIMM, Audio, Video, Gigabit LAN)&bull;Чипсет системной платы AMD A55, AMD K15.1&bull;Системная память [ TRIAL VERSION ]&bull;DIMM3:&bull;Samsung M378B5673GB0-CH9 [ TRIAL VERSION ]&bull;DIMM4: Kingston 99U5595-001.A00LF [ TRIAL VERSION ]&bull;Видеоадаптер NVIDIA GeForce 210 (512 МБ)&bull;Дисковый накопитель WDC&bull;WD5000AAKX-08U6AA0 ATA Device (500 ГБ, 7200 RPM, SATA-III)&bull;Оптический накопитель TSSTcorp CDDVDW SH-224DB ATA Device&bull;Клавиатура Клавиатура HID&bull;Мышь PS/2-совместимая мышь', 'Приходской дом', 'Учебный класс 4', '', 'рабочее', 'uploads/20181225010054917.jpg'),
(159, 'Телевизор', 'LG 50LN575S', 'Доступ в интернет (Smart TV): есть\\r\\nТип матрицы: TFT IPS\\r\\nРазрешение: 1920x1080\\r\\nДиагональ: 50\\&quot; (127 см)\\r\\nТип: ЖК-телевизор\\r\\nВходы: AV, компонентный, SCART, RGB, HDMI x3, MHL, USB x3, Ethernet (RJ-45), Wi-Fi, WiDi, Miracast', 'Приходской дом', 'Учебный класс 4', '', 'рабочее', 'uploads/20181225010718126.jpg'),
(160, 'Принтер', 'Canon i-SENSYS LBP6030B', '-Устройство: принтер&bull;Тип печати: черно-белая&bull;Технология печати: лазерная&bull;Размещение: настольный&bull;Область применения: персональный&bull;Количество страниц в месяц: 5000&bull;Максимальный формат: A4&bull;Время выхода первого отпечатка: 7.80 c (ч/б)&bull;Максимальное разрешение для ч/б печати: 600x600 dpi&bull;Время разогрева: 10 с', 'Храм', 'Древлехранилище', '', 'рабочее', 'uploads/20181225011747868.jpg'),
(161, 'Персональный компьютер (сборный)', 'Монитор AOC e2050S', 'Мышь комп. GENIUS&bull;Клавиатура GENIUS&bull;Динамик GENIUS&bull;Сетевые фильтры 6 гнезд&bull;Блок питания ATX&bull;DVD-RW&bull;Мат-плата MSI&bull;Жест. Диск 250 Гб', 'Храм', 'Древлехранилище', '', 'рабочее', 'uploads/20181225012129831.jpg'),
(162, 'Телевизор', 'LG 47LX6900', 'Угол обзора: 178&deg;/Разрешение: 1920x1080/Диагональ: 47&quot; (119 см)/Тип: ЖК-телевизор/Входы: AV x2, компонентный, SCART, RGB, VGA, HDMI x4, USB x2, RS-232, Ethernet (RJ-45), Wi-Fi', 'Приходской дом', 'Учебный класс 3', '', 'рабочее', 'uploads/20181225012626545.jpg'),
(163, 'Домашний кинотеатр', 'LG HT304', '-Количество загружаемых дисков: 1 \\r\\n-Цвет акустических систем: черный \\r\\n-Цвет основного блока: черный \\r\\n-Комплект акустических систем: 5.1 \\r\\n-Режим караоке: есть \\r\\n-Основной блок: одноблочная система \\r\\n-Декодеры: Dolby Digital, Dolby Pro Logic II \\r\\n-Суммарная мощность колонок (RMS): 300 Вт \\r\\n-Прогрессивная развертка: есть \\r\\n-Поддерживаемые носители: CD, CD-R, CD-RW, DVD, DVD R, DVD RW', 'Приходской дом', 'Учебный класс 3', '', 'рабочее', 'uploads/20181225013347523.jpg'),
(164, 'Универсальная домашняя аудиосистема', 'Pioneer X-SMC5-K', '-Тип: микросистема -Главные блок: одноблочная система -Привод: DVD -Поддержка iPod: есть -Цвет колонок: черный -Цвет устройства: черный -Комплект акустических систем: 2.0 -Выходная мощность: 40 Вт -Регулировка: тембра НЧ, тембра ВЧ -Мощность фронтальных колонок: 2x20 Вт', 'Приходской дом', 'Учебный класс 3', '', 'рабочее', 'uploads/20181225013429224.jpg'),
(165, 'Персональный компьютер (сборный)', 'Монитор ACER 22 дюймa/Сист. блок ATX', 'Мышь комп. 4 TECH&bull;Клавиатура 4 TECH&bull;Динамик GENIUS&bull;Сетевые фильтры 6 гнезд&bull;Блок питания ATX&bull;DVD-RW&bull;Мат-плата GIGBYTE&bull;Жест.Диск 500 Гб&bull;Процессор INTEL E 5700', 'Приходской дом', 'Учебный класс 1', '', 'рабочее', 'uploads/20181225014759651.jpg'),
(166, 'Принтер', 'HP LaserJet Pro P1102 RU', '-Устройство: принтер&bull;Тип печати: черно-белая&bull;Технология печати: лазерная&bull;Размещение: настольный&bull;Область применения: персональный&bull;Количество страниц в месяц: 5000&bull;Максимальное разрешение для ч/б печати: 600x600 dpi&bull;Максимальный формат: A4 &bull;Время выхода первого отпечатка: 8.50 c (ч/б)&bull;Скорость печати: 18 стр/мин (ч/б А4)', 'Приходской дом', 'Учебный класс 1', '', 'рабочее', 'uploads/20181225015229502.jpg'),
(167, 'Многофункциональное устройство', 'Canon PIXMA MP270', '-Устройство: принтер/сканер/копир \\r\\n-Тип печати: цветная -Технология печати: термическая струйная -Размещение: настольный -Область применения: персональный -Печать фотографий: есть -Количество цветов: 4 -Время печати 10x15 см (цветн.): 45 с -Минимальный объем капли: 2 пл -Печать без полей: есть \\r\\n', 'Приходской дом', 'Учебный класс 1', '', 'рабочее', 'uploads/20181225015634781.jpg'),
(168, 'Телевизор', 'LG 47LX6900', 'Угол обзора: 178&deg;/Разрешение: 1920x1080/Диагональ: 47\\&quot; (119 см)/Тип: ЖК-телевизор/Входы: AV x2, компонентный, SCART, RGB, VGA, HDMI x4, USB x2, RS-232, Ethernet (RJ-45), Wi-Fi', 'Приходской дом', 'Учебный класс 1', '', 'рабочее', 'uploads/20181225015824377.jpg'),
(169, 'Персональный компьютер (сборный)', 'Монитор ACER 22 дюймa/Сист. блок ATX', 'Блок бесперебойного питания Ippon BPP700/Мышь комп. 4 TECH&bull;Клавиатура 4 TECH&bull;Динамик GENIUS&bull;Сетевые фильтры 6 гнезд&bull;Блок питания ATX&bull;DVD-RW&bull;Мат-плата GIGBYTE&bull;Жест.Диск 500 Гб&bull;Процессор INTEL E 5700', 'Приходской дом', 'Учебный класс 1а', '', 'рабочее', 'uploads/20181225021229225.jpg'),
(170, 'Телевизор', 'LG 47LX6900', 'Угол обзора: 178&deg;/Разрешение: 1920x1080/Диагональ: 47\\\\\\&quot; (119 см)/Тип: ЖК-телевизор/Входы: AV x2, компонентный, SCART, RGB, VGA, HDMI x4, USB x2, RS-232, Ethernet (RJ-45), Wi-Fi', 'Приходской дом', 'Учебный класс 1а', '', 'рабочее', 'uploads/20181225021442198.jpg'),
(171, 'Экран для проектора', '', '', 'Приходской дом', 'Учебный класс 2', '', '', 'uploads/20181225023041957.jpg'),
(172, '', '', '', 'Приходской дом', 'Учебный класс 2', '', '', 'uploads/20181225023200122.jpg'),
(173, '', '', '', 'Приходской дом', 'Учебный класс 2', '', '', 'uploads/20181225023222914.jpg'),
(174, '', '', '', 'Приходской дом', 'Учебный класс 2', '', '', 'uploads/20181225023247730.jpg'),
(175, 'Кондиционер', '', '', 'Храм', 'Алтарь', '', '', 'uploads/20181225095645260.jpg'),
(176, 'Телевизор', 'Philips 17PF9946', 'Угол обзора: 170&deg;\\r\\nРазрешение: 1280x768\\r\\nДиагональ: 17\\&quot; null,1,\\&quot;11076\\r\\nТип: ЖК-телевизор\\r\\nВходы: AV, S-Video, SCART x2, RGB, VGA', 'Приходской дом', 'Покои Настоятеля', 'Липилин С.В.', 'рабочее', 'uploads/20181225100734216.jpg'),
(177, 'Газовая варочная панель/Духовой шкаф', 'Bosch PBP6C6B90', '-Тип поверхности: варочная\\r\\n-Способ подключения: газовая\\r\\n-Установка: независимая\\r\\n-Рабочая поверхность: эмаль\\r\\n-Дизайн ДОМИНО: Нет\\r\\n-Чугунные решетки: Есть\\r\\n-Рамка: Нет\\r\\n-Максимальная потребляемая мощность: 7.4 кВт\\r\\n-Глубина: 49 см\\r\\n-Ширина: 56 см', 'Приходской дом', 'Покои Настоятеля', 'Липилин С.В.', 'рабочее', 'uploads/20181225102718431.jpg'),
(178, 'Отопительный котел', 'Baxi MAIN 24 i', '-Тип отопительного котла: газовый\\r\\n-Число контуров: двухконтурный\\r\\n-Минимальная мощность обогрева: 9.3 кВт\\r\\n-Максимальная мощность обогрева: 24 кВт\\r\\n-КПД: 90.3 %\\r\\n-Способ установки: настенный\\r\\n-Тип горелки: газовая\\r\\n-Камера сгорания: открытая\\r\\n-Энергонезависимый: Нет\\r\\n-Автоподжиг: Есть\\r\\n-Модуляция пламени: Нет\\r\\n-Бункер в комплекте: Нет\\r\\n-Встроенный бойлер: Нет\\r\\n-Подключение теплого пола: Нет\\r\\n-Нагнетательный вентилятор: Нет\\r\\n-Вытяжной вентилятор: Нет', 'Приходской дом', 'Покои Настоятеля', 'Липилин С.В.', 'рабочее', 'uploads/20181225104225589.jpg'),
(179, 'Кондиционер', 'General Climate GC-MA09HRN1', '-Тип кондиционера: внутренний блок\\r\\n-Тип внутреннего блока: настенный\\r\\n-Режимы работы: охлаждение / обогрев\\r\\n-Инверторное управление мощностью: Нет\\r\\n-Макс. воздушный поток: 8.5 м3/мин\\r\\n-1-ый внутренний блок: 2 900 Вт\\r\\n-При обогреве: 40 Вт\\r\\n-При охлаждении: 36 Вт\\r\\n-В режиме охлаждения: 18 &deg;С\\r\\n-В режиме обогрева: -7 &deg;С', 'Приходской дом', 'Покои Настоятеля', 'Липилин С.В.', 'рабочее', 'uploads/20181225104555296.jpg'),
(180, 'Радиотелефон', 'Siemens Gigaset 3015 Classic', '-Радиус действия в помещении: 50 м \\r\\n-Рабочая частота: 1880-1900 МГц \\r\\n-Стандарт: DECT/GAP \\r\\n-Комплектация: база, трубка \\r\\n-Вес трубки: 165 г \\r\\n-Дисплей: на трубке \\r\\n-Размеры трубки (ВхШхT): 160х55х28 мм \\r\\n-Цифровой автоответчик: есть, на 15 минут \\r\\n-Громкая связь (спикерфон): есть \\r\\n-Сервис коротких сообщений (SMS): нет', 'Приходской дом', 'Покои Настоятеля', 'Липилин С.В.', 'рабочее', 'uploads/20181225105133962.jpg'),
(181, 'Холодильник', 'Sharp SJ-300SBE', '-Тип: холодильник с морозильником \\r\\n-Расположение: отдельно стоящий \\r\\n-Положение морозильной камеры: сверху \\r\\n-Цвет и материал: бежевый / пластик \\r\\n-Система управления: электромеханическое \\r\\n-Потребление энергии: класс A (295 кВтч/год) \\r\\n-Число камер: 2 \\r\\n-Число дверей: 2 \\r\\n-Размеры: 54.5x61x149.1 см \\r\\n-Сохранение холода: до 12 ч', 'Приходской дом', 'Покои Настоятеля', 'Липилин С.В.', 'рабочее', 'uploads/20181225105832639.jpg'),
(182, 'Стиральная машина', 'Samsung WF-F861', 'Вес: 52 кг\\r\\nУправление: электронное (интеллектуальное)\\r\\nГабариты (ШxГxВ): 60x40x85 см\\r\\nЗагрузка барабана: 4,5 кг.', 'Приходской дом', 'Покои Настоятеля', 'Липилин С.В.', 'рабочее', 'uploads/20181225110141256.jpg'),
(183, 'Телевизор', 'Panasonic TH-R50PY80', 'Угол обзора: 178&deg;\\r\\nРазрешение: 1920x1080\\r\\nДиагональ: 50\\&quot; (127 см)\\r\\nТип: плазменная панель\\r\\nВходы: AV, аудио x3, S-Video, компонентный, SCART x2, RGB, VGA, HDMI x3', 'Приходской дом', 'Покои Настоятеля', 'Липилин С.В.', '?', 'uploads/20181225110422250.jpg'),
(184, 'Телевизор', 'Philips 42PFL9532', 'Угол обзора: 176&deg;\\r\\nРазрешение: 1920x1080\\r\\nДиагональ: 42\\&quot; (106 см)\\r\\nТип: ЖК-телевизор\\r\\nВходы: AV x3, аудио x5, S-Video x2, компонентный x2, HDMI x3, USB, коаксиальный', 'Приходской дом', 'Покои Настоятеля', 'Липилин С.В.', 'рабочее', 'uploads/20181225111658793.jpg'),
(185, 'DVD ПЛЕЕР', 'Panasonic DMR-ES15', '-Тип: DVD-рекордер \\r\\n-TV-тюнер: есть \\r\\n-Запись: на DVD, на DVD DL \\r\\n-Прогрессивная развертка: есть (PAL/NTSC) \\r\\n-Видео ЦАП: 12 бит / 108 МГц \\r\\n-Аудио ЦАП: 24 бит / 192 кГц \\r\\n-Подключаемые носители: DVD, DVD R, DVD RW, DVD-RAM, CD, CD-R, CD-RW \\r\\n-Форматы и разрешения: MP3, MPEG4, DivX, VideoCD, SVCD, DVD-Audio, JPEG \\r\\n-Выходы: композитный, S-video, компонентный, SCART, аудио стерео, аудио коаксиальный \\r\\n-Входы: аудио стерео, композитный, S-Video, DV (IEEE 1394)', 'Приходской дом', 'Покои Настоятеля', 'Липилин С.В.', 'рабочее', 'uploads/20181225111947124.jpg'),
(186, 'Ресивер', 'OPENBOX S6 Pro+ HD', '- NTFS, NTFS format supported &ndash; поддержка файловой системы NTFS на внешних USB носителях информации;\\r\\n\\r\\n- 3G, external via 3G USB modem &ndash; поддержка 3G модемов для выхода в интернет через провайдеров сотовой связи (приобретается отдельно);\\r\\n\\r\\n- EZ-upgrade, system update by network &ndash; обновление системы (прошивок и ПО) через интернет с сервера технической поддержки;\\r\\n\\r\\n- USB DVB-T, USB terrestrial tuner supported &ndash; возможность приема цифрового эфирного ТВ с помощью USB DVB-T тюнера (приобретается отдельно);\\r\\n\\r\\n- Wi-Fi, external via USB 2.0 &ndash; поддержка беспроводной Wi-Fi сети через USB Wi-Fi адаптер (приобретается отдельно);\\r\\n\\r\\n- MKV, movie file supported &ndash; поддержка воспроизведения видео файлов высокого качества mkv;\\r\\n\\r\\n- Web browsing &ndash; наличие встроенного браузера для просмотра страниц в интернете;\\r\\n\\r\\n- You Tube &ndash; возможность просмотра видео с популярного сервиса;\\r\\n\\r\\n- Linux embedded &ndash; встроенный Линукс (дословный перевод), ресивер построен на открытой ОС Linux.', 'Приходской дом', 'Покои Настоятеля', 'Липилин С.В.', 'рабочее', 'uploads/20181225112325630.jpg'),
(187, 'Принтер', 'Epson Stylus Photo T50', '-Устройство: принтер \\r\\n-Тип печати: цветная \\r\\n-Технология печати: пьезоэлектрическая струйная \\r\\n-Размещение: настольный \\r\\n-Область применения: персональный \\r\\n-Количество цветов: 6 \\r\\n-Скорость печати: 37 стр/мин (ч/б А4), 38 стр/мин (цветн. А4) \\r\\n-Максимальное разрешение для цветной печати: 5760x1440 dpi \\r\\n-Максимальный формат: A4 \\r\\n-Печать фотографий: есть', '', '', '', '?', 'uploads/20181225113052530.jpg'),
(188, 'Персональный компьютер (сборный)', 'Монитор BenQ GL2450H [24	Тип компьютера ACPI x64-based PC', '&bull;Операционная система Microsoft Windows 7 Professional&bull;Системная плата Gigabyte GA-F2A55M-S1 (1 PCI, 1 PCI-E x1, 1 PCI-E x16, 2 DDR3 DIMM, Audio, Video, Gigabit LAN)&bull;Чипсет системной платы AMD A55, AMD K15.1&bull;Системная память [ TRIAL VERSION ]&bull;DIMM3:&bull;Samsung M378B5673GB0-CH9 [ TRIAL VERSION ]&bull;DIMM4: Kingston 99U5595-001.A00LF [ TRIAL VERSION ]&bull;Видеоадаптер NVIDIA GeForce 210 (512 МБ)&bull;Дисковый накопитель WDC&bull;WD5000AAKX-08U6AA0 ATA Device (500 ГБ, 7200 RPM, SATA-III)&bull;Оптический накопитель TSSTcorp CDDVDW SH-224DB ATA Device&bull;Клавиатура Клавиатура HID&bull;Мышь PS/2-совместимая мышь', 'Приходской дом', 'Фотоцентр', 'Яхияева Л.М.', 'рабочее', 'uploads/20181225113553824.jpg'),
(189, 'Сканер', 'Epson Perfection V330 Photo', '\\r\\n-Интерфейс: USB 2.0 \\r\\n-Совместимость: PC, MAC, Linux \\r\\n-Тип датчика: CCD \\r\\n-Тип: планшетный \\r\\n-Слайд-адаптер: есть \\r\\n-Глубина цвета: 48 бит \\r\\n-Максимальный размер документа: 216x297 мм \\r\\n-Максимальный формат бумаги: A4 \\r\\n-Глубина цвета (внешн.): 48 бит \\r\\n-Разрешение: 4800x9600 dpi', 'Приходской дом', 'Фотоцентр', 'Яхияева Л.М.', 'рабочее', 'uploads/20181225114154578.jpg'),
(190, 'Принтер', 'HP LaserJet 1018', '-Устройство: принтер&bull;Тип печати: черно-белая&bull;Технология печати: лазерная&bull;Размещение: настольный&bull;Область применения: персональный&bull;Количество страниц в месяц: 3000&bull;Скорость печати: 12 стр/мин (ч/б А4)&bull;Максимальное разрешение для ч/б печати: 600x600 dpi&bull;Максимальный формат: A4&bull;Время выхода первого отпечатка: 10 c (ч/б)', 'Приходской дом', 'Фотоцентр', 'Яхияева Л.М.', 'рабочее', 'uploads/20181225114644764.jpg'),
(191, 'Принтер', 'EPSON Stylus PHOTO 1410', '-Тип печати: цветная -Технология печати: пьезоэлектрическая струйная -Размещение: настольный -Область применения: персональный -Максимальный формат: A3 -Печать без полей: есть -Максимальное разрешение для цветной печати: 5760x1440 dpi -Время печати 10x15 см (цветн.): 46 с -Количество цветов: 6', 'Приходской дом', 'Фотоцентр', 'Яхияева Л.М.', 'рабочее', 'uploads/20181225114830797.jpg'),
(192, 'Монитор', 'Philips Brilliance 107ps', '\\r\\nРазмер экрана: 17\\&quot; null,1,\\&quot;12022', 'Приходской дом', 'Фотоцентр', 'Яхияева Л.М.', '?', 'uploads/20181225115135274.jpg'),
(193, 'Телевизор', '', '', 'Гостевой дом', 'Гостиница', '', '', 'uploads/20181225115427429.jpg'),
(194, 'Кулер', '', '', 'Гостевой дом', 'Гостиница', '', '', 'uploads/20181225115531287.jpg'),
(195, 'Кондиционер', '', '', 'Гостевой дом', 'Гостиница', '', '', 'uploads/20181225115553601.jpg'),
(196, 'Кулер', '', '', 'Административный корпус', 'Канцелярия', '', '', 'uploads/20181225115615926.jpg'),
(197, 'Кондиционер', '', '', 'Административный корпус', 'Кабинет Настоятеля', '', '', 'uploads/20181225115637444.jpg'),
(198, 'Многофункциональное устройство', '', '', 'Приходской дом', 'Информационно-аналитический центр', '', '', 'uploads/20181225115804269.jpg'),
(199, 'Музыкальный центр', '', '', 'Трапезная', 'Трапезная', '', 'рабочее', 'uploads/20181225122313236.jpg'),
(200, 'Музыкальный центр', '', '', 'Административный корпус', 'Административно-хозяйственная часть', '', '?', 'uploads/20181225122632141.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `reestr_rgia`
--

CREATE TABLE `reestr_rgia` (
  `id` int(11) NOT NULL,
  `fond` int(100) NOT NULL,
  `opis` int(100) NOT NULL,
  `delo` int(100) NOT NULL,
  `nach` varchar(100) DEFAULT NULL,
  `okonch` varchar(100) DEFAULT NULL,
  `naimen` varchar(1000) NOT NULL,
  `listov` varchar(100) DEFAULT NULL,
  `prim` varchar(1000) DEFAULT NULL,
  `tom` varchar(100) DEFAULT NULL,
  `zakaz` varchar(100) DEFAULT NULL,
  `poluch` varchar(100) DEFAULT NULL,
  `zakaz_cop` varchar(100) DEFAULT NULL,
  `poluch_cop` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reestr_rgia`
--

INSERT INTO `reestr_rgia` (`id`, `fond`, `opis`, `delo`, `nach`, `okonch`, `naimen`, `listov`, `prim`, `tom`, `zakaz`, `poluch`, `zakaz_cop`, `poluch_cop`) VALUES
(1, 796, 186, 411, '27.07.1904', '03.09.1904', '&laquo;О ревизии Ставропольской духовной семинарии&raquo;', '11', 'фото сделано 7.06.2018; входит в отдельный том дел относящихся к Ставропольской Духовной семинарии', 'I', '24.05.2018', '01.06.2018', 'Фотокопия сделана: 07.06.2018', ''),
(2, 796, 186, 492, '14.10.1905', '11.11.1905', '«Об учреждении при С.Петербургской академии премии имени Преосвященного Ставропольского Агафадора»', '6', '', 'I', '24.05.2018', '01.06.2018', 'Фотокопия сделана: 01.06.2018', ''),
(3, 796, 181, 292, '28.01.1900', '10.02.1900', '&laquo;Об учреждении при Ставропольской духовной семинарии двух стипендий в память 50-летнего существования  семинарии&raquo;', '5', 'входит в отдельный том дел относящихся к Ставропольской Духовной семинарии', 'I', '24.05.2018', '01.06.2018', 'Фотокопия сделана: 01.06.2018', ''),
(4, 796, 185, 504, '08.10.1904', '08.10.1904', '&laquo;О замещении должности инспектора  Ставропольской духовной семинарии&raquo;', '12', 'входит в отдельный том дел относящихся к Ставропольской Духовной семинарии', 'I', '24.05.2018', '01.06.2018', 'Фотокопия сделана: 01.06.2018', ''),
(5, 796, 185, 223, '04.02.1904', '19.03.1904', '&laquo;Об утверждении инспектора Ставропольской духовной семинарии священника Григория Ключарева в степени магистра богословия&raquo;', '10', 'входит в отдельный том дел относящихся к Ставропольской Духовной семинарии', 'I', '24.05.2018', '01.06.2018', 'Фотокопия сделана: 01.06.2018', ''),
(6, 796, 184, 419, '10.10.1903', '24.10.1903', '&laquo;О замещении должности инспектора Ставропольской духовной семинарии&raquo;', '4', 'входит в отдельный том дел относящихся к Ставропольской Духовной семинарии', 'I', '24.05.2018', '01.06.2018', 'Фотокопия сделана: 01.06.2018', ''),
(7, 796, 186, 452, '17.11.1903', '02.12.1903', '&laquo;По возбужденному правлением Ставропольской духовной семинарии вопросу, - совместима ли должность послушника инспектора семинарии с должностью секретаря семинарского правления&raquo;', '4', 'входит в отдельный том дел относящихся к Ставропольской Духовной семинарии', 'I', '24.05.2018', '01.06.2018', 'Фотокопия сделана: 01.06.2018', ''),
(8, 796, 186, 548, '17.12.1905', '23.12.1905', '&laquo;О распределении воспитанников Ставропольской духовной семинарии &ndash; грузин &ndash; по другим разным семинариям&raquo;', '7', 'входит в отдельный том дел относящихся к Ставропольской Духовной семинарии', 'I', '24.05.2018', '01.06.2018', 'Фотокопия сделана: 01.06.2018', ''),
(9, 796, 184, 488, '15.12.1903', '20.01.1904', '&laquo;Об открытии параллельного отделения при V классе Ставропольской духовной семинарии&raquo;', '2', 'входит в отдельный том дел относящихся к Ставропольской Духовной семинарии', 'I', '28.05.2018', '01.06.2018', 'Фотокопия сделана: 01.06.2018', ''),
(10, 796, 187, 576, '27.09.1906', '18.10.1906', '&laquo;По ходатайству о разрешении выдавать некоторым казеннокоштным воспитанникам Ставропольской духовной семинарии на руки деньги, ассигнованные на их содержание, с предоставлением права жить вне пансиона&raquo;', '5', 'входит в отдельный том дел относящихся к Ставропольской Духовной семинарии', 'I', '24.05.2018', '01.06.2018', 'Фотокопия сделана: 01.06.2018', ''),
(11, 796, 187, 520, '01.09.1906', '07.10.1906', '&laquo;Об ограничении приёма в пансион Ставропольской духовной семинарии стипендиатов Владикавказской епархии&raquo;', '2', 'входит в отдельный том дел относящихся к Ставропольской Духовной семинарии', 'I', '29.05.2018', '01.06.2018', 'Фотокопия сделана: 01.06.2018', ''),
(12, 796, 187, 467, '01.08.1906', '19.08.1906', '&laquo;О принятии на синодальные средства содержание параллельных отделений при II, III, IV и V классах Ставропольской духовной семинарии&raquo;', '3', 'входит в отдельный том дел относящихся к Ставропольской Духовной семинарии', 'I', '29.05.2018', '01.06.2018', 'Фотокопия сделана: 01.06.2018', ''),
(13, 796, 184, 2309, '06.11.1903', '26.11.1903', 'По ходатайству Преосвященного Ставропольского об открытии штата причта при Спасо-Преображенской церкви Ставропольского епархиального свечного завода&raquo;', '2', '', 'I', '24.05.2018', '01.06.2018', 'Фотокопия сделана: 01.06.2018', ''),
(14, 796, 184, 4680, '09.01.1903', '31.01.1903', 'По рапорту Преосвященного Ставропольского со сведениями по жалобе Михаила Щербины на Ставропольское Епархиальное начальство&raquo;', '6', '', 'I', '24.05.2018', '01.06.2018', 'Фотокопия сделана: 01.06.2018', ''),
(15, 796, 181, 1589, '15.03.1900', '08.06.1900', '&laquo;О передаче в ведение Ставропольского Епархиального начальства Екатеринодарского подворья Балаклавского Георгиевского монастыря&raquo;', '3', '', 'I', '24.05.2018', '01.06.2018', 'Фотокопия сделана: 01.06.2018', ''),
(16, 796, 189, 853, '28.09.1908', '24.09.1908', '&laquo;Об учреждении в Ставропольской епархии предсъездной подготовительной комиссии и о ежегодном созыве общеепархиальных съездов&raquo;', '7', 'микрофильм', 'I', '24.05.2018', '13.06.2018', 'Фотокопия сделана: 13.06.2018', ''),
(17, 796, 181, 1591, '16.03.1900', '25.03.1900', '&laquo;Об открытии диаконских вакансий при Данииловской г. Ставрополя и Казанской села Татарского Ставропольской епархии&raquo;', '2', '', 'I', '24.05.2018', '13.06.2018', 'Фотокопия сделана: 13.06.2018', ''),
(18, 796, 151, 1573, '29.08.1870', '23.09.1870', '&laquo;О членах Кавказской Духовной Консистории&raquo;', '15', '', 'II', '20.04.2018', '26.04.2018', '27.04.2018', 'на почте в Ставрополе 20.07.2018'),
(19, 796, 153, 1477, '13.02.1872', '02.08.1872', '&laquo;О кончине епископа Кавказского Феофилакта, и назначении на его место викария Харьковской епархии, епископа Сумского Германа&raquo;', '20', '', 'II', '20.04.2018', '27.04.2018', '27.04.2018', 'на почте в Ставрополе 20.07.2018'),
(20, 796, 169, 1463, '10.08.1888', '06.11.1888', '&laquo;По ходатайству Преосвященного Ставропольского о высылке ему копии с указа Святейшего Синода, от 25 августа 1867 г., по делу об отчислении станичных церквей Кубанской и Терской областей из ведения главного священника в ведение Кавказского епархиального начальства&raquo;', '4', '', 'II', '26.04.2018', '26.04.2018', '26.04.2018', 'на почте в Ставрополе 20.07.2018'),
(21, 796, 169, 616, '10.10.1888', '19.10.1888', '&laquo;Об открытии параллельного отделения при втором классе Ставропольской Духовной Семинарии на епархиальные средства&raquo;', '5', 'входит в отдельный том дел относящихся к Ставропольской Духовной семинарии', 'II', '20.04.2018', '24.04.2018', '26.04.2018', 'на почте в Ставрополе 20.07.2018'),
(22, 796, 187, 326, '22.04.1906', '22.04.1906', '&laquo;По телеграмме Преосвященного Ставропольского  о   допущении семинарских воспитанников на епархиальный съезд&raquo;', '3', 'входит в отдельный том дел относящихся к Ставропольской Духовной семинарии', 'II', '20.04.2018', '24.04.2018', '26.04.2018', 'на почте в Ставрополе 20.07.2018'),
(23, 796, 187, 584, '06.10.1906', '31.10.1906', '&laquo;Об открытии параллельных отделений при первом классе Ставропольской Духовной Семинарии&raquo;', '4', 'входит в отдельный том дел относящихся к Ставропольской Духовной семинарии', 'II', '20.04.2018', '26.04.2018', '26.04.2018', 'на почте в Ставрополе 20.07.2018'),
(24, 796, 141, 2040, '27.10.1860', 'в деле не указано', '&quot;Рапорт Преосвященного Евсевия архиепископа Карталинского и Кахетинского, Экзарха Грузии с приложением копии составленной им записки о мерах к успешному распространению христианства на Кавказе&quot;', '46', '', 'III', '20.04.2018', '24.04.2018', '26.04.2018', 'на почте в Ставрополе 20.07.2018'),
(25, 796, 153, 200, '30.07.1872', '17.11.1872', '&quot;По рапорту Кавказского Преосвященного об имуществе владыки Феофилакта. По рапорту Кавказского Преосвященного об имуществе оставшемся по смерти Преосвященного Феофилакта, епископа Кавказского&quot;', '51', '', 'IV', '20.04.2018', '27.04.2018', '27.04.2018', 'на почте в Ставрополе 20.07.2018'),
(26, 796, 187, 638, '10.11.1906', '19.07.1908', '&quot;О беспорядках в Ставропольской Духовной Семинарии&quot;', '43', 'входит в отдельный том дел относящихся к Ставропольской Духовной семинарии', 'V', '20.04.2018', '26.04.2018', '26.04.2018', 'на почте в Ставрополе 20.07.2018'),
(27, 796, 141, 1748, '05.09.1860', '24.10.1860', '&quot;О быти Епископом Старорусским Викарием Новгородской Епархии Ректору Волынской Семинарии Архимандриту Феофилакту&quot;', '34', '', 'VI', '20.04.2018', '26.04.2018', '26.04.2018', 'на почте в Ставрополе 15.08.2018'),
(28, 796, 139, 82, '15.01.1858', '20.03.1865', '&quot;По Высочайшему повелению, объ учреждении общества возстановления Православия на Кавказе&quot;', '130', '', 'VI', '20.04.2018', '26.04.2018', '27.04.2018', 'на почте в Ставрополе 15.08.2018'),
(29, 796, 187, 145, '05.09.1906', '29.09.1906', '&quot;Дело по представлению Преосвященного Ставропольского о награждении Ректора Ставропольской Духовной Семинарии протоиерея Константина Кутепова орденом св. Анны 2-й степени&quot;', '21', 'входит в отдельный том дел относящихся к Ставропольской Духовной семинарии', 'VII', '20.04.2018', '26.04.2018', '26.04.2018', 'на почте в Ставрополе 20.07.2018'),
(30, 796, 187, 518, '27.08.1906', '11.11.1906', '&laquo;О ревизии Ставропольской духовной семинарии&raquo;', '18', 'входит в отдельный том дел относящихся к Ставропольской Духовной семинарии', 'VII', '20.04.2018', '26.04.2018', '26.04.2018', 'на почте в Ставрополе 20.07.2018'),
(31, 796, 169, 716, '12.01.1888', '17.02.1889', '&quot;Дело по отчёту Ставропольского Епархиального начальства о состоянии церковно-приходских школ епархии за 1886/7 учебный год&quot;', '32', '', 'VII', '20.04.2018', '24.04.2018', '26.04.2018', 'на почте в Ставрополе 20.07.2018'),
(32, 796, 182, 2189, '18.07.1901', '27.10.1903', '&quot;Объ укреплении за Воскресенским Мамай-Маджарским и Кавказским Миссионерским монастырями &ndash; участков земли завещанных крестьянкою Феврониею Довжик&quot;', '28', '', 'VIII', '24.05.2018', '', '04.06.2018', 'на почте в Ставрополе 08.08.2018'),
(33, 796, 184, 2293, '30.10.1903', '12.04.1904', '&quot;По ходатайству Преосвященного Ставропольского о преобразовании Покровской женской общины в женский общежительный монастырь, и наименованием его Покровским&quot;', '11', '', 'VIII', '24.05.2018', '', '04.06.2018', 'на почте в Ставрополе 08.08.2018'),
(34, 796, 181, 408, '27.03.1900', '04.09.1900', '&quot;Об открытии при Ставропольском женском епархиальном училище VII дополнительного класса&quot;', '34', '', 'VIII', '24.05.2018', '', '04.06.2018', 'на почте в Ставрополе 08.08.2018'),
(35, 796, 142, 1322, '24.07.1861', '03.04.1963', '&quot;Об увольнении от управления Кавказского Преосвященного Игнатия&quot;', '56', '', 'IX', '20.04.2018', '27.04.2018', '28.04.2018', 'на почте в Ставрополе 20.07.2018'),
(36, 796, 188, 801, '17.04.1907', '25.06.1908', '&quot;Об учреждении в г. Екатернодар, Ставропольской епархии, самостоятельной епископской кафедры&quot;', '80', '', 'X', '20.04.2018', '26.04.2018', '26.04.2018', 'на почте в Ставрополе 15.08.2018'),
(37, 796, 187, 6368, '22.04.1906', '31.05.1906', '&quot;По рапорту Преосвященного Ставропольского о нападении злоумышленников на Покровский женский монастырь&quot;', '3', '', 'XI', '20.04.2018', '26.04.2018', '26.04.2018', 'на почте в Ставрополе 15.08.2018'),
(38, 796, 186, 3008, '04.02.1905', '08.07.1905', '&quot;По представлению Преосвященного Ставропольского об учреждении пяти (5) должностей участковых миссионеров, для помощи Епархиальному миссионеру&quot;', '7', '', 'XI', '20.04.2018', '26.04.2018', '26.04.2018', 'на почте в Ставрополе 15.08.2018'),
(39, 796, 184, 5190, '14.01.1903', '30.01.1903', '&quot;По ходатайству Преосвященного Ставропольского о назначении Секретаря Консистории титулярного советника Владимира Никитина редактором оффициальной части Ставропольских епархиальных ведомостей&quot;', '3', '', 'XI', '20.04.2018', '26.04.2018', '26.04.2018', 'на почте в Ставрополе 15.08.2018'),
(40, 796, 183, 4871, '12.10.1902', '10.01.1903', '&quot;По ходатайству Преосвященного Ставропольского о разъяснении : имеют &ndash; ли станичныя общества распоряжаться старым материалом остающимся от ремонта и перестройки церквей, колоколен и оград&quot;', '12', '', 'XI', '20.04.2018', '26.04.2018', '26.04.2018', 'на почте в Ставрополе 15.08.2018'),
(41, 796, 183, 4624, '16.10.1902', '19.11.1902', '&quot;По ходатайству Преосвященного Ставропольского о предании указаний относительно того, можно ли духовенству вести религиозно-нравственные чтения в помещениях, предназначенных для театральных представлений&quot;', '5', '', 'XI', '20.04.2018', '26.04.2018', '26.04.2018', 'на почте в Ставрополе 15.08.2018'),
(42, 796, 183, 632, '07.08.1902', '22.08.1902', '&quot;Об утверждении иеромонаха Геннадия в должности настоятеля Воскресенского Мамай-Маджарского монастыря, Ставропольской епархии&quot;', '7', '', 'XI', '20.04.2018', '26.04.2018', '26.04.2018', 'на почте в Ставрополе 15.08.2018'),
(43, 796, 188, 7653, '18.05.1907', '13.10.1907', '&quot;По представлению Преосвященного Ставропольского об изменении порядка выпуска Ставропольских епархиальных Ведомостей&quot;', '3', '', 'XI', '20.04.2018', '26.04.2018', '26.04.2018', 'на почте в Ставрополе 15.08.2018'),
(44, 796, 188, 7469, '02.01.1907', '13.02.1907', '&quot;О назначении и.д. Секретаря Ставропольской Духовной Консистории надворнаго советника Николая Дивногорскаго редактором оффициального отдела Ставропольских епархиальных Ведомостей&quot;', '3', '', 'XI', '20.04.2018', '26.04.2018', '26.04.2018', 'на почте в Ставрополе 15.08.2018'),
(45, 796, 188, 7017, '21.03.1907', '15.04.1907', '&quot;По рапорту Преосвященного Ставропольского о краже вещей и денег из Успенской кладбищенской церкви гор. Ставрополя&quot;', '3', '', 'XI', '20.04.2018', '26.04.2018', '26.04.2018', 'на почте в Ставрополе 15.08.2018'),
(46, 796, 187, 6526, '18.11.1906', '22.12.1906', '&quot;По рапорту Преосвященного Ставропольского об убийстве двух иеромонахов и двух послушников молитвенного дома пригорода Екатеринодара&quot;', '3', '', 'XI', '20.04.2018', '26.04.2018', '26.04.2018', 'на почте в Ставрополе 15.08.2018'),
(47, 796, 187, 576, '27.09.1906', '18.10.1906', '&quot;По ходатайству о разрешении выдавать некоторым казённокоштным воспитанникам Ставропольской Духовной Семинарии на руки деньги, ассигнованные на их содержание с представлением права жить вне пансиона&quot;', '5', 'дубль', 'XI', '20.04.2018', '26.04.2018', '26.04.2018', 'на почте в Ставрополе 15.08.2018'),
(48, 796, 187, 520, '01.09.1906', '07.10.1906', '&quot;Об ограничении приёма в пансион Ставропольской Духовной Семинарии стипендиатов Владикавказской епархии&quot;', '2', 'дубль', 'XI', '20.04.2018', '26.04.2018', '26.04.2018', 'на почте в Ставрополе 15.08.2018'),
(49, 796, 187, 467, '01.08.1906', '19.08.1906', '&quot;О принятии на синодальные средства содержания параллельных отделений при II, III, и VI классах Ставропольской Духовной Семинарии&quot;', '4', 'дубль', 'XI', '20.04.2018', '26.04.2018', '26.04.2018', 'на почте в Ставрополе 15.08.2018'),
(50, 796, 184, 419, '10.10.1903', '24.10.1903', '&quot;О замещении должности инспектора Ставропольской Духовной Семинарии&quot;', '4', 'дубль', 'XI', '20.04.2018', '26.04.2018', '26.04.2018', 'на почте в Ставрополе 15.08.2018'),
(51, 831, 1, 156, '17/30.09. 1918', '19.09 (2.10) 1918', '&laquo;О возведении Архиепископа Кавказского и Ставропольского Агафодора в сан Митрополита&raquo;', '5', 'микрофильм', 'XII', '', '', '', ''),
(52, 831, 1, 199, '', '', '&laquo;О положении дел в Бакинской епархии&raquo;', '25', '&bull;Микрофильм &bull;Переснято в РГИА на айфон 26.04.2018 &bull;Распечатано 29.04.2018', 'XII', '20.04.2018', '26.04.2018', 'перефотографировано 26.04.2018 12:52-13:09', ''),
(53, 831, 1, 200, '', '', '&laquo;О положении дел во Владикавказской епархии&raquo;', '11', '', 'XII', '20.04.2018', '26.04.2018', 'отфотографировано 26.04.2018 13:09-13:15', ''),
(54, 796, 151, 1796, '', '', '&laquo;Об учреждениях по управлению Кавказом и Кавказским краем&raquo;', '5', '&bull;фото распечатано в храме 29.04.2018', 'XII', '', '', '', ''),
(55, 831, 1, 128, '', '', '&laquo;Доклад Кавказского экзарха митрополита Кирилла&raquo;', '5', '', 'XII', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'stav-ortodox', '111'),
(2, 'stav', '111'),
(3, 'stav1', '111'),
(4, 'stav-ortodox2', '1'),
(5, 'stav2', '1'),
(6, 'stav3', '1'),
(7, 'sta4', '1'),
(8, 'stav11', '1'),
(9, 'stav111', '1'),
(10, 'stavsadas', 'sac'),
(11, 'adv', '1'),
(12, 'stav-ortodox1', '111'),
(13, 'stav1agwegwe', '1'),
(14, 'sacsa', '1'),
(15, 'sacsa', '1'),
(16, 'dsvdsv', '1'),
(17, 'dsvdsv', '1'),
(18, '23rr', '1'),
(19, 'stavor811', '1'),
(20, 'qwqwqw', 'q');

-- --------------------------------------------------------

--
-- Структура таблицы `user_groups`
--

CREATE TABLE `user_groups` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_groups`
--

INSERT INTO `user_groups` (`user_id`, `group_id`) VALUES
(1, 1),
(2, 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bread`
--
ALTER TABLE `bread`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `den_slugbi`
--
ALTER TABLE `den_slugbi`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `path_image`
--
ALTER TABLE `path_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `publishing_blocks`
--
ALTER TABLE `publishing_blocks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `publishing_post`
--
ALTER TABLE `publishing_post`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `raspisanie`
--
ALTER TABLE `raspisanie`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reestr_comps`
--
ALTER TABLE `reestr_comps`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reestr_rgia`
--
ALTER TABLE `reestr_rgia`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bread`
--
ALTER TABLE `bread`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `den_slugbi`
--
ALTER TABLE `den_slugbi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `path_image`
--
ALTER TABLE `path_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `publishing_blocks`
--
ALTER TABLE `publishing_blocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `publishing_post`
--
ALTER TABLE `publishing_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT для таблицы `raspisanie`
--
ALTER TABLE `raspisanie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT для таблицы `reestr_comps`
--
ALTER TABLE `reestr_comps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT для таблицы `reestr_rgia`
--
ALTER TABLE `reestr_rgia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
