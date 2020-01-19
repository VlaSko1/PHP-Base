-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 19 2020 г., 17:00
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `good_id` int(11) NOT NULL,
  `session_id` text NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `quantity` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `good_id`, `session_id`, `user_id`, `quantity`) VALUES
(161, 4, '5cj4bd299ka70pmqf1ravh92b0k50knt', 0, 2),
(162, 2, '9dsg0i9sluv7heplvkn4qae92gl2kbeg', 0, 2),
(163, 2, '5dh1le9hcbn6jkic2i1i1k6ma50iro66', 0, 2),
(164, 4, 'e1lpd69tpnbg37rbh7n4p5f6bfpb6692', 0, 3),
(165, 4, 'nm9rhn00lk2v9heitgo5d270c649v20k', 0, 3),
(166, 4, '0drcuvebi3o6oliuhd1jg9j1erqr2at6', 0, 1),
(167, 2, 'pfu0a3qibqrustid5542bdgl66m18g93', 0, 1),
(168, 4, '6ndka5q8qghegqup4fdhbesiio4510ti', 0, 1),
(169, 4, '1fbe7h0776402ta7dgh2t0sr7lb2k33i', 0, 1),
(170, 4, 'b19n4ok8o6ubpep12p5hnsiem3k8rplo', 0, 1),
(171, 2, '1clegjjk4d10l9pmuuun1n4dvqcot0ve', 0, 1),
(172, 4, 's9iusa4rprgbs85taovhm1s39bfiav6e', 0, 1),
(173, 4, '2gqd3a3i7sn5hshcphb0sa8opnb8jk3t', 0, 1),
(174, 4, 'uqqb2dvgc1jb70v3m4vbkupcji6c7u0k', 0, 1),
(175, 4, 'espn2bjr1ncrqre63l0e7jhl0jl4mq67', 0, 1),
(176, 4, 'q7kj78afjb31n9h9rbudt6j8rcoldb12', 0, 1),
(177, 4, 'hamf4mugtqdhjkb4iar14gglh81ph9mu', 0, 1),
(178, 4, 'tbqg1rbetb4jlt26mj9qfqsgpth4res9', 0, 1),
(179, 4, 'rbgsrp24sicrudamc8ksoliutp2gvtec', 0, 1),
(181, 4, 'ehgk38a8bfh9aouqlpcubt2gsk7i23qd', 0, 2),
(182, 4, '6g37vnofii6ci8hgd7effmfs4u9lcpbt', 0, 1),
(183, 4, '6dl3knqm33stt5nqlttvb3hvsmfecmad', 0, 1),
(184, 4, '9gmf6qde17k8nr3ok6dqgr64p4i8uqqf', 0, 1),
(185, 4, 'oqkqqkdh5s9hl7tnc0vc415nhrb93nc1', 0, 3),
(186, 4, 'gav11rm2462uhbqkqsj4am63bl52asod', 0, 1),
(187, 4, '2h7bgb905hbsc8ku6vnfqg2sol9btc8k', 0, 1),
(188, 2, 'f3v4qtb41cupc5jrgvc24io8reqpo0rl', 0, 1),
(189, 4, '4dgedaia146p3c6rl8uvr0sorv32c34v', 0, 1),
(190, 4, 'mpbqvthpaqk054s9g5tjs7e9nsejgu77', 0, 1),
(191, 4, '1mpd0rbiv06ff3bdi2asfmf2ph4er02m', 0, 3),
(192, 4, 'jq754d8n44o46r8movuuqd0vdj271aee', 0, 1),
(194, 2, '97or33ds86357efbr5sbqo4pib6brhuu', 0, 4),
(195, 4, '7ul8139c00ds1308ql1j3noqjq10rcc8', 0, 1),
(196, 4, 'og9dh8cs3og7rjptrv980l8putevr6t3', 0, 1),
(197, 4, 'e3rjol10hsmr2r3hm3dejhu087tmue8b', 0, 2),
(198, 4, 'vlhk1tghgn5hur3ahblgobs4rjf0jlhg', 0, 3),
(199, 4, 'u6eaur7tj0kettq47jjd92bntr7bsfd0', 0, 1),
(200, 4, '6oij5i4f6ta3p5d6u9lfodeouic3ke21', 0, 3),
(201, 4, 'e4tm05p8esnlgdg124l2c096vruaidlp', 0, 3),
(202, 4, 'h4ha01jp28mj4ei8rm3nhnhvl2uurio5', 0, 3),
(203, 2, 'ma5pv0sb2o3ajnt006do8surrsaoma9p', 0, 4),
(204, 4, 'glb2g32nqs4s21dfeuj41r25vcpaqvp8', 0, 1),
(205, 2, 'glb2g32nqs4s21dfeuj41r25vcpaqvp8', 0, 1),
(206, 3, 'glb2g32nqs4s21dfeuj41r25vcpaqvp8', 0, 3),
(207, 4, 'o3r2sr5nl45caqusjc228u9rccvcrs9j', 0, 1),
(208, 2, 'o3r2sr5nl45caqusjc228u9rccvcrs9j', 0, 2),
(209, 3, 'o3r2sr5nl45caqusjc228u9rccvcrs9j', 0, 2),
(210, 2, 'maoivg4c85g835ge6e476qabntoluc1c', 0, 1),
(211, 3, 'maoivg4c85g835ge6e476qabntoluc1c', 0, 2),
(212, 1, 'maoivg4c85g835ge6e476qabntoluc1c', 0, 1),
(213, 4, '4b5b6eaio7ai4p86edq2tl3bhlq7udja', 0, 3),
(214, 2, '4b5b6eaio7ai4p86edq2tl3bhlq7udja', 0, 3),
(215, 3, '4b5b6eaio7ai4p86edq2tl3bhlq7udja', 0, 2),
(216, 4, '1gq322u306huj1pl4tq59hirfmpno2ec', 0, 2),
(217, 2, '1gq322u306huj1pl4tq59hirfmpno2ec', 0, 2),
(218, 1, '1gq322u306huj1pl4tq59hirfmpno2ec', 0, 1),
(221, 2, '4ipjr40jbptdeofdg9ek7sqvo0bg7nlj', 0, 3),
(222, 4, '4ipjr40jbptdeofdg9ek7sqvo0bg7nlj', 0, 3),
(223, 2, 'rknntbinllskr1g6o0l3banl3apbtnv2', 0, 2),
(224, 3, 'rknntbinllskr1g6o0l3banl3apbtnv2', 0, 3),
(225, 4, '0q3hla3bpg254cfpv5l67lknbvkj5r46', 0, 4),
(226, 2, '0q3hla3bpg254cfpv5l67lknbvkj5r46', 0, 3),
(227, 4, 'ckmu0m1k9qhenrsd7hen1gmmqbonlkm8', 0, 5),
(228, 3, 'ckmu0m1k9qhenrsd7hen1gmmqbonlkm8', 0, 3),
(229, 1, 'ckmu0m1k9qhenrsd7hen1gmmqbonlkm8', 0, 1),
(230, 2, 'ckmu0m1k9qhenrsd7hen1gmmqbonlkm8', 0, 1),
(234, 1, 'rr7lkoo4t4l57ai0ha6lip3ksfi6enso', 0, 1),
(235, 3, 'rr7lkoo4t4l57ai0ha6lip3ksfi6enso', 0, 1),
(236, 2, 'rr7lkoo4t4l57ai0ha6lip3ksfi6enso', 0, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Спорт'),
(2, 'Политика');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `message`, `user_id`) VALUES
(3, 'Владимир', 'Все замечательно.', 0),
(4, 'Денис', 'Здорово!!', 0),
(8, 'Сергей', 'Всем добра', 0),
(9, 'Владимир', 'Тестирование', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `price` text NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `image`, `description`, `price`, `views`) VALUES
(1, 'Калькулятор', '01.jpg', 'Этот калькулятор очень надежен и имеет эргономичный дизайн', '221', 3),
(2, 'Шариковая ручка', '02.jpg', 'Прекрасная шариковая ручка. Темный цвет чернил, прекрасно лежит в руке, писать одно удовольствие.', '55', 6),
(3, 'Механический карандаш', '03.jpg', 'Механический карандаш очень удобен в обращении, чертит ровные линии, не требует сильного нажима.', '60', 6),
(4, 'Органайзер салатовый', '04.jpg', 'Необычный органайзер салатового цвета. Будет интересным решением для любого интерьера. Удобен и вместителен.', '190', 35);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `session_id` text NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `session_id`, `status_id`) VALUES
(22, 'Владимир', '1212212', '6dl3knqm33stt5nqlttvb3hvsmfecmad', 3),
(24, 'Владимир', '1212212', 'oqkqqkdh5s9hl7tnc0vc415nhrb93nc1', 3),
(30, 'Владимир', '1212212', '1mpd0rbiv06ff3bdi2asfmf2ph4er02m', 1),
(31, 'Владимир', '1212212', 'jq754d8n44o46r8movuuqd0vdj271aee', 4),
(32, 'Владимир', '1212212', '97or33ds86357efbr5sbqo4pib6brhuu', 2),
(33, 'Владимир', '1212212', '7ul8139c00ds1308ql1j3noqjq10rcc8', 1),
(34, 'Владимир', '1212212', 'og9dh8cs3og7rjptrv980l8putevr6t3', 3),
(36, 'Владимир', '1212212', 'vlhk1tghgn5hur3ahblgobs4rjf0jlhg', 1),
(37, 'Владимир', '1212212', 'u6eaur7tj0kettq47jjd92bntr7bsfd0', 1),
(39, 'Владимир', '1212212', 'e4tm05p8esnlgdg124l2c096vruaidlp', 1),
(42, 'Владимир', '2323323', 'glb2g32nqs4s21dfeuj41r25vcpaqvp8', 5),
(43, 'Владимир', '1212212', 'o3r2sr5nl45caqusjc228u9rccvcrs9j', 3),
(44, 'Владимир', '77777777777', 'maoivg4c85g835ge6e476qabntoluc1c', 4),
(46, 'Денис', '1212212', '1gq322u306huj1pl4tq59hirfmpno2ec', 2),
(47, 'Петр', '111111111', '4ipjr40jbptdeofdg9ek7sqvo0bg7nlj', 5),
(48, 'Василий', '1234535', 'rknntbinllskr1g6o0l3banl3apbtnv2', 3),
(49, 'Сергей', '234234', '0q3hla3bpg254cfpv5l67lknbvkj5r46', 4),
(50, 'Илья', '79804561234', 'ckmu0m1k9qhenrsd7hen1gmmqbonlkm8', 1),
(51, 'Константин', '79083456789', 'rr7lkoo4t4l57ai0ha6lip3ksfi6enso', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `status_order`
--

CREATE TABLE `status_order` (
  `id` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `status_order`
--

INSERT INTO `status_order` (`id`, `status`) VALUES
(1, 'обработка'),
(2, 'отменен'),
(3, 'отправлен'),
(4, 'получен'),
(5, 'оплачен');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `pass` text NOT NULL,
  `hash` text NOT NULL,
  `rights` varchar(25) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `hash`, `rights`) VALUES
(1, 'admin', '$2y$10$q9cx2R0eAg/l4tW/yublge2DgIwRx6E8ALr3ro2iyTmrFQuGMZtiO', '7933059395e2447cf58c1f2.59244485', 'administrator');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `status_order`
--
ALTER TABLE `status_order`
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
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT для таблицы `status_order`
--
ALTER TABLE `status_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
