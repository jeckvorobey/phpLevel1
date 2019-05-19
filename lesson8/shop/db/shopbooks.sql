-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Май 20 2019 г., 00:11
-- Версия сервера: 5.7.26-0ubuntu0.18.04.1
-- Версия PHP: 7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shopbooks`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `id_user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_good` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `id_user`, `id_good`, `count`, `date`) VALUES
(2, '1', 4, 1, '2019-05-19 18:45:04');

-- --------------------------------------------------------

--
-- Структура таблицы `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `delivery`
--

INSERT INTO `delivery` (`id`, `name`, `price`) VALUES
(1, 'Самовывоз', 0),
(2, 'Курьером по городу', 300),
(3, 'Почтой россии', 500);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `imgName` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `annotation` text NOT NULL,
  `pubHouse` varchar(255) NOT NULL,
  `series` varchar(255) NOT NULL,
  `yearPublishing` int(11) NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `author`, `title`, `imgName`, `description`, `annotation`, `pubHouse`, `series`, `yearPublishing`, `isbn`, `price`) VALUES
(1, 'Федор Достоевский', 'Идиот', 'idiot.png', 'Идиот - один из любимых романов Достоевского, в котором отразились его\r\nхудожественные принципы и нравственно-философская позиция.', 'Идиот - один из любимых романов Достоевского, в котором отразились его художественные принципы и\r\nнравственно-философская позиция.Достоевский писал: Давно уже мучила меня одна мысль, но я боялся из неё сделать роман,\r\nпотому что мысль слишком трудная и я к ней не приготовлен,хотя мысль вполне соблазнительная и я люблю её.\r\nИдея эта - изобразить вполне прекрасного человека.\r\nТруднее этого, по-моему, быть ничего не может, в наше время особенно.', 'АСТ', 'Школьное чтение', 2018, '978-5-17-110413-9', 100),
(2, 'Наталья Жарова', 'Невеста по приказу', 'NevestaPoPrikazu.png', 'Только пожелай посетить другие миры, доверься случайно встреченному магу - и ты уже Невеста по приказу!', 'Только пожелай посетить другие миры, доверься случайно встреченному магу и ты уже Невеста по приказу! И что теперь делать: выйти замуж и отдать свободу и все обретенные богатства совершенно незнакомому лорду или довести его до белого каления, шокируя всеми доступными способами? Выбор, который сделала Лиля, очевиден. Вот только путь к заветному нет намного длиннее и опаснее, чем может показаться вначале ведь в игру вступят тайные враги, мастера изощренных придворных интриг', 'Альфа-книга', 'Юмористическая серия', 2018, '978-5-9922-2447-5', 150),
(3, 'Мелинда Солсбери', 'Дочь Пожирательницы Грехов', 'DochPosgiratelniciGrehov.jpg', 'Серия-бестселлер в 13 странах мира! Дебютное фэнтези, которое стало сенсационно успешным!', 'Серия-бестселлер в 13 странах мира! Дебютное фэнтези, которое стало сенсационно успешным! Твилла — избранная. Ей предстоит стать женой принца и управлять королевством. Но подарки Богов имеют свою цену. В жилах девушки струится смертельно опасный яд. Любой, кто представляет угрозу трону, падет от одного ее прикосновения. Неудивительно, что Твиллу боятся и ненавидят. И лишь ее новый стражник Лейф увидел в ней не палача, а испуганную девушку, которая мечтает изменить свою судьбу. Но при дворе Лормира, где в чести коварство и ложь, не многим дано это право.', 'Freedom', 'Фэнтези', 2018, '978-5-04-090527', 200),
(4, 'Мет Фицджеральд', 'Как сильно ты этого хочешь?', 'KakSilnoTiEtogoHochesh.png', 'Великолепная книга по спортивной психологии, от которой вы не сможете оторваться.', 'Ум — это и есть атлет. Брюс Куртене, «Сила личности» Великолепная книга по спортивной психологии, от которой вы не сможете оторваться. Построена на историях элитных спортсменов, их ошибках и уроках. Будет интересна и полезна всем — и спортсменам-любителям, и тем, кто не занимается спортом на результат. Величайшие достижения в спорте случаются благодаря мозгу, а не телу.  С этой книгой вы окунетесь в перипетии дюжины великих соревнований, чтобы узнать ответ на самый важный вопрос в видах спорта на выносливость: «Как сильно ты этого хочешь?»  В своей книге Мэт Фицджеральд — один из самых ярких авторов современности, пишущих на тему спорта, — сумел создать впечатляющую подборку примеров из реальной жизни, демонстрирующих, как восприятие усилий и прочие психологические факторы влияют на нашу выносливость.', 'Манн, Иванов и Фербер', 'спорт-драйв', 2017, '978-5-00117-458-5', 200),
(5, 'Джек Лондон', 'Сердца трех', 'serdcatreh.jpg', 'Роман \"Сердца трёх\" (1916) был написан Джеком Лондоном незадолго до его смерти и стал юбилейной работой автора - его пятидесятой книгой.', 'Роман \"Сердца трёх\" (1916) был написан Джеком Лондоном. Джек Лондон (1876-1916) - известный американский писатель и общественный деятель. Роман \"Сердца трёx\" (1916) был написан Джеком Лондоном незадолго до его смерти и стал юбилейной работой автора - его пятидесятой книгой. В предисловии к роману Автор написал, что взялся за работу по причине отсутствия новых сюжетов для кинематографа. И действительно, роман, как и многие другие произведения писателя, был неоднократно экранизирован. Главный герой Френсис Морган — молодой человек, потомок известного пирата Генри Моргана — отправляется на поиски сокровищ своего знаменитого предка. В пути он встречается со своим кузеном Генри Морганом, который тоже ищет эти сокровища. Героев ждут опасные приключения, неизведанные земли, любовь прекрасной Леонсии, в которую влюблены оба брата… Для среднего школьного возраста', 'АСТ', 'Школьное чтение', 2016, '978-5-17-108274-1', 100);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_delivery` int(11) NOT NULL,
  `index` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regionArea` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `str` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `corps` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flat` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `id_user`, `id_status`, `id_delivery`, `index`, `region`, `regionArea`, `city`, `str`, `house`, `corps`, `flat`, `phone`, `date`) VALUES
(1, 1, 2, 1, '', '', '', '', '', '', '', '', '24324214', '2019-05-17 20:07:01'),
(2, 1, 4, 2, '', '', '', 'Смоленск', 'пр.ленина', '1', '5', '25', '556252155', '2019-05-18 18:02:32'),
(3, 1, 2, 2, '', '', '', 'Смоленск', 'пр.ленина', '1', '5', '25', '89995558877', '2019-05-18 18:16:02'),
(4, 1, 2, 3, '589657', 'Тверская', 'Калининский', 'Торжок', 'ул.Советская', '5', '', '6', '87775556633', '2019-05-18 18:23:54'),
(5, 2, 2, 2, '', '', '', 'Смоленск', 'ул.б.советская', '6', '5', '58', '85553332288', '2019-05-18 18:26:55');

-- --------------------------------------------------------

--
-- Структура таблицы `order_goods`
--

CREATE TABLE `order_goods` (
  `id` int(11) NOT NULL,
  `id_orders` int(11) NOT NULL,
  `id_good` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `order_goods`
--

INSERT INTO `order_goods` (`id`, `id_orders`, `id_good`, `count`) VALUES
(1, 1, 4, 2),
(2, 1, 3, 2),
(3, 1, 2, 1),
(4, 1, 1, 1),
(5, 2, 5, 2),
(6, 2, 2, 2),
(7, 2, 1, 4),
(8, 2, 3, 1),
(9, 2, 4, 3),
(10, 3, 5, 1),
(11, 4, 4, 1),
(12, 4, 5, 1),
(13, 5, 1, 1),
(14, 5, 2, 1),
(15, 5, 3, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `stat`
--

CREATE TABLE `stat` (
  `id` int(11) NOT NULL,
  `nameStatus` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `stat`
--

INSERT INTO `stat` (`id`, `nameStatus`) VALUES
(1, 'Поступил'),
(2, 'Новый'),
(3, 'В обработке'),
(4, 'Отправлен'),
(5, 'Доставлен'),
(6, 'Отменен');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `date_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `surname`, `name`, `middleName`, `phone`, `email`, `role`, `date_create`) VALUES
(1, 'Admin', '41ebc4d177abc6a5f3dd56f8f557c31d67796e21e9bfe18b28907e0334f08e21', 'Иванов', 'Иван', 'Иванович', '+7(951)965-65-89', 'mail@ya.ru', 1, '2019-04-30 10:56:36'),
(2, 'user', '21ead06ac30b0654d1d3387c7147b66d222fe2d436c180a4e1dd7b27e4769d52', 'Петров', 'Петр', 'Петрович', '+7(586)523-54-85', 'test@test.ru', 0, '2019-04-30 10:56:36'),
(3, 'User2', '41ebc4d177abc6a5f3dd56f8f557c31d67796e21e9bfe18b28907e0334f08e21', 'Васильев', 'Вася', 'Васильевич', '+7(956)589-55-55', 'google@ya.ru', 0, '2019-04-30 16:02:04'),
(4, 'user3', '21ead06ac30b0654d1d3387c7147b66d222fe2d436c180a4e1dd7b27e4769d52', 'Сидоров', 'сидр', 'сидорович', '+7(985)565-48-66', 'test1@ya.ru', 0, '2019-04-30 16:10:01');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `delivery`
--
ALTER TABLE `delivery`
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
-- Индексы таблицы `order_goods`
--
ALTER TABLE `order_goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `stat`
--
ALTER TABLE `stat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `order_goods`
--
ALTER TABLE `order_goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `stat`
--
ALTER TABLE `stat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
